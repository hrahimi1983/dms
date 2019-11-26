<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['logout']);
    }

    /**
     * Login method
     *
     * @return \Cake\Http\Response|null
     */
    public function login()
    {
        $this->viewBuilder()->setLayout('login');
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $user=$this->Users->findById($user['id'])->contain(['groups'=>['permissions']])->first()->toArray();
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Your username or password is incorrect.');
        }
    }

    /**
     * Login method
     *
     * @return \Cake\Http\Response|null
     */
    public function dashboard()
    {  

        if (in_array($this->Auth->user('Groups.id'), [1,2,3])) {
            $documents =$this->Users->Documents->find()->contain(['Auths','Types']);
            $this->set(compact('documents'));
            $this -> render('dashboard_admin');
          }else{
            $this -> render('dashboard_user');
            $this->set(compact('types','tags'));

          }

    }

    /**
     * unlinkDocument method
     *
     * @return \Cake\Http\Response|null
     */
    public function unlinkDocument($user_id,$document_id)
    { 
        $this->request->allowMethod(['post','unlinkDocument']);
  
        $documents = $this->Users
            ->Documents
            ->find()
            ->where(['id'=>$document_id])
            ->toList();
        $user = $this->Users->get($user_id);
        if ($this->Users->Documents->unlink($user, $documents)) {
            $this->Flash->success(__('The relation has been deleted.'));
        } else {
            $this->Flash->error(__('The relation could not be deleted. Please, try again.'));
        }
        return $this->redirect($this->referer());     
    }


    /**
     * linkDocument method
     *
     * @return \Cake\Http\Response|null
     */
    public function linkDocument($document_id)
    { 
        $this->viewBuilder()->setLayout('blank');
        $users = $this->paginate($this->Users,['limit' => 200]);
        $this->set(compact('users','document_id'));
   
    }

    public function link($user_id,$document_id)
    {
        $this->request->allowMethod(['post','get','linkDocument']);
  
        $documents = $this->Users
            ->Documents
            ->find()
            ->where(['id'=>$document_id])
            ->toList();
        $user = $this->Users->get($user_id);
        if ($this->Users->Documents->link($user, $documents)) {
            $this->Flash->success(__('The relation has been made.'));
        } else {
            $this->Flash->error(__('The relation could not be made. Please, try again.'));
        }
        return $this->redirect($this->referer());    
    }


    /**
     * reset-password method create random new password and send it to customer
     *
     * @return \Cake\Http\Response|null
     */
    public function resetPassword()
    {    
        $this->viewBuilder()->setLayout('login');
        if ($this->request->is(['patch', 'post', 'put'])) {
           
            $user=$this->Users->findByEmail($this->request->getData('email'))->first();
            $password = $this->Users->randomString();
            $user->password = $password ;
            if ($this->Users->save($user)) {
                $email = new Email();
                $email
                    ->setEmailFormat('both')
                    ->setTo($this->request->getData('email'))
                    ->setFrom('info@solutions-apps.com')
                    ->setSubject(__('Your password reset request'))
                    ->setViewVars(['user_name' => $user->name,'password'=>$password])
                    ->setTemplate('password','default')
                    ->send();
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
    }
    

    /**
     * logout method
     *
     *@return 
     */
    public function logout()
    {
        $this->Flash->success('You are now logged out.');
        return $this->redirect($this->Auth->logout());
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $users = $this->Users->find()->contain(['Groups']);
        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Groups', 'Documents'=>['Auths','Types']]
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $groups = $this->Users->Groups->find('list', ['offset' =>1,'limit' => 200]);
        $this->set(compact('user', 'groups', 'documents'));
    }

     /**
     * multiSearch method
     * @param string|null $text text to be search with
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function multiSearch($text=null)
    {

        $this->viewBuilder()->setClassName('Json');
        $users = $this->Users->find()->where(["name LIKE"=>'%'.$text.'%','email LIKE'=>'%'.$text.'%']);
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Documents']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $groups = $this->Users->Groups->find('list', ['offset' =>1,'limit' => 200]);
        $this->set(compact('user', 'groups'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

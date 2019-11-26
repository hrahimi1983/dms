<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Filesystem\Folder;
use Spatie\PdfToText\pdf;

/**
 * Documents Controller
 *
 * @property \App\Model\Table\DocumentsTable $Documents
 *
 * @method \App\Model\Entity\Document[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DocumentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $documents = $this->Documents->find()->contain(['Auths', 'Types']);
        $this->set(compact('documents'));
    }

    /**
     * View method
     *
     * @param string|null $id Document id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $document = $this->Documents->get($id, [
            'contain' => ['Auths', 'Types', 'Tags', 'Users']
        ]);

        $this->set('document', $document);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $document = $this->Documents->newEntity();
        if ($this->request->is('post')) {
            $to_path = TMP .  $this->Auth->User('id') . DS .
                $this->request->getData()['type_id'] . DS .
                date('dmYHis').'_'.$this->request->getData()['file']['name'];
            $data =  $this->request->getData();
            $data['path']=$to_path;
            $data['auth_id'] = (integer)$this->Auth->User('id');
            $document = $this->Documents->patchEntity($document, $data);
            $folder = new Folder(TMP .  $this->Auth->User('id') . DS .
                $this->request->getData()['type_id'],true,755);
            if ($this->Documents->save($document)) {
                if (move_uploaded_file($this->request->getData()['file']['tmp_name'], $to_path)) {
                    $this->Flash->success(__('The document has been saved.'));                
                }
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The document could not be saved. Please, try again.'));
        }
        $auths = $this->Documents->Auths->find('list',['conditions'=>['id'=>$this->Auth->User('id')]]);
        $types = $this->Documents->Types->find('list', ['limit' => 200]);
        $users = $this->Documents->Users->find('list', ['limit' => 200]);
        $this->set(compact('document', 'auths', 'types', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Document id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $document = $this->Documents->get($id, [
            'contain' => ['Tags', 'Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $document = $this->Documents->patchEntity($document, $this->request->getData());
            if ($this->Documents->save($document)) {
                $this->Flash->success(__('The document has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The document could not be saved. Please, try again.'));
        }
        $auths = $this->Documents->Auths->find('list', ['limit' => 200]);
        $types = $this->Documents->Types->find('list', ['limit' => 200]);
        $tags = $this->Documents->Tags->find('list', ['limit' => 200]);
        $users = $this->Documents->Users->find('list', ['limit' => 200]);
        $this->set(compact('document', 'auths', 'types', 'tags', 'users'));
    }

    public function pdfParser($id = null){
        if ($id != null) {
            // Parse pdf file and build necessary objects.
            $document = $this->Documents->get($id);
            // Parse pdf file and build necessary objects.
            $parser = new pdf($document->path);
              echo $parser->getText();
            exit;

            $pdf    = $parser->parseFile($document->path);
             
            // Retrieve all pages from the pdf file.
            $pages  = $pdf->getPages();
             
            // Loop over each page to extract text.
            foreach ($pages as $page) {
                echo $page->getText();
            }
            
            exit;
 
        }else{
            $this->Flash->error(__('Please choose document than start this function.'));

        }

    }

    /**
     * download method
     *
     * @param string|null $id Document id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function download($id = null)
    {

        $document = $this->Documents->get($id);
        return $this->response->withFile(
            $document->path,
            ['download' => true, 'name'=> $document->title]
        );
    }

        /**
     * download method
     *
     * @param string|null $id Document id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function toBrowser($id = null)
    {

        $document = $this->Documents->get($id);
        return $this->response->withFile(
            $document->path);
    }

    /**
     * Delete method
     *
     * @param string|null $id Document id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $document = $this->Documents->get($id);
        if ($this->Documents->delete($document)) {
            $this->Flash->success(__('The document has been deleted.'));
        } else {
            $this->Flash->error(__('The document could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
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
        $documents = $this->Documents->find()
            ->contain(['Auths','Types','Tags','Users'],true)
            ->where(['OR'=>[
                "title LIKE"=>'%'.$text.'%',
                'Auths.name LIKE'=>'%'.$text.'%',
                ]
            ])
            ;
        $this->set(compact('documents'));
        $this->set('_serialize', ['documents']);
    }
}

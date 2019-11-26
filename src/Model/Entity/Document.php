<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Document Entity
 *
 * @property int $id
 * @property int|null $auth_id
 * @property string $title
 * @property int $type_id
 * @property string $path
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $auth
 * @property \App\Model\Entity\Type $type
 * @property \App\Model\Entity\Tag[] $tags
 * @property \App\Model\Entity\User[] $users
 */
class Document extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'auth_id' => true,
        'title' => true,
        'type_id' => true,
        'path' => true,
        'created' => true,
        'modified' => true,
        'auth' => true,
        'type' => true,
        'tags' => true,
        'users' => true
    ];
}

<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Image Entity
 *
 * @property string $id
 * @property string $name
 * @property string $type
 * @property string $path
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Content[] $contents
 */
class Image extends Entity
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
        'name' => true,
        'type' => true,
        'path' => true,
        'created' => true,
        'contents' => true
    ];
}

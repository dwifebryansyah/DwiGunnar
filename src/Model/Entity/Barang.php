<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Barang Entity
 *
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property int $harga
 * @property int $stok
 * @property string $code_item
 * @property \Cake\I18n\FrozenDate $date
 * @property string $file
 * @property string $file_dir
 *
 * @property \App\Model\Entity\Category $category
 */
class Barang extends Entity
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
        'category_id' => true,
        'name' => true,
        'harga' => true,
        'stok' => true,
        'code_item' => true,
        'date' => true,
        'file' => true,
        'file_dir' => true,
        'category' => true
    ];
}

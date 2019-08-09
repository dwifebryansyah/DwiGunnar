<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Keranjang Entity
 *
 * @property int $id
 * @property int $barang_id
 * @property int $price
 * @property int $qty
 * @property string $catatan_pembeli
 *
 * @property \App\Model\Entity\Produk $produk
 */
class Keranjang extends Entity
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
        'barang_id' => true,
        'price' => true,
        'qty' => true,
        'catatan_pembeli' => true,
        'barang' => true
    ];
}

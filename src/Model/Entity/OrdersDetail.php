<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrdersDetail Entity
 *
 * @property int $id
 * @property int $order_id
 * @property int $barang_id
 * @property int $qty
 * @property string $catatan_pembeli
 *
 * @property \App\Model\Entity\Order $order
 * @property \App\Model\Entity\Barang $barang
 */
class OrdersDetail extends Entity
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
        'order_id' => true,
        'barang_id' => true,
        'qty' => true,
        'catatan_pembeli' => true,
        'order' => true,
        'barang' => true
    ];
}

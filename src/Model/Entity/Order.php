<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property string $code
 * @property \Cake\I18n\FrozenDate $date
 * @property int $total_price
 * @property int $bayar
 * @property int $change_money
 *
 * @property \App\Model\Entity\OrdersDetail[] $orders_details
 */
class Order extends Entity
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
        'code' => true,
        'date' => true,
        'total_price' => true,
        'bayar' => true,
        'change_money' => true,
        'orders_details' => true
    ];
}

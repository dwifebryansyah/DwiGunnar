<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Order'), ['action' => 'edit', $order->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders Details'), ['controller' => 'OrdersDetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Orders Detail'), ['controller' => 'OrdersDetails', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="orders view large-9 medium-8 columns content">
    <h3><?= h($order->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($order->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($order->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Price') ?></th>
            <td><?= $this->Number->format($order->total_price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bayar') ?></th>
            <td><?= $this->Number->format($order->bayar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Change Money') ?></th>
            <td><?= $this->Number->format($order->change_money) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($order->date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Orders Details') ?></h4>
        <?php if (!empty($order->orders_details)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Order Id') ?></th>
                <th scope="col"><?= __('Barang Id') ?></th>
                <th scope="col"><?= __('Qty') ?></th>
                <th scope="col"><?= __('Catatan Pembeli') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($order->orders_details as $ordersDetails): ?>
            <tr>
                <td><?= h($ordersDetails->id) ?></td>
                <td><?= h($ordersDetails->order_id) ?></td>
                <td><?= h($ordersDetails->barang_id) ?></td>
                <td><?= h($ordersDetails->qty) ?></td>
                <td><?= h($ordersDetails->catatan_pembeli) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OrdersDetails', 'action' => 'view', $ordersDetails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OrdersDetails', 'action' => 'edit', $ordersDetails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OrdersDetails', 'action' => 'delete', $ordersDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordersDetails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
<div class="fixed-bottom">
    <nav class="navbar navbar-light bg-light">
        <a href="#">&nbsp;</a>
     <div style="float: right;">
        <p>&copy; 2019 Dwi Febryansyah<p>
    </div>
    </nav>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrdersDetail $ordersDetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Orders Detail'), ['action' => 'edit', $ordersDetail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Orders Detail'), ['action' => 'delete', $ordersDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordersDetail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Orders Details'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Orders Detail'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Barangs'), ['controller' => 'Barangs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Barang'), ['controller' => 'Barangs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ordersDetails view large-9 medium-8 columns content">
    <h3><?= h($ordersDetail->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Order') ?></th>
            <td><?= $ordersDetail->has('order') ? $this->Html->link($ordersDetail->order->id, ['controller' => 'Orders', 'action' => 'view', $ordersDetail->order->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Barang') ?></th>
            <td><?= $ordersDetail->has('barang') ? $this->Html->link($ordersDetail->barang->name, ['controller' => 'Barangs', 'action' => 'view', $ordersDetail->barang->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Catatan Pembeli') ?></th>
            <td><?= h($ordersDetail->catatan_pembeli) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ordersDetail->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Qty') ?></th>
            <td><?= $this->Number->format($ordersDetail->qty) ?></td>
        </tr>
    </table>
</div>
<div class="fixed-bottom">
    <nav class="navbar navbar-light bg-light">
        <a href="#">&nbsp;</a>
     <div style="float: right;">
        <p>&copy; 2019 Dwi Febryansyah<p>
    </div>
    </nav>
</div>
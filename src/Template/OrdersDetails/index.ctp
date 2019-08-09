<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrdersDetail[]|\Cake\Collection\CollectionInterface $ordersDetails
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Orders Detail'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Barangs'), ['controller' => 'Barangs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Barang'), ['controller' => 'Barangs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ordersDetails index large-9 medium-8 columns content">
    <h3><?= __('Orders Details') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('order_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('barang_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('qty') ?></th>
                <th scope="col"><?= $this->Paginator->sort('catatan_pembeli') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ordersDetails as $ordersDetail): ?>
            <tr>
                <td><?= $this->Number->format($ordersDetail->id) ?></td>
                <td><?= $ordersDetail->has('order') ? $this->Html->link($ordersDetail->order->id, ['controller' => 'Orders', 'action' => 'view', $ordersDetail->order->id]) : '' ?></td>
                <td><?= $ordersDetail->has('barang') ? $this->Html->link($ordersDetail->barang->name, ['controller' => 'Barangs', 'action' => 'view', $ordersDetail->barang->id]) : '' ?></td>
                <td><?= $this->Number->format($ordersDetail->qty) ?></td>
                <td><?= h($ordersDetail->catatan_pembeli) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ordersDetail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ordersDetail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ordersDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordersDetail->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
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
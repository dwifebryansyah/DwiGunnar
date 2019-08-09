<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrdersDetail $ordersDetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ordersDetail->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ordersDetail->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Orders Details'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Barangs'), ['controller' => 'Barangs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Barang'), ['controller' => 'Barangs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ordersDetails form large-9 medium-8 columns content">
    <?= $this->Form->create($ordersDetail) ?>
    <fieldset>
        <legend><?= __('Edit Orders Detail') ?></legend>
        <?php
            echo $this->Form->control('order_id', ['options' => $orders]);
            echo $this->Form->control('barang_id', ['options' => $barangs]);
            echo $this->Form->control('qty');
            echo $this->Form->control('catatan_pembeli');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<div class="fixed-bottom">
    <nav class="navbar navbar-light bg-light">
        <a href="#">&nbsp;</a>
     <div style="float: right;">
        <p>&copy; 2019 Dwi Febryansyah<p>
    </div>
    </nav>
</div>
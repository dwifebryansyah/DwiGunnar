<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Barang $barang
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Barang'), ['action' => 'edit', $barang->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Barang'), ['action' => 'delete', $barang->id], ['confirm' => __('Are you sure you want to delete # {0}?', $barang->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Barangs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Barang'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="barangs view large-9 medium-8 columns content">
    <h3><?= h($barang->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $barang->has('category') ? $this->Html->link($barang->category->id, ['controller' => 'Categories', 'action' => 'view', $barang->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($barang->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code Item') ?></th>
            <td><?= h($barang->code_item) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('File') ?></th>
            <td><?= h($barang->file) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('File Dir') ?></th>
            <td><?= h($barang->file_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($barang->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Harga') ?></th>
            <td><?= $this->Number->format($barang->harga) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stok') ?></th>
            <td><?= $this->Number->format($barang->stok) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($barang->date) ?></td>
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
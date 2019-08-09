<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Keranjang $keranjang
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Keranjang'), ['action' => 'edit', $keranjang->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Keranjang'), ['action' => 'delete', $keranjang->id], ['confirm' => __('Are you sure you want to delete # {0}?', $keranjang->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Keranjangs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Keranjang'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="keranjangs view large-9 medium-8 columns content">
    <h3><?= h($keranjang->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Catatan Pembeli') ?></th>
            <td><?= h($keranjang->catatan_pembeli) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($keranjang->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Produk Id') ?></th>
            <td><?= $this->Number->format($keranjang->produk_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($keranjang->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Qty') ?></th>
            <td><?= $this->Number->format($keranjang->qty) ?></td>
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

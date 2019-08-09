<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Barang[]|\Cake\Collection\CollectionInterface $barangs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Barang'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="barangs index large-9 medium-8 columns content">
    <h3><?= __('Barangs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('harga') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stok') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code_item') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('file') ?></th>
                <th scope="col"><?= $this->Paginator->sort('file_dir') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($barangs as $barang): ?>
            <tr>
                <td><?= $this->Number->format($barang->id) ?></td>
                <td><?= $barang->has('category') ? $this->Html->link($barang->category->id, ['controller' => 'Categories', 'action' => 'view', $barang->category->id]) : '' ?></td>
                <td><?= h($barang->name) ?></td>
                <td><?= $this->Number->format($barang->harga) ?></td>
                <td><?= $this->Number->format($barang->stok) ?></td>
                <td><?= h($barang->code_item) ?></td>
                <td><?= h($barang->date) ?></td>
                <td><?= h($barang->file) ?></td>
                <td><?= h($barang->file_dir) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $barang->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $barang->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $barang->id], ['confirm' => __('Are you sure you want to delete # {0}?', $barang->id)]) ?>
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

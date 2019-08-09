<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Barangs'), ['controller' => 'Barangs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Barang'), ['controller' => 'Barangs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categories view large-9 medium-8 columns content">
    <h3><?= h($category->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nama') ?></th>
            <td><?= h($category->nama) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($category->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Barangs') ?></h4>
        <?php if (!empty($category->barangs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Category Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Harga') ?></th>
                <th scope="col"><?= __('Stok') ?></th>
                <th scope="col"><?= __('Code Item') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('File') ?></th>
                <th scope="col"><?= __('File Dir') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($category->barangs as $barangs): ?>
            <tr>
                <td><?= h($barangs->id) ?></td>
                <td><?= h($barangs->category_id) ?></td>
                <td><?= h($barangs->name) ?></td>
                <td><?= h($barangs->harga) ?></td>
                <td><?= h($barangs->stok) ?></td>
                <td><?= h($barangs->code_item) ?></td>
                <td><?= h($barangs->date) ?></td>
                <td><?= h($barangs->file) ?></td>
                <td><?= h($barangs->file_dir) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Barangs', 'action' => 'view', $barangs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Barangs', 'action' => 'edit', $barangs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Barangs', 'action' => 'delete', $barangs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $barangs->id)]) ?>
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
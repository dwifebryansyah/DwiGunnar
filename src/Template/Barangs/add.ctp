<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Barang $barang
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Barangs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="barangs form large-9 medium-8 columns content">
    <?= $this->Form->create($barang, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Barang') ?></legend>
        <?php
            echo $this->Form->control('category_id', ['options' => $categories]);
            echo $this->Form->control('name');
            echo $this->Form->control('harga');
            echo $this->Form->control('stok');
            echo $this->Form->control('code_item');
            echo $this->Form->control('date');
        ?>
        <div class="form-group">
            <label for="file-id">Image</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="file" id="file-id">
                <label class="custom-file-label">Choose file</label>
            </div>
        </div>
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
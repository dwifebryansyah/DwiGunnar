<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Keranjang $keranjang
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $keranjang->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $keranjang->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Keranjangs'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="keranjangs form large-9 medium-8 columns content">
    <?= $this->Form->create($keranjang) ?>
    <fieldset>
        <legend><?= __('Edit Keranjang') ?></legend>
        <?php
            echo $this->Form->control('produk_id');
            echo $this->Form->control('price');
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

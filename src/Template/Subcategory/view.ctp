<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subcategory'), ['action' => 'edit', $subcategory->Subcatid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subcategory'), ['action' => 'delete', $subcategory->Subcatid], ['confirm' => __('Are you sure you want to delete # {0}?', $subcategory->Subcatid)]) ?> </li>
        <li><?= $this->Html->link(__('List Subcategory'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subcategory'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subcategory view large-9 medium-8 columns content">
    <h3><?= h($subcategory->Subcatid) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Subcatname') ?></th>
            <td><?= h($subcategory->Subcatname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pic') ?></th>
            <td><?= h($subcategory->Pic) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Detail') ?></th>
            <td><?= h($subcategory->Detail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subcatid') ?></th>
            <td><?= $this->Number->format($subcategory->Subcatid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Catid') ?></th>
            <td><?= $this->Number->format($subcategory->Catid) ?></td>
        </tr>
    </table>
</div>

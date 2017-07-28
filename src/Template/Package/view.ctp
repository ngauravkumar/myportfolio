<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Package'), ['action' => 'edit', $package->Packid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Package'), ['action' => 'delete', $package->Packid], ['confirm' => __('Are you sure you want to delete # {0}?', $package->Packid)]) ?> </li>
        <li><?= $this->Html->link(__('List Package'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Package'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="package view large-9 medium-8 columns content">
    <h3><?= h($package->Packid) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Packname') ?></th>
            <td><?= h($package->Packname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pic1') ?></th>
            <td><?= h($package->Pic1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pic2') ?></th>
            <td><?= h($package->Pic2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pic3') ?></th>
            <td><?= h($package->Pic3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Detail') ?></th>
            <td><?= h($package->Detail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Packid') ?></th>
            <td><?= $this->Number->format($package->Packid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $this->Number->format($package->Category) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subcategory') ?></th>
            <td><?= $this->Number->format($package->Subcategory) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Packprice') ?></th>
            <td><?= $this->Number->format($package->Packprice) ?></td>
        </tr>
    </table>
</div>

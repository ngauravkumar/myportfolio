<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Package'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="package index large-9 medium-8 columns content">
    <h3><?= __('Package') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Packid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Packname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Category') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Subcategory') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Packprice') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Pic1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Pic2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Pic3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Detail') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($package as $package): ?>
            <tr>
                <td><?= $this->Number->format($package->Packid) ?></td>
                <td><?= h($package->Packname) ?></td>
                <td><?= $this->Number->format($package->Category) ?></td>
                <td><?= $this->Number->format($package->Subcategory) ?></td>
                <td><?= $this->Number->format($package->Packprice) ?></td>
                <td><?= h($package->Pic1) ?></td>
                <td><?= h($package->Pic2) ?></td>
                <td><?= h($package->Pic3) ?></td>
                <td><?= h($package->Detail) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $package->Packid]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $package->Packid]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $package->Packid], ['confirm' => __('Are you sure you want to delete # {0}?', $package->Packid)]) ?>
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

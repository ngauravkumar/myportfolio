<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Subcategory'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subcategory index large-9 medium-8 columns content">
    <h3><?= __('Subcategory') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Subcatid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Subcatname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Catid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Pic') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Detail') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subcategory as $subcategory): ?>
            <tr>
                <td><?= $this->Number->format($subcategory->Subcatid) ?></td>
                <td><?= h($subcategory->Subcatname) ?></td>
                <td><?= $this->Number->format($subcategory->Catid) ?></td>
                <td><?= h($subcategory->Pic) ?></td>
                <td><?= h($subcategory->Detail) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $subcategory->Subcatid]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subcategory->Subcatid]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subcategory->Subcatid], ['confirm' => __('Are you sure you want to delete # {0}?', $subcategory->Subcatid)]) ?>
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

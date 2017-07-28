<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Advertisement'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="advertisement index large-9 medium-8 columns content">
    <h3><?= __('Advertisement') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Advid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Companyname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Pic') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Detail') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($advertisement as $advertisement): ?>
            <tr>
                <td><?= $this->Number->format($advertisement->Advid) ?></td>
                <td><?= h($advertisement->Title) ?></td>
                <td><?= h($advertisement->Companyname) ?></td>
                <td><?= h($advertisement->Pic) ?></td>
                <td><?= h($advertisement->Detail) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $advertisement->Advid]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $advertisement->Advid]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $advertisement->Advid], ['confirm' => __('Are you sure you want to delete # {0}?', $advertisement->Advid)]) ?>
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

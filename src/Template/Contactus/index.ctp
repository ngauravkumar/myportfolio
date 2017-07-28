<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contactus'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contactus index large-9 medium-8 columns content">
    <h3><?= __('Contactus') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('contactid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Phno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Message') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contactus as $contactus): ?>
            <tr>
                <td><?= $this->Number->format($contactus->contactid) ?></td>
                <td><?= h($contactus->Name) ?></td>
                <td><?= h($contactus->Phno) ?></td>
                <td><?= h($contactus->Email) ?></td>
                <td><?= h($contactus->Message) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contactus->contactid]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contactus->contactid]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contactus->contactid], ['confirm' => __('Are you sure you want to delete # {0}?', $contactus->contactid)]) ?>
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

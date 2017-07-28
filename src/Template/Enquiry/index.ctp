<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Enquiry'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="enquiry index large-9 medium-8 columns content">
    <h3><?= __('Enquiry') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Enquiryid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Packageid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Mobileno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('NoofDays') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Child') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Adults') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Message') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Statusfield') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($enquiry as $enquiry): ?>
            <tr>
                <td><?= $this->Number->format($enquiry->Enquiryid) ?></td>
                <td><?= h($enquiry->Packageid) ?></td>
                <td><?= h($enquiry->Name) ?></td>
                <td><?= h($enquiry->Gender) ?></td>
                <td><?= h($enquiry->Mobileno) ?></td>
                <td><?= h($enquiry->Email) ?></td>
                <td><?= $this->Number->format($enquiry->NoofDays) ?></td>
                <td><?= $this->Number->format($enquiry->Child) ?></td>
                <td><?= $this->Number->format($enquiry->Adults) ?></td>
                <td><?= h($enquiry->Message) ?></td>
                <td><?= h($enquiry->Statusfield) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $enquiry->Enquiryid]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $enquiry->Enquiryid]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $enquiry->Enquiryid], ['confirm' => __('Are you sure you want to delete # {0}?', $enquiry->Enquiryid)]) ?>
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

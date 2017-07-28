<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Enquiry'), ['action' => 'edit', $enquiry->Enquiryid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Enquiry'), ['action' => 'delete', $enquiry->Enquiryid], ['confirm' => __('Are you sure you want to delete # {0}?', $enquiry->Enquiryid)]) ?> </li>
        <li><?= $this->Html->link(__('List Enquiry'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Enquiry'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="enquiry view large-9 medium-8 columns content">
    <h3><?= h($enquiry->Enquiryid) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Packageid') ?></th>
            <td><?= h($enquiry->Packageid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($enquiry->Name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($enquiry->Gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobileno') ?></th>
            <td><?= h($enquiry->Mobileno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($enquiry->Email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Message') ?></th>
            <td><?= h($enquiry->Message) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfield') ?></th>
            <td><?= h($enquiry->Statusfield) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Enquiryid') ?></th>
            <td><?= $this->Number->format($enquiry->Enquiryid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NoofDays') ?></th>
            <td><?= $this->Number->format($enquiry->NoofDays) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Child') ?></th>
            <td><?= $this->Number->format($enquiry->Child) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adults') ?></th>
            <td><?= $this->Number->format($enquiry->Adults) ?></td>
        </tr>
    </table>
</div>

<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contactus'), ['action' => 'edit', $contactus->contactid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contactus'), ['action' => 'delete', $contactus->contactid], ['confirm' => __('Are you sure you want to delete # {0}?', $contactus->contactid)]) ?> </li>
        <li><?= $this->Html->link(__('List Contactus'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contactus'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contactus view large-9 medium-8 columns content">
    <h3><?= h($contactus->contactid) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($contactus->Name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phno') ?></th>
            <td><?= h($contactus->Phno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($contactus->Email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Message') ?></th>
            <td><?= h($contactus->Message) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contactid') ?></th>
            <td><?= $this->Number->format($contactus->contactid) ?></td>
        </tr>
    </table>
</div>

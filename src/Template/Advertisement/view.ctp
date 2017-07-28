<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Advertisement'), ['action' => 'edit', $advertisement->Advid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Advertisement'), ['action' => 'delete', $advertisement->Advid], ['confirm' => __('Are you sure you want to delete # {0}?', $advertisement->Advid)]) ?> </li>
        <li><?= $this->Html->link(__('List Advertisement'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Advertisement'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="advertisement view large-9 medium-8 columns content">
    <h3><?= h($advertisement->Advid) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($advertisement->Title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Companyname') ?></th>
            <td><?= h($advertisement->Companyname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pic') ?></th>
            <td><?= h($advertisement->Pic) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Detail') ?></th>
            <td><?= h($advertisement->Detail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Advid') ?></th>
            <td><?= $this->Number->format($advertisement->Advid) ?></td>
        </tr>
    </table>
</div>

<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->Cat_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->Cat_id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->Cat_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Category'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="category view large-9 medium-8 columns content">
    <h3><?= h($category->Cat_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cat Name') ?></th>
            <td><?= h($category->Cat_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cat Id') ?></th>
            <td><?= $this->Number->format($category->Cat_id) ?></td>
        </tr>
    </table>
</div>

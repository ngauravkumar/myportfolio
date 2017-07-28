<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Contactus'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="contactus form large-9 medium-8 columns content">
    <?= $this->Form->create($contactus) ?>
    <fieldset>
        <legend><?= __('Add Contactus') ?></legend>
        <?php
            echo $this->Form->control('Name');
            echo $this->Form->control('Phno');
            echo $this->Form->control('Email');
            echo $this->Form->control('Message');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $package->Packid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $package->Packid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Package'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="package form large-9 medium-8 columns content">
    <?= $this->Form->create($package) ?>
    <fieldset>
        <legend><?= __('Edit Package') ?></legend>
        <?php
            echo $this->Form->control('Packname');
            echo $this->Form->control('Category');
            echo $this->Form->control('Subcategory');
            echo $this->Form->control('Packprice');
            echo $this->Form->control('Pic1');
            echo $this->Form->control('Pic2');
            echo $this->Form->control('Pic3');
            echo $this->Form->control('Detail');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

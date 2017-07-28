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
                ['action' => 'delete', $advertisement->Advid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $advertisement->Advid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Advertisement'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="advertisement form large-9 medium-8 columns content">
    <?= $this->Form->create($advertisement) ?>
    <fieldset>
        <legend><?= __('Edit Advertisement') ?></legend>
        <?php
            echo $this->Form->control('Title');
            echo $this->Form->control('Companyname');
            echo $this->Form->control('Pic');
            echo $this->Form->control('Detail');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

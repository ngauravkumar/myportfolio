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
                ['action' => 'delete', $enquiry->Enquiryid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $enquiry->Enquiryid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Enquiry'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="enquiry form large-9 medium-8 columns content">
    <?= $this->Form->create($enquiry) ?>
    <fieldset>
        <legend><?= __('Edit Enquiry') ?></legend>
        <?php
            echo $this->Form->control('Packageid');
            echo $this->Form->control('Name');
            echo $this->Form->control('Gender');
            echo $this->Form->control('Mobileno');
            echo $this->Form->control('Email');
            echo $this->Form->control('NoofDays');
            echo $this->Form->control('Child');
            echo $this->Form->control('Adults');
            echo $this->Form->control('Message');
            echo $this->Form->control('Statusfield');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

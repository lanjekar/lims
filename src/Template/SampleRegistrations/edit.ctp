<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SampleRegistration $sampleRegistration
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sampleRegistration->sample_reg_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sampleRegistration->sample_reg_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sample Registrations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List State Masters'), ['controller' => 'StateMasters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State Master'), ['controller' => 'StateMasters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List District Masters'), ['controller' => 'DistrictMasters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New District Master'), ['controller' => 'DistrictMasters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dispatch Masters'), ['controller' => 'DispatchMasters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dispatch Master'), ['controller' => 'DispatchMasters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sampleRegistrations form large-9 medium-8 columns content">
    <?= $this->Form->create($sampleRegistration) ?>
    <fieldset>
        <legend><?= __('Edit Sample Registration') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('yearly_sample_no');
            echo $this->Form->control('monthly_sample_no');
            echo $this->Form->control('date_of_recevied');
            echo $this->Form->control('date_of_registration');
            echo $this->Form->control('institute_name');
            echo $this->Form->control('owner_name');
            echo $this->Form->control('owner_address');
            echo $this->Form->control('owner_mobile');
            echo $this->Form->control('owner_email');
            echo $this->Form->control('state_id', ['options' => $stateMasters]);
            echo $this->Form->control('district_id', ['options' => $districtMasters]);
            echo $this->Form->control('dispatch_id', ['options' => $dispatchMasters]);
            echo $this->Form->control('letter_no');
            echo $this->Form->control('letter_date');
            echo $this->Form->control('no_of_samples');
            echo $this->Form->control('amount');
            echo $this->Form->control('receipt_no');
            echo $this->Form->control('receipt_date');
            echo $this->Form->control('out_no');
            echo $this->Form->control('out_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

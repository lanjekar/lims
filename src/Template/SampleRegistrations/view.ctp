<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SampleRegistration $sampleRegistration
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sample Registration'), ['action' => 'edit', $sampleRegistration->sample_reg_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sample Registration'), ['action' => 'delete', $sampleRegistration->sample_reg_id], ['confirm' => __('Are you sure you want to delete # {0}?', $sampleRegistration->sample_reg_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sample Registrations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sample Registration'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List State Masters'), ['controller' => 'StateMasters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State Master'), ['controller' => 'StateMasters', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List District Masters'), ['controller' => 'DistrictMasters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New District Master'), ['controller' => 'DistrictMasters', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dispatch Masters'), ['controller' => 'DispatchMasters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dispatch Master'), ['controller' => 'DispatchMasters', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sampleRegistrations view large-9 medium-8 columns content">
    <h3><?= h($sampleRegistration->sample_reg_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $sampleRegistration->has('user') ? $this->Html->link($sampleRegistration->user->user_id, ['controller' => 'Users', 'action' => 'view', $sampleRegistration->user->user_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Institute Name') ?></th>
            <td><?= h($sampleRegistration->institute_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Owner Name') ?></th>
            <td><?= h($sampleRegistration->owner_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Owner Address') ?></th>
            <td><?= h($sampleRegistration->owner_address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Owner Mobile') ?></th>
            <td><?= h($sampleRegistration->owner_mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Owner Email') ?></th>
            <td><?= h($sampleRegistration->owner_email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State Master') ?></th>
            <td><?= $sampleRegistration->has('state_master') ? $this->Html->link($sampleRegistration->state_master->state_id, ['controller' => 'StateMasters', 'action' => 'view', $sampleRegistration->state_master->state_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('District Master') ?></th>
            <td><?= $sampleRegistration->has('district_master') ? $this->Html->link($sampleRegistration->district_master->district_id, ['controller' => 'DistrictMasters', 'action' => 'view', $sampleRegistration->district_master->district_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dispatch Master') ?></th>
            <td><?= $sampleRegistration->has('dispatch_master') ? $this->Html->link($sampleRegistration->dispatch_master->dispatch_id, ['controller' => 'DispatchMasters', 'action' => 'view', $sampleRegistration->dispatch_master->dispatch_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Letter No') ?></th>
            <td><?= h($sampleRegistration->letter_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Receipt No') ?></th>
            <td><?= h($sampleRegistration->receipt_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Out No') ?></th>
            <td><?= h($sampleRegistration->out_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sample Reg Id') ?></th>
            <td><?= $this->Number->format($sampleRegistration->sample_reg_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Yearly Sample No') ?></th>
            <td><?= $this->Number->format($sampleRegistration->yearly_sample_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Monthly Sample No') ?></th>
            <td><?= $this->Number->format($sampleRegistration->monthly_sample_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('No Of Samples') ?></th>
            <td><?= $this->Number->format($sampleRegistration->no_of_samples) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= $this->Number->format($sampleRegistration->amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Of Recevied') ?></th>
            <td><?= h($sampleRegistration->date_of_recevied) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Of Registration') ?></th>
            <td><?= h($sampleRegistration->date_of_registration) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Letter Date') ?></th>
            <td><?= h($sampleRegistration->letter_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Receipt Date') ?></th>
            <td><?= h($sampleRegistration->receipt_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Out Date') ?></th>
            <td><?= h($sampleRegistration->out_date) ?></td>
        </tr>
    </table>
</div>

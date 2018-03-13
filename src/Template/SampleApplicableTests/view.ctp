<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SampleApplicableTest $sampleApplicableTest
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sample Applicable Test'), ['action' => 'edit', $sampleApplicableTest->test_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sample Applicable Test'), ['action' => 'delete', $sampleApplicableTest->test_id], ['confirm' => __('Are you sure you want to delete # {0}?', $sampleApplicableTest->test_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sample Applicable Tests'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sample Applicable Test'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sample Registrations'), ['controller' => 'SampleRegistrations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sample Registration'), ['controller' => 'SampleRegistrations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lab Sample Datas'), ['controller' => 'LabSampleDatas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lab Sample Data'), ['controller' => 'LabSampleDatas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Test Masters'), ['controller' => 'TestMasters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Test Master'), ['controller' => 'TestMasters', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Disease Masters'), ['controller' => 'DiseaseMasters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disease Master'), ['controller' => 'DiseaseMasters', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sampleApplicableTests view large-9 medium-8 columns content">
    <h3><?= h($sampleApplicableTest->test_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sample Registration') ?></th>
            <td><?= $sampleApplicableTest->has('sample_registration') ? $this->Html->link($sampleApplicableTest->sample_registration->sample_reg_id, ['controller' => 'SampleRegistrations', 'action' => 'view', $sampleApplicableTest->sample_registration->sample_reg_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lab Sample Data') ?></th>
            <td><?= $sampleApplicableTest->has('lab_sample_data') ? $this->Html->link($sampleApplicableTest->lab_sample_data->sample_id, ['controller' => 'LabSampleDatas', 'action' => 'view', $sampleApplicableTest->lab_sample_data->sample_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Test Master') ?></th>
            <td><?= $sampleApplicableTest->has('test_master') ? $this->Html->link($sampleApplicableTest->test_master->test_list_id, ['controller' => 'TestMasters', 'action' => 'view', $sampleApplicableTest->test_master->test_list_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Disease Master') ?></th>
            <td><?= $sampleApplicableTest->has('disease_master') ? $this->Html->link($sampleApplicableTest->disease_master->disease_id, ['controller' => 'DiseaseMasters', 'action' => 'view', $sampleApplicableTest->disease_master->disease_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Action Taken') ?></th>
            <td><?= h($sampleApplicableTest->action_taken) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Test Id') ?></th>
            <td><?= $this->Number->format($sampleApplicableTest->test_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Test Date') ?></th>
            <td><?= h($sampleApplicableTest->test_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observation Date') ?></th>
            <td><?= h($sampleApplicableTest->observation_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Communication Date') ?></th>
            <td><?= h($sampleApplicableTest->communication_date) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Test Result') ?></h4>
        <?= $this->Text->autoParagraph(h($sampleApplicableTest->test_result)); ?>
    </div>
    <div class="row">
        <h4><?= __('Observation Result') ?></h4>
        <?= $this->Text->autoParagraph(h($sampleApplicableTest->observation_result)); ?>
    </div>
    <div class="row">
        <h4><?= __('Communication Result') ?></h4>
        <?= $this->Text->autoParagraph(h($sampleApplicableTest->communication_result)); ?>
    </div>
    <div class="row">
        <h4><?= __('Test Suggestion') ?></h4>
        <?= $this->Text->autoParagraph(h($sampleApplicableTest->test_suggestion)); ?>
    </div>
</div>

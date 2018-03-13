<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LabSampleData $labSampleData
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lab Sample Data'), ['action' => 'edit', $labSampleData->sample_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lab Sample Data'), ['action' => 'delete', $labSampleData->sample_id], ['confirm' => __('Are you sure you want to delete # {0}?', $labSampleData->sample_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lab Sample Datas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lab Sample Data'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sample Registrations'), ['controller' => 'SampleRegistrations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sample Registration'), ['controller' => 'SampleRegistrations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lab Masters'), ['controller' => 'LabMasters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lab Master'), ['controller' => 'LabMasters', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Species Masters'), ['controller' => 'SpeciesMasters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Species Master'), ['controller' => 'SpeciesMasters', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Breed Masters'), ['controller' => 'BreedMasters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Breed Master'), ['controller' => 'BreedMasters', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sample Masters'), ['controller' => 'SampleMasters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sample Master'), ['controller' => 'SampleMasters', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sample Applicable Tests'), ['controller' => 'SampleApplicableTests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sample Applicable Test'), ['controller' => 'SampleApplicableTests', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="labSampleDatas view large-9 medium-8 columns content">
    <h3><?= h($labSampleData->sample_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sample Registration') ?></th>
            <td><?= $labSampleData->has('sample_registration') ? $this->Html->link($labSampleData->sample_registration->sample_reg_id, ['controller' => 'SampleRegistrations', 'action' => 'view', $labSampleData->sample_registration->sample_reg_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lab Master') ?></th>
            <td><?= $labSampleData->has('lab_master') ? $this->Html->link($labSampleData->lab_master->lab_id, ['controller' => 'LabMasters', 'action' => 'view', $labSampleData->lab_master->lab_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Species Master') ?></th>
            <td><?= $labSampleData->has('species_master') ? $this->Html->link($labSampleData->species_master->species_id, ['controller' => 'SpeciesMasters', 'action' => 'view', $labSampleData->species_master->species_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Breed Master') ?></th>
            <td><?= $labSampleData->has('breed_master') ? $this->Html->link($labSampleData->breed_master->breed_id, ['controller' => 'BreedMasters', 'action' => 'view', $labSampleData->breed_master->breed_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sample Master') ?></th>
            <td><?= $labSampleData->has('sample_master') ? $this->Html->link($labSampleData->sample_master->sample_list_id, ['controller' => 'SampleMasters', 'action' => 'view', $labSampleData->sample_master->sample_list_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sex') ?></th>
            <td><?= h($labSampleData->sex) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Doc Name') ?></th>
            <td><?= h($labSampleData->doc_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Doc Type') ?></th>
            <td><?= h($labSampleData->doc_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Doc Size') ?></th>
            <td><?= h($labSampleData->doc_size) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sample Applicable Test') ?></th>
            <td><?= $labSampleData->has('sample_applicable_test') ? $this->Html->link($labSampleData->sample_applicable_test->test_id, ['controller' => 'SampleApplicableTests', 'action' => 'view', $labSampleData->sample_applicable_test->test_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sample Id') ?></th>
            <td><?= $this->Number->format($labSampleData->sample_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag No') ?></th>
            <td><?= $this->Number->format($labSampleData->tag_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Age') ?></th>
            <td><?= $this->Number->format($labSampleData->age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Yearly Lab No') ?></th>
            <td><?= $this->Number->format($labSampleData->yearly_lab_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Monthly Lab No') ?></th>
            <td><?= $this->Number->format($labSampleData->monthly_lab_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Post Mortum') ?></th>
            <td><?= $labSampleData->post_mortum ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Instruction By Level 1') ?></h4>
        <?= $this->Text->autoParagraph(h($labSampleData->instruction_by_level_1)); ?>
    </div>
    <div class="row">
        <h4><?= __('Instruction By Level 2') ?></h4>
        <?= $this->Text->autoParagraph(h($labSampleData->instruction_by_level_2)); ?>
    </div>
    <div class="row">
        <h4><?= __('Instruction By Level 3') ?></h4>
        <?= $this->Text->autoParagraph(h($labSampleData->instruction_by_level_3)); ?>
    </div>
</div>

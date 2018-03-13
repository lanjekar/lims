<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LabSampleData[]|\Cake\Collection\CollectionInterface $labSampleDatas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Lab Sample Data'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sample Registrations'), ['controller' => 'SampleRegistrations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sample Registration'), ['controller' => 'SampleRegistrations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lab Masters'), ['controller' => 'LabMasters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lab Master'), ['controller' => 'LabMasters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Species Masters'), ['controller' => 'SpeciesMasters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Species Master'), ['controller' => 'SpeciesMasters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Breed Masters'), ['controller' => 'BreedMasters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Breed Master'), ['controller' => 'BreedMasters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sample Masters'), ['controller' => 'SampleMasters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sample Master'), ['controller' => 'SampleMasters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sample Applicable Tests'), ['controller' => 'SampleApplicableTests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sample Applicable Test'), ['controller' => 'SampleApplicableTests', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="labSampleDatas index large-9 medium-8 columns content">
    <h3><?= __('Lab Sample Datas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('sample_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sample_reg_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lab_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tag_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('species_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('breed_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sample_list_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sex') ?></th>
                <th scope="col"><?= $this->Paginator->sort('age') ?></th>
                <th scope="col"><?= $this->Paginator->sort('post_mortum') ?></th>
                <th scope="col"><?= $this->Paginator->sort('doc_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('doc_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('doc_size') ?></th>
                <th scope="col"><?= $this->Paginator->sort('yearly_lab_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monthly_lab_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('test_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($labSampleDatas as $labSampleData): ?>
            <tr>
                <td><?= $this->Number->format($labSampleData->sample_id) ?></td>
                <td><?= $labSampleData->has('sample_registration') ? $this->Html->link($labSampleData->sample_registration->sample_reg_id, ['controller' => 'SampleRegistrations', 'action' => 'view', $labSampleData->sample_registration->sample_reg_id]) : '' ?></td>
                <td><?= $labSampleData->has('lab_master') ? $this->Html->link($labSampleData->lab_master->lab_id, ['controller' => 'LabMasters', 'action' => 'view', $labSampleData->lab_master->lab_id]) : '' ?></td>
                <td><?= $this->Number->format($labSampleData->tag_no) ?></td>
                <td><?= $labSampleData->has('species_master') ? $this->Html->link($labSampleData->species_master->species_id, ['controller' => 'SpeciesMasters', 'action' => 'view', $labSampleData->species_master->species_id]) : '' ?></td>
                <td><?= $labSampleData->has('breed_master') ? $this->Html->link($labSampleData->breed_master->breed_id, ['controller' => 'BreedMasters', 'action' => 'view', $labSampleData->breed_master->breed_id]) : '' ?></td>
                <td><?= $labSampleData->has('sample_master') ? $this->Html->link($labSampleData->sample_master->sample_list_id, ['controller' => 'SampleMasters', 'action' => 'view', $labSampleData->sample_master->sample_list_id]) : '' ?></td>
                <td><?= h($labSampleData->sex) ?></td>
                <td><?= $this->Number->format($labSampleData->age) ?></td>
                <td><?= h($labSampleData->post_mortum) ?></td>
                <td><?= h($labSampleData->doc_name) ?></td>
                <td><?= h($labSampleData->doc_type) ?></td>
                <td><?= h($labSampleData->doc_size) ?></td>
                <td><?= $this->Number->format($labSampleData->yearly_lab_no) ?></td>
                <td><?= $this->Number->format($labSampleData->monthly_lab_no) ?></td>
                <td><?= $labSampleData->has('sample_applicable_test') ? $this->Html->link($labSampleData->sample_applicable_test->test_id, ['controller' => 'SampleApplicableTests', 'action' => 'view', $labSampleData->sample_applicable_test->test_id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $labSampleData->sample_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $labSampleData->sample_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $labSampleData->sample_id], ['confirm' => __('Are you sure you want to delete # {0}?', $labSampleData->sample_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

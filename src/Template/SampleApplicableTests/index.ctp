<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SampleApplicableTest[]|\Cake\Collection\CollectionInterface $sampleApplicableTests
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sample Applicable Test'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sample Registrations'), ['controller' => 'SampleRegistrations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sample Registration'), ['controller' => 'SampleRegistrations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lab Sample Datas'), ['controller' => 'LabSampleDatas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lab Sample Data'), ['controller' => 'LabSampleDatas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Test Masters'), ['controller' => 'TestMasters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Test Master'), ['controller' => 'TestMasters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Disease Masters'), ['controller' => 'DiseaseMasters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disease Master'), ['controller' => 'DiseaseMasters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sampleApplicableTests index large-9 medium-8 columns content">
    <h3><?= __('Sample Applicable Tests') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('test_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sample_reg_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sample_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('test_list_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('test_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observation_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('communication_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('disease_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('action_taken') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sampleApplicableTests as $sampleApplicableTest): ?>
            <tr>
                <td><?= $this->Number->format($sampleApplicableTest->test_id) ?></td>
                <td><?= $sampleApplicableTest->has('sample_registration') ? $this->Html->link($sampleApplicableTest->sample_registration->sample_reg_id, ['controller' => 'SampleRegistrations', 'action' => 'view', $sampleApplicableTest->sample_registration->sample_reg_id]) : '' ?></td>
                <td><?= $sampleApplicableTest->has('lab_sample_data') ? $this->Html->link($sampleApplicableTest->lab_sample_data->sample_id, ['controller' => 'LabSampleDatas', 'action' => 'view', $sampleApplicableTest->lab_sample_data->sample_id]) : '' ?></td>
                <td><?= $sampleApplicableTest->has('test_master') ? $this->Html->link($sampleApplicableTest->test_master->test_list_id, ['controller' => 'TestMasters', 'action' => 'view', $sampleApplicableTest->test_master->test_list_id]) : '' ?></td>
                <td><?= h($sampleApplicableTest->test_date) ?></td>
                <td><?= h($sampleApplicableTest->observation_date) ?></td>
                <td><?= h($sampleApplicableTest->communication_date) ?></td>
                <td><?= $sampleApplicableTest->has('disease_master') ? $this->Html->link($sampleApplicableTest->disease_master->disease_id, ['controller' => 'DiseaseMasters', 'action' => 'view', $sampleApplicableTest->disease_master->disease_id]) : '' ?></td>
                <td><?= h($sampleApplicableTest->action_taken) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sampleApplicableTest->test_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sampleApplicableTest->test_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sampleApplicableTest->test_id], ['confirm' => __('Are you sure you want to delete # {0}?', $sampleApplicableTest->test_id)]) ?>
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

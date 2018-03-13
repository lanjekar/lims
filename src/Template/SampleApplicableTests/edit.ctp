<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SampleApplicableTest $sampleApplicableTest
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sampleApplicableTest->test_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sampleApplicableTest->test_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sample Applicable Tests'), ['action' => 'index']) ?></li>
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
<div class="sampleApplicableTests form large-9 medium-8 columns content">
    <?= $this->Form->create($sampleApplicableTest) ?>
    <fieldset>
        <legend><?= __('Edit Sample Applicable Test') ?></legend>
        <?php
            echo $this->Form->control('sample_reg_id', ['options' => $sampleRegistrations]);
            echo $this->Form->control('sample_id', ['options' => $labSampleDatas]);
            echo $this->Form->control('test_list_id', ['options' => $testMasters]);
            echo $this->Form->control('test_date');
            echo $this->Form->control('test_result');
            echo $this->Form->control('observation_date');
            echo $this->Form->control('observation_result');
            echo $this->Form->control('communication_date');
            echo $this->Form->control('communication_result');
            echo $this->Form->control('disease_id', ['options' => $diseaseMasters]);
            echo $this->Form->control('action_taken');
            echo $this->Form->control('test_suggestion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

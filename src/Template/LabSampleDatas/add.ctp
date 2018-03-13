<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LabSampleData $labSampleData
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Lab Sample Datas'), ['action' => 'index']) ?></li>
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
<div class="labSampleDatas form large-9 medium-8 columns content">
    <?= $this->Form->create($labSampleData) ?>
    <fieldset>
        <legend><?= __('Add Lab Sample Data') ?></legend>
        <?php
            echo $this->Form->control('sample_reg_id', ['options' => $sampleRegistrations]);
            echo $this->Form->control('lab_id', ['options' => $labMasters]);
            echo $this->Form->control('tag_no');
            echo $this->Form->control('species_id', ['options' => $speciesMasters]);
            echo $this->Form->control('breed_id', ['options' => $breedMasters]);
            echo $this->Form->control('sample_list_id', ['options' => $sampleMasters]);
            echo $this->Form->control('sex');
            echo $this->Form->control('age');
            echo $this->Form->control('post_mortum');
            echo $this->Form->control('doc_name');
            echo $this->Form->control('doc_type');
            echo $this->Form->control('doc_size');
            echo $this->Form->control('yearly_lab_no');
            echo $this->Form->control('monthly_lab_no');
            echo $this->Form->control('test_id', ['options' => $sampleApplicableTests]);
            echo $this->Form->control('instruction_by_level_1');
            echo $this->Form->control('instruction_by_level_2');
            echo $this->Form->control('instruction_by_level_3');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

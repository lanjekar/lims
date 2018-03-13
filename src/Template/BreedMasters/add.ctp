<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BreedMaster $breedMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Breed Masters'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Species Masters'), ['controller' => 'SpeciesMasters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Species Master'), ['controller' => 'SpeciesMasters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="breedMasters form large-9 medium-8 columns content">
    <?= $this->Form->create($breedMaster) ?>
    <fieldset>
        <legend><?= __('Add Breed Master') ?></legend>
        <?php
            echo $this->Form->control('species_id', ['options' => $speciesMasters]);
            echo $this->Form->control('breed_name');
            echo $this->Form->control('created_on');
            echo $this->Form->control('created_by');
            echo $this->Form->control('modified_on');
            echo $this->Form->control('modified_by');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

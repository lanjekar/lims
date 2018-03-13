<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BreedMaster $breedMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Breed Master'), ['action' => 'edit', $breedMaster->breed_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Breed Master'), ['action' => 'delete', $breedMaster->breed_id], ['confirm' => __('Are you sure you want to delete # {0}?', $breedMaster->breed_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Breed Masters'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Breed Master'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Species Masters'), ['controller' => 'SpeciesMasters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Species Master'), ['controller' => 'SpeciesMasters', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="breedMasters view large-9 medium-8 columns content">
    <h3><?= h($breedMaster->breed_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Species Master') ?></th>
            <td><?= $breedMaster->has('species_master') ? $this->Html->link($breedMaster->species_master->species_id, ['controller' => 'SpeciesMasters', 'action' => 'view', $breedMaster->species_master->species_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Breed Name') ?></th>
            <td><?= h($breedMaster->breed_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Breed Id') ?></th>
            <td><?= $this->Number->format($breedMaster->breed_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($breedMaster->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($breedMaster->modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created On') ?></th>
            <td><?= h($breedMaster->created_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified On') ?></th>
            <td><?= h($breedMaster->modified_on) ?></td>
        </tr>
    </table>
</div>

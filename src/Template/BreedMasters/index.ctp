<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BreedMaster[]|\Cake\Collection\CollectionInterface $breedMasters
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Breed Master'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Species Masters'), ['controller' => 'SpeciesMasters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Species Master'), ['controller' => 'SpeciesMasters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="breedMasters index large-9 medium-8 columns content">
    <h3><?= __('Breed Masters') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('breed_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('species_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('breed_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_on') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_on') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_by') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($breedMasters as $breedMaster): ?>
            <tr>
                <td><?= $this->Number->format($breedMaster->breed_id) ?></td>
                <td><?= $breedMaster->has('species_master') ? $this->Html->link($breedMaster->species_master->species_id, ['controller' => 'SpeciesMasters', 'action' => 'view', $breedMaster->species_master->species_id]) : '' ?></td>
                <td><?= h($breedMaster->breed_name) ?></td>
                <td><?= h($breedMaster->created_on) ?></td>
                <td><?= $this->Number->format($breedMaster->created_by) ?></td>
                <td><?= h($breedMaster->modified_on) ?></td>
                <td><?= $this->Number->format($breedMaster->modified_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $breedMaster->breed_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $breedMaster->breed_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $breedMaster->breed_id], ['confirm' => __('Are you sure you want to delete # {0}?', $breedMaster->breed_id)]) ?>
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

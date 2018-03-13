<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SpeciesMaster[]|\Cake\Collection\CollectionInterface $speciesMasters
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Species Master'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="speciesMasters index large-9 medium-8 columns content">
    <h3><?= __('Species Masters') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('species_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('species_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_on') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_on') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_by') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($speciesMasters as $speciesMaster): ?>
            <tr>
                <td><?= $this->Number->format($speciesMaster->species_id) ?></td>
                <td><?= h($speciesMaster->species_name) ?></td>
                <td><?= h($speciesMaster->created_on) ?></td>
                <td><?= $this->Number->format($speciesMaster->created_by) ?></td>
                <td><?= h($speciesMaster->modified_on) ?></td>
                <td><?= $this->Number->format($speciesMaster->modified_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $speciesMaster->species_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $speciesMaster->species_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $speciesMaster->species_id], ['confirm' => __('Are you sure you want to delete # {0}?', $speciesMaster->species_id)]) ?>
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

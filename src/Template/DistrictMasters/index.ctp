<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DistrictMaster[]|\Cake\Collection\CollectionInterface $districtMasters
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New District Master'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List State Masters'), ['controller' => 'StateMasters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State Master'), ['controller' => 'StateMasters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="districtMasters index large-9 medium-8 columns content">
    <h3><?= __('District Masters') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('district_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('district_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_on') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_on') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_by') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($districtMasters as $districtMaster): ?>
            <tr>
                <td><?= $this->Number->format($districtMaster->district_id) ?></td>
                <td><?= $districtMaster->has('state_master') ? $this->Html->link($districtMaster->state_master->state_id, ['controller' => 'StateMasters', 'action' => 'view', $districtMaster->state_master->state_id]) : '' ?></td>
                <td><?= h($districtMaster->district_name) ?></td>
                <td><?= h($districtMaster->created_on) ?></td>
                <td><?= $this->Number->format($districtMaster->created_by) ?></td>
                <td><?= h($districtMaster->modified_on) ?></td>
                <td><?= $this->Number->format($districtMaster->modified_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $districtMaster->district_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $districtMaster->district_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $districtMaster->district_id], ['confirm' => __('Are you sure you want to delete # {0}?', $districtMaster->district_id)]) ?>
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

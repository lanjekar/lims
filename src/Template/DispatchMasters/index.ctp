<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DispatchMaster[]|\Cake\Collection\CollectionInterface $dispatchMasters
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dispatch Master'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dispatchMasters index large-9 medium-8 columns content">
    <h3><?= __('Dispatch Masters') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('dispatch_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dispatch_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_on') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_on') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_by') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dispatchMasters as $dispatchMaster): ?>
            <tr>
                <td><?= $this->Number->format($dispatchMaster->dispatch_id) ?></td>
                <td><?= h($dispatchMaster->dispatch_type) ?></td>
                <td><?= h($dispatchMaster->created_on) ?></td>
                <td><?= $this->Number->format($dispatchMaster->created_by) ?></td>
                <td><?= h($dispatchMaster->modified_on) ?></td>
                <td><?= $this->Number->format($dispatchMaster->modified_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dispatchMaster->dispatch_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dispatchMaster->dispatch_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dispatchMaster->dispatch_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dispatchMaster->dispatch_id)]) ?>
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

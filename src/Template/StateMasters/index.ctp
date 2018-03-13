<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StateMaster[]|\Cake\Collection\CollectionInterface $stateMasters
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New State Master'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="stateMasters index large-9 medium-8 columns content">
    <h3><?= __('State Masters') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('state_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_on') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_on') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_by') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($stateMasters as $stateMaster): ?>
            <tr>
                <td><?= $this->Number->format($stateMaster->state_id) ?></td>
                <td><?= h($stateMaster->state_name) ?></td>
                <td><?= h($stateMaster->created_on) ?></td>
                <td><?= $this->Number->format($stateMaster->created_by) ?></td>
                <td><?= h($stateMaster->modified_on) ?></td>
                <td><?= $this->Number->format($stateMaster->modified_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $stateMaster->state_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $stateMaster->state_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stateMaster->state_id], ['confirm' => __('Are you sure you want to delete # {0}?', $stateMaster->state_id)]) ?>
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

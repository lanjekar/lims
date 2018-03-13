<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SampleMaster[]|\Cake\Collection\CollectionInterface $sampleMasters
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sample Master'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sampleMasters index large-9 medium-8 columns content">
    <h3><?= __('Sample Masters') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('sample_list_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sample_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_on') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_on') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_by') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sampleMasters as $sampleMaster): ?>
            <tr>
                <td><?= $this->Number->format($sampleMaster->sample_list_id) ?></td>
                <td><?= h($sampleMaster->sample_name) ?></td>
                <td><?= h($sampleMaster->created_on) ?></td>
                <td><?= $this->Number->format($sampleMaster->created_by) ?></td>
                <td><?= h($sampleMaster->modified_on) ?></td>
                <td><?= $this->Number->format($sampleMaster->modified_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sampleMaster->sample_list_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sampleMaster->sample_list_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sampleMaster->sample_list_id], ['confirm' => __('Are you sure you want to delete # {0}?', $sampleMaster->sample_list_id)]) ?>
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

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DiseaseMaster[]|\Cake\Collection\CollectionInterface $diseaseMasters
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Disease Master'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="diseaseMasters index large-9 medium-8 columns content">
    <h3><?= __('Disease Masters') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('disease_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('disease_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_on') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_on') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_by') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($diseaseMasters as $diseaseMaster): ?>
            <tr>
                <td><?= $this->Number->format($diseaseMaster->disease_id) ?></td>
                <td><?= h($diseaseMaster->disease_name) ?></td>
                <td><?= h($diseaseMaster->created_on) ?></td>
                <td><?= $this->Number->format($diseaseMaster->created_by) ?></td>
                <td><?= h($diseaseMaster->modified_on) ?></td>
                <td><?= $this->Number->format($diseaseMaster->modified_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $diseaseMaster->disease_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $diseaseMaster->disease_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $diseaseMaster->disease_id], ['confirm' => __('Are you sure you want to delete # {0}?', $diseaseMaster->disease_id)]) ?>
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

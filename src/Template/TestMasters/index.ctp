<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TestMaster[]|\Cake\Collection\CollectionInterface $testMasters
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Test Master'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="testMasters index large-9 medium-8 columns content">
    <h3><?= __('Test Masters') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('test_list_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('test_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_on') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_on') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_by') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($testMasters as $testMaster): ?>
            <tr>
                <td><?= $this->Number->format($testMaster->test_list_id) ?></td>
                <td><?= h($testMaster->test_name) ?></td>
                <td><?= h($testMaster->created_on) ?></td>
                <td><?= $this->Number->format($testMaster->created_by) ?></td>
                <td><?= h($testMaster->modified_on) ?></td>
                <td><?= $this->Number->format($testMaster->modified_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $testMaster->test_list_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $testMaster->test_list_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $testMaster->test_list_id], ['confirm' => __('Are you sure you want to delete # {0}?', $testMaster->test_list_id)]) ?>
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

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TestMaster $testMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Test Master'), ['action' => 'edit', $testMaster->test_list_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Test Master'), ['action' => 'delete', $testMaster->test_list_id], ['confirm' => __('Are you sure you want to delete # {0}?', $testMaster->test_list_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Test Masters'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Test Master'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="testMasters view large-9 medium-8 columns content">
    <h3><?= h($testMaster->test_list_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Test Name') ?></th>
            <td><?= h($testMaster->test_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Test List Id') ?></th>
            <td><?= $this->Number->format($testMaster->test_list_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($testMaster->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($testMaster->modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created On') ?></th>
            <td><?= h($testMaster->created_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified On') ?></th>
            <td><?= h($testMaster->modified_on) ?></td>
        </tr>
    </table>
</div>

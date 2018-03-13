<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LabMaster $labMaster
 */
?>
<nav class="navbar navbar-default" id="actions-sidebar">
    <div class="container-fluid">
    <ul class="nav navbar-nav">
        <li><?= $this->Html->link(__('Edit Lab Master'), ['action' => 'edit', $labMaster->lab_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lab Master'), ['action' => 'delete', $labMaster->lab_id], ['confirm' => __('Are you sure you want to delete # {0}?', $labMaster->lab_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lab Masters'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lab Master'), ['action' => 'add']) ?> </li>
    </ul>
    </div>
</nav>
<div class="col-md-8 col-md-offset-2 contaner">
    <?= h($labMaster->lab_id) ?>
    <table class="vertical-table table table-bordered">
        <tr>
            <th scope="row"><?= __('Lab Name') ?></th>
            <td><?= h($labMaster->lab_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lab Id') ?></th>
            <td><?= $this->Number->format($labMaster->lab_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($labMaster->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($labMaster->modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created On') ?></th>
            <td><?= h($labMaster->created_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified On') ?></th>
            <td><?= h($labMaster->modified_on) ?></td>
        </tr>
    </table>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<nav class="navbar navbar-default" id="actions-sidebar">
     <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">  
<!--         <li class="heading"><?= __('Actions') ?></li>-->
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lab Masters'), ['controller' => 'LabMasters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lab Master'), ['controller' => 'LabMasters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List State Masters'), ['controller' => 'StateMasters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State Master'), ['controller' => 'StateMasters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List District Masters'), ['controller' => 'DistrictMasters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New District Master'), ['controller' => 'DistrictMasters', 'action' => 'add']) ?></li>
    </ul>
    </div>
  </div>
</nav>
<div class="container">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-bordered table-responsive" data-show-toggle="true">
        <thead>
            <tr>
                <th scope="col" data-breakpoints="xs"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"  data-breakpoints="all"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"  data-breakpoints="all"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lab_id') ?></th>
                <th scope="col" data-breakpoints="xs sm"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col" data-breakpoints="xs sm"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"  data-breakpoints="xs sm"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"  data-breakpoints="all"><?= $this->Paginator->sort('mobile') ?></th>
                <th scope="col" data-breakpoints="all"><?= $this->Paginator->sort('user_role') ?></th>
                <th scope="col" data-breakpoints="all"><?= $this->Paginator->sort('state_id') ?></th>
                <th scope="col" data-breakpoints="all"><?= $this->Paginator->sort('district_id') ?></th>
                <th scope="col" data-breakpoints="all"><?= $this->Paginator->sort('is_active') ?></th>
                <th scope="col" data-breakpoints="all"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col" data-breakpoints="all"><?= $this->Paginator->sort('created_on') ?></th>
                <th scope="col" data-breakpoints="all"><?= $this->Paginator->sort('modified_by') ?></th>
                <th scope="col" data-breakpoints="all"><?= $this->Paginator->sort('modified_on') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->user_id) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->password) ?></td>
                <td><?= $user->has('lab_master') ? $this->Html->link($user->lab_master->lab_id, ['controller' => 'LabMasters', 'action' => 'view', $user->lab_master->lab_id]) : '' ?></td>
                <td><?= h($user->first_name) ?></td>
                <td><?= h($user->last_name) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->mobile) ?></td>
                <td><?= h($user->user_role) ?></td>
                <td><?= $user->has('state_master') ? $this->Html->link($user->state_master->state_id, ['controller' => 'StateMasters', 'action' => 'view', $user->state_master->state_id]) : '' ?></td>
                <td><?= $user->has('district_master') ? $this->Html->link($user->district_master->district_id, ['controller' => 'DistrictMasters', 'action' => 'view', $user->district_master->district_id]) : '' ?></td>
                <td><?= h($user->is_active) ?></td>
                <td><?= $this->Number->format($user->created_by) ?></td>
                <td><?= h($user->created_on) ?></td>
                <td><?= $this->Number->format($user->modified_by) ?></td>
                <td><?= h($user->modified_on) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->user_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->user_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id)]) ?>
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

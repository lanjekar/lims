<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LabMaster[]|\Cake\Collection\CollectionInterface $labMasters
 */
?>
<h3><?= __('Lab Masters') ?></h3>
<div class="container well">
     <div class="col-md-12 tableheading" id="tableheading1">
    <div class="row">
    <div class="col-md-6">
     <button class="btn btn-primary" id="btn_Add">
      <?= $this->Html->link(__('New Lab Master'),['action' => 'add','id' => 'Add_btn1']) ?>
    </button>  
    </div>
       
    <div class="col-md-6">
    <form class="form-horizontal" role="form">
    <div class="form-group">
        <label class="col-md-3 control-label">search</label>
        <div class="col-md-9">
            <input type="text" class="form-control" id="search" placeholder="search"/>
        </div>
    </div>
    
    </form>
     </div>    

    </div>
</div>
    
    <table class="table table-bordered" data-show-toggle="true">
        <thead>
            <tr>
                <th data-breakpoints="xs"><?= $this->Paginator->sort('lab_id') ?></th>
                <th><?= $this->Paginator->sort('lab_name') ?></th>
                <th data-breakpoints="all" data-title="created_on" ><?= $this->Paginator->sort('created_on') ?></th>
                <th  data-breakpoints="all" data-title="created_by"><?= $this->Paginator->sort('created_by') ?></th>
                <th  data-breakpoints="all" data-title="modified_on"><?= $this->Paginator->sort('modified_on') ?></th>
                <th  data-breakpoints="all" data-title="modified_by" ><?= $this->Paginator->sort('modified_by') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($labMasters as $labMaster): ?>
            <tr>
                <td><?= $this->Number->format($labMaster->lab_id) ?></td>
                <td><?= h($labMaster->lab_name) ?></td>
                <td><?= h($labMaster->created_on) ?></td>
                <td><?= $this->Number->format($labMaster->created_by) ?></td>
                <td><?= h($labMaster->modified_on) ?></td>
                <td><?= $this->Number->format($labMaster->modified_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $labMaster->lab_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $labMaster->lab_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $labMaster->lab_id], ['confirm' => __('Are you sure you want to delete # {0}?', $labMaster->lab_id)]) ?>
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

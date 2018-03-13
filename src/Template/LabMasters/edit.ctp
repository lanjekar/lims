<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LabMaster $labMaster
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $labMaster->lab_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $labMaster->lab_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Lab Masters'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="labMasters form large-9 medium-8 columns content">
    <?= $this->Form->create($labMaster) ?>
    <div class="col-md-8 col-md-offset-2">
    <fieldset>
        <legend><?= __('Edit Lab Master') ?></legend>
         <div class="row">
           <div class="col-md-6">
                        <div class="form-group"> 
                            <label class="control-label col-md-5">lab name</label>
                            <div class="col-md-7">
                                <?= $this->Form->text('lab_name',['class' =>'form-control']);?> 
                            </div>
                        </div>
                   </div>
             <div class="form-group">
              
             </div>
        </div>
        <?php
            echo $this->Form->control('lab_name');
            echo $this->Form->control('created_on');
            echo $this->Form->control('created_by');
            echo $this->Form->control('modified_on');
            echo $this->Form->control('modified_by');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit',['class' =>'btn btn-primary'])) ?>
    <?= $this->Form->end() ?>
    </div>
</div>

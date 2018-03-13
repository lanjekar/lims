<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LabMaster $labMaster
 */
?>

<div class="labMasters form large-9 medium-8 columns content">
    <div class="col-md-8 col-md-offset-2">
    <?= $this->Form->create($labMaster) ?>
    <fieldset>
        <legend><?= __('Add Lab Master') ?></legend>
        
            <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">                           
                            
                                <?= $this->Form->control('lab_name',['class' =>'form-control']);?>                                                  
                        </div>
                   </div>
                    <div class="col-md-6">
                        <div class="form-group"> 
                         
                            
                                <?= $this->Form->control('created_by',['class' =>'form-control']); ?> 
                                                                              
                        </div>
                   </div>
            </div>
            <div class="row" style="margin-top:10px;">
                    <div class="col-md-6">
                        <div class="form-group"> 
                           
                            
                                <?= $this->Form->control('created_on',['class' =>'form-control']); ?> 
                                                                             
                        </div>
                   </div>
                    <div class="col-md-6">
                        <div class="form-group"> 
                           
                          
                                <?= $this->Form->control('modified_by',['class' =>'form-control']); ?> 
                                                                                 
                        </div>
                   </div>
                   <div class="col-md-6">
                        <div class="form-group"> 
                            
                                <?= $this->Form->control('modified_on',['class' =>'form-control']); ?> 
                                                                                  
                        </div>
                   </div>
                </div>
        
     
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    </div>
</div>














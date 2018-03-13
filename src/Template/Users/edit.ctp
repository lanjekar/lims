<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
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
<!--        <li class="heading"><?= __('Actions') ?></li>-->
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->user_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
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
    <div class="col-md-10 col-md-offset-1">
    <?= $this->Form->create($user) ?>
    
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
           <div class="row">
               <div class="col-md-6">
                 <div class="form-group">
                    <label class="control-label col-md-4">username</label>
                     <div class="col-md-8">
                          <?= $this->Form->text('username',['class' =>'form-control']);?>
                     </div>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="form-group">
                    <label class="control-label col-md-4">password</label>
                     <div class="col-md-8">
                          <?= $this->Form->password('password',['class' =>'form-control']);?>
                     </div>
                 </div>
               </div>
           </div><br>
           <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <lable class="control-lable col-md-4">lab_id</lable>
                      <div class="col-md-8">
                          <?= $this->Form->number('lab_id',['options' => $labMasters,'class' =>'form-control']);?>
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <lable class="control-lable col-md-4">first_name</lable>
                      <div class="col-md-8">
                          <?= $this->Form->text('first_name',['class' =>'form-control']);?>
                      </div>
                  </div>
                </div>
            </div><br/>
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <lable class="control-lable col-md-4">last_name</lable>
                      <div class="col-md-8">
                          <?= $this->Form->text('last_name',['class' =>'form-control']);?>
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <lable class="control-lable col-md-4">email</lable>
                      <div class="col-md-8">
                          <?= $this->Form->text('email',['class' =>'form-control']);?>
                      </div>
                  </div>
                </div>
            </div><br>
        <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <lable class="control-lable col-md-4">mobile</lable>
                      <div class="col-md-8">
                          <?= $this->Form->text('mobile',['class' =>'form-control']);?>
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <lable class="control-lable col-md-4">user_role</lable>
                      <div class="col-md-8">
                          <?= $this->Form->text('user_role',['class' =>'form-control']);?>
                      </div>
                  </div>
                </div>
            </div><br/>
        <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <lable class="control-lable col-md-4">state_id</lable>
                      <div class="col-md-8">
                          <?= $this->Form->numbar('state_id', ['options' => $stateMasters,'class' => 'form-control']); ?>
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <lable class="control-lable col-md-4">district_id</lable>
                      <div class="col-md-8">
                          <?= $this->Form->number('district_id', ['options' => $districtMasters,'class' => 'form-control']);?>
                      </div>
                  </div>
                </div>
            </div>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('lab_id', ['options' => $labMasters]);
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('email');
            echo $this->Form->control('mobile');
            echo $this->Form->control('user_role');
            echo $this->Form->control('state_id', ['options' => $stateMasters]);
            echo $this->Form->control('district_id', ['options' => $districtMasters]);
            echo $this->Form->control('is_active');
            echo $this->Form->control('created_by');
            echo $this->Form->control('created_on');
            echo $this->Form->control('modified_by');
            echo $this->Form->control('modified_on');
        ?>
    </fieldset>
    
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    </div>
</div>

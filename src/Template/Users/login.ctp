<html lang="en">
    
<head>
      <title>Animal Husbandry</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?= $this->Html->css('login.css');?>
<!--<link rel="stylesheet" href="css/login.css">-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

        <script>
        function validate_forgot() {
        if((document.getElementById("user-email").value == "")) {
        document.getElementById("validation-message").innerHTML = "Email is required!"
        return false;
        }
        return true
        }
        </script>

</head>   
  
    <body style="margin-top: 3%; ">
        <div id="loginbox"> 
            <center style="color: #fff;">
               <h3>Department of Animal Husbandry</h3>
                <h4>Government of Maharashtra(India)</h4>
            </center>
        <?= $this->Form->create();?>
				 <div class="control-group normal_text"> <h3>Login
<!--                     <img src="img/logo.png" alt="Login" />-->
                     </h3></div>
                
                
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="glyphicon glyphicon-user"></i></span>
                            <?= $this->Form->input('username',['label' => 'Username','placeholder' => 'Username','id' =>'UserName']);?>
                       
                        </div>
                    </div>
                </div>
                
                
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="glyphicon glyphicon-lock"></i></span>
                             <?= $this->Form->input('password',['label' => 'Username','placeholder' => 'password','id' =>'password']);?>
                    
                        </div>
                    </div>
                </div>
            
                <div class="control-group ">
                    <div class="controls  ">
                        <div class="main_input_box">
                        <span class="add-on bg_lr" style="margin-left: 5%;"><i class="glyphicon glyphicon-map-marker"></i></span>
                            <select name="state_id" class="form-control"  style="width:75%; float: right; margin-right: 6%;">
                                <?php foreach ($state_data as $row): ?>
                                <option value="<?= $row['state_id']; ?>"><?= $row['state_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            
                  </div>
                    </div>
                </div>
                
                <div class="form-actions">
                <span class="pull-left"><a href="#" class="flip-link btn btn-danger" id="to-recover" style="margin-right:0px;">Forgot password?</a></span>

                <center><span class="pull-right"><input type="submit" name="submit" value="Login" class="btn btn-primary"/></span></center>

                </div>
   <?= $this->Form->end();?>
            
            
<!--
            <form name="frmForgot" method="post" onSubmit="return validate_forgot();" id="recoverform" action="#" class="form-vertical">
                <?php if(!empty($success_message)) { ?>
                <div class="success_message"><?php echo $success_message; ?></div>
                <?php } ?>

                <div id="validation-message">
                    <?php if(!empty($error_message)) { ?>
                <?php echo $error_message; ?>
                <?php } ?>
                </div>

				<p class="normal_text">Enter your Username below :
                <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" name="user-email" id="user-email" class="input-field" placeholder="Enter Email or Username" required>
                        </div>
                    </div>

                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><input type="submit" name="forgot-password" id="forgot-password" value="Submit" class="form-submit-button btn btn-info"></span>
                </div>
            </form>    
-->
        </div>
        <?= $this->Html->script('main.js');?>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
       
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
            </body>

</html>

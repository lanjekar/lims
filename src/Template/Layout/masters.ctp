<html>
    <head>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
       
        <?= $this->Html->css('bootstrap.min.css');?>
        <?= $this->Html->css('footable.bootstrap.min.css');?>
        <?= $this->Html->css('header.css');?>
        <?= $this->Html->css('dashbord.css');?>
        <?= $this->Html->script('jquery-3.2.1.min.js');?>
          
    
    </head>
    <body>
        <div class="header">
  
        </div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" style="color:red"> Animal Husbandry pune </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="#"><i class="glyphicon glyphicon-home"></i> Home <span class="glyphicon glyphicon-menu-right"></span> </a>
        </li>
       <li><a href="#"  data-toggle="modal" data-target="#CreateProfileModel"><i class="glyphicon glyphicon-user"></i> Create Profile <span class="glyphicon glyphicon-menu-right"></span></a>
        <div id="CreateProfileModel" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Create Profile</h4>
              </div>
              <div class="modal-body">
                <div class="mainbox">
                <form class="form-horizontal">
                  <div class="col-md-12">
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="col-md-3 control-label">Full Name :</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" pattern="full name"/>
                        </div>
                      </div>
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="col-md-3 control-label">Full Name :</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" pattern="full name"/>
                        </div>
                      </div>
                        <hr>
                    </div>
                  </div>
                </div>
                    
                <div class="col-md-12">
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="col-md-3 control-label">Taluka :</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" pattern="full name"/>
                        </div>
                      </div>
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="col-md-3 control-label">Full Name :</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" pattern="full name"/>
                        </div>
                       </div>
                        <hr>
                    </div>
                  </div>
                </div>
                    
                    <div class="col-md-12">
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="col-md-3 control-label">Email :</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" pattern="full name"/>
                        </div>
                      </div>
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="col-md-3 control-label">State :</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" pattern="full name"/>
                        </div>
                       </div>
                        <hr>
                    </div>
                  </div>
                </div>
                
                <div class="col-md-12">
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="col-md-3 control-label">Mobile :</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" pattern="full name"/>
                        </div>
                      </div>
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="col-md-3 control-label">Distric :</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" pattern="full name"/>
                        </div>
                       </div>
                        <hr>
                    </div>
                  </div>
                </div>
                    
                    <div class="col-md-12">
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="col-md-3 control-label">UserType :</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" pattern="full name"/>
                        </div>
                      </div>
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="col-md-3 control-label">User Name :</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" pattern="full name"/>
                        </div>
                       </div>
                        <hr/>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="col-md-3 control-label">Village :</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" pattern="full name"/>
                        </div>
                      </div>
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="col-md-3 control-label">Password :</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" pattern="full name"/>
                        </div>
                       </div>
                        <hr/>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="col-md-3 control-label">Confirm password :</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" pattern="full name"/>
                        </div>
                      </div>
                        <hr>
                    </div>
                    <div class="col-md-6">
                          <input type="submit" class="btn btn-primary" value="save"/> 
                        <input type="button" class="btn btn-danger" value="cancel">
                    </div>
                  </div>
                </div>
                                    
                
                </form>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

            </div>
      </div>
       </li>
       <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-user"></i> change Password  <span class="glyphicon glyphicon-menu-right"></span></a>
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"> Change Password </h4>
          </div>
          <div class="modal-body">
             <div class="mainbox" id="change_Password">
                 <form class="form-horizontal">              
                   
                    <div class="col-md-12">
                        <div class="form-group">
                        <label class="col-md-3 control-label">Old Password :</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" pattern="full name"/>
                        </div>
                      </div>
                        <hr>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                        <label class="col-md-3 control-label">New Password:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" pattern="full name"/>
                        </div>
                      </div>
                        <hr>
                    </div>            
                                      
                    <div class="col-md-12">
                        <div class="form-group">
                        <label class="col-md-3 control-label">confirm Password :</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" pattern="full name"/>
                        </div>
                      </div>
                        <hr>
                     </div>
                     <div class="col-md-12 col-md-offset-3">
                        <input type="submit" class="btn btn-primary" value="save">
                        <input type="button" class="btn btn-danger" value="cancel">
                        
                     </div>
               
                 </form>
            </div>            
                                                                
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

        </div>
    </div>
        </li>
      <li><a href="#"><i class="glyphicon glyphicon-log-out"></i> Loguot  <span class="glyphicon glyphicon-menu-right"></span></a>
      </li>
    <li><a href="#"> welcome admin</a></li>
        
      </ul>
      
    </div><!-- /.navbar-collapse -->
      
  </div><!-- /.container-fluid -->
</nav>
        <?= $this->Flash->render() ?>

    <?= $this->fetch('content') ?>

        
        
        <?= $this->Html->script('bootstrap.min.js');?>
        <?= $this->Html->script('footable.min.js');?>
        <?= $this->Html->script('Table.js');?>
       
   
               
        <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip(); 
        });
        </script>
    </body>
</html>
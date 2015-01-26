<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>BitSign</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrapUD.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/stylesUD.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<!-- Header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
  <div class="container text-center">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">BitSign</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="fa fa-user"></i> VerifiedBatman <span class="caret"></span></a>
          <ul id="g-account-menu" class="dropdown-menu" role="menu">
            <li><a href="#">Settings</a></li>
            <li><a href="#">Sign Out</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-envelope-o"></i> Inbox(1)</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="fa fa-life-ring"></i> Help <span class="caret"></span></a>
          <ul id="g-account-menu" class="dropdown-menu" role="menu">
            <li><a href="#">Help Center</a></li>
            <li><a href="#">Contact Support</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div><!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container text-center">
                <div class="btn-group btn-group-justified">
                <a href="#" class="btn btn-primary col-sm-3">
                  <i class="fa fa-btc"></i><br>
                  My BitSign
                </a>
                <a href="#" class="btn btn-primary col-sm-3">
                  <i class="fa fa-check-square"></i><br>
                  Verification
                </a>
               <a href="#" class="btn btn-primary col-sm-3">
                  <i class="fa fa-cloud-download"></i><br>
                  Cloud
                </a>
                <a href="#" class="btn btn-primary col-sm-3">
                  <i class="fa fa-cog"></i><br>
                  Manage
                </a>
                <a href="#" class="btn btn-primary col-sm-3">
                  <i class="fa fa-medkit"></i><br>
                  Ricovery
                </a>
              </div>
              <br>

<div class="row">
	<div class="col-sm-3">
      <!-- Left column -->
      <br>
      <br>
      {{ HTML::image('img/displaypic.png', 'displaypic', array('height' => 120, 'width' => 160)) }}
      
      <ul class="list-unstyled">
        <li class="nav-header">
        <br>
            <ul class="list-unstyled collapse in" id="userMenu">
                <li><a href="#"><STRONG>Overview </STRONG></a></li>
                <li><a href="#"> Job History </a></li>
                <li><a href="#"> Portfolio </a></li>
                <li><a href="#"> Skills </a></li>
                <li><a href="#"> Resume / CV </a></li>
                <hr>
                <li><a href="#"> Contact Info </a></li>
                <li><a href="#"> Privacy Settings </a></li>
                <li><a href="#"> Public View of Profile </a></li>
                <hr>
                <li>
                <div class="btn-toolbar card-body-social" role="toolbar">
                  <div class="btn-group fa fa-github-alt git"></div>
                  <div class="btn-group linkedin fa fa-linkedin-square"></div>
                  <div class="btn-group twitter fa fa-twitter"></div>
                  <div class="btn-group facebook fa fa-facebook"></div>
                  <div class="btn-group google-plus fa fa-google-plus"></div>
                </div>
              </li>
            </ul>
        </li>
        <hr>

  	</div><!-- /col-3 -->
    <div class="col-sm-9">
      	
    <!-- column 2 -->	

		<div class="row">
          <!-- center left-->	
         	<div class="col-md-6">
            <br>
            <h1><STRONG> Bruce Wayne </STRONG></h1>
            <div>
              {{ HTML::image('img/flag.gif', 'flag', array('height' => 16, 'width' => 28)) }}
              | USA | Gotham
            </div>  
    </div>
  </div>
            <hr>
    <div class="row">
      <div class="col-md-6">

            <div class="panel panel-default">
              <div class="panel-heading"><h3>Overview</h3></div>
            </div>
                    
            <small>Success</small>
              <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%">
                  <span class="sr-only">72% Complete</span>
                </div>
              </div>
            <small>Pending</small>
              <div class="progress">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                  <span class="sr-only">20% Complete</span>
                </div>
              </div>
            <small>Warning</small>
              <div class="progress">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                  <span class="sr-only">60% Complete (warning)</span>
                </div>
              </div>
            <small>Failed</small>
              <div class="progress">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:10%">
                  <span class="sr-only">10% Complete</span>
                </div>
              </div>
		        <hr>  

            <div class="panel panel-default">
                  <div class="panel-heading"><h3>Portfolio</h3></div>
              </div>
              <div>
                <!--tabs-->
              <div class="container">
                <div class="col-md-4">
                <ul class="nav nav-tabs" id="myTab">
                  <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
                  <li><a href="#messages" data-toggle="tab">Messages</a></li>
                  <li><a href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
                
                <div class="tab-content">
                  <div class="tab-pane active" id="profile">
                    <br>
                    Lorem profile dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                    <p>Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
                      dolor, in sagittis nisi.</p>
                  </div>
                  <div class="tab-pane" id="messages">
                    <br>
                    Message ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                    <p>Quisque mauris augu.</p>
                  </div>
                  <div class="tab-pane" id="settings">
                    <br>
                    Lorem settings dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                    <p>Quisque mauris augue, molestie.</p>
                  </div>
                </div>
                </div>
              </div>  
               
              <!--/tabs-->
              </div>
                    
        <hr>                          
              <div class="panel panel-default">
                  <div class="panel-heading"><h3>Skills</h3></div>
              </div>
              <ul class="list-group">
            <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i> Java</a></li>
            <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i> php Laravel</a></li>
            <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i> Python puLP</a></li>
            <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i> Ruby on Rails</a></li>

          </ul>
        <hr>  
              
             
          	</div><!--/col-->
        	<div class="col-md-6">
				<div class="panel panel-default">
                  <div class="panel-heading"><h4>Your Profile Completeness</h4></div>
                  <div class="panel-body">
                    
              <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 50%"> 50%
                  <span class="sr-only">50% Complete</span>
                </div>
              </div>

                 Complete your profile so that clients can find and hire you. <a href="#">More Info</a>
                  <br>
                  <br>
                  <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i> Upload a Profile Pic</a></li>
                  <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i> Take The BitSign Pledge</a></li>
                  <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i> Add Portfolio</a></li>
                  </div>
              	</div>
              
              <div class="panel panel-default">
                  <div class="panel-heading"><h4>Digital Signature</h4></div>
                  <div class="panel-body">
                <table class="table table-striped">
                      <thead>
                        <tr><th>Identity</th><th></th></tr>
                      </thead>
                      <tbody>
                        <tr><td>Username</td><td>VerifiedBatman</td></tr>
                        <tr><td>Name</td><td>Bruce Wayne</td></tr>
                        <tr><td>Type</td><td>Individual</td></tr>
                        <tr><td>Member Since</td><td>December, 2014</td></tr>
                        <tr><td>BitSign URL</td><td>bitsign.com/verifiedBatman</td></tr>
                      </tbody>
               	</table>
                                </div>
              </div>
    
              	<div class="panel panel-default">
                  <div class="panel-heading"><div class="panel-title"><h4>Engagement</h4></div></div>
                  <div class="panel-body">	
                   <div class="col-xs-4 text-center">{{ HTML::image('img/superman.jpg', 'superman', array('height' => 80, 'width' => 80)) }}</div>
                  <div class="col-xs-4 text-center">{{ HTML::image('img/glantern.jpg', 'glantern', array('height' => 80, 'width' => 80)) }}</div>
                    <div class="col-xs-4 text-center">{{ HTML::image('img/ww.png', 'ww', array('height' => 80, 'width' => 80)) }}</div>
                  </div>
               </div><!--/panel-->
              
			</div><!--/col-span-6-->
     
      </div><!--/row-->
      
      <hr>

  	</div><!--/col-span-9-->
</div>
</div>
<!-- /Main -->

<footer class="text-center"></a>
  <div class="container text-center">
    <div>
                    <ul class="list-inline">
                        <li><h2>BitSign</h2>
                        </li>
                        <li class="footer-menu-divider"></li>
                        <li><p class="copyright text-muted small">© 2014 BitSign Inc. All Rights Reserved.</p>
                        </li>
                        <li class="footer-menu-divider"></li>
                        <li>Terms & Privacy
                        </li>
                        <li class="footer-menu-divider"></li>
                        <li>Help
                        </li>

                    </ul>

</div>
</div>
</footer>

<div class="modal" id="addWidgetModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Add Widget</h4>
      </div>
      <div class="modal-body">
        <p>Add a widget stuff here..</p>
      </div>
      <div class="modal-footer">
        <a href="#" data-dismiss="modal" class="btn">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dalog -->
</div><!-- /.modal -->



  
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrapUD.min.js"></script>
		<script src="js/scriptsUD.js"></script>
	</body>
</html>
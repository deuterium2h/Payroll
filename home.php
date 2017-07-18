<?php
session_start();
require_once 'inc/functions.php';
connectDB();
if ($_SESSION['username']) {
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home Page</title>
		<!-- CSS Framework -->
			<!-- Bootstrap Minified CSS -->
			<link rel="stylesheet" href="res/css/bootstrap.min.css">

			<!-- Bootstrap Optional theme -->
			<link rel="stylesheet" href="res/css/bootstrap-theme.min.css">

			<!-- Panel Position -->
			<link rel="stylesheet" href="res/css/panel-pos.css">
			<link rel="icon" href="res/Logo.png" type="image/png">
			<!-- Font Awesome -->
			<link rel="stylesheet" href="res/css/font-awesome.min.css">

			<!-- Custom CSS -->
			<link rel="stylesheet" href="res/css/custom.css"> <!-- Icon Toggle/Body padding -->

		<!-- End of CSS Framework-->

			
			
			<!-- JQuery Minified JScript -->
			
		<!-- Script for IE9 -->
			<!--[if lt IE 9]>
		      <script src="res/js/html5shiv.min.js"></script>
		      <script src="res/js/respond.min.js"></script>
		    <![endif]-->
	</head>
	<script type="text/javascript">
	onload = function () {
	    onfocus = function () {
	        onfocus = function () {}
	        location.reload (true)
	    }
	}
	</script>
	<body onload="timeStart()">
		<!-- Navbar -->
		<nav class="nav navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header"> <!-- Navbar brand -->
					<!-- navbar brand icon -->
					<a class="navbar-brand" href="#" title="Home">
						<img style="max-width: 40px;" src="res/Logo.png">
					</a> <!-- /navbar brand icon -->
					<a class="navbar-brand" href="home.php">OnTheJob Payroll System</a>
					
				</div> <!-- /Navbar brand -->
				<div class="container-fluid">
					<p class="navbar-text navbar-right">Welcome, <?php echo $_SESSION['username']; ?></p>
				</div>
				<?php
					} else { 
						die('Access Denied.<br>Please Log in <a href="/system">here</a>.');
					}
				?>
			</div>
		</nav> <!-- /Navbar -->
		<!-- Site Content -->
		<div class="container-fluid"> 
			<!-- Content Layout -->
			<div class="row"> 
				<!-- Accordion size -->
				<div class="col-md-2">
					<!-- Accordion -->
					<div class="panel-group" id="accordion">
						<!-- Panel 1 -->
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#dshCollapse">
										Add Records
									</a>
								</h4>
							</div>
							<div id="dshCollapse" class="panel-collapse collapse in">
								<div class="panel-body">
									<table class="table">
										<tr>
											<td>
												<span class="glyphicon glyphicon-user"></span><a href="addEmp.php">Add Employee</a>
											</td>
										</tr>
										<tr>
											<td>
												<span class="fa fa-building-o fa-fw"  style="color:#F9BF3D"></span><a href="addDept.php"> Add Department</a>
											</td>
										</tr>
										<tr>
											<td>
												<span class="glyphicon glyphicon-pushpin text-primary" ></span><a href="addDesig.php">Add Designation</a>
											</td>
										</tr>
										<tr>
											<td>
												<span class="glyphicon glyphicon-usd" style="color:green"></span><a href="computeSalary.php">Compute Salary</a>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div> <!-- /Panel 1 -->
						<!-- Panel 2 -->
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" id="li-toggle" data-toggle="collapse" data-parent="#accordion2" href="#liCollapse">
										Update Records
									</a>
								</h4>
							</div>
							<div id="liCollapse" class="panel-collapse collapse in">
								<div class="panel-body">
									<table class="table">
										<tr>
											<td>
												<span class="glyphicon glyphicon-user"></span><a href="employee.php">Update Employee</a>
											</td>
										</tr>
										<tr>
											<td>
												<span class="fa fa-building-o fa-fw text-success"></span><a href="department.php"> Update Department</a>
											</td>
										</tr>
										<tr>
											<td>
												<span class="glyphicon glyphicon-pushpin text-warning" style="color:#F9BF3D"></span><a href="designation.php">Update Designation</a>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div> <!-- /Panel 2 -->
						<!-- Panel 3 -->
						<div class="panel panel-default">
							<!-- Panel 3 heading -->
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" id="last-toggle" data-toggle="collapse" data-parent="#accordion3" href="#lastCollapse">
										Account Settings
									</a>
								</h4>
							</div> <!-- /Panel 3 heading -->
							<!-- Panel 3 collapse -->
							<div id="lastCollapse" class="panel-collapse collapse in">
								<!-- Panel 3 body -->
								<div class="panel-body">
									<table class="table">
										<tr>
											<td>
												<span class="glyphicon glyphicon-off" style="color:red"></span><?php echo '<a href="logout.php ">Logout</a>'; ?>
											</td>
										</tr>
									</table>
								</div> <!-- /Panel 3 body -->
							</div> <!-- /Panel 3 collapse -->
						</div> <!-- /Panel 3 -->
					</div>  <!-- /Accordion -->
				</div> <!-- /Accordion size -->
				<!-- Area Chart size -->
<!-- *****************************************************************************************************				
	 **********************************************Website Body*******************************************
	 ***************************************************************************************************** -->
				<div class="col-md-10">
					<!-- Area Chart Panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<span class="glyphicon glyphicon-book"></span> Attendance
						</div> <!-- /Button Menu -->
						<!-- Area Chart Body -->
						<div class="panel-body">
							<div class="container-fluid">
								<table class="table table-bordered table-hover"><br>
									<thead>
										<th width="6%"><center>Record #</center></th>
										<th width="7%"><center>Employee ID</center></th>
										<th width="25%"><center>Employee Name</center></th>
										<th width="9%"><center>Date</center></th>
										<th width="10%"><center>Attendance Type</center></th>
										<th width="8%"><center>Log-In</center></th>
										<th width="8%"><center>Log-Out</center></th>
										<th width="7%"><center>No. of Hours</center></th>
										<th><center>Remarks</center></th>
										<th><center>Action</center></th>
									</thead>
									<tbody>
										<?php 
											$perPage = 5;
											$adjacent = 5;

											//Count how many rows
											$pages_query = mysql_query("SELECT COUNT(attendid),empid,empname,date,attendance_type,log_in,log_out,no_of_hours,remarks FROM attendance") or die(mysql_error());
											//Total Number of page
											$pages = ceil(mysql_result($pages_query, 0) / $perPage);
											//Get current page from URL
											$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
											//Start of the page
											$start = ($page - 1) * $perPage;
											//Display all attendance record query
											$qAttend = mysql_query("SELECT attendid,empid,empname,date,attendance_type,log_in,log_out,no_of_hours,remarks FROM attendance LIMIT $start, $perPage") or die(mysql_error());
											//Pagination?? wtf
											$pagination = "Page ";
											//Show first only else reduce 1 current page
											$prevPage = ($page==1)?1:$page - 1;
											//Same as above
											$nextPage = ($page>=$pages)?$page:$page + 1;
											//Does not show link if on first page
											if($page!=1) $pagination.='<a href="?page=1">First</a>';
											//Same as above
											if($page!=1) $pagination.='<a href="?page='.$prevPage.'">Previous</a><br>';
											//|--------------------------------------------|
											//|********************************************|
											//| Displays number of links on pagination bar | 
											//|********************************************|
											//|____________________________________________|
											$noOfLinks=2;
											//**********************************************
											//----------------------------------------------
											//find no. of links, shown on right
											$uPage=ceil(($page)/$noOfLinks)*$noOfLinks;
											//same as above, shown on left
											$lPage=floor(($page)/$noOfLinks)*$noOfLinks;
											//if zero, change to 1
											$lPage=($lPage==0)?1:$lPage;
											//Makes sure that current no. of page is not over total page.
											$uPage=($lPage==$uPage)?$uPage+$noOfLinks:$uPage;
											if($uPage>$pages)$upage=($pages-1);
											//start build links from left to right
											for($x=$lPage; $x<=$uPage; $x++) {
												$pagination.=($x==$page)?'<strong>'.$x.'</strong>':'<a href="?page'.$x.'">'.$x.'</a>';
											}
											//show next and last link if not on last page
											if($page!=$pages) $pagination.='<br><a href="?page='.$nextPage.'">Next</a>';
											if($page!=$pages) $pagination.='<a href="?page='.$pages.'">Last</a>';
											while($result = mysql_fetch_array($qAttend)) {
												echo '<tr>';
												echo '<td><center>'.$result['attendid'].'</center></td>';
												echo '<td><center>'.$result['empid'].'</center></td>';
												echo '<td><center>'.$result['empname'].'</center></td>';
												echo '<td><center>'.$result['date'].'</center></td>';
												echo '<td><center>'.$result['attendance_type'].'</center></td>';
												echo '<td><center>'.$result['log_in'].'</center></td>';
												echo '<td><center>'.$result['log_out'].'</center></td>';
												echo '<td><center>'.$result['no_of_hours'].'</center></td>';
												echo '<td><center>'.$result['remarks'].'</center></td>';
												echo '<td><center><a href="javascript:window.open(\'updAttend.php?id='.$result['attendid'].'\', \'updAttend\',\'fullscreen=1, menubar=0, width=525, height=770\')" target="updAttend" class="btn btn-sm btn-primary">Edit</a> <a href="javascript:window.open(\'delAttend.php?id='.$result['attendid'].'\', \'delAttend\',\'fullscreen=1, menubar=0, width=525, height=770\')" target="delAttend" class="btn btn-sm btn-danger">Delete</a></center></td>';
												echo '</tr>';
											}
											
										?>
									</tbody>
								</table><br>
							</div>
							<nav>
								<ul class="pager">
									<li><a href="#"><?php echo $pagination; ?></a></li>
								</ul>
							</nav>
						</div>
						<div class="panel-footer clearfix">
							<div class="col-md-6">
								<a onclick="addAttend('addAttend.php', 'addAttend', '525', '770')" class='btn btn-md btn-block btn-primary'>Add</a>
							</div>
							<div class="col-md-6">
								<a onclick="addAttend('addAttend.php', 'addAttend', '525', '770')" class='btn btn-md btn-block btn-primary'>Search</a>
							</div>
						</div>
					</div> <!-- /Area Chart Panel -->
				</div> <!-- /Area Chart size -->
				<!-- Notifications size -->
				
				<!-- Time size -->
				<div class="col-md-4 pull-right">
					<!-- Time Panel -->
					<div class="panel panel-default">
						<!-- Time heading -->
						<div class="panel-heading">
							<span class="fa fa-clock-o fa-fw"></span> Time
						</div> <!-- /Time heading -->
						<!-- Time body -->
						<div class="panel-body">.
							<div class="container-fluid"><br><br><br>
								<center>
									<canvas id="canvas" width="225" height="225"></canvas>
								</center>
							</div><br><br><br>
						</div>
						<div class="panel-footer" id="digital-clock">
							
						</div>
					</div> <!-- /Time Panel -->
				</div> <!-- /Time size -->
				<!-- Calendar size -->
				<div class="col-md-6 pull-right">
					<div class="panel panel-default"> <!-- Calendar Panel -->
						<div class="panel-heading"> <!-- Calendar heading -->
							<span class="fa fa-calendar fa-fw"></span> Calendar
						</div> <!-- /Calendar heading -->
						<!-- Calendar Body -->
						<div class="panel-body">
							<div class="container-fluid"><br>
								<div id="calendar"></div><br>
							</div>
						</div> <!-- /Calendar body -->
					</div> <!-- /Calendar Panel -->
				</div> <!-- /Calendar Size -->
			</div> <!-- /Content Layout (row) -->
		</div> <!-- /Site Content (container) -->
	</body>
	<!-- JavaScripts -->
		<script src="res/js/jquery-2.1.4.min.js"></script>
		<link rel='stylesheet' href='res/js/fullcalendar-2.4.0/fullcalendar.css' />
		<script src='res/js/fullcalendar-2.4.0/lib/moment.min.js'></script>
		<script src='res/js/fullcalendar-2.4.0/fullcalendar.js'></script>
		<script type="text/javascript">
		$(document).ready(function() {
			$('#calendar').fullCalendar({

			})
		});
		</script>

		<!-- NiceScroll JS -->
		<script src="res/js/jquery.nicescroll.js"></script>
		<!-- NiceScroll Script -->
		<script type="text/javascript">
			$(document).ready(function() { 
			    $("html").niceScroll({
			    	cursorwidth: '7px', 
			    	autohidemode: true, 
			    	zindex: 999 
			    });
			});
		</script>
		<!-- Bootstrap Minified JScript -->
		<script src="res/js/bootstrap.min.js"></script>
		<script>
			function addAttend(pageURL, title,w,h) {
				var left = (screen.width/2)-(w/2);
				var top = (screen.height/2)-(h/2);
				var targetWin = window.open (pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
			}
		</script>

		<!-- Custom Clocks -->
		<script src="res/js/clocks.js"></script>
		
	<!-- End of JavaScripts -->

	
</html>
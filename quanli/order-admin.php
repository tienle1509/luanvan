<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="icon" type="text/css" href="img/icon.png">
	<title>Admin - Mobile Store</title>


	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style-home-admin.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">

  	<!-- jQuery, Bootstrap JS -->
	<script type="text/javascript" src="../jquery/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>

	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">


</head>

<body>

	<div class="wrapper">
		<nav id="navbar" class="navbar">
		  <div class="row">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>                        
		      </button>
		      <a class="navbar-brand" href="../home.php" target="_blank">Hệ Thống Quản Lí - Website Thương Mại Điện Mobile Store</a>
		    </div>
		    <ul class="nav navbar-nav navbar-right">
		        <button class="btndrop">
		          	<span class="fa fa-user"></span>&nbsp;&nbsp;Nguyễn Văn A
		        </button>
		    </ul>
		    <div class="collapse navbar-collapse" id="myNavbar">
		     	<ul class="nav navbar-nav side-nav">	     		
		     		<li><a href="home-admin.php"><span class="fa fa-mobile"></span>&nbsp;&nbsp;Quản lí sản phẩm</a></li>
		     		<li><a class="active" href="order-admin.php"><span class="fa fa-list-alt"></span>&nbsp;&nbsp;Quản lí đơn hàng</a></li>
		     		<li><a href=""><span class="fa fa-users"></span>&nbsp;&nbsp;Nhà bán hàng</a></li>
		     		<li><a href=""><span class="fa fa-users"></span>&nbsp;&nbsp;Khách hàng</a></li>
		     		<li><a href=""><span class="fa fa-bullhorn"></span>&nbsp;&nbsp;Quản lí khuyến mãi</a></li>
		     	</ul>
		    </div>		    
		  </div>
		 </div>
		</nav>


		<div id="page-wrapper">
			<div class="container-fluid">
				<h1>Quản lí đơn hàng</h1>
				<hr style="border: 1px solid #F9F9FF">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<ol class="breadcrumb">
						  <li><a href="home-admin.php">Quản lí đơn hàng</a></li>
						  <li class="active"></li>
						</ol>
					</div>
				</div>


				<div class="row">
					<!-- Đơn hàng chờ duyêt -->
					<div class="col-md-3 col-sm-3">
						<div class="panel panel-blue">
						  <div class="panel-heading">
						  	<div class="row text-center">
							  	<img src="../img/icondonhang-admin.png">
							  	<div class="huge">29</div>
							</div>
						  </div>
						  <a href="proUnconfimr.php">
							  <div class="panel-footer text-center">
							   	Đơn hàng chưa duyệt
							  </div>
						  </a>
						</div>
					</div> <!-- end đơn hàng chờ duyêt -->	

					<!-- Đơn hàng trong ngày -->
					<div class="col-md-3 col-sm-3">
						<div class="panel panel-yellow">
						  <div class="panel-heading">
						  	<div class="row text-center">
							  	<img src="../img/iconcartadmin.png">
							  	<div class="huge">29</div>
							</div>
						  </div>
						  <a href="proUnconfimr.php">
							  <div class="panel-footer text-center">
							   	Đơn hàng trong ngày
							  </div>
						  </a>
						</div>
					</div> <!-- end đơn hàng trong ngày -->	


					<!-- Tất cả đơn hàng -->
					<div class="col-md-3 col-sm-3">
						<div class="panel panel-blue2">
						  <div class="panel-heading">
						  	<div class="row text-center">
							  	<img src="../img/allorder-admin.png">
							  	<div class="huge">29</div>
							</div>
						  </div>
						  <a href="proUnconfimr.php">
							  <div class="panel-footer text-center">
							   	Tất cả đơn hàng
							  </div>
						  </a>
						</div>
					</div> <!-- end tất cả đơn hàng -->
				</div> <!-- end panel-->


				<h2>Đơn hàng mới</h2>

				
			</div>
		</div>






	</div><!--end wrapper-->




</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="text/css" href="img/icon.png">
	<title>Mobile Store</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">

	<!-- jQuery, Bootstrap JS -->
	<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>



</head>


<body>
	
	<!-- Sub menu -->
	<div id="submenu" class="container-fluid">
		<div class="container">
			<div class="nav navbar-nav navbar-right">
				<li><a href="">KÊNH NGƯỜI BÁN</a></li>
				<li>
					<button class="btndrop dropdown-toggle" data-toggle="dropdown">CHĂM SÓC KHÁCH HÀNG</button>
					<ul class="dropdown-menu dropdown-menu-left" role="menu">
						<li><a href="#"><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;Trung tâm hỗ trợ</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;Đơn hàng và thanh toán</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;Giao hàng và nhận hàng</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;Đổi trả và hoàn tiền</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;Liên hệ Mobile Store</a></li>
					</ul>
				</li>
				<li>
					<button class="btndrop dropdown-toggle" data-toggle="dropdown">KIỂM TRA ĐƠN HÀNG</button>
					<ul class="dropdown-menu dropdown-menu-left" role="menu">
						<form id="form-ktdonhang">
							<div class="form-group form-group-sm">
								<input type="text" name="madonhang" class="form-control " placeholder="Vui lòng nhập mã đơn hàng">
							</div>
							<div class="form-group form-group-sm">
								<input type="text" name="email" class="form-control"  placeholder="Vui lòng nhập địa chỉ email">
							</div>
							<button type="submit" class="btntim btn btn-sm btn-block">KIỂM TRA</button>
						</form>
					</ul>
				</li>
				<li><a href="">ĐĂNG NHẬP</a></li>
				<li><button class="btndrop" data-toggle="modal" data-target="#modalRegister">ĐĂNG KÍ</button></li>
			</div>


			<!-- Modal Đăng Kí -->
			<div class="modal fade" id="modalRegister" tabindex="-1" role="dialog">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true" style="color: red">&times;</span>
								<span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title">ĐĂNG KÍ TÀI KHOẢN</h4>
						</div>
						<div class="modal-body">
							<form id="form-dangki">
								<div class="form-group form-group-sm">
									<label>Họ và Tên</label>
									<input type="text" name="" class="form-control" placeholder="Nhập họ tên">
								</div>
								<div class="form-group form-group-sm">
									<label>Email</label>
									<input type="text" name="" class="form-control" placeholder="Nhập địa chỉ email muốn đăng kí">
								</div>
								<div class="form-group form-group-sm">
									<label>Mật khẩu</label>
									<input type="text" name="" class="form-control" placeholder="Vui lòng nhập mật khẩu">
								</div>
								<div class="form-group form-group-sm">
									<label>Nhập lại mật khẩu</label>
									<input type="text" name="" class="form-control" placeholder="Vui lòng nhập lại mật khẩu">
								</div>
							</form>						
						</div>
						<div class="modal-footer">
							<button type="submit" class="btntim btn btn-block">ĐĂNG KÍ</button>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>  



	<!-- Main Menu -->
	<nav id="top-nav" class="navbar" role="navigation">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainmenu">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">
	      	<img src="img/logo2.png" alt="Logo Mobile Store">
	      </a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="mainmenu">
	      <form class="navbar-form navbar-right">
	        <div class="input-group">
	          <input type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm">
	          <span class="input-group-btn"><button class="btn btn-default"><span class="fa fa-search"></span></button></span>
	        </div>
	      </form>
	      
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

<a href="#"><span class="fa fa-shopping-cart"><span class="badge">1</span></span></a>

	





	<nav class="top-nav" class="navbar navbar-default" role="navigation">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#demo">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">
	      	<img src="img/logo2.png" alt="logoMobileStore">
	      </a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="demo">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#">Link</a></li>
	        <li><a href="#">Link</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	            <li class="divider"></li>
	            <li><a href="#">One more separated link</a></li>
	          </ul>
	        </li>
	      </ul>
	      <form class="navbar-form navbar-left" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#">Link</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
</nav>

	
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="icon" type="text/css" href="img/icon.png">
	<title>Khuyến mãi</title>


	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style-home-ban.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">

  	<!-- jQuery, Bootstrap JS -->
	<script type="text/javascript" src="../jquery/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>

	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">


</head>

<body>

	<div class="wrapper">

		<!-- Modal profile-->
		    <div id="modalProfile" class="modal fade">
			  <div class="modal-dialog modal-md">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			        <h4 class="modal-title" align="center"><b>Thông tin nhà bán hàng</b></h4>
			      </div>
			      <div class="modal-body">
			    	<form id="formProfile" class="form-horizontal" role="form">
					  <div class="form-group">
					    <label class="col-md-4 control-label">Mã nhà bán hàng:</label>
					    <div class="col-md-8">
					      <input type="text" class="form-control" readonly="" value="NB001">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-md-4 control-label">Họ và tên:</label>
					    <div class="col-md-8">
					      <input type="text" class="form-control" value="Nguyễn Văn A">
					    </div>
					  </div>				  
					  <div class="form-group">
					    <label class="col-md-4 control-label">Số điện thoại:</label>
					    <div class="col-md-8">
					      <input type="text" class="form-control" value="095637261">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-md-4 control-label">Tên gian hàng:</label>
					    <div class="col-md-8">
					      <input type="text" class="form-control" readonly="" value="Ahihishop">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-md-4 control-label">Địa chỉ:</label>
					    <div class="col-md-8">
					      <textarea class="form-control" cols="2">đường 3/2 Xuân Khánh, Ninh Kiều, Cần Thơ</textarea>
					    </div>
					  </div>
					  <div class="text-center">
					  	<button type="button" class="btn btn-primary">Lưu lại</button>
					  </div>
					</form>
			      </div>		      
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal profile -->


			<!-- Modal editPass -->
			<div id="modalEditPass" class="modal fade">
			  <div class="modal-dialog modal-sm">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			        <h4 class="modal-title" align="center"><b>Cài đặt tài khoản</b></h4>
			      </div>
			      <div class="modal-body">
			        <form id="formEditPass" role="form">
					  <div class="form-group">
					    <label>Mã nhà bán hàng</label>
					    <input type="text" class="form-control" readonly="" value="NB001">
					  </div>
					  <div class="form-group">
					    <label>Địa chỉ email</label>
					    <input type="text" class="form-control" value="nguyenvana0947@gmail.com">
					  </div>
					  <div class="form-group">
					    <label>Mật khẩu</label>
					    <input type="password" class="form-control" placeholder="Nhập mật khẩu">
					  </div>
					  <div class="form-group">
					    <label>Xác nhận mật khẩu</label>
					    <input type="password" class="form-control" placeholder="Nhập lại mật khẩu">
					  </div>
					  <div class="text-center">
				        <button type="button" class="btn btn-primary">Lưu Thay Đổi</button>
				      </div>				  
					</form>
			      </div>		      
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal edit pass-->
	
		<nav id="navbar" class="navbar">
		  <div class="row">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>                        
		      </button>
		      <a class="navbar-brand" href="../home.php">
		      	<img src="../img/logo-home-ban.png">
		      </a>
		    </div>
		    <ul class="nav navbar-nav navbar-right">
		        <li class="dropdown">
		          <button class="btndrop dropdown-toggle" data-toggle="dropdown">
		          	<span class="fa fa-user"></span>&nbsp;&nbsp;ShopHelllo&nbsp;
		          	<span class="caret"></span>
		          </button>
		          <ul class="dropdown-menu">
		            <li><a href="#" data-toggle="modal" data-target="#modalProfile"><span class="fa fa-user"></span>&nbsp;&nbsp;Thông tin</a></li>
		            <li><a href="#" data-toggle="modal" data-target="#modalEditPass"><span class="fa fa-plus"></span>&nbsp;&nbsp;Cài đặt tài khoản</a></li>
		            <li class="divider"></li>
		            <li><a href="#"><span class="fa fa-power-off"></span>&nbsp;&nbsp;Đăng xuất</a></li>
		          </ul>
		        </li>
		    </ul>
		    <div class="collapse navbar-collapse" id="myNavbar">
		     	<ul class="nav navbar-nav side-nav">	     		
		     		<li><a href="home-ban.php"><span class="fa fa-mobile"></span>&nbsp;&nbsp;Sản phẩm</a></li>
		     		<li><a href="order.php"><span class="fa fa-list-alt"></span>&nbsp;&nbsp;Đơn hàng</a></li>
		     		<li><a href=""><span class="fa fa-comments-o"></span>&nbsp;&nbsp;Phản hồi câu hỏi</a></li>
		     		<li><a class="active" href="promotion-ban.php"><span class="fa fa-bullhorn"></span>&nbsp;&nbsp;Khuyến mãi</a></li>	     		
		     		<li><a href=""><span class="fa fa-flag"></span>&nbsp;&nbsp;Thống kê</a></li>
		     	</ul>
		    </div>		    
		  </div>
		 </div>
		</nav>


		<div id="page-wrapper">
			<div class="container-fluid">
				<h1>Chi tiết khuyến mãi</h1>
				<hr>
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<ol class="breadcrumb">
						  <li><a href="promotion-ban.php">Khuyến mãi</a></li>
						  <li class="active">Chi tiết khuyến mãi</li>
						</ol>
					</div>
				</div>

				<h3>Deal Giá Sốc - Khuyến mãi chỉ duy nhất 2 ngày</h3>
				<div class="panel-detailPromotion row">
					<div class="col-md-4 col-sm-4">
						<div class="row">
							<img src="../img-promotion/flashsale.png" width="375" height="230">
						</div>					
					</div>
					<div class="col-md-8 col-sm-8">						
						<p>
							Tham gia ngay, chương trình khuyến mãi cùng Mobile Store kéo dài từ 30/04/2017 đến ngày 02/05/2017. 
							Để tham gia chương trình khuyến mãi, Nhà bán hàng cần giảm giá sản phẩm 5%.
							<br>Khi lựa chọn tham gia chương trình này, Mobile có quyền cập nhật giá sản phẩm như Nhà bán hàng đã cam
							kết và sử dụng mục đích chạy quản cáo cũng như chạy các chương trình khuyến mãi trên Mobile trong khoảng thời gian 2 ngày từ 30/04/2017 đến ngày 02/05/2017.
						</p>
						<div class="row">
							<div class="col-md-5 col-sm-5">
								<div><b>Thời gian:</b> 30/4/2017 - 02/05/2017</div>
								<div><b>Hạn đăng kí:</b> 28/04/2017</div>
								<p style="margin-top: 20px;"><a href="addProPromotion.php" type="button" class="btn btn-warning">Chọn sản phẩm để khuyến mãi</a></p>
							</div>
							<div class="col-md-7 col-sm-7">
								<div><b>Sản phẩm khuyến mãi:</b> 43</div>
								<div><b>Giảm giá:</b> 5%.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>






	</div><!--end wrapper -->





</body>
</html>

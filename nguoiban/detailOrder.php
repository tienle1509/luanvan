<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="icon" type="text/css" href="img/icon.png">
	<title>Kênh người bán</title>


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
		     		<li><a class="active" href="order.php"><span class="fa fa-list-alt"></span>&nbsp;&nbsp;Đơn hàng</a></li>
		     		<li><a href=""><span class="fa fa-comments-o"></span>&nbsp;&nbsp;Phản hồi câu hỏi</a></li>
		     		<li><a href=""><span class="fa fa-bullhorn"></span>&nbsp;&nbsp;Khuyến mãi</a></li>	     		
		     		<li><a href=""><span class="fa fa-flag"></span>&nbsp;&nbsp;Thống kê</a></li>
		     	</ul>
		    </div>		    
		  </div>
		 </div>
		</nav>


		<div id="page-wrapper">
			<div class="container-fluid">
				<h1>Chi tiết đơn hàng</h1>
				<hr>
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<ol class="breadcrumb">
						  <li><a href="order.php">Đơn hàng</a></li>
						  <li class="active">Chi tiết đơn hàng</li>
						</ol>
					</div>
				</div>


				<div class="detailOrder-h3"><h3>ĐƠN HÀNG <label>#123456</label></h3></div>
				<hr style="border: 1px solid blue">
				<div class="detailOrderRow1 row">
					<div class="col-md-3 col-sm-3">
						<span class="fa fa-clock-o"></span>&nbsp;&nbsp;Ngày đặt hàng: <b>20/03/2017</b>
					</div>
					<div class="col-md-3 col-sm-3">
						<span class="fa fa-clock-o"></span>&nbsp;&nbsp;Ngày giao hàng: <b>25/03/2017</b>
					</div>
					<div class="col-md-5 col-sm-5">
						<span class="fa fa-money"></span>&nbsp;&nbsp;Hình thức thanh toán: Thanh toán khi nhận hàng
					</div>
				</div>
				<div class="clearfix"></div>
				<hr>

				<div class="detailOrderRow1 row">
					<div class="col-md-3 col-sm-3">
						<span class="fa fa-user"></span>&nbsp;&nbsp;Người nhận <b>Nguyễn Văn A</b>
					</div>
					<div class="col-md-3 col-sm-3">
						<span class="fa fa-mobile"></span>&nbsp;&nbsp;
						Số điện thoại: 01234567890
					</div>
					<div class="col-md-6 col-sm-6">
						<span class="fa fa-home"></span>&nbsp;&nbsp;
						Địa chỉ: KTX B, ĐH Cần Thơ, đường 3/2, phường Xuân Khánh, Ninh kiều, Cần Thơ.
					</div>
				</div>
				<div class="clearfix"></div>
				<hr>


				<table id="table-detailOrder" class="table">
				  <thead>
				    <th>Hình ảnh</th>
				    <th>Tên sản phẩm</th>				    
				    <th>Số lượng</th>
				    <th class="text-center">Đơn giá</th>
				    <th class="text-right">Thành tiền</th>
				  </thead>
				  <tr>
				    <td class="img-detailOrder">
				    	<img src="../sanpham/galaxyj7_1.jpg" width="80px" height="80px">
				    </td>
				    <td class="name-detailOrder">Điện thoại samsung galaxy j7 32GB chính hãng</td>
				    <td class="num-detailOrder">
				    	<select class="form-control">
				    		<option>1</option>
				    		<option>2</option>
				    		<option>3</option>
				    		<option>4</option>
				    		<option>5</option>
				    	</select>
				    </td>
				    <td class="price-detailOrder text-center">12,394,000</td>
				    <td class="tong-detailOrder text-right">12,394,000</td>
				  </tr>
				  
				  <tr>
				    <td class="img-detailOrder">
				    	<img src="../sanpham/galaxyj7_1.jpg" width="80px" height="80px">
				    </td>
				    <td class="name-detailOrder">Điện thoại samsung galaxy j7 32GB chính hãng</td>
				    <td class="num-detailOrder">
				    	<select class="form-control">
				    		<option>1</option>
				    		<option>2</option>
				    		<option>3</option>
				    		<option>4</option>
				    		<option>5</option>
				    	</select>
				    </td>
				    <td class="price-detailOrder text-center">12,394,000</td>
				    <td class="tong-detailOrder text-right">12,394,000</td>
				  </tr>
				</table>
				<hr>
				<div class="tongtien-detailOrder row">
					<div class="col-md-10 col-sm-10 text-right">
						Tổng tiền:
					</div>
					<div class="col-md-2 col-sm-2 text-right">
						<b>24,094,000 đ</b>
					</div>
				</div>

				<div class="detailOrderRow2 row">
					<div class="col-md-5 col-sm-5">
						<a href="order.php">
							<span class="fa fa-angle-double-left"></span>&nbsp;&nbsp;Về trang chủ
						</a>
					</div>
					<div class="text-right submit-detailOrder col-md-7 col-sm-7">
						<button type="button" class="btn btn-primary">Lưu thay đổi</button>	
					</div>
				</div>

				
			</div>
		</div>






	</div> <!-- end wrapper -->



</body>
</html>
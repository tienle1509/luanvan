<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="icon" type="text/css" href="img/icon.png">
	<title>Sản phẩm hết hàng</title>


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
		     		<li><a class="active" href="home-ban.php"><span class="fa fa-mobile"></span>&nbsp;&nbsp;Sản phẩm</a></li>
		     		<li><a href=""><span class="fa fa-list-alt"></span>&nbsp;&nbsp;Đơn hàng</a></li>
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
				<h1>Sản phẩm</h1>
				<hr>
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<ol class="breadcrumb">
						  <li><a href="home-ban.php">Sản phẩm</a></li>
						  <li class="active">Sản phẩm hết hàng</li>
						</ol>
					</div>
				</div>
				<!-- Panel -->
				<div class="row">
					<!-- Sản phẩm chờ duyêt -->
					<div class="col-md-3 col-sm-3">
						<div class="panel panel-red">
						  <div class="panel-heading">
						  	<div class="row">
							  	<div class="col-md-3 col-sm-3">
							  		<img src="../img/waiting.png">
							  	</div>
							  	<div class="col-md-9 col-sm-9 text-right">
							  		<div class="huge">4</div>
							  		Sản phẩm chờ duyệt
							  	</div>
							  	<div class="clearfix"></div>
							</div>
						  </div>
						  <a href="proWaiting.php">
							  <div class="panel-footer">
							   	<span class="pull-left">
							   		Chi tiết
							   	</span>
							   	<span class="pull-right">
							   		<i class="fa fa-arrow-circle-right"></i>
							   	</span>
							   	<div class="clearfix"></div>
							  </div>
						  </a>
						</div>
					</div> <!-- end sản phẩm chờ duyêt -->					

					<!-- Sản phẩm bán chạy -->
					<div class="col-md-3 col-sm-3">
						<div class="panel panel-orange">
						  <div class="panel-heading">
						  	<div class="row">
							  	<div class="col-md-3 col-sm-3">
							  		<img src="../img/banchay.png">
							  	</div>
							  	<div class="col-md-9 col-sm-9 text-right">
							  		<div class="huge">12</div>
							  		Sản phẩm bán chạy
							  	</div>
							  	<div class="clearfix"></div>
							</div>
						  </div>
						  <a href="proFast.php">
							  <div class="panel-footer">
							   	<span class="pull-left">
							   		Chi tiết
							   	</span>
							   	<span class="pull-right">
							   		<i class="fa fa-arrow-circle-right"></i>
							   	</span>
							   	<div class="clearfix"></div>
							  </div>
						  </a>
						</div>
					</div> <!-- end sản phẩm bán chạy -->


					<!-- Sản phẩm hết hàng -->
					<div class="col-md-3 col-sm-3">
						<div class="panel panel-green">
						  <div class="panel-heading">
						  	<div class="row">
							  	<div class="col-md-3 col-sm-3">
							  		<img src="../img/iconhethang.png">
							  	</div>
							  	<div class="col-md-9 col-sm-9 text-right">
							  		<div class="huge">2</div>
							  		Sản phẩm hết hàng
							  	</div>
							  	<div class="clearfix"></div>
							</div>
						  </div>
						  <a href="proOutOfStock.php">
							  <div class="panel-footer">
							   	<span class="pull-left">
							   		Chi tiết
							   	</span>
							   	<span class="pull-right">
							   		<i class="fa fa-arrow-circle-right"></i>
							   	</span>
							   	<div class="clearfix"></div>
							  </div>
						  </a>
						</div>
					</div>
					 <!-- end sản phẩm hết hàng -->


					<!-- Tất cả sản phẩm -->					
					<div class="col-md-3 col-sm-3">
						<div class="panel panel-blue">
						  <div class="panel-heading">
						  	<div class="row">
							  	<div class="col-md-3 col-sm-3">
							  		<img src="../img/tonkho.png">
							  	</div>
							  	<div class="col-md-9 col-sm-9 text-right">
							  		<div class="huge">43</div>
							  		Tất cả sản phẩm
							  	</div>
							  	<div class="clearfix"></div>
							</div>
						  </div>
						  <a href="allProduct.php">
							  <div class="panel-footer">
							   	<span class="pull-left">
							   		Chi tiết
							   	</span>
							   	<span class="pull-right">
							   		<i class="fa fa-arrow-circle-right"></i>
							   	</span>
							   	<div class="clearfix"></div>
							  </div>
						  </a>
						</div>
					</div> <!-- end tất cả sản phẩm -->
				</div> <!--end panel -->

				<a href="addProduct.php" type="button" class="btn btn-success btn-lg"><span class="fa fa-plus-circle"></span>&nbsp;&nbsp;Thêm sản phẩm</a>




				<h2>Danh sách sản phẩm hết hàng</h2>
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<form id="form-searchProduct" class="form-horizontal" role="form">
							<div class="col-sm-2 form-group">
							  	<input type="text" class="form-control" id="" placeholder="Mã sản phẩm">
							</div>
							<div class="col-sm-5">
							  	<input type="text" class="form-control" id="" placeholder="Tên sản phẩm">
							</div>	
							<button type="button" class="btn btn-default"><span class="fa fa-search"></span>&nbsp;Tìm kiếm</button>
						</form>
					</div>
				</div>


				<table id="table-listProduct" class="table table-bordered table-hover">
				    <thead>
				      <tr>
				        <th>Mã SP</th>
				        <th>Hình ảnh</th>
				        <th class="th-name-pro">Tên sản phẩm</th>
				        <th>Giá bán lẻ</th>
				        <th>Giá khuyến mãi</th>
				        <th>Số lượng</th>
				        <th>Hành động</th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td>AP002</td>
				        <td class="img-pro"><img src="../sanpham/galaxyj7_1.jpg" width="60px" height="60px"></td>
				        <td class="name-pro">Điện thoại apple chính hãng sdfk dkjgh</td>
				        <td class="price-pro">18.483.000</td>
				        <td>17.905.000</td>
				        <td width="130px;">
				        	<input type="text" name="" class="form-control" value="0">
				        </td>
				        <td>
				        	<button type="btn" class="btn btn-success">
				        		<span class="fa fa-refresh"></span>&nbsp;&nbsp;Cập nhật
				        	</button>
				        </td>
				      </tr>
				      
				      <tr>
				        <td>AP002</td>
				        <td class="img-pro"><img src="../sanpham/galaxyj7_1.jpg" width="60px" height="60px"></td>
				        <td class="name-pro">Điện thoại apple chính hãng sdfk dkjgh</td>
				        <td class="price-pro">18.483.000</td>
				        <td>17.905.000</td>
				        <td>
				        	<input type="text" name="" class="form-control" value="0">
				        </td>
				        <td>
				        	<button type="btn" class="btn btn-success">
				        		<span class="fa fa-refresh"></span>&nbsp;&nbsp;Cập nhật
				        	</button>
				        </td>
				      </tr>

				      <tr>
				        <td>AP002</td>
				        <td class="img-pro"><img src="../sanpham/galaxyj7_1.jpg" width="60px" height="60px"></td>
				        <td class="name-pro">Điện thoại apple chính hãng sdfk dkjgh</td>
				        <td class="price-pro">18.483.000</td>
				        <td>17.905.000</td>
				        <td>
				        	<input type="text" name="" class="form-control" value="0">
				        </td>
				        <td>
				        	<button type="btn" class="btn btn-success">
				        		<span class="fa fa-refresh"></span>&nbsp;&nbsp;Cập nhật
				        	</button>
				        </td>
				      </tr>

				      <tr>
				        <td>AP002</td>
				        <td class="img-pro"><img src="../sanpham/galaxyj7_1.jpg" width="60px" height="60px"></td>
				        <td class="name-pro">Điện thoại apple chính hãng sdfk dkjgh</td>
				        <td class="price-pro">18.483.000</td>
				        <td>17.905.000</td>
				        <td>
				        	<input type="text" name="" class="form-control" value="0">
				        </td>
				        <td>
				        	<button type="btn" class="btn btn-success">
				        		<span class="fa fa-refresh"></span>&nbsp;&nbsp;Cập nhật
				        	</button>
				        </td>
				      </tr>
				    </tbody>
				  </table>
			</div>
		</div>





	</div><!-- end wrapper -->



</body>
</html>
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
		     		<li><a href="promotion-ban.php"><span class="fa fa-bullhorn"></span>&nbsp;&nbsp;Khuyến mãi</a></li>	     		
		     		<li><a href=""><span class="fa fa-flag"></span>&nbsp;&nbsp;Thống kê</a></li>
		     	</ul>
		    </div>		    
		  </div>
		 </div>
		</nav>


		<div id="page-wrapper">
			<div class="container-fluid">
				<h1>Đơn hàng</h1>
				<hr>
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<ol class="breadcrumb">
						  <li><a href="order.php">Đơn hàng</a></li>
						  <li class="active"></li>
						</ol>
					</div>
				</div>


				<!-- Panel -->
				<div class="row">
					<!-- Tất cả đơn hàng -->
					<div class="col-md-2 col-sm-2">
						<div class="panel panel-green">
						  <div class="panel-heading">
						  	<div class="row">
							  	<div class="col-md-3 col-sm-3">
							  		<img src="../img/icondonhang.png">
							  	</div>
							  	<div class="col-md-9 col-sm-9 text-right">
							  		<div class="huge">40</div>
							  		Tất cả <br> Đơn hàng
							  	</div>
							  	<div class="clearfix"></div>
							</div>
						  </div>
						  <a href="allOrder.php">
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
					</div> <!-- end tất cả đơn hàng -->	

					<!-- Đơn hàng trong ngày -->
					<div class="col-md-2 col-sm-2">
						<div class="panel panel-red1">
						  <div class="panel-heading">
						  	<div class="row">
							  	<div class="col-md-3 col-sm-3">
							  		<img src="../img/donhangtrongngay.png">
							  	</div>
							  	<div class="col-md-9 col-sm-9 text-right">
							  		<div class="huge">4</div>
							  		Đơn hàng<br> Trong ngày
							  	</div>
							  	<div class="clearfix"></div>
							</div>
						  </div>
						  <a href="ofDayOrder.php">
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
					</div> <!-- end đơn hàng trong ngày -->					

					<!-- Đơn hàng đang xử lí -->
					<div class="col-md-2 col-sm-2">
						<div class="panel panel-orange">
						  <div class="panel-heading">
						  	<div class="row">
							  	<div class="col-md-3 col-sm-3">
							  		<img src="../img/icondangxuli.png">
							  	</div>
							  	<div class="col-md-9 col-sm-9 text-right">
							  		<div class="huge">12</div>
							  		Đơn hàng <br> Đang xử lí
							  	</div>
							  	<div class="clearfix"></div>
							</div>
						  </div>
						  <a href="proceOrder.php">
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


					<!-- Đơn hàng đang giao đi -->
					<div class="col-md-2 col-sm-2">
						<div class="panel panel-blue">
						  <div class="panel-heading">
						  	<div class="row">
							  	<div class="col-md-3 col-sm-3">
							  		<img src="../img/icondanggiao.png">
							  	</div>
							  	<div class="col-md-9 col-sm-9 text-right">
							  		<div class="huge">2</div>
							  		Đơn hàng<br> Đang giao đi
							  	</div>
							  	<div class="clearfix"></div>
							</div>
						  </div>
						  <a href="deliverOrder.php">
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
					 <!-- end đơn hàng đang giao đi-->


					<!-- Đơn hàng giao hàng thất bại -->					
					<div class="col-md-2 col-sm-2">
						<div class="panel panel-red">
						  <div class="panel-heading">
						  	<div class="row">
							  	<div class="col-md-3 col-sm-3">
							  		<img src="../img/iconhuydonhang.png">
							  	</div>
							  	<div class="col-md-9 col-sm-9 text-right">
							  		<div class="huge">43</div>
							  		Giao hàng <br> Thất bại
							  	</div>
							  	<div class="clearfix"></div>
							</div>
						  </div>
						  <a href="failOrder.php">
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
					</div> <!-- end Đơn hàng giao hàng thất bại -->

					<!-- Đã giao hàng -->					
					<div class="col-md-2 col-sm-2">
						<div class="panel panel-violet">
						  <div class="panel-heading">
						  	<div class="row">
							  	<div class="col-md-3 col-sm-3">
							  		<img src="../img/iconhoanthanh.png">
							  	</div>
							  	<div class="col-md-9 col-sm-9 text-right">
							  		<div class="huge">20</div>
							  		Đơn hàng<br> Đã giao
							  	</div>
							  	<div class="clearfix"></div>
							</div>
						  </div>
						  <a href="successOrder.php">
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
					</div> <!-- end đã giao hàng -->				
				</div> <!--end panel -->



				<h3>Đơn hàng mới</h3>
				<table id="table-donhang" class="table table-bordered table-hover">
				    <thead>
				      <tr>
				        <th>Mã ĐH</th>
				        <th>Ngày đặt</th>
				        <th>Ngày giao</th>
				        <th>Thông tin giao hàng</th>
				        <th>Tên sản phẩm</th>
				        <th>Hình thức thanh toán</th>
				        <th>Tình trạng</th>
				        <th>Tổng tiền</th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td class="madh">123456</td>
				        <td class="ngaydat">12/03/2017</td>
				        <td class="ngaygiao">18/03/2017</td>
				        <td class="guiden">
				        	<label>Nguyễn Văn A</label><br> đường 3/2, phường Xuân Khánh, quận Ninh Kiều, Cần Thơ
				        	<br>0964873862
				        </td>
				        <td class="chitietdh">
				        	<label>Điện thoại samsung galaxy j7 32GB</label><br>1x12,075,000
				        	<br><label>Điện thoại samsung galaxy j7 32GB</label> <br> 1x12,075,000
				        </td>
				        <td class="httt">Thanh toán khi nhận hàng</td>
				        <td class="tinhtrangdh">
				        	<label class="label label-warning">Đang xử lí</label>
				        </td>				        
				        <td class="tongtien">12,057,000</td>
				      </tr>
				      
				      <tr>
				        <td class="madh">123456</td>
				        <td class="ngaydat">12/03/2017</td>
				        <td class="ngaygiao">18/03/2017</td>
				        <td class="guiden">
				        	<label>Nguyễn Văn A</label><br> đường 3/2, phường Xuân Khánh, quận Ninh Kiều, Cần Thơ
				        	<br>0964873862
				        </td>
				        <td class="chitietdh">
				        	<label>Điện thoại samsung galaxy j7 32GB</label><br>1x12,075,000
				        </td>
				        <td class="httt">Thanh toán khi nhận hàng</td>
				        <td class="tinhtrangdh">
				        	<label class="label label-warning">Đang xử lí</label>
				        </td>			        
				        <td class="tongtien">12,057,000</td>
				      </tr>

				      <tr>
				        <td class="madh">123456</td>
				        <td class="ngaydat">12/03/2017</td>
				        <td class="ngaygiao">18/03/2017</td>
				        <td class="guiden">
				        	<label>Nguyễn Văn A</label><br> đường 3/2, phường Xuân Khánh, quận Ninh Kiều, Cần Thơ
				        	<br>0964873862
				        </td>
				        <td class="chitietdh">
				        	<label>Điện thoại samsung galaxy j7 32GB</label><br>1x12,075,000
				        	<br><label>Điện thoại samsung galaxy j7 32GB</label> <br> 1x12,075,000
				        </td>
				        <td class="httt">Thanh toán khi nhận hàng</td>
				        <td class="tinhtrangdh">
				        	<label class="label label-warning">Đang xử lí</label>
				        </td>			        
				        <td class="tongtien">12,057,000</td>
				      </tr>
				    </tbody>
				</table>
			</div>
		</div>





	</div><!-- end wrapper -->



</body>
</html>
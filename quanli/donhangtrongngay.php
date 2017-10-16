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
						  <li class="active">Đơn hàng trong ngày</li>
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
						  <a href="duyetdh.php">
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
						  <a href="donhangtrongngay.php">
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
						  <a href="tatcadonhang.php">
							  <div class="panel-footer text-center">
							   	Tất cả đơn hàng
							  </div>
						  </a>
						</div>
					</div> <!-- end tất cả đơn hàng -->
				</div> <!-- end panel-->


				<h2>Đơn hàng trong ngày</h2>
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<form id="form-searchOrder" class="form-horizontal" role="form">
							<div class="col-sm-2 form-group">
							  	<input type="text" class="form-control" id="" placeholder="Mã đơn hàng">
							</div>
							<div class="col-sm-3">
							  	<input type="text" class="form-control" id="" placeholder="Tên khách hàng">
							</div>	
							<div class="col-sm-3 form-group">
							  	<div class="input-group">
							        <input class="form-control" type="text" id="Sdate" name="txtSDate" placeholder="Từ ngày" />
							        	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
							    </div>
							</div>
							<div class="col-sm-3">
							  	<div class="input-group">
							        <input class="form-control" type="text" id="Edate" name="txtEDate" placeholder="Đến ngày" />
							        	<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
							    </div>
							</div>				    
							<button type="button" class="btn btn-default"><span class="fa fa-search"></span>&nbsp;Tìm kiếm</button>
						</form>
					</div>
				</div>



				<table id="table-donhang-admin" class="table table-bordered table-hover">
				    <thead>
				      <tr>
				        <th>Mã ĐH</th>
				        <th>Ngày đặt</th>
				        <th>Ngày giao</th>
				        <th class="guiden">Thông tin giao hàng</th>
				        <th>Tên sản phẩm</th>
				        <th>Hình thức thanh toán</th>
				        <th>Tổng tiền</th>
				        <th>Trạng thái</th>	
				        <th>Tình trạng</th>
				        <th>Hành động</th>		        
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td>123456</td>
				        <td>12/03/2017</td>
				        <td>18/03/2017</td>
				        <td class="guiden">
				        	<label>Nguyễn Văn A</label><br> đường 3/2, phường Xuân Khánh, quận Ninh Kiều, Cần Thơ
				        	<br>0964873862
				        </td>
				        <td class="chitietdh">
				        	<label>Điện thoại samsung galaxy j7 32GB</label><br>1x12,075,000
				        	<br><label>Điện thoại samsung galaxy j7 32GB</label> <br> 1x12,075,000
				        </td>
				        <td class="httt">Thanh toán khi nhận hàng</td>
				        <td class="tongtien">12,057,000</td>
				        <td>
				        	<label class="label label-warning">Chờ duyệt</label>
				        </td>
				        <td>
				        	<label class="label label-warning">Đang xử lí</label>
				        </td>
				        <td>
				        	<a href="chitietdonhang.php" type="button" class="btn btn-info">Chi tiết</a>
				        </td>
				      </tr>
				      
				      <tr>
				        <td>123456</td>
				        <td>12/03/2017</td>
				        <td>18/03/2017</td>
				        <td class="guiden">
				        	<label>Nguyễn Văn A</label><br> đường 3/2, phường Xuân Khánh, quận Ninh Kiều, Cần Thơ
				        	<br>0964873862
				        </td>
				        <td class="chitietdh">
				        	<label>Điện thoại samsung galaxy j7 32GB</label><br>1x12,075,000
				        </td>
				        <td class="httt">Thanh toán khi nhận hàng</td>
				        <td class="tongtien">12,057,000</td>
				        <td>
				        	<label class="label label-warning">Chờ duyệt</label>
				        </td>
				        <td>
				        	<label class="label label-warning">Đang giao đi</label>
				        </td>
				        <td>
				        	<a href="chitietdonhang.php" type="button" class="btn btn-info">Chi tiết</a>
				        </td>
				      </tr>

				      <tr>
				        <td>123456</td>
				        <td>12/03/2017</td>
				        <td>18/03/2017</td>
				        <td class="guiden">
				        	<label>Nguyễn Văn A</label><br> đường 3/2, phường Xuân Khánh, quận Ninh Kiều, Cần Thơ
				        	<br>0964873862
				        </td>
				        <td class="chitietdh">
				        	<label>Điện thoại samsung galaxy j7 32GB</label><br>1x12,075,000
				        	<br><label>Điện thoại samsung galaxy j7 32GB</label> <br> 1x12,075,000
				        </td>
				        <td class="httt">Thanh toán khi nhận hàng</td>
				        <td class="tongtien">12,057,000</td>
				        <td>
				        	<label class="label label-warning">Chờ duyệt</label>
				        </td>
				        <td>
				        	<label class="label label-warning">Đang xử lí</label>
				        </td>
				        <td>
				        	<a href="chitietdonhang.php" type="button" class="btn btn-info">Chi tiết</a>
				        </td>
				      </tr>
				    </tbody>
				</table>


			</div>
		</div>






	</div><!-- end wrapper -->




</body>
</html>
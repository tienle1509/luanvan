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
		     		<li><a class="active" href="home-admin.php"><span class="fa fa-mobile"></span>&nbsp;&nbsp;Quản lí sản phẩm</a></li>
		     		<li><a href=""><span class="fa fa-list-alt"></span>&nbsp;&nbsp;Quản lí đơn hàng</a></li>
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
				<h1>Duyệt sản phẩm</h1>
				<hr style="border: 1px solid #F9F9FF">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<ol class="breadcrumb">
						  <li><a href="home-admin.php">Quản lí sản phẩm</a></li>
						  <li class="active">Duyệt sản phẩm</li>
						</ol>
					</div>
				</div>

				<h2>Sản phẩm đang chờ duyệt</h2>				


				<table id="table-product" class="table table-bordered table-hover">
				    <thead>
				      <tr>
				        <th>Mã SP</th>
				        <th>Hình ảnh</th>
				        <th class="th-tensp">Tên sản phẩm</th>
				        <th>Đơn giá</th>
				        <th>Số lượng</th>
				        <th>Nhà bán hàng</th>
				        <th>Trạng thái</th>
				        <th>Thao tác</th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td>SP0028</td>
				        <td>
				        	<img src="../sanpham/hotwav.jpg" width="80" height="80">
				        </td>
				        <td class="tensp">Điện thoại Hotwav đen chính hãng</td>
				        <td class="dongia">2,400,000</td>
				        <td>10</td>
				        <td class="tenshop">ANHDUYSHOP</td>
				        <td>
				        	<label class="label label-warning">Chờ duyệt</label>
				        </td>
				        <td>
				        	<button type="button" class="btn btn-success">Phê duyệt</button>
				        </td>
				      </tr>

				      <tr>
				        <td>SP0028</td>
				        <td>
				        	<img src="../sanpham/hotwav.jpg" width="80" height="80">
				        </td>
				        <td class="tensp">Điện thoại Hotwav đen chính hãng</td>
				        <td class="dongia">2,400,000</td>
				        <td>10</td>
				        <td class="tenshop">ANHDUYSHOP</td>
				        <td>
				        	<label class="label label-warning">Chờ duyệt</label>
				        </td>
				        <td>
				        	<button type="button" class="btn btn-success">Phê duyệt</button>
				        </td>
				      </tr>

				      <tr>
				        <td>SP0028</td>
				        <td>
				        	<img src="../sanpham/hotwav.jpg" width="80" height="80">
				        </td>
				        <td class="tensp">Điện thoại Hotwav đen chính hãng</td>
				        <td class="dongia">2,400,000</td>
				        <td>10</td>
				        <td class="tenshop">ANHDUYSHOP</td>
				        <td>
				        	<label class="label label-warning">Chờ duyệt</label>
				        </td>
				        <td>
				        	<button type="button" class="btn btn-success">Phê duyệt</button>
				        </td>
				      </tr>

				      <tr>
				        <td>SP0028</td>
				        <td>
				        	<img src="../sanpham/hotwav.jpg" width="80" height="80">
				        </td>
				        <td class="tensp">Điện thoại Hotwav đen chính hãng</td>
				        <td class="dongia">2,400,000</td>
				        <td>10</td>
				        <td class="tenshop">ANHDUYSHOP</td>
				        <td>
				        	<label class="label label-warning">Chờ duyệt</label>
				        </td>
				        <td>
				        	<button type="button" class="btn btn-success">Phê duyệt</button>
				        </td>
				      </tr>
				    </tbody>
				</table>


			</div>
		</div>








	</div><!-- end wrapper-->




</body>
</html>
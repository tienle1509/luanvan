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
	<link rel="stylesheet" type="text/css" href="../css/fileinput.css">

  	<!-- jQuery, Bootstrap JS -->
	<script type="text/javascript" src="../jquery/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="../js/fileinput.js"></script>

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
		     		<li><a href="order-admin.php"><span class="fa fa-list-alt"></span>&nbsp;&nbsp;Quản lí đơn hàng</a></li>
		     		<li><a href=""><span class="fa fa-users"></span>&nbsp;&nbsp;Nhà bán hàng</a></li>
		     		<li><a href=""><span class="fa fa-users"></span>&nbsp;&nbsp;Khách hàng</a></li>
		     		<li><a class="active" href="khuyenmai.php"><span class="fa fa-bullhorn"></span>&nbsp;&nbsp;Quản lí khuyến mãi</a></li>
		     	</ul>
		    </div>		    
		  </div>
		 </div>
		</nav>

		<style type="text/css">
			body {
				background-color: #FFFFFF;
			}
		</style>

		<div id="page-wrapper">
			<div class="container-fluid">
				<h1>Danh sách sản phẩm khuyến mãi</h1>
				<hr style="border: 1px solid #F9F9FF">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<ol class="breadcrumb">
						  <li><a href="khuyenmai.php">Khuyến mãi</a></li>
						  <li><a href="chitietkm.php">Chi tiết khuyến mãi</a></li>
						  <li class="active">Danh sách sản phẩm khuyến mãi</li>
						</ol>
					</div>
				</div>

				<h2>Deal giá sốc - Khuyến mãi chỉ duy nhất 2 ngày</h2>


				<table id="table-listProduct" class="table table-bordered table-hover">
				    <thead>
				      <tr>
				        <th>Mã SP</th>
				        <th>Hình ảnh</th>
				        <th>Tên sản phẩm</th>
				        <th>Giá hiện tại</th>
				        <th>Giá khuyến mãi</th>
				        <th>Số lượng</th>
				        <th>Chiết khấu</th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td>AP002</td>
				        <td class="img-pro"><img src="../sanpham/galaxyj7_1.jpg" width="60px" height="60px"></td>
				        <td class="name-pro">Điện thoại apple chính hãng sdfk dkjgh dfghk dskfjgh zdg kjgf skj</td>
				        <td class="price-pro">18.483.000</td>
				        <td>17.905.000</td>
				        <td>5</td>
				        <td>8%</td>
				      </tr>
				      
				      <tr>
				        <td>AP002</td>
				        <td class="img-pro"><img src="../sanpham/galaxyj7_1.jpg" width="60px" height="60px"></td>
				        <td class="name-pro">Điện thoại apple chính hãng sdfk dkjgh dfghk dskfjgh zdg kjgf skj</td>
				        <td class="price-pro">18.483.000</td>
				        <td>17.905.000</td>
				        <td>5</td>
				        <td>8%</td>
				      </tr>

				      <tr>
				        <td>AP002</td>
				        <td class="img-pro"><img src="../sanpham/galaxyj7_1.jpg" width="60px" height="60px"></td>
				        <td class="name-pro">Điện thoại apple chính hãng sdfk dkjgh dfghk dskfjgh zdg kjgf skj</td>
				        <td class="price-pro">18.483.000</td>
				        <td>17.905.000</td>
				        <td>5</td>
				        <td>8%</td>
				      </tr>

				      <tr>
				        <td>AP002</td>
				        <td class="img-pro"><img src="../sanpham/galaxyj7_1.jpg" width="60px" height="60px"></td>
				        <td class="name-pro">Điện thoại apple chính hãng sdfk dkjgh dfghk dskfjgh zdg kjgf skj</td>
				        <td class="price-pro">18.483.000</td>
				        <td>17.905.000</td>
				        <td>5</td>
				        <td>8%</td>
				      </tr>
				    </tbody>
				  </table>
			</div>
		</div>




	</div> <!-- end wrapper -->




</body>
</html>


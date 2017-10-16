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
				<h1>Chi tiết khuyến mãi</h1>
				<hr style="border: 1px solid #F9F9FF">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<ol class="breadcrumb">
						  <li><a href="khuyenmai.php">Khuyến mãi</a></li>
						  <li class="active">Chi tiết khuyến mãi</li>
						</ol>
					</div>
				</div>

				<a href="dssanphamkm.php" type="button" class="btn btn-primary btn-lg">
					<span class="fa fa-list"></span>&nbsp;&nbsp;Danh sách sản phẩm tham gia khuyến mãi
				</a>

				<form id="form-addPromotion" class="form-horizontal" role="form">
				  <div class="title"><h3>Thông tin</h3></div>
				  <div class="form-group">
				    <label class="col-sm-3 control-label">Mã khuyến mãi <b style="color: red">*</b></label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" value="KM001" readonly="">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="col-sm-3 control-label">Tên khuyến mãi <b style="color: red">*</b></label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="" value="Deal giá sốc - Khuyến mãi chỉ duy nhất 2 ngày">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="col-sm-3 control-label">Ngày bắt đầu <b style="color: red">*</b></label>
				    <div class="col-sm-3">
						<div class="input-group">
							<input class="form-control" type="text" id="Sdate" name="txtSDate" value="12/03/2017" />
							    <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
						</div>
					</div>
					<label class="col-sm-3 control-label">Ngày kết thúc <b style="color: red">*</b></label>
				    <div class="col-sm-3">
						<div class="input-group">
							<input class="form-control" type="text" id="Sdate" name="txtSDate" value="14/02/2017" />
							    <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
						</div>
					</div>
				  </div>
				  <div class="form-group">
				    <label class="col-sm-3 control-label">Chiết khấu <b style="color: red">*</b></label>
				    <div class="col-sm-3">
				      <input type="number" class="form-control" min="0" max="100" value="8">
				    </div>
				    <label class="col-sm-3 control-label">Hạn đăng kí <b style="color: red">*</b></label>
				    <div class="col-sm-3">
						<div class="input-group">
							<input class="form-control" type="text" id="Sdate" name="txtSDate" value="10/03/2017" />
							    <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
						</div>
					</div>
				  </div>
				  <div class="title"><h3>Mô tả</h3></div>
				  <textarea name="editor1" class="ckeditor" id="editor1">
				  		Nhanh tay đặt phòng ngay bây giờ!!! Giảm ngay 10% giá tất cả các phòng trong tháng 4 này. 

						Để tạo điều kiện cho những khách đến Đà lạt vào tháng 4/2017 có một nơi nghĩ dưởng tốt nhất, Terracotta Hotel & Resort áp dụng chương trình khuyến mãi. Giảm giá 10% cho tất cả các loại phòng (kể cả các phòng thuộc villa như Premium hay Junior). 

						Với quy mô khách sạn 4 sao và khung cảnh gần gũi thiên nhiên chúng tôi đảm bảo sẽ làm hài lòng quý khách khi đến với khách sạn của chúng tôi.

						Terrcotta - Một điểm đến lý tưởng cho những ai yêu thích thiên nhiên và mong muốn tìm một nơi nghỉ dưỡng đẳng cấp đúng nghĩa.
				  </textarea>
				  <div class="title"><h3>Ảnh khuyến mãi</h3></div>
				  <img src="../img-promotion/salebirthday.jpg">
				  <br><br>
				  <label><h4>Thay đổi ảnh khác</h4></label>
				  <input type="file" name="">
				  <div class="text-right footer">
				  	<button type="button" class="btn btn-danger btn-lg">Xóa</button>
				  	<button type="submit" class="btn btn-primary btn-lg">Lưu lại</button>
				  </div>
				</form>


			</div>
		</div>





	</div><!-- end wrapper -->

	<script>
		CKEDITOR.replace('editor1');
	</script>


</body>
</html>
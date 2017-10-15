<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="icon" type="text/css" href="../img/icon.png">
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

	<style type="text/css">
		body {
			background-color: #FFFFFF;
		}
	</style>
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
				<h1>Quản lí sản phẩm</h1>
				<hr style="border: 1px solid #F9F9FF">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<ol class="breadcrumb">
						  <li><a href="home-admin.php">Quản lí sản phẩm</a></li>
						  <li class="active">Chi tiết sản phẩm</li>
						</ol>
					</div>
				</div>


				<div class="row">
					<form id="formInfoProduct" class="form-horizontal" role="form">
						<div class="col-md-12 col-sm-12">
							<div class="title-thongtin"><h3>Thông tin chung</h3></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Tên sản phẩm</label>
							    <div class="col-sm-4">
							      <input type="text" class="form-control" value="Samsung galaxy J7 32GB chính hãng" readonly="">
							    </div>
							    <label class="col-sm-2 control-label">Danh mục sản phẩm</label>
							    <div class="col-sm-4">
							      <input type="text" value="Samsung" readonly="" class="form-control">
							    </div>							    
							</div>
							<div class="form-group">
							    <label class="col-sm-2 control-label">Giá</label>
							    <div class="col-sm-4">
							      <input type="text" class="form-control" value="12,340,000" readonly="">
							    </div>	
							    <label class="col-sm-2 control-label">Số lượng</label>
							    <div class="col-sm-4">
							      <input type="text" class="form-control" value="15" readonly="">
							    </div>					    
							</div>
							<div class="form-group">
								
							</div>
							<div class="form-group">
							    <label class="col-sm-2 control-label">Xuất xứ</label>
							    <div class="col-sm-4">
							      <input type="text" class="form-control" value="Trung Quốc" readonly="">
							    </div>	
							    <label class="col-sm-2 control-label">Bảo hành</label>
							    <div class="col-sm-4">
							      <input type="text" value="12 tháng" readonly="" class="form-control">
							    </div>						    
							</div>
						</div> <!-- end thông tin -->
						<div class="clearfix"></div>

						<div class="col-md-12 col-sm-12">
							<div class="title"><h3>Thuộc tính sản phẩm</h3></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Độ phân giải màn hình</label>
							    <div class="col-sm-4">
							    	<input type="text" class="form-control" value="5 inches" readonly="">
							    </div>
								<label class="col-sm-2 control-label">Kích thước màn hình</label>
							    <div class="col-sm-4">
							      	<input type="text" class="form-control" value="5 inches" readonly="">	    
							    </div>							    
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Hệ điều hành</label>
							    <div class="col-sm-4">
							    	<input type="text" name="" class="form-control" value="Android 7.0" readonly="">
							    </div>
								<label class="col-sm-2 control-label">Màu sắc</label>
							    <div class="col-sm-4">
							    	<input type="text" class="form-control" value="Đen" readonly="">
							    </div>							    
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Camera trước</label>
							    <div class="col-sm-4">
							    	<input type="text" class="form-control" value="5 MP" readonly="">
							    </div>
							    <label class="col-sm-2 control-label">Camera sau</label>
							    <div class="col-sm-4">
							    	<input type="text" class="form-control" value="12 MP" readonly="">
							    </div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Bộ nhớ trong</label>
							    <div class="col-sm-4">
							    	<input type="text" name="" class="form-control" value="64 GB" readonly="">
							    </div>
							    <label class="col-sm-2 control-label">Dung lượng pin</label>
							    <div class="col-sm-4">
							    	<input type="text" class="form-control" value="64 mAh" readonly="">
							    </div>
							</div>
						</div> <!-- end thuộc tính sản phẩm -->


						<div class="col-md-12 col-sm-12">
							<div class="title"><h3>Mô tả sản phẩm</h3></div>
							<textarea name="editor1" class="ckeditor" id="editor1">
								Màn hình lớn trên 5 inch hiện đang là một xu thế mới, lan với tốc độ chóng mặt trên thế giới, nhưng chỉ có trên rất ít smartphone cao cấp. ArbutuS Max Pro ấn tượng và ghi điểm cao chính từ việc được trang bị màn hình rộng tới 5,5 inch với tấm nền IPS cao cấp, cho góc nhìn rộng cùng khả năng hiển thị màu sắc vượt trội, trong trẻo và rực rỡ xem video tai đây.

								Cấu hình khá, cho trải nghiệm mượt mà
								Trong phân khúc điện thoại giá bình dân, Max Pro là mẫu smartphone duy nhất được trang bị vi xử lý 4 nhân với xung nhịp 1.3GHz, vượt xa hầu như tất cả các smartphone lõi tứ khác trong mọi bài thử nghiệm hiệu năng. Chính vì thế, máy có thể gánh vác những game 3D nặng. Trải nghiệm duyệt web, chạy ứng dụng, xem phim HD tốc độ cao cũng “đã” hơn bao giờ hết. Bắt kịp xu hướng đưa tính năng Hỗ trợ cảm ứng thông minh vào điện thoại phân khúc giá rẻ, Arbutus cũng đã áp dụng cho đứa con tinh thần của mình. Từ màn hình tắt của Max Pro người dùng có thể truy cập vào những ứng dụng mà mình đã tạo một cách nhanh chóng bằng việc chạm hai lần vào màn hình hoặc dùng tay vẽ ký tự lên trên màn hình thì ngay lập tức ứng dụng đó sẽ được kích hoạt và truy cập sử dụng được ngay…

								Công nghệ chụp ảnh UltraPixel
								Đây là công nghệ chụp ảnh tiên tiến nhất hiện nay, camera chính trang bị cho Max Pro là 13MP và phụ 5MP dùng Selfie với việc lọc ảnh và ánh sáng qua nhiều thấu kính sẽ cho tấm hình sau khi được chụp rất tinh xảo và sắc nét vô cùng, so sánh có thể nói là vượt trội hơn những Camera 13MP và 5MP của những thương hiệu khác. Sản phẩm còn được tích hợp công nghệ nghe nhạc “Thuần Khiết”: cho chất lượng âm thanh trung thực và vô cùng sống động, khả năng lọc âm và kích âm rất độc đáo… 
							</textarea>
						</div> <!--end mô tả sản phẩm -->

						<div class="col-md-12 col-sm-12">
							<div class="title"><h3>Ảnh sản phẩm</h3></div>
							<input id="imgListProduct" name="" type="file" multiple>
						</div>

						<div class="col-md-12 col-sm-12">
							<a href="home-admin.php" id="btn-link" class="btn btn-primary btn-lg">Quay lại</a>
						</div>
					</form>
				</div>
			</div>
		</div>








	</div><!-- end wrapper -->

	<script type="text/javascript">
		CKEDITOR.replace('editor1');


		$(document).ready(function(){

			var url1 = '<img src="../sanpham/galaxyj7_1.jpg" width="200px" height="200px">'
				url2 = '<img src="../sanpham/galaxyj7_2.jpg" width="200px" height="200px">',
	        	url3 = '<img src="../sanpham/galaxyj7_3.jpg" width="200px" height="200px">',
	        	url4 = '<img src="../sanpham/galaxyj7_4.jpg" width="200px" height="200px">',
	        	url5 = '<img src="../sanpham/galaxyj7_5.jpg" width="200px" height="200px">';

			$("#imgListProduct").fileinput({
				initialPreview: [url1, url2, url3, url4, url5],
				initialPreviewConfig: [
					{showDrag: false, },
					{showDrag: false, },
					{showDrag: false, },
					{showDrag: false, },
					{showDrag: false, }
				],
		        showUpload: false,
		        showClose: false,	
		        showRemove: false,
		        showBrowse: false,

		    });
		});
	</script>


</body>
</html>
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



		<div id="page-wrapper" class="addProduct">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<ol class="breadcrumb">
						  <li><a href="home-ban.php">Sản phẩm</a></li>
						  <li class="active">Thêm sản phẩm</li>
						</ol>
					</div>
				</div>

				<div class="row">
					<form id="infoProduct" class="form-horizontal" role="form">
						<div class="col-md-3 col-sm-3">
							<input id="imgDaiDien" name="" type="file">
						</div>
						<div class="col-md-9 col-sm-9">
							<div class="title"><h3>Thông tin chung</h3></div>
							<div class="form-group">
							    <label class="col-sm-2 control-label">Chọn danh mục <b style="color: red">*</b></label>
							    <div class="col-sm-10">
							      <select class="form-control">
							      	<option>-- Chọn danh mục sản phẩm --</option>
							      	<option value="">Apple</option>
							      	<option value="">Samsung</option>
							      	<option value="">Nokia</option>
							      	<option value="">Oppo</option>
							      	<option value="">Sony</option>
							      	<option value="">HTC</option>
							      	<option value="">LG</option>
							      	<option value="">Asus</option>
							      	<option value="">Masstel</option>
							      	<option value="">Motorola</option>
							      	<option value="">Xiaomi</option>
							      	<option value="">MobiiStart</option>
							      	<option value="">Wiko</option>
							      	<option value="">Lenovo</option>
							      	<option value="">BlackBery</option>
							      </select>
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-sm-2 control-label">Tên sản phẩm <b style="color: red">*</b></label>
							    <div class="col-sm-10">
							      <input type="text" class="form-control" id="" placeholder="Nhập tên sản phẩm">
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-sm-2 control-label">Giá <b style="color: red">*</b></label>
							    <div class="col-sm-6">
							      <input type="text" class="form-control" id="" placeholder="Nhập giá">
							    </div>
							    <label class="col-sm-1 control-label">VND</label>							    
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Số lượng <b style="color: red">*</b></label>
							    <div class="col-sm-6">
							      <input type="text" class="form-control" id="" placeholder="Nhập số lượng">
							    </div>
							</div>
							<div class="form-group">
							    <label class="col-sm-2 control-label">Xuất xứ <b style="color: red">*</b></label>
							    <div class="col-sm-6">
							      <input type="text" class="form-control" id="" placeholder="Nhập xuất xứ">
							    </div>							    
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Bảo hành <b style="color: red">*</b></label>
							    <div class="col-sm-6">
							      <select class="form-control">
							      	<option>-- Chọn thời gian bảo hành --</option>
							      	<option value="1">1 tháng</option>
							      	<option value="2">2 tháng</option>
							      	<option value="3">3 tháng</option>
							      	<option value="4">4 tháng</option>
							      	<option value="5">5 tháng</option>
							      	<option value="6">6 tháng</option>
							      	<option value="7">7 tháng</option>
							      	<option value="8">8 tháng</option>
							      	<option value="9">9 tháng</option>
							      	<option value="10">10 tháng</option>
							      	<option value="11">11 tháng</option>
							      	<option value="12">12 tháng</option>
							      </select>
							    </div>
							</div>
						</div> <!-- end thông tin -->
						<div class="clearfix"></div>

						<div class="col-md-12 col-sm-12">
							<div class="title"><h3>Thuộc tính sản phẩm</h3></div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Độ phân giải màn hình <b style="color: red">*</b></label>
							    <div class="col-sm-4">
							    	<input type="text" name="" class="form-control" placeholder="Nhập độ phân giải màn hình">
							    </div>
								<label class="col-sm-2 control-label">Kích thước màn hình <b style="color: red">*</b></label>
							    <div class="col-sm-4">
							      <select class="form-control">
							      	<option>-- Chọn kích thước màn hình --</option>
							      	<option value="2.5">Dưới 2.5 inches</option>
							      	<option value="2.6">2.6 inches</option>
							      	<option value="2.7">2.7 inches</option>
							      	<option value="2.8">2.8 inches</option>
							      	<option value="2.9">2.9 inches</option>
							      	<option value="3.0">3.0 inches</option>
							      	<option value="3.1">3.1 inches</option>
							      	<option value="3.2">3.2 inches</option>
							      	<option value="3.3">3.3 inches</option>
							      	<option value="3.4">3.4 inches</option>
							      	<option value="3.5">3.5 inches</option>
							      	<option value="3.6">3.6 inches</option>
							      	<option value="3.7">3.7 inches</option>
							      	<option value="3.8">3.8 inches</option>
							      	<option value="3.9">3.9 inches</option>
							      	<option value="4.0">4.0 inches</option>
							      	<option value="4.1">4.1 inches</option>
							      	<option value="4.2">4.2 inches</option>
							      	<option value="4.3">4.3 inches</option>
							      	<option value="4.4">4.4 inches</option>
							      	<option value="4.5">4.5 inches</option>
							      	<option value="4.6">4.6 inches</option>
							      	<option value="4.7">4.7 inches</option>
							      	<option value="4.8">4.8 inches</option>
							      	<option value="4.9">4.9 inches</option>
							      	<option value="5.0">5.0 inches</option>
							      	<option value="5.1">5.1 inches</option>
							      	<option value="5.2">5.2 inches</option>
							      	<option value="5.3">5.3 inches</option>
							      	<option value="5.4">5.4 inches</option>
							      	<option value="5.5">5.5 inches</option>
							      	<option value="5.6">5.6 inches</option>
							      	<option value="5.7">5.7 inches</option>
							      	<option value="5.8">5.8 inches</option>
							      	<option value="5.9">5.9 inches</option>
							      	<option value="6.0">6.0 inches</option>
							      </select>							    
							    </div>							    
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Hệ điều hành <b style="color: red">*</b></label>
							    <div class="col-sm-4">
							    	<input type="text" name="" class="form-control" placeholder="Nhập hệ điều hành">
							    </div>
								<label class="col-sm-2 control-label">Màu sắc <b style="color: red">*</b></label>
							    <div class="col-sm-4">
							    	<select class="form-control">
							    		<option>-- Chọn màu sắc --</option>
							    		<option>Đen</option>
							    		<option>Vàng</option>
							    		<option>Đỏ</option>
							    		<option>Trắng</option>
							    		<option>Đồng đỏ</option>
							    		<option>Kem</option>
							    		<option>Xanh</option>
							    		<option>Cam</option>
							    		<option>Bạc</option>
							    		<option>Xanh</option>
							    		<option>Xám</option>
							    		<option>Hồng</option>
							    		<option>Nâu</option>
							    		<option>Tím</option>
							    	</select>
							    </div>							    
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Camera trước <b style="color: red">*</b></label>
							    <div class="col-sm-4">
							    	<select class="form-control">
							    		<option>-- Chọn độ phân giải camera trước --</option>
							    		<option>1 MP</option>
							    		<option>2 MP</option>
							    		<option>3 MP</option>
							    		<option>4 MP</option>
							    		<option>5 MP</option>
							    		<option>6 MP</option>
							    		<option>7 MP</option>
							    		<option>8 MP</option>
							    		<option>9 MP</option>
							    		<option>10 MP</option>
							    		<option>11 MP</option>
							    		<option>12 MP</option>
							    		<option>13 MP</option>
							    		<option>Không có camera</option>
							    	</select>
							    </div>
							    <label class="col-sm-2 control-label">Camera sau <b style="color: red">*</b></label>
							    <div class="col-sm-4">
							    	<select class="form-control">
							    		<option>-- Chọn độ phân giải camera sau --</option>
							    		<option>1 MP</option>
							    		<option>2 MP</option>
							    		<option>3 MP</option>
							    		<option>4 MP</option>
							    		<option>5 MP</option>
							    		<option>6 MP</option>
							    		<option>7 MP</option>
							    		<option>8 MP</option>
							    		<option>9 MP</option>
							    		<option>10 MP</option>
							    		<option>11 MP</option>
							    		<option>12 MP</option>
							    		<option>13 MP</option>
							    		<option>14 MP</option>
							    		<option>15 MP</option>
							    		<option>16 MP</option>
							    		<option>17 MP</option>
							    		<option>18 MP</option>
							    		<option>19 MP</option>
							    		<option>20 MP</option>
							    		<option>Không có camera</option>
							    	</select>
							    </div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">Bộ nhớ trong <b style="color: red">*</b></label>
							    <div class="col-sm-4">
							    	<input type="text" name="" class="form-control" placeholder="Nhập bộ nhớ trong">
							    </div>
							    <label class="col-sm-2 control-label">Dung lượng pin <b style="color: red">*</b></label>
							    <div class="col-sm-4">
							    	<input type="text" name="" class="form-control" placeholder="Nhập dung lượng pin">
							    </div>
							</div>
						</div> <!-- end thuộc tính sản phẩm -->


						<div class="col-md-12 col-sm-12">
							<div class="title"><h3>Mô tả sản phẩm</h3></div>
							<textarea name="editor1" class="ckeditor" id="editor1"></textarea>
						</div> <!--end mô tả sản phẩm -->

						<div class="col-md-12 col-sm-12">
							<div class="title"><h3>Ảnh sản phẩm</h3></div>
							<input id="img" name="" type="file">
								<input id="imgDaiDien" name="" type="file">
								<input id="imgDaiDien" name="" type="file">
								<input id="imgDaiDien" name="" type="file">
							
						</div>
					</form>
				</div>
			</div>
		</div>


	</div> <!-- end wrapper -->	




	<script>
		CKEDITOR.replace('editor1');

		$("#img").fileinput({
			overwriteInitial: true,
		   	showCaption: false,
		   	showUpload: false,
		   	showRemove: false,
		   	showClose: false,
		   	showDrag: false,
		   	showBrowse: false,
		   	browseOnZoneClick: true,
		   	msgInvalidFileExtension: 'Chỉ hỗ trợ file jpg, png, gif',
		   	msgZoomTitle: 'Phóng to',
		   	msgZoomModalHeading: 'Ảnh phóng to',
		   	defaultPreviewContent: '<img src="../img/imgdaidien.png" class="file-preview-image" width="200px" height="200px"><h4>Click chọn ảnh đại diện</h4>',
		   	allowedFileExtensions: ["jpg", "png", "gif"]
		});

		$("#imgDaiDien").fileinput({
			overwriteInitial: true,
		   	showCaption: false,
		   	showUpload: false,
		   	showRemove: true,
		   	removeLabel: '&nbsp;Xóa ảnh',
		   	removeClass: 'btn btn-danger',
		   	showClose: false,
		   	showDrag: false,
		   	showBrowse: false,
		   	browseOnZoneClick: true,
		   	msgInvalidFileExtension: 'Chỉ hỗ trợ file jpg, png, gif',
		   	msgZoomTitle: 'Phóng to',
		   	msgZoomModalHeading: 'Ảnh phóng to',
		   	defaultPreviewContent: '<img src="../img/imgdaidien.png" class="file-preview-image" width="200px" height="200px"><h4>Click chọn ảnh đại diện</h4>',
		   	allowedFileExtensions: ["jpg", "png", "gif"]
		});
		
	</script>

</body>
</html>
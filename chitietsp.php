<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="icon" type="text/css" href="img/icon.png">
	<title>Mobile Store</title>


	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/stylechitietsp.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">

  	<!-- jQuery, Bootstrap JS -->
	<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">

	<script>
	    $(document).ready(function(){
	        $('[data-toggle="tooltip"]').tooltip();
	    });
    </script>


</head>


<body>

	<!-- Sub nav -->
	<div class="subnav">
		<div class="container">
			<ul class="submenu nav nav-pills  navbar-right">
				<li><a href="nguoiban/ban.php"><span class="fa fa-handshake-o"></span>&nbsp;&nbsp;Bán hàng cùng Mobile Store</a></li>
				<li>
					<button class="btndrop dropdown-toggle" data-toggle="dropdown">
						<span class="fa fa-phone-square"></span>
						&nbsp;Chăm sóc khách hàng&nbsp;
						<span class="fa fa-angle-down"></span>
					</button>
					<ul class="dropdown-menu dropdown-menu-left" role="menu">
						<li><a href="#"><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;&nbsp;Trung tâm hỗ trợ</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;&nbsp;Đơn hàng và thanh toán</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;&nbsp;Giao hàng và nhận hàng</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;&nbsp;Đổi trả và hoàn tiền</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;&nbsp;Liên hệ Mobile Store</a></li>
					</ul>
				</li>
				<li>
					<button class="btndrop dropdown-toggle" data-toggle="dropdown">
						<span class="fa fa-list-alt"></span>&nbsp;&nbsp;Kiểm tra đơn hàng&nbsp;
						<span class="fa fa-angle-down"></span>
					</button>
					<ul class="dropdown-menu dropdown-menu-left" role="menu">
						<form id="form-ktdonhang">
							<div class="form-group form-group-sm">
								<input type="text" name="madonhang" class="form-control " placeholder="Vui lòng nhập mã đơn hàng">
							</div>
							<div class="form-group form-group-sm">
								<input type="text" name="email" class="form-control"  placeholder="Vui lòng nhập địa chỉ email">
							</div>
							<button type="submit" class="btntim btn btn-sm btn-block">KIỂM TRA</button>
						</form>
					</ul>
				</li>
				<li>
					<button class="btndrop btnmodal" data-toggle="modal" data-target="#modalLogin" data-backdrop="static">
						<span class="fa fa-user"></span>&nbsp;&nbsp;Đăng nhập
					</button>
				</li>
				<li>
					<button class="btndrop btnmodal" data-toggle="modal" data-target="#modalRegister" data-backdrop="static">
						<span class="fa fa-user-plus"></span>&nbsp;&nbsp;Đăng ký
					</button>
				</li>

				<!-- Modal Đăng nhập -->
				<div class="modal" id="modalLogin" tabindex="-1" role="dialog">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close1" data-dismiss="modal">
									<span aria-hidden="true">&times;</span>
									<span class="sr-only">Close</span>
								</button>
								<h4 class="modal-title">ĐĂNG NHẬP TÀI KHOẢN</h4>
							</div>
							<div class="modal-body">
								<form id="form-dangki">
									<div class="form-group form-group-sm">
										<label>Email<b style="color: red;"> *</b></label>
										<input type="text" name="" class="form-control" placeholder="Nhập địa chỉ email">
									</div>
									<div class="form-group form-group-sm">
										<label>Mật khẩu<b style="color: red;"> *</b></label>
										<input type="text" name="" class="form-control" placeholder="Vui lòng nhập mật khẩu">
									</div>
								</form>						
							</div>
							<div class="modal-footer">
								<button type="submit" class="btntim btn btn-block">ĐĂNG NHẬP</button>
							</div>
						</div>
					</div>
				</div> <!-- end modal đăng nhập -->

				<!-- Modal Đăng Kí -->
				<div class="modal" id="modalRegister" tabindex="-1" role="dialog">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close1" data-dismiss="modal">
									<span aria-hidden="true">&times;</span>
									<span class="sr-only">Close</span>
								</button>
								<h4 class="modal-title">ĐĂNG KÍ TÀI KHOẢN</h4>
							</div>
							<div class="modal-body">
								<form id="form-dangki">
									<div class="form-group form-group-sm">
										<label>Họ và Tên<b style="color: red;"> *</b></label>
										<input type="text" name="" class="form-control" placeholder="Nhập họ tên">
									</div>
									<div class="form-group form-group-sm">
										<label>Email<b style="color: red;"> *</b></label>
										<input type="text" name="" class="form-control" placeholder="Nhập địa chỉ email muốn đăng kí">
									</div>
									<div class="form-group form-group-sm">
										<label>Mật khẩu<b style="color: red;"> *</b></label>
										<input type="text" name="" class="form-control" placeholder="Vui lòng nhập mật khẩu">
									</div>
									<div class="form-group form-group-sm">
										<label>Nhập lại mật khẩu<b style="color: red;"> *</b></label>
										<input type="text" name="" class="form-control" placeholder="Vui lòng nhập lại mật khẩu">
									</div>
								</form>						
							</div>
							<div class="modal-footer">
								<button type="submit" class="btntim btn btn-block">ĐĂNG KÍ</button>
							</div>
						</div>
					</div>
				</div> <!-- end modal đăng kí -->
			</ul>
		</div>
	</div>


	<!-- Main Nav -->
	<nav id="top-nav" class="navbar" role="navigation" data-spy="affix" data-offset-top="300">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainnav">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">
	      	<img id="logo" src="img/logo2.png" alt="logoMobileStore">
	      </a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div id="mainnav" class="collapse navbar-collapse">
	      <form class="navbar-form navbar-left" role="search">
	        <div class="input-group">
	          <input type="search" placeholder="Nhập từ khóa tìm kiếm ...">
	          <select name="" id="select-danhmuc">
	          	<option value="">Tất cả danh mục</option>
	          	<option selected="active" value="Apple">Apple</option>
	          	<option value="Samsung">Samsung</option>
	          	<option value="Nokia">Nokia</option>
	          	<option value="Oppo">Oppo</option>
	          	<option value="Sony">Sony</option>
	          	<option value="HTC">HTC</option>
	          	<option value="LG">LG</option>
	          	<option value="Asus">Asus</option>
	          	<option value="Masstel">Masstel</option>
	          	<option value="Motorola">Motorola</option>
	          	<option value="Xiaomi">Xiaomi</option>
	          	<option value="MobiiStar">MobiiStar</option>
	          	<option value="Wiko">Wiko</option>
				<option value="Lenovo">Lenovo</option>
				<option value="BlackBery">BlackBery</option>
	          </select>
	          <span class="input-group-btn">
	          	<button type="submit" class="btn btn-search">
	          		&nbsp;<span class="fa fa-search"></span>
	          	</button>
	          </span>
	        </div>
	      </form>
	      <ul class="nav-right nav navbar-nav navbar-right">
	        <li>
	        	<button class="btn-cart navbar-btn" data-toggle="modal" data-target="#modalCart" data-backdrop="static">
		          	<span class="fa fa-shopping-cart"></span>&nbsp;&nbsp;Giỏ hàng&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		          	<span class="badge">9</span>
		        </button> 
	        </li>
	        <li>
	          	<button class="btn-yeuthich navbar-btn">
	       	  		<span class="fa fa-heart-o"></span>&nbsp;&nbsp;Yêu thích&nbsp;&nbsp;
	       	  		<span class="badge">9</span>
	        	</button>
	        </li>
	      </ul>	      
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->

	  <!-- Modal Giỏ hàng -->
	  <div class="modal" id="modalCart" tabindex="-1" role="dialog">
	  	<div class="modal-dialog">
	  		<div class="modal-content">
	  			<div class="modal-header">
	  				<button type="button" class="close1" data-dismiss="modal">
	  					<span aria-hidden="true">&times;</span>
	  					<span class="sr-only">Close</span>
	  				</button>
	  				<h5 class="modal-title">
	  					<span class="fa fa-shopping-cart"></span>
	  					&nbsp;<b style="font-size: 14px; color: #2930FF; text-align: center;">GIỎ HÀNG </b>
	  					( <b style="color: #DA0000">9</b> sản phẩm )
	  				</h5>	  				
	  			</div>
	  			<div class="modal-body">
	  				<div class="container-fluid list-cart">
	  					<div class="title-cart">
		  					<div class="row">
			  					<div class="col-md-6">Sản phẩm</div>
			  					<div class="col-md-2" style="text-align: center;">Số lượng</div>
			  					<div class="col-md-2" style="text-align: right;">Giá thành</div>
			  					<div class="col-md-2"></div>
		  					</div> 
	  					</div>
	  					<div class="box-scroll">			
			  				<div class="row detail-cart">
			  					<div class="col-md-6">
			  						<img id="imageProduct" src="sanpham/GalaxyS7_32GB.jpg" alt="imageProduct">
			  						<div class="ten-sp">
				  						<label>ĐIỆN THOẠI SAMSUNG GALAXY S7 Edge 32GB (BẠC) FULL BOX</label>
				  						<a href="#"><span class="fa fa-heart-o">&nbsp;&nbsp;Thêm vào danh sách yêu thích</span></a>
			  						</div>
			  					</div>
			  					<div class="col-md-2 sl-cart">
			  						<select name="" id="">
			  							<option value="1">1</option>
			  							<option selected="" value="2">2</option>
			  							<option value="3">3</option>
			  							<option value="4">4</option>
			  							<option value="5">5</option>
			  						</select>
			  					</div>
			  					<div class="col-md-2 gia-cart">
			  						<label>3.790.000 đ</label>
			  					</div>			  					
			  					<div class="col-md-2 xoasp-cart">
			  						<button type="submit"><span class="fa fa-trash-o"></span></button>
			  					</div>
			  				</div>
			  				
			  				<div class="row detail-cart">
			  					<div class="col-md-6">
			  						<img id="imageProduct" src="sanpham/GalaxyS7_32GB.jpg" alt="imageProduct">
			  						<div class="ten-sp">
				  						<label>ĐIỆN THOẠI SAMSUNG GALAXY S7 Edge 32GB (BẠC) FULL BOX</label>
				  						<a href="#"><span class="fa fa-heart-o">&nbsp;&nbsp;Thêm vào danh sách yêu thích</span></a>
			  						</div>
			  					</div>
			  					<div class="col-md-2 sl-cart">
			  						<select name="" id="">
			  							<option value="1">1</option>
			  							<option selected="" value="2">2</option>
			  							<option value="3">3</option>
			  							<option value="4">4</option>
			  							<option value="5">5</option>
			  						</select>
			  					</div>
			  					<div class="col-md-2 gia-cart">
			  						<label>3.790.000 đ</label>
			  					</div>			  					
			  					<div class="col-md-2 xoasp-cart">
			  						<button type="submit"><span class="fa fa-trash-o"></span></button>
			  					</div>
			  				</div>

			  				<div class="row detail-cart">
			  					<div class="col-md-6">
			  						<img id="imageProduct" src="sanpham/GalaxyS7_32GB.jpg" alt="imageProduct">
			  						<div class="ten-sp">
				  						<label>ĐIỆN THOẠI SAMSUNG GALAXY S7 Edge 32GB (BẠC) FULL BOX</label>
				  						<a href="#"><span class="fa fa-heart-o">&nbsp;&nbsp;Thêm vào danh sách yêu thích</span></a>
			  						</div>
			  					</div>
			  					<div class="col-md-2 sl-cart">
			  						<select name="" id="">
			  							<option value="1">1</option>
			  							<option selected="" value="2">2</option>
			  							<option value="3">3</option>
			  							<option value="4">4</option>
			  							<option value="5">5</option>
			  						</select>
			  					</div>
			  					<div class="col-md-2 gia-cart">
			  						<label>3.790.000 đ</label>
			  					</div>			  					
			  					<div class="col-md-2 xoasp-cart">
			  						<button type="submit"><span class="fa fa-trash-o"></span></button>
			  					</div>
			  				</div>	  				
			  			</div>	
	  				</div>
		  		</div>
	  			<div class="modal-footer">
	  				<label class="label-thanhtien">Thành tiền:</label>
	  				<label class="label-tong"> 17.980.000 VND</label>
	  				<div class="label-vat">(Đã bao gồm VAT)</div>
	  				<div class="footer-cart">
	  					<a class="tieptuc-cart" href="trangchu.php"><span class="fa fa-undo">&nbsp;&nbsp;Tiếp tục mua hàng</span></a>
	  					<button class="thanhtoan-cart btn btn-danger" type="submit">TIẾN HÀNH THANH TOÁN</button>
	  				</div>
	  			</div>
	  		</div>
	  	</div>
	  </div> <!-- end modal giỏ hàng -->
	</nav> <!-- end main nav -->



	<!-- Nav bottom  -->
	<div class="nav-bottom container-fluid">
		<div class="container">
			<ul class="nav nav-pills">
				<li class="danhmuc">
					<button type="button" class="btn-danhmuc">
						<span class="fa fa-navicon"></span>&nbsp;&nbsp;&nbsp;DANH MỤC SẢN PHẨM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<span class="fa fa-angle-down"></span>
					</button>
					<div class="dropdown-content">
						<a href="#">Apple</a>
						<a href="#">Samsung</a>
						<a href="#">Nokia</a>				
						<a href="#">Oppo</a>
						<a href="#">Sony</a>
						<a href="#">HTC</a>
						<a href="#">LG</a>								
						<a href="#">Asus</a>
						<a href="#">Masstel</a>				
						<a href="#">Motorola</a>
						<a href="#">Xiaomi</a>
						<a href="#">MobiiStar</a>
						<a href="#">Wiko</a>
						<a href="#">Lenovo</a>
						<a href="#">BlackBery</a>
					</div>
				</li>
				<li>
					<a class="nav-bottom-km" href="#">
					<span class="fa fa-gift"></span>&nbsp;&nbsp;&nbsp;KHUYẾN MÃI
					</a>
				</li>
				<li><a class="nav-bottom-banchay" href="#"><span class="fa fa-tags"></span>&nbsp;&nbsp;&nbsp;BÁN CHẠY</a></li>
				<li><a class="nav-bottom-hangmoi" href="#"><span class="fa fa-tag"></span>&nbsp;&nbsp;&nbsp;HÀNG MỚI</a></li>	
			</ul>
		</div>
	</div>




	<!-- Body -->
	<div class="body container-fluid">
		<div class="container">
			<ol class="breadcrumb">
			  <li><a href="trangchu.php">Trang chủ</a></li>
			  <li><a href="#">Apple</a></li>
			  <li class="active">Iphone 6</li>
			</ol>


			<div class="container box-detail" style="background-color: red">
				<div class="col-md-3" style="background-color: blue">
					<img src="sanpham/hotwav.jpg" alt="imgMobile">
				</div>
				<div class="col-md-6" style="background-color: yellow">
					<h4><b>Điện thoại HOTWAV Tặng ốp lưng dán màn hình hàng nhập khẩu</b></h4>
					<label class="number-buy" data-toggle="tooltip" data-html="true" data-placement="top" title="Đã có 1 lượt mua"><span class="fa fa-tag">1</span></label>
					<label class="number-view" data-toggle="tooltip" data-html="true" data-placement="top" title="Đã có 5 lượt xem"><span class="fa fa-eye">5</span></label>
					<label class="number-cmt" data-toggle="tooltip" data-html="true" data-placement="top" title="Đã có 0 hỏi đáp"><span class="fa fa-comments">0</span></label>
					<hr>
					<h4>1,399,000đ</h4>
					<label>Giá trước đây:<del>1,900,000 đ</del></label><br>
					<label>Kho hàng: Nghệ An</label>
					<hr>
					<div class="panel">
						
					</div>
				</div>
			</div>

		</div>		 <!-- end container -->
	</div> <!-- end body -->





	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-3" style="border-right: 1px solid #DEDEDE;">
				<h5>Mobile Store</h5>
				<div>
					<a href="">Giới thiệu về Mobile Store</a>
					<a href="">Quy chế hoạt động</a>
					<a href="">Liên hệ với Mobile Store</a>
					<a href="">Trung tâm hỗ trợ khách hàng</a>
					<a href="">Đăng kí mở gian hàng</a>
				</div>
			</div>
			<div class="col-md-3" style="border-right: 1px solid #DEDEDE;">
				<h5>Chăm sóc khách hàng</h5>
				<div>
					<a href="">Kiểm tra đơn hàng</a>
					<a href="">Hướng dẫn mua hàng</a>
					<a href="">Phương thức vận chuyển</a>
					<a href="">Chính sách đổi trả</a>
					<a href="">Câu hỏi thường gặp</a>
				</div>
			</div>
			<div class="col-md-3" style="border-right: 1px solid #DEDEDE;">
				<h5>Hỗ trợ thanh toán online</h5>
				<div>
					<img src="img/nganluong.png" alt="logonganluong" style="width: 190px; height: 45px;">
				</div>
				<h5>Đối tác vận chuyển</h5>
				<img src="img/vietnampost.jpg" alt="logovnpost">
				<img src="img/logo-ghtk.png" alt="logoghtk">
				<img src="img/ghn.jpg" alt="logoghn">
			</div>
			<div class="col-md-3">
				<h5>Được chứng nhận</h5>
				<img src="img/bocongthuong.gif" alt="logobocongthuong">
			</div>
			<div class="col-md-12">
				<b>Copyright &copy; 2014 MobileStore.vn</b>
				<div>Công ty cổ phần công nghệ Mobile</div>
				<div>Địa chỉ: Số 108, Đường 3/2, Phường Xuân Khánh, Quận Ninh Kiều, Tp. Cần Thơ.</div>
			</div>
		</div>
	</div><!-- end footer -->


</body>
</html>
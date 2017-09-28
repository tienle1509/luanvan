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
	<link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
	<link rel="stylesheet" type="text/css" href="css/slick.css">
	<link rel="stylesheet" type="text/css" href="css/stylechitietsp.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css">

  	<!-- jQuery, Bootstrap JS -->
	<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
	<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>

	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">

	<script language="javascript">
	    $(document).ready(function(){
	        $('[data-toggle="tooltip"]').tooltip();   
	    });


	    /* Slick slider */
	    $(document).ready(function(){
	    	$('.slider-for').slick({
		   		slidesToShow: 1,
		   		slidesToScroll: 1,
		   		arrows: false,
		   		fade: true,
		 	});
		 	$('.slider-nav').slick({
		   		slidesToShow: 5,
			   	asNavFor: '.slider-for',
			   	focusOnSelect: true,
		 	});
		});
    </script>


</head>


<body>

	<!-- Sub nav -->
	<div class="subnav" style="background-color: red">
		<div class="container" style="background-color: yellow">
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


			<div class="container box-detail">
				<div class="img-product">
				  <div class="slider slider-for">
				    <div><img src="sanpham/galaxyj7_1.jpg"></div>
				    <div><img src="sanpham/galaxyj7_2.jpg"></div>
				    <div><img src="sanpham/galaxyj7_3.jpg"></div>
				    <div><img src="sanpham/galaxyj7_4.jpg"></div>
				    <div><img src="sanpham/galaxyj7_5.jpg"></div>
				  </div>
				  <div class="slider slider-nav">
				    <div style="margin-right: 10px"><img src="sanpham/galaxyj7_1.jpg"></div>
				    <div style="margin-right: 10px"><img src="sanpham/galaxyj7_2.jpg"></div>
				    <div style="margin-right: 10px"><img src="sanpham/galaxyj7_3.jpg"></div>
				    <div style="margin-right: 10px"><img src="sanpham/galaxyj7_4.jpg"></div>
				    <div style="margin-right: 10px"><img src="sanpham/galaxyj7_5.jpg"></div>
				  </div>
				<a href=""><span class="fa fa-heart-o">&nbsp;&nbsp;Tôi thích sản phẩm này</span></a>
				</div>


				<div class="info-product">
					<h4><b>Điện thoại HOTWAV Tặng ốp lưng dán màn hình hàng nhập khẩu</b></h4>
					<div>
						<label class="number-buy" data-toggle="tooltip" data-html="true" data-placement="top" title="Đã có 1 lượt mua"><span class="fa fa-tag">1</span></label>
						<label class="number-view" data-toggle="tooltip" data-html="true" data-placement="top" title="Đã có 5 lượt xem"><span class="fa fa-eye">5</span></label>
						<label class="number-cmt" data-toggle="tooltip" data-html="true" data-placement="top" title="Đã có 0 hỏi đáp"><span class="fa fa-comments">0</span></label>
					</div>
					<div class="col-md-6">
						<ul>
							<li>Hãng sản xuất: Hotwav</li>
							<li>Kích thước màn hình: 5.5inch-6.0inch</li>
							<li>Độ phân giải màn hình: 1080x1920 pixels</li>
							<li>Hệ điều hành: Android</li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul>
							<li>Ram: 1Gb</li>
							<li>Bộ nhớ trong: 8GB</li>							
							<li>Camera: 5MP</li>
							<li>Dung lượng pin (mAh): 4100 mAh</li>
							<li>Thời gian bảo hành 12 tháng</li>
						</ul>
					</div>
					<div class="clearfix"></div>
					<hr>
					<label>Số lượng</label>
					<select name="soluong">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
					<label>(Còn lại 3 sản phẩm)</label>
					<hr>
					<h4>1,399,000đ</h4>
					<label>Giá trước đây:<del>1,900,000 đ</del></label><br>
					<hr>
					<button type="button" class="btn"><span class="fa fa-shopping-cart"></span>&nbsp;&nbsp;Thêm vào giỏ hàng</button>
					<button type="button" class="btn"><span class="fa fa-check"></span>&nbsp;&nbsp;Mua ngay</button>
					<a href="huongdanmuahang"><span class="fa fa-desktop"></span>&nbsp;&nbsp;Hướng dẫn mua hàng</a>
				</div>


				<div class="ship-product" style="background-color: gray">
					<label><span class="fa fa-map-marker"></span>Kiểm tra thời gian giao hàng</label>
					<select class="selectpicker" data-live-search="true">
			    	<option value=""> Tỉnh/Thành phố</option>
			    	<option value="1">Hồ Chí Minh</option>
			    	<option value="2">Hà Nội</option>
			    	<option value="3">An Giang</option>
			    	<option value="5">Bắc Kạn</option>
			    	<option value="6">Bắc Giang</option>
			    	<option value="7">Bạc Liêu</option>
			    	<option value="8">Bắc Ninh</option>
			    	<option value="9">Bến Tre</option>
			    	<option value="11">Bình Định</option>
			    	<option value="12">Bình Phước</option>
			    	<option value="13">Bình Thuận</option>
			    	<option value="14">Cà Mau</option>
			    	<option value="15">Cần Thơ</option>
			    	<option value="16">Cao Bằng</option>
			    	<option value="17">Đà Nẵng</option>
			    	<option value="18">Đắk Lắk</option>
			    	<option value="19">Điện Biên</option>
			    	<option value="20">Đồng Nai</option>
			    	<option value="21">Gia Lai</option>
			    	<option value="22">Hà Giang</option>
			    	<option value="23">Hà Nam</option>
			    	<option value="24">Hậu Giang</option>
			    	<option value="25">Hà Tĩnh</option>
			    	<option value="26">Hải Dương</option>
			    	<option value="27">Hải Phòng</option>
			    	<option value="28">Hòa Bình</option>
			    	<option value="30">Khánh Hòa</option>
			    	<option value="32">Lai Châu</option>
			    	<option value="33">Lâm Đồng</option>
			    	<option value="34">Lạng Sơn</option>
			    	<option value="35">Lào Cai</option>
			    	<option value="36">Long An</option>
			    	<option value="37">Nam Định</option>
			    	<option value="38">Nghệ An</option>
			    	<option value="39">Ninh Thuận</option>
			    	<option value="40">Phú Thọ</option>
			    	<option value="41">Phú Yên</option>
			    	<option value="42">Quảng Bình</option>
			    	<option value="43">Quảng Nam</option>
			    	<option value="44">Quảng Ngãi</option>
			    	<option value="45">Quảng Ninh</option>
			    	<option value="46">Quảng Trị</option>
			    	<option value="47">Sóc Trăng</option>
			    	<option value="48">Tây Ninh</option>
			    	<option value="49">Thái Bình</option>
			    	<option value="50">Thái Nguyên</option>
			    	<option value="51">Thanh Hóa</option>
			    	<option value="52">Huế</option>
			    	<option value="53">Tiền Giang</option>
			    	<option value="54">Trà Vinh</option>
			    	<option value="55">Tuyên Quang</option>
			    	<option value="56">Kiên Giang</option>
			    	<option value="57">Vĩnh Phúc</option>
			    	<option value="58">Bà Rịa-Vũng Tàu</option>
			    	<option value="59">Yên Bái</option>
			    	<option value="60">Vĩnh Long</option>
			    	<option value="61">Bình Dương</option>
			    	<option value="62">Đắk Nông</option>
			    	<option value="63">Đồng Tháp</option>
			    	<option value="64">Hưng Yên</option>
			    	<option value="65">Kon Tum</option>
			    	<option value="66">Ninh Bình</option>
			    	<option value="67">Sơn La</option>
			    </select>
				<hr>
				<div><span class="fa fa-map-marker"></span>Giao hàng toàn quốc</div>
				<div><span class="fa fa-file-text-o"></span>Nhà cung cấp xuất hóa đơn cho sản phẩm này</div>
				<div><img src="img/iconship.gif">Giao hàng bởi đối tác của Mobile Store</div>
				</div>
				<hr>
				<div><img src="img/marketplace.jpg">Sản phẩm được cung cấp bởi <label>ANHDUY</label></div>
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
				<img src="img/vietnampost.png" alt="logovnpost">
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
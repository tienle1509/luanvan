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
	<link rel="stylesheet" type="text/css" href="css/style-detailpro.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">

  	<!-- jQuery, Bootstrap JS -->
	<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
	<script type="text/javascript" src="js/jquery.elevatezoom.js"></script>


	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">

	<script language="javascript">
	    $(document).ready(function(){
	        $('[data-toggle="tooltip"]').tooltip();   
	    });
    </script>

</head>


<body>

	<header>
		<div class="container">
			<div class="row">
				<ul class="submenu nav nav-pills col-md-9 col-sm-9 pull-right">
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
			</div> <!--end row-->		
		</div>
	</header>
	<div class="clearfix"></div>



	<!-- header menu -->
	<div data-spy="affix" data-offset-top="300">
		<div class="container">
			<div class="row">
				<nav id="top-nav" class="navbar col-md-12 col-sm-12" role="navigation">
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
					  					&nbsp;<b style="font-size: 14px; text-align: center;">GIỎ HÀNG </b>
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
				</nav>	
			</div>		
		</div>	
	</div> <!-- end header menu -->

	<div class="nav-bottom ">
		<div class="container">
			<div class="row">
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
	</div>
	<div class="clearfix"></div>


	<!-- Body -->
	<div class="body">
		<div class="duongdan">
			<div class="container">
				<div class="row">
					<ol class="breadcrumb">
					  <li><a href="trangchu.php">TRANG CHỦ</a></li>
					  <li><a href="#">APPLE</a></li>
					  <li class="active">IPHONE 6</li>
					</ol>
				</div>
			</div>
		</div>

		
		<!-- Thông tin sản phẩm -->
		<div class="container box-detail">
			<div class="row">
				<div class="img-product col-md-4 col-sm-4">
				  <div class="slider-for">
				  	<img id="zoom_01" src="sanphamtb/galaxyj7_1.jpg" data-zoom-image="sanpham/galaxyj7_1.jpg"/>
				  </div>
				  <div id="gallery" class="slider-nav" >
				  	<a href="#" data-image="sanphamtb/galaxyj7_1.jpg" data-zoom-image="sanpham/galaxyj7_1.jpg">
				  		<img id="img_01" src="sanphamnho/galaxyj7_1.jpg">
				  	</a>				  
				  	<a href="#" data-image="sanphamtb/galaxyj7_2.jpg" data-zoom-image="sanpham/galaxyj7_2.jpg">
				  		<img id="img_01" src="sanphamnho/galaxyj7_2.jpg">
				  	</a>
				  	<a href="#" data-image="sanphamtb/galaxyj7_3.jpg" data-zoom-image="sanpham/galaxyj7_3.jpg">
				  		<img id="img_01" src="sanphamnho/galaxyj7_3.jpg">
				  	</a>
				  	<a href="#" data-image="sanphamtb/galaxyj7_4.jpg" data-zoom-image="sanpham/galaxyj7_4.jpg">
				  		<img id="img_01" src="sanphamnho/galaxyj7_4.jpg">
				  	</a>
				  	<a href="#" data-image="sanphamtb/galaxyj7_5.jpg" data-zoom-image="sanpham/galaxyj7_5.jpg">
				  		<img id="img_01" src="sanphamnho/galaxyj7_5.jpg">
				  	</a>				  
				  </div>
				  <a href=""><span class="fa fa-heart-o">&nbsp;&nbsp;Tôi thích sản phẩm này !</span></a>
				</div>


				<div class="info-product col-md-5 col-sm-5">
					<h4><b>Điện thoại HOTWAV Tặng ốp lưng dán màn hình hàng nhập khẩu</b></h4>
					<div class="row">
						<label class="number-buy" data-toggle="tooltip" data-html="true" data-placement="top" title="Đã có 1 lượt mua"><span class="fa fa-tag">1</span></label>
						<label class="number-view" data-toggle="tooltip" data-html="true" data-placement="top" title="Đã có 5 lượt xem"><span class="fa fa-eye">5</span></label>
						<label class="number-cmt" data-toggle="tooltip" data-html="true" data-placement="top" title="Đã có 0 hỏi đáp"><span class="fa fa-comments">0</span></label>
					</div>
					<div class="clearfix"></div>
					<hr>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<ul>
								<li>Hãng sản xuất: Hotwav</li>
								<li>Kích thước màn hình: 5.5inch-6.0inch</li>
								<li>Độ phân giải màn hình: 1080x1920 pixels</li>
								<li>Hệ điều hành: Android</li>
							</ul>
						</div>
						<div class="col-md-6 col-sm-6">
							<ul>
								<li>Ram: 1Gb</li>
								<li>Bộ nhớ trong: 8GB</li>							
								<li>Camera: 5MP</li>
								<li>Dung lượng pin (mAh): 4100 mAh</li>
								<li>Thời gian bảo hành 12 tháng</li>
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
					<hr>
					<div class="row label-soluong">
						<div class="col-md-3 col-sm-3">Số lượng:</div>
						<select name="soluong">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>(Còn lại 3 sản phẩm)
					</div>
					<hr>
					<div class="row label-gia">
						<h3>1,399,000 đ</h3>
						<div class="col-md-8 col-sm-8">Giá trước đây: <del>1,900,000 đ</del></div>
					</div>
					<div class="row time-ship">
						<div class="col-md-3 col-sm-3">Giao hàng: </div>
						<label>Thời gian giao hàng trong vòng 6-7 ngày.</label>
					</div>
					<div class="row list-btn">
						<button type="button" class="btn btn-addCart" data-toggle="modal" data-target="#modalCart"><span class="fa fa-shopping-cart"></span>&nbsp;&nbsp;Thêm vào giỏ hàng</button>
						<button type="button" class="btn btn-buyPro"><span class="fa fa-check"></span>&nbsp;&nbsp;Mua ngay</button>					
					</div>
					<div class="row pull-right label-huongdanmua">
						<a href="huongdanmuahang"><img src="img/iconhuongdanmua.png"><label>Hướng dẫn<br>mua hàng</label></a>
					</div>
				</div>



				<div class="ship-product col-md-3 col-sm-3">
					<h5><span class="fa fa-map-marker"></span>&nbsp;&nbsp;<b>Kiểm tra thời gian giao hàng</b></h5>
					<select class="selectpicker dropup" data-live-search="true" data-width="215px">
				    	<option value="0"> Tỉnh/Thành phố</option>
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
				    <button id="btn-diadiem" type="submit" class="btn btn-danger btn-md" disabled>CHỌN</button>
					<hr>
					<div class="row"><span class="fa fa-map-marker"></span>&nbsp;&nbsp;Giao hàng toàn quốc</div>
					<div class="row"><span class="fa fa-file-text-o"></span>&nbsp;&nbsp;Nhà cung cấp xuất hóa đơn cho sản phẩm này</div>
					<div class="row"><img src="img/iconship.png">&nbsp;&nbsp;Giao hàng bởi đối tác của Mobile Store</div>
					<hr>
					<div class="row noicungcap">
						<div class="col-md-3 col-sm-3"><img src="img/marketplace.jpg"></div>Sản phẩm được cung cấp bởi<br><b>&nbsp;&nbsp;ANHDUY</b>
					</div>
				</div>
			</div>
		</div> <!-- end box detail -->




	</div> <!--end body -->




	<div class="footer">
		
	</div>




	<script>
    	$("#zoom_01").elevateZoom({gallery:'gallery', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true,
    								zoomWindowWidth:550, zoomWindowHeight:500, zoomWindowOffetx:20, zoomWindowOffety:5}); 
	</script>

</body>
</html>
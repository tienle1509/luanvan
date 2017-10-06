<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="icon" type="text/css" href="img/icon.png">
	<title>Chi tiết sản phẩm</title>


	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
	<link rel="stylesheet" type="text/css" href="css/style-detailpro.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/star-rating.css">

  	<!-- jQuery, Bootstrap JS -->
	<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
	<script type="text/javascript" src="js/jquery.elevatezoom.js"></script>
	<script type="text/javascript" src="js/star-rating.js"></script>


	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">

	<script language="javascript">
	    $(document).ready(function(){
	        $('[data-toggle="tooltip"]').tooltip();   
	    });


	    /* Show hide nội dung mô tả */
	    $(document).ready(function(){
	    	$('#showhiddenMota').click(function(){
	    		if(ndMota.style.overflow === "hidden" && ndMota.style.height ==="500px"){
		    		ndMota.style.overflow = "visible";
			    	ndMota.style.height = "auto";
			    	document.getElementById("showhiddenMota").innerHTML = "Thu gọn&nbsp;&nbsp;&nbsp;<span class='fa fa-angle-double-up'></span>";
			    }
			    else if(ndMota.style.overflow === "visible" && ndMota.style.height === "auto"){
			    	ndMota.style.overflow = "hidden";
		    		ndMota.style.height="500px";
		    		document.getElementById("showhiddenMota").innerHTML = "Xem thêm&nbsp;&nbsp;<span class='fa fa-angle-double-down'></span>";
			    }
	    	});	    	
	    });

	    /* Show collapse nhập đánh giá khi ấn button đánh giá*/
	    $(document).ready(function(){
	    	$('#btn-danhgia').click(function(){
	    		$('#panel-danhgia').collapse('show');
	    	});
	    });

    </script>

</head>


<body >

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
					  					<a href="dathang1.php" class="thanhtoan-cart btn btn-danger">TIẾN HÀNH THANH TOÁN</a>
					  				</div>
					  			</div>
					  		</div>
					  	</div>
					</div> <!-- end modal giỏ hàng -->
				</nav>	
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
					</div>
					<div class="row label-huongdanmua">
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


		<!-- Panel Mô tả sản phẩm -->
		<nav id="navbar-list" class="navbar" data-spy="affix" data-offset-top="60"">
			<div class="collapse navbar-collapse container">
				<div class="row">
					<ul class="nav navbar-nav col-md-9 col-sm-8">
						<li><a id="link-mota" href="#mota">Mô tả</a></li>
						<li><a href="#thongso">Thông số kĩ thuật</a></li>
						<li><a href="#cauhoi">Câu hỏi</a></li>
						<li><a href="#danhgia">Đánh giá & nhận xét</a></li>					
					</ul>
					<ul class="col-md-2 col-sm-3">
						<div class="row">
						<button type="button" class="btn btn-addCart" data-toggle="modal" data-target="#modalCart"><span class="fa fa-shopping-cart"></span>&nbsp;&nbsp;Thêm vào giỏ hàng</button>
						</div>
					</ul>
				</div>
			</div>
		</nav>


		<div id="panel-thongtin" class="container">
			<div class="row">
				<div class="col-md-9 col-sm-9">	
					<div id="mota" class="row">
						<div class="tieude"><h4>Mô tả sản phẩm</h4></div>
						<div id="ndMota" class="col-md-12 col-sm-12" style="overflow: hidden; height: 500px;">
							<p>	Không còn jack cắm tai nghe truyền thống, thay vào đó tai tai nghe EarPod không dây hoặc kết nối thông quan đầu cắm Lightning. Dung lượng bộ nhớ được tăng đáng kể, bạn có thể sở hữu phiên bản lên đến 256GB. Ngoài những màu sắc quen thuộc, Apple đã giới thiệu đến người dùng phiên bản màu đen bóng (Jet Black) cực kỳ ấn tượng. Trọng lượng máy nhẹ hơn và màn hình sáng hơn cũng là một điểm đáng chú ý. Nhờ bỏ đi jack cắm tai nghe Apple đã có thể trang bị hệ thống loa kép với âm thanh stereo cực kỳ sống động. Apple đã loại bỏ nút Home vật lý thay bằng nút cảm ứng với công nghệ cảm ứng lực Force Touch độc đáo. Cuối cùng là pin “khủng” hơn, bộ xử lý mạnh hơn cũng như camera tốt hơn hỗ trợ quay video 4K.<br>
							Nút Home vật lý quen thuộc ngày nào giờ đây đã được thay bằng nút Home cảm ứng tích hợp cảm ứng lực mang lại trải nghiệm hoàn hảo hơn. Nút Home trên iPhone 7 hoạt động song song với Taptic Engine mới cho độ nhạy cao, phản hồi chính xác trong từng lực nhấn của người dùng. Nút home vẫn giữ nguyên chức năng cảm biến vân tay Tuoch ID, cũng như Apple Pay dùng để thanh toán một cách an toàn.
							Không còn jack cắm tai nghe truyền thống, thay vào đó tai tai nghe EarPod không dây hoặc kết nối thông quan đầu cắm Lightning. Dung lượng bộ nhớ được tăng đáng kể, bạn có thể sở hữu phiên bản lên đến 256GB. Ngoài những màu sắc quen thuộc, Apple đã giới thiệu đến người dùng phiên bản màu đen bóng (Jet Black) cực kỳ ấn tượng. Trọng lượng máy nhẹ hơn và màn hình sáng hơn cũng là một điểm đáng chú ý. Nhờ bỏ đi jack cắm tai nghe Apple đã có thể trang bị hệ thống loa kép với âm thanh stereo cực kỳ sống động. Apple đã loại bỏ nút Home vật lý thay bằng nút cảm ứng với công nghệ cảm ứng lực Force Touch độc đáo. Cuối cùng là pin “khủng” hơn, bộ xử lý mạnh hơn cũng như camera tốt hơn hỗ trợ quay video 4K.<br>
							Nút Home vật lý quen thuộc ngày nào giờ đây đã được thay bằng nút Home cảm ứng tích hợp cảm ứng lực mang lại trải nghiệm hoàn hảo hơn. Nút Home trên iPhone 7 hoạt động song song với Taptic Engine mới cho độ nhạy cao, phản hồi chính xác trong từng lực nhấn của người dùng. Nút home vẫn giữ nguyên chức năng cảm biến vân tay Tuoch ID, cũng như Apple Pay dùng để thanh toán một cách an toàn.
							<p>	Không còn jack cắm tai nghe truyền thống, thay vào đó tai tai nghe EarPod không dây hoặc kết nối thông quan đầu cắm Lightning. Dung lượng bộ nhớ được tăng đáng kể, bạn có thể sở hữu phiên bản lên đến 256GB. Ngoài những màu sắc quen thuộc, Apple đã giới thiệu đến người dùng phiên bản màu đen bóng (Jet Black) cực kỳ ấn tượng. Trọng lượng máy nhẹ hơn và màn hình sáng hơn cũng là một điểm đáng chú ý. Nhờ bỏ đi jack cắm tai nghe Apple đã có thể trang bị hệ thống loa kép với âm thanh stereo cực kỳ sống động. Apple đã loại bỏ nút Home vật lý thay bằng nút cảm ứng với công nghệ cảm ứng lực Force Touch độc đáo. Cuối cùng là pin “khủng” hơn, bộ xử lý mạnh hơn cũng như camera tốt hơn hỗ trợ quay video 4K.<br>
							Nút Home vật lý quen thuộc ngày nào giờ đây đã được thay bằng nút Home cảm ứng tích hợp cảm ứng lực mang lại trải nghiệm hoàn hảo hơn. Nút Home trên iPhone 7 hoạt động song song với Taptic Engine mới cho độ nhạy cao, phản hồi chính xác trong từng lực nhấn của người dùng. Nút home vẫn giữ nguyên chức năng cảm biến vân tay Tuoch ID, cũng như Apple Pay dùng để thanh toán một cách an toàn.
							Không còn jack cắm tai nghe truyền thống, thay vào đó tai tai nghe EarPod không dây hoặc kết nối thông quan đầu cắm Lightning. Dung lượng bộ nhớ được tăng đáng kể, bạn có thể sở hữu phiên bản lên đến 256GB. Ngoài những màu sắc quen thuộc, Apple đã giới thiệu đến người dùng phiên bản màu đen bóng (Jet Black) cực kỳ ấn tượng. Trọng lượng máy nhẹ hơn và màn hình sáng hơn cũng là một điểm đáng chú ý. Nhờ bỏ đi jack cắm tai nghe Apple đã có thể trang bị hệ thống loa kép với âm thanh stereo cực kỳ sống động. Apple đã loại bỏ nút Home vật lý thay bằng nút cảm ứng với công nghệ cảm ứng lực Force Touch độc đáo. Cuối cùng là pin “khủng” hơn, bộ xử lý mạnh hơn cũng như camera tốt hơn hỗ trợ quay video 4K.<br>
							Nút Home vật lý quen thuộc ngày nào giờ đây đã được thay bằng nút Home cảm ứng tích hợp cảm ứng lực mang lại trải nghiệm hoàn hảo hơn. Nút Home trên iPhone 7 hoạt động song song với Taptic Engine mới cho độ nhạy cao, phản hồi chính xác trong từng lực nhấn của người dùng. Nút home vẫn giữ nguyên chức năng cảm biến vân tay Tuoch ID, cũng như Apple Pay dùng để thanh toán một cách an toàn.
							</p>
						</div>

						<div class="clearfix"></div>
						<div id="showhidden">
							<button id="showhiddenMota">Xem thêm&nbsp;&nbsp;<span class="fa fa-angle-double-down"></span></button>	
						</div>					
					</div>
					
						


					<div class="row" id="thongso">
						<div class="tieude"><h4>Thông số kĩ thuật</h4></div>
						<div class="label-baogom">
							<label>Bộ sản phẩm bao gồm: &nbsp;&nbsp;&nbsp;</label> 1 x Thân máy, 1 x Sạc, 1 x Tai nghe theo máy
						</div>
						<div class="label-dacdiem">
							<label>Đặc điểm chính:</label>
						</div>
						<div class="table-dacdiem">
							<table class="table table-bordered">
							    <tbody>
							      <tr><td class="title-table">Tên sản phẩm</td><td>Doe</td></tr>
							      <tr><td class="title-table">Màu sắc</td><td>Moe</td></tr>
							      <tr><td class="title-table">Xuất xứ</td><td>Moe</td></tr>
							      <tr><td class="title-table">Bộ nhớ trong</td><td>Dooley</td></tr>
							      <tr><td class="title-table">Kích thước</td><td>Doe</td></tr>
							      <tr><td class="title-table">Độ phân giải màn hình</td><td>Moe</td></tr>
							      <tr><td class="title-table">Camera Trước</td><td>Dooley</td></tr>
							      <tr><td class="title-table">Camera Sau</td><td>Doe</td></tr>
							      <tr><td class="title-table">Hệ điều hành</td><td>Moe</td></tr>
							      <tr><td class="title-table">Dung lượng pin</td><td>Dooley</td></tr>
							      <tr><td class="title-table">Thời gian bảo hành</td><td>Doe</td></tr>
							    </tbody>
							</table>
						</div>
					</div>


					<div class="row" id="cauhoi">
						<div class="tieude"><h4>Câu hỏi về sản phẩm này</h4></div>
						<div class="dndk">
							<p>Vui lòng 
								<a href="#" data-toggle="modal" data-target="#modalLogin" data-backdrop="static">Đăng nhập</a>
								hoặc 
								<a href="#" data-toggle="modal" data-target="#modalRegister" data-backdrop="static">Đăng ký ngay !</a> để đặt câu hỏi cho nhà bán hàng
							</p>
							<hr>
						</div>
						<div class="list-cauhoi">
							<div class="col-md-1 col-sm-1">
								<span class="fa fa-user-circle"></span>
							</div>
							<div class="col-md-11 col-sm-11">
								<div class="ndHoi">Máy tốt không nhỉ ?</div>
								<div class="tgHoi">KenT - ngày 20 tháng 9 năm 2017</div>
							</div>
							<div class="col-md-1 col-sm-1">
								<img src="img/marketplace_small.png">
							</div>
							<div class="col-md-11 col-sm-11">
								<div class="repHoi">Tốt em nhé ?</div>
								<div class="tgRep">Tên shop - đã trả lời ngày 21 tháng 9 năm 2017</div>
							</div>
							<div class="clearfix"></div>
							<hr>
						</div>

						<div class="list-cauhoi">
							<div class="col-md-1 col-sm-1">
								<span class="fa fa-user-circle"></span>
							</div>
							<div class="col-md-11 col-sm-11">
								<div class="ndHoi">Cho em hỏi thời gian và cách thức đặt hàng như thế nào ?</div>
								<div class="tgHoi">Ahihi T - ngày 10 tháng 9 năm 2017</div>
							</div>
							<div class="col-md-1 col-sm-1">
								
							</div>
							<div class="col-md-11 col-sm-11">
								<div class="repHoi">Chưa có câu trả lời</div>
							</div>
							<div class="clearfix"></div>
							<hr>
						</div>

						<div class="list-cauhoi">
							<div class="col-md-1 col-sm-1">
								<span class="fa fa-user-circle"></span>
							</div>
							<div class="col-md-11 col-sm-11">
								<div class="ndHoi">Mình ở hải phòng muốn mua sp này mà ko được ?</div>
								<div class="tgHoi">KenT - ngày 20 tháng 9 năm 2017</div>
							</div>
							<div class="col-md-1 col-sm-1">
								<img src="img/marketplace_small.png">
							</div>
							<div class="col-md-11 col-sm-11">
								<div class="repHoi">Chào bạn, hiện tại sản phẩm đang set mua hàng ở khu vực nội thành. Bạn vui lòng chờ 2-3 ngày để mua sản phẩm ở khu vực tỉnh thành nhé. Thank bạn!</div>
								<div class="tgRep">Tên shop - đã trả lời ngày 21 tháng 9 năm 2017</div>
							</div>
							<div class="clearfix"></div>
							<hr>
						</div>						
					</div> <!-- end hoi -->



					<div class="row" id="danhgia">
						<div class="tieude"><h4>Đánh giá & nhận xét cho sản phẩm Điện thoại HOTWAV tặng ốp lưng dán màn hình nhập khẩu</h4></div>
						<div class="label-diem"><p>Điểm đánh giá trung bình của sản phẩm</p></div>					
						<div class="table-danhgia">
							<table class="table table-bordered tbdanhgia">
							    <tbody>
							      <tr>
							        <td class="col-1">
							        	<input class="rating rating-loading" data-star="5" data-show-clear="false" data-show-caption="false" data-readonly="true" data-size="xs" value="1.4">
										<p>1.4 trên 5</p>
										<p>Có 32 nhận xét & đánh giá</p>
							        </td>
							        <td class="col-2">
							        	<div class="row">
											<div class="col-md-3 col-sm-3"><div>5 sao</div></div>
											<div class="col-md-6 col-sm-6">
												<div class="progress row" >
												  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
												  </div>
												</div>						
											</div>
											<div class="col-md-1 col-sm-1"><div>21</div>						
											</div>
										</div>							
										
										<div class="row">
											<div class="col-md-3 col-sm-3"><div>4 sao</div></div>
											<div class="col-md-6 col-sm-6">
												<div class="progress row" >
												  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%">
												  </div>
												</div>						
											</div>
											<div class="col-md-1 col-sm-1"><div>1</div>						
											</div>
										</div>	

										<div class="row">
											<div class="col-md-3 col-sm-3"><div>3 sao</div></div>
											<div class="col-md-6 col-sm-6">
												<div class="progress row" >
												  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
												  </div>
												</div>						
											</div>
											<div class="col-md-1 col-sm-1"><div>0</div>						
											</div>
										</div>	

										<div class="row">
											<div class="col-md-3 col-sm-3"><div>2 sao</div></div>
											<div class="col-md-6 col-sm-6">
												<div class="progress row" >
												  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width: 34%">
												  </div>
												</div>						
											</div>
											<div class="col-md-1 col-sm-1"><div>61</div>						
											</div>
										</div>	

										<div class="row">
											<div class="col-md-3 col-sm-3"><div>1 sao</div></div>
											<div class="col-md-6 col-sm-6">
												<div class="progress row" >
												  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100" style="width: 4%">
												  </div>
												</div>						
											</div>
											<div class="col-md-1 col-sm-1"><div>7</div>						
											</div>
										</div>	

							        </td>
							        <td class="col-3">
							        	<label>Bạn đã sử dụng sản phẩm này ?</label>
										<button id="btn-danhgia" type="button" class="btn">GỬI ĐÁNH GIÁ CỦA BẠN</button>
							        </td>
							      </tr>
							    </tbody>
							</table>
						</div>
						<div class="clearfix"></div>

						<!-- panel nhập đánh giá -->
						<div id="panel-danhgia" class="col-md-12 col-sm-12 collapse">
							<h5><b>Bạn chấm sản phẩm này bao nhiêu sao ?</b></h5>
							<form id="form-danhgia" role="form">
								<div class="form-group">
									<input id="ratingStar" class="rating-loading">
								</div>
							  	<div class="form-group">
								    <label>Tiêu đề đánh giá (Tùy chọn)</label>
								    <input type="text" class="form-control" placeholder="Nhập tiêu đề nhận xét tại đây">
							  	</div>
							  	<div class="form-group">
								    <label>Mô tả đánh giá</label><br>
								    <textarea placeholder="Nhập mô tả tại đây"  class="form-control" rows="3"></textarea>
							  	</div>
							  <button type="submit" class="btn">GỬI NHẬN XÉT</button>
							</form>
						</div>	


						<!-- Hiển thị các nhận xét & đánh giá -->
						<div id="show-danhgia" class="col-md-12 col-sm-12">
							<div class="label-nhanxet">
								<h5>Nhận xét về sản phẩm</h5>
							</div>
							<!-- Nội dung đánh giá của một người -->
							<div class="chitiet-danhgia">
								<div class="title-danhgia row">							
									<div class="col-md-2 col-sm-2">
										<img src="img/5sao.png">
									</div>
									<div class="col-md-7 col-sm-7">
										<div class="row">Vừa ý</div>
									</div>
									<div class="col-md-3 col-sm-3">
										<div class="row text-right">12/07/2017</div>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="nguoi-danhgia">Theo khách hàng Mobistore chưa đăng kí</div>
								<div class="nd-danhgia">
									mình lần đầu mua mà nhận sản phẩm bản lock, đi khắp các cửa hang đt, vào cả apple store mà cũng k lắp được sim.
									lúc mình lien hệ lại và yêu cầu đơn đặt hang mới phải đảm bảo sẽ dung đc sim VN mà Lazada vẫn trả lời mình là k đảm bảo được. Lần đầu mua mà rất that vọng.
								</div>
							</div> <!-- end nội dung đánh giá của một người -->
							<hr>
							
							<!-- Nội dung đánh giá của một người -->
							<div class="chitiet-danhgia">
								<div class="title-danhgia row">							
									<div class="col-md-2 col-sm-2">
										<img src="img/1sao.png">
									</div>
									<div class="col-md-7 col-sm-7">
										<div class="row">Không vừa ý</div>
									</div>
									<div class="col-md-3 col-sm-3">
										<div class="row text-right">12/07/2017</div>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="nguoi-danhgia">Theo khách hàng Mobistore chưa đăng kí</div>
								<div class="nd-danhgia">
									mình lần đầu mua mà nhận sản phẩm bản lock, đi khắp các cửa hang đt, vào cả apple store mà cũng k lắp được sim.
									lúc mình lien hệ lại và yêu cầu đơn đặt hang mới phải đảm bảo sẽ dung đc sim VN mà Lazada vẫn trả lời mình là k đảm bảo được. Lần đầu mua mà rất that vọng.
								</div>
							</div> <!-- end nội dung đánh giá của một người -->
							<hr>

							<!-- Nội dung đánh giá của một người -->
							<div class="chitiet-danhgia">
								<div class="title-danhgia row">							
									<div class="col-md-2 col-sm-2">
										<img src="img/4sao.png">
									</div>
									<div class="col-md-7 col-sm-7">
										<div class="row">Sản phẩm đẹp</div>
									</div>
									<div class="col-md-3 col-sm-3">
										<div class="row text-right">12/07/2017</div>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="nguoi-danhgia">Ngọc Ngân</div>
								<div class="nd-danhgia">
									mình lần đầu mua mà nhận sản phẩm bản lock, đi khắp các cửa hang đt, vào cả apple store mà cũng k lắp được sim.
									lúc mình lien hệ lại và yêu cầu đơn đặt hang mới phải đảm bảo sẽ dung đc sim VN mà Lazada vẫn trả lời mình là k đảm bảo được. Lần đầu mua mà rất that vọng.
								</div>
							</div> <!-- end nội dung đánh giá của một người -->
							<hr>
						</div>
					</div> <!-- end đánh giá -->					
				</div> <!-- end col-md-9 -->
			

				<!-- panel phải các sản phẩm gợi ý-->
				<div id="panel-goiy" class="col-md-3 col-sm-3">
					<div class="tieude"><h4>Sản phẩm tương tự</h4></div>
					<div class="list-spgoiy">
						<a id="sanpham" href="detailpro.php">
							<div class="thumbnail">
								<img src="sanpham/iphone4s.jpg">
								<div class="chietkhau">15%</div>
								<div class="caption">
									<div class="gia">
										<label class="giakm">1.700.000 đ</label>
										<del class="giagoc">2.500.000 đ</del>
									</div>
									<div class="tendt">
										<a href="chitietsanpham.php">ĐIỆN THOẠI IPHONE 4S-16GB CHÍNH HÃNG</a>
									</div>
									<div class="luotvote">
										<a href="#" data-toggle="tooltip" title="Đã có <b>1</b> lượt mua" data-html="true" data-placement="top">
											<span class="fa fa-tag">1</span>
										</a>
										<a href="#" data-toggle="tooltip" title="Đã có <b>5</b> lượt xem" data-html="true" data-placement="top">
											<span class="fa fa-eye">5</span>
										</a>
										<a href="#" data-toggle="tooltip" title="Đã có <b>0</b> bình luận" data-html="true" data-placement="top">
											<span class="fa fa-comment">0</span>
										</a>
									</div>
					  				<div class="ten-shop row">ANHDUY</div>
								</div>
							</div>
						</a>

						<a id="sanpham" href="detailpro.php">
							<div class="thumbnail">
								<img src="sanpham/iphone4s.jpg">
								<div class="chietkhau">15%</div>
								<div class="caption">
									<div class="gia">
										<label class="giakm">1.700.000 đ</label>
										<del class="giagoc">2.500.000 đ</del>
									</div>
									<div class="tendt">
										<a href="chitietsanpham.php">ĐIỆN THOẠI IPHONE 4S-16GB CHÍNH HÃNG</a>
									</div>
									<div class="luotvote">
										<a href="#" data-toggle="tooltip" title="Đã có <b>1</b> lượt mua" data-html="true" data-placement="top">
											<span class="fa fa-tag">1</span>
										</a>
										<a href="#" data-toggle="tooltip" title="Đã có <b>5</b> lượt xem" data-html="true" data-placement="top">
											<span class="fa fa-eye">5</span>
										</a>
										<a href="#" data-toggle="tooltip" title="Đã có <b>0</b> bình luận" data-html="true" data-placement="top">
											<span class="fa fa-comment">0</span>
										</a>
									</div>
					  				<div class="ten-shop row">ANHDUY</div>
								</div>
							</div>
						</a>

						<a id="sanpham" href="detailpro.php">
							<div class="thumbnail">
								<img src="sanpham/iphone4s.jpg">
								<div class="chietkhau">15%</div>
								<div class="caption">
									<div class="gia">
										<label class="giakm">1.700.000 đ</label>
										<del class="giagoc">2.500.000 đ</del>
									</div>
									<div class="tendt">
										<a href="chitietsanpham.php">ĐIỆN THOẠI IPHONE 4S-16GB CHÍNH HÃNG</a>
									</div>
									<div class="luotvote">
										<a href="#" data-toggle="tooltip" title="Đã có <b>1</b> lượt mua" data-html="true" data-placement="top">
											<span class="fa fa-tag">1</span>
										</a>
										<a href="#" data-toggle="tooltip" title="Đã có <b>5</b> lượt xem" data-html="true" data-placement="top">
											<span class="fa fa-eye">5</span>
										</a>
										<a href="#" data-toggle="tooltip" title="Đã có <b>0</b> bình luận" data-html="true" data-placement="top">
											<span class="fa fa-comment">0</span>
										</a>
									</div>
					  				<div class="ten-shop row">ANHDUY</div>
								</div>
							</div>
						</a>

						<a id="sanpham" href="detailpro.php">
							<div class="thumbnail">
								<img src="sanpham/iphone4s.jpg">
								<div class="chietkhau">15%</div>
								<div class="caption">
									<div class="gia">
										<label class="giakm">1.700.000 đ</label>
										<del class="giagoc">2.500.000 đ</del>
									</div>
									<div class="tendt">
										<a href="chitietsanpham.php">ĐIỆN THOẠI IPHONE 4S-16GB CHÍNH HÃNG</a>
									</div>
									<div class="luotvote">
										<a href="#" data-toggle="tooltip" title="Đã có <b>1</b> lượt mua" data-html="true" data-placement="top">
											<span class="fa fa-tag">1</span>
										</a>
										<a href="#" data-toggle="tooltip" title="Đã có <b>5</b> lượt xem" data-html="true" data-placement="top">
											<span class="fa fa-eye">5</span>
										</a>
										<a href="#" data-toggle="tooltip" title="Đã có <b>0</b> bình luận" data-html="true" data-placement="top">
											<span class="fa fa-comment">0</span>
										</a>
									</div>
					  				<div class="ten-shop row">ANHDUY</div>
								</div>
							</div>
						</a>
					</div>
				</div> <!-- end panel phải các sản phẩm gợi ý-->
			</div>
		</div>


	</div> <!--end body -->




	<!-- Footer -->
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3">
					<h4>Mobile Store</h4>
					<div>
						<a href="">Giới thiệu về Mobile Store</a>
						<a href="">Quy chế hoạt động</a>
						<a href="">Liên hệ với Mobile Store</a>
						<a href="">Trung tâm hỗ trợ khách hàng</a>
						<a href="">Đăng kí mở gian hàng</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-3">
					<h4>Chăm sóc khách hàng</h4>
					<div>
						<a href="">Kiểm tra đơn hàng</a>
						<a href="">Hướng dẫn mua hàng</a>
						<a href="">Phương thức vận chuyển</a>
						<a href="">Chính sách đổi trả</a>
						<a href="">Câu hỏi thường gặp</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-3">
					<h4>Hỗ trợ thanh toán online</h4>
					<div>
						<img src="img/nganluong.png" alt="logonganluong" style="width: 190px; height: 45px;">
					</div>
					<h4>Đối tác vận chuyển</h4>
					<img src="img/vietnampost.png" alt="logovnpost">
					<img src="img/logo-ghtk.png" alt="logoghtk">
					<img src="img/ghn.jpg" alt="logoghn" style="padding-top: 10px;">
				</div>
				<div class="col-md-3 col-sm-3">
					<h5>Được chứng nhận</h5>
					<img src="img/bocongthuong.gif" alt="logobocongthuong">
				</div>
			</div>

			<div class="diachi row">
				<b>Copyright &copy; 2014 MobileStore.vn</b>
					<div>Công ty cổ phần công nghệ Mobile</div>
					<div>Địa chỉ: Số 108, Đường 3/2, Phường Xuân Khánh, Quận Ninh Kiều, Tp. Cần Thơ.</div>
			</div>
		</div>
	</div>






	<script>
		/* ElevateZoom */
    	$("#zoom_01").elevateZoom({gallery:'gallery', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true,
    								zoomWindowWidth:550, zoomWindowHeight:500, zoomWindowOffetx:20, zoomWindowOffety:5}); 


    	/* Star rating*/
	    $('#ratingStar').rating({
	        min: 0,
	        max: 5, 
	        step: 1, 
	        showClear: false,
	        size: "xs",
	        starCaptions: {
	                    1: '1 sao',
	                    2: '2 sao',
	                    3: '3 sao',
	                    4: '4 sao',
	                    5: '5 sao',
	                },
	        clearCaption: 'Nhấn vào đây để đánh giá',	        
	    }); 

	    $('#ratingStar').rating().change(function() {
	    	var value = $(this).rating().val();
        	//alert("Bạn chọn: " + value);
    	});

	</script>

</body>
</html>
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
	<link rel="stylesheet" type="text/css" href="css/slick.css">
	<link rel="stylesheet" type="text/css" href="css/style-home.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css">

  	<!-- jQuery, Bootstrap JS -->
	<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>

	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">

	<script>
	    $(document).ready(function(){
	        $('[data-toggle="tooltip"]').tooltip();
	    });


	    /* Slider fast pro */
	    $(document).ready(function(){
	    	$('.slider-fastPro').slick({
	    		slidesToShow: 5,
	    		slidesToScroll: 1,
	    		infinite: false
	    	});
	    });

	    /* Slider new pro, price pro */
	    $(document).ready(function(){
	    	$('.slider').slick({
	    		slidesToShow: 4,
	    		slidesToScroll: 1,
	    		infinite: false,
	    	});
	    });

    </script>


</head>


<body>

	<header>
		<div class="container">
			<div class="row">
				<ul class="submenu nav nav-pills col-md-9 col-sm-9 pull-right">
					<li><a href="nguoiban/dangnhap-ban.php"><span class="fa fa-handshake-o"></span>&nbsp;&nbsp;Bán hàng cùng Mobile Store</a></li>
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


	<!--Modal giỏ hàng -->
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
	</div>  <!-- end modal giỏ hàng -->




	<!-- header menu -->
	<div data-spy="affix" data-offset-top="100">
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
					<!-- end modal giỏ hàng -->
				</nav>	
			</div>		
		</div>	
	</div> <!-- end header menu -->


	<!-- Nav bottom -->
	<div class="nav-bottom">
		<div class="container">
			<div class="row">
				<ul class="nav nav-pills">
					<li>
						<button type="button" class="btn-danhmuc">
							<span class="fa fa-navicon"></span>&nbsp;&nbsp;&nbsp;DANH MỤC SẢN PHẨM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<span class="fa fa-angle-down"></span>
						</button>
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




	<!-- Body -->
	<div class="body">
		<!-- Danh mục và carousel khuyến mãi -->
		<div class="container">
			<div class="row">
				<!-- Danh mục -->
				<div class="col-md-3 col-sm-3 danhmuc">
					<div class="row">
						<a href="detailcate.php">Apple</a>
						<a href="detailcate.php">Samsung</a>
						<a href="detailcate.php">Nokia</a>				
						<a href="detailcate.php">Oppo</a>
						<a href="detailcate.php">Sony</a>
						<a href="detailcate.php">HTC</a>
						<a href="detailcate.php">LG</a>								
						<a href="detailcate.php">Asus</a>
						<a href="detailcate.php">Masstel</a>				
						<a href="detailcate.php">Motorola</a>
						<a href="detailcate.php">Xiaomi</a>
						<a href="detailcate.php">MobiiStar</a>
						<a href="detailcate.php">Wiko</a>
						<a href="detailcate.php">Lenovo</a>
						<a href="detailcate.php">BlackBery</a>
					</div>
				</div>


				<!-- panel right -->
				<div class="col-md-9 col-sm-9">
					<!-- Carousel -->
					<div id="myCarousel" class="carousel slide row" data-rice="carousel" >
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
							<li data-target="#myCarousel" data-slide-to="3"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
								<a href=""><img src="img-promotion/2.jpg" alt="slide1"></a>
							</div>

							<div class="item">
								<a href=""><img src="img-promotion/note8.jpg" alt="slide2"></a>
							</div>

							<div class="item">
								<a href=""><img src="img-promotion/mia1.png" alt="slide3"></a>
							</div>

							<div class="item">
								<a href=""><img src="img-promotion/sony.png" alt="slide3"></a>
							</div>
						</div>

						<!-- Left and right controls -->
						<a href="#myCarousel" class="left carousel-control" data-slide="prev">
							<span class="fa fa-angle-left"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a href="#myCarousel" class="right carousel-control" data-slide="next">
							<span class="fa fa-angle-right"></span>
							<span class="sr-only">Next</span>
						</a>
					</div> <!-- end carousel -->

					<div class="row panel-ship ">
						<a href=""><img src="img/banner1.jpg" alt="banner1"></a>
						<a href=""><img src="img/banner2.jpg" alt="banner1"></a>
						<a href="#"><img src="img/banner3.jpg" alt="banner1"></a>
					</div>
				</div> <!-- end panel right -->
			</div>
		</div><!-- end danh mục và carousel khuyến mãi -->



		<!-- Panel sản phẩm mới nổi bật -->
		<div class="container">
			<div class="row panel-product">
				<div class="panel-title col-md-12 col-sm-12">
					<h4>Mới & nổi bật</h4>
				</div>				
				<div class="col-md-12 col-sm-12">
					<div class="row">
						<!-- Slick slider -->
				    	<div class="slider-fastPro">
				    		<div>
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
								      			<a href="detailpro.php">ĐIỆN THOẠI IPHONE 4S-16GB CHÍNH HÃNG</a>
								      		</div>
								      		<div class="luotvote row">
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>1</b> lượt mua" data-html="true" data-placement="top">
								      				<span class="fa fa-tag">1</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>5</b> lượt xem" data-html="true" data-placement="top">
								      				<span class="fa fa-eye">5</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>0</b> bình luận" data-html="true" data-placement="top">
								      				<span class="fa fa-comment">0</span>
								      			</a>
								      			<button type="button" class="pull-right" data-toggle="modal" data-target="#modalCart" data-backdrop="static"">Mua ngay</button>
								      		</div>
  											<div class="ten-shop row">ANHDUY</div>
								      	</div>
								    </div>
							    </a>
							</div>
							

							<div>
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
								      			<a href="detailpro.php">ĐIỆN THOẠI IPHONE 4S-16GB CHÍNH HÃNG</a>
								      		</div>
								      		<div class="luotvote row">
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>1</b> lượt mua" data-html="true" data-placement="top">
								      				<span class="fa fa-tag">1</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>5</b> lượt xem" data-html="true" data-placement="top">
								      				<span class="fa fa-eye">5</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>0</b> bình luận" data-html="true" data-placement="top">
								      				<span class="fa fa-comment">0</span>
								      			</a>
								      			<button type="button" class="pull-right" data-toggle="modal" data-target="#modalCart" data-backdrop="static"">Mua ngay</button>
								      		</div>
  											<div class="ten-shop row">ANHDUY</div>
								      	</div>
								    </div>
							    </a>
							</div>


							<div>
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
								      			<a href="detailpro.php">ĐIỆN THOẠI IPHONE 4S-16GB CHÍNH HÃNG</a>
								      		</div>
								      		<div class="luotvote row">
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>1</b> lượt mua" data-html="true" data-placement="top">
								      				<span class="fa fa-tag">1</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>5</b> lượt xem" data-html="true" data-placement="top">
								      				<span class="fa fa-eye">5</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>0</b> bình luận" data-html="true" data-placement="top">
								      				<span class="fa fa-comment">0</span>
								      			</a>
								      			<button type="button" class="pull-right" data-toggle="modal" data-target="#modalCart" data-backdrop="static"">Mua ngay</button>
								      		</div>
  											<div class="ten-shop row">ANHDUY</div>
								      	</div>
								    </div>
							    </a>
							</div>


							<div>
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
								      			<a href="detailpro.php">ĐIỆN THOẠI IPHONE 4S-16GB CHÍNH HÃNG</a>
								      		</div>
								      		<div class="luotvote row">
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>1</b> lượt mua" data-html="true" data-placement="top">
								      				<span class="fa fa-tag">1</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>5</b> lượt xem" data-html="true" data-placement="top">
								      				<span class="fa fa-eye">5</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>0</b> bình luận" data-html="true" data-placement="top">
								      				<span class="fa fa-comment">0</span>
								      			</a>
								      			<button type="button" class="pull-right" data-toggle="modal" data-target="#modalCart" data-backdrop="static"">Mua ngay</button>
								      		</div>
  											<div class="ten-shop row">ANHDUY</div>
								      	</div>
								    </div>
							    </a>
							</div>


							<div>
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
								      			<a href="detailpro.php">ĐIỆN THOẠI IPHONE 4S-16GB CHÍNH HÃNG</a>
								      		</div>
								      		<div class="luotvote row">
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>1</b> lượt mua" data-html="true" data-placement="top">
								      				<span class="fa fa-tag">1</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>5</b> lượt xem" data-html="true" data-placement="top">
								      				<span class="fa fa-eye">5</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>0</b> bình luận" data-html="true" data-placement="top">
								      				<span class="fa fa-comment">0</span>
								      			</a>
								      			<button type="button" class="pull-right" data-toggle="modal" data-target="#modalCart" data-backdrop="static"">Mua ngay</button>
								      		</div>
  											<div class="ten-shop row">ANHDUY</div>
								      	</div>
								    </div>
							    </a>
							</div>


							<div>
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
								      			<a href="detailpro.php">ĐIỆN THOẠI IPHONE 4S-16GB CHÍNH HÃNG</a>
								      		</div>
								      		<div class="luotvote row">
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>1</b> lượt mua" data-html="true" data-placement="top">
								      				<span class="fa fa-tag">1</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>5</b> lượt xem" data-html="true" data-placement="top">
								      				<span class="fa fa-eye">5</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>0</b> bình luận" data-html="true" data-placement="top">
								      				<span class="fa fa-comment">0</span>
								      			</a>
								      			<button type="button" class="pull-right" data-toggle="modal" data-target="#modalCart" data-backdrop="static"">Mua ngay</button>
								      		</div>
  											<div class="ten-shop row">ANHDUY</div>
								      	</div>
								    </div>
							    </a>
							</div>
				    	</div><!-- Slick slider -->
					</div>
				</div>
			</div>
		</div> <!-- Panel sản phẩm mới nổi bật -->



		<!-- Panel sản phẩm giảm giá -->
		<div class="container">
			<div class="row panel-product">
				<div class="panel-title col-md-12 col-sm-12">
					<h4>Sản phẩm giảm giá</h4>
				</div>
				<div class="panel-img col-md-2 col-sm-2">
					<div class="row">
						<a href="khuyenmai.php"><img src="img-promotion/giamgia.jpg"></a>
					</div>
				</div>
				<div class="panel-slider col-md-10 col-sm-10">
					<div class="row">
						<!-- Slick slider -->
				    	<div class="slider slider-pricePro">
				    		<div>
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
								      			<a href="detailpro.php">ĐIỆN THOẠI IPHONE 4S-16GB CHÍNH HÃNG</a>
								      		</div>
								      		<div class="luotvote row">
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>1</b> lượt mua" data-html="true" data-placement="top">
								      				<span class="fa fa-tag">1</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>5</b> lượt xem" data-html="true" data-placement="top">
								      				<span class="fa fa-eye">5</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>0</b> bình luận" data-html="true" data-placement="top">
								      				<span class="fa fa-comment">0</span>
								      			</a>
								      			<button type="button" class="pull-right" data-toggle="modal" data-target="#modalCart" data-backdrop="static"">Mua ngay</button>
								      		</div>
  											<div class="ten-shop row">ANHDUY</div>
								      	</div>
								    </div>
							    </a>
							</div>
							

							<div>
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
								      			<a href="detailpro.php">ĐIỆN THOẠI IPHONE 4S-16GB CHÍNH HÃNG</a>
								      		</div>
								      		<div class="luotvote row">
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>1</b> lượt mua" data-html="true" data-placement="top">
								      				<span class="fa fa-tag">1</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>5</b> lượt xem" data-html="true" data-placement="top">
								      				<span class="fa fa-eye">5</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>0</b> bình luận" data-html="true" data-placement="top">
								      				<span class="fa fa-comment">0</span>
								      			</a>
								      			<button type="button" class="pull-right" data-toggle="modal" data-target="#modalCart" data-backdrop="static"">Mua ngay</button>
								      		</div>
  											<div class="ten-shop row">ANHDUY</div>
								      	</div>
								    </div>
							    </a>
							</div>


							<div>
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
								      			<a href="detailpro.php">ĐIỆN THOẠI IPHONE 4S-16GB CHÍNH HÃNG</a>
								      		</div>
								      		<div class="luotvote row">
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>1</b> lượt mua" data-html="true" data-placement="top">
								      				<span class="fa fa-tag">1</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>5</b> lượt xem" data-html="true" data-placement="top">
								      				<span class="fa fa-eye">5</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>0</b> bình luận" data-html="true" data-placement="top">
								      				<span class="fa fa-comment">0</span>
								      			</a>
								      			<button type="button" class="pull-right" data-toggle="modal" data-target="#modalCart" data-backdrop="static"">Mua ngay</button>
								      		</div>
  											<div class="ten-shop row">ANHDUY</div>
								      	</div>
								    </div>
							    </a>
							</div>


							<div>
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
								      			<a href="detailpro.php">ĐIỆN THOẠI IPHONE 4S-16GB CHÍNH HÃNG</a>
								      		</div>
								      		<div class="luotvote row">
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>1</b> lượt mua" data-html="true" data-placement="top">
								      				<span class="fa fa-tag">1</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>5</b> lượt xem" data-html="true" data-placement="top">
								      				<span class="fa fa-eye">5</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>0</b> bình luận" data-html="true" data-placement="top">
								      				<span class="fa fa-comment">0</span>
								      			</a>
								      			<button type="button" class="pull-right" data-toggle="modal" data-target="#modalCart" data-backdrop="static"">Mua ngay</button>
								      		</div>
  											<div class="ten-shop row">ANHDUY</div>
								      	</div>
								    </div>
							    </a>
							</div>


							<div>
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
								      			<a href="detailpro.php">ĐIỆN THOẠI IPHONE 4S-16GB CHÍNH HÃNG</a>
								      		</div>
								      		<div class="luotvote row">
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>1</b> lượt mua" data-html="true" data-placement="top">
								      				<span class="fa fa-tag">1</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>5</b> lượt xem" data-html="true" data-placement="top">
								      				<span class="fa fa-eye">5</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>0</b> bình luận" data-html="true" data-placement="top">
								      				<span class="fa fa-comment">0</span>
								      			</a>
								      			<button type="button" class="pull-right" data-toggle="modal" data-target="#modalCart" data-backdrop="static"">Mua ngay</button>
								      		</div>
  											<div class="ten-shop row">ANHDUY</div>
								      	</div>
								    </div>
							    </a>
							</div>


							<div>
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
								      			<a href="detailpro.php">ĐIỆN THOẠI IPHONE 4S-16GB CHÍNH HÃNG</a>
								      		</div>
								      		<div class="luotvote row">
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>1</b> lượt mua" data-html="true" data-placement="top">
								      				<span class="fa fa-tag">1</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>5</b> lượt xem" data-html="true" data-placement="top">
								      				<span class="fa fa-eye">5</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>0</b> bình luận" data-html="true" data-placement="top">
								      				<span class="fa fa-comment">0</span>
								      			</a>
								      			<button type="button" class="pull-right" data-toggle="modal" data-target="#modalCart" data-backdrop="static"">Mua ngay</button>
								      		</div>
  											<div class="ten-shop row">ANHDUY</div>
								      	</div>
								    </div>
							    </a>
							</div>
				    	</div><!-- Slick slider -->
					</div>
				</div>
			</div>
		</div> <!-- Panel sản phẩm giảm giá -->



		<!-- Panel Sản phẩm bán chạy -->
		<div class="container">
			<div class="row panel-product">
				<div class="panel-title col-md-12 col-sm-12">
					<h4>Sản phẩm bán chạy</h4>
				</div>
				<div class="col-md-12 col-sm-12">
					<div class="row">
						<!-- Slick slider -->
				    	<div class="slider-fastPro">
				    		<div>
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
								      			<a href="detailpro.php">ĐIỆN THOẠI IPHONE 4S-16GB CHÍNH HÃNG</a>
								      		</div>
								      		<div class="luotvote row">
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>1</b> lượt mua" data-html="true" data-placement="top">
								      				<span class="fa fa-tag">1</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>5</b> lượt xem" data-html="true" data-placement="top">
								      				<span class="fa fa-eye">5</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>0</b> bình luận" data-html="true" data-placement="top">
								      				<span class="fa fa-comment">0</span>
								      			</a>
								      			<button type="button" class="pull-right" data-toggle="modal" data-target="#modalCart" data-backdrop="static"">Mua ngay</button>
								      		</div>
  											<div class="ten-shop row">ANHDUY</div>
								      	</div>
								    </div>
							    </a>
							</div>
							

							<div>
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
								      			<a href="detailpro.php">ĐIỆN THOẠI IPHONE 4S-16GB CHÍNH HÃNG</a>
								      		</div>
								      		<div class="luotvote row">
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>1</b> lượt mua" data-html="true" data-placement="top">
								      				<span class="fa fa-tag">1</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>5</b> lượt xem" data-html="true" data-placement="top">
								      				<span class="fa fa-eye">5</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>0</b> bình luận" data-html="true" data-placement="top">
								      				<span class="fa fa-comment">0</span>
								      			</a>
								      			<button type="button" class="pull-right" data-toggle="modal" data-target="#modalCart" data-backdrop="static"">Mua ngay</button>
								      		</div>
  											<div class="ten-shop row">ANHDUY</div>
								      	</div>
								    </div>
							    </a>
							</div>


							<div>
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
								      			<a href="detailpro.php">ĐIỆN THOẠI IPHONE 4S-16GB CHÍNH HÃNG</a>
								      		</div>
								      		<div class="luotvote row">
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>1</b> lượt mua" data-html="true" data-placement="top">
								      				<span class="fa fa-tag">1</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>5</b> lượt xem" data-html="true" data-placement="top">
								      				<span class="fa fa-eye">5</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>0</b> bình luận" data-html="true" data-placement="top">
								      				<span class="fa fa-comment">0</span>
								      			</a>
								      			<button type="button" class="pull-right" data-toggle="modal" data-target="#modalCart" data-backdrop="static"">Mua ngay</button>
								      		</div>
  											<div class="ten-shop row">ANHDUY</div>
								      	</div>
								    </div>
							    </a>
							</div>


							<div>
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
								      			<a href="detailpro.php">ĐIỆN THOẠI IPHONE 4S-16GB CHÍNH HÃNG</a>
								      		</div>
								      		<div class="luotvote row">
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>1</b> lượt mua" data-html="true" data-placement="top">
								      				<span class="fa fa-tag">1</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>5</b> lượt xem" data-html="true" data-placement="top">
								      				<span class="fa fa-eye">5</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>0</b> bình luận" data-html="true" data-placement="top">
								      				<span class="fa fa-comment">0</span>
								      			</a>
								      			<button type="button" class="pull-right" data-toggle="modal" data-target="#modalCart" data-backdrop="static"">Mua ngay</button>
								      		</div>
  											<div class="ten-shop row">ANHDUY</div>
								      	</div>
								    </div>
							    </a>
							</div>


							<div>
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
								      			<a href="detailpro.php">ĐIỆN THOẠI IPHONE 4S-16GB CHÍNH HÃNG</a>
								      		</div>
								      		<div class="luotvote row">
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>1</b> lượt mua" data-html="true" data-placement="top">
								      				<span class="fa fa-tag">1</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>5</b> lượt xem" data-html="true" data-placement="top">
								      				<span class="fa fa-eye">5</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>0</b> bình luận" data-html="true" data-placement="top">
								      				<span class="fa fa-comment">0</span>
								      			</a>
								      			<button type="button" class="pull-right" data-toggle="modal" data-target="#modalCart" data-backdrop="static"">Mua ngay</button>
								      		</div>
  											<div class="ten-shop row">ANHDUY</div>
								      	</div>
								    </div>
							    </a>
							</div>


							<div>
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
								      			<a href="detailpro.php">ĐIỆN THOẠI IPHONE 4S-16GB CHÍNH HÃNG</a>
								      		</div>
								      		<div class="luotvote row">
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>1</b> lượt mua" data-html="true" data-placement="top">
								      				<span class="fa fa-tag">1</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>5</b> lượt xem" data-html="true" data-placement="top">
								      				<span class="fa fa-eye">5</span>
								      			</a>
								      			<a href="#" data-toggle="tooltip" title="Đã có <b>0</b> bình luận" data-html="true" data-placement="top">
								      				<span class="fa fa-comment">0</span>
								      			</a>
								      			<button type="button" class="pull-right" data-toggle="modal" data-target="#modalCart" data-backdrop="static"">Mua ngay</button>
								      		</div>
  											<div class="ten-shop row">ANHDUY</div>
								      	</div>
								    </div>
							    </a>
							</div>
				    	</div><!-- Slick slider -->
					</div>
				</div>
			</div>
		</div> <!-- Panel sản bán chạy-->


		<!-- Các sản phẩm đặc trưng -->
		<div class="container">
			<div class="row panel-product">
				<div class="panel-list col-md-12 col-sm-12">
					<div class="list-pro">
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

					<div class="list-pro">
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


					<div class="list-pro">
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


					<div class="list-pro">
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


					<div class="list-pro">
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


					<div class="list-pro">
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


					<div class="list-pro">
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

					<div class="list-pro">
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


					<div class="list-pro">
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


					<div class="list-pro">
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


					<div class="list-pro">
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


					<div class="list-pro">
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
				</div> <!-- panel list -->
			</div>
		</div> <!-- end sản phẩm đặc trưng-->
	</div> <!-- end body -->



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

</body>
</html>
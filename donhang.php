<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="icon" type="text/css" href="img/icon.png">
	<title>Đơn hàng</title>


	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
	<link rel="stylesheet" type="text/css" href="css/style-donhang.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">

  	<!-- jQuery, Bootstrap JS -->
	<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-select.min.js"></script>


	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">


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
				      <a class="navbar-brand" href="home.php">
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
	<div class="container">
		<div class="tieude">
			<h4><label>Chào bạn, dưới đây là thông tin đơn hàng của bạn:</label></h4>
			<div>Mã đơn hàng: <label>#1423567.</label></div>
			<div>Đặt hàng: 20/09/2017.</div>
		</div>

		<div class="trangthai text-center">
			<div class="col-md-2 col-sm-2">				
				<div class="label-cho"><span class="fa fa-check-circle"></span>&nbsp;&nbsp;Chờ xác nhận</div>
			</div>
			<div class="col-md-2 col-sm-2">
				<div class="label-xacnhan">Đã xác nhận</div>
			</div>
			<div class="col-md-2 col-sm-2">
				<div class="label-vanchuyen">Đang vận chuyển</div>
			</div>
			<div class="col-md-2 col-sm-2">
				<div class="label-dagiao">Đã giao hàng</div>
			</div>
			<div class="col-md-2 col-sm-2">
				<div class="label-hoantat">Hoàn tất</div>
			</div>
		</div>
		<div class="clearfix"></div>

		<div class="col-md-6 col-sm-6">
			<div class="panel-vanchuyen row">
				<h4><b>TÌNH TRẠNG VẬN CHUYỂN</b></h4>
				<div class="col-md-3 col-sm-3">
					<div class="row">Nhà vận chuyển:</div> 
					<div class="row">Tình trạng:</div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="row"><b>Giao hàng nhanh</b></div>
					<div class="row"><b>Đang vận chuyển</b></div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="thoigian">Dự kiến giao hàng từ 05/09 - 09/09</div>
				</div>
			</div>		
		</div>
		

		<div class="col-md-5 col-sm-5">
			<div class="panel-thongtinnhan row">
				<h4><b>THÔNG TIN NGƯỜI NHẬN</b></h4>
				<b>Nguyễn Văn A</b>
				<div>đường 3/2, phường Xuân Khánh, quận Ninh Kiều, Cần Thơ.</div>
				<div>Số điện thoại: 0978593821</div>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="panel-donhang">
			<table class="table tbdonhang">
			    <thead>
			      <tr>
			        <th class="col-ten">Sản phẩm</th>
			        <th class="text-center">Đơn giá</th>
			        <th class="text-center">Số lượng</th>
			        <th class="text-right">Thành tiền</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			        <td>
			        	<div class="col-md-2 col-sm-2">
			        		<div class="row"><img src="sanpham/galaxyj7_1.jpg"></div>
			        	</div>
			        	<div class="col-md-10 col-sm-10">
			        		<div class="row"><label>Điện thoại samsung Galaxy J7 32GB chính hãng</label></div>
			        		<div>Bảo hành 12 tháng</div>
			        	</div>
			        </td>
			        <td class="text-center">1.390.000đ</td>
			        <td class="text-center">1</td>
			        <td class="text-right">1.390.000đ</td>
			      </tr>
			      <tr>
			        <td>
			        	<div class="col-md-2 col-sm-2">
			        		<div class="row"><img src="sanpham/hotwav.jpg"></div>
			        	</div>
			        	<div class="col-md-10 col-sm-10">
			        		<div class="row"><label>Điện thoại samsung Galaxy J7 32GB chính hãng</label></div>
			        		<div>Bảo hành 12 tháng</div>
			        	</div>
			        </td>
			        <td class="text-center">520.000đ</td>
			        <td class="text-center">1</td>
			        <td class="text-right">520.000đ</td>
			      </tr>
			    </tbody>
			    <tfoot class="tbfoot">
			    	<tr>
			    		<td colspan="3" class="text-right">
			    			<div class="row">Tổng tiền:</div>
			    			<div class="row">Phí vận chuyển:</div>
			    			<div class="row row-tong"><b>Tổng thanh toán</b</div>
			    		</td>
			    		<td class="text-right">
			    			<div>1.890.000đ</div>
			    			<div>52.000đ</div>
			    			<div class="row-tong"><b class="label-tong">1.942.000đ</b</div>
			    		</td>
			    	</tr>
			    </tfoot>
			</table>
		</div>
	</div>



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
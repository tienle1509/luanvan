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



	/* CỐ ĐỊNH THANH MAIN MENU */
.affix {
	width: 100%;
	z-index: 2;
	top: 0px;
	box-shadow: 2px 2px 2px #B4AEAE;
}
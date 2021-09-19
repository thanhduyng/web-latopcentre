<header>
	<div id="top-header">
		<div class="container">
			<div class="pull-left">
				<span>Chào mừng bạn đến với LapTop-CenTre!</span>
			</div>
			<div class="pull-right">
				<ul class="header-top-links">
					<li><a href="gioi-thieu">Giới thiệu</a></li>
					<li><a href="lien-he">Liên hệ</a></li>
					<li><a href="tin-tuc">Tin tức</a></li>
					<li class="dropdown default-dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Việt Nam (VN) <i class="fa fa-caret-down"></i></a>
						<ul class="custom-menu">
							<li><a>Việt Nam (VN)</a></li>
							<li><a>English (ENG)</a></li>
						</ul>
					</li>
					<li class="dropdown default-dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">VND <i class="fa fa-caret-down"></i></a>
						<ul class="custom-menu">
							<li><a>VND (d)</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div id="header">
		<div class="container">
			<div class="pull-left">
				<div class="header-logo">
					<a class="logo" href="#">
						<img src="../img/log.jpg" alt="">
					</a>
				</div>

				<!-- Search -->
				<div class="header-search">
					<form action="tim-kiem" method="GET">
						<input name="txtKeyword" class="input search-input" type="text" placeholder="Nhập từ khóa">
						<select name="cbbCategory" class="input search-categories">
							<option value="*">Tất cả</option>
							<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
						<button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
					</form>
				</div>
				<!-- /Search -->

			</div>
			<div class="pull-right">
				<ul class="header-btns">
					<!-- Account -->
					<li class="header-account dropdown default-dropdown" style="min-width: 140px">
						<?php if(Auth::user()): ?>
						<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
							<div class="header-btns-icon">
								<img width="40px" height="40px" src="/public/upload/users/<?php echo e(Auth::user()->avatar); ?>" />
							</div>
							<strong class="text-uppercase"><?php echo e(Auth::user()->name); ?> <i class="fa fa-caret-down"></i></strong>
						</div>
						<ul class="custom-menu">
							<li><a href="thong-tin-nguoi-dung"><i class="fa fa-user-o"></i> Thông tin</a></li>
							<li><a href="don-hang/<?php echo e($user->id); ?>"><i class="fa fa-shopping-cart"></i> Đơn hàng</a></li>
							<li><a href="doi-mat-khau"><i class="fa fa-unlock-alt"></i> Đổi mật khẩu</a></li>
						</ul>
						<a class="text-uppercase dang-xuat" style="cursor: pointer;">Đăng xuất</a>
						<?php else: ?>
						<a class='text-uppercase dang-nhap' style="cursor: pointer;">Đăng nhập</a><br><a href="dang-ky" class="text-uppercase">Đăng ký</a>
						<?php endif; ?>
					</li>
					<!-- /Account -->

					<!-- Cart -->
					<li class="header-cart dropdown default-dropdown" style="min-width: 170px">
						<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">

							<div class="header-btns-icon">
								<i class="fa fa-shopping-cart"></i>
								<?php if(isset($cart)): ?>
								<span class="qty"><?php echo e($totalQty); ?></span>
								<?php endif; ?>
							</div>
							<strong class="text-uppercase">Giỏ hàng:</strong>
							<br>
							<?php if(isset($cart)): ?>
							<span><?php echo e(formatPrice($totalPrice)); ?></span>
							<?php endif; ?>

						</a>
						<div class="custom-menu">
							<div id="shopping-cart">
								<div class="shopping-cart-list">
									<?php if(isset($productCart)): ?>
									<?php $__currentLoopData = $productCart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="product product-widget">
										<div class="product-thumb">
											<img src="../upload/product/<?php echo e($item['item']->imageProduct[0]->name); ?>" alt="">
										</div>
										<div class="product-body">
											<h3 class="product-price">
												<?php if($item['item']['promotion_price'] != 0): ?>
												<?php echo e($item['item']['promotion_price']); ?>

												<?php else: ?>
												<?php echo e($item['item']['unit_price']); ?>

												<?php endif; ?>
												<span class="qty">x<?php echo e($item['qty']); ?></span>
											</h3>
											<h2 class="product-name"><a href="#"><?php echo e($item['item']['name']); ?></a></h2>
										</div>
										<a href="xoa-san-pham-gio-hang/<?php echo e($item['item']['id']); ?>" class="cancel-btn"><i class="fa fa-trash"></i></a>
									</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<div class="shopping-cart-btns">
										<a href="gio-hang" class="main-btn"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a>
										<a href="thanh-toan" class="primary-btn">Thanh toán <i class="fa fa-arrow-circle-right"></i></a>
									</div>
									<?php else: ?>
									<p style="text-align: center; margin-top: 10px;color: #cd1818;">Chưa có sản phẩm</p>
									<?php endif; ?>

								</div>
							</div>
						</div>
					</li>
					<!-- /Cart -->

					<li class="nav-toggle">
						<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
					</li>
				</ul>
			</div>
		</div>
	</div>
</header>
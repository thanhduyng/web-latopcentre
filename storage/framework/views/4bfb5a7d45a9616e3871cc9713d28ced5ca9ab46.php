	<div id="navigation">
		<div class="container">
			<div id="responsive-nav">
				<div class="category-nav">
					<span class="category-header">Hãng sản xuất <i class="fa fa-list"></i></span>
					<ul class="category-list">
						<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li class="dropdown side-dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><?php echo e($item['name']); ?> <i class="fa fa-angle-right"></i></a>
								<div class="custom-menu">
									<div class="row">
										<div class="col-md-12">
											<ul class="list-links">
												<?php $__currentLoopData = $item->typeProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<li><a href="<?php echo e($item['slug']); ?>/<?php echo e($item2['slug']); ?>"><?php echo e($item2['name']); ?></a></li>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												<li><a href="<?php echo e($item['slug']); ?>"><strong>Xem tất cả</strong></a></li>
											</ul>
											<hr class="hidden-md hidden-lg">
										</div>
									</div>
								</div>
							</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<li><a href="tat-ca-san-pham">Xem tất cả</a></li>
					</ul>
				</div>

				<div class="menu-nav">
					<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
					<ul class="menu-list">
						<li><a href="trang-chu">Trang chủ</a></li>
						<li><a href="gioi-thieu">Giới thiệu</a></li>
						<li><a href="lien-he">Liên hệ</a></li>
						<li><a href="tin-tuc">Tin Tức</a></li>
						<li><a href="giao-nhan">Giao & Nhận</a></li>
						<li><a href="faq">FAQ</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
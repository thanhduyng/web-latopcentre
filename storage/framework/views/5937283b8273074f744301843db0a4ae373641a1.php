<?php $__env->startSection('title'); ?>
	<?php echo e($typeProduct->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<?php echo $__env->make('layout.navigation2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="trang-chu">Trang chủ</a></li>
				<li><a href="<?php echo e($category->slug); ?>"><?php echo e($category->name); ?></a></li>
				<li class="active"><?php echo e($typeProduct->name); ?></li>
			</ul>
		</div>
	</div>

	<div class="section">
		<div class="container">
			<div class="row">
				<div id="aside" class="col-md-3">
					<div class="aside">
						<h3 class="aside-title">Lọc theo giá (triệu VNĐ)</h3>
						<div id="price-slider"></div>
						<button id="btnFilter" class="primary-btn pull-right">Lọc</button>
						<div class="clearfix"></div>
					</div>

					<div class="aside">
						<h3 class="aside-title">Dòng sản phẩm</h3>
						<ul class="list-links">
							<li><a href="<?php echo e($category->slug); ?>">Tất cả</a></li>
							<?php $__currentLoopData = $category->typeProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li <?php if($item->name == $typeProduct->name): ?> <?php echo e('class=active'); ?> <?php endif; ?>><a href="<?php echo e($category->slug); ?>/<?php echo e($item->slug); ?>"><?php echo e($item->name); ?></a></li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					</div>

					<?php echo $__env->make('layout.selling', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					
				</div>

				<div id="main" class="col-md-9">
					<div class="store-filter clearfix">
						<div class="pull-left">
							<div class="row-filter">
								<a class="active"><i class="fa fa-th-large"></i></a>
								<a><i class="fa fa-bars"></i></a>
							</div>
							<div class="sort-filter">
								<span class="text-uppercase">Sắp xếp:</span>
								<select class="input sort">
									<option <?php if($sort == 'latest'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="latest">Mới nhất</option>
									<option <?php if($sort == 'oldest'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="oldest">Cũ nhất</option>
									<option <?php if($sort == 'price_asc'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="price_asc">Giá tăng dần</option>
									<option <?php if($sort == 'price_desc'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="price_desc">Giá giảm dần</option>
									<option <?php if($sort == 'rating'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="rating">Đánh giá</option>
									<option <?php if($sort == 'selling'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="selling">Bán chạy nhất</option>
								</select>
							</div>
						</div>
						<div class="pull-right">
							<div class="page-filter">
								<span class="text-uppercase">Hiện thị:</span>
								<select class="input show-product">
									<option <?php if($show == 9): ?> <?php echo e('selected'); ?> <?php endif; ?> value="9">9</option>
									<option <?php if($show == 18): ?> <?php echo e('selected'); ?> <?php endif; ?> value="18">18</option>
									<option <?php if($show == 27): ?> <?php echo e('selected'); ?> <?php endif; ?> value="27">27</option>
								</select>
							</div>
							<div class="pagination">
								<?php echo e($products->appends(['min' => $min, 'max' => $max, 'sort' => $sort, 'show' => $show])->links()); ?>

							</div>
							
						</div>
					</div>

					<div id="store">
						<div class="row">
							<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="col-md-4 col-sm-6 col-xs-6">
									<div class="product product-single">
										<div class="product-thumb">
											<div class="product-label">
												<span>Mới</span>
												<?php if($item['promotion_price'] != 0): ?>
													<span class="sale">Giảm giá</span>
												<?php endif; ?>
											</div>
											<a href="chi-tiet-san-pham/<?php echo e($item->slug); ?>" class="main-btn quick-view" style="cursor: pointer;"><i class="fa fa-search-plus"></i> Chi tiết</a>
											<img src="../upload/product/<?php echo e($item->imageProduct[1]['name']); ?>" alt="" height="200px">
										</div>
										<div class="product-body">
											<?php
												printPrice($item['unit_price'], $item['promotion_price']);
											?>
											<h2 class="product-name"><a href="chi-tiet-san-pham/<?php echo e($item->slug); ?>"><?php echo e($item['name']); ?></a></h2>
											<div class="product-rating text-center">
												<?php for($i = 0; $i < round($item['rating']); $i++): ?>
													<i class="fa fa-star"></i>
												<?php endfor; ?>
												<?php for($i = 0; $i < (5 - round($item['rating'])); $i++): ?>
													<i class="fa fa-star-o empty"></i>
												<?php endfor; ?>
												
											</div>
											<div class="product-btns text-center">
												<a href="them-gio-hang/<?php echo e($item->id); ?>/1" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					</div>

					<div class="store-filter clearfix">
						<div class="pull-left">
							<div class="row-filter">
								<a class="active"><i class="fa fa-th-large"></i></a>
								<a><i class="fa fa-bars"></i></a>
							</div>
							<div class="sort-filter">
								<span class="text-uppercase">Sắp xếp:</span>
								<select class="input sort">
									<option <?php if($sort == 'latest'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="latest">Mới nhất</option>
									<option <?php if($sort == 'oldest'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="oldest">Cũ nhất</option>
									<option <?php if($sort == 'price_asc'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="price_asc">Giá tăng dần</option>
									<option <?php if($sort == 'price_desc'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="price_desc">Giá giảm dần</option>
									<option <?php if($sort == 'rating'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="rating">Đánh giá</option>
									<option <?php if($sort == 'selling'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="selling">Bán chạy nhất</option>
								</select>
							</div>
						</div>
						<div class="pull-right">
							<div class="page-filter">
								<span class="text-uppercase">Hiện thị:</span>
								<select class="input show-product">
									<option <?php if($show == 9): ?> <?php echo e('selected'); ?> <?php endif; ?> value="9">9</option>
									<option <?php if($show == 18): ?> <?php echo e('selected'); ?> <?php endif; ?> value="18">18</option>
									<option <?php if($show == 27): ?> <?php echo e('selected'); ?> <?php endif; ?> value="27">27</option>
								</select>
							</div>
							<div class="pagination">
								<?php echo e($products->appends(['min' => $min, 'max' => $max, 'sort' => $sort, 'show' => $show])->links()); ?>

							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.pagination').addClass("store-pages");
		    $('.pagination').removeClass('pagination');

		    $('.noUi-handle-lower').attr('aria-valuetext', <?php echo $min/1000000; ?>);
			$('.noUi-handle-upper').attr('aria-valuetext', <?php echo $max/1000000; ?>);

		    $('#btnFilter').click(function () {
		    	min = $('.noUi-handle-lower').attr('aria-valuetext')*1000000;
		    	max = $('.noUi-handle-upper').attr('aria-valuetext')*1000000;
		    	sort = $('.sort').val();
		    	show = $('.show-product').val();

		    	currentUrl = window.location.pathname;

		    	window.location.href = currentUrl + '?min=' + min + '&max=' + max + '&sort=' + sort + '&show=' + show;
		    });

		    $('.sort').change(function () {
		    	min = $('.noUi-handle-lower').attr('aria-valuetext')*1000000;
		    	max = $('.noUi-handle-upper').attr('aria-valuetext')*1000000;
		    	sort = $(this).val();
		    	show = $('.show-product').val();

		    	currentUrl = window.location.pathname;

		    	window.location.href = currentUrl + '?min=' + min + '&max=' + max + '&sort=' + sort + '&show=' + show;
		    });

		    $('.show-product').change(function () {
		    	min = $('.noUi-handle-lower').attr('aria-valuetext')*1000000;
		    	max = $('.noUi-handle-upper').attr('aria-valuetext')*1000000;
		    	sort = $('.sort').val();
		    	show = $(this).val();

		    	currentUrl = window.location.pathname;

		    	window.location.href = currentUrl + '?min=' + min + '&max=' + max + '&sort=' + sort + '&show=' + show;
		    });
		});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('title'); ?>
Trang chủ
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layout.navigation1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('layout.slide', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="section">
	<div class="container">
		<?php
		$banner = $categories;
		$banner1 = $banner->take(3);
		$banner2 = $banner->slice(3);
		?>
		<div class="row">
			<?php $__currentLoopData = $banner1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-4 col-sm-6">
				<a class="banner banner-1" href="<?php echo e($item->slug); ?>">
					<img src="../upload/category/<?php echo e($item->image); ?>" alt="">
				</a>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		</div>
	</div>
</div>

<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2 class="title">Sản phẩm mới</h2>
				</div>
			</div>
			<?php $__currentLoopData = $newProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="product product-single">
					<div class="product-thumb">
						<div class="product-label">
							<span>Mới</span>
							<?php if($item->promotion_price != 0): ?>
							<span class="sale">Giảm giá</span>
							<?php endif; ?>
						</div>
						<a href="chi-tiet-san-pham/<?php echo e($item->slug); ?>" class="main-btn quick-view" style="cursor: pointer;"><i class="fa fa-search-plus"></i> Chi tiết</a>
						<img src="../upload/product/<?php echo \App\ImageProduct::find($item->id)->name ?>" alt="" height="200px">
					</div>
					<div class="product-body">
						<?php
						printPrice($item->unit_price, $item->promotion_price);
						?>
						<h2 class="product-name"><a href="/chi-tiet-san-pham/<?php echo e($item->slug); ?>"><?php echo e($item->name); ?></a></h2>
						<div class="product-rating text-center">
							<?php for($i = 0; $i < round($item->rating); $i++): ?>
								<i class="fa fa-star"></i>
								<?php endfor; ?>
								<?php for($i = 0; $i < (5 - round($item->rating)); $i++): ?>
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
		<div class="pull-right"><a href="tat-ca-san-pham?sort=latest" class="primary-btn" style="cursor: pointer;">Xem thêm</a></div>
	</div>
</div>

<div class="section section-grey">
	<div class="container">
		<div class="row">
			<?php
			$banner2_1 = $banner2->shift();
			$banner2_2 = $banner2->take(2);
			?>
			<div class="col-md-8">
				<a class="banner banner-1" href="<?php echo e($banner2_1->slug); ?>">
					<img src="../upload/category/<?php echo e($banner2_1->image); ?>" alt="">
				</a>
			</div>

			<?php $__currentLoopData = $banner2_2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-4 col-sm-6">
				<a class="banner banner-1" href="<?php echo e($item->slug); ?>">
					<img src="../upload/category/<?php echo e($item->image); ?>" alt="">
				</a>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		</div>
	</div>
</div>

<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2 class="title">Sản phẩm giá tốt</h2>
				</div>
			</div>

			<?php $__currentLoopData = $goodPriceProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="product product-single">
					<div class="product-thumb">
						<div class="product-label">
							<span>Mới</span>
							<?php if($item->promotion_price != 0): ?>
							<span class="sale">Giảm giá</span>
							<?php endif; ?>
						</div>
						<a href="/chi-tiet-san-pham/<?php echo e($item->slug); ?>" class="main-btn quick-view" style="cursor: pointer;"><i class="fa fa-search-plus"></i> Chi tiết</a>
						<img src="../upload/product/<?php echo \App\ImageProduct::find($item->id)->name ?>" alt="" height="200px">
					</div>
					<div class="product-body">
						<?php
						printPrice($item->unit_price, $item->promotion_price);
						?>
						<h2 class="product-name"><a href="/chi-tiet-san-pham/<?php echo e($item->slug); ?>"><?php echo e($item->name); ?></a></h2>
						<div class="product-rating text-center">
							<?php for($i = 0; $i < round($item->rating); $i++): ?>
								<i class="fa fa-star"></i>
								<?php endfor; ?>
								<?php for($i = 0; $i < (5 - round($item->rating)); $i++): ?>
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

		<div class="pull-right"><a href="tat-ca-san-pham?sort=price_asc" class="primary-btn" style="cursor: pointer;">Xem thêm</a></div>
	</div>
</div>

<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2 class="title">Sản phẩm bán chạy</h2>
				</div>
			</div>

			<?php $__currentLoopData = $sellingProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="product product-single">
					<div class="product-thumb">
						<div class="product-label">
							<span>Mới</span>
							<?php if($item->promotion_price != 0): ?>
							<span class="sale">Giảm giá</span>
							<?php endif; ?>
						</div>
						<a href="/chi-tiet-san-pham/<?php echo e($item->slug); ?>" class="main-btn quick-view" style="cursor: pointer;"><i class="fa fa-search-plus"></i> Chi tiết</a>
						<img src="../upload/product/<?php echo \App\ImageProduct::find($item->id)->name ?>" alt="" height="200px">
					</div>
					<div class="product-body">
						<?php
						printPrice($item->unit_price, $item->promotion_price);
						?>
						<h2 class="product-name"><a href="/chi-tiet-san-pham/<?php echo e($item->slug); ?>"><?php echo e($item->name); ?></a></h2>
						<div class="product-rating text-center">
							<?php for($i = 0; $i < round($item->rating); $i++): ?>
								<i class="fa fa-star"></i>
								<?php endfor; ?>
								<?php for($i = 0; $i < (5 - round($item->rating)); $i++): ?>
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
		<div class="pull-right"><a href="tat-ca-san-pham?sort=selling" class="primary-btn" style="cursor: pointer;">Xem thêm</a></div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
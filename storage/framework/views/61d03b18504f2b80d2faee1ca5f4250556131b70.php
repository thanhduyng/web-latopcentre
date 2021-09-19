<div class="aside">
	<h3 class="aside-title">Sản phẩm bán chạy</h3>
	<?php $__currentLoopData = $sellingProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="product product-widget">
			<div class="product-thumb">
				<img src="../upload/product/<?php echo e($item->imageProduct[0]['name']); ?>" alt="">
			</div>
			<div class="product-body">
				<h2 class="product-name"><a href="<?php echo e($item['slug']); ?>.html"><?php echo e($item['name']); ?></a></h2>
				<?php
					printPrice($item['unit_price'], $item['promotion_price']);
				?>
				<div class="product-rating text-center">
					<?php for($i = 0; $i < round($item['rating']); $i++): ?>
						<i class="fa fa-star"></i>
					<?php endfor; ?>
					<?php for($i = 0; $i < (5 - round($item['rating'])); $i++): ?>
						<i class="fa fa-star-o empty"></i>
					<?php endfor; ?>
				</div>
			</div>
		</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
	<div id="home">
		<div class="container">
			<div class="home-wrap">
				<div id="home-slick">
					
					<?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<a href="<?php echo e($item['link']); ?>" class="banner banner-1">
							<img src="../upload/slide/<?php echo e($item['image']); ?>" alt="">
						</a>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
				</div>
			</div>
		</div>
	</div>
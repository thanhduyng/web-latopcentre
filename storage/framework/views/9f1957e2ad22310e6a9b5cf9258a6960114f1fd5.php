<?php $__env->startSection('title'); ?>
<?php echo e($product->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layout.navigation2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div id="breadcrumb">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="trang-chu">Trang chủ</a></li>
			<li><a href="<?php echo e($product->typeProduct->category->slug); ?>"><?php echo e($product->typeProduct->category->name); ?></a></li>
			<li><a href="<?php echo e($product->typeProduct->category->slug); ?>/<?php echo e($product->typeProduct->slug); ?>"><?php echo e($product->typeProduct->name); ?></a></li>
			<li class="active"><?php echo e($product->name); ?></li>
		</ul>
	</div>
</div>

<div class="section">
	<div class="container">
		<div class="row">
			<div class="product product-details clearfix">
				<div class="col-md-6">
					<div id="product-main-view">
						<?php $__currentLoopData = $imageProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="product-view">
							<img src="../upload/product/<?php echo e($item->name); ?>" alt="">
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
					<div id="product-view">
						<?php $__currentLoopData = $imageProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="product-view">
							<img src="../upload/product/<?php echo e($item->name); ?>" alt="">
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>
				<div class="col-md-6">
					<div class="product-body">
						<div class="product-label">
							<span>Mới</span>
							<?php if($product->promotion_price != 0): ?>
							<span class="sale">Giảm giá</span>
							<?php endif; ?>
						</div>
						<h2 class="product-name"><?php echo e($product->name); ?></h2>
						<?php
						printPrice($product->unit_price, $product->promotion_price);
						?>
						<div>
							<div class="product-rating">
								<?php for($i = 0; $i < round($product->rating); $i++): ?>
									<i class="fa fa-star"></i>
									<?php endfor; ?>
									<?php for($i = 0; $i < (5 - round($product->rating)); $i++): ?>
										<i class="fa fa-star-o empty"></i>
										<?php endfor; ?>
							</div>
						</div>
						<p><strong>Tình trạng:</strong>
							<?php if($product->quantity > 0): ?>
							<?php echo e('Còn hàng'); ?>

							<?php else: ?>
							<?php echo e('Tạm hết hàng'); ?>

							<?php endif; ?>
						</p>
						<p><strong>Hãng sản xuất:</strong> <?php echo e($product->typeProduct->category->name); ?></p>
						<p><?php echo $product->detail; ?></p>

						<div class="product-btns">
							<div class="qty-input">
								<span class="text-uppercase">Số lượng: </span>
								<button class="btn btn-default" id="qty-down" type="button" style="display: inline;">-</button>
								<input class="form-control" id="qty-type" min="0" value="1" style="display: block; width: 40px; display: inline;" type="tel">
								<button class="btn btn-default bootstrap-touchspin-up" id="qty-up" type="button" style="display: inline">+</button>
								<div class="alert alert-danger" id="promptQty" style="display:  none;"></div>
							</div>
							<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="product-tab">
						<ul class="tab-nav">
							<li class="active"><a data-toggle="tab" href="#tab1">Mô tả</a></li>
							<li><a data-toggle="tab" href="#tab2">Chi tiết</a></li>
							<li><a data-toggle="tab" href="#tab3">Đánh giá</a></li>
						</ul>
						<div class="tab-content">
							<div id="tab1" class="tab-pane fade in active">
								<p><?php echo e($product->description); ?></p>
							</div>
							<div id="tab2" class="tab-pane fade in">
								<p><?php echo $product->detail; ?></p>
							</div>
							<div id="tab3" class="tab-pane fade in">

								<div class="row">
									<div class="col-md-6">
										<div class="product-reviews">
											<?php $__currentLoopData = $reviewProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<div class="single-review">
												<div class="review-heading">
													<div><a href="#"><i class="fa fa-user-o"></i> <?php echo e($item->name); ?></a></div>
													<div><a href="#"><i class="fa fa-clock-o"></i> <?php echo e($item->created_at); ?></a></div>
													<div class="review-rating pull-right">
														<?php for($i = 0; $i < round($item->rating); $i++): ?>
															<i class="fa fa-star"></i>
															<?php endfor; ?>
															<?php for($i = 0; $i < (5 - round($item->rating)); $i++): ?>
																<i class="fa fa-star-o empty"></i>
																<?php endfor; ?>
													</div>
												</div>
												<div class="review-body">
													<p><?php echo $item->content; ?></p>
												</div>
											</div>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

											<?php echo e($reviewProduct->links()); ?>

										</div>
									</div>
									<div class="col-md-6">
										<h4 class="text-uppercase">Thêm đánh giá</h4>
										<p>Địa chỉ email của bạn sẽ không được công bố</p>
										<form class="review-form" method="post" action="them-danh-gia">
											<?php echo e(csrf_field()); ?>

											<input type="hidden" name="id" value="<?php echo e($product->id); ?>">
											<div class="form-group">
												<input class="input" name="txtName" type="text" placeholder="Nhập tên" required="" />
											</div>
											<div class="form-group">
												<input class="input" name="txtEmail" type="email" placeholder="Nhập email" required="" />
											</div>
											<div class="form-group">
												<textarea class="input" name="txtReview" placeholder="Nhập đánh giá" required=""></textarea>
											</div>
											<div class="form-group">
												<div class="input-rating">
													<strong class="text-uppercase">Đánh giá: </strong>
													<div class="stars">
														<input type="radio" id="star5" name="rdoRating" value="5" required="" /><label for="star5"></label>
														<input type="radio" id="star4" name="rdoRating" value="4" required="" /><label for="star4"></label>
														<input type="radio" id="star3" name="rdoRating" value="3" required="" /><label for="star3"></label>
														<input type="radio" id="star2" name="rdoRating" value="2" required="" /><label for="star2"></label>
														<input type="radio" id="star1" name="rdoRating" value="1" required="" /><label for="star1"></label>
													</div>
												</div>
											</div>
											<button type="submit" class="primary-btn">Thêm</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2 class="title">Sản phẩm cùng loại</h2>
				</div>
			</div>

			<?php $__currentLoopData = $relatestProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="product product-single">
					<div class="product-thumb">
						<div class="product-label">
							<span>Mới</span>
							<?php if($item['promotion_price'] != 0): ?>
							<span class="sale">Giảm giá</span>
							<?php endif; ?>
						</div>
						<a href="chi-tiet-san-pham/<?php echo e($item->slug); ?>" class="main-btn quick-view" style="cursor: pointer;"><i class="fa fa-search-plus"></i> Chi tiết</a>
						<img src="../upload/product/<?php echo e($item->imageProduct[0]['name']); ?>" alt="" height="200px">
					</div>
					<div class="product-body">
						<?php
						printPrice($item['unit_price'], $item['promotion_price']);
						?>
						<h2 class="product-name"><a href="chi-tiet-san-pham/<?php echo e($item->slug); ?>"><?php echo e($item['name']); ?></a></h2>
						<div class="product-rating text-center">
							<?php for($i = 0; $i < round($item['rating']); $i++): ?> <i class="fa fa-star"></i>
								<?php endfor; ?>
								<?php for($i = 0; $i < (5 - round($item['rating'])); $i++): ?> <i class="fa fa-star-o empty"></i>
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
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
	$(document).ready(function() {
		$('.pagination').addClass("reviews-pages");
		$('.pagination').removeClass('pagination');

		$('#qty-down').click(function() {
			qty = parseInt($('#qty-type').val());
			if (qty > 1) {
				$('#qty-type').val(qty - 1);
			}
		});

		$('#qty-up').click(function() {
			qty = parseInt($('#qty-type').val());
			$('#qty-type').val(qty + 1);
		});

		$('#qty-type').blur(function() {
			qty = $(this).val();
			if (isNaN(qty)) {
				$(this).val(1);
			}
		});

		$('.add-to-cart').click(function() {
			qty = $('#qty-type').val();
			window.location.href = 'them-gio-hang/<?php echo e($product->id); ?>/' + qty;
		})

	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
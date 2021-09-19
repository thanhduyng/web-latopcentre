<?php $__env->startSection('title'); ?>
Giỏ hàng
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layout.navigation2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div id="breadcrumb">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="trang-chu">Trang chủ</a></li>
			<li class="active">Giỏ hàng</li>
		</ul>
	</div>
</div>

<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if(!isset($cart)): ?>
				<div class="col-md-12 text-center">
					<p>Bạn chưa có sản phẩm trong giỏ hàng.</p>
					<a href="trang-chu" class="primary-btn">Tiếp tục mua hàng</a>
				</div>
				<?php else: ?>
				<div class="order-summary clearfix">
					<div class="section-title">
						<h3 class="title">Giỏ hàng (<?php echo e($totalQty); ?> sản phẩm)</h3>
					</div>
					<table class="shopping-cart-table table">
						<thead>
							<tr>
								<th>Hình ảnh</th>
								<th>Sản phẩm</th>
								<th class="text-center">Giá</th>
								<th class="text-center">Số lượng</th>
								<th class="text-center">Tổng cộng</th>
								<th class="text-right"></th>
							</tr>
						</thead>
						<tbody>
							<?php $__currentLoopData = $productCart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td class="thumb"><img src="../upload/product/<?php echo e($item['item']->imageProduct[0]->name); ?>" alt=""></td>
								<td class="details">
									<a href="<?php echo e($item['item']->slug); ?>.html"><?php echo e($item['item']->name); ?></a>
								</td>
								<td class="price text-center"><?php echo e(printPrice($item['item']->unit_price, $item['item']->promotion_price)); ?></td>
								<td class="qty text-center">
									<button class="btn btn-default qty-down" type="button" data-key="<?php echo e($item['item']->id); ?>" style="display: inline;">-</button>
									<input class="form-control qty-type" min="1" value="<?php echo e($item['qty']); ?>" data-key="<?php echo e($item['item']->id); ?>" style="display: block; width: 40px; display: inline;" type="tel">
									<button class="btn btn-default bootstrap-touchspin-up qty-up" type="button" data-key="<?php echo e($item['item']->id); ?>" style="display: inline">+</button>
								</td>
								<td class="total text-center"><strong class="primary-color"><?php echo e(formatPrice($item['price'])); ?></strong></td>
								<td class="text-right"><a href="xoa-san-pham-gio-hang/<?php echo e($item['item']->id); ?>" class="main-btn icon-btn"><i class="fa fa-close"></i></a></td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
						<tfoot>
							<tr>
								<th class="empty" colspan="3"></th>
								<th>TỔNG GIỎ HÀNG</th>
								<th colspan="2" class="total"><?php echo e(formatPrice($totalPrice)); ?></th>
							</tr>
						</tfoot>
					</table>
					<div class="pull-right">
						<a href="thanh-toan" class="primary-btn" style="cursor: pointer;">Thanh toán</a>
					</div>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php if(session('success') || session('error')): ?>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-show="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel"><span style="color: #F8694A; border-color: #F8694A; border-bottom: 5px solid; font-size: 24px;">Thông báo</span></h4>
			</div>
			<div class="modal-body">
				<span style="font-size: 18px;"><?php echo e(session('success')); ?><?php echo e(session('error')); ?></span>

			</div>
			<div class="modal-footer">
				<button type="button" class="primary-btn" data-dismiss="modal">Đóng</button>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
	$(document).ready(function() {
		$('.pagination').addClass("reviews-pages");
		$('.pagination').removeClass('pagination');

		$('.qty-down').click(function() {
			qty = parseInt($(this).parents("tr").find(".qty-type").val()) - 1;
			key = $(this).attr("data-key");

			if (qty > 1) {
				window.location.href = 'cap-nhat-gio-hang/' + key + '/' + qty;
			} else {
				qty = $(this).parents("tr").find(".qty-type").val(1);
			}
		});

		$('.qty-up').click(function() {
			qty = parseInt($(this).parents("tr").find(".qty-type").val()) + 1;
			key = $(this).attr("data-key");

			window.location.href = 'cap-nhat-gio-hang/' + key + '/' + qty;
		});

		$('.qty-type').blur(function() {
			qty = parseInt($(this).val());
			key = $(this).attr("data-key");

			window.location.href = 'cap-nhat-gio-hang/' + key + '/' + qty;
		});
	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('title'); ?>
Danh sách hóa đơn
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Hóa đơn
		</h1>
		<ol class="breadcrumb">
			<li><a href="admin"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
			<li><a href="admin/hoa-don"><i class="fa fa-list-alt"></i> Hóa đơn</a></li>
			<li class="active">Danh sách</li>
		</ol>
		<?php if(session('success')): ?>
		<div class="alert alert-success">
			<?php echo e(Session('success')); ?>

		</div>
		<?php endif; ?>
	</section>

	<section class="content container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-body">
						<table id="example2" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Khách hàng</th>
									<th>Ngày đặt hàng</th>
									<th>Tổng tiền</th>
									<th>Cách thức giao hàng</th>
									<th>Cách thức thanh toán</th>
									<th>Trạng thái</th>
									<th>Chi tiết</th>
									<th>Chỉnh sửa/Xóa</th>
								</tr>
							</thead>
							<tbody>

								<?php $__currentLoopData = $bill; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($item->users->name); ?></td>
									<td><?php echo e($item->date_order); ?></td>
									<td><?php echo e(formatPrice($item->total)); ?></td>
									<td><?php echo e($item->shipping); ?></td>
									<td><?php echo e($item->payment); ?></td>
									<td class="text-center">
										<?php if($item->status == 0): ?>
										<button class="btn btn-default" data-toggle="modal" data-target="#change-status-<?php echo e($item->id); ?>">
											Chưa xử lý
										</button>

										<div class="modal fade" id="change-status-<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
														<h4 class="modal-title" id="myModalLabel">Yêu cầu xác nhận</h4>
													</div>
													<div class="modal-body">
														Bạn có muốn thay đổi độ trạng thái của hóa đơn này?
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
														<a href="admin/hoa-don/doi-trang-thai/<?php echo e($item->id); ?>"><button type="button" class="btn btn-primary">Lưu thay đổi</button></a>
													</div>
												</div>
											</div>
										</div>
										<?php else: ?>
										<button class="btn btn-success" disabled="">
											Đã xử lý
										</button>

										<?php endif; ?>
									</td>
									<td>
										<button class="btn btn-default" data-toggle="modal" data-target="#view-information-<?php echo e($item->id); ?>" style="cursor: pointer;">
											Xem thêm
										</button>

										<div class="modal fade" id="view-information-<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
														<h4 class="modal-title" id="myModalLabel">Chi tiết hóa đơn</h4>
													</div>
													<div class="modal-body">

														<div class="panel panel-default">
															<div class="panel-heading">
																<h3 class="panel-title">Chi tiết:</h3>
															</div>
															<div class="panel-body">
																<table id="review" class="table table-bordered table-hover">
																	<thead>
																		<tr>
																			<th>Tên sản phẩm</th>
																			<th>Hình ảnh</th>
																			<th>Số lượng</th>
																			<th>Giá gốc:</th>
																			<th>Giá khuyến mãi (nếu khác 0):</th>
																		</tr>
																	</thead>
																	<tbody>
																		<?php $__currentLoopData = $item->billDetail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																		<tr>
																			<td><?php echo e($itemDetail->product->name); ?></td>
																			<td><img width="150px" src="../upload/product/<?php echo e($itemDetail->product->imageProduct[0]->name); ?>" </td>
																			<td><?php echo e($itemDetail->quantity); ?></td>
																			<td><?php echo e(formatPrice($itemDetail->unit_price)); ?></td>
																			<td><?php echo e(formatPrice($itemDetail->promotion_price)); ?></td>
																		</tr>
																		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
																	</tbody>
																</table>
															</div>
														</div>

													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
													</div>
												</div>
											</div>
										</div>
									</td>

									<td class="text-center">

										<button class="btn btn-default" data-toggle="modal" data-target="#delete-<?php echo e($item->id); ?>" <?php if($item->status == 1): ?>
											<?php echo e('disabled'); ?>

											<?php endif; ?>
											><i class="fa fa-times">
											</i></button>

										<div class="modal fade" id="delete-<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
														<h4 class="modal-title" id="myModalLabel">Yêu cầu xác nhận</h4>
													</div>
													<div class="modal-body">
														Bạn có muốn xóa hóa đơn này?
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
														<a href="admin/hoa-don/xoa/<?php echo e($item->id); ?>"><button type="button" class="btn btn-primary">Lưu thay đổi</button></a>
													</div>
												</div>
											</div>
										</div>
									</td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							</tbody>
						</table>
					</div>
				</div>

			</div>

		</div>

	</section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
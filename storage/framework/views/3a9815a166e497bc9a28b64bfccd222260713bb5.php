<?php $__env->startSection('title'); ?>
Danh sách sản phẩm
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Sản phẩm
		</h1>
		<ol class="breadcrumb">
			<li><a href="admin"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
			<li><a href="admin/san-pham"><i class="fa fa-laptop"></i> Sản phẩm</a></li>
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
									<th>Tên sản phẩm</th>
									<th>Tên dòng sản phẩm</th>
									<th>Tên hãng</th>
									<th>Thông tin</th>
									<th>Hình ảnh</th>
									<th>Độ hot</th>
									<th>Chỉnh sửa/Xóa</th>
								</tr>
							</thead>
							<tbody>
								<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($item->name); ?></td>
									<td><?php echo e($item->typeProduct->name); ?></td>
									<td><?php echo e($item->typeProduct->category->name); ?></td>
									<td>
										<ul>
											<li>Giá gốc: <b><?php echo e(formatPrice($item->unit_price)); ?> VNĐ</b></li>
											<li>Giá khuyến mãi (nếu khác 0): <b><?php echo e(formatPrice($item->promotion_price)); ?> VNĐ</b></li>
											<li>Số lượng: <b><?php echo e($item->quantity); ?></b></li>
											<li>Số lượng đã bán: <b><?php echo e($item->quantity_sold); ?></b></li>
											<li>Xếp hạng: <b><?php echo e($item->rating); ?></b></li>
											<li>
												<!-- Button trigger modal -->
												<a class="" data-toggle="modal" data-target="#view-information-<?php echo e($item->id); ?>" style="cursor: pointer;">
													Xem thêm
												</a>

												<!-- Modal -->
												<div class="modal fade" id="view-information-<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
													<div class="modal-dialog modal-lg">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
																<h4 class="modal-title" id="myModalLabel">Thông tin của sản phẩm có tên <b><?php echo e($item->name); ?></b></h4>
															</div>
															<div class="modal-body">

																<div class="panel panel-default">
																	<div class="panel-heading">
																		<h3 class="panel-title">Mô tả:</h3>
																	</div>
																	<div class="panel-body">
																		<?php echo e($item->description); ?>

																	</div>
																</div>

																<div class="panel panel-default">
																	<div class="panel-heading">
																		<h3 class="panel-title">Chi tiết:</h3>
																	</div>
																	<div class="panel-body">
																		<?php echo $item->detail; ?>

																	</div>
																</div>

																<div class="panel panel-default">
																	<div class="panel-heading">
																		<h3 class="panel-title">Đánh giá:</h3>
																	</div>
																	<div class="panel-body">
																		<table id="review" class="table table-bordered table-hover">
																			<thead>
																				<tr>
																					<th>Tên người dùng</th>
																					<th>Email</th>
																					<th width="400px">Nội dung</th>
																					<th>Xếp hạng</th>
																					<th>Xóa</th>
																				</tr>
																			</thead>
																			<tfoot>
																				<tr>
																					<th>Tên người dùng</th>
																					<th>Email</th>
																					<th>Nội dung</th>
																					<th>Xếp hạng</th>
																					<th>Xóa</th>
																				</tr>
																			</tfoot>
																			<tbody>
																				<?php $__currentLoopData = $item->reviewProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemReview): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																				<tr>
																					<td><?php echo e($itemReview->name); ?></td>
																					<td><?php echo e($itemReview->email); ?></td>
																					<td><?php echo e($itemReview->content); ?></td>
																					<td><?php echo e($itemReview->rating); ?></td>
																					<td>
																						<!-- Button trigger modal -->
																						<button class="btn btn-danger" data-toggle="modal" data-target="#deleteReview-<?php echo e($itemReview->id); ?>"><i class="fa fa-times">
																								Xóa
																							</i></button>

																						<!-- Modal -->
																						<div class="modal fade" id="deleteReview-<?php echo e($itemReview->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
																							<div class="modal-dialog">
																								<div class="modal-content">
																									<div class="modal-header">
																										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
																										<h4 class="modal-title" id="myModalLabel">Yêu cầu xác nhận</h4>
																									</div>
																									<div class="modal-body">
																										Bạn có muốn xóa đánh giá của người dùng có tên <b><?php echo e($itemReview->name); ?></b>?
																									</div>
																									<div class="modal-footer">
																										<button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
																										<a href="admin/danh-gia/xoa/<?php echo e($itemReview->id); ?>"><button type="button" class="btn btn-primary">Lưu thay đổi</button></a>
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
															<div class="modal-footer">
																<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
															</div>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</td>
									<td>
										<!-- Button trigger modal -->
										<button class="btn btn-default" data-toggle="modal" data-target="#view-image-<?php echo e($item->id); ?>">
											Xem ảnh
										</button>

										<!-- Modal -->
										<div class="modal fade" id="view-image-<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
														<h4 class="modal-title" id="myModalLabel">Hình ảnh của sản phẩm có tên <b><?php echo e($item->name); ?></b></h4>
													</div>
													<div class="modal-body text-center">
														<?php $__currentLoopData = $item->imageProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<img src="../upload/product/<?php echo e($image->name); ?>" width="250px">
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
													</div>
												</div>
											</div>
										</div>
									</td>
									<td class="text-center">
										<?php if($item->hot == 1): ?>
										<!-- Button trigger modal -->
										<button class="btn btn-danger" data-toggle="modal" data-target="#change-active-<?php echo e($item->id); ?>">
											Hot
										</button>

										<!-- Modal -->
										<div class="modal fade" id="change-active-<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
														<h4 class="modal-title" id="myModalLabel">Yêu cầu xác nhận</h4>
													</div>
													<div class="modal-body">
														Bạn có muốn thay đổi độ hot của sản phẩm có tên <b><?php echo e($item->name); ?></b>?
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
														<a href="admin/san-pham/doi-do-hot/<?php echo e($item->id); ?>"><button type="button" class="btn btn-primary">Lưu thay đổi</button></a>
													</div>
												</div>
											</div>
										</div>
										<?php else: ?>
										<!-- Button trigger modal -->
										<button class="btn btn-primary" data-toggle="modal" data-target="#change-active-<?php echo e($item->id); ?>">
											Bình thường
										</button>

										<!-- Modal -->
										<div class="modal fade" id="change-active-<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
														<h4 class="modal-title" id="myModalLabel">Yêu cầu xác nhận</h4>
													</div>
													<div class="modal-body">
														Bạn có muốn thay đổi độ hot của sản phẩm có tên <b><?php echo e($item->name); ?></b>?
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
														<a href="admin/san-pham/doi-do-hot/<?php echo e($item->id); ?>"><button type="button" class="btn btn-primary">Lưu thay đổi</button></a>
													</div>
												</div>
											</div>
										</div>
										<?php endif; ?>
									</td>
									<td class="text-center">
										<a href="admin/san-pham/sua/<?php echo e($item->id); ?>"><button type="button" class="btn btn-default"><i class="fa fa-edit"></i></button></a>

										<!-- Button trigger modal -->
										<button class="btn btn-default" data-toggle="modal" data-target="#delete-<?php echo e($item->id); ?>"><i class="fa fa-times">
											</i></button>

										<!-- Modal -->
										<div class="modal fade" id="delete-<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
														<h4 class="modal-title" id="myModalLabel">Yêu cầu xác nhận</h4>
													</div>
													<div class="modal-body">
														Bạn có muốn xóa sản phẩm có tên <b><?php echo e($item->name); ?></b>?
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
														<a href="admin/san-pham/xoa/<?php echo e($item->id); ?>"><button type="button" class="btn btn-primary">Lưu thay đổi</button></a>
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
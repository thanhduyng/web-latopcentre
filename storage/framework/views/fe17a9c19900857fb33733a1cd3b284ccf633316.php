<?php $__env->startSection('title'); ?>
Danh sách hãng sản xuất
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Hãng sản xuất
		</h1>
		<ol class="breadcrumb">
			<li><a href="admin"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
			<li><a href="admin/hang-san-xuat"><i class="fa fa-industry"></i> Hãng sản xuất</a></li>
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
									<th>Tên hãng</th>
									<th>Hình ảnh</th>
									<th>Trạng thái</th>
									<th>Chỉnh sửa/Xóa</th>
								</tr>
							</thead>
							<tbody>

								<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($item->name); ?></td>
									<td><img src="../upload/category/<?php echo e($item->image); ?>" width="100px"></td>
									<td class="text-center">
										<?php if($item->active == 1): ?>
										<button class="btn btn-success" data-toggle="modal" data-target="#change-active-<?php echo e($item->id); ?>">
											Hoạt động
										</button>

										<div class="modal fade" id="change-active-<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
														<h4 class="modal-title" id="myModalLabel">Yêu cầu xác nhận</h4>
													</div>
													<div class="modal-body">
														Bạn có muốn thay đổi trạng thái của hãng có tên <b><?php echo e($item->name); ?></b>?
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
														<a href="admin/hang-san-xuat/doi-trang-thai/<?php echo e($item->id); ?>"><button type="button" class="btn btn-primary">Lưu thay đổi</button></a>
													</div>
												</div>
											</div>
										</div>
										<?php else: ?>
										<button class="btn btn-default" data-toggle="modal" data-target="#change-active-<?php echo e($item->id); ?>">
											Không hoạt động
										</button>

										<div class="modal fade" id="change-active-<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
														<h4 class="modal-title" id="myModalLabel">Yêu cầu xác nhận</h4>
													</div>
													<div class="modal-body">
														Bạn có muốn thay đổi trạng thái của hãng có tên <b><?php echo e($item->name); ?></b>?
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
														<a href="admin/hang-san-xuat/doi-trang-thai/<?php echo e($item->id); ?>"><button type="button" class="btn btn-primary">Lưu thay đổi</button></a>
													</div>
												</div>
											</div>
										</div>
										<?php endif; ?>
									</td>
									<td class="text-center">
										<a href="admin/hang-san-xuat/sua/<?php echo e($item->id); ?>"><button type="button" class="btn btn-default"><i class="fa fa-edit"></i></button></a>

										<button class="btn btn-default" data-toggle="modal" data-target="#delete-<?php echo e($item->id); ?>"><i class="fa fa-times">
											</i></button>

										<div class="modal fade" id="delete-<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
														<h4 class="modal-title" id="myModalLabel">Yêu cầu xác nhận</h4>
													</div>
													<div class="modal-body">
														Bạn có muốn xóa hãng <b><?php echo e($item->name); ?></b>?
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
														<a href="admin/hang-san-xuat/xoa/<?php echo e($item->id); ?>"><button type="button" class="btn btn-primary">Lưu thay đổi</button></a>
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
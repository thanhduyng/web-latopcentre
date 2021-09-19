<?php $__env->startSection('title'); ?>
Danh sách người quản trị
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Quản trị viên
		</h1>
		<ol class="breadcrumb">
			<li><a href="admin"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
			<li><a href="admin/quan-tri-vien"><i class="fa fa-user-secret"></i> Quản trị viên</a></li>
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
									<th>Tên người dùng</th>
									<th>Email</th>
									<th>Hình đại diện</th>
									<th>Địa chỉ</th>
									<th>Số điện thoại</th>
									<th>Cấp độ</th>
									<th>Chỉnh sửa/Xóa</th>
								</tr>
							</thead>
							<tbody>

								<?php $__currentLoopData = $admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($item->name); ?></td>
									<td><?php echo e($item->email); ?></td>
									<td><img src="../upload/users/<?php echo e($item->avatar); ?>" width="80px"></td>
									<td><?php echo e($item->address); ?></td>
									<td><?php echo e($item->phone); ?></td>
									<td class="text-center">
										<?php if($item->level == 1): ?>
										<button class="btn btn-default" data-toggle="modal" data-target="#change-level-<?php echo e($item->id); ?>">
											Cộng tác viên
										</button>

										<div class="modal fade" id="change-level-<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
														<h4 class="modal-title" id="myModalLabel">Yêu cầu xác nhận</h4>
													</div>
													<div class="modal-body">
														Bạn có muốn thay đổi cấp độ của quản trị viên có tên <b><?php echo e($item->name); ?></b>?
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
														<a href="admin/quan-tri-vien/doi-cap-do/<?php echo e($item->id); ?>"><button type="button" class="btn btn-default">Lưu thay đổi</button></a>
													</div>
												</div>
											</div>
										</div>
										<?php else: ?>
										<button class="btn btn-success" data-toggle="modal" data-target="#change-level-<?php echo e($item->id); ?>">
											Quản trị viên
										</button>

										<div class="modal fade" id="change-level-<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
														<h4 class="modal-title" id="myModalLabel">Yêu cầu xác nhận</h4>
													</div>
													<div class="modal-body">
														Bạn có muốn thay đổi cấp độ của quản trị viên có tên <b><?php echo e($item->name); ?></b>?
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
														<a href="admin/quan-tri-vien/doi-cap-do/<?php echo e($item->id); ?>"><button type="button" class="btn btn-default">Lưu thay đổi</button></a>
													</div>
												</div>
											</div>
										</div>
										<?php endif; ?>
									</td>
									<td class="text-center">
										<a href="admin/quan-tri-vien/sua/<?php echo e($item->id); ?>"><button type="button" class="btn btn-default"><i class="fa fa-edit"></i></button></a>
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
														Bạn có muốn xóa quản trị viên <b><?php echo e($item->name); ?></b>?
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
														<a href="admin/quan-tri-vien/xoa/<?php echo e($item->id); ?>"><button type="button" class="btn btn-default">Lưu thay đổi</button></a>
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
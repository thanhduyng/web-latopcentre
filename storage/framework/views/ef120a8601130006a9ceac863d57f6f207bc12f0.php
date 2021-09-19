<?php $__env->startSection('title'); ?>
Danh sách tin tức
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Tin tức
		</h1>
		<ol class="breadcrumb">
			<li><a href="admin"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
			<li><a href="admin/tin-tuc"><i class="fa fa-industry"></i> Tin tức</a></li>
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
									<th>Ảnh</th>
									<th>Tiêu đề</th>
									<th>Danh mục</th>
									<th>Giới thiệu</th>
									<th>Nội dung</th>
									<th>Chỉnh sửa/Xóa</th>
								</tr>
							</thead>
							<tbody>

								<?php $__currentLoopData = $new; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><img src="../upload/new/<?php echo e($item->image); ?>" width="100px"></td>
									<td><?php echo e($item->title); ?></td>
									<td><?php echo \App\category_new::find($item->id_category_new)->name ?></td>
									<td><?php echo e($item->info); ?></td>
									<td>
										<button class="btn btn-default" data-toggle="modal" data-target="#view-new-<?php echo e($item->id); ?>" style="cursor: pointer;">Chi tiết</button>

										<div class="modal fade" id="view-new-<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
														<h4 class="modal-title" id="myModalLabel">
															<b style="display: -webkit-box;"> <?php echo e($item->title); ?></b>
														</h4>
													</div>
													<div class="modal-body">
														<div class="panel panel-default">
															<div class="panel-heading">
																<h3 class="panel-title">Chi tiết:</h3>
															</div>
															<div class="panel-body">
																<?php echo $item->content; ?>

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
										<a href="admin/tin-tuc/sua/<?php echo e($item->id); ?>"><button type="button" class="btn btn-default"><i class="fa fa-edit"></i></button></a>
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
														Bạn có muốn xóa tin tức <b><?php echo e($item->title); ?></b>?
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
														<a href="admin/tin-tuc/xoa/<?php echo e($item->id); ?>"><button type="button" class="btn btn-primary">Lưu thay đổi</button></a>
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
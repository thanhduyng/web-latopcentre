<?php $__env->startSection('title'); ?>
Thông tin người dùng
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layout.navigation2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div id="breadcrumb">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="trang-chu">Trang chủ</a></li>
			<li class="active">Thông tin người dùng</li>
		</ul>
	</div>
</div>

<div class="section">
	<div class="container">
		<div class="row">
			<form class="clearfix" action="thong-tin-nguoi-dung" method="post" enctype="multipart/form-data">
				<?php echo e(csrf_field()); ?>

				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="billing-details">
						<div class="section-title">
							<h3 class="title">Thông tin người dùng</h3>
						</div>

						<?php if(count($errors) > 0): ?>
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-show="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="myModalLabel"><span style="color: #F8694A; border-color: #F8694A; border-bottom: 5px solid; font-size: 24px;">Thông báo</span></h4>
									</div>
									<div class="modal-body">
										<span style="font-size: 18px;">
											<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<?php echo e($item); ?><br />
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</span>
									</div>
									<div class="modal-footer">
										<button type="button" class="primary-btn" data-dismiss="modal">Đóng</button>
									</div>
								</div>
							</div>
						</div>
						<div class="alert alert-danger">
							<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php echo e($item); ?><br />
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
						<?php endif; ?>

						<div class="form-group">
							<label for="txtName">Họ tên:</label>
							<input class="input" type="text" id="txtName" name="txtName" value="<?php echo e(Auth::user()->name); ?>" placeholder="Nhập họ tên" required="">
						</div>
						<div class="form-group">
							<label for="txtEmail">Email:</label>
							<input class="input" type="email" id="txtEmail" name="txtEmail" value="<?php echo e(Auth::user()->email); ?>" disabled="" placeholder="Nhập email" required="">
						</div>
						<div class="form-group">
							<label for="txtName">Ảnh đại diện:</label><br />
							<img src="/public/upload/users/<?php echo e(Auth::user()->avatar); ?>" width="150px">
							<input class="input" type="file" id="fileAvatar" name="fileAvatar" required="">
						</div>
						<div class="form-group">
							<label for="txtName">Địa chỉ:</label>
							<input class="input" type="text" id="txtAddress" name="txtAddress" value="<?php echo e(Auth::user()->address); ?>" placeholder="Nhập địa chỉ" required="">
						</div>
						<div class="form-group">
							<label for="txtName">Số điện thoại:</label>
							<input class="input" type="tel" id="txtPhone" name="txtPhone" value="<?php echo e(Auth::user()->phone); ?>" placeholder="Nhập số điện thoại" required="">
						</div>
						<div class="form-group text-center">
							<button class="primary-btn" type="submit">Thay đổi</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
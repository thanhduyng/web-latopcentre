<?php $__env->startSection('title'); ?>
	Đăng ký
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<?php echo $__env->make('layout.navigation2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="trang-chu">Trang chủ</a></li>
				<li class="active">Đăng ký</li>
			</ul>
		</div>
	</div>

	<div class="section">
		<div class="container">
			<div class="row">
				<form class="clearfix" action="dang-ky" method="post" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>

					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Đăng ký</h3>
							</div>

							<?php if(count($errors) > 0): ?>
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
								<input class="input" type="text" id="txtName" name="txtName" placeholder="Nhập họ tên" required="">
							</div>							
							<div class="form-group">
								<label for="txtEmail">Email:</label>
								<input class="input" type="email" id="txtEmail" name="txtEmail" placeholder="Nhập email" required="">
							</div>
							<div class="form-group">
								<label for="txtName">Mật khẩu:</label>
								<input class="input" type="password" id="txtPassword" name="txtPassword" placeholder="Nhập mật khẩu" required="">
							</div>
							<div class="form-group">
								<label for="txtName">Nhập lại mật khẩu:</label>
								<input class="input" type="password" id="txtRePassword" name="txtRePassword" placeholder="Nhập lại mật khẩu" required="">
								<div id="prompt-re-password"></div>
							</div>
							<div class="form-group">
								<label for="txtName">Ảnh đại diện:</label>
								<input class="input" type="file" id="fileAvatar" name="fileAvatar" required="">
							</div>
							<div class="form-group">
								<label for="txtName">Địa chỉ:</label>
								<input class="input" type="text" id="txtAddress" name="txtAddress" placeholder="Nhập địa chỉ" required="">
							</div>
							<div class="form-group">
								<label for="txtName">Số điện thoại:</label>
								<input class="input" type="tel" id="txtPhone" name="txtPhone" placeholder="Nhập số điện thoại" required="">
							</div>
							<div class="form-group text-center">
								<button class="primary-btn" type="submit">Đăng ký</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#txtRePassword').blur(function () {
				if ($(this).val() != $('#txtPassword').val()) {
					$('#prompt-re-password').addClass('alert alert-danger');
					$('#prompt-re-password').html('Mật khẩu và Nhập lại mật khẩu không trùng khớp, thử lại.');
				}
				else {
					$('#prompt-re-password').removeClass('alert alert-danger');
					$('#prompt-re-password').html('');
				}
			});
		});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
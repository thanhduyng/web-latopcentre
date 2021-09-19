<?php $__env->startSection('title'); ?>
Đăng nhập
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layout.navigation2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div id="breadcrumb">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="trang-chu">Trang chủ</a></li>
			<li class="active">Đăng nhập</li>
		</ul>
	</div>
</div>

<div class="section">
	<div class="container">
		<div class="row">
			<form class="clearfix" action="dang-nhap" method="post">
				<?php echo e(csrf_field()); ?>

				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="billing-details">
						<div class="section-title">
							<h3 class="title">Đăng nhập</h3>
						</div>
						<input type="hidden" id="currentUrl" name="currentUrl" value="<?php echo e($currentUrl); ?>">
						<div class="form-group">
							<label for="txtEmail">Email:</label>
							<input class="input" type="email" id="txtEmail" name="txtEmail" placeholder="Nhập email" required="">
						</div>
						<div class="form-group">
							<label for="txtName">Mật khẩu:</label>
							<input class="input" type="password" id="txtPassword" name="txtPassword" placeholder="Nhập mật khẩu" required="">
						</div>
						<div class="form-group text-center">
							<a class="pull-left" href="password/reset">Quên mật khẩu?</a>
							<button class="primary-btn pull-right" type="submit">Đăng nhập</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
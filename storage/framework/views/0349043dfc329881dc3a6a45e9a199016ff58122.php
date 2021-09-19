<?php $__env->startSection('title'); ?>
    Đăng nhập
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.navigation2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- BREADCRUMB -->
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="trang-chu">Trang chủ</a></li>
                <li class="active">Đăng nhập</li>
            </ul>
        </div>
    </div>
    <!-- /BREADCRUMB -->

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <form class="clearfix" action="<?php echo e(route('password.request')); ?>" method="POST">
                    <?php echo e(csrf_field()); ?>


                    <input type="hidden" name="token" value="<?php echo e($token); ?>">

                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="billing-details">
                            <div class="section-title">
                                <h3 class="title">Reset Password</h3>
                            </div>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="txtEmail">Email:</label>
                            <input class="input" type="email" id="email" name="email" value="<?php echo e(isset($email) ? $email : old('email')); ?>" placeholder="Nhập email" required="" autofocus="">

                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password">Mật khẩu</label>
                            <input id="password" type="password" class="input" name="password" required>

                            <?php if($errors->has('password')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                            <label for="password-confirm">Nhập lại mật khẩu</label>
                            <input id="password-confirm" type="password" class="input" name="password_confirmation" required>

                            <?php if($errors->has('password_confirmation')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group text-center">
                                <button class="primary-btn" type="submit">Reset Password</button>
                            </div>
                    </div>
                </form>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
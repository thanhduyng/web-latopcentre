<?php $__env->startSection('title'); ?>
    Reset Password
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.navigation2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="trang-chu">Trang chủ</a></li>
                <li class="active">Reset Password</li>
            </ul>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>

                <form class="clearfix" action="<?php echo e(route('password.email')); ?>" method="POST">
                    <?php echo e(csrf_field()); ?>


                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="billing-details">
                            <div class="section-title">
                                <h3 class="title">Reset Password</h3>
                            </div>                       
                            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <label for="txtEmail">Email:</label>
                                <input class="input" type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="Nhập email" required="" autofocus="">

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group text-center">
                                <button class="primary-btn" type="submit">Send Reset Password Link</button>
                            </div>
                        </div>
                    </div>                       
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
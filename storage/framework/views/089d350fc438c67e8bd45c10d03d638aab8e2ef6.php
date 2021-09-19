<?php $__env->startSection('title'); ?>
	Cập nhập liên hệ
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>  
	<div class="content-wrapper">
	    <section class="content-header">
	        <h1>Liên hệ</h1>
	        <ol class="breadcrumb">
	        	<li><a href="admin"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
	            <li><a href="admin/slide"><i class="fa fa-image"></i> Liên hệ</a></li>
	            <li class="active">Sửa</li>
	        </ol>
	    </section>
	    <section class="content container-fluid">

			<div class="box box-primary">
			    <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($err); ?><br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>

                <?php if(session('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(Session('success')); ?>

                    </div>
                <?php endif; ?>
                <?php if(session('error')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(Session('error')); ?>

                    </div>
                <?php endif; ?>
			    <form role="form" method="POST"  action="admin/setting/lien-he/<?php echo e($lienHe->id); ?>">
			    	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			        <div class="box-body">
			            <div class="form-group">
			                <label for="txtName">Tiêu đề</label>
			                <input type="text" class="form-control" id="txtName" name="title_lienhe" placeholder="Nhập tiêu đề" required="" value="<?php echo e($lienHe->title_lienhe); ?>">
			            </div>

                        <div class="form-group">
			                <label for="txtName">Địa chỉ</label>
			                <input type="text" class="form-control" id="txtName" name="diachi" placeholder="Nhập địa chỉ" required="" value="<?php echo e($lienHe->diachi); ?>">
			            </div>

                        <div class="form-group">
			                <label for="txtName">Email</label>
			                <input type="text" class="form-control" id="txtName" name="email" placeholder="Nhập email" required="" value="<?php echo e($lienHe->email); ?>">
			            </div>

                        <div class="form-group">
			                <label for="txtName">Phone</label>
			                <input type="text" class="form-control" id="txtName" name="phone" placeholder="Nhập số điện thoại" required="" value="<?php echo e($lienHe->phone); ?>">
			            </div>

			        </div>
			        <div class="box-footer">
			            <button type="submit" class="btn btn-primary">Sửa</button>
			        </div>
			    </form>
			</div>

	    </section>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
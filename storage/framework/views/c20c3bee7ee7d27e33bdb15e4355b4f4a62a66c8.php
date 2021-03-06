<?php $__env->startSection('content'); ?>  
	<div class="content-wrapper">
	    <section class="content-header">
	        <h1>
	            Danh mục tin tức
	        </h1>
	        <ol class="breadcrumb">
	        	<li><a href="admin"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
	            <li><a href="admin/hang-san-xuat"><i class="fa fa-industry"></i> Danh mục tin tức</a></li>
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

				<form role="form" method="POST" enctype="multipart/form-data" action="admin/danh-muc-tin-tuc/sua/<?php echo e($categoryNews->id); ?>">
			    	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			        <div class="box-body">
			            <div class="form-group">
			                <label for="txtName">Tên danh mục</label>
			                <input type="text" class="form-control" id="txtName" name="name" placeholder="Nhập tên danh mục" required="" value="<?php echo e($categoryNews->name); ?>">
			            </div>

						<div class="form-group">
			                <label for="txtName">Thứ tự</label>
			                <input type="text" class="form-control" id="txtName" name="sort_order" placeholder="Nhập thứ tự" required="" value="<?php echo e($categoryNews->sort_order); ?>">
			            </div>

						<div class="form-group">
						    <div class="radio">
						        <label>
						        <input type="radio" name="rdoActive" id="rdoActive1" value="1" 
								<?php if($categoryNews->status == 1): ?>
									<?php echo e('checked'); ?>

								<?php endif; ?>
						        >
						        Hoạt động
						    	</label>
						    	&nbsp;&nbsp;&nbsp;
						    	<label>
						        <input type="radio" name="rdoActive" id="rdoActive0" value="0" 
								<?php if($categoryNews->status == 0): ?>
									<?php echo e('checked'); ?>

								<?php endif; ?>
						        >
						        Không hoạt động
						        </label>
						    </div>
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
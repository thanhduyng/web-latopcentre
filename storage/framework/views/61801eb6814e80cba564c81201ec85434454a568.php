<?php $__env->startSection('content'); ?>  
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	        <h1>
	            Slide
	        </h1>
	        <ol class="breadcrumb">
	        	<li><a href="admin"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
	            <li><a href="admin/slide"><i class="fa fa-image"></i> Slide</a></li>
	            <li class="active">Thêm</li>
	        </ol>
	    </section>
	    <!-- Main content -->
	    <section class="content container-fluid">

			<div class="box box-primary">
			    
			    <!-- /.box-header -->
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
			    <!-- form start -->
			    <form role="form" method="POST" enctype="multipart/form-data" action="admin/slide/them">
			    	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			        <div class="box-body">
			            <div class="form-group">
			                <label for="txtLink">Liên kết</label>
			                <input type="text" class="form-control" id="txtLink" name="txtLink" placeholder="Nhập liên kết" required="">
			            </div>

			            <div class="form-group">
			                <label for="filImage">Hình ảnh</label>
			                <input type="file" id="filImage" name="filImage" required="">
			                
			            </div>


						<div class="form-group">
							<label>Trạng thái</label>
						    <div class="radio">
						        <label>
						        <input type="radio" name="rdoActive" id="rdoActive1" value="1" checked>
						        Hoạt động
						    	</label>
						    	&nbsp;&nbsp;&nbsp;
						    	<label>
						        <input type="radio" name="rdoActive" id="rdoActive0" value="0">
						        Không hoạt động
						        </label>
						    </div>
						</div>


			        </div>
			        <!-- /.box-body -->
			        <div class="box-footer">
			            <button type="submit" class="btn btn-primary">Thêm</button>
			        </div>
			    </form>
			</div>
			<!-- /.box -->

	    </section>
	    <!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
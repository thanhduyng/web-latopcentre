<?php $__env->startSection('content'); ?>  
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	        <h1>
	            Dòng sản phẩm
	        </h1>
	        <ol class="breadcrumb">
	        	<li><a href="admin"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
	            <li><a href="admin/dong-san-pham"><i class="fa fa-database"></i> Dòng sản phẩm</a></li>
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
			    <form role="form" method="POST" enctype="multipart/form-data" action="admin/dong-san-pham/them">
			    	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			        <div class="box-body">
			        	<div class="form-group">
			        		<label for="lstIDCategory">Chọn hãng sản xuất</label>
			        		<select name="lstIDCategory" id="lstIDCategory" class="form-control" required="">
		        			<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		        				<option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
		        			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			        		</select>
			        	</div>

			            <div class="form-group">
			                <label for="txtName">Tên dòng sản phẩm</label>
			                <input type="text" class="form-control" id="txtName" name="txtName" placeholder="Nhập tên dòng sản phẩm" required="">
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
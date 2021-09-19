<?php $__env->startSection('content'); ?>  
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	        <h1>
	            Quản trị viên
	        </h1>
	        <ol class="breadcrumb">
	        	<li><a href="admin"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
	            <li><a href="admin/quan-tri-vien"><i class="fa fa-user-secret"></i> Quản trị viên</a></li>
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
			    <form role="form" method="POST" enctype="multipart/form-data" action="admin/quan-tri-vien/them">
			    	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			        <div class="box-body">
			            <div class="form-group">
			                <label for="txtName">Tên</label>
			                <input type="text" class="form-control" id="txtName" name="txtName" placeholder="Nhập tên quản trị viên" required="">
			            </div>

			            <div class="form-group">
			                <label for="txtEmail">Email</label>
			                <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Nhập email" required="">
			            </div>

			            <div class="form-group">
			                <label for="txtPassword">Mật khẩu</label>
			                <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Nhập mật khẩu" required="">
			            </div>

			            <div class="form-group">
			                <label for="txtConfirmPassword">Xác nhận mật khẩu</label>
			                <input type="password" class="form-control" id="txtConfirmPassword" name="txtConfirmPassword" placeholder="Nhập lại mật khẩu" required="">
			            </div>

			            <div class="form-group">
			                <label for="txtAddress">Địa chỉ</label>
			                <input type="text" class="form-control" id="txtAddress" name="txtAddress" placeholder="Nhập địa chỉ" required="">
			            </div>

			            <div class="form-group">
			                <label for="txtPhone">Số điện thoại</label>
			                <input type="tel" class="form-control" id="txtPhone" name="txtPhone" placeholder="Nhập số điện thoại" required="">
			            </div>

			            <div class="form-group">
			                <label for="filAvatar">Hình đại diện</label>
			                <input type="file" id="filAvatar" name="filAvatar" required="">
			            </div>


						<div class="form-group">
							<label>Cấp độ</label>
						    <div class="radio">
						        <label>
						        <input type="radio" name="rdoLevel" id="rdoLevel1" value="1" checked>
						        Cộng tác viên
						    	</label>
						    	&nbsp;&nbsp;&nbsp;
						    	<label>
						        <input type="radio" name="rdoLevel" id="rdoLevel2" value="2">
						        Quản trị viên
						        </label>
						    </div>
						</div>


			        </div>

					<div class="box-footer">
			            <button type="submit" class="btn btn-primary">Thêm</button>
			        </div>
			    </form>
			</div>
			<!-- /.box -->

	    </section>
	</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
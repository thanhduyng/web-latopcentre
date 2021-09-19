<?php $__env->startSection('title'); ?>
	Danh sách người dùng
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>  
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	        <h1>
	            Người dùng
	        </h1>
	        <ol class="breadcrumb">
	        	<li><a href="admin"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
	            <li><a href="admin/nguoi-dung"><i class="fa fa-user"></i> Người dùng</a></li>
	            <li class="active">Danh sách</li>
	        </ol>
	        <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(Session('success')); ?>

                </div>
            <?php endif; ?>
	    </section>
	    <!-- Main content -->
	    <section class="content container-fluid">

			<div class="row">
			    <div class="col-xs-12">
			        <div class="box">
			            
			            <!-- /.box-header -->
			            <div class="box-body">
			                <table id="example2" class="table table-bordered table-hover">
			                    <thead>
			                        <tr>
			                            <th>Tên người dùng</th>
			                            <th>Email</th>
			                            <th>Hình đại diện</th>
			                            <th>Địa chỉ</th>
			                            <th>Số điện thoại</th>
			                            <th>Chỉnh sửa/Xóa</th>
			                        </tr>
			                    </thead>
			                    <tbody>

		                    	<?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                    		<tr>
			                            <td><?php echo e($item->name); ?></td>
			                            <td><?php echo e($item->email); ?></td>
			                            <td><img src="/public/upload/users/<?php echo e($item->avatar); ?>" width="100px"></td>
			                            <td><?php echo e($item->address); ?></td>
			                            <td><?php echo e($item->phone); ?></td>
			                            <td  class="text-center">
			                            	
			                            	<!-- Button trigger modal -->
											<button class="btn btn-default" data-toggle="modal" data-target="#delete-<?php echo e($item->id); ?>"><i class="fa fa-times">
											Xóa
											</i></button>

											<!-- Modal -->
											<div class="modal fade" id="delete-<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											    <div class="modal-dialog">
											        <div class="modal-content">
											            <div class="modal-header">
											                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											                <h4 class="modal-title" id="myModalLabel">Yêu cầu xác nhận</h4>
											            </div>
											            <div class="modal-body">
											                Bạn có muốn xóa người dùng có tên <b><?php echo e($item->name); ?></b>?
											            </div>
											            <div class="modal-footer">
											                <button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
											                <a href="admin/nguoi-dung/xoa/<?php echo e($item->id); ?>"><button type="button" class="btn btn-primary">Lưu thay đổi</button></a>
											            </div>
											        </div>
											    </div>
											</div>
			                            </td>
			                        </tr>
		                    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			                        
			                    </tbody>
			                </table>
			            </div>
			            <!-- /.box-body -->
			        </div>

			    </div>
			    <!-- /.col -->

				




			</div>
			<!-- /.row -->



	    </section>
	    <!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
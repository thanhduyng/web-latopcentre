<?php $__env->startSection('title'); ?>
	Thêm sản phẩm
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="../admin_asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Sản phẩm
		</h1>
		<ol class="breadcrumb">
			<li><a href="admin"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
			<li><a href="admin/san-pham"><i class="fa fa-laptop"></i> Sản phẩm</a></li>
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
			<form role="form" method="POST" enctype="multipart/form-data" action="admin/san-pham/them">
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
				<div class="box-body">
					<div class="form-group">
						<label for="lstIDCategory">Tên hãng sản xuất</label>
						<select name="lstIDCategory" id="lstIDCategory" class="form-control" required="">
							<option value="">Vui lòng chọn hãng sản xuất</option>
							<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>

					<div class="form-group">
						<label for="lstIDType">Tên dòng sản phẩm</label>
						<select name="lstIDType" id="lstIDType" class="form-control" required="">
							<option>Vui lòng chọn hãng sản xuất trước</option>
						</select>
					</div>

					<div class="form-group">
						<label for="txtName">Tên sản phẩm</label>
						<input type="text" class="form-control" id="txtName" name="txtName" placeholder="Nhập tên sản phẩm" required="">
					</div>

					<div class="form-group">
						<label for="txtUnitPrice">Giá sản phẩm</label>
						<input type="number" class="form-control" id="txtUnitPrice" name="txtUnitPrice" placeholder="Nhập giá sản phẩm" required="">
					</div>

					<div class="form-group">
						<label for="txtPromotionPrice">Giá khuyến mãi (nếu khác 0):</label>
						<input type="number" class="form-control" id="txtPromotionPrice" name="txtPromotionPrice" placeholder="Nhập giá sản phẩm" required="" value="0">
					</div>

					<div class="form-group">
						<label for="txtQuantity">Số lượng</label>
						<input type="number" class="form-control" id="txtQuantity" name="txtQuantity" placeholder="Nhập số lượng sản phẩm" required="" value="0">
					</div>

					<div class="form-group" id="divImage">
						<div class="form-group">
							<label for="filImage">Hình ảnh</label>
							<input type="file" id="filImage[]" name="filImage[]" required="">
							
						</div>
					</div>
					<button type="button" class="btn btn-default" id="btnAddImage">Thêm ảnh</button>

					<div class="form-group">
						<label for="txtDescription">Mô tả</label>
						<input type="text" class="form-control" id="txtDescription" name="txtDescription" placeholder="Nhập mô tả của sản phẩm" required="">
					</div>
					<div class="form-group">
						<label for="txtDescription">Chi tiết</label>
						<textarea id="txtDetail" name="txtDetail" rows="10" cols="80"></textarea>
					</div>

					<div class="form-group">
						<label>Độ hot</label>
						<div class="radio">
							<label>
								<input type="radio" name="rdoHot" id="rdoHot1" value="1">
								Hot
							</label>
							&nbsp;&nbsp;&nbsp;
							<label>
								<input type="radio" name="rdoHot" id="rdoHot0" value="0" checked>
								Bình thường
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

<?php $__env->startSection('script'); ?>
<script src="../admin_asset/bower_components/ckeditor/ckeditor.js"></script>
<script src="../admin_asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="../js/product/product.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
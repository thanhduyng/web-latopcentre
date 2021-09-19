<?php $__env->startSection('title'); ?>
	Cập nhập sản phẩm
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<!-- bootstrap wysihtml5 - text editor -->
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
			<li class="active">Sửa</li>
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
			<form role="form" method="POST" enctype="multipart/form-data" action="admin/san-pham/sua/<?php echo e($product->id); ?>">
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
				<div class="box-body">
					<div class="form-group">
						<label for="lstIDCategory">Tên hãng sản xuất</label>
						<select name="lstIDCategory" id="lstIDCategory" class="form-control" required="">
							<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($item->id); ?>" <?php if($item->id == $product->typeProduct->id_category): ?>
								<?php echo e('selected'); ?>

								<?php endif; ?>
								><?php echo e($item->name); ?>

							</option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>

					<div class="form-group">
						<label for="lstIDType">Tên dòng sản phẩm</label>
						<select name="lstIDType" id="lstIDType" class="form-control" required="">
							<?php $__currentLoopData = $typeProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($item->id); ?>" <?php if($item->id == $product->id_type): ?>
								<?php echo e('selected'); ?>

								<?php endif; ?>
								><?php echo e($item->name); ?>

							</option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>

					<div class="form-group">
						<label for="txtName">Tên sản phẩm</label>
						<input type="text" class="form-control" id="txtName" name="txtName" placeholder="Nhập tên sản phẩm" required="" value="<?php echo e($product->name); ?>">
					</div>

					<div class="form-group">
						<label for="txtUnitPrice">Giá sản phẩm</label>
						<input type="number" class="form-control" id="txtUnitPrice" name="txtUnitPrice" placeholder="Nhập giá sản phẩm" required="" value="<?php echo e($product->unit_price); ?>">
					</div>

					<div class="form-group">
						<label for="txtPromotionPrice">Giá khuyến mãi (nếu khác 0):</label>
						<input type="number" class="form-control" id="txtPromotionPrice" name="txtPromotionPrice" placeholder="Nhập giá sản phẩm" required="" value="<?php echo e($product->promotion_price); ?>">
					</div>

					<div class="form-group">
						<label for="txtQuantity">Số lượng</label>
						<input type="number" class="form-control" id="txtQuantity" name="txtQuantity" placeholder="Nhập số lượng sản phẩm" required="" value="<?php echo e($product->quantity); ?>">
					</div>

					<div class="form-group" id="divImage">

						<?php $__currentLoopData = $product->imageProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="form-group col-md-5 text-center">
							<img src="../upload/product/<?php echo e($item->name); ?>" height="250px">
							<p><input type="checkbox" name="chkDeleteImage[]" value="<?php echo e($item->id); ?>"> Xóa ảnh này</p>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<div class="clearfix"></div>
						<div class="form-group">
							<label for="filImage">Hình ảnh</label>
							<input type="file" id="filImage[]" name="filImage[]">
							
						</div>
					</div>
					<button type="button" class="btn btn-default" id="btnAddImage">Thêm ảnh</button>

					<div class="form-group">
						<label for="txtDescription">Mô tả</label>
						<input type="text" class="form-control" id="txtDescription" name="txtDescription" placeholder="Nhập mô tả của sản phẩm" required="" value="<?php echo e($product->description); ?>">
					</div>
					<div class="form-group">
						<label for="txtDescription">Chi tiết</label>
						<textarea id="txtDetail" name="txtDetail" rows="10" cols="80"><?php echo e($product->detail); ?></textarea>
					</div>

					<div class="form-group">
						<div class="radio">
							<label>
								<input type="radio" name="rdoHot" id="rdoHot1" value="1" <?php if($product->hot == 1): ?>
								<?php echo e('checked'); ?>

								<?php endif; ?>
								>
								Hot
							</label>
							&nbsp;&nbsp;&nbsp;
							<label>
								<input type="radio" name="rdoHot" id="rdoHot0" value="0" <?php if($product->hot == 0): ?>
								<?php echo e('checked'); ?>

								<?php endif; ?>
								>
								Bình thường
							</label>
						</div>
					</div>


				</div>
				<!-- /.box-body -->
				<div class="box-footer">
					<button type="submit" class="btn btn-primary">Sửa</button>
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
<?php $__env->startSection('title'); ?>
Đơn hàng
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layout.navigation2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="trang-chu">Trang chủ</a></li>
            <li class="active">Đơn hàng</li>
        </ul>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="order-summary clearfix">
                    <?php if(isset($donHang) >1): ?>
                    <table class="shopping-cart-table table">
                        <thead>
                            <tr>
                                <th>Tên sản phẩm</th>
                                <th>Ảnh</th>
                                <th>Số lượng</th>
                                <th>Giá tiền</th>
                                <th>Tổng cộng</th>
                                <th>Trạng thái</th>
                                <th>Ngày mua hàng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $donHang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="thumb"><?php echo \App\Product::find($value->id_product)->name ?></td>
                                <td class="thumb"><img src="../upload/product/<?php echo \App\ImageProduct::find($value->id_product)->name ?>" alt=""></td>
                                <td class="details"><?php echo e($value->quantity); ?></td>
                                <td><?php echo e($value->unit_price); ?></td>
                                <td><?php echo e($value->total); ?></td>
                                <td>
                                    <?php if($value->status == 0): ?>
                                    Đang xử lý
                                    <?php else: ?>
                                    Đang giao hàng
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e(date('d-m-Y', strtotime($value->created_at))); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <?php else: ?>
                    <p style="text-align: center; font-size: 18px; font-weight: bold;">Bạn chưa có sản phẩm trong giỏ hàng.</p>
                    <?php endif; ?>

                    <div class="pull-right">
                        <a href="/" class="primary-btn" style="cursor: pointer;">Tiếp tục mua hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
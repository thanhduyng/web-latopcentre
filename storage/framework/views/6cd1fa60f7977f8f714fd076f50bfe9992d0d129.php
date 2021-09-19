<?php $__env->startSection('title'); ?>
Tin Tức
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layout.navigation2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="trang-chu">Trang chủ</a></li>
            <li class="active">Tin tức</li>
        </ul>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12">
                <div class="order-summary clearfix">
                    <div class="section-title">
                        <h4 class="title">Danh mục tin tức</h4>
                    </div>
                    <div class="news-container">
                        <ul class="news-ul">
                            <?php $__currentLoopData = $categoryNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryNew): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="tin-tuc/danh-muc/<?php echo e($categoryNew->id); ?>"><?php echo e($categoryNew->name); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <div class="cell-bg">
                            <a href="#"> <img src="../img/new-bg.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-xs-12">
                <div class="order-summary clearfix">
                    <div class="section-title">
                        <h4 style="margin-top: 12px;" class="title"></h4>
                    </div>

                    <div class="news-container-second">
                        <?php $__currentLoopData = $new; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row">
                            <div class="col-md-4 col-sm-5 col-xs-12 new-col-img">
                                <a href="tin-tuc/chi-tiet/<?php echo e($value->id); ?>"> <img src="../upload/new/<?php echo e($value->image); ?>" alt=""></a>
                            </div>
                            <div class="col-md-8 col-sm-7 col-xs-12 new-col-p">
                                <a href="tin-tuc/chi-tiet/<?php echo e($value->id); ?>">
                                    <h3><?php echo e($value->title); ?></h3>
                                </a>
                                <div class="new-widt">
                                    <p class="knswli-right"><?php echo e($value->info); ?></p>
                                    <span>Đăng ngày</a> - <span><?php echo e(date('d-m-Y',strtotime($value->created_at))); ?></span> 
                                        <p class="next-p"><a href="tin-tuc/chi-tiet/<?php echo e($value->id); ?>">Xem tiếp >></a></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
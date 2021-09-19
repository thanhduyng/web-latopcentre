<?php $__env->startSection('title'); ?>
Tin Tức
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layout.navigation2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="trang-chu">Trang chủ</a></li>
            <li><a href="tin-tuc">Tin tức</a></li>
            <li class="active">Chi tiết tin tức</li>
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
                            <a href="#"> <img src="../img/new-bgg.png" alt=""></a>
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
                        <h3><?php echo e($detailNew[0]->title); ?></h3>
                        <p style="float: left; text-transform: uppercase; font-style: italic; font-weight: bold;color:#cd1818;padding-right: 10px;">Thanh Duy</p>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i> 
                            <?php echo e(date('d-m-Y',strtotime($detailNew[0]->created_at))); ?>

                        </p>
                        <h4><?php echo e($detailNew[0]->info); ?></h4>
                        <?php echo $detailNew[0]->content; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
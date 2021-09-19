<?php $__env->startSection('title'); ?>Chi-tiet-san-pham <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layout.navigation2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="view-product-detail">
        <form action="<?php echo e(route('add-to-cart',$product->id)); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <div class="container"><br><br>
            <h3><?php echo e($product->name); ?></h3>
            <hr>
            <div class="row">
                    <div class="col-md-4 text-center">
                        <div class="ava">
                            <img width="300px" src="../upload/product/<?php echo e($product->imageProduct[0]['name']); ?>" alt="" height="auto">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div>
                            Giá: <strong> <?php echo e(number_format ($product->unit_price,0,'',',')); ?>₫</strong>
                            <div class="props">
                            Mô tả: <a style="color: #666;"><?php echo e($product->description); ?></a>
                            </div>
                        </div>
                        <div class="promotion">
                            <span class="plabel"><i></i>Khuyến mãi</span>
                            <div>
                                <span class="promo" data-id="548904">
                                    <i class="numeric">1</i>
                                    Mua kèm Office 365 Personal ưu đãi giảm
                                    <b>number_format 0₫</b>
                                </span>
                                <span class="promo" data-id="548904">
                                    <i class="numeric">2</i> Balo Laptop HP-Compaq
                                    <small style="color: #666">(Hết quà hoàn tiền 100.000₫)</small>
                                </span>
                            </div>
                            <aside>
                                <p>Quà khuyến mãi(1 hình)</p>
                                <img src="https://cdn.tgdd.vn/Products/Images/2102/73874/balo-acer-khuyen-mai-200x200.jpg" width="50" height="50">
                            </aside>
                            </span>
                            <span>Tặng Balo Acer và <b>1 K.mãi</b> khác</span>
                        </div><br>
                        <div class="qty"><span class="qty">Số lượng</span>
                            <select name="qty">
                                <?php for($i=1;$i<=10;$i++): ?>
                                    <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                                <?php endfor; ?>;
                            </select>
                        </div><br>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-cart-plus"></i> Mua hàng</button>
                        <hr>
                        <div class="callorder">
                            <span>Gọi đặt mua:
                                <i class="fas fa-phone-alt"></i>
                                <a href="tel:18001061">1800.1061</a> (7:30-22:00)
                            </span>
                        </div>
                    </div>



                    <!--  -->
                    <div class="col-md-3">
                        <div class="checkstockbox">
                            <a href="#">
                                <i class="fas fa-map-marker-alt"></i>
                                Đặt giữ hàng tại siêu thị
                            </a>
                        </div>
                        <div class="policy_intuitive">
                            <div class="for-mobile">
                                <h4>Mua như vua - chăm sóc như vip</h4>
                                <ul class="policy_new">
                                    <li>
                                        <span>
                                            <i class="fas fa-ambulance"></i>
                                        </span>
                                        <p>Lỗi là đổi mới trong <b>1 tháng</b> tại 2017 siêu thị toàn quốc.

                                        </p>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fas fa-mobile"></i>
                                        </span>
                                        <p>Đổi trả và bảo hành cực dễ <b>chỉ cần số điện thoại</b>
                                        </p>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fas fa-shield-alt"></i>
                                        </span>
                                        <p>Bảo hành <b>chính hãng thân máy 1 năm</b>
                                        </p>
                                    </li>
                                </ul>
                                <ul class="policy">
                                    <li>
                                        <span>
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <p>Trong hộp có:
                                            <a href="#" data-modal="">
                                                <b>Sách hướng dẫn, Thùng máy, Adapter sạc</b>
                                            </a>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | <?php echo $__env->yieldContent('title'); ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <base href="<?php echo e(asset('')); ?>">
    <link rel="shortcut icon" href="/img/thanh.png" type="image/x-icon">
    <link rel="stylesheet" href="../admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../admin_asset/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../admin_asset/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../admin_asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="../admin_asset/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../admin_asset/dist/css/skins/skin-blue.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <?php echo $__env->yieldContent('style'); ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php echo $__env->make('admin.layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('admin.layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>
    <script src="../admin_asset/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../admin_asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../admin_asset/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../admin_asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../admin_asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../admin_asset/bower_components/fastclick/lib/fastclick.js"></script>
    <script src="../admin_asset/dist/js/adminlte.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.1/socket.io.js"></script>
    <script src="../js/master.js"></script>
    <?php echo $__env->yieldContent('script'); ?>
</body>

</html>
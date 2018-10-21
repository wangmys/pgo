
<?php $__env->startSection('title', '系统信息'); ?>
<?php $__env->startSection('content'); ?>
    后台首页
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
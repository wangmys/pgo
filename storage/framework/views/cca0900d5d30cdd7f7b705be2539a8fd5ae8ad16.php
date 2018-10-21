<?php $__env->startSection('title',$title); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="widget">
                <div class="widget-header bordered-bottom bordered-blue">
                    <span class="widget-caption"><?php echo e($title2); ?></span>
                </div>

                <div class="widget-body">
                    <?php if(count($errors) >0): ?>
                        <div class="alert alert-danger fade in">
                            <button class="close" data-dismiss="alert">
                                ×
                            </button>
                            <i class="fa-fw fa fa-warning"></i>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;错误：</strong> <?php echo e($error); ?></p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>

                    <div id="horizontal-form">
                        <form class="form-horizontal" role="form" action="<?php echo e(url('/admin/goods_type/'.$res->id)); ?>" method="post" >
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('PUT')); ?>

                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">商品类型名称</label>
                                <div class="col-sm-4">
                                    <input class="form-control" id="username" placeholder="请填写商品类型的名称" name="type_name" required="" value="<?php echo e($res->type_name); ?>" type="text">
                                </div>
                                <p class="help-block col-sm-4 red">* 必填</p>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">确认修改</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        $('.alert-danger').delay(3000).fadeOut(2000);
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
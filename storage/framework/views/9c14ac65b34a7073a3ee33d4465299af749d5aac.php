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
                        <form class="form-horizontal" role="form" action="<?php echo e(url('/admin/notice_cate/'.$res->id)); ?>" method="post" >
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('PUT')); ?>

                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">所属栏目</label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="cid" data-bv-field="country" disabled>
                                        <option value="0">作为一级栏目</option>
                                        <?php $__currentLoopData = $select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($v->id == $res->cid): ?>
                                            <option value="<?php echo e($v->id); ?>" selected><?php echo e($v->cate_name); ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">栏目名称</label>
                                <div class="col-sm-4">
                                    <input class="form-control" id="username" placeholder="请输出栏目的名称" name="cate_name" required="" type="text" value="<?php echo e($res->cate_name); ?>">
                                </div>
                                <p class="help-block col-sm-4 red">* 必填</p>
                            </div>

                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">栏目位置</label>
                                <div class="col-sm-6" style="margin-top: 5px">
                                    <label>
                                        <input name="status" type="radio" <?php if($res->status == 1): ?>  checked="checked" <?php endif; ?> value="1">
                                        <span class="text">网站顶部</span>
                                    </label>
                                    <label>
                                        <input name="status" type="radio" <?php if($res->status == 0): ?>  checked="checked" <?php endif; ?> value="0">
                                        <span class="text">网站底部</span>
                                    </label>
                                </div>
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
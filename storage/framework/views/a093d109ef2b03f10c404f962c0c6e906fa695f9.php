<?php $__env->startSection('title', '导航管理'); ?>
<?php $__env->startSection('url', url('admin/nav')); ?>
<?php $__env->startSection('title2', '添加导航'); ?>
<?php $__env->startSection('content'); ?>
<div class="page-body">         
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="widget">
                <div class="widget-header bordered-bottom bordered-blue">
                    <span class="widget-caption"><?php echo $__env->yieldContent('title2'); ?></span>
                </div>
                <div class="widget-body">
                    <div id="horizontal-form">
                        <form class="form-horizontal" role="form" action="<?php echo e(url('admin/nav')); ?>" method="post">
                        	<?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">导航名称</label>
                                <div class="col-sm-6">
                                    <input class="form-control" placeholder="" name="name" required="" type="text">
                                </div>
                                <p class="help-block col-sm-4 red">* 必填</p>
                            </div>
                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">导航网址</label>
                                <div class="col-sm-6">
                                    <input class="form-control" placeholder="" name="url" type="text" required="">
                                </div>
                                <p class="help-block col-sm-4 red">* 必填</p>
                            </div>
                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label no-padding-right">导航状态</label>
                                <div class="col-sm-6">
                                    <div class="radio" style="float:left; padding-right:10px;">
                                        <label>
                                            <input name="new_blank" value="1" class="colored-blue" checked="checked" type="radio">
                                            <span class="text">新页面</span>
                                        </label>
                                    </div>
                                    <div class="radio" style="float:left;">
                                        <label>
                                            <input name="new_blank" value="2" class="colored-blue" type="radio">
                                            <span class="text">原页面</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">添加导航</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('url', url('admin/goods_brand')); ?>
<?php $__env->startSection('title2', '修改品牌'); ?>
<?php $__env->startSection('content'); ?>
	<div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">修改品牌</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="<?php echo e(url('admin/nav/' . $data->id)); ?>" method="post" enctype="multipart/form-data">
                    	<?php echo e(csrf_field()); ?>

                    	<?php echo e(method_field('PUT')); ?>

                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">导航名称</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="name" value="<?php echo e($data->name); ?>" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">导航网址</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="url" value="<?php echo e($data->url); ?>" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">导航状态</label>
                            <div class="col-sm-6">
                                <div class="radio" style="float:left; padding-right:10px;">
                                    <label>
                                        <input name="new_blank" <?php if($data->new_blank == 1): ?> checked <?php endif; ?> value="1" class="colored-blue" checked="checked" type="radio">
                                        <span class="text">新页面</span>
                                    </label>
                                </div>
                                <div class="radio" style="float:left;">
                                    <label>
                                        <input name="new_blank" value="2" <?php if($data->new_blank == 2): ?> checked <?php endif; ?> class="colored-blue" type="radio">
                                        <span class="text">原页面</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">保存信息</button>
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
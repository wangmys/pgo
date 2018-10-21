<?php $__env->startSection('title', '后台管理员'); ?>
<?php $__env->startSection('title2', '管理员修改'); ?>
<?php $__env->startSection('url', url('admin/admin')); ?>
<?php $__env->startSection('content'); ?>
<div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">修改管理员</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="<?php echo e(url('admin/admin/' . $admin->id)); ?>" method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <?php echo e(method_field('PUT')); ?>

                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">所属用户组</label>
                            <div class="col-sm-6">
                                <select name="group_id" class="form-control">
                                    <option value="">请选择</option>
                                    <option <?php if($admin->group_id == 1): ?> selected <?php endif; ?> value="1">超级管理员</option>
                                    <option <?php if($admin->group_id == 4): ?> selected <?php endif; ?> value="4">栏目管理员</option>
                                    <option <?php if($admin->group_id == 0): ?> selected <?php endif; ?> value="0">系统管理员</option>
                                </select>
                            </div>
                            <p class="help-block col-sm-4 red">* 必选</p>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">管理员名</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="name" value="<?php echo e($admin->name); ?>" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">用户头像</label>
                            <div class="col-sm-6">
                                <input name="img" type="file" style="float:left;width:220px;">
                                <img height="50" src="<?php echo e(asset(u(ADMIN_IMG) . $admin->img)); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">邮箱</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="email" value="<?php echo e($admin->name); ?>" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
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
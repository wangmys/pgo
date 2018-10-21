<?php $__env->startSection('title', '配置管理'); ?>
<?php $__env->startSection('title2', '修改配置'); ?>
<?php $__env->startSection('url', url('admin/conf')); ?>
<?php $__env->startSection('content'); ?>


                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">修改配置</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal" role="form" action="<?php echo e(url("admin/conf/$conf->id")); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('PUT')); ?>

                            <label for="username" class="col-sm-2 control-label no-padding-right">中文名称</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="cname" value="<?php echo e($conf->cname); ?>" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">英文名称</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="ename" value="<?php echo e($conf->ename); ?>" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">表单类型</label>
                            <div class="col-sm-6">
                                <select name="form_type">
                                    <option <?php if($conf->form_type == 1): ?> selected="selected" <?php endif; ?>  value="1">单行文本</option>
                                    <option <?php if($conf->form_type == 2): ?> selected="selected" <?php endif; ?>  value="2">单选项</option>
                                    <option <?php if($conf->form_type == 3): ?> selected="selected" <?php endif; ?>  value="3">多选项</option>
                                    <option <?php if($conf->form_type == 4): ?> selected="selected" <?php endif; ?>  value="4">下拉项</option>
                                    <option <?php if($conf->form_type == 5): ?> selected="selected" <?php endif; ?>  value="5">文本域</option>
                                    <option <?php if($conf->form_type == 6): ?> selected="selected" <?php endif; ?>  value="6">附件上传</option>
                                </select>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">配置类型</label>
                            <div class="col-sm-6">
                                <select name="conf_type">
                                    <option <?php if($conf->conf_type == 1): ?> selected="selected" <?php endif; ?>   value="1">店铺配置</option>
                                    <option <?php if($conf->conf_type == 2): ?> selected="selected" <?php endif; ?>   value="2">商品配置</option>
                                    <option <?php if($conf->conf_type == 3): ?> selected="selected" <?php endif; ?>   value="2">SEO配置</option>
                                </select>
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                         <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">可选值</label>
                            <div class="col-sm-6">
                                <textarea name="values" class="form-control"><?php echo e($conf->values); ?></textarea>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">默认值</label>
                            <div class="col-sm-6">
                                <input name="value" class="form-control" value="<?php echo e($conf->value); ?>" placeholder="" type="text">
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
                <!-- /Page Body -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
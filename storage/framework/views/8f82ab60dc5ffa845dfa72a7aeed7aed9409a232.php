<?php $__env->startSection('title', '配置管理'); ?>
<?php $__env->startSection('content'); ?>
    <div class="page-body">
                        
        <button type="button" tooltip="添加配置" class="btn btn-primary btn-sm shiny" onClick="javascript:window.location.href = '<?php echo e(url('admin/conf/create')); ?>'"> <i class="fa fa-plus"></i> Add
        </button>
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <div class="widget-body">
                        <div class="flip-scroll">
                            <form method="post" action="">
                                <table class="table table-bordered table-hover">
                                    <thead class="">
                                        <tr>
                                            <th class="text-center" width="4%">ID</th>
                                            <th class="text-center" width="8%">英文名称</th>
                                            <th width="13%" class="text-center">中文名称</th>
                                            <th class="text-center" width="8%">表单类型</th>
                                            <th class="text-center" width="8%">配置类型</th>
                                            <th class="text-center" width="15%">默认值</th>
                                            <th class="text-center" width="20%">可选值</th>
                                            <th class="text-center" width="5%">排序</th>
                                            <th class="text-center" width="16%">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php echo e(csrf_field()); ?>

                                        <?php $__currentLoopData = $confs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td align="center"><?php echo e($conf->id); ?></td>
                                                <td align="center"><?php echo e($conf->ename); ?></td>
                                                <td align="center"><?php echo e(cut_str($conf->cname, 10)); ?></td>
                                                <td align="center">
                                                    <?php if($conf->form_type == 1): ?>
                                                        <font color="#00ffff">单行文本</font>
                                                    <?php elseif($conf->form_type == 2): ?>
                                                        <font color="#8b008b">单选项</font>
                                                    <?php elseif($conf->form_type == 3): ?>
                                                        <font color="#f0c">多选项</font>
                                                    <?php elseif($conf->form_type == 4): ?>
                                                        <font color="yellow">下拉项</font>
                                                    <?php elseif($conf->form_type == 5): ?>
                                                        <font color="#32cd32">文本域</font>
                                                    <?php else: ?>
                                                        <font color="#00ffff">附件上传</font>
                                                    <?php endif; ?>
                                                </td>
                                                <td align="center">
                                                    <?php if($conf->conf_type = 1): ?> 店铺配置 <?php elseif($conf->conf_type = 2): ?>商品配置 <?php else: ?> SEO设置 <?php endif; ?>
                                                </td>
                                                <td align="center">
                                                    <?php if($conf->form_type != 6): ?>
                                                        <?php echo e(cut_str($conf->value, 10)); ?>

                                                    <?php else: ?>
                                                        <img src="<?php echo e(asset(u(CONF_IMG) . $conf->value)); ?>" height="20">
                                                    <?php endif; ?>
                                                </td>
                                                <td align="center">
                                                    <?php if($conf->values): ?>
                                                        <font color="#6495ed"><?php echo e($conf->values); ?></font>
                                                    <?php else: ?>
                                                        <font color="#c71585">未设置</font>
                                                    <?php endif; ?>
                                                </td>
                                                <td align="center"><input type="text" style="width:60px; text-align:center;" name="sort[<?php echo e($conf->id); ?>]" value="<?php echo e($conf->sort); ?>" /></td>
                                                <td align="center">
                                                    <a href="<?php echo e(url("admin/conf/$conf->id/edit")); ?>" class="btn btn-primary btn-sm shiny">
                                                        <i class="fa fa-edit"></i> 编辑
                                                    </a>
                                                    <a href="#" onClick="del('<?php echo e($conf->id); ?>', '<?php echo e(url('admin/conf')); ?>', '这项配置')" class="btn btn-danger btn-sm shiny">
                                                        <i class="fa fa-trash-o"></i> 删除
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <tr><td colspan="9" align="right" style="padding-right:18.5%;"><input class="btn btn-primary btn-sm shiny" type="submit" value="提交" /></td></tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                        <div style="padding-top:10px; text-align:right;">
                            <?php echo e($confs->links()); ?>

                        </div>
                        <div>
                        	                </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title', '商品属性'); ?>
<?php $__env->startSection('url', url('admin/goods_attr')); ?>
    <button type="button" tooltip="添加商品属性" class="btn btn-primary btn-sm shiny" onclick="javascript:window.location.href = '<?php echo e(url('admin/goods_attr/create')); ?>'"> <i class="fa fa-plus"></i> Add
    </button>
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="widget">
                <div class="widget-body">
                    <div class="flip-scroll">
                        <table class="table table-bordered table-hover">
                            <thead class="">
                                <tr>
                                    <th class="text-center" width="8%">ID</th>
                                    <th class="text-center">属性名称</th>
                                    <th class="text-center">属性类型</th>
                                    <th class="text-center">所属类型</th>
                                    <th class="text-center">属性值</th>
                                    <th class="text-center" width="16%">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $goodsAttr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $goods_attr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td align="center"><?php echo e($goods_attr->id); ?></td>
                                    <td align="center"><?php echo e($goods_attr->attr_name); ?></td>
                                    <td align="center">
                                        <?php if($goods_attr->attr_type == 1): ?>
                                            <font color="aqua">单选</font>
                                        <?php else: ?>
                                            <font color="#7fff00">唯一</font>
                                        <?php endif; ?>
                                    </td>
                                    <td align="center">需改:<?php echo e($goods_attr->type_id); ?></td>
                                    <td align="center">
                                        <?php if($goods_attr->attr_type == 1): ?>
                                             <font color="#00bfff">
                                                <?php echo e(str_replace(',', '&nbsp;-&nbsp;', $goods_attr->attr_values)); ?>

                                            </font>
                                        <?php else: ?> 
                                            <font color="#00fa9a">唯一属性无属性值</font>
                                        <?php endif; ?>
                                    </td>
                                    <td align="center">
                                        <a href="<?php echo e(url("admin/goods_attr/$goods_attr->id/edit")); ?>" class="btn btn-primary btn-sm shiny">
                                            <i class="fa fa-edit"></i> 编辑
                                        </a>
                                        <a href="#" onclick="del('<?php echo e($goods_attr->id); ?>', '<?php echo e(url('admin/goods_attr')); ?>', '这个商品属性')" class="btn btn-danger btn-sm shiny">
                                            <i class="fa fa-trash-o"></i> 删除
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    
                            </tbody>
                        </table>
                    </div>
                    <div style="padding-top:10px; text-align:right;">
                        <?php echo e($goodsAttr->links()); ?>

                    </div>
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
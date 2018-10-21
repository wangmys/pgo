<?php $__env->startSection('title', '品牌管理'); ?>
<?php $__env->startSection('content'); ?>
<div class="page-body">
                    
<button type="button" tooltip="添加品牌" class="btn btn-sm btn-azure btn-addon" onclick="javascript:window.location.href = '<?php echo e(url('admin/goods_brand/create')); ?>'"> <i class="fa fa-plus"></i> Add
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
                                <th class="text-center">品牌名称</th>
                                <th>品牌地址</th>
                                <th class="text-center">品牌logo</th>
                                <th>品牌描述</th>
                                <th class="text-center" width="8%">品牌状态</th>
                                <th class="text-center" width="14%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td align="center"><?php echo e($v->id); ?></td>
                                    <td align="center"><?php echo e($v->brand_name); ?></td>
                                    <td>
                                        <?php echo e(cut_str($v->brand_url, 10)); ?>

                                        </a>
                                    </td>
                                    <td align="center">
                                    	<?php if($v->brand_logo): ?>
                                        	<img src="<?php echo e(url('/static/uploads/goods_brand/'.$v->brand_logo)); ?>" height="30">

                                    	<?php else: ?> 
                                    		暂无图片
                                		<?php endif; ?>
                                     </td>
                                    <td><?php echo e(cut_str($v->brand_desc, 20)); ?></td>
                                    <td align="center">
                                    	<?php if($v->status == 1): ?>
                                    		显示
                                		<?php else: ?>
                                			隐藏
                            			<?php endif; ?>
                                    </td>
                                    <td align="center">
                                        <a href="<?php echo e(url("admin/goods_brand/$v->id/edit")); ?>" class="btn btn-primary btn-sm shiny">
                                            <i class="fa fa-edit"></i> 编辑
                                        </a>
                                        <a href="#" onclick="del('<?php echo e($v->id); ?>', '<?php echo e(url('admin/goods_brand')); ?>', '这个商品品牌')" class="btn btn-danger btn-sm shiny">
                                            <i class="fa fa-trash-o"></i> 删除
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                           
                            </tbody>
                    </table>
                </div>
                <div style="padding-top:10px; text-align:right;">
                       <?php echo e($data->links()); ?>    
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
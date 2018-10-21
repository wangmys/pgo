<?php $__env->startSection('title', '导航管理'); ?>
<?php $__env->startSection('title2', '浏览导航'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-body">         
	<button type="button" tooltip="导航管理" class="btn btn-sm btn-azure btn-addon" onclick="javascript:window.location.href = '<?php echo e(url('admin/nav/create')); ?>'"> <i class="fa fa-plus"></i> Add
	</button>
	<div class="row">
	    <div class="col-lg-12 col-sm-12 col-xs-12">
	        <div class="widget">
	            <div class="widget-body">
	                <div class="flip-scroll">
	                    <table class="table table-bordered table-hover">
	                        <thead class="">
	                            <tr>
	                                <th class="text-center" width="10%">ID</th>
	                                <th class="text-center" width="20%">导航名称</th>
	                                <th width="40%">导航地址</th>
	                                <th class="text-center" width="10%">导航状态</th>
	                                <th class="text-center" width="20%">操作</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                        	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                                <tr>
	                                    <td align="center"><?php echo e($v->id); ?></td>
	                                    <td align="center"><?php echo e($v->name); ?></td>
	                                    <td><a href="<?php echo e($v->url); ?>" target="_blank"><?php echo e($v->url); ?></a></td>
	                                    <td align="center">
	                                    	<?php if($v->new_blank == '1'): ?>
	                                    		新页面
	                                		<?php else: ?>
	                                			原页面
	                            			<?php endif; ?>
	                                    </td>
	                                    <td align="center">
	                                        <a href="<?php echo e(url("admin/nav/$v->id/edit")); ?>" class="btn btn-primary btn-sm shiny">
	                                            <i class="fa fa-edit"></i> 编辑
	                                        </a>
	                                        <a href="#" onclick="del('<?php echo e($v->id); ?>', '<?php echo e(url('admin/nav')); ?>', '这个导航')" class="btn btn-danger btn-sm shiny">
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
<?php $__env->startSection('title', '轮播图管理'); ?>
<?php $__env->startSection('title2', '浏览轮播图'); ?>

<?php $__env->startSection('content'); ?>
<div class="page-body">
<form action="/admin/ad" method="get" style="padding: 0px;margin: 0px">         
		<button type="button" tooltip="导航管理" class="btn btn-azure btn-addon" onclick="javascript:window.location.href = '<?php echo e(url('admin/ad/create')); ?>';return false"> <i class="fa fa-plus"></i> Add
		</button>
		<div class="input-group" style="width: 250px;float: right;">
	        <input type="text" class="form-control" name="keyword" value="<?php echo e($req->keyword); ?>" placeholder="名称或标题">
	        <span class="input-group-btn">
	            <button class="btn btn-azure btn-addon" type="submit">搜索</button>
	        </span>
	    </div>
	</form>
	<div class="row">
	    <div class="col-lg-12 col-sm-12 col-xs-12">
	        <div class="widget">
	            <div class="widget-body">
	                <div class="flip-scroll">
	                    <table class="table table-bordered table-hover">
	                        <thead class="">
	                            <tr>
	                                <th class="text-center" width="10%">ID</th>
	                                <th class="text-center" width="10%">轮播图名称</th>
	                                <th width="15%">轮播图</th>
	                                <th class="text-center" width="30%">链接地址</th>
	                                <th class="text-center" width="10%">标题</th>
	                                <th class="text-center" width="10%">排序</th>
	                                <th class="text-center" width="25%">操作</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                        	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                                <tr>
	                                    <td align="center"><?php echo e($v->id); ?></td>
	                                    <td align="center"><?php echo e($v->ad_name); ?></td>
	                                    <td align="center">
	                                    	<img src="<?php echo e(u(_AD_).$v->src); ?>" height="45px" />
	                                    </td>
	                                    <td align="center">
	                                    	<?php echo e($v->url); ?>

	                                    </td>
	                                    <td align="center">
	                                    	<?php echo e($v->title); ?>

	                                    </td>
	                                    <td align="center">
	                                    	<?php echo e($v->sort); ?>

	                                    </td>
	                                    <td align="center">
	                                        <a href="<?php echo e(url("admin/ad/$v->id/edit")); ?>" class="btn btn-primary btn-sm shiny">
	                                            <i class="fa fa-edit"></i> 编辑
	                                        </a>
	                                        <a href="#" onclick="del('<?php echo e($v->id); ?>', '<?php echo e(url('admin/ad')); ?>', '这个轮播图')" class="btn btn-danger btn-sm shiny">
	                                            <i class="fa fa-trash-o"></i> 删除
	                                        </a>
	                                    </td>
	                                </tr>
	                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                                                           
	                            </tbody>
	                    </table>
	                </div>
	                <div style="padding-top:10px; text-align:right;">
	                       <?php echo e($data->appends($req->all())->links()); ?>    
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
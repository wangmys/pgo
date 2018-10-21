<?php $__env->startSection('title', '管理员'); ?>
<?php $__env->startSection('content'); ?>
<style type="text/css">
    table tr,td{
        line-height: 55px;
    }
</style>
<div class="page-body">
                    
<button type="button" tooltip="添加用户" class="btn btn-sm btn-azure btn-addon" onclick="javascript:window.location.href = '<?php echo e(url('admin/admin/create')); ?>'"> <i class="fa fa-plus"></i> Add
</button>
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
                    <table class="table table-bordered table-hover">
                        <thead class="">
                            <tr>
                                <th class="text-center" width="6%">ID</th>
                                <th class="text-center" width="6%">用户名</th>
                                <th class="text-center" width="8%">用户邮箱</th>
                                <th class="text-center" width="8%">注册时间</th>
                                <th class="text-center" width="8%">最后登录</th>
                                <th class="text-center" width="5%">激活状态</th>
                                <th class="text-center" width="5%">用户状态</th>
                                <th class="text-center" width="10%">用户设置</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td align="center"><?php echo e($v->uid); ?></td>
                                <td align="center"><?php echo e($v->uname); ?></td>
                                <td align="center" width="8%">
                                    <?php if($v->uemail): ?>
                                        <?php echo e($v->uemail); ?>

                                     <?php else: ?>
                                        <font color="#db7093">暂无邮箱</font>
                                     <?php endif; ?>
                                </td>
                                <td align="center" title="<?php echo e(date('Y-m-d H:i:s',$v->create_time)); ?>">
                                    <?php echo e(sw(date('Y-m-d H:i:s',$v->create_time))); ?>

                                </td>
                                <td class="text-center" title="<?php echo e(date('Y-m-d H:i:s',$v->last_time)); ?>">
                                         <?php if($v->last_time): ?>
                                            <?php echo e(sw(date('Y-m-d H:i:s',$v->last_time))); ?>

                                         <?php else: ?>
                                            <font color="#db7093">还未登录</font>
                                         <?php endif; ?>
                                </td>
                                <td align="center">
                                    <font color="#db7093"><?php if($v->activate == 1): ?> 已激活  <?php else: ?> 未激活 <?php endif; ?>
                                    </font>
                                </td>
                                <td align="center">
                                    <font color="#db7093"><?php if($v->status == 'up'): ?> 启用  <?php else: ?> 禁用 <?php endif; ?>
                                    </font>
                                </td>
                                <td align="center">
                                    <button onclick="status('<?php echo e($v->status); ?>','','<?php echo e(url("/admin/user/$v->uid")); ?>','PUT')" class="btn btn-primary btn-sm shiny" style="float:left">
                                        <i class="fa fa-rocket"></i> 手动激活
                                    </button>
                                    <button onclick="status('<?php echo e($v->status); ?>','<?php echo e($v->uid); ?>','<?php echo e(url("/admin/user")); ?>','POST')" class="btn <?php echo e(stas($v->status)); ?> btn-sm shiny">
                                         <?php if($v->status=='up'): ?> 
                                            <i class="fa  fa-ban"></i>禁用  
                                         <?php else: ?> 
                                            <i class="fa fa-check-circle-o"></i>启用
                                         <?php endif; ?>
                                    </button>
                                </td>
                            </tr>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                       
                                                       
                        </tbody>
                    </table>
                </div>
                <div style="margin-top:10px; text-align:right;">
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
<?php $__env->startSection('js'); ?>
<script type="text/javascript">
    function status(stas,id,url,method)
    {
        $.ajax({
            type : method,
            dateType : 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            url : url,
            data : {uid:id,status:stas},
            success : function(data){
                layer.msg(data.msg, {icon: 6,time:1000,offset:['200px','50%']});
                if(data.reload){
                    location.reload(true);
                }
            }
        });
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
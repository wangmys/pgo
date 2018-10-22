<?php $__env->startSection('title', '类别管理'); ?>
<?php $__env->startSection('content'); ?>
<style type="text/css">
</style>
<div class="widget-body">
    <div role="grid" id="editabledatatable_wrapper" class="dataTables_wrapper form-inline no-footer">
        <div class="dataTables_length" id="editabledatatable_length" style="margin: 0px;padding: 5px">
            <a id="editabledatatable_new" href="<?php echo e(url('admin/goods_cate/create')); ?>" class="btn btn-blue">
               <span class="glyphicon glyphicon-plus"></span>Add
            </a>
            <form action="/admin/goods_cate" style="float: right;" method="get" id="form1">
                <select id="cateChange" onchange="chengCate()" name="cate">
                    <option value="">顶级分类</option>
                    <?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($v->id); ?>"><?php echo e($v->cate_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </form>
        	<form action="/admin/goods_cate" style="float: right;" method="get">
            	<span class="input-icon inverted">
	                <input type="text" class="form-control input-sm" name="keyword" value="<?php echo e($req->keyword); ?>" placeholder="分类名称查询">
	                <i class="glyphicon glyphicon-search bg-blue"></i>
	                <button href="#" class="btn btn-default blue">搜索</button>
	            </span>
			</form>
        </div>
        <table class="table table-striped table-hover table-bordered dataTable no-footer"
        id="editabledatatable" aria-describedby="editabledatatable_info">
            <thead>
                <tr role="row">
                	<th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 100px;">
                   	ID
                    </th>
                    <th class="sorting_asc text-center" tabindex="0" aria-controls="editabledatatable"
                    rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                    Username
                    : activate to sort column ascending" style="width: 250px;">
                        类别名称
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 100px;">
                   	父级ID
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 180px;">
                   	路径
                    </th>
                    <th class="sorting text-center" tabindex="0" aria-controls="editabledatatable" rowspan="1"
                    colspan="1" aria-label="
                    Full Name
                    : activate to sort column ascending" style="width: 100px;">
                        显示在导航栏
                    </th>
                    <th class="sorting_disabled text-center" rowspan="1" colspan="1" aria-label="
                    " style="width: 200px;">
                   	操作 
                    </th>
                </tr>
            </thead>
            <tbody>
            	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            	<?php if($k%2==0): ?>
                <tr class="odd text-center">
                <?php else: ?>
                <tr class="even text-center">
                <?php endif; ?>
                	<td class="center">
                       <?php echo e($v->id); ?>

                    </td>
                    <td class="sorting_1 text-left">
                        <?php echo e($v->cate_name); ?>

                    </td>
                    <td class="center">
                        <?php echo e($v->pid); ?>

                    </td>
                    <td class="center">
                       
                       <?php echo e(rtrim($v->path, ',')); ?>

                    </td>
                    <td class="">
                         
                         <?php if($v->show=='1'): ?>
                        <i class="fa fa-check"></i>
                        <?php elseif($v->show=='0'): ?>
                        <i class="fa fa-times"></i>
                        <?php endif; ?>
                    </td>
                    <td class="">
                        <a href="/admin/goods_cate/<?php echo e($v->id); ?>/edit" class="btn btn-info btn-xs edit">
                            <i class="fa fa-edit">
                            </i>
                            修改
                        </a>
                        <button onclick="del(<?php echo e($v->id); ?>, '<?php echo e(url('admin/goods_cate')); ?>', '这个商品分类')" class="btn btn-danger btn-xs delete">
                            <i class="fa fa-trash-o">
                            </i>
                            删除
                        </button>
                        <a href="/admin/goods_cate/create?id=<?php echo e($v->id); ?>" class="btn btn-info btn-xs edit">
                            <i class="fa fa-edit">
                            </i>
                            添加子分类
                        </a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <style>
        	.pagination{
        		float: right;
        	}
        	.DTTTFooter{
        		padding:15px 20px 0px 0px;
        	}
        </style>
        <div class="row DTTTFooter">
            <?php echo e($data->links()); ?>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">
	function dele(obj,id){
	layer.confirm('确认删除该类别?', {icon: 3, title:'提示'}, function(index){
		$.ajax({
		headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
		type:'DELETE',
		url:'/admin/cate/'+id,
		data:{},
		success:function(data){
			if(data=='1'){
				if($(obj).parents('tr').remove()){
					layer.msg('删除成功!', {icon: 1,offset:'250px',time:1000});
				}
			}else if(data=='2'){
				 layer.msg('该分类下有子类不能删除!', {icon: 5,offset:'250px',time:1000});
			}else{
				layer.msg('删除失败!', {icon: 5,offset:'250px',time:1000});
			}
			console.log(data);
		},
		error:function(){
			layer.msg('删除失败!', {icon: 5});
		},
		async:true
	})
	  layer.close(index);
	});
}
function chengCate()
{   
    var cate=$('select[name=cates]').val();
    var form1=$('#form1');
    form1.action = "/admin/goods_cate";
    form1.submit();
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
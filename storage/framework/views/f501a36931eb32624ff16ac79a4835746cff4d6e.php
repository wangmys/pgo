<?php $__env->startSection('title',$title); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="widget">
                <div class="widget-header ">
                    <span class="widget-caption"><?php echo e($title2); ?></span>
                    <div class="widget-buttons">
                        <a href="#" data-toggle="maximize">
                            <i class="fa fa-expand"></i>
                        </a>
                        <a href="#" data-toggle="collapse">
                            <i class="fa fa-minus"></i>
                        </a>
                        <a href="#" data-toggle="dispose">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="widget-body">
                    <?php if(session('error')): ?>
                        <div class="alert alert-danger fade in">
                            <button class="close" data-dismiss="alert">
                                ×
                            </button>
                            <i class="fa-fw fa fa-warning"></i>
                            <p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;错误：</strong> <?php echo e(session('error')); ?></p>
                        </div>
                    <?php endif; ?>
                    <?php if(session('success')): ?>
                        <div class="alert alert-success fade in">
                            <button class="close" data-dismiss="alert">
                                ×
                            </button>
                            <i class="fa-fw fa fa-check"></i>
                            <strong>成功：</strong> <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>

                    <div role="grid" id="simpledatatable_wrapper" class="dataTables_wrapper form-inline no-footer">


                        <table class="table table-striped table-bordered table-hover dataTable no-footer" id="simpledatatable" aria-describedby="simpledatatable_info">
                            <thead>
                            <tr role="row" align="center">
                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 34px;  text-align: center;" >
                                    <div class="checker"><span class="">id<input type="checkbox" class="group-checkable" data-set="#flip .checkboxes"></span></div>
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="simpledatatable" rowspan="1"  colspan="1" aria-label="Username: activate to sort column ascending" style="width: 200px; text-align: center;">
                                    商品类型名称
                                </th>

                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Joined" style="width: 100px;  text-align: center;" >
                                    操作
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php $__currentLoopData = $res; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="odd" align="center">
                                    <td class=" ">
                                        <div class="checker"><span class=""><?php echo e($v->id); ?><input type="checkbox" class="checkboxes" value="1"></span></div>
                                    </td>
                                    <td class=" ">
                                        <?php echo e($v->type_name); ?>

                                    </td>

                                    <td >

                                        <a href="<?php echo e(url('/admin/goods_type/'.$v->id)); ?>" class="label label-success"><i class="fa  fa-list"></i> 属性列表</a>
                                        <a href="<?php echo e(url('/admin/goods_type/'.$v->id.'/edit')); ?>" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> 修改</a>
                                        <form action="<?php echo e(url('/admin/goods_type/'.$v->id)); ?>" method="post" style='display:inline'>
                                            <?php echo e(csrf_field()); ?>

                                            <?php echo e(method_field('DELETE')); ?>

                                            <button class="btn btn-danger btn-xs delete">
                                                <i class="fa fa-trash-o"></i>
                                                删除
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>

                        <div class="row DTTTFooter">
                            <div class="col-sm-6">
                                <div class="dataTables_info" id="simpledatatable_info" role="alert" aria-live="polite" aria-relevant="all">
                                    Showing <?php echo e($res->total()); ?> entries
                                </div>
                            </div>
                            <style>


                            </style>
                            <div class="col-sm-6 text-right">
                                <div class="dataTables_paginate paging_bootstrap" id="simpledatatable_paginate">
                                    <?php echo e($res->links()); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        $('.alert').delay(3000).fadeOut(2000);
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
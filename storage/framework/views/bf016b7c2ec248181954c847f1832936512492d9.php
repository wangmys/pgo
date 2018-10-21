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


                                <th class="sorting" tabindex="0" aria-controls="simpledatatable" rowspan="1"  colspan="1" aria-label="Username: activate to sort column ascending" style="width: 200px; text-align: center;">
                                    颜色
                                </th>

                                <th class="sorting" tabindex="0" aria-controls="simpledatatable" rowspan="1"  colspan="1" aria-label="Username: activate to sort column ascending" style="width: 200px; text-align: center;">
                                    尺码
                                </th>

                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Joined" style="width: 100px;  text-align: center;" >
                                    操作
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            
                                
                                    
                                        
                                    
                                    
                                        
                                    
                                    
                                        
                                            
                                        
                                            
                                        
                                    

                                    
                                        
                                    

                                    
                                        
                                    

                                    
                                        
                                        
                                            
                                            
                                            
                                                
                                                
                                            
                                        
                                    
                                
                            

                            </tbody>
                        </table>

                        <div class="row DTTTFooter">
                            <div class="col-sm-6">
                                <div class="dataTables_info" id="simpledatatable_info" role="alert" aria-live="polite" aria-relevant="all">

                                </div>
                            </div>
                            <style>


                            </style>
                            <div class="col-sm-6 text-right">
                                <div class="dataTables_paginate paging_bootstrap" id="simpledatatable_paginate">
                                    
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
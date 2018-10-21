<?php $__env->startSection('content'); ?>
    <link href="<?php echo e(asset(_HOME_ . '/css')); ?>/goodslist.css"  rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset(_HOME_ . '/css')); ?>/tuiguang.css"   rel="stylesheet" type="text/css" />
    <div id="glist">
        <ul id="gl" >
            <h2 style="font-size:15px;text-indent:10px;">精品推荐</h2>
            <?php $__currentLoopData = $res; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li style="border:dotted 1px orange;margin-top: 10px;">
                    <p style="text-align: center"><a href="<?php echo e(url('notice_content/'.$v->id)); ?>"><?php echo e($v->title); ?></a></p>
                    <p style="text-align: left">作者：<?php echo e($v->notice_name); ?></p>
                    <p>已有302人评价</p>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </ul>
        <div id="gr">
            <div id="gr_1">
                  
                    <h1>精品文章</h1>
            </div>
            <div id="gr_2">
                <sanp style="font-size: 12px">作者：<?php echo e($content->notice_name); ?></sanp>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <sanp style="font-size: 12px">email：<?php echo e($content->email); ?></sanp>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <sanp style="font-size: 22px;margin-left: 60px;"><?php echo e($content->title); ?></sanp>
                <sanp style="font-size: 13px"><a href="<?php echo e($content->notice_url); ?>">原文</a></sanp>
                <sanp style="font-size: 13px;float: right"><?php echo e(date('Y-m-d H:i:s',$content->create_time)); ?></sanp>
            </div>
            <div id="gr_3">
                <?php echo $content->content; ?>


            </div>

        </div>
        <div style="clear:both;"></div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        $('.ng-sort').attr('style','display: none;');
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
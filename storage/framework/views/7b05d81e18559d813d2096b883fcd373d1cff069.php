<?php $__env->startSection('content'); ?>
    <link href="<?php echo e(asset(_HOME_ . '/css')); ?>/goodslist.css"  rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset(_HOME_ . '/css')); ?>/tuiguang.css"   rel="stylesheet" type="text/css" />
    <div id="glist">
        <ul id="gl">
            <h3 style="font-size:15px;text-indent:10px;">热销商品</h3>
            <?php $__currentLoopData = $res; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <img class="tg-img" width="190" src="<?php echo e(url(asset(GOODS_IMG.'/'.$v->goods_img))); ?>" alt="">
                <div class="tg-name"><?php echo e($v->goods_name); ?></div>
                <div class="tg-price">¥<?php echo e($v->shop_price); ?></div>
                <div class="tg-pj">已有302人评价</div>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </ul>
        <div id="gr">
            <div id="gr_1">
                <span>销量</span><span>价格</span><span>评论数</span><span>上架时间</span>
            </div>
            <div id="gr_2" ></div>
            <ul id="gr_3">
                <?php $__currentLoopData = $goods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a href="<?php echo e(url('goodslist/'.$v->id)); ?>"><img src="<?php echo e(url(asset(GOODS_IMG.'/'.$v->goods_img))); ?>" alt=""></a>
                    <div class="p-price">¥<?php echo e($v->shop_price); ?></div>
                    <div class="p-name" ><?php echo e($v->goods_name); ?></div>
                    <div class="p-special">领券立减200！低至2499！纤薄机身，2K屏，双镜头，强劲芯片，你想要的快~</div>
                    <div class="p-pl">已有456人评价</div>
                    <div class="p-btn"><span>对比</span><span>关注</span><span>加入购物车</span></div>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>

        </div>
        <div style="clear:both;"></div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
        $('.ng-sort-list-box').attr('style','display: none;');
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
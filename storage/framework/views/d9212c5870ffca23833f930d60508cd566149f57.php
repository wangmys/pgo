<?php $__env->startSection('title',$title); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <div class="widget">
                <div class="widget-header bordered-bottom bordered-blue">
                    <span class="widget-caption"><?php echo e($title2); ?></span>
                </div>

                <div class="widget-body">
                    <?php if(count($errors) >0): ?>
                        <div class="alert alert-danger fade in">
                            <button class="close" data-dismiss="alert">
                                ×
                            </button>
                            <i class="fa-fw fa fa-warning"></i>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;错误：</strong> <?php echo e($error); ?></p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>

                    <div class="docs-example">
                        <ul class="nav nav-tabs tabs-flat">
                            <li class="active"><a href="#info-tab" data-toggle="tab">基本信息</a></li>
                            <li class=""><a href="#address-tab" data-toggle="tab">描述信息</a></li>
                        </ul>

                        <form id="accountForm" method="post" action="<?php echo e(url('admin/goods/'.$res->id)); ?>" class="form-horizontal bv-form" enctype="multipart/form-data" novalidate="novalidate">
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('PUT')); ?>

                            <div class="tab-content tabs-flat">
                                <div class="tab-pane active" id="info-tab">

                                    <div class="form-group has-feedback">
                                        <label class="col-lg-2 control-label">商品名称</label>
                                        <div class="col-lg-6">
                                            <input type="text"  class="form-control" name="goods_name" value="<?php echo e($res->goods_name); ?>" placeholder="请将标题控制在5-30位之间" required>
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>

                                    <div class="form-group has-feedback">
                                        <label class="col-lg-2 control-label">推荐位</label>
                                        <div class="col-lg-6">
                                            <div class="checkbox" style="margin-left:-18px;">
                                                <label>
                                                    <input type="checkbox" checked value="0" name="goods_tj[]" class="colored-blue" >
                                                    <span class="text">热卖商品</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" checked value="1" name="goods_tj[]" class="colored-blue" >
                                                    <span class="text">限时抢购</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" value="2" name="goods_tj[]" class="colored-blue" >
                                                    <span class="text">新品推荐</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" value="3" name="goods_tj[]" class="colored-blue" >
                                                    <span class="text">精品推送</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" value="4" name="goods_tj[]" class="colored-blue" >
                                                    <span class="text">首页商品</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">商品主图</label>
                                        <div class="col-sm-2" style="margin-top: 5px">
                                            <input name="goods_img" type="file" >
                                        </div>
                                        <div class="help-block col-sm-4 red" style=" height: 50px;margin-top: -13px">
                                            <img src="<?php echo e(url(asset(GOODS_IMG.'/'.$res->goods_img))); ?>" alt="" width="50px" style="margin-top:-2px;border: 1px skyblue solid;">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">商品相册</label>
                                        <div class="col-sm-2" style="margin-top: 5px">
                                            <input name="img[]" type="file" multiple="true">
                                        </div>
                                        <div class="help-block col-sm-4 red" style="height: 50px;margin-top: -13px">
                                            <?php $__currentLoopData = $photo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <img src="<?php echo e(url(asset(GOODS_IMG.'/'.$v->img))); ?>" alt="" width="50px" style="margin-top:-2px;border: 1px skyblue solid;">
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">上架</label>
                                        <div class="col-sm-6" style="margin-top: 5px">
                                            <label>
                                                <input name="goods_status" class="colored-blue" type="radio" <?php if($res->goods_status == '1'): ?> checked="checked" <?php endif; ?> value="1">
                                                <span class="text">是</span>
                                            </label>
                                            <label>
                                                <input name="goods_status" class="colored-blue" type="radio" <?php if($res->goods_status == '0'): ?> checked="checked" <?php endif; ?> value="0">
                                                <span class="text">否</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">所属类别</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="cate_id" data-bv-field="country">
                                                <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php if($v->pid == '0'): ?> disabled <?php endif; ?> value="<?php echo e($v->id); ?>" <?php if($res->cate_id == $v->id ): ?> selected <?php endif; ?> ><?php echo e($v->cate_name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">商品类型</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="type_id" data-bv-field="country">
                                                <?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($v->id); ?>"  <?php if($res->type_id == $v->id ): ?> selected <?php endif; ?>   ><?php echo e($v->type_name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">所属品牌</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="brand_id" data-bv-field="country">
                                                <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($v->id); ?>"  <?php if($res->brand_id == $v->id ): ?> selected <?php endif; ?>  ><?php echo e($v->brand_name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group has-feedback">
                                        <label class="col-lg-2 control-label">市场价</label>
                                        <div class="col-lg-3">
                                            <input type="text" class="form-control" name="markte_price" placeholder="例：￥:124.11(保留小数点后两位)" value="<?php echo e($res->markte_price); ?>" required>
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>

                                    <div class="form-group has-feedback">
                                        <label class="col-lg-2 control-label">本店价</label>
                                        <div class="col-lg-3">
                                            <input type="text" class="form-control" name="shop_price" placeholder="例：￥:124.11(保留小数点后两位)" value="<?php echo e($res->shop_price); ?>" required>

                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>

                                    <div class="form-group has-feedback">
                                        <label class="col-lg-2 control-label">商品重量</label>
                                        <div class="col-lg-3">
                                            <input type="text" class="form-control" name="goods_weight"  placeholder="例：1.15Kg(保留小数点后两位)" value="<?php echo e($res->goods_weight); ?>" required>

                                        </div>
                                        <div class="col-sm-1" style="margin-left: -28px">
                                            <select name="weight_unit">
                                                <option value="0" <?php if($res->weight_unit == '0'): ?> selected <?php endif; ?> >g</option>
                                                <option value="1" <?php if($res->weight_unit == '1'): ?> selected <?php endif; ?> >kg</option>
                                            </select>
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>

                                    <div class="form-group has-feedback">
                                        <label class="col-lg-2 control-label">商品库存</label>
                                        <div class="col-lg-3">
                                            <input type="text" class="form-control" name="goods_kc"  placeholder="例：100件(单位件)" value="<?php echo e($res->goods_kc); ?>" required>
                                        </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                    </div>


                                </div>
                                <div class="tab-pane " id="address-tab">
                                    <div class="form-group has-feedback">
                                        <div class="col-md-2">
                                            <script id="editor"  name="goods_desc" type="text/plain" style="width:1200px;height:480px;"> <?php echo $res->goods_desc; ?></script>
                                        </div>
                                    </div>
                                </div>



                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">确认添加</button>

                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
    var ue = UE.getEditor('editor');
    $('.alert-danger').delay(3000).fadeOut(2000);

    //多图片上传
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
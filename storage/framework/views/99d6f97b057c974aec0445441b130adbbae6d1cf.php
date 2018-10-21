<?php $__env->startSection('title', '系统配置'); ?>
<?php $__env->startSection('title2', '配置项'); ?>
<?php $__env->startSection('url', url('admin/conf')); ?>
<?php $__env->startSection('content'); ?>


            <!-- Page Body -->
            <div class="page-body">

                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <!-- 配置列表开始 -->
                            <div class="widget-body">
                                <div class="widget-main ">
                                    <div class="tabbable">
                                        <ul class="nav nav-tabs tabs-flat" id="myTab11">
                                            <li class="active">
                                                <a data-toggle="tab" href="#home11">
                                                    店铺配置
                                                </a>
                                            </li>
                                            <li class="">
                                                <a data-toggle="tab" href="#profile11">
                                                    商品配置
                                                </a>
                                            </li>
                                            <li class="">
                                                <a data-toggle="tab" href="#profile12">
                                                    SEO配置
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content tabs-flat">
                                            <div id="home11" class="tab-pane active">
                                                <div id="horizontal-form">
                                                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                                        <?php echo e(csrf_field()); ?>

                                                        <?php if(isset($conf_res['goods_conf'])): ?>
                                                            <?php $__currentLoopData = $conf_res['goods_conf']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <div class="form-group">
                                                                    <label for="username" class="col-sm-2 control-label no-padding-right"><?php echo e($conf->cname); ?></label>
                                                                    <div class="col-sm-6">
                                                                        <?php if($conf->form_type == '1'): ?>
                                                                                <!-- 单行文本 -->
                                                                        <input class="form-control" placeholder="" name="<?php echo e($conf->ename); ?>" value="<?php echo e($conf->value); ?>" type="text">
                                                                        <?php elseif($conf->form_type == '5'): ?>
                                                                                <!-- 文本域 -->
                                                                        <textarea name="<?php echo e($conf->ename); ?>" class="form-control"><?php echo e($conf->value); ?></textarea>
                                                                        <?php elseif($conf->form_type == '2'): ?>
                                                                                <!-- 单选-->
                                                                        <div class="radio">
                                                                            <?php if($conf->values): ?>
                                                                                <?php $arr = explode(',', $conf->values); ?>
                                                                                <?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k1 => $v1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                                                    <label>
                                                                                        <input <?php if($conf->value == $v1): ?> checked="checked" <?php endif; ?> name="<?php echo e($conf->ename); ?>" type="radio" class="colored-blue" value="<?php echo e($v1); ?>">
                                                                                        <span class="text"> <?php echo e($v1); ?></span>
                                                                                    </label>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                        <?php elseif($conf->form_type == '4'): ?>
                                                                                <!-- 下拉菜单 -->
                                                                        <select name="<?php echo e($conf->ename); ?>">
                                                                            <option value="">请选择</option>
                                                                            <?php if($conf->values): ?>
                                                                                <?php $arr = explode(',', $conf->values); ?>
                                                                                <?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k1=>$v1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                                                <option <?php if($conf->value == $v1): ?> selected <?php endif; ?> value="<?php echo e($v1); ?>"><?php echo e($v1); ?></option>

                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php endif; ?>
                                                                        </select>
                                                                        <?php elseif($conf->form_type == '3'): ?>
                                                                                <!-- 复选框 -->
                                                                        <div class="checkbox">
                                                                            <?php if($conf->values): ?>
                                                                                <?php
                                                                                $arr_values = explode(',', $conf->values);
                                                                                $arr_value  = explode(',', $conf->value);
                                                                                ?>

                                                                                <?php $__currentLoopData = $arr_values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k1 => $v1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <label>
                                                                                        <input <?php if(in_array($v1, $arr_value)): ?> checked <?php endif; ?> name="<?php echo e($conf->ename); ?>[]" type="checkbox" class="colored-blue" value="<?php echo e($v1); ?>">
                                                                                        <span class="text"> <?php echo e($v1); ?> </span>
                                                                                    </label>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                        <?php elseif($conf->form_type == '6'): ?>
                                                                            <!-- 文件上传 -->
                                                                            <input placeholder="" style="display:inline;" name="<?php echo e($conf->ename); ?>" type="file">
                                                                            <?php if($conf->value): ?>
                                                                                <img src="<?php echo e(asset(u(CONF_IMG) . $conf->value)); ?>" height="30">
                                                                            <?php else: ?>
                                                                                暂无缩略图
                                                                            <?php endif; ?>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php endif; ?>
                                                        <div class="form-group">
                                                            <div class="col-sm-offset-2 col-sm-10">
                                                                <button type="submit" class="btn btn-default">保存信息</button>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>

                                            <div id="profile11" class="tab-pane">
                                                <div class="form-horizontal">
                                                    <?php if($conf_res['shop_conf']): ?>
                                                        <?php $__currentLoopData = $conf_res['shop_conf']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $conf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="form-group">
                                                                <label for="username" class="col-sm-2 control-label no-padding-right"><?php echo e($conf->cname); ?></label>
                                                                <div class="col-sm-6">
                                                                    <?php if($conf->form_type == '1'): ?>
                                                                            <!-- 单行文本 -->
                                                                    <input class="form-control" placeholder="" name="<?php echo e($conf->ename); ?>" value="<?php echo e($conf->value); ?>" type="text">
                                                                    <?php elseif($conf->form_type == '5'): ?>
                                                                            <!-- 文本域 -->
                                                                    <textarea name="<?php echo e($conf->ename); ?>" class="form-control"><?php echo e($conf->value); ?></textarea>
                                                                    <?php elseif($conf['form_type']=='2'): ?>
                                                                            <!-- 单选-->
                                                                    <div class="radio">
                                                                        <?php if($conf->values): ?>
                                                                            <?php $arr = explode(',', $conf->values); ?>
                                                                            <?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k1 => $v1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                                                <label>
                                                                                    <input <?php if($conf->value == $v1): ?> checked <?php endif; ?> name="<?php echo e($conf->ename); ?>" type="radio" class="colored-blue" value="<?php echo e($v1); ?>">
                                                                                    <span class="text"> <?php echo e($v1); ?></span>
                                                                                </label>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                    <?php elseif($conf->form_type == '4'): ?>
                                                                            <!-- 下拉菜单 -->
                                                                    <select name="<?php echo e($conf->ename); ?>">
                                                                        <option value="">请选择</option>
                                                                        <?php if($conf->values): ?>
                                                                            <?php $arr = explode(',', $conf->values); ?>
                                                                            <?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k1=>$v1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                                                <option <?php if($conf->value == $v1): ?> selected <?php endif; ?> value="<?php echo e($v1); ?>"><?php echo e($v1); ?></option>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php endif; ?>
                                                                    </select>
                                                                    <?php elseif($conf->form_type == '3'): ?>
                                                                            <!-- 复选框 -->
                                                                    <div class="checkbox">
                                                                        <?php if($conf->values): ?>
                                                                            <?php
                                                                            $arr_values = explode(',', $conf->values);
                                                                            $arr_value  = explode(',', $conf->value);
                                                                            ?>
                                                                            <?php $__currentLoopData = $arr_values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k1 => $v1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                                                <label>
                                                                                    <input <?php if(in_array($v1, $arr_value)): ?> checked <?php endif; ?> name="<?php echo e($conf->ename); ?>[]" type="checkbox" class="colored-blue" value="<?php echo e($v1); ?>">
                                                                                    <span class="text"> <?php echo e($v1); ?></span>
                                                                                </label>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                    <?php elseif($conf->form_type == '6'): ?>
                                                                            <!-- 文件上传 -->
                                                                    <input placeholder="" name="<?php echo e($conf->ename); ?>" style="display:inline;" type="file">
                                                                    <?php if($conf->value): ?>
                                                                        <img src="<?php echo e(asset(u(CONF_IMG) . $conf->value)); ?>" height="30">
                                                                    <?php else: ?>
                                                                        暂无缩略图
                                                                    <?php endif; ?>
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="submit" class="btn btn-default">保存信息</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>



                                            <div id="profile12" class="tab-pane">
                                                <div class="form-horizontal">
                                                    <?php if(isset($conf_res['seo_conf'])): ?>
                                                        <?php $__currentLoopData = $conf_res['seo_conf']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $conf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="form-group">
                                                                <label for="username" class="col-sm-2 control-label no-padding-right"><?php echo e($conf->cname); ?></label>
                                                                <div class="col-sm-6">
                                                                    <?php if($conf->form_type == '1'): ?>
                                                                            <!-- 单行文本 -->
                                                                    <input class="form-control" placeholder="" name="<?php echo e($conf->ename); ?>" value="<?php echo e($conf->value); ?>" type="text">
                                                                    <?php elseif($conf->form_type == '5'): ?>
                                                                            <!-- 文本域 -->
                                                                    <textarea name="<?php echo e($conf->ename); ?>" class="form-control"><?php echo e($conf->value); ?></textarea>
                                                                    <?php elseif($conf['form_type']=='2'): ?>
                                                                            <!-- 单选-->
                                                                    <div class="radio">
                                                                        <?php if($conf->values): ?>
                                                                            <?php $arr = explode(',', $conf->values); ?>
                                                                            <?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k1 => $v1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                                                <label>
                                                                                    <input <?php if($conf->value == $v1): ?> checked <?php endif; ?> name="<?php echo e($conf->ename); ?>" type="radio" class="colored-blue" value="<?php echo e($v1); ?>">
                                                                                    <span class="text"> <?php echo e($v1); ?></span>
                                                                                </label>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                    <?php elseif($conf->form_type == '4'): ?>
                                                                            <!-- 下拉菜单 -->
                                                                    <select name="<?php echo e($conf->ename); ?>">
                                                                        <option value="">请选择</option>
                                                                        <?php if($conf->values): ?>
                                                                            <?php $arr = explode(',', $conf->values); ?>
                                                                            <?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k1=>$v1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                                                <option <?php if($conf->value == $v1): ?> selected <?php endif; ?> value="<?php echo e($v1); ?>"><?php echo e($v1); ?></option>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php endif; ?>
                                                                    </select>
                                                                    <?php elseif($conf->form_type == '3'): ?>
                                                                            <!-- 复选框 -->
                                                                    <div class="checkbox">
                                                                        <?php if($conf->values): ?>
                                                                            <?php
                                                                            $arr_values = explode(',', $conf->values);
                                                                            $arr_value  = explode(',', $conf->value);
                                                                            ?>
                                                                            <?php $__currentLoopData = $arr_values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k1 => $v1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                                                <label>
                                                                                    <input <?php if(in_array($v1, $arr_value)): ?>checked <?php endif; ?> name="<?php echo e($conf->ename); ?>[]" type="checkbox" class="colored-blue" value="<?php echo e($v1); ?>">
                                                                                    <span class="text"> <?php echo e($v1); ?></span>
                                                                                </label>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                    <?php elseif($conf->form_type == '6'): ?>
                                                                            <!-- 文件上传 -->
                                                                    <input placeholder="" name="<?php echo e($conf->ename); ?>" type="file">
                                                                    <?php if($conf->value): ?>
                                                                        <img src="<?php echo e(asset(u(CONF_IMG) . $conf->value)); ?>" height="30">
                                                                    <?php else: ?>
                                                                        暂无缩略图
                                                                    <?php endif; ?>
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="submit" class="btn btn-default">保存信息</button>
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /Page Body -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
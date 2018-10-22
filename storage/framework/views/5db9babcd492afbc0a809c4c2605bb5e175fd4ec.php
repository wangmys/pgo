
<?php $__env->startSection('title','后台首页'); ?>
<?php $__env->startSection('css'); ?>
<link id="beyond-link" href="<?php echo e(_ADMIN_); ?>/css/common.css" rel="stylesheet" />
<link id="beyond-link" href="<?php echo e(_ADMIN_); ?>/css/main.css" rel="stylesheet" />
<style>
	.xiao li{
		list-style: none;
		line-height: 22px !important;
	}

	.xiao{
		list-style: none;
		line-height: 20px !important;
	}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div>
	<center>
		<br>
		<div><img src="<?php echo e(_ADMIN_); ?>/img/1800ico.png"></div>
	</center>
</div>
<div class="result-wrapp">
	<div class="result-title">
		<?php
		$rs =DB::table('admin')->where('id',session('id'))->first();
		?>
		
		<div class="result-title">
		<h4><b>☑&nbsp;登录信息：</b></h4>
	</div>
	
		<div class="sys-info-list xiao" style="color:skyblue;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;管理员&nbsp;<b><?php echo e($rs->name); ?></b>，你好！欢迎登录pgo商城管理后台！</div>
	    
	</div>
	
</div>

<div class="result-wrapp">
            <div class="result-title">
                <h4><b>☑&nbsp;系统基本信息：</b></h4>
            </div>
            <div class="result-content">
                <ul class="sys-info-list xiao">
                	<li >
                        <label class="res-lab">4人团队-版本</label><span class="res-info">Only-1.0</span>
                    </li>
					<li>
                        <label class="res-lab">北京时间</label><span class="res-info"><?php echo e(date('Y-m-d H:i:s',time())); ?></span>
                    </li>
                    <li>
                        <label class="res-lab">操作系统</label><span class="res-info"><?php echo e(PHP_OS); ?></span>
                    </li>
                    <li>
                        <label class="res-lab">服务器端口</label><span class="res-info"><?php echo e($_SERVER['SERVER_PORT']); ?></span>
                    </li>
                    <li>
                        <label class="res-lab">PHP程式版本</label><span class="res-info"><?php echo e(PHP_VERSION); ?></span>
                    </li>
                    <li>
                        <label class="res-lab">上传附件限制</label><span class="res-info">2M</span>
                    </li>
                    <li>
                        <label class="res-lab">通信协议的名称和版本</label><span class="res-info"><?php echo e($_SERVER['SERVER_PROTOCOL']); ?></span>
                    </li>
                    <li>
                        <label class="res-lab">PHP运行方式</label><span class="res-info">apache</span>
                    </li>
                    <li>
                        <label class="res-lab">服务器域名/IP</label><span class="res-info">
                        <?php echo e($_SERVER['SERVER_ADDR']); ?></span>
                    </li>
                    <li>
                        <label class="res-lab">客户端/IP</label><span class="res-info">
                        <?php echo e($_SERVER['REMOTE_ADDR']); ?></span>
                    </li>
                    <li>
                        <label class="res-lab">服务器主机名</label><span class="res-info">
                        <?php echo e($_SERVER['SERVER_NAME']); ?></span>
                    </li>
                    <li>
                        <label class="res-lab">请求来源</label><span class="res-info">
                        <?php echo e($_SERVER['HTTP_REFERER']); ?></span>
                    </li>
                    <li>
                        <label class="res-lab">服务器端信息</label><span class="res-info"><?php echo e($_SERVER['SERVER_SOFTWARE']); ?></span>
                    </li>
                    <li>
                        <label class="res-lab">服务器根目录</label><span class="res-info"><?php echo e($_SERVER['DOCUMENT_ROOT']); ?></span>
                    </li>
                </ul>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
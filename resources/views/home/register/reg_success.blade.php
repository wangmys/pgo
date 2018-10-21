<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <title>注册成功</title> 
  <link rel="shortcut icon" href="{{_HOME_}}/images/favicon.ico" type="image/x-icon" /> 
  <!-- 引入全站公用资源文件 --> 
  <link rel="stylesheet" href="{{_HOME_}}/css/reg.css" /> 
  <script type="text/javascript" src="{{ _HOME_ }}/js/jquery.js"></script> 
  <script type="text/javascript" src="{{ _HOME_ }}/js/sn_lazyload.js"></script> 
  <script type="text/javascript" src="{{ _HOME_ }}/js/lazyelem.min.js"></script> 
  <script type="text/javascript" src="{{ _HOME_ }}/js/SFE.base.min.js"></script> 
  <script type="text/javascript" src="{{ _HOME_ }}/js/search.min.js"></script> 
  <script type="text/javascript" src="{{ _HOME_ }}/js/sn-sidebar.min.js"></script> 
  <script type="text/javascript" src="{{ _HOME_ }}/js/chatCompat_mini.js"></script> 
 </head> 
 <body> 
  <input type="hidden" id="baseUrl" value="" /> 
  <script type="text/javascript">
        //全局变量
        var sn = sn || {
            "context": "/emall",
            "domain": "www.suning.com",
            "storeId": "10052",
            "catalogId": "10051",
            "memberDomain": "member.suning.com",
            "sslDomain": "ssl.suning.com",
            "imgssl": "imgssl.suning.com",
            "online": "online.suning.com",
            "cookieDomain": ".suning.com",
            "categoryId": "0",
            "searchDomain": "http://search.suning.com/emall/"
        };

//跳转到passport登录
/*
*url 登录成功后跳转 目标 URL
*logonType  passport 的登录皮肤  
*  b2c 主站      默认值
*  sop 苏宁云商
*/

function logonUrl(url,logonType,userVal){
   if(url == "" || typeof(url) == "undefined"){
     url = "http://www.sucaihuo.com";
   }
   if(logonType == "" || typeof(logonType) == "undefined"){
     logonType = "b2c";
   }
 var targetUrl = encodeURIComponent(url);
 var logonurl = "https://passport.suning.com/ids/login?service="
			 + encodeURIComponent("https://reg.suning.com/auth?targetUrl="+ targetUrl)
			 + "&method=GET&loginTheme="+logonType;
  if("" !=userVal && "undefined" != typeof(userVal) ){
     logonurl = logonurl+"&username="+userVal;
  }
 hrefLink(logonurl);
}

function hrefLink(e) {
		if (navigator.userAgent.indexOf("Firefox") > 0) {
			window.location = e
		} else {
			var f = document.createElement("a");
			f.href = e;
			document.body.appendChild(f);
			if (/msie/i.test(navigator.userAgent.toLowerCase())) {
				f.click()
			} else {
				var d = document.createEvent("MouseEvent");
				d.initEvent("click", false, false);
				f.dispatchEvent(d)
			}
		}
	};
</script> 
  <!-- 引入项目资源文件 --> 
  <link rel="stylesheet" type="text/css" href="{{_HOME_}}/css/snAccount_v2-min.css" /> 
  <link rel="stylesheet" type="text/css" href="{{_HOME_}}/css/style-min.css" /> 
  <script type="text/javascript" src="{{ _HOME_ }}/js/porto.js"></script> 
  <!-- topbar [[ --> 
  <!-- 非普通消费者页头 --> 
  <!-- 普通消费者和默认的页头 --> 
  <div id="_TOP_BANNER_" class="ng-top-banner"></div> 
  <div class="ng-toolbar"> 
   <div class="ng-toolbar-con wrapper"> 
    <div class="ng-toolbar-left"> 
     <a href="index.html" class="ng-bar-node ng-bar-node-backhome" id="ng-bar-node-backhome" name="public0_none_dbgjt_fhyisy01"> <i class="ng-iconfont ng-backhome"></i><span>返回易购首页</span> <i class="ng-line ng-iconfont ml10"></i> </a> 
     <script type="text/javascript">
				if (!sn.isHome){document.getElementById('ng-bar-node-backhome').style.display = "block";};
			</script> 
     <!--网站导航 [[--> 
     <div class="ng-bar-node-box ng-site-nav-box"> 
      <a href="javascript:void(0);" class="ng-bar-node ng-bar-node-site" name="public0_none_dbgjt_wzdh03"> <span>网站导航</span><em class="ng-iconfont down"></em> </a> 
      <div class="ng-sn-site-nav ng-d-box site-nav-child" style="display:none;"> 
       <dl class="sn-site-list lnb"> 
        <dt>
          特色购物 
        </dt> 
        <dd> 
         <p><a name="public0_none_dbgjt_wzdh030101" href="http://10035.suning.com/" target="_blank">苏宁互联</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030102" href="http://store.suning.com/v.htm" target="_blank">苏宁V购</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030103" href="http://ka.suning.com/" target="_blank">苏宁卡</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030104" href="http://g.suning.com/" target="_blank">海外购</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030105" href="http://b.suning.com/" target="_blank">政企采购</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030106" href="coupon.html" target="_blank">大聚惠</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030107" href="http://try.suning.com/" target="_blank">0元试用</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030108" href="http://tv.suning.com/" target="_blank">视频购物</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030111" href="http://sale.suning.com/images/advertise/mdr/oabangong526/index.html" target="_blank">办公直通车</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030112" href="http://pai.suning.com/shanpai/" target="_blank">闪拍</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030113" href="http://yushou.suning.com" target="_blank">预售</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030114" href="http://new.suning.com" target="_blank">新发现</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030115" href="http://2.suning.com" target="_blank">二手优品</a></p> 
        </dd> 
       </dl> 
       <dl class="sn-site-list"> 
        <dt>
          主题频道 
        </dt> 
        <dd> 
         <p><a name="public0_none_dbgjt_wzdh030201" href="http://channel.suning.com/dianqicheng.html" target="_blank">电器城</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030202" href="supermarket.html" target="_blank">苏宁超市</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030203" href="http://shouji.suning.com/" target="_blank">手机</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030204" href="http://sports.suning.com/" target="_blank">运动馆</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030205" href="http://book.suning.com/" target="_blank">图书</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030207" href="child.html?/" target="_blank">红孩子母婴</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030208" href="http://binggo.suning.com/" target="_blank">美妆个护</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030209" href="http://pindao.suning.com/city/diannao.htm" target="_blank">电脑</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030210" href="clothes.html" target="_blank">服装城</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030213" href="http://smarthome.suning.com/" target="_blank">智能生活</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030214" href="http://pindao.suning.com/city/jiazhuang.htm" target="_blank">家装馆</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030215" href="http://pindao.suning.com/city/qiche.htm" target="_blank">汽车用品</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030216" href="http://re.suning.com/?utm_source=daohang" target="_blank">苏宁热卖</a></p> 
        </dd> 
       </dl> 
       <dl class="sn-site-list"> 
        <dt>
          生活助手 
        </dt> 
        <dd> 
         <p><a name="public0_none_dbgjt_wzdh030301" href="https://passport.suning.com/ids/trustLogin?sysCode=epp&amp;targetUrl=https://licai.suning.com/bof/bofIndex.htm" target="_blank">零钱宝<i class="hot"></i></a></p> 
         <p><a name="public0_none_dbgjt_wzdh030302" href="http://chong.suning.com/eppscrp/mobile/fill.htm" target="_blank">手机充值</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030303" href="http://huochepiao.suning.com/" target="_blank">火车票</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030304" href="http://sh.suning.com/life/at/memtrans!input.action" target="_blank">转账还款</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030305" href="http://assss.suning.com/assss-web/pc/helper/appointmentStep1.do" target="_blank">约服务</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030306" href="http://sh.suning.com/life/2-1.html" target="_blank">水电煤</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030307" href="http://baoxian.suning.com/ins/index.htm" target="_blank">保险</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030308" href="http://caipiao.suning.com/" target="_blank">彩票</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030309" href="http://jipiao.suning.com/" target="_blank">机票</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030509" href="http://store.suning.com/" target="_blank">门店查询</a></p> 
        </dd> 
       </dl> 
       <dl class="sn-site-list"> 
        <dt>
          会员服务 
        </dt> 
        <dd> 
         <p><a name="public0_none_dbgjt_wzdh030401" href="http://vip.suning.com" target="_blank">会员联盟<i class="hot"></i></a></p> 
         <p><a name="public0_none_dbgjt_wzdh030402" href="http://club.suning.com/" target="_blank">苏宁社区</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030403" href="http://baoxian.suning.com/ins/jiaDian.htm" target="_blank">延长保修</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030404" href="http://snbook.suning.com/web/index.htm" target="_blank">免费书城</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030405" href="https://passport.suning.com/ids/trustLogin?sysCode=epp&amp;targetUrl=https://pay.suning.com/epp-epw/login/login.action" target="_blank">易付宝</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030407" href="https://passport.suning.com/ids/trustLogin?sysCode=epp&amp;targetUrl=https://licai.suning.com/bof/licaiIndex.htm" target="_blank">苏宁理财</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030406" href="http://jinrong.suning.com" target="_blank">苏宁金融</a></p> 
        </dd> 
       </dl> 
       <dl class="sn-site-list rnb"> 
        <dt>
          更多热点 
        </dt> 
        <dd> 
         <p><a name="public0_none_dbgjt_wzdh030503" href="http://www.pptv.com/" target="_blank">PPTV</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030504" href="http://sale.suning.com/syb/20120419xsjkhd/index.html" target="_blank">客户端</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030505" href="http://sop.suning.com/" target="_blank">商家入驻<i class="hot"></i></a></p> 
         <p><a name="public0_none_dbgjt_wzdh030506" href="http://pan.suning.com/cloud-web/web2/cloud.html" target="_blank">苏宁云盘</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030507" href="http://sncs.suning.com/" target="_blank">苏宁众包</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030508" href="http://union.suning.com/" target="_blank">苏宁联盟</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030510" href="http://ued.suning.com/survey/" target="_blank">用户体验</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030511" href="http://gongyi.suning.com" target="_blank">公益频道</a></p> 
         <p><a name="public0_none_dbgjt_wzdh030502" href="http://jiameng.suning.com/home.action" target="_blank">校园先锋</a></p> 
         <p><a name="" href="http://jiameng.suning.com/home.action" target="_blank">苏宁加盟</a></p> 
         <p><a name="" href="http://www.suningcloud.com/" target="_blank">苏宁云</a></p> 
         <p><a name="" href="http://fc.suning.com/" target="_blank">苏宁足球</a></p> 
        </dd> 
       </dl> 
       <a href="javascript:void(0);" class="ng-close" name="public0_none_dbgjt_wzdh030516"><em class="ng-iconfont"></em></a> 
      </div> 
     </div> 
     <!--网站导航 ]]--> 
     <!-- 消息 [[ --> 
     <div class="ng-bar-node-box ng-msg-box"> 
      <a href="member_message.html" class="ng-bar-node ng-bar-node-msg" name="public0_none_dbgjt_wdxx01" target="_blank"> <span>消息<i class="ng-iconfont dot"></i></span><em class="ng-iconfont down"></em> </a> 
      <div class="ng-d-box ng-msg-child" style="display:none;"> 
       <div class="ng-msg-list"> 
        <div class="ng-msg-item ng-msg-item-no"> 
         <i></i> 
         <span>嗷~ 没有新消息...</span> 
        </div> 
       </div> 
       <div class="ng-msg-bottom"> 
        <a href="member_message.html" name="public0_none_dbgjt_wdxx01" target="_blank">查看更多</a> 
       </div> 
      </div> 
     </div> 
     <!-- 消息 ]] --> 
    </div> 
    <div class="ng-toolbar-right"> 
     <!-- 登录注册 --> 
     <a href="javascript:void(0)" class="ng-bar-node username-bar-node username-bar-node-showside" id="username-node" rel="nofollow" style="display:none;"> <span id="usernameHtml01"></span> <em class="hasmsg ng-iconfont"></em> </a> 
     <div class="ng-bar-node-box username-handle" id="username-node-slide" style="display:none;"> 
      <a href="member_index.html" rel="nofollow" class="ng-bar-node username-bar-node username-bar-node-noside"> <span id="usernameHtml02"></span> <em class="hasmsg ng-iconfont"></em> <em class="ng-iconfont down"></em> </a> 
      <div class="ng-d-box ng-down-box ng-username-slide" style="display:none;"> 
       <a href="member_info.html" class="ng-vip-union" target="_blank" rel="nofollow">账号管理</a> 
       <a href="javascript:SFE.base.logoff();" rel="nofollow">退出登录</a> 
      </div> 
     </div> 
     <div class="ng-bar-node reg-bar-node" id="reg-bar-node"> 
      <a href="login.html" name="public0_none_dbgjt_login0800" rel="nofollow" class="login">登录</a> 
      <a href="https://reg.suning.com/person.do" target="_blank" class="login reg-bbb" rel="nofollow" name="public0_none_dbgjt_register09">注册</a> 
     </div> 
     <script type="text/javascript">
				function d(b) {
					var a;
					return (a = document.cookie.match(RegExp("(^| )" + b + "=([^;]*)(;|$)"))) ? decodeURIComponent(a[2]
						.replace(/\+/g, "%20"))
						: null
				};
				var uernameA = d("logonStatus");
				var usernameNode = document.getElementById('username-node');
				var usernameNodeSlide = document.getElementById('username-node-slide');
				var usernameHtml01 = document.getElementById('usernameHtml01') , usernameHtml02 = document.getElementById('usernameHtml02');
				var regBarNode = document.getElementById('reg-bar-node');
				if (uernameA != null && uernameA != "") {
					var uernameC = d("nick");
					// if( ((window.sidebar_config && sidebar_config.enable)||sn.hasSidebar) && !sn.hasNewSidebar ){
					// 	usernameNode.style.display = "block";
					// }else{
						usernameNodeSlide.style.display = "block";
					//}
					usernameHtml01.innerHTML = uernameC;
					usernameHtml02.innerHTML = uernameC;
					regBarNode.style.display = "none";
				}else{
					usernameNode.style.display = "none";
					usernameNodeSlide.style.display = "none";
					usernameHtml01.innerHTML = " ";
					usernameHtml02.innerHTML = " ";
					regBarNode.style.display = "block";
				}
			</script> 
     <!--我的订单 [[--> 
     <div class="ng-bar-node-box myorder-handle"> 
      <a href="member_order.html?storeId=10052&amp;catalogId=10051" rel="nofollow" name="public0_none_dbgjt_order04" class="ng-bar-node ng-bar-node-fix touch-href ng-bar-node-pr5"><span>我的订单</span><em class="ng-iconfont down"></em></a> 
      <div class="ng-down-box ng-d-box myorder-child" style="display:none;"> 
       <a href="member_order.html?catalogId=10051&amp;storeId=10052&amp;selectTime=all&amp;status=M" rel="nofollow" name="public0_none_dbgjt_order0401">待支付<em id="waitPayCounts"></em></a> 
       <a href="member_order.html?catalogId=10051&amp;storeId=10052&amp;selectTime=all&amp;status=C000" rel="nofollow" name="public0_none_dbgjt_order0402">待收货<em id="waitDeliveryCounts"></em></a> 
       <a href="member_comments.html" rel="nofollow" name="public0_none_dbgjt_order0403">待评价<em id="waitEvaluation"></em></a> 
       <a href="http://member.suning.com/emall/SNLingYueGoodsOrderView?storeId=10052&amp;catalogId=10051" rel="nofollow" name="public0_none_dbgjt_order0404">修改订单</a> 
      </div> 
     </div> 
     <!--我的订单 ]]--> 
     <!--我的易购 [[--> 
     <div class="ng-bar-node-box mysuning-handle"> 
      <a href="member_index.html" rel="nofollow" name="public0_none_dbgjt_wdyg05" class="ng-bar-node ng-bar-node-fix touch-href ng-bar-node-pr5"><span>我的易购</span><em class="ng-iconfont down"></em></a> 
      <div class="ng-down-box ng-d-box mysuning-child" style="display:none;"> 
       <a href="http://2.suning.com/myOrder/queryMyOrders.do" name="public0_none_dbgjt_wdyg0501" rel="nofollow" target="_blank">我的二手</a> 
       <a href="https://passport.suning.com/ids/trustLogin?sysCode=epp&amp;targetUrl=http://my.jr.suning.com/sfp/accountAssets/index.htm" rel="nofollow" name="public0_none_dbgjt_wdyg0502" target="_blank">我的金融</a> 
       <a href="member_collect_goods.html" rel="nofollow" name="public0_none_dbgjt_wdyg0503">我的收藏</a> 
       <a href="https://rxf.suning.com/epps-cpf/accountMgt/assetOverview.do" rel="nofollow">我的任性付</a> 
       <a href="member_coupon.html?storeId=10052&amp;catalogId=10051" rel="nofollow" name="public0_none_dbgjt_wdyg0504">我的优惠券</a> 
       <a href="http://vip.suning.com/sign/welcome.do" rel="nofollow" name="public0_none_dbgjt_wdyg0505">打卡赚云钻</a> 
       <a href="http://vip.suning.com" class="ng-vip-union" target="_blank" rel="nofollow" name="public0_none_dbgjt_wdyg0506">会员联盟<em class="ng-iconfont"></em></a> 
      </div> 
     </div> 
     <!--我的易购 ]]--> 
     <!-- 购物车 --> 
     <a class="ng-bar-node ng-bar-node-mini-cart" name="public0_none_minicart_gouwclj" rel="nofollow" href="cart.html?langId=-7&amp;storeId=10052&amp;catalogId=10051"> <em class="ng-iconfont cart"></em><span>购物车</span> <span class="total-num-box" id="J_total_num_box"> <b class="total-num J_cart_total_num" id="showTotalQty">0</b> <span class="total-num-bg-box"> <em></em> <i></i> </span> </span> </a> 
     <script type="text/javascript">
				var ngCartNum =  d("totalProdQty");
				ngCartNum = ( ngCartNum ==0 || ngCartNum == null )?0:ngCartNum;
				ngCartNum = ngCartNum>99?'99+':ngCartNum;
				document.getElementById('showTotalQty').innerHTML = ngCartNum;
			</script> 
     <!--手机苏宁 [[--> 
     <div class="ng-bar-node-box app-down-box"> 
      <a href="http://sale.suning.com/syb/20120419xsjkhd/index.html" target="_blank" name="public0_none_dbgjt_sjsn01" rel="nofollow" class="ng-bar-node mb-suning touch-href"> <em class="ng-iconfont mb"></em><span>手机苏宁</span><em class="ng-iconfont down"></em> </a> 
      <div class="ng-mb-box ng-d-box mb-down-child" style="display:none;"> 
       <div class="ng-code-box"> 
        <p class="ng-tip"> <a href="http://sale.suning.com/syb/20120419xsjkhd/index.html" rel="nofollow" name="public0_none_dbgjt_sjsn0101" target="_blank">扫一扫，下载易购客户端</a> </p> 
        <a href="http://sale.suning.com/syb/20120419xsjkhd/index.html" rel="nofollow" name="public0_none_dbgjt_sjsn0102" target="_blank"> <img src3="https://sslres.suning.com/public/v3/images/code.png?var=07" alt="苏宁易购APP二维码" height="80" width="80" /> </a> 
       </div> 
       <div class="ng-app-box"> 
        <div class="ng-app-list"> 
         <a href="https://passport.suning.com/ids/trustLogin?sysCode=epp&amp;targetUrl=https://pay.suning.com/epp-epw/login/login.action" target="_blank" rel="nofollow" name="public0_none_dbgjt_sjsn0103" class="ng-app"><img src3="https://sslres.suning.com/public/v3/images/app-ebook.png?var=01" title="易付宝钱包" /></a> 
         <a href="http://sale.suning.com/images/advertise/zyn/TV0811sndjt/index.html" target="_blank" rel="nofollow" name="public0_none_dbgjt_sjsn0104" class="ng-app"><img src3="https://sslres.suning.com/public/v3/images/app-sn.png?var=03" title="苏宁易购TV版" /></a> 
         <a href="http://app.pptv.com/pg_get_clt" target="_blank" rel="nofollow" name="public0_none_dbgjt_sjsn0105" class="ng-app"><img src3="https://sslres.suning.com/public/v3/images/app-pptv.png?var=01" title="PPTV" /></a> 
         <a href="http://snbook.suning.com/web/index.htm" target="_blank" rel="nofollow" name="public0_none_dbgjt_sjsn0106" class="ng-app"><img src3="https://sslres.suning.com/public/v3/images/app-suning.png?var=02" title="苏宁阅读" /></a> 
        </div> 
       </div> 
       <a href="http://sale.suning.com/syb/yinliuye0512/index.html" target="_blank" rel="nofollow" name="public0_none_dbgjt_sjsn0108"> <img src3="https://sslres.suning.com/public/v3/images/newreg.png?v=20150506" height="35" width="242" /> </a> 
       <a href="javascript:void(0);" name="public0_none_dbgjt_sjsn0109" class="ng-close" rel="nofollow"><em class="ng-iconfont"></em></a> 
      </div> 
     </div> 
     <!--手机苏宁 ]]--> 
     <a href="https://passport.suning.com/ids/trustLogin?sysCode=epp&amp;targetUrl=https://pay.suning.com/epp-epw/login/login.action" name="public0_none_dbgjt_yfb06" class="ng-bar-node ng-bar-node-pr5" target="_blank"><span>易付宝</span></a> 
     <a href="http://b.suning.com" class="ng-bar-node ng-bar-node-pr5" name="public0_none_dbgjt_qypd01" target="_blank"><span>政企采购</span></a> 
     <!--服务中心 [[--> 
     <div class="ng-bar-node-box service-handle"> 
      <a href="javascript:void(0);" class="ng-bar-node ng-bar-node-service ng-bar-node-fix touch-href ng-bar-node-pr5" rel="nofollow" name="public0_none_dbgjt_fwzx07"><span>客户服务</span><em class="ng-iconfont down"></em> </a> 
      <div class="ng-down-box ng-d-box service-center-child ng-ser-list" style="display:none;"> 
       <a href="http://help.suning.com" rel="nofollow" target="_blank" name="public0_none_dbgjt_fwzx0705">帮助中心</a> 
       <a href="http://store.suning.com" rel="nofollow" target="_blank" name="public0_none_dbgjt_fwzx0704">查找门店</a> 
       <a href="member_aftersale.html?storeId=10052&amp;catalogId=10051" rel="nofollow" name="public0_none_dbgjt_fwzx0701" target="_blank">退换货</a> 
       <a href="http://assss.suning.com/assss-web/pc/helper/appointmentStep1.do" target="_blank">约服务</a> 
       <a href="member_suggest.html" rel="nofollow" name="public0_none_dbgjt_fwzx0702" target="_blank">投诉</a> 
       <a href="http://s.suning.com" rel="nofollow" name="public0_none_dbgjt_fwzx0706" target="_blank">建议反馈</a> 
       <a href="javascript:findpass();" rel="nofollow" name="public0_none_dbgjt_fwzx0707">在线咨询</a> 
      </div> 
     </div> 
     <!--服务中心 ]]--> 
    </div> 
    <div id="ng-minicart-slide-box"></div> 
   </div> 
  </div> 
  <!-- topBar ]]--> 
  <div class="wrapper"> 
   <!-- 简头 [[ --> 
   <div class="simple-header"> 
    <div id="snlogo" class="clearfix"> 
     <a href="index.html" title="苏宁易购"><img alt="苏宁易购" src="https://sslres.suning.com/project/srsregister/images/snlogo.png?v=201603010114" /></a> 
     <span class="channel l reglogo"></span> 
    </div> 
   </div> 
   <!-- 简头 ]] --> 
   <div class="main-box reg  reg-bor-top"> 
    <div class="tab-cont cont-marg clearfix bnone"> 
     <!-- reg-type-cont [[ --> 
     <div class="reg-main reg-main-two" style="min-height: 360px;"> 
      <div class="reg-suc  reg-suc1"> 
       <i class="logo"></i> 
       <p class="tip">恭喜您，<span class="reg-phone-num">{{$email}}</span>账号注册成功！</p> 
       <p class="relocation">本页将在<span id="countdown">5</span>秒后自动跳转，您可以点此链接<a href="{{url('/login')}}" name="Preg_sucessTz_none_info001">手动跳转</a></p> 
      </div> 
     </div> 
     <!-- reg-type-cont ]] --> 
    </div> 
   </div> 
  </div> 
  <iframe class="screen-iframe" style="display:none;" scrolling="no" frameborder="0"></iframe> 
  <!-- 此处引入公用简尾 --> 
  <!--#include file="/include/footer-simple.shtml"--> 
  <div class="clear"></div> 
  <div class="ng-s-footer"> 
   <div class="ng-s-f-con"> 
    <p class="ng-url-list"> <a name="public0_none_wb_yqlj0101" target="_blank" href="http://www.suning.cn/">苏宁云商</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0102" target="_blank" href="http://10035.suning.com/">苏宁互联</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0111" target="_blank" href="http://jinrong.suning.com/">苏宁金融</a><span>|</span> <a name="public0_none_wb_yqlj0103" target="_blank" rel="nofollow" href="https://passport.suning.com/ids/trustLogin?sysCode=epp&amp;targetUrl=https://pay.suning.com/epp-epw/login/login.action">易付宝</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0105" target="_blank" href="http://www.pptv.com?rcc_id=snyg">PPTV</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0106" target="_blank" href="http://redbaby.suning.com/">红孩子</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0107" target="_blank" href="http://binggo.suning.com/">缤购</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0108" target="_blank" href="http://laox.suning.com/">乐购仕</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0111" target="_blank" href="http://wuliu.suning.com/">苏宁物流</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0109" target="_blank" href="http://usa.suning.com/">苏宁美国</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0110" target="_blank" href="http://hk.suning.com/">苏宁香港</a><span>|</span> <a name="public0_none_wb_yqlj0111" target="_blank" href=" http://m.suning.com/">手机苏宁</a> </p> 
    <p class="ng-url-list"> <a rel="nofollow" name="public0_none_wb_yqlj0201" target="_blank" href="http://club.suning.com/hr/aboutus.html">关于苏宁易购</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0202" target="_blank" href="http://help.suning.com/page/id-469.htm">联系我们</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0203" target="_blank" href="http://careers.cnsuning.com/">诚聘英才</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0204" target="_blank" href="http://sop.suning.com/">供应商入驻</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0205" target="_blank" href="http://union.suning.com/">苏宁联盟</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0206" target="_blank" href="http://zb.suning.com/">苏宁招标</a><span>|</span> <a name="public0_none_wb_yqlj0207" target="_blank" href="http://union.suning.com/aas/links.html">友情链接</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0208" target="_blank" href="http://help.suning.com/page/id-281.htm">法律申明</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0209" target="_blank" href="http://ued.suning.com/survey/">用户体验提升计划</a><span>|</span> <a rel="nofollow" name="public0_none_wb_yqlj0209" target="_blank" href="http://mrs.suning.com/mrs-web/stockholder/check.htm">股东会员认证</a> </p> 
    <p class="ng-copyright"> Copyright&copy; 2002-2016 ，苏宁云商集团股份有限公司版权所有 <a style="color:#999" target="_blank" href="http://www.miitbeian.gov.cn">苏ICP备10207551号-4</a> <a style="color:#999" rel="nofollow" target="_blank" href="http://img.suning.cn/public/v3/images/SUB1-20130131.png">苏B1-20130131</a> <a style="color:#999" rel="nofollow" target="_blank" href="http://img.suning.cn/public/v3/images/SUB2-20130376.png">苏B2-20130376</a> <a style="color:#999" rel="nofollow" target="_blank" href="http://img.suning.cn/public/v3/images/SUB2-20130391.png">苏B2-20130391</a> 出版物经营许可证新出发苏批字第A-243号</p> 
    <div class="ng-authentication"> 
     <a rel="nofollow" name="public0_none_wb_zs0302" target="_blank" href="https://search.szfw.org/cert/l/CX20111018000608000610"> <img width="76" height="24" alt="诚信网站" src="http://img.suning.cn/public/v3/images/chengxin.png" /> </a> 
     <a rel="nofollow" name="public0_none_wb_zs0303" target="_blank" href="http://image.suning.cn/uimg/snnet/snnetImg/142891196680527240.jpg"> <img width="76" height="24" alt="中国联通授权网络经营代理商" src="http://img.suning.cn/public/v3/images/unicom.png" /> </a> 
     <a rel="nofollow" name="public0_none_wb_zs0304" target="_blank" href="http://img.suning.cn/public/v3/images/dianxin_content.jpg"> <img width="76" height="24" alt="中国电信授权网络经营代理商" src="http://img.suning.cn/public/v3/images/dianxin.jpg" /> </a> 
     <a name="public0_none_wb_zs0303" rel="nofollow" target="_blank" href="http://www.jsgsj.gov.cn:60101/keyLicense/verifKey.jsp?serial=320000163820130117100000009630&amp;signData=0+ADYt839gp1EiqiZXnsxsyOnpO32Wg4sFePaiV9+NtTV/XCAMXGzT/AOgycGMm0EjsR/Ot661M7h9GeStpA8QyJTs1Ip1K/CSNaemthn7f1NjI03x1E6v9ZRT+3M60WZIGLBEjFs5XMliufNz1cJlYDQrTZvaZbHyJ2KzgJB4Y="> <img width="76" height="24" alt="电子营业执照" src="http://img.suning.cn/public/v3/images/dianzi.png?v=02" /> </a> 
    </div> 
   </div> 
  </div> 
  <style type="text/css">
.ng-footer{height:130px;margin-top:0;}
.ng-s-footer{height:130px;background:none;text-align:center;}
.ng-s-footer p.ng-url-list{height:25px;line-height:25px;}
.ng-s-footer p.ng-url-list a{color:#666666;}
.ng-s-footer p.ng-url-list a:hover{color:#f60;}
.ng-s-footer .ng-authentication{float:none;margin:0 auto;height:25px;width:990px;margin-top:5px;}
.ng-s-footer p.ng-copyright{float:none;width:100%;}
.root1200 .ng-s-footer p.ng-copyright{width:100%;}
</style> 
  <script type="text/javascript" src="{{ _HOME_ }}/js/snAccount_v2-min.js"></script> 
  <script type="text/javascript" src="{{ _HOME_ }}/js/main-min.js"></script> 
  <script type="text/javascript" src="{{ _HOME_ }}/js/srs-common-min.js"></script> 
  <script type="text/javascript" src="{{ _HOME_ }}/js/sa-analytics.js"></script> 
  <script type="text/javascript" src="{{ _HOME_ }}/js/sa-functions.js"></script> 
  <script type="text/javascript">
$(document).ready(function(){
	srscommon.jumpCountDown('#countdown', $(".relocation a").attr("href"));
	
	if (typeof(porto) != "undefined") {
		porto.init({
		    partnerCode:'none',
		    appName:'commerce',
		    referenceId:'123',
		    sessionId:'123',
		    serviceUrl:"https://fp.suning.com/bennu-collector/fp/porto.json"
		});
	}
});
</script> 
  <!-- 添加da和sa开始 [[ --> 
  <script type="text/javascript" src="{{ _HOME_ }}/js/da_opt_inc-min.js?v=201603010114"></script> 
  <script type="text/javascript">
/**
 *2014-11-20
 *
 * 更新记录：
 * 1.
 */
 
/**
 * 第一步：在页面引入基础代码
 * 埋点前请检查页面是否已经埋入此代码，避免重复引入代码
 * 此部分代码不允许修改，若私自修改源码导致出现的问题，后果自负
 */
var sa;if(!sa){sa={}}if(!sa.click){sa.click={}}(function(){var t=/^\w*?.suning.com$/,s=document.location.hostname,g=(("https:"==document.location.protocol)?"https://":"http://"),o=h(),b="|",c=location.href,m=l(p(c));function q(Z,M){var Y=Z.name?l(Z.name):"name undefined";if(Y=="name undefined"){var aa=Z.attributes.name;if(aa!=undefined&&aa!=null){Y=aa.value?l(aa.value):"name undefined"}}if(M!=undefined&&M!=null&&M!=""){var J=Z.attributes[M];if(J!=undefined&&J!=null){Y=J.value?l(J.value):M+" undefined"}}var N=Z.id?l(Z.id):"id undefined",Q=new Array(),z=(e(Z,Q),Q)?l(Q.join("").replace(/\s|\|/ig,"")):"text undefined",T=(T=document.getElementById("resourceType"))?T.value:"",A=N+b+Y+b+z,R=(R=document.getElementById("errorCode"))?R.value:"",W=g+o+"/ajaxClick.gif",y=u(),k="_snck";i(k,y,"/","","");var X=n("_snmp"),D=typeof sn=="object"?sn.cityId:"can not get cityId",I=y+b+X+b+A+b+m,V=Z.href?Z.href:"",H=(V?w(V):"-"),K=document.getElementById("URLPattern"),P=(K?K.value:"");var C="";var F=n("logonStatus");if(F!=undefined&&F!=null){C=F}var E="";var j=n("_snma");if(j!=undefined&&j!=null&&j.indexOf("|")>=0){try{E=j.split("|")[1]}catch(U){}}var B="";var x=n("idsLoginUserIdLastTime");if(x!=undefined&&x!=null){B=x}var S="";var O=n("custno");if(O!=undefined&&O!=null){S=O}var L="";var ab=n("_snmb");if(ab!=undefined&&ab!=null&&ab.indexOf("|")>=0){try{L=ab.split("|")[0]}catch(U){}}var G=W+"?_snmk="+I+"&_snme="+R+"&_type="+T+"&_cId="+D+"&_sid="+H+"&urlPattern="+P+"&vid="+E+"&lu="+B+"&sid="+L+"&mid="+S+"&ls="+C;v(G)}function u(){var k=new Date(),j=Math.round(100000*Math.random()),x=k.getTime().toString().concat(j);return x}function n(k){var j=document.cookie.split("; ");for(var x=0;x<j.length;x++){var y=j[x].split("=");if(y[0]==k){return unescape(y[1])}}}function v(j){var x="log_"+(new Date()).getTime();var k=window[x]=new Image();k.onload=(k.onerror=function(){window[x]=null});k.src=j+"&iId="+x;k=null}function h(){if(t.test(s)){return"click.suning.cn/sa"}else{return"clicksit.suning.cn/sa"}}function d(){return document.domain}function i(k,j,C,B,A){var z=k+"="+escape(j);if(B!=""){var y=new Date();y.setTime(y.getTime()+B);z+=";expires="+y.toGMTString()}if(C!=""){z+=";path="+C}var x=d();if(x.indexOf(".suning.com")!=-1){z+=";domain=.suning.com"}else{if(x.indexOf(".cnsuning.com")!=-1){z+=";domain=.cnsuning.com"}else{z+=";domain="+A}}document.cookie=z}function w(k){var j="-";if(!a(k)){j=f(k,"tid","&")}return j}function p(j){if(j.length>301){j=j.substring(0,300)}while(j.indexOf(b)!=-1){j=j.replace(b,"--")}return j}function e(x,k){if(x.nodeType==3){k.push(x.nodeValue)}else{if(x.nodeType==1){for(var j=x.firstChild;j!=null;j=j.nextSibling){e(j,k)}}}}function l(j){return j!=null?encodeURIComponent(j):""}function f(x,k,A){var z="-",j;if(!a(x)&&!a(k)&&!a(A)){j=x.indexOf(k);if(j>-1){var y=x.indexOf(A,j);if(y<0){y=x.length}z=x.substring(j+k.length+1,y)}}return z}function a(j){return(undefined==j||""==j||"-"==j)}var r=sa.click;r.sendDatasIndex=q})();

/**
 * 第二步：为元素绑定click事件
 * 技术支持：此方案需要jQuery支持，使用此方案前请确认使用的jquery版本对live方法的支持性
 * 功能：为点击对象添加点击事件处理函数
 * 示例解释：下面的示例中是为标签的name以test_dac_index_开头的元素埋点，实际生产中的name属性命名约束请联系贺婷芳(12061488)确认；未经确认不得埋点，否则引起冲突后果自负
 * 示例修改：在具体埋点过程中请开发人员根据具体的name修改a[name^=\*需要埋点的name*\]或者input[name^=\*需要埋点的name*\]
 * 命名技术规范：标签的name,id属性不能含有"|"
 */

</script>  
 </body>
</html>
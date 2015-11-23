<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset;?>">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta charset="<?php echo $charset;?>">
    <title><?php echo stripslashes($vote['title']);?></title>
    <meta name="description" content="<?php echo stripslashes($vote['content']);?>">
    <link rel="stylesheet" href="<?php echo HEJIN_PATH;?>public/index<?php echo $vote['yuliua'];?>/touch.css">   
     <script src="<?php echo HEJIN_PATH;?>public/index<?php echo $vote['yuliua'];?>/jquery-2.1.3.min.js" type="text/javascript"></script>

                 <!--<script src="<?php echo HEJIN_PATH;?>public/index<?php echo $vote['yuliua'];?>/app.js" type="text/javascript"></script>-->
                 <script src="<?php echo HEJIN_PATH;?>public/index<?php echo $vote['yuliua'];?>/jquery.masonry.min.js" type="text/javascript"></script>
  <style>
.slider{display:none;}
.focus span{width:5px;height:5px;margin-left:5px;border-radius:50%;background:#CDCDCD;font-size:0}
.focus span.current{background:red;}
</style>
                
    </head>
<body> 
<header>

    <div class="m_head clearfix">
    	<?php if($ispicarr) { ?>
        <div class="slider">
<ul>
        <?php if(is_array($picarray)) foreach($picarray as $picar) { ?>        <?php $urlpic = explode('|',$picar)?>            <?php if(count($urlpic)>1) { ?>
            	<li><a href="<?php echo $urlpic['1'];?>"><img src="<?php echo $urlpic['0'];?>"/></a></li>
            <?php } else { ?>
    					<li><a href="#"><img src="<?php echo $picar;?>"/></a></li>
            <?php } ?>            
        <?php } ?>
  	</ul>
</div>
        <?php } else { ?>
        	<img src="<?php echo stripslashes($vote['pic']);?>" />
        <?php } ?>
        <div class="num_box">
                         <ul class="num_box_ul">
                <li>
                    <span class="text">已报名</span>
                    <span><?php echo $vote['zuopins'];?></span>
                </li>
                <li>
                    <span class="text">投票人次</span>
                    <span><?php echo $vote['toupiaos']+$vote['xntps'];?></span>
                </li>
                <li>
                    <span class="text">访问量</span>
                    <span><?php echo $vote['clicks']+$vote['xnlls'];?></span>
                </li>
            </ul>
<?php if($vote['yuliua']!=8) { ?>
            <img src="<?php echo HEJIN_PATH;?>public/index<?php echo $vote['yuliua'];?>/mw_004.jpg" />
            <?php } ?>
        </div>
            </div>
</header>    <script src="<?php echo HEJIN_PATH;?>js/exif.js" type="text/javascript"></script>
    <script src="<?php echo HEJIN_PATH;?>js/binaryajax.js" type="text/javascript"></script>
    <script type="text/vbscript">
    Function IEBinary_getByteAt(strBinary, iOffset)
        IEBinary_getByteAt = AscB(MidB(strBinary, iOffset + 1, 1))
    End Function
    Function IEBinary_getBytesAt(strBinary, iOffset, iLength)
      Dim aBytes()
      ReDim aBytes(iLength - 1)
      For i = 0 To iLength - 1
       aBytes(i) = IEBinary_getByteAt(strBinary, iOffset + i)
      Next
      IEBinary_getBytesAt = aBytes
    End Function
    Function IEBinary_getLength(strBinary)
        IEBinary_getLength = LenB(strBinary)
    End Function
    </script>
<script src="<?php echo HEJIN_PATH;?>js/localResizeIMG2.js" type="text/javascript"></script>
<script src="<?php echo HEJIN_PATH;?>js/mobileBUGFix.mini.js" type="text/javascript"></script>

    <div class="apply">
        <p>报名处</p>
        <div class="blank10"></div>

        <form action="" id="signupok" method="post">
         <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
         <input type="hidden" name="vid" value="<?php echo $vid;?>" />
            <dl class="clearfix">
                <dt><?php if($vote['zpnamediy']) { echo stripslashes($vote['zpnamediy']);?><?php } else { ?>姓名<?php } ?>:</dt>
                <dd><input type="text" class="input_txt" id="zpname" value="" name="zpname" placeholder="请输入<?php if($vote['zpnamediy']) { echo stripslashes($vote['zpnamediy']);?><?php } else { ?>姓名<?php } ?>" maxlength="12"></dd>
            </dl>
            <dl class="clearfix">
                <dt>联系电话:</dt>
                <dd><input type="number" class="input_txt" value="" name="telphone" id="telphone" placeholder="请输入您的真实手机号"></dd>
            </dl>
            <dl class="upload clearfix">
                <dt>上传照片<br><?php if($picnum==1) { ?>1<?php } else { ?>1-<?php echo $picnum;?><?php } ?>张:</dt>
                <dd class="upload_area clearfix">
                    <ul id="imglist" class="post_imglist"></ul>
                    <div class="upload_btn">
                    <?php if($shebei==1) { ?>
                        <input type="file" id="upload_image" value="图片上传" accept="image/jpeg,image/gif,image/png" capture="camera"><?php } else { ?><input type="file" id="upload_image" value="图片上传" accept="image/*" capture="camera"><?php } ?>
                    </div>
                </dd>
            </dl>
            <dl class="clearfix">
                <dt><?php if($vote['zpmsdiy']) { echo stripslashes($vote['zpmsdiy']);?><?php } else { ?>描述<?php } ?>:</dt>
                <dd><textarea class="textarea" placeholder="请输入<?php if($vote['zpmsdiy']) { echo stripslashes($vote['zpmsdiy']);?><?php } else { ?>描述<?php } ?>" name="content" id="content"></textarea></dd>
            </dl>
            <div style="color: #EC6941;font-size: 16px;padding: 0 15px 15px 15px; line-height:24px; font-weight:bolder;"><?php echo stripslashes($vote['yuliuc']);?></div>
                        <div class="btn_box">
                <input type="submit" name="signup" id="tijiaoan" class="button" value="确认报名">
            </div>
            <div class="blank10"></div>
        </form>
    </div>
</div>
<section class="rules">
    <div class="text">    <?php if($vote['shuomingta']) { ?>
        <div class="prize"><?php echo stripslashes($vote['shuomingta']);?></div>
            <div class="neirong"><?php echo replace($vote['shuomingca']);?></div>
    <?php } ?>
    <?php if($vote['shuomingtb']) { ?>
        <div class="prize"><?php echo stripslashes($vote['shuomingtb']);?></div>
             <div class="neirong"><?php echo replace($vote['shuomingcb']);?></div>
    <?php } ?>
</div>
    <div class="text">    <?php if($vote['shuomingtc']) { ?>
        <div class="ways"><?php echo stripslashes($vote['shuomingtc']);?></div>
            <div class="neirong"> <?php echo replace($vote['shuomingcc']);?></div>
    <?php } ?>
</div>
</section>


<section>
<?php if($bmzt==1) { ?>
    <div class="pop" id="guanzhu" style="display:block">
        <div class="mengceng"></div>
        <div class="pop_up">
                        <p class="tit_p">报名还未开始</p>
            <p class="tit_txt">请<?php echo date("Y-m-d H:i",$vote[start_time]);?>后再来！</p>
            
        </div>
    </div>
<?php } elseif($bmzt==2) { ?>
    <div class="pop" id="guanzhu" style="display:block">
        <div class="mengceng"></div>
        <div class="pop_up">
                        <p class="tit_p">对不起！报名已经结束！</p>
        </div>
    </div>
<?php } elseif($bmzt==3) { ?>
    <div class="pop" id="guanzhu" style="display:block">
        <div class="mengceng"></div>
        <div class="pop_up">
                        <p class="tit_p"><?php echo $hejintoupiao['hjtp_ydgzbt'];?></p>
            <p class="tit_txt"><?php echo stripslashes($vote['wxgzts']);?></p>
            <a href="<?php echo stripslashes($vote['wxgzurl']);?>" class="gz_btn"><?php echo $hejintoupiao['hjtp_ydgzan'];?></a>
        </div>
    </div>
<?php } ?>
</section>

<div id="console"></div>



<?php if($hejintoupiao['hjtp_jssdk'] && $hejinbox['hjbox_appid'] && $hejinbox['hjbox_appsecret']) { ?>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js" type="text/javascript"></script>
<script type="text/javascript">
    wx.config({
        debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
        appId: '<?php echo $signPackage["appId"];?>', // 必填，公众号的唯一标识
        timestamp: "<?php echo $signPackage['timestamp'];?>", // 必填，生成签名的时间戳
        nonceStr: '<?php echo $signPackage["nonceStr"];?>', // 必填，生成签名的随机串
        signature: '<?php echo $signPackage["signature"];?>',// 必填，签名，见附录1
        jsApiList: ['onMenuShareTimeline', 'onMenuShareAppMessage'] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
    });

    wx.ready(function(){
        wx.error(function(res){
            console.log(res);
        });
        //朋友圈
        wx.onMenuShareTimeline({
            title: '<?php echo stripslashes($vote[title]);?>', // 分享标题
            link: '<?php echo HEJIN_URL;?>&model=<?php echo $symodel;?>&vid=<?php echo $vote['id'];?>', // 分享链接
            imgUrl: '<?php echo stripslashes($vote[icon]);?>', // 分享图标
            success: function () {
                // 用户确认分享后执行的回调函数
            },
            cancel: function () {
                // 用户取消分享后执行的回调函数
            }
        });

        //分享给朋友
        wx.onMenuShareAppMessage({
            title: '<?php echo stripslashes($vote[title]);?>', // 分享标题
            desc: '<?php echo stripslashes($vote[content]);?>', // 分享描述
            link: '<?php echo HEJIN_URL;?>&model=<?php echo $symodel;?>&vid=<?php echo $vote['id'];?>', // 分享链接
            imgUrl: '<?php echo stripslashes($vote[icon]);?>', // 分享图标
            type: '', // 分享类型,music、video或link，不填默认为link
            dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
            success: function () {
                // 用户确认分享后执行的回调函数
            },
            cancel: function () {
                // 用户取消分享后执行的回调函数
            }
        });
    });
</script>
<?php } ?>
<script type="text/javascript">
    (function () {
        var viewImg = $("#imglist");
        var imgurl = '';
        var imgcount = 0;
        $('#upload_image').localResizeIMG({
            width: <?php if($hejintoupiao['hjtp_picwidth']) { ?><?php echo $hejintoupiao['hjtp_picwidth'];?><?php } else { ?>480<?php } ?>,
            quality: 0.8,
            success: function (result) {
                var status = true;
                if (result.height > 1600) {
                    status = false;
                    alert("照片最大高度不超过1600像素");
                }
                if (viewImg.find("li").length > <?php echo $xzpic;?>) {
                    status = false;
                    alert("最多上传<?php echo $picnum;?>张照片");
                }
                if (status) {
                    viewImg.append('<li><span class="pic_time"><span class="p_img"></span><em>50%</em></span></li>');
                    viewImg.find("li:last-child").html('<span class="del"></span><img class="wh60" src="' + result.base64 + '"/><input type="hidden" id="file'
                    + imgcount
                    + '" name="fileup[]" value="'
                    + result.clearBase64 + '">');

                    $(".del").on("click",function(){
                        $(this).parent('li').remove();
                        $("#upload_image").show();
                    });
                    imgcount++;
                }
            }
        });
    })();
</script>
<script type="text/javascript">
$(function($){
$("#signupok").submit(function(){
var name = $("#zpname").val();
var tel = $("#telphone").val();
var content = $("#content").val();

if(name.length == 0){alert('请输入<?php if($vote['zpnamediy']) { echo stripslashes($vote[zpnamediy]);?><?php } else { ?>姓名<?php } ?>');return false;}

var telreg = /^1[3|4|5|7|8][0-9]\d{8}$|^\d{8}$/;
if (tel.length == 0) {alert("请输入您的真实手机号"); return false;}
if (!telreg.test(tel)){alert("请输入正确的手机号！");return false;}


var length = $("#imglist").find("li").length;
if(length == ''|| length == null  || length == undefined || length == 'undefined' || length < 1 ){alert('请上传1张以上图片');return false;}
if(content== '' || content == null || content == undefined || content == 'undefined' ){alert('请输入<?php if($vote['zpmsdiy']) { echo stripslashes($vote[zpmsdiy]);?><?php } else { ?>描述<?php } ?>');return false;}

$('#tijiaoan').val('上传中，请等待');
//$('#tijiaodf').html('<input type="bottom" class="button" value="上传中，请等待">');

});
});
$('.ico_1').on('click', function(){
  location.href = "<?php echo HEJIN_URL;?>&model=<?php echo $symodel;?>&vid=<?php echo $vote['id'];?>";
});
$('.ico_2').on('click', function(){
  location.href = "<?php echo HEJIN_URL;?>&model=<?php echo $phmodel;?>&vid=<?php echo $vote['id'];?>";
});
$('.ico_3').on('click', function(){
  <?php if($ishavezp) { ?>
  	location.href = "<?php echo HEJIN_URL;?>&model=<?php echo $xqmodel;?>&zid=<?php echo $havezp['id'];?>";
  <?php } else { ?>
  	<?php if($vote['start_time']<time() && $vote['over_time']>time()) { ?>
  		location.href = "<?php echo HEJIN_URL;?>&model=signup&vid=<?php echo $vote['id'];?>";
  	<?php } else { ?>
  		<?php if($vote['start_time']>time()) { ?>
$('#voting_title').html("<?php echo date('Y-m-d H:i',$vote['start_time']);?> 后才能报名！");
$('#voting_content').html('');
                        $('#voting').show();
  		<?php } else { ?>
$('#voting_title').html('报名已结束！');
$('#voting_content').html('');
                        $('#voting').show();
  		<?php } ?>
  	<?php } ?>
  <?php } ?>
});
$('.ico_4').on('click', function(){
<?php if($vote['yuliud']) { ?>
location.href = "<?php echo stripslashes($vote['yuliud']);?>";
<?php } else { ?>
location.href = "<?php echo $hejintoupiao['hjtp_dbdhurl'];?>";
<?php } ?>
});

$.get('<?php echo HEJIN_URL;?>&model=clicks&vid=<?php echo $vote['id'];?>&formhash=<?php echo FORMHASH;?>');
</script>
<?php if($ispicarr) { ?>
  <script src="<?php echo HEJIN_PATH;?>public/slider/yxMobileSlider.js" type="text/javascript"></script>
<script type="text/javascript">
$(".slider").yxMobileSlider({during:5000,height:<?php echo $hejintoupiao['hjtp_hdgd'];?>});
var nowtime=new Date().getTime();
function _fresh(){
var endtime=new Date("2015/02/18 12:00:00");//这里设置的时间为2011年，您可以修改为其它时间。
//var nowtime = new Date();
var leftsecond=parseInt((endtime.getTime()-nowtime)/1000);
if(leftsecond<0){leftsecond=0;}
__d=parseInt(leftsecond/3600/24);
__h=parseInt((leftsecond/3600)%24);
__m=parseInt((leftsecond/60)%60);
__s=parseInt(leftsecond%60);
var sums=__d+__h+__m+__s;
var if_Receive="";
if(sums!=0){
var d=document.getElementById("_d");
var h=document.getElementById("_h");
var m=document.getElementById("_m");
var s=document.getElementById("_s");
h.innerHTML=__h+__d*24;
m.innerHTML=__m;
s.innerHTML=__s;
nowtime=nowtime+1000;
setTimeout(_fresh,1000);
}else if(!if_Receive){
document.getElementById("msg").innerHTML="";
}
}
_fresh();
</script>
<?php } ?>  


<div style="display:none"><?php echo $hejintoupiao['hjtp_dsftjdm'];?></div></body>
</html>
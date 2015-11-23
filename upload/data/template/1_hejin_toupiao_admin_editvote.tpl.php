<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<script src="<?php echo HEJIN_PATH;?>public/admin/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo HEJIN_PATH;?>public/admin/js/jquery.validation.min.js" type="text/javascript"></script>
<script src="<?php echo HEJIN_PATH;?>public/admin/js/admincp.js" type="text/javascript"></script>
<script src="<?php echo HEJIN_PATH;?>public/admin/js/jquery.tooltip.js" type="text/javascript"></script>
<script src="<?php echo HEJIN_PATH;?>public/admin/js/jquery.cookie.js" type="text/javascript"></script>
<link href="<?php echo HEJIN_PATH;?>public/admin/css/skin_0.css" rel="stylesheet" type="text/css" id="cssfile2" />
<link href="<?php echo HEJIN_PATH;?>public/admin/css/style.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo HEJIN_PATH;?>public/jscolor/jscolor.js" type="text/javascript"></script>
<link href="<?php echo HEJIN_PATH;?>public/datetimepicker/jquery.datetimepicker.css" rel="stylesheet" type="text/css"></link>
<script src="<?php echo HEJIN_PATH;?>public/datetimepicker/jquery.datetimepicker.js" type="text/javascript" type="text/javascript"></script>

<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
<div class="h3" style="width:auto;"><?php echo stripslashes($voteinfo['title']);?></div>
      <ul class="tab-base">
        <li><a href="admin.php?action=plugins&amp;operation=config&amp;do=<?php echo $_GET['do'];?>&amp;identifier=hejin_toupiao&amp;pmod=toupiao"><span>投票活动列表</span></a></li>
      </ul>
    </div>
  </div>
  <form id="add_form" method="post" enctype="multipart/form-data" action="">
    <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
    <input type="hidden" name="vid" value="<?php echo $voteinfo['id'];?>" />
    <table class="table tb-type2">
      <tbody>
              <tr class="noborder">
          <td colspan="2" class="required"><label for="test_yuliua">选择模版</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><select id="class_type" name="yuliua">
                        <option value="1"<?php if($voteinfo['yuliua']==1) { ?> selected="selected"<?php } ?>>模版一[粉色系]</option>
                        <option value="2"<?php if($voteinfo['yuliua']==2) { ?> selected="selected"<?php } ?>>模版二[深蓝系]</option>
                        <option value="3"<?php if($voteinfo['yuliua']==3) { ?> selected="selected"<?php } ?>>模版三[草绿系]</option>
                        <option value="4"<?php if($voteinfo['yuliua']==4) { ?> selected="selected"<?php } ?>>模版四[淡蓝系]</option>
                        <option value="5"<?php if($voteinfo['yuliua']==5) { ?> selected="selected"<?php } ?>>模版五[土豪金]</option>
                        <option value="6"<?php if($voteinfo['yuliua']==6) { ?> selected="selected"<?php } ?>>模版六[黄色系]</option>
                        <option value="7"<?php if($voteinfo['yuliua']==7) { ?> selected="selected"<?php } ?>>模版七[深粉系]</option>
                       <option value="8"<?php if($voteinfo['yuliua']==8) { ?> selected="selected"<?php } ?>>模版八[清新系]</option>
                      </select></td>
          <td class="vatop tips"></td>
        </tr>

      
        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="test_title">活动名称</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo stripslashes($voteinfo['title']);?>" name="title" id="class_name" class="txt"></td>
          <td class="vatop tips"></td>
        </tr>


        <tr>
          <td colspan="2" class="required"><label class="validation" for="class_pic">活动页幻灯宣传外链图片组</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><textarea id="pic" name="pic" style="width:400px;height:100px;"><?php echo stripslashes($voteinfo['pic']);?></textarea></td>
          <td class="vatop tips"><span class="vatop rowform">模式一单图片：只需要填入图片地址即可<br />模式二幻灯图：添加模式为：图片地址|对应链接,图片地址|对应链接  以此类推。如果没有连接 可以直接这种模式：图片地址,图片地址<br /><a href="http://wx.weixinhj.com/hejin_toupiao/pic.html" target="_blank">源图片下载</a></span></td>
        </tr>


        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="test_content">微信分享描述</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo stripslashes($voteinfo['content']);?>" name="content" id="class_content" class="txt"></td>
          <td class="vatop tips"></td>
        </tr>


        <tr>
          <td colspan="2" class="required"><label class="validation" for="class_icon">微信分享外链图标</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><?php if($voteinfo['icon']) { ?><span class="type-file-show" style="float:left !important;"> <img class="show_image" src="<?php echo HEJIN_PATH;?>public/admin/images/preview.png">
            <div class="type-file-preview">
                            <img src="<?php echo stripslashes($voteinfo['icon']);?>" width="100">
                          </div>
            </span><?php } ?><input type="text" value="<?php echo stripslashes($voteinfo['icon']);?>" name="icon" id="class_icon" class="txt"></td>
          <td class="vatop tips"><span class="vatop rowform">建议尺寸300px * 300px</span></td>
        </tr>



        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="test_wxgzts">微信引导关注提示语</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><textarea id="wxgzts" name="wxgzts" style="width:400px;height:100px;"><?php echo stripslashes($voteinfo['wxgzts']);?></textarea></td>
          <td class="vatop tips"><a href="http://wx.weixinhj.com/hejin_toupiao/wxgzts.html" target="_blank">获取范例源码</a></td>
        </tr>
        


        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="test_wxgzurl">投票引导关注链接</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo stripslashes($voteinfo['wxgzurl']);?>" name="wxgzurl" id="class_wxgzurl" class="txt"></td>
          <td class="vatop tips">2种模式：1、微信素材链接 2、图片引导关注<br /><a href="http://wx.weixinhj.com/hejin_toupiao/wxurl.htm" target="_blank">微信素材获取教程</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://i3.tietuku.com/c4d3f5658bfaea98.png" target="_blank">引导关注图片源码</a></td>
        </tr>






        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="test_tpnub">每个微信用户可投票数（可以限制每天投票数，也可以现在此次活动投票数）</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo $voteinfo['tpnub'];?>" name="tpnub" id="class_tpnub" class="txt"></td>
          <td class="vatop tips">插件“设置”中可以设置票数分配规则！可设置每人每天给同一个作品只能投一票</td>
        </tr>


        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="test_ipnubs">同一个IP下每天能投多少票</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo $voteinfo['ipnubs'];?>" name="ipnubs" id="class_ipnubs" class="txt"></td>
          <td class="vatop tips">防止死粉刷票，如果填写0则不限制</td>
        </tr>


        
        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="start_time">报名开始时间</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo date('Y/m/d H:i:s',$voteinfo['start_time']);?>" name="start_time" id="start_time" class="txt"></td>
          <td class="vatop tips">活动报名的开始时间，报名时间和投票时间可以重合！</td>
        </tr>
         <script>
  $('#start_time').datetimepicker({
  });

  </script>

        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="over_time">报名结束时间</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo date('Y/m/d H:i:s',$voteinfo['over_time']);?>" name="over_time" id="over_time" class="txt"></td>
          <td class="vatop tips">活动报名的结束时间，到时间后无法报名</td>
        </tr>
         <script>
  $('#over_time').datetimepicker({
  });

  </script>

        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="vote_time">投票开始时间</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo date('Y/m/d H:i:s',$voteinfo['vote_time']);?>" name="vote_time" id="vote_time" class="txt"></td>
          <td class="vatop tips">投票开始时间，报名时间和投票时间可以重合！</td>
        </tr>
         <script>
  $('#vote_time').datetimepicker({
  });

  </script>



        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="end_time">投票结束时间</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo date('Y/m/d H:i:s',$voteinfo['end_time']);?>" name="end_time" id="end_time" class="txt"></td>
          <td class="vatop tips">投票结束时间,结束后无法报名、无法投票！</td>
        </tr>
         <script>
  $('#end_time').datetimepicker({
  });
  </script>


        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="test_yuliub">报名期和投票期重叠的时间段每个作品的投票数限额</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo $voteinfo['yuliub'];?>" name="yuliub" id="class_yuliub" class="txt"></td>
          <td class="vatop tips">又能报名又能投票期间每个作品最多能得多少票，填0为不限制！比如报名时间是 1-10号 投票时间是 5-30号，那么5-10号期间每个作品的最高票数只能是设置的这么多，这样可以防止前后报名作品的票数差距太大！</td>
        </tr>



        <tr class="noborder">
          <td colspan="2" class="required"><label for="test_shuomingta">活动说明一【标题】</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo stripslashes($voteinfo['shuomingta']);?>" name="shuomingta" id="class_shuomingta" class="txt"></td>
          <td class="vatop tips">留空则不显示此说明栏</td>
        </tr>

<tr>
          <td colspan="2" class="required"><label>活动说明一【内容】</label>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://wx.weixinhj.com/hejin_toupiao/huodongsm.htm" target="_blank">不同模版活动说明源码获取</a></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><textarea id="shuomingca" name="shuomingca" style="width:700px;height:300px;visibility:hidden;"><?php echo stripslashes($voteinfo['shuomingca']);?></textarea>
<script src="<?php echo HEJIN_PATH;?>public/kindeditor/kindeditor-min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo HEJIN_PATH;?>public/kindeditor/lang/zh_CN.js" type="text/javascript" charset="utf-8"></script>
<script>
var KE;
  KindEditor.ready(function(K) {
        KE = K.create("textarea[name='shuomingca']", {
items : ['source', '|', 'fullscreen', 'undo', 'redo', 'print', 'cut', 'copy', 'paste',
            'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
            'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
            'superscript', '|', 'selectall', 'clearhtml','quickformat','|',
            'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
            'italic', 'underline', 'strikethrough', 'lineheight', 'removeformat', '|', 'image', 'table', 'hr', 'emoticons', 'link', 'unlink', '|', 'about'],
cssPath : "<?php echo HEJIN_PATH;?>public/kindeditor/themes/default/default.css",
allowImageUpload : false,
allowFlashUpload : false,
allowMediaUpload : false,
allowFileManager : false,
syncType:"form",
afterCreate : function() {
var self = this;
self.sync();
},
afterChange : function() {
var self = this;
self.sync();
},
afterBlur : function() {
var self = this;
self.sync();
}
        });
KE.appendHtml = function(id,val) {
this.html(this.html() + val);
if (this.isCreated) {
var cmd = this.cmd;
cmd.range.selectNodeContents(cmd.doc.body).collapse(false);
cmd.select();
}
return this;
}
});
</script>
</td>
    <td class="vatop tips">可添加图片，链接、视频、音乐等任何代码！</td>
        </tr>



        <tr class="noborder">
          <td colspan="2" class="required"><label for="test_shuomingtb">活动说明二【标题】</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo stripslashes($voteinfo['shuomingtb']);?>" name="shuomingtb" id="class_shuomingtb" class="txt"></td>
          <td class="vatop tips">留空则不显示此说明栏</td>
        </tr>

<tr>
          <td colspan="2" class="required"><label>活动说明二【内容】</label>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://wx.weixinhj.com/hejin_toupiao/huodongsm.htm" target="_blank">不同模版活动说明源码获取</a></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><textarea id="shuomingcb" name="shuomingcb" style="width:700px;height:300px;visibility:hidden;"><?php echo stripslashes($voteinfo['shuomingcb']);?></textarea>
<script src="<?php echo HEJIN_PATH;?>public/kindeditor/kindeditor-min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo HEJIN_PATH;?>public/kindeditor/lang/zh_CN.js" type="text/javascript" charset="utf-8"></script>
<script>
var KE;
  KindEditor.ready(function(K) {
        KE = K.create("textarea[name='shuomingcb']", {
items : ['source', '|', 'fullscreen', 'undo', 'redo', 'print', 'cut', 'copy', 'paste',
            'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
            'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
            'superscript', '|', 'selectall', 'clearhtml','quickformat','|',
            'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
            'italic', 'underline', 'strikethrough', 'lineheight', 'removeformat', '|', 'image', 'table', 'hr', 'emoticons', 'link', 'unlink', '|', 'about'],
cssPath : "<?php echo HEJIN_PATH;?>public/kindeditor/themes/default/default.css",
allowImageUpload : false,
allowFlashUpload : false,
allowMediaUpload : false,
allowFileManager : false,
syncType:"form",
afterCreate : function() {
var self = this;
self.sync();
},
afterChange : function() {
var self = this;
self.sync();
},
afterBlur : function() {
var self = this;
self.sync();
}
        });
KE.appendHtml = function(id,val) {
this.html(this.html() + val);
if (this.isCreated) {
var cmd = this.cmd;
cmd.range.selectNodeContents(cmd.doc.body).collapse(false);
cmd.select();
}
return this;
}
});
</script>
</td>
    <td class="vatop tips">可添加图片，链接、视频、音乐等任何代码！</td>
        </tr>


        <tr class="noborder">
          <td colspan="2" class="required"><label for="test_shuomingtc">活动说明三【标题】</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo stripslashes($voteinfo['shuomingtc']);?>" name="shuomingtc" id="class_shuomingtc" class="txt"></td>
          <td class="vatop tips">留空则不显示此说明栏</td>
        </tr>

<tr>
          <td colspan="2" class="required"><label>活动说明三【内容】</label>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://wx.weixinhj.com/hejin_toupiao/huodongsm.htm" target="_blank">不同模版活动说明源码获取</a></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><textarea id="shuomingcc" name="shuomingcc" style="width:700px;height:300px;visibility:hidden;"><?php echo stripslashes($voteinfo['shuomingcc']);?></textarea>
<script src="<?php echo HEJIN_PATH;?>public/kindeditor/kindeditor-min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo HEJIN_PATH;?>public/kindeditor/lang/zh_CN.js" type="text/javascript" charset="utf-8"></script>
<script>
var KE;
  KindEditor.ready(function(K) {
        KE = K.create("textarea[name='shuomingcc']", {
items : ['source', '|', 'fullscreen', 'undo', 'redo', 'print', 'cut', 'copy', 'paste',
            'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
            'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
            'superscript', '|', 'selectall', 'clearhtml','quickformat','|',
            'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
            'italic', 'underline', 'strikethrough', 'lineheight', 'removeformat', '|', 'image', 'table', 'hr', 'emoticons', 'link', 'unlink', '|', 'about'],
cssPath : "<?php echo HEJIN_PATH;?>public/kindeditor/themes/default/default.css",
allowImageUpload : false,
allowFlashUpload : false,
allowMediaUpload : false,
allowFileManager : false,
syncType:"form",
afterCreate : function() {
var self = this;
self.sync();
},
afterChange : function() {
var self = this;
self.sync();
},
afterBlur : function() {
var self = this;
self.sync();
}
        });
KE.appendHtml = function(id,val) {
this.html(this.html() + val);
if (this.isCreated) {
var cmd = this.cmd;
cmd.range.selectNodeContents(cmd.doc.body).collapse(false);
cmd.select();
}
return this;
}
});
</script>
</td>
    <td class="vatop tips">可添加图片，链接、视频、音乐等任何代码！</td>
        </tr>


        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="test_xnlls">虚拟浏览量</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo $voteinfo['xnlls'];?>" name="xnlls" id="class_xnlls" class="txt"></td>
          <td class="vatop tips">首页浏览量的值为 真实浏览量+虚拟浏览量</td>
        </tr>


        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="test_xntps">虚拟投票数</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo $voteinfo['xntps'];?>" name="xntps" id="class_xntps" class="txt"></td>
          <td class="vatop tips">首页投票数的值为 真实投票数+虚拟投票数</td>
        </tr>

        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="test_zuopins">真实报名数</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo $voteinfo['zuopins'];?>" name="zuopins" id="class_zuopins" class="txt"></td>
          <td class="vatop tips"></td>
        </tr>


        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="test_toupiaos">真实投票数</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo $voteinfo['toupiaos'];?>" name="toupiaos" id="class_toupiaos" class="txt"></td>
          <td class="vatop tips"></td>
        </tr>


        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="test_yuliuc">无法在线报名帮助</label></td>
        </tr>

        <tr class="noborder">
          <td class="vatop rowform"><textarea name="yuliuc"><?php echo stripslashes($voteinfo['yuliuc']);?></textarea></td>
          <td class="vatop tips"></td>
        </tr>
        <tr class="noborder">
          <td colspan="2" class="required"><label for="test_zpnamediy">报名信息自定义 姓名标签</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo stripslashes($voteinfo['zpnamediy']);?>" name="zpnamediy" id="class_zpnamediy" class="txt"></td>
          <td class="vatop tips">不填写则默认显示“姓名”</td>
        </tr>

        <tr class="noborder">
          <td colspan="2" class="required"><label for="test_zpmsdiy">报名信息自定义 描述标签</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo stripslashes($voteinfo['zpmsdiy']);?>" name="zpmsdiy" id="class_zpmsdiy" class="txt"></td>
          <td class="vatop tips">不填写则默认显示“描述”</td>
        </tr>





        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="test_shenhe">报名作品是否需要审核</label></td>
        </tr>

<tr style="background: none repeat scroll 0% 0% rgb(255, 255, 255);" class="noborder">
          <td class="vatop rowform onoff"><label for="openid1" class="cb-enable<?php if($voteinfo['is_sh']==1) { ?> selected<?php } ?>"><span>是</span></label>
            <label for="openid0" class="cb-disable<?php if($voteinfo['is_sh']!=1) { ?> selected<?php } ?>"><span>否</span></label>
            <input id="openid1" name="is_sh"<?php if($voteinfo['is_sh']==1) { ?> checked="checked"<?php } ?> value="1" type="radio">
            <input id="openid0" name="is_sh"<?php if($voteinfo['is_sh']!=1) { ?> checked="checked"<?php } ?> value="0" type="radio"></td>
          <td class="vatop tips"></td>
        </tr>
 
         <tr class="noborder">
          <td colspan="2" class="required"><label for="test_dlggk">独立刮刮卡活动链接</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo stripslashes($voteinfo['yuliud']);?>" name="yuliud" id="class_yuliud" class="txt"></td>
          <td class="vatop tips">不填则投票无奖励</td>
        </tr>

 
      </tbody>
      <tfoot>
        <tr>
          <td colspan="2"><input name="edit_vote" class="btn" type="submit" value="保存" /></td>
        </tr>
      </tfoot>
    </table>
  </form>
</div>
<script type="text/javascript">
$(document).ready(function(){




    $("#submit").click(function(){
        $("#add_form").submit();
    });

    $("input[nc_type='microshop_goods_class_image']").live("change", function(){
var src = getFullPath($(this)[0]);
$(this).parent().prev().find('.low_source').attr('src',src);
$(this).parent().find('input[class="type-file-text"]').val($(this).val());
});


    $('#add_form').validate({
        errorPlacement: function(error, element){
            error.appendTo(element.parent().parent().prev().find('td:first'));
        },
        success: function(label){
            label.addClass('valid');
        },
        rules : {
            title: {
                required : true,
                maxlength : 1000
            },
            yuliuc: {
                required : true,
                maxlength : 1000
            },
            pic: {
                required : true,
                maxlength : 1000
            },
            icon: {
                required : true,
                maxlength : 1000
            },
            content: {
                required : true,
                maxlength : 1000
            },
            tpnub: {
                required : true,
                digits: true,
                min: 1
            },
            ipnubs: {
                required : true,
                digits: true,
                min: 0
            },
            zuopins: {
                required : true,
                digits: true,
                min: 0
            },
            toupiaos: {
                required : true,
                digits: true,
                min: 0
            },
            yuliub: {
                required : true,
                digits: true,
                min: 0
            },
            wxgzts: {
                required : true,
                maxlength : 1000
            },
            wxgzurl: {
                required : true,
                maxlength : 1000
            },
            xntps: {
                digits: true,
                min: 0
            },
            xnlls: {
                digits: true,
                min: 0
            },
            start_time: {
                required : true,
            },
            over_time: {
                required : true,
            },
            vote_time: {
                required : true,
            },
            end_time: {
                required : true,
            }
        },
        messages : {
            title: {
                required : "此项目为必填项",
                maxlength : jQuery.validator.format("内容超出了字符限制，最多")
            },
            yuliuc: {
                required : "此项目为必填项",
                maxlength : jQuery.validator.format("内容超出了字符限制，最多")
            },
            pic: {
                required : "此项目为必填项",
                maxlength : jQuery.validator.format("内容超出了字符限制，最多")
            },
            icon: {
                required : "此项目为必填项",
                maxlength : jQuery.validator.format("内容超出了字符限制，最多")
            },
            content: {
                required : "此项目为必填项",
                maxlength : jQuery.validator.format("内容超出了字符限制，最多")
            },
            tpnub: {
                required : "此项目为必填项",
                digits: "此项目必须为整数数字",
                min : jQuery.validator.format("最小数字为1")
            },
            ipnubs: {
                required : "此项目为必填项",
                digits: "此项目必须为整数数字",
                min : jQuery.validator.format("最小数字为0")
            },
            zuopins: {
                required : "此项目为必填项",
                digits: "此项目必须为整数数字",
                min : jQuery.validator.format("最小数字为0")
            },
            toupiaos: {
                required : "此项目为必填项",
                digits: "此项目必须为整数数字",
                min : jQuery.validator.format("最小数字为0")
            },
            yuliub: {
                required : "此项目为必填项",
                digits: "此项目必须为整数数字",
                min : jQuery.validator.format("最小数字为0")
            },
            wxgzts: {
                required : "此项目为必填项",
                maxlength : jQuery.validator.format("内容超出了字符限制，最多")
            },
            wxgzurl: {
                required : "此项目为必填项",
                maxlength : jQuery.validator.format("内容超出了字符限制，最多")
            },
            xntps: {
                digits: "此项目必须为整数数字",
                min : jQuery.validator.format("最小数字为0")
            },
            xnlls: {
                digits: "此项目必须为整数数字",
                min : jQuery.validator.format("最小数字为0")
            },
            start_time: {
                required : "此项目为必填项",
            },
            yuliua: {
                required : "此项目为必填项",
            },
            vote_time: {
                required : "此项目为必填项",
            },
            end_time: {
                required : "此项目为必填项",
            }
        }
    });
});
</script> 

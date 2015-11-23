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
<div class="h3" style="width:auto;">设置电脑首页</div>
      <ul class="tab-base">
        <li><a href="http://wx.weixinhj.com/hejin_toupiao/pcindexa.htm" target="_blank"><span style="color:#F90307; font-size:16px; font-weight:bolder;">点击获取萌宝活动设置方案</span></a></li>

      </ul>
    </div>
  </div>
  <form id="add_form" method="post" enctype="multipart/form-data" action="">
    <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
    <?php if($sid) { ?><input type="hidden" name="sid" value="<?php echo $sid;?>" /><?php } ?>
    <input type="hidden" name="vid" value="<?php echo $vid;?>" />
    <table class="table tb-type2">
      <tbody>

        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="class_paixu">作品排序模式</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><select id="class_type" name="paixu">
                        <option value="1"<?php if($supply['paixu']==1) { ?> selected="selected"<?php } ?>>票数从高到底</option>
                        <option value="2"<?php if($supply['paixu']==2) { ?> selected="selected"<?php } ?>>报名从晚到早</option>
                        <option value="3"<?php if($supply['paixu']==3) { ?> selected="selected"<?php } ?>>报名从早到晚</option>
                      </select></td>
          <td class="vatop tips"></td>
        </tr>


        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="class_bannerpic">电脑首页头部图片地址</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo strip_tags(stripslashes($supply['bannerpic']));?>" name="bannerpic" id="class_bannerpic" class="txt"></td>
          <td class="vatop tips">修改的本地图片上传到外部图片获取图片链接填入即可&nbsp;&nbsp;<a href="http://tietuku.com" target="_blank">免费外部图床地址</a></td>
        </tr>
        
        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="class_bannergd">电脑首页头部图片高度（请设置数字）</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo strip_tags(stripslashes($supply['bannergd']));?>" name="bannergd" id="class_bannergd" class="txt"></td>
          <td class="vatop tips"></td>
        </tr>


        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="class_bqname">标签名称</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo strip_tags(stripslashes($supply['bqname']));?>" name="bqname" id="class_bqname" class="txt"></td>
          <td class="vatop tips"></td>
        </tr>


        <tr class="noborder">
          <td colspan="2" class="required"><label for="class_footpic">电脑首页底部图片地址</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo strip_tags(stripslashes($supply['footpic']));?>" name="footpic" id="class_footpic" class="txt"></td>
          <td class="vatop tips">修改的本地图片上传到外部图片获取图片链接填入即可&nbsp;&nbsp;<a href="http://tietuku.com" target="_blank">免费外部图床地址</a></td>
        </tr>
        
        <tr class="noborder">
          <td colspan="2" class="required"><label for="class_footgd">电脑首页底部图片高度（请设置数字）</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo strip_tags(stripslashes($supply['footgd']));?>" name="footgd" id="class_footgd" class="txt"></td>
          <td class="vatop tips"></td>
        </tr>

       <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="class_bgcolor">电脑首页背景颜色</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="<?php echo strip_tags(stripslashes($supply['bgcolor']));?>" name="bgcolor" id="class_bgcolor" class="color"></td>
          <td class="vatop tips"></td>
        </tr>

        
        <tr class="noborder">
          <td colspan="2" class="required"><label for="test_content">客服信息</label></td>
        </tr>

        <tr class="noborder">
          <td class="vatop rowform"><textarea name="kefu" style="height:200px;"><?php if($supply['kefu']) { ?><?php echo $supply['kefu'];?><?php } else { ?>1366666666<br>13888888888<br>QQ:237894661<?php } ?></textarea></td>
          <td class="vatop tips">换行请用< br >代码</td>
        </tr>



      </tbody>
      <tfoot>
        <tr>
          <td colspan="2"><input name="up_supply" class="btn" type="submit" value="保存" /></td>
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
            bannerpic: {
                required : true,
                maxlength : 1000
            },
            bannergd: {
                required : true,
                number: true
            },
            bqname: {
                required : true,
                maxlength : 1000
            },
            footgd: {
                number: true
            },
             bgcolor: {
                required : true,
                maxlength : 1000
            },
       },
        messages : {
            bannerpic: {
                required : "此项目为必填项",
                maxlength : jQuery.validator.format("内容超出了字符限制，最多1000")
            },
            bannergd: {
                required : "此项目为必填项",
                number : "此项目必须为整数数字",
            },
            bqname: {
                required : "此项目为必填项",
                maxlength : jQuery.validator.format("内容超出了字符限制，最多1000")
            },
            footgd: {
                number : "此项目必须为整数数字",
                
            },
             bgcolor: {
                required : "此项目为必填项",
                maxlength : jQuery.validator.format("内容超出了字符限制，最多1000")
            },
       }
    });
});
</script> 

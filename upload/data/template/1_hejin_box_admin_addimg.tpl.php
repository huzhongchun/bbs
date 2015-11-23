<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<script src="<?php echo HEJIN_PATH;?>public/admin/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo HEJIN_PATH;?>public/admin/js/jquery.validation.min.js" type="text/javascript"></script>
<script src="<?php echo HEJIN_PATH;?>public/admin/js/admincp.js" type="text/javascript"></script>
<script src="<?php echo HEJIN_PATH;?>public/admin/js/jquery.tooltip.js" type="text/javascript"></script>
<script src="<?php echo HEJIN_PATH;?>public/admin/js/jquery.cookie.js" type="text/javascript"></script>
<link href="<?php echo HEJIN_PATH;?>public/admin/css/skin_0.css" rel="stylesheet" type="text/css" id="cssfile2" />
<link href="<?php echo HEJIN_PATH;?>public/admin/css/style.css" rel="stylesheet" type="text/css"/>


<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
<div class="h3" style="width:auto">添加图文回复</div>
      <ul class="tab-base">
        <li><a href="admin.php?action=plugins&amp;operation=config&amp;do=<?php echo $_GET['do'];?>&amp;identifier=hejin_box&amp;pmod=reply&amp;model=img" class="current"><span>关键字图文回复列表</span></a></li>
      </ul>
    </div>
  </div>
  <form id="add_form" method="post" enctype="multipart/form-data" action="">
    <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
    <input type="hidden" name="type" value="1" />
    <table class="table tb-type2">
      <tbody>
        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="test_keywords">关键字</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="" name="keywords" id="class_name" class="txt"></td>
          <td class="vatop tips">多个关键字，请用逗号隔开</td>
        </tr>

        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="test_title">标题</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="" name="title" id="class_name" class="txt"></td>
          <td class="vatop tips"></td>
        </tr>
        
        <tr class="noborder">
          <td colspan="2"><label for="test_pic">图片外链</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="" name="pic" id="class_name" class="txt"></td>
          <td class="vatop tips">图片尺寸推荐 640px * 355px</td>
        </tr>


        <tr class="noborder">
          <td colspan="2"><label for="test_content">描述</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><textarea name="content" rows="6" class="tarea" id="statistics_code"></textarea>
         </td>
          <td class="vatop tips">仅支持文字</td>
        </tr>

        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="replyurl">指向链接</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="" name="url" id="replyurl" class="txt"></td>
          <td class="vatop tips"></td>
        </tr>



        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="test_state">状态</label></td>
        </tr>

<tr style="background: none repeat scroll 0% 0% rgb(255, 255, 255);" class="noborder">
          <td class="vatop rowform onoff"><label for="state1" class="cb-enable selected"><span>启用</span></label>
            <label for="state0" class="cb-disable "><span>禁用</span></label>
            <input id="state1" name="state" checked="checked" value="1" type="radio">
            <input id="state0" name="state" value="0" type="radio"></td>
          <td class="vatop tips"></td>
        </tr>

 
         <tr>
          <td colspan="2" class="required"><label class="validation" for="sort">排序权重</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input id="sort" name="sort" type="text" class="txt" value="0" /></td>
          <td class="vatop tips">数值越大越排前</td>
        </tr>
 
 
        <tr class="noborder" style="display:none">
          <td colspan="2" class="required"><label class="validation" for="test_openid">是否获取用户openid</label></td>
        </tr>

<tr style="background: none repeat scroll 0% 0% rgb(255, 255, 255);display:none" class="noborder">
          <td class="vatop rowform onoff"><label for="openid1" class="cb-enable"><span>是</span></label>
            <label for="openid0" class="cb-disable selected"><span>否</span></label>
            <input id="openid1" name="is_openid" value="1" type="radio">
            <input id="openid0" name="is_openid" checked="checked" value="0" type="radio"></td>
          <td class="vatop tips"></td>
        </tr>
 
 
      </tbody>
      <tfoot>
        <tr>
          <td colspan="2"><input name="add_reply" class="btn" type="submit" value="保存" /></td>
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
            keywords: {
                required : true,
                maxlength : 255
            },
            title: {
                required : true,
                maxlength : 255
            },
            url: {
                required : true,
                maxlength : 1000
            },
            sort: {
                required : true,
                digits: true,
 },
            state: {
                required : true,
                digits: true,
 },
            is_openid: {
                required : true,
                digits: true,
 },
        },
        messages : {
            keywords: {
                required : "此项为必填项",
                maxlength : jQuery.validator.format("内容超过255字符，请重新修改")
            },
            title: {
                required : "此项为必填项",
                maxlength : jQuery.validator.format("内容超过255字符，请重新修改")
            },
            url: {
                required : "此项为必填项",
                maxlength : jQuery.validator.format("内容超过1000字符，请重新修改")
            },
            sort: {
                required : "此项为必填项",
digits: "此项填写的必须是数字",
},
            state: {
                required : "此项为必填项",
digits: "此项填写的必须是数字",
},
            is_openid: {
                required : "此项为必填项",
digits: "此项填写的必须是数字",
},
        }
    });
});
</script> 

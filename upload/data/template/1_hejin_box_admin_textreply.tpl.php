<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<link href="<?php echo HEJIN_PATH;?>public/admin/css/style.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo HEJIN_PATH;?>public/admin/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo HEJIN_PATH;?>public/admin/js/jquery.validation.min.js" type="text/javascript"></script>
<script src="<?php echo HEJIN_PATH;?>public/admin/js/admincp.js" type="text/javascript"></script>
<script src="<?php echo HEJIN_PATH;?>public/admin/js/jquery.tooltip.js" type="text/javascript"></script>
<script src="<?php echo HEJIN_PATH;?>public/admin/js/jquery.cookie.js" type="text/javascript"></script>
<link href="<?php echo HEJIN_PATH;?>public/admin/css/skin_0.css" rel="stylesheet" type="text/css" id="cssfile2" />

<div class="page">
<div class="fixed-bar">
    <div class="item-title">
      <div class="h3" style="width:auto;">关键字文本回复列表</div>
      <ul class="tab-base">
        <li><a href="admin.php?action=plugins&amp;operation=config&amp;do=<?php echo $_GET['do'];?>&amp;identifier=hejin_box&amp;pmod=replytext&amp;model=addtext" class="current"><span>添加文本回复</span></a></li>
      </ul>
    </div>
  </div>
 
<table class="table tb-type2" id="prompt">
    <tbody>
      <tr style="background: none repeat scroll 0% 0% rgb(255, 255, 255);" class="space odd">
        <th colspan="12" class="nobg"><div class="title">
            <h5>操作提示</h5>
            <span class="arrow"></span></div></th>
      </tr>
      <tr style="background: none repeat scroll 0% 0% rgb(255, 255, 255);" class="odd">
        <td><ul>
            <li>文本回复关键字不能有任何重复！</li>
          </ul></td>
      </tr>
    </tbody>
  </table>
  
  <form id="list_form" method='post'>
    <input id="class_id" name="class_id" type="hidden" />
    <table class="table tb-type2">
      <thead>
        
        <tr class="thead">
           <th style="width:2%"></th>
         <th style="width:16%">关键字</th>
          <th style="width:46%">文本内容</th>
  <th style="width:8%">状态</th>
  <th style="width:8%">排序权重</th>
  <th style="width:20%; text-align:center">操作</th>
        </tr>
      </thead>
      <tbody>
      
      <?php if(is_array($replyes)) foreach($replyes as $reply) { ?>                        <tr class="hover edit">
           <td></td>
  <td><?php echo stripslashes($reply['keywords']);?></td>
  <td><?php echo stripslashes($reply['content']);?></td>
  <td><?php if($reply['state']) { ?>启用<?php } else { ?><font color="#FF0000">禁用</font><?php } ?></td>
  <td><?php echo $reply['sort'];?></td>
  <td class='align-center'>
  	<a href="<?php echo $SELF;?>?action=plugins&operation=config&do=<?php echo $_GET['do'];?>&identifier=hejin_box&pmod=replytext&model=edittext&rid=<?php echo $reply['id'];?>">修改</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $SELF;?>?action=plugins&operation=config&do=<?php echo $_GET['do'];?>&identifier=hejin_box&pmod=replytext&model=del&rid=<?php echo $reply['id'];?>&formhash=<?php echo FORMHASH;?>" onclick="return confirm(&quot;您确定要删除此条数据吗？&quot;);">删除</a>
  </td>
        </tr>
         <?php } ?>                   
                
                      </tbody>
            <tfoot>
        <tr class="tfoot">
          <td>
          </td>
          <td id="batchAction" colspan="15">
            <div class="pagination"><ul><?php echo $page_string;?></ul></div></td>
        </tr>
      </tfoot>
          </table>
  </form>
</div>

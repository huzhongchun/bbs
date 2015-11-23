<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<link href="<?php echo HEJIN_PATH;?>public/admin/css/style.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo HEJIN_PATH;?>public/admin/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo HEJIN_PATH;?>public/admin/js/jquery.validation.min.js" type="text/javascript"></script>
<script src="<?php echo HEJIN_PATH;?>public/admin/js/admincp.js" type="text/javascript"></script>
<script src="<?php echo HEJIN_PATH;?>public/admin/js/jquery.tooltip.js" type="text/javascript"></script>
<script src="<?php echo HEJIN_PATH;?>public/admin/js/jquery.cookie.js" type="text/javascript"></script>
<link href="<?php echo HEJIN_PATH;?>public/admin/css/skin_0.css" rel="stylesheet" type="text/css" id="cssfile2" />
<script type="text/javascript">
function submit_delete_batch(){
    var items = '';
    $('.checkitem:checked').each(function(){
        items += this.value + ',';
    });
    if(items != '') {
        items = items.substr(0, (items.length - 1));
        submit_delete(items);
    }  
    else {
        alert('!clickok!');
    }
}
</script>

<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <div class="h3" style="width:auto;">待审核作品</div>
      <ul class="tab-base">
        <li><a href="admin.php?action=plugins&amp;operation=config&amp;do=<?php echo $_GET['do'];?>&amp;identifier=hejin_toupiao&amp;pmod=toupiao&amp;model=zuopinsh&amp;vid=<?php echo $vid;?>"><span>已审核作品</span></a></li>
<li><a href="admin.php?action=plugins&amp;operation=config&amp;do=<?php echo $_GET['do'];?>&amp;identifier=hejin_toupiao&amp;pmod=toupiao&amp;model=addzp&amp;vid=<?php echo $vid;?>"><span>手工添加参赛作品</span></a></li>

      </ul>
    </div>
  </div>
  
  
  <form id="list_form" method='post'>
    <input id="class_id" name="class_id" type="hidden" />
    <table class="table tb-type2">
      <thead>
        
        <tr class="thead">
          <th width="5%">ID</th>
          <th width="10%">作品姓名</th>
          <th width="10%">手机号码</th>
          <th width="20%">作品图片</th>
          <th width="20%">作品简介</th>
          <th width="10%">操作</th>
        </tr>
      </thead>
      <tbody>
      
      <?php if(is_array($stlists)) foreach($stlists as $stinfo) { ?>                        <tr class="hover edit">
  <td><?php echo $vid*10000+$stinfo['id'];?></td>
  <td><?php echo strip_tags(stripslashes($stinfo['zpname']));?></td>
  <td><?php echo strip_tags(stripslashes($stinfo['telphone']));?></td>
  <td><?php if($stinfo['pica']) { ?><span class="type-file-show" style="float:left !important;"> <img class="show_image" src="<?php echo HEJIN_PATH;?>public/admin/images/preview.png">
            <div class="type-file-preview">
            <?php if(strpos($stinfo['pica'], '://')==false) { ?>
                            <img src="<?php echo HEJIN_PATH;?><?php echo stripslashes($stinfo['pica']);?>" width="100">
                            <?php } else { ?>
                            <img src="<?php echo stripslashes($stinfo['pica']);?>" width="100">
                            <?php } ?>
                            
                          </div>
            </span><?php } if($stinfo['picb']) { ?><span class="type-file-show" style="float:left !important;"> <img class="show_image" src="<?php echo HEJIN_PATH;?>public/admin/images/preview.png">
            <div class="type-file-preview">
                            <?php if(strpos($stinfo['picb'], '://')==false) { ?>
                            <img src="<?php echo HEJIN_PATH;?><?php echo stripslashes($stinfo['picb']);?>" width="100">
                            <?php } else { ?>
                            <img src="<?php echo stripslashes($stinfo['picb']);?>" width="100">
                            <?php } ?>
                          </div>
            </span><?php } if($stinfo['picc']) { ?><span class="type-file-show" style="float:left !important;"> <img class="show_image" src="<?php echo HEJIN_PATH;?>public/admin/images/preview.png">
            <div class="type-file-preview">
                            <?php if(strpos($stinfo['picc'], '://')==false) { ?>
                            <img src="<?php echo HEJIN_PATH;?><?php echo stripslashes($stinfo['picc']);?>" width="100">
                            <?php } else { ?>
                            <img src="<?php echo stripslashes($stinfo['picc']);?>" width="100">
                            <?php } ?>
                          </div>
            </span><?php } if($stinfo['picd']) { ?><span class="type-file-show" style="float:left !important;"> <img class="show_image" src="<?php echo HEJIN_PATH;?>public/admin/images/preview.png">
            <div class="type-file-preview">
                            <?php if(strpos($stinfo['picd'], '://')==false) { ?>
                            <img src="<?php echo HEJIN_PATH;?><?php echo stripslashes($stinfo['picd']);?>" width="100">
                            <?php } else { ?>
                            <img src="<?php echo stripslashes($stinfo['picd']);?>" width="100">
                            <?php } ?>
                          </div>
            </span><?php } if($stinfo['pice']) { ?><span class="type-file-show" style="float:left !important;"> <img class="show_image" src="<?php echo HEJIN_PATH;?>public/admin/images/preview.png">
            <div class="type-file-preview">
                             <?php if(strpos($stinfo['pice'], '://')==false) { ?>
                            <img src="<?php echo HEJIN_PATH;?><?php echo stripslashes($stinfo['pice']);?>" width="100">
                            <?php } else { ?>
                            <img src="<?php echo stripslashes($stinfo['pice']);?>" width="100">
                            <?php } ?>
                          </div>
            </span><?php } ?></td>
  <td><?php echo strip_tags(stripslashes($stinfo['content']));?></td>
         
  <td>
          <a href="admin.php?action=plugins&amp;operation=config&amp;do=<?php echo $_GET['do'];?>&amp;identifier=hejin_toupiao&amp;pmod=toupiao&amp;model=shzp&amp;zid=<?php echo $stinfo['id'];?>&amp;vid=<?php echo $stinfo['vid'];?>&amp;formhash=<?php echo FORMHASH;?>" onclick="return confirm(&quot;您确定要审核通过此作品吗？&quot;);">通过审核</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	<a href="admin.php?action=plugins&amp;operation=config&amp;do=<?php echo $_GET['do'];?>&amp;identifier=hejin_toupiao&amp;pmod=toupiao&amp;model=delzp&amp;zid=<?php echo $stinfo['id'];?>&amp;vid=<?php echo $stinfo['vid'];?>&amp;formhash=<?php echo FORMHASH;?>" onclick="return confirm(&quot;您确定要删除吗？&quot;);">删除</a>
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

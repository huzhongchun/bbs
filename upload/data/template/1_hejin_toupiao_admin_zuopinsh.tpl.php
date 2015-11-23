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
      <div class="h3" style="width:auto;">已审核作品</div>
      <form id="search" method="post" action="">
      <ul class="tab-base">
        <li><a href="admin.php?action=plugins&amp;operation=config&amp;do=<?php echo $_GET['do'];?>&amp;identifier=hejin_toupiao&amp;pmod=toupiao&amp;model=zuopindsh&amp;vid=<?php echo $vid;?>"><span>待审核作品</span></a></li>
<li><a href="admin.php?action=plugins&amp;operation=config&amp;do=<?php echo $_GET['do'];?>&amp;identifier=hejin_toupiao&amp;pmod=toupiao&amp;model=addzp&amp;vid=<?php echo $vid;?>"><span>手工添加参赛作品</span></a></li>
<li><a href="admin.php?action=plugins&amp;operation=config&amp;do=<?php echo $_GET['do'];?>&amp;identifier=hejin_toupiao&amp;pmod=toupiao&amp;model=zpphb&amp;vid=<?php echo $vid;?>"><span>前300名排行榜</span></a></li>

<li><a href="<?php echo HEJIN_URL;?>&model=daochu&vid=<?php echo $vid;?>"><span style=" color:#F00">导出排行榜EXCEL（插件设置中可修改导出数量）</span></a></li>
  
<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=" color:#F00">请输入作品ID搜索</span></li>
<li><input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
    <input type="hidden" name="vid" value="<?php echo $vid;?>" /><input type="text" value="" name="zid"></li>
<li>&nbsp;&nbsp;<input name="search" type="submit" value="SEARCH" /></li>
    
      </ul>
    </div>
  </div>
  </form>
  
  <form id="list_form" method='post'>
    <input id="class_id" name="class_id" type="hidden" />
    <table class="table tb-type2">
      <thead>
        
        <tr class="thead">
          <th width="5%">ID</th>
          <th width="10%">作品姓名</th>
          <th width="10%">手机号码</th>
          <th width="15%">作品图片</th>
          <th width="15%">作品简介</th>
  <th width="5%">浏览量</th>
  <th width="5%"><span style="color:#F00">有效票数</span></th>
  <th width="5%">无效票数</th>
          <th width="25%">操作</th>
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
  <td><?php echo $stinfo['liulans'];?></td>
  <td><span style="color:#F00"><?php echo $stinfo['toupiaos'];?></span></td>
  <td><?php if($stinfo['yuliua']>$stinfo['toupiaos']) { echo $stinfo['yuliua']-$stinfo['toupiaos'];?><?php } else { ?>0<?php } ?></td>
  <td>
                    <a href="<?php echo HEJIN_URL;?>&model=dcexcel&zid=<?php echo $stinfo['id'];?>">导出投票详情</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="admin.php?action=plugins&amp;operation=config&amp;do=<?php echo $_GET['do'];?>&amp;identifier=hejin_toupiao&amp;pmod=toupiao&amp;model=tpjles&amp;zid=<?php echo $stinfo['id'];?>">投票记录</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

          <a href="admin.php?action=plugins&amp;operation=config&amp;do=<?php echo $_GET['do'];?>&amp;identifier=hejin_toupiao&amp;pmod=toupiao&amp;model=editzp&amp;zid=<?php echo $stinfo['id'];?>">修改</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	<a href="admin.php?action=plugins&amp;operation=config&amp;do=<?php echo $_GET['do'];?>&amp;identifier=hejin_toupiao&amp;pmod=toupiao&amp;model=over&amp;zid=<?php echo $stinfo['id'];?>&amp;vid=<?php echo $stinfo['vid'];?>&amp;formhash=<?php echo FORMHASH;?>" onclick="return confirm(&quot;您确定要屏蔽此作品吗？&quot;);">屏蔽</a>
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

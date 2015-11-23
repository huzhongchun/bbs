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
      <div class="h3" style="width:auto;">投票活动管理</div>
      <ul class="tab-base">
        <li><a href="admin.php?action=plugins&amp;operation=config&amp;do=<?php echo $_GET['do'];?>&amp;identifier=hejin_toupiao&amp;pmod=toupiao" class="current"><span>投票活动列表</span></a></li>
<li><a href="admin.php?action=plugins&amp;operation=config&amp;do=<?php echo $_GET['do'];?>&amp;identifier=hejin_toupiao&amp;pmod=toupiao&amp;model=addvote"><span>添加投票活动</span></a></li>

<li>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo HEJIN_URL;?>:upload" target="_blank"><span style="color:#F00; font-weight:bolder;">检测是否支持图床上传</span></a></li>

<li>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://wx.weixinhj.com/hejin_toupiao/jcabc.htm" target="_blank"><span style="color:#F00; font-weight:bolder;">如何将投票活动放入公众的教程</span></a></li>
      </ul>
    </div>
  </div>
  
  
  <form id="list_form" method='post'>
    <input id="class_id" name="class_id" type="hidden" />
    <table class="table tb-type2">
      <thead>
        
        <tr class="thead">
          <th width="5%">ID</th>
          <th width="10%">活动名称</th>
          <th width="30%" style="text-align:center;">管理</th>
          <th width="5%">真实浏览量</th>
          <th width="5%">真实投票数</th>
          <th width="10%">活动状态</th>
          <th width="10%">审核状态</th>
  <th width="15%" class="align-center">操作</th>
        </tr>
      </thead>
      <tbody>
      
      <?php if(is_array($stlists)) foreach($stlists as $stinfo) { ?>                        <tr class="hover edit" style="height:80px;">
  <td><?php echo $stinfo['id'];?></td>
  <td><?php echo stripslashes($stinfo['title']);?></td>
  <td style="text-align:center; line-height:30px;"><a href="admin.php?action=plugins&amp;operation=config&amp;do=<?php echo $_GET['do'];?>&amp;identifier=hejin_toupiao&amp;pmod=toupiao&amp;model=zuopinsh&amp;vid=<?php echo $stinfo['id'];?>">已审核作品</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="admin.php?action=plugins&amp;operation=config&amp;do=<?php echo $_GET['do'];?>&amp;identifier=hejin_toupiao&amp;pmod=toupiao&amp;model=zuopindsh&amp;vid=<?php echo $stinfo['id'];?>">待审核作品 (<?php $dshzps = C::t('#hejin_toupiao#hjtp_zuopins')->fetch_dsh_vid(intval($stinfo['id']));?><?php echo count($dshzps);?>)</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="admin.php?action=plugins&amp;operation=config&amp;do=<?php echo $_GET['do'];?>&amp;identifier=hejin_toupiao&amp;pmod=toupiao&amp;model=pbzp&amp;vid=<?php echo $stinfo['id'];?>">已屏蔽 (<?php $pbzps = C::t('#hejin_toupiao#hjtp_zuopins')->fetch_over_all_vid(intval($stinfo['id']));?><?php echo count($pbzps);?>)</a><br><a href="admin.php?action=plugins&amp;operation=config&amp;do=<?php echo $_GET['do'];?>&amp;identifier=hejin_toupiao&amp;pmod=toupiao&amp;model=zdpbzp&amp;vid=<?php echo $stinfo['id'];?>">嫌疑自动屏蔽 (<?php $pbzps = C::t('#hejin_toupiao#hjtp_zuopins')->fetch_shua_all_vid(intval($stinfo['id']));?><?php echo count($pbzps);?>)</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="admin.php?action=plugins&amp;operation=config&amp;do=<?php echo $_GET['do'];?>&amp;identifier=hejin_toupiao&amp;pmod=toupiao&amp;model=pcindex&amp;vid=<?php echo $stinfo['id'];?>"><span style="color:#FB0307; font-weight:bolder">设置电脑首页</span></a></td>
  <td><?php echo $stinfo['clicks'];?></td>
  <td><?php echo $stinfo['toupiaos'];?></td>
  <td><?php if($stinfo['start_time']<time() && $stinfo['over_time']>time()) { ?><span style="color: #FB6600;font-weight: bold;
}">报名中</span><?php } else { ?><span style="color: #FB6600;font-weight: bold;
}">非报名期</span><?php } ?>&nbsp;&nbsp;<?php if($stinfo['vote_time']<time() && $stinfo['end_time']>time()) { ?><span style="color: #FB6600;font-weight: bold;
}">投票中</span><?php } else { ?><span style="color: #FB6600;font-weight: bold;
}">非投票期</span><?php } ?></td>
  <td><?php if($stinfo['is_sh']==1) { ?><span style="color: #FB6600;font-weight: bold;
}">报名需审核</span><?php } else { if($stinfo['is_sh']==0) { ?>无需审核<?php } } ?></td>
         
  <td class='align-center' style="line-height:30px;">
  	<a target='_blank' href="<?php echo HEJIN_URL;?>&model=index&vid=<?php echo $stinfo['id'];?>">PC首页</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a target='_blank' href="<?php echo HEJIN_URL;?>&model=vote&vid=<?php echo $stinfo['id'];?>">右击复制链接</a><br>
  	<a href="admin.php?action=plugins&amp;operation=config&amp;do=<?php echo $_GET['do'];?>&amp;identifier=hejin_toupiao&amp;pmod=toupiao&amp;model=edit&amp;vid=<?php echo $stinfo['id'];?>">修改</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	<?php if($plugin['hjtp_kqdel']) { ?><a href="admin.php?action=plugins&amp;operation=config&amp;do=<?php echo $_GET['do'];?>&amp;identifier=hejin_toupiao&amp;pmod=toupiao&amp;model=del&amp;vid=<?php echo $stinfo['id'];?>&amp;formhash=<?php echo FORMHASH;?>" onclick="return confirm(&quot;您确定要删除吗？&quot;);">删除</a><?php } else { ?><span style="color: #F00;font-weight: bold;
}">禁止删除</span><?php } ?>
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

<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="__PUBLIC__/Images/css1/css.css" rel="stylesheet" type="text/css">
</head>

<body>
<table class="table" cellspacing="1" cellpadding="2" width="99%" align="center" border="0">
  <tbody>
    <tr>
      <th class="bg_tr" align="left" colspan="6" height="25">会员列表</th>
    </tr>
    <tr>
      <td class="td_bg" width="14%" height="23" align="center">会员名称</td>
	  <td class="td_bg" width="14%" height="23" align="center">会员电话</td>
	  <td class="td_bg" width="14%" height="23" align="center">会员邮箱</td>
	  <td class="td_bg" width="14%" height="23" align="center">会员头像</td>
	  <td class="td_bg" width="14%" height="23" align="center">会员地址</td>
	  <td class="td_bg" width="16%" height="23" align="center">操作</td>
   </tr>
      
      
   <?php if(is_array($rs)): foreach($rs as $key=>$val): ?><tr>
      <td class="td_bg" width="14%" height="23" align="center"><?php echo ($val["uName"]); ?></td>
	  <td class="td_bg" width="14%" height="23" align="center"><?php echo ($val["uTel"]); ?></td>
	  <td class="td_bg" width="14%" height="23" align="center"><?php echo ($val["uEmail"]); ?></td>
	  <td class="td_bg" width="14%" height="23" align="center"><img src="__ROOT__/<?php echo ($val["uPic"]); ?>" width="80" height="60"></td>
	  <td class="td_bg" width="14%" height="23" align="center"><?php echo ($val["uAddress"]); ?></td>
	  <td class="td_bg" width="16%" height="23" align="center">
              
	  <a href="__URL__/del/uId/<?php echo ($val["uId"]); ?>">删除</a> 
	  | 
	  <a href="__URL__/updateView/uId/<?php echo ($val["uId"]); ?>">修改</a>
	  </td>
   </tr><?php endforeach; endif; ?>
      
      
  <tr>
      <th class="bg_tr" style="font-size:14px;" align="center" colspan="6" height="25"><?php echo ($show); ?></th>
    </tr>
	
  </tbody>
</table>

</body>
</html>
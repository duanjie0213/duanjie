<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "
    http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>个人信息管理-用户中心-3C商城</title>
        <link rel="stylesheet" type="text/css" href="__SKIN__plugin/ui/themes/__THEME__/easyui.css" />
<link rel="stylesheet" type="text/css" href="__SKIN__plugin/ui/themes/icon.css" />
<script src="__SKIN__plugin/ui/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="__SKIN__plugin/ui/jquery.easyui.min.js" type="text/javascript"></script>
<script src="__SKIN__plugin/ui/easyui-lang-zh_CN.js" type="text/javascript"></script>
<style type="text/css">
    *{margin:0; padding:0; color:#363636;}
    a{text-decoration:none; color:#000;}
</style>
        <link href="__SKIN__css/ucentermenu.css" rel="stylesheet" type="text/css" />
        <link href="__SKIN__css/ucenter.css" rel="stylesheet" type="text/css" />
        <link href="__SKIN__css/header.css" rel="stylesheet" type="text/css" />
        <link href="__SKIN__css/reset.css" rel="stylesheet" type="text/css" />
        <script src="__SKIN__js/jq.js" type="text/javascript"></script>

        <style>
            .table-form tr th {
                text-align: center;
                height: 24px;
                line-height: 24px
            }
        </style>
    </head>
    <body>
        <!--顶部导航开始-->
<div class="mini-nav">
    <div class="mini-main">
        <div class="fast-nav">
            <?php if($_USER[id]): ?><span 
                    <?php if($_USER[sex] == 1): ?>class="usericon1"
                    <?php elseif($_USER[sex] == 2): ?>
                    class="usericon"
                    <?php else: endif; ?>
                    >欢迎你:<?php echo ($_USER[username]); ?></span> | <a href="<?php echo U('User/logout');?>">退出登录</a>
            <?php else: ?>
            <a href="<?php echo U('User/login');?>">登录</a> | <a href="<?php echo U('User/register');?>">免费注册</a><?php endif; ?>
            | <a href="<?php echo U('User/ucenter');?>">会员中心</a> | <a href="<?php echo U('shoppingflow/step',array('step'=>'shoppingcar'));?>">购物车</a> | <a href="">帮助中心</a>
        </div>
        <div class="date">
            <?php echo ($nowtime); ?>
        </div>
    </div>
</div>
<!--顶部导航结束-->
<div class="wrap">
    <!--头部开始-->
    <div class="header">
        <div class="header-top">
            <h1><a href="__APPURL__"><img src="__SKIN__images/index_03.jpg" alt="" /></a></h1>
            <div class="searchform">
                <div class="form">
                    <form name="f1" method="post" action="<?php echo U('Index/search');?>">
                        <input type="text" name="keyword" class="keyword" />
                        <input type="submit" name="s1" value="" class="searchbtn"/>
                    </form>
                </div>
            </div>
        </div>
        <div class="nav">
            <div class="allcate">
            </div>
            <ul class="navigator">
                <?php if(is_array($navdata)): $i = 0; $__LIST__ = $navdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><li class="item"><a href="<?php echo U('Index/lists',array('catid'=>$item[id]));?>"><?php echo ($item[catename]); ?></a></li>
                    <li class="item">|</li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
    <!--头部结束-->
        <div class="position">
            <h6>当前位置：</h6><a href="__APPURL__">首页 </a><span>&gt;</span><a href="<?php echo U('User/ucenter');?>"> 用户中心 </a><span>&gt;</span><a href="<?php echo U('User/ucenter',array('option'=>'selforder'));?>"> 个人订单管理</a>
        </div>
        <div class="main">
            <div class="left">
    <!--当前分类开始-->
    <div class="currencat">
        <h3><span>用户菜单</span></h3>
        <ul class="cat">
            <li class="item"><h4
                    <?php if($_GET['option']== 'selfinfo'): ?>class="current"<?php endif; ?>
                    ><a href="<?php echo U('User/ucenter',array('option'=>'selfinfo'));?>">个人信息</a></h4></li>
            <li class="item"><h4
                    <?php if($_GET['option']== 'modifypwd'): ?>class="current"<?php endif; ?>
                    ><a href="<?php echo U('User/ucenter',array('option'=>'modifypwd'));?>">修改密码</a></h4></li>
            <li class="item"><h4><a href="<?php echo U('Shoppingflow/step',array('step'=>'shoppingcar'));?>">购物车</a></h4></li>
            <li class="item"><h4
                    <?php if($_GET['option']== 'selforder'): ?>class="current"<?php endif; ?>
                    ><a href="<?php echo U('User/ucenter',array('option'=>'selforder'));?>">订单</a></h4></li>
            <li class="item"><h4
                    <?php if(($_GET['option']== 'selfaddress') OR ($_GET['option']== 'addaddress')): ?>class="current"<?php endif; ?>
                    ><a href="<?php echo U('User/ucenter',array('option'=>'selfaddress'));?>">收货地址</a></h4></li>
            <li class="item"><h4
                    <?php if($_GET['option']== 'selffavor'): ?>class="current"<?php endif; ?>
                    ><a href="<?php echo U('User/ucenter',array('option'=>'selffavor'));?>">我的收藏</a></h4></li>
            <li class="item"><h4
                    <?php if($_GET['option']== 'selfcomment'): ?>class="current"<?php endif; ?>
                    ><a href="<?php echo U('User/ucenter',array('option'=>'selfcomment'));?>">我的评论</a></h4></li>                                                        
        </ul>
        <div class="curcatbt">
        </div>
    </div>
</div>
            <div class="right">
                <form name="f1" action="<?php echo U("Shoppingflow/step", array('step' =>'shippingtype'));?>" method="post" enctype="multipart/form-data">   
                      <table class="table-form" border="0" width="100%">
                        <tr>
                            <th style="width:20px;">id</th>
                            <th>下单时间</th>
                            <th>付款金额</th>
                            <th>订单状态</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($orderdata)): $i = 0; $__LIST__ = $orderdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr>
                                <td align="center"><?php echo ($item[id]); ?></td> 
                                <td><?php echo (date('Y-m-d H-i-s',$item[ordertime])); ?></td>
                                <td><span style="color:red">￥</span><?php echo ($item[totalprice]); ?></td>
                                <td><?php echo ($item[state]); ?></td>
                                <td align="center"><a href="<?php echo U('User/ucenter',array(option=>'orderdetail','orderid'=>$item[id]));?>"><span style="color:red">查看订单详情</span></a>&nbsp;&nbsp;<a href="<?php echo U('Shoppingflow/step',array(step=>'nextstep',nextstep=>$item[nextstep],orderid=>$item[id]));?>"><span style="color:red">继续操作</span></a></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table> 
                </form> 
                <div id="page" style="margin-top:15px;">
                    <?php echo ($pageshow); ?>
                </div>
            </div>
        </div>
        <div class="footer">
    <img src="__SKIN__images/index_77.gif" width="1000" height="282" alt="" />
</div>
    </body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>无标题文档</title>
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/book.css" />
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/book_list.css" />

    </head>

    <body id="book">
        <!--快捷访问栏开始-->
        <div id="shortcut">
            <div class="page_width">
                <ul>
                    <li class="welcome">您好！欢迎来到京东商城！<span><a href="#">[请登录]</a>，新用户？<a href="#" class="link_reg">[免费注册]</a></span></li>
                    <li class="my_order"><a href="#">我的订单</a></li>
                    <li><a href="#">我的京东</a></li>
                    <li><a href="#" target="_blank">装机大师</a></li>
                    <li><a href="#" target="_blank">礼品卡</a></li>
                    <li><a href="#" target="_blank">企业客户</a></li>
                    <li class="sub">
                        <a href="#" target="_blank">帮助中心</a><span class="arrow">&nbsp;</span>
                    </li>
                </ul>
                <span class="clear"></span>
            </div>
        </div>
        <!--头部导航开始-->
        <div id="header" class="page_width">
            <div id="logo">
                <a href="#"><img src="__PUBLIC__/home/images/logo.gif"width="251" height="46"/></a>
            </div>
            <div id="nav">
                <div id="nav_index"><a href="#">首页</a></div>
                <div id="nav_curr"><a href="#">图书</a></div>
                <div id="nav_ext">
                    <ul>
                        <li id="nav_brand" class="ext_first"><a href="#">品牌直销</a></li>
                        <li id="nav_tuan"><a href="#">团购</a></li>
                        <li id="nav_auction"><a href="#">夺宝岛</a></li>
                        <li id="nav_read"><a href="#">在线读书</a></li>
                        <li id="nav_club"><a href="#">京东社区</a></li>
                        <li id="nav_category"><a href="#">全部分类</a></li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
            <div id="book_search">
                <div id="allsort">
                    <div id="more_sort">
                        <strong>全部商品分类</strong>
                        <div id="extra">&nbsp;</div>
                    </div>
                </div>
                <div id="search">
                    <div id="sub_search">
                        <input type="text" id="keyword" value="男孩" onfocus="this.value = ''" onblur="this.value = '男孩'" />
                    </div>
                    <input type="submit" id="btn_search" value="搜 索"/>
                </div>
                <div id="advance">高级搜索
                </div>
                <ul id="mycart">
                    <li id="cart_info">购物车<b><font color="#066FC9">0</font></b>件</li>
                    <li><font color="#ffffff">去结算</font></li>
                </ul>
            </div>
            <div id="hot_words">
                <div id="left_corner"></div>
                <div id="words">
                    小说 | 文学 | 经济 | 管理 | 励志与成功 | 生活 | 旅游 | 少儿 | 历史 | 政治军事 | 外语学习 | 科技 | 计算机与互联网 | 图书销售榜 | 特价书 | 所有图书分类
                </div>
                <div id="right_corner"></div>
            </div>
        </div>
        <!--头部导航结束-->
        <div class="clear"></div>
        <!--位置-->
        <div id="position" class="page_width">
            <ul>
                <li><a href="#">首页</a></li>
                <li>&gt;</li>
                <li><a href = "#">图书</a></li>
                <li>&gt;</li>
                <li><a href="#">小说</a></li>
                <li>&gt;</li>
                <li><a href="#">中国当代小说</a></li>
            </ul>
        </div>
        <!--主体main部分开始-->
        <div class="clear"></div>

        <div id="main" class="page_width">
            <!--左侧开始-->
            <div id="left_list">
                <div id="same_sort">
                    <div class="book_tit" style="width:209px;"><h2>浏览同级分类<br /><span>Browse other categories</span></h2></div>
                    <div class="book_content">
                        <ul>
                            <!-- 子类型显示 左侧菜单 -->
                            
                            <?php if(is_array($rs)): foreach($rs as $key=>$val): ?><li><a href='#'><?php echo ($val["cName"]); ?></a></li><?php endforeach; endif; ?>
                        </ul>
                        <div class="clear"></div>
                        <div class="extra"><a href="#">返回上级分类&gt;&gt;</a></div>
                    </div>
                </div>	

                <div class="books">
                    <div class="book_title">
                        <h2>新书推荐<br /><span>New Releases</span></h2>
                    </div>
                    <div class="book_info">					
                        <div class="book_pic">
                            <div class=""><a href="ipad.html" target="_blank"><img src="__PUBLIC__/home/img/book_59.jpg"/></a></div>
                        </div>
                        <div class="book_text">
                            <div class="book_name"><a href="ipad.html" target="_blank"><font color="#FF0000">《古炉》（贾平凹）</font></a></div>
                            <div class="book_intr">　　《<古炉>（贾平凹）》的故事发生在陕西一个叫“古...</div>
                            <div class="book_more"><a href="#" target="_blank">深度了解&gt;&gt;</a></div>
                        </div>	
                    </div>
                </div>

                <div class="books">
                    <div class="book_title">
                        <h2>重磅好书<br /><span>Strongly Recommended Books</span></h2>
                    </div>
                    <div class="book_info">					
                        <div class="book_pic">
                            <div class=""><a href="ipad.html" target="_blank"><img src="__PUBLIC__/home/img/book_60.jpg"/></a></div>
                        </div>
                        <div class="book_text">
                            <div class="book_name"><a href="ipad.html" target="_blank"><font color="#FF0000">把男孩培养成男孩:培</font></a></div>
                            <div class="book_intr">　　男孩的童年时光就应该是这样：自由自在，充满了欢声...</div>
                            <div class="book_more"><a href="#" target="_blank">深度了解&gt;&gt;</a></div>
                        </div>	
                    </div>
                </div>

                <div class="ad_left_list">
                    <div class=""><a href="#" target="_blank"><img src="__PUBLIC__/home/img/book_61.jpg" /></a></div>
                    <div class=""><a href="#" target="_blank"><img src="__PUBLIC__/home/img/book_47.jpg"></a></div>
                </div>

            </div>
            <!--左侧结束-->

            <!--右侧开始-->    
            <div id="right_list">

                <div id="filter">
                    <div class="fore item">排序：</div>
                    <ul class="item tab">
                        <li id='filter-curr' class='down'><b></b><a href='#'>销售排行</a><span></span></li>
                        <li class='up price'><b></b><a href="#">价格</a><span></span></li>
                        <li  class="up discount"><b></b><a href='#'>折扣</a><span></span></li>
                        <li class="down"><b></b><a href='#'>好评度</a><span></span></li>
                        <li  class='down'><b></b><a href='#'>上架时间</a><span></span></li>
                        <li  class="down"><b></b><a href='#'>出版时间</a><span></span></li>
                    </ul>
                    <span class="clear"></span>
                </div>

                <div class="page">
                    <img src="__PUBLIC__/home/images/page.jpeg" />
                </div>

                <div class="clear"></div>

                <div class="product_list">
                    
                    <!-------------- 书籍列表----------------------->
                    
                    <?php if(is_array($rs_1)): foreach($rs_1 as $key=>$v1): ?><div class="pro_item">
                            <div class="pro_picture"><a href="__URL__/bookDetail/bId/<?php echo ($v1["bId"]); ?>"><img src="__ROOT__/<?php echo ($v1["bImg"]); ?>" /></a></div>
                            <div class="pro_info">
                                <div class="pro_up">
                                    <div class="bookName"><a href="__URL__/bookDetail/bId/<?php echo ($v1["bId"]); ?>"><?php echo ($v1["bName"]); ?></a></div>
                                    <div class="author">作&nbsp;&nbsp;&nbsp;&nbsp;者：<span><?php echo ($v1["bAuth"]); ?></span> 著，译<br />出&nbsp;版&nbsp;社：<span><?php echo ($v1["pName"]); ?></span><br /></div>
                                </div>
                                <div class="pro_down">
                                    <div class="pro_left">
                                        出版时间：<?php echo ($v1["bDate"]); ?><br />
                                        定&nbsp;&nbsp;&nbsp;&nbsp;价：<s>￥<?php echo ($v1["bMprice"]); ?></s>
                                    </div>
                                    <div class="pro_right">
                                        顾客评价：<span class="star">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>（<span>已有96人评价</span>）<br />
                                        会员价：<b><font>￥<?php echo ($v1["bJDprice"]); ?></font></b><span class="user_price"></span> 京东价：<b>￥<?php echo ($v1["bJDprice"]); ?></b>（43折)
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="book_btn">
                                    <a href="#" class="buy"></a><input type="button" value="收藏" class="favorite" />
                                </div>
                            </div>            
                        </div><?php endforeach; endif; ?>   
                    <!--------------------------------->
                </div><!--列表结束-->

                <div class="page">
                    <img src="__PUBLIC__/home/images/page.jpeg" />
                </div>

            </div>
            <!--右侧结束-->
        </div>

        <div class="clear"></div>
        <!--服务部分开始-->
        <div class="page_width">
            <div id="service">
                <dl class="fore1">
                    <dt><b></b><strong>购物指南</strong></dt>
                    <dd>
                        <div class="item"><a href="#" target="_blank">购物流程</a></div>
                        <div class="item"><a href="#" target="_blank">会员介绍</a></div>
                        <div class="item"><a href="#" target="_blank">订单状态</a></div>
                        <div class="item"><a href="#" target="_blank">常见问题</a></div>
                        <div class="item"><a href="#" target="_blank">大家电</a></div>
                        <div class="item"><a href="#" target="_blank">联系客服</a></div>
                    </dd>
                </dl>
                <dl class="fore2">
                    <dt><b></b><strong>配送方式</strong></dt>
                    <dd>
                        <div class="item"><a href="#" target="_blank">上门自提</a></div>
                        <div class="item"><a href="#" target="_blank">快递运输</a></div>
                        <div class="item"><a href="#" target="_blank">特快专递（EMS）</a></div>
                        <div class="item"><a href="#" target="_blank">如何送礼</a></div>
                    </dd>
                </dl>
                <dl class="fore3">
                    <dt><b></b><strong>支付方式</strong></dt>
                    <dd>
                        <div class="item"><a href="#" target="_blank">货到付款</a></div>
                        <div class="item"><a href="#" target="_blank">在线支付</a></div>
                        <div class="item"><a href="#" target="_blank">分期付款</a></div>
                        <div class="item"><a href="#" target="_blank">邮局汇款</a></div>
                        <div class="item"><a href="#" target="_blank">公司转账</a></div>
                    </dd>
                </dl>
                <dl class="fore4">
                    <dt><b></b><strong>售后服务</strong></dt>
                    <dd>
                        <div class="item"><a href="#" target="_blank">退换货政策</a></div>
                        <div class="item"><a href="#" target="_blank">退换货流程</a></div>
                        <div class="item"><a href="#" target="_blank">价格保护</a></div>
                        <div class="item"><a href="#" target="_blank">退款说明</a></div>
                        <div class="item"><a href="#" target="_blank">返修申请</a></div>
                        <div class="item"><a href="#" target="_blank">退款申请</a></div>
                    </dd>
                </dl>
                <dl class="fore5">
                    <dt><b></b><strong>特色服务</strong></dt>
                    <dd>
                        <div class="item"><a href="#" target="_blank">夺宝岛</a></div>
                        <div class="item"><a href="#" target="_blank">DIY装机</a></div>
                        <div class="item"><a href="#" target="_blank">延保服务</a></div>
                        <div class="item"><a href="#" target="_blank">家电下乡</a></div>
                        <div class="item"><a href="#" target="_blank">京东礼品卡</a></div>
                        <div class="item"><a href="#" target="_blank">家电以旧换新</a></div>
                    </dd>
                </dl>
                <div class="clear"></div>
                <ul>
                    <li class="fore"><a href="#" class="blink1" target="_blank">正品行货 品质保证机打发票</a></li>
                    <li><a href="#" class="blink2" target="_blank">211限时达 上午下单当日送达</a></li>
                    <li><a href="#" class="blink3" target="_blank">全场免运费 不限金额不限地区</a></li>
                    <li><a href="#" class="blink4" target="_blank">售后100分 全国上门取件100分钟内解决</a></li>
                </ul>

            </div>
        </div>
        <!--脚部开始-->
        <div class="page_width">
            <div id="footer">
                <div class="flinks">
                    <a href="#" target="_blank">关于我们</a>
                    |
                    <a href="#" target="_blank">联系我们</a>
                    |
                    <a href="#" target="_blank">人才招聘</a>
                    |
                    <a href="#" target="_blank">商家入驻</a>
                    |
                    <a href="#" target="_blank">广告服务</a>
                    |
                    <a href="#" target="_blank">京东社区</a>
                    |
                    <a href="#" target="_blank">友情链接</a>
                    |
                    <a href="#" target="_blank">销售联盟</a>
                </div>
                <div class="copyright">
                    北京市公安局海淀分局备案编号：1101081681&nbsp;&nbsp;京ICP证070359号&nbsp;&nbsp;
                    <a href="# target="_blank">音像制品经营许可证苏宿批005 号</a><br>Copyright&copy;2004-2011&nbsp;&nbsp;360buy京东商城&nbsp;版权所有
                </div>
                <div class="ilinks">
                    <a href="#" target="_blank">
                        <img src="__PUBLIC__/home/images/f_icp.gif" width="108" height="40" alt="经营性网站备案中心">
                    </a>

                    <a href="#" target="_blank">
                        <img src="__PUBLIC__/home/images/knetSealLogo.jpg" width="112" height="40">
                    </a>
                    <a href="#" target="_blank">
                        <img src="__PUBLIC__/home/images/f_hdwj.jpg" width="108" height="40" alt="海淀网络警察">
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
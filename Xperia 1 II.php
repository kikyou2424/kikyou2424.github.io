<?php
    session_start();
    if(isset($_SESSION['user_data'])){
        $user=$_SESSION['user_data'];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./favicon.ico">
    <title>索尼Xperia 1 II_手机|报价,价格,配置,详情-索尼中国在线商城</title>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/ZV-1.css">
    <script src="./js/jquery1.12.4.min.js"></script>
</head>
<style>
    .num_m {
        bottom: 57px;
        left: 91px;
    }
</style>

<body>
    <!-- head头部导航栏开始 -->
    <div class="header min-w1210">
        <div class="head inner">
            <!-- logo -->
            <div class="logo">
                <a href="./index.php">索尼中国</a>
            </div>
            <!-- nav -->
            <div class="nav">
                <ul class="clearfix">
                    <li>
                        <a href="">My Sony</a>
                        <ol class="clearfix">
                            <li><a href="#" target="_blank">My Sony 社区</a></li>
                            <li><a href="#" target="_blank">我的账户</a></li>
                            <li><a href="#" target="_blank">我的订单</a></li>
                            <li><a href="#" target="_blank">我的心愿单</a></li>
                            <li><a href="#" target="_blank">产品注册</a></li>
                            <li><a href="#" target="_blank">会员福利</a></li>
                            <li><a href="#" target="_blank">α Café</a></li>
                        </ol>
                    </li>
                    <li>
                        <a href="">服务与支持</a>
                        <ol class="clearfix">
                            <li><a href="#" target="_blank">在线客服</a></li>
                            <li><a href="#" target="_blank">在线直播</a></li>
                            <li><a href="#" target="_blank">售后服务</a></li>
                            <li><a href="#" target="_blank">索尼中国APP</a></li>
                            <li><a href="#" target="_blank">索尼应用中心</a></li>
                            <li><a href="#" target="_blank">线下体验及购买</a></li>
                            <li><a href="#" target="_blank">影像专业服务</a></li>
                        </ol>
                    </li>
                    <!-- 网页导航 -->
                    <li>
                        <a href="">网站导航</a>
                        <div id="moreNav">
                            <dl>
                                <dt>家庭影像产品</dt>
                                <dd><a href="#">BRAVIA电视机</a></dd>
                                <dd><a href="#">4K/2K播放器</a></dd>
                                <dd><a href="#">家庭影音系统</a></dd>
                                <dt> PlayStation®</dt>
                                <dd><a href="#">PlayStation®VR</a></dd>
                                <dd><a href="#">PlayStationshangVR</a></dd>
                                <dd><a href="#">PlayStation®4</a></dd>
                                <dd><a href="#">ProPlayStation®4</a></dd>
                                <dd><a href="#">PlayStation®4游戏</a></dd>
                                <dd><a href="#">PlayStation@Vita</a></dd>
                                <dd><a href="#">PlayStation®</a></dd>
                                <dd><a href="#">Vita®游戏</a></dd>
                            </dl>
                            <dl>
                                <dt>数码影像产品</dt>
                                <dd><a href="#">数码影像产品</a></dd>
                                <dd><a href="#">镜头</a></dd>
                                <dd><a href="#">数码相机</a></dd>
                                <dd><a href="#">数码摄像机</a></dd>
                                <dd><a href="#">运动相机</a></dd>
                                <dd><a href="#">索尼存储卡</a></dd>
                                <dd><a href="#">影像专业服务</a></dd>
                            </dl>
                            <dl>
                                <dt>便携音频产品</dt>
                                <dd><a href="#">耳机</a></dd>
                                <dd><a href="#">MP4/MP3播放器</a></dd>
                                <dd><a href="#">无线扬声器</a></dd>
                                <dd><a href="#">无数码录音棒</a></dd>
                                <dt> 家庭音频设备</dt>
                                <dd><a href="#">家庭音频系统</a></dd>
                                <dd><a href="#">高保真音响组件</a></dd>
                                <dd><a href="#">无线扬声器</a></dd>
                                <dd><a href="#">高解析度音频设备</a></dd>
                            </dl>
                            <dl>
                                <dt>潮玩科技</dt>
                                <dd><a href="#">Xperia™智能手机</a></dd>
                                <dd><a href="#">便携式投影仪</a></dd>
                                <dd><a href="#">KOOV®教育机器人</a></dd>
                                <dd><a href="#">电子纸</a></dd>
                                <dd><a href="#">电子纸配件</a></dd>
                            </dl>
                            <dl>
                                <dt>数码配件</dt>
                                <dd><a href="#">数码配件首页</a></dd>
                                <dd><a href="#">PlayStation®配件</a></dd>
                                <dd><a href="#">数码摄像机配件</a></dd>
                                <dd><a href="#">数码相机配件</a></dd>
                                <dd><a href="#">微单™数码相机配件</a></dd>
                                <dd><a href="#">运动相机配件</a></dd>
                                <dd><a href="#">音频产品配件</a></dd>
                                <dd><a href="">Xperia™手机配件</a></dd>
                                <dt><a href="">行业解决方案</a></dt>
                                <dt><a href="">在线直播</a></dt>
                            </dl>
                            <dl>
                                <dt>在线购物指南</dt>
                                <dd><a href="#">购物指南</a></dd>
                                <dd><a href="#">销售条款</a></dd>
                                <dd><a href="#">货物配送</a></dd>
                                <dd><a href="#">收货流程</a></dd>
                                <dd><a href="#">付款方式</a></dd>
                                <dd><a href="#">退货流程</a></dd>
                                <dt>服务与支持</dt>
                                <dd><a href="#">产品说明书</a></dd>
                                <dd><a href="#">常见问题</a></dd>
                                <dd><a href="#">保修条款</a></dd>
                            </dl>
                            <dl>
                                <dt>你周围的经销商</dt>
                                <dd><a href="#">门店查找</a></dd>
                                <dd><a href="#">维修网络查询</a></dd>
                                <dt>My Sony Club</dt>
                                <dd><a href="#">My Sony社区</a></dd>
                                <dd><a href="#">会员福利</a></dd>
                                <dd><a href="#">产品注册</a></dd>
                                <dd><a href="#"> 会员注册</a></dd>
                                <dd><a href=""> a Cafée</a></dd>
                                <dd><a href="">会员帮助中心</a></dd>
                            </dl>
                            <div>
                                <img src="https://www.sonystyle.com.cn/etc/designs/sonystyle/images/phoneImg.jpg" alt="">
                            </div>
                        </div>
                    </li>
                    <li class="search">
                        <input type="text">
                        <button id="search_btn"></button>
                    </li>
                </ul>
            </div>
            <!-- 登录/注册 -->
            <div class="login">
                <?php if(empty($user)):?>
                <a href="login.php">登入</a> &nbsp;/&nbsp;
                <a href="./login.php?falg=false">注册</a>
                <?php else:?>
                    <a href="#"><?php echo $user['username']?></a>
                    &nbsp; <a href='./interface/exit.php?exit=true'>退出</a>
                <?php endif?>
            </div>
            <!-- 购物车 start -->
            <div class="minicart">
                <div>
                    <div id="cart">
                        <ul></ul>
                        <div class="summary">
                            <p>总计: RMB<span>0.00</span></p>
                        </div>
                        <div class="gotobasket">
                            <a href="./cart.php">去购物车(0)</a>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="#">
                        <!-- 官网直售 -->
                    </a>
                </div>
            </div>
        </div>

    </div>
    <!-- head头部导航栏结束 -->

    <!-- route 路径 start  -->
    <div id="bread_banner" class="min-w1210">
        <div class="bread_banner inner">
            <div class="left">
                <a href="">索尼中国在线商城</a> &gt;
                <a href="">数码相机</a> &gt;
                <a href="#">DSC-RX100M7</a>
            </div>
            <div class="right">
                <a href="">
                    <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/brandlogo/bread_logo_cybershot.gif">
                </a>
            </div>
        </div>
    </div>
    <!-- route 路径 end  -->

    <!-- products 全系产品列表 start -->
    <div id="products" class="min-w1210">
        <div class="products inner">
            <div class="products-m">
                <del></del>
                <div class="trigger_dis" style="display: block;">查看全系列产品</div>
            </div>
        </div>
    </div>
    <!-- products 全系产品列表 end -->

    <!--pro-list 本产品列表 start -->
    <div id="pro-list" class="min-w1210">
        <div class="pro-list inner">
            <div class="pro-list1" id="pro-list1">
                <div id="smallbox" style="background: url(https://assets.sonystyle.com.cn/content/dam/sonystyle/products/xperia/xperia1m2/product/xperia1m2_eisa_g_201222.jpg) no-repeat center;background-size: cover;">                  
                    <div id="mask"></div>
                </div>
                <div id="bigbox" >
                    <img id="bigImg" src="https://assets.sonystyle.com.cn/content/dam/sonystyle/products/xperia/xperia1m2/product/xperia1m2_eisa_g_201222.jpg" alt="">
                </div>   
    <script>
        function $id(id){
            return document.getElementById(id);
        }
        function getScroll(){
            if(window.pageYOffset){
                return {
                    top:window.pageYOffset,
                    left:window.pageXOffset
                }
            }else if(document.documentElement.scrollTop){
                return {
                    top:document.documentElement.scrollTop,
                    left:document.documentElement.scrollLeft
                }
            }else{
                return {
                    top:document.body.scrollTop,
                    left:document.body.scrollLeft
                }
            }
        }
                    // 获取相关元素
         var box = $id('pro-list1');//总容器
		var smallBox = $id('smallbox');//小盒子
		var bigBox = $id('bigbox');//大盒子
		var mask = $id('mask');//遮罩层
		var bigImg = $id('bigImg');//大图片
		// 1 鼠标移入small,big显示,mask显示
		smallBox.onmouseenter = function(){
			bigBox.style.display = "block";
			mask.style.display = "block";
		}
		// 2 mask跟着鼠标移动，鼠标在mask中心位置
		smallBox.onmousemove = function(e){
			e = e||window.event;
			// 求出鼠标距离small的距离
			var left = e.clientX+getScroll().left - box.offsetLeft;
			var top = e.clientY+getScroll().top-box.offsetTop;
			// 鼠标在mask中心，减去mask宽高的一半
			left = left-mask.offsetWidth/2
			top = top-mask.offsetHeight/2
			// 边界监测
			if(left<0){
				left=0
			}
			if(left>smallBox.offsetWidth-mask.offsetWidth){
				left=smallBox.offsetWidth-mask.offsetWidth
			}
			if(top<0){
				top = 0;
			}
			if(top>smallBox.offsetHeight-mask.offsetHeight){
				top = smallBox.offsetHeight-mask.offsetHeight
			}
			// 定位mask
			mask.style.left = left +"px";
			mask.style.top = top +"px";
			// 3 mask对应的大图位置显示
			// left/350 = 大图左移的距离/800
			// top/350 = 大图上移的距离/800
			var x = left/smallBox.offsetWidth*bigImg.offsetWidth;
			var y = top/smallBox.offsetHeight*bigImg.offsetHeight;
			
			bigImg.style.marginLeft = -x+"px";
			bigImg.style.marginTop = -y+"px";

		}
		// 4 鼠标移出small,big隐藏,mask隐藏
		smallBox.onmouseleave = function(){
			bigBox.style.display = "none";
			mask.style.display = "none";
		}
    </script>          
                <ul class="clearfix">
                    <li><img src="https://assets.sonystyle.com.cn/content/dam/sonystyle/products/xperia/xperia1m2/product/xperia1m2_eisa_g_201222.jpg" alt=""></li>
                    <li><img src="https://assets.sonystyle.com.cn/content/dam/sonystyle/products/xperia/xperia1m2/product/xperia1m2_feature_3.jpg.thumb.537.537.png.thumb.64.64.png" alt=""></li>
                    <li><img src="https://assets.sonystyle.com.cn/content/dam/sonystyle/products/xperia/xperia1m2/product/xperia1m2_feature_5.jpg.thumb.537.537.png" alt=""></li>
                    <li><img src="https://assets.sonystyle.com.cn/content/dam/sonystyle/products/xperia/xperia1m2/product/xperia1m2_feature_5.jpg.thumb.537.537.png.thumb.64.64.png" alt=""></li>
                    <li><img src="https://assets.sonystyle.com.cn/content/dam/sonystyle/products/xperia/xperia1m2/product/xperia1m2_feature_4.jpg.thumb.537.537.png.thumb.64.64.png" alt=""></li>
                    <li><img src="https://assets.sonystyle.com.cn/content/dam/sonystyle/products/xperia/xperia1m2/product/xperia1m2_feature_7.jpg.thumb.537.537.png" alt=""></li>
                </ul>
                <div>
                    <img src="./images/pro1.png" alt="">
                </div>
            </div>
            <div class="pro-list2">
                <div>
                <div class="time">
                    <span>限时抢购</span>
                    <p>活动倒计时 ：0天 0 小时 0分 0秒</p>
               </div>
               <script src="./js/seckill.js"></script>
                    <img src="./images/pro5.png" alt="">
                    <div class="num_m">
                        <div class="reduce">-</div>
                        <span class="num_p">
                            <label for="product_count"></label> 
                            <input type="text" id="product_count" value="1">
                        </span>
                        <div class="add">+</div>
                    </div>
                </div>
                <div class="addCart">
                    <div><img src="https://www.sonystyle.com.cn/etc/designs/sonystyle/images/buybutton/button_cartaddition_big.png" alt="加入购物车"></div>
                    <div><img src="https://www.sonystyle.com.cn/etc/designs/sonystyle/images/addwish.png" alt="加入心愿单"></div>
                </div>
            </div>
            
    <script>
        // 点击加入购物车
        var i=1
        $('.add').click(function(){
            i++
            $('#product_count').val(i);
        })
        $('.reduce').click(function(){
            if(i>0){
                i--;
            };
            $('#product_count').val(i);
        })
        $('.addCart').click(function(){
            $.ajax({
                url:"./interface/add.php",
                data:{
                    id:2,
                    name:'索尼 Xperia 1 II 5G 手机 青山绿 鬼灭之刃(绿)限定套装',
                    img:'https://www.sonystyle.com.cn/content/dam/sonystyle/products/xperia/xperia1m2/product/img_xp_1m2_g_2.jpg',
                    price:7499,
                    num:$('#product_count').val()
                },
                dataType:"json",
                success:function(res){
                    if(res.code===1){
                        alert('商品添加成功')
                    }
                }       
            })
        })
        </script>
        </div>
   
        </div>
    </div>
    <!-- pro-list 本产品列表 end -->

    <!-- 详情 -->
    <div style="height: 11357px;width: 100%;min-width:1210px;background: url(./images/pro3.png) center 0px;">

    </div>
</body>

</html>
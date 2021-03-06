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
    <title>索尼中国在线商城-手机_电视_相机及配件_耳机_家庭音响-索尼官网|Sony官方旗舰店</title>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/index.css">
    <script src="./js/jquery1.12.4.min.js"></script>
</head>

<body>
    <!-- 跳楼机 start -->
    <div id="RightFixNav">
        <div class="qipao">
            <div class="qipao_item">
                <img alt="商城App" src="https://www.sonystyle.com.cn/etc/designs/sonystyle/images/gongzhonghao.png">
                <p>索尼中国APP</p>
                <span>微信扫一扫</span>
            </div>
            <div class="qipao_item">
                <img alt="商城微信小程序" src="https://www.sonystyle.com.cn/etc/designs/sonystyle/images/shangcheng.png">
                <p>索尼商城微信小程序</p>
                <span>微信扫一扫</span>
            </div>
            <div class="qipao_item">
                <img alt="售后" src="https://www.sonystyle.com.cn/etc/designs/sonystyle/images/shouhou.png">
                <p>查找门店及售后微信小程序</p>
                <span>微信扫一扫</span>
            </div>
        </div>
        <a href="javascript:void(0)" class="mobileIcon">
            <img src="https://www.sonystyle.com.cn/etc/designs/sonystyle/images/QRcode.jpg" alt="">
        </a>
        <ul>
            <li>
                <a class="MainB0" href="javascript:;">
                    <img class="NavPic" src="https://www.sonystyle.com.cn/etc/designs/sonystyle/images/rightfixnav_icon_live.jpg">
                </a>
            </li>
            <li>
                <a class="MainB1" href="javascript:;">
                    <img class="NavPic" src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/othericon/RightFixNav_icon1.jpg">
                </a>
            </li>
            <li>
                <a class="MainB2" href="javascript:;">
                <img class="NavPic" src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/othericon/RightFixNav_icon3.jpg">
                </a>
            </li>
            <li>
                <a class="MainB3" href="javascript:;">              
                    <img class="NavPic" src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/othericon/RightFixNav_icon2.jpg">
                </a>
            </li>
            <li>
                <a class="MainB4" href="javascript:;">
                    <img class="NavPic" src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/othericon/znyj_50x50.jpg">
                </a>
            </li>
            <li class="MainB5">
                <div class="navword1">
                    <p>会员</p> <p>专区</p>
                </div>
            </li>
            <li>
                <a class="MainB6" href="javascript:;">
                    <img class="NavPic" src="https://www.sonystyle.com.cn/etc/designs/sonystyle/images/RightFixNav_icon6.png">
                </a>
            </li>
            
        </ul>
        <a href="javascript:void(0)" class="homeback"></a>
    </div>
    <script>
        $(window).scroll(
                function () {
                    if ($(window).scrollTop() >1620) {
                    $('#RightFixNav').css('display', 'block')
                    };
                    if ($(window).scrollTop() < 1620) {
                    $('#RightFixNav').css({ display: 'none' })
                    }
                }       
        );  
            $('.mobileIcon').on('mouseover',function(){
                $('.qipao').css('display','block')
            })
            $('.mobileIcon').on('mouseout',function(){
                $('.qipao').css('display','none')
            })
            $('.toptop').on('click',function(){
            $('html').animate({scrollTop:0})
            })
            $('.MainB0').on('click',function(){
            $('html').animate({scrollTop:1620})
            })
            $('.MainB1').on('click',function(){
            $('html').animate({scrollTop:2110})
            })
            $('.MainB2').on('click',function(){
            $('html').animate({scrollTop:3700})
            })
            $('.MainB3').on('click',function(){
            $('html').animate({scrollTop:4905})
            })
            $('.MainB4').on('click',function(){
            $('html').animate({scrollTop:6420})
            })
            $('.MainB5').on('click',function(){
            $('html').animate({scrollTop:7260})
            })
            $('.MainB6').on('click',function(){
            $('html').animate({scrollTop:0})
            })
    </script>
    <!-- 跳楼机 end -->

    <!-- head头部导航栏开始 -->  
    <div class="header">
        <div class="head inner">
            <!-- logo -->
            <div class="logo">
                <a href="./index.php" target="_blank">索尼中国</a>
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
                <a href="./login.php">登录</a> &nbsp;/&nbsp;
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
                            <a href="./cart.php" target="_blank">去购物车(0)</a>
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

    <!-- new-menu start -->
    <div class="newMenu inner">
        <ul>
            <li>
                <a href="#">推荐产品</a>
                <div class="product">
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img">
                                <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/homepage/recommend/tjcp_xperia1m2_all.jpg" title="Xperia 1 II - 为速度而生 5G手机" alt="Xperia 1 II - 为速度而生 5G手机"></div>
                            <div class="text">
                                <span class="title" title="Xperia 1 II">Xperia 1 II</span>
                                <span class="subtitle" title="为速度而生 5G手机">为速度而生 5G手机</span>
                            </div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/homepage/recommend/tjcp_xperia5m2_all.jpg" title="Xperia 5 II - 精巧随行 5G手机" alt="Xperia 5 II - 精巧随行 5G手机"></div>
                            <div class="text"><span class="title" title="Xperia 5 II">Xperia 5 II</span><span class="subtitle" title="精巧随行 5G手机">精巧随行 5G手机</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/accessory/xperia/xqz_cvat/product/xqz_cvat_v_01_829805d6.jpg" title="XQZ-CVAT - Xperia 1 II 透明翻盖手机壳" alt="XQZ-CVAT - Xperia 1 II 透明翻盖手机壳"></div>
                            <div class="text"><span class="title" title="XQZ-CVAT">XQZ-CVAT</span><span class="subtitle" title="Xperia 1 II 透明翻盖手机壳">Xperia 1 II 透明翻盖手机壳</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/accessory/xperia/xqz_cbad/product/xqz_cbad_bl_03_1ceb747e.jpg" title="XQZ-CBAD - Xperia 5 II 支架手机壳" alt="XQZ-CBAD - Xperia 5 II 支架手机壳"></div>
                            <div class="text"><span class="title" title="XQZ-CBAD">XQZ-CBAD</span><span class="subtitle" title="Xperia 5 II 支架手机壳">Xperia 5 II 支架手机壳</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/bravia/a8h/product/img_a8h_b1_800x800.jpg" title="KD-65A8H - 65英寸 OLED安卓智能电视" alt="KD-65A8H - 65英寸 OLED安卓智能电视"></div>
                            <div class="text"><span class="title" title="A8H">A8H</span><span class="subtitle" title="OLED安卓智能电视">OLED安卓智能电视</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/bravia/x9500h/product/img_55x9500h_b1_800x800.jpg" title="KD-55X9500H - 55英寸 4K HDR 安卓智能液晶电视" alt="KD-55X9500H - 55英寸 4K HDR 安卓智能液晶电视"></div>
                            <div class="text"><span class="title" title="X9500H">X9500H</span><span class="subtitle" title="4K HDR 安卓智能液晶电视">4K HDR 安卓智能液晶电视</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/bravia/x9000h/product/img_x9000h_b0_800x800.jpg" title="KD-65X9000H - 65英寸 4K HDR 安卓智能液晶电视" alt="KD-65X9000H - 65英寸 4K HDR 安卓智能液晶电视"></div>
                            <div class="text"><span class="title" title="X9000H">X9000H</span><span class="subtitle" title="4K HDR 安卓智能液晶电视">4K HDR 安卓智能液晶电视</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/bravia/z8h/product/img_z8h_b0_800x800.jpg" title="KD-75Z8H - 75英寸 8K HDR 安卓智能液晶电视" alt="KD-75Z8H - 75英寸 8K HDR 安卓智能液晶电视"></div>
                            <div class="text"><span class="title" title="Z8H">Z8H</span><span class="subtitle" title="8K HDR 安卓智能液晶电视">8K HDR 安卓智能液晶电视</span></div>
                        </a>
                    </div>
                </div>
                <div class="new-footer">
                    <!-- 右侧栏底部广告 -->
                    <img src="https://www.sonystyle.com.cn/etc/designs/sonystyle/images/tel_03.png" width="690" height="37" alt="">
                </div>
                <div class="advertisement">
                    <!-- 右侧栏右边广告 -->
                    <a class="clearfix" href="#">
                        <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/homepage/navibanner/dh_xperia5ii_newyear.jpg" width="240" height="480" alt="从零开始学视频 - dhbanner">
                    </a>
                </div>
            </li>
            <li>
                <a href="#">电视机/音响</a>
                <div class="product">
                    <img src="./images/aaa.jpg" alt="">
                </div>
                <div class="new-footer">
                    <!-- 右侧栏底部广告 -->
                    <img src="https://www.sonystyle.com.cn/etc/designs/sonystyle/images/tel_03.png" width="690" height="37" alt="">
                </div>
                <div class="advertisement">
                    <!-- 右侧栏右边广告 -->
                    <a class="clearfix" href="#">
                        <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/homepage/navibanner/dh_x9100h_purplebg.jpg" width="240" height="480" alt="从零开始学视频 - dhbanner">
                    </a>
                </div>
            </li>
            <li>
                <a href="#">PlayStation®</a>
                <div class="product">
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img">
                                <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/homepage/recommend/tjcp_xperia1m2_all.jpg" title="Xperia 1 II - 为速度而生 5G手机" alt="Xperia 1 II - 为速度而生 5G手机"></div>
                            <div class="text">
                                <span class="title" title="Xperia 1 II">Xperia 1 II</span>
                                <span class="subtitle" title="为速度而生 5G手机">为速度而生 5G手机</span>
                            </div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/homepage/recommend/tjcp_xperia5m2_all.jpg" title="Xperia 5 II - 精巧随行 5G手机" alt="Xperia 5 II - 精巧随行 5G手机"></div>
                            <div class="text"><span class="title" title="Xperia 5 II">Xperia 5 II</span><span class="subtitle" title="精巧随行 5G手机">精巧随行 5G手机</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/accessory/xperia/xqz_cvat/product/xqz_cvat_v_01_829805d6.jpg" title="XQZ-CVAT - Xperia 1 II 透明翻盖手机壳" alt="XQZ-CVAT - Xperia 1 II 透明翻盖手机壳"></div>
                            <div class="text"><span class="title" title="XQZ-CVAT">XQZ-CVAT</span><span class="subtitle" title="Xperia 1 II 透明翻盖手机壳">Xperia 1 II 透明翻盖手机壳</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/accessory/xperia/xqz_cbad/product/xqz_cbad_bl_03_1ceb747e.jpg" title="XQZ-CBAD - Xperia 5 II 支架手机壳" alt="XQZ-CBAD - Xperia 5 II 支架手机壳"></div>
                            <div class="text"><span class="title" title="XQZ-CBAD">XQZ-CBAD</span><span class="subtitle" title="Xperia 5 II 支架手机壳">Xperia 5 II 支架手机壳</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/bravia/a8h/product/img_a8h_b1_800x800.jpg" title="KD-65A8H - 65英寸 OLED安卓智能电视" alt="KD-65A8H - 65英寸 OLED安卓智能电视"></div>
                            <div class="text"><span class="title" title="A8H">A8H</span><span class="subtitle" title="OLED安卓智能电视">OLED安卓智能电视</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/bravia/x9500h/product/img_55x9500h_b1_800x800.jpg" title="KD-55X9500H - 55英寸 4K HDR 安卓智能液晶电视" alt="KD-55X9500H - 55英寸 4K HDR 安卓智能液晶电视"></div>
                            <div class="text"><span class="title" title="X9500H">X9500H</span><span class="subtitle" title="4K HDR 安卓智能液晶电视">4K HDR 安卓智能液晶电视</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/bravia/x9000h/product/img_x9000h_b0_800x800.jpg" title="KD-65X9000H - 65英寸 4K HDR 安卓智能液晶电视" alt="KD-65X9000H - 65英寸 4K HDR 安卓智能液晶电视"></div>
                            <div class="text"><span class="title" title="X9000H">X9000H</span><span class="subtitle" title="4K HDR 安卓智能液晶电视">4K HDR 安卓智能液晶电视</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/bravia/z8h/product/img_z8h_b0_800x800.jpg" title="KD-75Z8H - 75英寸 8K HDR 安卓智能液晶电视" alt="KD-75Z8H - 75英寸 8K HDR 安卓智能液晶电视"></div>
                            <div class="text"><span class="title" title="Z8H">Z8H</span><span class="subtitle" title="8K HDR 安卓智能液晶电视">8K HDR 安卓智能液晶电视</span></div>
                        </a>
                    </div>
                </div>
                <div class="new-footer">
                    <!-- 右侧栏底部广告 -->
                    <img src="https://www.sonystyle.com.cn/etc/designs/sonystyle/images/tel_03.png" width="690" height="37" alt="">
                </div>
                <div class="advertisement">
                    <!-- 右侧栏右边广告 -->
                    <a class="clearfix" href="#">
                        <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/homepage/navibanner/dh_sszy_2007.jpg" width="240" height="480" alt="从零开始学视频 - dhbanner">
                    </a>
                </div>
            </li>
            <li>
                <a href="#">微单™数码相机</a>
                <div class="product">
                    <img src="./images/aaa.jpg" alt="">
                </div>
                <div class="new-footer">
                    <!-- 右侧栏底部广告 -->
                    <img src="https://www.sonystyle.com.cn/etc/designs/sonystyle/images/tel_03.png" width="690" height="37" alt="">
                </div>
                <div class="advertisement">
                    <!-- 右侧栏右边广告 -->
                    <a class="clearfix" href="#">
                        <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/homepage/navibanner/dh_ilce_10th_5s.jpg" width="240" height="480" alt="从零开始学视频 - dhbanner">
                    </a>
                </div>
            </li>
            <li>
                <a href="#">镜头</a>
                <div class="product">
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img">
                                <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/homepage/recommend/tjcp_xperia1m2_all.jpg" title="Xperia 1 II - 为速度而生 5G手机" alt="Xperia 1 II - 为速度而生 5G手机"></div>
                            <div class="text">
                                <span class="title" title="Xperia 1 II">Xperia 1 II</span>
                                <span class="subtitle" title="为速度而生 5G手机">为速度而生 5G手机</span>
                            </div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/homepage/recommend/tjcp_xperia5m2_all.jpg" title="Xperia 5 II - 精巧随行 5G手机" alt="Xperia 5 II - 精巧随行 5G手机"></div>
                            <div class="text"><span class="title" title="Xperia 5 II">Xperia 5 II</span><span class="subtitle" title="精巧随行 5G手机">精巧随行 5G手机</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/accessory/xperia/xqz_cvat/product/xqz_cvat_v_01_829805d6.jpg" title="XQZ-CVAT - Xperia 1 II 透明翻盖手机壳" alt="XQZ-CVAT - Xperia 1 II 透明翻盖手机壳"></div>
                            <div class="text"><span class="title" title="XQZ-CVAT">XQZ-CVAT</span><span class="subtitle" title="Xperia 1 II 透明翻盖手机壳">Xperia 1 II 透明翻盖手机壳</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/accessory/xperia/xqz_cbad/product/xqz_cbad_bl_03_1ceb747e.jpg" title="XQZ-CBAD - Xperia 5 II 支架手机壳" alt="XQZ-CBAD - Xperia 5 II 支架手机壳"></div>
                            <div class="text"><span class="title" title="XQZ-CBAD">XQZ-CBAD</span><span class="subtitle" title="Xperia 5 II 支架手机壳">Xperia 5 II 支架手机壳</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/bravia/a8h/product/img_a8h_b1_800x800.jpg" title="KD-65A8H - 65英寸 OLED安卓智能电视" alt="KD-65A8H - 65英寸 OLED安卓智能电视"></div>
                            <div class="text"><span class="title" title="A8H">A8H</span><span class="subtitle" title="OLED安卓智能电视">OLED安卓智能电视</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/bravia/x9500h/product/img_55x9500h_b1_800x800.jpg" title="KD-55X9500H - 55英寸 4K HDR 安卓智能液晶电视" alt="KD-55X9500H - 55英寸 4K HDR 安卓智能液晶电视"></div>
                            <div class="text"><span class="title" title="X9500H">X9500H</span><span class="subtitle" title="4K HDR 安卓智能液晶电视">4K HDR 安卓智能液晶电视</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/bravia/x9000h/product/img_x9000h_b0_800x800.jpg" title="KD-65X9000H - 65英寸 4K HDR 安卓智能液晶电视" alt="KD-65X9000H - 65英寸 4K HDR 安卓智能液晶电视"></div>
                            <div class="text"><span class="title" title="X9000H">X9000H</span><span class="subtitle" title="4K HDR 安卓智能液晶电视">4K HDR 安卓智能液晶电视</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/bravia/z8h/product/img_z8h_b0_800x800.jpg" title="KD-75Z8H - 75英寸 8K HDR 安卓智能液晶电视" alt="KD-75Z8H - 75英寸 8K HDR 安卓智能液晶电视"></div>
                            <div class="text"><span class="title" title="Z8H">Z8H</span><span class="subtitle" title="8K HDR 安卓智能液晶电视">8K HDR 安卓智能液晶电视</span></div>
                        </a>
                    </div>
                </div>
                <div class="new-footer">
                    <!-- 右侧栏底部广告 -->
                    <img src="https://www.sonystyle.com.cn/etc/designs/sonystyle/images/tel_03.png" width="690" height="37" alt="">
                </div>
                <div class="advertisement">
                    <!-- 右侧栏右边广告 -->
                    <a class="clearfix" href="#">
                        <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/homepage/navibanner/dh_xperia5ii_newyear.jpg" width="240" height="480" alt="从零开始学视频 - dhbanner">
                    </a>
                </div>
            </li>
            <li>
                <a href="#">数码相机</a>
                <div class="product">
                    <img src="./images/aaa.jpg" alt="">
                </div>
                <div class="new-footer">
                    <!-- 右侧栏底部广告 -->
                    <img src="https://www.sonystyle.com.cn/etc/designs/sonystyle/images/tel_03.png" width="690" height="37" alt="">
                </div>
                <div class="advertisement">
                    <!-- 右侧栏右边广告 -->
                    <a class="clearfix" href="#">
                        <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/homepage/navibanner/dh_xperia5ii_newyear.jpg" width="240" height="480" alt="从零开始学视频 - dhbanner">
                    </a>
                </div>
            </li>
            <li>
                <a href="#">数码摄影摄像机</a>
                <div class="product">
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img">
                                <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/homepage/recommend/tjcp_xperia1m2_all.jpg" title="Xperia 1 II - 为速度而生 5G手机" alt="Xperia 1 II - 为速度而生 5G手机"></div>
                            <div class="text">
                                <span class="title" title="Xperia 1 II">Xperia 1 II</span>
                                <span class="subtitle" title="为速度而生 5G手机">为速度而生 5G手机</span>
                            </div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/homepage/recommend/tjcp_xperia5m2_all.jpg" title="Xperia 5 II - 精巧随行 5G手机" alt="Xperia 5 II - 精巧随行 5G手机"></div>
                            <div class="text"><span class="title" title="Xperia 5 II">Xperia 5 II</span><span class="subtitle" title="精巧随行 5G手机">精巧随行 5G手机</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/accessory/xperia/xqz_cvat/product/xqz_cvat_v_01_829805d6.jpg" title="XQZ-CVAT - Xperia 1 II 透明翻盖手机壳" alt="XQZ-CVAT - Xperia 1 II 透明翻盖手机壳"></div>
                            <div class="text"><span class="title" title="XQZ-CVAT">XQZ-CVAT</span><span class="subtitle" title="Xperia 1 II 透明翻盖手机壳">Xperia 1 II 透明翻盖手机壳</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/accessory/xperia/xqz_cbad/product/xqz_cbad_bl_03_1ceb747e.jpg" title="XQZ-CBAD - Xperia 5 II 支架手机壳" alt="XQZ-CBAD - Xperia 5 II 支架手机壳"></div>
                            <div class="text"><span class="title" title="XQZ-CBAD">XQZ-CBAD</span><span class="subtitle" title="Xperia 5 II 支架手机壳">Xperia 5 II 支架手机壳</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/bravia/a8h/product/img_a8h_b1_800x800.jpg" title="KD-65A8H - 65英寸 OLED安卓智能电视" alt="KD-65A8H - 65英寸 OLED安卓智能电视"></div>
                            <div class="text"><span class="title" title="A8H">A8H</span><span class="subtitle" title="OLED安卓智能电视">OLED安卓智能电视</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/bravia/x9500h/product/img_55x9500h_b1_800x800.jpg" title="KD-55X9500H - 55英寸 4K HDR 安卓智能液晶电视" alt="KD-55X9500H - 55英寸 4K HDR 安卓智能液晶电视"></div>
                            <div class="text"><span class="title" title="X9500H">X9500H</span><span class="subtitle" title="4K HDR 安卓智能液晶电视">4K HDR 安卓智能液晶电视</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/bravia/x9000h/product/img_x9000h_b0_800x800.jpg" title="KD-65X9000H - 65英寸 4K HDR 安卓智能液晶电视" alt="KD-65X9000H - 65英寸 4K HDR 安卓智能液晶电视"></div>
                            <div class="text"><span class="title" title="X9000H">X9000H</span><span class="subtitle" title="4K HDR 安卓智能液晶电视">4K HDR 安卓智能液晶电视</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/bravia/z8h/product/img_z8h_b0_800x800.jpg" title="KD-75Z8H - 75英寸 8K HDR 安卓智能液晶电视" alt="KD-75Z8H - 75英寸 8K HDR 安卓智能液晶电视"></div>
                            <div class="text"><span class="title" title="Z8H">Z8H</span><span class="subtitle" title="8K HDR 安卓智能液晶电视">8K HDR 安卓智能液晶电视</span></div>
                        </a>
                    </div>
                </div>
                <div class="new-footer">
                    <!-- 右侧栏底部广告 -->
                    <img src="https://www.sonystyle.com.cn/etc/designs/sonystyle/images/tel_03.png" width="690" height="37" alt="">
                </div>
                <div class="advertisement">
                    <!-- 右侧栏右边广告 -->
                    <a class="clearfix" href="#">
                        <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/homepage/navibanner/dh_gmaster_2007.jpg" width="240" height="480" alt="从零开始学视频 - dhbanner">
                    </a>
                </div>
            </li>
            <li>
                <a href="#">手机</a>
                <div class="product">
                    <img src="./images/aaa.jpg" alt="">
                </div>
                <div class="new-footer">
                    <!-- 右侧栏底部广告 -->
                    <img src="https://www.sonystyle.com.cn/etc/designs/sonystyle/images/tel_03.png" width="690" height="37" alt="">
                </div>
                <div class="advertisement">
                    <!-- 右侧栏右边广告 -->
                    <a class="clearfix" href="#">
                        <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/homepage/navibanner/dh_youngfemale_lp.jpg" width="240" height="480" alt="从零开始学视频 - dhbanner">
                    </a>
                </div>

            </li>
            <li>
                <a href="#">耳机</a>
                <div class="product">
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img">
                                <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/homepage/recommend/tjcp_xperia1m2_all.jpg" title="Xperia 1 II - 为速度而生 5G手机" alt="Xperia 1 II - 为速度而生 5G手机"></div>
                            <div class="text">
                                <span class="title" title="Xperia 1 II">Xperia 1 II</span>
                                <span class="subtitle" title="为速度而生 5G手机">为速度而生 5G手机</span>
                            </div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/homepage/recommend/tjcp_xperia5m2_all.jpg" title="Xperia 5 II - 精巧随行 5G手机" alt="Xperia 5 II - 精巧随行 5G手机"></div>
                            <div class="text"><span class="title" title="Xperia 5 II">Xperia 5 II</span><span class="subtitle" title="精巧随行 5G手机">精巧随行 5G手机</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/accessory/xperia/xqz_cvat/product/xqz_cvat_v_01_829805d6.jpg" title="XQZ-CVAT - Xperia 1 II 透明翻盖手机壳" alt="XQZ-CVAT - Xperia 1 II 透明翻盖手机壳"></div>
                            <div class="text"><span class="title" title="XQZ-CVAT">XQZ-CVAT</span><span class="subtitle" title="Xperia 1 II 透明翻盖手机壳">Xperia 1 II 透明翻盖手机壳</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/accessory/xperia/xqz_cbad/product/xqz_cbad_bl_03_1ceb747e.jpg" title="XQZ-CBAD - Xperia 5 II 支架手机壳" alt="XQZ-CBAD - Xperia 5 II 支架手机壳"></div>
                            <div class="text"><span class="title" title="XQZ-CBAD">XQZ-CBAD</span><span class="subtitle" title="Xperia 5 II 支架手机壳">Xperia 5 II 支架手机壳</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/bravia/a8h/product/img_a8h_b1_800x800.jpg" title="KD-65A8H - 65英寸 OLED安卓智能电视" alt="KD-65A8H - 65英寸 OLED安卓智能电视"></div>
                            <div class="text"><span class="title" title="A8H">A8H</span><span class="subtitle" title="OLED安卓智能电视">OLED安卓智能电视</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/bravia/x9500h/product/img_55x9500h_b1_800x800.jpg" title="KD-55X9500H - 55英寸 4K HDR 安卓智能液晶电视" alt="KD-55X9500H - 55英寸 4K HDR 安卓智能液晶电视"></div>
                            <div class="text"><span class="title" title="X9500H">X9500H</span><span class="subtitle" title="4K HDR 安卓智能液晶电视">4K HDR 安卓智能液晶电视</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/bravia/x9000h/product/img_x9000h_b0_800x800.jpg" title="KD-65X9000H - 65英寸 4K HDR 安卓智能液晶电视" alt="KD-65X9000H - 65英寸 4K HDR 安卓智能液晶电视"></div>
                            <div class="text"><span class="title" title="X9000H">X9000H</span><span class="subtitle" title="4K HDR 安卓智能液晶电视">4K HDR 安卓智能液晶电视</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/bravia/z8h/product/img_z8h_b0_800x800.jpg" title="KD-75Z8H - 75英寸 8K HDR 安卓智能液晶电视" alt="KD-75Z8H - 75英寸 8K HDR 安卓智能液晶电视"></div>
                            <div class="text"><span class="title" title="Z8H">Z8H</span><span class="subtitle" title="8K HDR 安卓智能液晶电视">8K HDR 安卓智能液晶电视</span></div>
                        </a>
                    </div>
                </div>
                <div class="new-footer">
                    <!-- 右侧栏底部广告 -->
                    <img src="https://www.sonystyle.com.cn/etc/designs/sonystyle/images/tel_03.png" width="690" height="37" alt="">
                </div>
                <div class="advertisement">
                    <!-- 右侧栏右边广告 -->
                    <a class="clearfix" href="#">
                        <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/homepage/navibanner/dh_360realityaudio_2007.jpg" width="240" height="480" alt="从零开始学视频 - dhbanner">
                    </a>
                </div>
            </li>
            <li>
                <a href="#">音乐播放器/扬声器</a>
                <div class="product">
                    <img src="./images/aaa.jpg" alt="">
                </div>
                <div class="new-footer">
                    <!-- 右侧栏底部广告 -->
                    <img src="https://www.sonystyle.com.cn/etc/designs/sonystyle/images/tel_03.png" width="690" height="37" alt="">
                </div>
                <div class="advertisement">
                    <!-- 右侧栏右边广告 -->
                    <a class="clearfix" href="#">
                        <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/homepage/navibanner/dh_alphaPho_video01_202012.jpg" width="240" height="480" alt="从零开始学视频 - dhbanner">
                    </a>
                </div>
            </li>
            <li>
                <a href="#">高解析度音频设备</a>
                <div class="product">
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img">
                                <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/homepage/recommend/tjcp_xperia1m2_all.jpg" title="Xperia 1 II - 为速度而生 5G手机" alt="Xperia 1 II - 为速度而生 5G手机"></div>
                            <div class="text">
                                <span class="title" title="Xperia 1 II">Xperia 1 II</span>
                                <span class="subtitle" title="为速度而生 5G手机">为速度而生 5G手机</span>
                            </div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/homepage/recommend/tjcp_xperia5m2_all.jpg" title="Xperia 5 II - 精巧随行 5G手机" alt="Xperia 5 II - 精巧随行 5G手机"></div>
                            <div class="text"><span class="title" title="Xperia 5 II">Xperia 5 II</span><span class="subtitle" title="精巧随行 5G手机">精巧随行 5G手机</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/accessory/xperia/xqz_cvat/product/xqz_cvat_v_01_829805d6.jpg" title="XQZ-CVAT - Xperia 1 II 透明翻盖手机壳" alt="XQZ-CVAT - Xperia 1 II 透明翻盖手机壳"></div>
                            <div class="text"><span class="title" title="XQZ-CVAT">XQZ-CVAT</span><span class="subtitle" title="Xperia 1 II 透明翻盖手机壳">Xperia 1 II 透明翻盖手机壳</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/accessory/xperia/xqz_cbad/product/xqz_cbad_bl_03_1ceb747e.jpg" title="XQZ-CBAD - Xperia 5 II 支架手机壳" alt="XQZ-CBAD - Xperia 5 II 支架手机壳"></div>
                            <div class="text"><span class="title" title="XQZ-CBAD">XQZ-CBAD</span><span class="subtitle" title="Xperia 5 II 支架手机壳">Xperia 5 II 支架手机壳</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/bravia/a8h/product/img_a8h_b1_800x800.jpg" title="KD-65A8H - 65英寸 OLED安卓智能电视" alt="KD-65A8H - 65英寸 OLED安卓智能电视"></div>
                            <div class="text"><span class="title" title="A8H">A8H</span><span class="subtitle" title="OLED安卓智能电视">OLED安卓智能电视</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/bravia/x9500h/product/img_55x9500h_b1_800x800.jpg" title="KD-55X9500H - 55英寸 4K HDR 安卓智能液晶电视" alt="KD-55X9500H - 55英寸 4K HDR 安卓智能液晶电视"></div>
                            <div class="text"><span class="title" title="X9500H">X9500H</span><span class="subtitle" title="4K HDR 安卓智能液晶电视">4K HDR 安卓智能液晶电视</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/bravia/x9000h/product/img_x9000h_b0_800x800.jpg" title="KD-65X9000H - 65英寸 4K HDR 安卓智能液晶电视" alt="KD-65X9000H - 65英寸 4K HDR 安卓智能液晶电视"></div>
                            <div class="text"><span class="title" title="X9000H">X9000H</span><span class="subtitle" title="4K HDR 安卓智能液晶电视">4K HDR 安卓智能液晶电视</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/bravia/z8h/product/img_z8h_b0_800x800.jpg" title="KD-75Z8H - 75英寸 8K HDR 安卓智能液晶电视" alt="KD-75Z8H - 75英寸 8K HDR 安卓智能液晶电视"></div>
                            <div class="text"><span class="title" title="Z8H">Z8H</span><span class="subtitle" title="8K HDR 安卓智能液晶电视">8K HDR 安卓智能液晶电视</span></div>
                        </a>
                    </div>
                </div>
                <div class="new-footer">
                    <!-- 右侧栏底部广告 -->
                    <img src="https://www.sonystyle.com.cn/etc/designs/sonystyle/images/tel_03.png" width="690" height="37" alt="">
                </div>
                <div class="advertisement">
                    <!-- 右侧栏右边广告 -->
                    <a class="clearfix" href="#">
                        <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/homepage/navibanner/dh_xperia5ii_newyear.jpg" width="240" height="480" alt="从零开始学视频 - dhbanner">
                    </a>
                </div>
            </li>
            <li>
                <a href="#">数码配件</a>
                <div class="product">
                    <img src="./images/aaa.jpg" alt="">
                </div>
                <div class="new-footer">
                    <!-- 右侧栏底部广告 -->
                    <img src="https://www.sonystyle.com.cn/etc/designs/sonystyle/images/tel_03.png" width="690" height="37" alt="">
                </div>
                <div class="advertisement">
                    <!-- 右侧栏右边广告 -->
                    <a class="clearfix" href="#">
                        <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/homepage/navibanner/dh_acafe_campaign1034.jpg" width="240" height="480" alt="从零开始学视频 - dhbanner">
                    </a>
                </div>
            </li>
            <li>
                <a href="#">潮玩科技</a>
                <div class="product">
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img">
                                <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/homepage/recommend/tjcp_xperia1m2_all.jpg" title="Xperia 1 II - 为速度而生 5G手机" alt="Xperia 1 II - 为速度而生 5G手机"></div>
                            <div class="text">
                                <span class="title" title="Xperia 1 II">Xperia 1 II</span>
                                <span class="subtitle" title="为速度而生 5G手机">为速度而生 5G手机</span>
                            </div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/homepage/recommend/tjcp_xperia5m2_all.jpg" title="Xperia 5 II - 精巧随行 5G手机" alt="Xperia 5 II - 精巧随行 5G手机"></div>
                            <div class="text"><span class="title" title="Xperia 5 II">Xperia 5 II</span><span class="subtitle" title="精巧随行 5G手机">精巧随行 5G手机</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/accessory/xperia/xqz_cvat/product/xqz_cvat_v_01_829805d6.jpg" title="XQZ-CVAT - Xperia 1 II 透明翻盖手机壳" alt="XQZ-CVAT - Xperia 1 II 透明翻盖手机壳"></div>
                            <div class="text"><span class="title" title="XQZ-CVAT">XQZ-CVAT</span><span class="subtitle" title="Xperia 1 II 透明翻盖手机壳">Xperia 1 II 透明翻盖手机壳</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/accessory/xperia/xqz_cbad/product/xqz_cbad_bl_03_1ceb747e.jpg" title="XQZ-CBAD - Xperia 5 II 支架手机壳" alt="XQZ-CBAD - Xperia 5 II 支架手机壳"></div>
                            <div class="text"><span class="title" title="XQZ-CBAD">XQZ-CBAD</span><span class="subtitle" title="Xperia 5 II 支架手机壳">Xperia 5 II 支架手机壳</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/bravia/a8h/product/img_a8h_b1_800x800.jpg" title="KD-65A8H - 65英寸 OLED安卓智能电视" alt="KD-65A8H - 65英寸 OLED安卓智能电视"></div>
                            <div class="text"><span class="title" title="A8H">A8H</span><span class="subtitle" title="OLED安卓智能电视">OLED安卓智能电视</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/bravia/x9500h/product/img_55x9500h_b1_800x800.jpg" title="KD-55X9500H - 55英寸 4K HDR 安卓智能液晶电视" alt="KD-55X9500H - 55英寸 4K HDR 安卓智能液晶电视"></div>
                            <div class="text"><span class="title" title="X9500H">X9500H</span><span class="subtitle" title="4K HDR 安卓智能液晶电视">4K HDR 安卓智能液晶电视</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/bravia/x9000h/product/img_x9000h_b0_800x800.jpg" title="KD-65X9000H - 65英寸 4K HDR 安卓智能液晶电视" alt="KD-65X9000H - 65英寸 4K HDR 安卓智能液晶电视"></div>
                            <div class="text"><span class="title" title="X9000H">X9000H</span><span class="subtitle" title="4K HDR 安卓智能液晶电视">4K HDR 安卓智能液晶电视</span></div>
                        </a>
                    </div>
                    <div class="imgBox">
                        <a class="" href="#">
                            <div class="img"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/products/bravia/z8h/product/img_z8h_b0_800x800.jpg" title="KD-75Z8H - 75英寸 8K HDR 安卓智能液晶电视" alt="KD-75Z8H - 75英寸 8K HDR 安卓智能液晶电视"></div>
                            <div class="text"><span class="title" title="Z8H">Z8H</span><span class="subtitle" title="8K HDR 安卓智能液晶电视">8K HDR 安卓智能液晶电视</span></div>
                        </a>
                    </div>
                </div>
                <div class="new-footer">
                    <!-- 右侧栏底部广告 -->
                    <img src="https://www.sonystyle.com.cn/etc/designs/sonystyle/images/tel_03.png" width="690" height="37" alt="">
                </div>
                <div class="advertisement">
                    <!-- 右侧栏右边广告 -->
                    <a class="clearfix" href="#">
                        <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/homepage/navibanner/dh_xperia5ii_newyear.jpg" width="240" height="480" alt="从零开始学视频 - dhbanner">
                    </a>
                </div>
            </li>

        </ul>
    </div>
    <!-- new-menu end -->

    <!-- 轮播图 start -->
    <div class="slideshow">
        <ul class="clearfix" id="showimgbox">
            <li>
                <a href="./ZV-1.php" target="_blank"></a>
            </li>
            <li>
                <a href="./Xperia 1 II.php" target="_blank"></a>
            </li>
            <li>
                <a href="./DSC-RX100M7.php" target="_blank"></a>
            </li>
            <li>
                <a href="./ZV-1.php" target="_blank"></a>
            </li>
        </ul>
        <!-- 轮播图按钮 start -->
        <div class="pagination">
            <span></span><span></span><span></span>
        </div>
        <div id="boxleft"></div>
        <div id="boxright"></div>
        <!-- 轮播图按钮 end -->
    </div>

    <script src="./js/showimgBox.js">
        // 轮播图js代码
    </script>
    <!-- 轮播图 end -->

    <!-- statusbar 状态栏 start -->
    <div id="statusbar">
        <div class="statusbar inner">
            <div class="user">
                <img src="https://www.sonystyle.com.cn/bbs/avatar_icon/00.png" alt="">
                <div class="status-right">
                    <div class="login-info">您好！ 请&nbsp;&nbsp;
                        <span>
                            <a href="javascript:void(0)" class="new-login">登录</a>/
                            <a href="javascript:void(0)" class="new-register">注册</a>
					    </span>
                    </div>
                    <a href="" class="status-button status-button1">新人礼包</a>
                    <a href="" class="status-button status-button2">产品注册</a>
                    <a href="" class="status-button">我的账户</a>
                    <a href="" class="status-button">会员福利</a>
                    <a href="" class="status-button">我的订单</a>
                    <a href="" class="status-button">心愿单</a>
                </div>
            </div>
            <a href="" class="status-link club" aria-label="sonyClub"><span>My Sony Club</span></a>
            <a href="" class="status-link software" aria-label="software"><span>应用中心</span></a>
            <a href="" class="status-link live" aria-label="software"><span>在线直播</span></a>
            <div class="news" id="news-box">
                <div class="news-title"><span>新闻通知</span></div>
                <div class="news-item-con">
                    <div class="news-scroll1 news-scroll">
                        <a href="#" class="news-item" title=" Xperia Transfer 2 Android™ 版升级至1.1.0.A.2.2 ">
                            <div class="news-date ">
                                2020-12-29
                            </div>
                            <div class="news-topic ">
                                Xperia Transfer 2 Android™ 版升级至1.1.0.A.2.2
                            </div>
                        </a>
                        <a href="#" class="news-item " title=" Transfer &amp; Tagging add-on Android™ 版升级至1.3.0 ">
                            <div class="news-date ">
                                2020-12-15
                            </div>
                            <div class="news-topic ">
                                Transfer &amp; Tagging add-on Android™ 版升级至1.3.0
                            </div>
                        </a>
                        <a href="#" class="news-item " title=" Camera Remote SDK 版本升级至1.03 ">
                            <div class="news-date ">
                                2020-12-09
                            </div>
                            <div class="news-topic ">
                                Camera Remote SDK 版本升级至1.03
                            </div>
                        </a>
                        <a href="#" class="news-item " title=" Headphones Connect Android™ 版升级至7.3.0 ">
                            <div class="news-date ">
                                2020-11-14
                            </div>
                            <div class="news-topic ">
                                Headphones Connect Android™ 版升级至7.3.0
                            </div>
                        </a>
                        <a href="#" class="news-item " title=" Music Center(原：SongPal) 音乐搜索应用程序Android™ 版升级至5.17.1 ">
                            <div class="news-date ">
                                2020-10-23
                            </div>
                            <div class="news-topic ">
                                Music Center(原：SongPal) 音乐搜索应用程序Android™ 版升级至5.17.1
                            </div>
                        </a>
                        <a href="#" class="news-item " title=" Imaging Edge Webcam 版本更新 ">
                            <div class="news-date ">
                                2020-10-16
                            </div>
                            <div class="news-topic ">
                                Imaging Edge Webcam 版本更新
                            </div>
                        </a>
                        <a href="#" class="news-item " title=" Sound Organizer 版本更新 ">
                            <div class="news-date ">
                                2020-10-16
                            </div>
                            <div class="news-topic ">
                                Sound Organizer 版本更新
                            </div>
                        </a>
                        <a href="#" class="news-item " title=" Imaging Edge Mobile Android™ 版升级至7.4.1 ">
                            <div class="news-date ">
                                2020-09-15
                            </div>
                            <div class="news-topic ">
                                Imaging Edge Mobile Android™ 版升级至7.4.1
                            </div>
                        </a>
                        <a href="#" class="news-item " title=" Movie Edit add-on Android™ 版升级至1.2.0 ">
                            <div class="news-date ">
                                2020-09-15
                            </div>
                            <div class="news-topic ">
                                Movie Edit add-on Android™ 版升级至1.2.0
                            </div>
                        </a>
                        <a href="#" class="news-item " title=" HEIF Converter 上线 ">
                            <div class="news-date ">
                                2020-09-15
                            </div>
                            <div class="news-topic ">
                                HEIF Converter 上线
                            </div>
                        </a>
                        <a href="#" class="news-item " title=" 索尼中国在线商城电子发票上线通知 ">
                            <div class="news-date ">
                                2016-12-21
                            </div>
                            <div class="news-topic ">
                                索尼中国在线商城电子发票上线通知
                            </div>
                        </a>
                        <a href="#" class="news-item " title=" 关于部分VAIO个人电脑用的VGP-BPS26电池组的重要通知 ">
                            <div class="news-date ">
                                2016-03-03
                            </div>
                            <div class="news-topic ">
                                关于部分VAIO个人电脑用的VGP-BPS26电池组的重要通知
                            </div>
                        </a>
                    </div>
                    <div class="news-scroll2 news-scroll">
                        <a href="#" class="news-item " title=" Xperia Transfer 2 Android™ 版升级至1.1.0.A.2.2 ">
                            <div class="news-date ">
                                2020-12-29
                            </div>
                            <div class="news-topic ">
                                Xperia Transfer 2 Android™ 版升级至1.1.0.A.2.2
                            </div>
                        </a>
                        <a href="#" class="news-item " title=" Transfer &amp; Tagging add-on Android™ 版升级至1.3.0 ">
                            <div class="news-date ">
                                2020-12-15
                            </div>
                            <div class="news-topic ">
                                Transfer &amp; Tagging add-on Android™ 版升级至1.3.0
                            </div>
                        </a>
                        <a href="#" class="news-item " title=" Camera Remote SDK 版本升级至1.03 ">
                            <div class="news-date ">
                                2020-12-09
                            </div>
                            <div class="news-topic ">
                                Camera Remote SDK 版本升级至1.03
                            </div>
                        </a>
                        <a href="#" class="news-item" title=" Headphones Connect Android™ 版升级至7.3.0 ">
                            <div class="news-date ">
                                2020-11-14
                            </div>
                            <div class="news-topic ">
                                Headphones Connect Android™ 版升级至7.3.0
                            </div>
                        </a>
                        <a href="#" class="news-item " title="Music Center(原：SongPal) 音乐搜索应用程序Android™ 版升级至5.17.1 ">
                            <div class="news-date ">
                                2020-10-23
                            </div>
                            <div class="news-topic ">
                                Music Center(原：SongPal) 音乐搜索应用程序Android™ 版升级至5.17.1
                            </div>
                        </a>
                        <a href="#" class="news-item " title="Imaging Edge Webcam 版本更新 ">
                            <div class="news-date ">
                                2020-10-16
                            </div>
                            <div class="news-topic ">
                                Imaging Edge Webcam 版本更新
                            </div>
                        </a>
                        <a href="#" class="news-item " title=" Sound Organizer 版本更新 ">
                            <div class="news-date ">
                                2020-10-16
                            </div>
                            <div class="news-topic ">
                                Sound Organizer 版本更新
                            </div>
                        </a>
                        <a href="#" class="news-item " title="Imaging Edge Mobile Android™ 版升级至7.4.1 ">
                            <div class="news-date ">
                                2020-09-15
                            </div>
                            <div class="news-topic ">
                                Imaging Edge Mobile Android™ 版升级至7.4.1
                            </div>
                        </a>
                        <a href="#" class="news-item " title=" Movie Edit add-on Android™ 版升级至1.2.0 ">
                            <div class="news-date ">
                                2020-09-15
                            </div>
                            <div class="news-topic ">
                                Movie Edit add-on Android™ 版升级至1.2.0
                            </div>
                        </a>
                        <a href="#" class="news-item " title="HEIF Converter 上线 ">
                            <div class="news-date ">
                                2020-09-15
                            </div>
                            <div class="news-topic ">
                                HEIF Converter 上线
                            </div>
                        </a>
                        <a href="#" class="news-item " title="索尼中国在线商城电子发票上线通知 ">
                            <div class="news-date ">
                                2016-12-21
                            </div>
                            <div class="news-topic ">
                                索尼中国在线商城电子发票上线通知
                            </div>
                        </a>
                        <a href="#" class="news-item " title="关于部分VAIO个人电脑用的VGP-BPS26电池组的重要通知 ">
                            <div class="news-date ">
                                2016-03-03
                            </div>
                            <div class="news-topic ">
                                关于部分VAIO个人电脑用的VGP-BPS26电池组的重要通知
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/newsBoxScroll.js">
        // 新闻栏滚动
    </script>

    <!-- statusbar 状态栏 end -->

    <!-- active_main 内容小轮播图 start -->
    <div id="active_main">
        <div class="inner directionMain">
            <div class="active_main inner ">
                <h2>最新活动</h2>
                <ul class="clearfix" id="showimgbox1">
                    <li>
                        <a href="#"></a>
                        <a href="#"></a>
                        <a href="#"></a>
                    </li>
                    <li>
                        <a href="#"></a>
                        <a href="#"></a>
                        <a href="#"></a>
                    </li>
                    <li>
                        <a href="#"></a>
                        <a href="#"></a>
                        <a href="#"></a>
                    </li>
                    <li>
                        <a href="#"></a>
                        <a href="#"></a>
                        <a href="#"></a>
                    </li>
                </ul>
            </div>
            <!-- 轮播图按钮 start -->
            <div class="pagination1">
                <span></span><span></span><span></span>
            </div>
            <div id="boxleft1"></div>
            <div id="boxright1"></div>
            <!-- 轮播图按钮 end -->
        </div>
    </div>
    <script src="./js/showimgBox1.js">
        // 轮播图js代码
    </script>
    <!-- active_main 内容小轮播图 end -->


    <!-- NewProduct 新品发布 start -->
    <div id="NewProduct">
        <div class="inner directionMain">
            <div class="NewProduct inner">
                <h2>新品发布</h2>
                <ul class="showProduct">
                    <li>
                        <a href="#">
                            <div class="txtC">
                                <h3>游戏人生 大有可为<br>X9000H 系列</h3>
                                <p class="vice">4K HDR安卓智能液晶电视<br>火热销售中</p>
                                <p class="p_rice">
                                    RMB
                                    <span class="money">5,699起</span>
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="txtC">
                                <h3>聆醇音 享佳境<br>A8H 系列</h3>
                                <p class="vice">OLED安卓智能电视<br>新品上市</p>
                                <p class="p_rice">
                                    RMB
                                    <span class="money">11,999 起 
                            </span>
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="txtC">
                                <h3>开辟感官新纪元<br>KD-75X9500H</h3>
                                <p class="vice">4K安卓智能电视<br>新品上市</p>
                                <p class="p_rice">
                                    RMB
                                    <span class="money">19,999</span>
                                </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="txtC">
                                <h3>精巧随行 为速度而生<br>Xperia 5 II</h3>
                                <p class="vice">口袋尺寸 轻巧便携<br>新品上市</p>
                                <p class="p_rice">
                                    RMB <span class="money">5,999
                            </span></p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="txtC">
                                <h3>聆醇音 享静界<br>WH-1000XM4</h3>
                                <p class="vice">头戴式无线降噪耳机<br>新品上市</p>
                                <p class="p_rice">
                                    RMB <span class="money">2,899
                                 </span></p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="txtC">
                                <h3>全画幅小“7”<br>Alpha 7C</h3>
                                <p class="vice">小巧轻便 时尚外观<br>火热销售中</p>
                                <p class="p_rice"> RMB <span class="money">14,299起 
                            </span></p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="txtC">
                                <h3>全画幅电影镜头<br>FE C 16-35mmT3.1 G</h3>
                                <p class="vice">电影感散景虚化<br>新品上市</p>
                                <p class="p_rice">RMB <span class="money">41,999</span></p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="txtC">
                                <h3>音随心动 伴您左右<br>SRS-XB33</h3>
                                <p class="vice">防水重低音无线扬声器<br>火热销售中</p>
                                <p class="p_rice">
                                    RMB <span class="money">1,499</span></p>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="left-cover"></div>
                <div class="right-cover"></div>
            </div>
            <!-- 轮播图按钮 start -->
            <div class="pagination2">
                <span></span><span></span>
            </div>
            <div id="boxleft2"></div>
            <div id="boxright2"></div>
            <!-- 轮播图按钮 end -->
        </div>
    </div>

    <script src="./js/showNewProduct.js"></script>

    <!--  NewProduct 新品发布 end - -->

    <!-- mainProduct 主体内容 start -->
    <div class="mainProduct">
        <!-- Bambuser 在线直播 start -->
        <div class="bambuser inner">
            <div class="bambuser-top">
                <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/othericon/blocktitlelogo_live.png" alt="">
                <span>在线直播</span>
            </div>
            <div class="bambuser-center">
                <a href="#">直播日历</a>
                <span>|</span>
                <a href="#">直播回顾</a>
            </div>
            <div class="bambuser-bottom">
                <a href="#"><img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/homepage/category/live/block_onlive_210106.jpg" alt=""></a>
                <a href="#">
                    <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/homepage/category/live/block_live_201016.jpg" alt="">
                    <div class="bambuser-txt">
                        <h3 class="white">Xperia 深度揭秘</h3>
                        <p>教 学</p>
                    </div>
                </a>
                <a href="#">
                    <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/homepage/category/live/block_live_201117.jpg" alt="">
                    <div class="bambuser-txt">
                        <h3 class="white">索尼电影摄影机系统FX6</h3>
                        <p>新 品</p>
                    </div>
                </a>
            </div>
        </div>
        <!-- Bambuser 在线直播 end -->

        <!-- Digital 数码影像 start -->
        <div class="digital inner">
            <div class="bambuser-top">
                <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/othericon/blocktitlelogo.png" alt="">
                <span> &nbsp;数码影像</span>
            </div>
            <div class="digital-center">
                <a href="#">微单™/单电数码相机</a>
                <span>|</span>
                <a href="#">镜头</a>
                <span>|</span>
                <a href="#">数码相机</a>
                <span>|</span>
                <a href="#">数码摄像机</a>
                <span>|</span>
                <a href="#">运动相机</a>
                <span>|</span>
                <a href="#">配件</a>
                <span>|</span>
                <a href="#">应用软件</a>
                <span>|</span>
                <a href="#">线下体验</a>
                <span>|</span>
                <a href="#">PRO Support影像专业服务</a>
                <span>|</span>
                <a href="#">微摄会α Universe</a>
            </div>
            <div class="digital-bottom">
                <div>
                    <a href="#"></a>
                    <a href="#">
                        <div class="digital-txt">
                            <h3>Alpha 7R IV</h3>
                            <p>索尼全画幅画质旗舰</p>
                            <p>RMB <span class="money"> 19,999 </span>起</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="digital-txt">
                            <h3>Alpha 7 III</h3>
                            <p>索尼全画幅新基准</p>
                            <p>RMB <span class="money"> 11,999 </span>起</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="digital-txt">
                            <h3>AFE 12-24mm F2.8 GM</h3>
                            <p>全画幅超广角变焦G大师镜头</p>
                            <p>RMB <span class="money"> 21,699 </span>起</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="digital-txt">
                            <h3>FE 85mm F1.4 GM</h3>
                            <p>全画幅中远摄定焦G大师镜头</p>
                            <p>RMB <span class="money"> 11,199 </span>起</p>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#"></a>
                    <a href="#">
                        <div class="digital-txt">
                            <h3>DSC-RX100M5A黑卡®数码相机</h3>
                            <p>F1.8大光圈黑卡® 高性价比拍摄利器</p>
                            <p>RMB <span class="money"> 4,999 </span>起</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="digital-txt">
                            <h3>Vlog相机 ZV-1</h3>
                            <p>多彩生活 Vlog相伴</p>
                            <p>RMB <span class="money"> 4,799 </span>起</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="digital-txt">
                            <h3>DSC-RX10M4</h3>
                            <p>超长焦旗舰黑卡®</p>
                            <p>RMB <span class="money"> 10,799 </span>起</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="digital-txt">
                            <h3>FDR-AX700</h3>
                            <p>S-log模式 快速对焦</p>
                            <p>RMB <span class="money"> 12,699 </span>起</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="digital-B clearfix"><span>装机必备：</span>
                <ul>
                    <li><a>Imaging Edge</a><span>|</span></li>
                    <li><a>Imaging Edge Mobile</a><span>|</span></li>
                    <li><a>PlayMemories Camera Apps</a><span>|</span></li>
                    <li><a>Capture One (For Sony)</a><span>|</span></li>
                    <li><a>Action Cam APP</a><span>|</span></li>
                    <li><a>Movie Creator</a></li>
                </ul>
            </div>
        </div>
        <!-- Digital 数码影像 end -->

        <!-- video 影音娱乐 start -->
        <div class="video inner clearfix">
            <div class="bambuser-top">
                <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/othericon/blocktitlelogo3.png" alt="">
                <span> &nbsp;影音娱乐</span>
            </div>
            <div class="digital-center">
                <a href="#">视频游戏机</a>
                <span>|</span>
                <a href="#">BRAVIA电视机</a>
                <span>|</span>
                <a href="#">家庭影音系统</a>
                <span>|</span>
                <a href="#">4K/2K播放器</a>
                <span>|</span>
                <a href="#">高保真音响组件</a>
                <span>|</span>
                <a href="#">应用软件</a>
            </div>
            <div class="video-bottom">
                <div>
                    <a href="#"></a>
                    <a href="#">
                        <div class="digital-txt">
                            <h3>KD-75X9500H</h3>
                            <p>开辟感官新纪元</p>
                            <p>RMB <span class="money"> 19,999 </span>起</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="digital-txt">
                            <h3>A8H 系列</h3>
                            <p>聆醇音 享佳境</p>
                            <p>RMB <span class="money"> 11,999 </span>起</p>
                        </div>
                    </a>
                    <a href="#"></a>
                    <a href="#">
                        <div class="digital-txt">
                            <h3>KD-65X8000H</h3>
                            <p>臻享视听</p>
                            <p>RMB <span class="money"> 6,699 </span>起</p>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <div class="digital-txt">
                            <h3>HT-Z9F</h3>
                            <p>沉浸式临场体验</p>
                            <p>RMB <span class="money"> 5,990 </span>起</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="digital-txt">
                            <h3>HT-G700</h3>
                            <p>3.1声道环绕体验</p>
                            <p>RMB <span class="money"> 4,199 </span>起</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="digital-txt">
                            <h3>A9G系列</h3>
                            <p>声临新“视”代</p>
                            <p>RMB <span class="money"> 14,999 </span>起</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="digital-txt">
                            <h3>UBP-X700</h3>
                            <p>Ultra HD Blu-ray ™/DVD播放器</p>
                            <p>RMB <span class="money"> 2,690 </span>起</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="digital-B clearfix"><span>装机必备：</span>
                <ul>
                    <li><a>TV SideView</a></li>
                </ul>
            </div>
        </div>
        <!-- video 影音娱乐 end -->

        <!-- audio 便携音频 start -->
        <div class="audio inner">
            <div class="bambuser-top">
                <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/othericon/blocktitlelogo2.png" alt="">
                <span> &nbsp;便携音频</span>
            </div>
            <div class="digital-center">
                <a href="#">高解析度音频设备</a>
                <span>|</span>
                <a href="#">MP4/MP3播放器</a>
                <span>|</span>
                <a href="#">数码录音棒</a>
                <span>|</span>
                <a href="#">耳机</a>
                <span>|</span>
                <a href="#">无线扬声器</a>
                <span>|</span>
                <a href="#">专业麦克风</a>
                <span>|</span>
                <a href="#">应用软件</a>
                <span>|</span>
                <a href="#">360临场音效</a>
                <span>|</span>
                <a href="#">Just ear</a>
                <span>|</span>
                <a href="#">热门活动</a>
                <span>|</span>
                <a href="#">音乐鉴赏</a>
            </div>
            <div class="digital-bottom">
                <div>
                    <a href="#"></a>
                    <a href="#">
                        <div class="digital-txt">
                            <h3>MDR-Z1R</h3>
                            <p>高解析度立体声耳机</p>
                            <p>RMB <span class="money"> 12,999 </span>起</p>
                        </div>
                    </a>
                    <a href="#"></a>
                    <a href="#">
                        <div class="digital-txt">
                            <h3>WI-1000XM2</h3>
                            <p>颈挂式无线降噪耳机</p>
                            <p>RMB <span class="money"> 2,499 </span>起</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="digital-txt">
                            <h3>WF-SP800N</h3>
                            <p>强劲动力 静享律动</p>
                            <p>RMB <span class="money"> 1,499 </span>起</p>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#"></a>
                    <a href="#">
                        <div class="digital-txt">
                            <h3>NW-WM1A</h3>
                            <p>高解析度音乐播放器</p>
                            <p>RMB <span class="money"> 8,999 </span>起</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="digital-txt">
                            <h3>NW-ZX505</h3>
                            <p>安卓 高解析度音乐播放器</p>
                            <p>RMB <span class="money"> 4,199 </span>起</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="digital-txt">
                            <h3>LSPX-S2</h3>
                            <p>温馨氛围 出色音质</p>
                            <p>RMB <span class="money"> 3,500 </span>起</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="digital-txt">
                            <h3>NW-ZX300A</h3>
                            <p>天籁醇音 一手掌握</p>
                            <p>RMB <span class="money"> 2,999 </span>起</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- audio 便携音频 end -->

        <!-- phone 潮流科技 start -->
        <div class="phone inner">
            <div class="bambuser-top">
                <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/common/othericon/znyj_36x36.png" alt="">
                <span> &nbsp;潮流科技</span>
            </div>
            <div class="digital-center">
                <a href="#">智能设备/手机</a>
                <span>|</span>
                <a href="#">智能手机配件</a>
                <span>|</span>
                <a href="#">KOOV™教育机器人</a>
                <span>|</span>
                <a href="#">应用软件</a>
            </div>
            <div class="digital-bottom phone-bottom">
                <div>
                    <a href="#"></a>
                    <a href="#">
                        <div class="digital-txt">
                            <h3>可编程教育机器人 KOOV®</h3>
                            <p>激发未来创意</p>
                            <p>RMB <span class="money"> 2,999 </span>起</p>
                        </div>
                    </a>
                    <a href="#"></a>
                    <a href="#"></a>
                    <a href="#">
                        <div class="digital-txt">
                            <h3>XQZ-CVAT</h3>
                            <p>Xperia 1 II 透明翻盖手机壳</p>
                            <p>RMB <span class="money"> 399 </span>起</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="digital-B clearfix"><span>装机必备：</span>
                <ul>
                    <li><a>TV KOOV™应用程序</a><span>|</span></li>
                    <li><a>FES Closet</a></li>
                </ul>
            </div>
        </div>
        <!-- phone 潮流科技 end -->
    </div>
    <!-- mainProduct主体内容 end -->

    <!-- Club会员专区 start -->
    <div id="club">
        <div class="club inner">
            <div class="bambuser-top">
                <img src="https://www.sonystyle.com.cn/etc/designs/sonystyle/images/blocktitlelogo4.png" alt="">
                <span> &nbsp;My Sony Club会员专区</span>
            </div>
            <div class="digital-center club-center clearfix">
                <a href="#">我的索尼</a>
                <span>|</span>
                <a href="#">最新动态</a>
                <span>|</span>
                <a href="#">产品注册</a>
                <span>|</span>
                <a href="#">α café 社区</a>
            </div>
            <div class="club-bottom">
                <div>
                    <a href="#"></a>
                    <a href="#"></a>
                    <a href="#"></a>
                    <a href="#"></a>
                </div>
                <div>
                    <a href="#"></a>
                    <a href="#"></a>
                    <a href="#"></a>
                    <a href="#"></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Club会员专区 end -->

    <!-- bottom-module 专区 start -->
    <div class="bottom-module">
        <!-- bottom-module1专区1 start -->
        <div class="bottom-module1 inner">
            <ul class="clearfix">
                <li>
                    <a href="#"></a>
                    <div class="Ctxt">
                        <h4>FE 85mm F1.4 GM</h4>
                        <p>带上索尼镜头拍摄夜景人像</p>
                    </div>
                </li>
                <li>
                    <a href="#"></a>
                    <div class="Ctxt">
                        <h4>醇音系列</h4>
                        <p>DMP-Z1和IER-Z1R</p>
                    </div>
                </li>
                <li>
                    <a href="#"></a>
                    <div class="Ctxt">
                        <h4>索尼在线直播平台</h4>
                        <p>零距离与你分享</p>
                    </div>
                </li>
            </ul>
        </div>
        <!-- bottom-module1专区1 end -->

        <!-- bottom-module2专区2 start -->
        <div class="bottom-module2 inner clearfix">
            <div>
                <h4>新闻通知</h4>
                <ul>
                    <li>
                        <p>2020-12-29</p>
                        <a href="#">Xperia Transfer 2 Android™ 版升级至1.1.0.A.2.2</a>
                    </li>
                    <li>
                        <p>2020-12-15</p>
                        <a href="#">Transfer & Tagging add-on Android™ 版升级至1.3.0</a>
                    </li>
                    <li>
                        <p>2020-12-09</p>
                        <a href="#">Camera Remote SDK 版本升级至1.03</a>
                    </li>
                    <li>
                        <p>2020-11-14</p>
                        <a href="#">Headphones Connect Android™ 版升级至7.3.0</a>
                    </li>
                    <li>
                        <p>2020-10-23</p>
                        <a href="#">Music Center(原：SongPal) 音乐搜索应用程序Android™ 版升级至5.17.1</a>
                    </li>
                    <li>
                        <p>2020-10-16</p>
                        <a href="#">Imaging Edge Webcam 版本更新</a>
                    </li>
                    <li>
                        <p>2020-10-16</p>
                        <a href="#">Sound Organizer 版本更新</a>
                    </li>
                    <li>
                        <p>2020-09-15</p>
                        <a href="#">Imaging Edge Mobile Android™ 版升级至7.4.1</a>
                    </li>
                    <li>
                        <p>2020-09-15</p>
                        <a href="#">Movie Edit add-on Android™ 版升级至1.2.0</a>
                    </li>
                    <li>
                        <p>2020-09-15</p>
                        <a href="#">HEIF Converter 上线</a>
                    </li>
                    <li>
                        <p>2016-12-21</p>
                        <a href="#">索尼中国在线商城电子发票上线通知</a>
                    </li>
                    <li>
                        <p>2016-03-03</p>
                        <a href="#">关于部分VAIO个人电脑用的VGP-BPS26电池组的重要通知</a>
                    </li>
                </ul>
            </div>
            <div>
                <h4>关注我们</h4>
                <ul class="clearfix">
                    <li>
                        <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/images/bottom_share1.jpg" alt="">
                        <p>索尼中国</p>
                        <p>官方微信服务号</p>
                    </li>
                    <li>
                        <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/images/sony_china_app.jpg" alt="">
                        <p>索尼中国APP</p>
                        <a href="#">点击查看</a>
                    </li>
                    <li>
                        <img src="https://www.sonystyle.com.cn/content/dam/sonystyle/images/bottom_share2.png" alt="">
                        <p>索尼官方频道</p>
                        <a href="#">点击查看</a>
                    </li>
                </ul>
                <h4>热门产品</h4>
                <ol class="clearfix">
                    <li><a href="#">PS4游戏</a></li>
                    <li><a href="#">索尼电视</a></li>
                    <li><a href="#">索尼手机</a></li>
                    <li><a href="#">PlayStation</a></li>
                    <li><a href="#">查看更多 +</a></li>
                </ol>
            </div>
        </div>
        <!-- bottom-module2专区2 end -->
    </div>
    <!-- bottom-module 专区 end -->

    <!-- foot 底部模块 start -->
    <div id="foot">
        <div class="foot inner">
            <div class="foot-top">
                <ul>
                    <li><a href="#">正品保障</a></li>
                    <li><a href="#">专业售前</a></li>
                    <li><a href="#">便捷配送</a></li>
                    <li><a href="#">无忧退换</a></li>
                    <li><a href="#">优质售后</a></li>
                    <li><a href="#">一站购物</a></li>
                    <li><a href="#">会员尊享</a></li>
                    <li><a href="#">增值服务</a></li>
                </ul>
            </div>
            <div class="foot-center clearfix">
                <div class="foot-c1">
                    <a href="#" style="margin-top: 0px;">Sony Store 直营店</a>
                    <p>你周围的经销商</p>
                    <a style="margin-bottom:15px;" href="#">就近门店查询</a>
                    <a href="#">就近维修站查询</a>
                </div>
                <div class="foot-c2">
                    <p>关注我们</p>
                    <div class="wx-wrap">
                        <div class="wx-box">
                            <a class="wx-btn" href="#" rel="nofollow">索尼（中国）官方微博</a>
                        </div>
                        <div class="wx-box">
                            <a class="wx-btn" href="#" rel="nofollow">索尼（中国）官方微信</a>
                        </div>
                    </div>
                    <a class="phone-client icon-tel" href="#">手机客户端</a>
                    <a class="icon-tel" href="#">在线服务</a>
                </div>
                <ul class="server-support clearfix">
                    <li>
                        <p>如何订购</p>
                        <ul class="support-list">
                            <li><a target="_blank" href="#">在线订购指南</a></li>
                            <li><a target="_blank" href="#">销售条款</a></li>
                            <li><a target="_blank" href="#">付款方式</a></li>
                            <li><a target="_blank" href="#">货物配送</a></li>
                            <li><a target="_blank" href="#">收货流程</a></li>
                            <li><a target="_blank" href="#">退货流程</a></li>
                        </ul>
                    </li>
                    <li>
                        <p>会员天地</p>
                        <ul class="support-list">
                            <li><a target="_blank" href="#">我的索尼</a></li>
                            <li><a target="_blank" href="#">最新动态</a></li>
                            <li><a target="_blank" href="#">产品注册</a></li>
                            <li><a target="_blank" href="#">My Sony学院</a></li>
                            <li><a target="_blank" href="#">会员权益</a></li>
                        </ul>
                    </li>
                    <li>
                        <p>服务与支持</p>
                        <ul class="support-list">
                            <li><a target="_blank" href="#">产品说明书</a></li>
                            <li><a target="_blank" href="#">驱动程序检索</a></li>
                            <li><a target="_blank" href="#">常见问题</a></li>
                            <li><a target="_blank" href="#">保修条款</a></li>
                            <li><a target="_blank" href="#">维修网络查询</a></li>
                            <li><a target="_blank" href="#">索尼手机客户服务</a></li>
                            <li><a target="_blank" href="#">服务动态</a></li>
                        </ul>
                    </li>
                    <li>
                        <p>相关链接</p>
                        <ul class="support-list">
                            <li><a href="#">在线直播</a></li>
                            <li><a href="#">应用中心</a></li>
                            <li><a href="#">视频教程中心</a></li>
                            <li><a href="#">行业解决方案</a></li>
                            <li><a href="#">新闻中心</a></li>
                            <li><a href="#">影像产品正品认证</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="foot-bottom">
                <div class="copy-top clearfix">
                    <a href="">索尼中国首页</a>
                    <a href="">联系我们</a>
                    <a href="" rel="nofollow">责任声明</a>
                    <a href="" rel="nofollow">营业执照</a>
                    <a href="" rel="nofollow">索尼隐私政策</a>
                    <span class="fr">2021索尼（中国）有限公司 版权所有</span>
                </div>
                <div class="ft-copy-btm clearfix">
                    <span>本网站包含推销产品或服务的广告</span>
                    <span><a href="" target="_blank">京ICP备05036958号</a></span>

                    <span><a href="" target="blank" class="copy-icon" rel="nofollow">京公网安备 11010502031585号</a></span>
                    <span style="margin-left:27px"><a href="" target="blank" rel="nofollow"> 诚信网站认证 </a></span>
                    <span class="fr">您访问本网站将会被监控，请点击<a id="goDeclare" href="javascript:;">此处</a>获得详细信息 </span>
                </div>
            </div>
        </div>
    </div>
    <!-- foot 底部模块 end -->
</body>

</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name='keywords' content='北京租房,北京租房网,北京租房信息网,北京租房子,北京房屋出租,北京租房价格,巴乐兔租房'>
	<meta name='description' content='【零佣金,月付租,房东直租】【巴乐兔租房】是北京租房领导品牌,巴乐兔努力为您提供经济舒适的房源信息,让您一步到位租到好房子!'>
	<title>北京租房_北京租房网_北京房屋出租-【零佣金 月付租 租房就找巴乐兔】</title>
	
    <link rel="shortcut icon" href="http://css.baletoo.cn/static/pc/images/favicon.ico" type="image/x-icon" />
    <base href="./assets/home/">
    <link rel="stylesheet" type="text/css" href="css/common_1.css"/>
    <script src="js/jquery.js"></script>
	<script src="home/js/layui.js"></script>
    <script src="home/js/sea.js"></script>
    <script type="text/javascript">
        seajs.config({
            alias: {
                'monitor':'//js.baletoo.cn/static/pc/js/monitor_call.js?2016'
            }
        });
        var  _hmt  =  _hmt  ||  [];
        var g_config = [];
        g_config['city'] = 'bj';
        g_config['from'] = 'PC';
        g_config['dir'] = '//js.baletoo.cn';
        g_config['model_name'] = '';
    </script>
</head>
<body>
<div class="header">
    <div class="out">
        <div class="logo"><a href="/"><img src="images/logo-index.png"/></a></a></div>
        <div class="region">
            <a href="http://bj.baletu.com">
                <span class="icon icon-pos-white"></span>
                <span class="icon icon-down-white"></span>
                北京            </a>
            <div class="region_down">
                <ul>
                    <li><a id="navM1" mark="I1" href="http://sh.baletu.com/">上海</a></li>
                    <li><a id="navM2" mark="I2" href="http://bj.baletu.com/">北京</a></li>
                </ul>
            </div>
        </div>
        <div class="nav">
            <ul>
                <li><a id="navM3" mark="I3" href="<?php echo __URL__; ?>?r=index/home"  >首页</a></li>
                <li><a id="navM4" mark="I4" href="<?php echo __URL__; ?>?r=index"  >立即找房</a></li>
                <li class="downApp-link">
                    <a id="navM5" mark="主菜单" href="javascript:void(0);" >下载APP</a>
                    <div class="pos-r">
                        <span class="appPage-pop"><img src="picture/apppage-popnew.png" /></span>
                    </div>
                </li>
                <li><a id="navM6" mark="I6" href="<?php echo __URL__; ?>?r=index/yuyue"  >发布房源</a></li>
            </ul>
        </div>
                <div class="login-link">
            <ul class="clearfix">
                <li><a id="navM7" mark="I7" href="<?php echo __URL__; ?>?r=index/login">登录</a></li>
                <li>|</li>
                <li><a id="navM8" mark="I8" href="<?php echo __URL__; ?>?r=index/sign">注册</a></li>
            </ul>
        </div>
            </div>
</div>
<script type="text/javascript">
    $(".logout").click(function(){
        $.ajax({
            url:"/login/logout",
            type: 'POST',
            data: '',
            dataType: 'json',
            beforeSend: function() {
            },
            success: function(msg) {
                if(msg.status == 0){
                    window.location.reload();
                }
            }
        });
    });
</script><style>
html { overflow-x: hidden; overflow-y: auto; }
</style>
<?php echo $content; ?>
    <script>
       $(function(){
            $('.unit-inp input').click(function(){
                $('.unit-inp').addClass('prompt');
            })
        })
    
        var isRunning = false
        function dealTimerwater(){
            var timers = 60;
            var daoInterval = setInterval(function(){
                $("#sendBtn").html(--timers+"(s)");
                if(timers == 0){
                    clearInterval(daoInterval);
                    $("#sendBtn").html("获取验证码");
                    isRunning = false;
                }
            },1000);
        }

        function login(){//快速登录
            var formObj = document.forms['LoginForm'];
            if($('#Instructions').is(':checked')==false){
                alert('请阅读并选中服务条款');
                return false;
            }
            $.post('/login/login',$(formObj).serialize(),function(data){
                var data = eval('('+data+')');
                if(data['code'] == 0){
                    ga('set', 'userId', data['user_id']);
                    if(formObj['return_url'].value == ''){
                        window.location.href = 'http://develop.baletoo.com';
                    }else{
                        window.location.href = formObj['return_url'].value;
                    }
                }else{
                    if(data['code'] == 1001){
                        $(".mobile_text").html(data['message']);
                        $(".password_text").html('');
                        $(".code_text").html('');

                    }else if(data['code'] == 1002){
                        $(".mobile_text").html('');
                        $(".password_text").html(data['message']);
                        $(".code_text").html('');
                    }else if(data['code'] == 1003){
                        $(".mobile_text").html('');
                        $(".password_text").html('');
                        $(".code_text").html(data['message']);
                    }
                }
            });
        }

        function passwordlogin(){//密码登录
            var formObj = document.forms['LoginForm1'];
            $.post('/login/passwordlogin',$(formObj).serialize(),function(data){
                var data = eval('('+data+')');
                if(data['code'] == 0){
                    ga('set', 'userId', data['user_id']);
                    if(formObj['return_url'].value == ''){
                        window.location.href = 'http://develop.baletoo.com';
                    }else{
                        window.location.href = formObj['return_url'].value;
                    }
                }else{
                    if(data['code'] == 1001){
                        $(".mobile_text").html(data['message']);
                        $(".password_text").html('');
                        $(".code_text").html('');
                    }else if(data['code'] == 1002){
                        $(".mobile_text").html('');
                        $(".password_text").html(data['message']);
                        $(".code_text").html('');
                    }else if(data['code'] == 1003){
                        $(".mobile_text").html('');
                        $(".password_text").html('');
                        $(".code_text").html(data['message']);
                    }
                }
            });
        }

        function sendVerifyCode(type){
            if(isRunning){
                return false;
            }
            var formObj = document.forms['LoginForm'];
            formObj['type'].value = type;
            isRunning = true;
            $.post('/login/sendVerifyCode',$(formObj).serialize(),function(data){
                var data = eval('('+data+')');
                if(data['code'] == 0){
                    dealTimerwater();
                    $(".mobile_text").html('');
                    $(".password_text").html('');
                    $(".code_text").html(data['message']);
                    //跳转回原来的页面
                }else{
                    $(".mobile_text").html('');
                    $(".password_text").html('');
                    $(".code_text").html(data['message']);
                    isRunning = false;
                }
                
            });
        }
        $('.enter1').keydown(function(e){
            if(e.keyCode==13){
                login(); //处理事件
            }
        });
        $('.enter2').keydown(function(e){
            if(e.keyCode==13){
                passwordlogin(); //处理事件
            }
        });
    </script>

<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/search.js"></script>
<script src="js/jquery.lazyload.js"></script>
<div class="slogan">
    <div class="out">
        <ul class="clearfix">
            <li>
                <p><i class="icon icon-zhen"></i></p>
                <h4>房源实拍</h4>
            </li>
            <li>
                <p><i class="icon icon-mian"></i></p>
                <h4>0元佣金</h4>
            </li>
            <li>
                <p><i class="icon icon-yue"></i></p>
                <h4>房租月付</h4>
            </li>
            <li>
                <p><i class="icon icon-yu"></i></p>
                <h4>在线预约</h4>
            </li>
            <li>
                <p><i class="icon icon-zu"></i></p>
                <h4>在线服务</h4>
            </li>

        </ul>
    </div>
</div>
<div class="foot">
    <div class="out clearfix">
        <div class="foot-l about-link">
            <dl>
                <dt>关于我们</dt>
                <dd class="">
                    <a href="/about">关于我们</a>
                    <a href="http://partner.baletu.com">伙伴登录</a>
                </dd>
            </dl>
            <dl>
                <dt>合作公寓</dt>
                <dd>
                    <span>青年汇</span>
                    <span>银桥公寓</span>
                    <span>爱家精品公寓 ...</span>
                </dd>
            </dl>
        </div>
        <div class="foot-l about-link">
            <dl>
                <dt>意见反馈</dt>
                <dd><a href="mailto:service@baletu.com">Mail：service@baletu.com</a></dd>
            </dl>
            <dl>
                <dt><a href = "/contact">联系我们</a></dt>
                <dd class="">
                <a href="/contact">周一～周日   8:00～23:00   400-183-0033</a>
                </dd>
            </dl>
        </div>
        <div class="foot-r clearfix">
            <div class="code-pic" style="display: none;">
                <img id="foot_download_app" mark="底部" src="picture/codepicnew01.png" />
                <p>扫码下载巴乐兔APP</p>
            </div>
            <div class="code-pic">
                <img src="images/erweima.jpg" width="200" />
                <p>扫码关注微信号</p>
            </div>
        </div>
        <div class="clear"></div>
                </div>
    </div>
</div>
<div class="foot-pc"> ©2015  上海万间信息技术有限公司   &nbsp; &nbsp;     沪ICP备15004537号   &nbsp; &nbsp;     张江高科晨晖路88号1号楼4层</div>
<script>
    $(function() {
        $("img.lazy").lazyload({

            effect : "fadeIn"
        });
    });
</script>

<script>
    seajs.use("monitor",function(mc){
        mc.bindMonitor();
    });

</script>

<noscript>
    <div style="display:none;">
       
    </div>
</noscript>

</body>
</html>
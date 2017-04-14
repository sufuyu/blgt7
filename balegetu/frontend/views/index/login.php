


<div class="banner">
    <div class="banner-ct out">
        <div class="login">
            <div class="login-tab">
                <a id="fas-login-a" mark="快速登录" onClick="$('#psw-login-a').removeClass('active');$('#fas-login-a').addClass('active');$('.fas-login').show();$('.psw-login').hide();"  href="javascript:void(0)" class="active">快速登录</a>
                <span class="login-tab-line">|</span>
                <a id="psw-login-a" mark="密码登录" onClick="$('#fas-login-a').removeClass('active');$('#psw-login-a').addClass('active');$('.psw-login').show();$('.fas-login').hide();"  href="javascript:void(0)" >密码登录</a>
            </div>
            <div class="fas-login"> <!-- 快速登录 -->
                <form action="" onsubmit="return 1 != 1" name="LoginForm" class="">
                    <input type="hidden" name="return_url" value="http://bj.baletu.com/register" />
                    <input type="hidden" name="type" value="" />
                    <div class="login-inp">
                        <div class="unit-inp ">
                            <input type="tel" name="mobile" placeholder="手机号码" maxlength="11" required="required">
                            <p class="prompt-text mobile_text"></p>
                        </div>

                        <div class="unit-inp clearfix">

                            <input type="text" class="inp-code" name="verify_code" placeholder="验证码" class="enter1" />
                            <span id="sendBtn" mark="登陆页获取验证码" class="getCodee" onclick="javacript:sendVerifyCode(1)">获取验证码</span>
                            <p class="prompt-text code_text"></p>
                        </div>
                        <div class="login-bot-text"> 
                            <input class="icon icon-checkbox-n"  type="checkbox" checked ='checked' id="Instructions">
                            <label>我已阅读并同意<a mark="登录页使用条款及隐私说明" class="agreement" href="javascript:void(0)">《使用条款及隐私说明》</a></label>
                        </div>
                    
                    </div>
                    <div class="center-box mt35"><a id="login_index_login" mark="登录" onClick="javascript:login();" href="#"  type="button"  class="btn-red">登录</a></div>
                    <div class="center-box"><dd class="regg">还没有账户？点击<a id="login_index_zhuce" mark="注册" href="<?php echo __URL__; ?>?r=index/sign"  class="link-red">注册</a></dd></div>
                </form>
            </div> 

           <div class="psw-login" style="display: none;"> <!-- 密码登录 -->
                <form action="" onsubmit="return 1 != 1" name="LoginForm1" class="">
                    <input type="hidden" name="return_url" value="http://bj.baletu.com/register" />
                    <!-- <input type="hidden" name="type" value="" /> -->
                    <div class="login-inp">
                        <div class="unit-inp ">
                            <input type="tel" name="mobile" placeholder="手机号码" maxlength="11" required="required">
                            <p class="prompt-text mobile_text"></p>
                        </div>
                        <div class="unit-inp ">
                            <input type="password" name="password" placeholder="请输入密码" required="required" class="enter2">
                            <p class="prompt-text password_text"></p>
                        </div>
                    </div>
                    <div class="center-box mt35"><a id="login_index_login_psw" mark="登录" onClick="javascript:passwordlogin();" href="#"  type="button"  class="btn-red">登录</a></div>
                    <div class="center-box"><dd class="reg">还没有账户？点击<a id="login_index_zhuce_psw" mark="注册" href="/register"  class="link-red">注册</a></dd> <dd class="register"><a id="forget_psw" mark="忘记密码" href="/forget"  class="link-red">忘记密码?</a></dd></div>
                </form>
          </div>   
        </div>
    </div>
</div>



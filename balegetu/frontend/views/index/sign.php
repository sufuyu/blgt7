<style>
html { overflow-x: hidden; overflow-y: auto; }
</style>
<div class="banner">
    <div class="banner-ct out">
        <div class="login">
            <form action="" onsubmit="return 1 != 1" name="LoginForm" class="">
                <input type="hidden" name="return_url" value="http://www.baletu.com" />
                <input type="hidden" name="type" value="" />
                <div class="login-inp">
                    <h1 style="text-align: center;">欢迎注册</h1>
                    <div class="unit-inp ">
                        <input type="tel" name="mobile_2017" id="phoneNumble" placeholder="手机号码" maxlength="11" required="required">
                    </div>
                    <div class="unit-inp ">
                        <input type="password" name="password" placeholder="请输入密码" required="required">
                        <p class="prompt-text password_text"></p>
                     </div>
                    <div class="unit-inp clearfix">

                        <input type="text" class="inp-code" name="verify_code" placeholder="验证码" required="required" class="enter" >
                        <span id="sendBtn" mark="注册页获取验证码" class="getCodee" onclick="javacript:sendVerifyCode(1)">获取验证码</span>
                         <p class="prompt-text code_text"></p>
                    </div>

                    <div class="login-bot-text"> 
                    <input class="icon icon-checkbox-n"  type="checkbox" checked ='checked' id="Instructions">
                    <label>我已阅读并同意<a id="tksm" mark="注册页使用条款及隐私说明"  class="agreement" href="javascript:void(0)">《使用条款及隐私说明》</a></label>
                    </div>
                </div>
                <div class="center-box mt35"><a id="register_index_zhuce" mark="注册" onClick="javascript:login();" href="#"  type="button"  class="btn-red" >注册</a></div>
                <div class="center-box "><dd class="regg" >已有账户？点击<a id="register_index_login" mark="登录" href="<?php echo __URL__; ?>?r=index/login"  class="link-red">登录</a></dd> </div>
            </form>
        </div>
    </div>
</div>
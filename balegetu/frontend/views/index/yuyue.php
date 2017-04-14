<style type="text/css">
    .title{text-align: center;margin-top: 50px;}
    span{color: red;}
    .content-xingxi{margin-top: 50px;}
    input{width: 250px;height: 30px;}
    input{border: 1px solid #A3A3A3;border-radius:3px;padding: 4px;}
    .select-t{width: 260px;height: 40px;border-radius:3px;}
    .submit{text-align:center;width: 100%;height: 50px;margin-top: 50px;}
    .unit-pro-line{ padding: 0 30px 20px; border-bottom: #d6d6d6 solid 1px;}
    .cell_content{height: 200px;}
    .cell_content-p{height: 180px ;float: left;}
    .cell-content-t{ height: 180px; float: left; margin-left: -50px;}
    .cell-content-l{float: left;height: 180px; text-align: center; margin-left: 150px;  }
    .cell_pic_p{float: left;text-align: center;margin-left: 100px;margin-top: 60px;}
    .cell_pic_w{float: left;text-align: center;margin-top: 60px;}
    .cell_pic_t{float: left;left;margin-left: 50px;margin-top: 60px;}
    .line{ padding: 0px 30px 20px; border-left: #d6d6d6 solid 1px;height: 200px;text-align: center;}
    h2{ color: #EE3844; margin-bottom: 6px;}
    p{font-size: 15px;}
</style>

<div class="creat_pc">
    <div><img src="//css.baletoo.cn/static/pc/images/creat_house_pic_n.jpg"style="width:100% ;height:100%;"></div>
 </div>
<div class="main out">

    <div class="title">
        <h1>填写您的基本信息，<span>巴乐兔</span>工作人员会在30分钟内联系您～</h1>
    </div>
    <div class="content-xingxi" style="height: 300px">
        <form name="myform"  action="" onsubmit="return fafangConfirm(this)"; enctype="">
            <table  cellspacing="25" align="center" >
                <tr>
                    <td style="height: 40px;"><label for="txtname" >姓 &nbsp&nbsp名：</label></td>
                    <td><input type="text" id="name" name="name" /></td>
                    <td width="125px;">&nbsp&nbsp</td>
                    <td><label for="txt">手机号：</label></td>
                    <td><input type="text" id="mobile" name="mobile" maxlength="11"/></td>
                </tr>

                <tr>
                    <td style="height: 40px;"><label for="txt">性 &nbsp&nbsp别：</label></td>
                    <td>
                        <select class="select-t" name="gender"id="gender">
                            <option value="男" >男</option>
                            <option value="女" >女</option>
                        </select>
                    </td>
                    <td>&nbsp&nbsp</td>
                    <td><label for="txt">城 &nbsp&nbsp市：</label></td>
                    <td>
                        <select class="select-t" name="city" id="city">
                            <option value="上海市">上海市</option>
                            <option value="北京市">北京市</option>
                        </select>
                    </td>

                </tr>
            </table>
            <div class="submit">
                <input id="publish_house" mark="提交" type="submit" value="提交发房申请" style="text-align: center ;width: 250px;height: 50px;background-color: #EE3844;color: #FFFFFF;border:none"/>
            </div>
        </form>
    </div>
    <div class="unit-pro-line"></div>
    <div class="cell_content">

        <div class="cell_content-p">
            <div class="cell_pic_p"><img src="//css.baletoo.cn/static/pc/images/creat_house_c.png" style="margin-top: 20px;"></div>
            <div class="cell_pic_t">
                <h2><strong>400-183-0033</strong></h2>
                <p>直接拨打热线客服也可以哦</p>
                <p>工作时间：周一～周日   8:00～23:00</p>
            </div>

        </div>
        <div class="cell-content-l"><div class="line"></div></div>

        <div class="cell-content-t" >
            <div class="cell_pic_p"><img src="//css.baletoo.cn/static/pc/images/creat_house_w.png"></div>
            <div class="cell_pic_t">
                <h2><strong>关注巴乐兔公众号</strong></h2>
                <p>点击公众号下的“发布”就可以</p>
                <p>发布房源啦～</p>
            </div>
        </div>
    </div>

    <div class="unit-pro-line"></div>
</div>


<script>
    var isRunning = false
    function fafangConfirm(){
        var name = document.getElementById("name").value;
        if(name == ""){
            alert("姓名不能为空");
            return false;
        }
        if(isRunning){
            return false;
        }
        var formObj = document.forms['myform'];
        isRunning = true;
        $.post('/Creathouse/creathouse',$(formObj).serialize(),function(data){
            var data = eval('('+data+')');
            console.log(data['code']);
            if(data['code'] == 0){
//                window.location.href = 'http://develop.baletoo.com';
                alert(data['message']);
            }else{
                alert(data['message']);
            }
            isRunning = false;
        });
        return false;
    }


</script>


<script type="text/javascript" src="/static/pc/js/common.js"></script>
<script type="text/javascript" src="//js.baletoo.cn/static/pc/js/search.js"></script>
<script src="//cdn.bootcss.com/jquery_lazyload/1.9.7/jquery.lazyload.js"></script>


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
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/869793451/?guid=ON&amp;script=0"/>
    </div>
</noscript>
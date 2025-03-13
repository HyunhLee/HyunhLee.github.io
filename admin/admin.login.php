<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="imagetoolbar" content="no">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<title>샤이닝 - 기업 홈페이지 샘플</title>
<link rel="stylesheet" href="https://co1096.shiningcorp.com/css/default.css">
<link rel="stylesheet" href="https://co1096.shiningcorp.com/admin/css/admin_mode.css">
<link rel="stylesheet" href="https://co1096.shiningcorp.com/css/user.css">
<link rel="stylesheet" href="https://co1096.shiningcorp.com/css/page_style.css">
<style>
@import url(https:https://fonts.googleapis.com/earlyaccess/nanumpenscript.css);
@import url(https:https://fonts.googleapis.com/earlyaccess/nanumbrushscript.css);
@import url(https:https://fonts.googleapis.com/earlyaccess/nanumgothic.css);
@import url(https:https://fonts.googleapis.com/earlyaccess/nanummyeongjo.css);
@import url(https:https://fonts.googleapis.com/earlyaccess/nanumgothiccoding.css);

/* 나눔스퀘어 */
@font-face {
	font-family: 'NanumSquare';
	src: url(https://font.shiningcorp.com/css/font/NanumSquareR.eot);
	src: url(https://font.shiningcorp.com/css/font/NanumSquareR.eot?#iefix) format('embedded-opentype'),
		 url(https://font.shiningcorp.com/css/font/NanumSquareR.woff) format('woff'),
		 url(https://font.shiningcorp.com/css/font/NanumSquareR.ttf) format('truetype');
}

/* 본고딕 */
@font-face {
	font-family: 'notokr-thin';
	src: url(https://font.shiningcorp.com/css/font/notokr-thin.eot);
	src: url(https://font.shiningcorp.com/css/font/notokr-thin.eot?#iefix) format('embedded-opentype'),
		 url(https://font.shiningcorp.com/css/font/notokr-thin.woff2) format('woff2'),
		 url(https://font.shiningcorp.com/css/font/notokr-thin.woff) format('woff'),
		 url(https://font.shiningcorp.com/css/font/notokr-thin.ttf) format('truetype'),
		 url(https://font.shiningcorp.com/css/font/notokr-thin.svg#notokr-thin) format('svg');
	font-weight: normal;
	font-style: normal;
}
@font-face {
    font-family: 'notokr-regular';
    src: url(https://font.shiningcorp.com/css/font/notokr-regular.eot);
    src: url(https://font.shiningcorp.com/css/font/notokr-regular.eot?#iefix) format('embedded-opentype'),
         url(https://font.shiningcorp.com/css/font/notokr-regular.woff2) format('woff2'),
         url(https://font.shiningcorp.com/css/font/notokr-regular.woff) format('woff'),
         url(https://font.shiningcorp.com/css/font/notokr-regular.svg#notokr-regular) format('svg');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'notokr-medium';
    src: url(https://font.shiningcorp.com/css/font/notokr-medium.eot);
    src: url(https://font.shiningcorp.com/css/font/notokr-medium.eot?#iefix) format('embedded-opentype'),
         url(https://font.shiningcorp.com/css/font/notokr-medium.woff2) format('woff2'),
         url(https://font.shiningcorp.com/css/font/notokr-medium.woff) format('woff'),
         url(https://font.shiningcorp.com/css/font/notokr-medium.svg#notokr-medium) format('svg');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'notokr-light';
    src: url(https://font.shiningcorp.com/css/font/notokr-light.eot);
    src: url(https://font.shiningcorp.com/css/font/notokr-light.eot?#iefix) format('embedded-opentype'),
         url(https://font.shiningcorp.com/css/font/notokr-light.woff2) format('woff2'),
         url(https://font.shiningcorp.com/css/font/notokr-light.woff) format('woff'),
         url(https://font.shiningcorp.com/css/font/notokr-light.ttf) format('truetype'),
         url(https://font.shiningcorp.com/css/font/notokr-light.svg#notokr-light) format('svg');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'notokr-demilight';
    src: url(https://font.shiningcorp.com/css/font/notokr-demilight.eot);
    src: url(https://font.shiningcorp.com/css/font/notokr-demilight.eot?#iefix) format('embedded-opentype'),
         url(https://font.shiningcorp.com/css/font/notokr-demilight.woff2) format('woff2'),
         url(https://font.shiningcorp.com/css/font/notokr-demilight.woff) format('woff'),
         url(https://font.shiningcorp.com/css/font/notokr-demilight.ttf) format('truetype'),
         url(https://font.shiningcorp.com/css/font/notokr-demilight.svg#notokr-demilight) format('svg');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'notokr-bold';
    src: url(https://font.shiningcorp.com/css/font/notokr-bold.eot);
    src: url(https://font.shiningcorp.com/css/font/notokr-bold.eot?#iefix) format('embedded-opentype'),
         url(https://font.shiningcorp.com/css/font/notokr-bold.woff2) format('woff2'),
         url(https://font.shiningcorp.com/css/font/notokr-bold.woff) format('woff'),
         url(https://font.shiningcorp.com/css/font/notokr-bold.svg#notokr-bold) format('svg');
    font-weight: normal;
    font-style: normal;

}

@font-face {
    font-family: 'notokr-black';
    src: url(https://font.shiningcorp.com/css/font/notokr-black.eot);
    src: url(https://font.shiningcorp.com/css/font/notokr-black.eot?#iefix) format('embedded-opentype'),
         url(https://font.shiningcorp.com/css/font/notokr-black.woff2) format('woff2'),
         url(https://font.shiningcorp.com/css/font/notokr-black.woff) format('woff'),
         url(https://font.shiningcorp.com/css/font/notokr-black.ttf) format('truetype'),
         url(https://font.shiningcorp.com/css/font/notokr-black.svg#notokr-black) format('svg');
    font-weight: normal;
    font-style: normal;

}
/* 아리따 */
@font-face {
	font-family: 'arita-thin';
	src: url(https://font.shiningcorp.com/css/font/arita-Thin.eot);
	src: url(https://font.shiningcorp.com/css/font/arita-Thin.eot?#iefix) format('embedded-opentype'),
		 url(https://font.shiningcorp.com/css/font/arita-Thin.woff) format('woff'),
		 url(https://font.shiningcorp.com/css/font/arita-Thin.ttf) format('truetype');
	font-weight: normal;
	font-style: normal;
}
@font-face {
	font-family: 'arita-light';
	src: url(https://font.shiningcorp.com/css/font/arita-Light.eot);
	src: url(https://font.shiningcorp.com/css/font/arita-Light.eot?#iefix) format('embedded-opentype'),
		 url(https://font.shiningcorp.com/css/font/arita-Light.woff) format('woff'),
		 url(https://font.shiningcorp.com/css/font/arita-Light.ttf) format('truetype');
	font-weight: normal;
	font-style: normal;
}
@font-face {
	font-family: 'arita-medium';
	src: url(https://font.shiningcorp.com/css/font/arita-Medium.eot);
	src: url(https://font.shiningcorp.com/css/font/arita-Medium.eot?#iefix) format('embedded-opentype'),
		 url(https://font.shiningcorp.com/css/font/arita-Medium.woff) format('woff'),
		 url(https://font.shiningcorp.com/css/font/arita-Medium.ttf) format('truetype');
	font-weight: normal;
	font-style: normal;
}
@font-face {
	font-family: 'arita-semibold';
	src: url(https://font.shiningcorp.com/css/font/arita-SemiBold.eot);
	src: url(https://font.shiningcorp.com/css/font/arita-SemiBold.eot?#iefix) format('embedded-opentype'),
		 url(https://font.shiningcorp.com/css/font/arita-SemiBold.woff) format('woff'),
		 url(https://font.shiningcorp.com/css/font/arita-SemiBold.ttf) format('truetype');
	font-weight: normal;
	font-style: normal;
}
@font-face {
	font-family: 'arita-bold';
	src: url(https://font.shiningcorp.com/css/font/arita-Bold.eot);
	src: url(https://font.shiningcorp.com/css/font/arita-Bold.eot?#iefix) format('embedded-opentype'),
		 url(https://font.shiningcorp.com/css/font/arita-Bold.woff) format('woff'),
		 url(https://font.shiningcorp.com/css/font/arita-Bold.ttf) format('truetype');
	font-weight: normal;
	font-style: normal;
}
</style><!--[if lte IE 8]>
<script src="https://co1096.shiningcorp.com/js/html5.js"></script>
<![endif]-->
<script>
// 자바스크립트에서 사용하는 전역변수 선언
var g5_url       = "https://co1096.shiningcorp.com";
var g5_bbs_url   = "https://co1096.shiningcorp.com/bbs";
var g5_is_member = "";
var g5_is_admin  = "";
var g5_is_mobile = "";
var g5_bo_table  = "";
var g5_sca       = "";
var g5_editor    = "";
var g5_cookie_domain = "";
</script>
<script src="https://co1096.shiningcorp.com/js/jquery-1.8.3.min.js"></script>
<script src="https://co1096.shiningcorp.com/js/jquery-ui.js"></script>
<script src="https://co1096.shiningcorp.com/js/jquery.menu.js"></script>
<script src="https://co1096.shiningcorp.com/js/common.js"></script>
<script src="https://co1096.shiningcorp.com/js/wrest.js"></script>
<script src="https://co1096.shiningcorp.com/js/placeholders.min.js"></script>
<link rel="stylesheet" href="https://co1096.shiningcorp.com/js/font-awesome/css/font-awesome.min.css">
</head>
<body>
<style>
/* 디자인샘플 보러가기 */
#goToDesign{position:fixed;z-index:100;width:100%;padding:7px 0;border-bottom:1px solid #fff073;font-size:12px;text-align:center;background-color:#fffbd9;font-family:dotum} 
#goToDesign a{padding-left:10px;font-weight:bold;color:#f96319}
#goToDesign a:hover{text-decoration:underline}
</style>

<!-- 디자인샘플 보러가기 { -->
<div id="goToDesign">보고계신 사이트는 <b>디자인샘플</b> 사이트 입니다. <b>다른 디자인</b>을 원하실 경우 오른쪽 링크를 클릭하세요. <a target="_blank" href="http://www.hdweb.co.kr/sh_page/design.html">디자인샘플 보러가기</a></div>
<!-- } -->

<meta charset="utf-8">
<!-- placeholder 익스 하위버전 대응 -->
<!--[if lte IE 9]>
<script src="/js/placeholders.min.js"></script>
<![endif]-->

<div id="sh_adm_login">
	<h3>admin login</h3>
    <div class="bar"></div>
    <h2><span>hdweb</span> 홈페이지 제작</h2>
    <form name="flogin" action="/bbs/login_check.html" onsubmit="return flogin_submit(this);" method="post" >
    <input type="hidden" name="url" value='https://co1096.shiningcorp.com/admin/'>
    	<div>
            <input type="text" name="mb_id" readonly value="adm" />
            <input type="password" name="mb_password" value="" />
        </div>
        <input type="submit" accesskey="s" value="로그인" class="login_btn" />
    </form>
    <div class="txt_area">
                <div class="yadmpw">홈페이지 운영을 위한 관리자모드 로그인 페이지입니다.</div>
                <p>홈페이지 제작문의 <span class="tel">1544-6062</span></p>
	</div>        
</div>
<?php
// 初期化
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta charset="utf-8"><!-- 文字化け防止 -->
	<link rel="stylesheet" href="portfolio.css">
  <title>TOMOYA SEKI</title>
</head>
<body>
<script src="portfolio.js"></script>
<script>
    window.onload = function(){
        age_calc();
    }
</script>
<header id="hed" name="hed" style="text-align: center;">
    <nav id="nav" name="nav">
        <ul>
            <li id="All_li" name="All_li"><img class="logo" src="../img/icon_t.png" /></li>
            <li id="All_li" name="All_li"><img class="img_nikukyu" src="../img/nikukyu.png" />トップ</li>
            <li id="All_li" name="All_li"><img class="img_nikukyu" src="../img/nikukyu.png" />サイトについて</li>
            <li id="All_li" name="All_li"><img class="img_nikukyu" src="../img/nikukyu.png" />経歴</li>
            <li id="All_li" name="All_li"><img class="img_nikukyu" src="../img/nikukyu.png" />提供中サービス</li>
            <li id="All_li" name="All_li"><img class="img_nikukyu" src="../img/nikukyu.png" />愛犬</li>
        </ul>
    </nav>
</header>
<table class="title_table">
    <tr>
        <td class="td"><img class="adel-head head" src="../img/head_phone_adel.svg" /></td>
        <td class="td"></td>
        <td class="td"></td>
    </tr>
    <tr>
        <td class="td"></td>
        <td class="td">
            <!--         <div class="video-box overlay">  -->
            <video class="title_mp4" loop muted autoplay playsinline >
              <source type="video/mp4" src="../video/title.mp4">
              <p>準備中・・・・・・・・・・・・</p>
            </video>
            <!--        </div> -->
        </td>
        <td class="td"></td>
    </tr>
    <tr>
        <td colspan="3" class="td">
        <div class="title_name"><label>TOMOYA Lab!</label></div>
            <div class="title_dsc">
                <label class="title_discript"; id="age" name="age"></label>
                <label class="title_discript";></br>liking：　愛犬と過ごすこと/筋トレ/ゲーム/釣り/製作</label>
                <label class="title_discript";></br>activity：　<a href=" https://coconala.com/services/2430498 ">なろうエンジニアスクール</a></label>
            </div>
        </td>
        <td class="td">
        </td>
        <td class="td"></td>
    </tr>
    <tr>
        <td class="td"></td>
        <td class="td"></td>
        <td rowsapn="3" class="td"><img class="adel-ocian ocian" src="../img/ocian_adel.svg" /></td>
    </tr>

</table>

<table class="site">
    <tr>
        <td class="sub_title scr-target">
            <h1>このサイトについて</h1>
        </td>
    </tr>
    <tr>
        <td class="discript scr-target">
            <div class="left">
                ここはエンジニアTOMOYAのポートフォリオサイトです。</br>
                これまでに手がけた制作物、身につけたスキルをまとめています。</br>
                あなたに、私のことをもっと深く知ってほしいと思って作りました。</br>
                どうぞコーヒーでも飲みながらごゆっくりとサイト内を散策してください。</br>
                最後には私の愛犬による癒しもありますよ。
            </div>
        </td>
    </tr>
</table>
<table class="site_bac ">
    <tr>
        <td class="sub_title scr-target">
            <h1>自己紹介</h1>
        </td>
    </tr>
    <tr>
        <td class="discript scr-target">
            <div class="left">
                茨城県出身のエンジニア。</br>
                専門学校卒業後、ITで経験を積んでいます。</br>
                茨城県内でエンジニアをしていたが、さらなる成長を求め都内の企業に転職。</br>
                組み込み系開発、Windowsアプリ開発、WEBシステム開発などの</br>
                業務を経験してきました。
            </div>
        </td>
    </tr>
</table>
<table class="site">
    <tr>
        <td class="sub_title scr-target">
            <h1 style="border-bottom: 34px double red;">経歴</h1>
        </td>
    </tr>
</table>
<!--タイムライン -->
<div class="timeline">
    <ul class="timeline-list">
        <li class="timeline-list-item">
            <div class="date">2019年6月 ~ 2020年6月</div>
            <div class="content text-font-size">勤怠管理システム開発</br>
                <input type="checkbox" id="check01" class="toggle"/>
                <label for="check01" class="label">
                <img class="box-img"src="../img/click_here.png" />
                <div class="message">
                <img class="img_block" src="../img/kintai.svg" />
                        言語：HTML/CSS/Javascript/PHP/MySQL</br>
                        メンバー：5～10名</br>
                        主に、javascript/PHPの開発を担当しておりました。</br>
                        新人や、中途の方の教育、管理も行っておりました。
                </div>
            </div>
        </li>
        <li class="timeline-list-item">
            <div class="date">2020年7月 ~ 2020年8月</div>
            <div class="content text-font-size">空調管理システム開発</br>
            <input type="checkbox" id="check02" class="toggle2"/>
                <label for="check02" class="label">
                <img class="box-img"src="../img/click_here.png" />
                <div class="message2">
                <img class="img_block" src="../img/kuutyou.svg" />
                    言語：C#/VB.net</br>
                    メンバー：2名</br>
                    C#→VB.netにコンバートしてからの開発でした。</br>
                    当時の取締役との業務だったので、大変でしたがいい経験になりました。
                </div>
            </div>
        </li>
        <li class="timeline-list-item">
            <div class="date">2020年9月 ~ 2020年10月</div>
            <div class="content text-font-size">同窓会用HP作成</br>
            <input type="checkbox" id="check03" class="toggle3"/>
                <label for="check03" class="label">
                <img class="box-img"src="../img/click_here.png" />
                <div class="message3">
                <img class="img_block" src="../img/dousoukai.svg" />
                   言語：HTML/CSS/Javascript</br>
                   メンバー：2名</br>
                   当時の社長の依頼で作成したHPでした。</br>
                   期間は短かったものの満足していただけました。
                </div>
            </div>
        </li>
        <li class="timeline-list-item">
            <div class="date">2020年10月 ~ 2022年03月</div>
            <div class="content text-font-size">鉄道系システム開発</br>
            <input type="checkbox" id="check04" class="toggle4"/>
                <label for="check04" class="label">
                <img class="box-img"src=../img/click_here.png />
                <div class="message4">
                <img class="img_block" src="../img/train.svg" />
                    言語：C</br>
                    メンバー：400名～</br>
                    今のところ、一番大変だった仕事。</br>
                    内容の難しさ、短納期で残業詰めでした。（100時間を超えた・・・）</br>
                    しかし、大変だった分大きく成長出来ました。
                </div>
            </div>
        </li>
        <li class="timeline-list-item">
            <div class="date">2022年04月~</div>
            <div class="content text-font-size">図書館向けシステム開発</br>
            <input type="checkbox" id="check05" class="toggle5"/>
                <label for="check05" class="label">
                <img class="box-img"src="../img/click_here.png" />
                <div class="message5">
                <img class="img_block" src="../img/tosyo.svg" />
                    言語：HTML/CSS/JavaScript/C/Java/JSP</br>
                    メンバー：8名～</br>
                    フロントがHTML、サーバがＣという珍しいプロジェクト。</br>
                    今までの経験を活かせる現場でした。
                </div>
            </div>
        </li>
        <li class="timeline-list-item">
            <div class="date">2022年9月</div>
            <div class="content text-font-size">ポートフォリオ作成</br>
            <input type="checkbox" id="check06" class="toggle6"/>
                <label for="check06" class="label">
                <img class="box-img"src=../img/click_here.png />
                <div class="message6">
                <img class="img_block" src="../img/kintai.svg" />
                    本サイトです。
                </div>
            </div>
        </li>
        <li class="timeline-list-item">
            <div class="date">2023年</div>
            <div class="content text-font-size">comming soon....</div>
        </li>
    </ul>
</div>
<!-- 提供中サービス -->
<div class="area">
    <h2 class="sub_title_service">提供中サービス</h2>
    <nav class="service" >
        <div><img class="img_block_service" src="../img/service.png" /></div>
        <ul class="discript_box">
            <li class="service_discript">マンツーマンでプログラミングレッスンを行うサービスを提供しています。</li>
            <li class="service_discript">受講者に寄り添ってエンジニアとしての</li>
            <li class="service_discript">良い第一歩を踏めるようにサポートしています。</li>
            <li class="service_discript">詳しくはこちらから↓↓↓↓</li>
            <li class="service_discript"><button type="button" class="button">サービスサイトへ</button></li>
        </ul>
    </nav>
</div>
<!-- 愛犬紹介 -->
<section class="sec_four">
    <div class="area_dog">
        <h2 class="Introduction_dog">愛犬紹介</h2>
        <nav class="service" >
            <div></div>
            <ul>
                <li class="service_discript"></li>
                <li class="service_discript"></li>
                <li class="service_discript"></li>
                <li class="service_discript"></li>
                <li class="service_discript"></li>
                <li class="service_discript"></li>
            </ul>
        </nav>
    </div>
</section>
</body>
</html>
<?php
// 初期化
$d ="";
$h ="";
$msg ="";

  date_default_timezone_set('Asia/Tokyo');
  $d = getdate();


  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg = $_POST["whom"] * 10;
  }

  //-------------------------------------------------
  //DB接続
  //-------------------------------------------------
  try{
    /* SQL接続  */
    $pdo = new PDO('mysql:host=localhost;dbname=sample;charset=utf8','root','');
    /* ユーザ名の取得 */
    $stmt = $pdo->prepare('select user_name from user_info where user_id= :id');
    // 「:id」に対して値「1」をセット
    $stmt->bindValue(':id', "tomoya1");

    $ret = $stmt->execute();
//    echo $ret;
    if($ret){
        //データを取得
        $data = $stmt->fetch();
 //       echo var_dump($data);
        $name = $data[0];
        echo $name;
    }
  } catch(PDOException $e) {
    // エラー発生
    echo $e->getMessage();
  }
    /* SQL接続解除  */
    $pdo = null;

  //print($msg . $_POST["whom"]);
 // print("計算結果：" . $msg);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta charset="utf-8"><!-- 文字化け防止 -->
	<link rel="stylesheet" href="sample.css">
  <title>PHP sample page</title>
</head>
<body>
<script src="sample1.js"></script>
		<header id="hed" name="hed">
			<h1>ヘッダー</h1>
			<nav id="nav" name="nav">
				<ul>
					<li id="All_li" name="All_li">ヘッダー１</li>
					<li id="All_li" name="All_li">ヘッダー２</li>
					<li id="All_li" name="All_li">ヘッダー３</li>
				</ul>
			</nav>
		</header>

		<h1 style="color:red ; border:3px; border-bottom: double;">HELLOW WORLD!</h1>
		<div style="font-size: 30px;">
			プログラミングの世界へようこそ<?php $data ?></br>
			これから頑張りましょう！
		</div>
		<div style="font-size: 30px;">
			</br>入力値×10を自動で行うJavaScriptを作成してみよう！</br>
      また、数字以外が入力されたときにエラーメッセージを出そう！
    </div>
		<input type="text" id="val" name="val " onchange="auto_sum(this);"></input>
		<div id="text" name="text"> * 10 =</div>
		<input type="answer" id="answer" name="val"></input>
    <label id="ErrMsg" name="ErrMsg" style="font-size: 30px;display: block; color: red;">
    </label>

  <form action="#" method="POST" style="display:none">
    <div style="font-size: 30px;margin-top:50px;" style="display:none">
        入力値x100を自動で行うPHPを作成してみよう！</br>
        また、数字以外が入力されたときにエラーメッセージを出そう！
    </div>
    <p>  入力値
      <input type="text" name="whom" value="0">
      <input type="submit" value="実行">
    </p>
    <p>
      <?php echo "計算結果：" . $msg ?>
    </p>
  </form>

  <div style="font-size: 30px; display:none;">
			</br>DBからユーザ名を取得してみよう！
	</div>
  <div style="font-size: 30px; display:none;"> ユーザ名：<?php echo $name ?> </div>
  <section>
    <nav id="nav" name="nav">
    <div style="font-size: 30px;">
    </br></br>
        ボタンを押すとボックス、1/2/3の色が変化するようにしてみよう！</br>
        また、ボタンを押したときに、押したことが分かるようなデザインを適用しよう！
    </div>
				<ul style="display: flex;">
					<li class="btnBox"><button type="button" class="btnRed" onclick="colorChg(1);">赤</button></li>
					<li class="btnBox"><button type="button" class="btnBlue" onclick="colorChg(2);">青</button></li>
					<li class="btnBox"><button type="button" class="btnGreen" onclick="colorChg(3);">緑</button></li>
				</ul>
		</nav>
  </section>
		<table id="table_1" name="table_1">
			<tr>
				<td id="td_1" name="td_1" class="td_box1">１</td>
				<td id="td_2" name="td_2" class="td_box">２</td>
				<td id="td_3" name="td_3" class="td_box">３</td>
			</tr>
			
		</table>

		<footer id="foot" name="foot">
			<nav id="nav" name="nav"> 
				<ul>
					<li id="All_li" name="All_li">フッター１</li>
					<li id="All_li" name="All_li">フッター２</li>
					<li id="All_li" name="All_li">フッター３</li>
				</ul>
			</nav>
		</footer>

</body>
</html>
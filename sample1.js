
function auto_sum(OBJ){
    let val = 0;

    //引数チェック
    if(!isNaN(OBJ.value)){
        val = OBJ.value;
        val = val * 10;
        document.getElementById("answer").value = val;
        document.getElementById("ErrMsg").innerText = ""
    } else {
        document.getElementById("ErrMsg").innerText = "不正な入力値です。数字で入力してください。"
    }
}


function colorChg(colortype){
    const element = document.getElementsByClassName('td_box');
    let item = element.item(0);


    switch(colortype){
    case 1:                 //赤
        document.getElementById("td_1").style ="background-color: red";
        document.getElementById("td_2").style ="background-color: red";
        document.getElementById("td_3").style ="background-color: red";
      break;
    case 2:                 //青
        document.getElementById("td_1").style ="background-color: Blue";
        document.getElementById("td_2").style ="background-color: Blue";
        document.getElementById("td_3").style ="background-color: Blue";
        break;

    case 3:                 //緑
        document.getElementById("td_1").style ="background-color: Green";
        document.getElementById("td_2").style ="background-color: Green";
        document.getElementById("td_3").style ="background-color: Green";
        break;

    }
}

function test(actual, expected) {
    if (JSON.stringify(actual) === JSON.stringify(expected)) {
      console.log("Yay! Test PASSED.");
    } else {
      console.error("Test FAILED. Keep trying!");
      console.log("    actual: ", actual);
      console.log("  expected: ", expected);
      console.trace();
    }
  }


  function test(actual, expected) {
    if (JSON.stringify(actual) === JSON.stringify(expected)) {
      console.log("Yay! Test PASSED.");
    } else {
      console.error("Test FAILED. Keep trying!");
      console.log("    actual: ", actual);
      console.log("  expected: ", expected);
      console.trace();
    }
  }


  const names = ["ichi", "ni", "san", "yon"]; //配列namesが定義されている



  for (let i = 0; i < 4; i++) {                // 4回ループ（0-3）
  
    for (let j = 0; j < names.length; j++) {  // names.lengthループ（4回）
  
      for (let k = 1; k < 3; k++) {            //2回ループ
  
        console.log(names[j]);
  
      }
  
    }
  
  }
  
  
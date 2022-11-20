
const birthday = {
    year: 1999,
    month: 3,
    date: 15
  };


function age_calc(){
    var today = new Date();
    var thisYearsBirthday = new Date(today.getFullYear(), birthday.month-1, birthday.date);
    //年齢
    var age = today.getFullYear() - birthday.year;

    if(today < thisYearsBirthday){
        //今年まだ誕生日が来ていない
        age--;
    }

    document.getElementById("age").innerText = "AGE：　" + age;
}
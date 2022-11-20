
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

window.addEventListener("load", function() {
    const target = document.querySelectorAll('.scr-target')
    const targetArray = Array.prototype.slice.call(target);
    const options = {
        root: null,
        rootMargin: '0px 0px',
        threshold: 0.2
    };
    
    const observer = new IntersectionObserver(callback, options)
    targetArray.forEach(function (tgt) {
      observer.observe(tgt)
    });
    
    function callback(entries) {
      entries.forEach(function(entry) {
        const target = entry.target;
        if (entry.isIntersecting && !target.classList.contains('is-active')) {
          target.classList.add('is-active');
        }
      });
    };
    });


//    !(3 === 3);
 //   !(5 !== 5);


 
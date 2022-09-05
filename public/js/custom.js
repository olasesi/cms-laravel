function top_bar_time(){
     var dd = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
     var mmmm = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
     var date = new Date();
     document.getElementById("top-bar-date").innerHTML = dd[date.getDay()] + ', ' + mmmm[date.getMonth()] + ' ' + date.getDate();
   
}

function footer_year(){
     var footer_year = new Date();
     document.getElementById('footer-year').innerHTML=footer_year.getFullYear();

}


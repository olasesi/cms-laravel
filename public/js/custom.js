function top_bar_time(){
    var DD = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    var MMMM = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    var date = new Date();
    return DD[date.getDay()] + ',' + MMMM[date.getMonth()] + date.getDate();
}


function test(){

    document.write('hello');
}
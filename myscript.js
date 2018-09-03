
function showCOURSE(str) {

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
document.getElementById("course").innerHTML=this.responseText;
        }
    };
    xmlhttp.open("GET", "getcourse.php?deptname=" + str, true);
    xmlhttp.send();


}

function showsemester(str) {

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("sem").innerHTML=this.responseText;
        }
    };
    xmlhttp.open("GET", "getsem.php?coursename=" + str, true);
    xmlhttp.send();


}
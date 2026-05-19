function getUserData(){
    var username=document.getElementById("username").value;
    var xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
          var data = JSON.parse(this.responseText);
            

            document.getElementById("result").innerHTML = "Username: " + data.username + 
            "<br>Email: " + data.email 
            + "<br>Profile Image: <img src='../uploads/" + data.file + "' alt='Profile Image' width='400' height='400'><br><hr>"    ;
        }
    };
    xhttp.open("GET", "../control/profile_process.php?username=" + username, true);
    xhttp.send();
}

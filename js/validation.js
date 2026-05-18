

function searchCars(keyword){

    let xhr = new XMLHttpRequest();

    xhr.open("POST","../Control/CategoryController.php",true);
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");

    xhr.onload = function(){
        document.getElementById("searchResult").innerHTML = this.responseText;
    }

    xhr.send("search=" + keyword);
}
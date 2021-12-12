function vidioChange(){
    var change = document.getElementById("add-vidio").value;
    console.log(change);
    var classe = document.getElementById("null");
    var baka = document.getElementById("baka");
    classe.id = "myVideo";
    classe.src = change;
    baka.id = "null";
    
    
}
console.log("connected");

var hamIcon = document.getElementsByTagName("label")[0];
var hamMenu = document.getElementById("hamMenu");
var ham = false;

hamMenu.style.display = "none";


function showHam(){
    if(ham==false){
    hamMenu.style.display = "block";
    console.log("click");
    ham=true;
    }else{
        hamMenu.style.display = "none";
        ham=false;
    }

}
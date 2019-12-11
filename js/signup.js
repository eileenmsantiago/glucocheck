// Terms and conditions

// document.getElementById("register-form").addEventListener('submit', function(event){
//     if(document.getElementById('terms').checked == false){
//         event.preventDefault();
//         alert("By signing up, you must accept GlucoChecks Terms and Conditions.");
//         return false;
//     }
// });

console.log(document.getElementById("closeModal"))

// Confirmation text upon submission
var modalBox = document.getElementById("modalBox");
var submitButton = document.getElementById("submitButton");
var spanContainer = document.getElementById("closeModal")[0];

function displayModal() {
    modalBox.style.display = "block"; // show it
}
spanContainer.onclick = function() {
    modalBox.style.display = "none"; // don't show it
}

window.onclick = function(e) {
    if (event.target == modal) {
        modalBox.style.display = "none";
    }
}

    


function processSignup(e){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(e){     
        console.log(xhr.readyState);  
        if(xhr.readyState === 4){        
            console.log(xhr.responseText);
            var responseJSON = JSON.parse(xhr.responseText);
            if(responseJSON.success == "true"){
                var confirmText = document.getElementById("confirmText");
                confirmText.innerHTML = "You've successfully signed up with GlucoCheck. ";

                var confirmationBtn = document.getElementById("confirmationBtn");
                confirmationBtn.setAttribute("onclick", "window.location.href = 'signin.php';");
                confirmationBtn.innerHTML="Sign in";
            }
        }
    }

    var fname = document.forms[0]["fname"];
    var lname = document.forms[0]["lname"];
    var email = document.forms[0]["email"];
    var password = document.forms[0]["password"];

    // console.log(nom.value, email.value, password.value);

    xhr.open("POST", "/glucocheck/handlers/addUser.php", true);
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
    xhr.send("fname="+fname.value+"&lname="+lname.value+"&email="+email.value+"&password="+password.value+"&role="+role.value);

};

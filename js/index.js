// DYNAMIC USABILITY FOR COOKIES 
document.addEventListener("click", function(e) {
    if (e.target.getAttribute("data-bottombar-close") !== null) {
        const bottomBarName = e.target.getAttribute("data-bottombar-close");
        const bottomBar = document.querySelector(".bottombar[data-bottombar='"+ bottomBarName +"']");
        document.body.removeChild(bottomBar)
    }
}); 

document.getElementById("cookie_accept_btn").onclick = function(){
    document.getElementById("cookie_accept").style.display = 'none'; // Don't show it
    document.getElementById("cookie_revoke").style.display = 'block'; // Show it 
};
document.getElementById("cookie_revoke_btn").onclick = function(){
    document.getElementById("cookie_accept").style.display = 'block'; 
    document.getElementById("cookie_revoke").style.display = 'none'; 
};


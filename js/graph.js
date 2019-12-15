const days = [
    {
        date: 'Oct-06',
        bgLevel: 6
    },
    {
        date: 'Oct-07',
        bgLevel: 9
    },
    {
        date: 'Oct-08',
        bgLevel: 11
    },
    {
        date: 'Oct-09',
        bgLevel: 12
    },
    {
        date: 'Oct-10',
        bgLevel: 12
    },
    {
        date: 'Oct-11',
        bgLevel: 12
    },
    {
        date: 'Oct-12',
        bgLevel: 12
    }
];

var headRow = document.getElementById('head-row');
var bgRow = document.getElementById('bg-row');

for(var i=0; i < days.length; i++){

    // date 
    var dateTd = document.createElement('td');
    dateTd.innerHTML = days[i].date;
    headRow.appendChild(dateTd);

    var bgTd = document.createElement('td');
    bgTd.innerHTML = days[i].bgLevel;
    bgRow.appendChild(bgTd);

    // BG level
    // var bgTr = document.createElement('td');
    // var bg = document.createElement('td');
    // bg.innerHTML = days[i].bgLevel;
    // bgData.appendChild(dateTr);


}

// Dynamic submission for Contact Form
function getBgData() {

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function(e) {
        if(xhr.readyState === 4){
            var data = JSON.parse(xhr.responseText);
            if(data){
                console.log(data);
            } else {

            }
        }
    };

    xhr.open("GET","/glucocheck/handlers/getBG.php",true); 
    xhr.send();

    return false;
}


getBgData();
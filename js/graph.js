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
}

// Dynamically obtain data via AJAX and GET method from db 
function getBgData() {

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function(e) {
        if(xhr.readyState === 4){
            var data = JSON.parse(xhr.responseText);
            if(data){
                renderEntries(data);
                console.log(data);
            } else {

            }
        }
    };

    xhr.open("GET","/glucocheck/handlers/getBG.php",true); 
    xhr.send();

    return false;
}

// BG = {
    // beforeAfter: "before"
    // date: "2019-12-13"
    // id: 2
    // level: 5
    // statusColor: "green"
    // time: "12:00:00"
// }

// add entry data into the Latest Entries Table
function renderEntries(data) {
    // data = [bg, bg, bg, bg]

    var bgBody = document.getElementById('bg-body');

    for (var i = 0; i < data.length; i++) {
        const bg = data[i];

        var bgRow = document.createElement('tr');

        // add level (BG level)
        var bgTd = document.createElement('td');
        bgTd.innerHTML = bg.level;
        bgRow.appendChild(bgTd);

        // add level-circle (status colour)
        var bgTd = document.createElement('td');
        var bgCir = document.createElement('div');
        bgCir.classList.add("level-circle");
        bgCir.classList.add(bg.statusColor);
        bgTd.appendChild(bgCir);
        bgRow.appendChild(bgTd);

        // add beforeAfter (before or after)
        var bgTd = document.createElement('td');
        bgTd.innerHTML = bg.beforeAfter;
        bgRow.appendChild(bgTd);

        // add time
        var bgTd = document.createElement('td');
        bgTd.innerHTML = bg.time;
        bgRow.appendChild(bgTd);

        // add the date
        var bgTd = document.createElement('td');
        bgTd.innerHTML = bg.date;
        bgRow.appendChild(bgTd);

        var bgTd = document.createElement('td');
        var settingLink = document.createElement('a');
        settingLink.href= `/glucocheck/entryForm.php?id=${bg.id}`;
        var settingImg = document.createElement('img');
        settingImg.src = "assets/settings.svg"
        settingLink.appendChild(settingImg);
        bgTd.appendChild(settingLink);
        bgRow.appendChild(bgTd);

        // add row to the body
        bgBody.appendChild(bgRow);


    }

}

getBgData();
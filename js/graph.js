function sortBgDataByDate(data) {
    return data.sort(function(a, b) {
        a = new Date(a.date);
        b = new Date(b.date);
        return a<b ? -1 : a>b ? 1 : 0;
    })
}
// Dynamically obtain data via AJAX and GET method from db 
function getBgData() {

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function(e) {
        if(xhr.readyState === 4){
            var data = JSON.parse(xhr.responseText);
            if(data){
                renderEntries(data);
                renderGraph(data);
                console.log(data);
            } else {

            }
        }
    };

    xhr.open("GET","/glucocheck/handlers/getBG.php",true); 
    xhr.send();

    return false;
}

function renderGraph(data) {

    var headRow = document.getElementById('head-row');
    var bgRow = document.getElementById('bg-row');

    let avgMap = {};

    data.forEach(bg => {
        if(!avgMap[bg.date]) {
            avgMap[bg.date] = bg.level;
        } else {
            avgMap[bg.date] = (avgMap[bg.date] + bg.level) / 2;
        }
    });

    let tableData = [];
    for(var key in avgMap) {
        tableData.push({
            date: key,
            level: avgMap[key]
        })
    }

    tableData = sortBgDataByDate(tableData).map(row => {
        var dateTd = document.createElement('td');
        dateTd.innerHTML = row.date;
        headRow.appendChild(dateTd);
    
        var bgTd = document.createElement('td');
        bgTd.classList.add('bar-td')
        bgTd.innerHTML = row.level;
        
        var bar = document.createElement('div');
        bar.classList.add('daily-bar');

        let barColor = '';
        if(row.level >= 14) {
            barColor = "red";
        } else if (row.level < 14 && row.level >= 10 ) {
            barColor = "yellow";
        } else {
            barColor = "green";
        }
        bar.classList.add(barColor);
        bar.style.height = `${row.level * 12}px`;
        bgTd.appendChild(bar);
        
        bgRow.appendChild(bgTd);
        
    })

}

// add entry data into the Latest Entries Table
function renderEntries(data) {
    // data = [bg, bg, bg, bg]

    var bgBody = document.getElementById('bg-body');
    // sort through the data numerically
    data = sortBgDataByDate(data);
    let current, sum = 0, average, highest = 0, lowest = 100;

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


        // add data to the 4 column boxes
        var col = document.createElement('p');
        col.classList.add('current-bg');
        col.innerHTML = bg.level;

        // Current BG
        if(i === data.length - 1) {
            current = bg.level;
        }

        sum = sum + bg.level;

        // Highest BG
        if(bg.level > highest) {
            highest = bg.level;
        }

        // Lowest BG
        if(bg.level < lowest) {
            lowest = bg.level;
        }
    }

    average = sum / data.length;

    document.getElementById('current-bg').innerHTML = `${current} mmol/L`;
    document.getElementById('average-bg').innerHTML = `${average} mmol/L`;
    document.getElementById('highest-bg').innerHTML = `${highest} mmol/L`;
    document.getElementById('lowest-bg').innerHTML = `${lowest} mmol/L`;

}

getBgData();
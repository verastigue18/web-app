
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawVisualization);

function drawVisualization() {
    var data = google.visualization.arrayToDataTable([
        ['Month', 'Sales', 'Purchase'],
        ['January',  165,      938],
        ['February',  135,      1120],
        ['March',  157,      1167],
        ['April',  139,      1110],
        ['May',  136,      691]
    ]);

    var options = {
        hAxis: {title: 'Month'},
        seriesType: 'bars',
        series: {5: {type: 'line'}}
    };

    var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
    chart.draw(data, options);
}
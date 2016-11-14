$(document).ready(function() {$('#datatable').dataTable();});

data = [];
alreadyFetched = {};


var iteration = 0;

function gd(year, month, day) {
return new Date(year, month - 1, day).getTime();
}
function fetchData() {

	++iteration;

	function onDataReceived(series) {
    	var data = [];
		for(i=0;i<series.data.length;i++){
			date = series.data[i].date;
			var array = [];
			array[0] = gd(date.yy,date.mm,date.dd);
			array[1] = series.data[i].count;
			data.push(array);
		}
		$.plot("#canvas_dahs", [data], {
									    series: {
									      lines: {
									        show: false,
									        fill: true
									      },
									      splines: {
									        show: true,
									        tension: 0.4,
									        lineWidth: 1,
									        fill: 0.4
									      },
									      points: {
									        radius: 0,
									        show: true
									      },
									      shadowSize: 2
									    },
									    grid: {
									      verticalLines: true,
									      hoverable: true,
									      clickable: true,
									      tickColor: "#d5d5d5",
									      borderWidth: 1,
									      color: '#fff'
									    },
									    colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
									    xaxis: {
									      tickColor: "rgba(51, 51, 51, 0.06)",
									      mode: "time",
									      tickSize: [1, "day"],
									      //tickLength: 10,
									      axisLabel: "Date",
									      axisLabelUseCanvas: true,
									      axisLabelFontSizePixels: 12,
									      axisLabelFontFamily: 'Verdana, Arial',
									      axisLabelPadding: 10
									    },
									    yaxis: {
									      ticks: 8,
									      tickColor: "rgba(51, 51, 51, 0.06)",
									    },
									    tooltip: false
									  });
		
	}

	// Normally we call the same URL - a script connected to a
	// database - but in this case we only have static example
	// files, so we need to modify the URL.

	$.ajax({
		url: "http://localhost:8080/clinic/index/dashboard",
		type: "GET",
		dataType: "json",
		success: onDataReceived
	});

	if (iteration < 5) {
		setTimeout(fetchData, 1000);
	} else {
		data = [];
		alreadyFetched = {};
	}
}

setTimeout(fetchData, 1000);


$(function() {

	var options = {
									    series: {
									      lines: {
									        show: false,
									        fill: false
									      },
									      splines: {
									        show: true,
									        tension: 0.4,
									        lineWidth: 1,
									        fill: 0.4
									      },
									      points: {
									        radius: 0,
									        show: true
									      },
									      shadowSize: 2
									    },
									    grid: {
									      verticalLines: true,
									      hoverable: true,
									      clickable: true,
									      tickColor: "#d5d5d5",
									      borderWidth: 1,
									      //color: '#fff'
									    },
									    //colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
									    xaxis: {
									      tickColor: "rgba(51, 51, 51, 0.06)",
									      mode: "time",
									      tickSize: [1, "day"],
									      //tickLength: 10,
									      axisLabel: "Date",
									      axisLabelUseCanvas: true,
									      axisLabelFontSizePixels: 12,
									      axisLabelFontFamily: 'Verdana, Arial',
									      axisLabelPadding: 10
									    },
									    yaxis: {
									      ticks: 8,
									      tickColor: "rgba(51, 51, 51, 0.06)",
									    },
									    tooltip: false
									  };


	// Fetch one series, adding to what we already have

	var alreadyFetched = {};

	

	// Find the URL in the link right next to us, then fetch the data

	var values = [];
	function onDataReceived2(series) {

		// Extract the first coordinate pair; jQuery has parsed it, so
		// the data is now just an ordinary JavaScript object

		var firstcoordinate = "(" + series.data[0][0] + ", " + series.data[0][1] + ")";
		
    	var data = [];
		for(i=0;i<series.data.length;i++){
			date = series.data[i].date;
			var array = [];
			array[0] = gd(date.yy,date.mm,date.dd);
			array[1] = series.data[i].count;
			data.push(array);
		}
		//data["label"] = "series.data.label";

		// Push the new data onto our existing data array

		if (!alreadyFetched[series.label]) {
			alreadyFetched[series.label] = true;
			//values.push(data);
			var a = [];
			a["data"] = data;
			a["label"] = series.label;
			values.push(a);
		}

		$.plot("#myplaceholder", values, options);
	}
	for(i = 1;i < 10; i++){
		$.ajax({
			url: "http://localhost:8080/clinic/index/serveygroupsession/"+i,
			type: "GET",
			dataType: "json",
			success: onDataReceived2
		});
	}
});

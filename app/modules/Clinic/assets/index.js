$(document).ready(function() {
	$('#datatable').dataTable(
		{	
			// Filter
			initComplete: function () {
            	this.api().columns([0]).each( function () {
					var column = this;
					var select = $('<select><option value="">ไม่ระบุ</option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
							);
	
							$('#datatable').DataTable().columns([1])
								.search( val ? '^'+val+'$' : '', true, false )
								.draw();
						} );
	
					column.cells('',  this.columns([1])).render('display').sort().unique().each( function ( d, j ){
							select.append( '<option value="'+d+'">'+d+'</option>' )
						
					} );
				} );

				
        	},
			"columnDefs": [
				{ "visible": false, "targets": [1,6,7] },
				{ "width": "10%", "targets": [2,3,4,5] }
        	],
			"order": [[ 1, 'desc' ],[ 6, 'asc' ]],
			"drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;
			//Group Year
            api.column(1, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    $(rows).eq( i ).before(
                        '<tr class="group"><td colspan="6"><h2>'+group+'</h2></td></tr>'
                    );
 
                    last = group;
                }
            } );
        }
		}
	);
});




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
		url: "/clinic/index/dashboard",
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
			url: "/clinic/index/serveygroupsession/"+i,
			type: "GET",
			dataType: "json",
			success: onDataReceived2
		});
	}
});



// Stacked Bars Chart
/*
	$(function() {

		var d1 = [];
		for (var i = 0; i <= 10; i += 1) {
			d1.push([i, parseInt(Math.random() * 30)]);
		}

		var d2 = [];
		for (var i = 0; i <= 10; i += 1) {
			d2.push([i, parseInt(Math.random() * 30)]);
		}

		var d3 = [];
		for (var i = 0; i <= 10; i += 1) {
			d3.push([i, parseInt(Math.random() * 30)]);
		}
		var values = [];

		values.push({
                label: "Data One",
                data:d1
            });
		values.push({
                label: "Data Two",
                data:d2
            });
		values.push({
                label: "Data Three",
                data:d3
            });

		var stack = 0,
			bars = true,
			lines = false,
			steps = false;

		function plotWithOptions() {
			$.plot("#myplaceholder2", values, {
				series: {
					stack: stack,
					lines: {
						show: lines,
						fill: true,
						steps: steps
					},
					bars: {
						show: bars,
						barWidth: 0.6
					}
				}
			});
		}

		plotWithOptions();

		$(".stackControls button").click(function (e) {
			e.preventDefault();
			stack = $(this).text() == "With stacking" ? true : null;
			plotWithOptions();
		});


		// Add the Flot version string to the footer

		$("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
	});
*/


	// กราฟจำนวนการอนุมัติ

	$(function() {

        var ds = new Array();
		var values = [];
		var ticks = [];
		var item = 0;
		function onDataReceived3(series) {
			var data = [];
			var d1 = [];
			var d2 = [];
			var d3 = [];
			item += 1;
			//alert(series.data);
			for(i=0;i<series.data.length;i++){
				//var a =[];
				//a["label"]= i;
				//a = series.data[i].count;
				
				d1.push([item, series.data[i].count_answer]);
				d2.push([item, series.data[i].count_approver]);
				d3.push([item, series.data[i].count_admin]);
				//data.push(a);
			}
			ticks.push([item,series.label]);

			if(item==1){
			values.push({
					label: "Data Answer",
					data: d1,
					color: "#CC0000"
		//          bars: {order: 1}
				});
			values.push({
					label: "Data Approver",
					data:d2,
					color: "#CCCC00"
		//          bars: {order: 2}
				});
			values.push({
					label: "Data Admin",
					data:d3,
					color: "#CCFF00"
			//        bars: {order: 3}
				});
			}else{

				values.push({
						data: d1,
						color: "#CC0000"
					});
				values.push({
						data:d2,
						color: "#CCCC00"
					});
				values.push({
						data:d3,
						color: "#CCFF00"
					});				
			}
			var stack = 0,
				bars = true,
				lines = false,
				steps = false;

			$.plot("#myplaceholder2", values, {
				series: {
					stack: stack,
					lines: {
						show: lines,
						fill: true,
						steps: steps
					},
					bars: {
						show: bars,
						barWidth: 0.6
					}
				},
				bars: {
					align: "center",
					barWidth: 0.5
				},
				xaxis: {
					axisLabel: "World Cities",
					axisLabelUseCanvas: true,
					axisLabelFontSizePixels: 12,
					axisLabelFontFamily: 'Verdana, Arial',
					axisLabelPadding: 10,
					ticks: ticks
					
				}
			});
		}		
		for(i = 1;i < 37; i++){
			$.ajax({
				url: "/serveygroupcomment"+i,
				type: "GET",
				dataType: "json",
				success: onDataReceived3
			});
		}
		
		


	});
// Order
	$(function () {

            //some data
            var d1 = [];
            for (var i = 0; i <= 10; i += 1)
                d1.push([i, parseInt(Math.random() * 30)]);
         
            var d2 = [];
            for (var i = 0; i <= 10; i += 1)
                d2.push([i, parseInt(Math.random() * 30)]);
         
            var d3 = [];
            for (var i = 0; i <= 10; i += 1)
                d3.push([i, parseInt(Math.random() * 30)]);
         
            var ds = new Array();
         
            ds.push({
                label: "Data One",
                data:d1,
                bars: {order: 1}
            });
            ds.push({
                label: "Data Two",
                data:d2,
                bars: {order: 2}
            });
            ds.push({
                label: "Data Three",
                data:d3,
                bars: {order: 3}
            });

            var stack = 0, bars = false, lines = false, steps = false;

            var options = {
                    bars: {
                        show:true,
                        barWidth: 0.2,
                        fill:1
                    },
                    grid: {
                        show: true,
                        aboveData: false,
                        color: '#bfbfbf', //chartColours.gridColor,
                        labelMargin: 5,
                        axisMargin: 0, 
                        borderWidth: 0,
                        borderColor:null,
                        minBorderMargin: 5 ,
                        clickable: true, 
                        hoverable: true,
                        autoHighlight: false,
                        mouseActiveRadius: 20
                    },
                    series: {
                        stack: stack
                    },
                    legend: { 
                        position: "ne", 
                        margin: [0,-25], 
                        noColumns: 0,
                        labelBoxBorderColor: null,
                        labelFormatter: function(label, series) {
                            // just add some space to labes
                            return '&nbsp;&nbsp;' + label + ' &nbsp;&nbsp;';
                        },
                        width: 30,
                        height: 2
                    },
                    colors: ['#CFD8DC', '#607D8B', '#A5D6A7'],
                    tooltip: true, //activate tooltip
                    tooltipOpts: {
                        content: "%s : %y.0",
                        shifts: {
                            x: -30,
                            y: -50
                        }
                    }
            };

            $.plot($("#ordered-bars-chart"), ds, options); 
        });


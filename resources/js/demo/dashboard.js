// Dashboard.js
// ====================================================================
// ====================================================================
// - ThemeOn.net -


$(window).on('load', function() {


	// Network chart ( Morris Line Chart )
	// =================================================================
	// Require MorrisJS Chart
	// -----------------------------------------------------------------
	// http://morrisjs.github.io/morris.js/
	// =================================================================

	var day_data = [
		{"elapsed": "2014 - 01", "value": 14, b:2},
		{"elapsed": "2014 - 02", "value": 24, b:7},
		{"elapsed": "2014 - 03", "value": 3, b:7},
		{"elapsed": "2014 - 04", "value": 12, b:4},
		{"elapsed": "2014 - 05", "value": 18, b: 9},
		{"elapsed": "2014 - 06", "value": 50, b:7},
		{"elapsed": "2014 - 07", "value": 20, b:24},
		{"elapsed": "2014 - 08", "value": 37, b :14},
		{"elapsed": "2014 - 09", "value": 26, b: 18},
		{"elapsed": "2014 - 10", "value": 20, b: 29},
		{"elapsed": "2014 - 11", "value": 49, b: 13},
		{"elapsed": "2014 - 12", "value": 59, b: 24}
	];

	var chart = Morris.Area({
		element: 'morris-chart-network',
		data: day_data,
		axes:false,
		xkey: 'elapsed',
		ykeys: ['value', 'b'],
		labels: ['Download Speed', 'Upload Speed'],
		yLabelFormat :function (y) { return y.toString() + ' Mb/s'; },
		gridEnabled: false,
		gridLineColor: 'transparent',
		lineColors: ['#0091c8'],
		lineWidth:0,
		pointSize:0,
		fillOpacity:.7,
		gridTextColor:'#999',
		parseTime: false,
		resize:true,
		behaveLikeLine : true,
		hideHover: 'auto'
	});



	// Services chart ( Morris Line Chart )
	// =================================================================
	// Require MorrisJS Chart
	// -----------------------------------------------------------------
	// http://morrisjs.github.io/morris.js/
	// =================================================================
	Morris.Donut({
		element: 'demo-morris-donut',
		data: [
			{label: "Supports", value: 12},
			{label: "Sales", value: 30},
			{label: "Comments", value: 20}
		],
		colors: [
			'#9d7fe4',
			'#7553c9',
			'#8669cc'
		],
		resize:true
	});





	// Visitor chart ( Sparkline chart )
	// =================================================================
	// Require Sparkline Chart
	// -----------------------------------------------------------------
	// http://omnipotent.net/jquery.sparkline/#s-about
	// =================================================================
	$("#demo-chart-visitors").sparkline([576,643,356,453,745,976,567,586,784,345,567,799], {
		type: 'line',
		width: '70',
		height: '20',
		spotRadius: 2,
		lineWidth:1,
		lineColor:'rgba(255,255,255,.5)',
		fillColor: false,
		spotColor: 'rgba(255,255,255,.5)',
		minSpotColor: 'rgba(255,255,255,.5)',
		maxSpotColor: 'rgba(255,255,255,.5)',
		highlightLineColor : '#ffffff',
		highlightSpotColor: '#ffffff',
		tooltipChartTitle: 'Visitors',
		tooltipSuffix:' k'

	});





	// Bounce rate chart ( Sparkline chart )
	// =================================================================
	// Require Sparkline Chart
	// -----------------------------------------------------------------
	// http://omnipotent.net/jquery.sparkline/#s-about
	// =================================================================
	$("#demo-chart-bounce-rate").sparkline([23,34,22,27,35,40,39,29,27,33,25,37], {
		type: 'line',
		width: '70',
		height: '20',
		spotRadius: 2,
		lineWidth:1,
		lineColor:'rgba(255,255,255,.5)',
		fillColor: false,
		spotColor: 'rgba(255,255,255,.5)',
		minSpotColor: 'rgba(255,255,255,.5)',
		maxSpotColor: 'rgba(255,255,255,.5)',
		highlightLineColor : '#ffffff',
		highlightSpotColor: '#ffffff',
		tooltipChartTitle: 'Bounce rate',
		tooltipSuffix:' %'

	});








	// PANEL OVERLAY
	// =================================================================
	// Require Nifty js
	// -----------------------------------------------------------------
	// http://www.themeon.net
	// =================================================================
	$('#demo-panel-network-refresh').niftyOverlay().on('click', function(){
		var $el = $(this), relTime;

		$el.niftyOverlay('show');


		relTime = setInterval(function(){
			$el.niftyOverlay('hide');
			clearInterval(relTime);
		},2000);
	});








	// WEATHER WIDGET
	// =================================================================
	// Require sckycons
	// -----------------------------------------------------------------
	// http://darkskyapp.github.io/skycons/
	// =================================================================

	// on Android, a nasty hack is needed: {"resizeClear": true}
	skyconsOptions = {
		"color": "#fff",
		"resizeClear": true
	}
	/* Main Icon */
	var skycons = new Skycons(skyconsOptions);
	skycons.add("demo-weather-icon-1", Skycons.PARTLY_CLOUDY_DAY);
	skycons.play();



	/* Small Icons*/
	var skycons2 = new Skycons(skyconsOptions);
	skycons2.add("demo-weather-icon-2", Skycons.CLOUDY);
	skycons2.play();



	var skycons3 = new Skycons(skyconsOptions);
	skycons3.add("demo-weather-icon-3", Skycons.WIND);
	skycons3.play();



	var skycons4 = new Skycons(skyconsOptions);
	skycons4.add("demo-weather-icon-4", Skycons.RAIN);
	skycons4.play();



	var skycons5 = new Skycons(skyconsOptions);
	skycons5.add("demo-weather-icon-5", Skycons.PARTLY_CLOUDY_DAY);
	skycons5.play();



});

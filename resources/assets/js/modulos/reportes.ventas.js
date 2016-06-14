$(document).ready(function(){
	/*---- DatePicker -----*/
	function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    cb(moment($("#startDate").val()), moment($("#endDate").val()));

    $('#reportrange').daterangepicker({
	 	"startDate": moment($("#startDate").val()),
		"endDate": moment($("#endDate").val()),
		"locale": {
	        "format": "MM/DD/YYYY",
	        "separator": " - ",
	        "applyLabel": "Aplicar",
	        "cancelLabel": "Cancelar",
	        "fromLabel": "From",
	        "toLabel": "To",
	        "customRangeLabel": "Perzonalizado",
	        "daysOfWeek": [
	            "Do",
	            "Lu",
	            "Ma",
	            "Mi",
	            "Ju",
	            "Vi",
	            "Sa"
	        ],
	        "monthNames": [
	            "Enero",
	            "Febrero",
	            "Marzo",
	            "Abril",
	            "Mayo",
	            "Junio",
	            "Julio",
	            "Agusto",
	            "Septiembre",
	            "Octubre",
	            "Noviembre",
	            "Diciembre"
	        ],
	        "firstDay": 1
	    },
        ranges: {
           'Hoy': [moment(), moment()],
           'Ayer': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Últimos 7 días': [moment().subtract(6, 'days'), moment()],
           'Últimos 30 días': [moment().subtract(29, 'days'), moment()],
           'Este mes': [moment().startOf('month'), moment().endOf('month')],
           'Mes pasado': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    });

    $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
    	window.location.href = "/Reportes/Ventas?fhInicio="+picker.startDate.format('YYYY-MM-DD')+"&fhFin="+picker.endDate.format('YYYY-MM-DD');
  	});

  	/*Chart*/
  	if($("#chartdiv").length > 0)
  	AmCharts.ready(function(){
	   var chart = new AmCharts.AmStockChart();
        chart.pathToImages = "/images/amcharts/";

        var dataSet = new AmCharts.DataSet();
        dataSet.dataProvider = chartData;
        dataSet.fieldMappings = [{fromField:"val", toField:"value"}];   
        dataSet.categoryField = "date";          
        chart.dataSets = [dataSet];

        var stockPanel = new AmCharts.StockPanel();
        chart.panels = [stockPanel];

        var panelsSettings = new AmCharts.PanelsSettings();
        panelsSettings.startDuration = 1;
        chart.panelsSettings = panelsSettings;   

        var graph = new AmCharts.StockGraph();
        graph.valueField = "value";
        graph.type = "column";
        graph.fillAlphas = 1;
        graph.title = "MyGraph"; 
        graph.theme = "light";
        stockPanel.addStockGraph(graph);

        chart.write("chartdiv");
	});

});
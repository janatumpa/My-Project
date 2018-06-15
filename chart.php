<?php
include"config/connect.php";
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>phpChart - Basic Curved Line</title>
    <script>
    /********* Javascript Generated with phpChart **********/ 
var _basic_chart_plot_properties;
$(document).ready(function(){ 
_basic_chart_plot_properties = {
  "axes":{
    "xaxis":{
      "tickOptions":{
        "showGridline":false
      },"properties":"xaxis"
    },"yaxis":{
      "tickOptions":{
        "showGridline":false
      },"properties":"yaxis"
    }
  },"grid":{
    "background":"white","borderColor":"#000000","borderWidth":0,"shadow":false
  },"seriesDefaults":{
    "rendererOptions":{
      "smooth":true
    }
  }
}



$.jqplot.config.enablePlugins = true;
$.jqplot.config.defaultHeight = 300;
$.jqplot.config.defaultWidth  = 400;
 _basic_chart= $.jqplot("basic_chart", [[11,9,5,12,14]], _basic_chart_plot_properties);


});
    </script>
</head>
<body>

<?php
$pc = new C_PhpChartX(array(array(11, 9, 5, 12, 14)),'basic_chart');
$pc->set_series_default(array('rendererOptions'=> array('smooth'=>true)));
// remove background and grids
$pc->set_axes(array(
    'xaxis'=>array('tickOptions'=>array('showGridline'=>false)),
    'yaxis'=>array('tickOptions'=>array('showGridline'=>false))));
$pc->set_grid(array(
    'background'=>'white',
    'borderWidth'=>0,
    'borderColor'=>'#000000',
    'shadow'=>false));
$pc->draw();
?>

</body>
</html>
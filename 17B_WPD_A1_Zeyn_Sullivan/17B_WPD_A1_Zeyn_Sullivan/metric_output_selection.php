<html>
<!--Based on the Metric Type selected by the user, the respective php module will be initiated to
    calculate the results via the MassMetricCalculationobject and display the results on the screen-->
<body>
  
  <?php 
  $MetricDescription = $_GET['MetricTypeSelected'];
  
  switch($MetricDescription){
    case "Mass":
    include ("metric_mass_conversion.php");
    break;
    case "Temperature":
    include("metric_temperature_conversion.php");
    break;
    default:
    echo "invalid metric";
  }
  ?>

</body>
</html>
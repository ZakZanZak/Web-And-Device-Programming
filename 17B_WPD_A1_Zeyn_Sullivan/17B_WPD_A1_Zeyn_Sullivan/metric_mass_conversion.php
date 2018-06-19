<html>
<!--This module will 'GET' the Metric type description select by the user and the unit value that needs to be converted.
    The MassMetricCalculation class is instantiated to calculate the conversion values.
    The three methods are then called to called to return the results of each metric subset type and
    the results are displayed on the screen.-->
<body style="background-color:powderblue;" style="font-family:verdana;" ">
<h1 style="color:green; font-family:courier; text-align:center;">Mass Conversion Results</h1>
<hr>

<?php 
    include_once ("MassMetricCalculation.class.php");
    $MassMetrics = new MassMetricCalculation($_GET["kilograms"] , $_GET["MetricUnit"]);
?><br>

<p style="color:red; font-family:courier; text-align:center;">
  <b>Kilograms:<b> 

  <?php
     echo $MassMetrics->getKilograms();
  ?><br> 
</p>
<p style="color:green; font-family:courier; text-align:center;">
  <b>Grams:<b>     

  <?php
     echo $MassMetrics->getGrams();
  ?><br>
</p>
<p style="color:blue; font-family:courier; text-align:center;">
  <b>Milligrams:<b>     
  <?php
     echo $MassMetrics->getMilligrams();
  ?></p><br>
<hr>
</body>
</html>
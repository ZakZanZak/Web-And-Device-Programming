<html>
<body>
  <!--This module will 'GET' the Metric type description select by the user and the unit value that needs to be converted.
    The TemperatureMetricCalculation class is instantiated to calculate the conversion values.
    The three methods are then called to called to return the results of each metric subset type and
    the results are displayed on the screen.-->

<body style="background-color:powderblue;" style="font-family:verdana;" ">
<h1 style="color:green; font-family:courier; text-align:center;">Temperature Conversion Results</h1>

<hr>

<?php 
    include_once ("TemperatureMetricCalculation.class.php");
    $MetricTemperature = new TemperatureMetricCalculation($_GET["kilograms"] , $_GET["MetricUnit"]);
?><br>

<p style="color:red; font-family:courier; text-align:center;">
  <b>KELVIN:<b>

  <?php
     echo $MetricTemperature->getKelvin();
  ?><br> 
</p>  

<p style="color:green; font-family:courier; text-align:center;">
  <b>FAHRENHEIT:<b>     

  <?php
     echo $MetricTemperature->getFahrenheit();
  ?><br>
 </p> 

<p style="color:blue; font-family:courier; text-align:center;">
  <b>CELCIUS:<b>     
  <?php
     echo $MetricTemperature->getCelsius();
  ?><br>
</p>
<hr>
</body>
</html>
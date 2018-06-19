<html>
<!--This form will 'GET' the Metric Type chosen by the user from the Drop Down on the Landing Page.
    The MetricTypeFilter class will be instantiated to query the subset Metric Type Description associated with 
    this Metric Type. EG, if Mass is chosen as the Metric Type, the instatiated obect will retur an array
    containing Kilogram, Gram and Milligram. These value will be used to populate the drop down for selection
    of the unit to be converted.

    REF:
    I read information on w3schools.com on how to utilize the style, font and alignment attributes-->
<?php include_once ("MetricsTypeFilter.class.php"); 
      $ItemCounter = 0;
?>

<body style="background-color:powderblue;" style="font-family:verdana;" ">
<h1 style="color:green; font-family:courier; text-align:center;">Metrics Convertor </h1>

<hr>

 <form action="metric_output_selection.php" method="get" style="text-align:center; padding: 30px;">
  <b>Metric Unit:<b>

   <?php 
       $MetricTypeSelected = $_GET["MetricType"]; 
   ?>

  <select name="MetricUnit"> 
    <?php

    $MetricTypeDescriptions = new MetricsTypeFilter($MetricTypeSelected);
    $MetricTypeList =  $MetricTypeDescriptions->getMetricSelectedTypes();
    
      while (count($MetricTypeList) > $ItemCounter)   
      {
    ?>   

<!-- REF :    
     https://www.tutorialrepublic.com/faq/how-to-populate-dropdown-list-with-array-values-in-php.php
     I read the above site to chewck how to populate a dropdown list using an array-->
         <option value="<?php echo $MetricTypeList[$ItemCounter]; ?>"><?php echo $MetricTypeList[$ItemCounter]; ?></option>  
         <?php
         $ItemCounter++;
      }      
    
         ?>      
  </select><br><br>

<!-- REF :  
     I looked up Input Type assistance from https://www.w3schools.com/tags/att_input_type.asp and 
     Metric Value: <input type="text" pattern="[0-9].[0-9][0-9]" value ="0.01" name="kilograms">-->
    Metric Value: <input type="number" min="0.01" max="10000" step="0.01" value="0.01" name="kilograms">

<!-- REF:    
     https://stackoverflow.com/questions/871858/php-pass-variable-to-next-page
     I read on stackoverflow.com on how to pass a hidden variable to a page -->
<input type="hidden" name="MetricTypeSelected" value="<?php echo $MetricTypeSelected; ?>">
<input type="submit"><br>
<hr>
</form>

</body>
</html>
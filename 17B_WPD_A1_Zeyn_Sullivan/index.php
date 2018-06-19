<!--This application has been designed to convert Metric Unit values of the same category into
	its sibling categories. The user selects a category within either Mass or Temperature EG, if
	a user selects MASS, the user is presented with a choice of the MASS subtypes, Kilograms, Grams or Milligrams.
	If the user chooses Kilograms, the corresponding Grams and Milligrams values will be calculated within
	a class and the value returned to the user interface for output.-->

<!DOCTYPE HTML>
<html>
<body style="background-color:powderblue;" style="font-family:verdana;" ">
<h1 style="color:green; font-family:courier; text-align:center;">Metrics Convertor </h1>
<p style="color:blue;font-family:verdana; text-align:center;">Select a specific Metric type to view the values of <mark> all </mark> the subsets of that metric type</p>
<hr>

<!--REF: https://www.w3schools.com/html/tryit.asp?filename=tryhtml_elem_select. I read up on how to code the
         drop down boxes from w3schools.
         Once the user submits the selection, the php scrip metric_list_selection is initiated to process the input
         selected   -->

<form action="metric_list_selection.php" method="get" style="text-align:center; padding: 30px;">
	<b>Metric Type : <b>
	<select name="MetricType">
   	 	<option value="Mass">Mass</option>
    	<option value="Temperature">Temperature</option>
    </select><br><br>
  
<input type="submit"><br>
<hr>
</form>
</body>
</html>
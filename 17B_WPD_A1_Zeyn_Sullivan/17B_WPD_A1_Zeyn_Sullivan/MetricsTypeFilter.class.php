<?php
/*When the user selects a Metric Type ie; either Mass or Temperature, this class will be instanciated
  to return the subset of metric descriptions assciated with the select Metric Type. This information
  will be used to populate the dropdown list for the user to select the appropriate metric subset unit
  to convert ie; if Mass is the Metri Type chosen, the subset metric type associated to Mass will be returned ie;
  Kilogram, Gram and Milligram */
  
class MetricsTypeFilter{
	

	public $MetricTypeSelected;
	public $MetricsType = array();


	public function __Construct($MetricTypeSelected)
	{

 		$this->MetricTypeSelected = $MetricTypeSelected;
 	
        $MassList = array
        (
        array("Mass"=>"Kilogram"),
        array("Mass"=>"Gram"),
        array("Mass"=>"Milligram"),
        array("Temperature"=>"Celsius"),
        array("Temperature"=>"Fahrenheit"),
        array("Temperature"=>"Kelvin"),
        );
         
        foreach ( $MassList as $Item ) 
        {

        	foreach ( $Item as $Key => $MetricDescription ) 
        	{
    
         		if ($Key == $this->MetricTypeSelected)
         		{
              		$this->MetricsType[] = $MetricDescription;
 				}
			}
		}	
     
    }

     public function getMetricSelectedTypes()
     {
    	return (array_values($this->MetricsType));
     }
 	
}

?>


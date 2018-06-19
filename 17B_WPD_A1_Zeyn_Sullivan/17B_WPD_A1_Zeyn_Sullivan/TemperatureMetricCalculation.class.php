<?php
/*This class is instatiated to return the Temperature related metric values ie; Celsius, Fahrenheit and Kelvin.
   The Class construct is used to calculate the converted values. Three methods are used to return the value
   of each Temperature type */
class TemperatureMetricCalculation{
	
	public $Kelvin = 0 ;
    public $Fahrenheit = 0;
    public $Celsius = 0;
	public $TemperatureType = 0;
    const KELVIN_CONVERSION = 273.15;
    const FAHRENHEIT_CONVERSION = 459.67;
    const KELVIN_FAHRENHEIT_CONVERSION = 1.8;
    const KELVIN_CELSIUS_CONVERSION = 32;
    const FAHRENHEIT_CELSIUS_CONVERSION = 5/9;


	public function __Construct($UnitOfTemperature,$TemperatureType){
 		$this->TemperatureType = $TemperatureType;
 		switch ($this->TemperatureType) {

 			case 'Celsius':
 			    $this->Celsius = $UnitOfTemperature;
 			    $this->Kelvin  =  $this->Celsius + TemperatureMetricCalculation::KELVIN_CONVERSION; 
	    		$this->Fahrenheit = $this->Celsius * TemperatureMetricCalculation::KELVIN_FAHRENHEIT_CONVERSION + 
	    											TemperatureMetricCalculation::KELVIN_CELSIUS_CONVERSION;
 				break;
 			case 'Fahrenheit':
 			    $this->Fahrenheit = $UnitOfTemperature;
 			    $this->Kelvin  = ($this->Fahrenheit + TemperatureMetricCalculation::FAHRENHEIT_CONVERSION) *
 			    									 TemperatureMetricCalculation::FAHRENHEIT_CELSIUS_CONVERSION; 
	    		$this->Celsius = ($this->Fahrenheit - TemperatureMetricCalculation::KELVIN_CELSIUS_CONVERSION) * 														  TemperatureMetricCalculation::FAHRENHEIT_CELSIUS_CONVERSION; 
 				break;
 			case 'Kelvin':
 			    $this->Kelvin = $UnitOfTemperature;
 			    $this->Fahrenheit = $this->Kelvin * TemperatureMetricCalculation::KELVIN_FAHRENHEIT_CONVERSION - 
 			    									   TemperatureMetricCalculation::FAHRENHEIT_CONVERSION; 
	    		$this->Celsius = $this->Kelvin - TemperatureMetricCalculation::KELVIN_CONVERSION;		  												 
 				break;
 			default:
 				echo " Invalid Temperature Type ";
 				break;
 		}
		
	}
	public function getKelvin(){
		return ($this->Kelvin);
	}
	public function getFahrenheit(){
		return ($this->Fahrenheit);
	}
	public function getCelsius(){
		return ($this->Celsius);
	}

}
?>


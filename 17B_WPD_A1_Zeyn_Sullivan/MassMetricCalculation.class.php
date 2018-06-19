
<?php
/*This class is instatiated to return the Mass related metric values ie; Kilograms, Grams and Milligrams.
   The Class construct is used to calculate the converted values. Three methods are used to return the value
   of each Mass type */
class MassMetricCalculation{
	
	public $Grams = 0 ;
    public $MilliGrams = 0;
    public $KiloGrams = 0;
	public $MetricWeightType = 0;
    const GRAM_CONVERSION = 1000;

	
	public function __Construct($UnitOfWeight,$MetricWeightType){
 		$this->MetricWeightType = $MetricWeightType;
 		switch ($this->MetricWeightType) {

 			case 'Kilogram':
 			    $this->KiloGrams = $UnitOfWeight;
 			    $this->Grams  = MassMetricCalculation::GRAM_CONVERSION * $this->KiloGrams; 
	    		$this->MilliGrams = MassMetricCalculation::GRAM_CONVERSION * $this->Grams;
 				break;
 			case 'Milligram':
 			    $this->MilliGrams = $UnitOfWeight;
 			    $this->Grams  = $this->MilliGrams / MassMetricCalculation::GRAM_CONVERSION; 
	    		$this->KiloGrams = $this->Grams / MassMetricCalculation::GRAM_CONVERSION; 
 				break;
 			case 'Gram':
 			    $this->Grams = $UnitOfWeight;
 			    $this->MilliGrams = $this->Grams * MassMetricCalculation::GRAM_CONVERSION; 
	    		$this->KiloGrams = $this->Grams / MassMetricCalculation::GRAM_CONVERSION; 
 				break;
 			default:
 				echo " Invalid Metric Type ";
 				break;
 		}
		
	}
	public function getGrams(){
		return ($this->Grams);
	}
	public function getMilligrams(){
		return ($this->MilliGrams);
	}
	public function getKilograms(){
		return ($this->KiloGrams);
	}
}
?>


<?php 

namespace Payment\Model;

use Payment\Model\ReferenceParameter;
// calculated at runtime
class KhartoumUnion extends AbstractDeduction { 

	// protected $amount; 
	public function calculateDeductionAmount(Employee $employee,DateRange $dateRange) {
	
	}
	
	public function calculateDeductionExemption(Employee $employee,DateRange $dateRange) {
		 
	}
    
	public function getTableName() {
		return "KhartoumUnion"; 
	} 
	
}
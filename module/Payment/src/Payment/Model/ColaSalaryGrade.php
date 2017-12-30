<?php
namespace Payment\Model; 

use Payment\Model\AbstractAllowance; 

class ColaSalaryGrade extends AbstractAllowance { 
    
	
    public function calculateAmount(Employee $employee,DateRange $dateRange) {
    	//return 0;
    	//\Zend\Debug\Debug::dump($employee);
    	//exit;
        $sgService = $this->service->get('salaryGradeService');
        $splAmount = $sgService->getSpecialAmount($employee->getEmployeeNumber(),$dateRange,$this->getTableName());
        //\Zend\Debug\Debug::dump($splHous);
        //exit;
        if($splAmount[0] == 1) {
            return $splAmount[1];
        }
    	//$sgService = $this->service->get('salaryGradeService');
    	$sgId = $employee->getEmpSalaryGrade(); 
    	$allowanceId = $this->getAllowanceIdByName($this->getTableName()); 
    	// \Zend\Debug\Debug::dump($employee);
    	
    	$companyId = $employee->getCompanyId();
    	//\Zend\Debug\Debug::dump($allowanceId);
    	//exit;
    	//$company = $this->getAllowanceIdByName($allowanceTypeName); 
    	return $sgService->salaryGradeAmount($sgId,$allowanceId,$companyId); 
	}
	
	public function calculateExemption(Employee $employee,DateRange $dateRange) {
		return 0;
	}
	
	public function getTableName() {
		return "Cola";
	}
	
	
	
}   
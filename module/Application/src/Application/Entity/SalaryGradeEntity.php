<?php

namespace Application\Entity;

use Application\Contract\EntityInterface;

class SalaryGradeEntity implements EntityInterface {
	
	private $id;
	
	private $salaryGrade;
	
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
		return $this;
	}
	public function getSalaryGrade() {
		return $this->salaryGrade;
	}
	public function setSalaryGrade($salaryGrade) {
		$this->salaryGrade = $salaryGrade;
		return $this;
	}
    
} 
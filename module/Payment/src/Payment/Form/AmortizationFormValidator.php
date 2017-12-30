<?php 
namespace Payment\Form;
 
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class AmortizationFormValidator implements InputFilterAwareInterface 
{
	protected $inputFilter;
    
	public function setInputFilter(InputFilterInterface $inputFilter)
	{
		throw new \Exception("Not used");
	}
    
	public function getInputFilter()
	{
		if (!$this->inputFilter)
		{
			$inputFilter = new InputFilter(); 
			$factory = new InputFactory(); 
            
			$inputFilter->add($factory->createInput([
				'name' => 'employeeNumber',
				'required' => true,
				'filters' => array(
					array('name' => 'StripTags'),
					array('name' => 'StringTrim'),
				),
				'validators' => array(),
			]));
            
			$inputFilter->add($factory->createInput([
					'name' => 'paidDate',
					'required' => true,
					'filters' => array(
						array('name' => 'StripTags'),
					    array('name' => 'StringTrim'),
					),
					'validators' => array(),
			]));
			
			$inputFilter->add($factory->createInput([
				'name' => 'paidAmount',
				'required' => true,
				'filters' => array(
					array('name' => 'StripTags'),
					array('name' => 'StringTrim'),
				),
				'validators' => array( ),
			]));
			
			$inputFilter->add($factory->createInput([
					'name' => 'numberOfMonths', 
					'required' => true,
					'filters' => array(
							array('name' => 'StripTags'),
							array('name' => 'StringTrim'),
					),
					'validators' => array( ),
			]));  
			
			$this->inputFilter = $inputFilter;
		}
		return $this->inputFilter;
	}
}
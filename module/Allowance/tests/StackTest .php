<?php
namespace Allowance\Test;

use Allowance\Model\CalcTrial;
use PHPUnit_Framework_TestCase;
/**
 * Test class for CalcTrial.
 * Generated by PHPUnit on 2014-11-06 at 10:30:23.
 */
class StackTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var CalcTrial
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new CalcTrial();
    }
    
    public function testPushAndPop()
    {
    	$stack = array();
        $this->assertEquals(0, count($stack));

        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertEquals(1, count($stack));

        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }
}
?>

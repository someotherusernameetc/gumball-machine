<?php

require 'GumballMachine.php';

class GumballMachineTest extends PHPUnit_Framework_TestCase
{
	public $gumballMachineInstance;

	public function setUp()
	{
		$this->gumballMachineInstance = new GumballMachine();
	}

	public function testIfWheelWorksStart100(){
		// Suppose we have 100 gumballs...
		$this->gumballMachineInstance->setGumballs(100);

		// ... And we turn the wheel once...
		$this->gumballMachineInstance->turnWheel();

		// ... we should now have 99 gumballs remaining in the machine, right?
		$this->assertEquals(99, $this->gumballMachineInstance->getGumballs());
	}

	public function testIfWheelWorksStart50(){
		// Suppose we have 50 gumballs...
		$this->gumballMachineInstance->setGumballs(50);

		// ... And we turn the wheel once...
		$this->gumballMachineInstance->turnWheel();

		// ... we should now have 99 gumballs remaining in the machine, right?
		$this->assertEquals(49, $this->gumballMachineInstance->getGumballs());
	}

	public function testIfWheelWorksStart1NotEqual(){
        	// Suppose we have 1 gumball...
        	$this->gumballMachineInstance->setGumballs(1);

        	// ... And we turn the wheel once...
        	$this->gumballMachineInstance->turnWheel();

        	// ... we should now have 0 gumballs remaining in the machine, right?
        	$this->assertEquals(0, $this->gumballMachineInstance->getGumballs());
	}

	public function testIfWheelWorksStart0(){
		// Suppose we have 0 gumballs...
		$this->gumballMachineInstance->setGumballs(0);

		// ... And we turn the wheel once...
		$this->gumballMachineInstance->turnWheel();

		// ... we should now have 99 gumballs remaining in the machine, right?
		$this->assertEquals(0, $this->gumballMachineInstance->getGumballs());
	}
}

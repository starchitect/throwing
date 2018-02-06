<?php

namespace Starchitect\Throwing;

use PHPUnit\Framework\TestCase;

class NullPointerExceptionTest extends TestCase
{	

	/**
     * @var NullPointerException $sut systen under test
     */
    protected $sut;
	
    /**
	 * @return NullPointerException system under test
	 */
	protected function createNew()
	{
	    return new NullPointerException();
	}
	
	protected function setUp()
    {
        parent::setUp();
        $this->sut = $this->createNew();
    }

    public function testNewShouldSuccess()
    {
		$actual = $this->sut;
		
        $this->assertNotNull($actual);
    }
	
    public function testThrowShouldSuccess()
    {
		$actual = $this->sut;
		$this->expectException(NullPointerException::class);		
		
		throw $actual;
    }
	
}
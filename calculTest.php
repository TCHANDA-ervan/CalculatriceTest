<?php 
use PHPUnit\Framework\TestCase;
include('calcul.php');
use calcul;

class calculTest extends TestCase
{
    public function testadd()
    {
        $cal = new calcul();
        
        $this->assertEquals(5,$cal->addiction(2,3));
    }

    public function testsous()
    {
        $sou = new calcul();
        
        $this->assertEquals(10,$sou->soustration(20,10));
    }
    public function testmulti()
    {
        $multi= new calcul();
        
        $this->assertEquals(200,$multi->multiplication(20,10));
    }

    public function testdiv()
    {
        $div = new calcul();
        
        $this->assertEquals(10,$div->division(100,10));
    }

}
<?php
// require the file to be tested
require '../functions.php';
use PHPUnit\Framework\TestCase;
class Functions extends TestCase {
    public function testFailureCheckProduct()
    {
        //expected result of the test
        $expected = 'key missing from array';
        //Inputs to get the expected result
        $input = ['name' => 'Matcha Roll'];
        //run the real function and pass in the inputs
        $case = checkProduct($input);
        //compare the expected result to the actual result
        $this->assertEquals($expected, $case);
    }
    public function testMalformedDeclareWinner()
    {
        $input = 3;
        $this->expectException(TypeError::class);
        checkProduct($input);
    }
}
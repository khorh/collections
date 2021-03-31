<?php
// require the file to be tested
require '../functions.php';
use PHPUnit\Framework\TestCase;
class Functions extends TestCase {
    public function testSuccessDisplayProduct()
    {
        //expected result of the test
        $expected = '<div class="product"><div class="photo"><img src="/test.jpg" alt="food" /></div>';
        $expected .= '<h2>test name</h2>';
        $expected .= '<p>test business name</p>';
        $expected .= '<p>GBP100</p></div>';

        //Inputs to get the expected result
        $input = [
            'image' => '/test.jpg',
            'product_name' => 'test name',
            'business_name' => 'test business name',
            'currency' => 'GBP',
            'price' => '100',
        ];
        //run the real function and pass in the inputs
        $case = displayProduct($input);
        //compare the expected result to the actual result
        $this->assertEquals($expected, $case);
    }

    public function testMalformedDisplayProduct()
    {
        $input = 3;
        $this->expectException(TypeError::class);
        displayProduct($input);
    }
}
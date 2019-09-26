<?php


use PHPUnit\Framework\TestCase;

require_once('../functions.php');

class functionTest extends TestCase
{

    public function testprint_values()
    {
        $alteredcarbon = [['title'=>'alteredcarbon', 'start_date'=>'2001-05-01', 'end_date'=>'2003-06-01', 'number_of_seasons'=>'1', 'number_of_episodes'=>'12', 'director'=>'me']];
        $result = print_values($alteredcarbon);
        $expected = '<div><h2>Title: alteredcarbon</h2><p>Start Date: 2001-05-01</p><p>End Date: 2003-06-01</p><p>Number Of Seasons: 1</p><p>Number Of Episodes: 12</p><p>Director: me</p></div>';
        $this->assertIsString($result);
        $this->assertEquals($expected, $result);
    }
}
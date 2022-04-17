<?php
namespace Tests;

use App\TagParser;
use PHPUnit\Framework\TestCase;

class TagParserTest extends TestCase
{
    // personal, money, family
    public function test_it_parsers_a_single_tag() 
    {
        $parser = new TagParser;

        $result = $parser->parse("personal");

        $expected = ['personal'];

        $this->assertSame($expected, $result);
    }

    public function test_it_parses_a_comma_separated_list_of_tags() 
    {
        $parser = new TagParser;

        $result = $parser->parse("personal, money, family, unit test");
        $expected = ['personal', 'money', 'family', 'unit test'];
        $this->assertSame($expected, $result);
    }

    public function test_commas_are_optinal()
    {
        $parser = new TagParser;

        $result = $parser->parse("personal,money,family,unit test");
        $expected = ['personal', 'money', 'family', 'unit test'];
        $this->assertSame($expected, $result);
    }

    public function test_it_parses_a_pipe_separated_list_of_tags()
    {
        $parser = new TagParser;

        $result = $parser->parse('personal | money | family');
        $expected = ['personal', 'money', 'family'];

        $this->assertSame($expected, $result);
    }
}
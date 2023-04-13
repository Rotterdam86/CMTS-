<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class HelpersTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    /** @test */
    public function page_title_should_return_the_base_title_if_title_is_empty()
    {
        //dd(page_title(''));
        $this->assertEquals('CMTS@ - DGBF', page_title(''));
    }

    /** @test */
    public function page_title_should_return_the_correct_title_if_title_is_provided()
    {
        //dd(page_title(''));
        $this->assertEquals('Contact | CMTS@ - DGBF', page_title('Contact'));
        $this->assertEquals('Home | CMTS@ - DGBF', page_title('Home'));
    }
}

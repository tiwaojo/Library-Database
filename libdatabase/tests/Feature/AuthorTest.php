<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthorTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function RouteDirectingTesting()
    {
        # code...
        $res=$this->get('/author')->assertViewIs('author');
        $res=$this->get('/book')->assertViewIs('book');
        $res=$this->get('/genre')->assertViewIs('genre');
    }

    
}

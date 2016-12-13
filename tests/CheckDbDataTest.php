<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CheckDbDataTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
          // in order to check special Data in DB put it here and uncomment
          // $this->seeInDatabase('lead', ['email' => 'example@gmail.com']);
    }
}

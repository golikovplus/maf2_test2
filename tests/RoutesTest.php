<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RoutesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->route('GET', '/');
        $this->route('GET', 'lead.index');
        $this->route('POST', 'lead.store');
        $this->route('POST', 'lead.update',['id' => 1]);
        $this->route('DELETE', 'lead.destroy',['id' => 1]);
    }
}

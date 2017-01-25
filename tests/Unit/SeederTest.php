<?php

namespace Tests\Unit;

use App\Link;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SeederTest extends TestCase
{
    public function testLinksTable()
    {
        factory(Link::class)->create([
            'title' => 'dotdev.co',
        ]);

        $this->seeInDatabase('links', ['title' => 'dotdev.co']);
    }
}
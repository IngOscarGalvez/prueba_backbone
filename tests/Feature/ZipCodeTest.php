<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ZipCodeTest extends TestCase
{
    /**
     * test_zip_code
     *
     * @return void
     */
    public function test_zip_code()
    {
        $response = $this->get('api/zip-codes/01210');

        $response->assertStatus(200);
    }
}

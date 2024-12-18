<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Product;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    
    public function test_authentication(): void
    {
        $user = User::factory()->create(); 
    }
}

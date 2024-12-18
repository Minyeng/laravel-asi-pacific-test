<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
    }
}

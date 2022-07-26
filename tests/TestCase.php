<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Database\Eloquent\Factories\HasFactory;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
}

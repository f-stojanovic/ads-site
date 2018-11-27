<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;

trait CreatesApplication
{
    /**
     * Creates the Application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $App = require __DIR__.'/../bootstrap/App.php';

        $App->make(Kernel::class)->bootstrap();

        return $App;
    }
}

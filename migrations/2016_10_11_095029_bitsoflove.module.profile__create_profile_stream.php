<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class BitsofloveModuleProfileCreateProfileStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'profile'
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [];

}

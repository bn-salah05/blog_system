<?php

namespace BlogSystem\Classes;

use BlogSystem\Traits\Loggable;
use BlogSystem\Traits\Serializable;

class User {
    use Loggable, Serializable;

    public function getLogName() {
        return "User";
    }
}

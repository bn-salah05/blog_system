<?php

namespace BlogSystem\Classes;

use BlogSystem\Traits\Loggable;
use BlogSystem\Traits\Timestampable;
use BlogSystem\Traits\Serializable;

class Comment {
    use Loggable, Timestampable, Serializable;

    public function getLogName() {
        return "Comment";
    }
}

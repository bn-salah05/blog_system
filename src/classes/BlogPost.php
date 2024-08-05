<?php

namespace BlogSystem\Classes;

use BlogSystem\Traits\Loggable;
use BlogSystem\Traits\Timestampable;
use BlogSystem\Traits\Serializable;
use BlogSystem\Traits\Taggable;
use BlogSystem\Interfaces\Publishable;

class BlogPost implements Publishable {
    use Loggable, Timestampable, Serializable, Taggable;

    public function getLogName() {
        return "BlogPost";
    }

    public function publish() {
        $this->log("Blog post published.");
    }

    public function unpublish() {
        $this->log("Blog post unpublished.");
    }

    public function __toString() {
        return "BlogPost with tags: " . implode(', ', $this->getTags());
    }
}

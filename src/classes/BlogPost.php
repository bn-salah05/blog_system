<?php

namespace src\classes;

use src\traits\Publishable;
use src\traits\Loggable;
use src\traits\Timestampable;
use src\traits\Serializable;
use src\traits\Taggable;

class BlogPost implements Publishable {

    use Publishable, Loggable, Timestampable, Serializable, Taggable;

    private int $id;
    private string $title;
    private string $content;
    private $author;
    private ?\DateTime $publishedAt;
    private ?\DateTime $updatedAt;

    public function getLogName("BlogPost"): string {
        return $this->getLogName("BlogPost");
    }
}



?>
<?php

namespace src\traits;

use src\traits\Timestampable;

trait Loggable {
    
    use Timestampable {
        Timestampable::setCreatedAt as setCreatedAt;
    }

    public function log (string $message): string {
        $logName = $this->getLogName();
        $timestamp = $this->setCreatedAt();
        return "$timestamp - $logName : $message";
    }

    abstract function getLogName(): string;
}

?>
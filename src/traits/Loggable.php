<?php

namespace BlogSystem\Traits;

trait Loggable {

    abstract public function getLogName();

    public function log($message) {
        $logName = $this->getLogName();
        $timestamp = date('Y-m-d H:i:s');
        echo "[$timestamp] [$logName] $message\n";
    }
}

<?php

namespace BlogSystem\Traits;

trait Timestampable {

    private $createdAt;
    private $updatedAt;

    public function setCreatedAt($dateTime) {
        $this->createdAt = $dateTime;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function setUpdatedAt($dateTime) {
        $this->updatedAt = $dateTime;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }
}

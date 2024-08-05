<?php

namespace BlogSystem\Traits;

trait Serializable {
    public function serialize() {
        return serialize($this);
    }

    public function unserialize($data) {
        $obj = unserialize($data);
        foreach (get_object_vars($obj) as $property => $value) {
            $this->$property = $value;
        }
    }
}

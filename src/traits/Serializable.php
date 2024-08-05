<?php 

namespace src\traits;

trait Serializable {

    public function serialize(mixed $object): string {
        $serialized = serialize($object);
        return $serialized;
    } 

    public function unserialize(string $string): mixed {
        $unserialized = unserialize($string);
        return $unserialized;
    }

}

?>
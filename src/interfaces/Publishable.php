<?php 

namespace src\traits;

interface Publishable {
    
    public function publish(): void;

    public function unpublish(): void;

}

?>
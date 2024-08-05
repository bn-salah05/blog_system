<?php

namespace src\traits;

trait Timestampable {

    protected Timestampable $CreatedAt;
    protected Timestampable $UpdatedAt;

    public function getCreatedAt(): Timestampable {
        return $this->CreatedAt;
    }

    public function setCreatedAt(): void {
        $this->CreatedAt = date("Y-m-d H:mn:s");
    }

    public function getUpdatedAt(): Timestampable {
        return $this->UpdatedAt;
    }

    public function setUpdatedAt(): void {
        $this->UpdatedAt = date("Y-m-d H:mn:s");
    }
}

?>
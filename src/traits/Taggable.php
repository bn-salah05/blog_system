<?php

namespace BlogSystem\Traits;

trait Taggable {
    private $tags = [];

    public function addTag($tag) {
        $this->tags[] = $tag;
    }

    public function removeTag($tag) {
        $this->tags = array_filter($this->tags, function($t) use ($tag) {
            return $t !== $tag;
        });
    }

    public function getTags() {
        return $this->tags;
    }
}

<?php 

namespace src\traits;

trait Taggable {
    protected array $tags = [];

    public function addTag (mixed ...$tagslist): void {
        foreach ($tagslist as $tag){
            $this->tags[] = $tag;
        }
    }

    public function removeTag (string $tag): void {
        if (in_array($tag, $this->tags)) {
            $key = array_search($tag, $this->tags);
            unset($this->tags[$key]);
        }
    }

    public function getTags (): array {
        return $this->tags;
    }
}


?>
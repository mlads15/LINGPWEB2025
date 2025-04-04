<?php

class Link {

    private string $linkImg;
    private string $info;

    public function getLinkImg(): string {
        return $this->linkImg;
    }

    public function setLinkImg(string $linkImg): self {
        $this->linkImg = $linkImg;

        return $this;
    }

    public function getInfo(): string {
        return $this->info;
    }

    public function setInfo(string $info): self {
        $this->info = $info;

        return $this;
    }
    
}
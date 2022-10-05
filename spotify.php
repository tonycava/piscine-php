<?php

class Song
{
    public string $artist;
    public string $title;
    public string $duration;

    public function __construct()
    {
    }

}

class Playlist
{
    public array $songs;
    public int $totalMedias;

    public function __construct(array $songs, int $totalMedias)
    {
        $this->totalMedias = $totalMedias;
        $this->songs = $songs;
    }

    public function __toString(): string
    {
        return "la";
    }

    public function addMedia(string $song)
    {
        $this->songs[] = $song;
    }
}


class App
{

    private array $content;


    public function start()
    {
        $this->readLine();

        $this->write("d");
    }

    public function setContent(array $content)
    {
        $this->content = $content;
    }

    public function write(string $toWrite)
    {


        print_r("\n");
    }

    private function getContent(): array
    {
        return $this->content;
    }


    private function readLine(bool $asArray = false): array|bool|string
    {
        ob_start();
        echo implode("", $this->getContent());
        $data = ob_get_contents();
        if ($asArray) {
            $data = explode("\n", ob_get_contents());
        }
        ob_clean();
        return $data;
    }
}
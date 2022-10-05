<?php

class Song
{
    public string $artist;
    public string $title;
    public string $duration;

    public function __construct(string $artist, string $duration, string $title)
    {
        $this->artist = $artist;
        $this->duration = $duration;
        $this->title = $title;
    }
}

class Playlist
{
    public array $songs = [];
    public int $totalMedias = 0;

    public function __toString(): string
    {
        return "Songs added: $this->totalMedias";
    }

    public function addMedia(Song $media)
    {
        $this->totalMedias += 1;
        $this->songs[] = $media;
    }
}


class App
{
    private array $contents;

    public function start()
    {
        $time = [0, 0, 0];
        $playlist = new Playlist();

        foreach ($this->getContent() as $content) {

            $splited = explode(";", $content);
            $minutesSeconds = explode(":", $splited[2]);

            $time[2] += intval($minutesSeconds[1]);
            $time[1] += intval($minutesSeconds[0]);

            if ($time[2] >= 60) {
                $time[2] -= 60;
                $time[1] += 1;
            }

            if ($time[1] >= 60) {
                $time[1] -= 60;
                $time[0] += 1;
            }

            $playlist->addMedia(new Song($splited[0], $splited[1], $splited[2]));
        }

        $this->write($time, $playlist);
    }

    public function setContent(array $content)
    {
        $this->contents = $content;
    }

    public function write(array $toWrite, Playlist $play)
    {
        echo $play;
        echo "\n";
        echo "Playlist length: $toWrite[0]h $toWrite[1]m $toWrite[2]s";
    }

    private function getContent(): array
    {
        return $this->contents;
    }
}

function run(array $content): array
{
    ob_start();
    $app2 = new App();
    $app2->setContent($content);
    $app2->start();

    $data = ob_get_contents();
    ob_clean();

    return explode("\n", $data, 2);
}

$run2 = run(["ABBA;Mamma Mia;3:35\n", "Harry Styles;Watermelon Sugar;2:54\n", "LF SYSTEM;Affraid To Feel;2:58\n", "Two Door Cinema Club;What You Know;3:10"]);

print_r($run2);
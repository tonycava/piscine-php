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
    public array $songs;
    public int $totalMedias;

    public function __toString(): string
    {
        return "la";
    }

    public function addMedia()
    {
        $this->songs[] = "";
    }
}


class App
{
    private array $contents;
    public int $totalMedias = 0;


    public function start()
    {
        $time = [0, 0, 0];

        foreach ($this->contents as $content) {
            $splited = explode(";", $content);
            if (count($splited) != 3) continue;

            $minutesSecond = explode(":", $splited[2]);

            print_r($minutesSecond);

            $time[2] += intval($minutesSecond[1]);

            $time[1] += intval($minutesSecond[0]);

            if ($time[2] >= 60) {
                $time[2] -= 60;
                $time[1] += 1;
            }

            if ($time[1] >= 60) {
                $time[1] -= 60;
                $time[0] += 1;
            }

            $this->totalMedias += 1;
        }

        print_r($time);

        $this->write($time);

    }

    public function setContent(array $content)
    {
        $this->contents = $content;
    }

    public function write(array $toWrite)
    {
        echo "Songs added: $this->totalMedias\n";
        echo "Playlist length: $toWrite[0]h $toWrite[1]m $toWrite[2]s";
    }

    private function getContent(): array
    {
        return $this->contents;
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

$app = new App();

$app->setContent(["JUL;Alors la zone;3:25\n", "Naps;La kiffance;2:59\n", "2TH;Si seulement;4:09\n", "Vayn;24H chrono;3:48"]);

$app->start();

<?php
class Movie
{
    public $title;
    public $language;
    public $vote;
    public $description;

    function __construct($title, $language, $vote, $description)
    {
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
        $this->description = $description;
    }

    public function getToUpperLanguage()
    {
        return  strtoupper($this->language);
    }
}

$mummia = new Movie('mummia', 'ita', 3, 'lorem');

var_dump($mummia);

echo $mummia->getToUpperLanguage();

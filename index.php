<?php
class Movie{
    public $id
    public $title;
    public $trama;
    public $year;
    public $originalLanguage;
    public $cast;
    
    function __construct($_id,$_title,$_trama,$_year,$_originalLanguage,$_cast);

    public function setYear($year){
        if(!is_numeric($year) || $year = 0) return;
        $this-> $year = $year;
    }
}



?>
<?php
class Movie{
    public $id;
    public $title;
    public $trama;
    public $year;
    public $originalLanguage;
    public $genre;
    
    function __construct($_id,$_title,$_trama,$_year,$_originalLanguage = 'english',$_genre)
    {
        $this->id = $_id;
        $this->title = $_title;
        $this->trama = $_trama;
        $this->year = $_year;
        $this->originalLanguage = $_originalLanguage;
        $this->genre = $_genre;

    }

    public function setYear($year){
        if(!is_numeric($year) || $year = 0) return;
        $this-> $year = $year;
    }

    public function getAbstract($max = 50)
    {
        return substr($this->trama,0,50).'...';
    }
}

$movie1 = new Movie (1,'Il Signore Degli Anelli','Un giovane hobbit e un variegato gruppo, composto da umani, un nano, un elfo e altri hobbit, partono per un delicata missione, guidati dal potente mago Gandalf. Devono distruggere un anello magico e sconfiggere il malvagio Sauron.',2002,'english','fantasy');
$movie2 = new Movie (2,'John Wick',"Il leggendario assassino John Wick si è allontanato dal mondo della violenza dopo aver sposato l'amore della propria vita. Quando la donna muore improvvisamente, il giovane cade nello sconforto più profondo. Il perfido criminale Iosef Tarasov decide di tormentarlo rubandogli l'automobile ed uccidendogli il cane. Per l'uomo è l'ora della vendetta.",2014,'english','action movie');
$movies=[
    $movie1,
    $movie2
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOvies</title>
</head>
<body>
    <?php foreach($movies as $movie){?>
        <article>
            <h2><?php echo $movie->id;?>.<?= $movie->title;?></h2>
            <p><?php echo $movie->getAbstract(70);?></p>
            <p><?php echo $movie->year;?></p>
            <p><strong><?php echo $movie->originalLanguage;?></strong></p>
            <strong><?php echo $movie->genre;?></strong>
        </article>
    <?php }?>
</body>
</html>
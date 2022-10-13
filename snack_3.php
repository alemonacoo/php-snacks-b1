<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: 
DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->


<?php
$posts = 
[
    "02-01-2007" => ["post" => "buongiorno", "author" => "zia pina"],
    "25-04-2008" => ["post" => "oi?", "author" => "zia pina"],
    "18-02-2011" => ["post" => "c'è qualcuno?", "author" => "zia pina"],
    "24-08-2020" => ["post" => "oggi ho fatto le tagliatelle", "author" => "zia pina"],
    "12-10-2023" => ["post" => "am i dead?", "author" => "zia pina"]
];

    $dates = array_keys($posts);



    for($i=0; $i < count($posts); $i++){
    $post = $posts[$dates[$i]];
    ?>    
    <div>
        <hr>
        <p><strong>Data: </strong><?= $dates[$i] ?></p>        
        <p><strong>Post: </strong><?= $post["post"] ?></p>
        <p><strong>Autore: </strong><?= $post["author"] ?></p>
        <hr>
    </div>



<?php
}
?>

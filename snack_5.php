<!-- Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
    $classe = [
        "piero" => ["matematica" => 5, "italiano" =>7, "inglese" =>8, "scienze" =>10, "fisica" => 9],
        "marco" => ["matematica" => 8, "italiano" =>6, "inglese" =>10, "scienze" =>7, "fisica" => 6],
        "gianni" => ["matematica" => 4, "italiano" =>6, "inglese" =>5, "scienze" =>7, "fisica" => 5],
    ]; 


    $alunni = array_keys($classe);

    for($i=0; $i < count($classe); $i++){
        $alunno = $classe[$alunni[$i]];
        var_dump($alunno);
        $materie = array_keys($alunno);
        $media = 0;

        for($m=0; $m < count($alunno); $m++){
            $media += $alunno[$materie[$m]];
        }

        $media /= count($materie);
        var_dump($media);

        
    }



?>
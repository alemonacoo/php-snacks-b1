<!-- Snack:  
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa 
e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
-->

<?php
    $partite_giornata_X = 
    [
        [ 'squadra_casa' => "Olimpia Milano", "squadra_ospite" => "Cantù", "punti_casa" => 55, "punti_ospite" => 60],
        [ "squadra_casa" => "Reggiana", "squadra_ospite" => "Pesaro", "punti_casa" => 25, "punti_ospite" => 10],
        [ "squadra_casa" => "Verona", "squadra_ospite" => "Derthona", "punti_casa" => 85, "punti_ospite" => 100],
        [ "squadra_casa" => "Virtus Bologna", "squadra_ospite" => "Brescia", "punti_casa" => 105, "punti_ospite" => 20],
    ];

    for($i=0; $i < count($partite_giornata_X); $i++){
        $partita = $partite_giornata_X[$i];

        ?>    
        <div>
            <h3>PARTITA: </h3>
            <p><?= $partita['squadra_casa']?> - <?= $partita["squadra_ospite"] ?> | <?= $partita["punti_casa"]?> - <?= $partita["punti_ospite"]?></p>
        </div>



    <?php
    }
?>
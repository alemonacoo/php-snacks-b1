<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo. -->

<?php
 $text = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam velit, excepturi doloremque dolor quisquam labore dolorem libero dolore assumenda at beatae, a temporibus ea veritatis nemo? Eveniet totam tenetur dignissimos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore maiores dolor ipsum ullam voluptatibus, ut optio sint nihil iusto cumque tenetur nesciunt sunt tempora. Architecto rerum accusantium non fugit in!";

 $paragraph = explode('.', $text);
 echo 'ORIGINAL TEXT: ' .  $text;



 for($i=0; $i < count($paragraph); $i++){
    ?>    
    <div>
        <p><?= $paragraph[$i] ?>.</p>        
        <hr>
    </div>



<?php
}
?>

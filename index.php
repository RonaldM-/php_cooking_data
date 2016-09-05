<!--Exo1-->
<p>
    <?php
        $string = file_get_contents("dictionnaire.txt", ".:/home/pc_apprenant_9/Git/php_cooking_data");
        $dico = explode("\n", $string);
        $quantity = count($dico);
        /*echo("Il y a $quantity dans ce dictionnaires");*/
            $compteur = 0;
            $compteur_w = 0;
            $compteur_q = 0;
        for($i = 0; $i < $quantity; $i ++){
            if(strlen($dico[$i]) == 15){
                /*print($dico[$i]."<br/>");*/
                $compteur++;
            }
            if(preg_match("/w/",$dico[$i])){
                $compteur_w++;
            }
            if(preg_match("/q$/",$dico[$i])){
                $compteur_q++;
            }
        }
        echo "il y a mots $compteur_w contenant la lettre 'w'.</br>";
        echo "il y a mots $compteur_q contenant la lettre 'q'.</br>";
        echo "il y a $compteur mots avec 15 caractères.</br>";
    ?>
</p>

<p>
    <?php
        $file_film = file_get_contents("films.json",".:/home/pc_apprenant_9/Git/php_cooking_data");
        $brut = json_decode($file_film, true);
        $top = $brut["feed"] ["entry"];
        echo"<ol>Top 10 FILM";
        for($i = 1; $i < 10; $i++){
            echo '<li>'.$top[$i]['im:name']['label'].'</li>';
        }
        echo"</ol>";
    ?>
</p>

<?php

include("./alunno.php");

    $a1 = new alunno();
    $a2 = new alunno();
    $a3 = new alunno();

    $a1->set_name("Andrea");
    $a1->set_surname("Sestini");
    $a1->set_eta(18);

    $a2->set_name("Samuele");
    $a2->set_surname("Cosma");
    $a2->set_eta(18);


    $a3->set_name("Gabriele");
    $a3->set_surname("Borgi");
    $a3->set_eta(19);

    $alunni = array($a1, $a2, $a3);

    for($i=0;$i<3;$i++){

        echo $alunni[$i]->toString();
    }
?>
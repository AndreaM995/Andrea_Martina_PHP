<?php
// $prova = "ciao";
// echo($prova);


// ESERCIZI PHP


// - Dato un array di numeri, scrivere un programma che mi permetta di avere la 
// media SOLO dei numeri pari contenuti all’interno dell’array

// $numeri = [2, 6, 3, 10, 5];
// $somma = 0;
// $contatoreElementi = 0;
//     function sommaElementi($array, $sommaNumeri, $contatorePari){
//         forEach($array as $numero){
//             if($numero % 2 == 0){
//                 $sommaNumeri = $numero + $sommaNumeri;
//                 $contatorePari++;
//                 echo $numero . "\n";
//                 echo $sommaNumeri . "\n";
//             }
//         }
//         $sommaNumeri = $sommaNumeri / $contatorePari;
//         echo $sommaNumeri;
//     }
//     sommaElementi($numeri, $somma, $contatoreElementi);


    // -Dato un array di utenti con nome, cognome e genere, per ogni utente stampare 
    // “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” a seconda del genere 

    // $array = [
    //     ["nome" => "Lucia ", "cognome" => "Costanza ", "genere" => "female"],
    //     ["nome" => "Sara ", "cognome" => "Costantino ", "genere" => "female"],
    //     ["nome" => "Lucio ", "cognome" => "Costantone ", "genere" => "male"],
    //     ["nome" => "Saro ", "cognome" => "Costanzo ", "genere" => "male"]
    // ];
    // foreach($array as $persone){
    //     if($persone["genere"] == "female"){
    //         echo "Buongiorno Signora " . $persone["nome"] . $persone["cognome"] . "\n";
    //     } else {
    //         echo "Buongiorno Signor " . $persone["nome"] . $persone["cognome"] . "\n";
    //     }
    // }


    // -Scrivere un programma che stampi in console tutti i numeri da uno a cento. 
    // Se il numero è multiplo di 3, stampare “PHP” al posto del numero; se multiplo di 5 deve stampare 
    // “JAVASCRIPT”; se multifplo di 3 e 5 (15) deve stampare “HACKADEMY72".

    for($i=1; $i<101; $i++){
        // echo $i . "\n";
        if($i % 15 == 0){
            echo "Hackademy72 " . "\n";
        }
        if($i % 5 == 0){
            echo "JS " . "\n";
        } else if($i % 3 == 0){
            echo "Php " . "\n";
        } else {
            echo $i . "\n";
        }
    }

?>
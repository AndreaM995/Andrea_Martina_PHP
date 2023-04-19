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

//     for($i=1; $i<101; $i++){
//         // echo $i . "\n";
//         if($i % 15 == 0){
//             echo "Hackademy72 " . "\n";
//         }
//         if($i % 5 == 0){
//             echo "JS " . "\n";
//         } else if($i % 3 == 0){
//             echo "Php " . "\n";
//         } else {
//             echo $i . "\n";
//         }
//     }



// Applicando ciò che abbiamo fatto a lezione creare uno Zoo in Object Oriented:
// Creare una classe animale con proprietà e metodi generali;




// // creare classe "zoo" che contiene (attributi)/metodi comuni per tutti i dati che vogliamo rappresentare
// class zoo {
//     public $animale;
//     public $razza;
//     public $sesso;
//     // chiamo i parametri formali con il nome degli attributi preceduto da "_" nella funzione con metodo "__construct"
//     // che mi crea l'oggetto
//     public function __construct($_animale, $_razza, $_sesso) {
//         // oggetto creato
//         $this->animale = $_animale;
//         $this->razza = $_razza;
//         $this->sesso = $_sesso;
//     }
//         public function animali() {
//             echo "Questo è $this->animale la sua razza è $this->razza e il suo sesso è $this->sesso \n";
//         }
// }
//     // creato primo oggetto e dato dei valori
//     $animale1 = new zoo ("Cane", "Pincher", "Maschio");
//     // invoco della funzione
//     $animale1->animali();




// // Creare N classi (almeno 5) di animali reali che specializzano la classe animale;


// class Animal {
//     public $animale;
//     public $razza;
//     public $sesso;
//     // creazione attributo statico che appartiene alla classe e non all'oggetto
//     public static $counter = 0;
//     // chiamo i parametri formali con il nome degli attributi preceduto da "_" nella funzione con metodo "__construct"
//     // che mi crea l'oggetto
//     public function __construct($_animale, $_razza, $_sesso) {
//         // oggetto creato
//         $this->animale = $_animale;
//         $this->razza = $_razza;
//         $this->sesso = $_sesso;
//         // richiamo attributo statico
//         self::$counter++;
//     }
//         public function animali() {
//             echo "Questo è $this->animale la sua razza è $this->razza e il suo sesso è $this->sesso \n";
//         }
// }
//     // creato primo oggetto e dato dei valori
//     $animale1 = new Animal ("Cane", "Pincher", "Maschio");
//     // invoco della funzione
//     $animale1->animali();

//     // creazione sottoclasse della classe Padre ("Animal")
//     class Pesce extends Animal {
//         public $mare;
        
//         public function __construct($_animale, $_razza, $_sesso, $_mare){
//             parent::__construct ($_animale, $_razza, $_sesso);
//             $this->mare = $_mare;
//         }
//         public function animali() {
//             echo "Questo è $this->animale la sua razza è $this->razza e il suo sesso è $this->sesso e vive in $this->mare \n";
//         }
//     }
//     $animale1 = new Pesce ("Tonno", "Scombridae", "maschio", "Oceano Atlantico");
//     $animale1->animali();


//     class Cane extends Animal {
//         public $casa;
        
//         public function __construct($_animale, $_razza, $_sesso, $_casa){
//             parent::__construct ($_animale, $_razza, $_sesso);
//             $this->casa = $_casa;
//         }
//         public function animali() {
//             echo "Questo è $this->animale la sua razza è $this->razza e il suo sesso è $this->sesso e vive in $this->casa \n";
//         }
//     }
//     $animale1 = new Cane ("Cane", "Pastore Tedesco", "maschio", "Casa");
//     $animale1->animali();


//     class Mucca extends Animal {
//         public $pianura;
        
//         public function __construct($_animale, $_razza, $_sesso, $_pianura){
//             parent::__construct ($_animale, $_razza, $_sesso);
//             $this->pianura = $_pianura;
//         }
//         public function animali() {
//             echo "Questo è $this->animale la sua razza è $this->razza e il suo sesso è $this->sesso e vive in $this->pianura \n";
//         }
//     }
//     $animale1 = new Mucca ("Mucca", "bovino", "femmina", "pianura");
//     $animale1->animali();


//     class Gatto extends Animal {
//         public $giro;
        
//         public function __construct($_animale, $_razza, $_sesso, $_giro){
//             parent::__construct ($_animale, $_razza, $_sesso);
//             $this->giro = $_giro;
//         }
//         public function animali() {
//             echo "Questo è $this->animale la sua razza è $this->razza e il suo sesso è $this->sesso e vive in $this->giro \n";
//         }
//     }
//     $animale1 = new Gatto ("Gatto", "Felino", "maschio", "giro");
//     $animale1->animali();


//     class Gallina extends Animal {
//         public $giardino;
        
//         public function __construct($_animale, $_razza, $_sesso, $_giardino){
//             parent::__construct ($_animale, $_razza, $_sesso);
//             $this->giardino = $_giardino;
//         }
//         public function animali() {
//             echo "Questo è $this->animale la sua razza è $this->razza e il suo sesso è $this->sesso e vive in $this->giardino \n";
//         }
//     }
//     $animale1 = new Gallina ("Gallina", "Livornese", "femmina", "Oceano Atlantico");
//     $animale1->animali();





// Implementare un ciclo che faccia reinserire la password qualora le regole non fossero 
// rispettate e che interrompa il programma in caso di password accettata.

// $password = readline("Inserisci Password: ");
// $control = false;
// while($control == false)
//     if(strlen($password) >= 8){
//         echo "La password è corretta";
//         $control = true;
//     }else{
//         $password = readline("La password deve contenere un minimo di 8 caratteri! Riprovare: ");
//     }



// class Batman {
//     public $parteAnteriore;
//     public $partePosteriore;

//     public function __construct(ParteAnteriore $_parteAnteriore, PartePosteriore $_partePosteriore) {
//         $this->parteAnteriore = $_parteAnteriore;
//         $this->partePosteriore = $_partePosteriore;
//     }

//     public function movimento() {
//         $this->partePosteriore->muoviti();
//     }

//     public function attacco() {
//         $this->parteAnteriore->attacca();
//     }
// }

// // Provate ad aggiungere attributi e metodi a ParteAnteriore e PartePosteriore
// abstract class ParteAnteriore {
//     abstract function attacca();
// }

// abstract class PartePosteriore {
//     abstract function muoviti();
// }

// class Lanciafiamme extends ParteAnteriore {
//     public function attacca() {
//         echo "Ti cuocio allo spiedo \n";
//     }
// }

// class Lanciarazzi extends ParteAnteriore {
//     public function attacca() {
//         echo "Ti faccio esplodere come un botto di Capodanno \n";
//     }
// }

// class Ruote extends PartePosteriore {
//     public function muoviti() {
//         echo "Scappo via sgommando \n";
//     }
// }

// class Propulsori extends PartePosteriore {
//     public function muoviti() {
//         echo "Sto praticamente decollando \n";
//     }
// }


// PROGETTAZIONE DESMONDMOBILE MODELLO ARMA LUCIA

// class DesmondMobile {
//     public $ParteAnteriore;
//     public $PartePosteriore;

//     public function __construct(ParteAnteriore $_ParteAnteriore, PartePosteriore $_PartePosteriore) {
//         $this->ParteAnteriore = $_ParteAnteriore;
//         $this->PartePosteriore = $_PartePosteriore;
//     }
//     public function movimento() {
//         $this->PartePosteriore->trappole();
//     }
//     public function attacco() {
//         $this->ParteAnteriore->attacca();
//     }
// }
// abstract class ParteAnteriore {
//     abstract function attacca();
// }
// abstract class PartePosteriore {
//     abstract function trappole();
// }
// class LanciaLucie extends ParteAnteriore {
//     public function attacca() {
//     echo "Ti lancerò una Lucia, arma letale sottoforma di macchina che conosce tutte le arti marziali a livello mondiale usando gli accessori della desmondMobile \n";
// }
// }
// class LucyProtector extends ParteAnteriore {
//     public function attacca(){
//     echo "LucyProtector, una Lucia sottoforma di macchina in grado di deviare missili, proiettili ed esplosioni nucleari fino a 100 chilotoni \n";
// }
// }
// class TurboLucia extends PartePosteriore {
//     public function trappole() {
//     echo "Sono una Lucia sottoforma di macchina che aziona un turbo in grado di fare 0-100 in 0,00000000000000000001 ms/h \n";
// }
// }
// class LucyTrap extends PartePosteriore {
//     public function trappole() {
//     echo "Sono una Lucia sottoforma di macchina che lancia le trappole tre volte moltiplicato per 300 livelli successivi alle trappole buccia di banana di super mario kart \n";
// }
// }

// $DesmondMobile1 = new DesmondMobile(new LanciaLucie, new TurboLucia);
// $DesmondMobile2 = new DesmondMobile(new LucyProtector, new LucyTrap);
// $DesmondMobile2->movimento();




// altra progettazione

// class Skyline {
//     public $Anteriore;
//     public $Posteriore;
//         public function __construct(Anteriore $_Anteriore, Posteriore $_Posteriore){
//             $this->Anteriore = $_Anteriore;
//             $this->Posteriore = $_Posteriore;
//     }
//         public function frenoamano() {
//                 $this->Posteriore->drift();
//             }
//         public function accelerata() {
//                 $this->Anteriore->motore();
//             }
// }
//     abstract class Anteriore {
//         abstract function motore();
//     }
//     abstract class Posteriore {
//         abstract function drift();
//     }
//         class Accelera extends Anteriore {
//             public function motore() {
//             echo "Accelerazione 76/100 \n";
//         }
//         }
//         class Nos extends Anteriore {
//             public function motore(){
//             echo "Nitro livello 2/3 \n";
//         }
//         }
//         class Scarico extends Posteriore {
//             public function drift() {
//             echo "Scarico Diretto \n";
//         }
//         }
//         class Sospensioni extends Posteriore {
//             public function drift() {
//             echo "Sospensioni a Gas \n";
//         }
//         }
        
//         $Skyline1 = new Skyline(new Accelera, new Scarico);
//         $Skyline2 = new Skyline(new Nos, new Sospensioni);
//         $Skyline1->accelerata();




?>
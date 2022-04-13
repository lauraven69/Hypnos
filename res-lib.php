<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class Reservation extends AbstractController {
    /**
 * @Route("/reservation", name="reservation")
 *
 */
 //Constructor - connecté a la base de donnée
 private $pdo;
 private $stmt;
 private $error;

 function __construct () {
     try {
         $this->pdo = new PDO(
             "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=". 
             DB_CHAR, DB_USER, DB_PASS, [PDO:: ATTR_ERRMODE =>PDO:: ERRMODE_EXCEPTION]
         );
     } catch (Exception $ex) { exit($ex->getMessage()); }
 }

 //Fermeture de la connection à la base de donnée
 function __destruct ()  {
     $this->pdo = null;
     $this->stmt = null;
 }
}


//enregistrement de la reservation 
function save ($date, $name, $email) {
    try {
        $this->stmt = $this->pdo->prepare(
            " INSERT INTO `reservation` (`res_date`, `res_name`, `res_email`) VALUES (?,?,?)"
        );    
        $this->stmt->execute([$date, $name, $email]);
        return true;
    } catch (Exception $ex) { 
        $this->error = $ex->getMessage();
        return false;
    }
}



//Paramètres base de donnée

define("DB_HOST", "root");
define("DB_NAME", "hypnos");
define("DB_CHAR", "utf8");
define("DB_USER", "root");
define("DB_PASS", "");


//Nouvelles réservations
$_RSV = new Reservation();

//test
echo $_RDV->save("2022-04-13","jonh doe", "jon@doe.com")
? "OK" : $_RSV->error;
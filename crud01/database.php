<?php
// connessione al db del crud
class Database{
  private static $dbname = 'crud_tutorial';
  private static $dbhost = 'localhost';
  private static $dbusername = 'root';
  private static $dbuserpassword = 'root';
  private static $cont = null;
  // costruttore --> l'iniziallizzazione della classe non è ammessa perché è statica lo faccio così
  public function __construct(){
    die('Init function is not allowed');
  }
  // metodo per la connessione
  public static function connect(){
    // esiste una sola connessione su tutta l'applicazione
    if(null == self::$cont){
      try{
        self::$cont =  new PDO( "mysql:host=".self::$dbhost.";"."dbname=".self::$dbname, self::$dbusername, self::$dbuserpassword);
        //echo "Sono connesso";
      }
      catch(PDOException $e){
        die($e->getMessage());
      }
    }
    return self::$cont;
  }
  //metodo per la disconnessione
  public static function disconnect(){
    self::$cont = null;
  }
}// end of class
?>

<?php
  class configLiv {
    private static $instance = NULL;

    public static function getConnexion() {
      if (!isset(self::$instance)) {
		try{
        self::$instance = new PDO('mysql:host=localhost;dbname=bweb', 'root', '');
		self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
            die('Erreur: '.$e->getMessage());
		}
      }
      return self::$instance;
    }
    public static function filterTable($query)
    {
    $connect = mysqli_connect("localhost", "root", "", "bweb");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
    }

  }
?>
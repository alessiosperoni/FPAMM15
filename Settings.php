<?php

/**
 * @author Alessio Speroni
 */
class Settings {

    // variabili di accesso per il database
    public static $db_host = 'localhost';
    public static $db_user = 'root';
    public static $db_password = 'alessio';
    public static $db_name='easyparking';
    
<<<<<<< HEAD
    private static $appPath='/amm2015/speroniAlessio/FPAMM15/';
=======
    private static $appPath='localhost/FPAMM15/index.php';
>>>>>>> parent of 811caf8... Update Settings.php
    public static function getApplicationPath(){return self::$appPath;}
    /*
    public static function getApplicationPath() {
        if (!isset(self::$appPath)) {
            // restituisce il server corrente
            switch ($_SERVER['HTTP_HOST']) {
                case 'localhost':
                    // configurazione locale
                    self::$appPath = 'http://' . $_SERVER['HTTP_HOST'] . '/FPAMM15/esami14/';
                    break;
                case 'spano.sc.unica.it':
                    // configurazione pubblica
                    self::$appPath = 'http://' . $_SERVER['HTTP_HOST'] . '/amm2014/davide/esami14/';
                    break;

                default:
                    self::$appPath = '';
                    break;
            }
        }
        
        return self::$appPath;
    }*/

}

?>

<?php
/**
 * Class that connects us to the database
 *
 *
 * @author Stephan aka Loremaster
 * @copyright GNU PL
 */


class DbConnect {
/**
 * Property that stores database object
 * // @var type description
 *
 * @var object A database object
 *
 */
protected $db;

/**
 *
 * Method that checks database object or creates a new one if one is not found
 * // @param type  method parametr_name description
 *
 * @param object $db A database oject if it exists
 *
 */

protected function __construct($db=NULL)
{
    if (is_object($db))
    {
        $this->db=$db;
    }
    else
    {
        $dsn='mysql:host='.DB_HOST.';dbname='.DB_NAME;
        try
        {
            $this->db=PDO($dsn, DB_USER, DB_PASS);
        }
        catch( Exception $e)
        {
            die($e=getMessage());
        }



    }
}



}

// Пишет ошибка, call from invalid contetext, если заменить на public, то работает. Буду разбираться
//$object = new DbConnect();
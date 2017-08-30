<?php
/**
 * Article Model
 */

class Article extends Illuminate\Database\Eloquent\Model
{
    public $timestamps = false;

//    public static function first()
//    {
//        try{
//            $dbh = new PDO('mysql:host=localhost;dbname=mFw','homestead','secret', array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8",PDO::ATTR_PERSISTENT => true));
//
//            $query = $dbh->query('SELECT * FROM articles limit 0,1');
//
//            $result = $query->fetchAll(PDO::FETCH_ASSOC);
//
//            return $result;
//
//        }catch (PDOException $e){
//            print 'error:'. $e->getMessage();
//            die();
//        }
//
//    }
}
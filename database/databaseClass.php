<?php

class databaseClass{

private static $conn;

 public static function setConnection($connection)
    {
   	databaseClass::$conn=$connection;
    }

public static function User ()
{
    $conn=databaseClass::$conn;
    $query = $conn->prepare("SELECT * FROM asw_user_login");//Calling this specific query from the database
    $query->execute();
    $User=$query->fetchAll();//Fetch the result from the query
    return $User;
}

public static function Admin ()
{
    $conn=databaseClass::$conn;
    $query = $conn->prepare("SELECT * FROM asw_admin_login");//Calling this specific query from the database
    $query->execute();
    $Admin=$query->fetchAll();//Fetch the result from the query
    return $Admin;
}

public static function Course ()
{
    $conn=databaseClass::$conn;
    $query = $conn->prepare("SELECT * FROM asw_course");//Calling this specific query from the database
    $query->execute();
    $Course=$query->fetchAll();//Fetch the result from the query
    return $Course;
}

}

?>
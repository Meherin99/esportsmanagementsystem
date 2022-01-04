<?php
class database {
    
    protected $connection;

    function setconnection(){
        try{

            $this->connection=new PDO("mysql:host=localhost; dbname=esportsmanagementsystem","root","");
            // echo "Connected";
            
        } catch(PDOException $e){
       
            echo " Error";

          }

    }
}
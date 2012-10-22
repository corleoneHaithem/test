<?php
//fnction cherche dans la base de doné (la colonne username) l existance d un 
//username egaux au parametre passé a la fonction
function fetch($x)
{
    //instanciation d un object pdo ==> conextion a la base de donné 
    // en passe les 3 parametre dsn et userneme,password
    $db=new PDO('mysql:host=localhost;dbname=haithem','root','takiliya');
    
    //definition d une requette sql
    $sql="select username from users where username='$x[username]'";
    //envoi du requette qui retourne un object pdostatement 
    $result=$db->query($sql);
    // execution 
    $result->fetchAll();
    //retourne le nombre de colonne effectué par l execution de la requette
    return $result->rowCount();  
}
if(!empty($_POST))
{
    $res=fetch($_POST);//si le nombre de colonne = 0 alors username n existe pa ==>affiche valid
    if($res==0)
    {
        echo "valid username";
    }
    else //si nn affiche invalide 
    {
        echo "username exist";
    }
}
?>

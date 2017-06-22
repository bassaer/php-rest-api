<?php
require_once(dirname(__FILE__).'/../config.php');    
$host = $db['host'];
$user = $db['user'];
$pass = $db['pass'];

try {
    //$pdo = new PDO($host,$user,$pass);
    $pdo = new PDO('sqlite:db.sqlite3');
    // SQL実行時にもエラーの代わりに例外を投げるように設定
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //array(PDO:: ATTR_EMULATE_PREPARES => false)); 
    $sth = $pdo->prepare("SELECT * FROM articles");
    $sth->execute();
    $article = array();
    while($row = $sth->fetch(PDO::FETCH_ASSOC)) {
        $article[] = array (
            'id'=>$row['id'],
            'title'=>$row['title'],
            'url'=>$row['url'],
            'date'=>$row['date']
        );
    }
    header('Content-type: application/json');
    echo json_encode($article);
}catch (PDOException $e) { 
	echo "Error: ".$e->getMessage();
}
?>

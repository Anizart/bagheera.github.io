<?php

require_once( 'db.php' );

$username = $_POST[ 'username' ];
$email = $_POST[ 'email' ];
$number = $_POST[ 'number' ];
$wish = $_POST[ 'wish' ];

if ( empty( $username ) || empty( $email ) || empty( $number ) || empty( $wish ) ){

    echo "Заполните все поля...";
} else {

    $sql = "INSERT INTO `form` ( username, email, number, wish ) VALUES ( '$username', '$email', '$number', '$wish' )";
    
    if ( $conn -> query( $sql ) === TRUE ){

        echo "Ваши данные приняты!!!!!...";
    }
    else { echo "Ошибка: " . $conn -> error; }
}

?>
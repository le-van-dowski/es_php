<?php
    session_start();
    require_once "data_quiz.php";
    //cotrolla che action abbia inviato un post
    if(isset($_POST["action"])){
        if(isset($_POST["answer"])){
            $_SESSION["answers"][$_SESSION["current_question"]] = $_POST["answer"];
            $_SESSION["current_question"]++;
        }
    }
    header("Location: index.php");
    exit;

?>
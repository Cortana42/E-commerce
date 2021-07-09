<?php
    session_start();
    require_once 'config.php';

    if(isset($_POST['email']) && isset($_POST['password']))
    {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $check =$bdd->prepare('SELECT username, email,password FROM clients WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 1)
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $password = hash('sha256', $password);
                if($data ['password'] === $password)
                {
                    // On créer la session et on redirige sur landing.php
                    $_SESSION['user'] = $data['username'];
                    header('Location: landing.php');
                    die();
                }else{ header('Location: login.php?login_err=password'); die(); }
            }else{ header('Location: login.php?login_err=email'); die(); }
        }else{ header('Location: login.php?login_err=already'); die(); }
    }else{ header('Location: login.php'); die();} // si le formulaire est envoyé sans aucune données
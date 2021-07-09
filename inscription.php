<?php 
    require_once 'config.php';

    
    if(!empty($_POST['email']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_retype']))
    {

        $username= htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);

        $check = $bdd->prepare('SELECT username, email, password FROM clients WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        $email = strtolower($email); 
       
        if($row == 0){ 
            if(strlen($username) <= 100){ 
                if(strlen($email) <= 100){ 
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ 
                        if($password === $password_retype){ 
                            

                            $password = hash('sha256', $password);
                            
                            
                            $ip = $_SERVER['REMOTE_ADDR']; 

                            
                            $insert = $bdd->prepare('INSERT INTO clients(username, email, password, ip) VALUES(:username, :email, :password, :ip, )');
                            $insert->execute(array(
                                'username' => $username,
                                'email' => $email,
                                'password' => $password,
                                'ip' => $ip,
                            ));
                            
                            header('Location: signin.php?reg_err=success');
                            die();
                        }else{ header('Location: signin.php?reg_err=password'); die();}
                    }else{ header('Location: signin.php?reg_err=email'); die();}
                }else{ header('Location: signin.php?reg_err=email_length'); die();}
            }else{ header('Location: signin.php?reg_err=username_length'); die();}
        }else{ header('Location: signin.php?reg_err=already'); die();}
    }
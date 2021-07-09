<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Alaoui Store</title>
</head>
<header>
    <div class="navbar">
        <div class="logo">
            <img src="img/logo-alaoui.png" alt="">
        </div>
        <nav>
        <div class="nav_links">
            <ul id="MenuItems">
                <li><a href="index.html">Accueil</a></li>
                <li><a href="products.html">Produits</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="login.php">Connexion</a></li>
        
            </ul>
        </div>
    </nav>
    
        <img src="img/panier.png" width="30px" height="30px" style="cursor: pointer; margin-bottom: 10px;" >
        <img src="img/menu.png" class="bug-menu" onclick="menutoggle()">
    
    
</header>
<body>
    
<div class="Login_form">
                
        <div class="cat-5">
            <div class="form-container">
                <div class="form-btn">
                    <h4>Inscription</h4>
                    <hr id="Indicator">
                </div>
                <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 

                    }
                }
                ?>
                
                




                <form action="inscription.php" method="post">
                    <input type="text" name="username" placeholder="Username" required="required" autocomplete="off">
                    <input type="email" name="email" placeholder="Email" required="required" autocomplete="off">
                    <input type="password" name="password" placeholder="Mot de passe" required="required" autocomplete="off">
                    <input type="password" name="password_retype" placeholder="Retapez le mot de passe" required="required" autocomplete="off">
                    <button type="submit">S'inscrire</button>
                   
    
                </form>
                </div>
                
                
            </div>
    
        </div>
    
        
    
    




    
   



    <div class="footer">
        <div class="footerbar">
            <div class="row">
                <div class="footer_col_1">
                    <h3>Download our App</h3>
                    <p>Download App for Android and IOS mobile.</p>
                    <div class="app-logo">
                        <img src="img/appstore.png" alt="">
                        <img src="img/googleplay.png" alt="">
                    </div>
    
                </div>
                <div class="footer_col_2">
                    <img src="img/logo-alaoui.png" alt="">
                    <p>Notre but c'est de rendre accessible tous nos meilleurs produits à nos chers clients .</p>
                </div>
                <div class="footer_col_3">
                    <h3>Des Liens Utiles</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog</li>
                        <li>Policy</li>
                        <li>Rejoins notre Groupe</li>
                    </ul>
                </div> 
                    <div class="footer_col_4">
                        <h3>Suivez nous</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>Twitter</li>
                            <li>Instagram</li>
                            <li>Tik Tok</li>
                        </ul>
                    </div>    
                </div>
                <hr>
                <p class="copyright">Copyright 2021 - Mohammed Alaoui</p>          
            </div>
            
    
            
        </div>
        
    </div>
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight() = "0px";
    
        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px"){
    
                MenuItems.style.maxHeight = "200px"
            }
            else{
    
                MenuItems.style.maxHeight = "0px"
    
            }
        }
    </script>

   
    
</body>
</html>

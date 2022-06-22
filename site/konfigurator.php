<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/site/navigation.css">
    <link rel="stylesheet" href="/site/index.css">
    <link rel="stylesheet" href="/site/footer.css">
    <link rel="stylesheet" href="/site/section.css">
</head>
<body>
     <!--navigaton-->
     <div class="navbar">
         <img src="icon-logo-web.png">   <a href="/site/index.php" class="navbar-logo nav-list">
                            POLYGONPC
                        </a>
           <div class="navbar-container" >
              
            
                
           
            
               
                    <ul id="navs" class="nav-meni" >
                       

                    <!--meni-->
                    <li class="nav-list">
                        <a href="/site/index.php" class="nav-linki" >
                           DOMOV
                        </a>
                    </li>
                    
                    <li class="nav-list">
                        <a href="/site/komponente.php" class="nav-linki" >
                            KOMPONENTE
                        </a>
                    </li>

                    <li class="nav-list">
                        <a href="/site/konfigurator.php" class="nav-linki" >
                           3D KONFIGURATOR
                        </a>
                    </li>
                    
                    <li class="nav-list">
                        <a href="/site/onas.php "class="nav-linki">
                            O NAS
                        </a>

                    </li>

                    <li class="nav-list">
                            <a href="/site/login.php" class="nav-linki">REGISTRACIJA
                                <img src="/site/001-work-in-progress.png">
                                
                            </a>
                        </li>
                    
                        
                    
                    </ul>
                    
                </div>


            </div>
            <div class="container-light">
                          
                
                          <div class="container-slant-dark">
                            
                           
                                <div class="img">
                                    <div class="wrench-wrapp"><img src="/site/maintenance.png" class="wrench"></div>
                                    
                                    <div class="bar-border" >
                                    <div class="bar-progress"></div>
                                </div>
                                
                                </div>
                                
                            
                              
                          </div>
                          
                      </div>
     <!--footer-->
     <div>
            <div class="footer-container">
                                                                   
            
                                
                                <div class="card-container">
                                   <p>PAY WITH</p> 
                                    <div class="card-content-payment">
                                        
                                        
                                        
                                           <FaCcPaypal class="card-icon"/>
                                          
                                       
                                            <FaCcVisa class="card-icon"/>
                                       
                                       
                                            <FaCcMastercard class="card-icon"/>
                                      
                                        
                                            <SiAmericanexpress class="card-icon"/>
                                            
                                            <FaCcDinersClub class="card-icon"/>
                                        
                                            
                                       
                                        
                                        
                                    </div>
                                </div>
                                <!---karte--->
                                <div class="card-container-shipping">
                                    <p>DOSTAVA</p>
                                    <div class="card-content-payment-shipping">
                                    <img class="image" src="gls_logo.png"></img>
                                    <img class="image" src="wSXkD9YD_400x400.jpg"></img>
                                    </div>
                                </div>
                                <!---karte--->


                            <div class="container-socials">
                                <!---karte--->
                                <div class="card-container">
                                   <p>SOCIALNI MEDIJI</p> 
                                    <div class="card-content">
                                        
                                        
                                        <a class="social-links" href="https://www.facebook.com/polypcofficial/" target="_blank">
                                           <img src="002-facebook.png" class="social-icon"/>
                                        </a>   
                                        
                                        <a class="social-links" href="https://discord.gg/M9aK5VNbcG" target="_blank">
                                            <img src="006-discord.png"  class="social-icon">
                                        </a>
                                        <a class="social-links" href="https://twitter.com/PcPolygon" target="_blank">
                                            <img src="005-twitter.png" class="social-icon"/>
                                        </a>
                                        <a class="social-links" href="https://www.instagram.com/polygonpc/" target="_blank">
                                            <img src="003-instagram.png" class="social-icon"/>
                                        </a>
                                        
                                        
                                        
                                        
                                    </div>
                                </div>
                                <!---karte--->
                            </div>
                     
                        
                    
                        
                        <div class="services">
                        <p>PODPORA IN STORITVE</p>
                            <div class="support-services">
                            
                            <ul class="footer-ul"> 
                                 
                                <li class="footer-list">
                                    <a href="#about" class="footer-link"> O nas</a>
                                </li>

                                <li class="footer-list">
                                  <a href="#FAQ" class="footer-link"> FAQ</a>
                                </li>

                                <li class="footer-list">
                                   <a href="#support" class="footer-link"> Podpora strankam</a>
                                </li>
                            </ul>
                            <ul class="footer-ul-left">
                                <li class="footer-list">
                                   <a href="#Returns" class="footer-link"> Vracila</a>
                                </li>
                                <li class="footer-list">
                                   <a href="#components" class="footer-link"> Produkti</a>
                                </li>
                                <li class="footer-list">
                                   <a href="#Returns" class="footer-link"> Pogoji poslovanja</a>
                                </li>
                                </ul>
                                </div>
                        </div>
                       

                        
                            <div class="news-container">
                                
                            
                                <div class="newsletter">
                                    NOVICE
                                    <p>Prijavite se na novice za obvestila o <br></br>nagradnih igrah in novostih!</p>
                                    <?php
                                        if(isset($_POST['add'])){
                                        $servername="localhost";
                                        $username="root";
                                        $password="";
                                        $baza="baza";
                                        
                                        $conn= mysqli_connect($servername, $username, $password,$baza);
                                        
                                
                                       
                                        if(!$conn)
                                        {
                                            die("povezava ni uspela");
                                        }
                                        else
                                        
                                        ;
                                        /*vpis v db*/
                                        mysqli_query($conn,"INSERT INTO newsletter(email) values ('$_POST[mail]')");
                                        
                                      
                                       
                                        mysqli_close($conn);
                                    }
                                        
                                       
                                     
                                       
                                        

   
                                    ?>
                                    <form method="post" action="<?php $_PHP_SELF?>" class="input">
                                        <input   type="text "e-placeholder="vpisite mail" name="mail" class="mail"></input>
                                        <button name="add" type="submit">SUBSCRIBE</button>
                                    </form>
                                    
                                    
                                </div>
                                
                            </div>

              
                           
                    
                    
                
            </div>
                <div class="bottom-footer">
                <div class="comp-name">
                    <FaRegCopyright></FaRegCopyright> 2020 PolygonPC - All Rights Reserved.
                </div>
                <div class="links">
                    <FaChevronRight class="footer-icon-bot"></FaChevronRight>
                    <a class="link-footer" href="#privacy-policy">Privacy Policy</a>
                    <FaChevronRight class="footer-icon-bot"></FaChevronRight>
                    <a class="link-footer" href="#terms-of-sale">Terms of sale</a>
                    <FaChevronRight class="footer-icon-bot"></FaChevronRight>
                    <a class="link-footer" href="#EULA">EULA</a>
                    <FaChevronRight class="footer-icon-bot"></FaChevronRight>
                    <a class="link-footer" href="#cookie-policy">Cookie policy</a>
                </div>
            </div>     
        </div>
       
</body>
</html>

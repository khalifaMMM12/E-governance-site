<!DOCTYPE html>
<html lang="en"></html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://kit.fontawesome.com/79a49acde1.js" crossorigin="anonymous"></script>
        
        <!-- =====nav-bar CSS ===== -->
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/style2.css">
        
        <title>HON. Bago APC</title>
    </head>
    <body>   

            <!--==== NAV-BAR ====-->
            <header class="header">
                <a href="#" class="header__logo">HON.Bago</a>
                
                <i class='bx bx-menu header__toggle' id="header-toggle"></i>

                <nav class="nav" id="nav-menu">
                <div class="nav__content bd-grid">
                    <a href="index.php" class="nav__perfil">
                            <img class="nav__img" src="assets/img/apc-logo.png" alt="apc-logo">
                        
                        <div>
                            <span class="nav__name">HON.Umar Muhammad</span>
                            <span class="nav__name">Bago</span>
                        </div>
                    </a>
    
                    <div class="nav__menu">
                        <ul class="nav__list">
                            <li class="nav__item"><a href="index.php" class="nav__link active">Home <i class="fa-sharp fa-solid fa-house"></i></a></li>
    
                            <li class="nav__item dropdown">
                                <a href="#" class="nav__link dropdown__link">Biography <i class="fa-solid fa-user"></i></a>
                            </li>
                          
                            <li class="nav__item dropdown">
                                <a href="#" class="nav__link">Complains / Suggestions<i class='bx bx-chevron-down dropdown__icon'></i></a>


                                <ul class="dropdown__menu">
                                    <li class="dropdown__item"><a href="Anonymous.php" class="nav__link">Anonymous</a></li>
                                    <li class="dropdown__item"><a href="Identified.php" class="nav__link">Identified</a></li>
                                </ul>
                            </li>

                            <li class="nav__item dropdown">
                                <a href="#" class="nav__link dropdown__link">Blog  <i class="fa-brands fa-blogger-b"></i></a>                                    
                            </li>

                            <li class="nav__item">
                                <a href="#" id="admin_log" class="nav__link">Admin <i class="fa-solid fa-lock"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!--==== NAV-BAR END ====-->


        <!--===== home page content ======-->
     <main class="container">    
            <!-- section 1 -->
          <section class="hero">
              <div class="content">
                <div class="text">
                    <center><h1 class="hero-title">Bago,s E-Governance Initiative</h1>
                    <p class="hero-text"> Below you may click to drop a <i>Suggestion or a Complain</i> to help in improving Bago's government and the STATE,
                    you can drop an Anonymous or Identified by clicking the button.</p>
                <div class="hero-btn">
                    <a href="Anonymous.php" class="btn">Anonymous</a> <a href="Identified.php" class="btn">Identified</a></center>
                </div>
                </div>       
               </div>
          </section>

            <!-- CARDS -->
            <div class="box">
                <div class="box-img img-1"></div>
                <h2>Why bago is the preferred choice</h2>
                <p>Why Bago is the preferred choice. He is a grassroot politician, Bago has never distance himself from his people, no disconnect of any kind.
                He is accessible, his doors are open, he operates an open door policy, this has endear him to help the masses. He is a.... </p>
            <a class="button" href="#">Read More</a>            
            </div>

            <div class="box">
                <div class="box-img img-2 "></div>
                <h2>HON. Bago Awards Scholarship </h2>
                <p>TWENTY (20) STUDENTS OF NIGER STATE COLLEGE OF EDUCATION (COE) TO BENEFIT 50% SCHOLARSHIP AND MANY MORE.<br> 
                    Hon. Mohammad Bago has again awarded Twenty students (20) from the institution...  </p>
                <a class="button" href="#">Read More</a>
            </div>

            <div class="box">
                <div class="box-img img-3"></div>
                <h2>NURTW Endorsed Bago</h2>
                <p>NATIONAL UNION OF ROAD TRANSPORT WORKERS (NURTW) NIGER STATE ENDORSED HON. MOHAMMAD BAGO 8/12/2018.<br>
                The national union of road transport workers is an independent nigerian trade union that serves the interest of transport workers in the road transport sectors,.....</p>
                <a class="button" href="#">Read More</a> 
            </div>
        </div>
        <!-- CARDS END -->

        <!-- footer -->
       <footer class="section main-footer">
            <div class="footer-container">
                <div class="topics">
                    <a href="index.php" class="nav__img"> <img src="assets/img/apc-logo.png" alt="apc-logo"></a>
        
                    <div class="topic">
                        <h3 class="topic-header">MENU</h3>
                        <a class="links" href="index.php">Home</a>
                        <a class="links" href="#">Biography</a>
                        <a class="links" href="Identified.php">Suggestions</a>
                        <a class="links" href="Identified.php">Complains</a>
                        <a class="links" href="#">Blog</a>
                    </div>

                
                    <div class="topic">
                        <h3 class="topic-header">HELP</h3>
                        <a class="links" href="#">Terms of Use</a>
                        <a class="links" href="#">FAQ</a>
                        <a class="links" href="#">Contact</a>
                    </div>


                    <div class="topic">
                        <h3 class="topic-header">SOCIAL MEDIA</h3>
                        <a class="links" href="#">Instagram</a>
                        <a class="links" href="#">Twitter</a>
                        <a class="links" href="#">Facebook</a>
                    </div>

                </div>
            </div>
       </footer>
       <!-- footer end -->
    </main>
    
    <!--==== admin modal popuplogin ====-->
    <div class="bg-popup" id="bg_popup">
        <div class="popup-content">
    
        <div class="close" id="close">+</div>
            <a class="popup-img"> <img src="assets/img/apc-logo.png" alt="apc-logo"></a>

            <form action="admin_log.php" method="post">
                <h2>ADMIN LOGIN</h2>
                <?php if (isset($_GET['error'])) : ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                    <script>
                        document.addEventListener('DOMContentLoaded', () => {
                            document.getElementById('admin_log').click();
                        })
                    </script>
                <?php endif; ?>

                <label class="label">Admin ID</label>
                <input type="text" name="identity" placeholder="ID">

                <label class="label">password</label>
                <input type="text" name="password" placeholder="password">

                <button class="popup-btn" type="submit">Login</button>
            </form>
        </div>
    </div>   
   <script src="assets/js/main.js"></script>
    </body>
</html>
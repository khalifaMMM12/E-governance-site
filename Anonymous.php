<?php
include_once 'db_admin.php';
session_start();


if (isset($_POST['submitComplain'])) {
    $lga = $_POST['local-government'];
    $min = $_POST['ministry'];
    $text = $_POST['text'];
    $img = $_POST['images'];

    // upload images

    $datetime = date('y-m-d h:i:s');

    $anonyQuery = "INSERT INTO `anonymous`(`local government`, `ministry`, `complain`, `date`, `images`) VALUES (?, ?, ?, ?, ?)";

    $anonyStmt = mysqli_prepare($conn, $anonyQuery);

    mysqli_stmt_bind_param($anonyStmt, "sssss", $lga, $min, $text, $datetime, $img);

    mysqli_stmt_execute($anonyStmt);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/79a49acde1.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/style2.css">
    
    <title>Anonymous Complains</title>
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
        <div class="container">
            <!--===== FORM ====-->
        <div class="complain-box">
            <h2>Anonymous Complain / Suggestions</h2>
            <p>fill the  Complains or Suggestions on improving the <b>NIGER STATE</b> Government</p>
            <form action="#" method="POST" enctype="multipart/formdata">
                <div class="form-group">
                    <label for="local Government" required></label>
                    <select name="local-government" type="text" id="L-government">
                        <option value="Country">Select Local Government</option>
                        <option value="Minna">Minna</option>
                        <option value="Suleja">Suleja</option>
                        <option value="lapai">lapai</option>
                        <option value="Bida">Bida</option>
                        <option value="Tafa">Tafa</option>
                        <option value="Kontagora">Kontagora</option>
                        <option value="Chanchaga">Chanchaga</option>
                    </select>

                    <label for="Ministry" required></label>
                    <select name="ministry" type="text" id="Ministry">
                        <option value="Ministry">Select Ministry</option>
                        <option value="Health">Health</option>
                        <option value="Education">Education</option>
                        <option value="Transport">Transport</option>
                        <option value="Environment">Environment</option>
                        <option value="Housing">Housing</option>
                        <option value="Agriculture">Agriculture</option>
                        <option value="Youth-Development">Youth-Development</option>
                    </select>
                </div>
                    <textarea name="text" type="text" rows="5" placeholder="Type detailed complain with specific point" required></textarea>

                     <!-- image uplaod -->

                     <div class="img-upload">
                        <h3>Click to upload files/images for detailed information<i>Not Compulsary</i></h3>
                        <label for="files"></label>
                        <input type="file" name="images" id="images" multiple="multiple" accept="image/jpeg, image/png, image/jpg">

                    </div>

                    <button class="btn-1" type="submit" name="submitComplain">Submit Complain</button>
                    <a class="sub_link" href="Identified.php">identified Complain</a>
            </form>
        </div>
        
        
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
    </div>

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

    <!--==== FORM-END ====-->
    
    <!-- ==== FORM SUBMIT MODAL START ====
            <div class="form-submit">
                <div class="fs-content">
                    
                </div>
            </div> -->


    <!--=====JAVA SCRIPT =====-->
    <script src="assets/js/main.js"></script>
</body>
</html>
<?php
include_once 'db_admin.php';
session_start();

if (!isset($_SESSION['id']) && !isset($_SESSION['user_id'])) {
    header("location: index.php");
}


$queryAnony  = "SELECT * FROM `anonymous`";

$AnonyStmt = mysqli_prepare($conn, $queryAnony);

mysqli_stmt_execute($AnonyStmt);

$results = mysqli_stmt_get_result($AnonyStmt);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://kit.fontawesome.com/79a49acde1.js" crossorigin="anonymous"></script>
        
        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/style2.css">
        <title>ADMIN PANEL</title>
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
                            <span class="nav__name">HELLO, <?php echo $_SESSION['name']; ?></span>
                        </div>
                    </a>
                            <div class="sign__out">
                                <a href="signout.php" class="sign_out"> <i class="fa-solid fa-right-from-bracket"></i> SIGN OUT</a>
                            </div>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!--==== NAV-BAR END ====-->

        <main class="container">
         <!-- section 1 -->
         <section class="hero">
              <div class="content">
                <div class="text">
                    <center>
                    <h1 class="hero-title">Bago,s E-Governance Initiative</h1>
                    <p class="hero-text"> Click the type of complain you would like to view </p>
                <div class="hero-btn">
                    <a href="anonymous-admin.php" class="btn">Anonymous</a> <a href="identify-admin.php" class="btn">Identified</a>
                    </center>
                </div>
                </div>       
               </div>
          </section>


<!--feedback start-->
        <table >
          <thead>
          <tr >
                <th>S/N</th>
                <th>LOCALGOVERNMENT</th>
                <th>Ministry</th>
                <th>Complains</th>
                <th>Image</th>
                <th>date/time</th>
            </tr>
          </thead>

          <tbody>
            <?php
$counter = 1;
while($result = mysqli_fetch_assoc($results)):

?>
<tr>
            <td><?php echo $counter++ ?></td>
            <td><?php echo $result['local government'] ?></td>
            <td><?php echo $result['ministry'] ?></td>
            <td><?php echo $result['complain'] ?></td>
            <td><img src="<?php echo $result['images'] ?>" alt="images" width="500px" height="500px"></td>
            <td><?php echo $result['date'] ?></td>
</tr>
<?php endwhile; ?>
          </tbody>

        </table>
        <!--Feedback reading portion closed-->

        
        <div class="sign__out">
            <a href="signout.php" class="sign_out"> <i class="fa-solid fa-right-from-bracket"></i> SIGN OUT</a>
        </div>
        <img src="../" alt="">

</main>
        

   
        <!--===== MAIN JS =====-->
    <script src="./assets/js/main.js"></script>
</body>
</html>

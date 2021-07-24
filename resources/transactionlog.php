<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Transaction-log</title>
  <link rel="icon" type="image/png" href="https://www.favicon-generator.org/download/2014-12-26/f49ccb7d53e169b2d03a1cccaef04b81.ico"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="css/style2.css" rel="stylesheet">
</head>

<body>
    <section>
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="logo">
        <h1><a href="index.php">TB-Bank   <i class="fa fa-bank" style="color:#fff"></i></a></h1>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="index.php">Home</a></li>
          <li><a class="nav-link" href="transact.php">Transact</a></li>
          <li><a class="nav-link " href="transactionlog.php">Transaction-log</a></li>
          <li><a class="nav-link " href="accounts.php">Accounts</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
</section>
<br><br><br><br>
<main id="main">
	<div class="container">
        <h2 class="text-center pt-4" style="color : black;">Transaction log</h2>      
        <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color : black;">
            <tr>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include 'config.php';
            $sql ="select * from transaction";
            $query =mysqli_query($conn, $sql);
            while($rows = mysqli_fetch_assoc($query))
            {
        ?>
            <tr style="color : black;">
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
        <?php
            }
        ?>
        </tbody>
    </table>
    </div>
</div>
<br>
  <br>
  <br>
  <br>
</main>
<br><br><br><br><br><br><br><br><br>
  <footer id="footer">
    <div class="container">
      <h3>TB-Bank</h3>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; All rights <strong><span>Reserved.</span></strong>
      </div>
      <div class="credits">
        Designed by Harsh</a>
      </div>
    </div>
  </footer>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" ></script>
  <script src="js/main.js"></script>
</body>
</html>

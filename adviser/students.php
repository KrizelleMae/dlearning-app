<?php 

$page = "admission";
$stat = "admission";

include './auth.php';
include '../includes/db_connection.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adviser | For Admission</title>

    <?php include '../includes/links.php'; ?>

    <link rel="stylesheet" href="../css/all-styles.css" />
    <link rel="stylesheet" href="../css/dashboard.css" />
    <link rel="stylesheet" href="../css/navbar.css" />

    <script src="../tailwind/tailwind-cdn.js"></script>
    
    
  </head>
  <body class="bg-gray-100 h-screen">
    <?php include './components/navbar.php'; ?>
    <div class="container mx-auto mt-10">
      <div class="flex items-center mb-13">
        <div class="text-3xl text-gray-700 font-semibold flex items-center">
          ADMISSION
          <ul class="uk-breadcrumb">
            <li><a href=""></a></li>
            <li><span class="font-light">List of Students for Admission</span></li>
          </ul>
        </div>
      </div>

      <div class="mt-5">
        <?php include './components/tbl-admission.php'; ?>
      </div>

     
    </div>
  </body>
</html>

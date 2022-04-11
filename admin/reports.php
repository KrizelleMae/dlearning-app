<?php 

$page = "reports";
include './auth.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | Reports</title>

    <?php include '../includes/links.php'; ?>

    <link rel="stylesheet" href="../css/all-styles.css" />
    <link rel="stylesheet" href="../css/dashboard.css" />
    <link rel="stylesheet" href="../css/navbar.css" />

    <script src="../tailwind/tailwind-cdn.js"></script>
  </head>
  <body class="bg-gray-100 h-screen">
    <?php include './components/navbar.php'; ?>
    <div class="content mt-10">
      <div class="flex items-center mb-13">
        <div class="text-3xl text-gray-700 font-semibold flex items-center">
          REPORTS
          <ul class="uk-breadcrumb">
            <li><a href=""></a></li>
            <li><span class="font-light">View and download Reports</span></li>
          </ul>
        </div>
      </div>

      <div class="shadow-lg p-10 w-1/3 bg-white rounded mt-10">
        <form action="./generate_report.php" method="POST" class="">
          <!-- <div class="">
            <label class="block mb-2 text-sm font-medium text-gray-700"
              >Start date</label
            >
            <input
              type="month"
              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2 px-3 mr-20"
              name="date1"
              required
            />
          </div>

          <div class="mt-7">
            <label class="block mb-2 text-sm font-medium text-gray-700"
              >End date</label
            >
            <input
              type="month"
              class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2 px-3 mr-20"
              name="date2"
              required
            />
          </div> -->

          <div class="mt-7">
            <label class="block mb-2 text-sm font-medium text-gray-700"
              >Select program</label
            >
            <select
              class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 w-full focus:border-blue-500 p-2.5"
              name="program"
              required
            >
              <option value="All">All</option>
              <option value="Nursing">Nursing</option>
              <option value="Education">Education</option>
            </select>
          </div>

          <!-- RIGHT0 -->

          <div class="mt-7"></div>
          <button
            type="submit"
            class="mt-6 bg-green-600 text-white px-8 py-2 rounded hover:bg-green-700 hover:cursor-pointer"
          >
            Generate report <i class="ml-1 fa fa-file"></i>
          </button>

          <a
            href="#"
            class="mt-6 hover:no-underline ml-3 bg-sky-600 text-white hover:text-white px-8 py-2 rounded hover:bg-sky-700 hover:cursor-pointer"
          >
            Print <i class="ml-1 fa fa-print"></i>
          </a>
        </form>
      </div>
    </div>
  </body>
</html>

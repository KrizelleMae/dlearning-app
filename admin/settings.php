<?php 

$stat = "settings";
$page = "settings";
include './auth.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | Settings</title>

    <?php include '../includes/links.php'; ?>

    <link rel="stylesheet" href="../css/all-styles.css" />
    <link rel="stylesheet" href="../css/dashboard.css" />
    <link rel="stylesheet" href="../css/navbar.css" />
    <link rel="stylesheet" href="../css/settings.css" />

    <script src="../tailwind/tailwind-cdn.js"></script>
  </head>
  <body class="bg-gray-100 h-screen">
     <?php if(isset($_GET['return'])) : ?>
    <div
      class="flash-data"
      data-flashdata="<?php echo $_GET['return']; ?>"
    ></div>
    <?php endif; ?>
    <?php include './components/navbar.php'; ?>
    <div class="content mt-10">
      <div class="flex items-center mb-13">
        <div class="text-3xl text-gray-700 font-semibold flex items-center">
          SETTINGS
          <ul class="uk-breadcrumb">
            <li><a href=""></a></li>
            <li><span class="font-light">Manage account</span></li>
          </ul>
        </div>
      </div>

      <div class="my-10 grid">
        <div class="uk-child-width-expand@s" uk-grid>
          <div class="uk-width-1-4@m">
            <!-- SIDEBAR HERE -->
            <?php include './components/sidebar-settings.php';?>
          </div>
          <div class="uk-width-expand p-10 bg-white ml-5">
            <!-- CONTENT HERE -->
            <div class="text-lg mb-4">
              CHANGE PASSWORD <i class="ml-2 fa fa-lock"></i>
            </div>
            <hr />

            <div class="mt-16">
              <form action="" class="flex items-center justify-between">
                <div class="mb-7">
                  <label class="block mb-2 text-sm font-medium text-gray-700"
                    >Current password</label
                  >
                  <input
                    type="text"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2 px-3 mr-20"
                    name="email"
                    placeholder="johndoe@gmail.com"
                    required
                  />
                </div>

                <div class="mb-7">
                  <label class="block mb-2 text-sm font-medium text-gray-700"
                    >New password</label
                  >
                  <input
                    type="text"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2 px-3 mr-20"
                    name="password"
                    required
                  />
                </div>

                <button
                  type="submit"
                  class="bg-green-600 text-white px-8 py-2 rounded-lg hover:bg-green-700 hover:cursor-pointer"
                >
                  Change password
                </button>
              </form>
            </div>

            <div class="float-right italic mt-16 px-5 py-2 bg-sky-100">
              <?php
              date_default_timezone_set('Asia/Manila');
                echo "The time is: " . date("h:i a");
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="../sweetalert2/jquery-3.6.0.min.js"></script>
    <script src="../sweetalert2/sweetalert2.all.min.js"></script>
    <script>

      <?php
        if($_GET['return'] == 'warning'){
          $text = "Email existing. Try again!";
        }else if($_GET['return'] == 'success'){
          $text = "Account has been created";
        } else {
          $text = "Password incorrect. Please try again!";
        }
      ?>
        const flashdata = $('.flash-data').data('flashdata');

         if (flashdata) {
            Swal.fire(
               '<?php echo $_GET['return']; ?>',
               '<?php echo $text; ?>',
               '<?php echo $_GET['return']; ?>'
            ).then(function () {
               window.location = './users.php';
            });
         }
    </script>
  </body>
</html>

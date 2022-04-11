<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="./css/login.css" />

      <link rel="stylesheet" href="./css/all-styles.css" />
      <link rel="stylesheet" href="./includes/links.php" />
      <link rel="icon" type="image/png" href="./favicon.ico"/>

      <script src="./tailwind/tailwind-cdn.js"></script>

      <title>WMSU Distance Learning</title>
   </head>  
   <body>
       <?php if(isset($_GET['message'])) : ?>   
      <div
         class="flash-data"
         data-flashdata="<?php echo $_GET['message']; ?>"
      ></div>
      <?php endif; ?>
      <section>
         <!-- left box code start -->

         <div class="imgbx">
            <img src="images/lbg1.jpg" />
         </div>

         <!-- left box code end -->

         <!-- right box code start -->
         <div class="contentbox">
            <div class="form">
               <img src="./images/logo.png" alt="" />
               <p
                  class="text-xl text-center mb-10 uppercase text-gray-600 font-semibold"
               >
                  Distance Learning Login
               </p>
               <form action="./server/login.php" method="post" name="login">
                  <div class="inputbox">
                     <input
                        type="email"
                        name="email"
                        placeholder="Email"
                        required
                        class="bg-gray-50 border border-gray-200 text-gray-500 rounded-lg block w-full py-2.5 px-4"
                     />
                  </div>

                  <div class="inputbox mb-0">
                     <input
                        type="password"
                        name="password"
                        placeholder="Password"
                        required
                        class="bg-gray-50 border border-gray-200 text-gray-500 rounded-lg block w-full py-2.5 px-4"
                     />
                  </div>

                  <div class="inputbox">
                     <input
                        type="submit"
                        class="bg-sky-200 p-3 login-btn mt-5 w-100 rounded-full mx-16"
                        value="Sign in"
                     />
                  </div>
               </form>

               <div class="text-center mt-10 ml-7">
                  <div class="inputbox">
                     <div class="text-gray-600">
                        <a href="./signup.html" class="text-gray-700 text-sm">
                           Forgot password?</a
                        >
                     </div>
                  </div>
                  <div class="inputbox">
                     <div class="text-sm mt-5">
                        Don't have an account? <br>
                        <a href="./signup.php" class=" text-sm text-sky-800 font-bold">
                        Sign up here</a
                        >
                        <br>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- right box code end -->
      </section>

     
    <script src="./sweetalert2/jquery-3.6.0.min.js"></script>
    <script src="./sweetalert2/sweetalert2.all.min.js"></script>
      <script>
         const flashdata = $('.flash-data').data('flashdata');

         if (flashdata) {
            Swal.fire(
               'Invalid email or password!',
               'Kindly input a valid email and password.',
               'error'
            ).then(function () {
               window.location = './index.php';
            });
         }
      </script>

      <script src="./js/signup.js"></script>
   </body>
</html>

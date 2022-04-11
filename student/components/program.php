<?php

    include './auth.php';
    include '../includes/db_connection.php';
    $user_id = $_SESSION['id'];
    
    $sql = "select * from user_details where user_id = $user_id; ";
    $result = mysqli_query($con, $sql);

    while($row = mysqli_fetch_assoc($result)){

?>
<div class="container mx-auto">
  <div class="w-11/12 lg:w-2/4 mx-auto py-10">
    <div class="bg-gray-200 h-1 flex items-center justify-between">
      <div class="w-1/3 flex justify-start h-1 items-center relative">
        <div class="absolute left-0 -mr-2">
          <div class="inherit bg-white shadow-lg px-3 py-2 rounded mt-16">
            <svg
              class="absolute top-0 -mt-1 w-full right-0 left-0"
              width="30px"
              height="10px"
              viewBox="0 0 16 8"
              version="1.1"
              xmlns="http://www.w3.org/2000/svg"
            ></svg>
            <p
              tabindex="0"
              class="focus:outline-none text-green-700 text-xs font-bold"
            >
              Step 1: Choose program
            </p>
          </div>
        </div>
        <!-- THREE -->
        <div
          class="bg-white h-6 w-6 rounded-full shadow flex items-center justify-center -mr-3 relative"
        >
          <div class="h-3 w-3 bg-green-600 rounded-full"></div>
        </div>
      </div>

      <div class="w-1/3 flex justify-between">
        <div class="bg-white h-6 w-6 rounded-full shadow"></div>
      </div>

      <div class="w-1/6 flex justify-between">
        <div class="bg-white h-6 w-6 rounded-full shadow"></div>
      </div>

      <div class="w-1/5 flex justify-end">
        <div class="bg-white h-6 w-6 rounded-full shadow"></div>
      </div>
    </div>
  </div>
</div>

<div class="flex items-center justify-center pt-10">
  <div
    class="shadow text-center shadow shadow-gray-300 w-1/2.5 rounded-lg p-10"
  >
    <img src="../images/program.png" alt="" class="mx-auto logo" />
    <br />
    <div class="text-lg font-semibold text-gray-800 mb-2">
      Hi
      <?php echo $row['first_name']. " " . $row['last_name'];; ?>,
    </div>
    <div class="text-sm text-gray-600">
      Kindly choose the program you want to apply for <br />
    </div>

    <form action="../server/select-program.php" method="post" class="mt-7">
      <select
        class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 w-full focus:border-blue-500 p-2.5"
        name="program"
        required
      >
        <option value="">Please select</option>
        <option value="Nursing">Nursing</option>
        <option value="Education">Education</option>
      </select>

      <input
        type="submit"
        value="SUBMIT"
        class="bg-green-600 text-white px-10 py-2 mt-10 mb-5 rounded-full hover:bg-green-700 hover:px-16 hover:cursor-pointer"
      />
    </form>

    <div class="text-xs text-gray-600">
      For more information, visit our
      <a href="#" class="text-sky-800 font-bold">page</a>.

      <br />
      <a href="#" class="font-bold pt-3 hover:text-red-400"
        >Logout <i class="fa fa-sign-out ml-1"></i
      ></a>
    </div>
  </div>
</div>

<?php 
 }
?>

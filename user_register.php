<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Create Account - Kitab</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="/dist/main.css" rel="stylesheet">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <!-- HTML -->

</head>

<body class="bg-gray-50">

  <section class="py-10">

    <div class="text-center mx-auto pt-5">
      <h1 class="text-5xl font-bold text-gray-900 mx-auto">Kitab</h1>
      <p class="text-lg font-medium mx-auto">
        Create new account at our Shop
      </p>
    </div>


    <div class="container flex items-center justify-center px-6 mx-auto">

      <form action="/includes/ur.php" method="POST" class="w-full max-w-md" autocomplete="off">

        <div class="relative flex items-center mt-8 mb-4">
          <input type="text" name="name" class="block w-full py-3 text-gray-800 bg-white border border-gray-400 rounded-lg px-5 focus:border-blue-400 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Name" required>
        </div>

        <div class="relative flex items-center mt-8 mb-4">
          <input type="text" name="mobile" inputmode="numeric" class="block w-full py-3 text-gray-800 bg-white border border-gray-400 rounded-lg px-5 focus:border-blue-400 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Mobile number" required>
        </div>

        <div class="relative flex items-center mt-8 mb-4">
          <input type="email" name="email" class="block w-full py-3 text-gray-800 bg-white border border-gray-400 rounded-lg px-5 focus:border-blue-400 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Email" required>
        </div>

        <div class="relative flex items-center mt-8 mb-4">
          <input type="text" name="address" class="block w-full py-3 text-gray-800 bg-white border border-gray-400 rounded-lg px-5 focus:border-blue-400 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Address" required>
        </div>

        <div class="relative flex items-center mt-8 mb-4">
          <input type="text" name="pin" inputmode="numeric" class="block w-full py-3 text-gray-800 bg-white border border-gray-400 rounded-lg px-5 focus:border-blue-400 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Area pin" required>
        </div>


        <div class="relative flex items-center mt-8 mb-4">
          <input type="password" id="password" name="password" class="block w-full py-3 text-gray-800 bg-white border border-gray-400 rounded-lg px-5 focus:border-blue-400 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="New Password" required>
        </div>

        <div class="mt-6">
          <input type="submit" class="w-full px-6 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-800 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50" value="Create account" />


        <div class="flex items-center justify-between mt-4">
          <span class="w-2/5 border-b lg:w-1/5"></span>

          <a href="#" class="text-xs text-center text-gray-500 lowercase  hover:underline">
            or signup with
          </a>

          <span class="w-2/5 border-b lg:w-1/5"></span>
        </div>

        <a href="#" class="flex items-center justify-center px-6 py-3 mt-4 text-gray-600 transition-colors duration-300 transform border rounded-lg hover:bg-gray-50 dark:hover:bg-gray-600">
          <svg class="w-6 h-6 mx-2" viewBox="0 0 40 40">
            <path d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.045 27.2142 24.3525 30 20 30C14.4775 30 10 25.5225 10 20C10 14.4775 14.4775 9.99999 20 9.99999C22.5492 9.99999 24.8683 10.9617 26.6342 12.5325L31.3483 7.81833C28.3717 5.04416 24.39 3.33333 20 3.33333C10.7958 3.33333 3.33335 10.7958 3.33335 20C3.33335 29.2042 10.7958 36.6667 20 36.6667C29.2042 36.6667 36.6667 29.2042 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z" fill="#FFC107" />
            <path d="M5.25497 12.2425L10.7308 16.2583C12.2125 12.59 15.8008 9.99999 20 9.99999C22.5491 9.99999 24.8683 10.9617 26.6341 12.5325L31.3483 7.81833C28.3716 5.04416 24.39 3.33333 20 3.33333C13.5983 3.33333 8.04663 6.94749 5.25497 12.2425Z" fill="#FF3D00" />
            <path d="M20 36.6667C24.305 36.6667 28.2167 35.0192 31.1742 32.34L26.0159 27.975C24.3425 29.2425 22.2625 30 20 30C15.665 30 11.9842 27.2359 10.5975 23.3784L5.16254 27.5659C7.92087 32.9634 13.5225 36.6667 20 36.6667Z" fill="#4CAF50" />
            <path d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.7592 25.1975 27.56 26.805 26.0133 27.9758C26.0142 27.975 26.015 27.975 26.0158 27.9742L31.1742 32.3392C30.8092 32.6708 36.6667 28.3333 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z" fill="#1976D2" />
          </svg>

          <span class="mx-2">Sign up with Google</span>
        </a>

        <div class="mt-6 text-center ">
          <a href="/user_login.php" class="text-sm text-blue-500 hover:underline">
            Already have an account?
          </a>
        </div>
      </div>
    </form>
  </div>
</section>

</body>
</html>
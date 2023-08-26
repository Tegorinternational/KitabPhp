<section class="bg-gray-100">
  <div class="text-center mx-auto py-10">
    <h1 class="text-2xl font-bold text-gray-900 mx-auto">Upload Products</h1>
    <p class="text-lg font-medium mx-auto">
      Here you can upload products
    </p>
  </div>
  <div class="container flex items-center justify-center px-6 mx-auto">

    <form action="up.php" method="POST" enctype="multipart/form-data" class="w-full max-w-md">
      
      
      <div class="relative flex items-center mt-8 mb-4">
        <input type="text" name="category" class="block w-full py-3 text-gray-800 bg-white border border-gray-400 rounded-lg px-5 focus:border-blue-400 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Category" required>
      </div>

      <div class="relative flex items-center mt-8 mb-4">
        <input type="text" name="name" class="block w-full py-3 text-gray-800 bg-white border border-gray-400 rounded-lg px-5 focus:border-blue-400 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Product Name" required>
      </div>

      <div class="relative flex items-center mt-8 mb-4">
        <input type="text" name="price" inputmode="numeric" class="block w-full py-3 text-gray-800 bg-white border border-gray-400 rounded-lg px-5 focus:border-blue-400 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Price in ₹" required>
      </div>

      <div class="relative flex items-center mt-8 mb-4">
        <input type="file" name="file" accept=".jpg, .png" class="block w-full py-3 text-gray-800 bg-white border border-gray-400 rounded-lg px-5 focus:border-blue-400 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" required>
        
      </div>

      <div class="relative flex items-center mt-8 mb-4">
        <textarea name="description" class="block w-full py-3 text-gray-800 bg-white border border-gray-400 rounded-lg px-5 focus:border-blue-400 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40 h-32" placeholder="Description" required></textarea>
      </div>

      <div class="mt-6">
        <input type="submit" class="w-full px-6 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-800 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50" value="Upload Product" />
    </div>
  </form>
</div>
</section>
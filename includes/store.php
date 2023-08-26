<?php
require('db.php');
$sql = "SELECT * FROM `products` $result " ;
$runPQ=mysqli_query($db,$sql);
$post=mysqli_fetch_assoc($runPQ);

if(isset($_GET['page'])){
   $page=$_GET['page'];
 };
?>
<!-- store -->
<section class="text-gray-600 body-font py-24" id="shop">
  
  <!-- search -->
  <section class="relative w-full max-w-md px-5 py-4 mx-auto rounded-md">
    <div class="flex flex-col text-center w-full mb-8">
      <h1 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl leading-6 mb-2">Let's find <br> awesome <span class="text-blue-500">Stationary</span>
      </h1>
      <p class="text-sm">here you can find our awesome books covers pen practical and more...</p>
    </div>
    <div class="flex flex-wrap w-full justify-between">
      <div class="relative w-4/5">
      <span class="absolute inset-y-0 left-0 flex items-center pl-3">
        <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
          <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
      </span>
      <input type="search" class="w-full border border-gray-300 rounded-md py-3 pl-10 pr-3 text-gray-700  focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40" placeholder="Search" />
    </div>
    <button disabled class="right-0 flex items-center px-4 bg-blue-500 rounded-md ">
        <svg class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="none">
          <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
    </button>
    </div>
  </section>
  
  <div class="container px-5 pt-10 mx-auto ">
    <div class="flex flex-wrap -m-4" id="cards">
      
      <!-- product cards-->
 <?php
    $runPQ=mysqli_query($db,$sql);
    while ($post=mysqli_fetch_assoc($runPQ)){
      $imageData = $post['image'];
      $imageDataUri = "data:image/jpeg;base64," .base64_encode($imageData);
 ?>
  <div class="lg:w-1/4 md:w-1/2 p-4 w-1/2">
        <h2 class="relative -mb-6 z-10 w-full flex flex-row">
          <span class="bg-gradient-to-r from-blue-500 text-xs text-white py-1 pl-2 pr-5 rounded-tl-md rounded-tr-sm"><?=$post['category']?></span>
        </h2>
        <div class="bg-gradient-to-tr from-cyan-100 to-gray-300 rounded-md">
          <a class="block relative h-40 rounded overflow-hidden px-2 pt-2">
            <img alt="<?=$post['name']?>" class="object-cover object-center w-full h-full block rounded" src="<?=$imageDataUri?>">
          </a>
          <div class="flex flex-wrap px-2 py-2">
            <h2 class="text-gray-900 title-font text-sm font-medium w-full tracking-tight"><?=$post['name']?></h2>
            <p class="my-auto mr-auto block text-base">₹ <?=$post['price']?>/-</p>
            <button class="mt-1 px-4 py-1 text-sm text-gray-50 rounded bg-gradient-to-bl from-blue-500 to-cyan-500 ml-auto" onclick="window.location.href='product_view.php?id=<?=$post['id']?>';">BUY</button>
          </div>
        </div>
      </div>
      <?php
    }
  ?>
      
    </div>
  </div>
  
  <div class="mx-auto text-center mt-14 text-blue-500 px-6">
    <a class="uppercase text-xl font-medium underline" href="/shop.php" target="_blank">MORE PRODUCTS</a>
  </div>
  
</section>
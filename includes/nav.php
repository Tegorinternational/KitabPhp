<nav x-data="{ isOpen: false }" class="relative-white shadow ">
    <div class="container px-6 py-4 mx-auto">
      <div class="lg:flex lg:items-center lg:justify-between">
        <div class="flex items-center justify-between">
          <a href="#" class="flex flex-wrap">
            <img class="w-10 rounded-full my-auto hidden" src="https://img.freepik.com/free-vector/flat-design-stationery-store-logo-template_23-2149758692.jpg?size=338&ext=jpg&ga=GA1.2.2119383441.1681220342&semt=ais" alt="">
            <span class="text-3xl font-bold my-auto"><?=$pageTitle?></span>
          </a>
  
          <!-- Mobile menu button -->
          <div class="flex lg:hidden">
            <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600" aria-label="toggle menu">
              <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16 M4 " />
              </svg>
  
              <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
  
        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:bg-transparent lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center bg-gray-50">
          <div class="flex flex-col -mx-6 lg:flex-row lg:items-center lg:mx-8">
            <a href="#enroll" class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 hover:bg-gray-100">Enroll Now</a>
            <a href="#gallery" class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 hover:bg-gray-100">Gallery</a>
            <a href="#contactus" class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 hover:bg-gray-100">Contact us</a>
            <a href="#team" class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 hover:bg-gray-100">Team</a>
          </div>
  
          <div class="flex items-center mt-4 lg:mt-0">
            <button class="hidden mx-4 text-gray-600 transition-colors duration-300 transform lg:block hover:text-gray-700 focus:text-gray-700 focus:outline-none" aria-label="show notifications">
              <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>
  
            <button type="button" class="flex items-center focus:outline-none" aria-label="toggle profile dropdown">
              <div class="w-8 h-8 overflow-hidden border-2 border-gray-400 rounded-full">
                <img src="/includes/imgs/banner.png" class="object-cover w-full h-full" alt="avatar">
              </div>
  
              <h3 class="mx-2 text-gray-800 lg:hidden"><?=$sessionUser?></h3>
              <button class="text-gray-400 ml-auto" onclick="window.location.href='/includes/logout.php'">Logout</button>
            </button>
          </div>
        </div>
      </div>
    </div>
  </nav>
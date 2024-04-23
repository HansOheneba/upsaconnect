

  <nav class="header h-20 lg:px-20 w-full items-center overflow-hidden z-10 fixed top-0 bg-white shadow-md">
    <div class="flex justify-between items-center h-20 my-auto font-poppins">
      <a href="index.html" class="flex px-5 ">
        <div class="flex  items-center" id="logo">
          <img src="rss/upsa-logo-new-2.png" class="my-auto h-16 w-40" alt="UPSA_Logo">
        </div>
      </a>
      <div class="hidden lg:flex items-center ">
        <div class="flex gap-2">
          <a href="{{route('home')}}"
            ><div class="py-4 px-6 flex justify-center items-center gap-2 hover:text-upsaBlue2 {{ Route::currentRouteName() == 'home' ? 'border-b-4 border-upsaBlue' : '' }}">
              <p class="font-black ">Home</p>
            </div></a
          >
          <a href="{{route('yearbook')}}"
            ><div class="py-4 px-6 flex justify-center items-center gap-2 hover:text-upsaBlue2 {{ Route::currentRouteName() == 'yearbook' ? 'border-b-4 border-upsaBlue' : '' }}">
              <p class="font-black">Alumni</p>
            </div></a
          >
          <a href="{{route('jobs')}}"
            ><div class="py-4 px-6 flex justify-center items-center gap-2 hover:text-upsaBlue2 {{ Route::currentRouteName() == 'jobs' ? 'border-b-4 border-upsaBlue' : '' }}">
              <p class="font-black">Jobs</p>
            </div></a
          >
          <a href="{{route('donate')}}"
          ><div class="py-4 px-6 flex justify-center items-center gap-2 hover:text-upsaBlue2 {{ Route::currentRouteName() == 'donate' ? 'border-b-4 border-upsaBlue' : '' }}">
            <p class="font-black">Give</p>
          </div></a
        >
          <a href="{{route('about')}}"
          ><div class="py-4 px-6 flex justify-center items-center gap-2 hover:text-upsaBlue2 {{ Route::currentRouteName() == 'about' ? 'border-b-4 border-upsaBlue' : '' }}">
            <p class="font-black">About</p>
          </div></a
        >
        </div>
      </div>

      <div class="flex justify-end items-center">

          <a href="{{route('register')}}"><button class="hidden lg:block text-upsaBlue border-2 border-upsaBlue font-semibold py-2 px-5 rounded-md  hover:bg-upsaBlue3">     Register   </button></a>

        <div class="icon-container relative inline-block z-20 lg:hidden">
          <div id="menuicon">
            <div class="bar bar1"></div>
            <div class="bar bar2"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="clear-both">
      <ul class="menu relative block list-none">
        <li class="menu-item"><a class="block relative text-upsaBlue no-underline text-xl w-full focus:outline-none" href="index.html">Home</a></li>
        <li class="menu-item"><a class="block relative text-upsaBlue no-underline text-xl w-full focus:outline-none" href="yearbook.html">Alumni</a></li>
        <li class="menu-item"><a class="block relative text-upsaBlue no-underline text-xl w-full focus:outline-none" href="jobs.html">Jobs</a></li>
        <li class="menu-item"><a class="block relative text-upsaBlue no-underline text-xl w-full focus:outline-none" href="donate.html">Give</a></li>
        <li class="menu-item"><a class="block relative text-upsaBlue no-underline text-xl w-full focus:outline-none" href="about.html">About</a></li>
        <li class="menu-item"><a class="block relative text-upsaBlue no-underline text-xl w-full focus:outline-none" href="signup.html">Register</a></li>
        <li>

        </li>
      </ul>
    </div>
</nav>
  <div class="h-20"></div>

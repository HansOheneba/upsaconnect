
  <nav class="w-full py-5">
    <div class="flex justify-around w-full items-center">
      <div>
        <a href="#"><img src="rss/upsa-logo-new-2.png" alt="UPSA_Logo" /></a>
      </div>

      <div class="flex gap-2">
        <a href="{{route('feed')}}"
          ><div class="py-4 px-6">
            <p class="font-semibold  {{ Route::currentRouteName() == 'feed' ? 'border-b-2 border-upsaBlue' : '' }}">Feed</p>
          </div></a
        >
        <a href="{{route('jobs')}}"
          ><div class="py-4 px-6">
            <p class="font-semibold {{ Route::currentRouteName() == 'jobs' ? 'border-b-2 border-upsaBlue' : '' }}">Jobs</p>
          </div></a
        >

      </div>

      <a href="#">
        <div class="flex justify-center items-center gap-2 font-semibold">
            @auth
            {{ auth()->user()->name }}
            @endauth
            <div class="w-16 h-16 rounded-full overflow-hidden"><img class="scale-110" src="rss/8th.png"  alt=""></div>
          </div>
      </a>
    </div>
  </nav>

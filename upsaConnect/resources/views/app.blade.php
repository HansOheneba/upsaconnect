@extends('layout')
@section('title', 'UPSA Alumni Connect')

@section('content')

<section
      class="flex justify-center items-center flex-col max-w-2xl mx-auto gap-10 py-28"
    >
      <h1 class="text-7xl text-upsaBlue font-extrabold text-center">
        UPSA Alumni Connect
      </h1>
      <p class="text-gray-500 text-center text-lg">
        Where Alumni Connect and Thrive! Our platform is designed to <br />
        foster lifelong connections, provide valuable resources
      </p>
      <button
        class="bg-upsaYellow text-upsaBlue font-bold py-1 px-6 rounded-md"
      >
        <a href="signin.html">Explore</a>
      </button>
    </section>
    <section class="bg-gradient-to-b from-grdientBlue1 to-grdientBlue2 py-20">
      <div class="text-white flex flex-col gap-4">
          <h1 class="text-5xl text-white font-extrabold text-center">
              Featured Alumni
          </h1>
          <p class="text-gray-300 text-center text-xl max-w-xl mx-auto">
              Where Alumni Connect and Thrive! Our platform is designed to foster lifelong connections, provide valuable resources
          </p>
      </div>
      <div class="flex flex-col md:flex-row justify-center gap-10 py-16">
          <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
              <img class="rounded-t-lg w-full" src="rss/8th.png" alt="" />

              <div class="p-5">
                  <a href="#">
                      <h5 class="mb-2 text-lg font-bold text-gray-900 uppercase">Edward Mark Nii Okai Tetteh</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 text-sm">BSc. Information technology Studies</p>
              </div>
          </div>
          <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
              <img class="rounded-t-lg w-full" src="rss/8th.png" alt="" />

              <div class="p-5">
                  <a href="#">
                      <h5 class="mb-2 text-lg font-bold text-gray-900 uppercase">Edward Mark Nii Okai Tetteh</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 text-sm">BSc. Information technology Studies</p>
              </div>
          </div>
          <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
              <img class="rounded-t-lg w-full" src="rss/8th.png" alt="" />

              <div class="p-5">
                  <a href="#">
                      <h5 class="mb-2 text-lg font-bold text-gray-900 uppercase">Edward Mark Nii Okai Tetteh</h5>
                  </a>
                  <p class="mb-3 font-normal text-gray-700 text-sm">BSc. Information technology Studies</p>
              </div>
          </div>
      </div>
  </section>


    <section class="py-28">
      <div class="flex flex-col gap-4">
        <h1 class="text-5xl font-extrabold text-center text-upsaBlue2">
          Why this exists
        </h1>
        <p class="text-gray-500 text-center text-xl max-w-xl mx-auto">
          Our mission is simple yet powerful. We exist to unite, empower, and
          celebrate our alumni community. Here's why
        </p>
      </div>

      <div class="flex flex-row justify-center py-20 items-center gap-10">
        <div class="flex flex-col max-w-lg h-full gap-5 justify-between">

          <div class="bg-upsaBlue3 flex flex-row justify-center items-center w-fit rounded-2xl h-40 py-5 px-7">
            <div class="w-48">
              <img src="rss/team1.png" alt="">
            </div>
            <div class="flex-grow">
              <h1 class="font-extrabold text-lg pb-2">Building Community</h1>
              <p class="text-gray-600">A platform to reconnect, build new relationships, and strengthen their network of support.</p>
            </div>
          </div>
          <div class="bg-upsaBlue3 flex flex-row justify-center items-center w-fit rounded-2xl h-40 py-5 px-7">
            <div class="w-48">
              <img src="rss/connect1.png" alt="">
            </div>
            <div class="flex-grow">
              <h1 class="font-extrabold text-lg pb-2">Fostering Connections</h1>
              <p class="text-gray-600">A platform where alumni can reconnect, build new relationships, and strengthen their network of support.</p>
            </div>
          </div>
          <div class="bg-upsaBlue3 flex flex-row justify-center items-center w-fit rounded-2xl h-40 py-5 px-7">
            <div class="w-48">
              <img src="rss/goal1.png" alt="">
            </div>
            <div class="flex-grow">
              <h1 class="font-extrabold text-lg pb-2">Celebrating Achievements</h1>
              <p class="text-gray-600">We take pride in celebrating your milestones, whether it's a career achievement, personal success.</p>
            </div>
          </div>


        </div>

        <div class="h-fit">
          <img src="rss/8th.png" alt="">
        </div>
    </div>

    </section>

    <section class="py28 bg-cover bg-bottom  bg-[url(rss/section_bg.jpg)]">
   <div class="flex justify-center items-center gap-10 py-32">
    <div class="text-white max-w-md flex flex-col gap-5">
      <h1 class="text-7xl font-extrabold">Explore the community</h1>
      <p class="text-lg">Our mission is simple yet powerful. We exist to unite, empower, and celebrate our alumni community. Here's why</p>
      <button class="bg-white w-fit py-1 px-5 rounded-lg font-bold text-gray-600">Sign Up</button>

    </div>
      <div>
        <img src="rss/barcode.png" height="200" width="200" alt="">
      </div>
   </div>
    </section>

@endsection



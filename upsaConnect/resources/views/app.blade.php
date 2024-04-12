<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <title>UPSA Connect</title>
  </head>
  <body style="font-family: 'Lato', sans-serif">
    <nav class="w-full py-5">
      <div class="flex justify-around w-full items-center">
        <div>
          <a href="#"><img src="{{ asset('rss/upsa-logo-new-2.png') }}" alt="UPSAcdc_Logo" /></a>
        </div>

        <div class="flex gap-2 text-blue-900">
          <a href="#"
            ><div class="py-4 px-6">
              <p class="font-semibold">Feature</p>
            </div></a
          >
          <a href="#"
            ><div class="py-4 px-6">
              <p class="font-semibold">Donate</p>
            </div></a
          >
          <a href="#"
            ><div class="py-4 px-6">
              <p class="font-semibold">About</p>
            </div></a
          >
          <a href="#"
            ><div class="py-4 px-6">
              <p class="font-semibold">Support</p>
            </div></a
          >
        </div>

        <div>
          <button
            class="text-blue-900 border-2 border-upsaBlue font-semibold py-2 px-5 rounded-md"
          >
            <a href="#">Sign in</a>
          </button>
          <button
            class="bg-upsaBlue text-white font-semibold py-2 px-5 rounded-md"
          >
            <a href="#">Sign up</a>
          </button>
        </div>
      </div>
    </nav>
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
        <a href="#">Explore</a>
      </button>
    </section>
    <section class="bg-gradient-to-b from-grdientBlue1 to-grdientBlue2 py-20">
      <div class="text-white flex flex-col gap-4">
        <h1 class="text-5xl text-white font-extrabold text-center">
          Featured Alumni
        </h1>
        <p class="text-gray-300 text-center text-xl max-w-xl mx-auto">
          Where Alumni Connect and Thrive! Our platform is designed to foster
          lifelong connections, provide valuable resources
        </p>
      </div>
      <div class="flex justify-center gap-10 py-16">
        <div class="bg-white py-5 px-8 w-fit rounded-md max-w-sm">
          <div class="flex flex-col gap-5 py-5">
            <div class="rounded-full overflow-hidden">
              <img src="{{ asset('rss/pfp-1.png') }}" alt="" />
            </div>

            <div>
              <h1>Dennis Owusu Ansah</h1>
              <div class="flex flex-row gap-1">
                <img src="rss/location.png" alt="" />
                <p>Accra, Ghana</p>
              </div>
              <div class="flex flex-row gap-1">
                <img src="rss/website.png" alt="" />
                <p>www.hansopoku.com</p>
              </div>
            </div>

            <p class="text-sm">
              I experiment with lights, sights and sounds, to compellingly aid
              the narrative and create a lasting impact by evoking em
            </p>

            <div class="flex flex-row gap-1">
              <div class="bg-gray-200 w-fit rounded-md text-xs px-2 py-1">
                <p>Graphics Designer</p>
              </div>
              <div class="bg-gray-200 w-fit rounded-md text-xs px-2 py-1">
                <p>Video Editor</p>
              </div>
              <div class="bg-gray-200 w-fit rounded-md text-xs px-2 py-1">
                <p>Sound Engineer</p>
              </div>
            </div>
          </div>

          <div class="border-gray-200 border"></div>

          <div class="w-full flex justify-center py-2">
            <a href="#"
              ><button
                class="flex bg-upsaBlue2 gap-2 text-white py-2 px-4 rounded-lg"
              >
                <img src="rss/connect.png" alt="" />
                <p>Connect</p>
              </button></a
            >
          </div>
        </div>
        <div class="bg-white py-5 px-8 w-fit rounded-md max-w-sm">
          <div class="flex flex-col gap-5 py-5">
            <div class="rounded-full overflow-hidden">
              <img src="rss/pfp-1.png" alt="" />
            </div>

            <div>
              <h1>Dennis Owusu Ansah</h1>
              <div class="flex flex-row gap-1">
                <img src="rss/location.png" alt="" />
                <p>Accra, Ghana</p>
              </div>
              <div class="flex flex-row gap-1">
                <img src="rss/website.png" alt="" />
                <p>www.hansopoku.com</p>
              </div>
            </div>

            <p class="text-sm">
              I experiment with lights, sights and sounds, to compellingly aid
              the narrative and create a lasting impact by evoking em
            </p>

            <div class="flex flex-row gap-1">
              <div class="bg-gray-200 w-fit rounded-md text-xs px-2 py-1">
                <p>Graphics Designer</p>
              </div>
              <div class="bg-gray-200 w-fit rounded-md text-xs px-2 py-1">
                <p>Video Editor</p>
              </div>
              <div class="bg-gray-200 w-fit rounded-md text-xs px-2 py-1">
                <p>Sound Engineer</p>
              </div>
            </div>
          </div>

          <div class="border-gray-200 border"></div>

          <div class="w-full flex justify-center py-2">
            <a href="#"
              ><button
                class="flex bg-upsaBlue2 gap-2 text-white py-2 px-4 rounded-lg"
              >
                <img src="rss/connect.png" alt="" />
                <p>Connect</p>
              </button></a
            >
          </div>
        </div>
        <div class="bg-white py-5 px-8 w-fit rounded-md max-w-sm">
          <div class="flex flex-col gap-5 py-5">
            <div class="rounded-full overflow-hidden">
              <img src="rss/pfp-1.png" alt="" />
            </div>

            <div>
              <h1>Dennis Owusu Ansah</h1>
              <div class="flex flex-row gap-1">
                <img src="rss/location.png" alt="" />
                <p>Accra, Ghana</p>
              </div>
              <div class="flex flex-row gap-1">
                <img src="rss/website.png" alt="" />
                <p>www.hansopoku.com</p>
              </div>
            </div>

            <p class="text-sm">
              I experiment with lights, sights and sounds, to compellingly aid
              the narrative and create a lasting impact by evoking em
            </p>

            <div class="flex flex-row gap-1">
              <div class="bg-gray-200 w-fit rounded-md text-xs px-2 py-1">
                <p>Graphics Designer</p>
              </div>
              <div class="bg-gray-200 w-fit rounded-md text-xs px-2 py-1">
                <p>Video Editor</p>
              </div>
              <div class="bg-gray-200 w-fit rounded-md text-xs px-2 py-1">
                <p>Sound Engineer</p>
              </div>
            </div>
          </div>

          <div class="border-gray-200 border"></div>

          <div class="w-full flex justify-center py-2">
            <a href="#"
              ><button
                class="flex bg-upsaBlue2 gap-2 text-white py-2 px-4 rounded-lg"
              >
                <img src="rss/connect.png" alt="" />
                <p>Connect</p>
              </button></a
            >
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

       <div class="flex flex-row justify-center items-center gap-10">
        <div class="flex flex-col justify-between max-w-lg items-start h-full">
          <div class="bg-upsaBlue3 flex flex-row justify-center items-center  w-fit rounded-b-2xl py-5 px-7">
            <div class="w-48">
              <img src="rss/team1.png" alt="">
            </div>
            <div>
              <h1 class="font-extrabold text-lg pb-2">Building Community</h1>
              <p class="text-gray-600">A platform to reconnect, build new relationships, and strengthen their network of support.</p>
            </div>
          </div>

          <div class="bg-upsaBlue3 flex flex-row justify-center items-center  w-fit rounded-b-2xl py-5 px-7">
            <div class="w-48">
              <img src="rss/team1.png" alt="">
            </div>
            <div>
              <h1 class="font-extrabold text-lg pb-2">Building Community</h1>
              <p class="text-gray-600">A platform to reconnect, build new relationships, and strengthen their network of support.</p>
            </div>
          </div>

          <div class="bg-upsaBlue3 flex flex-row justify-center items-center  w-fit rounded-b-2xl py-5 px-7">
            <div class="w-48">
              <img src="rss/team1.png" alt="">
            </div>
            <div>
              <h1 class="font-extrabold text-lg pb-2">Building Community</h1>
              <p class="text-gray-600">A platform to reconnect, build new relationships, and strengthen their network of support.</p>
            </div>
          </div>
         </div>


         <div>
          <img src="rss/8th.png" alt="">
         </div>
       </div>

    </section>
  </body>
</html>

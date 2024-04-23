<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link  rel="icon" href="{{ url('rss/upsa-logo-Icon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <script src="https://kit.fontawesome.com/ecf091b006.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/xdeyesk3eyhxruhwsv7xuejyz2z3qclu143inbdbaof5jk95/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet"
  />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Admin portal login</title>
  </head>
  <body style="font-family: 'Lato', sans-serif">

    <section class="bg-gray-50">
        <div class="flex flex-col items-center justify-center my-auto px-6 py-8 mx-auto h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
                <img class="w-8 h-8 mr-2" src="rss/upsa_Logo.png" alt="logo">
                UPSA Alumni Master Admin
            </a>

            <div class="w-full  md:mt-0 sm:max-w-md xl:p-0">
                <div class="bg-red-100 border border-red-400 text-red-700 px-5 py-2 rounded text-center hidden" role="alert">
                    <strong class="font-bold">Login Failed!</strong>
                    <span class="block sm:inline">Invalid credentials.</span>
                  </div>
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8 bg-white rounded-lg shadow mt-3">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl ">
                        Create an admin account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="#">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="Enter Admin name" required="">
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="Enter Admin Email" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required="">
                        </div>
                        <div>
                            <label for="passwordConfirm" class="block mb-2 text-sm font-medium text-gray-900">Confirm Password</label>
                            <input type="password" name="passwordConfirm" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required="">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">

                            </div>
                        </div>
                        <button type="submit" class="w-full text-white bg-upsaBlue hover:bg-upsaBlue2 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Create Admin</button>
                    </form>
                </div>
            </div>
        </div>
      </section>




      <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {

                        'upsaBlue': '#00004E',
                        'upsaBlue2': '#263F9C',
                        'upsaBlue3': '#DAE3F6',
                        'upsaYellow': '#F9BB19',
                        'upsaGrey': '#DAE2FC',
                        'upsaGreyText': '#A3DCFF',
                        'grdientBlue1': '#1F3BA2',
                        'grdientBlue2': '#0C163C',
                    },
                },
            }
        }
    </script>

  </body>
</html>

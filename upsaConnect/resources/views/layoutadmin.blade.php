<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link  rel="icon" href="{{ url('rss/upsa-logo-Icon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <script src="https://kit.fontawesome.com/ecf091b006.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/xdeyesk3eyhxruhwsv7xuejyz2z3qclu143inbdbaof5jk95/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet"
  />
    <script src="https://cdn.tailwindcss.com"></script>



 <style>
        [x-cloak] {
            display: none
        }
    </style>








    <body style="font-family: 'Inter', sans-serif;">


        <section class="flex h-lvh overflow-auto">




            <div class="w-1/6 border-r-2 h-full border-gray-200 p-6 flex flex-col justify-between sticky top-0 ">



                <div class="flex flex-col gap-6">
                    <div class="px-4 py-6">
                        <div class="flex justify-center gap-2 px-6 py-5.5 lg:py-6.5">
                            <a href="dashboard.html">
                              <img src="rss/upsa-logo-new-2.png" alt="Logo" />
                            </a>
                        </div>
                        <h1 class="text-lg text-center font-semibold py-3">Admin Dashboard</h1>
                    </div>



                    <div>
                        <a class="" href="{{route('dashboard')}}">
                            <button style="background-image: url('rss/home.svg'); background-position-x:4%;"
                                class="w-full bg-no-repeat bg-center bg-upsaBlue3  py-3 rounded-lg">
                                <p class="text-left text-lg pl-12  font-bold">
                                    Overview
                                </p>
                            </button>
                        </a>
                        <br>
                        <br>
                        <hr>
                        <br>
                        <a href="{{route('managealumni')}}">
                            <button
                                class="w-full  hover:bg-slate-100 bg-center py-3 rounded-lg">
                                <p class="text-left pl-12 font-semibold">
                                    Alumni
                                </p>
                            </button>
                        </a>
                        <br>

                        <!-- <a href="managePosts.html">
                            <button
                                class="w-full hover:bg-slate-100 bg-center py-3 rounded-lg">
                                <p class="text-left pl-12 font-semibold">
                                    Posts
                                </p>
                            </button>
                            <br>
                        </a>
             -->

                        <a href="{{route('managejobs')}}">
                            <button
                                class="w-full hover:bg-slate-100 bg-center py-3 rounded-lg">
                                <p class="text-left pl-12 font-semibold">
                                    Jobs
                                </p>
                            </button>
                        </a>

                    </div>
                </div>




                <div>
                    <div class="flex pl-2 py-3">
                        <div class="bg-blue-100 rounded-full h-fit p-2">
                            <img src="rss/user.svg" alt="">
                        </div>
                        <div class="pl-2 w-full">
                            <div class="flex justify-between items-center">
                                <p id="username" class="font-semibold username">Hans Opoku</p>
                                <style>
                                    [x-cloak] {
                                        display: none
                                    }
                                </style>
                                <div x-data="{ modelOpen: false }">
                                    <button @click="modelOpen =!modelOpen"
                                        class="justify-center text-white text-md hover:bg-red-200  focus:ring-4 focus:outline-none  focus:ring-gray-100 font-medium rounded-lg px-2 py-2  ">

                                        <img src="rss/log-out.svg" alt="">

                                    </button>

                                    <div x-show="modelOpen" class="fixed flex justify-center items-center inset-0 z-50 overflow-y-auto"
                                        aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                        <div
                                            class="flex items-center justify-center px-4 text-center sm:block sm:p-0">
                                            <div x-cloak @click="modelOpen = true" x-show="modelOpen"
                                                x-transition:enter="transition ease-out duration-300 transform"
                                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                                x-transition:leave="transition ease-in duration-200 transform"
                                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                                class="fixed inset-0 transition-opacity bg-gray-700 bg-opacity-60"
                                                aria-hidden="true"></div>

                                            <div x-cloak x-show="modelOpen"
                                                x-transition:enter="transition ease-out duration-300 transform"
                                                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                                x-transition:leave="transition ease-in duration-200 transform"
                                                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                class="inline-block w-fit max-w-md p-6 my-10 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl xl:max-w-xl">
                                                <div class="flex items-center justify-between">
                                                    <h1 class="text-xl w-full text-center font-bold text-gray-800 ">
                                                        Logout</h1>


                                                </div>

                                                <p class="mt-2 text-md text-gray-800 text-center w-fit ">
                                                    Are you sure you want to logout of your admin account?
                                                </p>



                                                <div class="flex justify-center mt-6">
                                                    <button for="show" @click="modelOpen = false" type="button"
                                                        class="mr-2 w-1/2 py-2 text-sm tracking-wide capitalize transition-colors border border-gray-300 duration-200 transform bg-white hover:bg-gray-200 rounded-md">
                                                        Cancel
                                                    </button>
                                                    <a class="justify-center text-white text-md bg-red-500 hover:bg-red-600 border border-gray-200 focus:ring-4 focus:outline-none shadow-md focus:ring-gray-100 font-medium rounded-lg text-sm w-1/2 py-2.5 text-center inline-flex items-center"" href="{{route('admin')}}">
                                                        <button @click="logout"
                                                        >
                                                        <span>Logout</span>
                                                    </button>
                                                    </a>


                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p id="userEmail" class=" userEmail text-sm text-gray-500">hansoheneba.io@gmai.com</p>
                        </div>
                    </div>
                </div>


            </div>
            <div class="bg-gray-100 w-full flex ">
            @yield('content')
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

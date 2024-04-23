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






</head>

<body style="font-family: 'Inter', sans-serif;">

    <section class="flex h-screen overflow-auto">




        <div class="w-1/5 border-r-2 h-full border-gray-200 p-6 flex flex-col justify-between sticky top-0 ">



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
                    <a class="" href="dashboard.html">
                        <button style="background-image: url('rss/home.svg'); background-position-x:4%;"
                            class="w-full bg-no-repeat bg-center hover:bg-slate-100  py-3 rounded-lg">
                            <p class="text-left text-lg pl-12  font-bold">
                                Overview
                            </p>
                        </button>
                    </a>
                    <br>
                    <br>
                    <hr>
                    <br>
                    <a href="manageAlumni.html">
                        <button
                            class="w-full hover:bg-slate-100  bg-center py-3 rounded-lg">
                            <p class="text-left pl-12 font-semibold">
                                Alumni
                            </p>
                        </button>
                    </a>
                    <!-- <br>
                    <a href="managePosts.html">
                        <button
                            class="w-full hover:bg-slate-100 bg-center py-3 rounded-lg">
                            <p class="text-left pl-12 font-semibold">
                                Posts
                            </p>
                        </button>
                    </a> -->

                    <br>
                    <a href="manageJobs.html">
                        <button
                            class="w-full  bg-center  bg-upsaBlue3 py-3 rounded-lg">
                            <p class="text-left pl-12 font-semibold ">
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

                                            <x-text-input name="id" type="hidden" value="{{ $site->id }}" />

                                            <div class="flex justify-center mt-6">
                                                <button for="show" @click="modelOpen = false" type="button"
                                                    class="mr-2 w-1/2 py-2 text-sm tracking-wide capitalize transition-colors border border-gray-300 duration-200 transform bg-white hover:bg-gray-200 rounded-md">
                                                    Cancel
                                                </button>
                                                <button @click="logout"
                                                    class="justify-center text-white text-md bg-red-500 hover:bg-red-600 border border-gray-200 focus:ring-4 focus:outline-none shadow-md focus:ring-gray-100 font-medium rounded-lg text-sm w-1/2 py-2.5 text-center inline-flex items-center">
                                                    <span>Logout</span>
                                                </button>


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

        <div class="p-10 w-full">
            <div class="flex flex-col gap-2 ">
                <h1 class="font-bold text-xl">Verify Jobs</h1>
                <p class="font-semibold text-sm text-gray-500">Click the "Verify" button after confirmation of the entry.</p>
            </div>


            <div class=" py-10 flex items-center justify-center">
                <div class=" shadow border border-gray-200 w-full h-4/5">
                    <div class="flex justify-between items-center px-10 py-5 border-b">
                        <h1 class="font-semibold text-xl">
                            All Entries <span class="text-gray-500 text-nd ">(3)</span>
                        </h1>
                        <div x-data="{ modelOpen: false }">



                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <article class="content">
                                        <table class="min-w-full text-left text-sm font-light">
                                            <thead
                                                class="border-b font-extralight text-xs text-slate-500 bg-slate-100/50 h-full border-gray-200">
                                                <tr>
                                                    <th scope="col" class="px-6 py-2">Title</th>
                                                    <th scope="col" class="px-6 py-2">Company</th>
                                                    <th scope="col" class="px-6 py-2">Description</th>

                                                    <th scope="col" class="py-2"></th>
                                                    <th scope="col" class="py-2"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-b border-gray-200">
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">
                                                        <div class="flex items-center gap-3">UX Engineer</div>
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4">Google Inc.</td>
                                                    <td class="whitespace-nowrap px-6 py-4 max-w-xs text-ellipsis overflow-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ab necessitatibus ipsa adipisci. Cupiditate, aliquam minus nulla possimus minima id itaque sint labore ea recusandae cum enim quidem aliquid incidunt?</td>


                                                    <td>
                                                        <button class="rounded px-6 py-2 flex justify-center items-center gap-2 hover:bg-slate-50 bg-slate-100">
                                                            <img src="rss/trash-2.svg" alt="delete button">
                                                            <span class="font-semibold">Remove</span>
                                                        </button>
                                                    </td>
                                                        <td>
                                                            <button class=" bg-green-500 hover:bg-green-400 rounded px-6 py-2 flex justify-center items-center gap-2">
                                                                <i class="fa-solid fa-check text-white   "></i>
                                                              <span class="text-white font-semibold">  Verify</span>
                                                            </button>
                                                        </td>
                                                </tr>
                                                <tr class="border-b border-gray-200">
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">
                                                        <div class="flex items-center gap-3">UX Engineer</div>
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4">Google Inc.</td>
                                                    <td class="whitespace-nowrap px-6 py-4 max-w-xs text-ellipsis overflow-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ab necessitatibus ipsa adipisci. Cupiditate, aliquam minus nulla possimus minima id itaque sint labore ea recusandae cum enim quidem aliquid incidunt?</td>


                                                    <td>
                                                        <button class="rounded px-6 py-2 flex justify-center items-center gap-2 hover:bg-slate-50 bg-slate-100">
                                                            <img src="rss/trash-2.svg" alt="delete button">
                                                            <span class="font-semibold">Remove</span>
                                                        </button>
                                                    </td>
                                                        <td>
                                                            <button class=" bg-green-500 hover:bg-green-400 rounded px-6 py-2 flex justify-center items-center gap-2">
                                                                <i class="fa-solid fa-check text-white   "></i>
                                                              <span class="text-white font-semibold">  Verify</span>
                                                            </button>
                                                        </td>
                                                </tr>
                                                <tr class="border-b border-gray-200">
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">
                                                        <div class="flex items-center gap-3">UX Engineer</div>
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4">Google Inc.</td>
                                                    <td class="whitespace-nowrap px-6 py-4 max-w-xs text-ellipsis overflow-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ab necessitatibus ipsa adipisci. Cupiditate, aliquam minus nulla possimus minima id itaque sint labore ea recusandae cum enim quidem aliquid incidunt?</td>


                                                    <td>
                                                        <button class="rounded px-6 py-2 flex justify-center items-center gap-2 hover:bg-slate-50 bg-slate-100">
                                                            <img src="rss/trash-2.svg" alt="delete button">
                                                            <span class="font-semibold">Remove</span>
                                                        </button>
                                                    </td>
                                                        <td>
                                                            <button class=" bg-green-500 hover:bg-green-400 rounded px-6 py-2 flex justify-center items-center gap-2">
                                                                <i class="fa-solid fa-check text-white   "></i>
                                                              <span class="text-white font-semibold">  Verify</span>
                                                            </button>
                                                        </td>
                                                </tr>






                                            </tbody>
                                        </table>

                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    </section>


</body>
</html>

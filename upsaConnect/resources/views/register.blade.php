@extends('layoutNoInclude')
@section('title', 'Register')

@section('content')

<div>

        <section class="flex items-center justify-center min-h-lvh my-auto ">
            <div>
               <h1 class="text-9xl font-extrabold text-center py-8 text-upsaGrey">Get <br> Started</h1>
               <p class="text-center text-upsaGreyText">Already got an account? <span class="text-white font-semibold"><a href="{{route('login')}}">Log In</a></span></p>


       <form action="{{route('register.post')}}" method="POST" class="max-w-sm mx-auto flex flex-col pb-10">
        @csrf
           <div class="mb-5 flex flex-col gap-2">
             <label for="fname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
             <input type="text" name="first_name" class="bg-transparent border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-transparent dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="First Name" required />
             <input type="text" name="last_name" class="bg-transparent border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-transparent dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Last Name" required />
           </div>

           <div class="mb-5">
               <label for="studentID" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Student ID</label>
               <input type="text" name="index_number" id="studentID" class="bg-transparent border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-transparent dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="eg. 10110000" required />
             </div>
           <div class="mb-5">
               <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email <span class="text-xs text-gray-300">(not student mail)</span></label>
               <input type="email" name="email" id="email" class="bg-transparent border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-transparent dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="eg. you@example.com" required />
             </div>

           <div class="mb-5 flex flex-col gap-2">
             <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
             <input type="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-transparent dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your password" required />
             <input type="password" name="password_confirmation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-transparent dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Confirm your password" required />
           </div>


           {{-- <div class="flex items-start mb-5">
             <div class="flex items-center h-5">
               <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-transparent focus:ring-3 focus:ring-blue-300 " required />
             </div>
             <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">By ticking this box, you are indicating that you have read and agree to the <span><a class="text-upsaYellow font-semibold" href="#">Terms of use</a></span> and <span class="text-upsaYellow font-semibold"><a href="#">Privacy Policy</a></span></label>
           </div> --}}
           <button type="submit" class="text-upsaBlue font-bold bg-white hover:bg-blue-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-3xl text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:focus:ring-blue-800">Create Account</button>
         </form>



            </div>
           </section>
    </div>
@endsection

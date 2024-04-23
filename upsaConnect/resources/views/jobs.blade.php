@extends('layout')
@section('title', 'Jobs')

@section('content')


<section class="py-14 flex flex-col gap-10">
    <h1 class="text-5xl font-extrabold text-center">
        Find Your Dream Job
      </h1>
        <div class="flex justify-center">

    <a  href="{{route('postjob')}}">  <button
        class="bg-upsaYellow hover:bg-yellow-500 text-upsaBlue font-bold py-2 px-10 rounded-md"
      >  Post a Job </button></a>

        </div>
</section>


<section>
  <div class="w-full px-6 lg:px-32">
   <div>
    <form class="flex md:flex-row-reverse flex-col justify-between gap-3">
      <div class="flex">
          <input type="text" placeholder="Search for a job"
        class="w-full md:w-80 px-3 h-10 rounded-l border-2 border-upsaBlue3 focus:border-upsaBlue focus:outline-none "
        >
          <button type="submit" class="bg-upsaBlue text-white rounded-r px-2 md:px-3 py-0 md:py-1 hover:bg-upsaBlue2">Search</button>
      </div>
      <select id="jobType" name="pricingType"
      class="w-full md:w-80 h-10 border-2 border-upsaBlue3 focus:outline-none focus:border-upsaBlue text-upsaBlue rounded px-2 md:px-3 py-0 md:py-1 tracking-wider">
      <option value="All" selected="">All</option>
      <option value="PR">Public Relations Management</option>
      <option value="Logistics">Logistics and Transport Management</option>
      <option value="Accounting">Accounting</option>
      <option value="Acc_Fin">Accounting and Finance</option>
      <option value="B_Econ">Business Economics</option>
      <option value="Actuarial">Actuarial Science</option>
      <option value="Banking_Fin">Banking and Finance</option>
      <option value="BA">Business Administration</option>
      <option value="IT">Information Technology</option>
      <option value="Marketing">Marketing</option>
      <option value="REM">Real Estate Management and Finance</option>

    </select>
  </form>
   </div>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:px-32 w-full p-4">
    @for ($i = 0; $i < 5; $i++)
    <div class="p-6  border-2 rounded-xl flex flex-col gap-5">
        <p class="text-lg font-semibold line-clamp-1">
        Website Redesign and Optimization Specialist
        </p>
        <div class="flex items-center gap-1">
          <i class="fa-solid fa-globe"></i>
          <h2 class="font-semibold text-sm text-gray-800">
              Google Inc
              </h2>
        </div>
      <div class="flex flex-col">
        <p class="text-sm text-gray-400">Type</p>
        <h2 class="font-semibold text-sm text-gray-800">
          Full time
          </h2>
      </div>
      <div class="flex items-center justify-start text-gray-500 gap-5">
        <div class=" text-sm flex items-center gap-1">
          <i class="fa-solid fa-location-dot"></i>
          <p class="">
            Remote

          </p>
        </div>

        <div class="flex items-center justify-between gap-1 text-gray-500 text-sm">
          <i class="fa-solid fa-clock"></i>
          <p>Posted 2 hrs ago</p>
        </div>
      </div>

      <div>
        <p class="mt-2 line-clamp-3">
          We are looking for a skilled website developer to help us build a website for our online auction business. The website should have a user-friendly interface that allows users to easily browse and bid on items. Additionally, it should have a secure payment system in place to facilitate transactions. The developer should be proficient in HTML, CSS, and JavaScript, as well as have experience with website design and development. Attention to detail and the ability to meet deadlines are crucial. If you have previous experience building similar websites and are excited about working on this project, please submit your proposal.
        </p>
      </div>
      <div class="flex gap-2">
        <p class="bg-upsaBlue3 w-fit text-xs p-2 text-upsaBlue2 rounded-2xl">PHP Developer</p>
        <p class="bg-upsaBlue3 w-fit text-xs p-2 text-upsaBlue2 rounded-2xl">SEO</p>
        <p class="bg-upsaBlue3 w-fit text-xs p-2 text-upsaBlue2 rounded-2xl">UX UI</p>
        <p class="bg-upsaBlue3 w-fit text-xs p-2 text-upsaBlue2 rounded-2xl">Web Development</p>
      </div>
      <div><a href="{{route('joblisting')}}"><button class="w-fit text-white bg-upsaBlue hover:bg-upsaBlue2 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-3xl text-sm px-7 py-2.5 text-center font-bold ">See more</button></a></div>
      </div>

@endfor
   
</section>





@endsection


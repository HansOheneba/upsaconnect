@extends('layout')
@section('title', 'UPSA Alumni Connect')

@section('content')


<section class="py-14 flex flex-col gap-10">
    <h1 class="text-5xl font-extrabold text-center text-upsaBlue">
        UPSA Global Alumni Yearbook
      </h1>
      <h2 class="text-xl font-bold text-center mb-8">Celebrating the Legacy of UPSA Graduates</h2>

</section>






<section class="max-w-7xl mx-auto">
    <div class="w-full px-6 lg:px-32">
     <div>
      <form class="flex md:flex-row flex-col justify-between gap-3">
      <div>
        <label for="course" class="block mb-2 text-sm font-medium text-gray-900">Course of Study</label>
        <select id="Course" name="pricingType"
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
      </div>
    <div>
        <label for="year" class="block mb-2 text-sm font-medium text-gray-900">Graduating Year Group</label>
        <select id="year" name="pricingType"
        class="w-full md:w-80 h-10 border-2 border-upsaBlue3 focus:outline-none focus:border-upsaBlue text-upsaBlue rounded px-2 md:px-3 py-0 md:py-1 tracking-wider">
        <option value="All" selected="">All</option>
        <option value="PR">2022</option>
        <option value="PR">2023</option>
        <option value="PR">2024</option>


      </select>
    </div>
    </form>
     </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 lg:px-32 w-full p-4">


        @for ($i = 0; $i < 20; $i++)

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
            <img class="rounded-t-lg" src="{{asset('rss/profile_blank.png')}}" alt="" />

        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-lg font-bold text-gray-900 uppercase">Edward Mark Nii Okai Tetteh</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 text-sm ">BSc. Information technology Studies</p>

        </div>

        </div>

        @endfor
<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
    <img class="rounded-t-lg" src="rss/8th.png" alt="" />

<div class="p-5">
    <a href="#">
        <h5 class="mb-2 text-lg font-bold text-gray-900 uppercase">Edward Mark Nii Okai Tetteh</h5>
    </a>
    <p class="mb-3 font-normal text-gray-700 text-sm ">BSc. Information technology Studies</p>

</div>
</div>
<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
    <img class="rounded-t-lg" src="rss/8th.png" alt="" />

<div class="p-5">
    <a href="#">
        <h5 class="mb-2 text-lg font-bold text-gray-900 uppercase">Edward Mark Nii Okai Tetteh</h5>
    </a>
    <p class="mb-3 font-normal text-gray-700 text-sm ">BSc. Information technology Studies</p>

</div>
</div>
<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
    <img class="rounded-t-lg" src="rss/8th.png" alt="" />

<div class="p-5">
    <a href="#">
        <h5 class="mb-2 text-lg font-bold text-gray-900 uppercase">Edward Mark Nii Okai Tetteh</h5>
    </a>
    <p class="mb-3 font-normal text-gray-700 text-sm ">BSc. Information technology Studies</p>

</div>
</div>
<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
    <img class="rounded-t-lg" src="rss/8th.png" alt="" />

<div class="p-5">
    <a href="#">
        <h5 class="mb-2 text-lg font-bold text-gray-900 uppercase">Edward Mark Nii Okai Tetteh</h5>
    </a>
    <p class="mb-3 font-normal text-gray-700 text-sm ">BSc. Information technology Studies</p>

</div>
</div>
<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
    <img class="rounded-t-lg" src="rss/8th.png" alt="" />

<div class="p-5">
    <a href="#">
        <h5 class="mb-2 text-lg font-bold text-gray-900 uppercase">Edward Mark Nii Okai Tetteh</h5>
    </a>
    <p class="mb-3 font-normal text-gray-700 text-sm">BSc. Information technology Studies</p>

</div>
</div>
<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
    <img class="rounded-t-lg" src="rss/8th.png" alt="" />

<div class="p-5">
    <a href="#">
        <h5 class="mb-2 text-lg font-bold text-gray-900 uppercase">Edward Mark Nii Okai Tetteh</h5>
    </a>
    <p class="mb-3 font-normal text-gray-700 text-sm">BSc. Information technology Studies</p>

</div>
</div>
<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
    <img class="rounded-t-lg" src="rss/8th.png" alt="" />

<div class="p-5">
    <a href="#">
        <h5 class="mb-2 text-lg font-bold text-gray-900 uppercase ">Edward Mark Nii Okai Tetteh</h5>
    </a>
    <p class="mb-3 font-normal text-gray-700 text-sm ">BSc. Information technology Management</p>

</div>
</div>
<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
    <img class="rounded-t-lg" src="rss/8th.png" alt="" />

<div class="p-5">
    <a href="#">
        <h5 class="mb-2 text-lg font-bold text-gray-900 uppercase ">Edward Mark Nii Okai Tetteh</h5>
    </a>
    <p class="mb-3 font-normal text-gray-700 text-sm ">BSc. Information technology Management</p>

</div>
</div>




    </div>
  </section>


@endsection

@extends('layout')
@section('title', 'Register')

@section('content')

<div class="md:py-20 bg-gray-100">
    <!-- Container -->
    <div class="mx-auto">
      <div class="flex justify-center px-6 py-12 ">
        <!-- Row -->
        <div class="w-full xl:w-3/4 lg:w-11/12 flex shadow-lg">
          <!-- Col -->
          <div
            class="w-full h-auto bg-gray-400  hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
            style="background-image: url('rss/bannerUPSA.jpg')"
          ></div>
          <!-- Col -->
          <div
            class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none"
          >
            <h3 class="py-4 text-3xl font-black text-center text-gray-800">
              Register as an alumni
            </h3>
            <form class="px-8 py-6 bg-white rounded">
              <div class="mb-4 md:flex md:justify-start w-full">
                <div class="mb-4 md:mr-2 md:mb-0 flex-grow">
                  <label
                    class="block mb-2 text-sm font-bold text-gray-700"
                    for="firstName"
                  >
                    First Name
                  </label>
                  <input
                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    id="firstName"
                    type="text"
                    placeholder="First Name"
                    required
                  />
                </div>
                <div class="mb-4 md:mr-2 md:mb-0 md:ml-2 flex-grow">
                  <label
                    class="block mb-2 text-sm font-bold text-gray-700"
                    for="otherNames"
                  >
                    Other Names
                  </label>
                  <input
                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    id="otherNames"
                    type="text"
                    placeholder="Other Names"
                  />
                </div>
                <div class="md:ml-2 flex-grow">
                  <label
                    class="block mb-2 text-sm font-bold text-gray-700"
                    for="lastName"
                  >
                    Last Name
                  </label>
                  <input
                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    id="lastName"
                    type="text"
                    placeholder="Last Name"
                    required
                  />
                </div>
              </div>
              <style>
                #maiden {
                  display: none;
                }
              </style>

              <div class="mb-4 md:flex w-full">
                <div>
                  <label
                    for="gender"
                    class="block mb-2 text-sm font-bold text-gray-700"
                    >Gender</label
                  >
                  <select
                    id="gender"
                    class="border border-gray-300 text-gray-900 text-sm rounded shadow focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                    onchange="toggleMaiden()"
                  >
                    <option value="" selected>Select your Gender</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                  </select>
                </div>

                <div class="md:ml-2 flex-grow w-full" id="maiden">
                  <label
                    class="block mb-2 text-sm font-bold text-gray-700"
                    for="maidenName"
                  >
                    Maiden Name of Female
                  </label>
                  <input
                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    id="maidenName"
                    type="text"
                    placeholder="Maiden Name"
                    required
                  />
                </div>
              </div>



              <script>
                function toggleMaiden() {
                  var genderSelect = document.getElementById("gender");
                  var maidenDiv = document.getElementById("maiden");
                  maidenDiv.style.transition = "transition: display 0.5s ease;"

                  if (genderSelect.value === "F") {
                    maidenDiv.style.display = "block";
                  } else {
                    maidenDiv.style.display = "none";
                  }
                }
              </script>



              <div class="mb-4 md:flex md:justify-start w-full">
                <div class="mb-4 md:mr-2 md:mb-0 flex-grow">
                  <label
                    class="block mb-2 text-sm font-bold text-gray-700"
                    for="email"
                  >
                    Personal Email
                    <!-- <span class="text-gray-400 text-xs"
                      >(not student email)</span
                    > -->
                  </label>
                  <input
                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    id="email"
                    type="email"
                    placeholder="eg. example@outlook.com"
                    required
                  />
                </div>

                <div class="md:ml-2 flex-grow">
                  <label
                    class="block mb-2 text-sm font-bold text-gray-700"
                    for="lastName"
                  >
                    Phone Number
                  </label>
                  <input
                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    id="mobile"
                    type="text"
                    placeholder="eg. +233 123 456 789"
                    required
                  />
                </div>
              </div>
              <div class="mb-4 md:flex md:justify-start w-full">
                <div class="mb-4 md:mr-2 md:mb-0 flex-grow">
                  <label
                    class="block mb-2 text-sm font-bold text-gray-700"
                    for="email"
                  >
                    Year of Admission
                  </label>
                  <input
                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    id="admissionYear"
                    type="number"
                    placeholder="Enter year of admission"
                    required
                  />
                </div>

                <div class="md:ml-2 flex-grow">
                  <label
                    class="block mb-2 text-sm font-bold text-gray-700"
                    for="lastName"
                  >
                    Year of Completion
                  </label>
                  <input
                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    id="completionYear"
                    type="number"
                    placeholder="Enter year of completion"
                    required
                  />
                </div>
              </div>
              <div class="mb-4 md:flex md:justify-start w-full">
                <div class="mb-4 md:mr-2 md:mb-0 flex-grow">
                  <label
                    class="block mb-2 text-sm font-bold text-gray-700"
                    for="email"
                  >
                    Course of Study
                  </label>
                  <input
                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    id="admissionYear"
                    type="number"
                    placeholder="Enter course of study"
                    required
                  />
                </div>

                <div class="md:ml-2 flex-grow">
                  <label
                    class="block mb-2 text-sm font-bold text-gray-700"
                    for="lastName"
                  >
                    Occupation/Place of Work
                  </label>
                  <input
                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    id="completionYear"
                    type="number"
                    placeholder="What are you doing now"
                    required
                  />
                </div>
              </div>

              <div class="m-6 text-center">
                <button
                  class="w-fit px-6 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                  type="submit"
                >
                  Register
                </button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

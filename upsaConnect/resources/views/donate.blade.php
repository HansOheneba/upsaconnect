@extends('layout')
@section('title', 'UPSA Alumni Connect')

@section('content')





<section class="bg-upsaBlue2 py-20 text-white" >
    <div class="text-center">
      <h1 class="text-5xl font-extrabold pb-5">Giving to UPSA</h1>
    </div>
   <div class="max-w-lg mx-auto ">
    <h1 class="text-2xl text-center font-bold pb-3">How to Make a Gift</h1>
    <p class="">
      Thank you for considering a gift to UPSA. If you have questions or need assistance making a gift, you can call <a class="underline" href="tel: +233 243851495">+233(0) 243851495</a> or email <a class="underline" href="mailto: upsa.global.alumni@upsamail.edu.gh"> upsa.global.alumni@upsamail.edu.gh</a><br><br>
      There are several ways to make a gift. If you would like to make a gift today to the University, Schools, or affiliates, you may do so by <a class="underline" href="#DirectPayment">credit card</a>, <a class="underline" href="#">Mobile Money</a>, or <a class="underline" href="#wire">wire transfer</a> using our online giving platform.
      <br>
      <br>

      If you would like to give a gift other than money to the school, please contact the the school on <a class="underline" href="tel: +233 243851495">+233(0) 243851495</a> or email <a class="underline" href="mailto: upsa.global.alumni@upsamail.edu.gh"> upsa.global.alumni@upsamail.edu.gh</a></p>
   </div>
  </section>

 <div class="p-20">
  <div>
   <h1 id="DirectPayment" class="text-2xl font-bold text-center"> Give Direct</h1>
  </div>
  <form id="paymentForm" class="max-w-sm mx-auto scroll-smooth">
    <div class="form-group">
      <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900">First Name</label>
      <input type="text" id="first-name" class="block w-full p-2.5 border border-gray-300 text-gray-900" />
    </div>
    <div class="form-group">
      <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900">Last Name</label>
      <input type="text" id="last-name" class="block w-full p-2.5 border border-gray-300 text-gray-900" />
    </div>
      <div class="form-group">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email Address</label>
        <input type="email" id="email-address" class="block w-full p-2.5 border border-gray-300 text-gray-900" required />
      </div>
      <div class="form-group">
        <label for="amount" class="block mb-2 text-sm font-medium text-gray-900">Amount</label>
        <input type="tel" id="amount" class="block w-full p-2.5 border border-gray-300 text-gray-900" required />
      </div>

      <div class="form-submit py-5 flex justify-center">
        <button type="submit" onclick="payWithPaystack()" class="bg-upsaBlue font-bold text-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:focus:ring-blue-800"> Give </button>
      </div>
    </form>
 </div>

    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script src="payment.js"></script>




    <section class="bg-upsaBlue3 py-20">
      <div class="">
        <h1 class="text-2xl font-bold text-center">Wire Transfer</h1>
      <p class="text-center">Wire transfer instructions for charitable gifts to the community</p>




      <div id="wire" class="">
        <!-- Container -->
        <div class="mx-auto">
          <div class="flex justify-center px-6 py-12">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex justify-center">
              <!-- Col -->
              <div
                class="w-full h-auto bg-gray-800 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                style="background-image: url('rss/donate_girl.jpg')"
              ></div>
              <!-- Col -->
              <div
                class="w-full lg:w-5/12 bg-white p-5 rounded-lg lg:rounded-l-none"
              >
                  <div class="pb-5 flex flex-col gap-2">
                    <p class="font-bold text-lg">Mobile Money</p>
                    <p><span class="font-semibold">Merchant ID:</span> 994593</p>
                    <p><span class="font-semibold">Mobile Money Number:</span> 0597208004.</p>
                    <p><span class="font-semibold">Account Name:</span> UPSA Global Alumni Association.</p>
                  </div>
                  <div class="pb-5 flex flex-col gap-2">
                    <p class="font-bold text-lg">GT Bank</p>
                    <p><span class="font-semibold">Account Name:</span> UPSA Global Alumni Association</p>
                    <p><span class="font-semibold">Account number:</span> 201122735110</p>
                    <p><span class="font-semibold">Swift Code:</span> GTBIGHACXXX.</p>
                  </div>
                  <div class="flex flex-col gap-2">
                    <p class="font-bold text-lg">Cal Bank</p>
                    <p><span class="font-semibold">Account Name:</span> UPSA Global Alumni Association</p>
                    <p><span class="font-semibold">Account number:</span> 1400005679631</p>
                    <p><span class="font-semibold">Swift Code:</span> ACCCGHAC</p>
                    <p><span class="font-semibold">Branch Code:</span> 140109, Legon Banking Square. </p>
                    <p>Dial *771*10# <span class="font-semibold">Institution Code:</span> 1850 </p>
                  </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection

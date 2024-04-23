@extends('layout')
@section('title', 'UPSA Alumni Connect')

@section('content')

<section class="md:px-20 md:py-15 pb-10 bg-slate-100">
    <a href="{{ url()->previous() }}"> <div class="flex items-center gap-2 hover:text-upsaBlue2 text-lg p-5">
     <i class="fa-solid fa-arrow-left"></i>
     <h1 class=" font-semibold">Back
 </div></a>
    <div class=" border-2 mx-auto px-5 py-5 bg-white shadow-lg max-w-5xl">
     <div class=" p-6 max-w-4xl flex flex-col gap-5">
     <h2 class="text-2xl font-semibold mb-4">ReactJS Frontend Developer</h2>

     <div class="flex items-center gap-1">
         <i class="fa-solid fa-globe"></i>
         <h2 class="font-semibold text-sm text-gray-800">
             Google Inc
             </h2>
       </div>

     <div class="flex flex-col">
         <p class="text-sm text-gray-400">Type</p>
         <h2 class="font-semibold text-sm text-gray-800">
             Full Time
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





         <p class="mb-6">We are seeking a skilled ReactJS developer with experience in constructing image labeling applications to join our team. As part of this role, you will contribute to the development of cutting-edge solutions in the field of image annotation and labeling.</p>

         <h3 class="text-xl font-semibold mb-2">Responsibilities:</h3>
         <ul class="list-disc pl-6 mb-6">
             <li>Collaborate with the team to design and develop ReactJS-based image labeling applications.</li>
             <li>Implement user-friendly interfaces for efficient image annotation processes.</li>
             <li>Integrate backend services for seamless data management and processing.</li>
             <li>Ensure high performance and responsiveness of the applications.</li>
             <li>Collaborate with UX/UI designers to optimize the user experience.</li>
             <li>Stay updated with the latest technologies and best practices in web development.</li>
         </ul>

         <h3 class="text-xl font-semibold mb-2">Requirements:</h3>
         <ul class="list-disc pl-6 mb-6">
             <li>Proficiency in ReactJS and its core principles.</li>
             <li>Experience in building image labeling applications or similar projects.</li>
             <li>Strong understanding of front-end technologies such as HTML5, CSS3, and JavaScript.</li>
             <li>Familiarity with RESTful APIs and asynchronous request handling.</li>
             <li>Good knowledge of Git version control system.</li>
             <li>Excellent problem-solving skills and attention to detail.</li>
             <li>Ability to work independently and in a team environment.</li>
             <li>Bachelor's degree in Computer Science or a related field (preferred).</li>
         </ul>

         <p class="mb-6">The compensation for this position is GHS 4,000 per feature completed on the project, with the potential for additional incentives based on performance.</p>

         <p>If you are passionate about creating innovative solutions in image labeling and annotation, we encourage you to apply and become part of our dynamic team.</p>

         <div class="flex flex-col gap-3 mt-4">
             <p class="text-sm font-medium text-gray-500">Tags:</p>
             <div class="flex gap-2">
                 <p class="bg-upsaBlue3 w-fit text-xs p-2 text-upsaBlue2 rounded-2xl">Information Technology</p>
                 <p class="bg-upsaBlue3 w-fit text-xs p-2 text-upsaBlue2 rounded-2xl">PHP Developer</p>
                 <p class="bg-upsaBlue3 w-fit text-xs p-2 text-upsaBlue2 rounded-2xl">SEO</p>
                 <p class="bg-upsaBlue3 w-fit text-xs p-2 text-upsaBlue2 rounded-2xl">UX UI</p>
                 <p class="bg-upsaBlue3 w-fit text-xs p-2 text-upsaBlue2 rounded-2xl">Web Development</p>
             </div>
         </div>


           <div class="py-10">
             <div class="max-w-lg p-6 mx-auto bg-blue-200 rounded-lg shadow-lg">
                 <h2 class="text-2xl font-semibold mb-4">How to Apply</h2>

                 <p class="mb-4">To apply for this position, please follow these steps:</p>

                 <ol class="list-decimal pl-6 mb-6">
                     <li>Email your CV, cover letter, and any relevant documents to <a href="mailto:hr@yotesolutions.com" class="text-blue-500 hover:underline">hr@yotesolutions.com</a>.</li>
                     <li>Include the position title in the subject line of your email.</li>
                     <li>Attach your CV and cover letter as PDF or Word documents.</li>
                     <li>Provide all relevant information about your qualifications and experience in the body of the email.</li>
                     <li>Double-check that all necessary documents and information are included before sending.</li>
                 </ol>

                 <p>If you have any questions or need further assistance, feel free to contact our HR team at <a href="mailto:hr@yotesolutions.com" class="text-blue-500 hover:underline">hr@yotesolutions.com</a>.</p>
             </div>

           </div>
     </div>






    </div>


 </section>





@endsection

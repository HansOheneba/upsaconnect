@extends('layout')
@section('title', 'UPSA Alumni Connect')

@section('content')


    <section class="md:px-20 md:py-15 pb-10 bg-slate-100">
        <a href="{{ url()->previous() }}">
            <div class="flex items-center gap-2 hover:text-upsaBlue2 text-lg p-5">
                <i class="fa-solid fa-arrow-left"></i>
                <h1 class=" font-semibold">Back
            </div>
        </a>
        <div class=" mx-auto px-5 py-5 bg-white shadow-lg max-w-5xl">
            <div class="flex flex-col items-center px-6 py-8 mx-auto lg:py-0">
                <a href="#" class="flex items-center my-6 text-2xl font-semibold text-gray-900">
                    <i class=" text-6xl fa-solid fa-paste"></i>
                </a>

                <div class="w-full  md:mt-0 xl:p-0">
                    <!-- <div class="bg-red-100 border border-red-400 text-red-700 px-5 py-2 rounded text-center " role="alert">
                         <strong class="font-bold">Login Failed!</strong>
                         <span class="block sm:inline">Invalid credentials.</span>
                       </div> -->
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8 bg-white mt-3">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl ">
                            Post A Job
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="#">
                            <div>
                                <label for="jobTitle" class="block mb-2 text-sm font-medium text-gray-900 ">Position
                                    Title</label>
                                <input type="text" name="jobTitle" id="jobTitle"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                    placeholder="Enter position title" required="">
                            </div>
                            <div>
                                <label for="company" class="block mb-2 text-sm font-medium text-gray-900 ">Company
                                    Name</label>
                                <input type="company" name="company" id="company"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                    placeholder="Enter name of company" required="">
                            </div>
                            <div>
                                <label for="location" class="block mb-2 text-sm font-medium text-gray-900">Location</label>
                                <input type="location" name="location" id="location"
                                    placeholder="Enter location of hiring firm"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                    required="">
                            </div>
                            <div class="flex gap-5">

                                <div>
                                    <label for="style" class="block mb-2 text-sm font-medium text-gray-900 ">Work
                                        Style</label>
                                    <select id="style"
                                        class="w-full h-10 bg-gray-50 border border-gray-300 focus:outline-none focus:border-upsaBlue text-upsaBlue rounded-lg px-2 md:px-3 py-0 md:py-1 tracking-wider ">
                                        <option selected>Select Work Style</option>
                                        <option value="ip">In-person</option>
                                        <option value="hybrid">Hybrid</option>
                                        <option value="remote">Remote</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="type" class="block mb-2 text-sm font-medium text-gray-900">Role
                                        Type</label>
                                    <select id="type"
                                        class="w-full h-10 bg-gray-50 border border-gray-300 focus:outline-none focus:border-upsaBlue text-upsaBlue rounded-lg px-2 md:px-3 py-0 md:py-1 tracking-wider">
                                        <option selected>Select Role Type</option>
                                        <option value="ft">Full Time</option>
                                        <option value="pt">Part-Time</option>
                                        <option value="freelance">Freelance</option>
                                        <option value="internship">Internship</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="feild" class="block mb-2 text-sm font-medium text-gray-900">Related Area
                                        of Study</label>
                                    <select id="feild"
                                        class="w-full h-10 bg-gray-50 border border-gray-300 focus:outline-none focus:border-upsaBlue text-upsaBlue rounded-lg px-2 md:px-3 py-0 md:py-1 tracking-wider">
                                        <option selected>Select Related Field</option>
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
                            </div>


                            <div>
                                <label for="desc" class="block mb-2 text-sm font-medium text-gray-900 ">Description</label>
                                <div id="desc-editor" class="rounded-b-lg" style="height: 150px;"></div>
                                <input type="hidden" name="description" id="desc" />
                            </div>

                            <div>
                                <label for="howtoapply" class="block mb-2 text-sm font-medium text-gray-900">How to Apply</label>
                                <div id="howtoapply-editor" class="rounded-b-lg" style="height: 150px;"></div>
                                <input type="hidden" name="how_to_apply" id="howtoapply" />
                            </div>

                            <div>
                                <label for="tags" class="block mb-2 text-sm font-medium text-gray-900">Tags</label>
                                <input type="text" id="tags" name="tags"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                    placeholder="Enter at least 3 tags">
                                <p class="mt-2 text-sm text-gray-500">Enter tags separated by commas (' , ').</p>
                            </div>



                            <div class="flex justify-center">
                                <button type="submit"
                                    class="w-fit text-white bg-upsaBlue hover:bg-upsaBlue2 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Submit
                                    for review</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



        </div>






    </section>



    <script>
        tinymce.init({
            selector: '#desc',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [{
                    value: 'First.Name',
                    title: 'First Name'
                },
                {
                    value: 'Email',
                    title: 'Email'
                },
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject(
                "See docs to implement AI Assistant")),
        });
        tinymce.init({
            selector: '#howtoapply',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [{
                    value: 'First.Name',
                    title: 'First Name'
                },
                {
                    value: 'Email',
                    title: 'Email'
                },
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject(
                "See docs to implement AI Assistant")),
        });
    </script>









@endsection

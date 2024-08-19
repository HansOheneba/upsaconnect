@extends('layoutadmin')
@section('title', 'alumni')

@section('content')

            <div class="flex flex-col gap-2 fixed p-10 ">
                <h1 class="font-bold text-xl">Verify Alumni</h1>
                <p class="font-semibold text-sm text-gray-500">Click the "Verify" button after confirmation of the entry.</p>
            </div>


            <div class=" w-full px-10 py-10 flex items-center justify-center">
                <div class=" shadow border border-gray-200 w-full bg-white">
                    <div class="flex justify-between items-center px-10 py-5 border-b">
                        <h1 class="font-semibold text-xl">
                            All Entries <span class="text-gray-500 text-nd ">(9)</span>
                        </h1>

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
                                                    <th scope="col" class="px-6 py-2">Name</th>
                                                    <th scope="col" class="px-6 py-2">Year Completed</th>
                                                    <th scope="col" class="px-6 py-2">Course of Study</th>
                                                    <th scope="col" class="py-2"></th>
                                                    <th scope="col" class="py-2"></th>
                                                </tr>
                                            </thead>
                                            <tbody class="">
                                                @for ($i = 0; $i < 9; $i++)

                                                <tr class="border-b border-gray-200">
                                                    <td class="whitespace-nowrap px-6 py-4 font-medium">
                                                        <div class="flex items-center gap-3"> Abnowel Ewurabena Sam</div>
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4">2024</td>
                                                    <td class="whitespace-nowrap px-6 py-4">BSc Information Technology Management</td>

                                                    <td>
                                                        <button class="rounded px-6 py-2 flex justify-center items-center gap-2 hover:bg-slate-50 bg-slate-100">
                                                            <img src="rss/trash-2.svg" alt="delete button">
                                                            <span class="font-semibold">Remove</span>
                                                        </button>
                                                        <td>
                                                            <button class=" bg-green-500 hover:bg-green-400 rounded px-6 py-2 flex justify-center items-center gap-2">
                                                                <i class="fa-solid fa-check text-white   "></i>
                                                              <span class="text-white font-semibold">  Verify</span>
                                                            </button>
                                                        </td>

                                                    </td>
                                                </tr>

                                                @endfor







                                            </tbody>
                                        </table>

                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endsection

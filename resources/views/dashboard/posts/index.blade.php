@extends('layouts.dashboard')

@section('content')
    <!--Console Content-->

    <div class="flex flex-wrap">
        <div class="flex flex-row flex-wrap flex-grow mt-2">

            <div class="w-full p-3">
                <div class="flex justify-between items-center">
                    <h2 class="text-3xl">All posts</h2>
                    <div>
                        <a href="#" class="btn-teal">New Post</a>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded my-6">
                    <table class="text-left w-full border-collapse">
                        <thead>
                        <tr>
                            <th class="py-4 px-6 bg-gray-100 font-bold uppercase text-sm text-gray-900 border-b border-gray-400">
                                ID
                            </th>
                            <th class="py-4 px-6 bg-gray-100 font-bold uppercase text-sm text-gray-900 border-b border-gray-400">
                                Title
                            </th>
                            <th class="py-4 px-6 bg-gray-100 font-bold uppercase text-sm text-gray-900 border-b border-gray-400">
                                Published
                            </th>
                            <th class="py-4 px-6 bg-gray-100 font-bold uppercase text-sm text-gray-900 border-b border-gray-400">
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="hover:bg-gray-200">
                            <td class="py-4 px-6 border-b border-gray-300">1</td>
                            <td class="py-4 px-6 border-b border-gray-300">New York</td>
                            <td class="py-4 px-6 border-b border-gray-300">
                                <span class="rounded-full bg-teal-500 uppercase px-2 py-1 text-xs text-white font-bold mr-3">Published</span>
                            </td>
                            <td class="py-4 px-6 border-b border-gray-300">
                                <a href="#"
                                   class="btn-teal text-xs"><i
                                        class="fa fa-edit"></i></a>
                                <a href="#"
                                   class="btn-blue text-xs"><i
                                        class="fa fa-external-link"></i></a>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-200">
                            <td class="py-4 px-6 border-b border-gray-300">2</td>
                            <td class="py-4 px-6 border-b border-gray-300">New York</td>
                            <td class="py-4 px-6 border-b border-gray-300">
                                <span class="rounded-full bg-blue-500 uppercase px-2 py-1 text-xs text-white font-bold mr-3">Scheduled</span>
                            </td>
                            <td class="py-4 px-6 border-b border-gray-300">
                                <a href="#"
                                   class="btn-teal text-xs"><i
                                        class="fa fa-edit"></i></a>
                                <a href="#"
                                   class="btn-blue text-xs"><i
                                        class="fa fa-external-link"></i></a>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-200">
                            <td class="py-4 px-6 border-b border-gray-300">3</td>
                            <td class="py-4 px-6 border-b border-gray-300">New York</td>
                            <td class="py-4 px-6 border-b border-gray-300">
                                <span class="rounded-full bg-teal-500 uppercase px-2 py-1 text-xs text-white font-bold mr-3">Published</span>
                            </td>
                            <td class="py-4 px-6 border-b border-gray-300">
                                <a href="#"
                                   class="btn-teal text-xs"><i
                                        class="fa fa-edit"></i></a>
                                <a href="#"
                                   class="btn-blue text-xs"><i
                                        class="fa fa-external-link"></i></a>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-200">
                            <td class="py-4 px-6 border-b border-gray-300">4</td>
                            <td class="py-4 px-6 border-b border-gray-300">New York</td>
                            <td class="py-4 px-6 border-b border-gray-300">
                                <span class="rounded-full bg-teal-500 uppercase px-2 py-1 text-xs text-white font-bold mr-3">Published</span>
                            </td>
                            <td class="py-4 px-6 border-b border-gray-300">
                                <a href="#"
                                   class="btn-teal text-xs"><i
                                        class="fa fa-edit"></i></a>
                                <a href="#"
                                   class="btn-blue text-xs"><i
                                        class="fa fa-external-link"></i></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>

        <!--/ Console Content-->
@endsection

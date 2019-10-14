@extends('layouts.dashboard')

@section('content')
    <!--Console Content-->

    <div class="flex flex-wrap">
        <div class="flex flex-row flex-wrap flex-grow mt-2">

            <div class="w-full p-3">
                <div class="flex justify-between items-center">
                    <h2 class="text-3xl font-medium">Display Post</h2>
                </div>
                <div class="bg-white shadow-md rounded my-6">
                    <div class="bg-white border rounded shadow min-h-screen">
                        <div class="py-16 px-32 text-xl">
                            <post />
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <!--/ Console Content-->
@endsection

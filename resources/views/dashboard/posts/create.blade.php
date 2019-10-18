@extends('layouts.dashboard')

@section('content')
    <!--Console Content-->

    <div class="flex flex-wrap -mx-4">
        <div class="flex flex-row flex-wrap flex-grow mt-2">

            <div class="w-full p-3">
                <div class="flex justify-between items-center">
                    <h2 class="text-3xl font-medium">Create new post</h2>
                </div>
                <create-post :tags="{{ $tags }}"/>
            </div>
        </div>

        <!--/ Console Content-->
@endsection

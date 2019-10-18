@extends('layouts.dashboard')

@section('content')
    <!--Console Content-->

    <div class="flex flex-wrap">
        <div class="flex flex-row flex-wrap flex-grow mt-2">

            <div class="w-full p-3">
                <posts :data="{{ $posts }}"/>
            </div>


        </div>

        <!--/ Console Content-->
@endsection

@extends('backend.layout.layout')

@section('content')
    @if (session()->has('message'))
        <div class="pr-10 mt-7 float-end font-semibold text-green-500 role="alert">
            {{ session()->get('message') }}
        </div>
    @endif
    <main>
        <!-- // dashboard  start-->
        <section class="lg:ml-[15rem] mx-4 mt-[1rem] bg-gray-900 w-auto h-auto text-white p-[2.5rem] rounded-md">
            <h1 class="text-xl">Home / <span class="text-[#07ccec]">Dashboard</span></h1>
            <!-- // card -->
            <div class="lg:flex lg:space-x-4">
                <div class="lg:w-1/3 bg-gray-800 mt-5 rounded-md p-5">
                    card 1
                </div>
                <div class="lg:w-1/3 bg-gray-800 mt-5 rounded-md p-5">
                    card 2
                </div>
                <div class="lg:w-1/3 bg-gray-800 mt-5 rounded-md p-5">
                    card 3
                </div>
            </div>
            <!-- chart -->
            <div class="lg:flex lg:space-x-4">
                <div class="lg:w-1/2 h-60 bg-gray-800 mt-5 rounded-md p-5">
                    <canvas id="pieChart"></canvas>
                </div>
                <div class="lg:w-1/2 h-60 bg-gray-800 mt-5 rounded-md p-5">
                    <canvas id="barChart"></canvas>
                </div>
            </div>

            <!-- table -->
            <div class="bg-gray-800 mt-5 rounded-md p-5">
                table
            </div>
        </section>
        <!-- // dashboard  end-->
    </main>
@endsection

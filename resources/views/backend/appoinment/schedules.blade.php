@extends('backend.layout.layout')

@section('content')
<section class="lg:ml-[15rem] mt-[5rem] bg-gray-900 w-auto h-auto text-white p-[2.5rem] rounded-md">
    <div class="flex justify-between">
        <h1 class="text-xl">Home / <span class="text-[#07ccec]">Appoinment Schedules</span></h1>
    </div>
    <div class="my-6 overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-800">
                <tr>
                    <th scope="col" class="py-4 px-3">Name</th>
                    <th scope="col" class="py-4 px-3">Email</th>
                    <th scope="col" class="py-4 px-3">Number</th>
                    <th scope="col" class="py-4 px-3">Date</th>
                    <th scope="col" class="py-4 px-3">Time</th>
                    <th scope="col" class="py-4 px-3">Department</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($appoinments as $appoinment)
                    <tr class="bg-gray-700">
                    <td class="py-4 px-3">{{$appoinment->name}}</td>
                    <td class="py-4 px-3">{{$appoinment->email}}</td>
                    <td class="py-4 px-3">{{$appoinment->phone}}</td>
                    <td> {{ Carbon\Carbon::parse($appoinment->date)->format('d-M-Y' ) }}</td>
                    <td> {{ Carbon\Carbon::parse($appoinment->time)->format('g:i:s A' ) }}</td>
                    <td class="py-4 px-3">{{$appoinment->department}}</td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>


</section>
@endsection
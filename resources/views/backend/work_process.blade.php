@extends('backend.layout.layout')

@section('content')
<section class="lg:ml-[15rem] mt-[5rem] bg-gray-900 w-auto h-auto text-white p-[2.5rem] rounded-md">
    <div class="flex justify-between">
        <h1 class="text-xl">Home / <span class="text-[#07ccec]">Work Process</span></h1>
        <a href="{{route('work.create')}}" class="bg-[#07ccec] py-1.5 px-3 rounded-md text-gray-900 hover:bg-gray-700 hover:text-white duration-500">create</a>
    </div>
    <div class="my-6 overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-800">
                <tr>
                    <th scope="col" class="py-4 px-3">Heading</th>
                    <th scope="col" class="py-4 px-3">Title</th>
                    <th scope="col" class="py-4 px-3">Number</th>
                    <th scope="col" class="py-4 px-3">Image</th>
                    <th scope="col" class="py-4 px-3">Sort Desc.</th>
                    <th scope="col" class="py-4 px-3">Description</th>
                    <th scope="col" class="py-4 px-3">edit</th>
                    <th scope="col" class="py-4 px-3">delete</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-gray-700">
                    <td class="py-4 px-3">toufiqur</td>
                    <td class="py-4 px-3">sobuj</td>
                    <td class="py-4 px-3">24</td>
                    <td class="py-4 px-3">nischintapur</td>
                    <td class="py-4 px-3">nischintapur</td>
                    <td class="py-4 px-3">sobuj@gmail.com</td>
                    <td class="py-4 px-3"><a class="bg-green-600 py-2 px-4 rounded-md duration-300 hover:bg-green-700" href=""><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td class="py-4 px-3"><a class="bg-red-600 py-2 px-4 rounded-md duration-300 hover:bg-red-700" href=""><i class="fa-solid fa-trash"></i></a></td>
                </tr>
            </tbody>
        </table>
    </div>


</section>
@endsection
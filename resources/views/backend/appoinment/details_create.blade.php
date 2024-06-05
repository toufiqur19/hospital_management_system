@extends('backend.layout.layout')

@section('content')
<section class="lg:ml-[15rem] mt-[5rem] bg-gray-900 w-auto h-auto text-white p-[2.5rem] rounded-md">
    <div class="flex justify-between">
        <h1 class="text-xl">Appoinment Details/ <span class="text-[#07ccec]">Create</span></h1>
        <a href="{{route('admin.appoinment.details')}}" class="bg-[#07ccec] py-1.5 px-3 rounded-md text-gray-900 hover:bg-gray-700 hover:text-white duration-500">Back</a>
    </div>
    <form class="space-y-4 md:space-y-6" action="#" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="lg:flex lg:space-x-5">
            <div class="space-y-2 w-full">
                <label for="">Name</label>
                <input type="text" name="name" id="name" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your name">
            </div>
            <div class="space-y-2 w-full">
                <label for="">Email</label>
                <input type="text" name="email" id="email" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your email">
            </div>
        </div>

        <div class="lg:flex lg:space-x-5">
            <div class="space-y-2 w-full">
                <label for="">Phone</label>
                <input type="text" name="phone" id="phone" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your phone">
            </div>
            <div class="space-y-2 w-full">
                <label for="">Date</label>
                <input type="date" name="date" id="date" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your date">
            </div>
        </div>

        <div class="lg:flex lg:space-x-5">
            <div class="space-y-2 w-full">
                <label for="">Time</label>
                <input type="time" name="time" id="time" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your time">
            </div>
            <div class="space-y-2 w-full">
                <label for="">Department</label>
                <div class="pt-3">
                    <select
                      class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none"
                    >
                      <option value="Choice Department" selected>
                        Choice Department
                      </option>
                      <option value="">sobuj1</option>
                      <option value="">sobuj2</option>
                      <option value="">sobuj3</option>
                      <option value="">sobuj4</option>
                    </select>
                  </div>
            </div>
        </div>
        
        <button type="submit" class=" text-gray-800 bg-[#07ccec] hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-md px-5 py-2.5 text-center ">Submit</button>
        
    </form>
</section>
@endsection
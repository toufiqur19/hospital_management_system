@extends('layout.app')

@section('content')
<main class="">
    @include('fontend.banner',[
        'title'=>'Appointment',
        'image'=>'assets/img/contact1.png',
        ])
  

    <!-- Appointment section start-->
    <section class="bg-[#f1f5f9]">
        <div class="py-10 lg:px-40 px-10">
          <h2
            class="footer_title tracking-wide text-center text-[#e12454] pt-3 font-bold text-2xl"
          >
            Appointment
          </h2>
          <h4 class="text-center pb-10 pt-5 text-xl">
            Choose Our Hospital Choose The Best Care For Yourself
          </h4>
          <div class="lg:flex rounded-md py-5 lg:space-x-5">
            <div class="lg:w-1/2 text-gray-600 py-4 px-5 flex space-x-2 bg-white">
              <div class="bg-[#07ccec] px-4 rounded-md flex justify-center items-center">
                <i class="fa-solid fa-clock text-4xl text-white"></i>                
              </div>
              <div>
                <h1>Opening Hours</h1>
                <p>Mon to Sat: 8:00am - 9:00pm</p>
                <p class="text-[#07ccec]">Sunday - Closed</p>
              </div>
            </div>

            <div class="lg:w-1/2 text-gray-600 py-4 px-5 flex space-x-2 bg-white">
              <div class="bg-[#07ccec] px-4 rounded-md flex justify-center items-center">
                <i class="fa-solid fa-clock text-4xl text-white"></i>                
              </div>
              <div>
                <h1>Opening Hours</h1>
                <p>Mon to Sat: 8:00am - 9:00pm</p>
                <p class="text-[#07ccec]">Sunday - Closed</p>
              </div>
            </div>
          </div>
          @if (session()->has('message'))
          <div class="pr-10 my-4 top-10 float-end font-semibold text-green-400 role="alert">
              {{ session()->get('message') }}
          </div>
          @endif
          <div
            class="lg:flex lg:space-x-10 lg:space-y-0 space-y-8 cursor-pointer"
          >
          
            <div class="lg:w-1/2 lg:mt-14 h-[25.5rem] bg-[#07ccec] rounded-md">
                <img class="h-[24rem] lg:mt-6" src="{{asset('assets/img/appmointment.png')}}" alt="" />
            </div>
            <div class="lg:w-1/2">
              <h1 class="font-semibold text-xl text-gray-600">
                Book An Appointment
              </h1>
              <div class="text-black">
                <div class="flex mt-5">
                  <span
                    class="inline-flex items-center px-3 text-sm bg-[#07ccec] border rounded-e-0 border-[#07ccec] border-e-0 rounded-s-md"
                  >
                  <i class="fa-solid fa-user text-[#e12454] text-lg"></i>
                  </span>
                  <form action="{{route('appointment.create.process')}}" method="POST">
                    @csrf
                  <input
                    type="text" name="name"
                    id="website-admin"
                    class="rounded-none rounded-e-lg bg-transparent border-2 text-gray-900 w-[18rem] text-sm border-[#07ccec] p-2.5 outline-none"
                    placeholder="enter your name"
                  />
                </div>
                @error('name')
                <div class="text-red-500">{{$message}}</div>
                @enderror
  
                <div class="flex mt-5">
                  <span
                    class="inline-flex items-center px-3 text-sm bg-[#07ccec] border rounded-e-0 border-[#07ccec] border-e-0 rounded-s-md"
                  >
                  <i class="fa-solid fa-envelope text-[#c12454] text-lg"></i>
                  </span>
                  <input
                    type="email" name="email"
                    id="website-admin"
                    class="rounded-none rounded-e-lg bg-transparent border-2 text-gray-900 w-full text-sm border-[#07ccec] p-2.5 outline-none"
                    placeholder="enter your email"
                  />
                </div>
                @error('email')
                <div class="text-red-500">{{$message}}</div>
                @enderror
  
                <div class="flex mt-5">
                  <span
                    class="inline-flex items-center px-3 text-sm bg-[#07ccec] border rounded-e-0 border-[#07ccec] border-e-0 rounded-s-md"
                  >
                  <i class="fa-solid fa-phone-volume text-[#c12454] text-lg"></i>
                  </span>
                  <input
                    type="text" name="phone"
                    id="website-admin"
                    class="rounded-none rounded-e-lg bg-transparent border-2 text-gray-900 w-full text-sm border-[#07ccec] p-2.5 outline-none"
                    placeholder="enter your phone number"
                  />
                </div>
                @error('phone')
                <div class="text-red-500">{{$message}}</div>
                @enderror
  
                <div class="flex mt-5">
                  <span
                    class="inline-flex items-center px-3 text-sm bg-[#07ccec] border rounded-e-0 border-[#07ccec] border-e-0 rounded-s-md"
                  >
                  <i class="fa-solid fa-calendar-days text-[#e12454] text-lg"></i>
                  </span>
                  <input
                    type="date" name="date"
                    id="website-admin"
                    class="rounded-none rounded-e-lg bg-transparent border-2 text-gray-500 w-full text-sm border-[#07ccec] p-2.5 outline-none"
                    placeholder="enter your phone number"
                  />
                </div>
                @error('date')
                <div class="text-red-500">{{$message}}</div>
                @enderror
  
                <div class="flex mt-5">
                  <span
                    class="inline-flex items-center px-3 text-sm bg-[#07ccec] border rounded-e-0 border-[#07ccec] border-e-0 rounded-s-md"
                  >
                  <i class="fa-solid fa-clock text-[#e12454] text-lg"></i>
                  </span>
                  <input
                    type="time" name="time"
                    id="website-admin"
                    class="rounded-none rounded-e-lg bg-transparent border-2 text-gray-500 w-full text-sm border-[#07ccec] p-2.5 outline-none"
                    placeholder="enter your phone number"
                  />
                </div>
  
                @error('time')
                <div class="text-red-500">{{$message}}</div>
                @enderror
  
                <div class="pt-3">
                  <select name="department" class="w-full flex flex-row justify-between pl-5 py-2.5 text-gray-500 bg-transparent border-2 border-[#07ccec] rounded-md shadow outline-none text-sm">
                    <option value="Choice Department" selected>
                      Choice Department
                    </option>
                    @if($categories->count() > 0)
                      @foreach($categories as $categorie)
                        <option value="{{$categorie->department_name}}">{{$categorie->department_name}}</option>
                      @endForeach
                    @else
                    No Record Found
                    @endif   
                 </select>        
                </div>
                @error('department')
                <div class="text-red-500">{{$message}}</div>
                @enderror
                <div class="mt-5">
                  <button type="submit" class=" text-gray-800 bg-[#07ccec] hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-md px-5 py-2.5 text-center ">Submit</button>
                 
                </div>
              </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Appointment section end-->
  </main>
@endsection
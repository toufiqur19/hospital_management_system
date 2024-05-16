<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />

    <link rel="stylesheet" href="{{asset('assets/admin/admin.css')}}" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-800">
    <!-- header section start -->
    <header class="bg-gray-900 lg:px-10 px-7 flex justify-between items-center w-full h-16">
        <div class="flex items-center space-x-3">
            <a class="font-bold text-2xl whitespace-nowrap text-[#07ccec] lg:hidden" href=""
          ><span><i class="fa-solid fa-hand-holding-medical"></i></span>Hospital</a>
          <i id="bar" class="fa-solid fa-bars-staggered text-[#07ccec] text-xl lg:pl-56 cursor-pointer lg:hidden block"></i>
          <i id="time" class="fa-solid fa-xmark text-xl text-[#07ccec] lg:pl-56 cursor-pointer hidden lg:hidden"></i>
          <div class="lg:pl-[11.5rem] hidden lg:block">
            <h1 class="font-semibold text-[#07ccec]">Dashboard</h1>
          </div>
        </div>
        <nav>
            <div class="flex gap-5">
                <div class="relative text-white">
                    <i id="search_btn" class="fa-solid fa-magnifying-glass text-[#07ccec] text-xl mt-2 cursor-pointer lg:hidden"></i>
                    <input class="px-3 w-72 py-1 hidden lg:block text-sm mt-1 rounded-full bg-transparent outline-none border-2 border-[#07ccec] placeholder:text-white" type="search" placeholder="search here...." >
                    <input id="search" class="absolute hidden right-0 px-3 py-1 lg:hidden text-md mt-16 w-40 rounded-full bg-transparent outline-none border-2 border-[#07ccec] placeholder:text-white" type="search" placeholder="search here...." >
                </div>
                <div class="flex gap-2 text-2xl mt-1 space-x-3 text-[#07ccec] cursor-pointer">
                    <div>
                        <i id="massage" class="fa-solid fa-envelope"></i>
                        <div id="notification_msg" class="absolute bg-[#07ccec] mt-5 w-52 right-[8.5rem] rounded-md py-2 px-3 hidden">
                        <p class="text-gray-900 font-semibold hover:bg-gray-800 hover:text-[#07ccec] duration-500 cursor-pointer p-1 text-lg">massage 1</p>
                        <p class="text-gray-900 font-semibold hover:bg-gray-800 hover:text-[#07ccec] duration-500 cursor-pointer p-1 text-lg">massage 2</p>
                        </div>
                    </div>
                    <div>
                        <i id="bell" class="fa-solid fa-bell"></i>
                        <div id="notification" class="absolute bg-[#07ccec] mt-5 w-52 right-[6rem] rounded-md py-2 px-3 hidden">
                            <p class="text-gray-900 font-semibold hover:bg-gray-800 hover:text-[#07ccec] duration-500 cursor-pointer p-1 text-lg">notification 1</p>
                            <p class="text-gray-900 font-semibold hover:bg-gray-800 hover:text-[#07ccec] duration-500 cursor-pointer p-1 text-lg">notification 2</p>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <img id="profile" class="h-10 w-10 rounded-full cursor-pointer" src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-user-vector-avatar-png-image_1541962.jpg" alt="">
                    <div id="profile_d" class="absolute bg-[#07ccec] right-0 mt-4 w-32 rounded-md py-2 px-3 hidden">
                        <p class="text-gray-900 font-semibold hover:bg-gray-800 hover:text-[#07ccec] duration-500 cursor-pointer p-1">{{Auth::user()->name}}</p>
                        <a href=""><p class="text-gray-900 font-semibold hover:bg-gray-800 hover:text-[#07ccec] duration-500 cursor-pointer p-1">Profile</p></a>
                        <a href="{{route('logout')}}"><p class="text-gray-900 font-semibold hover:bg-gray-800 hover:text-[#07ccec] duration-500 cursor-pointer p-1">Log Out</p></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
<!-- header section end -->

<!-- sidebar section start -->
    <aside id="sideBar" class="lg:bg-gray-900 bg-gray-800 h-[100vh] lg:w-[22%] w-full absolute lg:top-0 lg:pt-5 space-y-5 ml-[-100%] lg:ml-0 duration-700 text-center lg:text-start">
        <a class="font-bold text-2xl whitespace-nowrap text-[#07ccec] pl-6 hidden lg:block" href=""
          ><span><i class="fa-solid fa-hand-holding-medical"></i></span>Hospital</a>
        <div>
            <ul class="text-white font-semibold">
                <li class="text-[#07ccec] pl-6 py-2 cursor-pointer hover:translate-x-1 duration-300"><a href="index.html">Dashboard</a></li>
                <!-- deopdown menu start-->
                <ul id="drop1" class="relative">
                    <li class="pl-6 py-2 cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500">Home<i class="fa-solid fa-chevron-down text-[.8rem] pl-1.5"></i></li>
                    <div id="drop_menu1" class="bg-gray-800 pl-20 py-3 lg:space-y-2 hidden duration-500">
                        <li class="cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500"><a href="">Home</a></li>
                        <li class="cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500"><a href="">Home</a></li>
                        <li class="cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500"><a href="">Home</a></li>
                    </div>
                </ul>
                <!-- deopdown menu end-->
                <li class="pl-6 py-2 cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500"><a href="about.html">About</a></li>
                <!-- deopdown menu start-->
                <ul id="drop" class="relative">
                    <li class="pl-6 py-2 cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500">Doctors<i class="fa-solid fa-chevron-down text-[.8rem] pl-1.5"></i></li>
                    <div id="drop_ment" class="bg-gray-800 pl-20 py-3 lg:space-y-2 hidden duration-500">
                        <li class="cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500"><a href="">Home</a></li>
                        <li class="cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500"><a href="">Home</a></li>
                        <li class="cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500"><a href="">Home</a></li>
                    </div>
                </ul>
                <!-- deopdown menu end-->
                <li class="pl-6 py-2 cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500"><a href="">Department</a></li>
                <li class="pl-6 py-2 cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500"><a href="">Blog</a></li>
                <li class="pl-6 py-2 cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500"><a href="">Appoinment</a></li>
            </ul>
        </div>
    </aside>
<!-- sidebar section end -->

<!-- main section start -->
    @yield('content')
<!-- main section start --> 
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>
    <script src="{{asset('assets/admin/admin.js')}}"></script>
    <script src="{{asset('assets/admin/chart.js')}}"></script>
</body>
</html>
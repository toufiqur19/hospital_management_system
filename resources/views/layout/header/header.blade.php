<!-- header section start -->
<header class="text-gray-800 nav pb-14">
    <nav class="fixed bg-[#07ccec] w-full z-50 flex items-center justify-between px-12 h-14 lg:gap-6">
        <a class="font-bold text-2xl whitespace-nowrap" href="{{ route('home') }}"><span><i
                    class="fa-solid fa-hand-holding-medical text-[#e12454]"></i></span>Hospital</a>
        <div id="nav_item"
            class="absolute top-14 lg:pb-0 pb-10 hidden lg:block left-0 w-full text-center lg:flex flex-col max-lg:bg-[#07ccec] lg:text-[17px] text-xl lg:static lg:flex-row lg:justify-between">
            <ul class="space-y-2 mt-2 lg:flex-row flex flex-col lg:gap-5 font-semibold">
                <li class="lg:mt-2 hover:text-[#27477d] duration-300 {{ Request::is('/')?'bg-gray-800 text-white mb-2.5 px-3 rounded-sm':''}}">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="hover:text-[#27477d] duration-300">
                    <a href="about.html">About</a>
                </li>
                <li class="hover:text-[#27477d] duration-300">
                    <a href="doctor.html">Doctors</a>
                </li>
                <li class="hover:text-[#27477d] duration-300">
                    <a href="departments.html">Departments</a>
                </li>
                <li class="hover:text-[#27477d] duration-300">
                    <a href="blog.html">Blog</a>
                </li>
                <li class="hover:text-[#27477d] duration-300">
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
            <div class="flex flex-col space-y-2 mt-2 mb-3 lg:flex-row lg:gap-5 lg:ml-24 cursor-pointer font-semibold">
                @guest
                    <a class="lg:mt-2 hover:text-[#27477d] duration-300" href="{{ route('login') }}">Login</a>
                    <a class="hover:text-[#27477d] duration-300" href="{{ route('register') }}">SignUp</a>
                @endguest
                @auth
                    <div class="relative lg:ml-20 lg:mt-1">
                        <img id="profile" class="h-10 w-10 rounded-full cursor-pointer"
                            src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-user-vector-avatar-png-image_1541962.jpg"
                            alt="">
                        <div id="profile_d" class="absolute bg-gray-900 right-0 mt-4 w-32 rounded-md py-2 px-3 hidden">
                            <h1 class="text-white font-semibold">{{Auth::user()->name}}</h1>
                            <a href="">
                                <p
                                    class="text-white hover:bg-gray-800 hover:text-[#07ccec] duration-500 cursor-pointer p-1">
                                    Profile</p>
                            </a>
                            <a href="{{ route('logout') }}">
                                <p
                                    class="text-white hover:bg-gray-800 hover:text-[#07ccec] duration-500 cursor-pointer p-1">
                                    Log
                                    Out</p>
                            </a>
                        </div>
                    </div>
                @endauth
            </div>
            <a class="px-6 pt-0.5 bg-gray-800 font-semibold text-[#07ccec] rounded-sm my-3"
                href="appointment .html">Appoinment</a>



        </div>
        <div id="hamberger" class="text-xl lg:hidden cursor-pointer">
            <i class="fa-solid fa-bars"></i>
        </div>
    </nav>
</header>
<!-- header section end -->
@section('script')
    <script>
        //profile start
        let profile = document.querySelector('#profile');
        let profile_d = document.querySelector('#profile_d');
        profile.addEventListener('click', () => {
            profile_d.classList.toggle('hidden');
        })
        //profile end
    </script>
@endsection

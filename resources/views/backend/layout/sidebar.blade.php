<!-- sidebar section start -->
<aside id="sideBar"
    class="lg:bg-gray-900 lg:fixed bg-gray-800 h-[100vh] lg:w-[22%] w-full absolute lg:top-0 lg:pt-5 space-y-5 ml-[-100%] lg:ml-0 duration-700 text-center lg:text-start">
    <a class="font-bold text-2xl whitespace-nowrap text-[#07ccec] pl-6 hidden lg:block" href=""><span><i
                class="fa-solid fa-hand-holding-medical"></i></span>Hospital</a>
    <div>
        <ul class="text-white font-semibold">
            <li
                class="pl-6 py-2 cursor-pointer hover:translate-x-1 duration-300 {{ Request::is('admin') ? 'text-[#07ccec]' : '' }}">
                <a href="index.html">Dashboard</a>
            </li>
            <!-- deopdown menu start-->
            <ul class="relative" onclick="dropDown1()">
                <div class="flex lg:justify-between cursor-pointer items-center lg:pr-6 lg:ml-0 md:ml-[44.5%] ml-[38.5%]">
                    <li class="pl-6 py-2 hover:text-[#07ccec] hover:translate-x-1 duration-500">Home</li>
                    <i class="fa-solid fa-chevron-down text-[.8rem] icon1 ml-5 lg:ml-0"></i>
                </div>
                <div id="drop_menu" class="bg-gray-800 lg:mt-2 pl-20 py-3 lg:space-y-2 duration-500 hidden">
                    <li
                        class="cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500 {{ Request::is('admin/carousel') ? 'text-[#07ccec]' : '' }}">
                        <a href="{{ route('carousel') }}">Carousel</a>
                    </li>
                    <li class="cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500"><a
                            href="">Home</a></li>
                    <li class="cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500"><a
                            href="">Home</a></li>
                </div>
            </ul>
            <!-- deopdown menu end-->
            <li
                class="pl-6 py-2 cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500 {{ Request::is('admin/about') ? 'text-[#07ccec]' : '' }} {{ Request::is('admin/about/create') ? 'text-[#07ccec]' : '' }}">
                <a href="{{ route('admin.about') }}">About</a>
            </li>
            <li
                class="pl-6 py-2 cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500 {{ Request::is('admin/doctors') ? 'text-[#07ccec]' : '' }} {{ Request::is('admin/doctors/create') ? 'text-[#07ccec]' : '' }}">
                <a href="{{ route('admin.doctors') }}">Doctors</a>
            </li>
            <li
                class="pl-6 py-2 cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500 {{ Request::is('admin/about') ? 'text-[#07ccec]' : '' }}">
                <a href="">Department</a>
            </li>
             <!-- deopdown menu start-->
             <ul class="relative" onclick="dropDown()">
                <div class="flex lg:justify-between cursor-pointer items-center lg:pr-6 lg:ml-0 md:ml-[42%] ml-[34%]">
                    <li class="pl-6 py-2 hover:text-[#07ccec] hover:translate-x-1 duration-500">Appoinment</li>
                    <i class="fa-solid fa-chevron-down text-[.8rem] icon ml-5 lg:ml-0"></i>
                </div>
                <div id="drop_down_menu" class="bg-gray-800 lg:mt-2 pl-20 py-3 lg:space-y-2 duration-500 hidden">
                    <li
                        class="cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500 {{ Request::is('admin/appoinment') ? 'text-[#07ccec]' : '' }} {{ Request::is('admin/appoinment/create') ? 'text-[#07ccec]' : '' }}">
                        <a href="{{ route('admin.appoinment') }}">appoinment</a>
                    </li>
                    <li class="cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500 {{ Request::is('admin/appoinment/schedules') ? 'text-[#07ccec]' : '' }} {{ Request::is('admin/appoinment/schedules/create') ? 'text-[#07ccec]' : '' }}"><a
                            href="{{ route('admin.appoinment.schedules') }}">Table 2</a></li>
                    <li class="cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500 {{ Request::is('admin/appoinment/details') ? 'text-[#07ccec]' : '' }} {{ Request::is('admin/appoinment/details/create') ? 'text-[#07ccec]' : '' }}"><a
                            href="{{ route('admin.appoinment.details') }}">Table 3</a></li>
                </div>
            </ul>
            <!-- deopdown menu end-->
            <li
                class="pl-6 py-2 cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500 {{ Request::is('admin/blog') ? 'text-[#07ccec]' : '' }} {{ Request::is('admin/blog/create') ? 'text-[#07ccec]' : '' }}">
                <a href="{{ route('admin.blog') }}">Blog</a>
            </li>
           <!-- deopdown menu start-->
           <ul class="relative" onclick="dropDown3()">
            <div class="flex lg:justify-between cursor-pointer items-center lg:pr-6 lg:ml-0 md:ml-[42%] ml-[34%]">
                <li class="pl-6 py-2 hover:text-[#07ccec] hover:translate-x-1 duration-500">Contact</li>
                <i class="fa-solid fa-chevron-down text-[.8rem] icon3 ml-5 lg:ml-0"></i>
            </div>
            <div id="drop_down_menu1" class="bg-gray-800 lg:mt-2 pl-20 py-3 lg:space-y-2 duration-500 hidden">
                <li
                    class="cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500 {{ Request::is('admin/contact/title') ? 'text-[#07ccec]' : '' }} {{ Request::is('admin/contact/title/create') ? 'text-[#07ccec]' : '' }}">
                    <a href="{{ route('admin.title') }}">Table 1</a>
                </li>
                <li class="cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500 {{ Request::is('admin/contactInfo') ? 'text-[#07ccec]' : '' }} {{ Request::is('admin/contactInfo/create') ? 'text-[#07ccec]' : '' }}"><a
                        href="{{ route('admin.contactInfo') }}">Table 2</a></li>
                <li class="cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500 {{ Request::is('admin/contactDetails') ? 'text-[#07ccec]' : '' }} {{ Request::is('admin/contactDetails/create') ? 'text-[#07ccec]' : '' }}"><a
                        href="{{ route('admin.contactDetails') }}">Table 3</a></li>
            </div>
        </ul>
        <!-- deopdown menu end-->
            <li
                class="pl-6 py-2 cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500 {{ Request::is('admin/service') ? 'text-[#07ccec]' : '' }} {{ Request::is('admin/service/create') ? 'text-[#07ccec]' : '' }}">
                <a href="{{ route('admin.service') }}">Service</a>
            </li>
            <li
                class="pl-6 py-2 cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500 {{ Request::is('admin/work-process') ? 'text-[#07ccec]' : '' }} {{ Request::is('admin/work/create') ? 'text-[#07ccec]' : '' }}">
                <a href="{{ route('admin.work') }}">Work Process</a>
            </li>
            <li
                class="pl-6 py-2 cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500 {{ Request::is('admin/testimonials') ? 'text-[#07ccec]' : '' }} {{ Request::is('admin/testimonials/create') ? 'text-[#07ccec]' : '' }}">
                <a href="{{ route('admin.testimonials') }}">Testimonials</a>
            </li>
            <li
                class="pl-6 py-2 cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500 {{ Request::is('admin/faqs') ? 'text-[#07ccec]' : '' }} {{ Request::is('admin/faqs/create') ? 'text-[#07ccec]' : '' }}">
                <a href="{{ route('admin.faqs') }}">Faqs</a>
            </li>
            <li
                class="pl-6 py-2 cursor-pointer hover:text-[#07ccec] hover:translate-x-1 duration-500 {{ Request::is('admin/workingHours') ? 'text-[#07ccec]' : '' }} {{ Request::is('admin/workingHours/create') ? 'text-[#07ccec]' : '' }}">
                <a href="{{ route('admin.workingHours') }}">Working Hours</a>
            </li>
        </ul>
    </div>
</aside>
<!-- sidebar section end -->


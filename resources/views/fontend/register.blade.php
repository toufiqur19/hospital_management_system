@extends('layout.app')

@section('content')
    <main class="bg-[#cbd5e1]">
        <section class="py-24">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <div class="w-96 bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                            Sign up to your account
                        </h1>
                        <form action="{{ route('processRegister') }}" method="POST" class="space-y-4 md:space-y-6">
                            @csrf
                            <div>
                                <label for="name" class="block mb-2 font-semibold text-black">Your Name</label>
                                <input type="text" value="{{old('name')}}" name="name" id="name" class="rounded-lg bg-transparent border-2 text-black font-semibold w-full border-[#07ccec] p-2.5 outline-none">
                            </div>
                            @error('name')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                            <div>
                                <label for="email" class="block mb-2 font-semibold text-black">Your
                                    email</label>
                                <input type="email" value="{{old('email')}}" name="email" id="email"class="rounded-lg bg-transparent border-2 text-black font-semibold w-full border-[#07ccec] p-2.5 outline-none">
                            </div>
                            @error('email')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                            <div>
                                <label for="password" class="block mb-2 font-semibold text-gray-900">Password</label>
                                <input type="password" value="{{old('password')}}" name="password" id="password" class="rounded-lg bg-transparent border-2 text-black font-semibold w-full border-[#07ccec] p-2.5 outline-none">
                            </div>
                            @error('password')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                            <div>
                                <label for="confirm_password" class="block mb-2 font-semibold text-gray-900">Confirm
                                    Password</label>
                                <input type="password" value="{{old('password_confirmation')}}" name="password_confirmation" id="password_confirmation" class="rounded-lg bg-transparent border-2 text-black font-semibold w-full border-[#07ccec] p-2.5 outline-none">
                            </div>
                            @error('password_confirmation')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                            <button type="submit"
                                class="w-full text-gray-800 bg-[#07ccec] hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-semibold rounded-md px-5 py-2.5 text-center ">Sign
                                Up</button>
                            <p class= font-light text-gray-500">
                                Allrady have an account yet? <a href="{{route('login')}}"
                                    class="font-semibold text-primary-600 hover:underline">Sign In</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

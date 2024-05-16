@extends('layout.app')

@section('content')
    <section class="bg-[#cbd5e1]">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            @if (session()->has('message'))
            <div class="p-3 mb-4 w-80 font-semibold text-gray-700 rounded-lg bg-green-400 role="alert">
                {{ session()->get('message') }}
            </div>
            @endif
            <div class="w-80 bg-white rounded-lg shadow md:mt-0 mt-24 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                        Sign in to your account
                    </h1>
                    <form action="{{ route('processLogin') }}" method="POST" class="space-y-4 md:space-y-6">
                            @csrf
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
                        <button type="submit"
                            class="w-full text-gray-800 bg-[#07ccec] hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-md px-5 py-2.5 text-center ">Sign
                            in</button>
                        <p class= font-light text-gray-500">
                            Don’t have an account yet? <a href="{{route('register')}}"
                                class="font-semibold text-primary-600 hover:underline">Sign up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

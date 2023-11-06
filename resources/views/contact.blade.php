@extends('layout.master')
@section('content')
    <section>
        <div class=" bg-rbalck py-10">
            <div class=" container mx-auto">
                <h2 class=" text-xl font-medium text-white">Contact Us</h2>
            </div>
        </div>
    </section>
    <section>
        <div class="py-20">
            <div class="container mx-auto">
                <div class="  w-4/5 mx-auto">
                    <div class="grid grid-cols-2  shadow-sshadow rounded-md ">
                        <div class="">
                            <img src="{{ asset('assets/img/contact .png') }}" alt="">
                        </div>
                        <div class=" bg-serpent">

                            <div class="mt-10 p-4">
                                <form action="{{ route('contact.add') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <h2 class=" text-white text-base">Your Name</h2>
                                        <div class="mt-2">
                                            <input
                                                class=" border bg-transparent text-white border-white w-full focus:outline-none px-4 py-2 rounded-md"
                                                type="text" name="name">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h2 class=" text-white text-base">Your Email</h2>
                                        <div class="mt-2">
                                            <input
                                                class=" border bg-transparent text-white border-white w-full focus:outline-none px-4 py-2 rounded-md"
                                                type="email" name="email">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h2 class=" text-white text-base">Your Message</h2>
                                        <div class="mt-2">
                                            <textarea rows="6"
                                                class=" border bg-transparent resize-none text-white  border-white w-full focus:outline-none px-4 py-2 rounded-md"
                                                name="message"></textarea>
                                        </div>
                                    </div>

                                    <input
                                        class=" bg-black text-white px-6  w-full py-2 rounded-md cursor-pointer hover:bg-white hover:text-black"
                                        type="submit" value="submit">

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

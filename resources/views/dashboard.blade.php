<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


{{-- TEST DATA --}}
@php
    $userData = [];

    // $userData = [
    //     [
    //         'title'       => 'My First Blog.',
    //         'description' => 'This is my first blog.',
    //         'created_at'  => now(),
    //     ],

    //     [
    //         'title'       => 'My Second Blog.',
    //         'description' => 'This is my second blog.',
    //         'created_at'  => now(),
    //     ],
    // ];
@endphp
    {{-- Create Blog --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Welcome back,") }} {{ Auth::user()->first_name }}!
                </div>
                <div class="py-3">
                    <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
                        <div class="dark:bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900 dark:text-gray-100">
                                <div class="card dark:bg-gray-900" style="border: transparent;">
                                    <div class="card-body dark:bg-gray-900">
                                        <textarea name="" id="" cols="30" rows="10" style="width: 100%; background-color: transparent; border: transparent; border-radius: 5px; max-height: 250px;"></textarea>
                                    </div>
                                    <div class="card-footer dark:bg-gray-900" style="border: transparent;">
                                        <div class="" style="text-align: right;">
                                            <button><i class="fa-regular fa-file"></i></button> <button><i class="fa-regular fa-image"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
                        <div class="dark:bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg" id="editor"></div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- Blogs --}}
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    News Feed
                </div>
                @forelse ($userData as $ud)
                <div class="py-3">
                    <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
                        <div class="dark:bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900 dark:text-gray-100">
                                <div class="card dark:bg-gray-900" style="border: transparent;">
                                    <div class="card-header dark:bg-gray-900" style="border: transparent;">
                                        {{ $ud['title'] }}
                                    </div>
                                    <div class="card-body dark:bg-gray-900" style="border: white solid 1px; border-radius: 5px;">
                                        {{ $ud['description'] }}
                                    </div>
                                    <div class="card-footer dark:bg-gray-900" style="border: transparent;">
                                        {{ $ud['created_at'] }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="py-3">
                    <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
                        <div class="dark:bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                                No Data Found.
                            </div>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </div>

@section('scripts')
{{-- <script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => console.error(error));
</script> --}}
@endsection

</x-app-layout>

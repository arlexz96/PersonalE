@extends('layouts.personal')

@section('content')

        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6 pt-6">Categories</h1>

        <div class="flex justify-start mb-4 ms-5">
            <a href="{{ route('categories.create') }}"
            class="middle none center rounded-lg bg-blue-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            data-ripple-light="true">Create Category</a>
        </div>

        <div class="flex flex-wrap m-10">
            @forelse ($categories as $category)
                <article class="w-[360px] m-3 overflow-hidden rounded-lg shadow transition hover:shadow-lg">
                    <a href="{{ route('categories.edit', $category->id) }}"
                        class="text-indigo-600 hover:text-indigo-800 ml-4">Edit</a>

                    <div class="bg-white p-4 sm:p-6">
                        <div>
                            <h3 class="mt-0.5 text-lg text-gray-900">{{ $category->name }}</h3>
                        </div>
                </article>
            @empty
                <p class="w-full text-center text-gray-500">No categories found.</p>
            @endforelse
        </div>
    </div>
@endsection

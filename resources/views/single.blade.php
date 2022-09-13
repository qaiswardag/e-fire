@extends('layouts.app')
<div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
    @foreach ($shoes as $shoe)
        <div
            class="bg-gray-800 text-white py-4 px-4 mb-4 block">
            <p class="truncate text-sm font-medium">
                Brand: {{ $shoe->brand }}
            </p>
            <p class="truncate text-sm font-medium">
                Farve: {{ $shoe->farve }}
            </p>
            <p class="truncate text-sm font-medium">
                Størrelse: {{ $shoe->størrelse }}
            </p>
        </div>
    @endforeach
</div>

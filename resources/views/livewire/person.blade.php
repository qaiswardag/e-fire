<div>
    <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
            <span class="block">Tilføj din sko?</span>
            <span class="block">Start i dag og showcase dine ejne sko.</span>
        </h2>
        <div class="mt-8 flex justify-center">
            <div class="inline-flex rounded-md shadow">
                <a href="#"
                   class="inline-flex items-center justify-center rounded-md border border-transparent bg-red-600 px-5 py-3 text-base font-medium text-white hover:bg-red-700">
                    Start</a>
            </div>
            <div class="ml-3 inline-flex">
                <a href="#"
                   class="inline-flex items-center justify-center rounded-md border border-transparent bg-red-100 px-5 py-3 text-base font-medium text-black hover:bg-red-200">
                    Læs mere</a>
            </div>
        </div>


        <div class="border border-red-400 py-12 px-8 rounded-xl my-12">
            <ul class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($people as $person)

                    <li class="col-span-1 rounded-lg bg-white shadow">
                        <div class="flex w-full justify-between space-x-6 p-6">
                            <div class="flex-1 truncate">
                                <div>
                                    <h2 class="text-xl truncate text-sm font-medium text-gray-900">{{ $person->navn }}</h2>
                                </div>
                                <h3 class="text-sm font-medium text-gray-900 text-center mt-4 mb-2 bg-red-600 text-white py-2">
                                    Sko:
                                </h3>

                                @if(count($person->shoes) === 0)
                                    Sko ikke tilføjet!
                                @endif


                                @foreach ($person->shoes as $shoe)
                                    <a href="/sko/{{$shoe->id}}"
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
                                    </a>
                                @endforeach


                            </div>
                            <div>
                                <div
                                    class="h-12 w-12 rounded-full bg-red-200 flex justify-center items-center text-sm font-semibold">
                                    <div>
                                        {{substr($person->navn, 0,1)}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                @endforeach
            </ul>
        </div>

    </div>
    {{ $people->links() }}

</div>

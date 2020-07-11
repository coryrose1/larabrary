<div class="mt-12 space-y-6">
    <div class="flex space-x-6">
        <div class="flex-1 flex bg-white">
            <div class="p-4 h-full flex justify-center items-center">
            <img class="w-64 h-64 object-contain"
                 src="{{ $firstRow->first()->imageUrl() }}" alt="{{ $firstRow->first()->name }}" />
            </div>
            <div class="flex-1 p-4">
                <h3 class="mt-2 text-xl leading-7 font-semibold text-blue-500">
                    {{ $firstRow->first()->name }}
                </h3>
                <p class="mt-3 text-base leading-6 text-gray-500">
                    {{ $firstRow->first()->summary }}
                </p>
                <p class="mt-3 text-sm leading-6 text-gray-500">
                    Starts at: $99
                </p>
            </div>
        </div>
        <div class="bg-pink-200 p-4">
            <img class="w-64 h-64 object-contain"
                 src="{{ $firstRow->last()->imageUrl() }}" alt="{{ $firstRow->last()->name }}" />
        </div>
    </div>
    <div class="flex space-x-6">
        <div class="flex-1 flex w-2/5 bg-white">
            <div class="p-4 h-full flex justify-center items-center">
                <img class="w-64 h-64 object-contain"
                     src="{{ $secondRow->first()->imageUrl() }}" alt="{{ $secondRow->first()->name }}" />
            </div>
            <div class="flex-1 p-4">
                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-700">
                    {{ $secondRow->first()->name }}
                </h3>
                <p class="mt-3 text-base leading-6 text-gray-500">
                    {{ $secondRow->first()->summary }}
                </p>
                <p class="mt-3 text-sm leading-6 text-gray-500">
                    Starts at: $99
                </p>
            </div>
        </div>
        <div class="flex-1 flex w-2/5 bg-white">
            <div class="p-4 h-full flex justify-center items-center">
                <img class="w-64 h-64 object-contain"
                     src="{{ $secondRow->last()->imageUrl() }}" alt="{{ $secondRow->last()->name }}" />
            </div>
            <div class="flex-1 p-4">
                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-700">
                    {{ $secondRow->last()->name }}
                </h3>
                <p class="mt-3 text-base leading-6 text-gray-500">
                    {{ $secondRow->last()->summary }}
                </p>
                <p class="mt-3 text-sm leading-6 text-gray-500">
                    Starts at: $99
                </p>
            </div>
        </div>
    </div>
    <div class="flex space-x-6">
        <div class="flex-1 flex w-2/5 bg-white">
            <div class="p-4 h-full flex justify-center items-center">
                <img class="w-64 h-64 object-contain"
                     src="{{ $thirdRow->first()->imageUrl() }}" alt="{{ $thirdRow->first()->name }}" />
            </div>
            <div class="flex-1 p-4">
                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-700">
                    {{ $thirdRow->first()->name }}
                </h3>
                <p class="mt-3 text-base leading-6 text-gray-500">
                    {{ $thirdRow->first()->summary }}
                </p>
                <p class="mt-3 text-sm leading-6 text-gray-500">
                    Starts at: $99
                </p>
            </div>
        </div>
        <div class="flex-1 flex w-2/5 bg-white">
            <div class="p-4 h-full flex justify-center items-center">
                <img class="w-64 h-64 object-contain"
                     src="{{ $thirdRow->last()->imageUrl() }}" alt="{{ $thirdRow->last()->name }}" />
            </div>
            <div class="flex-1 p-4">
                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-700">
                    {{ $thirdRow->last()->name }}
                </h3>
                <p class="mt-3 text-base leading-6 text-gray-500">
                    {{ $thirdRow->last()->summary }}
                </p>
                <p class="mt-3 text-sm leading-6 text-gray-500">
                    Starts at: $99
                </p>
            </div>
        </div>
    </div>
</div>

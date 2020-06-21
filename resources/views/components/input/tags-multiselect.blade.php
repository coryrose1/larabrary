@props([
'searchTerm',
'searchValue',
'availableResults',
'selectedResults',
'selectMethod',
'selectValues',
'removeMethod',
'removeValues',
'displayField',
'addTagMethod',
'addTagValues'
])

<div class="relative" x-data="{ isOpen: true }" @click.away="isOpen = false">
    <div class="flex rounded-md shadow-sm">
        <input wire:model.debounce="{{ $searchTerm }}"
               {{ $attributes }}
               x-ref="search"
               @focus="isOpen = true"
               @keydown="isOpen = true"
               @keydown.escape.window="isOpen = false"
               @keydown.shift.tab="isOpen = false"
               class="flex-1 block w-full transition duration-150 ease-in-out sm:leading-5
            bg-transparent border-3 border-gray-400 border-dashed rounded text-xl leading-loose p-2 text-charcoal focus:bg-yellow-100"
        />
    </div>
    <div wire:loading class="absolute top-0 right-0 loading ease-linear rounded-full border-2 border-t-2 border-gray-200 h-5 w-5 mt-2 mr-2" style="border-top-color: blue;"></div>
    @if (strlen($searchValue) >= 2)
        <div
            class="absolute mt-1 w-full rounded-md bg-white shadow-lg"
            x-show.transition.opacity="isOpen"
        >
            @if ($availableResults->count() > 0)
                <ul tabindex="-1" role="listbox" class="max-h-60 rounded-md py-1 text-base leading-6 shadow-xs overflow-auto focus:outline-none sm:text-sm sm:leading-5">
                    @foreach ($availableResults as $result)
                        <li wire:click.prevent="{{ convertToWireMethod($selectMethod, $selectValues, $result) }}"
                            role="option" class="text-gray-900 cursor-pointer hover:bg-blue-100 relative py-2 pl-3 pr-9">
                                            <span class="font-normal block truncate">
                                              {{ $result->{$displayField} }}
                                            </span>
                        </li>
                    @endforeach
                </ul>
            @else
                <ul tabindex="-1" role="listbox" class="max-h-60 rounded-md py-1 text-base leading-6 shadow-xs overflow-auto focus:outline-none sm:text-sm sm:leading-5">
                    @if (isset($addTagMethod) && $addTagMethod)
                        <li wire:click.prevent="{{ $addTagMethod }}" role="option" class="text-gray-900 cursor-pointer hover:bg-blue-100 relative py-2 pl-3 pr-9">
                                            <span class="font-normal block truncate">
                                              No results for "{{ $searchValue }}". Click to add.
                                            </span>
                        </li>
                    @else
                        <li role="option" class="text-gray-900 cursor-pointer hover:bg-blue-100 relative py-2 pl-3 pr-9">
                                        <span class="font-normal block truncate">
                                          No results for "{{ $searchValue }}".
                                        </span>
                        </li>
                    @endif
                </ul>
            @endif
        </div>
    @endif
</div>
@foreach ($selectedResults as $result)
    <div class="bg-indigo-100 inline-flex items-center text-sm rounded mt-2 mr-1">
        <span class="ml-2 mr-1 leading-relaxed truncate max-w-xs">{{ $result[$displayField] }}</span>
        <button wire:click.prevent="{{ convertToWireMethod($removeMethod, $removeValues, $result) }}" class="w-6 h-8 inline-block align-middle text-gray-500 hover:text-gray-600 focus:outline-none">
            <svg class="w-6 h-6 fill-current mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M15.78 14.36a1 1 0 0 1-1.42 1.42l-2.82-2.83-2.83 2.83a1 1 0 1 1-1.42-1.42l2.83-2.82L7.3 8.7a1 1 0 0 1 1.42-1.42l2.83 2.83 2.82-2.83a1 1 0 0 1 1.42 1.42l-2.83 2.83 2.83 2.82z"/></svg>
        </button>
    </div>
@endforeach

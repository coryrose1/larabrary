<div>
    <h1 class="text-2xl font-semibold text-gray-900">Submit Course</h1>
    <form wire:submit.prevent="save">
        <div class="mt-6 sm:mt-5 space-y-6">
            <x-input.group label="Name" for="name" :error="$errors->first('name')">
                <x-input.text wire:model="name" id="name"/>
            </x-input.group>
            <x-input.group label="Authors" for="authors" :error="$errors->first('authors')">
                <select wire:model="authors" id="authors" multiple
                        class="mt-1 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                    @foreach ($existingAuthors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </select>
                <x-slot name="helpText">Don't see them? <a href="#" class="text-blue-500 hover:text-blue-700">Create a
                        new Author</a></x-slot>
            </x-input.group>
            <x-input.group label="Image URL" for="image" :error="$errors->first('image')">
                <x-input.text wire:model="image" id="image" leadingAddOn="https://"/>
            </x-input.group>
            <x-input.group label="Summary" for="summary" :error="$errors->first('summary')"
                           helpText="A sentence or two summarizing the material">
                <x-input.text wire:model="summary" id="summary"/>
            </x-input.group>
            <x-input.group label="Detailed Description" for="description" :error="$errors->first('description')">
                <x-input.textarea wire:model="description" id="description"/>
            </x-input.group>
            <x-input.group label="Categories" for="categories" :error="$errors->first('categories')">
                <div class="relative" x-data="{ isOpen: true }" @click.away="isOpen = false">
                    <x-input.text wire:model.debounce="searchCategory" id="categories"
                                  placeholder="Search (Press '/' to focus)"
                                  x-ref="search"
                                  @keydown.window="
                                    if (event.keyCode === 191) {
                                        event.preventDefault();
                                        $refs.search.focus();
                                    }
                                "
                                  @focus="isOpen = true"
                                  @keydown="isOpen = true"
                                  @keydown.escape.window="isOpen = false"
                                  @keydown.shift.tab="isOpen = false"/>
                    <div wire:loading class="spinner top-0 right-0 mr-4 mt-3">L</div>
                    @if (strlen($searchCategory) >= 2)
                        <div
                            class="absolute mt-1 w-full rounded-md bg-white shadow-lg"
                            x-show.transition.opacity="isOpen"
                        >
                            @if ($existingCategories->count() > 0)
                                <ul tabindex="-1" role="listbox" class="max-h-60 rounded-md py-1 text-base leading-6 shadow-xs overflow-auto focus:outline-none sm:text-sm sm:leading-5">
                                    @foreach ($existingCategories as $category)
                                        <li wire:click.prevent="setCategory({{ $category->id}}, '{{ $category->name }}')" role="option" class="text-gray-900 cursor-pointer hover:bg-blue-100 relative py-2 pl-3 pr-9">
                                            <span class="font-normal block truncate">
                                              {{ $category->name }}
                                            </span>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <ul tabindex="-1" role="listbox" class="max-h-60 rounded-md py-1 text-base leading-6 shadow-xs overflow-auto focus:outline-none sm:text-sm sm:leading-5">
                                    <li wire:click.prevent="addCategory" role="option" class="text-gray-900 cursor-pointer hover:bg-blue-100 relative py-2 pl-3 pr-9">
                                        <span class="font-normal block truncate">
                                          No results for "{{ $searchCategory }}". Click to add.
                                        </span>
                                    </li>
                                </ul>
                            @endif
                        </div>
                    @endif
                </div>
                @foreach ($selectedCategories as $category)
                    <div class="bg-indigo-100 inline-flex items-center text-sm rounded mt-2 mr-1">
                        <span class="ml-2 mr-1 leading-relaxed truncate max-w-xs">{{ $category['name'] }}</span>
                        <button wire:click.prevent="removeCategory({{ $category['id']}}, '{{ $category['name'] }}')" class="w-6 h-8 inline-block align-middle text-gray-500 hover:text-gray-600 focus:outline-none">
                            <svg class="w-6 h-6 fill-current mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M15.78 14.36a1 1 0 0 1-1.42 1.42l-2.82-2.83-2.83 2.83a1 1 0 1 1-1.42-1.42l2.83-2.82L7.3 8.7a1 1 0 0 1 1.42-1.42l2.83 2.83 2.82-2.83a1 1 0 0 1 1.42 1.42l-2.83 2.83 2.83 2.82z"/></svg>
                        </button>
                    </div>
                @endforeach
            </x-input.group>
        </div>
    </form>
</div>

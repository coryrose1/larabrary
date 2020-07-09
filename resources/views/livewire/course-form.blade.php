<form wire:submit.prevent="save">
    <div class="mt-6 sm:mt-5 space-y-6">
        <x-input.group label="Name" for="name" :error="$errors->first('name')">
            <x-input.text wire:model="name" id="name"/>
        </x-input.group>
        <x-input.group label="Authors" for="authors" :error="$errors->first('selectedAuthors')">
            <x-input.tags-multiselect searchTerm="searchAuthor"
                                      :searchValue="$searchAuthor"
                                      :availableResults="$existingAuthors"
                                      displayField="name"
                                      :selectedResults="$selectedAuthors"
                                      selectMethod="setAuthor"
                                      :selectValues="['id', 'name']"
                                      removeMethod="removeAuthor"
                                      :removeValues="['id', 'name']"
                                      id="authors" placeholder="Search authors"/>
            <x-slot name="helpText">Don't see them? <a href="#" class="text-blue-500 hover:text-blue-700">Create a
                    new Author</a></x-slot>
        </x-input.group>
        <x-input.group label="Image" for="image" :error="$errors->first('image')">
            <x-input.file-upload wire:model="image" id="image" theme="dark">
                    <span class="h-12 w-12 rounded-full overflow-hidden object-center bg-gray-100">
                        @if ($image)
                            <img src="{{ $image->temporaryUrl() }}" alt="Course Image">
                        @else
                            <img src="https://avatars.dicebear.com/api/bottts/{{ Request::ip() }}.svg" alt="Course Image">
                        @endif
                    </span>
            </x-input.file-upload>
        </x-input.group>
        <x-input.group label="Website" for="website" :error="$errors->first('website')">
            <x-input.text wire:model="website" id="website" leadingAddOn="https://" />
        </x-input.group>
        <x-input.group label="Summary" for="summary" :error="$errors->first('summary')"
                       helpText="A sentence or two summarizing the material">
            <x-input.text wire:model="summary" id="summary" />
        </x-input.group>
        <x-input.group label="Detailed Description" for="description" :error="$errors->first('description')">
            <x-input.rich-text wire:model.lazy="description" id="description"  />
        </x-input.group>
        <x-input.group label="Categories" for="categories" :error="$errors->first('selectedCategories')">
            <x-input.tags-multiselect searchTerm="searchCategory"
                                      :searchValue="$searchCategory"
                                      :availableResults="$existingCategories"
                                      displayField="name"
                                      :selectedResults="$selectedCategories"
                                      selectMethod="setCategory"
                                      :selectValues="['id', 'name']"
                                      removeMethod="removeCategory"
                                      :removeValues="['id', 'name']"
                                      addTagMethod="addCategory"
                                      id="categories" placeholder="Search categories"></x-input.tags-multiselect>
        </x-input.group>
        <div class="w-full flex justify-end">
            <x-button color="yellow-100" text="white" activeColor="white">Submit</x-button>
        </div>
    </div>
</form>
@push('styles')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@1.2.3/dist/trix.css">
@endpush
@push('scripts')
    <script src="https://unpkg.com/trix@1.2.3/dist/trix.js"></script>
@endpush

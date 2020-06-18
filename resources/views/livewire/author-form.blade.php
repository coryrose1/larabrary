<div>
    <h1 class="text-2xl font-semibold text-gray-900">Create a new author</h1>
    <form wire:submit.prevent="save">
        <div class="mt-6 sm:mt-5 space-y-6">
            <x-input.group label="Name" for="name" :error="$errors->first('name')">
                <x-input.text wire:model="name" id="name"/>
            </x-input.group>
            <x-input.group label="Avatar" for="avatar" :error="$errors->first('avatar')">
                <div class="flex items-center">
                    <span class="h-12 w-12 rounded-full overflow-hidden object-center bg-gray-100">
                        @if ($avatar)
                        <img src="{{ $avatar->temporaryUrl() }}" alt="Author Avatar">
                        @else
                        <img src="https://avatars.dicebear.com/api/bottts/{{ Request::ip() }}.svg" alt="Author Avatar">
                        @endif
                    </span>

                    <span class="ml-5 rounded-md shadow-sm">
                        <input wire:model="avatar"
                               type="file"
                               class="py-2 px-3 border border-gray-300 rounded-md text-sm leading-4 font-medium text-gray-700 hover:bg-gray-100">
                    </span>
                </div>
            </x-input.group>
            <x-input.group label="Website" for="website" :error="$errors->first('website')">
                <x-input.text wire:model="website" id="website" leadingAddOn="https://"/>
            </x-input.group>
            <x-input.group label="Github" for="github" :error="$errors->first('github')">
                <x-input.text wire:model="github" id="github" leadingAddOn="https://github.com/"/>
            </x-input.group>
            <x-input.group label="Twitter" for="twitter" :error="$errors->first('twitter')">
                <x-input.text wire:model="twitter" id="twitter" leadingAddOn="https://twitter.com/"/>
            </x-input.group>
            <x-input.group label="Bio" for="bio" :error="$errors->first('bio')">
                <x-input.textarea wire:model="bio" id="bio"/>
            </x-input.group>
            <div class="w-full flex justify-end">
                <button type="submit"
                        class="py-2 px-3 border border-gray-300 rounded-md text-sm leading-4 font-medium text-gray-700 hover:bg-gray-100">
                    Submit</button>
            </div>
        </div>
    </form>
</div>

<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="font-semibold text-l text-gray-800 dark:text-gray-200 leading-tight pb-3">
                        {{ __('Edit selected URL') }}
                    </h2>
                    <form method="POST" action="{{ route('urls.store') }}">
                        @csrf
                        <input type="text"
                            name="title"
                            required
                            maxlength="255"
                            placeholder="{{ __('Title') }}"
                            class="dark:bg-gray-700 dark:bg-gray-900 dark:text-gray-300 block w-full focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                            value="{{ old('title', $url->title) }}"
                        />
                        <x-input-error :messages="$errors->store->get('title')" class="mt-2" />
                        <input type="text"
                            name="original_url"
                            required
                            maxlength="255"
                            placeholder="{{ __('Original Url') }}"
                            class="mt-3 dark:bg-gray-700 dark:bg-gray-900 dark:text-gray-300 block w-full focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                            value="{{ old('original_url', $url->original_url) }}"
                        />
                        <x-input-error :messages="$errors->store->get('original_url')" class="mt-2" />
                        <div class="mt-4 space-x-2">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                            <a href="{{ route('urls.index') }}">{{ __('Cancel') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('urls.update', $url) }}">
            @csrf
            @method('patch')
            <input type="text"
                name="title"
                required
                maxlength="255"
                placeholder="{{ __('Title') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                value="{{ old('title', $url->title) }}"
            />
            <x-input-error :messages="$errors->store->get('title')" class="mt-2" />
            <input type="text"
                name="original_url"
                required
                maxlength="255"
                placeholder="{{ __('Original Url') }}"
                class="block w-full border-gray-300 mt-5 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                value="{{ old('original_url', $url->original_url) }}"
            />
            <x-input-error :messages="$errors->store->get('original_url')" class="mt-2" />
            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <a href="{{ route('urls.index') }}">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div> --}}
</x-app-layout>

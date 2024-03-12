<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Shartnomani yuklab olish') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                    <a href="{{ asset('storage/Contract.docx') }}" download
                        class="block rounded-md bg-indigo-600 mr-2 px-11 py-4 text-lg font-bold leading-4 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 mb-8">Shartnomani
                        yuklab olish</a>
                    <a href="{{ route('contract') }}" class="underline hover:no-underline">Shartnoma sahifasiga
                        qaytish</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

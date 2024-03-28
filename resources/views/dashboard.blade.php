<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-2xl font-semibold mb-6">Video Downloader</h2>
                <form action="{{route('dashboard')}}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="video-url" class="block text-gray-900">Enter Video URL:</label>
                        <input type="text" id="video-url" name="url"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm
                                  focus:border-indigo-300 focus:ring focus:ring-indigo-200
                                  focus:ring-opacity-50"
                               placeholder="https://www.youtube.com/watch?v=HDk10mLU_Ic" value="https://www.youtube.com/watch?v=HDk10mLU_Ic" required>
                    </div>
                    <div>
                        <button type="submit"
                                class="w-full bg-indigo-500 text-white py-2 px-4 rounded-md
                                   hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">
                            Download Video
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Writing') }}
        </h2>
    </x-slot>

    @if(session('success'))
        <div class="absolute top-0 left-0 mt-4 mr-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded"
            role="alert" id="success-message">
            <strong class="font-bold">Successful update!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>

        <script>
            setTimeout(function () {
                document.getElementById('success-message').style.display = 'none';
            }, 5000); // 5000 milliseconds (5 seconds)

        </script>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <h1 class="mt-8 text-2xl font-medium text-gray-900 UNDERTOWNPERSONALUSE">
                        Here's your Writing page!
                    </h1>

                    <p class="mt-6 text-gray-500 leading-relaxed">
                        <a class=" m-4 NHaasGroteskDSPro-65Md border-b border-black" href="{{ route('dashboard') }}"> BACK TO DASHBOARD</a>
                    </p>
                </div>
               

            <div x-data="{ open: false }">
            <!-- Trigger button -->
            <button @click="open = true" id="add-writing-button"
                class="fixed mt-16 top-4 bg-black  underline text-white px-4 py-2 rounded" style="right:10rem;">
                Write
            </button>

            <!-- Modal overlay -->
            <div x-show="open" class="h-screen fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 flex items-center justify-center">
                <!-- Modal content -->
                <div class="bg-white p-6 rounded shadow-md" style="width: 60rem; height:100%;">
                <div class="flex justify-between pb-10">
                    <h2 class="text-5xl font-bold mb-4 UNDERTOWNPERSONALUSE">Add new writing</h2>
                    <!-- Close button -->
                    <button @click="open = false" class="mt-4 px-4 py-2 bg-black text-white rounded">Close</button>
                </div>
                <hr>
                    <!-- Form -->
                <form action="{{ route('writing.store') }}" class="pt-10" method="POST">
                    @csrf

                    <!-- Name Input -->
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-semibold text-gray-600">Title</label>
                        <input type="text" id="title" name="title" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                    </div>

                    <!-- Email Input -->
                    <div class="mb-4">
                        <label for="link" class="block text-sm font-semibold text-gray-600">Link</label>
                        <input type="text" id="link" name="link" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                    </div>

                    <!-- Message Textarea -->
                    <div class="mb-4">
                        <label for="content" class="block text-sm font-semibold text-gray-600">Content</label>
                        <textarea id="content" name="content" rows="4" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="bg-black text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                        Submit
                    </button>
                </form>

                
                </div>
            </div>
        </div>
        


                @if($writings->isEmpty())

                <div class="w-full h-full flex items-center justify-center  bg-SelectColor">
                    <div class="text-center text-black lg:px-32 p-10 relative z-10">
                        <h3 class="text-3xl leading-none pb-8 font-semibold UNDERTOWNPERSONALUSE">
                            I cant find any writing firi</h3>
                    </div>
                </div>

                @else
                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
                    @foreach($writings as $writing)
                    <div>
                        <div class="flex items-center">
                            <h2 class="text-xl font-semibold text-gray-900">
                                <a> {{ $writing->title }}</a>
                            </h2>
                        </div>

                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                            {{ $writing->content }}
                        </p>

                        <p class="mt-4 text-sm flex justify-between">
                            <a class="py-2" href="{{ route('writing.edit', $writing->id) }}" class="inline-flex items-center font-semibold text-black">
                              Edit
                            </a>
                            <hr >
                            <form class="py-2" method="POST" action="{{ route('writing.destroy', $writing->id) }}" onsubmit="return confirm('Are you sure you want to delete this item?');">
                            @csrf
                            @method('delete')

                            <button type="submit" class="inline-flex items-center font-semibold text-red">
                                Delete
                            </button>
                        </form>

                        </p>
                       
                    </div>
                    @endforeach
                </div>
                @endif

            </div>
        </div>
    </div>

       <!-- MODALS MODALS MODALS MODALS -->


</x-app-layout>

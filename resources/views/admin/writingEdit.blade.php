<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Writing') }}
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
                        Edit this writing
                    </h1>
                    <p class="mt-6 text-gray-500 leading-relaxed">
                        <a class=" m-4 NHaasGroteskDSPro-65Md border-b border-black" href="{{ route('admin.writing') }}">< BACK TO WRITING</a>
                    </p>
                </div>




                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8 p-6 lg:p-8">
                
                    <div>
                            <form method="post" action="{{ route('writings.update', $writings->id) }}" class="pt-10"  enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <!-- Name Input -->
                                <div class="mb-4">
                                    <label for="title" class="block text-sm font-semibold text-gray-600">Title</label>
                                    <input type="text" value="{{$writings->title}}" id="title" name="title" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                                </div>

                                <!-- Email Input -->
                                <div class="mb-4">
                                    <label for="link" class="block text-sm font-semibold text-gray-600">Link</label>
                                   
                                    <input type="text" value="{{$writings->link}}" id="link" name="link" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                                </div>

                                <!-- Message Textarea -->
                                <div class="mb-4">
                                    <label for="content" class="block text-sm font-semibold text-gray-600">Content</label>
                                    <textarea id="content" name="content" rows="4" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">{{$writings->content}}</textarea>
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" class=" text-black px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue ">
                                    Submit
                                </button>
                            </form>
                      
                    </div>
                    
                </div>

            </div>
        </div>
    </div>

       <!-- MODALS MODALS MODALS MODALS -->



</x-app-layout>

<x-app-layout>

        <div class="p-20">
            <h1 class="text-4xl text-center font-bold">Upload</h1>

            <!-- resources/views/upload.blade.php -->

            <div class="container mx-auto p-4">
                <div class="text-center text-red-600">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <form action="{{ route('upload.file') }}" method="POST" enctype="multipart/form-data" class="max-w-md mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="file">
                            Choose File:
                        </label>
                        <input type="file"  name="file" id="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="flex items-center justify-center">
                       <x-primary-button type="submit">Submit</x-primary-button>
                    </div>
                </form>

                <!-- Display download button if file exists -->
                @if (Storage::exists('uploads/testimonial.pdf'))
                    <div class="mt-4 text-center">
                        <a  href="{{ Storage::url('uploads/testimonial.pdf') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Download Testimonial PDF
                        </a>
                    </div>
                @endif
            </div>


        </div>


</x-app-layout>

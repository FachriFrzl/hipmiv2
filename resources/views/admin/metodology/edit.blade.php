@extends('layouts.app', ['title' => 'Edit Metodologi - Admin'])

@section('content')
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-300">
    <div class="container mx-auto px-6 py-8">

        <div class="p-6 bg-white rounded-md shadow-md">
            <h2 class="text-lg text-gray-700 font-semibold capitalize">EDIT METODOLOGI</h2>
            <hr class="mt-4">
            <form action="{{ route('admin.metodology.update', $metodology->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 gap-6 mt-4">
                    <div class="row">
                        <div class="col-sm-7">
                            <div>
                                <label class="text-gray-700" for="image">GAMBAR</label>
                                <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white p-3" type="file" name="image">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            @if (file_exists(public_path('storage/metodologies/'.$metodology->image)))
                                <img src="{{asset('storage/metodologies/'.$metodology->image)}}" class="admin-edit-image">
                            @else
                                <img src="{{asset('storage/no_image.png')}}" class="admin-edit-image">
                            @endif
                        </div>
                        
                    </div>
                    

                    <div>
                        <label class="text-gray-700" for="name">NAMA METODOLOGI</label>
                        <input class="form-input w-full mt-2 rounded-md bg-gray-200 focus:bg-white" type="text" name="title" value="{{ old('title', $metodology->title) }}" placeholder="Jabatan">
                        @error('title')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>

                    

                    

                    <div>
                        <label class="text-gray-700" for="name">DESKRIPSI</label>
                        <textarea name="description" rows="15">{{ old('description', $metodology->description) }}</textarea>
                        @error('description')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>



                </div>

                <div class="flex justify-start mt-4">
                    <button type="submit" class="px-4 py-2 bg-gray-600 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">UPDATE</button>
                </div>
            </form>
        </div>
        
    </div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.7.0/tinymce.min.js"></script>
<script>
    tinymce.init({selector:'textarea'});
</script>
@endsection
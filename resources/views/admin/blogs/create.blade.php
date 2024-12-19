<x-admin-layout>

    <h3 class="my-3 text-center">Blog create form</h3>
    <div class="col-md-8 mx-auto">
        <x-card-wrapper>
            <form action="/admin/blogs/store" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="mb-3">
                <label for="title"
                class="form-label">
                Title
                </label>
                <input
                required
                 type="text"
                 class="form-control"
                 name="title"
                 value="{{old('title')}}"
                >
                @error('title')
                     <p class="text-danger">{{$message}}</p>
                     @enderror
            </div>


            <div class="mb-3">
                <label for="slug"
                class="form-label">
                Slug
                </label>
                <input
                required
                 type="text"
                 id="slug"
                 class="form-control"
                 name="slug"
                 value="{{old('slug')}}"
                >
                @error('slug')
                     <p class="text-danger">{{$message}}</p>
                     @enderror
            </div>

            <div class="mb-3">
                <label for="intro"
                class="form-label">
                Intro
                </label>
                <input
                required
                 type="text"
                 id="intro"
                 class="form-control"
                 name="intro"
                 value="{{old('intro')}}"
                >
                @error('intro')
                     <p class="text-danger">{{$message}}</p>
                     @enderror
            </div>
            <div class="mb">
                <label for="body"
                 class="form-label">
                Body
                </label>
                <textarea name="body" id="body" cols="30" rows="10">
                    {{old('body')}}
                </textarea>
                @error('body')
                     <p class="text-danger">{{$message}}</p>
                     @enderror
            </div>
            <div class="mb-3">
                <label for="thumbnail"
                class="form-label">
                 Thumbnail
                </label>
                <input type="file" name="thumbnail" id="thumbnail"
                class="form-control">
                @error('thumbnail')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="category" class="form-label">
                 Category
                </label>
                <select name="category_id" id="category" class="form-control">
                    @foreach ($categories as $category )
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                @error('category')
                     <p class="text-danger">{{$message}}</p>
                     @enderror
            </div>
            <div class="d-flex justify-content-start mt-3">
             <button type="submit"
             class="btn btn-primary">
                Submit
             </button>
            </div>
            </form>
        </x-card-wrapper>
    </div>
</x-admin-layout>

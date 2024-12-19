  @props(['blog'])

  <!-- Comment Form Section -->
   <section class="container my-5">
    <div class="col-md-8 mx-auto">
        <x-card-wrapper class="bg-light">
            <form action="/blogs/{{$blog->slug}}/comments" method="POST">
                @csrf
                <div class="mb-3">
                    <textarea
                        name="body"
                        class="form-control border-0"
                        cols="10"
                        rows="5"
                        placeholder="Say Something..."></textarea>
                        @error('body')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </x-card-wrapper>
    </div>
</section>

<x-layout>
    <!-- Single Blog Section -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
                <img
                src="{{ asset('storage/' . $blog->thumbnail) }}"

                    class="card-img-top"
                    alt="Blog Image"
                />
                <h3 class="my-3">{{ $blog->title }}</h3>
                <div>
                    <p>Author - <a href="/users/{{ $blog->author->username }}">{{ $blog->author->name }}</a></p>
                    <p>
                        <a href="/categories/{{ $blog->category->slug }}">
                            <span class="badge bg-primary">{{ $blog->category->name }}</span>
                        </a>
                    </p>
                    <div class="text-secondary">{{ $blog->created_at->diffForHumans() }}</div>
                    <div class="text-secondary">
                        <form action="/blogs/{{$blog->slug}}/subscription"
                        method="POST">
                        @csrf
                       @auth
                       @if (auth()->user()->isSubscribed($blog))
                       <button class="btn btn-danger">unsubscribe</button>
                       @else
                       <button class="btn btn-warning">Subscribe</button>
                       @endif
                       @endauth
                        </form>


                    </div>

                </div>
                <p class="lh-md mt-3">
                    {{ $blog->body }}
                </p>
            </div>
        </div>
    </div>

    @auth
     <x-comment-form :blog="$blog"/>
    @else
        <!-- Login Prompt -->
        <p class="text-center my-5">
            Please <a href="/login" class="text-primary">login</a> to participate in this discussion.
        </p>
    @endauth
@if ($blog->comments->count())
<x-comments :comments="$blog->comments()->latest()->paginate(3)" />
@endif
    <!-- Comments Section -->


    <!-- Subscribe Section -->


    <!-- Blogs You May Like Section -->
    <x-blogs_you_may_like_section :randomBlogs="$randomBlogs" />
</x-layout>

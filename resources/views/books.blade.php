<style>
       .active>.page-link {
        background-color: #ed1c24;
        border-color:#ed1c24;

    }
</style>

<x-layout>

    <div class="flex-container">
        <div class="flex-item-left container">
            <x-slideshow />
        </div>

        <div class="flex-item-right">
            <x-search-bar />
        </div>
    </div>

    <div class="card my-3 text-center bg-light" id="new-books">
        <div class="card-body">
            <h5> What's new in our Library</h5>
        </div>
    </div>


    <div class="col-md-12">
        <div class="d-flex flex-wrap">


            <!-- Book listing -->

            @unless (count ($books) == 0)

            @foreach ($books as $book)
                <div class="col-sm-12 col-md-2 p-3">
                    <div class="bd-highlight mb-3 text-center" style="height: 400px;">
                        <a href="/books/{{ $book->slug }}">
                        <img src="{{ $book->cover ? asset('storage/' . $book->cover) : asset('/Images/Book/Image-Not-Available.jpg') }}" alt="..." class="gallery img-thumbnail border border-light bd-highlight ">
                    <strong>{!! $book->title !!} </strong></a>
<br>
                        <small> by <a href="/authors/{{ $book->author->slug }}"> {{ $book->author->name ?? 'None' }}</a> </small>
                    </div>
                    @auth
                        <div class="form-check bd-highlight text-center p-2">
                            <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off">
                            <label class="btn btn-outline-secondary mt-2" for="btn-check-outlined">Add to bookshelf</label>
                        </div>
                    @endauth
                </div>

            @endforeach

            @else
            <div class="col-sm-12 text-center">
                <p>No results</p>
            </div>
            @endunless



        </div>

    </div>

 {{--
    how to paginate??
    <div class="pagination justify-content-center">
    {{ $books->links() }}
 </div>
 --}}
</x-layout>

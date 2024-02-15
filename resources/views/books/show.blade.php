<x-layout>

    <div class="col-md-12 mt-0">
        <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-3">
                <img src="{{ $book->cover ? asset('storage/' . $book->cover) : asset('/Images/Book/Image-Not-Available.jpg') }}" class="img-fluid rounded-start" alt="..." width="280">
              </div>
              <div class="col-md-7">
                <div class="card-body">
                  <h5 class="card-title">{{ $book->title }}</h5>
                  <p class="card-text"><small class="text-muted">By <a href="/authors/{{ $book->author->slug }}">{{ $book->author->name }}</a></small></p>
                  <p class="card-text">{{ $book->summary }}</p>
                </div>
              </div>
            </div>
        </div>

        <h4> Publication details </h4>
        <hr class="my-4">

    <div class="d-flex justify-content-between">
        <ul class="list-group list-group-flush  col-md-4 d-sm-inline-flex ml-0">
            <li class="list-group-item"> <strong>Original title: </strong>{{ $book->original_title }} </li>
            <li class="list-group-item"> <strong>Type: </strong> <a href="/types/{{ $book->type->slug }}">{{ $book->type->name ?? 'n/a' }}</a></li>
            <li class="list-group-item"> <strong>Format: </strong><a href="/formats/{{ $book->format->slug }}">{{ $book->format->name ?? 'n/a'}}</a></li>
            <li class="list-group-item"> <strong>Publisher: </strong><a href="/publishers/{{ $book->publisher->slug }}">{{ $book->publisher->name ?? 'n/a' }}</a></li>
            <li class="list-group-item"> <strong>Year: </strong><a href="/years/{{ $book->year->slug }}"> {{ $book->year->year ?? 'n/a' }}</a></li>
            <li class="list-group-item"> <strong>Editor: </strong>{{ $book->editor }}</li>
            <li class="list-group-item"> <strong>Translation: </strong>{{ $book->translator }}</li>
            <li class="list-group-item"> <strong>Language: </strong><a href="/languages/{{ $book->language->slug }}"> {{ $book->language->name ?? 'n/a' }}</a></li>
        </ul>

        <ul class="list-group list-group-flush p-2 col-md-4 d-sm-inline-flex">
            <li class="list-group-item"> <strong>National origin: </strong><a href="/nationalorigins/{{ $book->origin->slug }}"> {{ $book->origin->name ?? 'n/a' }}</a></li>
            <li class="list-group-item"> <strong>Literary form: </strong><a href="/literaryforms/{{ $book->form->slug }}"> {{ $book->form->name ?? 'n/a'}}</a></li>
            <li class="list-group-item"> <strong>Genre: </strong><a href="/genres/{{ $book->genre->slug }}"> {{ $book->genre->name ?? 'n/a' }}</a></li>
            <li class="list-group-item"> <strong>Period: </strong><a href="/periods/{{ $book->period->slug }}"> {{ $book->period->name ?? 'n/a' }}</a></li>
            <li class="list-group-item"> <strong>ISBN: </strong>{{ $book->isbn ?? 'n/a' }} </li>
            <li class="list-group-item"> <strong>Keywords: </strong>{{ $book->keywords->word ?? 'n/a' }}</li>
        </ul>

        @auth
        <div class="card col-md-2 p-2 d-sm-inline-flex">
            <img class="card-img-top" src="\Images\Icons\Book_reading.png" alt="Card image cap">
            <div class="card-body justify-content-center">
                <div class="mt-3">
                    <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="btn-check-outlined">Add to bookshelf</label>
                </div>
            </div>
        </div>

        @else
        <div class="card col-md-2 p-2 d-sm-inline-flex">
            <img class="card-img-top" src="\Images\Icons\undraw_Bookshelves_re_lxoy.png" alt="Card image cap">
            <div class="card-body justify-content-center">
                <div class="mt-3">
                    <p>Please register if you would like to rent this book</p>
                    <x-button> <a href="/register"> Register </a></x-button>
                </div>
            </div>
        </div>

    @endauth
</div>

    <!--Recommended books-->

    <div class="col-md-12 mt-3 p-3"></div>
        <h4 > You might also like </h4>
        <hr class="my-4">
            <div class="row mb-2s">
                <div class="col-md-2">
                    <div class="gallery">
                        <a href="/">
                            <img src="\Images\Book\2001-A-Space-Odissay.jpg" width="217">
                        </a>
                        <div class="desc"><strong> Book Title</strong> <small>by Jane Doe</small>
                            <div class="form-check my-3 p-0">
                                <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="btn-check-outlined">Add bookshelf</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="gallery">
                        <a href="/">
                            <img src="\Images\Book\Audition.jpg" width="217">
                        </a>
                        <div class="desc"><strong> Book Title</strong> <small>by Jane Doe</small>
                            <div class="form-check my-3 p-0">
                                <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="btn-check-outlined">Add bookshelf</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="gallery">
                        <a target="_blank" href="img_5terre.jpg">
                            <img src="\Images\Book\Design-of-Everyday-Things.jpg" width="217">
                        </a>
                        <div class="desc"><strong> Book Title</strong> <small>by Jane Doe</small>
                            <div class="form-check my-3 p-0">
                                <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="btn-check-outlined">Add bookshelf</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="gallery">
                        <a target="_blank" href="img_5terre.jpg">
                            <img src="\Images\Book\Hitchhikers guide.jpg" width="217">
                        </a>
                        <div class="desc"><strong> Book Title</strong> <small>by Jane Doe</small>
                            <div class="form-check my-3 p-0">
                                <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="btn-check-outlined">Add bookshelf</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="gallery">
                        <a target="_blank" href="img_5terre.jpg">
                            <img src="\Images\Book\Metamorphosis.jpg" width="217">
                        </a>
                    <div class="desc"><strong> Book Title</strong> <small>by Jane Doe</small>
                        <div class="form-check my-3 p-0">
                            <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off">
                            <label class="btn btn-outline-secondary" for="btn-check-outlined">Add bookshelf</label>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="gallery">
                    <a target="_blank" href="img_5terre.jpg">
                        <img src="\Images\Book\Misery.jpg" width="217">
                    </a>
                    <div class="desc"><strong> Book Title</strong> <small>by Jane Doe</small>

                        <div class="form-check my-3 p-0">
                            <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off">
                            <label class="btn btn-outline-secondary" for="btn-check-outlined">Add bookshelf</label>
                        </div>

                    </div>

                    </div>

              </div>
            </div>


    </div>



            </div>

        </div>
    </div>


</x-layout>


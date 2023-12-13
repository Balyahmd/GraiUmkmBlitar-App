<form action="{{ route('search') }}" class="d-flex container pb-5" method="get">
    <button class="btn btn-light">
        <img src="{{asset('img/icon-search.svg')}}" alt="">
    </button>
    <input class="form-control me-2" type="search" id="search" name="search" placeholder="Cari Product......" aria-label="Search">
</form>
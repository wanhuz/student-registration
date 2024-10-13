<form method="GET" action="{{ route('course_search') }}">
    @csrf
    <div class="col-12 col-md-4 col-lg-2 w-100 mb-3 d-flex flex-row gap-3">
            <input name="course_name_or_code" class="form-control form-control-dark mr-3" type="text" placeholder="Search course" aria-label="Search">
            <button class="btn btn-primary">Search</button>
    </div>
</form>
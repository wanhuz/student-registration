<div class="card">
    <h5 class="card-header">{{ $title }}</h5>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Code</th>
                        <th scope="col">Name</th>
                        <th scope="col">Section</th>
                        <th scope="col">Lecturer</th>
                        <th scope="col">Day</th>
                        <th scope="col">Time</th>
                        <th scope="col">Credit Hours</th>
                        <th scope="col">Add</th>
                    </tr>
                </thead>
                <tbody>
                   {{ $content }}
                </tbody>
                </table>
        </div>
    </div>
</div>
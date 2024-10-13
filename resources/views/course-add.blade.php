<x-app-layout>
    <x-slot:directory>Course</x-slot>
    <x-slot:subdirectory>Add Course</x-slot>
    <div class="row">
        <div class="mb-4 mb-lg-0">
            <x-app.search-bar></x-app.search-bar>
            <form method="POST" action="{{ route('user_add_course') }}">
                @csrf
                    <x-app.table-add>
                        <x-slot:title>Add Course ー {{$department ?? ""}}</x-slot>
                        <x-slot:content>
                            @foreach($courses as $course)
                                <x-table.row-add>
                                    <x-slot:id>{{ $course->id }}</x-slot>
                                    <x-slot:code>{{ $course->code }}</x-slot>
                                    <x-slot:name>{{ $course->name }}</x-slot>
                                    <x-slot:section>{{ $course->section }}</x-slot>
                                    <x-slot:lecturer>{{ $course->lecturer_name }}</x-slot>
                                    <x-slot:day>{{ $course->day }}</x-slot>
                                    <x-slot:time>{{ $course->time }}</x-slot>
                                    <x-slot:section>{{ $course->section }}</x-slot>
                                    <x-slot:credit_hours>{{ $course->credit_hours }}</x-slot>
                                </x-table.row-add>
                            @endforeach
                        </x-slot>
                    </x-app.table>
                </div>
            </div>
            <div class="row">
                <div class="ms-auto mt-3">
                    <a href="/course" class="btn btn-primary">Back</a>
                    <button class="btn btn-primary">Add</button>
                </div>

                @if(session('success'))
                    <div class="mt-2 alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </form>
</x-app-layout>
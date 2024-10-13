<x-app-layout>
    <x-slot:directory>Course</x-slot>
    <x-slot:subdirectory>Course List</x-slot>
    
    <div class="row">
        <div class=" mb-4 mb-lg-0">
            <x-app.table>
                <x-slot:title>Course List</x-slot>
                <x-slot:content>
                    @foreach($courses as $course)
                        <x-table.row>
                            <x-slot:code>{{ $course->code }}</x-slot>
                            <x-slot:name>{{ $course->name }}</x-slot>
                            <x-slot:section>{{ $course->section }}</x-slot>
                            <x-slot:lecturer>{{ $course->lecturer_name }}</x-slot>
                            <x-slot:day>{{ $course->day }}</x-slot>
                            <x-slot:time>{{ $course->time }}</x-slot>
                            <x-slot:section>{{ $course->section }}</x-slot>
                            <x-slot:credit_hours>{{ $course->credit_hours }}</x-slot>
                        </x-table.row>
                    @endforeach
                </x-slot>
            </x-app.table>
        </div>
    </div>
    <div class="row">
        <div class="ms-auto mt-3">
            <a href="/course/add">
                <button class="btn btn-primary">Add course</button>
            </a>
            <a href="/course/remove">
                <button class="btn btn-primary">Remove course</button>
            </a>
        </div>
    </div>
</x-app-layout>
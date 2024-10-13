<x-app-layout>

    
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
                        <button class="btn btn-primary">Add course</button>
                    </div>
                </div>
            </form>
</x-app-layout>
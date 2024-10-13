<x-app-layout>
    <x-slot:directory>Report</x-slot>
    <x-slot:subdirectory>Report</x-slot>
    <h1 class="h2">Course Report</h1>

    <div class="row my-4">
        <x-app.report-card>
            <x-slot:header>Class summary</x-slot>
            <x-slot:content>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Day</th>
                            <th scope="col">Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($classes as $class)
                        <tr>
                            <td> {{ $class->name }}</td>
                            <td>{{ $class->day }}</td>
                            <td>{{ $class->time }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            </x-slot>
        </x-app.report-card>
        <x-app.report-card>
            <x-slot:header>Credit Hours</x-slot>
            <x-slot:content>
                <x-app.credit-hours-meter>
                    <x-slot:credit_hours>{{ $credit_hours }}</x-slot>
                    <x-slot:credit_hours_percent> {{ $credit_hours_percent }}</x-slot>
                    <x-slot:credit_hours_percent_dial> {{ $credit_hours_percent + 5}}</x-slot>
                </x-app.credit-hours-meter>
            </x-slot>
        </x-app.report-card>
        <x-app.report-card>
            <x-slot:header>Class by days</x-slot>
            <x-slot:content>

            <div class="row mb-3">
                <x-app.bar-chart>
                    <x-slot:labels>
                        {{!! $labels !!}}
                    </x-slot>
                    <x-slot:data>
                        {{ $days_count }}
                    </x-slot>
                </x-app.bar-chart>
            </x-slot>
        </x-app.report-card>
    </div>

</x-app-layout>
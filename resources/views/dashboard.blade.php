<x-app-layout>
    <x-slot:directory>Home</x-slot>
    <x-slot:subdirectory>Announcements</x-slot>

    <h1 class="h2">Announcements</h1>

    <div class="row my-4">
        <x-app.report-card>
            <x-slot:header>University Convocation Announcement</x-slot>
            <x-slot:content>
                <p>Dear Students and Faculty,</p>
                <p>We are pleased to announce that the convocation ceremony for the graduating class of 2024 will be held on:</p>
                <b>June 15, 2024</b>
                <p>Location: University Auditorium</p>
                <hr>
                <p class="mb-0">We look forward to celebrating this significant milestone with you!</p>
            </x-slot>
        </x-app.report-card>
        <x-app.report-card>
            <x-slot:header>Welcome to Our University!</x-slot>
            <x-slot:content>
                <p>Dear New Students,</p>
                <p>As you begin your journey at our university, we would like to remind you to take care of your belongings during your time on campus.</p>
                <p>Please be mindful of the following:</p>
                <ul>
                    <li>Keep your personal items secure and within sight at all times.</li>
                    <li>Do not leave valuable items unattended.</li>
                    <li>Use locks for your bikes and secure your bags when in common areas.</li>
                </ul>
                <p>We want to ensure that you have a safe and enjoyable experience as you settle into university life. If you have any questions or need assistance, please don't hesitate to reach out.</p>
                <p>Best wishes for a successful academic year!</p>
                <p>Sincerely,</p>
                <p>The University Administration</p>
            </x-slot>
        </x-app.report-card>
        <x-app.report-card>
            <x-slot:header>Student Marketplace</x-slot>
            <x-slot:content>
            <p>Welcome to the Student Marketplace! Here are some items available for sale:</p>

                <ul class="item-list">
                    <li class="item">
                        <span>Textbook: <strong>Introduction to Psychology</strong></span>
                        <span class="item-price"> - $30</span>
                    </li>
                    <li class="item">
                        <span>Laptop: <strong>Dell Inspiron 15</strong></span>
                        <span class="item-price"> - $450</span>
                    </li>
                    <li class="item">
                        <span>Desk Chair: <strong>Ergonomic Office Chair</strong></span>
                        <span class="item-price"> - $75</span>
                    </li>
                    <li class="item">
                        <span>Furnishing: <strong>Wooden Study Table</strong></span>
                        <span class="item-price"> - $120</span>
                    </li>
                    <li class="item">
                        <span>Bike: <strong>Mountain Bike</strong></span>
                        <span class="item-price"> - $250</span>
                    </li>
                </ul>
            </x-slot>
        </x-app.report-card>
        <x-app.report-card>
            <x-slot:header>New Scholarship Opportunities Available</x-slot>
            <x-slot:content>
                <p>Students are encouraged to apply for the new scholarship programs aimed at supporting underprivileged students. </p>
                <p>Applications are open until November 30, 2024</p>
            </x-slot>
        </x-app.report-card>
    </div>

</x-app-layout>
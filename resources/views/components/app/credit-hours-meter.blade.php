<style>
    .circle-container {
        position: relative;
        width: 150px;
        height: 150px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .circle {
        position: relative;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background: conic-gradient(
            rgba(54, 162, 235, 0.8) {{ $credit_hours_percent }}%, 
            rgba(54, 162, 235, 0.2) {{ $credit_hours_percent_dial }}%
        );
    }

    .circle-inner {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 110px;
        height: 110px;
        background-color: #fff;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
        font-weight: bold;
    }
</style>

<div class="circle-container mx-auto">
    <div class="circle" style="--percentage: {{ $credit_hours_percent }}"></div>
    <div class="circle-inner">{{ $credit_hours }}/30</div>
</div>
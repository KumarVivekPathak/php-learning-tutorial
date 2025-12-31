<style>
    body {
        background: #0f172a;
        color: #e5e7eb;
        font-family: system-ui, sans-serif;
        padding: 40px;
    }

    h1 {
        text-align: center;
        color: #fff;
        margin-bottom: 40px;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .wrapper {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 400px;
        width: 400px;
        border: 2px solid #fff;
    }

    .wrapper::before,
    .wrapper::after {
        content: '';
        position: absolute;
        background: #fff;
        pointer-events: none;
    }

    /* Diagonal line from top-left to bottom-right */
    .wrapper::before {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to bottom right,
                transparent calc(50% - 1px),
                #fff calc(50% - 1px),
                #fff calc(50% + 1px),
                transparent calc(50% + 1px));
    }

    /* Diagonal line from top-right to bottom-left */
    .wrapper::after {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to bottom left,
                transparent calc(50% - 1px),
                #fff calc(50% - 1px),
                #fff calc(50% + 1px),
                transparent calc(50% + 1px));
    }

    /* Inner rotated square */
    .wrapper-inner {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) rotate(45deg);
        height: 280px;
        width: 280px;
        border: 2px solid #fff;
        z-index: 1;
    }

    .house {
        position: relative;
        width: 100%;
        height: 100%;
    }

    /* House numbers positioning */
    .house-number {
        position: absolute;
        color: white;
        font-weight: normal;
        z-index: 2;
        font-size: 1.2rem;
    }

    .house-number-1 {
        top: 39%;
        left: 48%;
    }

    .house-number-2 {
        top: 14%;
        left: 24%;
    }

    .house-number-3 {
        top: 18%;
        left: 20%;
    }

    .house-number-4 {
        top: 43%;
        left: 45%;
    }

    .house-number-5 {
        top: 68%;
        left: 20%;
    }

    .house-number-6 {
        top: 72%;
        left: 24%;
    }

    .house-number-7 {
        top: 48%;
        left: 48%;
    }

    .house-number-8 {
        top: 72%;
        left: 74%;
    }

    .house-number-9 {
        top: 68%;
        left: 77%;
    }

    .house-number-10 {
        top: 43%;
        left: 52%;
    }

    .house-number-11 {
        top: 18%;
        left: 77%;
    }

    .house-number-12 {
        top: 14%;
        left: 72%;
    }

    /* Planet info positioning */
    .house-planet {
        position: absolute;
        color: white;
        font-weight: normal;
        z-index: 2;
        font-size: 1rem;
        max-width: 80px;
        text-align: center;
        line-height: 1.3;
    }

    .house-planet-1 {
        top: 15%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .house-planet-2 {
        top: 8%;
        left: 25%;
        transform: translate(-50%, -50%);
    }

    .house-planet-3 {
        top: 20%;
        left: 10%;
        transform: translate(-50%, -50%);
    }

    .house-planet-4 {
        top: 48%;
        left: 25%;
        transform: translate(-50%, -50%);
    }

    .house-planet-5 {
        top: 72%;
        left: 10%;
        transform: translate(-50%, -50%);
    }

    .house-planet-6 {
        top: 87%;
        left: 25%;
        transform: translate(-50%, -50%);
    }

    .house-planet-7 {
        top: 72%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .house-planet-8 {
        top: 87%;
        left: 75%;
        transform: translate(-50%, -50%);
    }

    .house-planet-9 {
        top: 72%;
        left: 85%;
        transform: translate(-10%, -50%);
    }

    .house-planet-10 {
        top: 48%;
        left: 70%;
        transform: translate(-50%, -50%);
    }

    .house-planet-11 {
        top: 20%;
        right: 0;
        transform: translate(-10%, -50%);
    }

    .house-planet-12 {
        top: 8%;
        left: 75%;
        transform: translate(-50%, -50%);
    }

    .ascendant {
        position: absolute;
        top: 30%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-weight: normal;
        z-index: 2;
        font-size: 1.2rem;
    }
</style>



<h1>🪐 North Indian Kundli (KP System)</h1>
<article class="container">
    <div class="wrapper">
        <div class="wrapper-inner"></div>

        <article class="house">
            @for($i = 1; $i <= 12; $i++)
                <h2 class="house-number house-number-{{ $i }}">{{ $i }}</h2>
                @endfor

                <span class="ascendant">ASC</span>

                @for($i = 1; $i <= 12; $i++)
                    @if(!empty($housesPlanets[$i]['planets']))
                    <div class="house-planet house-planet-{{ $i }}">
                    @foreach($housesPlanets[$i]['planets'] as $planet)
                    @php
                    $retro = $planet['isRetro'] ? '*' : '';
                    $degree = $planet['degree']. '°';
                    @endphp
                    <div>{{ $planet['shortName'] }}{{ $retro }}-{{ $degree }}</div>
                    @endforeach
    </div>
    @endif
    @endfor
</article>

</div>
</article>
</body>

</html>
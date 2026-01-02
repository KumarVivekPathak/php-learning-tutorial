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
        font-size: 1rem;
        width: 20px;
        height: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .house-number-1 {
        top: 39%;
        left: 47%;
    }

    .house-number-2 {
        top: 14%;
        left: 22%;
    }

    .house-number-3 {
        top: 19%;
        left: 18%;
    }

    .house-number-4 {
        top: 44%;
        left: 43%;
    }

    .house-number-5 {
        top: 69%;
        left: 18%;
    }

    .house-number-6 {
        top: 73%;
        left: 23%;
    }

    .house-number-7 {
        top: 48%;
        left: 47%;
    }

    .house-number-8 {
        top: 73%;
        left: 73%;
    }

    .house-number-9 {
        top: 69%;
        left: 77%;
    }

    .house-number-10 {
        top: 44%;
        left: 52%;
    }

    .house-number-11 {
        top: 19%;
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
        top: 90%;
        left: 25%;
        transform: translate(-50%, -50%);
    }

    .house-planet-7 {
        top: 72%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .house-planet-8 {
        top: 90%;
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

    /* Geo Details Input Section */
    .geo-input-section {
        display: flex;
        gap: 12px;
        justify-content: center;
        align-items: center;
        margin: 0 auto 40px auto;
        padding: 20px;
        flex-wrap: wrap;
        width: 100%;
        max-width: 600px;
    }

    #place {
        padding: 14px 20px;
        font-size: 16px;
        border: 2px solid #4b5563;
        border-radius: 8px;
        background: #ffffff;
        color: #1f2937;
        outline: none;
        transition: all 0.3s ease;
        min-width: 300px;
        width: 100%;
        max-width: 400px;
        font-family: system-ui, sans-serif;
        display: block;
        box-sizing: border-box;
    }

    #place::placeholder {
        color: #6b7280;
    }

    #place:focus {
        border-color: #60a5fa;
        background: #ffffff;
        box-shadow: 0 0 0 3px rgba(96, 165, 250, 0.2);
    }

    #place:hover {
        border-color: #60a5fa;
    }

    button[onclick="getGeoDetails()"] {
        padding: 14px 28px;
        font-size: 16px;
        font-weight: 600;
        border: none;
        border-radius: 8px;
        background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
        color: #fff;
        cursor: pointer;
        transition: all 0.3s ease;
        font-family: system-ui, sans-serif;
        box-shadow: 0 4px 6px rgba(59, 130, 246, 0.3);
    }

    button[onclick="getGeoDetails()"]:hover {
        background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(59, 130, 246, 0.4);
    }

    button[onclick="getGeoDetails()"]:active {
        transform: translateY(0);
        box-shadow: 0 2px 4px rgba(59, 130, 246, 0.3);
    }

    @media (max-width: 640px) {
        .geo-input-section {
            flex-direction: column;
            width: 100%;
        }

        #place {
            min-width: 100%;
            max-width: 100%;
        }

        button[onclick="getGeoDetails()"] {
            width: 100%;
        }
    }

    /* Geonames Dropdown Styles */
    .geonames-dropdown {
        position: relative;
        width: 100%;
        margin-top: 10px;
    }

    .geonames-list {
        background: #1e293b;
        border: 2px solid #374151;
        border-radius: 8px;
        max-height: 400px;
        overflow-y: auto;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        margin-top: 8px;
    }

    .geonames-list::-webkit-scrollbar {
        width: 8px;
    }

    .geonames-list::-webkit-scrollbar-track {
        background: #0f172a;
        border-radius: 4px;
    }

    .geonames-list::-webkit-scrollbar-thumb {
        background: #4b5563;
        border-radius: 4px;
    }

    .geonames-list::-webkit-scrollbar-thumb:hover {
        background: #60a5fa;
    }

    .geoname-item {
        padding: 14px 18px;
        border-bottom: 1px solid #374151;
        cursor: pointer;
        transition: all 0.2s ease;
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .geoname-item:last-child {
        border-bottom: none;
    }

    .geoname-item:hover {
        background: #2d3748;
        border-left: 3px solid #60a5fa;
        padding-left: 15px;
    }

    .geoname-item:active {
        background: #374151;
    }

    .geoname-place-name {
        color: #e5e7eb;
        font-size: 16px;
        font-weight: 600;
        margin: 0;
    }

    .geoname-details {
        display: flex;
        gap: 16px;
        align-items: center;
        flex-wrap: wrap;
    }

    .geoname-country {
        color: #9ca3af;
        font-size: 13px;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .geoname-timezone {
        color: #9ca3af;
        font-size: 13px;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .geoname-badge {
        background: #3b82f6;
        color: #fff;
        padding: 2px 8px;
        border-radius: 4px;
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
    }

    .geoname-icon {
        width: 16px;
        height: 16px;
        opacity: 0.7;
    }

    .no-results {
        padding: 20px;
        text-align: center;
        color: #9ca3af;
        font-size: 14px;
    }

    /* Form styling */
    form.geo-input-section {
        position: relative;
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    form.geo-input-section input[type="text"] {
        padding: 14px 20px;
        font-size: 16px;
        border: 2px solid #4b5563;
        border-radius: 8px;
        background: #ffffff;
        color: #1f2937;
        outline: none;
        transition: all 0.3s ease;
        width: 100%;
        font-family: system-ui, sans-serif;
        box-sizing: border-box;
    }

    form.geo-input-section input[type="text"]:focus {
        border-color: #60a5fa;
        box-shadow: 0 0 0 3px rgba(96, 165, 250, 0.2);
    }

    form.geo-input-section button[type="submit"] {
        padding: 14px 28px;
        font-size: 16px;
        font-weight: 600;
        border: none;
        border-radius: 8px;
        background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
        color: #fff;
        cursor: pointer;
        transition: all 0.3s ease;
        font-family: system-ui, sans-serif;
        box-shadow: 0 4px 6px rgba(59, 130, 246, 0.3);
        align-self: flex-start;
    }

    form.geo-input-section button[type="submit"]:hover {
        background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(59, 130, 246, 0.4);
    }
</style>

<script>
    function selectPlace(placeName, countryCode, timezoneId) {
        // Set the input value
        document.getElementById('place').value = placeName;
        
        // Optionally submit the form automatically
        // document.querySelector('form.geo-input-section').submit();
        
        // Or just log for now
        console.log('Selected:', placeName, countryCode, timezoneId);
    }
</script>



<h1>🪐 North Indian Kundli (KP System)</h1>

<form method="POST" action="{{ route('get-geo-details') }}" class="geo-input-section">
    @csrf
    <input type="text" id="place" name="place" placeholder="Enter your place" value="{{ old('place') }}">
    <button type="submit">Get Geo Details</button>

    @if($geonames != null && count($geonames) > 0)
        <div class="geonames-dropdown">
            <div class="geonames-list">
                @foreach($geonames as $geoname)
                    <div class="geoname-item" onclick="selectPlace('{{ addslashes($geoname['place_name']) }}', '{{ $geoname['country_code'] ?? '' }}', '{{ $geoname['timezone_id'] ?? '' }}')">
                        <div class="geoname-place-name">{{ $geoname['place_name'] }}</div>
                        <div class="geoname-details">
                            @if(isset($geoname['country_code']))
                                <div class="geoname-country">
                                    <span class="geoname-badge">{{ $geoname['country_code'] }}</span>
                                </div>
                            @endif
                            @if(isset($geoname['timezone_id']))
                                <div class="geoname-timezone">
                                    🕐 {{ $geoname['timezone_id'] }}
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @elseif($geonames !== null && count($geonames) === 0)
        <div class="geonames-dropdown">
            <div class="geonames-list">
                <div class="no-results">No results found</div>
            </div>
        </div>
    @endif
</form>

<article class="container">

    <div class="wrapper">
        <div class="wrapper-inner"></div>

        <article class="house">
            @for($i = 1; $i <= 12; $i++)
                <h2 class="house-number house-number-{{ $i }}">{{ $houseNumbers[$i] }}</h2>
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
                            <div>{{ $planet['shortName'] }}{{ $retro }} {{ $degree }}</div>
                        @endforeach
                    </div>
                @endif
            @endfor
        </article>
    </div>
</article>
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KPAstro extends Controller
{
    public $zodiacSigns = [
        'Aries' => 1, 
        'Taurus' => 2, 
        'Gemini' => 3, 
        'Cancer' => 4, 
        'Leo' => 5, 
        'Virgo' => 6, 
        'Libra' => 7, 
        'Scorpio' => 8, 
        'Sagittarius' => 9, 
        'Capricorn' => 10, 
        'Aquarius' => 11, 
        'Pisces' => 12
    ];

    public  $kpAstroData = [
        [
            'planet_id' => 0,
            'planet_name' => 'Sun',
            'degree' => 72.1895,
            'formatted_degree' => '72:11:22',
            'is_retro' => false,
            'norm_degree' => 12.1895,
            'formatted_norm_degree' => '12:11:22',
            'house' => 8,
            'sign' => 'Gemini',
            'sign_lord' => 'Mercury',
            'nakshatra' => 'Ardra',
            'nakshatra_lord' => 'Rahu',
            'charan' => 2,
            'sub_lord' => 'Saturn',
            'sub_sub_lord' => 'Rahu',
        ],
        [
            'planet_id' => 1,
            'planet_name' => 'Moon',
            'degree' => 11.7235,
            'formatted_degree' => '11:43:24',
            'is_retro' => false,
            'norm_degree' => 11.7235,
            'formatted_norm_degree' => '11:43:24',
            'house' => 6,
            'sign' => 'Aries',
            'sign_lord' => 'Mars',
            'nakshatra' => 'Ashwini',
            'nakshatra_lord' => 'Ketu',
            'charan' => 4,
            'sub_lord' => 'Mercury',
            'sub_sub_lord' => 'Ketu',
        ],
        [
            'planet_id' => 2,
            'planet_name' => 'Mars',
            'degree' => 73.4199,
            'formatted_degree' => '73:25:11',
            'is_retro' => false,
            'norm_degree' => 13.4199,
            'formatted_norm_degree' => '13:25:11',
            'house' => 8,
            'sign' => 'Gemini',
            'sign_lord' => 'Mercury',
            'nakshatra' => 'Ardra',
            'nakshatra_lord' => 'Rahu',
            'charan' => 3,
            'sub_lord' => 'Mercury',
            'sub_sub_lord' => 'Moon',
        ],
        [
            'planet_id' => 3,
            'planet_name' => 'Mercury',
            'degree' => 85.4917,
            'formatted_degree' => '85:29:30',
            'is_retro' => true,
            'norm_degree' => 25.4917,
            'formatted_norm_degree' => '25:29:30',
            'house' => 8,
            'sign' => 'Gemini',
            'sign_lord' => 'Mercury',
            'nakshatra' => 'Punarvasu',
            'nakshatra_lord' => 'Jupiter',
            'charan' => 2,
            'sub_lord' => 'Mercury',
            'sub_sub_lord' => 'Saturn',
        ],
        [
            'planet_id' => 4,
            'planet_name' => 'Jupiter',
            'degree' => 35.5301,
            'formatted_degree' => '35:31:48',
            'is_retro' => false,
            'norm_degree' => 5.5301,
            'formatted_norm_degree' => '05:31:48',
            'house' => 7,
            'sign' => 'Taurus',
            'sign_lord' => 'Venus',
            'nakshatra' => 'Krittika',
            'nakshatra_lord' => 'Sun',
            'charan' => 3,
            'sub_lord' => 'Mercury',
            'sub_sub_lord' => 'Venus',
        ],
        [
            'planet_id' => 5,
            'planet_name' => 'Venus',
            'degree' => 76.5718,
            'formatted_degree' => '76:34:18',
            'is_retro' => false,
            'norm_degree' => 16.5718,
            'formatted_norm_degree' => '16:34:18',
            'house' => 8,
            'sign' => 'Gemini',
            'sign_lord' => 'Mercury',
            'nakshatra' => 'Ardra',
            'nakshatra_lord' => 'Rahu',
            'charan' => 3,
            'sub_lord' => 'Venus',
            'sub_sub_lord' => 'Jupiter',
        ],
        [
            'planet_id' => 6,
            'planet_name' => 'Saturn',
            'degree' => 32.3971,
            'formatted_degree' => '32:23:49',
            'is_retro' => false,
            'norm_degree' => 2.3971,
            'formatted_norm_degree' => '02:23:49',
            'house' => 7,
            'sign' => 'Taurus',
            'sign_lord' => 'Venus',
            'nakshatra' => 'Krittika',
            'nakshatra_lord' => 'Sun',
            'charan' => 2,
            'sub_lord' => 'Jupiter',
            'sub_sub_lord' => 'Sun',
        ],
        [
            'planet_id' => 7,
            'planet_name' => 'Rahu',
            'degree' => 91.7593,
            'formatted_degree' => '91:45:33',
            'is_retro' => true,
            'norm_degree' => 1.7593,
            'formatted_norm_degree' => '01:45:33',
            'house' => 9,
            'sign' => 'Cancer',
            'sign_lord' => 'Moon',
            'nakshatra' => 'Punarvasu',
            'nakshatra_lord' => 'Jupiter',
            'charan' => 4,
            'sub_lord' => 'Rahu',
            'sub_sub_lord' => 'Jupiter',
        ],
        [
            'planet_id' => 8,
            'planet_name' => 'Ketu',
            'degree' => 271.7593,
            'formatted_degree' => '271:45:33',
            'is_retro' => true,
            'norm_degree' => 1.7593,
            'formatted_norm_degree' => '01:45:33',
            'house' => 3,
            'sign' => 'Capricorn',
            'sign_lord' => 'Saturn',
            'nakshatra' => 'Uttra Shadha',
            'nakshatra_lord' => 'Sun',
            'charan' => 2,
            'sub_lord' => 'Jupiter',
            'sub_sub_lord' => 'Mercury',
        ],
        [
            'planet_id' => 9,
            'planet_name' => 'Ascendant',
            'degree' => 207.92868587120444,
            'formatted_degree' => '207:55:43',
            'is_retro' => false,
            'norm_degree' => 27.9287,
            'formatted_norm_degree' => '27:55:43',
            'house' => 1,
            'sign' => 'Pisces',
            'sign_lord' => 'Venus',
            'nakshatra' => 'Vishakha',
            'nakshatra_lord' => 'Jupiter',
            'charan' => 3,
            'sub_lord' => 'Venus',
            'sub_sub_lord' => 'Jupiter',
        ],
    ];

    public function index()
    {
        $housesPlanets = $this->convertToHouseBasedData($this->kpAstroData);
        
        // Find the Ascendant's sign
        $ascSign = '';
        foreach($this->kpAstroData as $planet) {
            if ($planet['planet_name'] === 'Ascendant') {
                $ascSign = $planet['sign'];
                break;
            }
        }
        
        // Default to Aries if Ascendant not found
        if (empty($ascSign)) {
            $ascSign = 'Aries';
        }
        
        // Get the zodiac number for the Ascendant's sign
        $ascZodiacNum = $this->zodiacSigns[$ascSign] ?? 1;
        
        // Calculate house numbers based on Ascendant's zodiac sign
        $houseNumbers = [];
        for ($i = 1; $i <= 12; $i++) {
            $houseNumbers[$i] = (($ascZodiacNum + $i - 2) % 12) + 1;
        }
        
        return view("kp-astro.kundali", [
            'housesPlanets' => $housesPlanets,
            'houseNumbers' => $houseNumbers
        ]);
    
    }

    public function kundali()
    {
        $housesPlanets = $this->convertToHouseBasedData($this->kpAstroData);
        
        // Find the Ascendant's sign
        $ascSign = '';
        foreach($this->kpAstroData as $planet) {
            if ($planet['planet_name'] === 'Ascendant') {
                $ascSign = $planet['sign'];
                break;
            }
        }
        
        // Default to Aries if Ascendant not found
        if (empty($ascSign)) {
            $ascSign = 'Aries';
        }
        
        // Get the zodiac number for the Ascendant's sign
        $ascZodiacNum = $this->zodiacSigns[$ascSign] ?? 1;
        
        // Calculate house numbers based on Ascendant's zodiac sign
        $houseNumbers = [];
        for ($i = 1; $i <= 12; $i++) {
            $houseNumbers[$i] = (($ascZodiacNum + $i - 2) % 12) + 1;
        }
        
        return view("kp-astro.kundali", [
            'housesPlanets' => $housesPlanets,
            'houseNumbers' => $houseNumbers
        ]);
    }

    public function convertToHouseBasedData($kpAstroData)
    {
        $houseData = [];

        for($i = 1; $i <= 12; $i++) {
            $houseData[$i] = [
                'houseNumber' => $i,
                'sign' => '',
                'signLord' => '',
                'planets' => []
            ];
        }

        $ascHouse = 0;
        foreach($kpAstroData as $planet) {
            if ($planet['planet_name'] === 'Ascendant') {
                $ascHouse = $planet['house'];
                break;
            }
        }

        if ($ascHouse === 0) {
            $ascHouse = 1;
        }


        $houseOffset = $ascHouse - 1;

        foreach ($kpAstroData as $planet) {
            if ($planet['planet_name'] === 'Ascendant') {
                continue;
            }
            
            // Calculate the adjusted house number
            $originalHouse = $planet['house'];
            $adjustedHouse = (($originalHouse - $houseOffset + 11) % 12) + 1;
            
            // Update the planet's house number
            $planet['house'] = $adjustedHouse;
            $houseNum = $adjustedHouse;

            if(empty($houseData[$houseNum]['sign'])) {
                $houseData[$houseNum]['sign'] = $planet['sign'];
                $houseData[$houseNum]['signLord'] = $planet['sign_lord'];
            }

            $houseData[$houseNum]['planets'][] = [
                'name' => $planet['planet_name'],
                'shortName' => $this->getShortName($planet['planet_name']),
                'degree' => (int) $planet['norm_degree'],
                'isRetro' => $planet['is_retro'],
                'nakshatra' => $planet['nakshatra'],
                'nakshatraLord' => $planet['nakshatra_lord'],
                'subLord' => $planet['sub_lord']
            ];
        }
        return $houseData;
    }

    function getShortName($planetName)
    {
        $shortNames = [
            'Sun' => 'Su',
            'Moon' => 'Mo',
            'Mars' => 'Ma',
            'Mercury' => 'Me',
            'Jupiter' => 'Ju',
            'Venus' => 'Ve',
            'Saturn' => 'Sa',
            'Rahu' => 'Ra',
            'Ketu' => 'Ke',
            'Ascendant' => 'ASC'
        ];
        return $shortNames[$planetName] ?? substr($planetName, 0, 2);
    }

}

<?php
function runlist(){
    $ZodiacSigns = array(
    "Aquarius (January 20 - February 18)",
    "Pisces (February 19 - March 20",
    "Aries (March 21 - April 19)",
    "Taurus (April 20 - May 20)",
    "Gemini (May 21 - June 20",
    "Cancer (June 21 - July 22)",
    "Leo (July 23 - August 22",
    "Virgo (August 23 - September 22)",
    "Libra (September 23 - October 22)",
    "Scorpio (October 23 - November 21)",
    "Sagittarius (November 22 - December 21)",
    "Capricorn (December 22 - January 19)"
);

    foreach ($ZodiacSigns as $ZodiacSign){
        echo $ZodiacSign."<br>";
    }
}

$symbolList = array(
    "Aquarius" => "Water Bearer",
    "Pisces" => "Fish",
    "Aries" => "Ram",
    "Taurus" => "Bull",
    "Gemini" => "Twins",
    "Cancer" => "Crab",
    "Leo" => "Lion",
    "Virgo" => "Virgin",
    "Libra" => "Balance",
    "Scorpio" => "Scorpion",
    "Sagittarius" => "Archer",
    "Capricorn" => "Goat"
);
?>
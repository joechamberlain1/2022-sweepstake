<?php

$names = [
  'Joe', 
  'Bryan'
];

$countries = [
    'ENGLAND 🏴󠁧󠁢󠁥󠁮󠁧󠁿',
    'USA 🇺🇸',
    'IRAN 🇮🇷', 
    'WALES 🏴󠁧󠁢󠁷󠁬󠁳󠁿',
    'AUSTRALIA 🇦🇺',
    'FRANCE 🇫🇷',
    'BELGIUM 🇧🇪',
    'BRAZIL 🇧🇷',
    'ARGENTINA 🇦🇷',
    'JAPAN 🇯🇵',
    'QATAR 🇶🇦',
    'SOUTH KOREA 🇰🇷',
    'SAUDI ARABIA 🇸🇦',
    'CAMEROON 🇨🇲',
    'GHANA 🇬🇭',
    'MOROCCO 🇲🇦',
    'SENEGAL 🇸🇳',
    'TUNISIA 🇹🇳',
    'CANADA 🇨🇦',
    'COSTA RICA 🇨🇷',
    'MEXICO 🇲🇽',
    'ECUADOR 🇪🇨',
    'URUGUAY 🇺🇾',
    'CROATIA 🇭🇷',
    'DENMARK 🇩🇰',
    'GERMANY 🇩🇪',
    'NETHERLANDS 🇳🇱',
    'POLAND 🇵🇱',
    'PORTUGAL 🇵🇹',
    'SERBIA 🇷🇸',
    'SPAIN 🇪🇸',
    'SWITZERLAND 🇨🇭'
];

echo "🏆⚽ WELCOME TO THE SILVERSTRIPE 2022 WORLD CUP OFFICE SWEEPSTAKE ⚽🏆" . "\n\n";
sleep(4);
echo "Let's see which team you'll be paired up with...good luck everyone!" . "\n\n";
sleep(4);
echo "Shuffling the names!" . "\n\n";
shuffle($names);
sleep(3);
echo "Shuffling the countries!" . "\n\n";
shuffle($countries);
sleep(3);
echo "Building the tension..." . "\n\n";
sleep(5);

while($name = array_pop($names)){
  echo $name . " is paired with " . array_pop($countries) . "\n\n";
  sleep(1);
}

echo "That concludes the draw! The final is on the 19th of December. See you all then!"

?> 
<?php

$names = [
  'Joe', 
  'Bryan'
];

$countries = [
    'ENGLAND đ´ó §ó ˘ó Ľó Žó §ó ż',
    'USA đşđ¸',
    'IRAN đŽđˇ', 
    'WALES đ´ó §ó ˘ó ˇó Źó łó ż',
    'AUSTRALIA đŚđş',
    'FRANCE đŤđˇ',
    'BELGIUM đ§đŞ',
    'BRAZIL đ§đˇ',
    'ARGENTINA đŚđˇ',
    'JAPAN đŻđľ',
    'QATAR đśđŚ',
    'SOUTH KOREA đ°đˇ',
    'SAUDI ARABIA đ¸đŚ',
    'CAMEROON đ¨đ˛',
    'GHANA đŹđ­',
    'MOROCCO đ˛đŚ',
    'SENEGAL đ¸đł',
    'TUNISIA đšđł',
    'CANADA đ¨đŚ',
    'COSTA RICA đ¨đˇ',
    'MEXICO đ˛đ˝',
    'ECUADOR đŞđ¨',
    'URUGUAY đşđž',
    'CROATIA đ­đˇ',
    'DENMARK đŠđ°',
    'GERMANY đŠđŞ',
    'NETHERLANDS đłđą',
    'POLAND đľđą',
    'PORTUGAL đľđš',
    'SERBIA đˇđ¸',
    'SPAIN đŞđ¸',
    'SWITZERLAND đ¨đ­'
];

echo "đâ˝ WELCOME TO THE SILVERSTRIPE 2022 WORLD CUP OFFICE SWEEPSTAKE â˝đ" . "\n\n";
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
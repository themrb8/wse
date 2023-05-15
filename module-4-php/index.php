<?php
// function name ($f, $l) {
//     echo "Hello, " .$f .' '.$l;
// }
// name ('Mohammad', 'R.');
// $sampleArray = [
//     'name', 
//     'phone',
//     'email',
//     'village',
//     'city',
//     'district'
// ];
// var_dump($sampleArray);

// $name = '33';
// switch ($name) {
//     case 'roman':
//         echo 'hello';
//         break;
//     case 'taskin':
//         echo 'i am the taskin';
//         break;
//     default: {
//         echo 'the default';
//     }
// }


//associative array
// $aArray = [
//     'name' => 'Mohammad R.',
//     'city' => 'Pabna',
//     'pincode' => 6600,
//     'district' => 'Rajshahi',
//     'phone' => 78978978947797,
// ];
// echo 'Hello, I am '. $aArray['name']. ' Live at '. $aArray['city']. ' and pincode is ' .$aArray['pincode']. ' in '. $aArray['district']. '. Here is my phone number: '. $aArray['phone'];
// echo '<br>';
// echo '<pre>';
// var_dump($aArray);
// echo '</pre>';




// //multi-dimensional array
// $discord = [
//     'server_name' => 'shikhun.net',
//     'channels' => [
//         'information' => ['welcome-and-rules', 'notice-board', 'jobs'],
//         'learning resources' => ['english', 'php', 'css', 'wordpress'],
//         'text-channels' => [
//             'practices' => [
//                 'users' => [
//                     'roman' => 'php module 4 - multidimensional array',
//                     'raihan' => 'php basic',
//                     'rumman' => 'html css'
//                 ],
//             ],
//             'help' => [
//                 'users' => [
//                     'roman' => 'php module 4 - multidimensional array',
//                     'raihan' => 'php basic',
//                     'rumman' => 'html css'
//                 ],
//             ],
//             'off-topics' => [
//                 'users' => [
//                     'roman' => 'php module 4 - multidimensional array',
//                     'raihan' => 'php basic',
//                     'rumman' => 'html css'
//                 ],
//             ],
//             'resendential students' => [
//                 'users' => ['rouf', 'nazmul', 'akash', 'shakin', 'raihan', 'rakib', 'rohan'],
//             ],
//         ],
//         'wordpress support engineer' => ['wse', 'wse mentor student exchange'],
//     ],
// ];
// echo $discord['server_name'];
// echo '<pre>';
// var_dump($discord['channels']);
// echo '</pre>';

//php loop

$dummy_data_for_loop = [
    "Ava",
    "Noah",
    "Liam",
    "Emma",
    "Olivia"
];
$dummy_data_for_loop2 = [1,2,3,4,5,6,7,8,9];

// while loop in php
$i = 1;
while($i <= 3) {
    echo 'while: '.$i .' * '.$i. ' = '.$i*$i .PHP_EOL.'<br>';
    $i++;
}

//do while loop in php
do {
    echo 'do while: '.$i .' * '.$i. ' = '.$i*$i .PHP_EOL.'<br>';
    $i++;
} while ($i <= 10);

//for loop in php
for($i; $i <13; $i++) {
    echo 'for loop: '.$i .' * '.$i. ' = '.$i*$i .PHP_EOL.'<br>';
}

//foreach loop in php
foreach($dummy_data_for_loop as $keyId => $fel) {
    echo 'foreach loop: array key-'.$keyId.' array value-'. $fel.PHP_EOL.'<br>';
}
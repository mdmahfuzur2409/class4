<?php
// //switch
// $fevcolor = 'green';
// switch($fevcolor){
// case "red";
// echo "Your Fav Coloure IS REd";
// break;
// case "pink";
// echo "Your Fav Coloure IS pink";
// break;
// case "green";
// echo "Your Fav Coloure IS green";
// break;
// }

echo"<h4>assoceative array</h4>";
$student1= [
    'name'   => "munsur",
    'email' => "munsur45@gamil.com",
    'number' => 111111111,
    'blood group' => 'AB+'

];
echo '<pre>';
echo $student1 ['name'];
echo '</pre>';
echo"<h4>multidimentional array</h4>";//multidimentional arrsy
$student = [
  'user1' => [
        'id'=> 01,
        'name'=>'azad',
        'email'=> 'azad34@gmail.com',
        'social_link'=>[
            'facebook'=>'www.facebook.com',
             'instagram'=>'www.intagram.com'
              ],
    ],
    'user2' => [
        'id'=> 02,
        'name'=>'azad',
        'email'=> 'nadiya34@gmail.com'
    ],
    ];
    echo '<pre>';
print_r($student['user1']['social_link']) ;
echo '</pre>';

//using strtolower/strtoupper/ucwords/strrev/strpos
echo"<h4>using strtolower/strtoupper/ucwords/strrev/strpos</h4>";
$user = [
    'id'=> 0,
    'name'=> 'mahfuz',
    'email'=>'MAHFUZ22@GMAIL.COM',
    'address'=>'Lakshmipur Sadar'
];
echo strtolower($user['email']);
echo '<br>';
echo strtoupper($user['name']);
echo '<br>';
echo ucwords($user['address']);
echo '<br>';
echo strrev($user['address']);

echo '<br>';
$text = 'helloooooooo world';
var_dump(strpos($text,'world')) ;
//replace url
echo"<h4>replace url</h4>";
$text1 = 'Hello everyone how are you all';
$url = strtolower(str_replace(' ','-',$text1)) ;
echo $url;
echo '<br>';
$title = substr($text1,0,14).'......<a href="#">Read More</a>';
echo $title;
//using trim/strlen
echo"<h4>using trim/strlen/md5 / sh1(hasing method) </h4>";
$para = '            nadiya34@gmail.com';
var_dump(trim($para));
echo '<br>';
//strlen
echo strlen($text1);
echo '<br>';
//md5 / sh1(hasing method)
$pass = 487509;
echo md5($pass).'<br>';
echo sha1($pass).'<br>';
echo password_hash($pass,PASSWORD_BCRYPT).'<br>';
 //USER PASS AND DATABASE PASS CHECKING
 $userpss = "inur890";
 $dbpass = password_hash( $userpss,PASSWORD_BCRYPT);
 var_dump(password_verify($userpss, $dbpass)) ;
//  if($userpss== $dbpass){
// echo"Success";
//  }else{
//     echo   "Failed";
//  }
echo '<br>';
<?php
/*
  function that generate a random string for testing purpose
*/
function random_password($length_of_string=8, $print_mode=false, $set='mix'){
    if($set == 'mix') $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    if($set == 'lower-num') $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    if($set == 'upper-num') $str_result = '0123456789abcdefghijklmnopqrstuvwxyz';
    if($set == 'lower') $str_result = 'abcdefghijklmnopqrstuvwxyz';
    if($set == 'upper') $str_result = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    if($set == 'num') $str_result = '0123456789';
    if(!isset($set)) $str_result = '0123456789';
    return substr(str_shuffle($str_result), 0, $length_of_string);
}

/*
  function that encode a password
*/
function ccproxy_encode_password($password, $print_mode=false){
    $translation = [];
    $translation['0'] = 951;
    $translation['1'] = 950;
    $translation['2'] = 949;
    $translation['3'] = 948;
    $translation['4'] = 947;
    $translation['5'] = 946;
    $translation['6'] = 945;
    $translation['7'] = 944;
    $translation['8'] = 943;
    $translation['9'] = 942;
    $translation['a'] = 902;
    $translation['b'] = 901;
    $translation['c'] = 900;
    $translation['d'] = 899;
    $translation['e'] = 898;
    $translation['f'] = 897;
    $translation['g'] = 896;
    $translation['h'] = 895;
    $translation['i'] = 894;
    $translation['j'] = 893;
    $translation['k'] = 892;
    $translation['l'] = 891;
    $translation['m'] = 890;
    $translation['n'] = 889;
    $translation['o'] = 888;
    $translation['p'] = 887;
    $translation['q'] = 886;
    $translation['r'] = 885;
    $translation['s'] = 884;
    $translation['t'] = 883;
    $translation['u'] = 882;
    $translation['v'] = 881;
    $translation['w'] = 880;
    $translation['x'] = 879;
    $translation['y'] = 878;
    $translation['z'] = 877;
    $translation['A'] = 934;
    $translation['B'] = 933;
    $translation['C'] = 932;
    $translation['D'] = 931;
    $translation['E'] = 930;
    $translation['F'] = 929;
    $translation['G'] = 928;
    $translation['H'] = 927;
    $translation['I'] = 926;
    $translation['J'] = 925;
    $translation['K'] = 924;
    $translation['L'] = 923;
    $translation['M'] = 922;
    $translation['N'] = 921;
    $translation['O'] = 920;
    $translation['P'] = 919;
    $translation['Q'] = 918;
    $translation['R'] = 917;
    $translation['S'] = 916;
    $translation['T'] = 915;
    $translation['U'] = 914;
    $translation['V'] = 913;
    $translation['W'] = 912;
    $translation['X'] = 911;
    $translation['Y'] = 910;
    $translation['Z'] = 909;
    $a_password = str_split($password);
    $encoded = '';
    foreach($a_password as $key => $char){
        $encoded .= $translation[$char];
    }
    if($print_mode == false) return $encoded;
    else echo $encoded;
}

/*
  function that decode a password
*/
 function ccproxy_decode_password($encoded_password, $print_mode=false){
    $translation = [];
    $translation['0'] = 951;
    $translation['1'] = 950;
    $translation['2'] = 949;
    $translation['3'] = 948;
    $translation['4'] = 947;
    $translation['5'] = 946;
    $translation['6'] = 945;
    $translation['7'] = 944;
    $translation['8'] = 943;
    $translation['9'] = 942;
    $translation['a'] = 902;
    $translation['b'] = 901;
    $translation['c'] = 900;
    $translation['d'] = 899;
    $translation['e'] = 898;
    $translation['f'] = 897;
    $translation['g'] = 896;
    $translation['h'] = 895;
    $translation['i'] = 894;
    $translation['j'] = 893;
    $translation['k'] = 892;
    $translation['l'] = 891;
    $translation['m'] = 890;
    $translation['n'] = 889;
    $translation['o'] = 888;
    $translation['p'] = 887;
    $translation['q'] = 886;
    $translation['r'] = 885;
    $translation['s'] = 884;
    $translation['t'] = 883;
    $translation['u'] = 882;
    $translation['v'] = 881;
    $translation['w'] = 880;
    $translation['x'] = 879;
    $translation['y'] = 878;
    $translation['z'] = 877;
    $translation['A'] = 934;
    $translation['B'] = 933;
    $translation['C'] = 932;
    $translation['D'] = 931;
    $translation['E'] = 930;
    $translation['F'] = 929;
    $translation['G'] = 928;
    $translation['H'] = 927;
    $translation['I'] = 926;
    $translation['J'] = 925;
    $translation['K'] = 924;
    $translation['L'] = 923;
    $translation['M'] = 922;
    $translation['N'] = 921;
    $translation['O'] = 920;
    $translation['P'] = 919;
    $translation['Q'] = 918;
    $translation['R'] = 917;
    $translation['S'] = 916;
    $translation['T'] = 915;
    $translation['U'] = 914;
    $translation['V'] = 913;
    $translation['W'] = 912;
    $translation['X'] = 911;
    $translation['Y'] = 910;
    $translation['Z'] = 909;
    $a_password = str_split($encoded_password, 3);
    $decoded = '';
    foreach($a_password as $item){
        foreach($translation as $key => $code){
            if($item == $code) $decoded .= $key;
        }
    }
    if($print_mode == false) return $decoded;
    else echo $decoded;
}

/*
  test
*/
$password = random_password();
echo 'Random password: '.$password.'<hr>';
$encoded = ccproxy_encode_password($password, false);
echo 'CCProxy encoded password: '.$encoded.'<hr>';
echo 'CCProxy decoded password: '.ccproxy_decode_password($encoded).'<hr>';

<?php
error_reporting(0);

function check($d, $e, $link) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    
    if ($link == "https://generator.email/") {
        curl_setopt($ch, CURLOPT_HEADER, 1);
    }
    
    curl_setopt($ch, CURLOPT_NOBODY, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    
    $headers = array();
    $headers[] = 'Authority: generator.email';
    $headers[] = 'Upgrade-Insecure-Requests: 1';
    $headers[] = 'User-Agent: Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1';
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3';
    $headers[] = 'Accept-Language: en-US,en;q=0.9';
    $headers[] = 'Cookie: _ga=GA1.2.1164348503.1554262465; _gid=GA1.2.905585996.1554262465; embx=%5B%22$'.$e.'%40$'.$d.'%22%2C%22hcycl%40nongzaa.tk%22%5D; _gat=1; io=-aUNS6XIdbbHj__faWS_; surl='.$d.'%2F$$'.$e.'';
    
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $exec = curl_exec($ch);
    curl_close ($ch);
    return $exec;
}

function reg($e, $r) {
    $ch = curl_init();
    $data = '{"password":"AsuuuuKon59$","monetize":true,"email":"' . $e . '","referral_id":"' . $r . '"}';
    
    curl_setopt($ch, CURLOPT_URL, 'https://api.bigtoken.com/signup');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_NOBODY, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    
    $headers = array();
    $headers[] = 'Accept: application/json';
    $headers[] = 'Referer: https://my.bigtoken.com/signup';
    $headers[] = 'Origin: https://my.bigtoken.com';
    $headers[] = 'X-Requested-With: XMLHttpRequest';
    $headers[] = 'X-Srax-Big-Api-Version: 2';
    $headers[] = 'Content-Type: application/json';
    
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    return curl_exec($ch);
    curl_close ($ch);
}

function get($link) {
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, $link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_NOBODY, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    
    $headers = array();
    $headers[] = 'Authority: bigtoken.page.link';
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8';
    $headers[] = 'Accept-Language: en-US,en;q=0.9';
    
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    return curl_exec($ch);
    curl_close ($ch);
}

function ver($data, $x) {
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, 'https://api.bigtoken.com/signup/email-verification');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_NOBODY, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    
    $headers = array();
    $headers[] = 'Accept: application/json';
    $headers[] = 'Origin: https://my.bigtoken.com';
    $headers[] = 'X-Requested-With: XMLHttpRequest';
    $headers[] = 'Authorization: Bearer '.$x.'';
    $headers[] = 'X-Srax-Big-Api-Version: 2';
    $headers[] = 'User-Agent: Mozilla/5.0 (iPad; CPU OS 11_0 like Mac OS X) AppleWebKit/604.1.34 (KHTML, like Gecko) Version/11.0 Mobile/15A5341f Safari/604.1';
    $headers[] = 'Content-Type: application/json';
    
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
     curl_exec($ch);
    
    return curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close ($ch);
}

function xxx() {
    $s = substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), -13);
    return $s;
}

function getStr($content, $start, $end) {
    $r = explode($start, $content);
    
    if (isset( $r[1] )) {
        $r = explode($end, $r[1]);
        return $r[0];
    }
    
    return '';
}

function dumpUrl($mail)
{
    $my_file = 'result_url.txt';
    $handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
    $data = "https://generator.email/".$mail."\n";
    fwrite($handle, $data);
}

echo 'SC ANDA TERCURI HIYA HIYA'; echo "\r\n\n";

//echo 'Kode Referral ? : ';

$ref = "O2RR51PP0";
//echo 'Mau Berapa ? : ';
    
echo "================"; echo "\r\n";
echo "    Bigtoken "; echo "\r\n";
echo "================"; echo "\r\n";

while(1) {
  
    $ea = xxx();

    $a = [
        'mooecofficail.club',
        'jorosc.tk',
        'jorosc.ml',
        'jorosc.ga',
        'lami4you.info',
        'morteinateb.xyz',
        'mytempdomain.tk',
        'guitarsxltd.com',
        'top5news.fun',
"barbarrianking.com",
"geludkita.tk",
"sargrip.asia",
"mooblan.ml",
"ggmail.guru",
"aminudin.me",
"pengangguran.me",
"officialngentot.cf",
"icloud.do",
"titaspaharpur4.ga",
"noip.com",
"mmclobau.top",
"ganslodot.top"       
    ];
    
    $b = $a[mt_rand(0, count($a) - 1)];
    $email = ''.$ea.'@'.$b.'';
    
    echo '['.date("Y-m-d H:i:s", time()),'] Email : '.$email; 		    
    echo "\r\n";
    
    $register_bt = reg($email, $ref);
    
    // print_r($register_bt);
    
    $msg = getStr($register_bt, "\"message\": \"", "\"");

    if (stripos($register_bt, 'Too Many Attempts.')) {
        
        echo '['.date("Y-m-d H:i:s", time()),'] Gagal Daftar ['.$msg.']';			    
        echo "\r\n";
        
        $ss = getStr($register_bt, 'Retry-After: ', 'X-RateLimit-Reset:');
        $shn = $ss+2;
        
        sleep($shn);
        
        continue;
    } elseif (stripos($register_bt, 'The email has already been taken.')) {
        echo '['.date("Y-m-d H:i:s", time()),'] E-Mail Sudah Terdaftar';			    
        echo "\r\n"; 
        continue;
    } elseif (stripos($register_bt, '204 No Content')) {
        sleep(10);
        
        $linkg = check($b, $ea, "https://generator.email/");
        //echo $linkg;

        $links = getStr($linkg, 'Location: https://generator.email/inbox', '/');
        
        if(!$links) {
            echo '['.date("Y-m-d H:i:s", time()),'] Gagal Dapat Link'; echo "\r\n";
            echo "[".date("Y-m-d H:i:s", time()),"] Tunggu beberapa menit : https://generator.email/".$email; echo "\r\n";
            
            dumpUrl($email);
            
            continue;
        }					
        
        $getem = check($b,$ea,'https://generator.email/inbox'.$links.'/');
        $link = getStr($getem,'none" href="','"');
        
        if (!$link) {
            echo '['.date("Y-m-d H:i:s", time()),'] E-Mail Tidak Ada Isi'; echo "\r\n";
            echo "[".date("Y-m-d H:i:s", time()),"] Check Sendiri : https://generator.email/".$email; echo "\r\n";
            
            dumpUrl($email);

            continue;
        } else {
            echo '['.date("Y-m-d H:i:s", time()),'] Berhasil Dapat Link';
            echo "\r\n";
            
            $getver = get($link);
            $em = getStr($getver,'email=','Content-Security');
            $cod = getStr($getver,'verify?code=','&typ');
            $d = '{"email":"'.trim($em).'","verification_code":"'.$cod.'"}';
            $ver = ver($d,$cod);

            if ($ver == '200') {
                echo '['.date("Y-m-d H:i:s", time()),'] Sukses Verif '.$em.'';
                echo "\r\n";
            } elseif ($ver == '208') {
                echo '['.date("Y-m-d H:i:s", time()),'] Sudah Verif '.$em.'';
                echo "\r\n";
            } elseif ($ver == '422') {
                echo '['.date("Y-m-d H:i:s", time()),'] Salah Format '.$em.'';
                echo "\r\n";
            } elseif($ver == '429') {
                echo '['.date("Y-m-d H:i:s", time()),'] Gagal Verif [Too Many Attempts.] Cek Manual di cdy.txt';
                echo "\r\n";
                
                $data =  "".$link." \r\n";
                $fh = fopen("cdy.txt", "a");
                
                fwrite($fh, $data);
                fclose($fh);
            } else {
                echo '['.date("Y-m-d H:i:s", time()),'] Gagal Verif Cek Manual di cdy.txt';
                echo "\r\n";
                
                $data =  "".$link." \r\n";
                $fh = fopen("cdy.txt", "a");
                
                fwrite($fh, $data);
                fclose($fh);
            }
        }
    } elseif (stripos($register_bt, 'referral_id')) {
        echo '['.date("Y-m-d H:i:s", time()),'] Kode Referral Salah';
        echo "\r\n"; 
        exit;
    } else {
        echo '['.date("Y-m-d H:i:s", time()),'] Gagal Daftar {msg : '.$msg.'}';
        echo "\r\n";
        continue;
    }
}

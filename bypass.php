<?php

function bypass($url,$data){
  $u[]="Host: universal-bypass.org";
  $u[]="origin: chrome-extension://imnfecahdbicdhdpjaimffdmdfnacgje";
  $u[]="user-agent: Mozilla/5.0 (Linux; Android 7.0; Redmi Note 4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.101 Mobile Safari/537.36";
  $u[]="content-type: application/x-www-form-urlencoded";
  $ch=curl_init();
  curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_HTTPHEADER => $u,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_ENCODING => "gzip",
    ));
    return curl_exec($ch);
    curl_close($ch);
}
function banner(){
  $banner="
\e[1;31m░██████╗░░░░░░██╗░░░░░██╗███╗░░██╗██╗░░██╗
\e[1;31m██╔════╝░░░░░░██║░░░░░██║████╗░██║██║░██╔╝
\e[1;31m╚█████╗░█████╗██║░░░░░██║██╔██╗██║█████═╝░
\e[1;37m░╚═══██╗╚════╝██║░░░░░██║██║╚████║██╔═██╗░
\e[1;37m██████╔╝░░░░░░███████╗██║██║░╚███║██║░╚██╗
\e[1;37m╚═════╝░░░░░░░╚══════╝╚═╝╚═╝░░╚══╝╚═╝░░╚═╝
\e[1;32mCreated by \e[1;33mkakatoji\e[0m\n";
echo $banner."\n";
echo "[=>] support smawur,stfly,dan masih banyak lagi\n";
echo "[?] tidak suport bitly,zaa.gl\n";

}
function target($ndase,$buntut){
  $url="https://universal-bypass.org/crowd/query_v1";
  $data="domain=$ndase&path=$buntut";
  return bypass($url,$data);
}
system("clear");
echo banner()."\n";
$inpit=readline("\e[1;31m[+]\e[0m\e[1;36minput shortlink =>\e[1;32m ");
$diurai=parse_url($inpit);
$depan=$diurai["host"];
$belakang=str_replace("/",'',$diurai["path"]);
$hasil=target($depan,$belakang);
if($hasil == true){
echo "\n\e[1;35m[=>] \e[1;33m".$hasil."\n";
}else{
  echo "\n\e[1;31m[?] shortlink not suport bos\e[0m\n";
}

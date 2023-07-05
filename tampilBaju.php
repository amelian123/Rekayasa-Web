<?php
function curl($url){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);
return $output;
}
// alamat localhost untuk file getBaju.php, ambil hasil export JSON
$send = curl("http://localhost/json_baju/getBaju.php");
// mengubah JSON menjadi array
$data = json_decode($send, FALSE);
foreach($data as $row){

echo $row->id_baju."<br/>";
echo $row->jenis."<br/>";
echo $row->ukuran."<br/>";
echo $row->warna."<br/>";
echo $row->harga."<br/><hr/>";
}
?>
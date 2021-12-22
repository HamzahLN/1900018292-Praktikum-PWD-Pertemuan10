<?php
$url = "http://localhost/.vscode/Web%20Service/getdatamhs.php";
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($client);
$result = json_decode($response);
foreach ($result as $r) {
 echo "<p>";
 echo "NIM : " . $r->NIM . "<br />";
 echo "Nama : " . $r->Nama . "<br />";
 echo "jenis kel : " . $r->Jenis_kelamin . "<br />";
 echo "Alamat : " . $r->Alamat . "<br />";
 echo "Tgl Lahir : " . $r->Tanggal_Lahir . "<br />";
 echo "</p>";
}
?>
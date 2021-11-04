

<?php
// membuat fantion dengan nama acak_angka

function acak_angka($panjang = 60) //panjang random 60 bisa di rubah rubah 
{
    $kalakter = '_-123456789ABCDEFGHIZKLMN0PQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $data = ''; //membuat  default data
    //lakukan perulanagan untuk membuat random alphanumaricnya
    for ($i = 1; $i < $panjang; $i++) {
        //membuat random 1 per 1 dari 0 sapai panjang yg di tentukan
        $random = rand(0, strlen($kalakter) - 1);

        $data .= $kalakter{
            $random}; // menggabungkan data rand
    }
    return $data;
}
?>






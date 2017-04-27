<?php

$access_token = "EAAZAYYOeZBWZBMBAAr17HjAZCnBQdGrCiTNvAZCoZATKidz5n4IWNgv3SfCZC2ZAFbdfVF0W1dF7aw3IQPJ9EWV5ZBRdtXskq6ihro5vjJ8lHWDdAOTyxOT33paodWSgvzjlVXxB8sZAiRKYBkPuAuPcTRPJ6klM3rbqPyWXcUft6aywZDZD";

$verify_token = "stephane";

$hub_verify_token = null;

if (isset($_REQUEST['hub_mode']) && $_REQUEST['hub_mode'] == 'subscribe'){
  $challenge = $_REQUEST['hub_challenge'];
  $hub_verify_token = $_REQUEST['hub_verify_token'];
  if ($hub_verify_token === $verify_token){
       header('HTTP/1.1 200 OK');
       echo $challenge;
       die;
  }
}

 $input = json_decode(file_get_contents('php://input'),true);

$sender = $input['entry'][0]['messaging'][0]['sender']['id'];

$messagingArray = $input['entry'][0]['messaging'][0];

$senderActionResponse = [
           "recipient" =>["id" => $sender],
           "sender_action" => "typing_on"
        ];
if(isset($messagingArray['postback'])){
  if($messagingArray['postback']['payload'] == 'first hand shake'){
    begin("Hello there!!!",$sender,$access_token);
      sendRawResponse($senderActionResponse);
    //die();
    Topics();
  }
  else if($messagingArray['postback']['payload'] == 'help'){
              help();
  }
  else if($messagingArray['postback']['payload'] == 'Latest post'){
              Topics();
  }
}


            
          
              
$message = isset($input['entry'][0]['messaging'][0]['message']['text'])? $input['entry'][0]['messaging'][0]['message']['text']:'';



if($message){

        $senderActionResponse = [
           "recipient" =>["id" => $sender],
           "sender_action" => "typing_on"
        ];

                  sendRawResponse($senderActionResponse);

        if (strpos($message, 'malaria') !== false || strpos($message, 'paludisme') !== false || strpos($message, 'moustique') !== false || strpos($message, 'mosquito') !== false || strpos($message, 'mosquit') !== false || strpos($message, 'Moustiq') !== false || strpos($message, 'Mosquit') !== false || strpos($message, 'Paludisme') !== false || strpos($message, 'palu') !== false || strpos($message, 'Malaria') !== false || strpos($message, 'MALARIA') !== false || strpos($message, 'PALUDISME') !== false || strpos($message, 'MOSQUIT') !== false || strpos($message, 'MOUSTIQ') !== false  || strpos($message, 'الملاريا') !== false || strpos($message, 'ملاريا') !== false || strpos($message, 'anophel') !== false || strpos($message, 'anofel') !== false || strpos($message, 'Anophel') !== false || strpos($message, 'Anofel') !== false || strpos($message, 'ANOPHEL') !== false || strpos($message, 'ANOFEL') !== false || strpos($message, 'PALU') !== false || strpos($message, 'Palu') !== false || strpos($message, 'plasmod') !== false || strpos($message, 'Plasmod') !== false || strpos($message, 'PLASMOD') !== false || strpos($message, 'المتصورات') !== false || strpos($message, 'المتصورة') !== false || strpos($message, 'piqure') !== false || strpos($message, 'Piqure') !== false) {
                recha();
                sendRawResponse($senderActionResponse);
                malaria();

    }


// ceci nest pas encore bien implementé
         else if (strpos($message, 'Démarrer') !== false || strpos($message, 'get started') !== false || strpos($message, 'Get started') !== false || strpos($message, 'Empezar') !== false || strpos($message, 'empezar') !== false || strpos($message, 'البدء') !== false || strpos($message, 'بداية') !== false || strpos($message, 'INICIO') !== false || strpos($message, 'Init') !== false || strpos($message, 'demarrer') !== false) {
               
                greeting();

    }



          else if (strpos($message, 'causer') !== false || strpos($message, 'Causer') !== false || strpos($message, 'CAUSER') !== false || strpos($message, 'causez') !== false || strpos($message, 'Causez') !== false || strpos($message, 'CAUSER') !== false || strpos($message, 'Chat') !== false || strpos($message, 'CHAT') !== false || strpos($message, 'chat') !== false) {
               
                accepter();

    }



         else if (strpos($message, 'gonoco') !== false || strpos($message, 'Gonoco') !== false || strpos($message, 'GONOCO') !== false || strpos($message, 'gonor') !== false || strpos($message, 'Gonor') !== false || strpos($message, 'GONOR') !== false || strpos($message, 'gonnoco') !== false || strpos($message, 'GONNOCO') !== false || strpos($message, 'Gonnoco') !== false || strpos($message, 'مرض السيلان') !== false || strpos($message, 'Chaude pis') !== false || strpos($message, 'chaude pis') !== false || strpos($message, 'CHAUDE PIS') !== false || strpos($message, 'Gonnoco') !== false || strpos($message, 'Neisser') !== false || strpos($message, 'neisser') !== false || strpos($message, 'NEISSER') !== false || strpos($message, 'blennor') !== false || strpos($message, 'Blennor') !== false || strpos($message, 'BLENNOR') !== false || strpos($message, 'blenor') !== false || strpos($message, 'Blenor') !== false || strpos($message, 'BLENOR') !== false) {
                rechd();
                sendRawResponse($senderActionResponse);
                gonococcie();

    }


          else if (strpos($message, 'panar') !== false || strpos($message, 'Panar') !== false || strpos($message, 'PANAR') !== false || strpos($message, 'staph') !== false || strpos($message, 'Staph') !== false || strpos($message, 'STAPH') !== false || strpos($message, 'streptoc') !== false || strpos($message, 'Streptoc') !== false || strpos($message, 'STREPTOC') !== false || strpos($message, 'doigt') !== false || strpos($message, 'dedo') !== false || strpos($message, 'finger') !== false || strpos($message, 'Doigt') !== false || strpos($message, 'Dedo') !== false || strpos($message, 'Finger') !== false || strpos($message, 'DOIGT') !== false || strpos($message, 'DEDO') !== false || strpos($message, 'FINGER') !== false || strpos($message, 'estafil') !== false || strpos($message, 'Estafil') !== false || strpos($message, 'ESTAFIL') !== false) {
                rechd();
                sendRawResponse($senderActionResponse);
                staphyl();

    }


          else if (strpos($message, 'yeux') !== false || strpos($message, 'Yeux') !== false || strpos($message, 'YEUX') !== false || strpos($message, 'eye') !== false || strpos($message, 'Eye') !== false || strpos($message, 'EYE') !== false || strpos($message, 'ojos') !== false || strpos($message, 'Ojos') !== false || strpos($message, 'OJOS') !== false || strpos($message, 'catar') !== false || strpos($message, 'Catar') !== false || strpos($message, 'CATAR') !== false || strpos($message, 'conjon') !== false || strpos($message, 'Conjon') !== false || strpos($message, 'CONJON') !== false || strpos($message, 'chala') !== false || strpos($message, 'Chala') !== false || strpos($message, 'CHALA') !== false || strpos($message, 'conjunt') !== false || strpos($message, 'Conjunt') !== false || strpos($message, 'CONJUNT') !== false || strpos($message, 'keratoc') !== false || strpos($message, 'Keratoc') !== false || strpos($message, 'KERATOC') !== false || strpos($message, 'querato') !== false || strpos($message, 'Querato') !== false || strpos($message, 'QUerato') !== false) {
               rechc();
               sendRawResponse($senderActionResponse);
               yeux();

    }


           else if (strpos($message, 'cancer') !== false || strpos($message, 'Cancer') !== false || strpos($message, 'CANCER') !== false || strpos($message, 'cáncer') !== false || strpos($message, 'leuc') !== false || strpos($message, 'Cáncer') !== false || strpos($message, 'Leuc') !== false || strpos($message, 'LEUC') !== false || strpos($message, 'myelo') !== false || strpos($message, 'Myelo') !== false || strpos($message, 'MYELO') !== false || strpos($message, 'tumeur') !== false || strpos($message, 'Tumeur') !== false || strpos($message, 'TUMEUR') !== false) {
               mes();
               sendRawResponse($senderActionResponse);
               cancer();

    }



          else if (strpos($message, 'avc') !== false || strpos($message, 'Avc') !== false || strpos($message, 'AVC') !== false || strpos($message, 'cerebr') !== false || strpos($message, 'Cerebr') !== false || strpos($message, 'Carrer') !== false || strpos($message, 'carrer') !== false || strpos($message, 'CEREBR') !== false || strpos($message, 'brain') !== false || strpos($message, 'Brain') !== false || strpos($message, 'BRAIN') !== false || strpos($message, 'stroke') !== false || strpos($message, 'Stroke') !== false || strpos($message, 'STROKE') !== false || strpos($message, 'CARRER') !== false) {
               recha();
               sendRawResponse($senderActionResponse);
               AVC();

    }



         else if (strpos($message, 'rhuma') !== false || strpos($message, 'Rhuma') !== false || strpos($message, 'RHUMA') !== false || strpos($message, 'rumat') !== false || strpos($message, 'Rumat') !== false || strpos($message, 'RUMAT') !== false || strpos($message, 'rheuma') !== false || strpos($message, 'Rheuma') !== false || strpos($message, 'RHEUMA') !== false || strpos($message, 'reuma') !== false || strpos($message, 'Reuma') !== false || strpos($message, 'REUMA') !== false || strpos($message, 'arthrit') !== false || strpos($message, 'Arthrit') !== false || strpos($message, 'ARTHRIT') !== false || strpos($message, 'artrit') !== false || strpos($message, 'Artrit') !== false || strpos($message, 'ARTRIT') !== false) {
               rechb();
               sendRawResponse($senderActionResponse);
               rhumatisme();

    }

         else if (strpos($message, 'choler') !== false || strpos($message, 'Choler') !== false || strpos($message, 'CHOLER') !== false || strpos($message, 'cólera') !== false || strpos($message, 'Cólera') !== false || strpos($message, 'COLERA') !== false || strpos($message, 'كوليرا') !== false) {
                rechb();
                sendRawResponse($senderActionResponse);
                cholera();

    }


         else if (strpos($message, 'cramp') !== false || strpos($message, 'Cramp') !== false || strpos($message, 'CRAMP') !== false || strpos($message, 'calambr') !== false || strpos($message, 'Calambr') !== false || strpos($message, 'CALAMBR') !== false || strpos($message, 'contrac') !== false || strpos($message, 'Contrac') !== false || strpos($message, 'CONTRAC') !== false || strpos($message, 'musc') !== false || strpos($message, 'Musc') !== false || strpos($message, 'MUSC') !== false || strpos($message, 'hexaquin') !== false || strpos($message, 'Hexaquin') !== false || strpos($message, 'HEXAQUIN') !== false) {
                recha();
                sendRawResponse($senderActionResponse);
                cramp();

    }



          else if (strpos($message, 'MST') !== false || strpos($message, 'mst') !== false || strpos($message, 'Mst') !== false || strpos($message, 'sexuellement trans') !== false || strpos($message, 'Sexuellement trans') !== false || strpos($message, 'SEXUELLEMENT TRANS') !== false || strpos($message, 'sexually trans') !== false || strpos($message, 'Sexually trans') !== false || strpos($message, 'transmisión sexu') !== false || strpos($message, 'Transmisión sexu') !== false || strpos($message, 'TRANSMISION SEXU') !== false || strpos($message, 'Transmission sex') !== false || strpos($message, 'transmission sexu') !== false || strpos($message, 'TRANSMISSION SEXU') !== false) {
                rechc();
                sendRawResponse($senderActionResponse);
                MST();

    }



         else if (strpos($message, 'typho') !== false || strpos($message, 'Typho') !== false || strpos($message, 'TYPHO') !== false || strpos($message, 'fievre typho') !== false || strpos($message, 'tifoid') !== false || strpos($message, 'Fievre typho') !== false || strpos($message, 'FIEVRE TYPHO') !== false || strpos($message, 'حمى التيفوئيد') !== false || strpos($message, 'tifo') !== false || strpos($message, 'Tifoid') !== false || strpos($message, 'TIFOID') !== false || strpos($message, 'TIFO') !== false || strpos($message, 'Tifo') !== false) {
                rechc();
                sendRawResponse($senderActionResponse);
                typhoid();

    }



           else if (strpos($message, 'rhume') !== false || strpos($message, 'Rhume') !== false || strpos($message, 'RHUME') !== false || strpos($message, 'rume') !== false || strpos($message, 'Rume') !== false || strpos($message, 'RUME') !== false || strpos($message, 'cold') !== false || strpos($message, 'Cold') !== false || strpos($message, 'COLD') !== false || strpos($message, 'grippe') !== false || strpos($message, 'Grippe') !== false || strpos($message, 'GRIPPE') !== false || strpos($message, 'frío') !== false || strpos($message, 'Frío') !== false || strpos($message, 'FRIO') !== false || strpos($message, 'gripe') !== false || strpos($message, 'Gripe') !== false || strpos($message, 'GRIPE') !== false || strpos($message, 'nez') !== false || strpos($message, 'NEZ') !== false || strpos($message, 'Nez') !== false || strpos($message, 'nose') !== false || strpos($message, 'NOSE') !== false || strpos($message, 'Nose') !== false || strpos($message, 'froid') !== false || strpos($message, 'FROID') !== false || strpos($message, 'Froid') !== false || strpos($message, 'influenz') !== false || strpos($message, 'Influenz') !== false || strpos($message, 'INFLUENZ') !== false) {
                rechc();
                sendRawResponse($senderActionResponse);
                grippe();

    }




         else if (strpos($message, 'snake') !== false || strpos($message, 'Snake') !== false || strpos($message, 'SNAKE') !== false || strpos($message, 'serpent') !== false || strpos($message, 'Serpent') !== false || strpos($message, 'SERPENT') !== false || strpos($message, 'serpien') !== false || strpos($message, 'Serpien') !== false || strpos($message, 'SERPIEN') !== false || strpos($message, 'bite') !== false || strpos($message, 'Bite') !== false || strpos($message, 'BITE') !== false || strpos($message, 'morde') !== false || strpos($message, 'Morde') !== false || strpos($message, 'MORDE') !== false || strpos($message, 'mordr') !== false || strpos($message, 'Mordr') !== false || strpos($message, 'MORDR') !== false) {
                rechc();
                sendRawResponse($senderActionResponse);
                morsure();

    }


         else if (strpos($message, 'asthm') !== false || strpos($message, 'Asthm') !== false || strpos($message, 'ASTHM') !== false || strpos($message, 'ventolin') !== false || strpos($message, 'Ventolin') !== false || strpos($message, 'VENTOLIN') !== false || strpos($message, 'inhal') !== false || strpos($message, 'Inhal') !== false || strpos($message, 'INHAL') !== false || strpos($message, 'asma') !== false || strpos($message, 'Asma') !== false || strpos($message, 'Asma') !== false || strpos($message, 'ASMA') !== false || strpos($message, 'الربو') !== false) {
                rechb();
                sendRawResponse($senderActionResponse);
                asthme();

    }


         else if (strpos($message, 'alzheim') !== false || strpos($message, 'Alzheim') !== false || strpos($message, 'AlZHEIM') !== false || strpos($message, 'الزهايمر') !== false || strpos($message, 'memo') !== false || strpos($message, 'Memo') !== false || strpos($message, 'MEMO') !== false || strpos($message, 'فقدان الذاكرة') !== false || strpos($message, 'montessori') !== false || strpos($message, 'Montessori') !== false || strpos($message, 'MONTESSORI') !== false) {
                recha();
                sendRawResponse($senderActionResponse);
                alzheimer();

    }






         else if (strpos($message, 'diabet') !== false || strpos($message, 'Diabet') !== false || strpos($message, 'Diabet') !== false || strpos($message, 'السكري') !== false || strpos($message, 'glucos') !== false || strpos($message, 'Glucos') !== false || strpos($message, 'GLUCOS') !== false || strpos($message, 'juvenil') !== false || strpos($message, 'Juvenil') !== false || strpos($message, 'JUVENIL') !== false || strpos($message, 'Glucos') !== false || strpos($message, 'hyperglyc') !== false || strpos($message, 'Hypergly') !== false || strpos($message, 'HYPERGLYC') !== false || strpos($message, 'glycem') !== false || strpos($message, 'Glycem') !== false || strpos($message, 'GLYCEM') !== false || strpos($message, 'glicem') !== false || strpos($message, 'Glicem') !== false || strpos($message, 'GLICEM') !== false){
                 recha();
                 sendRawResponse($senderActionResponse);
                diabete();

    }


         else if ($message == "Other illness"){
             oillness();   

    }


         else if($message == "About us"){
          AboutUs();
    }


         else if (strpos($message, 'hepat') !== false || strpos($message, 'Hepat') !== false || strpos($message, 'HEPAT') !== false || strpos($message, 'Hépat') !== false || strpos($message, 'hépat') !== false || strpos($message, 'التهاب الكبد') !== false){
                recha();
                sendRawResponse($senderActionResponse);
                hepatite();

    }

//ohsihgoihgoihgohgofhgofhoifhgoifshoifshohfhhsohohoh===========gfsggfhgfhbfhh=hgthbthbhbte=hbthbththhthb
          else if (strpos($message, 'fractur') !== false || strpos($message, 'Fractur') !== false || strpos($message, 'FRACTUR') !== false || strpos($message, 'cass') !== false || strpos($message, 'Cass') !== false || strpos($message, 'CASS') !== false || strpos($message, 'brok') !== false || strpos($message, 'Brok') !== false || strpos($message, 'BROK') !== false || strpos($message, 'rotur') !== false || strpos($message, 'Rotur') !== false || strpos($message, 'ROTUR') !== false || strpos($message, 'roto') !== false || strpos($message, 'Roto') !== false || strpos($message, 'ROTO') !== false || strpos($message, 'knee fract') !== false || strpos($message, 'Knee fract') !== false || strpos($message, 'KNEE FRACT') !== false){
                recha();
                sendRawResponse($senderActionResponse);
                fracture();

    }


          else if (strpos($message, 'help') !== false || strpos($message, 'Help') !== false || strpos($message, 'HELP') !== false || strpos($message, 'aide') !== false || strpos($message, 'Aide') !== false || strpos($message, 'AIDE') !== false || strpos($message, 'ayud') !== false || strpos($message, 'Ayud') !== false || strpos($message, 'AYUD') !== false || strpos($message, 'مساعدة') !== false){

                help();

    }


          else if (strpos($message, 'ebol') !== false || strpos($message, 'Ebol') !== false || strpos($message, 'EBOL') !== false || strpos($message, 'ébol') !== false || strpos($message, 'الايبولا') !== false || strpos($message, 'MB-003') !== false || strpos($message, 'mb-003') !== false || strpos($message, 'MB003') !== false || strpos($message, 'mb003') !== false || strpos($message, 'fievre hemo') !== false || strpos($message, 'Fievre hemo') !== false || strpos($message, 'FIEVRE HEMO') !== false || strpos($message, 'Hemorrhagic fever') !== false || strpos($message, 'HEMORRHAGIC FEVER') !== false || strpos($message, 'hemorrhagic fever') !== false || strpos($message, 'Fièvre hemo') !== false || strpos($message, 'fièvre hemo') !== false){
                rechc();
                sendRawResponse($senderActionResponse);
                ebola();

    }   


         else if (strpos($message, 'tubercul') !== false || strpos($message, 'Tubercul') !== false || strpos($message, 'TUBERCUL') !== false || strpos($message, ' bacille de Koch') !== false || strpos($message, 'Bacille de Koch') !== false || strpos($message, 'koch') !== false || strpos($message, 'KOCH') !== false || strpos($message, 'bcbg') !== false || strpos($message, 'BCBG') !== false || strpos($message, 'bCBG') !== false || strpos($message, 'السل') !== false || strpos($message, 'poumon') !== false || strpos($message, 'Poumon') !== false || strpos($message, 'POUMON') !== false || strpos($message, 'pulmon') !== false || strpos($message, 'Pulmon') !== false || strpos($message, 'PULMON') !== false){
                rechb();
                sendRawResponse($senderActionResponse);
                tuberculose();

    }


         else if (strpos($message, 'fievre jaun') !== false || strpos($message, 'fievre Jaun') !== false || strpos($message, 'Fievre jaun') !== false || strpos($message, 'FIEVRE JAUN') !== false || strpos($message, 'fièvre jaun') !== false || strpos($message, 'Fièvre jaune') !== false || strpos($message, 'jaunis') !== false || strpos($message, 'Jaunis') !== false || strpos($message, 'JAUNIS') !== false || strpos($message, 'yellow fever') !== false || strpos($message, 'Yellow fever') !== false || strpos($message, 'YELLOW FEVER') !== false || strpos($message, 'jaun') !== false || strpos($message, 'Jaun') !== false || strpos($message, 'JAUN') !== false || strpos($message, 'حمى صفراء') !== false || strpos($message, 'fiebre amarilla') !== false || strpos($message, 'FIEBRE AMARILLA') !== false || strpos($message, 'Fiebre amarilla') !== false){
                recha();
                sendRawResponse($senderActionResponse);
                fievrejaune();

    }


         else if (strpos($message, 'hemorro') !== false || strpos($message, 'hemoro') !== false || strpos($message, 'hémorro') !== false || strpos($message, 'hémoro') !== false || strpos($message, 'anus') !== false || strpos($message, 'Anus') !== false || strpos($message, 'ANUS') !== false || strpos($message, 'rectum') !== false || strpos($message, 'Rectum') !== false || strpos($message, 'RECTUM') !== false || strpos($message, 'ano') !== false || strpos($message, 'Ano') !== false || strpos($message, 'ANO') !== false || strpos($message, 'شرج') !== false || strpos($message, 'البواسير مرض') !== false){
                recha();
                sendRawResponse($senderActionResponse);
                hemorroid();

    }


         else if (strpos($message, 'renal') !== false || strpos($message, 'Renal') !== false || strpos($message, 'RENAL') !== false || strpos($message, 'Rein') !== false || strpos($message, 'rein') !== false || strpos($message, 'REIN') !== false || strpos($message, 'riñón') !== false || strpos($message, 'Riñón') !== false || strpos($message, 'RINON') !== false || strpos($message, 'كلوي') !== false || strpos($message, 'kidney') !== false || strpos($message, 'Kidney') !== false){
                rechc();
                sendRawResponse($senderActionResponse);
                reinale();

    }


          else if (strpos($message, 'appendic') !== false || strpos($message, 'Appendic') !== false || strpos($message, 'APPENDIC') !== false || strpos($message, 'apendic') !== false || strpos($message, 'Apendic') !== false || strpos($message, 'APENDIC') !== false || strpos($message, 'التهاب الزائدة الدودية') !== false){
                rechb();
                sendRawResponse($senderActionResponse);
                appendicite();

    }




          else if (strpos($message, 'hyperten') !== false || strpos($message, 'HYPERTEN') !== false || strpos($message, 'Hyperten') !== false || strpos($message, 'Cardio') !== false || strpos($message, 'cardio') !== false || strpos($message, 'CARDIO') !== false || strpos($message, 'heart') !== false || strpos($message, 'HEART') !== false || strpos($message, 'Heart') !== false || strpos($message, 'heart attack') !== false || strpos($message, 'Heart attack') !== false || strpos($message, 'HEART ATTACK') !== false || strpos($message, 'blood press') !== false || strpos($message, 'Blood press') !== false || strpos($message, 'BLOOD PRESS') !== false || strpos($message, 'pression arter') !== false || strpos($message, 'Pression art') !== false || strpos($message, 'PRESSION ART') !== false || strpos($message, 'ACV') !== false || strpos($message, 'acv') !== false || strpos($message, 'Acv') !== false || strpos($message, 'coeur') !== false || strpos($message, 'Coeur') !== false || strpos($message, 'COEUR') !== false || strpos($message, 'systo') !== false || strpos($message, 'Systo') !== false || strpos($message, 'SYSTO') !== false || strpos($message, 'diasto') !== false || strpos($message, 'Diasto') !== false || strpos($message, 'DIASTO') !== false || strpos($message, 'pression sangu') !== false || strpos($message, 'Pression sangu') !== false || strpos($message, 'PRESSION SANG') !== false || strpos($message, 'card') !== false || strpos($message, 'Card') !== false || strpos($message, 'CARD') !== false || strpos($message, 'متعلق بفم المعدة') !== false || strpos($message, 'arter') !== false || strpos($message, 'pressur') !== false || strpos($message, 'Arter') !== false || strpos($message, 'Pressur') !== false || strpos($message, 'ARTER') !== false || strpos($message, 'PRESSUR') !== false || strpos($message, 'Tension') !== false || strpos($message, 'tension') !== false || strpos($message, 'TENSION') !== false){
                rechb();
                sendRawResponse($senderActionResponse);
                ACV();

    }
 


         else if (strpos($message, 'yes') !== false || strpos($message, 'Yes') !== false || strpos($message, 'YES') !== false || strpos($message, 'OUI') !== false || strpos($message, 'oui') !== false || strpos($message, 'Oui') !== false || strpos($message, 'sí') !== false || strpos($message, 'Sí')!== false || strpos($message, 'نعم') !== false || strpos($message, 'ok') !== false || strpos($message, 'Ok') !== false || strpos($message, 'OK') !== false) {
                
                accepter();

    }


//fgjdhbgkfdhbvikdfhbkidhnbkdghoikbhogdihboilhobgdhnbiguuuuurgiuhjoihtohoihgboihgoighoitg
         else if (strpos($message, 'medicam') !== false || strpos($message, 'Medicam') !== false || strpos($message, 'MEDICAM') !== false || strpos($message, 'medicat') !== false || strpos($message, 'Medicat') !== false || strpos($message, 'MEDICAT') !== false || strpos($message, 'drug') !== false || strpos($message, 'Drug')!== false || strpos($message, 'DRUG') !== false || strpos($message, 'drog') !== false || strpos($message, 'Drog') !== false || strpos($message, 'DROG') !== false || strpos($message, 'comprim') !== false || strpos($message, 'Comprim') !== false || strpos($message, 'COMPRIM') !== false) {
                
                Medicaments();

    }



          else if (strpos($message, 'fever') !== false || strpos($message, 'Fever') !== false || strpos($message, 'FEVER') !== false || strpos($message, 'fievr') !== false || strpos($message, 'Fievr') !== false || strpos($message, 'FIEVR') !== false || strpos($message, 'fiebr') !== false || strpos($message, 'Fiebr')!== false || strpos($message, 'FIEBR') !== false || strpos($message, 'temperat') !== false || strpos($message, 'Temperat') !== false || strpos($message, 'TEMPERAT') !== false || strpos($message, 'Thermome') !== false || strpos($message, 'thermome') !== false || strpos($message, 'THERMOME') !== false) {
                rechb();
                sendRawResponse($senderActionResponse);
                fever();

    }

        else if (strpos($message, 'no') !== false || strpos($message, 'No') !== false || strpos($message, 'NO') !== false || strpos($message, 'ليس') !== false || strpos($message, 'non') !== false || strpos($message, 'Non') !== false || strpos($message, 'NON') !== false || strpos($message, 'nada') !== false || strpos($message, 'NADA') !== false || strpos($message, 'Nada') !== false || strpos($message, 'jamais') !== false) {

                refuser();

    }



        else if (strpos($message, 'diarr') !== false || strpos($message, 'Diarr') !== false || strpos($message, 'DIARR') !== false || strpos($message, 'diarh') !== false || strpos($message, 'Diarh') !== false || strpos($message, 'DIARH') !== false || strpos($message, 'pooh') !== false || strpos($message, 'Pooh') !== false || strpos($message, 'POOH') !== false || strpos($message, 'caca') !== false || strpos($message, 'Caca') !== false || strpos($message, 'CACA') !== false || strpos($message, 'KAKA') !== false || strpos($message, 'kaka') !== false || strpos($message, 'Kaka') !== false) {
                rechb();
                sendRawResponse($senderActionResponse);
                diarhee();

    }

        else if (strpos($message, 'sida') !== false || strpos($message, 'aids') !== false || strpos($message, 'Sida') !== false || strpos($message, 'SIDA') !== false || strpos($message, 'Aids') !== false || strpos($message, 'AIDS') !== false || strpos($message, 'vih') !== false || strpos($message, 'Vih') !== false || strpos($message, 'VIH') !== false || strpos($message, 'immun') !== false || strpos($message, 'Immun') !== false || strpos($message, 'IMMUN') !== false || strpos($message, 'cd4') !== false || strpos($message, 'CD4') !== false || strpos($message, 'Cd4') !== false || strpos($message, 'lymphocy') !== false || strpos($message, 'Lymphocy') !== false || strpos($message, 'LYMPHOCY') !== false || strpos($message, 'mst') !== false || strpos($message, 'MST') !== false || strpos($message, 'Mst') !== false || strpos($message, 'hiv') !== false || strpos($message, 'Hiv') !== false || strpos($message, 'HIV') !== false) {
                rechb();
                sendRawResponse($senderActionResponse);
                VIH();

    }

         else if (strpos($message, 'thank') !== false || strpos($message, 'Thank') !== false || strpos($message, 'merci') !== false || strpos($message, 'THANK') !== false || strpos($message, 'Merci') !== false || strpos($message, 'MERCI') !== false || strpos($message, 'شكرا') !== false || strpos($message, 'Gracia') !== false || strpos($message, 'gracia') !== false || strpos($message, 'GRACIA') !== false) {

                thanks();

    }  

         else if (strpos($message, 'sante') !== false || strpos($message, 'Sante') !== false || strpos($message, 'SANTE') !== false || strpos($message, 'HEALTH') !== false || strpos($message, 'health') !== false || strpos($message, 'Health') !== false || strpos($message, 'salud') !== false || strpos($message, 'Salud') !== false || strpos($message, 'SALUD') !== false || strpos($message, 'maladi') !== false || strpos($message, 'Maladi') !== false || strpos($message, 'MALADI') !== false || strpos($message, 'illness') !== false || strpos($message, 'Illness') !== false || strpos($message, 'ILLNESS') !== false || strpos($message, 'sickness') !== false || strpos($message, 'Sickness') !== false || strpos($message, 'SICKNESS') !== false || strpos($message, 'DISEASE') !== false || strpos($message, 'disease') !== false || strpos($message, 'Disease') !== false) {

                sante();

    }



          else if (strpos($message, 'Pregnant') !== false || strpos($message, 'pregnant') !== false || strpos($message, 'PREGNANT') !== false || strpos($message, 'ENCEINT') !== false || strpos($message, 'Enceint') !== false || strpos($message, 'enceint') !== false || strpos($message, 'gestation') !== false || strpos($message, 'Gestation') !== false || strpos($message, 'GESTATION') !== false || strpos($message, 'حامل') !== false || strpos($message, 'embarazada') !== false || strpos($message, 'EMBARAZADA') !== false || strpos($message, 'Embarazada') !== false || strpos($message, 'femmes enceint') !== false || strpos($message, 'femme enceint') !== false || strpos($message, 'Grosse') !== false || strpos($message, 'GROSSE') !== false || strpos($message, 'grosse') !== false || strpos($message, 'belly') !== false || strpos($message, 'Belly') !== false || strpos($message, 'BELLY') !== false || strpos($message, 'معدة') !== false || strpos($message, 'VIENTRE') !== false || strpos($message, 'vientre') !== false || strpos($message, 'Vientre') !== false || strpos($message, 'grosses') !== false || strpos($message, 'Grosses') !== false || strpos($message, 'grosse') !== false || strpos($message, 'pregnan') !== false || strpos($message, 'Pregnan') !== false || strpos($message, 'PREGNAN') !== false) {
                rechc();
                sendRawResponse($senderActionResponse);
                pregnant();

                
    }
    

         else if (strpos($message, 'Pneumon') !== false || strpos($message, 'pneumon') !== false || strpos($message, 'PNEUMON') !== false || strpos($message, 'breath') !== false || strpos($message, 'Breath') !== false || strpos($message, 'BREATH') !== false || strpos($message, 'respir') !== false || strpos($message, 'Respir') !== false || strpos($message, 'RESPIR') !== false || strpos($message, 'الالتهاب الرئوي') !== false || strpos($message, 'pulmón') !== false || strpos($message, 'Pulmón') !== false || strpos($message, 'dyspn') !== false || strpos($message, 'Dyspn') !== false || strpos($message, 'DYSPN') !== false || strpos($message, 'disne') !== false || strpos($message, 'Disne') !== false || strpos($message, 'lung') !== false || strpos($message, 'LUNG') !== false || strpos($message, 'Lung') !== false || strpos($message, 'poumo') !== false || strpos($message, 'Poumo') !== false || strpos($message, 'POUMO') !== false) {
                recha();
                sendRawResponse($senderActionResponse);
                pneumonie();

                
    }


         else if (strpos($message, 'siphil') !== false || strpos($message, 'Siphil') !== false || strpos($message, 'SIPHIL') !== false || strpos($message, 'syphil') !== false || strpos($message, 'Syphil') !== false || strpos($message, 'SYPHIL') !== false || strpos($message, 'sífil') !== false || strpos($message, 'Sífil') !== false || strpos($message, 'SIFIL') !== false || strpos($message, 'sifil') !== false || strpos($message, 'Sifil') !== false || strpos($message, 'الزهري') !== false) {
                rechc();
                sendRawResponse($senderActionResponse);
                siphilis();

                
    }


          else if (strpos($message, 'herpe') !== false || strpos($message, 'Herpe') !== false || strpos($message, 'HERPE') !== false || strpos($message, 'الهربس') !== false || strpos($message, 'ITS') !== false) {
                rechb();
                sendRawResponse($senderActionResponse);
                herpes();

                
    }



          else if (strpos($message, 'prostat') !== false || strpos($message, 'Prostat') !== false || strpos($message, 'PROSTAT') !== false || strpos($message, 'psa') !== false || strpos($message, 'Psa') !== false || strpos($message, 'PSA') !== false || strpos($message, 'ADT') !== false || strpos($message, 'البروستات') !== false) {
                rechb();
                sendRawResponse($senderActionResponse);
                prostate();

                
    }



          else if (strpos($message, 'Ulcer') !== false || strpos($message, 'ulcer') !== false || strpos($message, 'ULCER') !== false || strpos($message, 'apcè') !== false || strpos($message, 'Apcè') !== false || strpos($message, 'abs') !== false || strpos($message, 'Abs') !== false || strpos($message, 'ABS') !== false || strpos($message, 'abc') !== false || strpos($message, 'Abc') !== false || strpos($message, 'ABC') !== false || strpos($message, 'ABS') !== false) {
                rechc();
                sendRawResponse($senderActionResponse);
                ulcere();

                
    }


          else if (strpos($message, 'sinus') !== false || strpos($message, 'Sinus') !== false || strpos($message, 'SINUS') !== false || strpos($message, 'إلتهاب الجيب') !== false || strpos($message, 'congest') !== false || strpos($message, 'Congest') !== false || strpos($message, 'CONGEST') !== false || strpos($message, 'ازدحام') !== false || strpos($message, 'تخفيف العبء') !== false) {
                recha();
                sendRawResponse($senderActionResponse);
                sinusite();

                
    }



          else if (strpos($message, 'stres') !== false || strpos($message, 'Stres') !== false || strpos($message, 'STRES') !== false || strpos($message, 'إجهاد') !== false || strpos($message, 'estr') !== false || strpos($message, 'Estr') !== false || strpos($message, 'ESTR') !== false || strpos($message, 'ango') !== false || strpos($message, 'Ango') !== false || strpos($message, 'ANGO') !== false || strpos($message, 'ansi') !== false || strpos($message, 'Ansi') !== false || strpos($message, 'ANSI') !== false || strpos($message, 'قلق') !== false) {
                recha();
                sendRawResponse($senderActionResponse);
                stress();

                
    }


          else if (strpos($message, 'grippe av') !== false || strpos($message, 'Grippe av') !== false || strpos($message, 'GRIPPE AV') !== false || strpos($message, 'aviair') !== false || strpos($message, 'Aviair') !== false || strpos($message, 'AVIAIR') !== false || strpos($message, 'GRIPE AV') !== false || strpos($message, 'gripe av') !== false || strpos($message, 'Gripe av') !== false || strpos($message, 'bird f') !== false || strpos($message, 'Bird f') !== false || strpos($message, 'BIRD F') !== false || strpos($message, 'flu') !== false || strpos($message, 'Flu') !== false || strpos($message, 'FLU') !== false || strpos($message, 'h5n1') !== false || strpos($message, 'H5n1') !== false || strpos($message, 'H5N1') !== false || strpos($message, 'avian influenz') !== false || strpos($message, 'Avian influenz') !== false || strpos($message, 'AVIAN INFLUENZ') !== false) {
                recha();
                sendRawResponse($senderActionResponse);
                grippeA();

                
    }




          else if (strpos($message, 'dent') !== false || strpos($message, 'Dent') !== false || strpos($message, 'DENT') !== false || strpos($message, 'deca') !== false || strpos($message, 'Deca') !== false || strpos($message, 'DECA') !== false || strpos($message, 'نخر الأسنان') !== false || strpos($message, 'teeth') !== false || strpos($message, 'Teeth') !== false || strpos($message, 'TEETH') !== false || strpos($message, 'bouche') !== false || strpos($message, 'Bouche') !== false || strpos($message, 'BOUCHE') !== false || strpos($message, 'mouth') !== false || strpos($message, 'Mouth') !== false || strpos($message, 'MOUTH') !== false) {
                rechb();
                sendRawResponse($senderActionResponse);
                dentition();

                
    }



          else if (strpos($message, 'maux') !== false || strpos($message, 'Maux') !== false || strpos($message, 'MAUX') !== false || strpos($message, 'tete') !== false || strpos($message, 'Tete') !== false || strpos($message, 'TETE') !== false || strpos($message, 'head') !== false || strpos($message, 'Head') !== false || strpos($message, 'HEAD') !== false || strpos($message, 'cabez') !== false || strpos($message, 'Cabez') !== false || strpos($message, 'CABEZ') !== false || strpos($message, 'الرأس') !== false || strpos($message, 'nerf') !== false || strpos($message, 'Nerf') !== false || strpos($message, 'NERF') !== false || strpos($message, 'nerv') !== false || strpos($message, 'Nerv') !== false || strpos($message, 'NERV') !== false) {
                rechc();
                sendRawResponse($senderActionResponse);
                tete();

                
    }



          else if (strpos($message, 'chlam') !== false || strpos($message, 'Chlam') !== false || strpos($message, 'CHLAM') !== false || strpos($message, 'الكلاميديا') !== false || strpos($message, 'azythromyc') !== false || strpos($message, 'Azythromyc') !== false || strpos($message, 'sífil') !== false || strpos($message, 'doxycyc') !== false || strpos($message, 'Doxycyc ') !== false || strpos($message, 'clam') !== false || strpos($message, 'Clam') !== false || strpos($message, 'CLAM') !== false) {
                rechc();
                sendRawResponse($senderActionResponse);
                chlamydia();

                
    }


         else if (strpos($message, 'estom') !== false || strpos($message, 'Estom') !== false || strpos($message, 'ESTOM') !== false || strpos($message, 'stomac') !== false || strpos($message, 'estóm') !== false || strpos($message, 'Estóm') !== false || strpos($message, 'gastr') !== false || strpos($message, 'Gastr') !== false || strpos($message, 'GASTR') !== false || strpos($message, 'gástr') !== false || strpos($message, 'Gástr') !== false || strpos($message, 'معدة') !== false || strpos($message, 'الاض') !== false) {
                rechb();
                sendRawResponse($senderActionResponse);
                estomac();

                
    }


          else if (strpos($message, 'mening') !== false || strpos($message, 'Mening') !== false || strpos($message, 'MENING') !== false || strpos($message, 'التهاب السحايا') !== false) {
                recha();
                sendRawResponse($senderActionResponse);
                meningite();
                
    }




         else if (strpos($message, 'locat') !== false || strpos($message, 'local') !== false || strpos($message, 'geoloc') !== false || strpos($message, 'Locat') !== false || strpos($message, 'Local') !== false || strpos($message, 'Geoloc') !== false || strpos($message, 'LOCAT') !== false || strpos($message, 'LOCAL') !== false || strpos($message, 'GEOLOC') !== false || strpos($message, 'تحديد الموقع الجغرافي') !== false || strpos($message, 'lieu') !== false || strpos($message, 'Lieu') !== false || strpos($message, 'LIEU') !== false || strpos($message, 'endroit') !== false || strpos($message, 'Endroit') !== false || strpos($message, 'ENDROIT') !== false || strpos($message, 'lugar') !== false || strpos($message, 'LUGAR') !== false || strpos($message, 'Lugar') !== false || strpos($message, 'emplacem') !== false || strpos($message, 'Emplacem') !== false || strpos($message, 'EMPLACEM') !== false || strpos($message, 'cart') !== false || strpos($message, 'Cart') !== false || strpos($message, 'CART') !== false || strpos($message, 'MAP') !== false || strpos($message, 'map') !== false || strpos($message, 'Map') !== false || strpos($message, 'hopita') !== false || strpos($message, 'Hopita') !== false || strpos($message, 'HOPITA') !== false || strpos($message, 'hospita') !== false || strpos($message, 'Hospita') !== false || strpos($message, 'HOSPITA') !== false
           || strpos($message, 'pharmac') !== false || strpos($message, 'Pharmac') !== false || strpos($message, 'PHARMAC') !== false || strpos($message, 'farmaci') !== false || strpos($message, 'farmaci') !== false || strpos($message, 'FARMACI') !== false) {

                localisation();

                
    }


        else if (strpos($message, 'call') !== false || strpos($message, 'Call') !== false || strpos($message, 'doctor') !== false || strpos($message, 'Doctor') !== false || strpos($message, 'call doctor') !== false || strpos($message, 'Call doctor') !== false || strpos($message, 'DOCTOR') !== false || strpos($message, 'CALL DOCTOR') !== false || strpos($message, 'CALL') !== false || strpos($message, 'PHONE') !== false || strpos($message, 'phone') !== false || strpos($message, 'Phone') !== false || strpos($message, 'e-consulting') !== false || strpos($message, 'E-consulting') !== false || strpos($message, 'consultation en ligne') !== false || strpos($message, 'CONSULTATION EN LIGNE') !== false || strpos($message, 'Consultation en ligne') !== false || strpos($message, 'online') !== false || strpos($message, 'ONLINE') !== false || strpos($message, 'Online') !== false || strpos($message, 'en ligne') !== false || strpos($message, 'ligne') !== false || strpos($message, 'Ligne') !== false || strpos($message, 'consultation') !== false || strpos($message, 'CONSULTATION') !== false || strpos($message, 'Consultation') !== false || strpos($message, 'consult') !== false || strpos($message, 'Consult') !== false || strpos($message, 'CONSULT') !== false || strpos($message, 'APPEL') !== false || strpos($message, 'appel') !== false || strpos($message, 'Appel') !== false || strpos($message, 'docteur') !== false || strpos($message, 'Docteur') !== false || strpos($message, 'DOCTEUR') !== false || strpos($message, 'MEDECIN') !== false || strpos($message, 'medecin') !== false || strpos($message, 'Medecin') !== false || strpos($message, 'infirmier') !== false || strpos($message, 'Infirmier') !== false || strpos($message, 'e-consult') !== false || strpos($message, 'i-consult') !== false || strpos($message, 'I-consult') !== false){

                appel();

    }

        else if (strpos($message, 'hi bot') !== false || strpos($message, 'Hi bot') !== false || strpos($message, 'bot') !== false || strpos($message, 'Bot') !== false || strpos($message, 'HI bot') !== false || strpos($message, 'BOT') !== false || strpos($message, 'salut') !== false || strpos($message, 'Salut') !== false || strpos($message, 'robot') !== false || strpos($message, 'SALUT') !== false || strpos($message, 'Robot') !== false || strpos($message, 'ROBOT') !== false || strpos($message, 'Démarrer') !== false || strpos($message, 'holla') !== false || strpos($message, 'Holla') !== false || strpos($message, 'HOLLA') !== false || strpos($message, 'home') !== false || strpos($message, 'Acceuil') !== false || strpos($message, 'Home') !== false || strpos($message, 'acceuil') !== false || strpos($message, 'HOME') !== false || strpos($message, 'ACCEUIL') !== false || strpos($message, 'BIENVENUE') !== false || strpos($message, 'Bienvenue') !== false || strpos($message, 'bienvenue') !== false || strpos($message, 'bienven') !== false || strpos($message, 'Bienven') !== false || strpos($message, 'BIENVEN') !== false || strpos($message, 'welcome') !== false || strpos($message, 'welcom') !== false || strpos($message, 'Welcom') !== false || strpos($message, 'WELCOM') !== false || strpos($message, 'bonjour') !== false || strpos($message, 'Bonjour') !== false || strpos($message, 'BONJOUR') !== false || strpos($message, 'good m') !== false || strpos($message, 'good aft') !== false || strpos($message, 'good da') !== false || strpos($message, 'Good aft') !== false || strpos($message, 'GOOD MO') !== false || strpos($message, 'GOOD AFT') !== false || strpos($message, 'good ev') !== false || strpos($message, 'Good ev') !== false || strpos($message, 'GOOD EV') !== false || strpos($message, 'Good ev') !== false || strpos($message, 'Good ev') !== false || $message == "hi" || $message == "Hi" || $message == "HI"){

           $message_to_reply = ["attachment"=>[
           "type"=>"template",
           "payload"=>[
           "template_type"=>"generic",
           "elements"=>[
              [
                "title"=>"HI. WELCOME TO MEYE STEPHANE HEALTH BOT",
                "item_url"=>"http://www.wikihow.com/Category:Health",
                "image_url"=>"https://images.alphacoders.com/658/658238.jpg",
                "subtitle"=>"We aim to improve your state of health on a daily basis by offering you a platform that can make you self-medication and even make online medical consultation with or without doctor",
                "buttons"=>[
                  [
                    "type"=>"web_url",
                    "url"=>"http://www.wikihow.com/Category:Health",
                    "title"=>"View Website"
                  ]  ,         
                        ]
                      ]
                    ]
                  ]
                  ]];

                    $jsonData = [
                       'recipient' => [ 'id' => $sender ],
                       'message' => $message_to_reply 
                   ];

      }
     
 
    

        else if (strpos($message, 'menu') !== false || strpos($message, 'Menu') !== false || strpos($message, 'MENU') !== false || strpos($message, 'sujet') !== false || strpos($message, 'Sujet') !== false || strpos($message, 'SUJET') !== false || strpos($message, 'titre') !== false || strpos($message, 'Titre') !== false || strpos($message, 'TITRE') !== false || strpos($message, 'topic') !== false || strpos($message, 'Topic') !== false || strpos($message, 'TOPIC') !== false || strpos($message, 'theme') !== false || strpos($message, 'Theme') !== false || strpos($message, 'choice list') !== false || strpos($message, 'Choice list') !== false || strpos($message, 'CHOICE LIST') !== false || strpos($message, 'THEME') !== false || strpos($message, 'item') !== false || strpos($message, 'Item') !== false || strpos($message, 'ITEM') !== false || strpos($message, 'site web') !== false || strpos($message, 'Site web') !== false || strpos($message, 'SITE WEB') !== false || strpos($message, 'WEBSITE') !== false || strpos($message, 'website') !== false || strpos($message, 'Website') !== false) {
    
                   $jsonData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => ["text"=>"Choose one of the topics belows :)",

                    "quick_replies"=>[
                          ["content_type"=>"text",
                          "title"=>"Medication",
                          "payload"=>"SUPPLEMENT_1",
                          "image_url"=>"https://cdn1.iconfinder.com/data/icons/medicato/32/pills_3-512.png"
                          ],
                          ["content_type"=>"text",
                          "title"=>"Chat Doctor",
                          "payload"=>"USER_DEFINED_PAYLOAD",
                          "image_url"=>"https://cdn4.iconfinder.com/data/icons/medical-14/512/7-512.png"
                          ],
                          ["content_type"=>"text",
                          "title"=>"pharmacy's location",
                          "payload"=>"SUPPLEMENT_1",
                          "image_url"=>"https://cdn2.iconfinder.com/data/icons/circle-icons-1/64/location-512.png"
                          ],
                          ["content_type"=>"text",
                          "title"=>"Pregnant",
                          "payload"=>"SUPPLEMENT_1",
                          "image_url"=>"https://cdn1.iconfinder.com/data/icons/medical-services-1-2/380/Prenatal_Care-512.png"
                          ],
                          ["content_type"=>"text",
                          "title"=>"e-consulting",
                          "payload"=>"SUPPLEMENT_1",
                          "image_url"=>"https://cdn2.iconfinder.com/data/icons/flat-style-svg-icons-part-1/512/phone_number_telephone-512.png"
                          ],
                          ["content_type"=>"text",
                          "title"=>"Help",
                          "payload"=>"SUPPLEMENT_1",
                          "image_url"=>"https://cdn1.iconfinder.com/data/icons/ui-for-web-and-mobile/512/Ui-11-512.png"
                          ],
                          ["content_type"=>"text",
                          "title"=>"About us",
                          "payload"=>"SUPPLEMENT_1",
                          "image_url"=>"https://cdn0.iconfinder.com/data/icons/green-cloud-icon-set-version-02/502/13_cloud_info_information-256.png"
                          ]

                      ],
                    ]
                    
                   ];

      }  


        else {

               $errorMessage = [
                  'recipient' => [ 'id' => $sender ],
                  'message' =>  ["text" => "Sorry about that .i can't understand your question or this disease is not yet available. refer to HELP to learn how to use me or say something like topics ,help or typing any illness's name to get information about it :(",
                  "quick_replies"=>[
                         ["content_type"=>"text",
                          "title"=>"Medication",
                          "payload"=>"SUPPLEMENT_1",
                          "image_url"=>"https://cdn1.iconfinder.com/data/icons/medicato/32/pills_3-512.png"
                          ],
                          ["content_type"=>"text",
                          "title"=>"Chat Doctor",
                          "payload"=>"USER_DEFINED_PAYLOAD",
                          "image_url"=>"https://cdn4.iconfinder.com/data/icons/medical-14/512/7-512.png"
                          ],
                          ["content_type"=>"text",
                          "title"=>"pharmacy's location",
                          "payload"=>"SUPPLEMENT_1",
                          "image_url"=>"https://cdn2.iconfinder.com/data/icons/circle-icons-1/64/location-512.png"
                          ],
                          ["content_type"=>"text",
                          "title"=>"Pregnant",
                          "payload"=>"SUPPLEMENT_1",
                          "image_url"=>"https://cdn1.iconfinder.com/data/icons/medical-services-1-2/380/Prenatal_Care-512.png"
                          ],
                          ["content_type"=>"text",
                          "title"=>"e-consulting",
                          "payload"=>"SUPPLEMENT_1",
                          "image_url"=>"https://cdn2.iconfinder.com/data/icons/flat-style-svg-icons-part-1/512/phone_number_telephone-512.png"
                          ],
                          ["content_type"=>"text",
                          "title"=>"Help",
                          "payload"=>"SUPPLEMENT_1",
                          "image_url"=>"https://cdn1.iconfinder.com/data/icons/ui-for-web-and-mobile/512/Ui-11-512.png"
                          ],
                          ["content_type"=>"text",
                          "title"=>"About us",
                          "payload"=>"SUPPLEMENT_1",
                          "image_url"=>"https://cdn0.iconfinder.com/data/icons/green-cloud-icon-set-version-02/502/13_cloud_info_information-256.png"
                          ]
                        ]
                      ]   
               ];
               error($errorMessage);
    }

    

        $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

        $ch = curl_init($url);
        curl_setopt($ch,CURLOPT_POST,1);
        //curl_setopt($ch,CURLOPT_POSTFIELDS,$jsonData);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($jsonData));
        curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
        $result = curl_exec($ch);
        curl_close($ch);
}




// =====================DEFINITION DE QUELQUES FONCTIONS=============================

//=================fonction de semblant d'ecriture======================

function sendRawResponse(){
  global $senderActionResponse;
  global $access_token;

  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$senderActionResponse);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($senderActionResponse));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);


}

//=================fonction du message d'erreur==========================

function error(){
  global $errorMessage;
  global $access_token;

  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$errorMessage);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($errorMessage));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);


}

//=================fonction du bouton de demarrage=======================

function begin($message,$sender,$access_token){
  global $access_token;

  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $jsonData = [
    'recipient' => [ 'id' => $sender ],
    "message"=>[
    "text"=>$message
 ]
 ];
  
  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$jsonData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($jsonData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);


}

//=================fonction malaria===========================

function malaria(){
 global $access_token;
 global $sender;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Recognize Malaria Symptoms",
                    "image_url"=> "http://pad1.whstatic.com/images/thumb/d/df/Recognize-Malaria-Symptoms-Step-1-Version-2.jpg/aid510690-v4-728px-Recognize-Malaria-Symptoms-Step-1-Version-2.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Recognize-Malaria-Symptoms",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Recognize-Malaria-Symptoms",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Prevent Malaria",
            "item_url"=>"http://www.wikihow.com/Prevent-Malaria",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/6/6d/Prevent-Malaria-Step-1-Version-2.jpg/aid510754-v4-728px-Prevent-Malaria-Step-1-Version-2.jpg.webp",
            "subtitle"=>"Prevenir La Malaria",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Prevent-Malaria",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Treat Malaria",
            "item_url"=>"http://www.wikihow.com/Treat-Malaria",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/1/11/Treat-Malaria-Step-9.jpg/aid521747-v4-728px-Treat-Malaria-Step-9.jpg.webp",
            "subtitle"=>"Traiter La Malaria",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-Malaria",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Avoid Mosquito Bites",
            "item_url"=>"http://www.wikihow.com/Avoid-Mosquito-Bites",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/6/6f/9266-6.jpg/aid92966-v4-728px-9266-6.jpg.webp",
            "subtitle"=>"Comment Eviter Les Piqures De Moustiques",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Avoid-Mosquito-Bites",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Get Rid of Mosquitoes",
            "item_url"=>"http://www.wikihow.com/Get-Rid-of-Mosquitoes",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/9/92/Get-Rid-of-Mosquitoes-Step-5-Version-4.jpg/aid46692-v4-728px-Get-Rid-of-Mosquitoes-Step-5-Version-4.jpg.webp",
            "subtitle"=>"Se débarrasser des moustiques",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Get-Rid-of-Mosquitoes",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Prevent Malaria When You are Traveling",
            "item_url"=>"http://www.wikihow.com/Prevent-Malaria-When-You%27re-Traveling",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/8/8b/Prevent-Malaria-When-You%27re-Traveling-Step-10.jpg/aid1129386-v4-728px-Prevent-Malaria-When-You%27re-Traveling-Step-10.jpg.webp",
            "subtitle"=>"Prevenir La Malaria Lorsque Vous Allez En Voyage",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Prevent-Malaria-When-You%27re-Traveling",
                "title"=>"View Website"
              ],
            ]
         ],

                  ]
                ]
                 ]];

 $malariaData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];

  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$malariaData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($malariaData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);


}


//====================fonction de lappel du Docteur===================A docteur
function appel(){
  global $access_token;
  global $sender;

 $jsonCall = [
   "recipient"=>[
    "id"=> $sender
  ],
  "message" =>[
    "attachment" =>[
      "type"=>"template",
         "payload" =>[
            "template_type"=>"button",
            "text"=>"Need to be consulted online? Talk to a Doctor !!!",
            "buttons"=>[
               [
                  "type"=>"phone_number",
                  "title"=>"CALL",
                  "payload"=>"+237696146251"
               ]
            ]
         ]
    ]
  ]
  ];

  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$jsonCall);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($jsonCall));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);


}

//=======================fonction texte de bienvenue====================

function greeting(){
 global $access_token;
 global $sender;

 $jsonGreeting = [
 "setting_type"=>"greeting",
  "greeting"=>[
    "text"=>"Hi {{user_first_name}}, welcome to this bot."
  ]
  ];


  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$jsonGreeting);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($jsonGreeting));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}


//======================fonction pregnant ===============================

function pregnant(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "How To Annonce Your Pregnancy",
                    "image_url"=> "http://pad2.whstatic.com/images/thumb/1/15/Announce-Your-Pregnancy-Step-01.jpg/aid146244-v4-728px-Announce-Your-Pregnancy-Step-01.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Announce-Your-Pregnancy",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Announce-Your-Pregnancy",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Emotionally Prepare for Pregnancy",
            "item_url"=>"http://www.wikihow.com/Emotionally-Prepare-for-Pregnancy",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/b/bd/Cope-With-a-Bisexual-Husband-Step-6-Version-2.jpg/aid1682651-v4-728px-Cope-With-a-Bisexual-Husband-Step-6-Version-2.jpg.webp",
            "subtitle"=>"Preparation Emeotionnele Pour Femmes Enceinte",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Emotionally-Prepare-for-Pregnancy",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Avoid Environmental Toxins During Pregnancy",
            "item_url"=>"http://www.wikihow.com/Avoid-Environmental-Toxins-During-Pregnancy",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/d/d7/Avoid-Environmental-Toxins-During-Pregnancy-Step-01-Version-2.jpg/aid1682602-v4-728px-Avoid-Environmental-Toxins-During-Pregnancy-Step-01-Version-2.jpg.webp",
            "subtitle"=>"Évitez les toxines environnementales pendant la grossesse",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Avoid-Environmental-Toxins-During-Pregnancy",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Reduce-Nausea-During-Pregnancy",
            "item_url"=>"http://www.wikihow.com/Reduce-Nausea-During-Pregnancy",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/b/b6/Reduce-Nausea-During-Pregnancy-Step-1-Version-5.jpg/aid1611081-v4-728px-Reduce-Nausea-During-Pregnancy-Step-1-Version-5.jpg.webp",
            "subtitle"=>"Reduire Les Nausées Durant La Grossesse",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Reduce-Nausea-During-Pregnancy",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Get a Baby to Move for an Ultrasound",
            "item_url"=>"http://www.wikihow.com/Get-a-Baby-to-Move-for-an-Ultrasound",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/b/b6/Get-a-Baby-to-Move-for-an-Ultrasound-Step-3-Version-2.jpg/aid1682240-v4-728px-Get-a-Baby-to-Move-for-an-Ultrasound-Step-3-Version-2.jpg.webp",
            "subtitle"=>"Faire Une Echographie",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Get-a-Baby-to-Move-for-an-Ultrasound",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Calculate Your Due Date",
            "item_url"=>"http://www.wikihow.com/Calculate-Your-Due-Date",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/2/24/Calculate-Your-Due-Date-Step-1-Version-3.jpg/aid1361386-v4-728px-Calculate-Your-Due-Date-Step-1-Version-3.jpg.webp",
            "subtitle"=>"Calculer Votre Date D'echeance ",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Calculate-Your-Due-Date",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Get Pregnant",
            "item_url"=>"http://www.wikihow.com/Get-Pregnant",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/1/17/8540-4.jpg/aid8540-v4-728px-8540-4.jpg.webp",
            "subtitle"=>"Comment Tomber Enceinte",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Get-Pregnant",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Lie Down in Bed During Pregnancy",
            "item_url"=>"http://www.wikihow.com/Lie-Down-in-Bed-During-Pregnancy",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/0/01/Lie-Down-in-Bed-During-Pregnancy-Step-2-Version-3.jpg/aid1868855-v4-728px-Lie-Down-in-Bed-During-Pregnancy-Step-2-Version-3.jpg.webp",
            "subtitle"=>"Descente au lit pendant la grossesse",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Lie-Down-in-Bed-During-Pregnancy",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Identify Braxton Hicks Contractions",
            "item_url"=>"http://www.wikihow.com/Identify-Braxton-Hicks-Contractions",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/f/f6/Identify-Braxton-Hicks-Contractions-Step-1-Version-3.jpg/aid1760819-v4-728px-Identify-Braxton-Hicks-Contractions-Step-1-Version-3.jpg.webp",
            "subtitle"=>"Identifier les contractions de Braxton Hicks",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Identify-Braxton-Hicks-Contractions",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Learn More About Pregnancy Trimesters",
            "item_url"=>"http://www.wikihow.com/Learn-More-About-Pregnancy-Trimesters",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/3/36/Learn-More-About-Pregnancy-Trimesters-Step-1.jpg/aid4912609-v4-728px-Learn-More-About-Pregnancy-Trimesters-Step-1.jpg.webp",
            "subtitle"=>"En Savoir plus sur les Trimestres de Grossesse",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Learn-More-About-Pregnancy-Trimesters",
                "title"=>"View Website"
              ],
            ]
         ],

                  ]
                ]
                 ]];

                 $jsonPregnant1 = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$jsonPregnant1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($jsonPregnant1));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//====================fonction de remerciements du robot===========================

function thanks(){
  global $sender;
  global $access_token;

  $thanksData = [
                 "recipient"=>["id" => $sender],
                 "message"=>["text" => "You are Welcome !!!  :) , do you want other things?",
                  "quick_replies"=>[
                          ["content_type"=>"text",
                          "title"=>"Yes",
                          "payload"=>"SUPPLEMENT_1",
                          "image_url"=>"https://cdn4.iconfinder.com/data/icons/web-ui-color/128/Checkmark-512.png"
                          ],
                          ["content_type"=>"text",
                          "title"=>"No",
                          "payload"=>"USER_DEFINED_PAYLOAD",
                          "image_url"=>"https://cdn2.iconfinder.com/data/icons/greenline/512/crossed-512.png"
                          ],
                 ]
        ]
  ];


  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$thanksData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($thanksData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//=====================fonction acceptation dune demande====================

function accepter(){
 global $sender;
 global $access_token;

         $ouiData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => ["text"=>"Choose or Typing one of the illness below. you can also call a doctor !!! :)  ",

                    "quick_replies"=>[
                          ["content_type"=>"text",
                          "title"=>"Malaria",
                          "payload"=>"SUPPLEMENT_1"
                          ],
                          ["content_type"=>"text",
                          "title"=>"VIH/AIDS",
                          "payload"=>"USER_DEFINED_PAYLOAD"
                          ],
                          ["content_type"=>"text",
                          "title"=>"Cholera",
                          "payload"=>"SUPPLEMENT_1"
                          ],
                          ["content_type"=>"text",
                          "title"=>"Pregnancy",
                          "payload"=>"SUPPLEMENT_1"
                          ],
                          ["content_type"=>"text",
                          "title"=>"ACV",
                          "payload"=>"SUPPLEMENT_1"
                          ],
                          ["content_type"=>"text",
                          "title"=>"MST",
                          "payload"=>"SUPPLEMENT_1"
                          ],
                          ["content_type"=>"text",
                          "title"=>"Other illness",
                          "payload"=>"SUPPLEMENT_1"
                          ],
                          ["content_type"=>"text",
                          "title"=>"Call a Doctor",
                          "payload"=>"SUPPLEMENT_1",
                          "image_url"=>"https://cdn2.iconfinder.com/data/icons/flat-style-svg-icons-part-1/512/phone_number_telephone-512.png"
                          ]

                      ],
                    ]
                    
                   ];

  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$ouiData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($ouiData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);
            
}

//=======================fonction de refus============================

function refuser(){
 global $sender;
 global $access_token;

         $noData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => ["text"=>"GOODBYE. continue with others activities !!! :)"]
                    
                   ];

  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$noData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($noData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//=========================fonction VIH/SIDA==========================

function VIH(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Prevent HIV Infection",
                    "image_url"=> "http://pad3.whstatic.com/images/thumb/a/a1/Prevent-HIV-Infection-Step-4-Version-2.jpg/aid538129-v4-728px-Prevent-HIV-Infection-Step-4-Version-2.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Prevent-HIV-Infection",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Prevent-HIV-Infection",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Identify an HIV Rash",
            "item_url"=>"http://www.wikihow.com/Identify-an-HIV-Rash",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/5/51/Identify-an-HIV-Rash-Step-2-Version-2.jpg/aid4859984-v4-728px-Identify-an-HIV-Rash-Step-2-Version-2.jpg.webp",
            "subtitle"=>"Identifier Une Eruption du VIH",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Identify-an-HIV-Rash",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Recognize HIV Symptoms",
            "item_url"=>"http://www.wikihow.com/Recognize-HIV-Symptoms",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/7/72/Recognize-HIV-Symptoms-Step-5-Version-3.jpg/aid536121-v4-728px-Recognize-HIV-Symptoms-Step-5-Version-3.jpg.webp",
            "subtitle"=>"Reconnaitre Les Symptomes Du VIH",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Recognize-HIV-Symptoms",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Treat HIV",
            "item_url"=>"http://www.wikihow.com/Treat-HIV",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/5/58/Treat-HIV-Step-2.jpg/aid4362256-v4-728px-Treat-HIV-Step-2.jpg.webp",
            "subtitle"=>"Traiter Le VIH",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-HIV",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Live With HIV/AIDS",
            "item_url"=>"http://www.wikihow.com/Live-With-HIV/AIDS",
            "image_url"=>"http://img.radio-canada.ca/2015/11/30/635x357/151130_mx711_vih-sida-portraits_sn635.jpg",
            "subtitle"=>"Vivre Avec Le VIH",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Live-With-HIV/AIDS",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Avoid HIV and AIDS",
            "item_url"=>"http://www.wikihow.com/Avoid-HIV-and-AIDS",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/b/ba/78381-23.jpg/aid78381-v4-728px-78381-23.jpg.webp",
            "subtitle"=>"Comment Eviter Le VIH/SIDA",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Avoid-HIV-and-AIDS",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Get Tested for HIV",
            "item_url"=>"http://www.wikihow.com/Get-Tested-for-HIV",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/8/81/Get-Tested-for-HIV-Step-1.jpg/aid1152666-v4-728px-Get-Tested-for-HIV-Step-1.jpg.webp",
            "subtitle"=>"Comment Se Faire Depister",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Get-Tested-for-HIV",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Avoid Getting HIV",
            "item_url"=>"http://www.wikihow.com/Avoid-Getting-HIV",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/2/22/Avoid-Getting-HIV-Step-2-Version-3.jpg/aid671156-v4-728px-Avoid-Getting-HIV-Step-2-Version-3.jpg.webp",
            "subtitle"=>"Comment Eviter D'avoir Le VIH",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Avoid-Getting-HIV",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Determine if Your Partner Is at Risk for HIV or AIDS",
            "item_url"=>"http://www.wikihow.com/Determine-if-Your-Partner-Is-at-Risk-for-HIV-or-AIDS",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/e/eb/Determine-if-Your-Partner-Is-at-Risk-for-HIV-or-AIDS-Step-13.jpg/aid1192464-v4-728px-Determine-if-Your-Partner-Is-at-Risk-for-HIV-or-AIDS-Step-13.jpg.webp",
            "subtitle"=>"Determiner Si Votre Partenaire est A Risque",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Determine-if-Your-Partner-Is-at-Risk-for-HIV-or-AIDS",
                "title"=>"View Website"
              ],
            ]
         ],

                  ]
                ]
                 ]];

                 $sidaData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$sidaData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($sidaData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//=========================fonction diabete===========================

function diabete(){
 global $sender;
 global $access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Avoid Type 2 Diabetes",
                    "image_url"=> "http://pad3.whstatic.com/images/thumb/4/4a/Avoid-Type-2-Diabetes-Step-1.jpeg/aid1052159-v4-728px-Avoid-Type-2-Diabetes-Step-1.jpeg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Avoid-Type-2-Diabetes",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Avoid-Type-2-Diabetes",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Avoid Diabetic Emergencies",
            "item_url"=>"http://www.wikihow.com/Avoid-Diabetic-Emergencies",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/f/f0/Lose-Weight-While-Living-a-Busy-Life-Step-6.jpg/aid7850646-v4-728px-Lose-Weight-While-Living-a-Busy-Life-Step-6.jpg.webp",
            "subtitle"=>"Évitez les Urgences Diabétiques",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Avoid-Diabetic-Emergencies",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Control Diabetes with Diet",
            "item_url"=>"http://www.wikihow.com/Control-Diabetes-with-Diet",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/1/15/Control-Diabetes-with-Diet-Step-3.jpg/aid6959953-v4-728px-Control-Diabetes-with-Diet-Step-3.jpg.webp",
            "subtitle"=>"Contrôle du Diabète avec Régime Alimentaire",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Control-Diabetes-with-Diet",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Fight Diabetes",
            "item_url"=>"http://www.wikihow.com/Fight-Diabetes",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/a/a3/Fight-Diabetes-Step-16.jpg/aid2841118-v4-728px-Fight-Diabetes-Step-16.jpg.webp",
            "subtitle"=>"Combattre Le Diabete",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Fight-Diabetes",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Improve Your Health as a Diabetic",
            "item_url"=>"http://www.wikihow.com/Improve-Your-Health-as-a-Diabetic",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/5/57/Improve-Your-Health-as-a-Diabetic-Step-3.jpg/aid5631-v4-728px-Improve-Your-Health-as-a-Diabetic-Step-3.jpg.webp",
            "subtitle"=>"Améliorez votre Santé en tant que Diabétique",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Improve-Your-Health-as-a-Diabetic",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Lower Blood Sugar",
            "item_url"=>"http://www.wikihow.com/Lower-Blood-Sugar",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/e/ee/Lower-Blood-Sugar-Step-4-Version-2.jpg/aid2681412-v4-728px-Lower-Blood-Sugar-Step-4-Version-2.jpg.webp",
            "subtitle"=>"Taux de Sucre Bas Dans Le Sang ",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Lower-Blood-Sugar",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Manage Juvenile Diabetes",
            "item_url"=>"http://www.wikihow.com/Manage-Juvenile-Diabetes",
            "image_url"=>"http://imagescalers.whstatic.com/images_en/thumb/f/f1/Manage-Juvenile-Diabetes-Step-13-Version-2.jpg/aid4322783-v4-728px-Manage-Juvenile-Diabetes-Step-13-Version-2.jpg.webp",
            "subtitle"=>"Gérer le Diabète Juvénile",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Manage-Juvenile-Diabetes",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Manage Hyperglycemia",
            "item_url"=>"http://www.wikihow.com/Manage-Hyperglycemia",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/0/05/Prevent-Getting-Dengue-Fever-Step-1-Version-2.jpg/aid7636688-v4-728px-Prevent-Getting-Dengue-Fever-Step-1-Version-2.jpg.webp",
            "subtitle"=>"Gérer l'Hyperglycémie",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Manage-Hyperglycemia",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Maintain Senior Health Through Diabetes",
            "item_url"=>"http://www.wikihow.com/Maintain-Senior-Health-Through-Diabetes",
            "image_url"=>"http://imagescalers.whstatic.com/images_en/thumb/8/85/Maintain-Senior-Health-Through-Diabetes-Step-3.jpg/aid8439813-v4-728px-Maintain-Senior-Health-Through-Diabetes-Step-3.jpg.webp",
            "subtitle"=>"Maintenir la Santé des Seniors en Evitant le Diabète",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Maintain-Senior-Health-Through-Diabetes",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Do Life Style Modifications for Type 2 Diabetes",
            "item_url"=>"http://www.wikihow.com/Do-Life-Style-Modifications-for-Type-2-Diabetes",
            "image_url"=>"http://imagescalers.whstatic.com/images_en/thumb/8/87/Do-Life-Style-Modifications-for-Type-2-Diabetes-Step-3.jpg/aid810292-v4-728px-Do-Life-Style-Modifications-for-Type-2-Diabetes-Step-3.jpg.webp",
            "subtitle"=>"Effectuez des Modifications de Style de Vie pour le Diabète de Type 2",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Do-Life-Style-Modifications-for-Type-2-Diabetes",
                "title"=>"View Website"
              ],
            ]
         ],

                  ]
                ]
                 ]];

                 $diabeteData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$diabeteData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($diabeteData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//=======================fonction ACV=================================

function ACV(){
  global $sender;
  global $access_token;

  $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Determine If You Have Hypertension",
                    "image_url"=> "http://pad2.whstatic.com/images/thumb/9/96/Determine-If-You-Have-Hypertension-Step-1-Version-2.jpg/aid1231053-v4-728px-Determine-If-You-Have-Hypertension-Step-1-Version-2.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Determine-If-You-Have-Hypertension",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Determine-If-You-Have-Hypertension",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Prevent Heart Disease",
            "item_url"=>"http://www.wikihow.com/Prevent-Heart-Disease",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/5/58/Prevent-Heart-Disease-Step-8-Version-2.jpg/aid173187-v4-728px-Prevent-Heart-Disease-Step-8-Version-2.jpg.webp",
            "subtitle"=>"Prevenir Les Maladies Du Coeur",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Prevent-Heart-Disease",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Recognize Pulmonary Hypertension Symptoms",
            "item_url"=>"http://www.wikihow.com/Recognize-Pulmonary-Hypertension-Symptoms",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/c/c0/Recognize-Pulmonary-Hypertension-Symptoms-Step-1.jpg/aid577746-v4-728px-Recognize-Pulmonary-Hypertension-Symptoms-Step-1.jpg.webp",
            "subtitle"=>"Reconnaître les symptômes de l'hypertension pulmonaire",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Recognize-Pulmonary-Hypertension-Symptoms",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Survive a Heart Attack when Alone",
            "item_url"=>"http://www.wikihow.com/Survive-a-Heart-Attack-when-Alone",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/7/7c/Survive-a-Heart-Attack-when-Alone-Step-1Bullet1.jpg/aid3383407-v4-728px-Survive-a-Heart-Attack-when-Alone-Step-1Bullet1.jpg.webp",
            "subtitle"=>"Survivre à une Crise Cardiaque seul",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Survive-a-Heart-Attack-when-Alone",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Survive a Heart Attack",
            "item_url"=>"http://www.wikihow.com/Survive-a-Heart-Attack",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/1/11/Survive-a-Heart-Attack-Step-1-Version-2.jpg/aid113798-v4-728px-Survive-a-Heart-Attack-Step-1-Version-2.jpg.webp",
            "subtitle"=>"Survivre à une Crise Cardiaque",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Survive-a-Heart-Attack",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Treat Sudden Cardiac Arrest",
            "item_url"=>"http://www.wikihow.com/Treat-Sudden-Cardiac-Arrest",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/4/4c/Do-CPR-on-an-Adult-Step-2-Version-3.jpg/aid86505-v4-728px-Do-CPR-on-an-Adult-Step-2-Version-3.jpg.webp",
            "subtitle"=>"Traiter l'arrest cardiaque soudain ",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-Sudden-Cardiac-Arrest",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Calculate Heart Rate from ECG",
            "item_url"=>"http://www.wikihow.com/Calculate-Heart-Rate-from-ECG",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/d/d8/2999936-3.jpg/aid2999936-v4-728px-2999936-3.jpg.webp",
            "subtitle"=>"Calculer la fréquence cardiaque de l'ECG",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Calculate-Heart-Rate-from-ECG",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Detect a Cancer in Your Heart",
            "item_url"=>"http://www.wikihow.com/Detect-a-Cancer-in-Your-Heart",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/1/10/Detect-a-Cancer-in-Your-Heart-Step-14.jpg/aid5201745-v4-728px-Detect-a-Cancer-in-Your-Heart-Step-14.jpg.webp",
            "subtitle"=>"Detecter Un Cancer Dans Votre Coeur",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Detect-a-Cancer-in-Your-Heart",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Determine Cardiac Output",
            "item_url"=>"http://www.wikihow.com/Determine-Cardiac-Output",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/c/cb/Determine-Cardiac-Output-Step-14.jpg/aid4924122-v4-728px-Determine-Cardiac-Output-Step-14.jpg.webp",
            "subtitle"=>"Déterminer le Débit Cardiaque",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Determine-Cardiac-Output",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Identify Hypertension Causes",
            "item_url"=>"http://www.wikihow.com/Identify-Hypertension-Causes",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/9/97/Deal-With-Unexplained-Pains-Step-24.jpg/aid7816540-v4-728px-Deal-With-Unexplained-Pains-Step-24.jpg.webp",
            "subtitle"=>"Identifier Les Causes De l'Hypertension Arterielle",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Identify-Hypertension-Causes",
                "title"=>"View Website"
              ],
            ]
         ],

                  ]
                ]
                 ]];

                 $acvData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$acvData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($acvData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//==========================fonction Cholera=======================================

function cholera(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Prevent Cholera",
                    "image_url"=> "http://pad2.whstatic.com/images/thumb/5/58/Prevent-Cholera-Step-1.jpg/aid5421503-v4-728px-Prevent-Cholera-Step-1.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Prevent-Cholera",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Prevent-Cholera",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Avoid Getting Cholera when Traveling",
            "item_url"=>"http://www.wikihow.com/Avoid-Getting-Cholera-when-Traveling",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/7/79/Accelerate-Weight-Loss-Naturally-Step-6.jpg/aid587944-v4-728px-Accelerate-Weight-Loss-Naturally-Step-6.jpg.webp",
            "subtitle"=>"Évitez le choléra lors du voyage",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Avoid-Getting-Cholera-when-Traveling",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Turn Salt Water Into Drinking Water",
            "item_url"=>"http://www.wikihow.com/Turn-Salt-Water-Into-Drinking-Water",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/b/b6/Turn-Salt-Water-Into-Drinking-Water-Step-5-Version-3.jpg/aid13516-v4-728px-Turn-Salt-Water-Into-Drinking-Water-Step-5-Version-3.jpg.webp",
            "subtitle"=>"Faire passer l'eau salée dans de l'eau potable",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Turn-Salt-Water-Into-Drinking-Water",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Control-Cholera",
            "item_url"=>"http://www.wikihow.com/Control-Cholera",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/3/33/Control-Cholera-Step-18.jpg/aid4504223-v4-728px-Control-Cholera-Step-18.jpg.webp",
            "subtitle"=>"controler Le Cholera",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Control-Cholera",
                "title"=>"View Website"
              ],
            ]
         ],
                  ]
                ]
                 ]];

                 $choleraData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$choleraData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($choleraData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);


}

//==========================fonction typhoid=======================================

function typhoid(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Recover From Typhoid Fever",
                    "image_url"=> "http://pad2.whstatic.com/images/thumb/e/e0/Recover-from-Typhoid-Fever-Step-1-Version-4.jpg/aid4343184-v4-728px-Recover-from-Typhoid-Fever-Step-1-Version-4.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Recover-From-Typhoid-Fever",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Recover-From-Typhoid-Fever",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Diagnose Typhoid Fever",
            "item_url"=>"http://www.wikihow.com/Diagnose-Typhoid-Fever",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/9/9a/Diagnose-Typhoid-Fever-Step-2-Version-2.jpg/aid5063216-v4-728px-Diagnose-Typhoid-Fever-Step-2-Version-2.jpg.webp",
            "subtitle"=>"Diagnostiquer une Fivre Typhoid",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Diagnose-Typhoid-Fever",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Recognize and Prevent Typhoid Fever",
            "item_url"=>"http://www.wikihow.com/Recognize-and-Prevent-Typhoid-Feverhttp://www.wikihow.com/Recognize-and-Prevent-Typhoid-Fever",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/5/56/Recognize-and-Prevent-Typhoid-Fever-Step-1.jpg/aid556552-v4-728px-Recognize-and-Prevent-Typhoid-Fever-Step-1.jpg.webp",
            "subtitle"=>"Reconnaitre Et Prevenir La Typhoid",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Recognize-and-Prevent-Typhoid-Fever",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Prevent Typhoid Fever when You are Traveling",
            "item_url"=>"http://www.wikihow.com/Prevent-Typhoid-Fever-when-You%27re-Traveling",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/0/02/Prevent-Typhoid-Fever-when-You%27re-Traveling-Step-9.jpg/aid1153870-v4-728px-Prevent-Typhoid-Fever-when-You%27re-Traveling-Step-9.jpg.webp",
            "subtitle"=>"Empêcher la fièvre typhoïde lorsque vous voyagez",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Prevent-Typhoid-Fever-when-You%27re-Traveling",
                "title"=>"View Website"
              ],
            ]
         ],

            [
            "title"=>"Prevent Typhoid Fever from Being Spread",
            "item_url"=>"http://www.wikihow.com/Prevent-Typhoid-Fever-from-Being-Spread",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/4/47/Prevent-Typhoid-Fever-from-Being-Spread-Step-2.jpg/aid6010390-v4-728px-Prevent-Typhoid-Fever-from-Being-Spread-Step-2.jpg.webp",
            "subtitle"=>"Empêcher la propagation de la fièvre typhoïde",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Prevent-Typhoid-Fever-from-Being-Spread",
                "title"=>"View Website"
              ],
            ]
         ]
                  ]
                ]
                 ]];

                 $typhoidData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$typhoidData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($typhoidData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//=========================fonction de hepatite====================================

function hepatite(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Deal With Hepatitis A",
                    "image_url"=> "http://pad3.whstatic.com/images/thumb/2/26/Deal-With-Hepatitis-A-Step-2-Version-2.jpg/aid952120-v4-728px-Deal-With-Hepatitis-A-Step-2-Version-2.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Deal-With-Hepatitis-A",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Deal-With-Hepatitis-A",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Treat Hepatitis A",
            "item_url"=>"http://www.wikihow.com/Treat-Hepatitis-A",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/9/97/Treat-Hepatitis-A-Step-3-Version-2.jpg/aid173537-v4-728px-Treat-Hepatitis-A-Step-3-Version-2.jpg.webp",
            "subtitle"=>"Comment Soigner l'Hepatite A",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-Hepatitis-A",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Prevent Hepatitis A",
            "item_url"=>"http://www.wikihow.com/Prevent-Hepatitis-A",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/9/93/Prevent-Hepatitis-A-Step-2.jpg/aid509977-v4-728px-Prevent-Hepatitis-A-Step-2.jpg.webp",
            "subtitle"=>"Prevenir l'Hepatite A",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Prevent-Hepatitis-A",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Recognize Hepatitis B Symptoms",
            "item_url"=>"http://www.wikihow.com/Recognize-Hepatitis-B-Symptoms",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/a/ac/Get-a-Chemo-Patient-to-Eat-Step-10.jpg/aid510001-v4-728px-Get-a-Chemo-Patient-to-Eat-Step-10.jpg.webp",
            "subtitle"=>"Reconnaitre Les Symptomes De l'Hepatite B",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Recognize-Hepatitis-B-Symptoms",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Treat Hepatitis B",
            "item_url"=>"http://www.wikihow.com/Treat-Hepatitis-B",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/2/24/Treat-Hepatitis-B-Step-1-Version-3.jpg/aid1296162-v4-728px-Treat-Hepatitis-B-Step-1-Version-3.jpg.webp",
            "subtitle"=>"Soigner l'Hepatite B",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-Hepatitis-B",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Prevent Hepatitis B",
            "item_url"=>"http://www.wikihow.com/Prevent-Hepatitis-B",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/8/83/Prevent-Hepatitis-B-Step-3-Version-3.jpg/aid510037-v4-728px-Prevent-Hepatitis-B-Step-3-Version-3.jpg.webp",
            "subtitle"=>"Prevenir l'Hepatite B",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Prevent-Hepatitis-B",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Prevent Hepatitis C",
            "item_url"=>"http://www.wikihow.com/Prevent-Hepatitis-C",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/4/46/Use-a-Female-Condom-Step-13-Version-2.jpg/aid510086-v4-728px-Use-a-Female-Condom-Step-13-Version-2.jpg.webp",
            "subtitle"=>"Prevenir l'Hepatite C",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Prevent-Hepatitis-C",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Overcome Hepatitis C",
            "item_url"=>"http://www.wikihow.com/Overcome-Hepatitis-C",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/d/db/Overcome-Hepatitis-C-Step-4-Version-2.jpg/aid33590-v4-728px-Overcome-Hepatitis-C-Step-4-Version-2.jpg.webp",
            "subtitle"=>"Surmonter l'Hépatite C",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Overcome-Hepatitis-C",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Get Treatment for Hepatitis C",
            "item_url"=>"http://www.wikihow.com/Get-Treatment-for-Hepatitis-C",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/a/a2/Get-Treatment-for-Hepatitis-C-Step-10.jpg/aid1142285-v4-728px-Get-Treatment-for-Hepatitis-C-Step-10.jpg.webp",
            "subtitle"=>"Faire Un Traitement De l'Hepatite C",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Get-Treatment-for-Hepatitis-C",
                "title"=>"View Website"
              ],
            ]
         ],

                  ]
                ]
                 ]];

                 $hepatiteData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$hepatiteData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($hepatiteData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//=========================fonction ebola==========================================

function ebola(){

 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Prevent Ebola",
                    "image_url"=> "http://pad1.whstatic.com/images/thumb/0/09/Prevent-Ebola-Step-2-Version-2.jpg/aid4602090-v4-728px-Prevent-Ebola-Step-2-Version-2.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Prevent-Ebola",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Prevent-Ebola",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Recognize Signs and Symptoms of Ebola",
            "item_url"=>"http://www.wikihow.com/Recognize-Signs-and-Symptoms-of-Ebola",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/2/27/Recognize-Signs-and-Symptoms-of-Ebola-Step-4.jpg/aid5424903-v4-728px-Recognize-Signs-and-Symptoms-of-Ebola-Step-4.jpg.webp",
            "subtitle"=>"Reconnaitre les Symptomes de l'Ebola",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Recognize-Signs-and-Symptoms-of-Ebola",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Use Household Products to Protect You from Ebola",
            "item_url"=>"http://www.wikihow.com/Use-Household-Products-to-Protect-You-from-Ebola",
            "image_url"=>"http://imagescalers.whstatic.com/images_en/thumb/3/3a/Use-Household-Products-to-Protect-You-from-Ebola-Step-2.jpg/aid5375840-v4-728px-Use-Household-Products-to-Protect-You-from-Ebola-Step-2.jpg.webp",
            "subtitle"=>"Utilisez Des Produits Ménagers Pour Vous Protéger Contre Ebola",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Use-Household-Products-to-Protect-You-from-Ebola",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Navigate Ebola Concerns as a Nurse",
            "item_url"=>"http://www.wikihow.com/Navigate-Ebola-Concerns-as-a-Nurse",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/7/77/Navigate-Ebola-Concerns-as-a-Nurse-Step-2.jpg/aid5388254-v4-728px-Navigate-Ebola-Concerns-as-a-Nurse-Step-2.jpg.webp",
            "subtitle"=>"Briefing Ebola en tant que Infirmière",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Navigate-Ebola-Concerns-as-a-Nurse",
                "title"=>"View Website"
              ],
            ]
         ],

                 ]
                ]
                 ]];

                 $hepatiteData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$hepatiteData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($hepatiteData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//==========================fonction tuberculose==================================

function tuberculose(){

 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Recognize the Signs and Symptoms of Tuberculosis",
                    "image_url"=> "http://pad3.whstatic.com/images/thumb/7/79/Recognize-the-Signs-and-Symptoms-of-Tuberculosis-Step-5-Version-2.jpg/aid220292-v4-728px-Recognize-the-Signs-and-Symptoms-of-Tuberculosis-Step-5-Version-2.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Recognize-the-Signs-and-Symptoms-of-Tuberculosis",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Recognize-the-Signs-and-Symptoms-of-Tuberculosis",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Manage Tuberculosis",
            "item_url"=>"http://www.wikihow.com/Manage-Tuberculosis",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/f/f7/Manage-Tuberculosis-Step-1-Version-2.jpg/aid5047763-v4-728px-Manage-Tuberculosis-Step-1-Version-2.jpg.webp",
            "subtitle"=>"Gérer la Tuberculose",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Manage-Tuberculosis",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Prevent Tuberculosis",
            "item_url"=>"http://www.wikihow.com/Prevent-Tuberculosis",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/3/3f/Prevent-Tuberculosis-Step-4-Version-2.jpg/aid1342181-v4-728px-Prevent-Tuberculosis-Step-4-Version-2.jpg.webp",
            "subtitle"=>"Prevenir la Tuberculose",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Prevent-Tuberculosis",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Read a Tuberculosis Skin Test",
            "item_url"=>"http://www.wikihow.com/Read-a-Tuberculosis-Skin-Test",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/d/dc/Read-a-Tuberculosis-Skin-Test-Step-2-Version-3.jpg/aid1345704-v4-728px-Read-a-Tuberculosis-Skin-Test-Step-2-Version-3.jpg.webp",
            "subtitle"=>"Lire un Test de Peau de Tuberculose",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Read-a-Tuberculosis-Skin-Test",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Cure Tuberculosis",
            "item_url"=>"http://www.wikihow.com/Cure-Tuberculosis",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/e/ec/Cure-Tuberculosis-Step-4.jpg/aid3729116-v4-728px-Cure-Tuberculosis-Step-4.jpg.webp",
            "subtitle"=>"Guerir la Tuberculose",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Cure-Tuberculosis",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Prevent Drug Resistant Tuberculosis",
            "item_url"=>"http://www.wikihow.com/Prevent-Drug-Resistant-Tuberculosis",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/6/63/Cure-Dry-Mouth-Step-1.jpg/aid503998-v4-728px-Cure-Dry-Mouth-Step-1.jpg.webp",
            "subtitle"=>"Empêcher la Tuberculose Résistante aux Médicaments",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Prevent-Drug-Resistant-Tuberculosis",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Diagnose-Lung-Hyperinflation",
            "item_url"=>"http://www.wikihow.com/Diagnose-Lung-Hyperinflation",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/4/40/Diagnose-Lung-Hyperinflation-Step-3-Version-2.jpg/aid5080762-v4-728px-Diagnose-Lung-Hyperinflation-Step-3-Version-2.jpg.webp",
            "subtitle"=>"Diagnostiquer l'Hyperinflation Pulmonaire",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Diagnose-Lung-Hyperinflation",
                "title"=>"View Website"
              ],
            ]
         ],

                  ]
                ]
                 ]];

                 $tuberculoseData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$tuberculoseData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($tuberculoseData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//==========================fonction fievre jaune=================================

function fievrejaune(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Protect Against Yellow Fever",
                    "image_url"=> "http://pad1.whstatic.com/images/thumb/1/1f/Protect-Against-Yellow-Fever-Step-2.jpg/aid4242535-v4-728px-Protect-Against-Yellow-Fever-Step-2.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Protect-Against-Yellow-Fever",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Protect-Against-Yellow-Fever",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Recognize Yellow Fever",
            "item_url"=>"http://www.wikihow.com/Recognize-Yellow-Fever",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/b/b5/Recognize-Yellow-Fever-Step-5.jpg/aid551244-v4-728px-Recognize-Yellow-Fever-Step-5.jpg.webp",
            "subtitle"=>"Reconnaitre la Fievre Jaune",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Recognize-Yellow-Fever",
                "title"=>"View Website"
              ],
            ]
          ],
          
                  ]
                ]
                 ]];

                 $fievreJauneData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$fievreJauneData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fievreJauneData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//===========================fonction hemorroid===================================

function hemorroid(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Get Rid of Hemorrhoids",
                    "image_url"=> "http://pad2.whstatic.com/images/thumb/c/cb/Get-Rid-of-Hemorrhoids-Step-10-Version-6.jpg/aid36360-v4-728px-Get-Rid-of-Hemorrhoids-Step-10-Version-6.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Get-Rid-of-Hemorrhoids",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Get-Rid-of-Hemorrhoids",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Stop Bleeding Hemorrhoids",
            "item_url"=>"http://www.wikihow.com/Stop-Bleeding-Hemorrhoids",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/b/ba/Stop-Bleeding-Hemorrhoids-Step-2-Version-2.jpg/aid1411822-v4-728px-Stop-Bleeding-Hemorrhoids-Step-2-Version-2.jpg.webp",
            "subtitle"=>"Arreter les Saignements",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Stop-Bleeding-Hemorrhoids",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Heal Hemorrhoids",
            "item_url"=>"http://www.wikihow.com/Heal-Hemorrhoids",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/7/70/Heal-Hemorrhoids-Step-3-Version-2.jpg/aid758960-v4-728px-Heal-Hemorrhoids-Step-3-Version-2.jpg.webp",
            "subtitle"=>"Guérir les Hémorroïdes",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Heal-Hemorrhoids",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Cure Hemorrhoids or Piles",
            "item_url"=>"http://www.wikihow.com/Cure-Hemorrhoids-or-Piles",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/7/7c/Cure-Hemorrhoids-or-Piles-Step-7-Version-2.jpg/aid212099-v4-728px-Cure-Hemorrhoids-or-Piles-Step-7-Version-2.jpg.webp",
            "subtitle"=>"Guerir des Hemorroids",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Cure-Hemorrhoids-or-Piles",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Reduce Hemorrhoid Pain",
            "item_url"=>"http://www.wikihow.com/Reduce-Hemorrhoid-Pain",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/a/a4/Reduce-Hemorrhoid-Pain-Step-5-Version-3.jpg/aid93847-v4-728px-Reduce-Hemorrhoid-Pain-Step-5-Version-3.jpg.webp",
            "subtitle"=>"Réduire la Douleur Causée par les hémorroïdes",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Reduce-Hemorrhoid-Pain",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Get Rid of Hemorrhoids-Naturally",
            "item_url"=>"http://www.wikihow.com/Get-Rid-of-Hemorrhoids-Naturally",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/7/70/Get-Rid-of-Hemorrhoids-Naturally-Step-16.jpg/aid959681-v4-728px-Get-Rid-of-Hemorrhoids-Naturally-Step-16.jpg.webp",
            "subtitle"=>"Se Débarrasser des Hémorroïdes Naturellement",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Get-Rid-of-Hemorrhoids-Naturally",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Get Rid of Hemorrhoids Fast",
            "item_url"=>"http://www.wikihow.com/Get-Rid-of-Hemorrhoids-Fast",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/2/20/Get-Rid-of-Hemorrhoids-Fast-Step-2.jpg/aid2788632-v4-728px-Get-Rid-of-Hemorrhoids-Fast-Step-2.jpg.webp",
            "subtitle"=>"Comment Se Débarrasser des Hémorroïdes Rapidement",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Get-Rid-of-Hemorrhoids-Fast",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Spot the Symptoms of Hemorrhoids",
            "item_url"=>"http://www.wikihow.com/Spot-the-Symptoms-of-Hemorrhoids",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/6/6f/Spot-the-Symptoms-of-Hemorrhoids-Step-6.jpg/aid959445-v4-700px-Spot-the-Symptoms-of-Hemorrhoids-Step-6.jpg.webp",
            "subtitle"=>"Comment Trouver les Symptômes des Hémorroïdes",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Spot-the-Symptoms-of-Hemorrhoids",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Care for Hemorrhoids Postpartum",
            "item_url"=>"http://www.wikihow.com/Care-for-Hemorrhoids-Postpartum",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/a/a2/Care-for-Hemorrhoids-Postpartum-Step-12.jpg/aid1053203-v4-728px-Care-for-Hemorrhoids-Postpartum-Step-12.jpg.webp",
            "subtitle"=>"Soins aux Hémorroïdes Post-Partum",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Care-for-Hemorrhoids-Postpartum",
                "title"=>"View Website"
              ],
            ]
         ],

                  ]
                ]
                 ]];

                 $hemorroidData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$hemorroidData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($hemorroidData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//===========================fonction de geolocalisation==========================

function localisation(){
 global $sender;
 global $access_token;

  $localisationData = [
                 "recipient"=>["id"=>$sender],
                  "message"=>[
                    "text"=>"Try to locate a Hospital or a Pharmacy near you:",
                    "quick_replies"=>[
                      [
                        "content_type"=>"location",
                      ]
                    ]
                  ]];

        $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

        $ch = curl_init($url);
        curl_setopt($ch,CURLOPT_POST,1);
        //curl_setopt($ch,CURLOPT_POSTFIELDS,$localisationData);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($localisationData));
        curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
        $result = curl_exec($ch);
        curl_close($ch);

}

//===========================fonction de la pneumonie=============================

function pneumonie(){
  global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Treat Pneumonia",
                    "image_url"=> "http://pad2.whstatic.com/images/thumb/7/79/Treat-Pneumonia-Step-12.jpg/aid1253630-v4-728px-Treat-Pneumonia-Step-12.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Treat-Pneumonia",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-Pneumonia",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Strengthen Your Lungs After Having Pneumonia",
            "item_url"=>"http://www.wikihow.com/Strengthen-Your-Lungs-After-Having-Pneumonia",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/3/32/Strengthen-Your-Lungs-After-Having-Pneumonia-Step-3.jpg/aid4253888-v4-728px-Strengthen-Your-Lungs-After-Having-Pneumonia-Step-3.jpg.webp",
            "subtitle"=>"Renforcez Vos Poumons Après Avoir Eu la Pneumonie",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Strengthen-Your-Lungs-After-Having-Pneumonia",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Prevent Pneumonia",
            "item_url"=>"http://www.wikihow.com/Prevent-Pneumonia",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/8/89/Prevent-Pneumonia-Step-5.jpg/aid1808056-v4-728px-Prevent-Pneumonia-Step-5.jpg.webp",
            "subtitle"=>"Prevenir La Pneumonie",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Prevent-Pneumonia",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Treat Walking Pneumonia",
            "item_url"=>"http://www.wikihow.com/Treat-Walking-Pneumonia",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/e/e2/Treat-Walking-Pneumonia-Step-1.jpg/aid7221386-v4-728px-Treat-Walking-Pneumonia-Step-1.jpg.webp",
            "subtitle"=>"Traiter La Pneumonie due au Sport",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-Walking-Pneumonia",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Recover From Pneumonia",
            "item_url"=>"http://www.wikihow.com/Recover-From-Pneumonia",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/2/21/Recover-From-Pneumonia-Step-2-Version-3.jpg/aid1234151-v4-728px-Recover-From-Pneumonia-Step-2-Version-3.jpg.webp",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Recover-From-Pneumonia",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Determine if You Have Pneumonia",
            "item_url"=>"http://www.wikihow.com/Determine-if-You-Have-Pneumonia",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/a/a9/Determine-if-You-Have-Pneumonia-Step-1-Version-2.jpg/aid4299240-v4-728px-Determine-if-You-Have-Pneumonia-Step-1-Version-2.jpg.webp",
            "subtitle"=>"Determiner Si Vous Avez La Pneumonie",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Determine-if-You-Have-Pneumonia",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Treat Pneumonia Naturally",
            "item_url"=>"http://www.wikihow.com/Treat-Pneumonia-Naturally",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/3/37/Treat-Pneumonia-Naturally-Step-3.jpg/aid7187183-v4-728px-Treat-Pneumonia-Naturally-Step-3.jpg.webp",
            "subtitle"=>"Traiter la Pneumonie Naturellement",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-Pneumonia-Naturally",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Treat Bronchitis",
            "item_url"=>"http://www.wikihow.com/Treat-Bronchitis",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/1/1d/Treat-Bronchitis-Step-6.jpg/aid500460-v4-728px-Treat-Bronchitis-Step-6.jpg.webp",
            "subtitle"=>"Traiter la Bronchite",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-Bronchitis",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Diagnose Pulmonary Dyspnea Causes",
            "item_url"=>"http://www.wikihow.com/Diagnose-Pulmonary-Dyspnea-Causes",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/5/56/Diagnose-Lung-Hyperinflation-Step-11.jpg/aid7603229-v4-728px-Diagnose-Lung-Hyperinflation-Step-11.jpg.webp",
            "subtitle"=>"Diagnostiquer la Dyspnée Pulmonaire ",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Diagnose-Pulmonary-Dyspnea-Causes",
                "title"=>"View Website"
              ],
            ]
         ],

                  ]
                ]
                 ]];

                 $pneumonieData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$pneumonieData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($pneumonieData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//===========================fonction siphilis====================================

function siphilis(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Recognize Syphilis Symptoms",
                    "image_url"=> "http://pad3.whstatic.com/images/thumb/4/4d/Recognize-Syphilis-Symptoms-Step-1-Version-4.jpg/aid533067-v4-728px-Recognize-Syphilis-Symptoms-Step-1-Version-4.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Recognize-Syphilis-Symptoms",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Recognize-Syphilis-Symptoms",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Prevent Syphilis",
            "item_url"=>"http://www.wikihow.com/Prevent-Syphilis",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/1/1a/Prevent-Syphilis-Step-1-Version-3.jpg/aid533087-v4-728px-Prevent-Syphilis-Step-1-Version-3.jpg.webp",
            "subtitle"=>"Prevenir la SIPHILIS",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Prevent-Syphilis",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Treat Syphilis",
            "item_url"=>"http://www.wikihow.com/Treat-Syphilis",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/7/72/Cure-Heartburn-Step-13-Version-2.jpg/aid538766-v4-728px-Cure-Heartburn-Step-13-Version-2.jpg.webp",
            "subtitle"=>"Traiter la SIPHILIS",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-Syphilis",
                "title"=>"View Website"
              ],
            ]
          ],

                  ]
                ]
                 ]];

                 $siphilisData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$siphilisData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($siphilisData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//===========================maldie sexuellemnt transmissible=====================

function MST(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "MST",
                    "image_url"=> "http://pad1.whstatic.com/images/thumb/e/e6/Treat-HIV-Step-7.jpg/aid4362256-v4-728px-Treat-HIV-Step-7.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Category:Sexually-Transmitted-Diseases",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Category:Sexually-Transmitted-Diseases",
                "title"=>"View Website"
              ],
              [
                "type"=>"phone_number",
                  "title"=>"CALL Doctor to be informed",
                  "payload"=>"699454357"
              ],
            ]
          ],
            
                  ]
                ]
                 ]];

                 $siphilisData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$siphilisData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($siphilisData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//===========================fonction de L'avc====================================

function meningite(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Recognize Spinal Meningitis Symptoms",
                    "image_url"=> "http://pad1.whstatic.com/images/thumb/1/12/Recognize-Spinal-Meningitis-Symptoms-Step-1-Version-3.jpg/aid525251-v4-728px-Recognize-Spinal-Meningitis-Symptoms-Step-1-Version-3.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Recognize-Spinal-Meningitis-Symptoms",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Recognize-Spinal-Meningitis-Symptoms",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Prevent Meningitis",
            "item_url"=>"http://www.wikihow.com/Prevent-Meningitis",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/d/d1/Prevent-Meningitis-Step-8.jpg/aid1386845-v4-728px-Prevent-Meningitis-Step-8.jpg.webp",
            "subtitle"=>"Comment Prevenir la Meningite",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Prevent-Meningitis",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Treat Meningitis (Spinal Meningitis)",
            "item_url"=>"http://www.wikihow.com/Treat-Meningitis-%28Spinal-Meningitis%29",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/f/f1/Treat-Meningitis-%28Spinal-Meningitis%29-Step-1-Version-3.jpg/aid525259-v4-728px-Treat-Meningitis-%28Spinal-Meningitis%29-Step-1-Version-3.jpg.webp",
            "subtitle"=>"Traiter la Meningite Spinal",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-Meningitis-%28Spinal-Meningitis%29",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Spot Meningitis in Babies",
            "item_url"=>"http://www.wikihow.com/Spot-Meningitis-in-Babies",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/4/44/Spot-Meningitis-in-Babies-Step-14.jpg/aid1626785-v4-728px-Spot-Meningitis-in-Babies-Step-14.jpg.webp",
            "subtitle"=>"Meningite Ponctuelle chez les Bébés",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Spot-Meningitis-in-Babies",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Diagnose Meningitis",
            "item_url"=>"http://www.wikihow.com/Diagnose-Meningitis",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/c/c0/Diagnose-Meningitis-Step-1.jpg/aid7345161-v4-728px-Diagnose-Meningitis-Step-1.jpg.webp",
            "subtitle"=>"Diagnotiquer La Meningite",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Diagnose-Meningitis",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Recover From Meningitis",
            "item_url"=>"http://www.wikihow.com/Recover-From-Meningitis",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/e/e0/Reduce-Fever-During-Pregnancy-Step-9.jpg/aid1217103-v4-728px-Reduce-Fever-During-Pregnancy-Step-9.jpg.webp",
            "subtitle"=>"Récupérer de la Méningite",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Recover-From-Meningitis",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Protect Yourself From Meningitis",
            "item_url"=>"http://www.wikihow.com/Protect-Yourself-From-Meningitis",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/0/0e/Protect-Yourself-From-Meningitis-Step-1-Version-2.jpg/aid1217693-v4-728px-Protect-Yourself-From-Meningitis-Step-1-Version-2.jpg.webp",
            "subtitle"=>"Comment se Proteger de la Meningite",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Protect-Yourself-From-Meningitis",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Know if You Are at Risk for Meningitis",
            "item_url"=>"http://www.wikihow.com/Know-if-You-Are-at-Risk-for-Meningitis",
            "image_url"=>"http://imagescalers.whstatic.com/images_en/thumb/8/8f/Know-if-You-Are-at-Risk-for-Meningitis-Step-5.jpg/aid1201642-v4-728px-Know-if-You-Are-at-Risk-for-Meningitis-Step-5.jpg.webp",
            "subtitle"=>"Savoir Si Vous Etes a Risque Pour La Meningite",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Know-if-You-Are-at-Risk-for-Meningitis",
                "title"=>"View Website"
              ],
            ]
         ],

                  ]
                ]
                 ]];

                 $meningiteData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$sidaData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($meningiteData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//===========================fonction de l'asthme=================================

function asthme(){
 
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Recognize Asthma",
                    "image_url"=> "http://pad3.whstatic.com/images/thumb/1/1a/Recognize-Asthma-Step-2-Version-3.jpg/aid203578-v4-728px-Recognize-Asthma-Step-2-Version-3.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Recognize-Asthma",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Recognize-Asthma",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Prevent Asthma",
            "item_url"=>"http://www.wikihow.com/Prevent-Asthma",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/6/68/Prevent-Asthma-Step-1-Version-2.jpg/aid2153086-v4-728px-Prevent-Asthma-Step-1-Version-2.jpg.webp",
            "subtitle"=>"Prevenir l'Asthme",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Prevent-Asthma",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Control Asthma",
            "item_url"=>"http://www.wikihow.com/Control-Asthma",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/2/2f/Control-Asthma-Step-1-Version-3.jpg/aid525920-v4-728px-Control-Asthma-Step-1-Version-3.jpg.webp",
            "subtitle"=>"Controler Ses Crises Asthmatique",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Control-Asthma",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Stop Asthma Cough",
            "item_url"=>"http://www.wikihow.com/Stop-Asthma-Cough",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/1/10/Stop-Asthma-Cough-Step-1.jpg/aid7778848-v4-728px-Stop-Asthma-Cough-Step-1.jpg.webp",
            "subtitle"=>"Arrêtez la Toux de l'Asthme",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Stop-Asthma-Cough",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Treat Asthma",
            "item_url"=>"http://www.wikihow.com/Treat-Asthma",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/3/3b/Control-Asthma-Step-5-Version-2.jpg/aid4305781-v4-728px-Control-Asthma-Step-5-Version-2.jpg.webp",
            "subtitle"=>"Comment Traiter l'Asthme",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-Asthma",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Treat Asthma Attacks",
            "item_url"=>"http://www.wikihow.com/Treat-Asthma-Attacks",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/0/03/Treat-Asthma-Attacks-Step-1-Version-2.jpg/aid4041-v4-728px-Treat-Asthma-Attacks-Step-1-Version-2.jpg.webp",
            "subtitle"=>"Traiter des Attaques Asthmatique",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-Asthma-Attacks",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Use Aromatherapy for Asthma",
            "item_url"=>"http://www.wikihow.com/Use-Aromatherapy-for-Asthma",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/6/66/Use-Aromatherapy-for-Asthma-Step-3.jpg/aid1298849-v4-728px-Use-Aromatherapy-for-Asthma-Step-3.jpg.webp",
            "subtitle"=>"Utilisez l'Aromathérapie pour l'Asthme",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Use-Aromatherapy-for-Asthma",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Control Asthma in Children",
            "item_url"=>"http://www.wikihow.com/Control-Asthma-in-Children",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/d/db/Control-Asthma-in-Children-Step-7-Version-2.jpg/aid1953997-v4-728px-Control-Asthma-in-Children-Step-7-Version-2.jpg.webp",
            "subtitle"=>"Contrôle de l'Asthme Chez les Enfants",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Control-Asthma-in-Children",
                "title"=>"View Website"
              ],
            ]
         ],

                  ]
                ]
                 ]];

                 $asthmeData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$asthmeData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($asthmeData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//============================fonction appendicite================================

function appendicite(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Recognize the Symptoms of Appendicitis",
                    "image_url"=> "http://pad1.whstatic.com/images/thumb/6/6e/Recognize-the-Symptoms-of-Appendicitis-Step-1-Version-5.jpg/aid381141-v4-728px-Recognize-the-Symptoms-of-Appendicitis-Step-1-Version-5.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Recognize-the-Symptoms-of-Appendicitis",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Recognize-the-Symptoms-of-Appendicitis",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Detect Appendicitis During Pregnancy",
            "item_url"=>"http://www.wikihow.com/Detect-Appendicitis-During-Pregnancy",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/1/16/Detect-Appendicitis-During-Pregnancy-Step-16.jpg/aid4398665-v4-728px-Detect-Appendicitis-During-Pregnancy-Step-16.jpg.webp",
            "subtitle"=>"Detecter l'Appendicite Durant La Grossesse",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Detect-Appendicitis-During-Pregnancy",
                "title"=>"View Website"
              ],
            ]
          ],
                  ]
                ]
                 ]];

                 $appendiciteData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$appendiciteData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($appendiciteData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//============================fonction ulcere=====================================

function estomac(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Cure a Stomach Ache",
                    "image_url"=> "http://pad3.whstatic.com/images/thumb/5/59/Strengthen-Your-Bladder-and-Urinate-Less-Often-Step-3-Version-2.jpg/aid52367-v4-728px-Strengthen-Your-Bladder-and-Urinate-Less-Often-Step-3-Version-2.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Cure-a-Stomach-Ache",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Cure-a-Stomach-Ache",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Cure Stomach Ache with Ginger",
            "item_url"=>"http://www.wikihow.com/Cure-Stomach-Ache-with-Ginger",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/e/eb/Grow-a-Ginger-Plant-Step-1.jpg/aid4238272-v4-728px-Grow-a-Ginger-Plant-Step-1.jpg.webp",
            "subtitle"=>"Guerrir Du Mal d'Estomac Avec Le Ginger",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Cure-Stomach-Ache-with-Ginger",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Fake a Stomach Ache",
            "item_url"=>"http://www.wikihow.com/Fake-a-Stomach-Ache",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/0/07/Fake-a-Stomach-Ache-Step-2.jpg/aid735798-v4-728px-Fake-a-Stomach-Ache-Step-2.jpg.webp",
            "subtitle"=>"Probleme D'Estomac",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Fake-a-Stomach-Ache",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Get Over a Stomach Ache",
            "item_url"=>"http://www.wikihow.com/Get-Over-a-Stomach-Ache",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/c/ce/Get-Over-a-Stomach-Ache-Step-3-Version-2.jpg/aid311062-v4-728px-Get-Over-a-Stomach-Ache-Step-3-Version-2.jpg.webp",
            "subtitle"=>"Finir un Mal d'estomac",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Get-Over-a-Stomach-Ache",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Cure a Children's Stomach Ache",
            "item_url"=>"http://www.wikihow.com/Cure-a-Child%27s-Stomach-Ache",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/9/9e/Cure-a-Child%27s-Stomach-Ache-Step-1.jpg/aid76481-v4-728px-Cure-a-Child%27s-Stomach-Ache-Step-1.jpg.webp",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Cure-a-Child%27s-Stomach-Ache",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Cure a Morning Stomach Ache",
            "item_url"=>"http://www.wikihow.com/Cure-a-Morning-Stomach-Ache",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/e/ef/Cure-a-Morning-Stomach-Ache-Step-7-Version-3.jpg/aid1479980-v4-728px-Cure-a-Morning-Stomach-Ache-Step-7-Version-3.jpg.webp",
            "subtitle"=>"Guerrir des Mal d'Estomac Matinals",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Cure-a-Morning-Stomach-Ache",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Stop Daily Stomach Aches (for Teens)",
            "item_url"=>"http://www.wikihow.com/Stop-Daily-Stomach-Aches-%28for-Teens%29",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/1/12/Stop-Daily-Stomach-Aches-%28for-Teens%29-Step-5.jpg/aid1126233-v4-728px-Stop-Daily-Stomach-Aches-%28for-Teens%29-Step-5.jpg.webp",
            "subtitle"=>"Arreter le Mal d'Estomac Quotidien chez les Adolescents",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Stop-Daily-Stomach-Aches-%28for-Teens%29",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Treat Gastroenteritis (Stomach Flu)",
            "item_url"=>"http://www.wikihow.com/Treat-Gastroenteritis-%28Stomach-Flu%29",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/d/d4/Treat-Gastroenteritis-%28Stomach-Flu%29-Step-8Bullet1.jpg/aid685466-v4-728px-Treat-Gastroenteritis-%28Stomach-Flu%29-Step-8Bullet1.jpg.webp",
            "subtitle"=>"Comment Signer la Gastroenterite",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-Gastroenteritis-%28Stomach-Flu%29",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Use Home Remedies for Decreasing Stomach Acid",
            "item_url"=>"http://www.wikihow.com/Use-Home-Remedies-for-Decreasing-Stomach-Acid",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/c/cd/Use-Home-Remedies-for-Decreasing-Stomach-Acid-Step-3-Version-3.jpg/aid1214356-v4-728px-Use-Home-Remedies-for-Decreasing-Stomach-Acid-Step-3-Version-3.jpg.webp",
            "subtitle"=>"Utiliser les Remèdes à la maison pour Diminuer l'Acidité de l'Estomac",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/http://www.wikihow.com/Use-Home-Remedies-for-Decreasing-Stomach-Acid",
                "title"=>"View Website"
              ],
            ]
         ],

                  ]
                ]
                 ]];

                 $estomacData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$estomacData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($estomacData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//============================fonction insuffissace renale========================

function reinale(){
 global $access_token;
 global $sender;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Preserve Residual Renal Function",
                    "image_url"=> "http://pad2.whstatic.com/images/thumb/0/01/Preserve-Residual-Renal-Function-Step-1.jpg/aid4259603-v4-728px-Preserve-Residual-Renal-Function-Step-1.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Preserve-Residual-Renal-Function",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Preserve-Residual-Renal-Function",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Identify Renal Failure",
            "item_url"=>"http://www.wikihow.com/Identify-Renal-Failure",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/0/01/Sleep-With-Lower-Back-Pain-Step-16.jpg/aid4311085-v4-728px-Sleep-With-Lower-Back-Pain-Step-16.jpg.webp",
            "subtitle"=>"Identifier les Insuffisance Renale",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Identify-Renal-Failure",
                "title"=>"View Website"
              ],
            ]
          ],

          [
            "title"=>"Prevent Kidney Disease",
            "item_url"=>"http://www.wikihow.com/Prevent-Kidney-Disease",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/a/a6/Motivate-Yourself-to-Lose-Weight-Step-25.jpg/aid4859712-v4-728px-Motivate-Yourself-to-Lose-Weight-Step-25.jpg.webp",
            "subtitle"=>"Comment Prevenir Les Maladies des Reins",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Prevent-Kidney-Disease",
                "title"=>"View Website"
              ],
            ]
          ],

            [
            "title"=>"Repair Kidney Damage",
            "item_url"=>"http://www.wikihow.com/Repair-Kidney-Damage",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/9/9a/Repair-Kidney-Damage-Step-15.jpg/aid7232996-v4-728px-Repair-Kidney-Damage-Step-15.jpg.webp",
            "subtitle"=>"Réparer les Dommages au Rein",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Repair-Kidney-Damage",
                "title"=>"View Website"
              ],
            ]
          ],


              [
            "title"=>"Prevent Kidney Cancer",
            "item_url"=>"http://www.wikihow.com/Prevent-Kidney-Cancer",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/6/6c/Prevent-Kidney-Cancer-Step-2.jpg/aid7322053-v4-728px-Prevent-Kidney-Cancer-Step-2.jpg.webp",
            "subtitle"=>"Prevenir les Cancer du Rein",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Prevent-Kidney-Cancer",
                "title"=>"View Website"
              ],
            ]
          ],

                [
            "title"=>"Prevent Kidney and Liver Failure at a Young Age",
            "item_url"=>"http://www.wikihow.com/Prevent-Kidney-and-Liver-Failure-at-a-Young-Age",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/b/bb/Prevent-Kidney-and-Liver-Failure-at-a-Young-Age-Step-6-Version-2.jpg/aid107265-v4-728px-Prevent-Kidney-and-Liver-Failure-at-a-Young-Age-Step-6-Version-2.jpg.webp",
            "subtitle"=>"Empêcher l'insuffisance rénale et hépatique a un jeune âge",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Prevent-Kidney-and-Liver-Failure-at-a-Young-Age",
                "title"=>"View Website"
              ],
            ]
          ],
            
                  ]
                ]
                 ]];

 $renaleData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];

  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$renaleData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($renaleData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//============================fonction alzheimer==================================

function alzheimer(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Reduce the Risk of Alzheimer's Disease",
                    "image_url"=> "http://pad3.whstatic.com/images/thumb/c/c3/Prevent-Alzheimer%27s-Disease-Step-1-Version-2.jpg/aid2536069-v4-728px-Prevent-Alzheimer%27s-Disease-Step-1-Version-2.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Reduce-the-Risk-of-Alzheimer%27s-Disease",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Reduce-the-Risk-of-Alzheimer%27s-Disease",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Help Alzheimer's Patients Stay Active",
            "item_url"=>"http://www.wikihow.com/Help-Alzheimer%27s-Patients-Stay-Active",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/c/cc/Help-Alzheimer%27s-Patients-Stay-Active-Step-4.jpg/aid7439259-v4-728px-Help-Alzheimer%27s-Patients-Stay-Active-Step-4.jpg.webp",
            "subtitle"=>"Aider les Patients Souffrant D'Alzheimer a Rester Actif",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Help-Alzheimer%27s-Patients-Stay-Active",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Know if Someone Has Alzheimer's Disease",
            "item_url"=>"http://www.wikihow.com/Know-if-Someone-Has-Alzheimer%27s-Disease",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/3/3a/Know-if-Someone-Has-Alzheimer%27s-Disease-Step-9.jpg/aid213401-v4-728px-Know-if-Someone-Has-Alzheimer%27s-Disease-Step-9.jpg.webp",
            "subtitle"=>"Comment Verifier Si une Personne a la Maladie d'Alzheimer",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Know-if-Someone-Has-Alzheimer%27s-Disease",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Help People With Alzheimer's Disease",
            "item_url"=>"http://www.wikihow.com/Help-People-With-Alzheimer%27s-Disease",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/5/5b/Help-People-With-Alzheimer%27s-Disease-Step-1.jpg/aid720901-v4-728px-Help-People-With-Alzheimer%27s-Disease-Step-1.jpg.webp",
            "subtitle"=>"Comment Aider les Souffrants d'Alzheimer",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Help-People-With-Alzheimer%27s-Disease",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Recognize the Early Symptoms of Alzheimer's Disease",
            "item_url"=>"http://www.wikihow.com/Recognize-the-Early-Symptoms-of-Alzheimer%27s-Disease",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/c/cb/Be-a-Better-Student-Step-4.jpg/aid1893-v4-728px-Be-a-Better-Student-Step-4.jpg.webp",
            "subtitle"=>"Reconnaître les Premiers Symptômes de la Maladie d'Alzheimer",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Recognize-the-Early-Symptoms-of-Alzheimer%27s-Disease",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Find Nursing Home for Someone With Alzheimer's Disease or Dementia",
            "item_url"=>"http://www.wikihow.com/Find-a-Nursing-Home-for-Someone-With-Alzheimer%27s-Disease-or-Dementia",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/7/78/Find-a-Nursing-Home-for-Someone-With-Alzheimer%27s-Disease-or-Dementia-Step-11.jpg/aid1203609-v4-728px-Find-a-Nursing-Home-for-Someone-With-Alzheimer%27s-Disease-or-Dementia-Step-11.jpg.webp",
            "subtitle"=>"Trouvez une Maison de Soins Infirmiers pour quelqu'un Atteint de la Maladie d'Alzheimer ou la Démence",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Find-a-Nursing-Home-for-Someone-With-Alzheimer%27s-Disease-or-Dementia",
                "title"=>"View Website"
              ],
            ]
         ],

                  ]
                ]
                 ]];

                 $alzheimerData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$alzheimerData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($alzheimerData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);
 
}

//============================fonction herpes====================================

function herpes(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Recognize Herpes",
                    "image_url"=> "http://pad2.whstatic.com/images/thumb/6/6f/Recognize-Herpes-Step-1-Version-2.jpg/aid521112-v4-728px-Recognize-Herpes-Step-1-Version-2.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Recognize-Herpes",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Recognize-Herpes",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"TreatHerpes",
            "item_url"=>"http://www.wikihow.com/Treat-Herpes",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/b/b7/521690-1-1.jpg/aid521690-v4-728px-521690-1-1.jpg.webp",
            "subtitle"=>"Comment Traiter L'Herpes",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-Herpes",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Treat Genital Herpes Naturally",
            "item_url"=>"http://www.wikihow.com/Treat-Genital-Herpes-Naturally",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/b/bd/Treat-Genital-Herpes-Naturally-Step-6-Version-2.jpg/aid1192461-v4-728px-Treat-Genital-Herpes-Naturally-Step-6-Version-2.jpg.webp",
            "subtitle"=>"Commen tTraiter L'Herpes Naturellement",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-Genital-Herpes-Naturally",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Stop a Herpes Outbreak ",
            "item_url"=>"http://www.wikihow.com/Stop-a-Herpes-Outbreak",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/d/d8/Stop-a-Herpes-Outbreak-Step-4.jpg/aid1374541-v4-728px-Stop-a-Herpes-Outbreak-Step-4.jpg.webp",
            "subtitle"=>"Arrêtez une éclosion d'Herpès",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Stop-a-Herpes-Outbreak",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Make Peace with Herpes",
            "item_url"=>"http://www.wikihow.com/Make-Peace-with-Herpes",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/9/9e/Make-Peace-with-Herpes-Step-12-Version-2.jpg/aid9359-v4-728px-Make-Peace-with-Herpes-Step-12-Version-2.jpg.webp",
            "subtitle"=>"Controller votre Herpes",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Make-Peace-with-Herpes",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Know If You Have Herpes",
            "item_url"=>"http://www.wikihow.com/Know-If-You-Have-Herpes",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/c/c0/Know-If-You-Have-Herpes-Step-8.jpg/aid3093316-v4-728px-Know-If-You-Have-Herpes-Step-8.jpg.webp",
            "subtitle"=>"Comment Savoir que Vous Avez de l'Herpes",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Know-If-You-Have-Herpes",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Prevent Herpes",
            "item_url"=>"http://www.wikihow.com/Prevent-Herpes",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/3/3b/Heal-a-Herpes-Outbreak-Quickly-Step-16.jpg/aid521709-v4-728px-Heal-a-Herpes-Outbreak-Quickly-Step-16.jpg.webp",
            "subtitle"=>"Prevenir l'Herpes",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Prevent-Herpes",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Live with Herpes",
            "item_url"=>"http://www.wikihow.com/Live-with-Herpes",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/6/6c/Live-with-Herpes-Step-1-Version-2.jpg/aid458636-v4-728px-Live-with-Herpes-Step-1-Version-2.jpg.webp",
            "subtitle"=>"Comment Vivre Avec De l'Herpes",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Live-with-Herpes",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Have Sex with Someone with Herpes",
            "item_url"=>"http://www.wikihow.com/Have-Sex-with-Someone-with-Herpes",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/6/62/Have-Sex-with-Someone-with-Herpes-Step-5-Version-2.jpg/aid5853124-v4-728px-Have-Sex-with-Someone-with-Herpes-Step-5-Version-2.jpg.webp",
            "subtitle"=>"Astuce pour Faire L'amour avec une Personne ayant de l'Herpes",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Have-Sex-with-Someone-with-Herpes",
                "title"=>"View Website"
              ],
            ]
         ],

                  ]
                ]
                 ]];

                 $herpesData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$herpesData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($herpesData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//============================fonction prostate====================================

function prostate(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Improve Prostate Health",
                    "image_url"=> "http://pad1.whstatic.com/images/thumb/7/7c/Improve-Prostate-Health-Step-1.jpg/aid1806430-v4-728px-Improve-Prostate-Health-Step-1.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Improve-Prostate-Health",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Improve-Prostate-Health",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Check Your Prostate",
            "item_url"=>"http://www.wikihow.com/Check-Your-Prostate",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/1/10/Check-Your-Prostate-Step-7-Version-3.jpg/aid672316-v4-728px-Check-Your-Prostate-Step-7-Version-3.jpg.webp",
            "subtitle"=>"Verifier Votre Prostate",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Check-Your-Prostate",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Treat Prostate Cancer",
            "item_url"=>"http://www.wikihow.com/Treat-Prostate-Cancer",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/b/bd/Treat-Prostate-Cancer-Step-2-Version-2.jpg/aid539589-v4-728px-Treat-Prostate-Cancer-Step-2-Version-2.jpg.webp",
            "subtitle"=>"Comment Traiter le Cancer de la Prostate",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-Prostate-Cancer",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Recognize Prostate Cancer Symptoms",
            "item_url"=>"http://www.wikihow.com/Recognize-Prostate-Cancer-Symptoms",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/3/3d/Recognize-Prostate-Cancer-Symptoms-Step-1-Version-3.jpg/aid539551-v4-728px-Recognize-Prostate-Cancer-Symptoms-Step-1-Version-3.jpg.webp",
            "subtitle"=>"Reconnaitre les Symptomes du Cancer de la Prostate",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Recognize-Prostate-Cancer-Symptoms",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Cure Prostate Cancer",
            "item_url"=>"http://www.wikihow.com/Cure-Prostate-Cancer",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/f/f9/Cure-Prostate-Cancer-Step-3-Version-2.jpg/aid4374220-v4-728px-Cure-Prostate-Cancer-Step-3-Version-2.jpg.webp",
            "subtitle"=>"Guerrir le Cancer de la Prostate",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Cure-Prostate-Cancer",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Reduce the Risk of Prostate Cancer",
            "item_url"=>"http://www.wikihow.com/Reduce-the-Risk-of-Prostate-Cancer",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/7/7c/Reduce-the-Risk-of-Prostate-Cancer-Step-1-Version-3.jpg/aid1367252-v4-728px-Reduce-the-Risk-of-Prostate-Cancer-Step-1-Version-3.jpg.webp",
            "subtitle"=>"Comment Reduire le Risque du Cancer De la Prostate",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Reduce-the-Risk-of-Prostate-Cancer",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Lower Prostate-Specific Antigens (PSA)",
            "item_url"=>"http://www.wikihow.com/Lower-Prostate%E2%80%93Specific-Antigens-(PSA)",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/c/c1/Lower-Prostate%E2%80%93Specific-Antigens-%28PSA%29-Step-1-Version-3.jpg/aid5093074-v4-728px-Lower-Prostate%E2%80%93Specific-Antigens-%28PSA%29-Step-1-Version-3.jpg.webp",
            "subtitle"=>"Lower Prostate-Specific Antigens (PSA)",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Lower-Prostate%E2%80%93Specific-Antigens-(PSA)",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Treat Prostate Cancer with Androgen Deprivation Therapy",
            "item_url"=>"http://www.wikihow.com/Treat-Prostate-Cancer-with-Androgen-Deprivation-Therapy",
            "image_url"=>"http://imagescalers.whstatic.com/images_en/thumb/5/50/Treat-Prostate-Cancer-with-Androgen-Deprivation-Therapy-Step-2.jpg/aid8296085-v4-728px-Treat-Prostate-Cancer-with-Androgen-Deprivation-Therapy-Step-2.jpg.webp",
            "subtitle"=>"Traiter le Cancer de la Prostate avec l'ADT",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-Prostate-Cancer-with-Androgen-Deprivation-Therapy",
                "title"=>"View Website"
              ],
            ]
         ],

                  ]
                ]
                 ]];

                 $prostateData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$prostateData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($prostateData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//============================fonction ulcere======================================

function ulcere(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Treat Canker Sores or Mouth Ulcers",
                    "image_url"=> "http://pad1.whstatic.com/images/thumb/6/6a/Treat-Canker-Sores-or-Mouth-Ulcers-Step-5-Version-3.jpg/aid55587-v4-728px-Treat-Canker-Sores-or-Mouth-Ulcers-Step-5-Version-3.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Treat-Canker-Sores-or-Mouth-Ulcers",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-Canker-Sores-or-Mouth-Ulcers",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Treat a Bleeding Ulcer",
            "item_url"=>"http://www.wikihow.com/Treat-a-Bleeding-Ulcer",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/b/bb/Treat-a-Bleeding-Ulcer-Step-10.jpg/aid712875-v4-728px-Treat-a-Bleeding-Ulcer-Step-10.jpg.webp",
            "subtitle"=>"Traitement de l'Ulcère de Saignement",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-a-Bleeding-Ulcer",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Relieve Ulcer Pain",
            "item_url"=>"http://www.wikihow.com/Relieve-Ulcer-Pain",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/2/22/Relieve-Ulcer-Pain-Step-14.jpg/aid7198900-v4-728px-Relieve-Ulcer-Pain-Step-14.jpg.webp",
            "subtitle"=>"Soulager la Douleur de l'Ulcère",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Relieve-Ulcer-Pain",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Recognize the Symptoms of Stomach Ulcers",
            "item_url"=>"http://www.wikihow.com/Recognize-the-Symptoms-of-Stomach-Ulcers",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/5/50/Recognize-the-Symptoms-of-Stomach-Ulcers-Step-1-Version-2.jpg/aid1078348-v4-728px-Recognize-the-Symptoms-of-Stomach-Ulcers-Step-1-Version-2.jpg.webp",
            "subtitle"=>"Reconnaitre les Symptomes de l'Ulcere d'Estomac",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Recognize-the-Symptoms-of-Stomach-Ulcers",
                "title"=>"View Website"
              ],
            ]
         ],

                  ]
                ]
                 ]];

                 $ulcereData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$ulcereData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($ulcereData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//============================fonction sinusite=====================================

function sinusite(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Treat Chronic Sinusitis",
                    "image_url"=> "http://pad3.whstatic.com/images/thumb/b/bb/Treat-Chronic-Sinusitis-Step-9.jpg/aid7253756-v4-728px-Treat-Chronic-Sinusitis-Step-9.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Treat-Chronic-Sinusitis",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-Chronic-Sinusitis",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Care for a Sinus Headache",
            "item_url"=>"http://www.wikihow.com/Care-for-a-Sinus-Headache",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/8/8c/Care-for-a-Sinus-Headache-Step-1.jpg/aid1533856-v4-728px-Care-for-a-Sinus-Headache-Step-1.jpg.webp",
            "subtitle"=>"Soins pour le Mal de Tête des Sinus",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Care-for-a-Sinus-Headache",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Clear a Sinus Infection",
            "item_url"=>"http://www.wikihow.com/Clear-a-Sinus-Infection",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/2/2a/Clear-a-Sinus-Infection-Step-1-Version-7.jpg/aid15379-v4-728px-Clear-a-Sinus-Infection-Step-1-Version-7.jpg.webp",
            "subtitle"=>"Effacer L'Infection des Sinus",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Clear-a-Sinus-Infection",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Get Rid of Sinus Congestion",
            "item_url"=>"http://www.wikihow.com/Get-Rid-of-Sinus-Congestion",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/4/40/Get-Rid-of-Sinus-Congestion-Step-8-Version-3.jpg/aid895449-v4-728px-Get-Rid-of-Sinus-Congestion-Step-8-Version-3.jpg.webp",
            "subtitle"=>"Se débarrasser de la Congestion des Sinus",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Get-Rid-of-Sinus-Congestion",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Find Out if You Have a Sinus Infection",
            "item_url"=>"http://www.wikihow.com/Find-Out-if-You-Have-a-Sinus-Infection",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/c/ce/Find-Out-if-You-Have-a-Sinus-Infection-Step-4-Version-3.jpg/aid118597-v4-728px-Find-Out-if-You-Have-a-Sinus-Infection-Step-4-Version-3.jpg.webp",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Find-Out-if-You-Have-a-Sinus-Infection",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Drain Sinuses",
            "item_url"=>"http://www.wikihow.com/Drain-Sinuses",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/c/c3/Drain-Sinuses-Step-5-Version-2.jpg/aid2850885-v4-728px-Drain-Sinuses-Step-5-Version-2.jpg.webp",
            "subtitle"=>"Drain Sinuses",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Drain-Sinuses",
                "title"=>"View Website"
              ],
            ]
         ],

                  ]
                ]
                 ]];

                 $sinusiteData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$sinusiteData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($sinusiteData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//=============================fonction stress=======================================

function stress(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Deal With Stress",
                    "image_url"=> "http://pad2.whstatic.com/images/thumb/c/cd/Deal-With-Stress-Step-16-Version-2.jpg/aid31290-v4-728px-Deal-With-Stress-Step-16-Version-2.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Deal-With-Stress",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Deal-With-Stress",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Relieve Stress",
            "item_url"=>"http://www.wikihow.com/Relieve-Stress",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/6/65/Relieve-Stress-Step-2-Version-4.jpg/aid109874-v4-728px-Relieve-Stress-Step-2-Version-4.jpg.webp",
            "subtitle"=>"Soulager le Stress",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Relieve-Stress",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Relax and De Stress",
            "item_url"=>"http://www.wikihow.com/Relax-and-De-Stress",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/6/63/Relax-and-De-Stress-Step-17-Version-2.jpg/aid482617-v4-728px-Relax-and-De-Stress-Step-17-Version-2.jpg.webp",
            "subtitle"=>"Comment DeStresser",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Relax-and-De-Stress",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Cope With Stress at School",
            "item_url"=>"http://www.wikihow.com/Cope-With-Stress-at-School",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/5/5b/Cope-With-Stress-at-School-Step-7.jpg/aid521233-v4-728px-Cope-With-Stress-at-School-Step-7.jpg.webp",
            "subtitle"=>"Faire face au stress à l'école",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Cope-With-Stress-at-School",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Reduce Stress",
            "item_url"=>"http://www.wikihow.com/Reduce-Stress",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/f/fd/Reduce-Stress-Step-12-Version-2.jpg/aid327385-v4-728px-Reduce-Stress-Step-12-Version-2.jpg.webp",
            "subtitle"=>"Comment Reduire le Stress",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Reduce-Stress",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Recover from Chronic Stress",
            "item_url"=>"http://www.wikihow.com/Recover-from-Chronic-Stress",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/3/3b/Recover-from-Chronic-Stress-Step-11.jpg/aid1708159-v4-728px-Recover-from-Chronic-Stress-Step-11.jpg.webp",
            "subtitle"=>"Comment Récupérer du Stress Chronique",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Recover-from-Chronic-Stress",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Sleep when Stressed",
            "item_url"=>"http://www.wikihow.com/Sleep-when-Stressed",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/2/20/Sleep-when-Stressed-Step-1-Version-3.jpg/aid1382378-v4-728px-Sleep-when-Stressed-Step-1-Version-3.jpg.webp",
            "subtitle"=>"Comment Dormir Lorsqu'on est Stressé",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Sleep-when-Stressed",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Be Calm in a Stressful Situation",
            "item_url"=>"http://www.wikihow.com/Be-Calm-in-a-Stressful-Situation",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/0/06/Be-Calm-in-a-Stressful-Situation-Step-1-Version-2.jpg/aid7591-v4-728px-Be-Calm-in-a-Stressful-Situation-Step-1-Version-2.jpg.webp",
            "subtitle"=>"Comment Garder son Calme en Situation de Stress",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Be-Calm-in-a-Stressful-Situation",
                "title"=>"View Website"
              ],
            ]
         ],

                  ]
                ]
                 ]];

                 $stressData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$stressData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($stressData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//==============================fonction dentition=================================

function dentition(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Whiten Teeth",
                    "image_url"=> "http://pad2.whstatic.com/images/thumb/5/51/Whiten-Teeth-Step-10-Version-3.jpg/aid88019-v4-728px-Whiten-Teeth-Step-10-Version-3.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Whiten-Teeth",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Whiten-Teeth",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Get Whiter Teeth at Home",
            "item_url"=>"http://www.wikihow.com/Get-Whiter-Teeth-at-Home",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/d/db/Get-Whiter-Teeth-at-Home-Step-2-Version-2.jpg/aid1538469-v4-728px-Get-Whiter-Teeth-at-Home-Step-2-Version-2.jpg.webp",
            "subtitle"=>"Comment faire pour Avoir Des Dents Blanche a al Maison",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Get-Whiter-Teeth-at-Home",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Care for Your Teeth",
            "item_url"=>"http://www.wikihow.com/Care-for-Your-Teeth",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/3/38/Care-for-Your-Teeth-Step-3-Version-2.jpg/aid1120474-v4-728px-Care-for-Your-Teeth-Step-3-Version-2.jpg.webp",
            "subtitle"=>"Comment Faire Attention a sa Dentition",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Care-for-Your-Teeth",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Have Clean, White Teeth",
            "item_url"=>"http://www.wikihow.com/Have-Clean%2C-White-Teeth",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/f/fa/Have-Clean%2C-White-Teeth-Step-3-Version-2.jpg/aid60431-v4-728px-Have-Clean%2C-White-Teeth-Step-3-Version-2.jpg.webp",
            "subtitle"=>"Avoir des Dents Blanches",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Have-Clean%2C-White-Teeth",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Pull out a Loose Tooth",
            "item_url"=>"http://www.wikihow.com/Pull-out-a-Loose-Tooth",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/6/67/Pull-out-a-Loose-Tooth-Step-13-Version-3.jpg/aid421227-v4-728px-Pull-out-a-Loose-Tooth-Step-13-Version-3.jpg.webp",
            "subtitle"=>"Remplacer Une Dent Perdue",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Pull-out-a-Loose-Tooth",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Brush Your Teeth With Braces On",
            "item_url"=>"http://www.wikihow.com/Brush-Your-Teeth-With-Braces-On",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/a/a8/Brush-Your-Teeth-With-Braces-On-Step-1-Version-6.jpg/aid166778-v4-728px-Brush-Your-Teeth-With-Braces-On-Step-1-Version-6.jpg.webp",
            "subtitle"=>"Brossez vos Dents avec Des Bagues Dessushttp://www.wikihow.com/Deal-With-Having-Bad-Teeth",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Brush-Your-Teeth-With-Braces-On",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Deal With Having Bad Teeth",
            "item_url"=>"http://www.wikihow.com/Deal-With-Having-Bad-Teeth",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/f/fa/Deal-With-Having-Bad-Teeth-Step-9.jpg/aid207021-v4-728px-Deal-With-Having-Bad-Teeth-Step-9.jpg.webp",
            "subtitle"=>"Deal With Having Bad Teeth",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Deal-With-Having-Bad-Teeth",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Make a Loose Tooth Fall Out Without Pulling It",
            "item_url"=>"http://www.wikihow.com/Make-a-Loose-Tooth-Fall-Out-Without-Pulling-It",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/6/63/Make-a-Loose-Tooth-Fall-Out-Without-Pulling-It-Step-12.jpg/aid162291-v4-728px-Make-a-Loose-Tooth-Fall-Out-Without-Pulling-It-Step-12.jpg.webp",
            "subtitle"=>"Faire Tomber une Dent Lâche sans le Tirer",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Make-a-Loose-Tooth-Fall-Out-Without-Pulling-It",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Reverse Tooth Decay Naturally",
            "item_url"=>"http://www.wikihow.com/Reverse-Tooth-Decay-Naturally",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/c/c2/Reverse-Tooth-Decay-Naturally-Step-14.jpg/aid6924462-v4-728px-Reverse-Tooth-Decay-Naturally-Step-14.jpg.webp",
            "subtitle"=>"Enlever les Caries Naturellement",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Reverse-Tooth-Decay-Naturally",
                "title"=>"View Website"
              ],
            ]
         ],

                  ]
                ]
                 ]];

                 $dentitionData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$dentitionData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($dentitionData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//==============================fonction tete=======================================

function tete(){ 
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Get Rid of a Headache",
                    "image_url"=> "http://pad3.whstatic.com/images/thumb/1/1c/Increase-Progesterone-Levels-Step-15.jpg/aid14093-v4-728px-Increase-Progesterone-Levels-Step-15.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Get-Rid-of-a-Headache",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Get-Rid-of-a-Headache",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Relieve a Tension Headache",
            "item_url"=>"http://www.wikihow.com/Relieve-a-Tension-Headache",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/5/55/Relieve-a-Tension-Headache-Step-22.jpg/aid3846-v4-728px-Relieve-a-Tension-Headache-Step-22.jpg.webp",
            "subtitle"=>"Soulager un Mal de Tête",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Relieve-a-Tension-Headache",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Avoid Headaches",
            "item_url"=>"http://www.wikihow.com/Avoid-Headaches",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/b/b1/Avoid-Headaches-Step-4-Version-2.jpg/aid1069186-v4-728px-Avoid-Headaches-Step-4-Version-2.jpg.webp",
            "subtitle"=>"Comment Eviter les Mots De Tete",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Avoid-Headaches",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Use Acupressure Points for Migraine Headaches",
            "item_url"=>"http://www.wikihow.com/Use-Acupressure-Points-for-Migraine-Headaches",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/a/af/Use-Acupressure-Points-for-Migraine-Headaches-Step-4-Version-2.jpg/aid1474937-v4-728px-Use-Acupressure-Points-for-Migraine-Headaches-Step-4-Version-2.jpg.webp",
            "subtitle"=>"Utiliser des points d'acupuncture pour les migraines",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Use-Acupressure-Points-for-Migraine-Headaches",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Massage Away a Headache",
            "item_url"=>"http://www.wikihow.com/Massage-Away-a-Headache",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/b/bd/Massage-Away-a-Headache-Step-8-Version-2.jpg/aid1192459-v4-728px-Massage-Away-a-Headache-Step-8-Version-2.jpg.webp",
            "subtitle"=>"Massage pour le Mal De Tete",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Massage-Away-a-Headache",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Identify Different Types of Headaches",
            "item_url"=>"http://www.wikihow.com/Identify-Different-Types-of-Headaches",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/d/d2/Identify-Different-Types-of-Headaches-Step-5.jpg/aid1663586-v4-728px-Identify-Different-Types-of-Headaches-Step-5.jpg.webp",
            "subtitle"=>"Identifier les Differents Types de Mots de Tete",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Identify-Different-Types-of-Headaches",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Get Rid of a Headache in Kids",
            "item_url"=>"http://www.wikihow.com/Get-Rid-of-a-Headache-in-Kids",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/2/2b/Get-Rid-of-a-Headache-in-Kids-Step-1-Version-2.jpg/aid3245079-v4-728px-Get-Rid-of-a-Headache-in-Kids-Step-1-Version-2.jpg.webp",
            "subtitle"=>"Se débarrasser d'un mal de tête chez les enfants",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Get-Rid-of-a-Headache-in-Kids",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Prevent Headaches After Air Travel",
            "item_url"=>"http://www.wikihow.com/Prevent-Headaches-After-Air-Travel",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/1/12/Prevent-Headaches-After-Air-Travel-Step-3-Version-3.jpg/aid1544368-v4-728px-Prevent-Headaches-After-Air-Travel-Step-3-Version-3.jpg.webp",
            "subtitle"=>"Prevenir les Mots De Tete apres un Voyage par Avion",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Prevent-Headaches-After-Air-Travel",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Clear Headaches With Switchwords",
            "item_url"=>"http://www.wikihow.com/Clear-Headaches-With-Switchwords",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/8/89/Clear-Headaches-With-Switchwords-Step-3-Version-2.jpg/aid1643440-v4-728px-Clear-Headaches-With-Switchwords-Step-3-Version-2.jpg.webp",
            "subtitle"=>"Clear Headaches With Switchwords",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Clear-Headaches-With-Switchwords",
                "title"=>"View Website"
              ],
            ]
         ],

                  ]
                ]
                 ]];

                 $teteData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$teteData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($teteData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//===============================fonction chlamydia==================================

function chlamydia(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Prevent Chlamydia",
                    "image_url"=> "http://pad1.whstatic.com/images/thumb/d/de/Prevent-Chlamydia-Step-1-Version-2.jpg/aid509364-v4-728px-Prevent-Chlamydia-Step-1-Version-2.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Prevent-Chlamydia",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Prevent-Chlamydia",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Recognize Chlamydia Symptoms (for Men)",
            "item_url"=>"http://www.wikihow.com/Recognize-Chlamydia-Symptoms-%28for-Men%29",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/6/62/Recognize-Chlamydia-Symptoms-%28for-Men%29-Step-3-Version-4.jpg/aid509264-v4-728px-Recognize-Chlamydia-Symptoms-%28for-Men%29-Step-3-Version-4.jpg.webp",
            "subtitle"=>"Reconnaitre les Symptomes du Chlamydia Chez les Hommes",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Recognize-Chlamydia-Symptoms-%28for-Men%29",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Recognize Chlamydia Symptoms (for Women)",
            "item_url"=>"http://www.wikihow.com/Recognize-Chlamydia-Symptoms-(for-Women)",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/f/f7/Recognize-Chlamydia-Symptoms-%28for-Women%29-Step-2-Version-3.jpg/aid509297-v4-728px-Recognize-Chlamydia-Symptoms-%28for-Women%29-Step-2-Version-3.jpg.webp",
            "subtitle"=>"Reconnaitre les Symptomes du Chlamydia Chez les Femmes",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Recognize-Chlamydia-Symptoms-(for-Women)",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Treat Chlamydia",
            "item_url"=>"http://www.wikihow.com/Treat-Chlamydia",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/1/1a/Treat-Chlamydia-Step-7.jpg/aid1374563-v4-728px-Treat-Chlamydia-Step-7.jpg.webp",
            "subtitle"=>"Traiter Le Chlamydia",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-Chlamydia",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Get Tested for Chlamydia",
            "item_url"=>"http://www.wikihow.com/Get-Tested-for-Chlamydia",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/c/c3/Cure-Genital-Warts-in-Men-Step-1-Version-2.jpg/aid838334-v4-728px-Cure-Genital-Warts-in-Men-Step-1-Version-2.jpg.webp",
            "subtitle"=>"Comment se Faire Depister",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Get-Tested-for-Chlamydia",
                "title"=>"View Website"
              ],
            ]
         ],

                  ]
                ]
                 ]];

                 $chlamydiaData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$chlamydiaData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($chlamydiaData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//===============================fonction help=======================================

function help(){
 global $sender;
 global$access_token;

  para();
  sendRawResponse($senderActionResponse);
  parb();
  sendRawResponse($senderActionResponse);
  parc();
  sendRawResponse($senderActionResponse);
  pard();
  sendRawResponse($senderActionResponse);


  $paraData = [
        'recipient' => [ 'id' => $sender],
        'message' => ["text" => "Dialogue with me and you will see :) :)"
        ]
        ];
 
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$paraData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($paraData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);
}

//==============================fonction pargrpaha==================================

function para(){
 global $sender;
 global$access_token;

  $paraData = [
        'recipient' => [ 'id' => $sender],
        'message' => ["text" => "I am a Health Bot that lets you tell you all about the Disease you have and make you an Online Medical Consultation by an Experienced Doctor !!!"
        ]
        ];
 
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$paraData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($paraData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);
}

//==============================fonction pargrpahb==================================

function parb(){
 global $sender;
 global$access_token;

  $paraData = [
        'recipient' => [ 'id' => $sender],
        'message' => ["text" => "Just ask me for an illness that affects you by formulating a simple sentence like 'I have malaria can you help me' or something like 'call me doctor please'"
        ]
        ];
 
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$paraData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($paraData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);
}

//==============================fonction pargrpahc==================================

function parc(){
 global $sender;
 global$access_token;

  $paraData = [
        'recipient' => [ 'id' => $sender],
        'message' => ["text" => "You can ask your questions or formulate sentences in French in English or Spanish, I will give you the same result :) "
        ]
        ];
 
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$paraData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($paraData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);
}

//==============================fonction pargrpahd==================================

function pard(){
 global $sender;
 global$access_token;

  $paraData = [
        'recipient' => [ 'id' => $sender],
        'message' => ["text" => "I have the ability to locate a hospital or pharmacy near you.Just ask me for the map or locate a hospital or pharmacy ."
        ]
        ];
 
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$paraData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($paraData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);
}


//==============================fonction de message de recherche==================================

function recha(){
 global $sender;
 global$access_token;

  $paraData = [
        'recipient' => [ 'id' => $sender],
        'message' => ["text" => " Let me see !!"
        ]
        ];
 
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$paraData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($paraData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);
}

function rechb(){
 global $sender;
 global$access_token;

  $paraData = [
        'recipient' => [ 'id' => $sender],
        'message' => ["text" => " I think you asked this !!"
        ]
        ];
 
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$paraData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($paraData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);
}

function rechc(){
 global $sender;
 global$access_token;

  $paraData = [
        'recipient' => [ 'id' => $sender],
        'message' => ["text" => "Here is the result of your request :)"
        ]
        ];
 
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$paraData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($paraData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);
}

function rechd(){
 global $sender;
 global$access_token;

  $paraData = [
        'recipient' => [ 'id' => $sender],
        'message' => ["text" => "This is what you asked me :)"
        ]
        ];
 
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$paraData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($paraData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);
}

//==============================fonction gonococcie==============================================

function gonococcie(){
 
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Prevent Gonorrhea",
                    "image_url"=> "http://pad3.whstatic.com/images/thumb/6/65/Prevent-Gonorrhea-Step-2-Version-2.jpg/aid509176-v4-728px-Prevent-Gonorrhea-Step-2-Version-2.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Prevent-Gonorrhea",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/http://www.wikihow.com/Prevent-Gonorrhea",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Recognize Gonorrhea Symptoms",
            "item_url"=>"http://www.wikihow.com/Recognize-Gonorrhea-Symptoms",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/e/e4/Recognize-Gonorrhea-Symptoms-Step-1-Version-2.jpg/aid509212-v4-728px-Recognize-Gonorrhea-Symptoms-Step-1-Version-2.jpg.webp",
            "subtitle"=>"Reconnaitre Les Symptomes de la Gonococcie",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Recognize-Gonorrhea-Symptoms",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Treat Gonorrhea",
            "item_url"=>"http://www.wikihow.com/Treat-Gonorrhea",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/f/fe/Treat-Gonorrhea-Step-5-Version-4.jpg/aid518788-v4-728px-Treat-Gonorrhea-Step-5-Version-4.jpg.webp",
            "subtitle"=>"Comment Traiter la Gonococcie",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-Gonorrhea",
                "title"=>"View Website"
              ],
            ]
          ],
                  ]
                ]
                 ]];

                 $gonococcieData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$gonococcieData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($gonococcieData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//==============================fonction panari==================================================

function staphyl(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Recognize Staph Infection Symptoms",
                    "image_url"=> "http://pad2.whstatic.com/images/thumb/6/65/Recognize-Staph-Infection-Symptoms-Step-4-Version-4.jpg/aid840433-v4-728px-Recognize-Staph-Infection-Symptoms-Step-4-Version-4.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Recognize-Staph-Infection-Symptoms",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Recognize-Staph-Infection-Symptoms",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Get Rid of Eczema and Staph",
            "item_url"=>"http://www.wikihow.com/Get-Rid-of-Eczema-and-Staph",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/c/cb/Get-Rid-of-Eczema-and-Staph-Step-3-Version-2.jpg/aid1609917-v4-728px-Get-Rid-of-Eczema-and-Staph-Step-3-Version-2.jpg.webp",
            "subtitle"=>"Se débarrasser de l'eczéma et de la staphylocoque",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Get-Rid-of-Eczema-and-Staph",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Treat a Staph Infection",
            "item_url"=>"http://www.wikihow.com/Treat-a-Staph-Infection",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/2/24/Treat-a-Staph-Infection-Step-2-Version-2.jpg/aid4983661-v4-728px-Treat-a-Staph-Infection-Step-2-Version-2.jpg.webp",
            "subtitle"=>"Comment Traiter l'Infection au Staphylocoque",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-a-Staph-Infection",
                "title"=>"View Website"
              ],
            ]
          ],
                  ]
                ]
                 ]];

                 $staphylData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$staphylData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($staphylData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//==============================fonction mal de yeux===========================================

function yeux(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Make Your Eyes Stop Hurting",
                    "image_url"=> "http://pad2.whstatic.com/images/thumb/2/20/Make-Your-Eyes-Stop-Hurting-Step-2-Version-2.jpg/aid418793-v4-728px-Make-Your-Eyes-Stop-Hurting-Step-2-Version-2.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Make-Your-Eyes-Stop-Hurting",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Make-Your-Eyes-Stop-Hurting",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Relieve Eye Strain",
            "item_url"=>"http://www.wikihow.com/Relieve-Eye-Strain",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/f/f3/Relieve-Eye-Strain-Step-9-Version-2.jpg/aid98758-v4-728px-Relieve-Eye-Strain-Step-9-Version-2.jpg.webp",
            "subtitle"=>"Relief Eye Strain",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Relieve-Eye-Strain",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Soothe Sore Eyes",
            "item_url"=>"http://www.wikihow.com/Soothe-Sore-Eyes",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/1/1d/Soothe-Sore-Eyes-Step-22.jpg/aid522622-v4-728px-Soothe-Sore-Eyes-Step-22.jpg.webp",
            "subtitle"=>"Soothe Sore Eyes",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Soothe-Sore-Eyes",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Wash Eyes With Water",
            "item_url"=>"http://www.wikihow.com/Wash-Eyes-With-Water",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/d/d7/Wash-Eyes-With-Water-Step-10-Version-2.jpg/aid46732-v4-728px-Wash-Eyes-With-Water-Step-10-Version-2.jpg.webp",
            "subtitle"=>"Laver vos Yeux Avec De l'eau",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Wash-Eyes-With-Water",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Treat Surfer's Eye",
            "item_url"=>"http://www.wikihow.com/Treat-Surfer%27s-Eye",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/0/07/Treat-Surfer%27s-Eye-Step-5.jpg/aid8439652-v4-728px-Treat-Surfer%27s-Eye-Step-5.jpg.webp",
            "subtitle"=>"Traiter le Maal des Yeux",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-Surfer%27s-Eye",
                "title"=>"View Website"
              ],
            ]
         ],

             [
            "title"=>"Diagnose Surfer's Eye",
            "item_url"=>"http://www.wikihow.com/Diagnose-Surfer%27s-Eye",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/5/57/Diagnose-Surfer%27s-Eye-Step-5.jpg/aid8440091-v4-728px-Diagnose-Surfer%27s-Eye-Step-5.jpg.webp",
            "subtitle"=>"Diagnostiquer un Mal de Yeux",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Diagnose-Surfer%27s-Eye",
                "title"=>"View Website"
              ],
            ]
         ],

           [
            "title"=>"Survive Cataract Surgery",
            "item_url"=>"http://www.wikihow.com/Survive-Cataract-Surgery",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/5/59/Survive-Cataract-Surgery-Step-8-Version-2.jpg/aid550796-v4-728px-Survive-Cataract-Surgery-Step-8-Version-2.jpg.webp",
            "subtitle"=>"Survivre a une Chirurgie de la Cataract",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Survive-Cataract-Surgery",
                "title"=>"View Website"
              ],
            ]
         ],
                  ]
                ]
                 ]];

                 $yeuxData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$yeuxData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($yeuxData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//===============================fonction du cancer===========================================

function cancer(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Cancer and all cure Method",
                    "image_url"=> "https://s-media-cache-ak0.pinimg.com/originals/af/d2/7e/afd27e9cef98d14131695352f3c00831.jpg",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Category:Cancer",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Category:Cancer",
                "title"=>"View Website"
              ],
            ]
          ],
                  ]
                ]
                 ]];

                 $cancerData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$cancerData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($cancerData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//===============================fonction message dosssier cancer============================

function mes(){
 global $sender;
 global$access_token;
  
  rechc();
  sendRawResponse($senderActionResponse);
  $paraData = [
        'recipient' => [ 'id' => $sender],
        'message' => ["text" => "Open this to see all types of cancer, healing methods and much more !!!"
        ]
        ];
 
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$paraData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($paraData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//===============================fonction fracture==========================================

function fracture(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Identify a Fracture",
                    "image_url"=> "http://pad3.whstatic.com/images/thumb/0/0e/Identify-a-Fracture-Step-6-Version-2.jpg/aid4492611-v4-728px-Identify-a-Fracture-Step-6-Version-2.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Identify-a-Fracture",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Identify-a-Fracture",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Treat a Foot Fracture",
            "item_url"=>"http://www.wikihow.com/Treat-a-Foot-Fracture",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/1/12/Treat-a-Foot-Fracture-Step-1-Version-2.jpg/aid1290702-v4-728px-Treat-a-Foot-Fracture-Step-1-Version-2.jpg.webp",
            "subtitle"=>"Traiter une Fracture au Pied",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-a-Foot-Fracture",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Treat a Foot Stress Fracture",
            "item_url"=>"http://www.wikihow.com/Treat-a-Foot-Stress-Fracture",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/e/ee/Treat-a-Foot-Stress-Fracture-Step-1.jpg/aid1292669-v4-635px-Treat-a-Foot-Stress-Fracture-Step-1.jpg.webp",
            "subtitle"=>"Traiter une Fracture du Stress du Pied",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-a-Foot-Stress-Fracture",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Treat Compression Fractures with Back Surgery",
            "item_url"=>"http://www.wikihow.com/Treat-Compression-Fractures-with-Back-Surgery",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/4/45/Treat-Compression-Fractures-with-Back-Surgery-Step-3.jpg/aid8413995-v4-728px-Treat-Compression-Fractures-with-Back-Surgery-Step-3.jpg.webp",
            "subtitle"=>"Traiter les Fractures par Compression avec la Chirurgie du Dos",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-Compression-Fractures-with-Back-Surgery",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Splint a Humerus Fracture",
            "item_url"=>"http://www.wikihow.com/Splint-a-Humerus-Fracture",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/c/c8/Splint-a-Humerus-Fracture-Step-8-Version-2.jpg/aid5058576-v4-728px-Splint-a-Humerus-Fracture-Step-8-Version-2.jpg.webp",
            "subtitle"=>"Splint une Fracture d'Humérus",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Splint-a-Humerus-Fracture",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Treat a Broken Femur",
            "item_url"=>"http://www.wikihow.com/Treat-a-Broken-Femur",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/e/e5/Treat-a-Broken-Femur-Step-16.jpg/aid4829464-v4-728px-Treat-a-Broken-Femur-Step-16.jpg.webp",
            "subtitle"=>"Traiter un Os de Femur Cassé",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-a-Broken-Femur",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Check for a Fracture when Performing First Aid",
            "item_url"=>"http://www.wikihow.com/Check-for-a-Fracture-when-Performing-First-Aid",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/d/de/Check-for-a-Fracture-when-Performing-First-Aid-Step-3-Version-2.jpg/aid421358-v4-728px-Check-for-a-Fracture-when-Performing-First-Aid-Step-3-Version-2.jpg.webp",
            "subtitle"=>"Vérifier une fracture lors de la réalisation de premiers secours",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Check-for-a-Fracture-when-Performing-First-Aid",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Classify Distal Radius Fractures",
            "item_url"=>"http://www.wikihow.com/Classify-Distal-Radius-Fractures",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/d/da/Classify-Distal-Radius-Fractures-Step-10.jpg/aid4790126-v4-728px-Classify-Distal-Radius-Fractures-Step-10.jpg.webp",
            "subtitle"=>"Classer les fractures du rayon distal",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Classify-Distal-Radius-Fractures",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Treat a Swollen Knee",
            "item_url"=>"http://www.wikihow.com/Treat-a-Swollen-Knee",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/b/b1/Treat-a-Swollen-Knee-Step-9-Version-3.jpg/aid712895-v4-728px-Treat-a-Swollen-Knee-Step-9-Version-3.jpg.webp",
            "subtitle"=>"Traiter un Genou Gonflé",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-a-Swollen-Knee",
                "title"=>"View Website"
              ],
            ]
         ],

                  ]
                ]
                 ]];

                 $fractureData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$fractureData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fractureData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//===============================fonction cramp=============================================

function cramp(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Prevent Foot Cramps",
                    "image_url"=> "http://pad3.whstatic.com/images/thumb/d/d9/Deal-with-Foot-Cramps-Step-12-Version-2.jpg/aid1758220-v4-728px-Deal-with-Foot-Cramps-Step-12-Version-2.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Prevent-Foot-Cramps",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Prevent-Foot-Cramps",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Avoid Cramps",
            "item_url"=>"http://www.wikihow.com/Avoid-Cramps",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/b/b6/Avoid-Cramps-Step-1-Version-2.jpg/aid327961-v4-728px-Avoid-Cramps-Step-1-Version-2.jpg.webp",
            "subtitle"=>"Comment Eviter les Crampes",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Avoid-Cramps",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Cure Stomach Cramps",
            "item_url"=>"http://www.wikihow.com/Cure-Stomach-Cramps",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/4/40/Cure-Stomach-Cramps-Step-1-Version-3.jpg/aid164603-v4-728px-Cure-Stomach-Cramps-Step-1-Version-3.jpg.webp",
            "subtitle"=>"Comment Guerrir le Crampe d'Estomac",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Cure-Stomach-Cramps",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Treat a Cramped Muscle",
            "item_url"=>"http://www.wikihow.com/Treat-a-Cramped-Muscle",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/9/95/Treat-a-Cramped-Muscle-Step-2-Version-3.jpg/aid157603-v4-728px-Treat-a-Cramped-Muscle-Step-2-Version-3.jpg.webp",
            "subtitle"=>"Traiter Les Crampes de Muscles",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-a-Cramped-Muscle",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Relieve Leg Cramps",
            "item_url"=>"http://www.wikihow.com/Relieve-Leg-Cramps",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/c/c4/Leg-Cramp-Relief-Step-2.jpg/aid1623584-v4-728px-Leg-Cramp-Relief-Step-2.jpg.webp",
            "subtitle"=>"Soulager les Crampes aux Jambes",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Relieve-Leg-Cramps",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Deal with Foot Cramps",
            "item_url"=>"http://www.wikihow.com/Deal-with-Foot-Cramps",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/4/48/Deal-with-Foot-Cramps-Step-2-Version-3.jpg/aid334636-v4-728px-Deal-with-Foot-Cramps-Step-2-Version-3.jpg.webp",
            "subtitle"=>"Faire face aux Crampes de Pied",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Deal-with-Foot-Cramps",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Get Rid of Leg Cramps",
            "item_url"=>"http://www.wikihow.com/Get-Rid-of-Leg-Cramps",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/d/d6/Get-Rid-of-Leg-Cramps-Step-7-Version-2.jpg/aid2723488-v4-728px-Get-Rid-of-Leg-Cramps-Step-7-Version-2.jpg.webp",
            "subtitle"=>"Se Débarrasser des Crampes de Jambe",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Get-Rid-of-Leg-Cramps",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Beat Cramps Naturally",
            "item_url"=>"http://www.wikihow.com/Beat-Cramps-Naturally",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/d/d3/Cleanse-the-Lymph-System-Step-14.jpg/aid2475818-v4-728px-Cleanse-the-Lymph-System-Step-14.jpg.webp",
            "subtitle"=>"Combattre les Crampes Naturellement",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Beat-Cramps-Naturally",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Deal With Cramps when You're Not Home",
            "item_url"=>"http://www.wikihow.com/Deal-With-Cramps-when-You%27re-Not-Home",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/a/ac/Deal-With-Cramps-when-You%27re-Not-Home-Step-5-Version-2.jpg/aid655135-v4-728px-Deal-With-Cramps-when-You%27re-Not-Home-Step-5-Version-2.jpg.webp",
            "subtitle"=>"Faire Face aux Crampes lorsque vous n'êtes pas à la Maison",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Deal-With-Cramps-when-You%27re-Not-Home",
                "title"=>"View Website"
              ],
            ]
         ],

                  ]
                ]
                 ]];

                 $CrampData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$CrampData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($CrampData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//===============================fonction Rhumatisme========================================

function rhumatisme(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Treat Rheumatoid Arthritis",
                    "image_url"=> "http://pad3.whstatic.com/images/thumb/c/c5/Treat-Rheumatoid-Arthritis-Step-7.jpg/aid1456684-v4-728px-Treat-Rheumatoid-Arthritis-Step-7.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Treat-Rheumatoid-Arthritis",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-Rheumatoid-Arthritis",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Prevent Arthritis",
            "item_url"=>"http://www.wikihow.com/Prevent-Arthritis",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/d/df/Prevent-Arthritis-Step-3-Version-2.jpg/aid1577488-v4-728px-Prevent-Arthritis-Step-3-Version-2.jpg.webp",
            "subtitle"=>"Prevenir l'Arthritis",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Prevent-Arthritis",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Eat when You Have Rheumatoid Arthritis",
            "item_url"=>"http://www.wikihow.com/Eat-when-You-Have-Rheumatoid-Arthritis",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/8/84/Eat-when-You-Have-Rheumatoid-Arthritis-Step-1-Version-2.jpg/aid1304724-v4-728px-Eat-when-You-Have-Rheumatoid-Arthritis-Step-1-Version-2.jpg.webp",
            "subtitle"=>"Que Manger lorqu'on a le rhumatisme ?",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Eat-when-You-Have-Rheumatoid-Arthritis",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Get Rid of Arthritis Pain",
            "item_url"=>"http://www.wikihow.com/Get-Rid-of-Arthritis-Pain",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/e/e9/Get-Rid-of-Arthritis-Pain-Step-1-Version-2.jpg/aid149753-v4-728px-Get-Rid-of-Arthritis-Pain-Step-1-Version-2.jpg.webp",
            "subtitle"=>"Se débarrasser de la douleur de l'Arthrite",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Get-Rid-of-Arthritis-Pain",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Use Aloe Vera to Treat Rheumatoid Arthritis",
            "item_url"=>"http://www.wikihow.com/Use-Aloe-Vera-to-Treat-Rheumatoid-Arthritis",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/9/9b/Use-Aloe-Vera-to-Treat-Rheumatoid-Arthritis-Step-5.jpg/aid1538635-v4-728px-Use-Aloe-Vera-to-Treat-Rheumatoid-Arthritis-Step-5.jpg.webp",
            "subtitle"=>"Utiliser l'Aloes Vera pour Traiter le Rhumatisme",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Use-Aloe-Vera-to-Treat-Rheumatoid-Arthritis",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Prevent Arthritis Progression",
            "item_url"=>"http://www.wikihow.com/Prevent-Arthritis-Progression",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/c/c1/Get-Skinny-Arms-Step-1.jpg/aid1513256-v4-728px-Get-Skinny-Arms-Step-1.jpg.webp",
            "subtitle"=>"Prevenir la Progression du Rhumatisme",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Prevent-Arthritis-Progression",
                "title"=>"View Website"
              ],
            ]
         ],

                  ]
                ]
                 ]];

                 $rhumatismeData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$rhumatismeData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($rhumatismeData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//===============================fonction grippe aviaire====================================

function grippeA(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Recognize Bird Flu Symptoms (Avian Influenza Symptoms)",
                    "image_url"=> "http://pad2.whstatic.com/images/thumb/6/6b/Recognize-Bird-Flu-Symptoms-%28Avian-Influenza-Symptoms%29-Step-3.jpg/aid528273-v4-728px-Recognize-Bird-Flu-Symptoms-%28Avian-Influenza-Symptoms%29-Step-3.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Recognize-Bird-Flu-Symptoms-%28Avian-Influenza-Symptoms%29",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Recognize-Bird-Flu-Symptoms-%28Avian-Influenza-Symptoms%29",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Prevent Bird Flu (Avian Influenza)",
            "item_url"=>"http://www.wikihow.com/Prevent-Bird-Flu-%28Avian-Influenza%29",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/4/4d/Prevent-Bird-Flu-%28Avian-Influenza%29-Step-12.jpg/aid528303-v4-728px-Prevent-Bird-Flu-%28Avian-Influenza%29-Step-12.jpg.webp",
            "subtitle"=>"Prevenir la Grippe Aviaire",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Prevent-Bird-Flu-%28Avian-Influenza%29",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Survive a Bird Flu Pandemic",
            "item_url"=>"http://www.wikihow.com/Survive-a-Bird-Flu-Pandemic",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/9/9e/Survive-a-Bird-Flu-Pandemic-Step-3.jpg/aid84235-v4-728px-Survive-a-Bird-Flu-Pandemic-Step-3.jpg.webp",
            "subtitle"=>"Survivre à une Pandémie de Grippe Aviaire",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Survive-a-Bird-Flu-Pandemic",
                "title"=>"View Website"
              ],
            ]
          ],

                  ]
                ]
                 ]];

                 $grippeAData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$grippeAData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($grippeAData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}


//===============================fonction morsure==================================

function morsure(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Prevent Snake Bites",
                    "image_url"=> "http://pad1.whstatic.com/images/thumb/f/f6/Prevent-Snake-Bites-Step-7.jpg/aid1454589-v4-728px-Prevent-Snake-Bites-Step-7.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Prevent-Snake-Bites",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Prevent-Snake-Bites",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Treat a Snake Bite",
            "item_url"=>"http://www.wikihow.com/Treat-a-Snake-Bite",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/b/bd/Treat-a-Snake-Bite-Step-2-Version-4.jpg/aid345753-v4-728px-Treat-a-Snake-Bite-Step-2-Version-4.jpg.webp",
            "subtitle"=>"Comment Traiter Rapidement une Morsure De Serpent",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-a-Snake-Bite",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Survive Being Bitten by a Venomous Snake",
            "item_url"=>"http://www.wikihow.com/Survive-Being-Bitten-by-a-Venomous-Snake",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/0/0b/Survive-Being-Bitten-by-a-Venomous-Snake-Step-3-Version-2.jpg/aid48314-v4-728px-Survive-Being-Bitten-by-a-Venomous-Snake-Step-3-Version-2.jpg.webp",
            "subtitle"=>"Comment survivre d'une Morsure d'un Serpent Venimeux",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Survive-Being-Bitten-by-a-Venomous-Snake",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Treat Snake Bites in the Wilderness",
            "item_url"=>"http://www.wikihow.com/Treat-Snake-Bites-in-the-Wilderness",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/a/ae/Treat-Snake-Bites-in-the-Wilderness-Step-7.jpg/aid1572076-v4-728px-Treat-Snake-Bites-in-the-Wilderness-Step-7.jpg.webp",
            "subtitle"=>"Traiter les Morsures de Serpent dans le Désert",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-Snake-Bites-in-the-Wilderness",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Avoid a Rattlesnake Attack",
            "item_url"=>"http://www.wikihow.com/Avoid-a-Rattlesnake-Attack",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/c/cf/Avoid-a-Rattlesnake-Attack-Step-7-Version-2.jpg/aid187710-v4-728px-Avoid-a-Rattlesnake-Attack-Step-7-Version-2.jpg.webp",
            "subtitle"=>"Évitez une Attaque de Serpent ",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Avoid-a-Rattlesnake-Attack",
                "title"=>"View Website"
              ],
            ]
         ],
                  ]
                ]
                 ]];

                 $morsureData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$morsureData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($morsureData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//===============================fonction AVC=============================================

function AVC(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Know if You Are Having a Stroke",
                    "image_url"=> "http://pad1.whstatic.com/images/thumb/4/4e/Know-if-You-Are-Having-a-Stroke-Step-10.jpg/aid433752-v4-728px-Know-if-You-Are-Having-a-Stroke-Step-10.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Know-if-You-Are-Having-a-Stroke",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Know-if-You-Are-Having-a-Stroke",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Prevent Stroke",
            "item_url"=>"http://www.wikihow.com/Prevent-Stroke",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/4/46/Prevent-Stroke-Step-1-Version-4.jpg/aid530330-v4-728px-Prevent-Stroke-Step-1-Version-4.jpg.webp",
            "subtitle"=>"Comment Prevenir un AVC",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Prevent-Stroke",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Do Stroke Recovery Exercises",
            "item_url"=>"http://www.wikihow.com/Do-Stroke-Recovery-Exercises",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/c/c2/Do-Stroke-Recovery-Exercises-Step-4.jpg/aid5103639-v4-728px-Do-Stroke-Recovery-Exercises-Step-4.jpg.webp",
            "subtitle"=>"Exercices de Récupération des AVC",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Do-Stroke-Recovery-Exercises",
                "title"=>"View Website"
              ],
            ]
          ],
          [
            "title"=>"Diagnose a Stroke",
            "item_url"=>"http://www.wikihow.com/Diagnose-a-Stroke",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/4/4a/Diagnose-a-Stroke-Step-12.jpg/aid1522306-v4-728px-Diagnose-a-Stroke-Step-12.jpg.webp",
            "subtitle"=>"Diagnostiquer un AVC",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Diagnose-a-Stroke",
                "title"=>"View Website"
              ],
            ]
          ],
          [
            "title"=>"Help a Loved One Recover from a Stroke",
            "item_url"=>"http://www.wikihow.com/Help-a-Loved-One-Recover-from-a-Stroke",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/5/5d/Help-a-Loved-One-Recover-from-a-Stroke-Step-2-Version-2.jpg/aid4812577-v4-728px-Help-a-Loved-One-Recover-from-a-Stroke-Step-2-Version-2.jpg.webp",
            "subtitle"=>"Aider un Proche a se Remettre d'un AVC",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Help-a-Loved-One-Recover-from-a-Stroke",
                "title"=>"View Website"
              ],
            ]
          ],

                  ]
                ]
                 ]];

                 $AVCData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$AVCData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($AVCData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//===================================fonction diarrhee====================================

function diarhee(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Identify Causes of Diarrhea",
                    "image_url"=> "http://pad2.whstatic.com/images/thumb/4/40/Identify-Causes-of-Diarrhea-Step-5.jpg/aid1350372-v4-728px-Identify-Causes-of-Diarrhea-Step-5.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Identify-Causes-of-Diarrhea",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Identify-Causes-of-Diarrhea",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Cure Diarrhea",
            "item_url"=>"http://www.wikihow.com/Cure-Diarrhea",
            "image_url"=>"http://pad1.whstatic.com/images/thumb/4/43/Cure-Diarrhea-Step-1-Version-2.jpg/aid1017656-v4-728px-Cure-Diarrhea-Step-1-Version-2.jpg.webp",
            "subtitle"=>"Comment Guerrir la Diarheé",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Cure-Diarrhea",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Prevent Diarrhea",
            "item_url"=>"http://www.wikihow.com/Prevent-Diarrhea",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/e/eb/Prevent-Diarrhea-Step-1-Version-4.jpg/aid3917942-v4-728px-Prevent-Diarrhea-Step-1-Version-4.jpg.webp",
            "subtitle"=>"Comment Prevenir la Diarheé",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Prevent-Diarrhea",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Get Rid of Diarrhea Fast",
            "item_url"=>"http://www.wikihow.com/Get-Rid-of-Diarrhea-Fast",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/5/58/Get-Rid-of-Diarrhea-Fast-Step-21.jpg/aid3279664-v4-728px-Get-Rid-of-Diarrhea-Fast-Step-21.jpg.webp",
            "subtitle"=>"Se Débarrasser de la Diarrhée Rapidement",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Get-Rid-of-Diarrhea-Fast",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Treat Diarrhea (BRAT Diet Method)",
            "item_url"=>"http://www.wikihow.com/Treat-Diarrhea-%28BRAT-Diet-Method%29",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/1/1e/Treat-Diarrhea-%28BRAT-Diet-Method%29-Step-1-Version-2.jpg/aid48212-v4-728px-Treat-Diarrhea-%28BRAT-Diet-Method%29-Step-1-Version-2.jpg.webp",
            "subtitle"=>"Traiter la Diarrhée par la methode Dietetique de BRAT",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Treat-Diarrhea-%28BRAT-Diet-Method%29",
                "title"=>"View Website"
              ],
            ]
         ],
                  ]
                ]
                 ]];

                 $diarheData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$diarheData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($diarheData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//===================================fontion grippe simple================================

function grippe(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Beat the Cold or Flu",
                    "image_url"=> "http://pad3.whstatic.com/images/thumb/9/9d/Beat-the-Cold-or-Flu-Step-2-Version-2.jpg/aid3291070-v4-728px-Beat-the-Cold-or-Flu-Step-2-Version-2.jpg.webp",
                    "default_action"=> [
                        "type"=> "web_url",
                        "url"=> "http://www.wikihow.com/Beat-the-Cold-or-Flu",                       
                        "webview_height_ratio"=> "tall",
                        
                    ],
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Beat-the-Cold-or-Flu",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Fight Off a Cold or Flu",
            "item_url"=>"http://www.wikihow.com/Fight-Off-a-Cold-or-Flu",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/1/19/Fight-Off-a-Cold-or-Flu-Step-11.jpg/aid249929-v4-728px-Fight-Off-a-Cold-or-Flu-Step-11.jpg.webp",
            "subtitle"=>"Combattre un Rhume ou une Grippe",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Fight-Off-a-Cold-or-Flu",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Use Alcohol to Treat a Cold",
            "item_url"=>"http://www.wikihow.com/Use-Alcohol-to-Treat-a-Cold",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/3/36/Use-Alcohol-to-Treat-a-Cold-Step-8-Version-2.jpg/aid270314-v4-728px-Use-Alcohol-to-Treat-a-Cold-Step-8-Version-2.jpg.webp",
            "subtitle"=>"Utiliser de L'alcool Pour Traiter Le Rhume",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Use-Alcohol-to-Treat-a-Cold",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Cure the Common Cold Naturally",
            "item_url"=>"http://www.wikihow.com/Cure-the-Common-Cold-Naturally",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/d/de/Ease-Sudden-Chest-Pain-Step-21.jpg/aid1438771-v4-728px-Ease-Sudden-Chest-Pain-Step-21.jpg.webp",
            "subtitle"=>"Guérir le Rhume Naturellement",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Cure-the-Common-Cold-Naturally",
                "title"=>"View Website"
              ],
            ]
         ],
                  ]
                ]
                 ]];

                 $gripData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$gripData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($gripData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);

}

//===================================fonction fievre======================================

function fever(){
 global $sender;
 global$access_token;

 $message_to_reply = [
 "attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Cure a Fever at Home",
                    "image_url"=> "http://pad3.whstatic.com/images/thumb/f/fa/Cure-a-Fever-at-Home-Step-7-Version-4.jpg/aid96257-v4-728px-Cure-a-Fever-at-Home-Step-7-Version-4.jpg.webp",
                    
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Cure-a-Fever-at-Home",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Get Rid of a Fever Fast",
            "item_url"=>"http://www.wikihow.com/Get-Rid-of-a-Fever-Fast",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/2/20/Get-Rid-of-a-Fever-Fast-Step-4.jpg/aid3311567-v4-728px-Get-Rid-of-a-Fever-Fast-Step-4.jpg.webp",
            "subtitle"=>"Débarrassez-vous d'une Fièvre Rapidement",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Get-Rid-of-a-Fever-Fast",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Fake a Fever",
            "item_url"=>"http://www.wikihow.com/Fake-a-Fever",
            "image_url"=>"http://pad2.whstatic.com/images/thumb/e/e0/Fake-a-Fever-Step-1.jpg/aid11911-v4-728px-Fake-a-Fever-Step-1.jpg.webp",
           
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Fake-a-Fever",
                "title"=>"View Website"
              ],
            ]
          ],

           [
            "title"=>"Reduce a Fever",
            "item_url"=>"http://www.wikihow.com/Reduce-a-Fever",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/3/39/Reduce-a-Fever-Step-2-Version-4.jpg/aid1103295-v4-728px-Reduce-a-Fever-Step-2-Version-4.jpg.webp",
            "subtitle"=>"Reduire la Fievre",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Reduce-a-Fever",
                "title"=>"View Website"
              ],
            ]
         ],

         [
            "title"=>"Check a Fever Without a Thermometer",
            "item_url"=>"http://www.wikihow.com/Check-a-Fever-Without-a-Thermometer",
            "image_url"=>"http://pad3.whstatic.com/images/thumb/a/a4/Check-a-Fever-Without-a-Thermometer-Step-1-Version-4.jpg/aid1442567-v4-728px-Check-a-Fever-Without-a-Thermometer-Step-1-Version-4.jpg.webp",
            "subtitle"=>"Comment Verifier le Niveau de Fievre Sans Thermometre",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"http://www.wikihow.com/Check-a-Fever-Without-a-Thermometer",
                "title"=>"View Website"
              ],
            ]
         ],

                  ]
                ]
                 ]];

                 $gripData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];
              
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$gripData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($gripData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);
}

//===================================fonction de Other illness=============================

function oillness(){
  global $access_token;
  global $sender;
 
  pari();
  sendRawResponse($senderActionResponse);

  $paraData = [
        'recipient' => [ 'id' => $sender],
        'message' => ["text" => "Or what symptoms you are presenting now "
        ]
        ];
 
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$paraData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($paraData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);
}
function pari(){
 global $sender;
 global$access_token;

  $paraData = [
        'recipient' => [ 'id' => $sender],
        'message' => ["text" => "Write just what you are suffering from :)"
        ]
        ];
 
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$paraData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($paraData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);
}

//===================================fonction de About us=================================
function AboutUs(){
 A();
 sendRawResponse($senderActionResponse);
 B();
 sendRawResponse($senderActionResponse);
 C();
 sendRawResponse($senderActionResponse);
 D();
 sendRawResponse($senderActionResponse);
 E();
}

function A(){
 global $sender;
 global$access_token;

  $paraData = [
        'recipient' => [ 'id' => $sender],
        'message' => ["text" => "My name is MEYE-BA-NTYAM SERGE STEPHANE"
        ]
        ];
 
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$paraData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($paraData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);
}
function B(){
 global $sender;
 global$access_token;

  $paraData = [
        'recipient' => [ 'id' => $sender],
        'message' => ["text" => "I am a self-taught computer programmer and I designed this health robot to help the world population easily solve their health problem without necessarily going to the hospital. "
        ]
        ];
 
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$paraData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($paraData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);
}
function C(){
 global $sender;
 global$access_token;

  $paraData = [
        'recipient' => [ 'id' => $sender],
        'message' => ["text" => "You can find what you are suffering, methods and means to cure your illness, locate a hospital or a pharmacy near you or call directly a doctor who can make you a consultation by telephone and many other interesting features. "
        ]
        ];
 
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$paraData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($paraData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);
}
function D(){
 global $sender;
 global$access_token;

  $paraData = [
        'recipient' => [ 'id' => $sender],
        'message' => ["text" => "This robot can save the lives of millions of people in the world and more precisely in Africa because of its high density of patients to square kilometers"
        ]
        ];
 
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$paraData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($paraData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);
}
function E(){ 
 global $sender;
 global$access_token;

  $paraData = [
        'recipient' => [ 'id' => $sender],
        'message' => ["text" => "This robot has been tested by certain hospitals of Cameroon and approved by the Doctor ..... Thanks for using this robot and sharing with your friends, you can save their lives. "
        ]
        ];
 
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$paraData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($paraData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch); 
}

//============================fonction message du temps==========================

function temp(){
 global $sender;
 global$access_token;
 sendRawResponse($senderActionResponse);

  $tempData = [
        'recipient' => [ 'id' => $sender],
        'message' => ["text" => "Enter the name of your city to know the weather : "
        ]
        ];
 
  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$tempData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($tempData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch); 
}


function video(){
 global $sender;
 global $access_token;


  $temperatureData = [
          'recipient' => [ 'id' => $sender],
          'message' => ["text"=>$temperatureCel." Degree celcius or ".$temperatureFar." Fahrenheit  :)"
          ]
         ];

  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$temperatureData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($temperatureData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);       
}

//============================fonction du topics================================

function Topics(){
  global $access_token;
  global $sender;
  
  $topicsData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => ["text"=>"Choose one of the topics belows or say something that concern your Health or Tell me what symptom you are presenting so that I can find a solution :)",

                    "quick_replies"=>[
                          ["content_type"=>"text",
                          "title"=>"Medication",
                          "payload"=>"SUPPLEMENT_1",
                          "image_url"=>"https://cdn1.iconfinder.com/data/icons/medicato/32/pills_3-512.png"
                          ],
                          ["content_type"=>"text",
                          "title"=>"Chat Doctor",
                          "payload"=>"USER_DEFINED_PAYLOAD",
                          "image_url"=>"https://cdn4.iconfinder.com/data/icons/medical-14/512/7-512.png"
                          ],
                          ["content_type"=>"text",
                          "title"=>"pharmacy's location",
                          "payload"=>"SUPPLEMENT_1",
                          "image_url"=>"https://cdn2.iconfinder.com/data/icons/circle-icons-1/64/location-512.png"
                          ],
                          ["content_type"=>"text",
                          "title"=>"Pregnant",
                          "payload"=>"SUPPLEMENT_1",
                          "image_url"=>"https://cdn1.iconfinder.com/data/icons/medical-services-1-2/380/Prenatal_Care-512.png"
                          ],
                          ["content_type"=>"text",
                          "title"=>"e-consulting",
                          "payload"=>"SUPPLEMENT_1",
                          "image_url"=>"https://cdn2.iconfinder.com/data/icons/flat-style-svg-icons-part-1/512/phone_number_telephone-512.png"
                          ],
                          ["content_type"=>"text",
                          "title"=>"Help",
                          "payload"=>"SUPPLEMENT_1",
                          "image_url"=>"https://cdn1.iconfinder.com/data/icons/ui-for-web-and-mobile/512/Ui-11-512.png"
                          ],
                          ["content_type"=>"text",
                          "title"=>"About us",
                          "payload"=>"SUPPLEMENT_1",
                          "image_url"=>"https://cdn0.iconfinder.com/data/icons/green-cloud-icon-set-version-02/502/13_cloud_info_information-256.png"
                          ]

                      ],
                    ]
                    
                   ];


  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$topicsData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($topicsData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch); 

}

//============================fonction Medication==============================A pharmacien

function Medicaments(){
  global $access_token;
  global $sender;

   $message_to_reply = ["attachment"=>[
         "type"=>"template",
         "payload"=>[
         "template_type"=>"generic",
         "elements"=>[
          [
             "title"=> "Look for the Drugs of your Disease",
                    "image_url"=> "http://www.filsantejeunes.com/wp-content/uploads/2012/05/m%C3%A9dicaments.jpg",
                    
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"https://www.drugs.com/medical_conditions.html",
                "title"=>"View Website"
              ],
              [
                "type"=>"phone_number",
                  "title"=>"CALL Pharmacist",
                  "payload"=>"+237696146251"
              ],

            ]
          ]
                  ]
                ]
                 ]];

                 $MedicamentsData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => $message_to_reply 
                      ];

  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$MedicamentsData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($MedicamentsData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch); 
}

//============================fonction sante===================================

function sante(){
  global $access_token;
  global $sender;
  
  messageS();
  sendRawResponse($senderActionResponse);

  $santeData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => ["text"=>"- Dermatological diseases\n- Cardiovascular illnesses
  \n- Respiratory diseases\n- Cancers\n- Diseases and ocular's disorders\n- Genetic diseases\n- Infectious diseases
  \n- Mental diseases\n- Rare diseases\n :) :) :) :) :) :) :) :) :) ",

                      "quick_replies"=>[
                          ["content_type"=>"text",
                          "title"=>"Topics",
                          "payload"=>"SUPPLEMENT_1",
                          "image_url"=>"https://cdn2.iconfinder.com/data/icons/iconika-productivity-long-shadow-vol-1/512/Add_item_positive-512.png"
                          ],

                      ], 
                    ]
                   ];


  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$santeData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($santeData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);  
}

function messageS(){
  global $access_token;
  global $sender;
  
  $messageSData = [
                      'recipient' => [ 'id' => $sender ],
                      'message' => ["text"=>"I can allow you to heal the following diseases Categories :"]
                    
                   ];


  $url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POST,1);
  //curl_setopt($ch,CURLOPT_POSTFIELDS,$messageSData);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($messageSData));
  curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
  $result = curl_exec($ch);
  curl_close($ch);  
}
/*curl -X POST -H "Content-Type: application/json" -d '{
  "setting_type" : "call_to_actions",
  "thread_state" : "existing_thread",
  "call_to_actions":[
    {
      "type":"postback",
      "title":"Help",
      "payload":"help"
    },
    {
      "type":"postback",
      "title":"Topics",
      "payload":"Latest post"
    },
    {
      "type":"web_url",
      "title":"View English Website",
      "url":"http://www.wikihow.com/Category:Health"
    },
    {
      "type":"web_url",
      "title":"View French Website",
      "url":"http://fr.wikihow.com/Cat%C3%A9gorie:Sant%C3%A9"
    },
    {
      "type":"web_url",
      "title":"View Spanish Website",
      "url":"http://es.wikihow.com/Categor%C3%ADa:Salud"
    }
  ]
}' "https://graph.facebook.com/v2.6/me/thread_settings?access_token=EAAZAYYOeZBWZBMBAAr17HjAZCnBQdGrCiTNvAZCoZATKidz5n4IWNgv3SfCZC2ZAFbdfVF0W1dF7aw3IQPJ9EWV5ZBRdtXskq6ihro5vjJ8lHWDdAOTyxOT33paodWSgvzjlVXxB8sZAiRKYBkPuAuPcTRPJ6klM3rbqPyWXcUft6aywZDZD"*/


/*curl -X POST -H "Content-Type: application/json" -d '{
  "setting_type":"greeting",
  "greeting":{
    "text":"Hi {{user_first_name}}, Welcome to Health Bot.The Bot that saves lives "
  }
}' "https://graph.facebook.com/v2.6/me/thread_settings?access_token=EAAZAYYOeZBWZBMBAAr17HjAZCnBQdGrCiTNvAZCoZATKidz5n4IWNgv3SfCZC2ZAFbdfVF0W1dF7aw3IQPJ9EWV5ZBRdtXskq6ihro5vjJ8lHWDdAOTyxOT33paodWSgvzjlVXxB8sZAiRKYBkPuAuPcTRPJ6klM3rbqPyWXcUft6aywZDZD"*/
/*if($messageText == "hi" ) { 
//$answer = "Hello" ;
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v2.6/<USER_ID>?fields=first_name,last_name&access_token=<PAGE_ACCESS_TOKEN>');
     $result = curl_exec($ch);
      curl_close($ch);
       $obj = json_decode($result);
        $answer = 'Hi ' . $obj['first_name'] . ' ' . $obj['last_name'];
         } 
 else if ($messageText != "") {
          $answer = "Sorry I dont think I understand what you said. Try asking me something else!";
           }*/

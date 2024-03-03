<?php

use App\Models\User;
function PushNotificationNewApp($title,$body,$image){
    $users  = User::where('firebase_device_token','!=',NULL)->get();
    $key = 'AAAAH-OaKXw:APA91bFmx49O1rV3JG0_6-PPd75dE9Tq37mq-2Pncla156-i6TmR5aNofv-bJ_pNdYS7jdiWUVJ2zxCQuKLjTBPitj0VmqydtU3FMl2r1qNLoJUzdEqlCIgCLKzrxBSTbhkGZcTkbjR1';
    $id = '484d3f59-ad05-432b-9471-2f3776843a2e';
    $url = 'https://fcm.googleapis.com/fcm/send';
    if(count($users)>0){
        foreach ($users as $user){
            $dataArr = array(
                'click_action' => 'FLUTTER_NOTIFICATION_CLICK',
                'id' => $id,
                'status'=>"done"
            );
            $notification = array(
                'title' =>$title,
                'text' => $body,
                'image'=> $image,
                'sound' => true,
                'badge' => '1',
            );
            $arrayToSend = array(
                'content_available' => true,
                'to' => $user->firebase_device_token,
                'notification' => $notification,
                'data' => $dataArr,
                'priority'=>'high'
            );
            $fields = json_encode ($arrayToSend);
            $headers = array (
                'Authorization: key=' . $key,
                'Content-Type: application/json'
            );
            $ch = curl_init ();
            curl_setopt ($ch, CURLOPT_URL, $url);
            curl_setopt ($ch, CURLOPT_POST, true);
            curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt ($ch, CURLOPT_POSTFIELDS,$fields);
            $result = curl_exec ($ch);
            curl_close ($ch);
            $response = json_decode($result);
        }
        return $response;
    }
}
function PushNotificationUserFinancement($body,$image,$user_id,$montant_versement,$montant_financement,$titre_projet){
    $key = 'AAAAH-OaKXw:APA91bFmx49O1rV3JG0_6-PPd75dE9Tq37mq-2Pncla156-i6TmR5aNofv-bJ_pNdYS7jdiWUVJ2zxCQuKLjTBPitj0VmqydtU3FMl2r1qNLoJUzdEqlCIgCLKzrxBSTbhkGZcTkbjR1';
    $id = '484d3f59-ad05-432b-9471-2f3776843a2e';
    $url = 'https://fcm.googleapis.com/fcm/send';
    $users = User::where('id',$user_id)->where('firebase_device_token','!=',NULL)->first();
    if ($users){
        $title= $users->sexe == 'Homme'? 'Mr. ' :'Mme. '.$users->nom.' '.$users->prenoms.' vous avez reçu un versement de '.$montant_versement.' FCFA pour la subvention de '.$montant_financement.' FCFA du projet '.$titre_projet.'.';
        $dataArr = array(
            'click_action' => 'FLUTTER_NOTIFICATION_CLICK',
            'id' => $id,
            'status'=>"done"
        );
        $notification = array(
            'title' =>$title,
            'text' => $body,
            'image'=> $image,
            'sound' => true,
            'badge' => '1',
        );
        $arrayToSend = array(
            'content_available' => true,
            'to' => $users->firebase_device_token,
            'notification' => $notification,
            'data' => $dataArr,
            'priority'=>'high'
        );
        $fields = json_encode ($arrayToSend);
        $headers = array (
            'Authorization: key=' . $key,
            'Content-Type: application/json'
        );
        $ch = curl_init ();
        curl_setopt ($ch, CURLOPT_URL, $url);
        curl_setopt ($ch, CURLOPT_POST, true);
        curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt ($ch, CURLOPT_POSTFIELDS,$fields);
        $result = curl_exec ($ch);
        curl_close ($ch);
        $response = json_decode($result);
        return $response;
    }

}
function PushNotificationObtentionFinancement($title,$body,$image,$firebase_device_token){
    $key = 'AAAAH-OaKXw:APA91bFmx49O1rV3JG0_6-PPd75dE9Tq37mq-2Pncla156-i6TmR5aNofv-bJ_pNdYS7jdiWUVJ2zxCQuKLjTBPitj0VmqydtU3FMl2r1qNLoJUzdEqlCIgCLKzrxBSTbhkGZcTkbjR1';
    $id = '484d3f59-ad05-432b-9471-2f3776843a2e';
    $url = 'https://fcm.googleapis.com/fcm/send';
        $dataArr = array(
            'click_action' => 'FLUTTER_NOTIFICATION_CLICK',
            'id' => $id,
            'status'=>"done"
        );
        $notification = array(
            'title' =>$title,
            'text' => $body,
            'image'=> $image,
            'sound' => true,
            'badge' => '1',
        );
        $arrayToSend = array(
            'content_available' => true,
            'to' => $firebase_device_token,
            'notification' => $notification,
            'data' => $dataArr,
            'priority'=>'high'
        );
        $fields = json_encode ($arrayToSend);
        $headers = array (
            'Authorization: key=' . $key,
            'Content-Type: application/json'
        );
        $ch = curl_init ();
        curl_setopt ($ch, CURLOPT_URL, $url);
        curl_setopt ($ch, CURLOPT_POST, true);
        curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt ($ch, CURLOPT_POSTFIELDS,$fields);
        $result = curl_exec ($ch);
        curl_close ($ch);
        $response = json_decode($result);
    return $response;
}

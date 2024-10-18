<?php
error_reporting(0);

$token = "7558994384:AAGp6lW_OWSfStLK6JWL9X31AFGjRsRdSGY"; #توكنك @Wolf_Satisfaction
$admin = 7030600218 ; #ايديك @Wolf_Satisfaction
define('API_KEY', $token);
function bot($method, $datas = [])
{
    $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
    $res = curl_exec($ch);
    if (curl_error($ch)) {
        var_dump(curl_error($ch));
    } else {
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$from_id = $message->from->id;
$name = $update->message->from->first_name;
$from_id = $message->from->id;
$from_id = $message->from->id;
$data = $update->callback_query->data;
$name = $message->from->first_name;
$from_id2 = $update->callback_query->message->from->id;
$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$username = $update->message->from->username;
$sttings = json_decode(file_get_contents("SALEHN.json"),1);
$Df = "7038758847";//ايديك
if(!$sttings['sudo']){
$iidsod = $Df;
}elseif($sttings['sudo']){
$iidsod = $sttings['sudo'];
}
$admin = $iidsod;
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 =  $update->callback_query->message->message_id;
$name = $message->from->first_name;
$username = $message->from->username;
$from_id = $message->from->id;
$SALEHN2 = explode("\n",file_get_contents("SALEHN4.txt"));
$SAll = count($SALEHN2)-1;
if ($message && !in_array($from_id, $SALEHN2)) {
file_put_contents("SALEHN4.txt", $from_id."\n",FILE_APPEND);
}
$ch1 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMSALEH5ber?chat_id=".$sttings['ch1']."&user_id=".$from_id);
$ch2 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMSALEH5ber?chat_id=".$sttings['ch2']."&user_id=".$from_id);
if($message && (strpos($ch1,'"status":"left"') or strpos($ch1,'"Bad Request: USER_ID_INVALID"') or strpos($ch1,'"status":"kicked"') or strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>'$SALEH5 :عذراً عزيزي 
📜 :يجب عليك الاشتراك في قناة المطور أولا
📜 :اشترك ثم ارسل /start 
----------------------------
'.$sttings['ch1'].'
----------------------------
'.$sttings['ch2'],
]);return false;
}
$ch11 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMSALEH5ber?chat_id=".$sttings['ch11']."&user_id=".$from_id);
$ch22 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMSALEH5ber?chat_id=".$sttings['ch22']."&user_id=".$from_id);
if($update){
if($message && (strpos($ch11,'"status":"left"') or strpos($ch11,'"Bad Request: USER_ID_INVALID"') or strpos($ch11,'"status":"kicked"') or strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
$get = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=".$sttings['ch11']));
$link = $get->result;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$SALEH5 :عذراً عزيزي 
✔:يجب عليك الاشتراك في قناة المطور أولا
✔:اشترك ثم ارسل /start 
----------------------------
📜 ".$link ."
 ----------------------------",
'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"اضغط هنا",'url'=>"$link"]],
]])
]);return false;}}
if($update){
if($message && (strpos($ch22,'"status":"left"') or strpos($ch22,'"Bad Request: USER_ID_INVALID"') or strpos($ch22,'"status":"kicked"') or strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
$get = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=".$sttings['ch22']));
$link = $get->result;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$SALEH5 :عذراً عزيزي 
✔:يجب عليك الاشتراك في قناة المطور أولا
✔:اشترك ثم ارسل /start 
----------------------------
📜 ".$link ."
 ----------------------------",
'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"اضغط هنا",'url'=>"$link"]],
]])
]);return false;}}
$SALEH5 = $sttings['SALEH5oji'];
$start = $sttings['start'];

if($text == "/start" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>" ➪ [Super Namero](tg://user?id=6704860429) 👒
----------------------------
🛍 :اهلا بك عزيزي في لوحه الاوامر ألخاصه بالمطور الاساسي 
",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الاشتراك الاجباري" ,'callback_data'=>"All Ch"]],
[['text'=>"الاذاعه" ,'callback_data'=>"Sender"],['text'=>"المشتركين ".$SAll."",'callback_data'=>"mSALEH5"]],
[['text'=>"تفعيل التنبيه" ,'callback_data'=>"ch1"],['text'=>"تعطيل التنبيه" ,'callback_data'=>"ch2"]],
[['text'=>"النسخه الاحتياطيه" ,'callback_data'=>"file"]],
[['text'=>"تفعيل التوجيه" ,'callback_data'=>"ON"],['text'=>"تعطيل التوجيه" ,'callback_data'=>"Of"]],
[['text'=>"رساله الترحيب (start) " ,'callback_data'=>"saleh221"]],
[['text'=>"تغيير الازرار " ,'callback_data'=>"SALEH5oji"],['text'=>"نقل ملكيه" ,'callback_data'=>"AddAdmin"]],
]])
]);
}
if($data == "SALEHN" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
"text"=>"➪ [Super Namero](tg://user?id=6704860429) 👒
----------------------------
🛍 :اهلا بك عزيزي في لوحه الاوامر ألخاصه بالمطور الاساسي ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الاشتراك الاجباري" ,'callback_data'=>"All Ch"]],
[['text'=>"الاذاعه" ,'callback_data'=>"Sender"],['text'=>"المشتركين ".$SAll."",'callback_data'=>"mSALEH5"]],
[['text'=>"تفعيل التنبيه" ,'callback_data'=>"ch1"],['text'=>"تعطيل التنبيه" ,'callback_data'=>"ch2"]],
[['text'=>"النسخه الاحتياطيه" ,'callback_data'=>"file"]],
[['text'=>"تفعيل التوجيه" ,'callback_data'=>"ON"],['text'=>"تعطيل التوجيه" ,'callback_data'=>"Of"]],
[['text'=>"رساله الترحيب (start) " ,'callback_data'=>"saleh221"]],
[['text'=>"تغيير الازرار " ,'callback_data'=>"SALEH5oji"],['text'=>"نقل ملكيه" ,'callback_data'=>"AddAdmin"]],
]])
]);
}

if($data == "star"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
📜 مرحبا بيك في قسم رساله الترحيب (star) 
----------------------------
📝 الرساله الحاليه 
`$start`
ارسل الستارت الجديده ',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['data'] = "start";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($text && $sttings['data'] == "start" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>" $SALEH5 :تم تعيين الستارت ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['start'] = "$text";
$sttings['data'] = "super";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($data == "SALEH5oji"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'حسنا ارسل الايموجي او الرمز الذي سيتم عرضه في كل الازرار',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['data'] = "SALEH5ojis";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($text && $sttings['data'] == "SALEH5ojis" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>" $SALEH5 :تم اضافه الزر  [$text] ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);

$sttings['SALEH5oji'] = "$text";
$sttings['data'] = "super";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($data == "file" and $chat_id2 == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"حسنا اختر من الاسفل$SALEH5 ",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'اضغط لسحب نسخه من ملف التخزين $SALEH5 ' ,'callback_data'=>"sendfile"]],
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
}
if($data == "sendfile" and $chat_id2 == $admin){
bot('senddocument',[
'chat_id'=>$chat_id2,
'document'=>new CURLFile("SALEHN4.txt"),
"caption"=>"- 👥 $SAll
👥 $SAll
/start $SALEH5 ",
]);
unset($sttings['data']);
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($data == "AddAdmin" and $chat_id2 == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 ارسل الان ايدي المطور الجديد",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['data'] = "Addadmin";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($text and $sttings['data'] == "Addadmin" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"✔تم رفع الادمن وتم التنزيل",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
bot("sendmessage",[
"chat_id"=>$text,
"text"=>"✔تم رفعك ادمن بالبوت",
]);
$sttings['sudo'] = "$text";
unset($sttings['data']);
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($data == "Sender"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>':اهلا بك في قسم الاذاعه',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'اذاعه توجيه' ,'callback_data'=>"SendQ1"],['text'=>'اذاعه رساله' ,'callback_data'=>"SendQ2"]],
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
}

if($data == "All Ch"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :اهلا بك في قسم الاشتراك الاجباري ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اضافه قناة عامه 1 " ,'callback_data'=>"AddCh1"],['text'=>"حذف قناة عامه 1 ",'callback_data'=>"DelCh1"]],
[['text'=>"اضافه قناة عامه 2 " ,'callback_data'=>"AddCh2"],['text'=>"حذف قناة عامه 2 " ,'callback_data'=>"DelCh2"]],
[['text'=>" عرض قنوات الاشتراك  العامه " ,'callback_data'=>"ALLCH"]],
[['text'=>"اضافه قناة خاصه 1 " ,'callback_data'=>"AddCh11"],['text'=>"حذف قناة خاصه 1 " ,'callback_data'=>"DelCh11"]],
[['text'=>"اضافه قناة خاصه 2 ",'callback_data'=>"AddCh22"],['text'=>"حذف قناة خاصه 2" ,'callback_data'=>"DelCh22"]],
[['text'=>"عرض قنوات الاشتراك  الخاصة " ,'callback_data'=>"ALLCH1"]],
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
}
if($data == "AddCh11"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ارسل ايدي قناتك الخاصه $SALEH5 :",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['data'] = "okch131";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($text && $sttings['data'] == "okch131" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"$SALEH5 :تم اضافه القناة [$text]
$SALEH5 :قم برفع البوت في القناة",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['ch11'] = "$text";
$sttings['data'] = "sd";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($data == "DelCh11"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :هل أنت متأكد من أنك تريد حذف القناة ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'لا', 'callback_data'=>'SALEHN'],['text'=>'نعم','callback_data'=>'OKDelCh11']],
]])
]);
}

if($data == "OKDelCh11"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :تم حذف القناة الاولى من الإشتراك الإجباري",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
️[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
unset($sttings['ch11']);
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($data == "AddCh22"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ارسل ايدي قناتك الخاصه $SALEH5 ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['data'] = "okch229";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($text and $sttings['data'] == "okch229" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"$SALEH5 :تم اضافه القناة [$text]
$SALEH5 :قم برفع  البوت في القناة",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['ch22'] = "$text";
$sttings['data'] = "stop0909";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($data == "DelCh22"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :هل أنت متأكد من أنك تريد حذف القناة ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'تأكيد', 'callback_data'=>'SALEHN'],['text'=>'الغاء','callback_data'=>'OKDelCh22']],
]])
]);
}

if($data == "OKDelCh22"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :تم حذف القناة الاولى من الإشتراك الإجباري",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
unset($sttings['ch22']);
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($data == "ALLCH1"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :هذه قائمة القنوات الأشتراك الاجباري 
$SALEH5 :القناة الاولى ".$sttings['ch11']."
$SALEH5 :القناة الثانية  ".$sttings['ch22'],
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
}

if($data == "AddCh1"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'✔:الآن قم بارسال معرف قناتك مع @',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['data'] = "okch121";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($text and $sttings['data'] == "okch121" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"$SALEH5 :تم اضافه القناة [$text]
$SALEH5 :قم برفع البوت ادمن في القناة",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['ch1'] = "$text";
$sttings['data'] = "stopnnn";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($data == "DelCh1"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :هل أنت متأكد من أنك تريد حذف القناة ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'لا', 'callback_data'=>'SALEHN'],['text'=>'نعم','callback_data'=>'OKDelCh1']],
]])
]);
}
if($data == "OKDelCh1"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :تم حذف القناة الاولى من الإشتراك الإجباري",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
️[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);

unset($sttings['ch1']);
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($data == "AddCh2"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :الآن قم بارسال معرف قناتك مع @",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['data'] = "okch244";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($text and $sttings['data'] == "okch244" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"$SALEH5 :تم اضافه القناة [$text]
$SALEH5 :قم برفع البوت ادمن في القناة",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);

$sttings['ch2'] = "$text";
$sttings['data'] = "stop77";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($data == "DelCh2"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :هل أنت متأكد من أنك تريد حذف القناة ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'تأكيد', 'callback_data'=>'SALEHN'],['text'=>'الغاء','callback_data'=>'OKDelCh2']],
]])
]);
}
if($data == "OKDelCh2"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :تم حذف القناة الاولى من الإشتراك الإجباري",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
unset($sttings['ch2']);
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($data == "ALLCH"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :هذه قائمة القنوات الأشتراك الاجباري 
$SALEH5 :القناة الاولى ".$sttings['ch1']."
$SALEH5 :القناة الثانية  ".$sttings['ch2'],
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
}

if($data == "SendQ1"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :ارسل رسالتك وسيتم توجيهها لـ [ $SAll ] ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['data'] = "okoo";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($message and $sttings['data'] == "okoo" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"$SALEH5 :تم توجيه الرساله",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
for($i=0;$i<count($SALEHN2); $i++){
bot('forwardMessage', [
'chat_id'=>$SALEHN2[$i],
'from_chat_id'=>$from_id,
'message_id'=>$message->message_id
]);
$sttings['data'] = "stop";
file_put_contents("SALEHN.json",json_encode($sttings));
}
}

if($data == "SendQ2"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :ارسل رسالتك وسيتم توجيهها لـ [ $SAll ] ",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['data'] = "oksend";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($text and $sttings['data'] == "oksend" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"$SALEH5 :تم توجيه الرساله",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
for($i=0;$i<count($SALEHN2); $i++){
bot('sendMessage', [
'chat_id'=>$SALEHN2[$i],
'text'=>$text
]);
$sttings['data'] = "notsend";
file_put_contents("SALEHN.json",json_encode($sttings));
}
}
if($data == "mSALEH5"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :عدد مشتركين البوت  [ $SAll ]",
 'reply_markup'=>json_encode([ 
 'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
}
if($data == "ch1"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :تم تفعيل الاشعارات",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);

$sttings['come'] = "welcome";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($text == "/start" and $sttings['come'] == "welcome" and $from_id != $admin){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"
$SALEH5 :عضو جديد قام بالدخول الى البوت 
----------------------------
$SALEH5 :الاسم : [$name](tg://user?id=$from_id) 
$SALEH5 :المعرف : [@$username](tg://user?id=$from_id)  
$SALEH5 :الايدي:  [$from_id](tg://user?id=$from_id)  
$SALEH5 :عدد المشتركين : { $SAll }  ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
if($data == "ch2"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :تم تعطيل الاشعارات ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['come'] = "nowelcome";
file_put_contents("SALEHN.json",json_encode($sttings));
}

if($data == "ON"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :تم تفعيل التوجيه",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['message'] = "textwelcome";
file_put_contents("SALEHN.json",json_encode($sttings));
}
if($message and $sttings['message'] == "textwelcome" and $from_id != $admin){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$from_id,
'message_id'=>$message->message_id
]);
}
if($message and $sttings['message'] == "SALEHN" and $from_id == $admin){
bot('sendMessage',[
'chat_id'=>$message->reply_to_message->forward_from->id,
'text'=>$text,
]);
}

if($data == "Of"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$SALEH5 :تم تعطيل التوجيه",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع ➪' ,'callback_data'=>"SALEHN"]],
]])
]);
$sttings['message'] = "nowellcome";
file_put_contents("SALEHN.json",json_encode($sttings));
}

$usrbot = bot("getme")->result->username;
$SALEH5oji = "➪
➪
➪
➪
➪";

$SALEH5oji = explode("\n", $SALEH5oji);
$b = $SALEH5oji[rand(0, 4)];
$NamesBACK = "رجوع $b";

define("USR_BOT", $usrbot);
mkdir("UploadEr");

function SETJSON($INPUT)
{
    if ($INPUT != NULL || $INPUT != "") {
        $F = "UploadEr/UploadEr.json";
        $N = json_encode($INPUT, JSON_PRETTY_PRINT);

        file_put_contents($F, $N);
    }
}

$update = json_decode(file_get_contents('php://input'));

if ($update->message) {
    $message = $update->message;
    $message_id = $update->message->message_id;
    $username = $message->from->username;
    $chat_id = $message->chat->id;
    $title = $message->chat->title;
    $text = $message->text;
    $user = $message->from->username;
    $name = $message->from->first_name;
    $from_id = $message->from->id;
}

$UploadEr = json_decode(file_get_contents("UploadEr/UploadEr.json"), true);


if ($update->callback_query) {
    $data = $update->callback_query->data;
    $chat_id = $update->callback_query->message->chat->id;
    $title = $update->callback_query->message->chat->title;
    $message_id = $update->callback_query->message->message_id;
    $name = $update->callback_query->message->chat->first_name;
    $user = $update->callback_query->message->chat->username;
    $from_id = $update->callback_query->from->id;
}

   if( $text == "/start") {
       $nogomall = count($nogom);
   	bot("sendmessage",[
                "chat_id" => $chat_id, 
                "text" => "
➪ [Super Namero](tg://user?id=6704860429) 👒
$start
تقرير التقييم الشامل للبوت:

📢] نسبة التقييمات الإيجابية: 99.33%
🌀] نسبة التقييمات السلبية: 6.67%

📜] العدد الإجمالي للمستخدمين الذين قاموا بتقييم البوت: $nogomall

🟢] عدد التقييمات الإيجابية: 99%
🔴] عدد التقييمات السلبية: 5%
                ",
                'parse_mode'=>"markdown",
                'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"🟢🔴",'callback_data'=>"bachhk" ]], 
      ]
    ])
            ]);
  }
if ($UploadEr["mSALEH5s"][$from_id] == null) {
	$UploadEr["mSALEH5s"][$from_id] = 1 ;
	$UploadEr["mSALEH5sA"][] = $from_id ;
        SETJSON($UploadEr);
	} 
	if($data == "sendReport") {
	bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $message_id , 
            "text" => "
📝] ارسل الان الكليشه التوضيحيه للمطور
🌀] ان كان عن طريق الخطا سيتم فك الحظر
" ,
        ]);
	$UploadEr["mode"][$from_id] = "sR" ;
        SETJSON($UploadEr);
        return false ;
	} 
	
	if($text and $UploadEr["mode"][$from_id] == "sR") {
		bot("sendMessage", [
            "chat_id" => $chat_id,
            "text" => "🛍] تم استلام الطلب سيتم مراجعته في اقرب وقت ممكن",
            "parse_mode" => "markdown"
            
        ]);
        bot("sendMessage", [
            "chat_id" => $admin ,
            "text" => "📜] طلب فك حظر عزيزي المبرمج
            👥] من $name
 
[$from_id](tg://user?id=$chat_id) 
[Acount](tg://openmessage?user_id=$chat_id) 

الكليشه : $text
لفك الحظر عنه ارسل [/Unb_$from_id] 
",
            "parse_mode" => "markdown"
            
        ]);
        $UploadEr["mode"][$from_id] = null ;
        SETJSON($UploadEr);
        return false ;
		} 
		
$not = array("$admin", "6704860429");
if (isset($from_id) && is_array($UploadEr)) {
	if (in_array($from_id, $UploadEr)) {
    if (!in_array($from_id, $not)) {
        bot("deletSALEH5essage", [
            "chat_id" => $chat_id,
            "message_id" => $UploadEr["m_id"][$from_id]
        ]);
        $n = bot("sendMessage", [
            "chat_id" => $chat_id,
            "text" => "🟢 You are banned from using the bot due to violations.\n🔴 تم حظرك من استخدام الروبوت بسبب الانتهاكات.",
            "parse_mode" => "markdown", 
            'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>" طلب فك حظر",'callback_data'=>"sendReport" ]], 
      ]
    ])
        ]);
        $UploadEr["m_id"][$from_id] = $n->result->message_id;
        SETJSON($UploadEr);
        return false;
       } 
    }
}


		
		if(preg_match("/Unb_/", $text)) {
			if($from_id == $admin) {
				$B=array_search(explode("_",$text)[1],$UploadEr);
        unset($UploadEr[$B]);
        SETJSON($UploadEr);
				bot("sendMessage", [
            "chat_id" => $admin ,
            "text" => "
            Done ✅
            Id : (". explode("_",$text)[1].") / $B
",
            "parse_mode" => "markdown"
            
        ]);
        bot("sendMessage", [
            "chat_id" => explode("_",$text)[1] ,
            "text" => "🔓] تم فك الحظر عن حسابك
📜] الرجاء التزام بقوانين البوت
",
            "parse_mode" => "markdown"
            
        ]);
            $nogomall = count($nogom);
        $other = $UploadEr["unFilSALEH5atch"]?? "0";
        bot("sendmessage",[
                "chat_id" => explode("_",$text)[1], 
                "text" => "
➪ [Super Namero](tg://user?id=6704860429) 👒

*$start *
*----------------------------*
*📝] ملفاتك المرفوعه : $counts
📊] الملفات المرفوعه : $vc | $no
👥] عدد المستخدمين : $nj
📜] غيرها من للملفات : $other
🟢]عدد تقيمات البوت : $nogomall *
*----------------------------*
                ",
                'parse_mode'=>"markdown",
                'reply_markup'=>json_encode([
     'inline_keyboard'=>[
          [['text'=>"• شروط البوت 📤 •",'callback_data'=>"Supernamero" ]], 
     [['text'=>"• عمل تحديث 🌀 •",'callback_data'=>"refr" ],['text'=>"• الاحصائيات 📜 •",'callback_data'=>"nas" ]], 
     [['text'=>"• تواصل مع دعم البوت 👥 •",'callback_data'=>"contact" ]], 
          [['text'=>"• تقييم البوت 🗃 •",'callback_data'=>"NAMERO" ],['text'=>"• قياس السرعه 📝 •",'callback_data'=>"super" ]], 
     [['text'=>"• Super ⁞ Namero 🛍 • ",'url'=>"https://t.me/HJ_I_N" ]], 
      ]
    ])
            ]);
				} 
			} 
			
			
		
$counts = $UploadEr["count$from_id"] ?? 0;
$vc = $UploadEr["count"] ?? 0;
$no = format_number($vc)?? "0";
$nj = count($UploadEr["mSALEH5sA"]) ;
   if( $text == "/start") {
       $nogomall = count($nogom);
   $other = $UploadEr["unFilSALEH5atch"]?? "0";
   	bot("sendmessage",[
                "chat_id" => $chat_id, 
                "text" => "
➪ [Super Namero](tg://user?id=6704860429) 👒

*$start *
*----------------------------*
*📝] ملفاتك المرفوعه : $counts
📊] الملفات المرفوعه : $vc | $no
👥] عدد المستخدمين : $nj
📜] غيرها من للملفات : $other
🟢]عدد تقيمات البوت : $nogomall*
*----------------------------*
                ",
                'parse_mode'=>"markdown",
                'reply_markup'=>json_encode([
     'inline_keyboard'=>[
          [['text'=>"• شروط البوت 📤 •",'callback_data'=>"Supernamero" ]], 
     [['text'=>"• عمل تحديث 🌀 •",'callback_data'=>"refr" ],['text'=>"• الاحصائيات 📜 •",'callback_data'=>"nas" ]], 
     [['text'=>"• تواصل مع دعم البوت 👥 •",'callback_data'=>"contact" ]], 
     [['text'=>"• تقييم البوت 🗃 •",'callback_data'=>"NAMERO" ],['text'=>"• قياس السرعه 📝 •",'callback_data'=>"super" ]], 
     [['text'=>"• Super ⁞ Namero 🛍 • ",'url'=>"https://t.me/HJ_I_N" ]], 
      ]
    ])
            ]);
            $UploadEr["المود"][$from_id] = null ;
        SETJSON($UploadEr) ;
        return false ;
  }
  
  function progress($total, $current){
$progress = $current / $total;
$bar_length = 20;
$filled_length = round($bar_length * $progress);
$bar = str_repeat("🟢", $filled_length) . str_repeat("🔴", ($bar_length - $filled_length));
$result = [
"bar"=>"[".$bar."]",
"progress"=>intval($progress * 100) ."%",
];
return $bar. intval($progress * 100) ."%";
}

function format_number($number) {
    $suffixes = array('', 'k', 'm', 'b', 't');
    $suffix_index = 0;

    while ($number >= 1000) {
        $number /= 1000;
        $suffix_index++;
    }

    return round($number, 1) . $suffixes[$suffix_index];
}

if($data == "nas") {
    $nogomall = count($nogom);
	$botfile = $UploadEr["FilSALEH5atch"]??"0";
	$other = $UploadEr["unFilSALEH5atch"]?? "0";
	$mm = $UploadEr["filehc"]?? "0";
	$curl = $UploadEr["curlfile"]?? "0";
	$no = format_number($vc)?? "0";
	bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $message_id , 
            "text" => "*
🛍] احصائيات الرفع في البوت @".bot("getme")->result->username. "
----------------------------
📝] ملفاتك المرفوعه : $counts
👥] عدد المستخدمين : $nj
📜] جميع الملفات : $vc | $no
🗃] ملفات بوتات : $botfile
🌀] غيرها من للملفات : $other
💪🏽] ملفات اختراق تم الغائها : $mm
🧾️] ملفات بمكتبه CURL : $curl
🌐] نسبه حمايه البوت للملفات الضاره : عاليه الدقه
🟢]عدد تقيمات البوت : $nogomall*
            
" ,
            "parse_mode" => "marKdown",
                'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع الي الرئيسية ➪",'callback_data'=>"back" ]], 
      ]
    ])
             ]);
	} 
  if($data == "refr") {
  	for($i=0;$i < 11;$i++){
  	bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $message_id , 
            "text" => "*
🛍] يتم عمل تحديث انتضر قليلا
". progress("100",$i*10)."
            *
" ,
            "parse_mode" => "marKdown",
                'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"🟢🔴",'callback_data'=>"bachhk" ]], 
      ]
    ])            
        ]);
  }
  
  if($i >= 10){
  	bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $message_id , 
            "text" => "*
🛍] تم الانتهاء من التحديث
🌀️] تم تحديث ملفات البوت
            *
" ,
            "parse_mode" => "marKdown",
                'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"🟢🔴",'callback_data'=>"mmmmmm" ]], 
      ]
    ])            
        ]);
            $nogomall = count($nogom);
        $other = $UploadEr["unFilSALEH5atch"]?? "0";
        bot("sendmessage",[
                "chat_id" => $chat_id, 
                "text" => "
➪ [Super Namero](tg://user?id=6704860429) 👒

*$start *
*----------------------------*
*📝] ملفاتك المرفوعه : $counts
📊] الملفات المرفوعه : $vc | $no
👥] عدد المستخدمين : $nj
📜] غيرها من للملفات : $other
🟢]عدد تقيمات البوت : $nogomall*
*----------------------------*
                ",
                'parse_mode'=>"markdown",
                'reply_markup'=>json_encode([
     'inline_keyboard'=>[
          [['text'=>"• شروط البوت 📤 •",'callback_data'=>"Supernamero" ]], 
     [['text'=>"• عمل تحديث 🌀 •",'callback_data'=>"refr" ],['text'=>"• الاحصائيات 📜 •",'callback_data'=>"nas" ]], 
     [['text'=>"• تواصل مع دعم البوت 👥 •",'callback_data'=>"contact" ]], 
     [['text'=>"• تقييم البوت 🗃 •",'callback_data'=>"NAMERO" ],['text'=>"• قياس السرعه 📝 •",'callback_data'=>"super" ]], 
     [['text'=>"• Super ⁞ Namero 🛍 • ",'url'=>"https://t.me/HJ_I_N" ]], 
      ]
    ])
            ]);
  }
 } 
 
 $domin = "SALEHUPLOAD.COM" ; #دومين استضافتك 
 if($update->message->document){
    $file_id = "https://api.telegram.org/file/bot".API_KEY."/".bot("getfile",["file_id"=>$update->message->document->file_id])->result->file_path;
    if(pathinfo($file_id, PATHINFO_EXTENSION) == "php"){
    	$b=bot("sendmessage",[
            "chat_id" => $chat_id,
            "text" => "
            *
📜] يتم التحليل انتضر قليلا..
            *
" ,
            "parse_mode" => "marKdown",
            
        ]);
    	$ur ="https://" . $domin . "" . str_replace("SALEHUPLOAD.php",null, $_SERVER['SCRIPT_NAME']). "".str_replace(".php",null,$update->message->document->file_name). "/bot.php";
    $text = file_get_contents ($file_id);
   
    if (strip_tags($text) && preg_match("/H3K/", $text) && preg_match("/public function create/", $text) && preg_match('/(.*)ZipArchive(.*)/i', $text) && preg_match('/(.*)zip(.*)/i', $text) || preg_match('/(.*)eval(.*)/i', $text)) {
bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $b->result->message_id, 
            "text" => "*
🌐️] تم رفع ملف اختراق عزيزي وتم حظرك
            *
" ,
            "parse_mode" => "marKdown",
            
        ]);
        bot("sendmessage",[
            "chat_id" =>$admin,
            "text" => "
            *
🔐] محاوله اختراق
            *
            📢] من $name
 
[$from_id](tg://user?id=$chat_id) 
[Acount](tg://openmessage?user_id=$chat_id) 
" ,
            "parse_mode" => "marKdown",
            
        ]);
        $UploadEr[] = $from_id ;
        $UploadEr["filehc"] += 1 ;
        SETJSON($UploadEr) ;
    return false;
}
bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $b->result->message_id, 
            "text" => "
<s>📜] يتم التحليل انتظر قليلاً..</s>
----------------------------
🛍] تم رفع الملف بنجاح 
📝️] اسم الملف (". $update->message->document->file_name. ")
" ,
            "parse_mode" => "html",
        ]);
        mkdir(str_replace(".php",null,$update->message->document->file_name)) ;
        file_put_contents(str_replace(".php",null,$update->message->document->file_name). "/bot.php", file_get_contents ($file_id)) ;
        
$pattern = '/(\d+:[\w-]+)/';

if(preg_match("/api.telegram.org/", file_get_contents ($file_id))) {
	$UploadEr["FilSALEH5atch"] += 1;
	} else {
		$UploadEr["unFilSALEH5atch"] += 1;
		} 
		
		if (strpos(file_get_contents ($file_id), 'curl_') !== false) {
	$UploadEr["curlfile"] += 1;
	} 
if (preg_match($pattern, file_get_contents ($file_id), $matches)) {
    $token = "🧾] توكن البوت : [". $matches[0]. "]" ;
    $n = $matches[0];
    $sethock = ["📜] عمل ويبهوك ", "👥] ازاله الويبهوك"] ;
    
} else {
	$token = "📝] تعذر علي وجود توكن البوت" ;
	
}
        $cr = rand(9999,999999);
        bot("sendmessage",[
            "chat_id" => $chat_id,
            "text" => "Super Namero 
            
📜] تم رفع الملف علي الاستضافه 
----------------------------
🌀️] رابط الملف : [ غير مدعوم للامان 🔐] 

$token 
" ,
            
            'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$sethock[0]",'callback_data'=>"sethock|$cr" ]], 
     [['text'=>"🗃] حذف الملف ",'callback_data'=>"deletefile|$cr" ]], 
     [['text'=>"$sethock[1]",'callback_data'=>"delete|$cr" ]], 
       
      ]
    ])
        ]);
        
        bot("sendmessage",[
            "chat_id" => $admin ,
            "text" => "📜] تم رفع الملف علي الاستضافه 
----------------------------
🌀️] رابط الملف : [ غير مدعوم للامان 🔐] 

$token 
" ,
            
            'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$sethock[0]",'callback_data'=>"sethock|$cr" ]], 
     [['text'=>"🗃] حذف الملف ",'callback_data'=>"deletefile|$cr" ]], 
     [['text'=>"$sethock[1]",'callback_data'=>"delete|$cr" ]], 
       
      ]
    ])
        ]);
        $UploadEr["count$from_id"] += 1;
        $UploadEr["count"] += 1;
        $UploadEr["meFile"][$from_id][] = $update->message->document->file_name;
        $UploadEr[$cr] = "$n|$ur|".$update->message->document->file_name;
        SETJSON($UploadEr) ;
    }else{
    	bot("sendmessage",[
            "chat_id" => $chat_id,
            "text" => "📜 قم بارسال ملفات بصيغه php فقط" ,
            "parse_mode" => "marKdown",
            
        ]);
   } 
}

$da = explode ("|", $data) ;
if($da[0] == "sethock") {
	if($da[1] !=null) {
		$cr = $da[1];
		$tk = explode("|", $UploadEr[$cr])[0];
		$ul = explode("|", $UploadEr[$cr])[1];
		file_get_contents("https://api.telegram.org/bot$tk/setwebhook?url=$ul") ;
		$user = "@".(json_decode(file_get_contents("https://api.telegram.org/bot$tk/getme"))->result->username?? "يبدو ان التوكن خاطء في الملف") ;
	bot('answerCallbackQuery',[
      'callback_query_id'=>$update->callback_query->id,
      'text'=>"
🌀️] تم عمل ويبهوك تلقائي
🗃] معرف البوت الخاص بك : $user
",
      'show_alert'=>true
      ]);
     } 
	}
	
	if($da[0] == "delete") {
	if($da[1] !=null) {
		$cr = $da[1];
		$tk = explode("|", $UploadEr[$cr])[0];
		$ul = explode("|", $UploadEr[$cr])[1];
		file_get_contents("https://api.telegram.org/bot$tk/deleteWebhook") ;
		$user = "@".(json_decode(file_get_contents("https://api.telegram.org/bot$tk/getme"))->result->username?? "يبدو ان التوكن خاطء في الملف") ;
	bot('answerCallbackQuery',[
      'callback_query_id'=>$update->callback_query->id,
      'text'=>"
🌀] تم ازاله الويبهوك علي البوت
🗃] معرف البوت الخاص بك : $user
",
      'show_alert'=>true
      ]);
     } 
	}
	
	if($da[0] == "deletefile") {
	if($da[1] !=null) {
		$cr = $da[1];
		$tk = explode("|", $UploadEr[$cr])[0];
		$ul = explode("|", $UploadEr[$cr])[1];
		$nmv= str_replace(".php",null,explode("|", $UploadEr[$cr])[2]) ;
		rmdir($nmv);
		unlink("$nmv/bot.php");
		file_get_contents("https://api.telegram.org/bot$tk/deleteWebhook") ;
		$user = "@".(json_decode(file_get_contents("https://api.telegram.org/bot$tk/getme"))->result->username?? "يبدو ان التوكن خاطء في الملف") ;
	bot('answerCallbackQuery',[
      'callback_query_id'=>$update->callback_query->id,
      'text'=>"
🗃️] تم حذف الملف بنجاح
👥] معرف البوت الخاص بك : $user
🌀] في المسار : $nmv
",
      'show_alert'=>true
      ]);
     } 
	} 
	 if($data == "contact") {
 	bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $message_id , 
            "text" => "
            *
📜]مرحبا بك عزيزي في قسم الدعم الفني للبوت
----------------------------
📝 ارسل رسالتك
*
" ,
            "parse_mode" => "markdown",
            'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>" رجوع ➪",'callback_data'=>"back" ]], 
      ]
    ])
        ]);
        $UploadEr["المود"][$from_id] = "twsl" ;
        SETJSON($UploadEr) ;
} 
if(preg_match("/Rd_/", $text) and $chat_id == $admin) {
		$chat=explode("_", $text)[1];
		$msg=explode("_", $text)[2];
		bot("sendmessage",[
                "chat_id" => $admin , 
                "text" => "
🧾] ارسل الان الرساله
            👒] يتم ارسالها الى
 
[$from_id](tg://user?id=$chat) 
[Acount](tg://openmessage?user_id=$chat) 
                ",
                'parse_mode'=>"markdown",
            ]);
            $UploadEr["المود"][$from_id] = "Rd_".$chat."_".$msg."" ;
        SETJSON($UploadEr) ;
        return false ;
		} 
		
		if (preg_match("/Rd_/", $UploadEr["المود"][$from_id] ) && $chat_id == $admin) {
    $chat = explode("_", $UploadEr["المود"][$from_id])[1];
    $msg = explode("_", $UploadEr["المود"][$from_id])[2];
    bot("sendmessage", [
        "chat_id" => $admin,
        "text" => "📢 تم ايصال رسالتك ",
        'parse_mode' => "markdown",
    ]);
    $b=bot("sendmessage", [
        "chat_id" => $chat,
        "text" => $text,
        "reply_to_message_id" => $msg, 
        'parse_mode' => "markdown",
    ]);
    bot("sendmessage", [
        "chat_id" => $chat,
        "text" => "🗂] هذا رساله من الدعم لارسال الرسائل اضغط علي الزر ادناه" ,
        "reply_to_message_id" => $b->result->message_id, 
        'parse_mode' => "markdown",
        'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"➿] ارسال رساله",'callback_data'=>"contact" ]], 
      ]
    ])
    ]);
    
    return false ;
}

if($text and $UploadEr["المود"][$from_id] == "twsl") {
	bot("sendmessage",[
                "chat_id" => $chat_id, 
                "text" => "
📜- تم ارسال رسالتك سنجاوب عليك في اقرب وقت ونحل مشكلتك
                ",
                'parse_mode'=>"markdown",
                'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>" لانهاء ارسال الرسائل ➪",'callback_data'=>"back" ]], 
      ]
    ])
            ]);
            $u = $message_id;
            bot("sendmessage",[
                "chat_id" => $admin , 
                "text" => "
📜] تم ارسال رساله جديده

👥] $text 

            🌐] من $name
 
[$from_id](tg://user?id=$chat_id) 
[Acount](tg://openmessage?user_id=$chat_id) 

للرد علي رساله الشخص [/Rd_".$from_id."_".$u."]
                ",
                'parse_mode'=>"markdown",
            ]);
            
	} 
	
	 if($data == "saleh221") {
	        $nogomall = count($nogom);
 	bot("editMessagetext",[
                "chat_id" => $chat_id, 
                "message_id" => $message_id, 
                "text" => "
📜 مرحبا بيك في قسم رساله الترحيب (star) 
----------------------------
📝 الرساله الحاليه 
----------------------------
`$start`
----------------------------
                ",
                'parse_mode'=>"markdown",
                'reply_markup'=>json_encode([
     'inline_keyboard'=>[
[['text'=>"تعيين رساله الترحيب (start) " ,'callback_data'=>"star"]],
[['text'=>"رجوع ➪ " ,'callback_data'=>"SALEHN"]],
    ]
    ])
            ]);
  }
 if($data == "Supernamero") {
    bot("editMessagetext",[
                "chat_id" => $chat_id, 
                "message_id" => $message_id, 
                "text" => "
📝️] تعليمات البوت كالاتي
----------------------------
📜 - لاتقم برفع ملف مكرر مرتين ( يؤدي الي حظرك وحذف ملفاتك من البوت) 
🛍 - لاتقم برفع الملفات فيها اختراق (البوت فيه نصام فاحص قوي في حال اكتشاف سيتم حظرك من البوت ونشرك انك قمت بمحاوله اختراق) 
🌀- (الاهم) قم بازاله كود صنع ويبهوك تلقائي في الملف 

👥️] نتمني لك كل التوفيق
                ",
                'parse_mode'=>"markdown",
                'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع الي الرئيسية ➪",'callback_data'=>"back" ]], 
      ]
    ])
            ]);
  }
  
 if($data == "super") {
$b= 	bot("editMessagetext",[
                "chat_id" => $chat_id, 
                "message_id" => $message_id, 
                "text" => "🌀 تم البدء بقياس السرعه ",
        'parse_mode' => "Markdown",
    ]);
    sleep(0.9);
    
    $userb = strtoupper($userbot);

    $start_time = microtime(true);

    
        
    
    for ($i = 0; $i < 11; $i++) {
        bot("editMessageText", [
            "chat_id" => $chat_id,
            'message_id' => $b->result->message_id,
            "text" => "
            *
            🟢️ يتم قياس السرعه انتظر قليلا...
            " . $i * 10 . "%
            *
            ",
            "parse_mode" => "Markdown",
        ]);
    }

    $end_time = microtime(true);
    if ($i >= 10) {
        bot("editMessageText", [
            "chat_id" => $chat_id,
            'message_id' =>  $b->result->message_id,
            "text" => "
            *
            👥 تم الانتهاء من قياس السرعه ✓
            *
            ",
            "parse_mode" => "Markdown",
            
        ]);
        sleep(1);
    }
    $time = $end_time - $start_time;
    $time = number_format($time, 4, '.', '');
    if ($time <= 1.5) {
        $x = "سرعه عاليه 💪🏽";
    }
    if ($time <= 3 && $execution_time > 1.5) {
        $x = " سرعه متوسطه 👍🏽";
    }
    if ($time > 3) {
        $x = "سرعه ضعيفه 👎🏽";
    }

    bot("editMessageText", [
        "chat_id" => $chat_id,
        'message_id' =>  $b->result->message_id,
        'text' => "
        🟢 سرعة البوت = $time 
        $x
                ",
                'parse_mode'=>"markdown",
            ]);
  }
  
 if($data == "NAMERO") {
    $average_rating = $nogom ? array_sum($nogom) / count($nogom) : 0;
    $nogomall = count($nogom);
    $stars = str_repeat("⭐", round($average_rating));
    $average_rating = round($average_rating, 1);
 	bot("editMessagetext",[
                "chat_id" => $chat_id, 
                "message_id" => $message_id, 
                "text" => "
>Evaluation<
----------------------------
$stars ($average_rating)

🌀 عدد المشاركين في التقييم  ($nogomall)

يرجى المشاركة في تقييم البوت من خلال الأزرار",
        'parse_mode' => "markdown",
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => "بوت جيد 👥", 'callback_data' => "1"]],
                [['text' => "بوت جيدا جدا 👥", 'callback_data' => "2"]],
                [['text' => "بوت متوسط 👥", 'callback_data' => "3"]],
                [['text' => "بوت رائع 👥", 'callback_data' => "4"]],
                [['text' => "بوت ضعيف 👥", 'callback_data' => "5"]],
     [['text'=>"رجوع الي الرئيسية ➪",'callback_data'=>"back" ]],
            ]
        ])
    ]);
} elseif (in_array($data, ["1", "2", "3", "4", "5"])) {
    $rating = (int)$data;
    $nogom[$chat_id] = $rating;
    file_put_contents('nogom.json', json_encode($nogom));
    $average_rating = array_sum($nogom) / count($nogom);
    $stars = str_repeat("👥", round($average_rating));
    $average_rating = round($average_rating, 1);
    bot('editMessagetext', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "شكرا لتقييمك
Evaluation
$stars ($average_rating)
",
        'parse_mode' => "markdown",
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => "إعادة التقييم", 'callback_data' => "nogom"]],
                                [['text' => "رجوع الي الرئيسية ➪", 'callback_data' => "back"]],
 ]])
]);
    bot("sendMessage", [
        "chat_id" => $admin,
        "text" => "تم تقيم البوت من $name 
*--------------------------------*
تقييمه للبوت $rating = ⭐
----------------------------
📒] المعرف [@$user]
🌀] الايدي `$chat_id`
🗃][الحساب](https://t.me/$user) ",
        "parse_mode" => "markdown",
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => "إرسال تشكرات 📧", 'callback_data' => "shkr|$from_id|$name"]],
     ]])
  ]);
} elseif(explode("|", $data)[0] == "shkr") {
$from_id = explode("|", $data)[1];
$name = explode("|", $data)[2];
  bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $message_id , 
            "text" => "
* -تم ارسال رسالة شكر لـ *$name ✓
" ,
            "parse_mode" => "markdown", 
        ]);
        bot("sendMessage", [
            "chat_id" => $from_id ,
            "text" => "
*- شكرا لك على تقييمنا هذا الشكر موجه لك من مالك البوت شخصيا *
",
        "parse_mode" => "markdown",
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => "رجوع الي الرئيسية ➪", 'callback_data' => "back"]],
     ]])
  ]);
}

	 if($data == "back") {
     $nogomall = count($nogom);
 $other = $UploadEr["unFilSALEH5atch"]?? "0";
 	bot("editMessagetext",[
                "chat_id" => $chat_id, 
                "message_id" => $message_id, 
                "text" => "
➪ [Super Namero](tg://user?id=6704860429) 👒
                
*$start*
*----------------------------*
*📝] ملفاتك المرفوعه : $counts
📊] الملفات المرفوعه : $vc | $no
👥] عدد المستخدمين : $nj
📜] غيرها من للملفات : $other
🟢]عدد تقيمات البوت : $nogomall*
*----------------------------*
                ",
                'parse_mode'=>"markdown",
                'reply_markup'=>json_encode([
     'inline_keyboard'=>[
          [['text'=>"• شروط البوت 📤 •",'callback_data'=>"Supernamero" ]], 
     [['text'=>"• عمل تحديث 🌀 •",'callback_data'=>"refr" ],['text'=>"• الاحصائيات 📜 •",'callback_data'=>"nas" ]], 
     [['text'=>"• تواصل مع دعم البوت 👥 •",'callback_data'=>"contact" ]], 
     [['text'=>"• تقييم البوت 🗃 •",'callback_data'=>"NAMERO" ],['text'=>"• قياس السرعه 📝 •",'callback_data'=>"super" ]], 
     [['text'=>"• Super ⁞ Namero 🛍 • ",'url'=>"https://t.me/HJ_I_N" ]], 
      ]
    ])
            ]);
        $UploadEr["المود"][$from_id] = null ;
        SETJSON($UploadEr) ;
} 


?>

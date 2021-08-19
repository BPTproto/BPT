<?php
/** ------------ BPT Version ------------ */
$version = 1.00;
/** ------------ BPT Version ------------ */
/** ----------- Check Included ---------- */
if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {die("<!DOCTYPE html><html lang=\"en\"><head><meta charset=\"utf-8\"><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"><title>Protected By BPT proto</title><style>* {-webkit-box-sizing: border-box;box-sizing: border-box;}body {padding: 0;margin: 0;}#notfound {position: relative;height: 100vh;}#notfound .notfound {position: absolute;left: 50%;top: 50%;-webkit-transform: translate(-50%, -50%);-ms-transform: translate(-50%, -50%);transform: translate(-50%, -50%);}.notfound {max-width: 410px;width: 100%;text-align: center;}.notfound .notfound-404 {height: 280px;position: relative;z-index: -1;}.notfound .notfound-404 h1 {font-family: 'Montserrat', sans-serif;font-size: 230px;margin: 0px;font-weight: 900;position: absolute;left: 50%;-webkit-transform: translateX(-50%);-ms-transform: translateX(-50%);transform: translateX(-50%);background: url('https://bpt-proto.site/BPT/err.jpg') no-repeat;-webkit-background-clip: text;-webkit-text-fill-color: transparent;background-size: cover;background-position: center;}@media only screen and (max-width: 767px){.notfound .notfound-404 {height: 142px;}.notfound .notfound-404 h1 {font-size: 112px;}}</style></head><body><div id=\"notfound\"><div class=\"notfound\"><div class=\"notfound-404\"><h1>BPT</h1></div></div></div></body></html>");}
/** ----------- Check Included ---------- */
/** --------- Check Php version --------- */
$old = false;
if (PHP_MAJOR_VERSION === 5 || (PHP_MAJOR_VERSION === 7 && PHP_MINOR_VERSION === 0)) {
    $old = true;
}
if($_SERVER['SERVER_NAME'] === 'localhost' || isset($_SERVER['ANDROID_DATA'])){
    die('you cant run this on localhost');
}
if ($old) {
    $newline = PHP_EOL;
    if (PHP_SAPI !== 'cli') {
        $newline = '<br>'.$newline;
    }
    echo "you are using an old and bugged version of php, please update to php 7.3$newline supported versions: php 7.1, 7.2 , 7.3+$newline recommended version: php 7.3$newline";
}
/** --------- Check Php version --------- */
class BPT{
    private $token = '';
    private $start = false;
    public function __construct($token_bot) {
        $this->token = $token_bot;
    }
    public function start(){
        $this->start = true;
        if(!file_exists('BPT.look')){
            $res = json_decode(file_get_contents('https://api.telegram.org/bot'.$this->token.'/setwebhook?url=https://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']),true)['ok'];
            if($res === true){
                touch('BPT.look');
                die('webhook was setted');
            }
        }
        else{$telegram_ip_ranges=[['lower'=>'149.154.160.0', 'upper'=>'149.154.175.255'], ['lower'=>'91.108.4.0', 'upper'=>'91.108.7.255'],];$ip_dec=(float)sprintf("%u", ip2long($_SERVER['REMOTE_ADDR']));$ok=false;foreach($telegram_ip_ranges as $telegram_ip_range) if(!$ok){$lower_dec=(float)sprintf("%u", ip2long($telegram_ip_range['lower']));$upper_dec=(float)sprintf("%u", ip2long($telegram_ip_range['upper']));if($ip_dec>=$lower_dec and $ip_dec<=$upper_dec) $ok=true;}if(!$ok){die("<!DOCTYPE html><html lang=\"en\"><head><meta charset=\"utf-8\"><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"><title>Protected By BPT proto</title><style>* {-webkit-box-sizing: border-box;box-sizing: border-box;}body {padding: 0;margin: 0;}#notfound {position: relative;height: 100vh;}#notfound .notfound {position: absolute;left: 50%;top: 50%;-webkit-transform: translate(-50%, -50%);-ms-transform: translate(-50%, -50%);transform: translate(-50%, -50%);}.notfound {max-width: 410px;width: 100%;text-align: center;}.notfound .notfound-404 {height: 280px;position: relative;z-index: -1;}.notfound .notfound-404 h1 {font-family: 'Montserrat', sans-serif;font-size: 230px;margin: 0px;font-weight: 900;position: absolute;left: 50%;-webkit-transform: translateX(-50%);-ms-transform: translateX(-50%);transform: translateX(-50%);background: url('https://bpt-proto.site/BPT/err.jpg') no-repeat;-webkit-background-clip: text;-webkit-text-fill-color: transparent;background-size: cover;background-position: center;}@media only screen and (max-width: 767px){.notfound .notfound-404 {height: 142px;}.notfound .notfound-404 h1 {font-size: 112px;}}</style></head><body><div id=\"notfound\"><div class=\"notfound\"><div class=\"notfound-404\"><h1>BPT</h1></div></div></div></body></html>");}}
        $update = json_decode(file_get_contents('php://input'), true);
        if(isset($update) && !is_null($update)){
            if(isset($update['inline_query'])){
                $inline_query=$update['inline_query'];
                $this->users($inline_query,'inline');
                @$this->inline_query($inline_query);
            }
            elseif(isset($update['callback_query'])){
                $callback_query=$update['callback_query'];
                $this->users($callback_query,'callback');
                @$this->callback_query($callback_query);
            }
            elseif(isset($update['message'])){
                $message=$update['message'];
                $this->users($message,'message');
                @$this->message($message);
            }
            elseif(isset($update['edited_message'])){
                $edited_message=$update['edited_message'];
                $this->users($edited_message,'edit');
                @$this->edited_message($edited_message);
            }
        }
    }
    private function bot($method, $datas = [])
    {
        if($this->start === true){
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/bot' . $this->token . '/' . $method);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
            return json_decode(curl_exec($ch),true);
        }else{
            throw new Exception('you must use start function');
        }
    }
    /** --------- Telegram Function --------- */
    public function getMe()
    {
        return $this->bot('getMe');
    }
    public function sendMessage($array)
    {
        if(is_array($array)){
            return $this->bot('sendMessage', $array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function forwardMessage($array)
    {
        if(is_array($array)){
            return $this->bot('forwardMessage',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function sendPhoto($array)
    {
        if(is_array($array)){
            return $this->bot('sendPhoto',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function sendAudio($array)
    {
        if(is_array($array)){
            return $this->bot('sendAudio',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function sendDocument($array)
    {
        if(is_array($array)){
            return $this->bot('sendDocument',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function sendVideo($array)
    {
        if(is_array($array)){
            return $this->bot('sendVideo',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function sendAnimation($array)
    {
        if(is_array($array)){
            return $this->bot('sendAnimation',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function sendVoice($array)
    {
        if(is_array($array)){
            return $this->bot('sendAudio',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function sendVideoNote($array)
    {
        if(is_array($array)){
            return $this->bot('sendVideoNote',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function sendMediaGroup($array)
    {
        if(is_array($array)){
            return $this->bot('sendMediaGroup',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function sendLocation($array)
    {
        if(is_array($array)){
            return $this->bot('sendLocation',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function editMessageLiveLocation($array)
    {
        if(is_array($array)){
            return $this->bot('editMessageLiveLocation',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function stopMessageLiveLocation($array)
    {
        if(is_array($array)){
            return $this->bot('stopMessageLiveLocation',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function sendVenue($array)
    {
        if(is_array($array)){
            return $this->bot('sendVenue',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function sendContact($array)
    {
        if(is_array($array)){
            return $this->bot('sendContact',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function sendPoll($array)
    {
        if(is_array($array)){
            return $this->bot('sendPoll',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function sendDice($array)
    {
        if(is_array($array)){
            return $this->bot('sendDice',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function sendChatAction($array)
    {
        if(is_array($array)){
            return $this->bot('sendChatAction',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function getUserProfilePhotos($array)
    {
        if(is_array($array)){
            return $this->bot('getUserProfilePhotos',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function getFile($array)
    {
        if(is_array($array)){
            return $this->bot('getFile',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function kickChatMember($array)
    {
        if(is_array($array)){
            return $this->bot('kickChatMember',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function unbanChatMember($array)
    {
        if(is_array($array)){
            return $this->bot('unbanChatMember',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function restrictChatMember($array)
    {
        if(is_array($array)){
            return $this->bot('restrictChatMember',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function promoteChatMember($array)
    {
        if(is_array($array)){
            return $this->bot('promoteChatMember',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function setChatAdministratorCustomTitle($array)
    {
        if(is_array($array)){
            return $this->bot('setChatAdministratorCustomTitle',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function setChatPermissions($array)
    {
        if(is_array($array)){
            return $this->bot('setChatPermissions',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function exportChatInviteLink($array)
    {
        if(is_array($array)){
            return $this->bot('exportChatInviteLink',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function setChatPhoto($array)
    {
        if(is_array($array)){
            return $this->bot('setChatPhoto',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function deleteChatPhoto($array)
    {
        if(is_array($array)){
            return $this->bot('deleteChatPhoto',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function setChatTitle($array)
    {
        if(is_array($array)){
            return $this->bot('setChatTitle',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function setChatDescription($array)
    {
        if(is_array($array)){
            return $this->bot('setChatDescription',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function pinChatMessage($array)
    {
        if(is_array($array)){
            return $this->bot('pinChatMessage',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function unpinChatMessage($array)
    {
        if(is_array($array)){
            return $this->bot('unpinChatMessage',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function leaveChat($array)
    {
        if(is_array($array)){
            return $this->bot('leaveChat',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function getChat($array)
    {
        if(is_array($array)){
            return $this->bot('getChat',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function getChatAdministrators($array)
    {
        if(is_array($array)){
            return $this->bot('getChatAdministrators',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function getChatMembersCount($array)
    {
        if(is_array($array)){
            return $this->bot('getChatMembersCount',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function getChatMember($array)
    {
        if(is_array($array)){
            return $this->bot('getChatMember',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function setChatStickerSet($array)
    {
        if(is_array($array)){
            return $this->bot('setChatStickerSet',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function deleteChatStickerSet($array)
    {
        if(is_array($array)){
            return $this->bot('deleteChatStickerSet',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function answerCallbackQuery($array)
    {
        if(is_array($array)){
            return $this->bot('answerCallbackQuery',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function setMyCommands($array)
    {
        if(is_array($array)){
            return $this->bot('setMyCommands',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function getMyCommands()
    {
        return $this->bot('getMyCommands');
    }
    public function editMessageText($array)
    {
        if(is_array($array)){
            return $this->bot('editMessageText',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function editMessageCaption($array)
    {
        if(is_array($array)){
            return $this->bot('editMessageCaption',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function editMessageMedia($array)
    {
        if(is_array($array)){
            return $this->bot('editMessageMedia',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function editMessageReplyMarkup($array)
    {
        if(is_array($array)){
            return $this->bot('editMessageReplyMarkup',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function stopPoll($array)
    {
        if(is_array($array)){
            return $this->bot('stopPoll',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function deleteMessage($array)
    {
        if(is_array($array)){
            return $this->bot('deleteMessage',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    public function answerInlineQuery($array)
    {
        if(is_array($array)){
            return $this->bot('answerInlineQuery',$array);
        }else{
            throw new Exception('input value most be array');
        }
    }
    /** --------- Telegram Function --------- */
    /** ---------- Extra Function ----------- */
    public function jsonSave($name,$data){
        if($this->start === true){
            if(is_array($data)){
                $data=json_encode($data);
            }
            if($name === 'BPT.php'){
                $name = 'BPT2.php';
            }
            file_put_contents($name, $data);
            return true;
        }
        else{
            throw new Exception('you must use start function');
        }
    }
    public function jsonGet($name,$type = true){
        if($this->start === true){
            if($name === 'BPT.php'){
                $name = 'BPT2.php';
            }
            if(file_exists($name)){
                return json_decode(file_get_contents($name), $type);
            }else{
                return false;
            }
        }else{
            throw new Exception('you must use start function');
        }
    }
    public function jsonDel($name){
        if($this->start === true){
            if($name === 'BPT.php'){
                $name = 'BPT2.php';
            }
            if(file_exists($name)){
                unlink($name);
                return true;
            }else{
                return false;
            }
        }else{
            throw new Exception('you must use start function');
        }
    }
    private function users($update,$a){
        if(!file_exists('BPT-users.json')){
            file_put_contents('BPT-users.json',json_encode(['private'=>[],'group'=>[],'supergroup'=>[],'channel'=>[]]));
        }
        $BPT_user = json_decode(file_get_contents('BPT-users.json'),true);
        if($a == 'message'){
            $type = $update['chat']['type'];
            $id = $update['from']['id'];
            $BPT_user[$type][$id][0]+=1;
        }
        elseif($a == 'inline'){
            $id = $update['from']['id'];
        }
        elseif($a == 'callback'){
            $type = $update['message']['chat']['type'];
            $id = $update['from']['id'];
            $BPT_user[$type][$id][1]+=1;
        }
        elseif($a == 'edit'){
            $type = $update['chat']['type'];
            $id = $update['from']['id'];
            $BPT_user[$type][$id][2]+=1;
        }
        if(isset($type)){
            if(!isset($BPT_user[$type][$id])){
                $BPT_user[$type][$id]=[0,0,0];
            }
        }
        file_put_contents('BPT-users.json',json_encode($BPT_user));
    }
    public function forward2users($chatid,$msgid){
        if($this->start===true){
            $BPT_user=json_decode(file_get_contents('BPT-users.json'), true);
            foreach($BPT_user['private'] as $id=>$x){
                $this->forwardMessage(['chat_id'=>$id, 'from_chat_id'=>$chatid, 'message_id'=>$msgid]);
            }
        }else{
            throw new Exception('you must use start function');
        }
    }
    public function forward2groups($chatid,$msgid){
        if($this->start===true){
            $BPT_user=json_decode(file_get_contents('BPT-users.json'), true);
            foreach($BPT_user['groups'] as $id=>$x){
                $this->forwardMessage(['chat_id'=>$id, 'from_chat_id'=>$chatid, 'message_id'=>$msgid]);
            }
        }else{
            throw new Exception('you must use start function');
        }
    }
    public function forward2supergroups($chatid, $msgid){
        if($this->start===true){
            $BPT_user=json_decode(file_get_contents('BPT-users.json'), true);
            foreach($BPT_user['supergroup'] as $id=>$x){
                $this->forwardMessage(['chat_id'=>$id, 'from_chat_id'=>$chatid, 'message_id'=>$msgid]);
            }
        }else{
            throw new Exception('you must use start function');
        }
    }
    public function forward2gps($chatid, $msgid){
        if($this->start===true){
            $BPT_user=json_decode(file_get_contents('BPT-users.json'), true);
            foreach($BPT_user['groups'] as $id=>$x){
                $this->forwardMessage(['chat_id'=>$id, 'from_chat_id'=>$chatid, 'message_id'=>$msgid]);
            }
            foreach($BPT_user['supergroup'] as $id=>$x){
                $this->forwardMessage(['chat_id'=>$id, 'from_chat_id'=>$chatid, 'message_id'=>$msgid]);
            }
        }else{
            throw new Exception('you must use start function');
        }
    }
    public function forward2all($chatid, $msgid){
        if($this->start===true){
            $BPT_user=json_decode(file_get_contents('BPT-users.json'), true);
            foreach($BPT_user['private'] as $id=>$x){
                $this->forwardMessage(['chat_id'=>$id, 'from_chat_id'=>$chatid, 'message_id'=>$msgid]);
            }
            foreach($BPT_user['groups'] as $id=>$x){
                $this->forwardMessage(['chat_id'=>$id, 'from_chat_id'=>$chatid, 'message_id'=>$msgid]);
            }
            foreach($BPT_user['supergroup'] as $id=>$x){
                $this->forwardMessage(['chat_id'=>$id, 'from_chat_id'=>$chatid, 'message_id'=>$msgid]);
            }
        }else{
            throw new Exception('you must use start function');
        }
    }
    public function stats(){
        if($this->start===true){
            $BPT_user=json_decode(file_get_contents('BPT-users.json'), true);
            $BPT_users=count($BPT_user['private']);
            $BPT_group=count($BPT_user['group']);
            $BPT_sgroup=count($BPT_user['supergroup']);
            $BPT_channel=count($BPT_user['channel']);
            return ['users'=>$BPT_users, 'groups'=>$BPT_group, 'supergroups'=>$BPT_sgroup, 'channels'=>$BPT_channel];
        }else{
            throw new Exception('you must use start function');
        }
    }
    public function statsHere($chatid, $type){
        if($this->start===true){
            $BPT_user=json_decode(file_get_contents('BPT-users.json'), true);
            if(isset($BPT_user[$type][$chatid])){
                $callback=$BPT_user[$type][$chatid][1];
                $message=$BPT_user[$type][$chatid][0];
                $edit=$BPT_user[$type][$chatid][2];
                return ['callback_query'=>$callback, 'message'=>$message, 'edited_message'=>$edit];
            }else{
                return false;
            }
        }else{
            throw new Exception('you must use start function');
        }
    }
    public function api($type,$array=null){
        if($this->start===true){
            switch($type){
                case 'alaki':
                    return json_decode(file_get_contents('https://poty.fun/apis/alaki.php'), true)['results'];
                    break;
                case 'arzdigital':
                    return json_decode(file_get_contents('https://poty.fun/apis/arzdigital.php'), true)['results'];
                    break;
                case 'ayam':
                    return json_decode(file_get_contents('https://poty.fun/apis/ayam.php'), true)['results'];
                    break;
                case 'danestani':
                    return json_decode(file_get_contents('https://poty.fun/apis/danestani.php'), true)['results'];
                    break;
                case 'dastan':
                    return json_decode(file_get_contents('https://poty.fun/apis/dastan.php'), true)['results'];
                    break;
                case 'dialog':
                    return json_decode(file_get_contents('https://poty.fun/apis/dialog.php'), true)['results'];
                    break;
                case 'hadis':
                    return json_decode(file_get_contents('https://poty.fun/apis/hadis2.php'), true)['results'];
                    break;
                case 'joke':
                    return json_decode(file_get_contents('https://poty.fun/apis/joke.php'), true)['results'];
                    break;
                case 'khatere':
                    return json_decode(file_get_contents('https://poty.fun/apis/khatere.php'), true)['results'];
                    break;
                case 'pnp':
                    return json_decode(file_get_contents('https://poty.fun/apis/pnp.php'), true)['results'];
                    break;
                case 'pdf':
                    if($array !== null){
                        if(is_array($array)){
                            if(isset($array['url'])){
                                $url = urlencode($array['url']);
                                return "https://poty.fun/apis/topdf.php?url=$url";
                            }else{
                                throw new Exception('pdf api need url field!');
                            }
                        }else{
                            throw new Exception('array parameter must be array!');
                        }
                    }else{
                        throw new Exception('You must insert array parameter!');
                    }
                    break;
                default:
                    return false;
                    break;
            }
        }else{
            throw new Exception('you must use start function');
        }
    }
    /** ---------- Extra Function ----------- */
}

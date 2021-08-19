<?php
/** ------------ BPT Version ------------ */
$version = 1.06;
/** ------------ BPT Version ------------ */

/** ----------- Check Included ---------- */
if(basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    die("<!DOCTYPE html><html lang=\"en\"><head><meta charset=\"utf-8\"><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"><title>Protected By BPT proto</title><style>* {-webkit-box-sizing: border-box;box-sizing: border-box;}body {padding: 0;margin: 0;}#notfound {position: relative;height: 100vh;}#notfound .notfound {position: absolute;left: 50%;top: 50%;-webkit-transform: translate(-50%, -50%);-ms-transform: translate(-50%, -50%);transform: translate(-50%, -50%);}.notfound {max-width: 410px;width: 100%;text-align: center;}.notfound .notfound-404 {height: 280px;position: relative;z-index: -1;}.notfound .notfound-404 h1 {font-family: 'Montserrat', sans-serif;font-size: 230px;margin: 0px;font-weight: 900;position: absolute;left: 50%;-webkit-transform: translateX(-50%);-ms-transform: translateX(-50%);transform: translateX(-50%);background: url('https://bpt-proto.site/BPT/err.jpg') no-repeat;-webkit-background-clip: text;-webkit-text-fill-color: transparent;background-size: cover;background-position: center;}@media only screen and (max-width: 767px){.notfound .notfound-404 {height: 142px;}.notfound .notfound-404 h1 {font-size: 112px;}}</style></head><body><div id=\"notfound\"><div class=\"notfound\"><div class=\"notfound-404\"><h1>BPT</h1></div></div></div></body></html>");
}
/** ----------- Check Included ---------- */

/** --------- Check Php version --------- */
if(isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] === 'localhost' || isset($_SERVER['ANDROID_DATA'])) {
    die('you cant run this on localhost');
}
if(PHP_MAJOR_VERSION === 5 || (PHP_MAJOR_VERSION === 7 && PHP_MINOR_VERSION === 0)) {
    $newline = PHP_EOL;
    if(PHP_SAPI !== 'cli') {
        $newline = '<br>' . $newline;
    }
    echo "you are using an old and bugged version of php, please update to php 7.3$newline supported versions: php 7.1, 7.2 , 7.3+$newline recommended version: php 7.3$newline";
}
/** --------- Check Php version --------- */

/** -------------- BPT LOG -------------- */
date_default_timezone_set("Asia/Tehran");
if(!file_exists('BPT.log')) {
    define('LOG', fopen('BPT.log', 'a+'));
    fwrite(LOG, "♥♥♥♥♥♥♥♥♥♥♥♥♥♥ BPT PROTO  ♥♥♥♥♥♥♥♥♥♥♥♥♥♥\nTnx for using our library\nSome information about us :\nAuthor : @Im_Miaad\nHelper : @Master_Devloper\nOur Channel : @BPT_Proto\nOur Website : https://bpt-proto.site\n\nIf you have any problem with our library\nContact to our supports\n♥♥♥♥♥♥♥♥♥♥♥♥♥♥ BPT PROTO  ♥♥♥♥♥♥♥♥♥♥♥♥♥♥\n");
    fwrite(LOG, "INFO : BPT PROTO LOG STARTED ...\nWARNING : THIS FILE AUTOMATICALLY DELETED WHEN ITS SIZE REACHED 10MB\n\n");
}
/** -------------- BPT LOG -------------- */

class BPT {
    private $token = '';
    private $start = false;
    public $update;
    public function __construct($token_bot) {
        $this->token = $token_bot;
    }
    public function __destruct() {
        if(is_resource(LOG)) {
            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT Done\n");
        }
    }
    public function start($settings = []) {
        $logsize = isset($settings['log_size']) ? $settings['log_size'] : false;
        if($logsize !== false) {
            if(is_numeric($logsize)) {
                $logsize = round($logsize, 0);
            } else {
                $logsize = 10;
            }
            if(file_exists('BPT.log')) {
                if(!(filesize('BPT.log') > $logsize * 1024 * 1024)) {
                    if(!defined('LOG')){
                        define('LOG', fopen('BPT.log', 'a+'));
                    }
                } else {
                    if(!defined('LOG')){
                        define('LOG', fopen('BPT.log', 'w+'));
                    }
                    fwrite(LOG, "♥♥♥♥♥♥♥♥♥♥♥♥♥♥ BPT PROTO  ♥♥♥♥♥♥♥♥♥♥♥♥♥♥\nTnx for using our library\nSome information about us :\nAuthor : @Im_Miaad\nHelper : @Master_Devloper\nOur Channel : @BPT_Proto\nOur Website : https://bpt-proto.site\n\nIf you have any problem with our library\nContact to our supports\n♥♥♥♥♥♥♥♥♥♥♥♥♥♥ BPT PROTO  ♥♥♥♥♥♥♥♥♥♥♥♥♥♥\n");
                    fwrite(LOG, "INFO : BPT PROTO LOG STARTED ...\nWARNING : THIS FILE AUTOMATICALLY DELETED WHEN ITS SIZE REACHED $logsize" . "MB\n\n");
                }
            }
        } else {
            if(file_exists('BPT.log')) {
                if(!(filesize('BPT.log') > 10 * 1024 * 1024)) {
                    if(!defined('LOG')){
                        define('LOG', fopen('BPT.log', 'a+'));
                    }
                } else {
                    if(!defined('LOG')){
                        define('LOG', fopen('BPT.log', 'w+'));
                    }
                    fwrite(LOG, "♥♥♥♥♥♥♥♥♥♥♥♥♥♥ BPT PROTO  ♥♥♥♥♥♥♥♥♥♥♥♥♥♥\nTnx for using our library\nSome information about us :\nAuthor : @Im_Miaad\nHelper : @Master_Devloper\nOur Channel : @BPT_Proto\nOur Website : https://bpt-proto.site\n\nIf you have any problem with our library\nContact to our supports\n♥♥♥♥♥♥♥♥♥♥♥♥♥♥ BPT PROTO  ♥♥♥♥♥♥♥♥♥♥♥♥♥♥\n");
                    fwrite(LOG, "INFO : BPT PROTO LOG STARTED ...\nWARNING : THIS FILE AUTOMATICALLY DELETED WHEN ITS SIZE REACHED 10MB\n\n");
                }
            }
        }
        if(!is_array($settings)) {
            fwrite(LOG, date('Y/m/d H:i:s') . ": settings parameter most be array");
            throw new Exception('settings most be array');
        } else {
            $security = isset($settings['security']) ? $settings['security'] : false;
            $secure_folder = isset($settings['secure_folder']) ? $settings['secure_folder'] : false;
            $multi = isset($settings['multi']) ? $settings['multi'] : false;
        }
        fwrite(LOG, date('Y/m/d H:i:s') . ": BPT STARTED\n");
        if($security == true) {
            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT security is on!\n");
            ini_set('magic_quotes_gpc', 'off');
            ini_set('sql.safe_mode', 'on');
            ini_set('max_execution_time', 30);
            ini_set('max_input_time', 30);
            ini_set('memory_limit', '20M');
            ini_set('post_max_size', '8K');
            ini_set('expose_php', 'off');
            ini_set('file_uploads', 'off');
            ini_set('display_errors', 0);
            ini_set('error_reporting', 0);
        }
        if($secure_folder == true) {
            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT security folder is on!\n");
            $address = explode('/', $_SERVER['REQUEST_URI']);
            unset($address[count($address) - 1]);
            $address = implode('/', $address) . '/BPT.php';
            $text = "ErrorDocument 404 $address
ErrorDocument 403 $address
 Options -Indexes
  Order Deny,Allow
Deny from all
Allow from 127.0.0.1
<Files *.php>
    Order Allow,Deny
    Allow from all
</Files>";
            if(!file_exists('.htaccess') || filesize('.htaccess') != strlen($text)) {
                file_put_contents('.htaccess', $text);
            }
        }
        $this->start = true;
        $updates = file_get_contents("php://input");
        if($multi == true) {
            if(!file_exists('BPT-M.look')){
                if(file_exists('BPT.look')) {
                    unlink('BPT.look');
                }
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT webhook was setted\n");
                $url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
                if(function_exists('exec') && !in_array('exec', array_map('trim', explode(', ', ini_get('disable_functions')))) && strtolower(ini_get('safe_mode')) != 1) {
                    $file = basename($_SERVER['REQUEST_URI']);
                    $url = str_replace($file, 'receive.php', $url);
                    file_put_contents('receive.php','<?php $telegram_ip_ranges = [[\'lower\' => \'149.154.160.0\', \'upper\' => \'149.154.175.255\'], [\'lower\' => \'91.108.4.0\', \'upper\' => \'91.108.7.255\'],];$ip_dec = (float)sprintf("%u", ip2long($_SERVER[\'REMOTE_ADDR\']));$ok = false;foreach($telegram_ip_ranges as $telegram_ip_range) if(!$ok) {$lower_dec = (float)sprintf("%u", ip2long($telegram_ip_range[\'lower\']));$upper_dec = (float)sprintf("%u", ip2long($telegram_ip_range[\'upper\']));if($ip_dec >= $lower_dec and $ip_dec <= $upper_dec) $ok = true;}if(!$ok) {die("<!DOCTYPE html><html lang=\"en\"><head><meta charset=\"utf-8\"><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"><title>Protected By BPT proto</title><style>* {-webkit-box-sizing: border-box;box-sizing: border-box;}body {padding: 0;margin: 0;}#notfound {position: relative;height: 100vh;}#notfound .notfound {position: absolute;left: 50%;top: 50%;-webkit-transform: translate(-50%, -50%);-ms-transform: translate(-50%, -50%);transform: translate(-50%, -50%);}.notfound {max-width: 410px;width: 100%;text-align: center;}.notfound .notfound-404 {height: 280px;position: relative;z-index: -1;}.notfound .notfound-404 h1 {font-family: \'Montserrat\', sans-serif;font-size: 230px;margin: 0px;font-weight: 900;position: absolute;left: 50%;-webkit-transform: translateX(-50%);-ms-transform: translateX(-50%);transform: translateX(-50%);background: url(\'https://bpt-proto.site/BPT/err.jpg\') no-repeat;-webkit-background-clip: text;-webkit-text-fill-color: transparent;background-size: cover;background-position: center;}@media only screen and (max-width: 767px){.notfound .notfound-404 {height: 142px;}.notfound .notfound-404 h1 {font-size: 112px;}}</style></head><body><div id=\"notfound\"><div class=\"notfound\"><div class=\"notfound-404\"><h1>BPT</h1></div></div></div></body></html>");}$BPT = file_get_contents("php://input");$id = json_decode($BPT, true)[\'update_id\'];file_put_contents("$id.update",$BPT);exec("php ' . $file . ' > /dev/null &");');
                    $res = json_decode(file_get_contents('https://api.telegram.org/bot' . $this->token . "/setwebhook?url=$url"), true);
                }else{
                    die('you cant use multi process , pls turn it off');
                }
                if($res['ok'] === true) {
                    touch('BPT-M.look');
                    die('webhook was setted');
                } else {
                    print_r($res);
                    die();
                }
            }
            $up = glob("*.update");
            if(count($up) > 0) {
                $f = $up[count($up) - 1];
                $updates = file_get_contents($f);
                unlink($f);
            }
        }
        else {
            if(!file_exists('BPT.look')){
                if(file_exists('BPT-M.look')) {
                    unlink('BPT-M.look');
                }
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT webhook was setted\n");
                $url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
                $res = json_decode(file_get_contents('https://api.telegram.org/bot' . $this->token . "/setwebhook?url=$url"), true);
                if($res['ok'] === true) {
                    touch('BPT.look');
                    die('webhook was setted');
                } else {
                    print_r($res);
                    die();
                }
            }else{
                $telegram_ip_ranges = [['lower' => '149.154.160.0', 'upper' => '149.154.175.255'], ['lower' => '91.108.4.0', 'upper' => '91.108.7.255'],];
                $ip_dec = (float)sprintf("%u", ip2long($_SERVER['REMOTE_ADDR']));
                $ok = false;
                foreach($telegram_ip_ranges as $telegram_ip_range) if(!$ok) {
                    $lower_dec = (float)sprintf("%u", ip2long($telegram_ip_range['lower']));
                    $upper_dec = (float)sprintf("%u", ip2long($telegram_ip_range['upper']));
                    if($ip_dec >= $lower_dec and $ip_dec <= $upper_dec) $ok = true;
                }
                if(!$ok) {
                    fwrite(LOG, time() . " BPT Wrong access denied\n");
                    die("<!DOCTYPE html><html lang=\"en\"><head><meta charset=\"utf-8\"><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"><title>Protected By BPT proto</title><style>* {-webkit-box-sizing: border-box;box-sizing: border-box;}body {padding: 0;margin: 0;}#notfound {position: relative;height: 100vh;}#notfound .notfound {position: absolute;left: 50%;top: 50%;-webkit-transform: translate(-50%, -50%);-ms-transform: translate(-50%, -50%);transform: translate(-50%, -50%);}.notfound {max-width: 410px;width: 100%;text-align: center;}.notfound .notfound-404 {height: 280px;position: relative;z-index: -1;}.notfound .notfound-404 h1 {font-family: 'Montserrat', sans-serif;font-size: 230px;margin: 0px;font-weight: 900;position: absolute;left: 50%;-webkit-transform: translateX(-50%);-ms-transform: translateX(-50%);transform: translateX(-50%);background: url('https://bpt-proto.site/BPT/err.jpg') no-repeat;-webkit-background-clip: text;-webkit-text-fill-color: transparent;background-size: cover;background-position: center;}@media only screen and (max-width: 767px){.notfound .notfound-404 {height: 142px;}.notfound .notfound-404 h1 {font-size: 112px;}}</style></head><body><div id=\"notfound\"><div class=\"notfound\"><div class=\"notfound-404\"><h1>BPT</h1></div></div></div></body></html>");
                }

            }
        }
        fwrite(LOG, date('Y/m/d H:i:s') . ": BPT telegram access granted\n");
        $update = json_decode($updates, true);
        if(isset($update) && !is_null($update)) {
            $this->update = json_decode($updates);
            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT update received\n");
            if(isset($update['inline_query'])) {
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT update is inline_query\n");
                $inline_query = $update['inline_query'];
                $this->users($inline_query, 'inline');
                @$this->inline_query($inline_query);
            } elseif(isset($update['callback_query'])) {
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT update is callback_query\n");
                $callback_query = $update['callback_query'];
                $this->users($callback_query, 'callback');
                @$this->callback_query($callback_query);
            } elseif(isset($update['message'])) {
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT update is message\n");
                $message = $update['message'];
                $this->users($message, 'message');
                if($security === true) {
                    $text = $message['text'];
                    $message['text'] = htmlentities(strip_tags(htmlspecialchars(stripslashes(trim($text)))));
                }
                @$this->message($message);
            } elseif(isset($update['edited_message'])) {
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT update is edited_message\n");
                $edited_message = $update['edited_message'];
                $this->users($edited_message, 'edit');
                @$this->edited_message($edited_message);
            }
        }
    }
    private function bot($method, $datas = []) {
        if($this->start === true) {
            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT $method function used\n");
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/bot' . $this->token . '/' . $method);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
            return json_decode(curl_exec($ch), true);
        } else {
            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT $method function used\nError : You must use start function for use this function");
            throw new Exception('you must use start function');
        }
    }
    /** --------- Telegram Function --------- */
    public function getUpdates($array) {
        if(is_array($array)) {
            return $this->bot('getUpdates', $array);
        } else {
            throw new Exception('input value most be array');
        }
    } /** Don't Use It */
    public function setWebhook($array) {
        if(is_array($array)) {
            return $this->bot('setWebhook', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function deleteWebhook() {
        return $this->bot('deleteWebhook');
    }
    public function getWebhookInfo() {
        return $this->bot('getWebhookInfo');
    }
    public function getMe() {
        return $this->bot('getMe');
    }
    public function logOut() {
        return $this->bot('logOut');
    } /** Don't Use It */
    public function close() {
        return $this->bot('close');
    } /** Don't Use It */
    public function sendMessage($array) {
        if(is_array($array)) {
            return $this->bot('sendMessage', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function forwardMessage($array) {
        if(is_array($array)) {
            return $this->bot('forwardMessage', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function copyMessage($array) {
        if(is_array($array)) {
            return $this->bot('copyMessage', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function sendPhoto($array) {
        if(is_array($array)) {
            return $this->bot('sendPhoto', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function sendAudio($array) {
        if(is_array($array)) {
            return $this->bot('sendAudio', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function sendDocument($array) {
        if(is_array($array)) {
            return $this->bot('sendDocument', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function sendVideo($array) {
        if(is_array($array)) {
            return $this->bot('sendVideo', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function sendAnimation($array) {
        if(is_array($array)) {
            return $this->bot('sendAnimation', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function sendVoice($array) {
        if(is_array($array)) {
            return $this->bot('sendAudio', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function sendVideoNote($array) {
        if(is_array($array)) {
            return $this->bot('sendVideoNote', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function sendMediaGroup($array) {
        if(is_array($array)) {
            return $this->bot('sendMediaGroup', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function sendLocation($array) {
        if(is_array($array)) {
            return $this->bot('sendLocation', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function editMessageLiveLocation($array) {
        if(is_array($array)) {
            return $this->bot('editMessageLiveLocation', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function stopMessageLiveLocation($array) {
        if(is_array($array)) {
            return $this->bot('stopMessageLiveLocation', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function sendVenue($array) {
        if(is_array($array)) {
            return $this->bot('sendVenue', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function sendContact($array) {
        if(is_array($array)) {
            return $this->bot('sendContact', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function sendPoll($array) {
        if(is_array($array)) {
            return $this->bot('sendPoll', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function sendDice($array) {
        if(is_array($array)) {
            return $this->bot('sendDice', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function sendChatAction($array) {
        if(is_array($array)) {
            return $this->bot('sendChatAction', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function getUserProfilePhotos($array) {
        if(is_array($array)) {
            return $this->bot('getUserProfilePhotos', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function getFile($array) {
        if(is_array($array)) {
            return $this->bot('getFile', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function kickChatMember($array) {
        if(is_array($array)) {
            return $this->bot('kickChatMember', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function unbanChatMember($array) {
        if(is_array($array)) {
            return $this->bot('unbanChatMember', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function restrictChatMember($array) {
        if(is_array($array)) {
            return $this->bot('restrictChatMember', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function promoteChatMember($array) {
        if(is_array($array)) {
            return $this->bot('promoteChatMember', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function setChatAdministratorCustomTitle($array) {
        if(is_array($array)) {
            return $this->bot('setChatAdministratorCustomTitle', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function setChatPermissions($array) {
        if(is_array($array)) {
            return $this->bot('setChatPermissions', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function exportChatInviteLink($array) {
        if(is_array($array)) {
            return $this->bot('exportChatInviteLink', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function setChatPhoto($array) {
        if(is_array($array)) {
            return $this->bot('setChatPhoto', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function deleteChatPhoto($array) {
        if(is_array($array)) {
            return $this->bot('deleteChatPhoto', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function setChatTitle($array) {
        if(is_array($array)) {
            return $this->bot('setChatTitle', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function setChatDescription($array) {
        if(is_array($array)) {
            return $this->bot('setChatDescription', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function pinChatMessage($array) {
        if(is_array($array)) {
            return $this->bot('pinChatMessage', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function unpinChatMessage($array) {
        if(is_array($array)) {
            return $this->bot('unpinChatMessage', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function leaveChat($array) {
        if(is_array($array)) {
            return $this->bot('leaveChat', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function getChat($array) {
        if(is_array($array)) {
            return $this->bot('getChat', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function getChatAdministrators($array) {
        if(is_array($array)) {
            return $this->bot('getChatAdministrators', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function getChatMembersCount($array) {
        if(is_array($array)) {
            return $this->bot('getChatMembersCount', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function getChatMember($array) {
        if(is_array($array)) {
            return $this->bot('getChatMember', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function setChatStickerSet($array) {
        if(is_array($array)) {
            return $this->bot('setChatStickerSet', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function deleteChatStickerSet($array) {
        if(is_array($array)) {
            return $this->bot('deleteChatStickerSet', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function answerCallbackQuery($array) {
        if(is_array($array)) {
            return $this->bot('answerCallbackQuery', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function setMyCommands($array) {
        if(is_array($array)) {
            return $this->bot('setMyCommands', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function getMyCommands() {
        return $this->bot('getMyCommands');
    }
    public function editMessageText($array) {
        if(is_array($array)) {
            return $this->bot('editMessageText', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function editMessageCaption($array) {
        if(is_array($array)) {
            return $this->bot('editMessageCaption', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function editMessageMedia($array) {
        if(is_array($array)) {
            return $this->bot('editMessageMedia', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function editMessageReplyMarkup($array) {
        if(is_array($array)) {
            return $this->bot('editMessageReplyMarkup', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function stopPoll($array) {
        if(is_array($array)) {
            return $this->bot('stopPoll', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function deleteMessage($array) {
        if(is_array($array)) {
            return $this->bot('deleteMessage', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function answerInlineQuery($array) {
        if(is_array($array)) {
            return $this->bot('answerInlineQuery', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function sendSticker($array) {
        if(is_array($array)) {
            return $this->bot('sendSticker', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function getStickerSet($array) {
        if(is_array($array)) {
            return $this->bot('getStickerSet', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function uploadStickerFile($array) {
        if(is_array($array)) {
            return $this->bot('uploadStickerFile', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function createNewStickerSet($array) {
        if(is_array($array)) {
            return $this->bot('createNewStickerSet', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function addStickerToSet($array) {
        if(is_array($array)) {
            return $this->bot('addStickerToSet', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function setStickerPositionInSet($array) {
        if(is_array($array)) {
            return $this->bot('setStickerPositionInSet', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function deleteStickerFromSet($array) {
        if(is_array($array)) {
            return $this->bot('deleteStickerFromSet', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function setStickerSetThumb($array) {
        if(is_array($array)) {
            return $this->bot('setStickerSetThumb', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function sendInvoice($array) {
        if(is_array($array)) {
            return $this->bot('sendInvoice', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function answerShippingQuery($array) {
        if(is_array($array)) {
            return $this->bot('answerShippingQuery', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function answerPreCheckoutQuery($array) {
        if(is_array($array)) {
            return $this->bot('answerPreCheckoutQuery', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function sendGame($array) {
        if(is_array($array)) {
            return $this->bot('sendGame', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function setGameScore($array) {
        if(is_array($array)) {
            return $this->bot('setGameScore', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    public function getGameHighScores($array) {
        if(is_array($array)) {
            return $this->bot('getGameHighScores', $array);
        } else {
            throw new Exception('input value most be array');
        }
    }
    /** --------- Telegram Function --------- */
    /** ---------- Extra Function ----------- */
    public function jsonSave($array) {
        if($this->start === true) {
            if(is_array($array)) {
                if(isset($array['name'])) {
                    $name = $array['name'];
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT jsonSave function used\nError : name parameter not found");
                    throw new Exception('name parameter not found');
                }
                if(isset($array['data'])) {
                    $data = $array['data'];
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT jsonSave function used\nError : data parameter not found");
                    throw new Exception('data parameter not found');
                }
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT jsonSave function used\n");
                if(is_array($data) || is_object($data))  {
                    $data = json_encode($data);
                }
                if(pathinfo($name, PATHINFO_EXTENSION) !== 'json') {
                    $name = $name.'.json';
                }
                file_put_contents($name, gzcompress($data));
                return true;
            } else {
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT jsonSave function used\nError : input most be array");
                throw new Exception('input most be array');
            }
        } else {
            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT jsonSave function used\nError : You must use start function for use this function");
            throw new Exception('you must use start function');
        }
    }
    public function jsonGet($array) {
        if($this->start === true) {
            if(is_array($array)) {
                if(isset($array['name'])) {
                    $name = $array['name'];
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT jsonGet function used\nError : name parameter not found");
                    throw new Exception('name parameter not found');
                }
                if(isset($array['type'])) {
                    $type = $array['type'];
                } else {
                    $type = true;
                }
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT jsonGet function used\n");
                if(pathinfo($name, PATHINFO_EXTENSION) !== 'json') {
                    $name = $name.'.json';
                }
                if(file_exists($name)) {
                    return json_decode(gzuncompress(file_get_contents($name)), $type);
                } else {
                    return false;
                }
            } else {
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT jsonGet function used\nError : input most be array");
                throw new Exception('input most be array');
            }
        } else {
            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT jsonGet function used\nError : You must use start function for use this function");
            throw new Exception('you must use start function');
        }
    }
    public function jsonDel($array) {
        if($this->start === true) {
            if(is_array($array)) {
                if(isset($array['name'])) {
                    $name = $array['name'];
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT jsonDel function used\nError : name parameter not found");
                    throw new Exception('name parameter not found');
                }
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT jsonDel function used\n");
                if(pathinfo($name, PATHINFO_EXTENSION) !== 'json') {
                    $name = $name.'.json';
                }
                if(file_exists($name)) {
                    unlink($name);
                    return true;
                } else {
                    return false;
                }
            } else {
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT jsonDel function used\nError : input most be array");
                throw new Exception('input most be array');
            }
        } else {
            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT jsonDel function used\nError : You must use start function for use this function");
            throw new Exception('you must use start function');
        }
    }
    public function dataSave($array){
        if($this->start === true) {
            if(is_array($array)) {
                if(isset($array['key'])) {
                    if(is_string($array['key'])){
                        $key = $array['key'];
                    }else{
                        fwrite(LOG, date('Y/m/d H:i:s') . ": BPT dataSave function used\nError : key most be string");
                        throw new Exception('key most be string');
                    }
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT dataSave function used\nError : key parameter not found");
                    throw new Exception('key parameter not found');
                }
                if(isset($array['value'])) {
                    $value = $array['value'];
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT dataSave function used\nError : value parameter not found");
                    throw new Exception('value parameter not found');
                }
                if(isset($array['id'])) {
                    $id = $array['id'];
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT dataSave function used\nError : id parameter not found");
                    throw new Exception('id parameter not found');
                }
                if(isset($array['type'])) {
                    $type = $array['type'];
                    if($type!=='private'||$type!=='group'||$type!=='supergroup'||$type!=='channel'){
                        $type = 'private';
                    }
                } else {
                    $type = 'private';
                }
                $BPT_DB = json_decode(file_get_contents('BPT-DB.json'), true);
                if(isset($BPT_DB[$type][$id])){
                    $BPT_DB[$type][$id][$key] = $value;
                    file_put_contents('BPT-DB.json', json_encode($BPT_DB));
                    return true;
                }else{
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT dataSave function used\nError : id not found in BPT database");
                    throw new Exception('id not found');
                }
            } else {
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT dataSave function used\nError : input most be array");
                throw new Exception('input most be array');
            }
        } else {
            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT dataSave function used\nError : You must use start function for use this function");
            throw new Exception('you must use start function');
        }
    }
    public function dataGet($array){
        if($this->start === true) {
            if(is_array($array)) {
                if(isset($array['key'])) {
                    if(is_string($array['key'])){
                        $key = $array['key'];
                    }else{
                        fwrite(LOG, date('Y/m/d H:i:s') . ": BPT dataGet function used\nError : key most be string");
                        throw new Exception('key most be string');
                    }
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT dataGet function used\nError : key parameter not found");
                    throw new Exception('key parameter not found');
                }
                if(isset($array['id'])) {
                    $id = $array['id'];
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT dataGet function used\nError : id parameter not found");
                    throw new Exception('id parameter not found');
                }
                if(isset($array['type'])) {
                    $type = $array['type'];
                    if($type!=='private'||$type!=='group'||$type!=='supergroup'||$type!=='channel'){
                        $type = 'private';
                    }
                } else {
                    $type = 'private';
                }
                $BPT_DB = json_decode(file_get_contents('BPT-DB.json'), true);
                if(isset($BPT_DB[$type][$id])){
                    if(isset($BPT_DB[$type][$id][$key])){
                        return $BPT_DB[$type][$id][$key];
                    }else{
                        fwrite(LOG, date('Y/m/d H:i:s') . ": BPT dataGet function used\nError : key not found in BPT database");
                        throw new Exception('key not found');
                    }
                }else{
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT dataGet function used\nError : id not found in BPT database");
                    throw new Exception('id not found');
                }
            } else {
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT dataGet function used\nError : input most be array");
                throw new Exception('input most be array');
            }
        } else {
            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT dataGet function used\nError : You must use start function for use this function");
            throw new Exception('you must use start function');
        }
    }
    public function dataDel($array){
        if($this->start === true) {
            if(is_array($array)) {
                if(isset($array['key'])) {
                    if(is_string($array['key'])){
                        $key = $array['key'];
                    }else{
                        fwrite(LOG, date('Y/m/d H:i:s') . ": BPT dataDel function used\nError : key most be string");
                        throw new Exception('key most be string');
                    }
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT dataDel function used\nError : key parameter not found");
                    throw new Exception('key parameter not found');
                }
                if(isset($array['id'])) {
                    $id = $array['id'];
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT dataDel function used\nError : id parameter not found");
                    throw new Exception('id parameter not found');
                }
                if(isset($array['type'])) {
                    $type = $array['type'];
                    if($type!=='private'||$type!=='group'||$type!=='supergroup'||$type!=='channel'){
                        $type = 'private';
                    }
                } else {
                    $type = 'private';
                }
                $BPT_DB = json_decode(file_get_contents('BPT-DB.json'), true);
                if(isset($BPT_DB[$type][$id])){
                    if(isset($BPT_DB[$type][$id][$key])){
                        unset($BPT_DB[$type][$id][$key]);
                        file_put_contents('BPT-DB.json', json_encode($BPT_DB));
                    }else{
                        fwrite(LOG, date('Y/m/d H:i:s') . ": BPT dataDel function used\nError : key not found in BPT database");
                        throw new Exception('key not found');
                    }
                }else{
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT dataDel function used\nError : id not found in BPT database");
                    throw new Exception('id not found');
                }
            } else {
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT dataDel function used\nError : input most be array");
                throw new Exception('input most be array');
            }
        } else {
            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT dataDel function used\nError : You must use start function for use this function");
            throw new Exception('you must use start function');
        }
    }
    private function users($update, $a) {
        if(!file_exists('BPT-DB.json')) {
            file_put_contents('BPT-DB.json', json_encode(['private' => [], 'group' => [], 'supergroup' => [], 'channel' => []]));
        }
        $BPT_DB = json_decode(file_get_contents('BPT-DB.json'), true);
        if($a == 'message') {
            $type = $update['chat']['type'];
            $id = $update['from']['id'];
            if(!isset($BPT_DB[$type][$id])) {
                $BPT_DB[$type][$id] = [0, 0, 0];
            }
            $BPT_DB[$type][$id][0] += 1;
        } elseif($a == 'inline') {
            $id = $update['from']['id'];
        } elseif($a == 'callback') {
            $type = $update['message']['chat']['type'];
            $id = $update['from']['id'];
            if(!isset($BPT_DB[$type][$id])) {
                $BPT_DB[$type][$id] = [0, 0, 0];
            }
            $BPT_DB[$type][$id][1] += 1;
        } elseif($a == 'edit') {
            $type = $update['chat']['type'];
            $id = $update['from']['id'];
            if(!isset($BPT_DB[$type][$id])) {
                $BPT_DB[$type][$id] = [0, 0, 0];
            }
            $BPT_DB[$type][$id][2] += 1;
        }
        file_put_contents('BPT-DB.json', json_encode($BPT_DB));
    }
    public function forward2users($array) {
        if($this->start === true) {
            if(is_array($array)) {
                if(isset($array['chatid'])) {
                    $chatid = $array['chatid'];
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT forward2users function used\nError : chatid parameter not found");
                    throw new Exception('chatid parameter not found');
                }
                if(isset($array['msgid'])) {
                    $msgid = $array['msgid'];
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT forward2users function used\nError : msgid parameter not found");
                    throw new Exception('msgid parameter not found');
                }
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT forward2users function used\n");
                $BPT_DB = json_decode(file_get_contents('BPT-DB.json'), true);
                foreach($BPT_DB['private'] as $id => $x) {
                    $this->forwardMessage(['chat_id' => $id, 'from_chat_id' => $chatid, 'message_id' => $msgid]);
                }
                return true;
            } else {
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT forward2users function used\nError : input most be array");
                throw new Exception('input most be array');
            }
        } else {
            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT forward2users function used\nError : You must use start function for use this function");
            throw new Exception('you must use start function');
        }
    }
    public function forward2groups($array) {
        if($this->start === true) {
            if(is_array($array)) {
                if(isset($array['chatid'])) {
                    $chatid = $array['chatid'];
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT forward2groups function used\nError : chatid parameter not found");
                    throw new Exception('chatid parameter not found');
                }
                if(isset($array['msgid'])) {
                    $msgid = $array['msgid'];
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT forward2groups function used\nError : msgid parameter not found");
                    throw new Exception('msgid parameter not found');
                }
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT forward2groups function used\n");
                $BPT_DB = json_decode(file_get_contents('BPT-DB.json'), true);
                foreach($BPT_DB['groups'] as $id => $x) {
                    $this->forwardMessage(['chat_id' => $id, 'from_chat_id' => $chatid, 'message_id' => $msgid]);
                }
            } else {
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT forward2users function used\nError : input most be array");
                throw new Exception('input most be array');
            }
        } else {
            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT forward2groups function used\nError : You must use start function for use this function");
            throw new Exception('you must use start function');
        }
    }
    public function forward2supergroups($array) {
        if($this->start === true) {
            if(is_array($array)) {
                if(isset($array['chatid'])) {
                    $chatid = $array['chatid'];
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT forward2supergroups function used\nError : chatid parameter not found");
                    throw new Exception('chatid parameter not found');
                }
                if(isset($array['msgid'])) {
                    $msgid = $array['msgid'];
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT forward2supergroups function used\nError : msgid parameter not found");
                    throw new Exception('msgid parameter not found');
                }
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT forward2supergroups function used\n");
                $BPT_DB = json_decode(file_get_contents('BPT-DB.json'), true);
                foreach($BPT_DB['supergroup'] as $id => $x) {
                    $this->forwardMessage(['chat_id' => $id, 'from_chat_id' => $chatid, 'message_id' => $msgid]);
                }
            } else {
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT forward2users function used\nError : input most be array");
                throw new Exception('input most be array');
            }
        } else {
            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT forward2supergroups function used\nError : You must use start function for use this function");
            throw new Exception('you must use start function');
        }
    }
    public function forward2gps($array) {
        if($this->start === true) {
            if(is_array($array)) {
                if(isset($array['chatid'])) {
                    $chatid = $array['chatid'];
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT forward2gps function used\nError : chatid parameter not found");
                    throw new Exception('chatid parameter not found');
                }
                if(isset($array['msgid'])) {
                    $msgid = $array['msgid'];
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT forward2gps function used\nError : msgid parameter not found");
                    throw new Exception('msgid parameter not found');
                }
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT forward2gps function used\n");
                $BPT_DB = json_decode(file_get_contents('BPT-DB.json'), true);
                foreach($BPT_DB['groups'] as $id => $x) {
                    $this->forwardMessage(['chat_id' => $id, 'from_chat_id' => $chatid, 'message_id' => $msgid]);
                }
                foreach($BPT_DB['supergroup'] as $id => $x) {
                    $this->forwardMessage(['chat_id' => $id, 'from_chat_id' => $chatid, 'message_id' => $msgid]);
                }
            } else {
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT forward2users function used\nError : input most be array");
                throw new Exception('input most be array');
            }
        } else {
            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT forward2gps function used\nError : You must use start function for use this function");
            throw new Exception('you must use start function');
        }
    }
    public function forward2all($array) {
        if($this->start === true) {
            if(is_array($array)) {
                if(isset($array['chatid'])) {
                    $chatid = $array['chatid'];
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT forward2all function used\nError : chatid parameter not found");
                    throw new Exception('chatid parameter not found');
                }
                if(isset($array['msgid'])) {
                    $msgid = $array['msgid'];
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT forward2all function used\nError : msgid parameter not found");
                    throw new Exception('msgid parameter not found');
                }
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT forward2all function used\n");
                $BPT_DB = json_decode(file_get_contents('BPT-DB.json'), true);
                foreach($BPT_DB['private'] as $id => $x) {
                    $this->forwardMessage(['chat_id' => $id, 'from_chat_id' => $chatid, 'message_id' => $msgid]);
                }
                foreach($BPT_DB['groups'] as $id => $x) {
                    $this->forwardMessage(['chat_id' => $id, 'from_chat_id' => $chatid, 'message_id' => $msgid]);
                }
                foreach($BPT_DB['supergroup'] as $id => $x) {
                    $this->forwardMessage(['chat_id' => $id, 'from_chat_id' => $chatid, 'message_id' => $msgid]);
                }
            } else {
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT forward2users function used\nError : input most be array");
                throw new Exception('input most be array');
            }
        } else {
            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT forward2all function used\nError : You must use start function for use this function");
            throw new Exception('you must use start function');
        }
    }
    public function stats() {
        if($this->start === true) {
            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT jsonSave function used\n");
            $BPT_DB = json_decode(file_get_contents('BPT-DB.json'), true);
            $BPT_users = count($BPT_DB['private']);
            $BPT_group = count($BPT_DB['group']);
            $BPT_sgroup = count($BPT_DB['supergroup']);
            $BPT_channel = count($BPT_DB['channel']);
            return ['users' => $BPT_users, 'groups' => $BPT_group, 'supergroups' => $BPT_sgroup, 'channels' => $BPT_channel];
        } else {
            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT jsonSave function used\nError : You must use start function for use this function");
            throw new Exception('you must use start function');
        }
    }
    public function statsHere($array) {
        if($this->start === true) {
            if(is_array($array)) {
                if(isset($array['chatid'])) {
                    $chatid = $array['chatid'];
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT statsHere function used\nError : chatid parameter not found");
                    throw new Exception('chatid parameter not found');
                }
                if(isset($array['type'])) {
                    $type = $array['type'];
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT statsHere function used\nError : type parameter not found");
                    throw new Exception('type parameter not found');
                }
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT statsHere function used\n");
                $BPT_DB = json_decode(file_get_contents('BPT-DB.json'), true);
                if(isset($BPT_DB[$type][$chatid])) {
                    $callback = $BPT_DB[$type][$chatid][1];
                    $message = $BPT_DB[$type][$chatid][0];
                    $edit = $BPT_DB[$type][$chatid][2];
                    return ['callback_query' => $callback, 'message' => $message, 'edited_message' => $edit];
                } else {
                    return false;
                }
            } else {
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT statsHere function used\nError : input most be array");
                throw new Exception('input most be array');
            }
        } else {
            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT statsHere function used\nError : You must use start function for use this function");
            throw new Exception('you must use start function');
        }
    }
    public function delete($array) {
        if($this->start === true) {
            if(is_array($array)) {
                if(isset($array['path'])) {
                    $path = $array['path'];
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT delete function used\nError : path parameter not found");
                    throw new Exception('path parameter not found');
                }
                if(isset($array['sub'])) {
                    $sub = $array['sub'];
                } else {
                    $sub = true;
                }
                if(is_dir($path)) {
                    if(count(scandir($path)) > 2) {
                        if($sub) {
                            $it = new RecursiveDirectoryIterator($path, RecursiveDirectoryIterator::SKIP_DOTS);
                            $files = new RecursiveIteratorIterator($it, RecursiveIteratorIterator::CHILD_FIRST);
                            foreach($files as $file) {
                                if($file->isDir()) {
                                    rmdir($file->getRealPath());
                                } else {
                                    unlink($file->getRealPath());
                                }
                            }
                            rmdir($path);
                            return true;
                        } else {
                            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT delete function used\nError : delete function cannot delete folder because its have subfiles and sub parameter haven't true value");
                            throw new Exception('folder have subfiles');
                        }
                    } else rmdir($path);
                } elseif(basename($path) !== 'BPT.php') unlink($path);
            } else {
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT delete function used\nError : input most be array");
                throw new Exception('input most be array');
            }
        } else {
            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT delete function used\nError : You must use start function for use this function");
            throw new Exception('you must use start function');
        }
    }
    public function time2string($array) {
        if($this->start === true) {
            if(is_array($array)) {
                if(isset($array['datetime'])) {
                    $datetime = $array['datetime'];
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT time2string function used\nError : datetime parameter not found");
                    throw new Exception('datetime parameter not found');
                }
                if(is_numeric($datetime)) {
                    $now = new DateTime;
                    $input = new DateTime('@' . $datetime);
                    if($now < $input) $status = 'later'; else $status = 'ago';
                    $diff = $now->diff($input);
                    $diff->w = floor($diff->d / 7);
                    $string = ['year' => 'y', 'month' => 'm', 'week' => 'w', 'day' => 'd', 'hour' => 'h', 'minute' => 'i', 'second' => 's'];
                    foreach($string as $k => &$v) {
                        if($diff->$v) $v = $diff->$v; else unset($string[$k]);
                    }
                    $string['status'] = $status;
                    return count($string) > 1 ? $string : ['status' => 'now'];
                } else {
                    return false;
                }
            } else {
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT time2string function used\nError : input most be array");
                throw new Exception('input most be array');
            }
        } else {
            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT time2string function used\nError : You must use start function for use this function");
            throw new Exception('you must use start function');
        }
    }
    public function objectToArrays($array) {
        if($this->start === true) {
            if(is_array($array)) {
                if(isset($array['object'])) {
                    $object = $array['object'];
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT objectToArrays function used\nError : datetime parameter not found");
                    throw new Exception('object parameter not found');
                }
                if(!is_object($object) && !is_array($object)) {
                    return $object;
                }
                if(is_object($object)) {
                    $object = get_object_vars($object);
                }
                return array_map("objectToArrays", $object);
            } else {
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT objectToArrays function used\nError : input most be array");
                throw new Exception('input most be array');
            }
        } else {
            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT objectToArrays function used\nError : You must use start function for use this function");
            throw new Exception('you must use start function');
        }
    }
    public function randomString($array) {
        if($this->start === true) {
            if(is_array($array)) {
                if(isset($array['characters'])) {
                    $characters = $array['characters'];
                } else {
                    $characters = 'aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ';
                }
                if(isset($array['length'])) {
                    $length = $array['length'];
                } else {
                    $length = 16;
                }
                $randstring = '';
                for($i = 0; $i < $length; $i++) {
                    $randstring .= $characters[rand(0, strlen($characters) - 1)];
                }
                return $randstring;
            } else {
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT randomString function used\nError : input most be array");
                throw new Exception('input most be array');
            }
        } else {
            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT randomString function used\nError : You must use start function for use this function");
            throw new Exception('you must use start function');
        }
    }
    public function crypto($array){
        if($this->start===true){
            if(is_array($array)){
                if(isset($array['action'])){
                    $action = $array['action'];
                }else{
                    fwrite(LOG , date('Y/m/d H:i:s') . ": BPT crypto function used\nError : datetime parameter not found");
                    throw new Exception('action parameter not found');
                }
                if(isset($array['string'])){
                    $string = $array['string'];
                }else{
                    fwrite(LOG , date('Y/m/d H:i:s') . ": BPT crypto function used\nError : datetime parameter not found");
                    throw new Exception('string parameter not found');
                }
                if(isset($array['key'])){
                    $key = $array['key'];
                }
                if(isset($array['iv'])){
                    $iv = $array['iv'];
                }
                if ($action == 'enc') {
                    $key = hash('sha256', $this->randomString(['length'=>64]));
                    $iv = substr(hash('sha256', $this->randomString(['length'=>64])),48);
                    $output = base64_encode(openssl_encrypt($string, "AES-256-CBC", $key,1,$iv));
                    return ['hash'=>$output,'key'=>$key,'iv'=>$iv];
                }
                elseif ($action == 'dec') {
                    $output = openssl_decrypt(base64_decode($string), "AES-256-CBC", $key,1,$iv);
                    return $output;
                }
                else{
                    return false;
                }
            }else{
                fwrite(LOG,date('Y/m/d H:i:s').": BPT crypto function used\nError : input most be array");
                throw new Exception('input most be array');
            }
        }else{
            fwrite(LOG,date('Y/m/d H:i:s').": BPT crypto function used\nError : You must use start function for use this function");
            throw new Exception('you must use start function');
        }
    }
    public function zip($array){
        if($this->start===true){
            if(is_array($array)){
                if(isset($array['path'])){
                    $path = $array['path'];
                }else{
                    fwrite(LOG , date('Y/m/d H:i:s') . ": BPT zip function used\nError : path parameter not found");
                    throw new Exception('path parameter not found');
                }
                if(isset($array['dest'])){
                    $dest = $array['dest'];
                }else{
                    fwrite(LOG , date('Y/m/d H:i:s') . ": BPT zip function used\nError : dest parameter not found");
                    throw new Exception('dest parameter not found');
                }
                $rootPath = realpath($path);
                $Zip = new ZipArchive();
                $Zip->open($dest, ZipArchive::CREATE | ZipArchive::OVERWRITE);
                $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($rootPath),RecursiveIteratorIterator::LEAVES_ONLY);
                foreach ($files as $file)
                {
                    if (!$file->isDir())
                    {
                        $filePath = $file->getRealPath();
                        $relativePath = substr($filePath, strlen($rootPath) + 1);
                        $Zip->addFile($filePath, $relativePath);
                    }
                }
                $Zip->close();
            }else{
                fwrite(LOG,date('Y/m/d H:i:s').": BPT zip function used\nError : input most be array");
                throw new Exception('input most be array');
            }
        }else{
            fwrite(LOG,date('Y/m/d H:i:s').": BPT zip function used\nError : You must use start function for use this function");
            throw new Exception('you must use start function');
        }
    }
    public function size($array){
        if($this->start===true){
            if(is_array($array)){
                if(isset($array['path'])) {
                    $path = $array['path'];
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT size function used\nError : path parameter not found");
                    throw new Exception('path parameter not found');
                }
                if(isset($array['format'])) {
                    $format = $array['format'];
                } else {
                    $format = true;
                }
                if(filter_var($path,FILTER_VALIDATE_URL)){
                    $ch = curl_init($path);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                    curl_setopt($ch, CURLOPT_HEADER, TRUE);
                    curl_setopt($ch, CURLOPT_NOBODY, TRUE);
                    curl_exec($ch);
                    $size = curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD);
                    curl_close($ch);
                }else{
                    if(file_exists($path)){
                        $size = filesize($path);
                    }else{
                        fwrite(LOG,date('Y/m/d H:i:s').": BPT size function used\nError : File not found");
                        throw new Exception('File not found');
                    }
                }
                if(isset($size) && is_numeric($size)){
                    if($format){
                        $o = 0;
                        $rate = ['B', 'KB', 'MB', 'GB', 'TB'];
                        while($size > 1024) {
                            $size = round($size / 1024, 2);
                            $o++;
                        }
                        return $size . ' ' . $rate[$o];
                    }else{
                        return $size;
                    }
                }else{
                    return false;
                }
            }else{
                fwrite(LOG,date('Y/m/d H:i:s').": BPT size function used\nError : input most be array");
                throw new Exception('input most be array');
            }
        }else{
            fwrite(LOG,date('Y/m/d H:i:s').": BPT size function used\nError : You must use start function for use this function");
            throw new Exception('you must use start function');
        }
    }
    public function api($array) {
        if($this->start === true) {
            if(is_array($array)) {
                if(isset($array['type'])) {
                    $type = $array['type'];
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT api function used\nError : type parameter not found");
                    throw new Exception('type parameter not found');
                }
                if(isset($array['option'])) {
                    $option = $array['option'];
                } else {
                    $option = [];
                }
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT api function used , API type is $type\n");
                switch($type) {
                    case 'alaki':
                        return json_decode(file_get_contents('https://poty.fun/apis/alaki.php'), true)['results'];
                        break;
                    case 'arz':
                        return json_decode(file_get_contents('https://poty.fun/apis/arz.php?type=arz'), true)['results'];
                        break;
                    case 'tala':
                        return json_decode(file_get_contents('https://poty.fun/apis/arz.php?type=tala'), true)['results'];
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
                    case 'chistan':
                        return json_decode(file_get_contents('https://poty.fun/apis/chistan.php'), true)['results'][0];
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
                    case 'fall':
                        return "https://poty.fun/apis/fal.php";
                        break;
                    case 'khatere':
                        return json_decode(file_get_contents('https://poty.fun/apis/khatere.php'), true)['results'];
                        break;
                    case 'pnp':
                        return json_decode(file_get_contents('https://poty.fun/apis/pnp.php'), true)['results'];
                        break;
                    case 'noroz':
                        return json_decode(file_get_contents('https://poty.fun/apis/noroz.php'), true)['results'];
                        break;
                    case 'capcha':
                        return json_decode(file_get_contents('https://poty.fun/apis/capcha2.php'), true)['results'];
                        break;
                    case 'time':
                        return json_decode(file_get_contents('https://poty.fun/apis/time.php'), true)['results'];
                        break;
                    case 'pdf':
                        if($option !== null) {
                            if(is_array($option)) {
                                if(isset($option['url'])) {
                                    $url = urlencode($option['url']);
                                    return "https://poty.fun/apis/topdf.php?url=$url";
                                } else {
                                    throw new Exception('pdf api need url field!');
                                }
                            } else {
                                throw new Exception('array parameter must be array!');
                            }
                        } else {
                            throw new Exception('You must insert array parameter!');
                        }
                        break;
                    case 'num2text':
                        if($option !== null) {
                            if(is_array($option)) {
                                if(isset($option['num'])) {
                                    //۰۱۲۳۴۵۶۷۸۹
                                    $option['num'] = str_replace(['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'], [0, 1, 2, 3, 4, 5, 6, 7, 8, 9], $option['num']);
                                    $url = urlencode($option['num']);
                                    return json_decode(file_get_contents("https://poty.fun/apis/num.php?num=$url"), true)['results'];
                                } else {
                                    throw new Exception('pdf api need url field!');
                                }
                            } else {
                                throw new Exception('array parameter must be array!');
                            }
                        } else {
                            throw new Exception('You must insert array parameter!');
                        }
                        break;
                    case 'fin2pe':
                        if($option !== null) {
                            if(is_array($option)) {
                                if(isset($option['text'])) {
                                    $text = urlencode($option['text']);
                                    return json_decode(file_get_contents("https://poty.fun/apis/fintope.php?text=$text"), true)['results'];
                                } else {
                                    throw new Exception('fin2pe api need text field!');
                                }
                            } else {
                                throw new Exception('array parameter must be array!');
                            }
                        } else {
                            throw new Exception('You must insert array parameter!');
                        }
                        break;
                    default:
                        return false;
                        break;
                }
            } else {
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT api function used\nError : input most be array");
                throw new Exception('input most be array');
            }
        } else {
            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT api function used\nError : You must use start function for use this function");
            throw new Exception('you must use start function');
        }
    }
    public function eKey($array){
        if($this->start === true) {
            if(is_array($array)) {
                if(isset($array['keyboard'])) {
                    $keyboard = $array['keyboard'];
                }
                elseif(isset($array['inline'])) {
                    $inline = $array['inline'];
                }
                if(isset($keyboard)){
                    $r = ['keyboard'=>[],'resize_keyboard'=>true];
                    foreach($keyboard as $key){
                        $k = [];
                        foreach($key as $but){
                            $o = explode('||',$but);
                            if(count($o) > 1){
                                if($o[1] == 'con'){
                                    $k[] = ['text'=>$o[0],'request_contact'=>true];
                                }
                                elseif($o[1] == 'loc'){
                                    $k[] = ['text'=>$o[0],'request_location'=>true];
                                }
                                else{
                                    $k[] = ['text'=>$but];
                                }
                            }else{
                                $k[] = ['text'=>$but];
                            }
                        }
                        $r['keyboard'][] = $k;
                    }
                    return json_encode($r);
                }
                elseif(isset($inline)){
                    $r = ['inline_keyboard'=>[]];
                    foreach($inline as $key){
                        $k = [];
                        foreach($key as $but){
                            $text = $but[0];
                            if(isset($but[1])){
                                if(filter_var($but[1],FILTER_VALIDATE_URL)){
                                    $k[] = ['text'=>$but[0],'url'=>$but[1]];
                                }else{
                                    $k[] = ['text'=>$but[0],'callback_data'=>$but[1]];
                                }
                            }else{
                                $k[] = ['text'=>$but[0],'url'=>'https://t.me/BPT_CH'];
                            }
                        }
                        $r['inline_keyboard'][] = $k;
                    }
                    return json_encode($r);
                }
                else{
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT eKey function used\nError : keyboard or inline parameter not found");
                    throw new Exception('keyboard or inline nfound');
                }
            } else {
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT eKey function used\nError : input most be array");
                throw new Exception('input most be array');
            }
        } else {
            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT eKey function used\nError : You must use start function for use this function");
            throw new Exception('you must use start function');
        }
    }
    public function del(){
        if($this->start === true) {
            if(isset($this->update->message)) {
                return $this->deleteMessage(['chat_id' => $this->update->message->chat->id, 'message_id' => $this->update->message->message_id]);
            }
            elseif(isset($this->update->callback_query)) {
                return $this->deleteMessage(['chat_id' => $this->update->callback_query->message->chat->id, 'message_id' => $this->update->callback_query->message->message_id]);
            }
            elseif(isset($this->update->edited_message)) {
                return $this->deleteMessage(['chat_id' => $this->update->edited_message->chat->id, 'message_id' => $this->update->edited_message->message_id]);
            }
            elseif(isset($this->update->channel_post)) {
                return $this->deleteMessage(['chat_id' => $this->update->channel_post->chat->id, 'message_id' => $this->update->channel_post->message_id]);
            }
            elseif(isset($this->update->edited_channel_post)) {
                return $this->deleteMessage(['chat_id' => $this->update->edited_channel_post->chat->id, 'message_id' => $this->update->edited_channel_post->message_id]);
            }
        } else {
            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT del function used\nError : You must use start function for use this function");
            throw new Exception('you must use start function');
        }
    }
    public function forward($array){
        if($this->start === true) {
            if(is_array($array)) {
                if(isset($array['to'])) {
                    $to = $array['to'];
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT forward function used\nError : to parameter not found");
                    throw new Exception('to parameter not found');
                }
                return $this->forwardMessage(['chat_id'=>$to,'from_chat_id'=>$this->update->message->chat->id,'message_id'=>$this->update->message->message_id]);
            } else {
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT forward function used\nError : input most be array");
                throw new Exception('input most be array');
            }
        } else {
            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT forward function used\nError : You must use start function for use this function");
            throw new Exception('you must use start function');
        }
    }
    public function checkPhone($array){
        if($this->start === true) {
            if(is_array($array)) {
                if(isset($array['text']) && is_string($array['text'])) {
                    $text = $array['text'];
                } else {
                    $text = "با سلام کاربر گرامی\nجهت ادامه دادن فعالیت خود در این ربات باید شماره خود را ارسال نمایید";
                }
                if(isset($array['btext']) && is_string($array['btext'])) {
                    $btext = $array['btext'];
                } else {
                    $btext = 'ارسال شماره تلفن';
                }
                if(isset($array['phones']) && is_array($array['phones'])) {
                    $phones = $array['phones'];
                } elseif(is_string($array['phones']) && ($array['phones'] == '98'||strtolower($array['phones'])=='iran'||$array['phones']=='ایران')) {
                    $phones = ['98'];
                } else{
                    $phones = 'all';
                }
                if(isset($this->update->message)) {
                    $id = $this->update->message->chat->id;
                    $type =  $this->update->message->chat->type;
                    $BPT_DB = json_decode(file_get_contents('BPT-DB.json'), true);
                    if($type == 'private'){
                        if(isset($BPT_DB[$type][$id]['phone_number'])){
                            if(is_array($phones)){
                                $p = false;
                                $phone = $BPT_DB[$type][$id]['phone_number'];
                                foreach($phones as $range){
                                    if(is_string($range) && strpos($phone,$range) === 0){
                                        $p = true;
                                        break;
                                    }
                                }
                                if($p){
                                    return 'true';
                                }else{
                                    unset($BPT_DB[$type][$id]['phone_number']);
                                    file_put_contents('BPT-DB.json', json_encode($BPT_DB));
                                    $this->sendMessage(['chat_id'=>$id,'text'=>$text,'reply_markup'=>$this->eKey(['keyboard'=>[["$btext||con"]]])]);
                                    return 'false';
                                }
                            }else{
                                return 'true';
                            }
                        }
                        else{
                            if(isset($this->update->message->contact)){
                                $p = false;
                                $phone = $this->update->message->contact->phone_number;
                                if(is_string($phones)){
                                    $BPT_DB[$type][$id]['phone_number'] = $phone;
                                    $p = true;
                                }else{
                                    foreach($phones as $range){
                                        if(is_string($range) && strpos($phone,$range) === 0){
                                            $BPT_DB[$type][$id]['phone_number'] = $phone;
                                            $p = true;
                                            break;
                                        }
                                    }
                                }
                                if($p){
                                    file_put_contents('BPT-DB.json', json_encode($BPT_DB));
                                    return 'd';
                                }else{
                                    return 'r';
                                }
                            }else{
                                $this->sendMessage(['chat_id'=>$id,'text'=>$text,'reply_markup'=>$this->eKey(['keyboard'=>[["$btext||con"]]])]);
                                return 'false';
                            }
                        }
                    }
                    else{
                        return 'n';
                    }
                }else{
                    return 'n';
                }
            } else {
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT checkPhone function used\nError : input most be array");
                throw new Exception('input most be array');
            }
        } else {
            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT checkPhone function used\nError : You must use start function for use this function");
            throw new Exception('you must use start function');
        }
    }
    public function jChecker($array){
        if($this->start === true) {
            if(is_array($array)) {
                if(isset($array['ids'])){
                    $ids = $array['ids'];
                    if(is_string($ids)){
                        $ids = [$ids];
                    }
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT jChecker function used\nError : ids parameter not found");
                    throw new Exception('ids parameter not found');
                }
                if(isset($array['user_id'])){
                    $user_id = $array['user_id'];
                } else {
                    fwrite(LOG, date('Y/m/d H:i:s') . ": BPT jChecker function used\nError : user_id parameter not found");
                    throw new Exception('user_id parameter not found');
                }
                $result = [];
                foreach($ids as $id){
                    $check = $this->getChatMember(['chat_id' => $id, 'user_id' => $user_id]);
                    if(isset($check['result'])) {
                        $check = $check['result'];
                        if($check['status'] == 'member' || $check['status'] == 'administrator' || $check['status'] == 'creator') {
                            $result[$id] = true;
                        } else {
                            $result[$id] = false;
                        }
                    } else {
                        $result[$id] = 'chat not found';
                    }
                }
                return $result;
            } else {
                fwrite(LOG, date('Y/m/d H:i:s') . ": BPT jChecker function used\nError : input most be array");
                throw new Exception('input most be array');
            }
        } else {
            fwrite(LOG, date('Y/m/d H:i:s') . ": BPT jChecker function used\nError : You must use start function for use this function");
            throw new Exception('you must use start function');
        }
    }
    /** ---------- Extra Function ----------- */
}

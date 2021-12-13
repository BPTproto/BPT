<?php
/** ----------- Check Included ---------- */
if(basename(__FILE__) === basename($_SERVER['SCRIPT_FILENAME'])) {
    die("<div style='width:98vw;height:98vh;display:flex;justify-content:center;align-items:center;font-size:25vw'>BPT</div>");
}

/** --------- Check Php version --------- */
if(PHP_MAJOR_VERSION === 5){
    $newline = PHP_SAPI !== 'cli' ? '<br>' . PHP_EOL : PHP_EOL;
    die("You can't run this library on php version lower then 7.0$newline supported versions: php 7.0+$newline recommended version: php 7.4$newline");
}

/**
 * BPT CLASS
 * Simple class for handling telegram bot and write it very easily
 * BOT API version : 5.5
 *
 * @method getUpdates($array = [])
 * @method getUp($array = [])
 * @method updates($array = [])
 * @method setWebhook($array)
 * @method setWeb($array)
 * @method webhook($array)
 * @method deleteWebhook($array=[])
 * @method deleteWeb($array=[])
 * @method delWeb($array=[])
 * @method getWebhookInfo($array=[])
 * @method getWeb($array=[])
 * @method getMe($array=[])
 * @method me($array=[])
 * @method logOut($array=[])
 * @method close($array=[])
 * @method sendMessage($array)
 * @method send($array)
 * @method forwardMessage($array)
 * @method forward($array)
 * @method copyMessage($array)
 * @method copy($array)
 * @method sendPhoto($array)
 * @method photo($array)
 * @method sendAudio($array)
 * @method audio($array)
 * @method sendDocument($array)
 * @method sendDoc($array)
 * @method document($array)
 * @method doc($array)
 * @method sendVideo($array)
 * @method video($array)
 * @method sendAnimation($array)
 * @method animation($array)
 * @method sendGif($array)
 * @method gif($array)
 * @method sendVoice($array)
 * @method voice($array)
 * @method sendVideoNote($array)
 * @method videoNote($array)
 * @method sendMediaGroup($array)
 * @method mediaGroup($array)
 * @method media($array)
 * @method sendLocation($array)
 * @method sendLoc($array)
 * @method location($array)
 * @method loc($array)
 * @method editMessageLiveLocation($array)
 * @method editLiveLoc($array)
 * @method stopMessageLiveLocation($array)
 * @method stopLiveLoc($array)
 * @method sendVenue($array)
 * @method venue($array)
 * @method sendContact($array)
 * @method contact($array)
 * @method sendPoll($array)
 * @method poll($array)
 * @method sendDice($array=[])
 * @method dice($array=[])
 * @method sendChatAction($array=[])
 * @method chatAction($array=[])
 * @method action($array=[])
 * @method getUserProfilePhotos($array=[])
 * @method userPhotos($array=[])
 * @method getFile($array=[])
 * @method file($array=[])
 * @method banChatMember($array=[])
 * @method ban($array=[])
 * @method kickChatMember($array=[]) DEPRECATED! use banChatMember instead
 * @method unbanChatMember($array=[])
 * @method unban($array=[])
 * @method kick($array=[]) This is not alice with kickChatMember , will use unban method to kick user
 * @method restrictChatMember($array)
 * @method restrict($array)
 * @method promoteChatMember($array)
 * @method promote($array)
 * @method setChatAdministratorCustomTitle($array)
 * @method banChatSenderChat($array)
 * @method banSender($array)
 * @method unbanChatSenderChat($array)
 * @method unbanSender($array)
 * @method customTitle($array)
 * @method setChatPermissions($array)
 * @method permissions($array)
 * @method exportChatInviteLink($array=[])
 * @method link($array=[])
 * @method createChatInviteLink($array=[])
 * @method crLink($array=[])
 * @method editChatInviteLink($array=[])
 * @method edLink($array=[])
 * @method revokeChatInviteLink($array=[])
 * @method reLink($array=[])
 * @method approveChatJoinRequest($array=[])
 * @method acceptJoin($array=[])
 * @method declineChatJoinRequest($array=[])
 * @method denyJoin($array=[])
 * @method setChatPhoto($array)
 * @method deleteChatPhoto($array=[])
 * @method setChatTitle($array)
 * @method title($array)
 * @method setChatDescription($array)
 * @method description($array)
 * @method pinChatMessage($array)
 * @method pin($array)
 * @method unpinChatMessage($array=[])
 * @method unpin($array=[])
 * @method unpinAllChatMessages($array=[])
 * @method unpinall($array=[])
 * @method leaveChat($array=[])
 * @method leave($array=[])
 * @method getChat($array=[])
 * @method chat($array=[])
 * @method getChatAdministrators($array=[])
 * @method admins($array=[])
 * @method getChatMemberCount($array=[]) DEPRECATED! Use getChatMembersCount instead
 * @method getChatMembersCount($array=[])
 * @method membersCount($array=[])
 * @method getChatMember($array=[])
 * @method member($array=[])
 * @method setChatStickerSet($array)
 * @method setSticker($array)
 * @method deleteChatStickerSet($array)
 * @method delSticker($array)
 * @method answerCallbackQuery($array=[])
 * @method answer($array=[])
 * @method setMyCommands($array)
 * @method setcommands($array)
 * @method deleteMyCommands($array=[])
 * @method deletecommands($array=[])
 * @method getMyCommands($array=[])
 * @method getcommands($array=[])
 * @method editMessageText($array)
 * @method editText($array)
 * @method editMessageCaption($array)
 * @method editCap($array)
 * @method editCaption($array)
 * @method editMessageMedia($array)
 * @method editMedia($array)
 * @method editMessageReplyMarkup ($array=[])
 * @method editReply($array=[])
 * @method editKeyboard($array=[])
 * @method stopPoll($array)
 * @method deleteMessage($array=[])
 * @method del($array=[])
 * @method sendSticker($array)
 * @method sticker($array)
 * @method getStickerSet($array)
 * @method uploadStickerFile($array)
 * @method uploadsticker($array)
 * @method createNewStickerSet($array)
 * @method createsticker($array)
 * @method addStickerToSet($array)
 * @method addsticker($array)
 * @method setStickerPositionInSet($array)
 * @method setstickerposition($array)
 * @method setstickerpos($array)
 * @method deleteStickerFromSet($array)
 * @method deletesticker($array)
 * @method setStickerSetThumb($array)
 * @method setstickerthumb($array)
 * @method answerInlineQuery($array=[])
 * @method answerinline($array=[])
 * @method sendInvoice($array)
 * @method invoice($array)
 * @method answerShippingQuery($array)
 * @method answershipping($array)
 * @method answerPreCheckoutQuery($array)
 * @method answerprecheckout($array)
 * @method answerprecheck($array)
 * @method setPassportDataErrors($array)
 * @method setpassport($array)
 * @method sendGame($array)
 * @method game($array)
 * @method setGameScore($array)
 * @method gamescore($array)
 * @method getGameHighScores($array=[])
 * @method getgamehigh($array=[])
 *
 * @link https://bpt-proto.ir
 */
class BPT {
    private $version = 2.00;

    private $bot_id;

    private $token;

    private $settings;

    /**
     * telegram update will saved in this var as object , does not effected by array_update option
     */
    public $update;

    public $db;

    private $web_answered = false;

    public function __construct (array $settings) {
        if (isset($settings['token'])) {
            if ($this->isToken(['token' => $settings['token']])) {
                $this->token = $settings['token'];
                $this->bot_id = explode(':', $settings['token'])[0];
                $settings['auto_update'] = $settings['auto_update'] ?? true;
                $settings['max_connection'] = $settings['max_connection'] ?? 40;
                $settings['certificate'] = $settings['certificate'] ?? null;
                $settings['base_url'] = $settings['base_url'] ?? 'https://api.telegram.org/bot';
                $settings['down_url'] = $settings['down_url'] ?? 'https://api.telegram.org/file/bot';///////////////////////////////////////////////////////////////
                $settings['forgot_time'] = isset($settings['forgot_time']) && is_numeric($settings['forgot_time']) ? $settings['forgot_time'] : 100;
                $settings['receive'] = $settings['receive'] ?? 'webhook';
                $settings['handler'] = $settings['handler'] ?? true;
                $settings['allowed_updates'] = $settings['allowed_updates'] ?? ['message', 'edited_channel_post', 'callback_query', 'inline_query'];
                $settings['security'] = $settings['security'] ?? false;
                $settings['secure_folder'] = $settings['secure_folder'] ?? false;
                $settings['array_update'] = $settings['array_update'] ?? false;
                $settings['split_update'] = $settings['split_update'] ?? true;
                $settings['multi'] = $settings['multi'] ?? false;
                $settings['debug'] = $settings['debug'] ?? false;
                $settings['telegram_verify'] = $settings['telegram_verify'] ?? true;
                $settings['logger'] = $settings['logger'] ?? true;
                $settings['log_size'] = $settings['log_size'] ?? false;
                $this->settings = $settings;
                if ($settings['logger']) {
                    $logsize = $settings['log_size'];
                    if ($logsize !== false) {
                        $logsize = is_numeric($logsize) ? round($logsize, 1) : 10;
                        if (file_exists('BPT.log')) {
                            if (!(filesize('BPT.log') > $logsize * 1024 * 1024)) {
                                define('LOG', fopen('BPT.log', 'a'));
                            }
                            else {
                                define('LOG', fopen('BPT.log', 'w'));
                                $this->logger('', "♥♥♥♥♥♥♥♥♥♥♥♥♥♥ BPT PROTO  ♥♥♥♥♥♥♥♥♥♥♥♥♥♥\nTnx for using our library\nSome information about us :\nAuthor : @Im_Miaad\nHelper : @Master_Devloper\nChannel : @BPT_Proto\nOur Website : https://bpt-proto.ir\n\nIf you have any problem with our library\nContact to our supports\n♥♥♥♥♥♥♥♥♥♥♥♥♥♥ BPT PROTO  ♥♥♥♥♥♥♥♥♥♥♥♥♥♥\nINFO : BPT PROTO LOG STARTED ...\nWARNING : THIS FILE AUTOMATICALLY DELETED WHEN ITS SIZE REACHED $logsize MB\n");
                            }
                        }
                        else {
                            define('LOG', fopen('BPT.log', 'a'));
                            $this->logger('', "♥♥♥♥♥♥♥♥♥♥♥♥♥♥ BPT PROTO  ♥♥♥♥♥♥♥♥♥♥♥♥♥♥\nTnx for using our library\nSome information about us :\nAuthor : @Im_Miaad\nHelper : @Master_Devloper\nChannel : @BPT_Proto\nOur Website : https://bpt-proto.ir\n\nIf you have any problem with our library\nContact to our supports\n♥♥♥♥♥♥♥♥♥♥♥♥♥♥ BPT PROTO  ♥♥♥♥♥♥♥♥♥♥♥♥♥♥\nINFO : BPT PROTO LOG STARTED ...\nWARNING : THIS FILE AUTOMATICALLY DELETED WHEN ITS SIZE REACHED $logsize MB\n");
                        }
                    }
                    else {
                        if (file_exists('BPT.log')) {
                            if (!(filesize('BPT.log') > 10 * 1024 * 1024)) {
                                define('LOG', fopen('BPT.log', 'a'));
                            }
                            else {
                                define('LOG', fopen('BPT.log', 'w'));
                                $this->logger('', "♥♥♥♥♥♥♥♥♥♥♥♥♥♥ BPT PROTO  ♥♥♥♥♥♥♥♥♥♥♥♥♥♥\nTnx for using our library\nSome information about us :\nAuthor : @Im_Miaad\nHelper : @Master_Devloper\nChannel : @BPT_Proto\nOur Website : https://bpt-proto.ir\n\nIf you have any problem with our library\nContact to our supports\n♥♥♥♥♥♥♥♥♥♥♥♥♥♥ BPT PROTO  ♥♥♥♥♥♥♥♥♥♥♥♥♥♥\nINFO : BPT PROTO LOG STARTED ...\nWARNING : THIS FILE AUTOMATICALLY DELETED WHEN ITS SIZE REACHED 10 MB\n");
                            }
                        }
                        else {
                            define('LOG', fopen('BPT.log', 'a'));
                            $this->logger('', "♥♥♥♥♥♥♥♥♥♥♥♥♥♥ BPT PROTO  ♥♥♥♥♥♥♥♥♥♥♥♥♥♥\nTnx for using our library\nSome information about us :\nAuthor : @Im_Miaad\nHelper : @Master_Devloper\nChannel : @BPT_Proto\nOur Website : https://bpt-proto.ir\n\nIf you have any problem with our library\nContact to our supports\n♥♥♥♥♥♥♥♥♥♥♥♥♥♥ BPT PROTO  ♥♥♥♥♥♥♥♥♥♥♥♥♥♥\nINFO : BPT PROTO LOG STARTED ...\nWARNING : THIS FILE AUTOMATICALLY DELETED WHEN ITS SIZE REACHED 10 MB\n");
                        }
                    }
                }
                if ($this->settings['auto_update']) {
                    $this->bptUpdate();
                }
                if (!$settings['debug']) {
                    if ($settings['security']) {
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
                    if ($settings['secure_folder']) {
                        $address = explode('/', $_SERVER['REQUEST_URI']);
                        unset($address[count($address) - 1]);
                        $address = implode('/', $address) . '/BPT.php';
                        $text = "ErrorDocument 404 $address\nErrorDocument 403 $address\n Options -Indexes\n  Order Deny,Allow\nDeny from all\nAllow from 127.0.0.1\n<Files *.php>\n    Order Allow,Deny\n    Allow from all\n</Files>";
                        if (!file_exists('.htaccess') || filesize('.htaccess') != strlen($text)) {
                            file_put_contents('.htaccess', $text);
                        }
                    }
                }
                if (!isset($settings['db'])) {
                    if (!empty($settings['db'])) {
                        $settings['db'] = ['type' => 'json', 'file_name' => 'BPT-DB.json'];
                        if (!file_exists($settings['db']['file_name'])) {
                            file_put_contents($settings['db']['file_name'], json_encode(['private' => [], 'group' => [], 'supergroup' => [], 'channel' => []]));
                        }
                    }
                    else $this->db = null;
                }
                else {
                    if (!isset($settings['db']['type'])) {
                        $settings['db']['type'] = 'json';
                    }
                    if ($settings['db']['type'] === 'sql') {
                        if (!isset($settings['db']['host'])) {
                            $settings['db']['host'] = 'localhost';
                        }
                        if (!isset($settings['db']['port'])) {
                            $settings['db']['port'] = 3306;
                        }
                        if (!isset($settings['db']['user'])) {
                            $this->logger('error', 'db user parameter not found , sql type need user parameter');
                            throw new exception('sql user parameter');
                        }
                        if (!isset($settings['db']['pass'])) {
                            $this->logger('error', 'db pass parameter not found , sql type need pass parameter');
                            throw new exception('sql pass parameter');
                        }
                        if (!isset($settings['db']['name'])) {
                            $this->logger('error', 'db name parameter not found , sql type need name parameter');
                            throw new exception('sql name parameter');
                        }
                        $db = new mysqli($settings['db']['host'], $settings['db']['user'], $settings['db']['pass'], $settings['db']['name'], $settings['db']['port']);
                        if ($db->errno) {
                            $this->logger('error', 'sql connection has problem , error : ' . $db->error);
                            throw new exception('sql connection problem');
                        }
                        $check = $db->query("SELECT `TABLE_NAME` FROM `information_schema`.`tables` WHERE `table_schema` = '{$settings['db']['name']}' AND `table_name` in ('private','chats','users')");
                        if ($check->num_rows < 3) {
                            $db->query("
CREATE TABLE IF NOT EXISTS `chats` (
    `id` bigint() NOT NULL,
    `type` enum('group','supergroup','channel') NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `private` (
    `id` bigint() NOT NULL,
    `last_active` int(11) NOT NULL DEFAULT 0,
    `phone_number` varchar(16) DEFAULT NULL,
    `step` varchar(32) DEFAULT NULL,
    `value` text DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `users` (
    `id` bigint() NOT NULL,
    `gid` bigint() NOT NULL,
    `last_active` int(11) NOT NULL DEFAULT 0,
    `step` varchar(32) DEFAULT NULL,
    `value` text DEFAULT NULL,
    PRIMARY KEY (`id`,`gid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
");
                        }
                        $this->db = $db;
                    }
                    elseif ($settings['db']['type'] === 'json') {
                        if (!isset($settings['db']['file_name'])) {
                            $settings['db']['file_name'] = 'BPT-DB.json';
                        }
                        $this->db = $settings['db'];
                        if (!file_exists($settings['db']['file_name'])) {
                            file_put_contents($settings['db']['file_name'], json_encode(['private' => [], 'group' => [], 'supergroup' => [], 'channel' => []]));
                        }
                    }
                    else {
                        $this->logger('error', 'Wrong db type , it must be json or sql in lowercase');
                        throw new exception('wrong db type');
                    }
                }
                if($settings['receive'] === 'webhook'){
                    if ($settings['multi']) {
                        if (!file_exists('BPT-M.look')) {
                            if (!file_exists('BPT-MC.look')) {
                                if (file_exists('BPT.look')) {
                                    unlink('BPT.look');
                                }
                                if (file_exists('getUpdate.lock')) {
                                    unlink('getUpdate.lock');
                                }
                                if (empty(!$settings['certificate'])) {
                                    $url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
                                }
                                else {
                                    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
                                    if (file_exists($settings['certificate'])) {
                                        $settings['certificate'] = new CURLFile($settings['certificate']);
                                    }
                                }
                                $file = basename($_SERVER['REQUEST_URI']);
                                $url2 = str_replace($file, 'receiver.php', $url);
                                if (function_exists('exec') && !in_array('exec', array_map('trim', explode(', ', ini_get('disable_functions')))) && strtolower(ini_get('safe_mode')) != 1) {
                                    file_put_contents('receiver.php', '<?php $BPT = file_get_contents("php://input");$id = json_decode($BPT, true)[\'update_id\'];file_put_contents("{$_SERVER[\'REMOTE_ADDR\']}-$id.update",$BPT);exec("php ' . $file . ' > /dev/null &");');
                                    $res = $this->setWebhook(['url' => $url2, 'allowed_updates' => json_encode($settings['allowed_updates']), 'max_connections' => $settings['max_connection'], 'certificate' => $settings['certificate']]);
                                    if ($res['ok'] === true) {
                                        $this->logger('info', 'webhook was set successfully');
                                        touch('BPT-M.look');
                                        die('webhook was setted');
                                    }
                                    else {
                                        $this->logger('error', "there is some problem with setWebhook , telegram response :\n" . json_encode($res));
                                        unlink('receiver.php');
                                        print_r($res);
                                        die();
                                    }
                                }
                                else {
                                    $url3 = str_replace($file, basename(__FILE__), $url);
                                    $times = [];
                                    for ($i = 0; $i < 10; $i ++) {
                                        $ch = curl_init($url3);
                                        curl_setopt_array($ch, [CURLOPT_POSTFIELDS => json_encode([]), CURLOPT_TIMEOUT_MS => 100, CURLOPT_NOBODY => true, CURLOPT_RETURNTRANSFER => true, CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST => false, CURLOPT_CONNECTTIMEOUT_MS => 100, CURLOPT_HTTPHEADER => ['accept: application/json', 'content-type: application/json']]);
                                        $start = microtime(true);
                                        curl_exec($ch);
                                        $times[] = ((microtime(true) - $start) * 1000);
                                    }
                                    $timeout = round(array_sum($times) / count($times));
                                    $timeout = $timeout > 50 ? $timeout + 10 : 50;
                                    file_put_contents('receiver.php', '<?php http_response_code(200);ignore_user_abort();$ch = curl_init(\'' . $url . '\');curl_setopt_array($ch, [CURLOPT_POSTFIELDS => json_encode([\'update\'=>file_get_contents(\'php://input\'),\'ip\'=>$_SERVER[\'REMOTE_ADDR\']]);, CURLOPT_TIMEOUT_MS => ' . $timeout . ', CURLOPT_RETURNTRANSFER => true, CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST => false, CURLOPT_CONNECTTIMEOUT_MS => ' . $timeout . ', CURLOPT_HTTPHEADER => [\'accept: application/json\', \'content-type: application/json\']]);curl_exec($ch);curl_close($ch);?>');
                                    $res = $this->setWebhook(['url' => $url2, 'allowed_updates' => json_encode($settings['allowed_updates']), 'max_connections' => $settings['max_connection'], 'certificate' => $settings['certificate']]);
                                    if ($res['ok'] === true) {
                                        $this->logger('info', 'webhook was set successfully');
                                        touch('BPT-MC.look');
                                        die('webhook was setted');
                                    }
                                    else {
                                        $this->logger('error', "there is some problem with setWebhook , telegram response :\n" . json_encode($res));
                                        unlink('receiver.php');
                                        print_r($res);
                                        die();
                                    }
                                }
                            }
                            elseif ($_SERVER['REMOTE_ADDR'] !== $_SERVER['SERVER_ADDR']) {
                                $this->logger('warning', 'not authorized access denied');
                                die("<div style='width:98vw;height:98vh;display:flex;justify-content:center;align-items:center;font-size:25vw'>BPT</div>");
                            }
                            else {
                                $input = json_decode(file_get_contents("php://input"), true);
                                $ip = $input['ip'];
                                if ($settings['telegram_verify'] && !$this->isTelegram(['ip' => $ip])) {
                                    $this->logger('warning', 'not authorized access denied');
                                    die("<div style='width:98vw;height:98vh;display:flex;justify-content:center;align-items:center;font-size:25vw'>BPT</div>");
                                }
                                $updates = $input['update'];
                            }
                        }
                        else {
                            $up = glob('*.update');
                            if (isset($up[0])) {
                                $up = end($up);
                                $ip = explode('-', $up)[0];
                                if ($settings['telegram_verify'] && !$this->isTelegram(['ip' => $ip])) {
                                    $this->logger('warning', 'not authorized access denied');
                                    die("<div style='width:98vw;height:98vh;display:flex;justify-content:center;align-items:center;font-size:25vw'>BPT</div>");
                                }
                                $updates = file_get_contents($up);
                                unlink($up);
                            }
                            else {
                                $this->logger('error', 'not authorized access denied');
                                die("<div style='width:98vw;height:98vh;display:flex;justify-content:center;align-items:center;font-size:25vw'>BPT</div>");
                            }
                        }
                    }
                    else {
                        if (!file_exists('BPT.look')) {
                            if (file_exists('BPT-M.look')) {
                                unlink('BPT-M.look');
                            }
                            if (file_exists('BPT-MC.look')) {
                                unlink('BPT-MC.look');
                            }
                            if (file_exists('getUpdate.lock')) {
                                unlink('getUpdate.lock');
                            }
                            if (empty($settings['certificate'])) {
                                $url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
                            }
                            else {
                                $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
                                if (file_exists($settings['certificate'])) {
                                    $settings['certificate'] = new CURLFile($settings['certificate']);
                                }
                            }
                            $res = $this->setWebhook(['url' => $url, 'allowed_updates' => json_encode($settings['allowed_updates']), 'max_connections' => $settings['max_connection'], 'certificate' => $settings['certificate']]);
                            if ($res['ok'] === true) {
                                touch('BPT.look');
                                $this->logger('info', 'webhook was set successfully');
                                die('Done');
                            }
                            else {
                                $this->logger('error', "there is some problem with setWebhook , telegram response :\n" . json_encode($res));
                                print_r($res);
                                die();
                            }
                        }
                        else {
                            if ($settings['telegram_verify']) {
                                if (!$this->isTelegram(['ip' => $_SERVER['REMOTE_ADDR']])) {
                                    $this->logger('warning', 'not authorized access denied');
                                    die("<div style='width:98vw;height:98vh;display:flex;justify-content:center;align-items:center;font-size:25vw'>BPT</div>");
                                }
                            }
                            $updates = file_get_contents("php://input");
                        }
                    }
                    $update = json_decode($updates, $settings['array_update']);
                    if ($update) {
                        $this->update = json_decode($updates);
                        $this->logger('', "BPT update received");
                        if ($settings['handler']) {
                            if ($settings['split_update']) {
                                $message_update = method_exists($this, 'message');
                                $inline_query = method_exists($this, 'inline_query');
                                $callback_query = method_exists($this, 'callback_query');
                                $edited_message = method_exists($this, 'edited_message');
                                $something_else = method_exists($this, 'something_else');
                            }
                            else {
                                $all = method_exists($this, 'all');
                            }
                            if ($settings['split_update'] || !$all) {
                                if (!$all && !$settings['split_update']) {
                                    $this->logger('warning', " If you want use the library with out split update , you most define `all` method in handler");
                                }
                                if ($settings['array_update']) {
                                    if (isset($update['message']) && $message_update === true) {
                                        $message = $update['message'];
                                        if ($settings['security']) {
                                            $message['text'] = htmlentities(strip_tags(htmlspecialchars(stripslashes(trim($message['text'])))));
                                        }
                                        $this->users($message, 'message');
                                        $this->message($message);
                                    }
                                    elseif (isset($update['callback_query']) && $callback_query === true) {
                                        $this->users($update['callback_query'], 'callback');
                                        $this->callback_query($update['callback_query']);
                                    }
                                    elseif (isset($update['inline_query']) && $inline_query === true) {
                                        $this->users($update['inline_query'], 'inline');
                                        $this->inline_query($update['inline_query']);
                                    }
                                    elseif (isset($update['edited_message']) && $edited_message === true) {
                                        $this->users($update['edited_message'], 'edit');
                                        $this->edited_message($update['edited_message']);
                                    }
                                    elseif ($something_else === true) {
                                        $this->something_else($update);
                                    }
                                }
                                else {
                                    if (isset($update->message) && $message_update === true) {
                                        $message = $update->message;
                                        if ($settings['security']) {
                                            $message->text = htmlentities(strip_tags(htmlspecialchars(stripslashes(trim($message->text)))));
                                        }
                                        $this->users($message, 'message');
                                        $this->message($message);
                                    }
                                    elseif (isset($update->callback_query) && $callback_query === true) {
                                        $this->users($update->callback_query, 'callback');
                                        $this->callback_query($update->callback_query);
                                    }
                                    elseif (isset($update->inline_query) && $inline_query === true) {
                                        $this->users($update->inline_query, 'inline');
                                        $this->inline_query($update->inline_query);
                                    }
                                    elseif (isset($update->edited_message) && $edited_message === true) {
                                        $this->users($update->edited_message, 'edit');
                                        $this->edited_message($update->edited_message);
                                    }
                                    elseif ($something_else === true) {
                                        $this->something_else($update);
                                    }
                                }
                            }
                            elseif ($all === true) {
                                $this->all($update);
                            }
                        }
                    }
                }
                elseif ($settings['receive'] === 'getupdates') {
                    if ($settings['handler']) {
                        if (file_exists('getUpdate.lock')) {
                            $last_update = file_get_contents('getUpdate.lock');
                        }
                        else {
                            if (file_exists('BPT.look')) {
                                unlink('BPT.look');
                            }
                            if (file_exists('BPT-M.look')) {
                                unlink('BPT-M.look');
                            }
                            if (file_exists('BPT-MC.look')) {
                                unlink('BPT-MC.look');
                            }
                            $this->deleteWebhook();
                            $last_update = 0;
                        }
                        if ($settings['split_update']) {
                            $message_update = method_exists($this, 'message');
                            $inline_query = method_exists($this, 'inline_query');
                            $callback_query = method_exists($this, 'callback_query');
                            $edited_message = method_exists($this, 'edited_message');
                            $something_else = method_exists($this, 'something_else');
                        }
                        else {
                            $all = method_exists($this, 'all');
                        }
                        while (true){
                            $updates = $this->getUpdates(['allowed_updates' => json_encode($settings['allowed_updates']), 'offset' => $last_update, 'return_array' => $settings['array_update']]);
                            if ($settings['array_update']) {
                                $updates = $updates['result'];
                            }
                            else {
                                $updates = $updates->result;
                            }
                            foreach ($updates as $update) {
                                if ($settings['array_update']) {
                                    $this->update = json_decode(json_encode($update));
                                    if ($settings['split_update']) {
                                        if (isset($update['message']) && $message_update === true) {
                                            $message = $update['message'];
                                            if ($settings['security']) {
                                                $message['text'] = htmlentities(strip_tags(htmlspecialchars(stripslashes(trim($message['text'])))));
                                            }
                                            $this->users($message, 'message');
                                            $this->message($message);
                                        }
                                        elseif (isset($update['callback_query']) && $callback_query === true) {
                                            $this->users($update['callback_query'], 'callback');
                                            $this->callback_query($update['callback_query']);
                                        }
                                        elseif (isset($update['inline_query']) && $inline_query === true) {
                                            $this->users($update['inline_query'], 'inline');
                                            $this->inline_query($update['inline_query']);
                                        }
                                        elseif (isset($update['edited_message']) && $edited_message === true) {
                                            $this->users($update['edited_message'], 'edit');
                                            $this->edited_message($update['edited_message']);
                                        }
                                        elseif ($something_else === true) {
                                            $this->something_else($update);
                                        }
                                    }
                                    elseif ($all === true) {
                                        $this->all($update);
                                    }
                                    file_put_contents('getUpdate.lock', $update['update_id']+1);
                                    $last_update = $update['update_id']+1;
                                }
                                else {
                                    $this->update = $update;
                                    if ($settings['split_update']) {
                                        if (isset($update->message) && $message_update === true) {
                                            $message = $update->message;
                                            if ($settings['security']) {
                                                $message->text = htmlentities(strip_tags(htmlspecialchars(stripslashes(trim($message->text)))));
                                            }
                                            $this->users($message, 'message');
                                            $this->message($message);
                                        }
                                        elseif (isset($update->callback_query) && $callback_query === true) {
                                            $this->users($update->callback_query, 'callback');
                                            $this->callback_query($update->callback_query);
                                        }
                                        elseif (isset($update->inline_query) && $inline_query === true) {
                                            $this->users($update->inline_query, 'inline');
                                            $this->inline_query($update->inline_query);
                                        }
                                        elseif (isset($update->edited_message) && $edited_message === true) {
                                            $this->users($update->edited_message, 'edit');
                                            $this->edited_message($update->edited_message);
                                        }
                                        elseif ($something_else === true) {
                                            $this->something_else($update);
                                        }
                                    }
                                    elseif ($all === true) {
                                        $this->all($update);
                                    }
                                    file_put_contents('getUpdate.lock', $update->update_id+1);
                                    $last_update = $update->update_id+1;
                                }
                            }
                        }
                    }
                    else {
                        $this->logger('error', 'you can\'t use getupdates receiver when handler is off');
                        throw new exception('getupdates not allowed');
                    }
                }
            }
            else {
                $this->logger('error', 'token format is not true');
                throw new exception('token is not true');
            }
        }
        else {
            $this->logger('error', 'token not found');
            throw new exception('token missing');
        }
    }

    public function __destruct() {
        if(is_resource(LOG)) {
            $this->logger('',"BPT Done");
        }
    }

    public function __call ($action, $data) {
        if (isset($data[0])) $data = $data[0];
        else $data = [];
        $req_action = str_replace('_', '', strtolower($action));
        $action = $this->methodsAction($req_action);
        if (!empty($action)) {
            $defaults = $this->methodsDefault($action);
            foreach ($defaults as $key => $default) {
                if (is_numeric($key)) {
                    if (!isset($data[$default])){
                        $data[$default] = $this->catchFields(['field' => $default]);
                    }
                }
                elseif (isset($update->$key)) {
                    foreach ($default as $def) {
                        if (!isset($data[$def])){
                            $data[$def] = $this->catchFields(['field' => $def]);
                        }
                    }
                    break;
                }
                elseif ($key === 'other'){
                    foreach ($default as $def) {
                        if (!isset($data[$def])){
                            $data[$def] = $this->catchFields(['field' => $def]);
                        }
                    }
                }
            }
            if ($this->settings['debug']) {
                $requires = $this->methodsRequire($action);
                $req_param = [];
                foreach ($requires as $require) {
                    if (!isset($data[$require])) {
                        $req_param[] = $require;
                    }
                }
                if (count($req_param) > 0){
                    $this->logger('error', "required parameter for this method is not founded.\ninfo : these req parameters are not set :" . json_encode($req_param));
                    throw new exception('required parameters not found');
                }
            }
            if ($req_action === 'kick') {
                if (isset($data['only_if_banned'])) {
                    unset($data['only_if_banned']);
                }
            }
            if (isset($data['answer'])) {
                if (!$this->web_answered) {
                    if ($this->settings['multi'] === true) {
                        $this->logger('error', 'you can\'t use answer mode when multi is on');
                        throw new exception('answer mode not allowed bc multi');
                    }
                    if (isset($data['token'])) {
                        unset($data['token']);
                    }
                    if (isset($data['forgot'])) {
                        unset($data['forgot']);
                    }
                    if (isset($data['return_array'])) {
                        unset($data['return_array']);
                    }
                    $this->web_answered = true;
                    $data["method"] = $action;
                    $payload = json_encode($data);
                    header('Content-Type: application/json;Content-Length: ' . strlen($payload));
                    echo $payload;
                    return true;
                }
                else {
                    $this->logger('error', 'you can use answer mode only once for each webhook update and you already did');
                    throw new exception('answer mode not allowed');
                }
            }
            else {
                $ch = curl_init();
                $token = $this->token;
                $return_array = true;
                if (isset($data['token'])) {
                    $token = $data['token'];
                    unset($data['token']);
                }
                if (isset($data['forgot'])) {
                    curl_setopt($ch, CURLOPT_TIMEOUT_MS, $this->settings['forgot_time']);
                    unset($data['forgot']);
                }
                if (isset($data['return_array'])) {
                    $return_array = $data['return_array'];
                    unset($data['return_array']);
                }
                if ($action === 'sendMediaGroup') {
                    foreach ($data['media'] as $key => $media) {
                        if (file_exists($media['media'])) {
                            $data['media'][$key] = new CURLFile($media['media']);
                        }
                    }
                }
                else {
                    $file_params = $this->methodsFile($action);
                    foreach ($file_params as $param) {
                        if (isset($data[$param]) && file_exists($data[$param])) {
                            $data[$param] = new CURLFile($data[$param]);
                        }
                    }
                }
                curl_setopt($ch, CURLOPT_URL, "{$this->settings['base_url']}$token/$action");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                return json_decode(curl_exec($ch), $return_array);
            }
        }
        else {
            $this->logger('error', "requested method is not exist(method : $action)");
            throw new exception('method not found');
        }
    }

    private function methodsAction($input){
        return [
            'getupdates'                      =>'getUpdates',
            'getup'                           =>'getUpdates',
            'updates'                         =>'getUpdates',
            'setwebhook'                      =>'setWebhook',
            'setweb'                          =>'setWebhook',
            'webhook'                         =>'setWebhook',
            'deletewebhook'                   =>'deleteWebhook',
            'deleteweb'                       =>'deleteWebhook',
            'delweb'                          =>'deleteWebhook',
            'getwebhookinfo'                  =>'getWebhookInfo',
            'getweb'                          =>'getWebhookInfo',
            'getme'                           =>'getMe',
            'me'                              =>'getMe',
            'logout'                          =>'logOut',
            'close'                           =>'close',
            'sendmessage'                     =>'sendMessage',
            'send'                            =>'sendMessage',
            'forwardmessage'                  =>'forwardMessage',
            'forward'                         =>'forwardMessage',
            'copymessage'                     =>'copyMessage',
            'copy'                            =>'copyMessage',
            'sendphoto'                       =>'sendPhoto',
            'photo'                           =>'sendPhoto',
            'sendaudio'                       =>'sendAudio',
            'audio'                           =>'sendAudio',
            'senddocument'                    =>'sendDocument',
            'senddoc'                         =>'sendDocument',
            'document'                        =>'sendDocument',
            'doc'                             =>'sendDocument',
            'sendvideo'                       =>'sendVideo',
            'video'                           =>'sendVideo',
            'sendanimation'                   =>'sendAnimation',
            'animation'                       =>'sendAnimation',
            'sendgif'                         =>'sendAnimation',
            'gif'                             =>'sendAnimation',
            'sendvoice'                       =>'sendVoice',
            'voice'                           =>'sendVoice',
            'sendvideonote'                   =>'sendVideoNote',
            'videonote'                       =>'sendVideoNote',
            'sendmediagroup'                  =>'sendMediaGroup',
            'mediagroup'                      =>'sendMediaGroup',
            'media'                           =>'sendMediaGroup',
            'sendlocation'                    =>'sendLocation',
            'sendloc'                         =>'sendLocation',
            'location'                        =>'sendLocation',
            'loc'                             =>'sendLocation',
            'editmessagelivelocation'         =>'editMessageLiveLocation',
            'editliveloc'                     =>'editMessageLiveLocation',
            'stopmessagelivelocation'         =>'stopMessageLiveLocation',
            'stopliveloc'                     =>'stopMessageLiveLocation',
            'sendvenue'                       =>'sendVenue',
            'venue'                           =>'sendVenue',
            'sendcontact'                     =>'sendContact',
            'contact'                         =>'sendContact',
            'sendpoll'                        =>'sendPoll',
            'poll'                            =>'sendPoll',
            'senddice'                        =>'sendDice',
            'dice'                            =>'sendDice',
            'sendchataction'                  =>'sendChatAction',
            'chataction'                      =>'sendChatAction',
            'action'                          =>'sendChatAction',
            'getuserprofilephotos'            =>'getUserProfilePhotos',
            'userphotos'                      =>'getUserProfilePhotos',
            'getfile'                         =>'getFile',
            'file'                            =>'getFile',
            'banchatmember'                   =>'banChatMember',
            'ban'                             =>'banChatMember',
            'kickchatmember'                  =>'banChatMember',
            'kick'                            =>'unbanChatMember',
            'unbanchatmember'                 =>'unbanChatMember',
            'unban'                           =>'unbanChatMember',
            'restrictchatmember'              =>'restrictChatMember',
            'restrict'                        =>'restrictChatMember',
            'promotechatmember'               =>'promoteChatMember',
            'promote'                         =>'promoteChatMember',
            'setchatadministratorcustomtitle' =>'setChatAdministratorCustomTitle',
            'customtitle'                     =>'setChatAdministratorCustomTitle',
            'banchatsenderchat'               =>'banChatSenderChat',
            'banSender'                       =>'banChatSenderChat',
            'unbanchatsenderchat'             =>'unbanChatSenderChat',
            'unbanSender'                     =>'unbanChatSenderChat',
            'setchatpermissions'              =>'setChatPermissions',
            'permissions'                     =>'setChatPermissions',
            'exportchatinvitelink'            =>'exportChatInviteLink',
            'link'                            =>'exportChatInviteLink',
            'createchatinvitelink'            =>'createChatInviteLink',
            'crlink'                          =>'createChatInviteLink',
            'editchatinvitelink'              =>'editChatInviteLink',
            'edlink'                          =>'editChatInviteLink',
            'revokechatinvitelink'            =>'revokeChatInviteLink',
            'relink'                          =>'revokeChatInviteLink',
            'approvechatjoinrequest'          =>'approveChatJoinRequest',
            'acceptjoin'                      =>'approveChatJoinRequest',
            'declinechatjoinrequest'          =>'declineChatJoinRequest',
            'denyjoin'                        =>'declineChatJoinRequest',
            'setchatphoto'                    =>'setChatPhoto',
            'deletechatphoto'                 =>'deleteChatPhoto',
            'setchattitle'                    =>'setChatTitle',
            'title'                           =>'setChatTitle',
            'setchatdescription'              =>'setChatDescription',
            'description'                     =>'setChatDescription',
            'pinchatmessage'                  =>'pinChatMessage',
            'pin'                             =>'pinChatMessage',
            'unpinchatmessage'                =>'unpinChatMessage',
            'unpin'                           =>'unpinChatMessage',
            'unpinallchatmessages'            =>'unpinAllChatMessages',
            'unpinall'                        =>'unpinAllChatMessages',
            'leavechat'                       =>'leaveChat',
            'leave'                           =>'leaveChat',
            'getchat'                         =>'getChat',
            'chat'                            =>'getChat',
            'getchatadministrators'           =>'getChatAdministrators',
            'admins'                          =>'getChatAdministrators',
            'getchatmembercount'              =>'getChatMembersCount',
            'getchatmemberscount'             =>'getChatMembersCount',
            'memberscount'                    =>'getChatMembersCount',
            'getchatmember'                   =>'getChatMember',
            'member'                          =>'getChatMember',
            'setchatstickerset'               =>'setChatStickerSet',
            'setsticker'                      =>'setChatStickerSet',
            'deletechatstickerset'            =>'deleteChatStickerSet',
            'delsticker'                      =>'deleteChatStickerSet',
            'answercallbackquery'             =>'answerCallbackQuery',
            'answer'                          =>'answerCallbackQuery',
            'setmycommands'                   =>'setMyCommands',
            'setcommands'                     =>'setMyCommands',
            'deletemycommands'                =>'deleteMyCommands',
            'deletecommands'                  =>'deleteMyCommands',
            'getmycommands'                   =>'getMyCommands',
            'getcommands'                     =>'getMyCommands',
            'editmessagetext'                 =>'editMessageText',
            'edittext'                        =>'editMessageText',
            'editmessagecaption'              =>'editMessageCaption',
            'editcap'                         =>'editMessageCaption',
            'editcaption'                     =>'editMessageCaption',
            'editmessagemedia'                =>'editMessageMedia',
            'editmedia'                       =>'editMessageMedia',
            'editmessagereplymarkup'          =>'editMessageReplyMarkup',
            'editreply'                       =>'editMessageReplyMarkup',
            'editkeyboard'                    =>'editMessageReplyMarkup',
            'stoppoll'                        =>'stopPoll',
            'deletemessage'                   =>'deleteMessage',
            'del'                             =>'deleteMessage',
            'sendsticker'                     =>'sendSticker',
            'sticker'                         =>'sendSticker',
            'getstickerset'                   =>'getStickerSet',
            'uploadstickerfile'               =>'uploadStickerFile',
            'uploadsticker'                   =>'uploadStickerFile',
            'createnewstickerset'             =>'createNewStickerSet',
            'createsticker'                   =>'createNewStickerSet',
            'addstickertoset'                 =>'addStickerToSet',
            'addsticker'                      =>'addStickerToSet',
            'setstickerpositioninset'         =>'setStickerPositionInSet',
            'setstickerposition'              =>'setStickerPositionInSet',
            'setstickerpos'                   =>'setStickerPositionInSet',
            'deletestickerfromset'            =>'deleteStickerFromSet',
            'deletesticker'                   =>'deleteStickerFromSet',
            'setstickersetthumb'              =>'setStickerSetThumb',
            'setstickerthumb'                 =>'setStickerSetThumb',
            'answerinlinequery'               =>'answerInlineQuery',
            'answerinline'                    =>'answerInlineQuery',
            'sendinvoice'                     =>'sendInvoice',
            'invoice'                         =>'sendInvoice',
            'answershippingquery'             =>'answerShippingQuery',
            'answershipping'                  =>'answerShippingQuery',
            'answerprecheckoutquery'          =>'answerPreCheckoutQuery',
            'answerprecheckout'               =>'answerPreCheckoutQuery',
            'answerprecheck'                  =>'answerPreCheckoutQuery',
            'setpassportdataerrors'           =>'setPassportDataErrors',
            'setpassport'                     =>'setPassportDataErrors',
            'sendgame'                        =>'sendGame',
            'game'                            =>'sendGame',
            'setgamescore'                    =>'setGameScore',
            'gamescore'                       =>'setGameScore',
            'getgamehighscores'               =>'getGameHighScores',
            'getgamehigh'                     =>'getGameHighScores'
        ][$input]??'';
    }

    private function methodsDefault($input){
        return [
            'getUpdates'                      => [],
            'setWebhook'                      => [],
            'deleteWebhook'                   => [],
            'getWebhookInfo'                  => [],
            'getMe'                           => [],
            'logOut'                          => [],
            'close'                           => [],
            'sendMessage'                     => ['chat_id'],
            'forwardMessage'                  => ['from_chat_id','message_id'],
            'copyMessage'                     => ['from_chat_id','message_id'],
            'sendPhoto'                       => ['chat_id'],
            'sendAudio'                       => ['chat_id'],
            'sendDocument'                    => ['chat_id'],
            'sendVideo'                       => ['chat_id'],
            'sendAnimation'                   => ['chat_id'],
            'sendVoice'                       => ['chat_id'],
            'sendVideoNote'                   => ['chat_id'],
            'sendMediaGroup'                  => ['chat_id'],
            'sendLocation'                    => ['chat_id'],
            'editMessageLiveLocation'         => [],
            'stopMessageLiveLocation'         => [],
            'sendVenue'                       => [],
            'sendContact'                     => ['chat_id'],
            'sendPoll'                        => ['chat_id'],
            'sendDice'                        => ['chat_id'],
            'sendChatAction'                  => ['chat_id','action'],
            'getUserProfilePhotos'            => ['user_id'],
            'getFile'                         => ['file_id'],
            'banChatMember'                   => ['chat_id','user_id'],
            'kickChatMember'                  => ['chat_id','user_id'],
            'unbanChatMember'                 => ['chat_id','user_id'],
            'restrictChatMember'              => ['chat_id','user_id'],
            'promoteChatMember'               => ['chat_id','user_id'],
            'setChatAdministratorCustomTitle' => ['chat_id','user_id'],
            'banChatSenderChat'               => ['chat_id'],
            'unbanChatSenderChat'             => ['chat_id'],
            'setChatPermissions'              => ['chat_id'],
            'exportChatInviteLink'            => ['chat_id'],
            'createChatInviteLink'            => ['chat_id'],
            'editChatInviteLink'              => ['chat_id'],
            'revokeChatInviteLink'            => ['chat_id'],
            'approveChatJoinRequest'          => ['chat_id','user_id'],
            'declineChatJoinRequest'          => ['chat_id','user_id'],
            'setChatPhoto'                    => ['chat_id'],
            'deleteChatPhoto'                 => ['chat_id'],
            'setChatTitle'                    => ['chat_id'],
            'setChatDescription'              => ['chat_id'],
            'pinChatMessage'                  => ['chat_id'],
            'unpinChatMessage'                => ['chat_id'],
            'unpinAllChatMessages'            => ['chat_id'],
            'leaveChat'                       => ['chat_id'],
            'getChat'                         => ['chat_id'],
            'getChatAdministrators'           => ['chat_id'],
            'getChatMembersCount'             => ['chat_id'],
            'getChatMember'                   => ['chat_id','user_id'],
            'setChatStickerSet'               => ['chat_id'],
            'deleteChatStickerSet'            => ['chat_id'],
            'answerCallbackQuery'             => ['callback_query_id'],
            'setMyCommands'                   => [],
            'deleteMyCommands'                => [],
            'getMyCommands'                   => [],
            'editMessageText'                 => ['inline_query'=>['inline_message_id'],'other'=>['chat_id','message_id']],
            'editMessageCaption'              => ['inline_query'=>['inline_message_id'],'other'=>['chat_id','message_id']],
            'editMessageMedia'                => ['inline_query'=>['inline_message_id'],'other'=>['chat_id','message_id']],
            'editMessageReplyMarkup'          => ['inline_query'=>['inline_message_id'],'other'=>['chat_id','message_id']],
            'stopPoll'                        => ['chat_id','message_id'],
            'deleteMessage'                   => ['chat_id','message_id'],
            'sendSticker'                     => ['chat_id'],
            'getStickerSet'                   => [],
            'uploadStickerFile'               => ['user_id'],
            'createNewStickerSet'             => ['user_id'],
            'addStickerToSet'                 => ['user_id'],
            'setStickerPositionInSet'         => [],
            'deleteStickerFromSet'            => [],
            'setStickerSetThumb'              => ['user_id'],
            'answerInlineQuery'               => ['inline_query_id'],
            'sendInvoice'                     => ['chat_id'],
            'answerShippingQuery'             => ['shipping_query_id'],
            'answerPreCheckoutQuery'          => ['pre_checkout_query_id'],
            'setPassportDataErrors'           => ['user_id'],
            'sendGame'                        => ['chat_id'],
            'setGameScore'                    => ['user_id','inline_query'=>['inline_message_id'],'other'=>['chat_id','message_id']],
            'getGameHighScores'               => ['user_id','inline_query'=>['inline_message_id'],'other'=>['chat_id','message_id']]
        ][$input]??[];
    }

    private function methodsRequire($input){
        return [
                'getUpdates'                      => [],
                'setWebhook'                      => [],
                'deleteWebhook'                   => [],
                'getWebhookInfo'                  => [],
                'getMe'                           => [],
                'logOut'                          => [],
                'close'                           => [],
                'sendMessage'                     => ['text'],
                'forwardMessage'                  => ['chat_id'],
                'copyMessage'                     => ['chat_id'],
                'sendPhoto'                       => ['photo'],
                'sendAudio'                       => ['audio'],
                'sendDocument'                    => ['document'],
                'sendVideo'                       => ['video'],
                'sendAnimation'                   => ['animation'],
                'sendVoice'                       => ['voice'],
                'sendVideoNote'                   => ['video_note'],
                'sendMediaGroup'                  => ['media'],
                'sendLocation'                    => ['latitude','longitude'],
                'editMessageLiveLocation'         => ['latitude','longitude'],
                'stopMessageLiveLocation'         => [],
                'sendVenue'                       => ['latitude','longitude','title','address'],
                'sendContact'                     => ['phone_number','first_name'],
                'sendPoll'                        => ['question','options'],
                'sendDice'                        => [],
                'sendChatAction'                  => [],
                'getUserProfilePhotos'            => [],
                'getFile'                         => [],
                'banChatMember'                   => [],
                'kickChatMember'                  => [],
                'unbanChatMember'                 => [],
                'restrictChatMember'              => ['permissions'],
                'promoteChatMember'               => [],
                'setChatAdministratorCustomTitle' => ['custom_title'],
                'banChatSenderChat'               => ['sender_chat_id'],
                'unbanChatSenderChat'             => ['sender_chat_id'],
                'setChatPermissions'              => ['permissions'],
                'exportChatInviteLink'            => [],
                'createChatInviteLink'            => [],
                'editChatInviteLink'              => ['invite_link'],
                'revokeChatInviteLink'            => ['invite_link'],
                'approveChatJoinRequest'          => [],
                'declineChatJoinRequest'          => [],
                'setChatPhoto'                    => ['photo'],
                'deleteChatPhoto'                 => [],
                'setChatTitle'                    => ['title'],
                'setChatDescription'              => [],
                'pinChatMessage'                  => [],
                'unpinChatMessage'                => [],
                'unpinAllChatMessages'            => [],
                'leaveChat'                       => [],
                'getChat'                         => [],
                'getChatAdministrators'           => [],
                'getChatMembersCount'             => [],
                'getChatMember'                   => [],
                'setChatStickerSet'               => ['sticker_set_name'],
                'deleteChatStickerSet'            => [],
                'answerCallbackQuery'             => [],
                'setMyCommands'                   => ['commands'],
                'deleteMyCommands'                => [],
                'getMyCommands'                   => [],
                'editMessageText'                 => ['text',],
                'editMessageCaption'              => [],
                'editMessageMedia'                => ['media',],
                'editMessageReplyMarkup'          => [],
                'stopPoll'                        => [],
                'deleteMessage'                   => [],
                'sendSticker'                     => ['sticker'],
                'getStickerSet'                   => ['name'],
                'uploadStickerFile'               => ['png_sticker'],
                'createNewStickerSet'             => ['name','title','emojis'],
                'addStickerToSet'                 => ['name','emojis'],
                'setStickerPositionInSet'         => ['position','sticker'],
                'deleteStickerFromSet'            => ['sticker'],
                'setStickerSetThumb'              => ['name'],
                'answerInlineQuery'               => ['results'],
                'sendInvoice'                     => ['title','description','payload','provider_token','currency','prices'],
                'answerShippingQuery'             => ['ok'],
                'answerPreCheckoutQuery'          => ['ok'],
                'setPassportDataErrors'           => ['errors'],
                'sendGame'                        => ['game_short_name'],
                'setGameScore'                    => ['score'],
                'getGameHighScores'               => []
            ][$input]??[];
    }

    private function methodsFile($input){
        return [
            'sendPhoto'           => ['photo'],
            'sendAudio'           => ['audio', 'thumb'],
            'sendDocument'        => ['document', 'thumb'],
            'sendVideo'           => ['video', 'thumb'],
            'sendAnimation'       => ['animation', 'thumb'],
            'sendVoice'           => ['voice', 'thumb'],
            'sendVideoNote'       => ['video_note', 'thumb'],
            'setChatPhoto'        => ['photo'],
            'sendSticker'         => ['sticker'],
            'uploadStickerFile'   => ['png_sticker'],
            'createNewStickerSet' => ['png_sticker', 'tgs_sticker'],
            'addStickerToSet'     => ['png_sticker', 'tgs_sticker'],
            'setStickerSetThumb'  => ['thumb'],
        ][$input]??[];
    }

    private function bptUpdate(){
        if(!file_exists('update.lock') || filemtime('update.lock')+60 < time()){
            touch('update.lock');
            $res = file_get_contents("https://dl.bptlib.ir/update.php?ver=$this->version");
            if($res !== '[]'){
                $res = json_decode($res,true);
                if (isset($res['file'])){
                    copy('https://dl.bptlib.ir/BPT.php','BPT.php');
                }
            }
        }
    }

    private function logger($type,$text){
        if($this->settings['logger']){
            if($type === '') fwrite(LOG, date('Y/m/d H:i:s') . " : $text\n");
            else fwrite(LOG, date('Y/m/d H:i:s') . " : ⤵\n$type : $text\n");
        }
    }

    private function users($update, $a) {
        if(!empty($this->db)){
            if($this->settings['db']['type'] === 'json'){
                $BPT_DB = json_decode(file_get_contents($this->settings['db']['file_name']), true);
                if($a === 'message' || $a === 'edit') {
                    if ($this->settings['array_update']){
                        $type = $update['chat']['type'];
                        $id = $update['chat']['id'];
                        $user_id = $update['from']['id'];
                        if (isset($update['left_chat_member'])) $left = $update['left_chat_member'];
                        elseif (isset($update['new_chat_members'])) $news = $update['new_chat_members'];
                    }else{
                        $type = $update->chat->type;
                        $id = $update->chat->id;
                        $user_id = $update->from->id;
                        if (isset($update->left_chat_member)) $left = $update->left_chat_member;
                        elseif (isset($update->new_chat_members)) $news = $update->new_chat_members;
                    }
                    if(!isset($BPT_DB[$type][$id])) $BPT_DB[$type][$id] = [];
                    if ($type !== 'private'){
                        if (isset($left)){
                            $user_id = $left['id'] ?? $left->id;
                            $BPT_DB[$type][$id]['users'][$user_id]['leaved'] = true;
                        }
                        elseif (isset($news)){
                            foreach ($news as $user){
                                $user_id = $user['id'] ?? $user->id;
                                if (!isset($BPT_DB[$type][$id]['users'][$user_id])) $BPT_DB[$type][$id]['users'][$user_id] = [];
                                else unset($BPT_DB[$type][$id]['users'][$user_id]['leaved']);
                            }
                        }
                        elseif (!isset($BPT_DB[$type][$id]['users'][$user_id])) $BPT_DB[$type][$id]['users'][$user_id] = [];
                        $BPT_DB[$type][$id]['users'][$user_id]['last_active'] = time();
                    }
                    else $BPT_DB[$type][$id]['last_active'] = time();
                }
                elseif($a === 'inline') {
                    $id = $update['from']['id'] ?? $update->from->id;
                    if(!isset($BPT_DB['private'][$id])) $BPT_DB['private'][$id] = ['last_active'=>time()];
                    else $BPT_DB['private'][$id]['last_active'] = time();
                }
                elseif($a === 'callback') {
                    $type = $update['message']['chat']['type'] ?? $update->message->chat->type;
                    $id = $update['message']['chat']['id'] ?? $update->message->chat->id;
                    $user_id = $update['from']['id'] ?? $update->from->id;
                    if(!isset($BPT_DB[$type][$id])) $BPT_DB[$type][$id] = [];
                    if ($type !== 'private'){
                        if (!isset($BPT_DB[$type][$id]['users'][$user_id])) $BPT_DB[$type][$id]['users'][$user_id] = [];
                        $BPT_DB[$type][$id]['users'][$user_id]['last_active'] = time();
                    }
                    else $BPT_DB[$type][$id]['last_active'] = time();
                }
                file_put_contents($this->settings['db']['file_name'], json_encode($BPT_DB));
            }
            elseif($this->settings['db']['type'] === 'sql'){
                if($a === 'message' || $a === 'edit') {
                    $type = $update['chat']['type'] ?? $update->chat->type;
                    $id = $update['chat']['id'] ?? $update->chat->id;
                    $user_id = $update['from']['id'] ?? $update->from->id;
                    if ($type === 'private'){
                        $info = $this->db->query("select * from `private` where `id` = $user_id")->num_rows;
                        if ($info < 1) $this->db->query("INSERT INTO `private`(`id`) VALUES ($user_id)");
                        else $this->db->query("update `private` set `last_active` = ".time()." where `id` = $user_id");
                    }else{
                        $info = $this->db->query("select * from `chats` where `id` = $id")->num_rows;
                        if ($info < 1) $this->db->query("INSERT INTO `chats`(`id`,`type`) VALUES ($id,'$type')");
                        else{
                            $time = time();
                            $info = $this->db->query("select * from `users` where `id` = $id and `gid` = $id")->num_rows;
                            if ($info < 1) $this->db->query("INSERT INTO `users`(`id`,`gid`,`last_active`) VALUES ($id,'$type',$time)");
                            else $this->db->query("update `users` set `last_active` = $time where `id` = $user_id and `gid` = $id");
                        }
                    }
                }
                elseif($a === 'inline') {
                    $id = $update['from']['id'] ?? $update->from->id;
                    $info = $this->db->query("select * from `private` where `id` = $id")->num_rows;
                    if ($info < 1) $this->db->query("INSERT INTO `private`(`id`) VALUES ($id)");
                    else $this->db->query("update `private` set `last_active` = ".time()." where `id` = $id");
                }
                elseif($a === 'callback') {
                    $type = $update['message']['chat']['type'] ?? $update->message->chat->type;
                    $id = $update['message']['chat']['id'] ?? $update->message->chat->id;
                    $user_id = $update['from']['id'] ?? $update->from->id;
                    if ($type === 'private'){
                        $info = $this->db->query("select * from `private` where `id` = $user_id")->num_rows;
                        if ($info < 1) $this->db->query("INSERT INTO `private`(`id`) VALUES ($user_id)");
                        else $this->db->query("update `private` set `last_active` = ".time()." where `id` = $user_id");
                    }
                    else{
                        $info = $this->db->query("select * from `chats` where `id` = $id")->num_rows;
                        if ($info < 1) $this->db->query("INSERT INTO `chats`(`id`,`type`) VALUES ($id,'$type')");
                        else $this->db->query("update `users` set `last_active` = ".time()." where `id` = $user_id and `gid` = $id");
                    }
                }
            }
        }
    }

    /** ---------- Extra Methods ----------- */

    /**
     * You can catch field you want from telegram update. default values are caught by this method too
     *
     * e.g. => $this->catchFields(['field'=>'chat_id']);
     * @param array $array e.g. => ['field'=>'chat_id']
     * @return false|mixed|string
     * @throws exception
     */
    public function catchFields (array $array) {
        if (isset($array['field'])) {
            $field = $array['field'];
        }
        else {
            $this->logger('error', "BPT catchFields method used\nfield parameter not found");
            throw new exception('field parameter not found');
        }
        if ($field === 'chat_id' || $field === 'from_chat_id'){
            if (isset($this->update->message)) return $this->update->message->chat->id;
            elseif (isset($this->update->edited_message)) return $this->update->edited_message->chat->id;
            elseif (isset($this->update->inline_query)) return $this->update->inline_query->from->id;
            elseif (isset($this->update->callback_query)) return $this->update->callback_query->from->id;
            elseif (isset($this->update->chat_join_request)) return $this->update->chat_join_request->chat->id;
            else return false;
        }
        elseif ($field === 'user_id'){
            if (isset($this->update->message)) return $this->update->message->from->id;
            elseif (isset($this->update->edited_message)) return $this->update->edited_message->from->id;
            elseif (isset($this->update->inline_query)) return $this->update->inline_query->from->id;
            elseif (isset($this->update->callback_query)) return $this->update->callback_query->from->id;
            elseif (isset($this->update->chat_join_request)) return $this->update->chat_join_request->from->id;
            else return false;
        }
        elseif ($field === 'message_id'){
            if (isset($this->update->message)) return $this->update->message->message_id;
            elseif (isset($this->update->edited_message)) return $this->update->edited_message->message_id;
            elseif (isset($this->update->callback_query)) return $this->update->callback_query->message->message_id;
            else return false;
        }
        elseif ($field === 'file_id'){
            if (isset($this->update->message)) $type = 'message';
            elseif (isset($this->update->edited_message)) $type = 'edited_message';
            else return false;

            if (isset($this->update->$type->animation)) return $this->update->$type->animation->file_id;
            elseif (isset($this->update->$type->audio)) return $this->update->$type->audio->file_id;
            elseif (isset($this->update->$type->document)) return $this->update->$type->document->file_id;
            elseif (isset($this->update->$type->photo)) return end($this->update->$type->photo)->file_id;
            elseif (isset($this->update->$type->sticker)) return $this->update->$type->sticker->file_id;
            elseif (isset($this->update->$type->video)) return $this->update->$type->video->file_id;
            elseif (isset($this->update->$type->video_note)) return $this->update->$type->video_note->file_id;
            elseif (isset($this->update->$type->voice)) return $this->update->$type->voice->file_id;
            else return false;
        }
        elseif ($field === 'callback_query_id'){
            if (isset($this->update->callback_query)) return $this->update->callback_query->id;
            else return false;
        }
        elseif ($field === 'shipping_query_id'){
            if (isset($this->update->shipping_query)) return $this->update->shipping_query->id;
            else return false;
        }
        elseif ($field === 'pre_checkout_query_id'){
            if (isset($this->update->pre_checkout_query)) return $this->update->pre_checkout_query->id;
            else return false;
        }
        elseif ($field === 'inline_query_id'){
            if (isset($this->update->inline_query)) return $this->update->inline_query->id;
            else return false;
        }
        elseif ($field === 'type'){
            if (isset($this->update->message)) return $this->update->message->chat->type;
            elseif (isset($this->update->edited_message)) return $this->update->edited_message->chat->type;
            elseif (isset($this->update->inline_query)) return $this->update->inline_query->chat_type;
            elseif (isset($this->update->callback_query)) return $this->update->callback_query->message->chat->type;
            else return false;
        }
        elseif ($field === 'action') return 'typing';
        else return false;
    }

    /**
     * Check given IP is in the given IP range or not
     *
     * e.g. => $this->ipInRange(['ip'=>'192.168.1.1','range'=>'149.154.160.0/20']);
     * @param array $array e.g. => ['ip'=>'192.168.1.1','range'=>'149.154.160.0/20']
     * @return bool
     * @throws exception
     */
    public function ipInRange (array $array): bool {
        if (isset($array['ip'])) {
            $ip = $array['ip'];
        }
        else {
            $this->logger('error', "BPT ipInRange method used\nip parameter not found");
            throw new exception('ip parameter not found');
        }
        if (isset($array['range'])) {
            $range = $array['range'];
        }
        else {
            $this->logger('error', "BPT ipInRange method used\nrange parameter not found");
            throw new exception('range parameter not found');
        }
        if (strpos($range, '/') === false) {
            $range .= '/32';
        }
        $range_full = explode('/', $range, 2);
        $range_decimal = ip2long($range_full[0]);
        $ip_decimal = ip2long($ip);
        $wildcard_decimal = pow(2, (32 - $range_full[1])) - 1;
        $netmask_decimal = ~$wildcard_decimal;
        return (($ip_decimal & $netmask_decimal) == ($range_decimal & $netmask_decimal));
    }

    /**
     * Check the given IP is from telegram or not
     *
     * e.g. => $this->isTelegram(['ip'=>'192.168.1.1']);
     * @param array $array e.g. => ['ip'=>'192.168.1.1']
     * @return bool
     * @throws exception
     */
    public function isTelegram (array $array): bool {
        if (isset($array['ip'])) {
            $ip = $array['ip'];
        }
        else {
            $this->logger('error', "BPT isTelegram method used\nip parameter not found");
            throw new exception('ip parameter not found');
        }
        if (isset($_SERVER['HTTP_CF_CONNECTING_IP']) && $this->isCloudFlare($ip)) {
            $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
        }
        if (!$this->ipInRange(['ip' => $ip, 'range' => '149.154.160.0/20']) && !$this->ipInRange(['ip' => $ip, 'range' => '91.108.4.0/22'])) {
            return false;
        }
        return true;
    }

    /**
     * Check the given IP is from CloudFlare or not
     *
     * e.g. => $this->isCloudFlare(['ip'=>'192.168.1.1']);
     * @param array $array e.g. => ['ip'=>'192.168.1.1']
     * @return bool
     * @throws exception
     */
    public function isCloudFlare (array $array): bool {
        if (isset($array['ip'])) {
            $ip = $array['ip'];
        }
        else {
            $this->logger('error', "BPT isCloudFlare method used\nip parameter not found");
            throw new exception('ip parameter not found');
        }
        $cf_ips = ['173.245.48.0/20', '103.21.244.0/22', '103.22.200.0/22', '103.31.4.0/22', '141.101.64.0/18', '108.162.192.0/18', '190.93.240.0/20', '188.114.96.0/20', '197.234.240.0/22', '198.41.128.0/17', '162.158.0.0/15', '104.16.0.0/12', '172.64.0.0/13', '131.0.72.0/22'];
        foreach ($cf_ips as $cf_ip) {
            if ($this->ipInRange(['ip' => $ip, 'range' => $cf_ip])) {
                return true;
            }
        }
        return false;
    }

    /**
     * Check the given token format
     *
     * e.g. => $this->isToken(['token'=>'123123123:abcabcabcabc']);
     * @param array $array e.g. => ['token'=>'123123123:abcabcabcabc']
     * @return bool
     * @throws exception
     */
    public function isToken (array $array): bool {
        if (isset($array['token'])) {
            $token = $array['token'];
        }
        else {
            $this->logger('error', "BPT isToken method used\ntoken parameter not found");
            throw new exception('token parameter not found');
        }
        return preg_match('/^(\d{8,10}):[\w\-]{35}$/', $token);
    }

    /**
     * Check the given username format
     *
     * e.g. => $this->isUsername(['username'=>'BPT_CH']);
     * @param array $array e.g. => ['username'=>'BPT_CH']
     * @return bool
     * @throws exception
     */
    public function isUsername (array $array): bool {
        if (isset($array['username'])) {
            $username = $array['username'];
        }
        else {
            $this->logger('error', "BPT isUsername method used\nusername parameter not found");
            throw new exception('username parameter not found');
        }
        return strpos($username, '__') === false && preg_match('/^@?([a-zA-Z])(\w{4,31})$/', $username);
    }

    /**
     * Delete a folder or file if exist
     *
     * if the folder have subFiles , need to set sub parameter to true. if you don't , you will receive error
     *
     * sub parameter have default value => true
     *
     * e.g. => $this->delete(['path'=>'xfolder/yfolder']);
     *
     * e.g. => $this->delete(['path'=>'xfolder/yfolder','sub'=>false]);
     * @param array $array e.g. => ['path'=>'xfolder/yfolder','sub'=>true]
     * @return bool
     * @throws exception
     */
    public function delete (array $array): bool {
        if (isset($array['path'])) {
            $path = $array['path'];
        }
        else {
            $this->logger('error', "BPT delete function used\npath parameter not found");
            throw new exception('path parameter not found');
        }
        $sub = $array['sub'] ?? true;
        if (is_dir($path)) {
            if (count(scandir($path)) > 2) {
                if ($sub) {
                    $it = new RecursiveDirectoryIterator($path, RecursiveDirectoryIterator::SKIP_DOTS);
                    $files = new RecursiveIteratorIterator($it, RecursiveIteratorIterator::CHILD_FIRST);
                    foreach ($files as $file) {
                        if ($file->isDir()) {
                            rmdir($file->getRealPath());
                        }
                        else {
                            unlink($file->getRealPath());
                        }
                    }
                    rmdir($path);
                }
                else {
                    $this->logger('error', "BPT delete function used\ndelete function cannot delete folder because its have subfiles and sub parameter haven't true value");
                    throw new exception('folder have subFiles');
                }
            }
            else rmdir($path);
        }
        else unlink($path);
        return true;
    }

    /**
     * Convert datetime or timestamp to array
     *
     * e.g. => $this->time2string(['datetime'=>1636913656]);
     * @param array $array e.g. => ['datetime'=>1636913656]
     * @return bool|array
     * @throws exception
     */
    public function time2string (array $array) {
        if (isset($array['datetime'])) {
            $datetime = $array['datetime'];
        }
        else {
            $this->logger('error', "BPT time2string function used\ndatetime parameter not found");
            throw new exception('datetime parameter not found');
        }
        if (is_numeric($datetime)) {
            $now = new DateTime;
            $input = new DateTime('@' . $datetime);
            $status = $now < $input ? 'later' : 'ago';
            $diff = $now->diff($input);
            $diff->w = floor($diff->d / 7);
            $string = ['year' => 'y', 'month' => 'm', 'week' => 'w', 'day' => 'd', 'hour' => 'h', 'minute' => 'i', 'second' => 's'];
            foreach ($string as $k => &$v) {
                if ($diff->$v) {
                    $v = $diff->$v;
                }
                else unset($string[$k]);
            }
            $string['status'] = $status;
            return count($string) > 1 ? $string : ['status' => 'now'];
        }
        else return false;
    }

    /**
     * Convert object to array
     *
     * e.g. => $this->objectToArrays(['object'=>$this_is_object]);
     * @param array $array e.g. => ['object'=>$this_is_object]
     * @return bool|array
     * @throws exception
     */
    public function objectToArrays (array $array): array {
        if (isset($array['object'])) {
            $object = $array['object'];
        }
        else {
            $this->logger('error', "BPT objectToArrays function used\nobject parameter not found");
            throw new exception('object parameter not found');
        }
        if (!is_object($object) && !is_array($object)) {
            return $object;
        }
        if (is_object($object)) {
            $object = get_object_vars($object);
        }
        $res = [];
        foreach ($object as $key => $value) {
            $res[$key] = ['object' => $value];
        }
        return array_map([$this, 'objectToArrays'], $res);
    }

    /**
     * Generate random string
     *
     * you can use this method without any input
     *
     * length parameter have default value => 16
     *
     * characters parameter have default value => aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ
     *
     * e.g. => $this->randomString();
     *
     * e.g. => $this->randomString(['length'=>16]);
     *
     * e.g. => $this->randomString(['length'=>16,'characters'=>'abcdefg']);
     * @param array $array e.g. => ['length'=>16,'characters'=>'abcdefg']
     * @return string
     */
    public function randomString (array $array = []): string {
        $characters = $array['characters'] ?? 'aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ';
        $length = isset($array['length']) && is_numeric($array['length']) ? $array['length'] : 16;
        $rand_string = '';
        $char_len = strlen($characters) - 1;
        for ($i = 0; $i < $length; $i ++) {
            $rand_string .= $characters[rand(0, $char_len)];
        }
        return $rand_string;
    }

    /**
     * encrypt or decrypt a text with really high security
     *
     * action parameter must be enc(mean encrypt) or dec(mean decrypt)
     *
     * string parameter is your hash(received when use encrypt) or the text you want to encrypt
     *
     * for decrypt , you must have key and iv parameter. you can found them in result of encrypt
     *
     * e.g. => $this->crypto(['action'=>'dec','string'=>'9LqUf9DSuRRwfo03RnA5Kw==','key'=>'39aaadf402f9b921b1d44e33ee3b022716a518e97d6a7b55de8231de501b4f34','iv'=>'a2e5904a4110169e']);
     *
     * e.g. => $this->crypto(['action'=>'enc','string'=>'hello world']);
     * @param array $array e.g. => ['action'=>'enc','string'=>'hello world']
     * @return array|string|bool
     * @throws exception
     */
    public function crypto (array $array) {
        if (extension_loaded('openssl')) {
            if (isset($array['action'])) {
                $action = $array['action'];
            }
            else {
                $this->logger('error', "BPT crypto function used\naction parameter not found");
                throw new exception('action parameter not found');
            }
            if (isset($array['string'])) {
                $string = $array['string'];
            }
            else {
                $this->logger('error', "BPT crypto function used\nstring parameter not found");
                throw new exception('string parameter not found');
            }
            if ($action === 'enc') {
                $key = $this->randomString(['length' => 64]);
                $iv = $this->randomString(['length' => 16]);
                $output = base64_encode(openssl_encrypt($string, 'AES-256-CBC', $key, 1, $iv));
                return ['hash' => $output, 'key' => $key, 'iv' => $iv];
            }
            elseif ($action === 'dec') {
                if (isset($array['key'])) {
                    $key = $array['key'];
                }
                else {
                    $this->logger('error', "BPT crypto function used\nkey parameter not found");
                    throw new exception('key parameter not found');
                }
                if (isset($array['iv'])) {
                    $iv = $array['iv'];
                }
                else {
                    $this->logger('error', "BPT crypto function used\niv parameter not found");
                    throw new exception('iv parameter not found');
                }
                return openssl_decrypt(base64_decode($string), 'AES-256-CBC', $key, 1, $iv);
            }
            else return false;
        }
        else {
            $this->logger('error', "BPT crypto function used\nopenssl extension is not found , It may not be installed or enabled");
            throw new exception('openssl extension not found');
        }
    }

    /**
     * convert all of files in selected path to zip and then save it in dest path
     *
     * NOTE : this will not zip folders and subFiles , maybe added in feature updates
     *
     * e.g. => $this->zip(['path'=>'xFolder','dest'=>'yFolder/xFile.zip']);
     * @param array $array e.g. => ['path'=>'xFolder','dest'=>'yFolder/xFile.zip']
     * @return bool
     * @throws exception
     */
    public function zip (array $array): bool {
        if (extension_loaded('zip')) {
            if (isset($array['path'])) {
                $path = $array['path'];
            }
            else {
                $this->logger('error', "BPT zip function used\npath parameter not found");
                throw new exception('path parameter not found');
            }
            if (isset($array['dest'])) {
                $dest = $array['dest'];
            }
            else {
                $this->logger('error', "BPT zip function used\ndest parameter not found");
                throw new exception('dest parameter not found');
            }
            $rootPath = realpath($path);
            $Zip = new ZipArchive();
            $Zip->open($dest, ZipArchive::CREATE | ZipArchive::OVERWRITE);
            $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($rootPath), RecursiveIteratorIterator::LEAVES_ONLY);
            $root_len = strlen($rootPath) + 1;
            foreach ($files as $file) {
                if (!$file->isDir()) {
                    $filePath = $file->getRealPath();
                    $Zip->addFile($filePath, substr($filePath, $root_len));
                }
            }
            $Zip->close();
            return true;
        }
        else {
            $this->logger('error', "BPT zip function used\nzip extension is not found , It may not be installed or enabled");
            throw new exception('zip extension not found');
        }
    }

    /**
     * receive size from path(can be url or file path)
     *
     * if format parameter has true value , the returned size converted to symbolic format
     *
     * format parameter have default value => true
     *
     * NOTE : some url will not return real size!
     *
     * e.g. => $this->size(['path'=>'xFile.zip','format'=>false]);
     *
     * e.g. => $this->size(['path'=>'xFile.zip']);
     *
     * @param array $array e.g. => ['path'=>'xFile.zip']
     * @return string|int|bool
     * @throws exception
     */
    public function size (array $array) {
        if (isset($array['path'])) {
            $path = $array['path'];
        }
        else {
            $this->logger('error', "BPT size function used\npath parameter not found");
            throw new exception('path parameter not found');
        }
        $format = $array['format'] ?? true;
        if (filter_var($path, FILTER_VALIDATE_URL)) {
            $ch = curl_init($path);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HEADER, true);
            curl_setopt($ch, CURLOPT_NOBODY, true);
            curl_exec($ch);
            $size = curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD);
            curl_close($ch);
        }
        else {
            if (file_exists($path)) {
                $size = filesize($path);
            }
            else {
                $this->logger('error', "BPT size function used\nFile not found");
                throw new exception('File not found');
            }
        }
        if (isset($size) && is_numeric($size)) {
            if ($format) {
                $o = 0;
                $rate = ['B', 'KB', 'MB', 'GB', 'TB'];
                while ($size > 1024){
                    $size = $size / 1024;
                    $o ++;
                }
                if ($o !== 0) {
                    $size = round($size, 2);
                }
                return $size . ' ' . $rate[$o];
            }
            else return $size;
        }
        else return false;
    }

    /**
     * create normal keyboard and inline keyboard easily
     *
     * you must set keyboard parameter(for normal keyboard) or inline parameter(for inline keyboard)
     *
     * if you set both , keyboard will be processed and inline will be ignored
     *
     *  
     *
     * e.g. => $this->eKey(['keyboard'=>[['button 1 in row 1'],['button 2 in row 2'],['contact button in row 3||con'],['location button in row 4||loc']]]);
     *
     *  
     *
     * e.g. => $this->eKey(['inline'=>[[['button 1 in row 1','this is callback button'],['button 2 in row 1','https://this-is-url-button.com']],[['demo button in row 2']]]]);
     *
     * @param array $array e.g. => ['inline'=>[[['this is a call back button','and this is callback data']]]]
     * @return string will return string but it is json(because of json_encode)
     * @throws exception
     */
    public function eKey (array $array): string {
        if (isset($array['keyboard'])) {
            $keyboard = ['keyboard' => [], 'resize_keyboard' => true];
            foreach ($array['keyboard'] as $row) {
                $buttons = [];
                foreach ($row as $base_button) {
                    $button_info = explode('||', $base_button);
                    if (count($button_info) > 1) {
                        if ($button_info[1] === 'con') {
                            $buttons[] = ['text' => $button_info[0], 'request_contact' => true];
                        }
                        elseif ($button_info[1] === 'loc') {
                            $buttons[] = ['text' => $button_info[0], 'request_location' => true];
                        }
                        else {
                            $buttons[] = ['text' => $base_button];
                        }
                    }
                    else {
                        $buttons[] = ['text' => $base_button];
                    }
                }
                $keyboard['keyboard'][] = $buttons;
            }
            return json_encode($keyboard);
        }
        elseif (isset($array['inline'])) {
            $keyboard = ['inline_keyboard' => []];
            foreach ($array['inline'] as $row) {
                $buttons = [];
                foreach ($row as $button_info) {
                    if (isset($button_info[1])) {
                        if (filter_var($button_info[1], FILTER_VALIDATE_URL) && strpos($button_info[1], 'http') === 0) {
                            $buttons[] = ['text' => $button_info[0], 'url' => $button_info[1]];
                        }
                        else {
                            $buttons[] = ['text' => $button_info[0], 'callback_data' => $button_info[1]];
                        }
                    }
                    else {
                        $buttons[] = ['text' => $button_info[0], 'url' => 'https://t.me/BPT_CH'];
                    }
                }
                $keyboard['inline_keyboard'][] = $buttons;
            }
            return json_encode($keyboard);
        }
        else {
            $this->logger('error', "BPT eKey function used\nkeyboard or inline parameter not found");
            throw new exception('keyboard or inline parameter not found');
        }
    }

    /**
     * check user joined in channels or not
     *
     * ids parameter can be array for multi channels or can be string for one channel
     *
     * user_id parameter have default value => generated by catchFields method
     *
     * null for not founded channel(bot not in it or ...) , false for user not joined and true for user joined
     *
     * NOTE : each channel will decrease speed a little(because of request count)
     *
     * e.g. => $this->jChecker(['ids'=>['BPT_CH','-1005465465454']]);
     *
     * e.g. => $this->jChecker(['user_id'=>'442109602','ids'=>'BPT_CH']);
     *
     * @param array $array e.g. => ['user_id'=>'442109602','ids'=>'BPT_CH']
     * @return array
     * @throws exception
     */
    public function jChecker (array $array): array {
        if (isset($array['ids'])) {
            $ids = $array['ids'];
            if (is_string($ids)) {
                $ids = [$ids];
            }
        }
        else {
            $this->logger('error', "BPT jChecker function used\nids parameter not found");
            throw new exception('ids parameter not found');
        }
        $user_id = $array['user_id'] ?? $this->catchFields(['field' => 'user_id']);
        $result = [];
        foreach ($ids as $id) {
            $check = $this->getChatMember(['chat_id' => $id, 'user_id' => $user_id]);
            if (isset($check['result'])) {
                $check = $check['result']['status'];
                $result[$id] = $check === 'member' || $check === 'administrator' || $check === 'creator';
            }
            else {
                $result[$id] = null;
            }
        }
        return $result;
    }

    /**
     * save data in json file
     *
     * you can pass array|object|json to save it in json file
     *
     * e.g. => $this->jsonSave(['name'=>'zxc.json','data'=>array()]);
     *
     * e.g. => $this->jsonSave(['name'=>'test.json','data'=>"[]"]);
     *
     * @param array $array e.g. => ['name'=>'test.json','data'=>"[]"]
     * @return bool true on success and false on failure
     * @throws exception
     */
    public function jsonSave(array $array): bool{
        if (isset($array['name'])) {
            $name = $array['name'];
        }
        else {
            $this->logger('error', "BPT jsonSave function used\nname parameter not found");
            throw new exception('name parameter not found');
        }
        if (isset($array['data'])) {
            $data = $array['data'];
        }
        else {
            $this->logger('error', "BPT jsonSave function used\ndata parameter not found");
            throw new exception('data parameter not found');
        }
        $this->logger('', "BPT jsonSave function used\n");
        if (is_array($data) || is_object($data)) {
            $data = json_encode($data);
        }
        if (pathinfo($name, PATHINFO_EXTENSION) !== 'json') {
            $name = $name . '.json';
        }
        return file_put_contents($name, gzcompress($data)) ? true : false;
    }

    /**
     * get data from json file
     *
     * you can pass type parameter to choose you want array or object for return
     *
     * type parameter have default value => true
     *
     * e.g. => $this->jsonGet(['name'=>'zxc.json','type'=>false]);
     *
     * e.g. => $this->jsonGet(['name'=>'test.json']);
     *
     * @param array $array e.g. => ['name'=>'test.json']
     * @return mixed|bool array or object in success and false in failure
     * @throws exception
     */
    public function jsonGet (array $array) {
        if (isset($array['name'])) {
            $name = $array['name'];
        }
        else {
            $this->logger('error', "BPT jsonGet function used\nname parameter not found");
            throw new exception('name parameter not found');
        }
        $type = $array['type'] ?? true;
        if (pathinfo($name, PATHINFO_EXTENSION) !== 'json'){
            $name = $name . '.json';
        }
        if (file_exists($name)) {
            return json_decode(gzuncompress(file_get_contents($name)), $type);
        }
        else return false;
    }

    /**
     * delete json file
     *
     * e.g. => $this->jsonDel(['name'=>'zxc.json']);
     *
     * @param array $array e.g. => ['name'=>'test.json']
     * @return bool true on success or false on failure
     * @throws exception
     */
    public function jsonDel (array $array): bool {
        if (isset($array['name'])) {
            $name = $array['name'];
        }
        else {
            $this->logger('error', "BPT jsonDel function used\nname parameter not found");
            throw new exception('name parameter not found');
        }
        if (pathinfo($name, PATHINFO_EXTENSION) !== 'json') {
            $name = $name . '.json';
        }
        if (file_exists($name)) {
            return unlink($name);
        }
        else return false;
    }

    /**
     * save data in database
     *
     * NOTE : for now , only work on json database
     *
     * type parameter have default value and its generated by catchFields method(field is `type`)
     *
     * type most be one of these : private | group | supergroup | channel
     *
     * id parameter have default value and its generated by
     * catchFields method(field `user_id` for private type and `chat_id` for others)
     *
     * e.g. => $this->dataSave(['key'=>'user_y_coin','value'=>'12345','type'=>'private','id'=>'123456789']);
     *
     * e.g. => $this->dataSave(['key'=>'user_x_coin','value'=>'56789']);
     *
     * @param array $array e.g. => ['key'=>'user_x_coin','value'=>'56789']
     * @return bool true on success or false on failure
     * @throws exception
     */
    public function dataSave (array $array): bool {
        if (!empty($this->db)) {
            if ($this->settings['db']['type'] === 'json') {
                if (isset($array['key'])) {
                    if (is_string($array['key'])) {
                        $key = $array['key'] === 'users' ? 'users2' : $array['key'];
                    }
                    else {
                        $this->logger('error', "BPT dataSave function used\nkey most be string");
                        throw new exception('key most be string');
                    }
                }
                else {
                    $this->logger('error', "BPT dataSave function used\nkey parameter not found");
                    throw new exception('key parameter not found');
                }
                if (isset($array['value'])) {
                    $value = $array['value'];
                }
                else {
                    $this->logger('error', "BPT dataSave function used\nvalue parameter not found");
                    throw new exception('value parameter not found');
                }
                if (isset($array['type'])) {
                    $type = $array['type'];
                    if ($type !== 'private' || $type !== 'group' || $type !== 'supergroup' || $type !== 'channel') {
                        $type = $this->catchFields(['field' => 'type']) ?? null;
                    }
                }
                else {
                    $type = $this->catchFields(['field' => 'type']) ?? null;
                }
                if (isset($array['id'])) {
                    $id = $array['id'];
                }
                else {
                    if ($type === 'private') {
                        $id = $this->catchFields(['field' => 'user_id']);
                    }
                    else {
                        $id = $this->catchFields(['field' => 'chat_id']);
                    }
                }
                $BPT_DB = json_decode(file_get_contents($this->settings['db']['file_name']), true);
                if (isset($BPT_DB[$type][$id])) {
                    $BPT_DB[$type][$id][$key] = $value;
                    return file_put_contents($this->settings['db']['file_name'], json_encode($BPT_DB)) ? true : false;
                }
                else {
                    $this->logger('error', "BPT dataSave function used\nid not found in BPT database");
                    throw new exception('id not found');
                }
            }
            else {
                $this->logger('error', "BPT dataSave function used\nonly work on json db");
                throw new exception('only work on json db');
            }
        }
        else {
            $this->logger('warning', 'Your database is disable , so you cant use dataSave method');
            return false;
        }
    }

    /**
     * get data from database
     *
     * NOTE : for now , only work on json database
     *
     * type parameter have default value and its generated by catchFields method(field is `type`)
     *
     * type most be one of these : private | group | supergroup | channel
     *
     * id parameter have default value and its generated by
     * catchFields method(field `user_id` for private type and `chat_id` for others)
     *
     * e.g. => $this->dataGet(['key'=>'user_y_coin','type'=>'private','id'=>'123456789']);
     *
     * e.g. => $this->dataGet(['key'=>'user_x_coin']);
     *
     * @param array $array e.g. => ['key'=>'user_x_coin']
     * @return mixed
     * @throws exception
     */
    public function dataGet (array $array) {
        if (!empty($this->db)) {
            if ($this->settings['db']['type'] === 'json') {
                if (isset($array['key'])) {
                    if (is_string($array['key'])) {
                        $key = $array['key'];
                    }
                    else {
                        $this->logger('error', "BPT dataGet function used\nkey most be string");
                        throw new exception('key most be string');
                    }
                }
                else {
                    $this->logger('error', "BPT dataGet function used\nkey parameter not found");
                    throw new exception('key parameter not found');
                }
                if (isset($array['type'])) {
                    $type = $array['type'];
                    if ($type !== 'private' || $type !== 'group' || $type !== 'supergroup' || $type !== 'channel') {
                        $type = $this->catchFields(['field' => 'type']) ?? null;
                    }
                }
                else {
                    $type = $this->catchFields(['field' => 'type']) ?? null;
                }
                if (isset($array['id'])) {
                    $id = $array['id'];
                }
                else {
                    if ($type === 'private') {
                        $id = $this->catchFields(['field' => 'user_id']);
                    }
                    else {
                        $id = $this->catchFields(['field' => 'chat_id']);
                    }
                }
                $BPT_DB = json_decode(file_get_contents($this->settings['db']['file_name']), true);
                if (isset($BPT_DB[$type][$id])) {
                    if (isset($BPT_DB[$type][$id][$key])) {
                        return $BPT_DB[$type][$id][$key];
                    }
                    else {
                        $this->logger('error', "BPT dataGet function used\nkey not found in BPT database");
                        throw new exception('key not found');
                    }
                }
                else {
                    $this->logger('error', "BPT dataGet function used\nid not found in BPT database");
                    throw new exception('id not found');
                }
            }
            else {
                $this->logger('error', "BPT dataGet function used\nonly work on json db");
                throw new exception('only work on json db');
            }
        }
        else {
            $this->logger('warning', 'Your database is disable , so you cant use dataGet method');
            return false;
        }
    }

    /**
     * delete data in database
     *
     * NOTE : for now , only work on json database
     *
     * type parameter have default value and its generated by catchFields method(field is `type`)
     *
     * type most be one of these : private | group | supergroup | channel
     *
     * id parameter have default value and its generated by
     * catchFields method(field `user_id` for private type and `chat_id` for others)
     *
     * e.g. => $this->dataDel(['key'=>'user_y_coin','type'=>'private','id'=>'123456789']);
     *
     * e.g. => $this->dataDel(['key'=>'user_x_coin']);
     *
     * @param array $array e.g. => ['key'=>'user_x_coin']
     * @return bool true on success or false on failure
     * @throws exception
     */
    public function dataDel (array $array): bool {
        if (!empty($this->db)) {
            if ($this->settings['db']['type'] === 'json') {
                if (isset($array['key'])) {
                    if (is_string($array['key'])) {
                        $key = $array['key'] === 'users' ? 'users2' : $array['key'];
                    }
                    else {
                        $this->logger('error', "BPT dataDel function used\nkey most be string");
                        throw new exception('key most be string');
                    }
                }
                else {
                    $this->logger('error', "BPT dataDel function used\nkey parameter not found");
                    throw new exception('key parameter not found');
                }
                if (isset($array['type'])) {
                    $type = $array['type'];
                    if ($type !== 'private' && $type !== 'group' && $type !== 'supergroup' && $type !== 'channel') {
                        $type = $this->catchFields(['field' => 'type']) ?? null;
                    }
                }
                else {
                    $type = $this->catchFields(['field' => 'type']) ?? null;
                }
                if (isset($array['id'])) {
                    $id = $array['id'];
                }
                else {
                    if ($type === 'private') {
                        $id = $this->catchFields(['field' => 'user_id']);
                    }
                    else {
                        $id = $this->catchFields(['field' => 'chat_id']);
                    }
                }
                $BPT_DB = json_decode(file_get_contents($this->settings['db']['file_name']), true);
                if (isset($BPT_DB[$type][$id])) {
                    if (isset($BPT_DB[$type][$id][$key])) {
                        unset($BPT_DB[$type][$id][$key]);
                        return file_put_contents($this->settings['db']['file_name'], json_encode($BPT_DB)) ? true : false;
                    }
                    else {
                        $this->logger('error', "BPT dataDel function used\nkey not found in BPT database");
                        throw new exception('key not found');
                    }
                }
                else {
                    $this->logger('error', "BPT dataDel function used\nid not found in BPT database");
                    throw new exception('id not found');
                }
            }
            else {
                $this->logger('error', "BPT dataDel function used\nonly work on json db");
                throw new exception('only work on json db');
            }
        }
        else {
            $this->logger('warning', 'Your database is disable , so you cant use dataDel method');
            return false;
        }
    }

    /**
     * receive count of each chat types
     *
     * e.g. => $this->stats();
     *
     * @return array|bool will return an array like this ['users' => 123, 'groups' => 123, 'supergroups' => 123, 'channels' => 123]
     */
    public function stats () {
        if (!empty($this->db)) {
            $this->logger('', "BPT stats function used\n");
            if ($this->settings['db']['type'] === 'json') {
                $BPT_DB = json_decode(file_get_contents($this->settings['db']['file_name']), true);
                $BPT_users = count($BPT_DB['private']);
                $BPT_group = count($BPT_DB['group']);
                $BPT_sgroup = count($BPT_DB['supergroup']);
                $BPT_channel = count($BPT_DB['channel']);
                return ['users' => $BPT_users, 'groups' => $BPT_group, 'supergroups' => $BPT_sgroup, 'channels' => $BPT_channel];
            }
            elseif ($this->settings['db']['type'] === 'sql') {
                $res = ['users' => 0, 'groups' => 0, 'supergroups' => 0, 'channels' => 0];
                $check = $this->db->query('select `type`,COUNT(`type`) as `count` from `chats` GROUP BY `type`')->fetch_all(MYSQLI_ASSOC);
                foreach ($check as $row) {
                    $res[$row['type'] . 's'] = $row['count'];
                }
                $res['users'] = $this->db->query('select * from `private`')->num_rows;
                return $res;
            }
            else return false;
        }
        else {
            $this->logger('warning', 'Your database is disable , so you cant use stats method');
            return false;
        }
    }

    /**
     * receive data from database for one chat_id
     *
     * chat_id parameter have default value and its generated by catchFields method(field is `chat_id`)
     *
     * type parameter have default value and its generated by catchFields method(field is `type`)
     *
     * you can call this method with out any input
     *
     * e.g. => $this->statsHere(['chat_id'=>'123456789','type'=>'private']);
     *
     * e.g. => $this->statsHere();
     *
     * @param array $array e.g. => ['chat_id'=>'123456789','type'=>'private']
     * @return array|bool return false on failure and array on success
     */
    public function statsHere ($array = []) {
        if(!empty($this->db)){
            if(isset($array['chatid'])) $array['chat_id'] = $array['chatid'];

            if (isset($array['chat_id'])) {
                $chat_id = $array['chat_id'];
            }
            else {
                $chat_id = $this->catchFields(['field' => 'chat_id']);
            }
            if (isset($array['type'])) {
                $type = $array['type'];
            }
            else {
                $type = $this->catchFields(['field' => 'type']) ?? null;
            }
            $this->logger('', "BPT statsHere function used\n");
            if ($this->settings['db']['type'] === 'json') {
                $BPT_DB = json_decode(file_get_contents($this->settings['db']['file_name']), true);
                if (isset($BPT_DB[$type][$chat_id])) {
                    return $BPT_DB[$type][$chat_id];
                }
                else return false;
            }
            elseif ($this->settings['db']['type'] === 'sql') {
                if ($type === 'private') {
                    $check = $this->db->query("select * from `private` where `id` = $chat_id");
                    if ($check->num_rows > 0) {
                        return $check->fetch_array();
                    }
                    else return false;
                }
                else {
                    $check = $this->db->query("select * from `chats` where `id` = $chat_id");
                    if ($check->num_rows > 0) {
                        return $check->fetch_array();
                    }
                    else return false;
                }
            }
            else return false;
        }
        else {
            $this->logger('warning', 'Your database is disable , so you cant use statsHere method');
            return false;
        }
    }

    /**
     * check user phone is submitted , if not receive it
     *
     * NOTE : send button_text parameter instead of old btext parameter(support of old style will remove from version 2.01)
     *
     * text parameter have default value in persian language
     *
     * button_text parameter have default value in persian language
     *
     * phones parameter can be array(for multi range) or string for 1 range
     *
     * you can pass `all` string for phones parameter to support all ranges
     *
     * e.g. => $this->checkPhone(['button_text'=>'Share your phone','phones'=>'98']);
     *
     * e.g. => $this->checkPhone(['button_text'=>'Share your phone','phones'=>['98','1']]);
     *
     * @param array $array e.g. => ['button_text'=>'Share your phone','phones'=>['98','1']]
     *
     * @return int
     *
     * 0 when user phone is not checked ,
     * 1 when for everything is good ,
     * 2 when for not message update or not private chat ,
     * 3 when new user have right range ,
     * 4 when new user have wrong range ,
     * false when database is off or it have wrong type
     */
    public function checkPhone (array $array): int {
        if (!empty($this->db)) {
            if(isset($array['btext'])) $array['button_text'] = $array['btext'];

            if (isset($array['text']) && is_string($array['text'])) {
                $text = $array['text'];
            }
            else {
                $text = "با سلام کاربر گرامی\nجهت ادامه دادن فعالیت خود در این ربات باید شماره خود را ارسال نمایید";
            }
            if (isset($array['button_text']) && is_string($array['button_text'])) {
                $button_text = $array['button_text'];
            }
            else {
                $button_text = 'ارسال شماره تلفن';
            }
            if (isset($array['phones']) && is_array($array['phones'])) {
                $phones = $array['phones'];
            }
            elseif (is_string($array['phones'])) {
                if ($array['phones'] === '98' || strtolower($array['phones']) === 'iran' || $array['phones'] === 'ایران') {
                    $phones = ['98'];
                }
                else {
                    $phones = [$array['phones']];
                }
            }
            else {
                $phones = 'all';
            }
            if (isset($this->update->message)) {
                $id = $this->update->message->chat->id;
                $type = $this->update->message->chat->type;
                if ($type === 'private') {
                    if ($this->settings['db']['type'] === 'json') {
                        $BPT_DB = json_decode(file_get_contents($this->settings['db']['file_name']), true);
                        if (isset($BPT_DB[$type][$id]['phone_number'])) {
                            if (is_array($phones)) {
                                $phone = $BPT_DB[$type][$id]['phone_number'];
                                foreach ($phones as $range) {
                                    if (is_string($range) && strpos($phone, $range) === 0) {
                                        return 1;
                                    }
                                }
                                unset($BPT_DB[$type][$id]['phone_number']);
                                file_put_contents($this->settings['db']['file_name'], json_encode($BPT_DB));
                                $this->sendMessage(['chat_id' => $id, 'text' => $text, 'reply_markup' => $this->eKey(['keyboard' => [["$button_text||con"]]])]);
                                return 0;
                            }
                            else return 1;
                        }
                        else {
                            if (isset($this->update->message->contact)) {
                                $p = false;
                                $phone = $this->update->message->contact->phone_number;
                                if (is_string($phones)) {
                                    $BPT_DB[$type][$id]['phone_number'] = $phone;
                                    $p = true;
                                }
                                else {
                                    foreach ($phones as $range) {
                                        if (is_string($range) && strpos($phone, $range) === 0) {
                                            $BPT_DB[$type][$id]['phone_number'] = $phone;
                                            $p = true;
                                            break;
                                        }
                                    }
                                }
                                if ($p) {
                                    file_put_contents($this->settings['db']['file_name'], json_encode($BPT_DB));
                                    return 3;
                                }
                                else return 4;
                            }
                            else {
                                $this->sendMessage(['chat_id' => $id, 'text' => $text, 'reply_markup' => $this->eKey(['keyboard' => [["$button_text||con"]]])]);
                                return 0;
                            }
                        }
                    }
                    elseif ($this->settings['db']['type'] === 'sql') {
                        $info = $this->db->query("select * from `private` where `id` = $id")->fetch_object();
                        if (isset($info->phone_number)) {
                            if (is_array($phones)) {
                                $phone = $info->phone_number;
                                foreach ($phones as $range) {
                                    if (is_string($range) && strpos($phone, $range) === 0) {
                                        return 1;
                                    }
                                }
                                $this->db->query("update `users` set `phone_number` = null where `id` = $id");
                                $this->sendMessage(['chat_id' => $id, 'text' => $text, 'reply_markup' => $this->eKey(['keyboard' => [["$button_text||con"]]])]);
                                return 0;
                            }
                            else return 1;
                        }
                        else {
                            if (isset($this->update->message->contact)) {
                                $phone = $this->update->message->contact->phone_number;
                                if (is_string($phones)) {
                                    $this->db->query("update `users` set `phone_number` = '$phone' where `id` = $id");
                                    return 3;
                                }
                                else {
                                    foreach ($phones as $range) {
                                        if (is_string($range) && strpos($phone, $range) === 0) {
                                            $this->db->query("update `users` set `phone_number` = '$phone' where `id` = $id");
                                            return 3;
                                        }
                                    }
                                }
                                return 4;
                            }
                            else {
                                $this->sendMessage(['chat_id' => $id, 'text' => $text, 'reply_markup' => $this->eKey(['keyboard' => [["$button_text||con"]]])]);
                                return 0;
                            }
                        }
                    }
                    return false;
                }
                else return 2;
            }
            else return 2;
        }
        else {
            $this->logger('warning', 'Your database is disable , so you cant use checkPhone method');
            return false;
        }
    }

    /**
     * forward a message to all users(receive data from database)
     *
     * NOTE : send chat_id parameter instead of old chatid parameter(support of old style will remove from version 2.01)
     *
     * NOTE : send message_id parameter instead of old msgid parameter(support of old style will remove from version 2.01)
     *
     * for now this method cannot work fine on large amount of targets
     *
     * e.g. => $this->forward2users(['chat_id'=>'123456789','message_id'=>'123']);
     *
     * @param array $array e.g. => ['chat_id'=>'123456789','message_id'=>'123']
     * @return bool return true on success
     * @throws exception
     */
    public function forward2users(array $array): bool{
        if(!empty($this->db)){
            if(isset($array['chatid'])) $array['chat_id'] = $array['chatid'];
            if(isset($array['msgid'])) $array['message_id'] = $array['msgid'];

            if (isset($array['chat_id'])) {
                $chat_id = $array['chat_id'];
            }
            else {
                $this->logger('error', "BPT forward2users function used\nchat_id parameter not found");
                throw new exception('chat_id parameter not found');
            }
            if (isset($array['message_id'])) {
                $message_id = $array['message_id'];
            }
            else {
                $this->logger('error', "BPT forward2users function used\nmessage_id parameter not found");
                throw new exception('message_id parameter not found');
            }
            if ($this->settings['db']['type'] === 'json') {
                $BPT_DB = json_decode(file_get_contents($this->settings['db']['file_name']), true);
                foreach ($BPT_DB['private'] as $id => $x) {
                    $this->forwardMessage(['chat_id' => $id, 'from_chat_id' => $chat_id, 'message_id' => $message_id]);
                }
                return true;
            }
            elseif ($this->settings['db']['type'] === 'sql') {
                $BPT_DB = $this->db->query('select `id` from `private`')->fetch_all(MYSQLI_ASSOC);
                foreach ($BPT_DB as $id) {
                    $this->forwardMessage(['chat_id' => $id['id'], 'from_chat_id' => $chat_id, 'message_id' => $message_id]);
                }
                return true;
            }
            return false;
        }
        else {
            $this->logger('warning', 'Your database is disable , so you cant use forward2users method');
            return false;
        }
    }

    /**
     * forward a message to all normal groups(receive data from database)
     *
     * NOTE : send chat_id parameter instead of old chatid parameter(support of old style will remove from version 2.01)
     *
     * NOTE : send message_id parameter instead of old msgid parameter(support of old style will remove from version 2.01)
     *
     * for now this method cannot work fine on large amount of targets
     *
     * e.g. => $this->forward2groups(['chat_id'=>'123456789','message_id'=>'123']);
     *
     * @param array $array e.g. => ['chat_id'=>'123456789','message_id'=>'123']
     * @return bool return true on success
     * @throws exception
     */
    public function forward2groups(array $array): bool{
        if(!empty($this->db)){
            if(isset($array['chatid'])) $array['chat_id'] = $array['chatid'];
            if(isset($array['msgid'])) $array['message_id'] = $array['msgid'];

            if (isset($array['chat_id'])) {
                $chat_id = $array['chat_id'];
            }
            else {
                $this->logger('error', "BPT forward2groups function used\nchat_id parameter not found");
                throw new exception('chat_id parameter not found');
            }
            if (isset($array['message_id'])) {
                $message_id = $array['message_id'];
            }
            else {
                $this->logger('error', "BPT forward2groups function used\nmessage_id parameter not found");
                throw new exception('message_id parameter not found');
            }
            if ($this->settings['db']['type'] === 'json') {
                $BPT_DB = json_decode(file_get_contents($this->settings['db']['file_name']), true);
                foreach ($BPT_DB['groups'] as $id => $x) {
                    $this->forwardMessage(['chat_id' => $id, 'from_chat_id' => $chat_id, 'message_id' => $message_id]);
                }
                return true;
            }
            elseif ($this->settings['db']['type'] === 'sql') {
                $BPT_DB = $this->db->query("select `id` from `chats` where `type` = 'group'")->fetch_all(MYSQLI_ASSOC);
                foreach ($BPT_DB as $id) {
                    $this->forwardMessage(['chat_id' => $id['id'], 'from_chat_id' => $chat_id, 'message_id' => $message_id]);
                }
                return true;
            }
            return false;
        }
        else {
            $this->logger('warning', 'Your database is disable , so you cant use forward2groups method');
            return false;
        }
    }

    /**
     * forward a message to all super groups(receive data from database)
     *
     * NOTE : send chat_id parameter instead of old chatid parameter(support of old style will remove from version 2.01)
     *
     * NOTE : send message_id parameter instead of old msgid parameter(support of old style will remove from version 2.01)
     *
     * for now this method cannot work fine on large amount of targets
     *
     * e.g. => $this->forward2supergroups(['chat_id'=>'123456789','message_id'=>'123']);
     *
     * @param array $array e.g. => ['chat_id'=>'123456789','message_id'=>'123']
     * @return bool return true on success
     * @throws exception
     */
    public function forward2supergroups (array $array): bool {
        if (!empty($this->db)) {
            if(isset($array['chatid'])) $array['chat_id'] = $array['chatid'];
            if(isset($array['msgid'])) $array['message_id'] = $array['msgid'];

            if (isset($array['chat_id'])) {
                $chat_id = $array['chat_id'];
            }
            else {
                $this->logger('error', "BPT forward2supergroups function used\nchat_id parameter not found");
                throw new exception('chat_id parameter not found');
            }
            if (isset($array['message_id'])) {
                $message_id = $array['message_id'];
            }
            else {
                $this->logger('error', "BPT forward2supergroups function used\nmessage_id parameter not found");
                throw new exception('message_id parameter not found');
            }
            if ($this->settings['db']['type'] === 'json') {
                $BPT_DB = json_decode(file_get_contents($this->settings['db']['file_name']), true);
                foreach ($BPT_DB['supergroup'] as $id => $x) {
                    $this->forwardMessage(['chat_id' => $id, 'from_chat_id' => $chat_id, 'message_id' => $message_id]);
                }
                return true;
            }
            elseif ($this->settings['db']['type'] === 'sql') {
                $BPT_DB = $this->db->query("select `id` from `chats` where `type` = 'supergroup'")->fetch_all(MYSQLI_ASSOC);
                foreach ($BPT_DB as $id) {
                    $this->forwardMessage(['chat_id' => $id['id'], 'from_chat_id' => $chat_id, 'message_id' => $message_id]);
                }
                return true;
            }
            return false;
        }
        else {
            $this->logger('warning', 'Your database is disable , so you cant use forward2supergroups method');
            return false;
        }
    }

    /**
     * forward a message to all groups(receive data from database)
     *
     * NOTE : send chat_id parameter instead of old chatid parameter(support of old style will remove from version 2.01)
     *
     * NOTE : send message_id parameter instead of old msgid parameter(support of old style will remove from version 2.01)
     *
     * for now this method cannot work fine on large amount of targets
     *
     * e.g. => $this->forward2gps(['chat_id'=>'123456789','message_id'=>'123']);
     *
     * @param array $array e.g. => ['chat_id'=>'123456789','message_id'=>'123']
     * @return bool return true on success
     * @throws exception
     */
    public function forward2gps (array $array): bool {
        if (!empty($this->db)) {
            if(isset($array['chatid'])) $array['chat_id'] = $array['chatid'];
            if(isset($array['msgid'])) $array['message_id'] = $array['msgid'];

            if (isset($array['chat_id'])) {
                $chat_id = $array['chat_id'];
            }
            else {
                $this->logger('error', "BPT forward2gps function used\nchat_id parameter not found");
                throw new exception('chat_id parameter not found');
            }
            if (isset($array['message_id'])) {
                $message_id = $array['message_id'];
            }
            else {
                $this->logger('error', "BPT forward2gps function used\nmessage_id parameter not found");
                throw new exception('message_id parameter not found');
            }
            if ($this->settings['db']['type'] === 'json') {
                $BPT_DB = json_decode(file_get_contents($this->settings['db']['file_name']), true);
                foreach ($BPT_DB['groups'] as $id => $x) {
                    $this->forwardMessage(['chat_id' => $id, 'from_chat_id' => $chat_id, 'message_id' => $message_id]);
                }
                foreach ($BPT_DB['supergroup'] as $id => $x) {
                    $this->forwardMessage(['chat_id' => $id, 'from_chat_id' => $chat_id, 'message_id' => $message_id]);
                }
                return true;
            }
            elseif ($this->settings['db']['type'] === 'sql') {
                $BPT_DB = $this->db->query("select `id` from `chats` where `type` = 'supergroup' || `type` = 'group'")->fetch_all(MYSQLI_ASSOC);
                foreach ($BPT_DB as $id) {
                    $this->forwardMessage(['chat_id' => $id['id'], 'from_chat_id' => $chat_id, 'message_id' => $message_id]);
                }
                return true;
            }
            return false;
        }
        else {
            $this->logger('warning', 'Your database is disable , so you cant use forward2gps method');
            return false;
        }
    }

    /**
     * forward a message to all include users , groups , supergroups(receive data from database)
     *
     * NOTE : send chat_id parameter instead of old chatid parameter(support of old style will remove from version 2.01)
     *
     * NOTE : send message_id parameter instead of old msgid parameter(support of old style will remove from version 2.01)
     *
     * for now this method cannot work fine on large amount of targets
     *
     * e.g. => $this->forward2all(['chat_id'=>'123456789','message_id'=>'123']);
     *
     * @param array $array e.g. => ['chat_id'=>'123456789','message_id'=>'123']
     * @return bool return true on success
     * @throws exception
     */
    public function forward2all (array $array): bool {
        if (!empty($this->db)) {
            if(isset($array['chatid'])) $array['chat_id'] = $array['chatid'];
            if(isset($array['msgid'])) $array['message_id'] = $array['msgid'];

            if (isset($array['chat_id'])) {
                $chat_id = $array['chat_id'];
            }
            else {
                $this->logger('error', "BPT forward2all function used\nchat_id parameter not found");
                throw new exception('chat_id parameter not found');
            }
            if (isset($array['message_id'])) {
                $message_id = $array['message_id'];
            }
            else {
                $this->logger('error', "BPT forward2all function used\nmessage_id parameter not found");
                throw new exception('message_id parameter not found');
            }
            if ($this->settings['db']['type'] === 'json') {
                $BPT_DB = json_decode(file_get_contents($this->settings['db']['file_name']), true);
                foreach ($BPT_DB['private'] as $id => $x) {
                    $this->forwardMessage(['chat_id' => $id, 'from_chat_id' => $chat_id, 'message_id' => $message_id]);
                }
                foreach ($BPT_DB['groups'] as $id => $x) {
                    $this->forwardMessage(['chat_id' => $id, 'from_chat_id' => $chat_id, 'message_id' => $message_id]);
                }
                foreach ($BPT_DB['supergroup'] as $id => $x) {
                    $this->forwardMessage(['chat_id' => $id, 'from_chat_id' => $chat_id, 'message_id' => $message_id]);
                }
                return true;
            }
            elseif ($this->settings['db']['type'] === 'sql') {
                $BPT_DB = $this->db->query('select `id` from `private`')->fetch_all(MYSQLI_ASSOC);
                foreach ($BPT_DB as $id) {
                    $this->forwardMessage(['chat_id' => $id['id'], 'from_chat_id' => $chat_id, 'message_id' => $message_id]);
                }
                $BPT_DB = $this->db->query("select `id` from `chats` where `type` = 'supergroup' || `type` = 'group'")->fetch_all(MYSQLI_ASSOC);
                foreach ($BPT_DB as $id) {
                    $this->forwardMessage(['chat_id' => $id['id'], 'from_chat_id' => $chat_id, 'message_id' => $message_id]);
                }
                return true;
            }
            return false;
        }
        else {
            $this->logger('warning', 'Your database is disable , so you cant use forward2all method');
            return false;
        }
    }

    /**
     * DEPRECATED! will remove in version 2.01
     */
    public function buildBot($array){
        if(!is_dir('bots')) mkdir('bots');
        if(isset($array['token'])){
            $token = $array['token'];
        } else {
            $this->logger('error',"BPT buildBot function used\ntoken parameter not found");
            throw new exception('token parameter not found');
        }
        if(isset($array['admin'])){
            $admin = $array['admin'];
        } else {
            $this->logger('error',"BPT buildBot function used\nadmin parameter not found");
            throw new exception('admin parameter not found');
        }
        if(isset($array['type'])){
            $type = $array['type'];
        } else {
            $this->logger('error',"BPT buildBot function used\ntype parameter not found");
            throw new exception('type parameter not found');
        }
        $chat_id = $array['chat_id'] ?? $this->catchFields(['field'=>'chat_id']);
        $error_text = $array['error_text'] ?? 'توکن ربات نامعتبر است.';
        $exist_text = $array['exist_text'] ?? 'خطا : این ربات قبلا نصب گردیده است.';
        $done_text = $array['done_text'] ?? 'ربات شما با موفقیت نصب گردید.';
        $result = json_decode(file_get_contents('https://api.telegram.org/bot'.$token.'/getMe'), true);
        if($result['ok'] !== true) return $this->sendMessage(['text'=>$error_text,'chat_id'=>$chat_id]);
        $username = $result['result']['username'];
        if(file_exists("bots/$username/index.php")) return $this->sendMessage(['text'=>$exist_text,'chat_id'=>$chat_id]);
        if($type === 'NUM')    $path = 'https://bpt-proto.ir/BPT/source/shomare/src.php';
        elseif($type === 'PM') $path = 'https://bpt-proto.ir/BPT/source/pm/src.php';
        else{
            $this->logger('error',"BPT buildBot function used\ntype parameter has wrong data");
            throw new exception('type parameter is wrong');
        }
        $config = str_replace(['[ADMIN]','[TOKEN]'], [$admin,$token], file_get_contents($path));
        mkdir("bots/$username");
        file_put_contents("bots/$username/index.php",$config);
        $site = explode('/',$_SERVER['SCRIPT_URI']);
        $site = str_replace(end($site),null,$_SERVER['SCRIPT_URI']);
        $site = str_replace('http://','https://',$site);
        $this->setWebhook(['url'=>$site.'bots/'.$username.'/index.php','token'=>$token]);
        return $this->sendMessage(['text'=>$done_text,'chat_id'=>$chat_id]);
    }

    /**
     * DEPRECATED! will remove in version 2.01
     */
    public function imges($array) {
        if(isset($array['type'])){
            $type = $array['type'];
        } else {
            $this->logger('error',"BPT imges function used\ntype parameter not found");
            throw new exception('type parameter not found');
        }
        if(isset($array['done_text'])){
            $done_text = $array['done_text'];
        } else {
            if($type === 'CAPTCHA') $done_text = 'لطفا کد کپچا را ارسال کنید.';
            elseif($type === 'Changer') $done_text = 'عکس شما با موفقیت تغییر رنگ داده شد.';
        }
        if($type === 'CAPTCHA'){
            $model = $array['model'] ?? 1;
            $res = json_decode(file_get_contents("https://bpt-proto.ir/BPT/source/imges/index.php?type=CAPTCHA&Model=$model"),true)['results'];
            return $this->sendPhoto(['photo'=>$res,'caption'=>$done_text]);
        }
        elseif($type === 'Changer'){
            if(isset($array['link'])){
                $link = $array['link'];
            } else {
                $this->logger('error',"BPT imges function used\nlink parameter not found");
                throw new exception('link parameter not found');
            }
            if(isset($array['color'])){
                $color = $array['color'];
            } else {
                $this->logger('error',"BPT imges function used\ncolor parameter not found");
                throw new exception('color parameter not found');
            }
            $res = json_decode(file_get_contents("https://bpt-proto.ir/BPT/source/imges/index.php?type=Changer&link=$link&color=$color"),true)['results'];
            return $this->sendPhoto(['photo'=>$res,'caption'=>$done_text]);
        }
        else{
            $this->logger('error',"BPT imges function used\ntype is wrong");
            throw new exception('type is wrong');
        }
    }

    /**
     * you can call some of our build in apis with this method
     *
     * some apis will need parameter , so you must use them in option parameter as array
     *
     * NOTE : We try to make apis always online and always work, but sometimes that is not possible
     *
     * e.g. => $this->api(['type'=>'pdf','option'=>['url'=>'https://bpt-proto.ir']]);
     *
     * e.g. => $this->api(['type'=>'dastan']);
     *
     * @param array $array e.g. => ['type'=>'pdf','option'=>['url'=>'https://bpt-proto.ir']]
     * @return string|array|bool
     * @throws exception
     */
    public function api (array $array) {
        if (isset($array['type'])) {
            $type = $array['type'];
        }
        else {
            $this->logger('error', "BPT api function used\ntype parameter not found");
            throw new exception('type parameter not found');
        }
        $option = $array['option'] ?? [];
        if (!is_array($option)) {
            throw new exception('array parameter must be array!');
        }
        switch ($type) {
            case 'alaki':
                return json_decode(file_get_contents('https://poty.ir/apis/alaki.php'), true)['results'];
            case 'arz':
                return json_decode(file_get_contents('https://poty.ir/apis/arz.php?type=arz'), true)['results'];
            case 'tala':
                return json_decode(file_get_contents('https://poty.ir/apis/arz.php?type=tala'), true)['results'];
            case 'arzdigital':
                return json_decode(file_get_contents('https://poty.ir/apis/arzdigital.php'), true)['results'];
            case 'ayam':
                return json_decode(file_get_contents('https://poty.ir/apis/ayam.php'), true)['results'];
            case 'danestani':
                return json_decode(file_get_contents('https://poty.ir/apis/danestani.php'), true)['results'];
            case 'dastan':
                return json_decode(file_get_contents('https://poty.ir/apis/dastan.php'), true)['results'];
            case 'chistan':
                return json_decode(file_get_contents('https://poty.ir/apis/chistan.php'), true)['results'][0];
            case 'dialog':
                return json_decode(file_get_contents('https://poty.ir/apis/dialog.php'), true)['results'];
            case 'hadis':
                return json_decode(file_get_contents('https://poty.ir/apis/hadis2.php'), true)['results'];
            case 'joke':
                return json_decode(file_get_contents('https://poty.ir/apis/joke.php'), true)['results'];
            case 'fall':
                return 'https://poty.ir/apis/fal.php';
            case 'khatere':
                return json_decode(file_get_contents('https://poty.ir/apis/khatere.php'), true)['results'];
            case 'pnp':
                return json_decode(file_get_contents('https://poty.ir/apis/pnp.php'), true)['results'];
            case 'noroz':
                return json_decode(file_get_contents('https://poty.ir/apis/noroz.php'), true)['results'];
            case 'capcha':
                return json_decode(file_get_contents('https://poty.ir/apis/capcha2.php'), true)['results'];
            case 'time':
                return json_decode(file_get_contents('https://poty.ir/apis/time.php'), true)['results'];
            case 'corona':
                return json_decode(file_get_contents('https://poty.ir/apis/corona.php'), true)['results'];
            case 'pdf':
                if (isset($option['url'])) {
                    return 'https://poty.ir/apis/topdf.php?url=' . urlencode($option['url']);
                }
                else {
                    throw new exception('pdf api need url field!');
                }
            case 'uupload':
                if (isset($option['url'])) {
                    return json_decode(file_get_contents('https://poty.ir/apis/uupload.php?link=' . urlencode($option['url'])), true)['results'];
                }
                else {
                    throw new exception('uupload api need url field!');
                }
            case 'proxy':
                if (isset($option['id'])) {
                    $id = $array['id'];
                }
                else {
                    $ids = ['ProxyMTProto', 'TelMTProto', 'MyPoroxy', 'JackalProxy', 'Cheetah_MTP'];
                    $id = $ids[array_rand($ids)];
                }
                return json_decode(file_get_contents("https://poty.ir/apis/proxy.php?channel=$id"), true)['results'];
            case 'screenshot':
                if (isset($option['url'])) {
                    $url = urlencode($option['url']);
                    $res1 = file_get_contents('https://poty.ir/apis/screenshot3.php?url=' . $url);
                    if (strpos($res1, 'cannot be displayed because it contains errors.') !== false) {
                        return 'https://poty.ir/apis/screenshot3.php?url=' . $url;
                    }
                    else {
                        $res1 = file_get_contents('https://poty.ir/apis/screenshot2.php?url=' . $url);
                        if (strpos($res1, 'cannot be displayed because it contains errors.') !== false) {
                            return 'https://poty.ir/apis/screenshot2.php?url=' . $url;
                        }
                        else {
                            $res1 = file_get_contents('https://poty.ir/apis/screenshot.php?type=fullscreen&url=' . $url);
                            if (strpos($res1, 'cannot be displayed because it contains errors.') !== false) {
                                return 'https://poty.ir/apis/screenshot.php?type=fullscreen&url=' . $url;
                            }
                            else return false;
                        }
                    }
                }
                else {
                    throw new exception('screenshot api need url field!');
                }
            case 'short':
                if (isset($option['url'])) {
                    $url = urlencode($option['url']);
                    if (strpos($url, 'http') === 0) {
                        return json_decode(file_get_contents('https://jx9.ir/?domain=jx9&url=' . $url), true)['results'];
                    }
                    else {
                        return json_decode(file_get_contents('https://jx9.ir/?domain=jx9&url=http%3A%2F%2F' . $url), true)['results'];
                    }
                }
                else {
                    throw new exception('short api need url field!');
                }
            case 'alexa':
                if (isset($option['url'])) {
                    return json_decode(file_get_contents('https://poty.ir/apis/alexa.php?url=' . urlencode($option['url'])), true)['results'];
                }
                else {
                    throw new exception('alexa api need url field!');
                }
            case 'num2text':
                if (isset($option['num'])) {
                    $url = urlencode(str_replace(['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'], [0, 1, 2, 3, 4, 5, 6, 7, 8, 9], $option['num']));
                    return json_decode(file_get_contents("https://poty.ir/apis/num.php?num=$url"), true)['results'];
                }
                else {
                    throw new exception('num2text api need num field!');
                }
            case 'fin2pe':
                if (isset($option['text'])) {
                    return json_decode(file_get_contents('https://poty.ir/apis/fintope.php?text=' . urlencode($option['text'])), true)['results'];
                }
                else {
                    throw new exception('fin2pe api need text field!');
                }
            default:
                return false;
        }
    }
}

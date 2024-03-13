<?php

if (!in_array(__FILE__, get_included_files())) {
    endPage();
}

if (PHP_MAJOR_VERSION === 5 || (PHP_MAJOR_VERSION === 7 && PHP_MINOR_VERSION < 4)) {
    $newline = PHP_SAPI !== 'cli' ? '<br>' . PHP_EOL : PHP_EOL;
    die("You can't run this library on php version lower then 7.4$newline supported versions: php 7.4+$newline recommended version: php 8.0+$newline");
}
function endPage () {
    die("<div style='width:98vw;height:98vh;display:flex;justify-content:center;align-items:center;font-size:25vw'>BPT</div>");
}

/**
 * BPT CLASS
 * Simple class for handling telegram bot and write it very easily
 * BOT API version : 7.1
 *
 * @method getUpdates($array = [])
 * @method getUp($array = [])
 * @method updates($array = [])
 * @method setWebhook($array = [])
 * @method setWeb($array = [])
 * @method webhook($array = [])
 * @method deleteWebhook($array = [])
 * @method deleteWeb($array = [])
 * @method delWeb($array = [])
 * @method getWebhookInfo($array = [])
 * @method getWeb($array = [])
 * @method getMe($array = [])
 * @method me($array = [])
 * @method logOut($array = [])
 * @method close($array = [])
 * @method sendMessage($array)
 * @method send($array)
 * @method forwardMessage($array)
 * @method forward($array)
 * @method forwardMessages($array)
 * @method forwards($array)
 * @method copyMessage($array)
 * @method copy($array)
 * @method copyMessages($array)
 * @method copys($array)
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
 * @method sendDice($array = [])
 * @method dice($array = [])
 * @method sendChatAction($array = [])
 * @method chatAction($array = [])
 * @method action($array = [])
 * @method setMessageReaction($array = [])
 * @method setReaction($array = [])
 * @method getUserProfilePhotos($array = [])
 * @method userPhotos($array = [])
 * @method getFile($array = [])
 * @method file($array = [])
 * @method banChatMember($array = [])
 * @method ban($array = [])
 * @method kickChatMember($array = []) DEPRECATED! use banChatMember instead
 * @method unbanChatMember($array = [])
 * @method unban($array = [])
 * @method kick($array = []) This is not alice with kickChatMember, will use unban method to kick user
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
 * @method exportChatInviteLink($array = [])
 * @method link($array = [])
 * @method createChatInviteLink($array = [])
 * @method crLink($array = [])
 * @method editChatInviteLink($array = [])
 * @method edLink($array = [])
 * @method revokeChatInviteLink($array = [])
 * @method reLink($array = [])
 * @method approveChatJoinRequest($array = [])
 * @method acceptJoin($array = [])
 * @method declineChatJoinRequest($array = [])
 * @method denyJoin($array = [])
 * @method setChatPhoto($array)
 * @method deleteChatPhoto($array = [])
 * @method setChatTitle($array)
 * @method title($array)
 * @method setChatDescription($array)
 * @method description($array)
 * @method pinChatMessage($array)
 * @method pin($array)
 * @method unpinChatMessage($array = [])
 * @method unpin($array = [])
 * @method unpinAllChatMessages($array = [])
 * @method unpinall($array = [])
 * @method leaveChat($array = [])
 * @method leave($array = [])
 * @method getChat($array = [])
 * @method chat($array = [])
 * @method getChatAdministrators($array = [])
 * @method admins($array = [])
 * @method getChatMemberCount($array = []) DEPRECATED! Use getChatMembersCount instead
 * @method getChatMembersCount($array = [])
 * @method membersCount($array = [])
 * @method getChatMember($array = [])
 * @method member($array = [])
 * @method setChatStickerSet($array)
 * @method setSticker($array)
 * @method deleteChatStickerSet($array)
 * @method delSticker($array)
 * @method unpinAllGeneralForumTopicMessages($array = [])
 * @method unpinGeneralTopicMessages($array = [])
 * @method answerCallbackQuery($array = [])
 * @method answer($array = [])
 * @method getUserChatBoosts($array = [])
 * @method getChatBoosts($array = [])
 * @method getUserBoosts($array = [])
 * @method setMyCommands($array)
 * @method setCommands($array)
 * @method deleteMyCommands($array = [])
 * @method deleteCommands($array = [])
 * @method getMyCommands($array = [])
 * @method getCommands($array = [])
 * @method setMyName($array = [])
 * @method getMyName($array = [])
 * @method setMyDescription($array = [])
 * @method setDescription($array = [])
 * @method getMyDescription($array = [])
 * @method getDescription($array = [])
 * @method setMyShortDescription($array = [])
 * @method setShortDescription($array = [])
 * @method getMyShortDescription($array = [])
 * @method getShortDescription($array = [])
 * @method setChatMenuButton($array = [])
 * @method setMenuButton($array = [])
 * @method setMenu($array = [])
 * @method setButton($array = [])
 * @method getChatMenuButton($array = [])
 * @method getMenuButton($array = [])
 * @method getMenu($array = [])
 * @method getButton($array = [])
 * @method setMyDefaultAdministratorRights($array = [])
 * @method setMyDefaultAdminRights($array = [])
 * @method setMyDefaultRights($array = [])
 * @method setDefaultRights($array = [])
 * @method getMyDefaultAdministratorRights($array = [])
 * @method getMyDefaultAdminRights($array = [])
 * @method getMyDefaultRights($array = [])
 * @method getDefaultRights($array = [])
 * @method editMessageText($array)
 * @method editText($array)
 * @method editMessageCaption($array)
 * @method editCap($array)
 * @method editCaption($array)
 * @method editMessageMedia($array)
 * @method editMedia($array)
 * @method editMessageReplyMarkup ($array = [])
 * @method editReply($array = [])
 * @method editKeyboard($array = [])
 * @method stopPoll($array)
 * @method deleteMessage($array = [])
 * @method del($array = [])
 * @method deleteMessages($array)
 * @method dels($array)
 * @method sendSticker($array)
 * @method sticker($array)
 * @method getStickerSet($array)
 * @method uploadStickerFile($array)
 * @method uploadSticker($array)
 * @method createNewStickerSet($array)
 * @method createSticker($array)
 * @method addStickerToSet($array)
 * @method addSticker($array)
 * @method setStickerPositionInSet($array)
 * @method setStickerPosition($array)
 * @method setStickerPos($array)
 * @method deleteStickerFromSet($array)
 * @method deleteSticker($array)
 * @method setStickerEmojiList($array)
 * @method setStickerKeywords($array)
 * @method setStickerMaskPosition($array)
 * @method setStickerSetTitle($array)
 * @method setStickerSetThumb($array)
 * @method setStickerThumb($array)
 * @method setCustomEmojiStickerSetThumbnail($array)
 * @method deleteStickerSet($array)
 * @method answerInlineQuery($array = [])
 * @method answerInline($array = [])
 * @method answerWebAppQuery($array)
 * @method answerWebApp($array)
 * @method answerWeb($array)
 * @method sendInvoice($array)
 * @method invoice($array)
 * @method answerShippingQuery($array)
 * @method answerShipping($array)
 * @method answerPreCheckoutQuery($array)
 * @method answerPreCheckout($array)
 * @method answerPreCheck($array)
 * @method setPassportDataErrors($array)
 * @method setPassport($array)
 * @method sendGame($array)
 * @method game($array)
 * @method setGameScore($array)
 * @method gameScore($array)
 * @method getGameHighScores($array = [])
 * @method getGameHigh($array = [])
 * @method getForumTopicIconStickers($array)
 * @method getForumTopicStickers($array)
 * @method createForumTopic($array)
 * @method createTopic($array)
 * @method editForumTopic($array)
 * @method editTopic($array)
 * @method closeForumTopic($array)
 * @method closeTopic($array)
 * @method reopenForumTopic($array)
 * @method reopenTopic($array)
 * @method deleteForumTopic($array)
 * @method deleteTopic($array)
 * @method unpinAllForumTopicMessages($array)
 * @method unpinTopicMessages($array)
 * @method editGeneralForumTopic($array)
 * @method editGeneralTopic($array)
 * @method closeGeneralForumTopic($array = [])
 * @method closeGeneralTopic($array = [])
 * @method reopenGeneralForumTopic($array = [])
 * @method reopenGeneralTopic($array = [])
 * @method hideGeneralForumTopic($array = [])
 * @method hideGeneralTopic($array = [])
 * @method unhideGeneralForumTopic($array = [])
 * @method unhideGeneralTopic($array = [])
 * @method getCustomEmojiStickers($array)
 * @method getCustom($array = [])
 * @link https://bptlib.ir
 */
class BPT {
    private float $version = 2.030;
    private $token;
    private array $settings;
    /**
     * telegram update will save in this var as object , does not effected by array_update option
     */
    public $update;
    public $db;
    public $bot_id;
    private $curl_handler;
    private bool $web_answered = false;

    public function __construct (array $settings) {
        $settings['logger'] ??= true;
        $settings['log_size'] ??= false;
        $settings['auto_update'] ??= true;
        $settings['max_connection'] ??= 40;
        $settings['certificate'] ??= null;
        $settings['base_url'] ??= 'https://api.telegram.org/bot';
        $settings['down_url'] ??= 'https://api.telegram.org/file/bot';
        $settings['forgot_time'] = isset($settings['forgot_time']) && is_numeric($settings['forgot_time']) ? $settings['forgot_time'] : 100;
        $settings['receive'] ??= 'webhook';
        $settings['handler'] ??= true;
        $settings['allowed_updates'] ??= ['message', 'edited_channel_post', 'callback_query', 'inline_query'];
        $settings['security'] ??= false;
        $settings['secure_folder'] ??= false;
        $settings['array_update'] ??= false;
        $settings['split_update'] ??= true;
        $settings['multi'] ??= false;
        $settings['debug'] ??= false;
        $settings['cloudFlare'] ??= true;
        $settings['arvanCloud'] ??= true;
        $settings['telegram_verify'] ??= true;
        $this->settings = $settings;
        if ($settings['logger']) {
            $log_size = round(is_numeric($settings['log_size']) ? $settings['log_size'] : 10, 1);
            $mode = file_exists('BPT.log') && !(filesize('BPT.log') > $log_size * 1024 * 1024) ? 'a' : 'w';
            define('LOG', fopen('BPT.log', $mode));
            if ($mode == 'w') {
                fwrite(LOG, "♥♥♥♥♥♥♥♥♥♥♥♥♥♥ BPT PROTO  ♥♥♥♥♥♥♥♥♥♥♥♥♥♥\nTnx for using our library\nSome information about us :\nAuthor : @Im_Miaad\nHelper : @A_LiReza_ME\nChannel : @BPT_CH\nOur Website : https://bptlib.ir\n\nIf you have any problem with our library\nContact to our supports\n♥♥♥♥♥♥♥♥♥♥♥♥♥♥ BPT PROTO  ♥♥♥♥♥♥♥♥♥♥♥♥♥♥\nINFO : BPT PROTO LOG STARTED ...\nWARNING : THIS FILE AUTOMATICALLY DELETED WHEN ITS SIZE REACHED $log_size MB\n\n");
            }
        }
        if (!isset($settings['token'])) {
            $this->logger('error', 'token not found');
            throw new exception('token missing');
        }
        if (!$this->isToken(['token' => $settings['token']])) {
            $this->logger('error', 'token format is not true');
            throw new exception('token is not true');
        }
        $this->token = $settings['token'];
        $this->bot_id = explode(':', $settings['token'])[0];
        if (!$settings['debug']) {
            if ($settings['security']) {
                ini_set('magic_quotes_gpc', 'off');
                ini_set('sql.safe_mode', 'on');
                if (!$settings['multi']) {
                    ini_set('max_execution_time', 30);
                    ini_set('max_input_time', 30);
                }
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
        if (empty($settings['db'])) {
            $this->db = null;
        }
        else {
            if (!isset($settings['db']['type'])) {
                $settings['db']['type'] = 'json';
            }
            if ($settings['db']['type'] === 'sql') {
                $settings['db']['host'] ??= 'localhost';
                $settings['db']['port'] ??= 3306;
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
    `id` bigint(20) NOT NULL,
    `type` enum('group','supergroup','channel') NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `private` (
    `id` bigint(20) NOT NULL,
    `last_active` int(11) NOT NULL DEFAULT 0,
    `phone_number` varchar(16) DEFAULT NULL,
    `step` varchar(32) DEFAULT NULL,
    `value` text DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `users` (
    `id` bigint(20) NOT NULL,
    `gid` bigint(20) NOT NULL,
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
                $settings['db']['file_name'] ??= 'BPT-DB.json';
                $this->db = $settings['db'];
                if (!file_exists($settings['db']['file_name'])) {
                    file_put_contents($settings['db']['file_name'], json_encode([
                        'private'    => [],
                        'group'      => [],
                        'supergroup' => [],
                        'channel'    => [],
                    ]));
                }
            }
            else {
                $this->logger('error', 'Wrong db type , it must be json or sql in lowercase');
                throw new exception('wrong db type');
            }
        }
        if ($this->settings['auto_update']) {
            $this->bptUpdate();
        }
        if ($settings['receive'] === 'webhook') {
            if ($settings['multi']) {
                if (!file_exists('BPT-M.look')) {
                    if (!file_exists('BPT-MC.look')) {
                        if (file_exists('BPT.look')) {
                            unlink('BPT.look');
                        }
                        if (file_exists('getUpdate.lock')) {
                            unlink('getUpdate.lock');
                        }
                        if (empty($settings['certificate'])) {
                            $url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
                            $settings['certificate'] = null;
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
                            $res = $this->setWebhook([
                                'url'             => $url2,
                                'allowed_updates' => json_encode($settings['allowed_updates']),
                                'max_connections' => $settings['max_connection'],
                                'certificate'     => $settings['certificate'],
                            ]);
                            if ($res['ok'] === true) {
                                $this->logger('info', 'webhook was set successfully');
                                touch('BPT-M.look');
                                die('webhook was set');
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
                            for ($i = 0; $i < 10; $i++) {
                                $ch = curl_init($url3);
                                curl_setopt_array($ch, [
                                    CURLOPT_POSTFIELDS        => json_encode([]),
                                    CURLOPT_TIMEOUT_MS        => 100,
                                    CURLOPT_NOBODY            => true,
                                    CURLOPT_RETURNTRANSFER    => true,
                                    CURLOPT_SSL_VERIFYPEER    => false,
                                    CURLOPT_SSL_VERIFYHOST    => false,
                                    CURLOPT_CONNECTTIMEOUT_MS => 100,
                                    CURLOPT_HTTPHEADER        => [
                                        'accept: application/json',
                                        'content-type: application/json',
                                    ],
                                ]);
                                $start = microtime(true);
                                curl_exec($ch);
                                $times[] = ((microtime(true) - $start) * 1000);
                            }
                            $timeout = round(array_sum($times) / count($times));
                            $timeout = $timeout > 50 ? $timeout + 10 : 50;
                            file_put_contents('receiver.php', '<?php http_response_code(200);ignore_user_abort();$ch = curl_init(\'' . $url . '\');curl_setopt_array($ch, [CURLOPT_POSTFIELDS => json_encode([\'update\'=>file_get_contents(\'php://input\'),\'ip\'=>$_SERVER[\'REMOTE_ADDR\']]), CURLOPT_TIMEOUT_MS => ' . $timeout . ', CURLOPT_RETURNTRANSFER => true, CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST => false, CURLOPT_CONNECTTIMEOUT_MS => ' . $timeout . ', CURLOPT_HTTPHEADER => [\'accept: application/json\', \'content-type: application/json\']]);curl_exec($ch);curl_close($ch);?>');
                            $res = $this->setWebhook([
                                'url'             => $url2,
                                'allowed_updates' => json_encode($settings['allowed_updates']),
                                'max_connections' => $settings['max_connection'],
                                'certificate'     => $settings['certificate'],
                            ]);
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
                        endPage();
                    }
                    else {
                        $input = json_decode(file_get_contents("php://input"), true);
                        if ($settings['telegram_verify'] && !$this->isTelegram(['ip' => $input['ip']])) {
                            $this->logger('warning', 'not authorized access denied');
                            endPage();
                        }
                        $updates = $input['update'];
                    }
                }
                else {
                    $up = glob('*.update');
                    if (!isset($up[0])) {
                        $this->logger('warning', 'not authorized access denied');
                        endPage();
                    }
                    $up = end($up);
                    $ip = explode('-', $up)[0];
                    if ($settings['telegram_verify'] && !$this->isTelegram(['ip' => $ip])) {
                        $this->logger('warning', 'not authorized access denied');
                        endPage();
                    }
                    $updates = file_get_contents($up);
                    unlink($up);
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
                    $res = $this->setWebhook([
                        'url'             => $url,
                        'allowed_updates' => json_encode($settings['allowed_updates']),
                        'max_connections' => $settings['max_connection'],
                        'certificate'     => $settings['certificate'],
                    ]);
                    if ($res['ok'] !== true) {
                        $this->logger('error', "there is some problem with setWebhook , telegram response :\n" . json_encode($res));
                        print_r($res);
                        die();
                    }
                    touch('BPT.look');
                    $this->logger('info', 'webhook was set successfully');
                    die('Done');
                }
                if ($settings['telegram_verify'] && !$this->isTelegram(['ip' => $_SERVER['REMOTE_ADDR']])) {
                    $this->logger('warning', 'not authorized access denied. IP : ' . $_SERVER['REMOTE_ADDR']);
                    endPage();
                }
                $updates = file_get_contents("php://input");
            }
            $update = json_decode($updates, $settings['array_update']);
            if ($update) {
                $this->update = json_decode($updates);
                if ($settings['array_update']) {
                    if (isset($update['message']['text']) || isset($update['edited_message']['text'])) {
                        $type = isset($update['message']) ? 'message' : 'edited_message';
                        $text = &$update[$type]['text'];
                        if ($settings['security']) {
                            $text = htmlentities(strip_tags(htmlspecialchars(stripslashes(trim($text)))));
                        }
                        if (strpos($text, '/') === 0) {
                            preg_match('/\/([a-zA-Z_0-9]{1,64})(@[a-zA-Z]\w{1,28}bot)?( [\S]{1,64})?/', $text, $result);
                            if (!empty($result[1])) {
                                $update[$type]['commend'] = $result[1];
                            }
                            if (!empty($result[2])) {
                                $update[$type]['commend_username'] = $result[2];
                            }
                            if (!empty($result[3])) {
                                $update[$type]['commend_payload'] = $result[3];
                            }
                        }
                    }
                }
                else {
                    if (isset($update->message->text) || isset($update->edited_message->text)) {
                        $type = isset($update->message) ? 'message' : 'edited_message';
                        $text = &$update->{$type}->text;
                        if ($settings['security']) {
                            $text = htmlentities(strip_tags(htmlspecialchars(stripslashes(trim($text)))));
                        }
                        if (strpos($text, '/') === 0) {
                            preg_match('/\/([a-zA-Z_0-9]{1,64})(@[a-zA-Z]\w{1,28}bot)?( [\S]{1,64})?/', $text, $result);
                            if (!empty($result[1])) {
                                $update->{$type}->commend = $result[1];
                            }
                            if (!empty($result[2])) {
                                $update->{$type}->commend_username = $result[2];
                            }
                            if (!empty($result[3])) {
                                $update->{$type}->commend_payload = $result[3];
                            }
                        }
                    }
                }
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
                    if ($settings['split_update']) {
                        if ($settings['array_update']) {
                            if (isset($update['message']) && $message_update === true) {
                                $this->users($update['message'], 'message');
                                $this->message($update['message']);
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
                                $this->users($update->message, 'message');
                                $this->message($update->message);
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
                    else {
                        $this->logger('warning', ' If you want use the library with out split update , you most define `all` method in handler');
                    }
                }
            }
            return;
        }
        if ($settings['receive'] === 'getupdates') {
            if (!$settings['handler']) {
                $this->logger('error', 'you can\'t use getupdates receiver when handler is off');
                throw new exception('getupdates not allowed');
            }
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
                file_put_contents('getUpdate.lock', 0);
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
                if (!file_exists('getUpdate.lock')) exit();
                $updates = $this->getUpdates([
                    'allowed_updates' => $settings['allowed_updates'],
                    'offset'          => $last_update,
                    'return_array'    => $settings['array_update'],
                ]);
                $updates = $updates->result ?? $updates['result'];
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
                        $last_update = $update['update_id'] + 1;
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
                        $last_update = $update->update_id + 1;
                    }
                    file_put_contents('getUpdate.lock', $last_update);
                }
            }
        }
    }

    public function __destruct () {
        if (defined('LOG') && is_resource(LOG)) {
            $estimated = (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']) * 1000;
            $this->logger('', "BPT Done in $estimated ms");
        }
        if ($this->curl_handler) {
            curl_close($this->curl_handler);
        }
    }

    public function __call ($action, $data) {
        if (isset($data[0])) $data = $data[0];
        $req_action = str_replace('_', '', strtolower($action));
        $action = $this->methodsAction($req_action);
        if (!empty($action)) {
            $defaults = $this->methodsDefault($action);
            foreach ($defaults as $key => $default) {
                if (is_numeric($key)) {
                    $data[$default] ??= $this->catchFields(['field' => $default]);
                }
                elseif (isset($this->update->{$key}) || $key === 'other') {
                    foreach ($default as $def) {
                        $data[$def] ??= $this->catchFields(['field' => $def]);
                    }
                    break;
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
                if (count($req_param) > 0) {
                    $this->logger('error', "required parameter for this method is not founded.\ninfo : these req parameters are not set :" . json_encode($req_param));
                    throw new exception('required parameters not found');
                }
            }
            if ($req_action === 'kick') {
                if (isset($data['only_if_banned'])) {
                    unset($data['only_if_banned']);
                }
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
        }
        else {
            $this->logger('warning', "$req_action methods not found , but its called anyway");
            $action = $req_action;
        }
        if (isset($data['answer'])) {
            if ($this->web_answered) {
                $this->logger('error', 'you can use answer mode only once for each webhook update and you already did');
                throw new exception('answer mode not allowed');
            }

            if ($this->settings['multi'] === true) {
                $this->logger('error', 'you can\'t use answer mode when multi is on');
                throw new exception('answer mode not allowed bc multi');
            }
            unset($data['token'], $data['forgot'], $data['return_array']);
            foreach ($data as $key => &$value) {
                if (!isset($value)) {
                    unset($data[$key]);
                    continue;
                }
                if (is_array($value) || (is_object($value) && !is_a($value, 'CURLFile'))) {
                    $value = json_encode($value);
                }
            }
            $this->web_answered = true;
            $data["method"] = $action;
            $payload = json_encode($data);
            header('Content-Type: application/json;Content-Length: ' . strlen($payload));
            echo $payload;
            return true;
        }

        if (isset($data['token']) && $data['token'] != $this->token) {
            $token = $data['token'];
            unset($data['token']);
            $curl_handler = curl_init("{$this->settings['base_url']}$token/");
            curl_setopt($curl_handler, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl_handler, CURLOPT_SSL_VERIFYPEER, false);
        }
        else {
            $token = $this->token;
            if (!isset($this->curl_handler)) {
                $this->curl_handler = curl_init("{$this->settings['base_url']}$token/");
                curl_setopt($this->curl_handler, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($this->curl_handler, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($this->curl_handler, CURLOPT_TCP_KEEPALIVE, 1);
            }
            $curl_handler = $this->curl_handler;
        }
        if (isset($data['forgot'])) {
            $timeout  = $this->settings['forgot_time'];
            unset($data['forgot']);
        }
        elseif ($action === 'getUpdates' || $action === 'setWebhook') {
            $timeout  = 5000;
        }
        else {
            $timeout  = 2000;
        }
        curl_setopt($curl_handler, CURLOPT_TIMEOUT_MS, $timeout);
        if (isset($data['return_array'])) {
            $return_array = $data['return_array'];
            unset($data['return_array']);
        }
        else {
            $return_array = true;
        }
        foreach ($data as &$value) {
            if (is_array($value) || (is_object($value) && !is_a($value, 'CURLFile'))) {
                $value = json_encode($value);
            }
        }
        $data['method'] = $action;
        curl_setopt($curl_handler, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($curl_handler);
        if (curl_errno($curl_handler)) {
            $this->logger('warning', curl_error($curl_handler));
        }
        if ($token != $this->token) {
            curl_close($curl_handler);
        }
        return json_decode($result, $return_array);
    }

    private function methodsAction ($input): string {
        return [
            'getupdates'                        => 'getUpdates',
            'getup'                             => 'getUpdates',
            'updates'                           => 'getUpdates',
            'setwebhook'                        => 'setWebhook',
            'setweb'                            => 'setWebhook',
            'webhook'                           => 'setWebhook',
            'deletewebhook'                     => 'deleteWebhook',
            'deleteweb'                         => 'deleteWebhook',
            'delweb'                            => 'deleteWebhook',
            'getwebhookinfo'                    => 'getWebhookInfo',
            'getweb'                            => 'getWebhookInfo',
            'getme'                             => 'getMe',
            'me'                                => 'getMe',
            'logout'                            => 'logOut',
            'close'                             => 'close',
            'sendmessage'                       => 'sendMessage',
            'send'                              => 'sendMessage',
            'forwardmessage'                    => 'forwardMessage',
            'forward'                           => 'forwardMessage',
            'forwardmessages'                   => 'forwardMessages',
            'forwards'                          => 'forwardMessages',
            'copymessage'                       => 'copyMessage',
            'copy'                              => 'copyMessage',
            'copymessages'                      => 'copyMessages',
            'copys'                             => 'copyMessages',
            'sendphoto'                         => 'sendPhoto',
            'photo'                             => 'sendPhoto',
            'sendaudio'                         => 'sendAudio',
            'audio'                             => 'sendAudio',
            'senddocument'                      => 'sendDocument',
            'senddoc'                           => 'sendDocument',
            'document'                          => 'sendDocument',
            'doc'                               => 'sendDocument',
            'sendvideo'                         => 'sendVideo',
            'video'                             => 'sendVideo',
            'sendanimation'                     => 'sendAnimation',
            'animation'                         => 'sendAnimation',
            'sendgif'                           => 'sendAnimation',
            'gif'                               => 'sendAnimation',
            'sendvoice'                         => 'sendVoice',
            'voice'                             => 'sendVoice',
            'sendvideonote'                     => 'sendVideoNote',
            'videonote'                         => 'sendVideoNote',
            'sendmediagroup'                    => 'sendMediaGroup',
            'mediagroup'                        => 'sendMediaGroup',
            'media'                             => 'sendMediaGroup',
            'sendlocation'                      => 'sendLocation',
            'sendloc'                           => 'sendLocation',
            'location'                          => 'sendLocation',
            'loc'                               => 'sendLocation',
            'editmessagelivelocation'           => 'editMessageLiveLocation',
            'editliveloc'                       => 'editMessageLiveLocation',
            'stopmessagelivelocation'           => 'stopMessageLiveLocation',
            'stopliveloc'                       => 'stopMessageLiveLocation',
            'sendvenue'                         => 'sendVenue',
            'venue'                             => 'sendVenue',
            'sendcontact'                       => 'sendContact',
            'contact'                           => 'sendContact',
            'sendpoll'                          => 'sendPoll',
            'poll'                              => 'sendPoll',
            'senddice'                          => 'sendDice',
            'dice'                              => 'sendDice',
            'sendchataction'                    => 'sendChatAction',
            'chataction'                        => 'sendChatAction',
            'action'                            => 'sendChatAction',
            'setmessagereaction'                => 'setMessageReaction',
            'setreaction'                       => 'setMessageReaction',
            'getuserprofilephotos'              => 'getUserProfilePhotos',
            'userphotos'                        => 'getUserProfilePhotos',
            'getfile'                           => 'getFile',
            'file'                              => 'getFile',
            'banchatmember'                     => 'banChatMember',
            'ban'                               => 'banChatMember',
            'kickchatmember'                    => 'banChatMember',
            'kick'                              => 'unbanChatMember',
            'unbanchatmember'                   => 'unbanChatMember',
            'unban'                             => 'unbanChatMember',
            'restrictchatmember'                => 'restrictChatMember',
            'restrict'                          => 'restrictChatMember',
            'promotechatmember'                 => 'promoteChatMember',
            'promote'                           => 'promoteChatMember',
            'setchatadministratorcustomtitle'   => 'setChatAdministratorCustomTitle',
            'customtitle'                       => 'setChatAdministratorCustomTitle',
            'banchatsenderchat'                 => 'banChatSenderChat',
            'banSender'                         => 'banChatSenderChat',
            'unbanchatsenderchat'               => 'unbanChatSenderChat',
            'unbanSender'                       => 'unbanChatSenderChat',
            'setchatpermissions'                => 'setChatPermissions',
            'permissions'                       => 'setChatPermissions',
            'exportchatinvitelink'              => 'exportChatInviteLink',
            'link'                              => 'exportChatInviteLink',
            'createchatinvitelink'              => 'createChatInviteLink',
            'crlink'                            => 'createChatInviteLink',
            'editchatinvitelink'                => 'editChatInviteLink',
            'edlink'                            => 'editChatInviteLink',
            'revokechatinvitelink'              => 'revokeChatInviteLink',
            'relink'                            => 'revokeChatInviteLink',
            'approvechatjoinrequest'            => 'approveChatJoinRequest',
            'acceptjoin'                        => 'approveChatJoinRequest',
            'declinechatjoinrequest'            => 'declineChatJoinRequest',
            'denyjoin'                          => 'declineChatJoinRequest',
            'setchatphoto'                      => 'setChatPhoto',
            'deletechatphoto'                   => 'deleteChatPhoto',
            'setchattitle'                      => 'setChatTitle',
            'title'                             => 'setChatTitle',
            'setchatdescription'                => 'setChatDescription',
            'description'                       => 'setChatDescription',
            'pinchatmessage'                    => 'pinChatMessage',
            'pin'                               => 'pinChatMessage',
            'unpinchatmessage'                  => 'unpinChatMessage',
            'unpin'                             => 'unpinChatMessage',
            'unpinallchatmessages'              => 'unpinAllChatMessages',
            'unpinall'                          => 'unpinAllChatMessages',
            'leavechat'                         => 'leaveChat',
            'leave'                             => 'leaveChat',
            'getchat'                           => 'getChat',
            'chat'                              => 'getChat',
            'getchatadministrators'             => 'getChatAdministrators',
            'admins'                            => 'getChatAdministrators',
            'getchatmembercount'                => 'getChatMembersCount',
            'getchatmemberscount'               => 'getChatMembersCount',
            'memberscount'                      => 'getChatMembersCount',
            'getchatmember'                     => 'getChatMember',
            'member'                            => 'getChatMember',
            'setchatstickerset'                 => 'setChatStickerSet',
            'setsticker'                        => 'setChatStickerSet',
            'deletechatstickerset'              => 'deleteChatStickerSet',
            'delsticker'                        => 'deleteChatStickerSet',
            'getforumtopiciconstickers'         => 'getForumTopicIconStickers',
            'getforumtopicstickers'             => 'getForumTopicIconStickers',
            'createforumtopic'                  => 'createForumTopic',
            'createtopic'                       => 'createForumTopic',
            'editforumtopic'                    => 'editForumTopic',
            'edittopic'                         => 'editForumTopic',
            'closeforumtopic'                   => 'closeForumTopic',
            'closetopic'                        => 'closeForumTopic',
            'reopenforumtopic'                  => 'reopenForumTopic',
            'reopentopic'                       => 'reopenForumTopic',
            'deleteforumtopic'                  => 'deleteForumTopic',
            'deletetopic'                       => 'deleteForumTopic',
            'unpinallforumtopicmessages'        => 'unpinAllForumTopicMessages',
            'unpintopicmessages'                => 'unpinAllForumTopicMessages',
            'editgeneralforumtopic'             => 'editGeneralForumTopic',
            'editgeneraltopic'                  => 'editGeneralForumTopic',
            'closegeneralforumtopic'            => 'closeGeneralForumTopic',
            'closegeneraltopic'                 => 'closeGeneralForumTopic',
            'reopengeneralforumtopic'           => 'reopenGeneralForumTopic',
            'reopengeneraltopic'                => 'reopenGeneralForumTopic',
            'hidegeneralforumtopic'             => 'hideGeneralForumTopic',
            'hidegeneraltopic'                  => 'hideGeneralForumTopic',
            'unhidegeneralforumtopic'           => 'unhideGeneralForumTopic',
            'unhidegeneraltopic'                => 'unhideGeneralForumTopic',
            'unpinAllGeneralForumTopicMessages' => 'unpinAllGeneralForumTopicMessages',
            'unpinGeneralTopicMessages'         => 'unpinAllGeneralForumTopicMessages',
            'answercallbackquery'               => 'answerCallbackQuery',
            'answer'                            => 'answerCallbackQuery',
            'getuserchatboosts'                 => 'getUserChatBoosts',
            'getchatboosts'                     => 'getUserChatBoosts',
            'getuserboosts'                     => 'getUserChatBoosts',
            'setmycommands'                     => 'setMyCommands',
            'setcommands'                       => 'setMyCommands',
            'deletemycommands'                  => 'deleteMyCommands',
            'deletecommands'                    => 'deleteMyCommands',
            'getmycommands'                     => 'getMyCommands',
            'getcommands'                       => 'getMyCommands',
            'setmyname'                         => 'setMyName',
            'getmyname'                         => 'getMyName',
            'setmydescription'                  => 'setMyDescription',
            'setdescription'                    => 'setMyDescription',
            'getmydescription'                  => 'getMyDescription',
            'getdescription'                    => 'getMyDescription',
            'setmyshortdescription'             => 'setMyShortDescription',
            'setshortdescription'               => 'setMyShortDescription',
            'getmyshortdescription'             => 'getMyShortDescription',
            'getshortdescription'               => 'getMyShortDescription',
            'setchatmenubutton'                 => 'setChatMenuButton',
            'setmenubutton'                     => 'setChatMenuButton',
            'setmenu'                           => 'setChatMenuButton',
            'setbutton'                         => 'setChatMenuButton',
            'getchatmenubutton'                 => 'getChatMenuButton',
            'getmenubutton'                     => 'getChatMenuButton',
            'getmenu'                           => 'getChatMenuButton',
            'getbutton'                         => 'getChatMenuButton',
            'setmydefaultadministratorrights'   => 'setMyDefaultAdministratorRights',
            'setmydefaultadminrights'           => 'setMyDefaultAdministratorRights',
            'setmydefaultrights'                => 'setMyDefaultAdministratorRights',
            'setdefaultrights'                  => 'setMyDefaultAdministratorRights',
            'getmydefaultadministratorrights'   => 'getMyDefaultAdministratorRights',
            'getmydefaultadminrights'           => 'getMyDefaultAdministratorRights',
            'getmydefaultrights'                => 'getMyDefaultAdministratorRights',
            'getdefaultrights'                  => 'getMyDefaultAdministratorRights',
            'editmessagetext'                   => 'editMessageText',
            'edittext'                          => 'editMessageText',
            'editmessagecaption'                => 'editMessageCaption',
            'editcap'                           => 'editMessageCaption',
            'editcaption'                       => 'editMessageCaption',
            'editmessagemedia'                  => 'editMessageMedia',
            'editmedia'                         => 'editMessageMedia',
            'editmessagereplymarkup'            => 'editMessageReplyMarkup',
            'editreply'                         => 'editMessageReplyMarkup',
            'editkeyboard'                      => 'editMessageReplyMarkup',
            'stoppoll'                          => 'stopPoll',
            'deletemessage'                     => 'deleteMessage',
            'del'                               => 'deleteMessage',
            'deletemessages'                    => 'deleteMessages',
            'dels'                              => 'deleteMessages',
            'sendsticker'                       => 'sendSticker',
            'sticker'                           => 'sendSticker',
            'getstickerset'                     => 'getStickerSet',
            'uploadstickerfile'                 => 'uploadStickerFile',
            'uploadsticker'                     => 'uploadStickerFile',
            'getcustomemojistickers'            => 'getCustomEmojiStickers',
            'getcustom'                         => 'getCustomEmojiStickers',
            'createnewstickerset'               => 'createNewStickerSet',
            'createsticker'                     => 'createNewStickerSet',
            'addstickertoset'                   => 'addStickerToSet',
            'addsticker'                        => 'addStickerToSet',
            'setstickerpositioninset'           => 'setStickerPositionInSet',
            'setstickerposition'                => 'setStickerPositionInSet',
            'setstickerpos'                     => 'setStickerPositionInSet',
            'deletestickerfromset'              => 'deleteStickerFromSet',
            'deletesticker'                     => 'deleteStickerFromSet',
            'setstickeremojilist'               => 'setStickerEmojiList',
            'setstickerkeywords'                => 'setStickerKeywords',
            'setstickermaskposition'            => 'setStickerMaskPosition',
            'setstickersettitle'                => 'setStickerSetTitle',
            'setstickersetthumb'                => 'setStickerSetThumb',
            'setstickerthumb'                   => 'setStickerSetThumb',
            'setcustomemojistickersetthumbnail' => 'setCustomEmojiStickerSetThumbnail',
            'deletestickerset'                  => 'deleteStickerSet',
            'answerinlinequery'                 => 'answerInlineQuery',
            'answerinline'                      => 'answerInlineQuery',
            'answerwebappquery'                 => 'answerWebAppQuery',
            'answerwebapp'                      => 'answerWebAppQuery',
            'answerweb'                         => 'answerWebAppQuery',
            'sendinvoice'                       => 'sendInvoice',
            'invoice'                           => 'sendInvoice',
            'createinvoicelink'                 => 'createInvoiceLink',
            'createinvoice'                     => 'createInvoiceLink',
            'answershippingquery'               => 'answerShippingQuery',
            'answershipping'                    => 'answerShippingQuery',
            'answerprecheckoutquery'            => 'answerPreCheckoutQuery',
            'answerprecheckout'                 => 'answerPreCheckoutQuery',
            'answerprecheck'                    => 'answerPreCheckoutQuery',
            'setpassportdataerrors'             => 'setPassportDataErrors',
            'setpassport'                       => 'setPassportDataErrors',
            'sendgame'                          => 'sendGame',
            'game'                              => 'sendGame',
            'setgamescore'                      => 'setGameScore',
            'gamescore'                         => 'setGameScore',
            'getgamehighscores'                 => 'getGameHighScores',
            'getgamehigh'                       => 'getGameHighScores',
        ][$input] ?? '';
    }

    private function methodsDefault ($input) {
        return [
            'setWebhook'                        => ['url'],
            'sendMessage'                       => ['chat_id'],
            'forwardMessage'                    => ['from_chat_id', 'message_id'],
            'forwardMessages'                   => ['from_chat_id'],
            'copyMessage'                       => ['from_chat_id', 'message_id'],
            'copyMessages'                      => ['from_chat_id'],
            'sendPhoto'                         => ['chat_id'],
            'sendAudio'                         => ['chat_id'],
            'sendDocument'                      => ['chat_id'],
            'sendVideo'                         => ['chat_id'],
            'sendAnimation'                     => ['chat_id'],
            'sendVoice'                         => ['chat_id'],
            'sendVideoNote'                     => ['chat_id'],
            'sendMediaGroup'                    => ['chat_id'],
            'sendLocation'                      => ['chat_id'],
            'sendContact'                       => ['chat_id'],
            'sendPoll'                          => ['chat_id'],
            'sendDice'                          => ['chat_id'],
            'sendChatAction'                    => ['chat_id', 'action'],
            'setMessageReaction'                => ['chat_id', 'message_id'],
            'getUserProfilePhotos'              => ['user_id'],
            'getFile'                           => ['file_id'],
            'banChatMember'                     => ['chat_id', 'user_id'],
            'kickChatMember'                    => ['chat_id', 'user_id'],
            'unbanChatMember'                   => ['chat_id', 'user_id'],
            'restrictChatMember'                => ['chat_id', 'user_id'],
            'promoteChatMember'                 => ['chat_id', 'user_id'],
            'setChatAdministratorCustomTitle'   => ['chat_id', 'user_id'],
            'banChatSenderChat'                 => ['chat_id'],
            'unbanChatSenderChat'               => ['chat_id'],
            'setChatPermissions'                => ['chat_id'],
            'exportChatInviteLink'              => ['chat_id'],
            'createChatInviteLink'              => ['chat_id'],
            'editChatInviteLink'                => ['chat_id'],
            'revokeChatInviteLink'              => ['chat_id'],
            'approveChatJoinRequest'            => ['chat_id', 'user_id'],
            'declineChatJoinRequest'            => ['chat_id', 'user_id'],
            'setChatPhoto'                      => ['chat_id'],
            'deleteChatPhoto'                   => ['chat_id'],
            'setChatTitle'                      => ['chat_id'],
            'setChatDescription'                => ['chat_id'],
            'pinChatMessage'                    => ['chat_id'],
            'unpinChatMessage'                  => ['chat_id'],
            'unpinAllChatMessages'              => ['chat_id'],
            'leaveChat'                         => ['chat_id'],
            'getChat'                           => ['chat_id'],
            'getChatAdministrators'             => ['chat_id'],
            'getChatMembersCount'               => ['chat_id'],
            'getChatMember'                     => ['chat_id', 'user_id'],
            'setChatStickerSet'                 => ['chat_id'],
            'deleteChatStickerSet'              => ['chat_id'],
            'unpinAllGeneralForumTopicMessages' => ['chat_id'],
            'answerCallbackQuery'               => ['callback_query_id'],
            'getUserChatBoosts'                 => ['chat_id', 'user_id'],
            'editMessageText'                   => ['inline_query' => ['inline_message_id'], 'other' => ['chat_id', 'message_id']],
            'editMessageCaption'                => ['inline_query' => ['inline_message_id'],'other' => ['chat_id', 'message_id']],
            'editMessageMedia'                  => ['inline_query' => ['inline_message_id'], 'other'=> ['chat_id', 'message_id']],
            'editMessageReplyMarkup'            => ['inline_query' => ['inline_message_id'], 'other' => ['chat_id', 'message_id']],
            'stopPoll'                          => ['chat_id', 'message_id'],
            'deleteMessage'                     => ['chat_id', 'message_id'],
            'deleteMessages'                    => ['chat_id'],
            'sendSticker'                       => ['chat_id'],
            'uploadStickerFile'                 => ['user_id'],
            'createNewStickerSet'               => ['user_id'],
            'addStickerToSet'                   => ['user_id'],
            'setStickerSetThumb'                => ['user_id'],
            'answerInlineQuery'                 => ['inline_query_id'],
            'sendInvoice'                       => ['chat_id'],
            'answerShippingQuery'               => ['shipping_query_id'],
            'answerPreCheckoutQuery'            => ['pre_checkout_query_id'],
            'setPassportDataErrors'             => ['user_id'],
            'sendGame'                          => ['chat_id'],
            'setGameScore'                      => ['user_id', 'inline_query' => ['inline_message_id'], 'other' => ['chat_id', 'message_id']],
            'getGameHighScores'                 => ['user_id', 'inline_query' => ['inline_message_id'], 'other' => ['chat_id', 'message_id']],
            'createForumTopic'                  => ['chat_id'],
            'editForumTopic'                    => ['chat_id'],
            'closeForumTopic'                   => ['chat_id'],
            'reopenForumTopic'                  => ['chat_id'],
            'deleteForumTopic'                  => ['chat_id'],
            'unpinAllForumTopicMessages'        => ['chat_id'],
            'editGeneralForumTopic'             => ['chat_id'],
            'closeGeneralForumTopic'            => ['chat_id'],
            'reopenGeneralForumTopic'           => ['chat_id'],
            'hideGeneralForumTopic'             => ['chat_id'],
            'unhideGeneralForumTopic'           => ['chat_id'],
        ][$input] ?? [];
    }

    private function methodsRequire ($input) {
        return [
            'sendMessage'                        => ['text'],
            'forwardMessage'                     => ['chat_id'],
            'copyMessage'                        => ['chat_id'],
            'sendPhoto'                          => ['photo'],
            'sendAudio'                          => ['audio'],
            'sendDocument'                       => ['document'],
            'sendVideo'                          => ['video'],
            'sendAnimation'                      => ['animation'],
            'sendVoice'                          => ['voice'],
            'sendVideoNote'                      => ['video_note'],
            'sendMediaGroup'                     => ['media'],
            'sendLocation'                       => ['latitude', 'longitude'],
            'editMessageLiveLocation'            => ['latitude', 'longitude'],
            'sendVenue'                          => ['latitude', 'longitude', 'title', 'address'],
            'sendContact'                        => ['phone_number', 'first_name'],
            'sendPoll'                           => ['question', 'options'],
            'restrictChatMember'                 => ['permissions'],
            'setChatAdministratorCustomTitle'    => ['custom_title'],
            'banChatSenderChat'                  => ['sender_chat_id'],
            'unbanChatSenderChat'                => ['sender_chat_id'],
            'setChatPermissions'                 => ['permissions'],
            'editChatInviteLink'                 => ['invite_link'],
            'revokeChatInviteLink'               => ['invite_link'],
            'setChatPhoto'                       => ['photo'],
            'setChatTitle'                       => ['title'],
            'setChatStickerSet'                  => ['sticker_set_name'],
            'setMyCommands'                      => ['commands'],
            'editMessageText'                    => ['text'],
            'editMessageMedia'                   => ['media'],
            'sendSticker'                        => ['sticker'],
            'getStickerSet'                      => ['name'],
            'uploadStickerFile'                  => ['png_sticker'],
            'createNewStickerSet'                => ['name', 'title', 'emojis'],
            'addStickerToSet'                    => ['name', 'emojis'],
            'setStickerPositionInSet'            => ['position', 'sticker'],
            'deleteStickerFromSet'               => ['sticker'],
            'setStickerEmojiList'                => ['sticker', 'emoji_list'],
            'setStickerKeywords'                 => ['sticker'],
            'setStickerMaskPosition'             => ['sticker'],
            'setStickerSetTitle'                 => ['sticker', 'title'],
            'setStickerSetThumb'                 => ['name'],
            'answerInlineQuery'                  => ['results'],
            'answerwebappquery'                  => ['web_app_query_id', 'result'],
            'sendInvoice'                        => ['title', 'description', 'payload', 'provider_token', 'currency', 'prices'],
            'answerShippingQuery'                => ['ok'],
            'answerPreCheckoutQuery'             => ['ok'],
            'setPassportDataErrors'              => ['errors'],
            'sendGame'                           => ['game_short_name'],
            'setGameScore'                       => ['score'],
            'createForumTopic'                   => ['name'],
            'getCustomEmojiStickers'             => ['custom_emoji_ids'],
            'editGeneralForumTopic'              => ['name'],
            'setCustomEmojiStickerSetThumbnail'  => ['name'],
            'deleteStickerSet'                   => ['name']
        ][$input] ?? [];
    }

    private function methodsFile ($input): array {
        return [
            'sendPhoto'           => ['photo'],
            'sendAudio'           => ['audio', 'thumbnail'],
            'sendDocument'        => ['document', 'thumbnail'],
            'sendVideo'           => ['video', 'thumbnail'],
            'sendAnimation'       => ['animation', 'thumbnail'],
            'sendVoice'           => ['voice', 'thumbnail'],
            'sendVideoNote'       => ['video_note', 'thumbnail'],
            'setChatPhoto'        => ['photo'],
            'sendSticker'         => ['sticker'],
            'uploadStickerFile'   => ['png_sticker'],
            'createNewStickerSet' => ['png_sticker', 'tgs_sticker'],
            'addStickerToSet'     => ['png_sticker', 'tgs_sticker'],
            'setStickerSetThumb'  => ['thumbnail'],
        ][$input] ?? [];
    }

    private function bptUpdate () {
        if (file_exists('update.lock') && filemtime('update.lock') + 6 * 3600 >= time()) {
            return;
        }
        touch('update.lock');
        $res = file_get_contents("https://dl.bptlib.ir/update.php?ver=$this->version");
        if ($res === '[]') {
            return;
        }
        $res = json_decode($res, true);
        if (!isset($res['file'])) {
            return;
        }
        copy('https://dl.bptlib.ir/BPT.php', 'BPT.php');
        $this->logger('info', 'BPT Updates successfully');
    }

    private function logger ($type, $text) {
        if (!$this->settings['logger']) {
            return;
        }
        fwrite(LOG, date('Y/m/d H:i:s') . ($type !== '' ? " : ⤵\n$type" : '') . " : $text\n");
    }

    private function users ($update, $update_type) {
        if (empty($this->db)) {
            return;
        }
        if ($this->settings['db']['type'] === 'json') {
            $BPT_DB = json_decode(file_get_contents($this->settings['db']['file_name']), true);
            if ($update_type === 'message' || $update_type === 'edit') {
                if ($this->settings['array_update']) {
                    $type = $update['chat']['type'];
                    $id = $update['chat']['id'];
                    $user_id = $update['from']['id'];
                    if (isset($update['left_chat_member'])) {
                        $left = $update['left_chat_member'];
                    }
                    elseif (isset($update['new_chat_members'])) $news = $update['new_chat_members'];
                }
                else {
                    $type = $update->chat->type;
                    $id = $update->chat->id;
                    $user_id = $update->from->id;
                    if (isset($update->left_chat_member)) {
                        $left = $update->left_chat_member;
                    }
                    elseif (isset($update->new_chat_members)) $news = $update->new_chat_members;
                }
                if (!isset($BPT_DB[$type][$id])) $BPT_DB[$type][$id] = [];
                if ($type !== 'private') {
                    if (isset($left)) {
                        $user_id = $left['id'] ?? $left->id;
                        $BPT_DB[$type][$id]['users'][$user_id]['leaved'] = true;
                    }
                    elseif (isset($news)) {
                        foreach ($news as $user) {
                            $user_id = $user['id'] ?? $user->id;
                            $BPT_DB[$type][$id]['users'][$user_id] ??= [];
                            unset($BPT_DB[$type][$id]['users'][$user_id]['leaved']);
                        }
                    }
                    else $BPT_DB[$type][$id]['users'][$user_id] ??= [];
                    $BPT_DB[$type][$id]['users'][$user_id]['last_active'] = time();
                }
                else $BPT_DB[$type][$id]['last_active'] = time();
            }
            elseif ($update_type === 'inline') {
                $id = $this->settings['array_update'] ? $update['from']['id'] : $update->from->id;
                if (!isset($BPT_DB['private'][$id])) {
                    $BPT_DB['private'][$id] = ['last_active' => time()];
                }
                else $BPT_DB['private'][$id]['last_active'] = time();
            }
            elseif ($update_type === 'callback') {
                if ($this->settings['array_update']) {
                    $type = $update['message']['chat']['type'];
                    $id = $update['message']['chat']['id'];
                    $user_id = $update['message']['from']['id'];
                }
                else {
                    $type = $update->message->chat->type;
                    $id = $update->message->chat->id;
                    $user_id = $update->message->from->id;
                }
                if (!isset($BPT_DB[$type][$id])) $BPT_DB[$type][$id] = [];
                if ($type !== 'private') {
                    if (!isset($BPT_DB[$type][$id]['users'][$user_id])) $BPT_DB[$type][$id]['users'][$user_id] = [];
                    $BPT_DB[$type][$id]['users'][$user_id]['last_active'] = time();
                }
                else $BPT_DB[$type][$id]['last_active'] = time();
            }
            file_put_contents($this->settings['db']['file_name'], json_encode($BPT_DB));
            return;
        }
        if ($this->settings['db']['type'] === 'sql') {
            if ($update_type === 'message' || $update_type === 'edit') {
                if ($this->settings['array_update']) {
                    $type = $update['chat']['type'];
                    $id = $update['chat']['id'];
                    $user_id = $update['from']['id'];
                }
                else {
                    $type = $update->chat->type;
                    $id = $update->chat->id;
                    $user_id = $update->from->id;
                }
                if ($type === 'private') {
                    $info = $this->db->query("select `id` from `private` where `id` = $user_id limit 1")->num_rows;
                    if ($info < 1) {
                        $this->db->query("INSERT INTO `private`(`id`) VALUES ($user_id)");
                    }
                    else $this->db->query("update `private` set `last_active` = " . time() . " where `id` = $user_id limit 1");
                }
                else {
                    $info = $this->db->query("select `id` from `chats` where `id` = $id limit 1")->num_rows;
                    if ($info < 1) {
                        $this->db->query("INSERT INTO `chats`(`id`,`type`) VALUES ($id,'$type')");
                    }
                    else {
                        $time = time();
                        $info = $this->db->query("select `id` from `users` where `id` = $id and `gid` = $id limit 1")->num_rows;
                        if ($info < 1) {
                            $this->db->query("INSERT INTO `users`(`id`,`gid`,`last_active`) VALUES ($id,'$type',$time)");
                        }
                        else $this->db->query("update `users` set `last_active` = $time where `id` = $user_id and `gid` = $id limit 1");
                    }
                }
                return;
            }
            if ($update_type === 'inline') {
                $id = $this->settings['array_update'] ? $update['from']['id'] : $update->from->id;
                $info = $this->db->query("select `id` from `private` where `id` = $id limit 1")->num_rows;
                if ($info < 1) {
                    $this->db->query("INSERT INTO `private`(`id`) VALUES ($id)");
                }
                else $this->db->query("update `private` set `last_active` = " . time() . " where `id` = $id limit 1");
                return;
            }
            if ($update_type === 'callback') {
                if ($this->settings['array_update']) {
                    $type = $update['message']['chat']['type'];
                    $id = $update['message']['chat']['id'];
                    $user_id = $update['message']['from']['id'];
                }
                else {
                    $type = $update->message->chat->type;
                    $id = $update->message->chat->id;
                    $user_id = $update->message->from->id;
                }
                if ($type === 'private') {
                    $info = $this->db->query("select `id` from `private` where `id` = $user_id limit 1")->num_rows;
                    if ($info < 1) {
                        $this->db->query("INSERT INTO `private`(`id`) VALUES ($user_id)");
                    }
                    else $this->db->query("update `private` set `last_active` = " . time() . " where `id` = $user_id limit 1");
                }
                else {
                    $info = $this->db->query("select `id` from `chats` where `id` = $id limit 1")->num_rows;
                    if ($info < 1) {
                        $this->db->query("INSERT INTO `chats`(`id`,`type`) VALUES ($id,'$type')");
                    }
                    else $this->db->query("update `users` set `last_active` = " . time() . " where `id` = $user_id and `gid` = $id limit 1");
                }
            }
        }
    }

    /** ---------- Extra Methods ----------- */
    /**
     * You can catch field you want from telegram update. default values are caught by this method too
     *
     * e.g. => $this->catchFields(['field'=>'chat_id']);
     *
     * @param array $array e.g. => ['field'=>'chat_id']
     *
     * @return false|mixed|string
     * @throws exception
     */
    public function catchFields (array $array) {
        if (!isset($array['field'])) {
            $this->logger('error', "BPT catchFields method used\nfield parameter not found");
            throw new exception('field parameter not found');
        }
        $field = $array['field'];
        if ($field === 'chat_id' || $field === 'from_chat_id') {
            if (isset($this->update->message)) return $this->update->message->chat->id;
            if (isset($this->update->edited_message)) return $this->update->edited_message->chat->id;
            if (isset($this->update->inline_query)) return $this->update->inline_query->from->id;
            if (isset($this->update->callback_query)) return $this->update->callback_query->from->id;
            if (isset($this->update->chat_join_request)) return $this->update->chat_join_request->chat->id;
            return false;
        }
        if ($field === 'user_id') {
            if (isset($this->update->message)) return $this->update->message->from->id;
            if (isset($this->update->edited_message)) return $this->update->edited_message->from->id;
            if (isset($this->update->inline_query)) return $this->update->inline_query->from->id;
            if (isset($this->update->callback_query)) return $this->update->callback_query->from->id;
            if (isset($this->update->chat_join_request)) return $this->update->chat_join_request->from->id;
            return false;
        }
        if ($field === 'message_id') {
            if (isset($this->update->message)) return $this->update->message->message_id;
            if (isset($this->update->edited_message)) return $this->update->edited_message->message_id;
            if (isset($this->update->callback_query)) return $this->update->callback_query->message->message_id;
            return false;
        }
        if ($field === 'file_id') {
            if (isset($this->update->message)) $type = 'message';
            elseif (isset($this->update->edited_message)) $type = 'edited_message';
            else return false;
            if (isset($this->update->{$type}->animation)) return $this->update->{$type}->animation->file_id;
            if (isset($this->update->{$type}->audio)) return $this->update->{$type}->audio->file_id;
            if (isset($this->update->{$type}->document)) return $this->update->{$type}->document->file_id;
            if (isset($this->update->{$type}->photo)) return end($this->update->{$type}->photo)->file_id;
            if (isset($this->update->{$type}->sticker)) return $this->update->{$type}->sticker->file_id;
            if (isset($this->update->{$type}->video)) return $this->update->{$type}->video->file_id;
            if (isset($this->update->{$type}->video_note)) return $this->update->{$type}->video_note->file_id;
            if (isset($this->update->{$type}->voice)) return $this->update->{$type}->voice->file_id;
            return false;
        }
        if ($field === 'callback_query_id') {
            if (isset($this->update->callback_query)) return $this->update->callback_query->id;
            return false;
        }
        if ($field === 'shipping_query_id') {
            if (isset($this->update->shipping_query)) return $this->update->shipping_query->id;
            return false;
        }
        if ($field === 'pre_checkout_query_id') {
            if (isset($this->update->pre_checkout_query)) return $this->update->pre_checkout_query->id;
            return false;
        }
        if ($field === 'inline_query_id') {
            if (isset($this->update->inline_query)) return $this->update->inline_query->id;
            return false;
        }
        if ($field === 'type') {
            if (isset($this->update->message)) return $this->update->message->chat->type;
            if (isset($this->update->edited_message)) return $this->update->edited_message->chat->type;
            if (isset($this->update->inline_query)) return $this->update->inline_query->chat_type;
            if (isset($this->update->callback_query)) return $this->update->callback_query->message->chat->type;
            return false;
        }
        if ($field === 'action') {
            return 'typing';
        }
        if ($field === 'name') {
            if (isset($this->update->message)) return $this->update->message->from->first_name;
            if (isset($this->update->edited_message)) return $this->update->edited_message->from->first_name;
            if (isset($this->update->inline_query)) return $this->update->inline_query->from->first_name;
            if (isset($this->update->callback_query)) return $this->update->callback_query->from->first_name;
            if (isset($this->update->chat_join_request)) return $this->update->chat_join_request->from->first_name;
            return false;
        }
        if ($field === 'last_name') {
            if (isset($this->update->message)) return $this->update->message->from->last_name ?? '';
            if (isset($this->update->edited_message)) return $this->update->edited_message->from->last_name ?? '';
            if (isset($this->update->inline_query)) return $this->update->inline_query->from->last_name ?? '';
            if (isset($this->update->callback_query)) return $this->update->callback_query->from->last_name ?? '';
            if (isset($this->update->chat_join_request)) return $this->update->chat_join_request->from->last_name ?? '';
            return false;
        }
        if ($field === 'username') {
            if (isset($this->update->message)) return $this->update->message->from->username ?? '';
            if (isset($this->update->edited_message)) return $this->update->edited_message->from->username ?? '';
            if (isset($this->update->inline_query)) return $this->update->inline_query->from->username ?? '';
            if (isset($this->update->callback_query)) return $this->update->callback_query->from->username ?? '';
            if (isset($this->update->chat_join_request)) return $this->update->chat_join_request->from->username ?? '';
            return false;
        }
        if ($field === 'group_name') {
            if (isset($this->update->message)) return $this->update->message->chat->first_name;
            if (isset($this->update->edited_message)) return $this->update->edited_message->chat->first_name;
            if (isset($this->update->callback_query)) return $this->update->callback_query->message->chat->first_name;
            if (isset($this->update->chat_join_request)) return $this->update->chat_join_request->chat->first_name;
            return false;
        }
        if ($field === 'group_username') {
            if (isset($this->update->message)) return $this->update->message->chat->username;
            if (isset($this->update->edited_message)) return $this->update->edited_message->chat->username;
            if (isset($this->update->callback_query)) return $this->update->callback_query->message->chat->username;
            if (isset($this->update->chat_join_request)) return $this->update->chat_join_request->chat->username;
            return false;
        }
        if ($field === 'update_type') {
            if (isset($this->update->message)) return 'message';
            if (isset($this->update->edited_message)) return 'edited_message';
            if (isset($this->update->inline_query)) return 'inline_query';
            if (isset($this->update->callback_query)) return 'callback_query';
            if (isset($this->update->chat_join_request)) return 'chat_join_request';
            if (isset($this->update->my_chat_member)) return 'my_chat_member';
            if (isset($this->update->chat_member)) return 'chat_member';
            if (isset($this->update->channel_post)) return 'channel_post';
            if (isset($this->update->edited_channel_post)) return 'edited_channel_post';
            if (isset($this->update->chosen_inline_result)) return 'chosen_inline_result';
            if (isset($this->update->shipping_query)) return 'shipping_query';
            if (isset($this->update->pre_checkout_query)) return 'pre_checkout_query';
            if (isset($this->update->poll)) return 'poll';
            if (isset($this->update->poll_answer)) return 'poll_answer';
            return false;
        }
        if ($field === 'url') {
            return 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        }
        return false;
    }

    /**
     * Check given IP is in the given IP range or not
     *
     * e.g. => $this->ipInRange(['ip'=>'192.168.1.1','range'=>'149.154.160.0/20']);
     *
     * @param array $array e.g. => ['ip'=>'192.168.1.1','range'=>'149.154.160.0/20']
     *
     * @return bool
     * @throws exception
     */
    public function ipInRange (array $array): bool {
        if (!isset($array['ip'])) {
            $this->logger('error', "BPT ipInRange method used\nip parameter not found");
            throw new exception('ip parameter not found');
        }
        $ip = $array['ip'];
        if (!isset($array['range'])) {
            $this->logger('error', "BPT ipInRange method used\nrange parameter not found");
            throw new exception('range parameter not found');
        }
        $range = $array['range'];
        if (strpos($range, '/') === false) {
            $range .= '/32';
        }
        $range_full = explode('/', $range, 2);
        $netmask_decimal = ~(pow(2, (32 - $range_full[1])) - 1);
        return (ip2long($ip) & $netmask_decimal) == (ip2long($range_full[0]) & $netmask_decimal);
    }

    /**
     * Check the given IP is from telegram or not
     *
     * e.g. => $this->isTelegram(['ip'=>'192.168.1.1']);
     *
     * @param array $array e.g. => ['ip'=>'192.168.1.1']
     *
     * @return bool
     * @throws exception
     */
    public function isTelegram (array $array): bool {
        if (!isset($array['ip'])) {
            $this->logger('error', "BPT isTelegram method used\nip parameter not found");
            throw new exception('ip parameter not found');
        }
        $ip = $array['ip'];
        if ($this->settings['cloudFlare'] && isset($_SERVER['HTTP_CF_CONNECTING_IP']) && $this->isCloudFlare(['ip' => $ip])) {
            $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
        }
        elseif ($this->settings['arvanCloud'] && isset($_SERVER['HTTP_AR_REAL_IP']) && $this->isArvanCloud(['ip' => $ip])) {
            $ip = $_SERVER['HTTP_AR_REAL_IP'];
        }

        return $this->ipInRange(['ip' => $ip, 'range' => '149.154.160.0/20']) || $this->ipInRange(['ip' => $ip, 'range' => '91.108.4.0/22']);
    }

    /**
     * Check the given IP is from CloudFlare or not
     *
     * e.g. => $this->isCloudFlare(['ip'=>'192.168.1.1']);
     *
     * @param array $array e.g. => ['ip'=>'192.168.1.1']
     *
     * @return bool
     * @throws exception
     */
    public function isCloudFlare (array $array): bool {
        if (!isset($array['ip'])) {
            $this->logger('error', "BPT isCloudFlare method used\nip parameter not found");
            throw new exception('ip parameter not found');
        }
        $ip = $array['ip'];
        $cf_ips = [
            '173.245.48.0/20', '103.21.244.0/22', '103.22.200.0/22', '103.31.4.0/22', '141.101.64.0/18',
            '108.162.192.0/18', '190.93.240.0/20', '188.114.96.0/20', '197.234.240.0/22', '198.41.128.0/17',
            '162.158.0.0/15', '104.16.0.0/12', '104.24.0.0/14', '172.64.0.0/13', '131.0.72.0/22',
        ];
        foreach ($cf_ips as $cf_ip) {
            if ($this->ipInRange(['ip' => $ip, 'range' => $cf_ip])) {
                return true;
            }
        }
        return false;
    }

    /**
     * Check the given IP is from ArvanCloud or not
     *
     * e.g. => $this->isArvanCloud(['ip'=>'192.168.1.1']);
     *
     * @param array $array e.g. => ['ip'=>'192.168.1.1']
     *
     * @return bool
     * @throws exception
     */
    public function isArvanCloud (array $array): bool {
        if (!isset($array['ip'])) {
            $this->logger('error', "BPT isCloudFlare method used\nip parameter not found");
            throw new exception('ip parameter not found');
        }
        $ip = $array['ip'];
        $ar_ips = [
            '185.143.232.0/22', '92.114.16.80/28', '2.146.0.0/28', '46.224.2.32/29', '89.187.178.96/29',
            '195.181.173.128/29', '89.187.169.88/29', '188.229.116.16/29', '83.123.255.56/31', '164.138.128.28/31',
            '94.182.182.28/30', '185.17.115.176/30', '5.213.255.36/31', '138.128.139.144/29', '5.200.14.8/29',
            '188.122.68.224/29', '188.122.83.176/29', '213.179.217.16/29', '185.179.201.192/29', '43.239.139.192/29',
            '213.179.197.16/29', '213.179.201.192/29', '109.200.214.248/29', '138.128.141.16/29', '188.122.78.136/29',
            '213.179.211.32/29', '103.194.164.24/29', '185.50.105.136/29', '213.179.213.16/29', '162.244.52.120/29',
            '188.122.80.240/29', '109.200.195.64/29', '109.200.199.224/29', '185.228.238.0/28', '94.182.153.24/29',
            '94.101.182.0/27', '37.152.184.208/28', '78.39.156.192/28', '158.255.77.238/31', '81.12.28.16/29',
            '176.65.192.202/31', '2.144.3.128/28', '89.45.48.64/28', '37.32.16.0/27', '37.32.17.0/27', '37.32.18.0/27',
        ];
        foreach ($ar_ips as $ar_ip) {
            if ($this->ipInRange(['ip' => $ip, 'range' => $ar_ip])) {
                return true;
            }
        }
        return false;
    }

    /**
     * Check the given token format
     *
     * if you want to verify token with telegram , you should set verify parameter => true
     * in that case , if token was right , you will receive getMe result , otherwise you will receive false
     *
     * verify parameter has default value => false
     *
     * e.g. => $this->isToken(['token'=>'123123123:abcabcabcabc']);
     *
     * @param array $array e.g. => ['token'=>'123123123:abcabcabcabc','verify'=>false]
     *
     * @return bool|array
     * @throws exception
     */
    public function isToken (array $array) {
        if (!isset($array['token'])) {
            $this->logger('error', "BPT isToken method used\ntoken parameter not found");
            throw new exception('token parameter not found');
        }
        $token = $array['token'];
        $verify = $array['verify'] ?? false;
        if (!preg_match('/^(\d{8,10}):[\w\-]{35}$/', $token)) {
            return false;
        }
        if (!$verify) {
            return true;
        }
        $res = $this->me(['token' => $token]);
        if (!$res['ok']) {
            return false;
        }
        return $res['result'];
    }

    /**
     * Check the given username format
     *
     * e.g. => $this->isUsername(['username'=>'BPT_CH']);
     *
     * @param array $array e.g. => ['username'=>'BPT_CH']
     *
     * @return bool
     * @throws exception
     */
    public function isUsername (array $array): bool {
        if (!isset($array['username'])) {
            $this->logger('error', "BPT isUsername method used\nusername parameter not found");
            throw new exception('username parameter not found');
        }
        $username = $array['username'];
        return strpos($username, '__') === false && preg_match('/^@?([a-zA-Z])(\w{4,31})$/', $username);
    }

    /**
     * check user joined in channels or not
     *
     * this method only return true or false, if user join in all channels true, and if user not joined in one channel false
     *
     * this method does not care about not founded channel and count them as joined channel
     *
     * ids parameter can be array for multi channels or can be string for one channel
     *
     * user_id parameter have default value => generated by catchFields method
     *
     * NOTE : each channel will decrease speed a little(because of request count)
     *
     * e.g. => $this->isJoined(['ids'=>['BPT_CH','-1005465465454']]);
     *
     * e.g. => $this->isJoined(['user_id'=>'442109602','ids'=>'BPT_CH']);
     *
     * @param array $array e.g. => ['user_id'=>'442109602','ids'=>'BPT_CH']
     *
     * @return bool
     * @throws exception
     */
    public function isJoined (array $array): bool {
        if (!isset($array['ids'])) {
            $this->logger('error', "BPT jChecker function used\nids parameter not found");
            throw new exception('ids parameter not found');
        }
        $ids = $array['ids'];
        if (is_string($ids) || is_numeric($ids)) {
            $ids = [$ids];
        }
        $user_id = $array['user_id'] ?? $this->catchFields(['field' => 'user_id']);
        foreach ($ids as $id) {
            $check = $this->getChatMember(['chat_id' => $id, 'user_id' => $user_id]);
            if (isset($check['result'])) {
                $check = $check['result']['status'];
                if ($check === 'left' || $check === 'kicked') {
                    return false;
                }
            }
        }
        return true;
    }

    /**
     * Escape text for different parse_modes
     *
     * type parameter can be : `html` , `markdown` , `markdown2` , default : `html`
     *
     * e.g. => $this->modeEscape(['text'=>'hello men! *I* Have nothing anymore']);
     *
     * @param array $array e.g. => ['text'=>'hello men! *I* Have nothing anymore','mode'=>'markdown2']
     *
     * @return string|bool
     * @throws exception
     */
    public function modeEscape (array $array) {
        if (!isset($array['text'])) {
            $this->logger('error', "BPT modeEscape method used\ntext parameter not found");
            throw new exception('text parameter not found');
        }
        $text = $array['text'];
        $mode = isset($array['mode']) ? strtolower($array['mode']) : 'html';
        switch ($mode) {
            case 'html':
                return str_replace(['&', '<', '>'], ["&amp;", "&lt;", "&gt;"], $text);
            case 'markdown':
                return str_replace(["\\", '_', '*', '`', '['], ['\\\\', '\_', '\*', '\`', '\['], $text);
            case 'markdown2':
                return str_replace(['\\', '_', '*', '[', ']', '(', ')', '~', '`', '>', '#', '+', '-', '=', '|', '{', '}', '.', '!'], ['\\\\', '\_', '\*', '\[', '\]', '\(', '\)', '\~', '\`', '\>', '\#', '\+', '\-', '\=', '\|', '\{', '\}', '\.', '\!'], $text);
            default:
                $this->logger('error', "BPT modeEscape method used\ntype is wrong");
                return false;
        }
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
     *
     * @param array $array e.g. => ['path'=>'xfolder/yfolder','sub'=>true]
     *
     * @return bool
     * @throws exception
     */
    public function delete (array $array): bool {
        if (!isset($array['path'])) {
            $this->logger('error', "BPT delete function used\npath parameter not found");
            throw new exception('path parameter not found');
        }
        $path = $array['path'];
        $sub = $array['sub'] ?? true;
        if (!is_dir($path)) {
            return unlink($path);
        }
        if (count(scandir($path)) <= 2) {
            return rmdir($path);
        }
        if (!$sub) {
            $this->logger('error', "BPT delete function used\ndelete function cannot delete folder because its have subfiles and sub parameter haven't true value");
            throw new exception('folder have subFiles');
        }
        $it = new RecursiveDirectoryIterator($path, FilesystemIterator::SKIP_DOTS);
        $files = new RecursiveIteratorIterator($it, RecursiveIteratorIterator::CHILD_FIRST);
        foreach ($files as $file) {
            $file->isDir() ? rmdir($file->getRealPath()) : unlink($file->getRealPath());
        }
        return rmdir($path);
    }

    /**
     * Convert datetime or timestamp to array
     *
     * Its calculated different between given time and now
     *
     * e.g. => $this->time2string(['datetime'=>1636913656]);
     *
     * @param array $array e.g. => ['datetime'=>1636913656]
     *
     * @return bool|array
     * @throws exception
     */
    public function time2string (array $array) {
        if (!isset($array['datetime'])) {
            $this->logger('error', "BPT time2string function used\ndatetime parameter not found");
            throw new exception('datetime parameter not found');
        }
        $datetime = $array['datetime'];
        if (!is_numeric($datetime)) {
            return false;
        }
        $now = new DateTime;
        $input = new DateTime('@' . $datetime);
        $status = $now < $input ? 'later' : 'ago';
        $diff = $now->diff($input);
        $diff->w = floor($diff->d / 7);
        $string = [
            'year'   => 'y',
            'month'  => 'm',
            'week'   => 'w',
            'day'    => 'd',
            'hour'   => 'h',
            'minute' => 'i',
            'second' => 's',
        ];
        foreach ($string as $k => &$v) {
            if ($diff->{$v}) {
                $v = $diff->{$v};
            }
            else unset($string[$k]);
        }
        $string['status'] = $status;
        return count($string) > 1 ? $string : ['status' => 'now'];
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
     *
     * @param array $array e.g. => ['length'=>16,'characters'=>'abcdefg']
     *
     * @return string
     */
    public function randomString (array $array = []): string {
        $characters = $array['characters'] ?? 'aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ';
        $length = isset($array['length']) && is_numeric($array['length']) ? $array['length'] : 16;
        $rand_string = '';
        $char_len = strlen($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
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
     *
     * @param array $array e.g. => ['action'=>'enc','string'=>'hello world']
     *
     * @return array|string|bool
     * @throws exception
     */
    public function crypto (array $array) {
        if (!extension_loaded('openssl')) {
            $this->logger('error', "BPT crypto function used\nopenssl extension is not found , It may not be installed or enabled");
            throw new exception('openssl extension not found');
        }
        if (!isset($array['action'])) {
            $this->logger('error', "BPT crypto function used\naction parameter not found");
            throw new exception('action parameter not found');
        }
        $action = $array['action'];
        if (!isset($array['string'])) {
            $this->logger('error', "BPT crypto function used\nstring parameter not found");
            throw new exception('string parameter not found');
        }
        $string = $array['string'];
        if ($action === 'enc') {
            $key = $array['key'] ?? $this->randomString(['length' => 64]);
            $iv = $array['iv'] ?? $this->randomString(['length' => 16]);
            $output = base64_encode(openssl_encrypt($string, 'AES-256-CBC', $key, 1, $iv));
            return ['hash' => $output, 'key' => $key, 'iv' => $iv];
        }
        if ($action !== 'dec') {
            return false;
        }
        if (!isset($array['key'])) {
            $this->logger('error', "BPT crypto function used\nkey parameter not found");
            throw new exception('key parameter not found');
        }
        if (!isset($array['iv'])) {
            $this->logger('error', "BPT crypto function used\niv parameter not found");
            throw new exception('iv parameter not found');
        }
        return openssl_decrypt(base64_decode($string), 'AES-256-CBC', $array['key'], 1, $array['iv']);
    }

    /**
     * convert all of files in selected path to zip and then save it in dest path
     *
     * if you want to add the main folder to the zip file , set self `param` true
     *
     * if you want to add all of file and sub files in main folder(ignore subfolders) set sub_folder `param` false
     *
     * self parameter have default value => true
     *
     * sub parameter have default value => true
     *
     * e.g. => $this->zip(['path'=>'xFolder','dest'=>'yFolder/xFile.zip','self'=>false,'sub_folder'=>true);
     *
     * @param array $array e.g. => ['path'=>'xFolder','dest'=>'yFolder/xFile.zip']
     *
     * @return bool
     * @throws exception
     */
    public function zip (array $array): bool {
        if (!extension_loaded('zip')) {
            $this->logger('error', "BPT zip function used\nzip extension is not found , It may not be installed or enabled");
            throw new exception('zip extension not found');
        }
        if (!isset($array['path'])) {
            $this->logger('error', "BPT zip function used\npath parameter not found");
            throw new exception('path parameter not found');
        }
        $path = $array['path'];
        if (!isset($array['dest'])) {
            $this->logger('error', "BPT zip function used\ndest parameter not found");
            throw new exception('dest parameter not found');
        }
        $dest = $array['dest'];
        $self = $array['self'] ?? true;
        $sub_folder = $array['sub_folder'] ?? true;
        if (file_exists($dest)) unlink($dest);
        $path = realpath($path);
        $zip = new ZipArchive();
        $zip->open($dest, ZipArchive::CREATE);
        if (!is_dir($path)) {
            $zip->addFile($path, basename($path));
            return $zip->close();
        }
        if ($self) {
            $dirs = explode('\\', $path);
            $dir_count = count($dirs);
            $main_dir = $dirs[$dir_count - 1];
            $path = '';
            for ($i = 0; $i < $dir_count - 1; $i++) {
                $path .= '\\' . $dirs[$i];
            }
            $path = substr($path, 1);
            $zip->addEmptyDir($main_dir);
        }
        $it = new RecursiveDirectoryIterator($path, FilesystemIterator::SKIP_DOTS);
        $files = new RecursiveIteratorIterator($it, RecursiveIteratorIterator::SELF_FIRST);
        foreach ($files as $file) {
            if ($file->isFile()) {
                $zip->addFile($file, $sub_folder ? str_replace($path . '\\', '', $file) : basename($file));
            }
            elseif ($file->isDir() && $sub_folder) {
                $zip->addEmptyDir(str_replace($path . '\\', '', $file . '\\'));
            }
        }
        return $zip->close();
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
     *
     * @return string|int|bool
     * @throws exception
     */
    public function size (array $array) {
        if (!isset($array['path'])) {
            $this->logger('error', "BPT size function used\npath parameter not found");
            throw new exception('path parameter not found');
        }
        $path = $array['path'];
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
            if (!file_exists($path)) {
                $this->logger('error', "BPT size function used\nFile not found");
                throw new exception('File not found');
            }
            $size = filesize($path);
        }
        if (!isset($size) || !is_numeric($size)) {
            return false;
        }
        if (!$format) {
            return $size;
        }
        $o = 0;
        $rate = ['B', 'KB', 'MB', 'GB', 'TB', 'PB'];
        while ($size > 1024){
            $size = $size / 1024;
            $o++;
        }
        if ($o !== 0) {
            $size = round($size, 2);
        }
        return $size . ' ' . $rate[$o];
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
     *
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
        if (!isset($array['inline'])) {
            $this->logger('error', "BPT eKey function used\nkeyboard or inline parameter not found");
            throw new exception('keyboard or inline parameter not found');
        }
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
     *
     * @return array
     * @throws exception
     */
    public function jChecker (array $array): array {
        if (!isset($array['ids'])) {
            $this->logger('error', "BPT jChecker function used\nids parameter not found");
            throw new exception('ids parameter not found');
        }
        $ids = $array['ids'];
        if (is_string($ids)) {
            $ids = [$ids];
        }
        $user_id = $array['user_id'] ?? $this->catchFields(['field' => 'user_id']);
        $result = [];
        foreach ($ids as $id) {
            $check = $this->getChatMember(['chat_id' => $id, 'user_id' => $user_id]);
            if (isset($check['result'])) {
                $check = $check['result']['status'];
                $result[$id] = $check !== 'left' && $check !== 'kicked';
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
     *
     * @return bool true on success and false on failure
     * @throws exception
     */
    public function jsonSave (array $array): bool {
        if (!isset($array['name'])) {
            $this->logger('error', "BPT jsonSave function used\nname parameter not found");
            throw new exception('name parameter not found');
        }
        $name = $array['name'];
        if (!isset($array['data'])) {
            $this->logger('error', "BPT jsonSave function used\ndata parameter not found");
            throw new exception('data parameter not found');
        }
        $data = $array['data'];
        $this->logger('', "BPT jsonSave function used\n");
        if (is_array($data) || is_object($data)) {
            $data = json_encode($data);
        }
        if (pathinfo($name, PATHINFO_EXTENSION) !== 'json') {
            $name .= '.json';
        }
        return (bool) file_put_contents($name, gzcompress($data));
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
     *
     * @return mixed|bool array or object in success and false in failure
     * @throws exception
     */
    public function jsonGet (array $array) {
        if (!isset($array['name'])) {
            $this->logger('error', "BPT jsonGet function used\nname parameter not found");
            throw new exception('name parameter not found');
        }
        $name = $array['name'];
        if (pathinfo($name, PATHINFO_EXTENSION) !== 'json') {
            $name .= '.json';
        }
        if (!file_exists($name)) {
            return false;
        }
        return json_decode(gzuncompress(file_get_contents($name)), $array['type'] ?? true);
    }

    /**
     * delete json file
     *
     * e.g. => $this->jsonDel(['name'=>'zxc.json']);
     *
     * @param array $array e.g. => ['name'=>'test.json']
     *
     * @return bool true on success or false on failure
     * @throws exception
     */
    public function jsonDel (array $array): bool {
        if (!isset($array['name'])) {
            $this->logger('error', "BPT jsonDel function used\nname parameter not found");
            throw new exception('name parameter not found');
        }
        $name = $array['name'];
        if (pathinfo($name, PATHINFO_EXTENSION) !== 'json') {
            $name .= '.json';
        }
        if (!file_exists($name)) {
            return false;
        }
        return unlink($name);
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
     *
     * @return bool true on success or false on failure
     * @throws exception
     */
    public function dataSave (array $array): bool {
        if (empty($this->db)) {
            $this->logger('warning', 'Your database is disable , so you cant use dataSave method');
            return false;
        }
        if ($this->settings['db']['type'] !== 'json') {
            $this->logger('error', "BPT dataSave function used\nonly work on json db");
            throw new exception('only work on json db');
        }
        if (!isset($array['key'])) {
            $this->logger('error', "BPT dataSave function used\nkey parameter not found");
            throw new exception('key parameter not found');
        }
        if (!is_string($array['key'])) {
            $this->logger('error', "BPT dataSave function used\nkey most be string");
            throw new exception('key most be string');
        }
        $key = $array['key'] === 'users' ? 'users2' : $array['key'];
        if (!isset($array['value'])) {
            $this->logger('error', "BPT dataSave function used\nvalue parameter not found");
            throw new exception('value parameter not found');
        }
        $value = $array['value'];
        if (isset($array['type'])) {
            $type = $array['type'];
            if ($type !== 'private' && $type !== 'group' && $type !== 'supergroup' && $type !== 'channel') {
                $type = $this->catchFields(['field' => 'type']) ?? null;
            }
        }
        else {
            $type = $this->catchFields(['field' => 'type']) ?? null;
        }
        $id = $array['id'] ?? $this->catchFields(['field' => $type === 'private' ? 'user_id' : 'chat_id']);
        $BPT_DB = json_decode(file_get_contents($this->settings['db']['file_name']), true);
        if (!isset($BPT_DB[$type][$id])) {
            $this->logger('error', "BPT dataSave function used\nid not found in BPT database");
            throw new exception('id not found');
        }
        $BPT_DB[$type][$id][$key] = $value;
        return (bool) file_put_contents($this->settings['db']['file_name'], json_encode($BPT_DB));
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
     *
     * @return mixed
     * @throws exception
     */
    public function dataGet (array $array) {
        if (empty($this->db)) {
            $this->logger('warning', 'Your database is disable , so you cant use dataGet method');
            return false;
        }
        if ($this->settings['db']['type'] !== 'json') {
            $this->logger('error', "BPT dataGet function used\nonly work on json db");
            throw new exception('only work on json db');
        }
        if (!isset($array['key'])) {
            $this->logger('error', "BPT dataGet function used\nkey parameter not found");
            throw new exception('key parameter not found');
        }
        if (!is_string($array['key'])) {
            $this->logger('error', "BPT dataGet function used\nkey most be string");
            throw new exception('key most be string');
        }
        $key = $array['key'];
        if (isset($array['type'])) {
            $type = $array['type'];
            if ($type !== 'private' && $type !== 'group' && $type !== 'supergroup' && $type !== 'channel') {
                $type = $this->catchFields(['field' => 'type']) ?? null;
            }
        }
        else {
            $type = $this->catchFields(['field' => 'type']) ?? null;
        }
        $id = $array['id'] ?? $this->catchFields(['field' => $type === 'private' ? 'user_id' : 'chat_id']);
        $BPT_DB = json_decode(file_get_contents($this->settings['db']['file_name']), true);
        if (!isset($BPT_DB[$type][$id])) {
            $this->logger('error', "BPT dataGet function used\nid not found in BPT database");
            throw new exception('id not found');
        }
        if (!isset($BPT_DB[$type][$id][$key])) {
            $this->logger('error', "BPT dataGet function used\nkey not found in BPT database");
            throw new exception('key not found');
        }
        return $BPT_DB[$type][$id][$key];
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
     *
     * @return bool true on success or false on failure
     * @throws exception
     */
    public function dataDel (array $array): bool {
        if (empty($this->db)) {
            $this->logger('warning', 'Your database is disable , so you cant use dataDel method');
            return false;
        }
        if ($this->settings['db']['type'] !== 'json') {
            $this->logger('error', "BPT dataDel function used\nonly work on json db");
            throw new exception('only work on json db');
        }
        if (!isset($array['key'])) {
            $this->logger('error', "BPT dataDel function used\nkey parameter not found");
            throw new exception('key parameter not found');
        }
        if (!is_string($array['key'])) {
            $this->logger('error', "BPT dataDel function used\nkey most be string");
            throw new exception('key most be string');
        }
        $key = $array['key'] === 'users' ? 'users2' : $array['key'];
        if (isset($array['type'])) {
            $type = $array['type'];
            if ($type !== 'private' && $type !== 'group' && $type !== 'supergroup' && $type !== 'channel') {
                $type = $this->catchFields(['field' => 'type']) ?? null;
            }
        }
        else {
            $type = $this->catchFields(['field' => 'type']) ?? null;
        }
        $id = $array['id'] ?? $this->catchFields(['field' => $type === 'private' ? 'user_id' : 'chat_id']);
        $BPT_DB = json_decode(file_get_contents($this->settings['db']['file_name']), true);
        if (!isset($BPT_DB[$type][$id])) {
            $this->logger('error', "BPT dataDel function used\nid not found in BPT database");
            throw new exception('id not found');
        }
        if (!isset($BPT_DB[$type][$id][$key])) {
            $this->logger('error', "BPT dataDel function used\nkey not found in BPT database");
            throw new exception('key not found');
        }
        unset($BPT_DB[$type][$id][$key]);
        return (bool) file_put_contents($this->settings['db']['file_name'], json_encode($BPT_DB));
    }

    /**
     * receive count of each chat types
     *
     * e.g. => $this->stats();
     *
     * @return array|bool will return an array like this ['users' => 123, 'groups' => 123, 'supergroups' => 123, 'channels' => 123]
     */
    public function stats () {
        if (empty($this->db)) {
            $this->logger('warning', 'Your database is disable , so you cant use stats method');
            return false;
        }
        $this->logger('', "BPT stats function used\n");
        if ($this->settings['db']['type'] === 'json') {
            $BPT_DB = json_decode(file_get_contents($this->settings['db']['file_name']), true);
            return [
                'users'       => count($BPT_DB['private']),
                'groups'      => count($BPT_DB['group']),
                'supergroups' => count($BPT_DB['supergroup']),
                'channels'    => count($BPT_DB['channel']),
            ];
        }
        if ($this->settings['db']['type'] !== 'sql') {
            return false;
        }
        $res = [
            'users'       => $this->db->query('select count(*) as `cnt` from `private`')->fetch_object()->cnt,
            'groups'      => 0,
            'supergroups' => 0,
            'channels'    => 0,
        ];
        $check = $this->db->query('select `type`,COUNT(`type`) as `count` from `chats` GROUP BY `type`')->fetch_all(MYSQLI_ASSOC);
        foreach ($check as $row) {
            $res[$row['type'] . 's'] = $row['count'];
        }
        return $res;
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
     *
     * @return array|bool return false on failure and array on success
     * @throws exception
     */
    public function statsHere (array $array = []) {
        if (empty($this->db)) {
            $this->logger('warning', 'Your database is disable , so you cant use statsHere method');
            return false;
        }
        if (isset($array['chatid'])) $array['chat_id'] = $array['chatid'];
        $chat_id = $array['chat_id'] ?? $this->catchFields(['field' => 'chat_id']);
        $type = $array['type'] ?? $this->catchFields(['field' => 'type']) ?? null;
        $this->logger('', "BPT statsHere function used\n");
        if ($this->settings['db']['type'] === 'json') {
            $BPT_DB = json_decode(file_get_contents($this->settings['db']['file_name']), true);
            return $BPT_DB[$type][$chat_id] ?? false;
        }
        if ($this->settings['db']['type'] !== 'sql') {
            return false;
        }
        $table_name = $type === 'private' ? 'private' : 'chats';
        $check = $this->db->query("select * from `$table_name` where `id` = $chat_id limit 1");
        if ($check->num_rows <= 0) {
            return false;
        }
        return $check->fetch_array();
    }

    /**
     * check user phone is submitted , if not receive it
     *
     * NOTE : send button_text parameter instead of old btext parameter(support of old style will remove from version 2.03)
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
     * @throws exception
     */
    public function checkPhone (array $array): int {
        if (empty($this->db)) {
            $this->logger('warning', 'Your database is disable , so you cant use checkPhone method');
            return false;
        }
        if (isset($array['btext'])) $array['button_text'] = $array['btext'];
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
            if (in_array($array['phones'], ['98', 'iran', 'ایران'])) {
                $phones = ['98'];
            }
            else {
                $phones = [$array['phones']];
            }
        }
        else {
            $phones = 'all';
        }
        if (!isset($this->update->message)) {
            return 2;
        }
        $id = $this->update->message->chat->id;
        $type = $this->update->message->chat->type;
        if ($type !== 'private') {
            return 2;
        }
        if ($this->settings['db']['type'] === 'json') {
            $BPT_DB = json_decode(file_get_contents($this->settings['db']['file_name']), true);
            if (isset($BPT_DB[$type][$id]['phone_number'])) {
                if (!is_array($phones)) {
                    return 1;
                }
                $phone = $BPT_DB[$type][$id]['phone_number'];
                foreach ($phones as $range) {
                    if (is_string($range) && strpos($phone, $range) === 0) {
                        return 1;
                    }
                }
                unset($BPT_DB[$type][$id]['phone_number']);
                file_put_contents($this->settings['db']['file_name'], json_encode($BPT_DB));
                $this->sendMessage([
                    'chat_id'      => $id,
                    'text'         => $text,
                    'reply_markup' => $this->eKey(['keyboard' => [["$button_text||con"]]]),
                ]);
                return 0;
            }
            else {
                if (!isset($this->update->message->contact)) {
                    $this->sendMessage([
                        'chat_id'      => $id,
                        'text'         => $text,
                        'reply_markup' => $this->eKey(['keyboard' => [["$button_text||con"]]]),
                    ]);
                    return 0;
                }
                $phone = $this->update->message->contact->phone_number;
                if (is_string($phones)) {
                    $BPT_DB[$type][$id]['phone_number'] = $phone;
                }
                else {
                    foreach ($phones as $range) {
                        if (is_string($range) && strpos($phone, $range) === 0) {
                            $BPT_DB[$type][$id]['phone_number'] = $phone;
                            break;
                        }
                    }
                }
                if (isset($BPT_DB[$type][$id]['phone_number'])) {
                    return 4;
                }
                file_put_contents($this->settings['db']['file_name'], json_encode($BPT_DB));
                return 3;
            }
        }
        elseif ($this->settings['db']['type'] === 'sql') {
            $info = $this->db->query("select `phone_number` from `private` where `id` = $id limit 1")->fetch_object();
            if (isset($info->phone_number)) {
                if (!is_array($phones)) {
                    return 1;
                }
                $phone = $info->phone_number;
                foreach ($phones as $range) {
                    if (is_string($range) && strpos($phone, $range) === 0) {
                        return 1;
                    }
                }
                $this->db->query("update `users` set `phone_number` = null where `id` = $id limit 1");
                $this->sendMessage([
                    'chat_id'      => $id,
                    'text'         => $text,
                    'reply_markup' => $this->eKey(['keyboard' => [["$button_text||con"]]]),
                ]);
                return 0;
            }
            else {
                if (!isset($this->update->message->contact)) {
                    $this->sendMessage([
                        'chat_id'      => $id,
                        'text'         => $text,
                        'reply_markup' => $this->eKey(['keyboard' => [["$button_text||con"]]]),
                    ]);
                    return 0;
                }
                $phone = $this->update->message->contact->phone_number;
                if (is_string($phones)) {
                    $this->db->query("update `users` set `phone_number` = '$phone' where `id` = $id limit 1");
                    return 3;
                }
                else {
                    foreach ($phones as $range) {
                        if (is_string($range) && strpos($phone, $range) === 0) {
                            $this->db->query("update `users` set `phone_number` = '$phone' where `id` = $id limit 1");
                            return 3;
                        }
                    }
                }
                return 4;
            }
        }
        return false;
    }

    /**
     * forward a message to all users(receive data from database)
     *
     * NOTE : send chat_id parameter instead of old chatid parameter(support of old style will remove from version 2.03)
     *
     * NOTE : send message_id parameter instead of old msgid parameter(support of old style will remove from version 2.03)
     *
     * if forward parameter has true value , the sended message will have sender name(forwarded) otherwise will have not(copied)
     *
     * for now this method cannot work fine on large amount of targets
     *
     * e.g. => $this->forward2users(['chat_id'=>'123456789','message_id'=>'123']);
     *
     * @param array $array e.g. => ['chat_id'=>'123456789','message_id'=>'123']
     *
     * @return bool return true on success
     * @throws exception
     */
    public function forward2users (array $array): bool {
        if (empty($this->db)) {
            $this->logger('warning', 'Your database is disable , so you cant use forward2users method');
            return false;
        }

        if (isset($array['chatid'])) $array['chat_id'] = $array['chatid'];
        if (isset($array['msgid'])) $array['message_id'] = $array['msgid'];
        if (!isset($array['chat_id'])) {
            $this->logger('error', "BPT forward2users function used\nchat_id parameter not found");
            throw new exception('chat_id parameter not found');
        }
        $chat_id = $array['chat_id'];
        if (!isset($array['message_id'])) {
            $this->logger('error', "BPT forward2users function used\nmessage_id parameter not found");
            throw new exception('message_id parameter not found');
        }
        $message_id = $array['message_id'];
        $forward = $array['forward'] ?? true;
        $method = $forward ? 'forwardMessage' : 'copyMessage';
        if ($this->settings['db']['type'] === 'json') {
            $BPT_DB = json_decode(file_get_contents($this->settings['db']['file_name']), true);
            foreach ($BPT_DB['private'] as $id => $x) {
                $this->{$method}(['chat_id' => $id, 'from_chat_id' => $chat_id, 'message_id' => $message_id]);
            }
            return true;
        }
        if ($this->settings['db']['type'] === 'sql') {
            $BPT_DB = $this->db->query('select `id` from `private`')->fetch_all(MYSQLI_ASSOC);
            foreach ($BPT_DB as $id) {
                $this->{$method}(['chat_id' => $id['id'], 'from_chat_id' => $chat_id, 'message_id' => $message_id]);
            }
            return true;
        }
        return false;
    }

    /**
     * forward a message to all normal groups(receive data from database)
     *
     * NOTE : send chat_id parameter instead of old chatid parameter(support of old style will remove from version 2.03)
     *
     * NOTE : send message_id parameter instead of old msgid parameter(support of old style will remove from version 2.03)
     *
     * if forward parameter has true value , the sended message will have sender name(forwarded) otherwise will have not(copied)
     *
     * for now this method cannot work fine on large amount of targets
     *
     * e.g. => $this->forward2groups(['chat_id'=>'123456789','message_id'=>'123']);
     *
     * @param array $array e.g. => ['chat_id'=>'123456789','message_id'=>'123']
     *
     * @return bool return true on success
     * @throws exception
     */
    public function forward2groups (array $array): bool {
        if (empty($this->db)) {
            $this->logger('warning', 'Your database is disable , so you cant use forward2groups method');
            return false;
        }
        if (isset($array['chatid'])) $array['chat_id'] = $array['chatid'];
        if (isset($array['msgid'])) $array['message_id'] = $array['msgid'];
        if (!isset($array['chat_id'])) {
            $this->logger('error', "BPT forward2groups function used\nchat_id parameter not found");
            throw new exception('chat_id parameter not found');
        }
        $chat_id = $array['chat_id'];
        if (!isset($array['message_id'])) {
            $this->logger('error', "BPT forward2groups function used\nmessage_id parameter not found");
            throw new exception('message_id parameter not found');
        }
        $message_id = $array['message_id'];
        $forward = $array['forward'] ?? true;
        $method = $forward ? 'forwardMessage' : 'copyMessage';
        if ($this->settings['db']['type'] === 'json') {
            $BPT_DB = json_decode(file_get_contents($this->settings['db']['file_name']), true);
            foreach ($BPT_DB['groups'] as $id => $x) {
                $this->{$method}(['chat_id' => $id, 'from_chat_id' => $chat_id, 'message_id' => $message_id]);
            }
            return true;
        }
        if ($this->settings['db']['type'] === 'sql') {
            $BPT_DB = $this->db->query("select `id` from `chats` where `type` = 'group'")->fetch_all(MYSQLI_ASSOC);
            foreach ($BPT_DB as $id) {
                $this->{$method}(['chat_id' => $id['id'], 'from_chat_id' => $chat_id, 'message_id' => $message_id]);
            }
            return true;
        }
        return false;
    }

    /**
     * forward a message to all super groups(receive data from database)
     *
     * NOTE : send chat_id parameter instead of old chatid parameter(support of old style will remove from version 2.03)
     *
     * NOTE : send message_id parameter instead of old msgid parameter(support of old style will remove from version 2.03)
     *
     * if forward parameter has true value , the sended message will have sender name(forwarded) otherwise will have not(copied)
     *
     * for now this method cannot work fine on large amount of targets
     *
     * e.g. => $this->forward2supergroups(['chat_id'=>'123456789','message_id'=>'123']);
     *
     * @param array $array e.g. => ['chat_id'=>'123456789','message_id'=>'123']
     *
     * @return bool return true on success
     * @throws exception
     */
    public function forward2supergroups (array $array): bool {
        if (!empty($this->db)) {
            if (isset($array['chatid'])) $array['chat_id'] = $array['chatid'];
            if (isset($array['msgid'])) $array['message_id'] = $array['msgid'];
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
            $forward = $array['forward'] ?? true;
            $method = $forward ? 'forwardMessage' : 'copyMessage';
            if ($this->settings['db']['type'] === 'json') {
                $BPT_DB = json_decode(file_get_contents($this->settings['db']['file_name']), true);
                foreach ($BPT_DB['supergroup'] as $id => $x) {
                    $this->{$method}(['chat_id' => $id, 'from_chat_id' => $chat_id, 'message_id' => $message_id]);
                }
                return true;
            }
            elseif ($this->settings['db']['type'] === 'sql') {
                $BPT_DB = $this->db->query("select `id` from `chats` where `type` = 'supergroup'")->fetch_all(MYSQLI_ASSOC);
                foreach ($BPT_DB as $id) {
                    $this->{$method}(['chat_id' => $id['id'], 'from_chat_id' => $chat_id, 'message_id' => $message_id]);
                }
                return true;
            }
        }
        else {
            $this->logger('warning', 'Your database is disable , so you cant use forward2supergroups method');
        }
        return false;
    }

    /**
     * forward a message to all groups(receive data from database)
     *
     * NOTE : send chat_id parameter instead of old chatid parameter(support of old style will remove from version 2.03)
     *
     * NOTE : send message_id parameter instead of old msgid parameter(support of old style will remove from version 2.03)
     *
     * if forward parameter has true value , the sended message will have sender name(forwarded) otherwise will have not(copied)
     *
     * for now this method cannot work fine on large amount of targets
     *
     * e.g. => $this->forward2gps(['chat_id'=>'123456789','message_id'=>'123']);
     *
     * @param array $array e.g. => ['chat_id'=>'123456789','message_id'=>'123']
     *
     * @return bool return true on success
     * @throws exception
     */
    public function forward2gps (array $array): bool {
        if (empty($this->db)) {
            $this->logger('warning', 'Your database is disable , so you cant use forward2gps method');
            return false;
        }
        if (isset($array['chatid'])) $array['chat_id'] = $array['chatid'];
        if (isset($array['msgid'])) $array['message_id'] = $array['msgid'];
        if (!isset($array['chat_id'])) {
            $this->logger('error', "BPT forward2gps function used\nchat_id parameter not found");
            throw new exception('chat_id parameter not found');
        }
        $chat_id = $array['chat_id'];
        if (!isset($array['message_id'])) {
            $this->logger('error', "BPT forward2gps function used\nmessage_id parameter not found");
            throw new exception('message_id parameter not found');
        }
        $message_id = $array['message_id'];
        $forward = $array['forward'] ?? true;
        $method = $forward ? 'forwardMessage' : 'copyMessage';
        if ($this->settings['db']['type'] === 'json') {
            $BPT_DB = json_decode(file_get_contents($this->settings['db']['file_name']), true);
            $ids = array_merge($BPT_DB['supergroup'], $BPT_DB['groups']);
            foreach ($ids as $id => $x) {
                $this->{$method}(['chat_id' => $id, 'from_chat_id' => $chat_id, 'message_id' => $message_id]);
            }
            return true;
        }
        if ($this->settings['db']['type'] === 'sql') {
            $BPT_DB = $this->db->query("select `id` from `chats` where `type` = 'supergroup' || `type` = 'group'")->fetch_all(MYSQLI_ASSOC);
            foreach ($BPT_DB as $id) {
                $this->{$method}(['chat_id' => $id['id'], 'from_chat_id' => $chat_id, 'message_id' => $message_id]);
            }
            return true;
        }
        return false;
    }

    /**
     * forward a message to all include users , groups , supergroups(receive data from database)
     *
     * NOTE : send chat_id parameter instead of old chatid parameter(support of old style will remove from version 2.03)
     *
     * NOTE : send message_id parameter instead of old msgid parameter(support of old style will remove from version 2.03)
     *
     * if forward parameter has true value , the sended message will have sender name(forwarded) otherwise will have not(copied)
     *
     * for now this method cannot work fine on large amount of targets
     *
     * e.g. => $this->forward2all(['chat_id'=>'123456789','message_id'=>'123']);
     *
     * @param array $array e.g. => ['chat_id'=>'123456789','message_id'=>'123']
     *
     * @return bool return true on success
     * @throws exception
     */
    public function forward2all (array $array): bool {
        if (empty($this->db)) {
            $this->logger('warning', 'Your database is disable , so you cant use forward2all method');
            return false;
        }
        if (isset($array['chatid'])) $array['chat_id'] = $array['chatid'];
        if (isset($array['msgid'])) $array['message_id'] = $array['msgid'];
        if (!isset($array['chat_id'])) {
            $this->logger('error', "BPT forward2all function used\nchat_id parameter not found");
            throw new exception('chat_id parameter not found');
        }
        $chat_id = $array['chat_id'];
        if (!isset($array['message_id'])) {
            $this->logger('error', "BPT forward2all function used\nmessage_id parameter not found");
            throw new exception('message_id parameter not found');
        }
        $message_id = $array['message_id'];
        $forward = $array['forward'] ?? true;
        $method = $forward ? 'forwardMessage' : 'copyMessage';
        if ($this->settings['db']['type'] === 'json') {
            $BPT_DB = json_decode(file_get_contents($this->settings['db']['file_name']), true);
            $ids = array_merge($BPT_DB['private'], $BPT_DB['supergroup'], $BPT_DB['groups']);
            foreach ($ids as $id => $x) {
                $this->{$method}(['chat_id' => $id, 'from_chat_id' => $chat_id, 'message_id' => $message_id]);
            }
            return true;
        }
        if ($this->settings['db']['type'] === 'sql') {
            $privates = $this->db->query('select `id` from `private`')->fetch_all(MYSQLI_ASSOC);
            $chats = $this->db->query("select `id` from `chats` where `type` = 'supergroup' || `type` = 'group'")->fetch_all(MYSQLI_ASSOC);
            $ids = array_merge($privates, $chats);
            foreach ($ids as $id) {
                $this->{$method}(['chat_id' => $id['id'], 'from_chat_id' => $chat_id, 'message_id' => $message_id]);
            }
            return true;
        }
        return false;
    }

    /**
     * you can call some of our build in apis with this method
     *
     * some apis will need parameter , so you must use them in option parameter as array
     *
     * NOTE : We try to make apis always online and always work, but sometimes that is not possible
     *
     * e.g. => $this->api(['type'=>'pdf','option'=>['url'=>'https://bptlib.ir']]);
     *
     * e.g. => $this->api(['type'=>'dastan']);
     *
     * @param array $array e.g. => ['type'=>'pdf','option'=>['url'=>'https://bptlib.ir']]
     *
     * @return string|array|bool
     * @throws exception
     */
    public function api (array $array) {
        if (!isset($array['type'])) {
            $this->logger('error', "BPT api function used\ntype parameter not found");
            throw new exception('type parameter not found');
        }
        $type = $array['type'];
        $option = $array['option'] ?? [];
        if (!is_array($option)) {
            throw new exception('array parameter must be array!');
        }
        switch ($type) {
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
            case 'fall':
                return 'https://poty.ir/apis/fal.php';
            case 'khatere':
                return json_decode(file_get_contents('https://poty.ir/apis/khatere.php'), true)['results'];
            case 'pnp':
                return json_decode(file_get_contents('https://poty.ir/apis/pnp.php'), true)['results'];
            case 'noroz':
                return json_decode(file_get_contents('https://poty.ir/apis/noroz.php'), true)['results'];
            case 'capcha'://
                return json_decode(file_get_contents('https://poty.ir/apis/capcha2.php'), true)['results'];
            case 'time':
                return json_decode(file_get_contents('https://poty.ir/apis/time.php'), true)['results'];
            case 'corona':
                return json_decode(file_get_contents('https://poty.ir/apis/corona.php'), true)['results'];
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
                if (!isset($option['url'])) {
                    throw new exception('screenshot api need url field!');
                }
                $url = urlencode($option['url']);
                $res1 = file_get_contents('https://poty.ir/apis/screenshot2.php?url=' . $url);
                if (strpos($res1, 'cannot be displayed because it contains errors.') !== false) {
                    return 'https://poty.ir/apis/screenshot2.php?url=' . $url;
                }
                $res1 = file_get_contents('https://poty.ir/apis/screenshot.php?type=fullscreen&url=' . $url);
                if (strpos($res1, 'cannot be displayed because it contains errors.') !== false) {
                    return 'https://poty.ir/apis/screenshot.php?type=fullscreen&url=' . $url;
                }
                return false;
            case 'num2text':
                if (!isset($option['num'])) {
                    throw new exception('num2text api need num field!');
                }
                $url = urlencode(str_replace(['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'], [0, 1, 2, 3, 4, 5, 6, 7, 8, 9], $option['num']));
                return json_decode(file_get_contents("https://poty.ir/apis/num.php?num=$url"), true)['results'];
            case 'fin2pe':
                if (!isset($option['text'])) {
                    throw new exception('fin2pe api need text field!');
                }
                return json_decode(file_get_contents('https://poty.ir/apis/fintope.php?text=' . urlencode($option['text'])), true)['results'];
            default:
                return false;
        }
    }
}

<?php
/** Your bot token */
$token  = 'YOUR-TOKEN';
/** Your mysql address */
$DBhost = '';
/** Your mysql user name */
$DBuser = '';
/** Your mysql user password */
$DBpass = '';
/** Your mysql database name */
$DBname = '';

if(!file_exists('BPT.php')){
    copy('https://dl.bptlib.ir/BPT.php', 'BPT.php');
}
require 'BPT.php';

$db = new mysqli($DBhost,$DBuser,$DBpass,$DBname);
if($db->connect_errno) die('Database connection error : ' . $db->connect_errno);

class BPT_handler extends BPT {
    // texts , you could set them directly in method call too
    const start_text = "Hello dear user\nI can help you for manage your webhooks";
    const set_webhook_text = 'Please send your url, Do not forgot https:// in first of it';
    const set_webhook_url_wrong_text = 'Url is wrong, Please send valid url and do not forgot https:// in first of it';
    const set_webhook_token_text = 'Now please send your token for set webhook';
    const delete_webhook_text = 'Please send your token for deleting webhook';
    const clear_pending_text = 'Please send your token for clearing pending update';
    const clear_pending_done_text = "Done. Total pending update cleared : ";
    const webhook_info_text = 'Please send your token for getting info';
    const webhook_info_show_text = 'Your token webhook info : ';
    const webhook_info_url_text = 'Url';
    const webhook_info_max_text = 'Max connection';
    const webhook_info_pending_text = 'Pending update';
    const webhook_info_message_text = 'Last error message';
    const webhook_info_date_text = 'Last error date';
    const done_text = 'Done!';
    const token_not_right_text = 'Token is not right';
    const something_went_wrong_text = 'Something went wrong, Please try later';

    // buttons , you could set them directly in method call too
    const back_button = 'Back';
    const set_webhook_button = 'Set webhook';
    const delete_webhook_button = 'Delete webhook';
    const clear_pending_button = 'Clear pending update';
    const webhook_info_button = 'Webhook info';

    // keyboards , you could set them directly in method call too
    const back_keyboard = [
        [
            self::back_button
        ]
    ];
    const start_keyboard = [
        [
            self::set_webhook_button,
            self::delete_webhook_button
        ],
        [
            self::clear_pending_button,
            self::webhook_info_button
        ]
    ];


    public function __construct(array $settings){
        parent::__construct($settings);
    }

    public function message($update){
        global $db;
        $text = $update->text;
        $user_id = $update->from->id;
        $user = $db->query("SELECT * FROM `users` WHERE `id` = $user_id limit 1");
        if ($user->num_rows < 1) {
            $db->query("INSERT INTO `users`(`id`) VALUES($user_id)");
            $user = $db->query("SELECT * FROM `users` WHERE `id` = $user_id limit 1");
        }
        $user = $user->fetch_object();

        if ($text === '/start') {
            if ($user->step !== 'main') {
                $db->query("UPDATE `users` SET `step` = 'main' WHERE `id` = $user_id limit 1");
            }
            $keyboard = $this->eKey(['keyboard'=>self::start_keyboard]);
            $this->send(['text'=>self::start_text,'reply_markup' => $keyboard,'answer'=>true]);
        }
        else {
            if ($user->step === 'main') {
                switch ($text) {
                    case self::set_webhook_button:
                        $db->query("UPDATE `users` SET `step` = 'set_webhook' WHERE `id` = $user_id limit 1");
                        $keyboard = $this->eKey(['keyboard'=>self::back_keyboard]);
                        $this->send(['text'=>self::set_webhook_text,'reply_markup' => $keyboard,'answer'=>true]);
                        break;
                    case self::delete_webhook_button:
                        $db->query("UPDATE `users` SET `step` = 'delete_webhook' WHERE `id` = $user_id limit 1");
                        $keyboard = $this->eKey(['keyboard'=>self::back_keyboard]);
                        $this->send(['text'=>self::delete_webhook_text,'reply_markup' => $keyboard,'answer'=>true]);
                        break;
                    case self::clear_pending_button:
                        $db->query("UPDATE `users` SET `step` = 'clear_pending' WHERE `id` = $user_id limit 1");
                        $keyboard = $this->eKey(['keyboard'=>self::back_keyboard]);
                        $this->send(['text'=>self::clear_pending_text,'reply_markup' => $keyboard,'answer'=>true]);
                        break;
                    case self::webhook_info_button:
                        $db->query("UPDATE `users` SET `step` = 'webhook_info' WHERE `id` = $user_id limit 1");
                        $keyboard = $this->eKey(['keyboard'=>self::back_keyboard]);
                        $this->send(['text'=>self::webhook_info_text,'reply_markup' => $keyboard,'answer'=>true]);
                        break;
                }
            }
            elseif ($user->step === 'set_webhook'){
                if ($text === self::back_button) {
                    $db->query("UPDATE `users` SET `step` = 'main' WHERE `id` = $user_id limit 1");
                    $keyboard = $this->eKey(['keyboard'=>self::start_keyboard]);
                    $this->send(['text'=>self::start_text,'reply_markup' => $keyboard,'answer'=>true]);
                }
                else {
                    if (filter_var($text,FILTER_VALIDATE_URL) && strpos($text,'https://') === 0) {
                        $query = $db->prepare("UPDATE `users` SET `step` = 'set_webhook_token' , `value` = ? WHERE `id` = $user_id limit 1");
                        $query->bind_param("s", $text);
                        $query->execute();
                        $this->send(['text'=>self::set_webhook_token_text,'answer'=>true]);
                    }
                    else {
                        $this->send(['text'=>self::set_webhook_url_wrong_text,'answer'=>true]);
                    }
                }
            }
            elseif ($user->step === 'set_webhook_token'){
                if ($text === self::back_button) {
                    $db->query("UPDATE `users` SET `step` = 'set_webhook' , `value`='' WHERE `id` = $user_id limit 1");
                    $keyboard = $this->eKey(['keyboard'=>self::back_keyboard]);
                    $this->send(['text'=>self::set_webhook_text,'reply_markup' => $keyboard,'answer'=>true]);
                }
                else {
                    if ($this->isToken(['token'=>$text,'verify'=>true])) {
                        $res = $this->setWebhook([
                            'token'=>$text,
                            'url' => $user->value
                        ]);
                        if ($res['ok']) {
                            $db->query("UPDATE `users` SET `step` = 'main' WHERE `id` = $user_id limit 1");
                            $keyboard = $this->eKey(['keyboard'=>self::start_keyboard]);
                            $this->send(['text'=>self::done_text,'reply_markup' => $keyboard,'answer'=>true]);
                        }
                        else {
                            $this->send(['text'=>self::something_went_wrong_text,'answer'=>true]);
                        }
                    }
                    else {
                        $this->send(['text'=>self::token_not_right_text,'answer'=>true]);
                    }
                }
            }
            elseif ($user->step === 'delete_webhook'){
                if ($text === self::back_button) {
                    $db->query("UPDATE `users` SET `step` = 'main' WHERE `id` = $user_id limit 1");
                    $keyboard = $this->eKey(['keyboard'=>self::start_keyboard]);
                    $this->send(['text'=>self::start_text,'reply_markup' => $keyboard,'answer'=>true]);
                }
                else {
                    if ($this->isToken(['token'=>$text,'verify'=>true])) {
                        if ($this->delWeb(['token'=>$text])['ok']) {
                            $db->query("UPDATE `users` SET `step` = 'main' WHERE `id` = $user_id limit 1");
                            $keyboard = $this->eKey(['keyboard'=>self::start_keyboard]);
                            $this->send(['text'=>self::done_text,'reply_markup' => $keyboard]);
                        }
                        else {
                            $this->send(['text'=>self::something_went_wrong_text,'answer'=>true]);
                        }
                    }
                    else {
                        $this->send(['text'=>self::token_not_right_text,'answer'=>true]);
                    }
                }
            }
            elseif ($user->step === 'clear_pending'){
                if ($text === self::back_button) {
                    $db->query("UPDATE `users` SET `step` = 'main' WHERE `id` = $user_id limit 1");
                    $keyboard = $this->eKey(['keyboard'=>self::start_keyboard]);
                    $this->send(['text'=>self::start_text,'reply_markup' => $keyboard,'answer'=>true]);
                }
                else {
                    if ($this->isToken(['token'=>$text,'verify'=>true])) {
                        $info = $this->getWebhookInfo(['token'=>$text]);
                        if ($info['ok']) {
                            $info = $info['result'];
                            $res = $this->setWebhook([
                                'token'=>$text,
                                'url' => $info['url'],
                                'max_connections' => $info['max_connections'],
                                'allowed_updates' => $info['allowed_updates']
                            ]);
                            if ($res['ok']) {
                                $db->query("UPDATE `users` SET `step` = 'main' WHERE `id` = $user_id limit 1");
                                $keyboard = $this->eKey(['keyboard'=>self::start_keyboard]);
                                $this->send(['text'=>self::clear_pending_done_text . $info['pending_update_count'],'reply_markup' => $keyboard,'answer'=>true]);
                            }
                            else {
                                $this->send(['text'=>self::something_went_wrong_text,'answer'=>true]);
                            }
                        }
                        else {
                            $this->send(['text'=>self::something_went_wrong_text,'answer'=>true]);
                        }
                    }
                    else {
                        $this->send(['text'=>self::token_not_right_text,'answer'=>true]);
                    }
                }
            }
            elseif ($user->step === 'webhook_info'){
                if ($text === self::back_button) {
                    $db->query("UPDATE `users` SET `step` = 'main' WHERE `id` = $user_id limit 1");
                    $keyboard = $this->eKey(['keyboard'=>self::start_keyboard]);
                    $this->send(['text'=>self::start_text,'reply_markup' => $keyboard,'answer'=>true]);
                }
                else {
                    if ($this->isToken(['token'=>$text,'verify'=>true])) {
                        $info = $this->getWebhookInfo(['token'=>$text]);
                        if ($info['ok']) {
                            $info = $info['result'];
                            $url = $info['url'];
                            $main_text = self::webhook_info_show_text."\n". self::webhook_info_url_text ." : $url\n";
                            if ($info['max_connections'] != 40) {
                                $main_text .= self::webhook_info_max_text . " : " . $info['max_connections'] ."\n";
                            }
                            if ($info['pending_update_count'] !== 0) {
                                $main_text .= self::webhook_info_pending_text . " : " . $info['pending_update_count'] ."\n";
                            }
                            if (isset($info['last_error_message'])) {
                                $main_text .= self::webhook_info_message_text. " : " . $info['last_error_message'] ."\n".
                                              self::webhook_info_date_text . " : " . date('Y/m/d H:i:s',$info['last_error_date']) ."\n";
                            }
                            $db->query("UPDATE `users` SET `step` = 'main' WHERE `id` = $user_id limit 1");
                            $keyboard = $this->eKey(['keyboard'=>self::start_keyboard]);
                            $this->send(['text'=>$main_text,'reply_markup' => $keyboard,'answer'=>true]);
                        }
                        else {
                            $this->send(['text'=>self::something_went_wrong_text,'answer'=>true]);
                        }
                    }
                    else {
                        $this->send(['text'=>self::token_not_right_text,'answer'=>true]);
                    }
                }
            }
        }
    }
}

/**
 * The settings set to recommended values for a base file.
 * You should change them by your needs.
 *
 * If you does not know about the settings , read the link below
 *
 * @link https://bptlib.ir/doc/methods/en/__construct
 */
$BPT = new BPT_handler([
    'token' => $token,
    'db' => null,
    'allowed_updates' => ['message'],
]);
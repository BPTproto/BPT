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

/**
 * The settings set to recommended values for a base file.
 * You should change them by your needs.
 *
 * If you does not know about the settings , read the link below
 *
 * @link https://bptlib.ir/doc/methods/en/__construct
 */
$BPT = new BPT([
    'token' => $token,
    'db' => null,
    'handler'=>false,
    'allowed_updates' => ['message'],
]);

//texts (you could set them directly in method call too)
$start_text = "Hello dear user\nI can help you for manage your webhooks";
$set_webhook_text = 'Please send your url, Do not forgot https:// in first of it';
$set_webhook_url_wrong_text = 'Url is wrong, Please send valid url and do not forgot https:// in first of it';
$set_webhook_token_text = 'Now please send your token for set webhook';
$delete_webhook_text = 'Please send your token for deleting webhook';
$clear_pending_text = 'Please send your token for clearing pending update';
$clear_pending_done_text = "Done. Total pending update cleared : ";
$webhook_info_text = 'Please send your token for getting info';
$webhook_info_show_text = 'Your token webhook info : ';
$webhook_info_url_text = 'Url';
$webhook_info_max_text = 'Max connection';
$webhook_info_pending_text = 'Pending update';
$webhook_info_message_text = 'Last error message';
$webhook_info_date_text = 'Last error date';
$done_text = 'Done!';
$token_not_right_text = 'Token is not right';
$something_went_wrong_text = 'Something went wrong, Please try later';

//buttons (you could set them directly in method call too)
$back_button = 'Back';
$set_webhook_button = 'Set webhook';
$delete_webhook_button = 'Delete webhook';
$clear_pending_button = 'Clear pending update';
$webhook_info_button = 'Webhook info';

//keyboards (you could set them directly in method call too)
$back_keyboard = [
    [
        $back_button
    ]
];
$start_keyboard = [
    [
        $set_webhook_button,
        $delete_webhook_button
    ],
    [
        $clear_pending_button,
        $webhook_info_button
    ]
];

if (isset($BPT->update->message->text)) {
    $message = $BPT->update->message;
    $text = $message->text;
    $user_id = $message->from->id;

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
        $keyboard = $this->eKey(['keyboard'=>$start_keyboard]);
        $this->send(['text'=>$start_text,'reply_markup' => $keyboard,'answer'=>true]);
    }
    else {
        if ($user->step === 'main') {
            switch ($text) {
                case $set_webhook_button:
                    $db->query("UPDATE `users` SET `step` = 'set_webhook' WHERE `id` = $user_id limit 1");
                    $keyboard = $this->eKey(['keyboard'=>$back_keyboard]);
                    $this->send(['text'=>$set_webhook_text,'reply_markup' => $keyboard,'answer'=>true]);
                    break;
                case $delete_webhook_button:
                    $db->query("UPDATE `users` SET `step` = 'delete_webhook' WHERE `id` = $user_id limit 1");
                    $keyboard = $this->eKey(['keyboard'=>$back_keyboard]);
                    $this->send(['text'=>$delete_webhook_text,'reply_markup' => $keyboard,'answer'=>true]);
                    break;
                case $clear_pending_button:
                    $db->query("UPDATE `users` SET `step` = 'clear_pending' WHERE `id` = $user_id limit 1");
                    $keyboard = $this->eKey(['keyboard'=>$back_keyboard]);
                    $this->send(['text'=>$clear_pending_text,'reply_markup' => $keyboard,'answer'=>true]);
                    break;
                case $webhook_info_button:
                    $db->query("UPDATE `users` SET `step` = 'webhook_info' WHERE `id` = $user_id limit 1");
                    $keyboard = $this->eKey(['keyboard'=>$back_keyboard]);
                    $this->send(['text'=>$webhook_info_text,'reply_markup' => $keyboard,'answer'=>true]);
                    break;
            }
        }
        elseif ($user->step === 'set_webhook'){
            if ($text === $back_button) {
                $db->query("UPDATE `users` SET `step` = 'main' WHERE `id` = $user_id limit 1");
                $keyboard = $this->eKey(['keyboard'=>$start_keyboard]);
                $this->send(['text'=>$start_text,'reply_markup' => $keyboard,'answer'=>true]);
            }
            else {
                if (filter_var($text,FILTER_VALIDATE_URL) && strpos($text,'https://') === 0) {
                    $query = $db->prepare("UPDATE `users` SET `step` = 'set_webhook_token' , `value` = ? WHERE `id` = $user_id limit 1");
                    $query->bind_param("s", $text);
                    $query->execute();
                    $this->send(['text'=>$set_webhook_token_text,'answer'=>true]);
                }
                else {
                    $this->send(['text'=>$set_webhook_url_wrong_text,'answer'=>true]);
                }
            }
        }
        elseif ($user->step === 'set_webhook_token'){
            if ($text === $back_button) {
                $db->query("UPDATE `users` SET `step` = 'set_webhook' , `value`='' WHERE `id` = $user_id limit 1");
                $keyboard = $this->eKey(['keyboard'=>$back_keyboard]);
                $this->send(['text'=>$set_webhook_text,'reply_markup' => $keyboard,'answer'=>true]);
            }
            else {
                if ($this->isToken(['token'=>$text,'verify'=>true])) {
                    $res = $this->setWebhook([
                        'token'=>$text,
                        'url' => $user->value
                    ]);
                    if ($res['ok']) {
                        $db->query("UPDATE `users` SET `step` = 'main' WHERE `id` = $user_id limit 1");
                        $keyboard = $this->eKey(['keyboard'=>$start_keyboard]);
                        $this->send(['text'=>$done_text,'reply_markup' => $keyboard,'answer'=>true]);
                    }
                    else {
                        $this->send(['text'=>$something_went_wrong_text,'answer'=>true]);
                    }
                }
                else {
                    $this->send(['text'=>$token_not_right_text,'answer'=>true]);
                }
            }
        }
        elseif ($user->step === 'delete_webhook'){
            if ($text === $back_button) {
                $db->query("UPDATE `users` SET `step` = 'main' WHERE `id` = $user_id limit 1");
                $keyboard = $this->eKey(['keyboard'=>$start_keyboard]);
                $this->send(['text'=>$start_text,'reply_markup' => $keyboard,'answer'=>true]);
            }
            else {
                if ($this->isToken(['token'=>$text,'verify'=>true])) {
                    if ($this->delWeb(['token'=>$text])['ok']) {
                        $db->query("UPDATE `users` SET `step` = 'main' WHERE `id` = $user_id limit 1");
                        $keyboard = $this->eKey(['keyboard'=>$start_keyboard]);
                        $this->send(['text'=>$done_text,'reply_markup' => $keyboard]);
                    }
                    else {
                        $this->send(['text'=>$something_went_wrong_text,'answer'=>true]);
                    }
                }
                else {
                    $this->send(['text'=>$token_not_right_text,'answer'=>true]);
                }
            }
        }
        elseif ($user->step === 'clear_pending'){
            if ($text === $back_button) {
                $db->query("UPDATE `users` SET `step` = 'main' WHERE `id` = $user_id limit 1");
                $keyboard = $this->eKey(['keyboard'=>$start_keyboard]);
                $this->send(['text'=>$start_text,'reply_markup' => $keyboard,'answer'=>true]);
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
                            $keyboard = $this->eKey(['keyboard'=>$start_keyboard]);
                            $this->send(['text'=>$clear_pending_done_text . $info['pending_update_count'],'reply_markup' => $keyboard,'answer'=>true]);
                        }
                        else {
                            $this->send(['text'=>$something_went_wrong_text,'answer'=>true]);
                        }
                    }
                    else {
                        $this->send(['text'=>$something_went_wrong_text,'answer'=>true]);
                    }
                }
                else {
                    $this->send(['text'=>$token_not_right_text,'answer'=>true]);
                }
            }
        }
        elseif ($user->step === 'webhook_info'){
            if ($text === $back_button) {
                $db->query("UPDATE `users` SET `step` = 'main' WHERE `id` = $user_id limit 1");
                $keyboard = $this->eKey(['keyboard'=>$start_keyboard]);
                $this->send(['text'=>$start_text,'reply_markup' => $keyboard,'answer'=>true]);
            }
            else {
                if ($this->isToken(['token'=>$text,'verify'=>true])) {
                    $info = $this->getWebhookInfo(['token'=>$text]);
                    if ($info['ok']) {
                        $info = $info['result'];
                        $url = $info['url'];
                        $main_text = $webhook_info_show_text."\n". $webhook_info_url_text ." : $url\n";
                        if ($info['max_connections'] != 40) {
                            $main_text .= $webhook_info_max_text . " : " . $info['max_connections'] ."\n";
                        }
                        if ($info['pending_update_count'] !== 0) {
                            $main_text .= $webhook_info_pending_text . " : " . $info['pending_update_count'] ."\n";
                        }
                        if (isset($info['last_error_message'])) {
                            $main_text .= $webhook_info_message_text. " : " . $info['last_error_message'] ."\n".
                                $webhook_info_date_text . " : " . date('Y/m/d H:i:s',$info['last_error_date']) ."\n";
                        }
                        $db->query("UPDATE `users` SET `step` = 'main' WHERE `id` = $user_id limit 1");
                        $keyboard = $this->eKey(['keyboard'=>$start_keyboard]);
                        $this->send(['text'=>$main_text,'reply_markup' => $keyboard,'answer'=>true]);
                    }
                    else {
                        $this->send(['text'=>$something_went_wrong_text,'answer'=>true]);
                    }
                }
                else {
                    $this->send(['text'=>$token_not_right_text,'answer'=>true]);
                }
            }
        }
    }
}
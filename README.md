# BPT Proto Library
<img src="https://bpt-proto.ir/asset/img/Bpt.jpg" width="1000px"></img>
<img src="https://img.shields.io/badge/Version-1.12-blue?style=for-the-badge&logo=V"> <img src="https://img.shields.io/badge/php-+7-green?style=for-the-badge&logo=php"><img src="https://img.shields.io/badge/License-MIT-gold?style=for-the-badge&logo=surveymonkey">

## Table of Contents
- [Introduction](#Introduction) 
- [Getting started](#Getting-started)
- [BPT Settings](#Setting)
- [Source Sample](#Examples)
- [Download Section](#Download-Section)

---------------
## Introduction
**What is the BPT Library? <br>
A library for easier use and better coding in source codes**

**What is BPT? <br>
This word for `Bot Php Tools` in Persian means php bot tool.**

**How do I use it? <br>
This library is a free resource and you can easily use it by reading the documentation.**

**Developers? <br>
This library has been designed by (Alireza Ghafoorshid, Miad Sadeghlou) and is available for free to your loved ones.**

----------
## Getting started
- **Go to `@BotFather` and create a bot**
- **After create bot copy your `API_KEY`**
- **Then download the version of Bese**
- **Open the version of bese**
- **Go to Line 2 and input token on `YOUR-TOKEN`**
```php
$token = 'YOUR-TOKEN'; //Write Your Token here!!
```
**Great, now apply the library settings**<br>
**All settings of `BPT_handler`**
- **[You Can See Setting parameters Click Here](#Setting)**

**We'll set the settings now**
```php
$BPT = new BPT_handler([
'token'=>$token,
'security'=>true,
'secure_folder'=>true,
'multi'=>false,
'db'=>[
'type'=>'json',
'file_name'=>'BPT-DB.json'
]
]);
```
**Now everything is great and set by default**
<br>
#### Now we're going to have the bot respond to an Command.
**To do this, we need `text` and `chat_id`**
**To get these two, we use the The following code**
```php
$chat_id = $update['chat']['id'];
$text = $update['text'];
```
**Now we say if the user's message is equal to `/start` send him a message**
```php
  if($text == '/start'){    
  //Sample SendMessage
  $this->sendMessage(['text'=>'Hi Welcome!']);   
   }    
```
**Our final code is as follows**
```php
<?php
$token= 'YOUR-TOKEN'; //Write Your Token here!!
if(!file_exists('BPT.php')){
    copy('https://BPT-Proto.ir/BPT/BPT.php','BPT.php');
}
include 'BPT.php';
class BPT_handler extends BPT{
    public function __construct($token_bot){
        parent::__construct($token_bot);
    }
    public function inline_query($update){
        return;
    }
    public function callback_query($update){
        return;
    }
    public function message($update){
    $chat_id = $update['chat']['id'];
    $text = $update['text'];
     if($text == '/start'){    
    //Sample SendMessage   
    $this->sendMessage(['text'=>'Hi Welcome!']);   
      }    
       return;
    }
    public function edited_message($update){
        return;
    }
    public function something_else($update){
        return;
    }
}
$BPT = new BPT_handler([
'token'=>$token,
'security'=>true,
'secure_folder'=>true,
'multi'=>false,
'db'=>[
'type'=>'json',
'file_name'=>'BPT-DB.json'
]
]);
```
**All you can now run the source and enjoy**
 - [Need more samples? Click Here](#Examples).<br>

----------
## Setting
Index | Type | Description
----- | ---- | -----------
__token__ | string | Your API_KEY
__security__ | boolean | Source Security
_secure_folder_ | boolean | security folder Provides security for the source and related Folders 
__multi__ | boolean | Adds parallel processing to source
__db__ | array | The library has two databases. Click on the name to see the parameters of each<br>db : [Json](#json)<br>db : [sql](#sql)

----------
#### json database
Index | Type | Description
----- | ---- | -----------
__type__ | string | Database type must be json
__filename__ | string | Tom a file created by the library and the data inside it

Example : 
```php
'db'=>[
'type'=>'json',
'file_name'=>'BPT-DB.json'
]
```

----------
#### sql database
Index | Type | Description
----- | ---- | -----------
__type__ | string | Database type must be sql
__user__ | string | Database username
__pass__ | string | Database password 
__name__ | string | Database name

Example : 
```php
'db'=>[
'type'=>'sql',
'user'=> '',
'pass'=> '',
'name'=> '' 
]
```

----------
## Examples
- **Basic version of sql database based on BPT** : [See Source](https://bpt-proto.ir)

----------
## Download Section
- [You can see full document  here](https://bpt-proto.ir).<br>
- [You can download latest version of BPT here](https://bpt-proto.ir/BPT/BPT.php).<br>
- [You can download latest version of BPT base here](https://bpt-proto.ir/BPT/base.php).<br>
- [You can see all of BPT vesrion here](https://dl.bpt-proto.ir/BPT).

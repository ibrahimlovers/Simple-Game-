<?php
/*
  ___                   _         _ 
 | . \ ___  ___  ___  _| | ___  _| |
 |   // __)/    / . \/ . |/ __)/ . |
 |_\_\\___.\___ \___/\___|\___.\___|
Programmer(); 
@Lock_at_me_now 
MAGIC BOT 2017/5/30                     
*/
ob_start();
$TOKEN = '275773197:AAEmttNQA141X058AX_e--CTL2FF4'; /*TOKEN BOT*/
define('API', $TOKEN, 0);
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;

$name = $message->from->first_name;
$user = $message->from->username;

if($text == "/start"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'MarkDown',
"text"=>"اهلا بك يا [$name](https://t.me/$user) 🌀, \nفي بوت لعبه الذكاء 🐬\nالعبه مستوحى من داخل مسائل رياضيه 💭 \n\nاظغط على زر معلومات لكي يتم تعريفك على اللعبه وكيفيه اللعب لتسهيل عملية اللعب عليك 🎽 \n\nاللعبه مسليه ومنشطه 🎈 \n\nابدأ اللعب واضغط على زر متابعة لكي يتم تحويلك الى اللعبه 🎮 \n\nفضلا وليس امرا اتبع قناة البوت ليصلك كل جديد 🌐",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'متابعة', 'callback_data'=>'home'],['text'=>'معلومات🚸', 'callback_data'=>'info']],
[
['text'=>'Developer ⛑', 'url'=>'https://t.me/lock_at_me_now']
],
[
['text'=>'Channel 🌐', 'url'=>'https://t.me/Babeleon_bot']
],
]
])
]);
}
if($data == "home"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
"text"=>"اهلا بك مجددا 🌀,  \n ان لم تقرأ تعليمات اللعبه يمكنك الان الضغط على زر معلومات لكي تعرف كيفيه لعب اللعبة 🚸\n\nهل انت جاهز ..؟ \n\nهيا لنبدأ... 🐬 \n\nفضلا وليس امرا اتبع قناة البوت ليصلك كل جديد 🌐",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'معلومات🚸', 'callback_data'=>'info']
],
[
['text'=>'اختر ايموجي مميز 💡','callback_data'=>'recoded']
],
[['text'=>'🌀', 'callback_data'=>'9'],['text'=>'💤', 'callback_data'=>'4'],
['text'=>'🚹', 'callback_data'=>'8'],
['text'=>'🚺', 'callback_data'=>'6'],['text'=>'🔮', 'callback_data'=>'2'],['text'=>'💡', 'callback_data'=>'3'],['text'=>'👑', 'callback_data'=>'1'],['text'=>'🙊', 'callback_data'=>'7']
],
[['text'=>'🐣', 'callback_data'=>'5'],['text'=>'🦋', 'callback_data'=>'10']
],
[
['text'=>'Developer ⛑', 'url'=>'https://t.me/lock_at_me_now']
],
[
['text'=>'Channel 🌐', 'url'=>'https://t.me/Babeleon_bot']
],
]
])
]);
}
if($data == 'info'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
"text"=>"الارقام المسموحه هيه الارقام التي تبدأ من الرقم 1 الى الرقم 10 فقط لا غير ⚠️\n\nمعلومات اكثر عن البوت : \n\nلعبه جديده في برنامج التليجرام ، وهيه لعبه مسليه فيها معادلات رياضيه 🚸 سيسئلك البوت حسب اختيارك لليموجي 👍🏼 \n\nاحسن الاختيار لكي لا تتعب عقلك 😅\n\nكيفيه اللعب ..؟ \n\nاختر رقما التي تبدأ من الـ 1 الى الـ 10 ثم قم بأختيار ايموجي وسيبدأ البوت بسؤالك واتبع ما يقوله البوت لك 🌀 \n\nهيا للننطلق للعب اظغط على متابعة ليتم تحويلك الى اللعبة 🎮 \n\nفضلا وليس امرا اتبع قناة البوت ليصلك كل جديد 🌐",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعة🚀', 'callback_data'=>'home']
],
[
['text'=>'Channel 🌐', 'url'=>'https://t.me/Babeleon_bot']
],
]
])
]);
}
if($data == "10"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'parse_mode'=>'MarkDown',
'text'=>"حسنا خطوه جيده تابع اللعبه 🚸\n---------------\n 
خذ من صديقك نفس الرقم الذي اخذته و اضيفه الى رقمك...\n ثم اضغط متابعه » 💭",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعه🚀', 'callback_data'=>'nu5']
],
[
['text'=>'رجوع', 'callback_data'=>'home']
],
]
])
]);
}
if($data == 'nu5'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"الان اضف على الرقم الذي جمعته اضف \nعليه رقم 10 اجمع العدد ثم اضغط متابعة » 💭",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعة', 'callback_data'=>'num5']
],
]
])
]);
}

if($data == 'num5'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"ارمي نصف الرقم في البحر 🏊🏼 \nثم ارجع الرقم الذي اخذته من صديقك 🤹🏻‍♂\nوظغط على متابعة » 💬",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعة', 'callback_data'=>'numb5']
],
]
])
]);
}

if($data == 'numb5'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"🚸 | الناتج هوه » 5 \n\nاحسن العد جيدا 😅",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'القائمة الرئيسية 🚀', 'callback_data'=>'home']
],
]
])
]);
}

if($data == "9"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'parse_mode'=>'MarkDown',
'text'=>"حسنا خطوه جيده تابع اللعبه 🚸\n---------------\n 
خذ من صديقك نفس الرقم الذي اخذته و اضيفه الى رقمك...\n ثم اضغط متابعه » 💭",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعه🚀', 'callback_data'=>'nu4.5']
],
[
['text'=>'رجوع', 'callback_data'=>'home']
],
]
])
]);
}
if($data == 'nu4.5'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"الان اضف على الرقم الذي جمعته اضف \nعليه رقم 9 اجمع العدد ثم اضغط متابعة » 💭",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعة', 'callback_data'=>'num4.5']
],
]
])
]);
}

if($data == 'num4.5'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"ارمي نصف الرقم في البحر 🏊🏼 \nثم ارجع الرقم الذي اخذته من صديقك 🤹🏻‍♂\nوظغط على متابعة » 💬",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعة', 'callback_data'=>'numb4.5']
],
]
])
]);
}

if($data == 'numb4.5'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"🚸 | الناتج هوه » 4.5 \n\nاحسن العد جيدا 😅",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'القائمة الرئيسية 🚀', 'callback_data'=>'home']
],
]
])
]);
}
if($data == "8"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'parse_mode'=>'MarkDown',
'text'=>"حسنا خطوه جيده تابع اللعبه 🚸\n---------------\n 
خذ من صديقك نفس الرقم الذي اخذته و اضيفه الى رقمك...\n ثم اضغط متابعه » 💭",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعه🚀', 'callback_data'=>'nu4']
],
[
['text'=>'رجوع', 'callback_data'=>'home']
],
]
])
]);
}
if($data == 'nu4'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"الان اضف على الرقم الذي جمعته اضف \nعليه رقم 8 اجمع العدد ثم اضغط متابعة »  💭",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعة', 'callback_data'=>'num4']
],
]
])
]);
}

if($data == 'num4'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"ارمي نصف الرقم في البحر 🏊🏼 \nثم ارجع الرقم الذي اخذته من صديقك 🤹🏻‍♂\nوظغط على متابعة » 💬",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعة', 'callback_data'=>'numb4']
],
]
])
]);
}

if($data == 'numb4'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"🚸 | الناتج هوه » 4 \n\nاحسن العد جيدا 😅",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'القائمة الرئيسية 🚀', 'callback_data'=>'home']
],
]
])
]);
}
if($data == "7"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'parse_mode'=>'MarkDown',
'text'=>"حسنا خطوه جيده تابع اللعبه 🚸\n---------------\n 
خذ من صديقك نفس الرقم الذي اخذته و اضيفه الى رقمك...\n ثم اضغط متابعه » 💭",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعه🚀', 'callback_data'=>'nu3.5']
],
[
['text'=>'رجوع', 'callback_data'=>'home']
],
]
])
]);
}
if($data == 'nu3.5'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"الان اضف على الرقم الذي جمعته اضف \nعليه رقم 7 اجمع العدد ثم اضغط متابعة »  💭",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعة', 'callback_data'=>'num3.5']
],
]
])
]);
}

if($data == 'num3.5'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"ارمي نصف الرقم في البحر 🏊🏼 \nثم ارجع الرقم الذي اخذته من صديقك 🤹🏻‍♂\nوظغط على متابعة » 💬",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعة', 'callback_data'=>'numb3.5']
],
]
])
]);
}

if($data == 'numb3.5'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"🚸 | الناتج هوه » 3.5 \n\nاحسن العد جيدا 😅",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'القائمة الرئيسية 🚀', 'callback_data'=>'home']
],
]
])
]);
}

if($data == "6"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'parse_mode'=>'MarkDown',
'text'=>"حسنا خطوه جيده تابع اللعبه 🚸\n---------------\n 
خذ من صديقك نفس الرقم الذي اخذته و اضيفه الى رقمك...\n ثم اضغط متابعه » 💭",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعه🚀', 'callback_data'=>'nu3']
],
[
['text'=>'رجوع', 'callback_data'=>'home']
],
]
])
]);
}
if($data == 'nu3'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"الان اضف على الرقم الذي جمعته اضف \nعليه رقم 6 اجمع العدد ثم اضغط متابعة »  💭",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعة', 'callback_data'=>'num3']
],
]
])
]);
}

if($data == 'num3'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"ارمي نصف الرقم في البحر 🏊🏼 \nثم ارجع الرقم الذي اخذته من صديقك 🤹🏻‍♂\nوظغط على متابعة » 💬",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعة', 'callback_data'=>'numb3']
],
]
])
]);
}

if($data == 'numb3'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"🚸 | الناتج هوه » 3 \n\nاحسن العد جيدا 😅",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'القائمة الرئيسية 🚀', 'callback_data'=>'home']
],
]
])
]);
}

if($data == "5"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'parse_mode'=>'MarkDown',
'text'=>"حسنا خطوه جيده تابع اللعبه 🚸\n---------------\n 
خذ من صديقك نفس الرقم الذي اخذته و اضيفه الى رقمك...\n ثم اضغط متابعه » 💭",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعه🚀', 'callback_data'=>'nu2.5']
],
[
['text'=>'رجوع', 'callback_data'=>'home']
],
]
])
]);
}
if($data == 'nu2.5'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"الان اضف على الرقم الذي جمعته اضف \nعليه رقم 5 اجمع العدد ثم اضغط متابعة »  💭",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعة', 'callback_data'=>'num2.5']
],
]
])
]);
}

if($data == 'num2.5'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"ارمي نصف الرقم في البحر 🏊🏼 \nثم ارجع الرقم الذي اخذته من صديقك 🤹🏻‍♂\nوظغط على متابعة » 💬",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعة', 'callback_data'=>'numb2.5']
],
]
])
]);
}

if($data == 'numb2.5'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"🚸 | الناتج هوه » 2.5 \n\nاحسن العد جيدا 😅",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'القائمة الرئيسية 🚀', 'callback_data'=>'home']
],
]
])
]);
}

if($data == "4"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'parse_mode'=>'MarkDown',
'text'=>"حسنا خطوه جيده تابع اللعبه 🚸\n---------------\n 
خذ من صديقك نفس الرقم الذي اخذته و اضيفه الى رقمك...\n ثم اضغط متابعه » 💭",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعه🚀', 'callback_data'=>'nu2']
],
[
['text'=>'رجوع', 'callback_data'=>'home']
],
]
])
]);
}
if($data == 'nu2'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"الان اضف على الرقم الذي جمعته اضف \nعليه رقم 4 اجمع العدد ثم اضغط متابعة »  💭",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعة', 'callback_data'=>'num2']
],
]
])
]);
}

if($data == 'num2'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"ارمي نصف الرقم في البحر 🏊🏼 \nثم ارجع الرقم الذي اخذته من صديقك 🤹🏻‍♂\nوظغط على متابعة » 💬",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعة', 'callback_data'=>'numb2']
],
]
])
]);
}

if($data == 'numb2'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"🚸 | الناتج هوه » 2 \n\nاحسن العد جيدا 😅",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'القائمة الرئيسية 🚀', 'callback_data'=>'home']
],
]
])
]);
}

if($data == "3"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'parse_mode'=>'MarkDown',
'text'=>"حسنا خطوه جيده تابع اللعبه 🚸\n---------------\n 
خذ من صديقك نفس الرقم الذي اخذته و اضيفه الى رقمك...\n ثم اضغط متابعه » 💭",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعه🚀', 'callback_data'=>'nu1.5']
],
[
['text'=>'رجوع', 'callback_data'=>'home']
],
]
])
]);
}
if($data == 'nu1.5'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"الان اضف على الرقم الذي جمعته اضف \nعليه رقم 3 اجمع العدد ثم اضغط متابعة »  💭",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعة', 'callback_data'=>'num1.5']
],
]
])
]);
}

if($data == 'num1.5'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"ارمي نصف الرقم في البحر 🏊🏼 \nثم ارجع الرقم الذي اخذته من صديقك 🤹🏻‍♂\nوظغط على متابعة » 💬",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعة', 'callback_data'=>'numb1.5']
],
]
])
]);
}

if($data == 'numb1.5'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"🚸 | الناتج هوه » 1.5 \n\nاحسن العد جيدا 😅",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'القائمة الرئيسية 🚀', 'callback_data'=>'home']
],
]
])
]);
}

if($data == "2"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'parse_mode'=>'MarkDown',
'text'=>"حسنا خطوه جيده تابع اللعبه 🚸\n---------------\n 
خذ من صديقك نفس الرقم الذي اخذته و اضيفه الى رقمك...\n ثم اضغط متابعه » 💭",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعه🚀', 'callback_data'=>'nu1']
],
[
['text'=>'رجوع', 'callback_data'=>'home']
],
]
])
]);
}
if($data == 'nu1'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"الان اضف على الرقم الذي جمعته اضف \nعليه رقم 7 اجمع العدد ثم اضغط متابعة »  💭",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعة', 'callback_data'=>'num1']
],
]
])
]);
}

if($data == 'num1'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"ارمي نصف الرقم في البحر 🏊🏼 \nثم ارجع الرقم الذي اخذته من صديقك 🤹🏻‍♂\nوظغط على متابعة » 💬",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعة', 'callback_data'=>'numb1']
],
]
])
]);
}

if($data == 'numb1'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"🚸 | الناتج هوه » 1 \n\nاحسن العد جيدا 😅",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'القائمة الرئيسية 🚀', 'callback_data'=>'home']
],
]
])
]);
}

if($data == "1"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'parse_mode'=>'MarkDown',
'text'=>"حسنا خطوه جيده تابع اللعبه 🚸\n---------------\n 
خذ من صديقك نفس الرقم الذي اخذته و اضيفه الى رقمك...\n ثم اضغط متابعه » 💭",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعه🚀', 'callback_data'=>'nu0.5']
],
[
['text'=>'رجوع', 'callback_data'=>'home']
],
]
])
]);
}
if($data == 'nu0.5'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"الان اضف على الرقم الذي جمعته اضف \nعليه رقم 1 اجمع العدد ثم اضغط متابعة »  💭",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعة', 'callback_data'=>'num0.5']
],
]
])
]);
}

if($data == 'num0.5'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"ارمي نصف الرقم في البحر 🏊🏼 \nثم ارجع الرقم الذي اخذته من صديقك 🤹🏻‍♂\nوظغط على متابعة » 💬",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'متابعة', 'callback_data'=>'numb0.5']
],
]
])
]);
}

if($data == 'numb0.5'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"🚸 | الناتج هوه » 0.5 \n\nاحسن العد جيدا 😅",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'القائمة الرئيسية 🚀', 'callback_data'=>'home']
],
]
])
]);
}

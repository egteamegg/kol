<?php
flush();
ob_start();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);

if($text =="الاوامر" or $text =="مساعدة" or $text =="مساعده"){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
👨‍✈️┊اهلا بك عزيزي 🙋🏽‍♂
🔘┊في قائمة الاوامر العامة للبوت !
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
🔐¦ آوآمـر آلـقـفـل والفتح ↜م1↝
👮‍♂¦ آوآمـر آلآدآرهہ الادمنية‌‏ ↜م2↝
🔬¦ آوآمـر آعدآدآت المجموعة ↜م3↝
📟¦ آوآمـر آلرفع وآلتنزيل ↜م4↝

⚜¦ اوامر التقييد بالطرد/التحذير ↜م5↝
📭¦ آوآمـر آلتسلية والتحشيش  ↜م6↝
📢¦ اوامر آعدادات الردود↜م7↝
🛠¦ آلاوآمـر آلاضافية ↜م8↝
👨🏻‍💻¦ م المطور »  آوآمـر آلمـطـور
⚙¦ الاعدادات » لآدآرهہ‌‏ حماية آلبوت
🔅¦ـ➖➖➖➖➖
🚨¦ راسلني للاستفسار ↭ ‹ $buy ›
",'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
if($text =="م1" ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
 👨‍✈️┊اهلا بك عزيزي 🙋🏽‍♂
🔘┊في اوامر حماية المجموعة !
••┉┉┉┉┉┉┉┉┉┉┉┉┉•• 
🗯¦ ️قفل «» فتح •⊱ الروابط ⊰•
🗯¦ ️قفل «» فتح •⊱ المعرفات ⊰•
🗯¦ ️قفل «» فتح •⊱ التـاك ⊰•
🗯¦ ️قفل «» فتح •⊱ المواقع ⊰•
🗯¦ ️قفل «» فتح •⊱ الالعاب ⊰•
🗯¦ ️قفل «» فتح •⊱ التعديل ⊰•
🗯¦ ️قفل «» فتح •⊱ المتحركه ⊰•

ـــ ـــ ـــ ــــ ـــ ـــ ـــ ــــ
🗯¦ ️قفل «» فتح •⊱ الملصقات ⊰•
🗯¦ ️قفل «» فتح •⊱ الملفات ⊰•
🗯¦ ️قفل «» فتح •⊱ الصور ⊰•
🗯¦ ️قفل «» فتح •⊱ الفيديو ⊰•
🗯¦ ️قفل «» فتح •⊱ الانلاين ⊰•
🗯¦ ️قفل «» فتح •⊱ الدردشه ⊰•
🗯¦ ️قفل «» فتح •⊱ التكرار ⊰•

ـــ ـــ ـــ ــــ ـــ ـــ ـــ ــــ
🗯¦ ️قفل «» فتح •⊱ الفارسية ⊰•
🗯¦ ️قفل «» فتح •⊱ التوجيـــه ⊰•
🗯¦ ️قفل «» فتح •⊱ الماركدون ⊰•
🗯¦ ️قفل «» فتح •⊱ الاشعارات ⊰•
🗯¦ ️قفل «» فتح •⊱ الصـــوت ⊰•
🗯¦ ️قفل «» فتح •⊱ الجهات ⊰•

ـــ ـــ ـــ ــــ ـــ ـــ ـــ ــــ
🗯¦ ️قفل «» فتح •⊱ الانكليزيه ⊰•
🗯¦ ️قفل «» فتح •⊱ البوتات ⊰•
🗯¦ ️قفل «» فتح •⊱ العربيه ⊰•
🗯¦ ️قفل «» فتح •⊱ البصمات ⊰•

ـــ ـــ ـــ ــــ ـــ ـــ ـــ ــــ
🗯¦ ️قفل «» فتح •⊱ الكلايش ⊰•
🗯¦ ️قفل «» فتح •⊱ التحقق ⊰•
🗯¦ ️قفل «» فتح •⊱ الالعاب ⊰•
🗯¦ ️قفل «» فتح •⊱ الــرد ⊰•
🗯¦ ️قفل «» فتح •⊱ الكل ⊰•
🔅¦ـ➖➖➖➖➖
🚨¦ راسلني للاستفسار ↭ ‹ $buy ›
",'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
if($text =="م2"  ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"👨‍✈️┊اهلا بك عزيزي 🙋🏽‍♂
🔘┊في اوامر اعدادات الادارة !
••┉┉┉┉┉┉┉┉┉┉┉┉┉•• 

🔰¦ تفعيل الترحيب  ⊱ للتفعيل
🔰¦ تعطيل الترحيب ⊱للتعطيل 
🔰¦ وضع ترحيب + نص ⊱للتفعيل
🔰¦ الترحيب ⊱ لعرض الترحيب 
🔰¦ تفعيل تعطيل ⊱ للتفعيل

ـــ ـــ ـــ ــــ ـــ ـــ ـــ ــــ
⚠️¦ تفعيل الاشتراك الاجباري 
⚠️¦ تعطيل الاشتراك الاجباري 
⚠️¦ وضع قناة + المعرف ⊱ للضبط

ـــ ـــ ـــ ــــ ـــ ـــ ـــ ــــ
🚸¦ تقييد - كتم⊱ بالرد ⊰ 
🚸¦ تقييد ⊱ لمدة.

🚸¦ الغاء تقييد - الكتم ⊱ بالرد ⊰ 
🚸¦ قائمة المقيدين  ⊱ للعرض  
🚸¦ مسح المقيدين  ⊱ للمسح
🚸¦ كتم عام ⊱ بالرد⊱ للكتم العام
🚸¦ الغاء كتم العام ⊱ بالرد لالغاء الكتم
🚸¦ مسح المكتومين ⊱ لحذف القائمة العامة
ـــ ـــ ـــ ــــ ـــ ـــ ـــ ــــ
🚸¦ حظر - طرد ⊱ بالرد⊱للحظر والطرد
🚸¦ الغاء الحظر ⊱ بالرد ليتم الالغاء 

🚸¦ المحظورين  ⊱ لعرض المحظورين 
🚸¦ مسح المحظورين  ⊱ لمسح القائمة
🔅¦ـ➖➖➖➖➖
🚨¦ راسلني للاستفسار ↭ ‹ $buy ›
",'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
if($text =="م3"  ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"👨‍✈️┊اهلا بك عزيزي 🙋🏽‍♂
🔘┊في اوامر اعدادات المجموعة !
••┉┉┉┉┉┉┉┉┉┉┉┉┉•• 
📝¦ وضع قوانين + نص ⊱ للوضع
📝¦ وضع الاعضاء + العدد ⊱ للوضع
📝¦ وضع كلايش + العدد  ⊱ للوضع
➺
🔞¦ فلتر + الكلمة ⊱ لمنع ارسالها  
🔞¦ الغاء فلتر + الكلمة ⊱ للإلغاء 
🔞¦ قائمة المنع ⊱ لاظهار القائمة
🔞¦ مسح قائمة المنع ⊱ لحذف القائمة
➺
📌¦ تثبيت ⊱ بالرد على الرسالة 
📌¦ الغاء التثبيت ⊱ لالغاء التثبيت
👮‍♂¦ رفع مشرف ⊱ بالرد للرفع 
👮‍♂¦ تنزيل مشرف ⊱ بالرد للتنزيل
👮‍♂¦ الادمنية ⊱ لإظهار الأدمنية 
🔅¦ـ➖➖➖➖➖
🚨¦ راسلني للاستفسار ↭ ‹ $buy ›
",'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
if($text =="م4"  ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"👨‍✈️┊اهلا بك عزيزي 🙋🏽‍♂
🔘┊في اوامر الادمنية المجموعة !
••┉┉┉┉┉┉┉┉┉┉┉┉┉•• 
〽️¦ قوانين  ⊱ لعرض القوانين 
〽️¦ الادمنية ⊱ لعرض الادمنية 
〽️¦ المميزين  ⊱ لعرض المميزين
〽️¦️ المشرفين  ⊱ لعرض المشرفين  
〽️¦️ المدراء  ⊱ لعرض المدراء  

🗑¦ مسح المدراء  ⊱ لمسح المدراء
🗑¦ مسح الادمنيه ⊱ لمسح الادمنية 
🗑¦ مسح المميزين ⊱ لمسح المميزين
🗑¦ تنزيل الكل ⊰• حذف الكل للحذف

👨🏻‍💻¦ رفع ادمن ⊱ لرفع ادمن
👨🏻‍💻¦ تنزيل ادمن ⊱ لتنزيل ادمن
👨🏻‍💻¦ رفع مدير ⊱ لرفع مدير
👨🏻‍💻¦ تنزيل مدير ⊱ لتنزيل مدير
👨🏻‍💻¦ رفع مميز ⊱ لرفع مميز
👨🏻‍💻¦ تنزيل مميز ⊱ لتنزيل مميز
👨🏻‍💻¦ رفع بصلاحية ⊰• لرفع العضو
👨🏻‍💻¦ تنزيل بصلاحية ⊰• لتنزيل العضو
👨🏻‍💻¦ رفع منشى ⊰• لرفع منشى
👨🏻‍💻¦ تنزيل منشى ⊰•للتنزيل والحذف

💯¦ تنظيف + العدد ⊱ لمسح الرسايل
💯¦ مسح + العدد ⊱ لمسح الرسايل
💯¦ حذف ⊱ بالرد لمسح المحدد
💯¦ الاعدادات ⊱ لعرض الاعدادات 
🔅¦ـ➖➖➖➖➖
🚨¦ راسلني للاستفسار ↭ ‹ $buy ›
",'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
if($text =="م7"  ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"👨‍✈️┊اهلا بك عزيزي 🙋🏽‍♂
🔘┊في اوامر الردود للمجموعة !
••┉┉┉┉┉┉┉┉┉┉┉┉┉•• 
🏮¦ تفعيل الردود  ⊱ لتفعيل الردود 
🏮¦ تعطيل الردود ⊱ لتعطيل الردود 
🏮¦ مسح الردود  ⊱ لمسح الردود
🏮¦ الردود  ⊱ لعرض الردود  
➺
📢¦ اضف رد ⊱ لاضافة الرد  
📢¦ حذف الرد  ⊱ لحذف رد معين 
🔅¦ـ➖➖➖➖➖
🚨¦ راسلني للاستفسار ↭ ‹ $buy ›
",'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
if($text =="م5"  ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
👨‍✈️┊اهلا بك عزيزي 🙋🏽‍♂
🔘┊في اوامر الحماية الاضافية !
🚨┊قفل » فتح » الامر ادناه ↯
••┉┉┉┉┉┉┉┉┉┉┉┉┉••

🖇¦ قفل «» فتح •⊱ الروابط بـ
⚜¦ الروابط بالتقييد⊰•
⚜¦ الروابط بالتحذير⊰•
⚜¦ الروابط بالطرد⊰•

ـــ ـــ ـــ ــــ ــــ
🔘¦ قفل «» فتح •⊱ المعرفات بـ
ـــ ـــ ـــ ــــ ــــ ـــ ـــ ـــ 
⚜¦ المعرفات بالتقييد⊰•
⚜¦ المعرفات بالتحذير⊰•
⚜¦ المعرفات بالطرد⊰•

ـــ ـــ ـــ ــــ ــــ
🔘¦ قفل «» فتح •⊱ التوجيه بـ 
ـــ ـــ ـــ ــــ ــــ ـــ ـــ ـــ 
⚜¦ التوجيه بالتقييد⊰•
⚜¦ التوجيه بالتحذير⊰•
⚜¦ التوجيه بالطرد⊰•
⚜¦ البوتات بالطرد⊰•
🔅¦ـ➖➖➖➖➖
🚨¦ راسلني للاستفسار ↭ ‹ $buy ›
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
if($text =="م6"  ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"👨‍✈️┊اهلا بك عزيزي 🙋🏽‍♂
🔘┊في اوامر التسلية الاضافية !
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
🗯¦ رفع ⊰• رئيس⊰• مقوت⊰•
🗯¦ رفع ⊰• ملك⊰• مـلكه ⊰•
🗯¦ رفع ⊰• وزير ⊰• وزيره ⊰•
🗯¦ رفع ⊰• امير ⊰• اميره ⊰•
🗯¦ رفع ⊰• موزه ⊰• مؤدبه ⊰•
🗯¦ رفع ⊰• شرطي ⊰• مساعد ⊰•
🗯¦ رفع ⊰• مجنون ⊰• مجنونه ⊰•
📮¦ـ➖➖➖➖➖

🗯¦ زخرفه ⊰• الاسم المراد زخرفته
🗯¦ للترجمة بالرد⊰•en/ar/fa/ru/tr
🗯¦ رابط الحذف ⊰• لحذف الحساب
🗯¦ بحث + اسم التطبيق ⊰• للبحث
🗯¦ سورس ⊰• لمعلومات السورس
📮¦ـ➖➖➖➖➖

🗯¦ الساعة ⊰• لعرض الوقت
🗯¦ كشف بالرد ⊰• لمعلوماته
🗯¦ كشف ⊰• معرف ⊰• ايدي
🗯¦ معلوماتي ⊰• لمعلوماتك
🗯¦ جهاتي ⊰• لاضافاتك
🗯¦ رتبتي ⊰• لموقعك
🔅¦ـ➖➖➖➖➖
🚨¦ راسلني للاستفسار ↭ ‹ $buy ›
 ",'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
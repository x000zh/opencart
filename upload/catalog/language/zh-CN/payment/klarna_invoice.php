<?php
// Text
$_['text_title']				= 'Klarna Invoice -14 天内支付';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Klarna Invoice 需要一些额外的信息才可以处理您的订单。';
$_['text_male']					= '男性';
$_['text_female']				= '女性';
$_['text_year']					= '年';
$_['text_month']				= '月';
$_['text_day']					= '天';
$_['text_comment']				= 'Klarna\'s Invoice ID: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= '性别';
$_['entry_pno']					= '私人号码';
$_['entry_dob']					= '出生日期';
$_['entry_phone_no']			= '电话号码';
$_['entry_street']				= '街道';
$_['entry_house_no']			= '门牌号码';
$_['entry_house_ext']			= '门牌分号';
$_['entry_company']				= '公司注册号码';

// Help
$_['help_pno']					= '请输入您的社会安全号码。';
$_['help_phone_no']				= '请输入您的电话号码。';
$_['help_street']				= '请注意使用 Klarna 付款时，发货只会送到注册地址。';
$_['help_house_no']				= '请输入您的门牌号码。';
$_['help_house_ext']			= '请提交您的门牌分号。如 A、 B、 C、  Red、  Blue 等等。';
$_['help_company']				= '请输入您的公司注册号码';

// Error
$_['error_deu_terms']			= '你必须同意 Klarna 的私隐政策 (Datenschutz)';
$_['error_address_match']		= '如果您想要使用 Klarna 发票，帐单地址和货运地址必须相配';
$_['error_network']				= '连接到 Klarna 时发生错误。请稍后再试。';
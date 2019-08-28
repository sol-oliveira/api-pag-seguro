<?php
namespace Hcode\PagSeguro;

class Config {

    const SANDBOX = true;
    
    const SANDBOX_EMAIL = "sol@peexell.com.br";
    const PRODUCTION_EMAIL = "sol@peexell.com.br";
    
    const SANDBOX_TOKEN = "CCB68D2B2CAF49ED9072E76E1E70E232";
    const PRODUCTION_TOKEN = "d7b1089a-25e5-4a86-90f4-5476fd4eeccb389ec3c4453b9bdbc56bafc08905fca384c2-0b66-4394-8e8e-9e8bdf1caf1a";
    const SANDBOX_SESSIONS = "https://ws.sandbox.pagseguro.uol.com.br/v2/sessions";
    const PRODUCTION_SESSIONS = "https://ws.pagseguro.uol.com.br/v2/sessions";
    const SANDBOX_URL_JS = "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";
    const PRODUCTION_URL_JS = "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";
    const SANDBOX_URL_TRANSACTION = "https://ws.sandbox.pagseguro.uol.com.br/v2/transactions";
    const PRODUCTION_URL_TRANSACTION = "https://ws.pagseguro.uol.com.br/v2/transactions";
    
    const SANDBOX_URL_NOTIFICATION = "https://ws.sandbox.pagseguro.uol.com.br/v3/transactions/notifications/";
	const PRODUCTION_URL_NOTIFICATION =	"https://ws.pagseguro.uol.com.br/v3/transactions/notifications/";
   
    const MAX_INSTALLMENT_NO_INTEREST = 10;
    const MAX_INSTALLMENT = 10;
   
    const NOTIFICATION_URL = "http://www.html5dev.com.br/payment/notification";
    
    public static function getAuthentication():array
	{
		if (Config::SANDBOX === true)
		{
			return array(
				"email"=>Config::SANDBOX_EMAIL,
				"token"=>Config::SANDBOX_TOKEN
			);
		} else {
			return array(
				"email"=>Config::PRODUCTION_EMAIL,
				"token"=>Config::PRODUCTION_TOKEN
			);
		}
	}
	
	public static function getUrlSessions():string
	{
		return (Config::SANDBOX === true) ? Config::SANDBOX_SESSIONS : Config::PRODUCTION_SESSIONS;
	}
	
	public function getUrlJS()
	{
		return (Config::SANDBOX === true) ? Config::SANDBOX_URL_JS : Config::PRODUCTION_URL_JS;
	}
/*	public static function getUrlTransaction()
	{
		return (Config::SANDBOX === true) ? Config::SANDBOX_URL_TRANSACTION :
		Config::PRODUCTION_URL_TRANSACTION;
	} 
	public static function getNotificationTransactionURL()
	{
		return (Config::SANDBOX === true) ? Config::SANDBOX_URL_NOTIFICATION :
		Config::PRODUCTION_URL_NOTIFICATION;
	} */
}
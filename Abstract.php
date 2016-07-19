<?php

// interface Provider{
// 	public function authorize();
// }

// function login(Provider $provider)
// {

// }

interface Provider{ 
	public function getAuthorizationUrl();
}

abstract class Provider{ 
	abstract protected function getAuthorizationUrl();
}

class FacebookProvider implements Provider{

	public function getAuthorizationUrl()
	{
		return 'https://www.facebook.com/';
	}

}
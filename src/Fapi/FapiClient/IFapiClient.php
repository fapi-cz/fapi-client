<?php
declare(strict_types = 1);

namespace Fapi\FapiClient;

interface IFapiClient
{

	/**
	 * @throws AuthorizationException
	 * @return void
	 */
	public function checkConnection();

	public function getCurrentUsername(): string;

}

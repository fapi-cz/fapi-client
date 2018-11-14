<?php
declare(strict_types = 1);

namespace Fapi\FapiClient;

interface IFapiClientFactory
{

	public function createFapiClient(string $username, string $password): IFapiClient;

}

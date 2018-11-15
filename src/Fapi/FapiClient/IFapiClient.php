<?php
declare(strict_types = 1);

namespace Fapi\FapiClient;

interface IFapiClient
{

	public function getCurrentUsername(): string;

}

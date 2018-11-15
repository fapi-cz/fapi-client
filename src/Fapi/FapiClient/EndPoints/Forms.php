<?php
declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints;

use Fapi\FapiClient\EndPoints\Traits\Create;
use Fapi\FapiClient\EndPoints\Traits\Delete;
use Fapi\FapiClient\EndPoints\Traits\Find;
use Fapi\FapiClient\EndPoints\Traits\FindAll;
use Fapi\FapiClient\EndPoints\Traits\Update;
use Fapi\FapiClient\Rest\FapiRestClient;

final class Forms
{

	use FindAll;
	use Find;
	use Create;
	use Update;
	use Delete;

	public function __construct(FapiRestClient $client)
	{
		$this->client = $client;
		$this->path = '/forms';
		$this->resources = 'forms';
	}

}

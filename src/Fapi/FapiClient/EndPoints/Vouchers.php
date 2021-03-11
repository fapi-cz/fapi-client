<?php
declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints;

use Fapi\FapiClient\EndPoints\Traits\Find;
use Fapi\FapiClient\Rest\FapiRestClient;

final class Vouchers
{

	use Find;

	/** @var FapiRestClient */
	private $client;

	/** @var string */
	private $path;

	public function __construct(FapiRestClient $client)
	{
		$this->client = $client;
		$this->path = '/vouchers';
	}

	/**
	 * @param mixed[] $data
	 * @return mixed[]
	 */
	public function applyVoucher(string $code, array $data = []): array
	{
		return $this->client->updateResource($this->path, $code . '/apply', $data);
	}

}

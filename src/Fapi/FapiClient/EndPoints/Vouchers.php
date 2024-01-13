<?php declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints;

use Fapi\FapiClient\EndPoints\Traits\Find;
use Fapi\FapiClient\Rest\FapiRestClient;

final class Vouchers
{

	use Find;

	private string $path;

	public function __construct(private FapiRestClient $client)
	{
		$this->path = '/vouchers';
	}

	/**
	 * @param array<mixed> $data
	 * @return array<mixed>
	 */
	public function applyVoucher(string $code, array $data = []): array
	{
		return $this->client->updateResource($this->path, $code . '/apply', $data);
	}

}

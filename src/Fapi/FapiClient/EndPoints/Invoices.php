<?php
declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints;

use Fapi\FapiClient\EndPoints\Traits\Create;
use Fapi\FapiClient\EndPoints\Traits\Delete;
use Fapi\FapiClient\EndPoints\Traits\Find;
use Fapi\FapiClient\EndPoints\Traits\FindAll;
use Fapi\FapiClient\EndPoints\Traits\Update;
use Fapi\FapiClient\Rest\FapiRestClient;

final class Invoices
{

	use FindAll;
	use Find;
	use Create;
	use Update;
	use Delete;

	public function __construct(FapiRestClient $client)
	{
		$this->client = $client;
		$this->path = '/invoices';
		$this->resources = 'invoices';
	}

	public function getPdf(int $id)
	{
		return $this->client->getInvoicePdf($id);
	}

	/**
	 * @param mixed[] $parameters
	 * @return int
	 */
	public function getCount(array $parameters = []): int
	{
		$response = $this->client->getSingularResource('/invoices/count', $parameters);

		return (int) $response['count'];
	}

	/**
	 * @param mixed[] $parameters
	 * @return string|null
	 */
	public function generateQrCode(array $parameters)
	{
		$data = $this->client->generateQrCode($parameters);

		return $data['qrCode'] ?? null;
	}

	/**
	 * @param mixed[] $parameters
	 */
	public function sendEmailWithInvoice(array $parameters)
	{
		$this->client->sendEmailWithInvoice($parameters);
	}

}

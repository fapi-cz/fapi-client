<?php
declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints;

use Fapi\FapiClient\EndPoints\Traits\Create;
use Fapi\FapiClient\EndPoints\Traits\Delete;
use Fapi\FapiClient\EndPoints\Traits\Find;
use Fapi\FapiClient\EndPoints\Traits\FindAll;
use Fapi\FapiClient\EndPoints\Traits\Update;
use Fapi\FapiClient\Rest\FapiRestClient;
use Fapi\FapiClient\ValidationException;

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
		if (!isset($parameters['invoice'])) {
			throw new ValidationException('Missing key "invoice" with invoice id.');
		}

		if (!\is_int($parameters['invoice'])) {
			throw new ValidationException('Parameter "invoice" must be integer.');
		}

		$id = $parameters['invoice'];
		$data = $this->client->generateQrCode($id);

		return $data['qrCode'] ?? null;
	}

	/**
	 * @param mixed[] $parameters
	 */
	public function sendEmailWithInvoice(array $parameters)
	{
		$this->client->sendEmailWithInvoice($parameters);
	}

	/**
	 * @return mixed[]
	 */
	public function getInvoicesSequence(int $invoiceId): array
	{
		return $this->client->getResources($this->path . '/get-invoices-sequence/' . $invoiceId, $this->resources);
	}

}

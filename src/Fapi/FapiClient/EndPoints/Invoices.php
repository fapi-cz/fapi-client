<?php declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints;

use Fapi\FapiClient\EndPoints\Traits\Create;
use Fapi\FapiClient\EndPoints\Traits\Delete;
use Fapi\FapiClient\EndPoints\Traits\Find;
use Fapi\FapiClient\EndPoints\Traits\FindAll;
use Fapi\FapiClient\EndPoints\Traits\Update;
use Fapi\FapiClient\Rest\FapiRestClient;
use Fapi\FapiClient\ValidationException;
use function is_int;

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

	/**
	 * @param array<mixed> $parameters
	 */
	public function getPdf(int $id, array $parameters = []): ?string
	{
		return $this->client->getInvoicePdf($id, $parameters);
	}

	/**
	 * @param array<mixed> $parameters
	 */
	public function getCount(array $parameters = []): int
	{
		$response = $this->client->getSingularResource('/invoices/count', $parameters);

		return (int) $response['count'];
	}

	/**
	 * @param array<mixed> $parameters
	 */
	public function generateQrCode(array $parameters): ?string
	{
		if (!isset($parameters['invoice'])) {
			throw new ValidationException('Missing key "invoice" with invoice id.');
		}

		if (!is_int($parameters['invoice'])) {
			throw new ValidationException('Parameter "invoice" must be integer.');
		}

		$id = $parameters['invoice'];
		$data = $this->client->generateQrCode($id);

		return $data['qrCode'] ?? null;
	}

	/**
	 * @param array<mixed> $parameters
	 */
	public function sendEmailWithInvoice(array $parameters): void
	{
		$this->client->sendEmailWithInvoice($parameters);
	}

	/**
	 * @return array<mixed>
	 */
	public function getInvoicesSequence(int $invoiceId): array
	{
		return $this->client->getResources($this->path . '/get-invoices-sequence/' . $invoiceId, $this->resources);
	}

}

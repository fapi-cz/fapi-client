<?php
declare(strict_types = 1);

namespace Fapi\FapiClient\EndPoints;

use Fapi\FapiClient\Rest\FapiRestClient;

final class Invoices
{

	/** @var FapiRestClient */
	private $client;

	/** @var string */
	private $path;

	public function __construct(FapiRestClient $client)
	{
		$this->client = $client;
		$this->path = '/invoices';
	}

	/**
	 * @param mixed[] $parameters
	 * @return mixed[]
	 */
	public function findAll(array $parameters = []): array
	{
		return $this->client->getResources($this->path, 'invoices', $parameters);
	}

	/**
	 * @return mixed[]|null
	 */
	public function find(int $id)
	{
		return $this->client->getResource($this->path, $id);
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
	 * @param mixed[] $data
	 * @return mixed[]
	 */
	public function create(array $data): array
	{
		return $this->client->createResource($this->path, $data);
	}

	/**
	 * @param mixed[] $data
	 * @return mixed[]
	 */
	public function update(int $id, array $data): array
	{
		return $this->client->updateResource($this->path, $id, $data);
	}

	public function delete(int $id)
	{
		$this->client->deleteResource($this->path, $id);
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

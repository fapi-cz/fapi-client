<?php
declare(strict_types = 1);

namespace Fapi\FapiClient;

use Fapi\FapiClient\EndPoints\ApiTokens;
use Fapi\FapiClient\EndPoints\Clients;
use Fapi\FapiClient\EndPoints\Countries;
use Fapi\FapiClient\EndPoints\DiscountCodes;
use Fapi\FapiClient\EndPoints\Forms;
use Fapi\FapiClient\EndPoints\Invoices;
use Fapi\FapiClient\EndPoints\Items;
use Fapi\FapiClient\EndPoints\ItemTemplates;
use Fapi\FapiClient\EndPoints\MessageTemplates;
use Fapi\FapiClient\EndPoints\Orders;
use Fapi\FapiClient\EndPoints\Settings;
use Fapi\FapiClient\EndPoints\User;
use Fapi\FapiClient\Rest\FapiRestClient;
use Fapi\HttpClient\IHttpClient;

class FapiClient implements IFapiClient
{

	/** @var FapiRestClient */
	private $restClient;

	/** @var Invoices */
	public $invoices;

	/** @var ApiTokens */
	public $apiTokens;

	/** @var Clients */
	public $clients;

	/** @var Countries */
	public $countries;

	/** @var Forms */
	public $forms;

	/** @var Items */
	public $items;

	/** @var ItemTemplates */
	public $itemTemplates;

	/** @var Orders */
	public $orders;

	/** @var Settings */
	public $settings;

	/** @var User */
	public $user;

	/** @var MessageTemplates */
	public $messageTemplates;

	/** @var DiscountCodes */
	public $discountCodes;

	public function __construct(string $username, string $password, string $apiUrl, IHttpClient $httpClient)
	{
		$this->restClient = new FapiRestClient($username, $password, $apiUrl, $httpClient);
		$this->invoices = new Invoices($this->restClient);
		$this->apiTokens = new ApiTokens($this->restClient);
		$this->clients = new Clients($this->restClient);
		$this->countries = new Countries($this->restClient);
		$this->forms = new Forms($this->restClient);
		$this->items = new Items($this->restClient);
		$this->itemTemplates = new ItemTemplates($this->restClient);
		$this->orders = new Orders($this->restClient);
		$this->settings = new Settings($this->restClient);
		$this->user = new User($this->restClient);
		$this->messageTemplates = new MessageTemplates($this->restClient);
		$this->discountCodes = new DiscountCodes($this->restClient);
	}

	/**
	 * @inheritdoc
	 */
	public function getCountries(array $parameters = [])
	{
		return $this->countries->getCountries($parameters);
	}

	/**
	 * @inheritdoc
	 */
	public function getForms(array $parameters = [])
	{
		return $this->forms->findAll($parameters);
	}

	/**
	 * @inheritdoc
	 */
	public function getForm(int $id)
	{
		return $this->forms->find($id);
	}

	/**
	 * @inheritdoc
	 */
	public function createForm(array $data)
	{
		return $this->forms->create($data);
	}

	/**
	 * @inheritdoc
	 */
	public function updateForm(int $id, array $data)
	{
		return $this->forms->update($id, $data);
	}

	/**
	 * @inheritdoc
	 */
	public function createItem(array $data)
	{
		return $this->items->create($data);
	}

	/**
	 * @inheritdoc
	 */
	public function updateItem(int $id, array $data)
	{
		return $this->items->update($id, $data);
	}

	/**
	 * @inheritdoc
	 */
	public function deleteItem(int $id)
	{
		$this->items->delete($id);
	}

	/**
	 * @inheritdoc
	 */
	public function getItemTemplates(array $parameters = [])
	{
		return $this->itemTemplates->findAll($parameters);
	}

	/**
	 * @inheritdoc
	 */
	public function getItemTemplate(int $id)
	{
		return $this->itemTemplates->find($id);
	}

	/**
	 * @inheritdoc
	 */
	public function createItemTemplate(array $data)
	{
		return $this->itemTemplates->create($data);
	}

	/**
	 * @inheritdoc
	 */
	public function updateItemTemplate(int $id, array $data)
	{
		return $this->itemTemplates->update($id, $data);
	}

	/**
	 * @inheritdoc
	 */
	public function deleteItemTemplate(int $id)
	{
		$this->itemTemplates->delete($id);
	}

	/**
	 * @inheritdoc
	 */
	public function getOrder(int $id)
	{
		return $this->orders->find($id);
	}

	/**
	 * @inheritdoc
	 */
	public function createOrder(array $data)
	{
		return $this->orders->create($data);
	}

	/**
	 * @inheritdoc
	 */
	public function updateOrder(int $id, array $data)
	{
		return $this->orders->update($id, $data);
	}

	/**
	 * @inheritdoc
	 */
	public function getSettings(array $parameters = [])
	{
		return $this->settings->findAll($parameters);
	}

	public function getSetting(string $key)
	{
		return $this->settings->find($key);
	}

	/**
	 * @inheritdoc
	 */
	public function createSetting(array $data)
	{
		return $this->settings->create($data);
	}

	/**
	 * @inheritdoc
	 */
	public function updateSetting(string $key, array $data)
	{
		return $this->settings->update($key, $data);
	}

	/**
	 * @inheritdoc
	 */
	public function deleteSetting(string $key)
	{
		$this->settings->delete($key);
	}

	/**
	 * @inheritdoc
	 */
	public function getTotalStatistics(array $parameters)
	{
		return $this->restClient->getTotalStatistics($parameters);
	}

	/**
	 * @inheritdoc
	 */
	public function getCurrentUser()
	{
		return $this->user->getCurrentUser();
	}

	public function getCurrentUsername(): string
	{
		return $this->restClient->getCurrentUsername();
	}

	/**
	 * @inheritdoc
	 */
	public function createMessageTemplate(array $data)
	{
		return $this->messageTemplates->create($data);
	}

	/**
	 * @inheritdoc
	 */
	public function getMessageTemplate(int $id)
	{
		return $this->messageTemplates->find($id);
	}

	/**
	 * @inheritdoc
	 */
	public function updateMessageTemplate(int $id, array $data)
	{
		return $this->messageTemplates->update($id, $data);
	}

	/**
	 * @inheritdoc
	 */
	public function deleteMessageTemplate(int $id)
	{
		$this->messageTemplates->delete($id);
	}

	/**
	 * @inheritdoc
	 */
	public function createDiscountCode(array $data)
	{
		return $this->discountCodes->create($data);
	}

	/**
	 * @inheritdoc
	 */
	public function getDiscountCode(int $id)
	{
		return $this->discountCodes->find($id);
	}

	/**
	 * @inheritdoc
	 */
	public function getDiscountCodes(array $parameters = [])
	{
		return $this->discountCodes->findAll($parameters);
	}

	/**
	 * @inheritdoc
	 */
	public function updateDiscountCode(int $id, array $data)
	{
		return $this->discountCodes->update($id, $data);
	}

	/**
	 * @inheritdoc
	 */
	public function deleteDiscountCode(int $id)
	{
		$this->discountCodes->delete($id);
	}

}

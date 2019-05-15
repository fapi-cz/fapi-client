<?php
declare(strict_types = 1);

namespace Fapi\FapiClient;

use Fapi\FapiClient\EndPoints\ApiTokens;
use Fapi\FapiClient\EndPoints\Clients;
use Fapi\FapiClient\EndPoints\Countries;
use Fapi\FapiClient\EndPoints\DiscountCodes;
use Fapi\FapiClient\EndPoints\ExchangeRates;
use Fapi\FapiClient\EndPoints\Forms;
use Fapi\FapiClient\EndPoints\Invoices;
use Fapi\FapiClient\EndPoints\Items;
use Fapi\FapiClient\EndPoints\ItemTemplates;
use Fapi\FapiClient\EndPoints\MessageTemplates;
use Fapi\FapiClient\EndPoints\Orders;
use Fapi\FapiClient\EndPoints\PeriodInvoices;
use Fapi\FapiClient\EndPoints\Settings;
use Fapi\FapiClient\EndPoints\Statistics;
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

	/** @var Statistics */
	public $statistics;

	/**
	 * @var PeriodInvoices
	 * @internal
	 */
	public $periodicInvoices;

	/** @var ExchangeRates */
	public $exchangeRates;

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
		$this->statistics = new Statistics($this->restClient);
		$this->periodicInvoices = new PeriodInvoices($this->restClient);
		$this->exchangeRates = new ExchangeRates($this->restClient);
	}

	public function checkConnection()
	{
		$this->restClient->checkConnection();
	}

	public function getCurrentUsername(): string
	{
		return $this->restClient->getCurrentUsername();
	}

}

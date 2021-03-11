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
use Fapi\FapiClient\EndPoints\PeriodicInvoices;
use Fapi\FapiClient\EndPoints\Settings;
use Fapi\FapiClient\EndPoints\Statistics;
use Fapi\FapiClient\EndPoints\User;
use Fapi\FapiClient\EndPoints\UserSettings;
use Fapi\FapiClient\EndPoints\Vouchers;
use Fapi\FapiClient\Rest\FapiRestClient;
use Fapi\HttpClient\IHttpClient;

class FapiClient implements IFapiClient
{

	/** @var FapiRestClient */
	private $restClient;

	/**
	 * @var Invoices
	 * @deprecated use getInvoices() instead
	 */
	public $invoices;

	/**
	 * @var ApiTokens
	 * @deprecated use getApiTokens() instead
	 */
	public $apiTokens;

	/**
	 * @var Clients
	 * @deprecated use getClients() instead
	 */
	public $clients;

	/**
	 * @var Countries
	 * @deprecated use getCountries() instead
	 */
	public $countries;

	/**
	 * @var Forms
	 * @deprecated use getForms() instead
	 */
	public $forms;

	/**
	 * @var Items
	 * @deprecated use getItems() instead
	 */
	public $items;

	/**
	 * @var ItemTemplates
	 * @deprecated use getItemTemplates() instead
	 */
	public $itemTemplates;

	/**
	 * @var Orders
	 * @deprecated use getOrders() instead
	 */
	public $orders;

	/**
	 * @var Settings
	 * @deprecated use getSettings() instead
	 */
	public $settings;

	/**
	 * @var User
	 * @deprecated use getUser() instead
	 */
	public $user;

	/**
	 * @var MessageTemplates
	 * @deprecated use getMessageTemplates() instead
	 */
	public $messageTemplates;

	/**
	 * @var DiscountCodes
	 * @deprecated use getDiscountCodes() instead
	 */
	public $discountCodes;

	/**
	 * @var Statistics
	 * @deprecated use getStatistics() instead
	 */
	public $statistics;

	/**
	 * @var PeriodicInvoices
	 * @deprecated use getPeriodicInvoices() instead
	 */
	public $periodicInvoices;

	/**
	 * @var ExchangeRates
	 * @deprecated use getExchangeRates() instead
	 */
	public $exchangeRates;

	/**
	 * @var UserSettings
	 * @deprecated use getUserSetting() instead
	 */
	public $userSetting;

	/** @var Vouchers  */
	private $vouchers;

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
		$this->periodicInvoices = new PeriodicInvoices($this->restClient);
		$this->exchangeRates = new ExchangeRates($this->restClient);
		$this->userSetting = new UserSettings($this->restClient);
		$this->vouchers = new Vouchers($this->restClient);
	}

	/**
	 * @inheritdoc
	 */
	public function checkConnection()
	{
		$this->restClient->checkConnection();
	}

	public function getCurrentUsername(): string
	{
		return $this->restClient->getCurrentUsername();
	}

	public function getInvoices(): Invoices
	{
		return $this->invoices;
	}

	public function getApiTokens(): ApiTokens
	{
		return $this->apiTokens;
	}

	public function getClients(): Clients
	{
		return $this->clients;
	}

	public function getCountries(): Countries
	{
		return $this->countries;
	}

	public function getForms(): Forms
	{
		return $this->forms;
	}

	public function getItems(): Items
	{
		return $this->items;
	}

	public function getItemTemplates(): ItemTemplates
	{
		return $this->itemTemplates;
	}

	public function getOrders(): Orders
	{
		return $this->orders;
	}

	public function getSettings(): Settings
	{
		return $this->settings;
	}

	public function getUser(): User
	{
		return $this->user;
	}

	public function getMessageTemplates(): MessageTemplates
	{
		return $this->messageTemplates;
	}

	public function getDiscountCodes(): DiscountCodes
	{
		return $this->discountCodes;
	}

	public function getStatistics(): Statistics
	{
		return $this->statistics;
	}

	public function getPeriodicInvoices(): PeriodicInvoices
	{
		return $this->periodicInvoices;
	}

	public function getExchangeRates(): ExchangeRates
	{
		return $this->exchangeRates;
	}

	public function getUserSetting(): UserSettings
	{
		return $this->userSetting;
	}

	public function getVouchers(): Vouchers
	{
		return $this->vouchers;
	}

}

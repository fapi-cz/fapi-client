<?php declare(strict_types = 1);

namespace Fapi\FapiClient;

use Fapi\FapiClient\EndPoints\ApiTokens;
use Fapi\FapiClient\EndPoints\ClientChanges;
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

	private FapiRestClient $restClient;

	/** @deprecated use getInvoices() instead */
	public Invoices $invoices;

	/** @deprecated use getApiTokens() instead */
	public ApiTokens $apiTokens;

	/** @deprecated use getClients() instead */
	public Clients $clients;

	/** @deprecated use getCountries() instead */
	public Countries $countries;

	/** @deprecated use getForms() instead */
	public Forms $forms;

	/** @deprecated use getItems() instead */
	public Items $items;

	/** @deprecated use getItemTemplates() instead */
	public ItemTemplates $itemTemplates;

	/** @deprecated use getOrders() instead */
	public Orders $orders;

	/** @deprecated use getSettings() instead */
	public Settings $settings;

	/** @deprecated use getUser() instead */
	public User $user;

	/** @deprecated use getMessageTemplates() instead */
	public MessageTemplates $messageTemplates;

	/** @deprecated use getDiscountCodes() instead */
	public DiscountCodes $discountCodes;

	/** @deprecated use getStatistics() instead */
	public Statistics $statistics;

	/** @deprecated use getPeriodicInvoices() instead */
	public PeriodicInvoices $periodicInvoices;

	/** @deprecated use getExchangeRates() instead */
	public ExchangeRates $exchangeRates;

	/** @deprecated use getUserSetting() instead */
	public UserSettings $userSetting;

	private Vouchers $vouchers;

	private ClientChanges $clientChanges;

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
		$this->clientChanges = new ClientChanges($this->restClient);
	}

	public function checkConnection(): void
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

	public function getClientChanges(): ClientChanges
	{
		return $this->clientChanges;
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

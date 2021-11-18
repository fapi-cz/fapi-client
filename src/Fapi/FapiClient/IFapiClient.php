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

interface IFapiClient
{

	/**
	 * @throws AuthorizationException
	 */
	public function checkConnection(): void;

	public function getCurrentUsername(): string;

	public function getCountries(): Countries;

	public function getPeriodicInvoices(): PeriodicInvoices;

	public function getItems(): Items;

	public function getInvoices(): Invoices;

	public function getSettings(): Settings;

	public function getOrders(): Orders;

	public function getUserSetting(): UserSettings;

	public function getUser(): User;

	public function getForms(): Forms;

	public function getExchangeRates(): ExchangeRates;

	public function getClients(): Clients;

	public function getMessageTemplates(): MessageTemplates;

	public function getStatistics(): Statistics;

	public function getApiTokens(): ApiTokens;

	public function getItemTemplates(): ItemTemplates;

	public function getDiscountCodes(): DiscountCodes;

	public function getVouchers(): Vouchers;

	public function getClientChanges(): ClientChanges;

}

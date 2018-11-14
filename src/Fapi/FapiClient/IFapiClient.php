<?php
declare(strict_types = 1);

namespace Fapi\FapiClient;

interface IFapiClient
{

	/**
	 * @param mixed[] $parameters
	 * @return string[]
	 */
	public function getCountries(array $parameters = []);

	/**
	 * @param mixed[] $parameters
	 * @return mixed[][]
	 */
	public function getForms(array $parameters = []);

	/**
	 * @param int $id
	 * @return mixed[]
	 */
	public function getForm(int $id);

	/**
	 * @param mixed[] $data
	 * @return mixed[]
	 */
	public function createForm(array $data);

	/**
	 * @param int $id
	 * @param mixed[] $data
	 * @return mixed[]
	 */
	public function updateForm(int $id, array $data);

	/**
	 * @param mixed[] $data
	 * @return mixed[]
	 */
	public function createItem(array $data);

	/**
	 * @param int $id
	 * @param mixed[] $data
	 * @return mixed[]
	 */
	public function updateItem(int $id, array $data);

	/**
	 * @param int $id
	 * @return void
	 */
	public function deleteItem(int $id);

	/**
	 * @param mixed[] $parameters
	 * @return mixed[][]
	 */
	public function getItemTemplates(array $parameters = []);

	/**
	 * @param int $id
	 * @return mixed[]
	 */
	public function getItemTemplate(int $id);

	/**
	 * @param mixed[] $data
	 * @return mixed[]
	 */
	public function createItemTemplate(array $data);

	/**
	 * @param int $id
	 * @param mixed[] $data
	 * @return mixed[]
	 */
	public function updateItemTemplate(int $id, array $data);

	/**
	 * @param int $id
	 * @return void
	 */
	public function deleteItemTemplate(int $id);

	/**
	 * @param int $id
	 * @return mixed[]
	 */
	public function getOrder(int $id);

	/**
	 * @param mixed[] $data
	 * @return mixed[]
	 */
	public function createOrder(array $data);

	/**
	 * @param int $id
	 * @param mixed[] $data
	 * @return mixed[]
	 */
	public function updateOrder(int $id, array $data);

	/**
	 * @param mixed[] $parameters
	 * @return mixed[]
	 */
	public function getSettings(array $parameters = []);

	/**
	 * @param string $key
	 * @return mixed[]
	 */
	public function getSetting(string $key);

	/**
	 * @param mixed[] $data
	 * @return mixed[]
	 */
	public function createSetting(array $data);

	/**
	 * @param string $key
	 * @param mixed[] $data
	 * @return mixed[]
	 */
	public function updateSetting(string $key, array $data);

	/**
	 * @param string $key
	 * @return void
	 */
	public function deleteSetting(string $key);

	/**
	 * @param mixed[] $parameters
	 * @return mixed[]
	 */
	public function getTotalStatistics(array $parameters);

	/**
	 * @return mixed[]
	 */
	public function getCurrentUser();

	public function getCurrentUsername(): string;

	/**
	 * @param mixed[] $data
	 * @return mixed[]
	 */
	public function createMessageTemplate(array $data);

	/**
	 * @param int $id
	 * @return mixed[]
	 */
	public function getMessageTemplate(int $id);

	/**
	 * @param int $id
	 * @param mixed[] $data
	 * @return mixed[]
	 */
	public function updateMessageTemplate(int $id, array $data);

	public function deleteMessageTemplate(int $id);

	/**
	 * @param mixed[] $parameters
	 * @return mixed[]
	 */
	public function createDiscountCode(array $parameters);

	/**
	 * @param int $id
	 * @return mixed[]
	 */
	public function getDiscountCode(int $id);

	/**
	 * @param mixed[] $parameters
	 * @return mixed[][]
	 */
	public function getDiscountCodes(array $parameters = []);

	/**
	 * @param int $id
	 * @param mixed[] $data
	 * @return mixed[]
	 */
	public function updateDiscountCode(int $id, array $data);

	public function deleteDiscountCode(int $id);

}

<?php
declare(strict_types = 1);

namespace Fapi\FapiClientTests;

use Fapi\FapiClient\FapiClient;
use Fapi\HttpClient\CapturingHttpClient;
use Fapi\HttpClient\GuzzleHttpClient;
use Tester\Assert;
use Tester\Environment;
use Tester\TestCase;

require __DIR__ . '/../../bootstrap.php';

class FapiClientMessageTemplatesTest extends TestCase
{

	/** @var CapturingHttpClient */
	private $httpClient;

	/** @var FapiClient */
	private $fapiClient;

	protected function setUp()
	{
		Environment::lock('FapiClient', \LOCKS_DIR);

		$this->httpClient = new CapturingHttpClient(
			new GuzzleHttpClient(),
			__DIR__ . '/MockHttpClients/FapiClientMessageTemplatesMockHttpClient.php',
			'Fapi\FapiClientTests\MockHttpClients\FapiClientMessageTemplatesMockHttpClient'
		);

		$this->fapiClient = new FapiClient(
			'tester@fapi.cz',
			'XZRbVLPigTQpi4Kct4JAq8FZ9',
			'http://api.fapi.log/',
			$this->httpClient
		);
	}

	protected function tearDown()
	{
		$this->httpClient->close();
	}

	public function testCreateGetUpdateAndDeleteDiscountCode()
	{
		$createData = [
			'name' => 'test',
			'subject' => 'MySubject',
			'body' => '<p>Mu Body</p>',
			'event' => 'custom',
			'type' => 'invoice',
			'automatic_charge_event' => null,
			'message_template_set' => null,
		];
		$updateData = [
			'name' => 'test',
			'subject' => 'Opraveny subject',
			'body' => '<p>My Body</p>',
			'event' => 'issued_invoice',
			'type' => 'invoice',
			'automatic_charge_event' => null,
			'message_template_set' => null,
		];
		//create
		$messageTemplate = $this->fapiClient->messageTemplates->create($createData);
		Assert::type('array', $messageTemplate);
		Assert::type('int', $messageTemplate['id']);
		Assert::equal($createData['body'], $messageTemplate['body']);
		Assert::equal($createData['name'], $messageTemplate['name']);
		Assert::equal(null, $messageTemplate['type']);
		Assert::equal($createData['event'], $messageTemplate['event']);

		//update
		$messageTemplate = $this->fapiClient->messageTemplates->update($messageTemplate['id'], $updateData);
		Assert::type('int', $messageTemplate['id']);
		Assert::equal($updateData['body'], $messageTemplate['body']);
		Assert::equal($updateData['name'], $messageTemplate['name']);
		Assert::equal($updateData['type'], $messageTemplate['type']);
		Assert::equal($updateData['event'], $messageTemplate['event']);

		//show
		$messageTemplate = $this->fapiClient->messageTemplates->find($messageTemplate['id']);
		Assert::type('int', $messageTemplate['id']);
		Assert::type('array', $messageTemplate);

		//delete
		$this->fapiClient->messageTemplates->delete($messageTemplate['id']);
	}

}

(new FapiClientMessageTemplatesTest())->run();

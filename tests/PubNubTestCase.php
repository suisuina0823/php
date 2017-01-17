<?php

use PHPUnit\Framework\TestCase;
use PubNub\PNConfiguration;
use PubNub\PubNub;

echo 'included';

abstract class PubNubTestCase extends TestCase
{
    const SUBSCRIBE_KEY = 'sub-c-8f18abdc-a7d7-11e5-8231-02ee2ddab7fe';
    const PUBLISH_KEY = 'pub-c-139c0366-9b6a-4a3f-ac03-4f8d31c86df2';

    /** @var Pubnub pubnub */
    protected $pubnub;

    public function setUp()
    {
        parent::setUp();

        $config = new PNConfiguration();
        $config->setSubscribeKey(static::SUBSCRIBE_KEY);
        $config->setPublishKey(static::PUBLISH_KEY);
        $this->pubnub = new PubNub($config);
    }
}
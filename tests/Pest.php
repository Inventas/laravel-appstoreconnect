<?php

use Inventas\AppStoreConnectKit\Tests\TestCase;
use Saloon\Http\Faking\MockClient;

uses(TestCase::class)->in(__DIR__);

beforeEach(fn () => MockClient::destroyGlobal());
afterEach(fn () => MockClient::destroyGlobal());

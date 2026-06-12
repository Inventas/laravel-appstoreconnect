<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

/**
 * SubscriptionOfferMode
 */
enum SubscriptionOfferMode: string
{
    case PAY_AS_YOU_GO = 'PAY_AS_YOU_GO';
    case PAY_UP_FRONT = 'PAY_UP_FRONT';
    case FREE_TRIAL = 'FREE_TRIAL';
}

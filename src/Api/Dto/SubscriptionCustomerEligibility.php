<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

/**
 * SubscriptionCustomerEligibility
 */
enum SubscriptionCustomerEligibility: string
{
    case NEW = 'NEW';
    case EXISTING = 'EXISTING';
    case EXPIRED = 'EXPIRED';
}

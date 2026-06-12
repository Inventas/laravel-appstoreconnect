<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

/**
 * SubscriptionGracePeriodDuration
 */
enum SubscriptionGracePeriodDuration: string
{
    case THREE_DAYS = 'THREE_DAYS';
    case SIXTEEN_DAYS = 'SIXTEEN_DAYS';
    case TWENTY_EIGHT_DAYS = 'TWENTY_EIGHT_DAYS';
}

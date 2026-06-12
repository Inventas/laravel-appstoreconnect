<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

/**
 * SubscriptionOfferDuration
 */
enum SubscriptionOfferDuration: string
{
    case THREE_DAYS = 'THREE_DAYS';
    case ONE_WEEK = 'ONE_WEEK';
    case TWO_WEEKS = 'TWO_WEEKS';
    case ONE_MONTH = 'ONE_MONTH';
    case TWO_MONTHS = 'TWO_MONTHS';
    case THREE_MONTHS = 'THREE_MONTHS';
    case SIX_MONTHS = 'SIX_MONTHS';
    case ONE_YEAR = 'ONE_YEAR';
}

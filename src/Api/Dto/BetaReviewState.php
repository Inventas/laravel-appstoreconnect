<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

/**
 * BetaReviewState
 */
enum BetaReviewState: string
{
    case WAITING_FOR_REVIEW = 'WAITING_FOR_REVIEW';
    case IN_REVIEW = 'IN_REVIEW';
    case REJECTED = 'REJECTED';
    case APPROVED = 'APPROVED';
}

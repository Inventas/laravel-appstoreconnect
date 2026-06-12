<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

/**
 * BackgroundAssetVersionExternalBetaReleaseState
 */
enum BackgroundAssetVersionExternalBetaReleaseState: string
{
    case READY_FOR_BETA_SUBMISSION = 'READY_FOR_BETA_SUBMISSION';
    case WAITING_FOR_REVIEW = 'WAITING_FOR_REVIEW';
    case IN_REVIEW = 'IN_REVIEW';
    case REJECTED = 'REJECTED';
    case PROCESSING_FOR_TESTING = 'PROCESSING_FOR_TESTING';
    case READY_FOR_TESTING = 'READY_FOR_TESTING';
    case SUPERSEDED = 'SUPERSEDED';
}

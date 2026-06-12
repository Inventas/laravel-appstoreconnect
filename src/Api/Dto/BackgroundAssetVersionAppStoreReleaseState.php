<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

/**
 * BackgroundAssetVersionAppStoreReleaseState
 */
enum BackgroundAssetVersionAppStoreReleaseState: string
{
    case PREPARE_FOR_SUBMISSION = 'PREPARE_FOR_SUBMISSION';
    case READY_FOR_REVIEW = 'READY_FOR_REVIEW';
    case WAITING_FOR_REVIEW = 'WAITING_FOR_REVIEW';
    case IN_REVIEW = 'IN_REVIEW';
    case ACCEPTED = 'ACCEPTED';
    case REJECTED = 'REJECTED';
    case PROCESSING_FOR_DISTRIBUTION = 'PROCESSING_FOR_DISTRIBUTION';
    case READY_FOR_DISTRIBUTION = 'READY_FOR_DISTRIBUTION';
    case SUPERSEDED = 'SUPERSEDED';
}

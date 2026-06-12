<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

/**
 * BackgroundAssetVersionState
 */
enum BackgroundAssetVersionState: string
{
    case AWAITING_UPLOAD = 'AWAITING_UPLOAD';
    case PROCESSING = 'PROCESSING';
    case FAILED = 'FAILED';
    case COMPLETE = 'COMPLETE';
}

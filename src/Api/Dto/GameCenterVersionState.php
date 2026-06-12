<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

/**
 * GameCenterVersionState
 */
enum GameCenterVersionState: string
{
    case PREPARE_FOR_SUBMISSION = 'PREPARE_FOR_SUBMISSION';
    case READY_FOR_REVIEW = 'READY_FOR_REVIEW';
    case WAITING_FOR_REVIEW = 'WAITING_FOR_REVIEW';
    case IN_REVIEW = 'IN_REVIEW';
    case DEVELOPER_REJECTED = 'DEVELOPER_REJECTED';
    case REJECTED = 'REJECTED';
    case ACCEPTED = 'ACCEPTED';
    case PENDING_RELEASE = 'PENDING_RELEASE';
    case LIVE = 'LIVE';
    case REPLACED_WITH_NEW_VERSION = 'REPLACED_WITH_NEW_VERSION';
}

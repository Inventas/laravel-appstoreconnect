<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

/**
 * IconAssetType
 */
enum IconAssetType: string
{
    case APP_STORE = 'APP_STORE';
    case MESSAGES_APP_STORE = 'MESSAGES_APP_STORE';
    case WATCH_APP_STORE = 'WATCH_APP_STORE';
    case TV_OS_HOME_SCREEN = 'TV_OS_HOME_SCREEN';
    case TV_OS_TOP_SHELF = 'TV_OS_TOP_SHELF';
    case ALTERNATE_EXPERIMENT = 'ALTERNATE_EXPERIMENT';
}

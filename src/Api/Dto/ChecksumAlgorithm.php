<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

/**
 * ChecksumAlgorithm
 */
enum ChecksumAlgorithm: string
{
    case MD5 = 'MD5';
    case SHA_256 = 'SHA_256';
}

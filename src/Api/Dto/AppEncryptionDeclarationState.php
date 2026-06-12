<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

/**
 * AppEncryptionDeclarationState
 */
enum AppEncryptionDeclarationState: string
{
    case CREATED = 'CREATED';
    case IN_REVIEW = 'IN_REVIEW';
    case APPROVED = 'APPROVED';
    case REJECTED = 'REJECTED';
    case INVALID = 'INVALID';
    case EXPIRED = 'EXPIRED';
}

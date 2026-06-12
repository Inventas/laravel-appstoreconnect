<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppEncryptionDeclarations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appEncryptionDeclarations_app_getToOneRelationship
 */
class AppEncryptionDeclarationsAppGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appEncryptionDeclarations/{$this->id}/relationships/app";
    }

    public function __construct(
        protected string $id,
    ) {}
}

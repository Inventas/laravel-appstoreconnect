<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppEncryptionDeclarations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appEncryptionDeclarations_appEncryptionDeclarationDocument_getToOneRelationship
 */
class AppEncryptionDeclarationsAppEncryptionDeclarationDocumentGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appEncryptionDeclarations/{$this->id}/relationships/appEncryptionDeclarationDocument";
    }

    public function __construct(
        protected string $id,
    ) {}
}

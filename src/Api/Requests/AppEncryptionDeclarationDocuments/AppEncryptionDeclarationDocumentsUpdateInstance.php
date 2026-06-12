<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppEncryptionDeclarationDocuments;

use Inventas\AppStoreConnectKit\Api\Dto\AppEncryptionDeclarationDocumentUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * appEncryptionDeclarationDocuments_updateInstance
 */
class AppEncryptionDeclarationDocumentsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/appEncryptionDeclarationDocuments/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected AppEncryptionDeclarationDocumentUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}

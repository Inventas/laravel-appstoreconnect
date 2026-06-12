<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppEncryptionDeclarationDocuments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appEncryptionDeclarationDocuments_getInstance
 */
class AppEncryptionDeclarationDocumentsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appEncryptionDeclarationDocuments/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsappEncryptionDeclarationDocuments
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappEncryptionDeclarationDocuments = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[appEncryptionDeclarationDocuments]' => $this->fieldsappEncryptionDeclarationDocuments], static fn (mixed $value): bool => $value !== null);
    }
}

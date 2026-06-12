<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppEncryptionDeclarations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appEncryptionDeclarations_getInstance
 */
class AppEncryptionDeclarationsGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appEncryptionDeclarations/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsappEncryptionDeclarations
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsbuilds
     * @param  array<int, string>|null  $fieldsappEncryptionDeclarationDocuments
     * @param  array<int, string>|null  $include
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappEncryptionDeclarations = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsapps = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsbuilds = null,
        /** @var array<int, string>|null */
        protected ?array $fieldsappEncryptionDeclarationDocuments = null,
        /** @var array<int, string>|null */
        protected ?array $include = null,
        protected ?int $limitbuilds = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter([
            'fields[appEncryptionDeclarations]' => $this->fieldsappEncryptionDeclarations,
            'fields[apps]' => $this->fieldsapps,
            'fields[builds]' => $this->fieldsbuilds,
            'fields[appEncryptionDeclarationDocuments]' => $this->fieldsappEncryptionDeclarationDocuments,
            'include' => $this->include,
            'limit[builds]' => $this->limitbuilds,
        ], static fn (mixed $value): bool => $value !== null);
    }
}

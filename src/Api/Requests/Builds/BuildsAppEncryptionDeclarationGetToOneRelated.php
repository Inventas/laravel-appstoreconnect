<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Builds;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * builds_appEncryptionDeclaration_getToOneRelated
 */
class BuildsAppEncryptionDeclarationGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/builds/{$this->id}/appEncryptionDeclaration";
    }

    /**
     * @param  array<int, string>|null  $fieldsappEncryptionDeclarations
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappEncryptionDeclarations = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[appEncryptionDeclarations]' => $this->fieldsappEncryptionDeclarations], static fn (mixed $value): bool => $value !== null);
    }
}

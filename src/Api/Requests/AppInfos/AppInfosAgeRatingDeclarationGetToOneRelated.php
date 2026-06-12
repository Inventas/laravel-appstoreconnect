<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppInfos;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appInfos_ageRatingDeclaration_getToOneRelated
 */
class AppInfosAgeRatingDeclarationGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appInfos/{$this->id}/ageRatingDeclaration";
    }

    /**
     * @param  array<int, string>|null  $fieldsageRatingDeclarations
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsageRatingDeclarations = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[ageRatingDeclarations]' => $this->fieldsageRatingDeclarations], static fn (mixed $value): bool => $value !== null);
    }
}

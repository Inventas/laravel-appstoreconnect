<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\AppStoreVersions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * appStoreVersions_appStoreVersionExperimentsV2_getToManyRelationship
 */
class AppStoreVersionsAppStoreVersionExperimentsV2GetToManyRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/appStoreVersions/{$this->id}/relationships/appStoreVersionExperimentsV2";
    }

    public function __construct(
        protected string $id,
        protected ?int $limit = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit], static fn (mixed $value): bool => $value !== null);
    }
}

<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BuildBundles;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * buildBundles_appClipDomainDebugStatus_getToOneRelated
 */
class BuildBundlesAppClipDomainDebugStatusGetToOneRelated extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/buildBundles/{$this->id}/appClipDomainDebugStatus";
    }

    /**
     * @param  array<int, string>|null  $fieldsappClipDomainStatuses
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsappClipDomainStatuses = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[appClipDomainStatuses]' => $this->fieldsappClipDomainStatuses], static fn (mixed $value): bool => $value !== null);
    }
}

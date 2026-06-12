<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BackgroundAssetUploadFiles;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * backgroundAssetUploadFiles_getInstance
 */
class BackgroundAssetUploadFilesGetInstance extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/backgroundAssetUploadFiles/{$this->id}";
    }

    /**
     * @param  array<int, string>|null  $fieldsbackgroundAssetUploadFiles
     */
    public function __construct(
        protected string $id,
        /** @var array<int, string>|null */
        protected ?array $fieldsbackgroundAssetUploadFiles = null,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultQuery(): array
    {
        return array_filter(['fields[backgroundAssetUploadFiles]' => $this->fieldsbackgroundAssetUploadFiles], static fn (mixed $value): bool => $value !== null);
    }
}

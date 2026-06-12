<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ScmRepositoryGitReferencesLinkagesResponse
 */
class ScmRepositoryGitReferencesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, ScmRepositoryGitReferencesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, ScmRepositoryGitReferencesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductDiscountPagedQueryResponse extends JsonObject
{
    public const FIELD_LIMIT = 'limit';
    public const FIELD_COUNT = 'count';
    public const FIELD_TOTAL = 'total';
    public const FIELD_OFFSET = 'offset';
    public const FIELD_RESULTS = 'results';

    /**
     * @return null|int
     */
    public function getLimit();

    /**
     * @return null|int
     */
    public function getCount();

    /**
     * @return null|int
     */
    public function getTotal();

    /**
     * @return null|int
     */
    public function getOffset();

    /**
     * @return null|ProductDiscountCollection
     */
    public function getResults();

    /**
     * @param ?int $limit
     */
    public function setLimit(?int $limit): void;

    /**
     * @param ?int $count
     */
    public function setCount(?int $count): void;

    /**
     * @param ?int $total
     */
    public function setTotal(?int $total): void;

    /**
     * @param ?int $offset
     */
    public function setOffset(?int $offset): void;

    /**
     * @param ?ProductDiscountCollection $results
     */
    public function setResults(?ProductDiscountCollection $results): void;
}

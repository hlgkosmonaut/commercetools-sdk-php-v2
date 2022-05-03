<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AssignedProductSelectionPagedQueryResponse>
 */
final class AssignedProductSelectionPagedQueryResponseBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $limit;

    /**
     * @var ?int
     */
    private $offset;

    /**
     * @var ?int
     */
    private $count;

    /**
     * @var ?int
     */
    private $total;

    /**
     * @var ?AssignedProductSelectionCollection
     */
    private $results;

    /**
     * <p>Number of <a href="/../api/general-concepts#limit">results requested</a>.</p>
     *
     * @return null|int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * <p>Offset supplied by the client or the server default.
     * It is the number of elements skipped, not a page number.</p>
     *
     * @return null|int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * <p>Actual number of results returned.</p>
     *
     * @return null|int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * <p>Total number of results matching the query.
     * This number is an estimation that is not <a href="/general-concepts#strong-consistency">strongly consistent</a>.
     * Unlike other endpoints, the Product Selection endpoint does not return this field by default.
     * To get <code>total</code>, pass the query parameter <code>withTotal</code> set to <code>true</code>.
     * When the results are filtered with a <a href="/predicates/query">Query Predicate</a>, <code>total</code> is subject to a <a href="/limits#queries">limit</a>.</p>
     *
     * @return null|int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * <p>References to Product Selection that are assigned to the Product.</p>
     *
     * @return null|AssignedProductSelectionCollection
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param ?int $limit
     * @return $this
     */
    public function withLimit(?int $limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param ?int $offset
     * @return $this
     */
    public function withOffset(?int $offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param ?int $count
     * @return $this
     */
    public function withCount(?int $count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @param ?int $total
     * @return $this
     */
    public function withTotal(?int $total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @param ?AssignedProductSelectionCollection $results
     * @return $this
     */
    public function withResults(?AssignedProductSelectionCollection $results)
    {
        $this->results = $results;

        return $this;
    }


    public function build(): AssignedProductSelectionPagedQueryResponse
    {
        return new AssignedProductSelectionPagedQueryResponseModel(
            $this->limit,
            $this->offset,
            $this->count,
            $this->total,
            $this->results
        );
    }

    public static function of(): AssignedProductSelectionPagedQueryResponseBuilder
    {
        return new self();
    }
}

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Product\ProductReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductSelectionAssignmentModel extends JsonObjectModel implements ProductSelectionAssignment
{
    /**
     * @var ?ProductReference
     */
    protected $product;

    /**
     * @var ?ProductSelectionReference
     */
    protected $productSelection;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductReference $product = null,
        ?ProductSelectionReference $productSelection = null
    ) {
        $this->product = $product;
        $this->productSelection = $productSelection;
    }

    /**
     * <p>Reference to a Product that is assigned to the ProductSelection.</p>
     *
     * @return null|ProductReference
     */
    public function getProduct()
    {
        if (is_null($this->product)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT);
            if (is_null($data)) {
                return null;
            }

            $this->product = ProductReferenceModel::of($data);
        }

        return $this->product;
    }

    /**
     * <p>Reference to the ProductSelection that this assignment is part of.</p>
     *
     * @return null|ProductSelectionReference
     */
    public function getProductSelection()
    {
        if (is_null($this->productSelection)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT_SELECTION);
            if (is_null($data)) {
                return null;
            }

            $this->productSelection = ProductSelectionReferenceModel::of($data);
        }

        return $this->productSelection;
    }


    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void
    {
        $this->product = $product;
    }

    /**
     * @param ?ProductSelectionReference $productSelection
     */
    public function setProductSelection(?ProductSelectionReference $productSelection): void
    {
        $this->productSelection = $productSelection;
    }
}

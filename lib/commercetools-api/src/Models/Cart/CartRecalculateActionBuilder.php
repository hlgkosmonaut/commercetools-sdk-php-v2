<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CartRecalculateAction>
 */
final class CartRecalculateActionBuilder implements Builder
{
    /**
     * @var ?bool
     */
    private $updateProductData;

    /**
     * <p>If set to <code>true</code>, the line item product data (<code>name</code>, <code>variant</code> and <code>productType</code>) will also be updated.
     * If set to <code>false</code>,
     * only the prices and tax rates of the line item will be updated.
     * The updated price of a line item may not correspond to a price in <code>variant.prices</code> anymore.</p>.
     *
     * @return null|bool
     */
    public function getUpdateProductData()
    {
        return $this->updateProductData;
    }

    /**
     * @return $this
     */
    public function withUpdateProductData(?bool $updateProductData)
    {
        $this->updateProductData = $updateProductData;

        return $this;
    }

    public function build(): CartRecalculateAction
    {
        return new CartRecalculateActionModel(
            $this->updateProductData
        );
    }

    public static function of(): CartRecalculateActionBuilder
    {
        return new self();
    }
}

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\PriceDraft;
use Commercetools\Api\Models\Common\PriceDraftBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductChangePriceAction>
 */
final class ProductChangePriceActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $priceId;

    /**
     * @var PriceDraft|?PriceDraftBuilder
     */
    private $price;

    /**
     * @var ?bool
     */
    private $staged;

    /**
     * <p>ID of the <a href="#price">Price</a></p>.
     *
     * @return null|string
     */
    public function getPriceId()
    {
        return $this->priceId;
    }

    /**
     * @return null|PriceDraft
     */
    public function getPrice()
    {
        return $this->price instanceof PriceDraftBuilder ? $this->price->build() : $this->price;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @return $this
     */
    public function withPriceId(?string $priceId)
    {
        $this->priceId = $priceId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPrice(?PriceDraft $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPriceBuilder(?PriceDraftBuilder $price)
    {
        $this->price = $price;

        return $this;
    }

    public function build(): ProductChangePriceAction
    {
        return new ProductChangePriceActionModel(
            $this->priceId,
            ($this->price instanceof PriceDraftBuilder ? $this->price->build() : $this->price),
            $this->staged
        );
    }

    public static function of(): ProductChangePriceActionBuilder
    {
        return new self();
    }
}

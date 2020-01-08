<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductMoveImageToPositionAction>
 */
final class ProductMoveImageToPositionActionBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $variantId;

    /**
     * @var ?string
     */
    private $sku;

    /**
     * @var ?string
     */
    private $imageUrl;

    /**
     * @var ?int
     */
    private $position;

    /**
     * @var ?bool
     */
    private $staged;

    /**
     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**
     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>The URL of the image</p>.
     *
     * @return null|string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @return null|int
     */
    public function getPosition()
    {
        return $this->position;
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
    public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @return $this
     */
    public function withImageUrl(?string $imageUrl)
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPosition(?int $position)
    {
        $this->position = $position;

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

    public function build(): ProductMoveImageToPositionAction
    {
        return new ProductMoveImageToPositionActionModel(
            $this->variantId,
            $this->sku,
            $this->imageUrl,
            $this->position,
            $this->staged
        );
    }

    public static function of(): ProductMoveImageToPositionActionBuilder
    {
        return new self();
    }
}

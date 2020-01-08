<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ChannelUpdate>
 */
final class ChannelUpdateBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?ChannelUpdateActionCollection
     */
    private $actions;

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return null|ChannelUpdateActionCollection
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return $this
     */
    public function withActions(?ChannelUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }

    public function build(): ChannelUpdate
    {
        return new ChannelUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): ChannelUpdateBuilder
    {
        return new self();
    }
}

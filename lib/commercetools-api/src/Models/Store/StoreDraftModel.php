<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\Channel\ChannelResourceIdentifierCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StoreDraftModel extends JsonObjectModel implements StoreDraft
{
    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?LocalizedString
     */
    protected $name;

    /**
     * @var ?array
     */
    protected $languages;

    /**
     * @var ?ChannelResourceIdentifierCollection
     */
    protected $distributionChannels;

    /**
     * @var ?ChannelResourceIdentifierCollection
     */
    protected $supplyChannels;

    /**
     * @var ?ProductSelectionSettingDraftCollection
     */
    protected $productSelections;

    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?LocalizedString $name = null,
        ?array $languages = null,
        ?ChannelResourceIdentifierCollection $distributionChannels = null,
        ?ChannelResourceIdentifierCollection $supplyChannels = null,
        ?ProductSelectionSettingDraftCollection $productSelections = null,
        ?CustomFieldsDraft $custom = null
    ) {
        $this->key = $key;
        $this->name = $name;
        $this->languages = $languages;
        $this->distributionChannels = $distributionChannels;
        $this->supplyChannels = $supplyChannels;
        $this->productSelections = $productSelections;
        $this->custom = $custom;
    }

    /**
     * <p>User-specific unique identifier for the store.
     * The <code>key</code> is mandatory and immutable.
     * It is used to reference the store.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>The name of the store</p>
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * @return null|array
     */
    public function getLanguages()
    {
        if (is_null($this->languages)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_LANGUAGES);
            if (is_null($data)) {
                return null;
            }
            $this->languages = $data;
        }

        return $this->languages;
    }

    /**
     * <p>Set of ResourceIdentifiers to a Channel with <code>ProductDistribution</code> role</p>
     *
     * @return null|ChannelResourceIdentifierCollection
     */
    public function getDistributionChannels()
    {
        if (is_null($this->distributionChannels)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_DISTRIBUTION_CHANNELS);
            if (is_null($data)) {
                return null;
            }
            $this->distributionChannels = ChannelResourceIdentifierCollection::fromArray($data);
        }

        return $this->distributionChannels;
    }

    /**
     * <p>Set of ResourceIdentifiers of Channels with <code>InventorySupply</code> role</p>
     *
     * @return null|ChannelResourceIdentifierCollection
     */
    public function getSupplyChannels()
    {
        if (is_null($this->supplyChannels)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_SUPPLY_CHANNELS);
            if (is_null($data)) {
                return null;
            }
            $this->supplyChannels = ChannelResourceIdentifierCollection::fromArray($data);
        }

        return $this->supplyChannels;
    }

    /**
     * <p>Set of ResourceIdentifiers of Product Selections along with settings.
     * If <code>productSelections</code> is empty all products in the project are available in this Store.
     * If <code>productSelections</code> is not empty but there exists no <code>active</code> Product Selection then no Product is available in this Store.</p>
     *
     * @return null|ProductSelectionSettingDraftCollection
     */
    public function getProductSelections()
    {
        if (is_null($this->productSelections)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_PRODUCT_SELECTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->productSelections = ProductSelectionSettingDraftCollection::fromArray($data);
        }

        return $this->productSelections;
    }

    /**
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }


    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?array $languages
     */
    public function setLanguages(?array $languages): void
    {
        $this->languages = $languages;
    }

    /**
     * @param ?ChannelResourceIdentifierCollection $distributionChannels
     */
    public function setDistributionChannels(?ChannelResourceIdentifierCollection $distributionChannels): void
    {
        $this->distributionChannels = $distributionChannels;
    }

    /**
     * @param ?ChannelResourceIdentifierCollection $supplyChannels
     */
    public function setSupplyChannels(?ChannelResourceIdentifierCollection $supplyChannels): void
    {
        $this->supplyChannels = $supplyChannels;
    }

    /**
     * @param ?ProductSelectionSettingDraftCollection $productSelections
     */
    public function setProductSelections(?ProductSelectionSettingDraftCollection $productSelections): void
    {
        $this->productSelections = $productSelections;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }
}

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\TrackingData;
use Commercetools\Api\Models\Order\TrackingDataBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<ParcelTrackingDataUpdatedMessagePayload>
 */
final class ParcelTrackingDataUpdatedMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $deliveryId;

    /**
     * @var ?string
     */
    private $parcelId;

    /**
     * @var TrackingData|?TrackingDataBuilder
     */
    private $trackingData;

    /**
     * @return null|string
     */
    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    /**
     * @return null|string
     */
    public function getParcelId()
    {
        return $this->parcelId;
    }

    /**
     * @return null|TrackingData
     */
    public function getTrackingData()
    {
        return $this->trackingData instanceof TrackingDataBuilder ? $this->trackingData->build() : $this->trackingData;
    }

    /**
     * @return $this
     */
    public function withDeliveryId(?string $deliveryId)
    {
        $this->deliveryId = $deliveryId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withParcelId(?string $parcelId)
    {
        $this->parcelId = $parcelId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTrackingData(?TrackingData $trackingData)
    {
        $this->trackingData = $trackingData;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTrackingDataBuilder(?TrackingDataBuilder $trackingData)
    {
        $this->trackingData = $trackingData;

        return $this;
    }

    public function build(): ParcelTrackingDataUpdatedMessagePayload
    {
        return new ParcelTrackingDataUpdatedMessagePayloadModel(
            $this->deliveryId,
            $this->parcelId,
            ($this->trackingData instanceof TrackingDataBuilder ? $this->trackingData->build() : $this->trackingData)
        );
    }

    public static function of(): ParcelTrackingDataUpdatedMessagePayloadBuilder
    {
        return new self();
    }
}

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Cart\CartPagedQueryResponse;
use Commercetools\Api\Models\Cart\CartPagedQueryResponseModel;
use Commercetools\Api\Models\Error\ErrorResponse;
use Commercetools\Api\Models\Error\ErrorResponseModel;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Client\ApiRequest;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use Commercetools\Exception\InvalidArgumentException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;

use Psr\Http\Message\ResponseInterface;

/** @psalm-suppress PropertyNotSetInConstructor */
class ByProjectKeyInStoreKeyByStoreKeyMeCartsGet extends ApiRequest
{
    /**
     * @param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function __construct(string $projectKey, string $storeKey, $body = null, array $headers = [], ClientInterface $client = null)
    {
        $uri = str_replace(['{projectKey}', '{storeKey}'], [$projectKey, $storeKey], '{projectKey}/in-store/key={storeKey}/me/carts');
        parent::__construct($client, 'GET', $uri, $headers, !is_null($body) ? json_encode($body) : null);
    }

    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     * @psalm-return CartPagedQueryResponse|ErrorResponse|JsonObject|T|null
     */
    public function mapFromResponse(?ResponseInterface $response, string $resultType = null)
    {
        if (is_null($response)) {
            return null;
        }
        if (is_null($resultType)) {
            switch ($response->getStatusCode()) {
                case '200':
                    $resultType = CartPagedQueryResponseModel::class;

                    break;
                case '400':
                    $resultType = ErrorResponseModel::class;

                    break;
                case '401':
                    $resultType = ErrorResponseModel::class;

                    break;
                case '403':
                    $resultType = ErrorResponseModel::class;

                    break;
                case '500':
                    $resultType = ErrorResponseModel::class;

                    break;
                case '503':
                    $resultType = ErrorResponseModel::class;

                    break;
                default:
                    $resultType = JsonObjectModel::class;

                    break;
            }
        }

        return $resultType::of($this->responseData($response));
    }

    /**
     * @template T of JsonObject
     * @psalm-param ?class-string<T> $resultType
     *
     * @return null|CartPagedQueryResponse|ErrorResponse|JsonObject
     */
    public function execute(array $options = [], string $resultType = null)
    {
        try {
            $response = $this->send($options);
        } catch (ServerException $e) {
            $result = $this->mapFromResponse($e->getResponse());

            throw new ApiServerException($e->getMessage(), $result, $this, $e->getResponse(), $e, []);
        } catch (ClientException $e) {
            $result = $this->mapFromResponse($e->getResponse());

            throw new ApiClientException($e->getMessage(), $result, $this, $e->getResponse(), $e, []);
        }

        return $this->mapFromResponse($response, $resultType);
    }

    /**
     *
     * @psalm-param scalar $expand
     */
    public function withExpand($expand): ByProjectKeyInStoreKeyByStoreKeyMeCartsGet
    {
        return $this->withQueryParam('expand', $expand);
    }

    /**
     *
     * @psalm-param scalar $sort
     */
    public function withSort($sort): ByProjectKeyInStoreKeyByStoreKeyMeCartsGet
    {
        return $this->withQueryParam('sort', $sort);
    }

    /**
     *
     * @psalm-param scalar $limit
     */
    public function withLimit($limit): ByProjectKeyInStoreKeyByStoreKeyMeCartsGet
    {
        return $this->withQueryParam('limit', $limit);
    }

    /**
     *
     * @psalm-param scalar $offset
     */
    public function withOffset($offset): ByProjectKeyInStoreKeyByStoreKeyMeCartsGet
    {
        return $this->withQueryParam('offset', $offset);
    }

    /**
     *
     * @psalm-param scalar $withTotal
     */
    public function withWithTotal($withTotal): ByProjectKeyInStoreKeyByStoreKeyMeCartsGet
    {
        return $this->withQueryParam('withTotal', $withTotal);
    }

    /**
     *
     * @psalm-param scalar $where
     */
    public function withWhere($where): ByProjectKeyInStoreKeyByStoreKeyMeCartsGet
    {
        return $this->withQueryParam('where', $where);
    }

    /**
     * @psalm-param string $paramName
     * @psalm-param scalar $predicateParam
     */
    public function withPredicateParam(string $paramName, $predicateParam): ByProjectKeyInStoreKeyByStoreKeyMeCartsGet
    {
        return $this->withQueryParam(sprintf('%s', $paramName), $predicateParam);
    }
}

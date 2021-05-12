<?php
namespace Miczone\Thrift\Catalog;

/**
 * Autogenerated by Thrift Compiler (0.14.1)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

interface MiczoneCatalogStorageServiceIf
{
    /**
     * @return int
     */
    public function ping();
    /**
     * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
     * @param \Miczone\Thrift\Catalog\Product\GetProductByIdRequest $request
     * @return \Miczone\Thrift\Catalog\Product\GetProductByIdResponse
     */
    public function getProductById(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Product\GetProductByIdRequest $request);
    /**
     * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
     * @param \Miczone\Thrift\Catalog\Product\MultiGetProductByIdListRequest $request
     * @return \Miczone\Thrift\Catalog\Product\MultiGetProductByIdListResponse
     */
    public function multiGetProductByIdList(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Product\MultiGetProductByIdListRequest $request);
    /**
     * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
     * @param \Miczone\Thrift\Catalog\Product\GetSliceProductRequest $request
     * @return \Miczone\Thrift\Catalog\Product\GetSliceProductResponse
     */
    public function getSliceProduct(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Product\GetSliceProductRequest $request);
    /**
     * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
     * @param \Miczone\Thrift\Catalog\Category\GetCategoryByIdRequest $request
     * @return \Miczone\Thrift\Catalog\Category\GetCategoryByIdResponse
     */
    public function getCategoryById(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Category\GetCategoryByIdRequest $request);
    /**
     * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
     * @param \Miczone\Thrift\Catalog\Category\GetCategoryBySlugRequest $request
     * @return \Miczone\Thrift\Catalog\Category\GetCategoryBySlugResponse
     */
    public function getCategoryBySlug(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Category\GetCategoryBySlugRequest $request);
    /**
     * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
     * @param \Miczone\Thrift\Catalog\Category\GetCategoryByOriginalCategoryRequest $request
     * @return \Miczone\Thrift\Catalog\Category\GetCategoryByOriginalCategoryResponse
     */
    public function getCategoryByOriginalCategory(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Category\GetCategoryByOriginalCategoryRequest $request);
    /**
     * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
     * @param \Miczone\Thrift\Catalog\Category\GetCategoryByProductSkuAndMerchantRequest $request
     * @return \Miczone\Thrift\Catalog\Category\GetCategoryByProductSkuAndMerchantResponse
     */
    public function getCategoryByProductSkuAndMerchant(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Category\GetCategoryByProductSkuAndMerchantRequest $request);
    /**
     * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
     * @param \Miczone\Thrift\Catalog\Category\MultiGetCategoryByIdListRequest $request
     * @return \Miczone\Thrift\Catalog\Category\MultiGetCategoryByIdListResponse
     */
    public function multiGetCategoryByIdList(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Category\MultiGetCategoryByIdListRequest $request);
    /**
     * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
     * @param \Miczone\Thrift\Catalog\Category\MultiGetCategoryBySlugListRequest $request
     * @return \Miczone\Thrift\Catalog\Category\MultiGetCategoryBySlugListResponse
     */
    public function multiGetCategoryBySlugList(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Category\MultiGetCategoryBySlugListRequest $request);
    /**
     * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
     * @param \Miczone\Thrift\Catalog\Category\GetCategoryMappingByIdRequest $request
     * @return \Miczone\Thrift\Catalog\Category\GetCategoryMappingByIdResponse
     */
    public function getCategoryMappingById(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Category\GetCategoryMappingByIdRequest $request);
    /**
     * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
     * @param \Miczone\Thrift\Catalog\Category\GetSliceSimpleCategoryRequest $request
     * @return \Miczone\Thrift\Catalog\Category\GetSliceSimpleCategoryResponse
     */
    public function getSliceSimpleCategory(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Category\GetSliceSimpleCategoryRequest $request);
    /**
     * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
     * @param \Miczone\Thrift\Catalog\Category\GetSliceCategoryRequest $request
     * @return \Miczone\Thrift\Catalog\Category\GetSliceCategoryResponse
     */
    public function getSliceCategory(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Category\GetSliceCategoryRequest $request);
    /**
     * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
     * @param \Miczone\Thrift\Catalog\Source\GetSourceByIdRequest $request
     * @return \Miczone\Thrift\Catalog\Source\GetSourceByIdResponse
     */
    public function getSourceById(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Source\GetSourceByIdRequest $request);
}

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

class MiczoneCatalogStorageServiceClient implements \Miczone\Thrift\Catalog\MiczoneCatalogStorageServiceIf
{
    protected $input_ = null;
    protected $output_ = null;

    protected $seqid_ = 0;

    public function __construct($input, $output = null)
    {
        $this->input_ = $input;
        $this->output_ = $output ? $output : $input;
    }


    public function ping()
    {
        $this->send_ping();
        return $this->recv_ping();
    }

    public function send_ping()
    {
        $args = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_ping_args();
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'ping',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('ping', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_ping()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\Miczone\Thrift\Catalog\MiczoneCatalogStorageService_ping_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_ping_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        throw new \Exception("ping failed: unknown result");
    }

    public function getProductById(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Product\GetProductByIdRequest $request)
    {
        $this->send_getProductById($operationHandle, $request);
        return $this->recv_getProductById();
    }

    public function send_getProductById(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Product\GetProductByIdRequest $request)
    {
        $args = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getProductById_args();
        $args->operationHandle = $operationHandle;
        $args->request = $request;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'getProductById',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('getProductById', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_getProductById()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getProductById_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getProductById_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        throw new \Exception("getProductById failed: unknown result");
    }

    public function multiGetProductByIdList(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Product\MultiGetProductByIdListRequest $request)
    {
        $this->send_multiGetProductByIdList($operationHandle, $request);
        return $this->recv_multiGetProductByIdList();
    }

    public function send_multiGetProductByIdList(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Product\MultiGetProductByIdListRequest $request)
    {
        $args = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_multiGetProductByIdList_args();
        $args->operationHandle = $operationHandle;
        $args->request = $request;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'multiGetProductByIdList',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('multiGetProductByIdList', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_multiGetProductByIdList()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\Miczone\Thrift\Catalog\MiczoneCatalogStorageService_multiGetProductByIdList_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_multiGetProductByIdList_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        throw new \Exception("multiGetProductByIdList failed: unknown result");
    }

    public function getSliceProduct(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Product\GetSliceProductRequest $request)
    {
        $this->send_getSliceProduct($operationHandle, $request);
        return $this->recv_getSliceProduct();
    }

    public function send_getSliceProduct(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Product\GetSliceProductRequest $request)
    {
        $args = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getSliceProduct_args();
        $args->operationHandle = $operationHandle;
        $args->request = $request;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'getSliceProduct',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('getSliceProduct', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_getSliceProduct()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getSliceProduct_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getSliceProduct_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        throw new \Exception("getSliceProduct failed: unknown result");
    }

    public function getCategoryById(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Category\GetCategoryByIdRequest $request)
    {
        $this->send_getCategoryById($operationHandle, $request);
        return $this->recv_getCategoryById();
    }

    public function send_getCategoryById(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Category\GetCategoryByIdRequest $request)
    {
        $args = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getCategoryById_args();
        $args->operationHandle = $operationHandle;
        $args->request = $request;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'getCategoryById',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('getCategoryById', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_getCategoryById()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getCategoryById_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getCategoryById_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        throw new \Exception("getCategoryById failed: unknown result");
    }

    public function getCategoryBySlug(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Category\GetCategoryBySlugRequest $request)
    {
        $this->send_getCategoryBySlug($operationHandle, $request);
        return $this->recv_getCategoryBySlug();
    }

    public function send_getCategoryBySlug(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Category\GetCategoryBySlugRequest $request)
    {
        $args = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getCategoryBySlug_args();
        $args->operationHandle = $operationHandle;
        $args->request = $request;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'getCategoryBySlug',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('getCategoryBySlug', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_getCategoryBySlug()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getCategoryBySlug_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getCategoryBySlug_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        throw new \Exception("getCategoryBySlug failed: unknown result");
    }

    public function getCategoryByOriginalCategory(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Category\GetCategoryByOriginalCategoryRequest $request)
    {
        $this->send_getCategoryByOriginalCategory($operationHandle, $request);
        return $this->recv_getCategoryByOriginalCategory();
    }

    public function send_getCategoryByOriginalCategory(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Category\GetCategoryByOriginalCategoryRequest $request)
    {
        $args = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getCategoryByOriginalCategory_args();
        $args->operationHandle = $operationHandle;
        $args->request = $request;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'getCategoryByOriginalCategory',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('getCategoryByOriginalCategory', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_getCategoryByOriginalCategory()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getCategoryByOriginalCategory_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getCategoryByOriginalCategory_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        throw new \Exception("getCategoryByOriginalCategory failed: unknown result");
    }

    public function getCategoryByProductSkuAndMerchant(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Category\GetCategoryByProductSkuAndMerchantRequest $request)
    {
        $this->send_getCategoryByProductSkuAndMerchant($operationHandle, $request);
        return $this->recv_getCategoryByProductSkuAndMerchant();
    }

    public function send_getCategoryByProductSkuAndMerchant(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Category\GetCategoryByProductSkuAndMerchantRequest $request)
    {
        $args = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getCategoryByProductSkuAndMerchant_args();
        $args->operationHandle = $operationHandle;
        $args->request = $request;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'getCategoryByProductSkuAndMerchant',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('getCategoryByProductSkuAndMerchant', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_getCategoryByProductSkuAndMerchant()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getCategoryByProductSkuAndMerchant_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getCategoryByProductSkuAndMerchant_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        throw new \Exception("getCategoryByProductSkuAndMerchant failed: unknown result");
    }

    public function multiGetCategoryByIdList(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Category\MultiGetCategoryByIdListRequest $request)
    {
        $this->send_multiGetCategoryByIdList($operationHandle, $request);
        return $this->recv_multiGetCategoryByIdList();
    }

    public function send_multiGetCategoryByIdList(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Category\MultiGetCategoryByIdListRequest $request)
    {
        $args = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_multiGetCategoryByIdList_args();
        $args->operationHandle = $operationHandle;
        $args->request = $request;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'multiGetCategoryByIdList',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('multiGetCategoryByIdList', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_multiGetCategoryByIdList()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\Miczone\Thrift\Catalog\MiczoneCatalogStorageService_multiGetCategoryByIdList_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_multiGetCategoryByIdList_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        throw new \Exception("multiGetCategoryByIdList failed: unknown result");
    }

    public function multiGetCategoryBySlugList(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Category\MultiGetCategoryBySlugListRequest $request)
    {
        $this->send_multiGetCategoryBySlugList($operationHandle, $request);
        return $this->recv_multiGetCategoryBySlugList();
    }

    public function send_multiGetCategoryBySlugList(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Category\MultiGetCategoryBySlugListRequest $request)
    {
        $args = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_multiGetCategoryBySlugList_args();
        $args->operationHandle = $operationHandle;
        $args->request = $request;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'multiGetCategoryBySlugList',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('multiGetCategoryBySlugList', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_multiGetCategoryBySlugList()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\Miczone\Thrift\Catalog\MiczoneCatalogStorageService_multiGetCategoryBySlugList_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_multiGetCategoryBySlugList_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        throw new \Exception("multiGetCategoryBySlugList failed: unknown result");
    }

    public function getCategoryMappingById(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Category\GetCategoryMappingByIdRequest $request)
    {
        $this->send_getCategoryMappingById($operationHandle, $request);
        return $this->recv_getCategoryMappingById();
    }

    public function send_getCategoryMappingById(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Category\GetCategoryMappingByIdRequest $request)
    {
        $args = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getCategoryMappingById_args();
        $args->operationHandle = $operationHandle;
        $args->request = $request;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'getCategoryMappingById',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('getCategoryMappingById', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_getCategoryMappingById()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getCategoryMappingById_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getCategoryMappingById_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        throw new \Exception("getCategoryMappingById failed: unknown result");
    }

    public function getSliceSimpleCategory(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Category\GetSliceSimpleCategoryRequest $request)
    {
        $this->send_getSliceSimpleCategory($operationHandle, $request);
        return $this->recv_getSliceSimpleCategory();
    }

    public function send_getSliceSimpleCategory(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Category\GetSliceSimpleCategoryRequest $request)
    {
        $args = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getSliceSimpleCategory_args();
        $args->operationHandle = $operationHandle;
        $args->request = $request;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'getSliceSimpleCategory',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('getSliceSimpleCategory', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_getSliceSimpleCategory()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getSliceSimpleCategory_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getSliceSimpleCategory_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        throw new \Exception("getSliceSimpleCategory failed: unknown result");
    }

    public function getSliceCategory(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Category\GetSliceCategoryRequest $request)
    {
        $this->send_getSliceCategory($operationHandle, $request);
        return $this->recv_getSliceCategory();
    }

    public function send_getSliceCategory(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Category\GetSliceCategoryRequest $request)
    {
        $args = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getSliceCategory_args();
        $args->operationHandle = $operationHandle;
        $args->request = $request;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'getSliceCategory',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('getSliceCategory', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_getSliceCategory()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getSliceCategory_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getSliceCategory_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        throw new \Exception("getSliceCategory failed: unknown result");
    }

    public function getSourceById(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Source\GetSourceByIdRequest $request)
    {
        $this->send_getSourceById($operationHandle, $request);
        return $this->recv_getSourceById();
    }

    public function send_getSourceById(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\Source\GetSourceByIdRequest $request)
    {
        $args = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getSourceById_args();
        $args->operationHandle = $operationHandle;
        $args->request = $request;
        $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $this->output_,
                'getSourceById',
                TMessageType::CALL,
                $args,
                $this->seqid_,
                $this->output_->isStrictWrite()
            );
        } else {
            $this->output_->writeMessageBegin('getSourceById', TMessageType::CALL, $this->seqid_);
            $args->write($this->output_);
            $this->output_->writeMessageEnd();
            $this->output_->getTransport()->flush();
        }
    }

    public function recv_getSourceById()
    {
        $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
        if ($bin_accel) {
            $result = thrift_protocol_read_binary(
                $this->input_,
                '\Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getSourceById_result',
                $this->input_->isStrictRead()
            );
        } else {
            $rseqid = 0;
            $fname = null;
            $mtype = 0;

            $this->input_->readMessageBegin($fname, $mtype, $rseqid);
            if ($mtype == TMessageType::EXCEPTION) {
                $x = new TApplicationException();
                $x->read($this->input_);
                $this->input_->readMessageEnd();
                throw $x;
            }
            $result = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getSourceById_result();
            $result->read($this->input_);
            $this->input_->readMessageEnd();
        }
        if ($result->success !== null) {
            return $result->success;
        }
        throw new \Exception("getSourceById failed: unknown result");
    }
}

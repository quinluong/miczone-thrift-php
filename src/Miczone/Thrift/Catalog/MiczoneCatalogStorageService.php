<?php
namespace Miczone\Thrift\Catalog;

use Thrift\Exception\TApplicationException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Type\TMessageType;
use Thrift\Type\TType;

interface MiczoneCatalogStorageServiceIf {
  /**
   * @return int
   */
  public function ping();
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\Catalog\GetProductByIdRequest $request
   * @return \Miczone\Thrift\Catalog\GetProductByIdResponse
   */
  public function getProductById(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\GetProductByIdRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\Catalog\GetProductBySkuRequest $request
   * @return \Miczone\Thrift\Catalog\GetProductBySkuResponse
   */
  public function getProductBySku(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\GetProductBySkuRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\Catalog\MultiGetProductByIdListRequest $request
   * @return \Miczone\Thrift\Catalog\MultiGetProductByIdListResponse
   */
  public function multiGetProductByIdList(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\MultiGetProductByIdListRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\Catalog\MultiGetProductBySkuListRequest $request
   * @return \Miczone\Thrift\Catalog\MultiGetProductBySkuListResponse
   */
  public function multiGetProductBySkuList(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\MultiGetProductBySkuListRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\Catalog\GetCategoryByIdRequest $request
   * @return \Miczone\Thrift\Catalog\GetCategoryByIdResponse
   */
  public function getCategoryById(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\GetCategoryByIdRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\Catalog\GetCategoryBySlugRequest $request
   * @return \Miczone\Thrift\Catalog\GetCategoryBySlugResponse
   */
  public function getCategoryBySlug(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\GetCategoryBySlugRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\Catalog\MultiGetCategoryByIdListRequest $request
   * @return \Miczone\Thrift\Catalog\MultiGetCategoryByIdListResponse
   */
  public function multiGetCategoryByIdList(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\MultiGetCategoryByIdListRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\Catalog\MultiGetCategoryBySlugListRequest $request
   * @return \Miczone\Thrift\Catalog\MultiGetCategoryBySlugListResponse
   */
  public function multiGetCategoryBySlugList(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\MultiGetCategoryBySlugListRequest $request);
}

class MiczoneCatalogStorageServiceClient implements \Miczone\Thrift\Catalog\MiczoneCatalogStorageServiceIf {
  protected $input_ = null;
  protected $output_ = null;

  protected $seqid_ = 0;

  public function __construct($input, $output = null) {
    $this->input_ = $input;
    $this->output_ = $output ? $output : $input;
  }

  public function ping() {
    $this->send_ping();

    return $this->recv_ping();
  }

  public function send_ping() {
    $args = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_ping_args();
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'ping', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('ping', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_ping() {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) {
      $result = thrift_protocol_read_binary($this->input_, '\Miczone\Thrift\Catalog\MiczoneCatalogStorageService_ping_result', $this->input_->isStrictRead());
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

  public function getProductById(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\GetProductByIdRequest $request) {
    $this->send_getProductById($operationHandle, $request);

    return $this->recv_getProductById();
  }

  public function send_getProductById(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\GetProductByIdRequest $request) {
    $args = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getProductById_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'getProductById', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('getProductById', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_getProductById() {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) {
      $result = thrift_protocol_read_binary($this->input_, '\Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getProductById_result', $this->input_->isStrictRead());
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

  public function getProductBySku(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\GetProductBySkuRequest $request) {
    $this->send_getProductBySku($operationHandle, $request);

    return $this->recv_getProductBySku();
  }

  public function send_getProductBySku(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\GetProductBySkuRequest $request) {
    $args = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getProductBySku_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'getProductBySku', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('getProductBySku', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_getProductBySku() {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) {
      $result = thrift_protocol_read_binary($this->input_, '\Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getProductBySku_result', $this->input_->isStrictRead());
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
      $result = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getProductBySku_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("getProductBySku failed: unknown result");
  }

  public function multiGetProductByIdList(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\MultiGetProductByIdListRequest $request) {
    $this->send_multiGetProductByIdList($operationHandle, $request);

    return $this->recv_multiGetProductByIdList();
  }

  public function send_multiGetProductByIdList(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\MultiGetProductByIdListRequest $request) {
    $args = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_multiGetProductByIdList_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'multiGetProductByIdList', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('multiGetProductByIdList', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_multiGetProductByIdList() {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) {
      $result = thrift_protocol_read_binary($this->input_, '\Miczone\Thrift\Catalog\MiczoneCatalogStorageService_multiGetProductByIdList_result', $this->input_->isStrictRead());
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

  public function multiGetProductBySkuList(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\MultiGetProductBySkuListRequest $request) {
    $this->send_multiGetProductBySkuList($operationHandle, $request);

    return $this->recv_multiGetProductBySkuList();
  }

  public function send_multiGetProductBySkuList(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\MultiGetProductBySkuListRequest $request) {
    $args = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_multiGetProductBySkuList_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'multiGetProductBySkuList', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('multiGetProductBySkuList', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_multiGetProductBySkuList() {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) {
      $result = thrift_protocol_read_binary($this->input_, '\Miczone\Thrift\Catalog\MiczoneCatalogStorageService_multiGetProductBySkuList_result', $this->input_->isStrictRead());
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
      $result = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_multiGetProductBySkuList_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("multiGetProductBySkuList failed: unknown result");
  }

  public function getCategoryById(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\GetCategoryByIdRequest $request) {
    $this->send_getCategoryById($operationHandle, $request);

    return $this->recv_getCategoryById();
  }

  public function send_getCategoryById(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\GetCategoryByIdRequest $request) {
    $args = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getCategoryById_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'getCategoryById', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('getCategoryById', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_getCategoryById() {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) {
      $result = thrift_protocol_read_binary($this->input_, '\Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getCategoryById_result', $this->input_->isStrictRead());
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

  public function getCategoryBySlug(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\GetCategoryBySlugRequest $request) {
    $this->send_getCategoryBySlug($operationHandle, $request);

    return $this->recv_getCategoryBySlug();
  }

  public function send_getCategoryBySlug(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\GetCategoryBySlugRequest $request) {
    $args = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getCategoryBySlug_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'getCategoryBySlug', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('getCategoryBySlug', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_getCategoryBySlug() {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) {
      $result = thrift_protocol_read_binary($this->input_, '\Miczone\Thrift\Catalog\MiczoneCatalogStorageService_getCategoryBySlug_result', $this->input_->isStrictRead());
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

  public function multiGetCategoryByIdList(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\MultiGetCategoryByIdListRequest $request) {
    $this->send_multiGetCategoryByIdList($operationHandle, $request);

    return $this->recv_multiGetCategoryByIdList();
  }

  public function send_multiGetCategoryByIdList(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\MultiGetCategoryByIdListRequest $request) {
    $args = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_multiGetCategoryByIdList_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'multiGetCategoryByIdList', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('multiGetCategoryByIdList', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_multiGetCategoryByIdList() {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) {
      $result = thrift_protocol_read_binary($this->input_, '\Miczone\Thrift\Catalog\MiczoneCatalogStorageService_multiGetCategoryByIdList_result', $this->input_->isStrictRead());
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

  public function multiGetCategoryBySlugList(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\MultiGetCategoryBySlugListRequest $request) {
    $this->send_multiGetCategoryBySlugList($operationHandle, $request);

    return $this->recv_multiGetCategoryBySlugList();
  }

  public function send_multiGetCategoryBySlugList(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\MultiGetCategoryBySlugListRequest $request) {
    $args = new \Miczone\Thrift\Catalog\MiczoneCatalogStorageService_multiGetCategoryBySlugList_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'multiGetCategoryBySlugList', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('multiGetCategoryBySlugList', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_multiGetCategoryBySlugList() {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) {
      $result = thrift_protocol_read_binary($this->input_, '\Miczone\Thrift\Catalog\MiczoneCatalogStorageService_multiGetCategoryBySlugList_result', $this->input_->isStrictRead());
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

}

// HELPER FUNCTIONS AND STRUCTURES

class MiczoneCatalogStorageService_ping_args {
  static $_TSPEC;

  public function __construct() {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
      );
    }
  }

  public function getName() {
    return 'MiczoneCatalogStorageService_ping_args';
  }

  public function read($input) {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true) {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid) {
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();

    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('MiczoneCatalogStorageService_ping_args');
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class MiczoneCatalogStorageService_ping_result {
  static $_TSPEC;

  /**
   * @var int
   */
  public $success = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::I32,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
    }
  }

  public function getName() {
    return 'MiczoneCatalogStorageService_ping_result';
  }

  public function read($input) {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true) {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid) {
        case 0:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->success);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();

    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('MiczoneCatalogStorageService_ping_result');
    if ($this->success !== null) {
      $xfer += $output->writeFieldBegin('success', TType::I32, 0);
      $xfer += $output->writeI32($this->success);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class MiczoneCatalogStorageService_getProductById_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\Catalog\GetProductByIdRequest
   */
  public $request = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'operationHandle',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Common\OperationHandle',
        ),
        2 => array(
          'var' => 'request',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\GetProductByIdRequest',
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['operationHandle'])) {
        $this->operationHandle = $vals['operationHandle'];
      }
      if (isset($vals['request'])) {
        $this->request = $vals['request'];
      }
    }
  }

  public function getName() {
    return 'MiczoneCatalogStorageService_getProductById_args';
  }

  public function read($input) {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true) {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid) {
        case 1:
          if ($ftype == TType::STRUCT) {
            $this->operationHandle = new \Miczone\Thrift\Common\OperationHandle();
            $xfer += $this->operationHandle->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRUCT) {
            $this->request = new \Miczone\Thrift\Catalog\GetProductByIdRequest();
            $xfer += $this->request->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();

    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('MiczoneCatalogStorageService_getProductById_args');
    if ($this->operationHandle !== null) {
      if (!is_object($this->operationHandle)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('operationHandle', TType::STRUCT, 1);
      $xfer += $this->operationHandle->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->request !== null) {
      if (!is_object($this->request)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('request', TType::STRUCT, 2);
      $xfer += $this->request->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class MiczoneCatalogStorageService_getProductById_result {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Catalog\GetProductByIdResponse
   */
  public $success = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\GetProductByIdResponse',
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
    }
  }

  public function getName() {
    return 'MiczoneCatalogStorageService_getProductById_result';
  }

  public function read($input) {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true) {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid) {
        case 0:
          if ($ftype == TType::STRUCT) {
            $this->success = new \Miczone\Thrift\Catalog\GetProductByIdResponse();
            $xfer += $this->success->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();

    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('MiczoneCatalogStorageService_getProductById_result');
    if ($this->success !== null) {
      if (!is_object($this->success)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('success', TType::STRUCT, 0);
      $xfer += $this->success->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class MiczoneCatalogStorageService_getProductBySku_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\Catalog\GetProductBySkuRequest
   */
  public $request = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'operationHandle',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Common\OperationHandle',
        ),
        2 => array(
          'var' => 'request',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\GetProductBySkuRequest',
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['operationHandle'])) {
        $this->operationHandle = $vals['operationHandle'];
      }
      if (isset($vals['request'])) {
        $this->request = $vals['request'];
      }
    }
  }

  public function getName() {
    return 'MiczoneCatalogStorageService_getProductBySku_args';
  }

  public function read($input) {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true) {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid) {
        case 1:
          if ($ftype == TType::STRUCT) {
            $this->operationHandle = new \Miczone\Thrift\Common\OperationHandle();
            $xfer += $this->operationHandle->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRUCT) {
            $this->request = new \Miczone\Thrift\Catalog\GetProductBySkuRequest();
            $xfer += $this->request->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();

    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('MiczoneCatalogStorageService_getProductBySku_args');
    if ($this->operationHandle !== null) {
      if (!is_object($this->operationHandle)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('operationHandle', TType::STRUCT, 1);
      $xfer += $this->operationHandle->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->request !== null) {
      if (!is_object($this->request)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('request', TType::STRUCT, 2);
      $xfer += $this->request->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class MiczoneCatalogStorageService_getProductBySku_result {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Catalog\GetProductBySkuResponse
   */
  public $success = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\GetProductBySkuResponse',
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
    }
  }

  public function getName() {
    return 'MiczoneCatalogStorageService_getProductBySku_result';
  }

  public function read($input) {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true) {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid) {
        case 0:
          if ($ftype == TType::STRUCT) {
            $this->success = new \Miczone\Thrift\Catalog\GetProductBySkuResponse();
            $xfer += $this->success->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();

    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('MiczoneCatalogStorageService_getProductBySku_result');
    if ($this->success !== null) {
      if (!is_object($this->success)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('success', TType::STRUCT, 0);
      $xfer += $this->success->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class MiczoneCatalogStorageService_multiGetProductByIdList_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\Catalog\MultiGetProductByIdListRequest
   */
  public $request = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'operationHandle',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Common\OperationHandle',
        ),
        2 => array(
          'var' => 'request',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\MultiGetProductByIdListRequest',
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['operationHandle'])) {
        $this->operationHandle = $vals['operationHandle'];
      }
      if (isset($vals['request'])) {
        $this->request = $vals['request'];
      }
    }
  }

  public function getName() {
    return 'MiczoneCatalogStorageService_multiGetProductByIdList_args';
  }

  public function read($input) {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true) {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid) {
        case 1:
          if ($ftype == TType::STRUCT) {
            $this->operationHandle = new \Miczone\Thrift\Common\OperationHandle();
            $xfer += $this->operationHandle->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRUCT) {
            $this->request = new \Miczone\Thrift\Catalog\MultiGetProductByIdListRequest();
            $xfer += $this->request->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();

    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('MiczoneCatalogStorageService_multiGetProductByIdList_args');
    if ($this->operationHandle !== null) {
      if (!is_object($this->operationHandle)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('operationHandle', TType::STRUCT, 1);
      $xfer += $this->operationHandle->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->request !== null) {
      if (!is_object($this->request)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('request', TType::STRUCT, 2);
      $xfer += $this->request->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class MiczoneCatalogStorageService_multiGetProductByIdList_result {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Catalog\MultiGetProductByIdListResponse
   */
  public $success = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\MultiGetProductByIdListResponse',
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
    }
  }

  public function getName() {
    return 'MiczoneCatalogStorageService_multiGetProductByIdList_result';
  }

  public function read($input) {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true) {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid) {
        case 0:
          if ($ftype == TType::STRUCT) {
            $this->success = new \Miczone\Thrift\Catalog\MultiGetProductByIdListResponse();
            $xfer += $this->success->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();

    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('MiczoneCatalogStorageService_multiGetProductByIdList_result');
    if ($this->success !== null) {
      if (!is_object($this->success)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('success', TType::STRUCT, 0);
      $xfer += $this->success->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class MiczoneCatalogStorageService_multiGetProductBySkuList_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\Catalog\MultiGetProductBySkuListRequest
   */
  public $request = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'operationHandle',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Common\OperationHandle',
        ),
        2 => array(
          'var' => 'request',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\MultiGetProductBySkuListRequest',
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['operationHandle'])) {
        $this->operationHandle = $vals['operationHandle'];
      }
      if (isset($vals['request'])) {
        $this->request = $vals['request'];
      }
    }
  }

  public function getName() {
    return 'MiczoneCatalogStorageService_multiGetProductBySkuList_args';
  }

  public function read($input) {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true) {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid) {
        case 1:
          if ($ftype == TType::STRUCT) {
            $this->operationHandle = new \Miczone\Thrift\Common\OperationHandle();
            $xfer += $this->operationHandle->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRUCT) {
            $this->request = new \Miczone\Thrift\Catalog\MultiGetProductBySkuListRequest();
            $xfer += $this->request->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();

    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('MiczoneCatalogStorageService_multiGetProductBySkuList_args');
    if ($this->operationHandle !== null) {
      if (!is_object($this->operationHandle)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('operationHandle', TType::STRUCT, 1);
      $xfer += $this->operationHandle->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->request !== null) {
      if (!is_object($this->request)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('request', TType::STRUCT, 2);
      $xfer += $this->request->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class MiczoneCatalogStorageService_multiGetProductBySkuList_result {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Catalog\MultiGetProductBySkuListResponse
   */
  public $success = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\MultiGetProductBySkuListResponse',
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
    }
  }

  public function getName() {
    return 'MiczoneCatalogStorageService_multiGetProductBySkuList_result';
  }

  public function read($input) {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true) {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid) {
        case 0:
          if ($ftype == TType::STRUCT) {
            $this->success = new \Miczone\Thrift\Catalog\MultiGetProductBySkuListResponse();
            $xfer += $this->success->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();

    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('MiczoneCatalogStorageService_multiGetProductBySkuList_result');
    if ($this->success !== null) {
      if (!is_object($this->success)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('success', TType::STRUCT, 0);
      $xfer += $this->success->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class MiczoneCatalogStorageService_getCategoryById_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\Catalog\GetCategoryByIdRequest
   */
  public $request = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'operationHandle',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Common\OperationHandle',
        ),
        2 => array(
          'var' => 'request',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\GetCategoryByIdRequest',
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['operationHandle'])) {
        $this->operationHandle = $vals['operationHandle'];
      }
      if (isset($vals['request'])) {
        $this->request = $vals['request'];
      }
    }
  }

  public function getName() {
    return 'MiczoneCatalogStorageService_getCategoryById_args';
  }

  public function read($input) {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true) {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid) {
        case 1:
          if ($ftype == TType::STRUCT) {
            $this->operationHandle = new \Miczone\Thrift\Common\OperationHandle();
            $xfer += $this->operationHandle->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRUCT) {
            $this->request = new \Miczone\Thrift\Catalog\GetCategoryByIdRequest();
            $xfer += $this->request->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();

    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('MiczoneCatalogStorageService_getCategoryById_args');
    if ($this->operationHandle !== null) {
      if (!is_object($this->operationHandle)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('operationHandle', TType::STRUCT, 1);
      $xfer += $this->operationHandle->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->request !== null) {
      if (!is_object($this->request)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('request', TType::STRUCT, 2);
      $xfer += $this->request->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class MiczoneCatalogStorageService_getCategoryById_result {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Catalog\GetCategoryByIdResponse
   */
  public $success = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\GetCategoryByIdResponse',
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
    }
  }

  public function getName() {
    return 'MiczoneCatalogStorageService_getCategoryById_result';
  }

  public function read($input) {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true) {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid) {
        case 0:
          if ($ftype == TType::STRUCT) {
            $this->success = new \Miczone\Thrift\Catalog\GetCategoryByIdResponse();
            $xfer += $this->success->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();

    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('MiczoneCatalogStorageService_getCategoryById_result');
    if ($this->success !== null) {
      if (!is_object($this->success)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('success', TType::STRUCT, 0);
      $xfer += $this->success->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class MiczoneCatalogStorageService_getCategoryBySlug_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\Catalog\GetCategoryBySlugRequest
   */
  public $request = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'operationHandle',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Common\OperationHandle',
        ),
        2 => array(
          'var' => 'request',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\GetCategoryBySlugRequest',
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['operationHandle'])) {
        $this->operationHandle = $vals['operationHandle'];
      }
      if (isset($vals['request'])) {
        $this->request = $vals['request'];
      }
    }
  }

  public function getName() {
    return 'MiczoneCatalogStorageService_getCategoryBySlug_args';
  }

  public function read($input) {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true) {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid) {
        case 1:
          if ($ftype == TType::STRUCT) {
            $this->operationHandle = new \Miczone\Thrift\Common\OperationHandle();
            $xfer += $this->operationHandle->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRUCT) {
            $this->request = new \Miczone\Thrift\Catalog\GetCategoryBySlugRequest();
            $xfer += $this->request->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();

    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('MiczoneCatalogStorageService_getCategoryBySlug_args');
    if ($this->operationHandle !== null) {
      if (!is_object($this->operationHandle)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('operationHandle', TType::STRUCT, 1);
      $xfer += $this->operationHandle->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->request !== null) {
      if (!is_object($this->request)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('request', TType::STRUCT, 2);
      $xfer += $this->request->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class MiczoneCatalogStorageService_getCategoryBySlug_result {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Catalog\GetCategoryBySlugResponse
   */
  public $success = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\GetCategoryBySlugResponse',
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
    }
  }

  public function getName() {
    return 'MiczoneCatalogStorageService_getCategoryBySlug_result';
  }

  public function read($input) {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true) {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid) {
        case 0:
          if ($ftype == TType::STRUCT) {
            $this->success = new \Miczone\Thrift\Catalog\GetCategoryBySlugResponse();
            $xfer += $this->success->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();

    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('MiczoneCatalogStorageService_getCategoryBySlug_result');
    if ($this->success !== null) {
      if (!is_object($this->success)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('success', TType::STRUCT, 0);
      $xfer += $this->success->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class MiczoneCatalogStorageService_multiGetCategoryByIdList_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\Catalog\MultiGetCategoryByIdListRequest
   */
  public $request = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'operationHandle',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Common\OperationHandle',
        ),
        2 => array(
          'var' => 'request',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\MultiGetCategoryByIdListRequest',
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['operationHandle'])) {
        $this->operationHandle = $vals['operationHandle'];
      }
      if (isset($vals['request'])) {
        $this->request = $vals['request'];
      }
    }
  }

  public function getName() {
    return 'MiczoneCatalogStorageService_multiGetCategoryByIdList_args';
  }

  public function read($input) {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true) {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid) {
        case 1:
          if ($ftype == TType::STRUCT) {
            $this->operationHandle = new \Miczone\Thrift\Common\OperationHandle();
            $xfer += $this->operationHandle->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRUCT) {
            $this->request = new \Miczone\Thrift\Catalog\MultiGetCategoryByIdListRequest();
            $xfer += $this->request->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();

    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('MiczoneCatalogStorageService_multiGetCategoryByIdList_args');
    if ($this->operationHandle !== null) {
      if (!is_object($this->operationHandle)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('operationHandle', TType::STRUCT, 1);
      $xfer += $this->operationHandle->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->request !== null) {
      if (!is_object($this->request)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('request', TType::STRUCT, 2);
      $xfer += $this->request->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class MiczoneCatalogStorageService_multiGetCategoryByIdList_result {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Catalog\MultiGetCategoryByIdListResponse
   */
  public $success = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\MultiGetCategoryByIdListResponse',
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
    }
  }

  public function getName() {
    return 'MiczoneCatalogStorageService_multiGetCategoryByIdList_result';
  }

  public function read($input) {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true) {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid) {
        case 0:
          if ($ftype == TType::STRUCT) {
            $this->success = new \Miczone\Thrift\Catalog\MultiGetCategoryByIdListResponse();
            $xfer += $this->success->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();

    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('MiczoneCatalogStorageService_multiGetCategoryByIdList_result');
    if ($this->success !== null) {
      if (!is_object($this->success)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('success', TType::STRUCT, 0);
      $xfer += $this->success->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class MiczoneCatalogStorageService_multiGetCategoryBySlugList_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\Catalog\MultiGetCategoryBySlugListRequest
   */
  public $request = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'operationHandle',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Common\OperationHandle',
        ),
        2 => array(
          'var' => 'request',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\MultiGetCategoryBySlugListRequest',
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['operationHandle'])) {
        $this->operationHandle = $vals['operationHandle'];
      }
      if (isset($vals['request'])) {
        $this->request = $vals['request'];
      }
    }
  }

  public function getName() {
    return 'MiczoneCatalogStorageService_multiGetCategoryBySlugList_args';
  }

  public function read($input) {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true) {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid) {
        case 1:
          if ($ftype == TType::STRUCT) {
            $this->operationHandle = new \Miczone\Thrift\Common\OperationHandle();
            $xfer += $this->operationHandle->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRUCT) {
            $this->request = new \Miczone\Thrift\Catalog\MultiGetCategoryBySlugListRequest();
            $xfer += $this->request->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();

    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('MiczoneCatalogStorageService_multiGetCategoryBySlugList_args');
    if ($this->operationHandle !== null) {
      if (!is_object($this->operationHandle)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('operationHandle', TType::STRUCT, 1);
      $xfer += $this->operationHandle->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->request !== null) {
      if (!is_object($this->request)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('request', TType::STRUCT, 2);
      $xfer += $this->request->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class MiczoneCatalogStorageService_multiGetCategoryBySlugList_result {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Catalog\MultiGetCategoryBySlugListResponse
   */
  public $success = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\MultiGetCategoryBySlugListResponse',
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
    }
  }

  public function getName() {
    return 'MiczoneCatalogStorageService_multiGetCategoryBySlugList_result';
  }

  public function read($input) {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true) {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid) {
        case 0:
          if ($ftype == TType::STRUCT) {
            $this->success = new \Miczone\Thrift\Catalog\MultiGetCategoryBySlugListResponse();
            $xfer += $this->success->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();

    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('MiczoneCatalogStorageService_multiGetCategoryBySlugList_result');
    if ($this->success !== null) {
      if (!is_object($this->success)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('success', TType::STRUCT, 0);
      $xfer += $this->success->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

<?php
namespace Miczone\Thrift\Catalog;

use Thrift\Exception\TApplicationException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Type\TMessageType;
use Thrift\Type\TType;

interface MiczoneCatalogGatewayServiceIf {
  /**
   * @return int
   */
  public function ping();
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\Catalog\SearchProductRequest $request
   * @return \Miczone\Thrift\Catalog\SearchProductResponse
   */
  public function searchProduct(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\SearchProductRequest $request);
}

class MiczoneCatalogGatewayServiceClient implements \Miczone\Thrift\Catalog\MiczoneCatalogGatewayServiceIf {
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
    $args = new \Miczone\Thrift\Catalog\MiczoneCatalogGatewayService_ping_args();
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
      $result = thrift_protocol_read_binary($this->input_, '\Miczone\Thrift\Catalog\MiczoneCatalogGatewayService_ping_result', $this->input_->isStrictRead());
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
      $result = new \Miczone\Thrift\Catalog\MiczoneCatalogGatewayService_ping_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("ping failed: unknown result");
  }

  public function searchProduct(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\SearchProductRequest $request) {
    $this->send_searchProduct($operationHandle, $request);

    return $this->recv_searchProduct();
  }

  public function send_searchProduct(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Catalog\SearchProductRequest $request) {
    $args = new \Miczone\Thrift\Catalog\MiczoneCatalogGatewayService_searchProduct_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'searchProduct', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('searchProduct', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_searchProduct() {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) {
      $result = thrift_protocol_read_binary($this->input_, '\Miczone\Thrift\Catalog\MiczoneCatalogGatewayService_searchProduct_result', $this->input_->isStrictRead());
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
      $result = new \Miczone\Thrift\Catalog\MiczoneCatalogGatewayService_searchProduct_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("searchProduct failed: unknown result");
  }

}

// HELPER FUNCTIONS AND STRUCTURES

class MiczoneCatalogGatewayService_ping_args {
  static $_TSPEC;

  public function __construct() {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
      );
    }
  }

  public function getName() {
    return 'MiczoneCatalogGatewayService_ping_args';
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
    $xfer += $output->writeStructBegin('MiczoneCatalogGatewayService_ping_args');
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class MiczoneCatalogGatewayService_ping_result {
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
    return 'MiczoneCatalogGatewayService_ping_result';
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
    $xfer += $output->writeStructBegin('MiczoneCatalogGatewayService_ping_result');
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

class MiczoneCatalogGatewayService_searchProduct_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\Catalog\SearchProductRequest
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
          'class' => '\Miczone\Thrift\Catalog\SearchProductRequest',
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
    return 'MiczoneCatalogGatewayService_searchProduct_args';
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
            $this->request = new \Miczone\Thrift\Catalog\SearchProductRequest();
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
    $xfer += $output->writeStructBegin('MiczoneCatalogGatewayService_searchProduct_args');
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

class MiczoneCatalogGatewayService_searchProduct_result {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Catalog\SearchProductResponse
   */
  public $success = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\SearchProductResponse',
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
    return 'MiczoneCatalogGatewayService_searchProduct_result';
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
            $this->success = new \Miczone\Thrift\Catalog\SearchProductResponse();
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
    $xfer += $output->writeStructBegin('MiczoneCatalogGatewayService_searchProduct_result');
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

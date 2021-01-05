<?php
namespace Miczone\Thrift\Mail;

use Thrift\Exception\TApplicationException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Type\TMessageType;
use Thrift\Type\TType;

interface MiczoneMailServiceIf extends \Miczone\Thrift\Common\BaseServiceIf {
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\Mail\SendMailRequest $request
   * @return \Miczone\Thrift\Mail\SendMailResponse
   */
  public function send(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Mail\SendMailRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\Mail\SendMailRequest $request
   */
  public function ow_send(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Mail\SendMailRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\Mail\GetMailInfoRequest $request
   * @return \Miczone\Thrift\Mail\GetMailInfoResponse
   */
  public function getInfo(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Mail\GetMailInfoRequest $request);
}

class MiczoneMailServiceClient extends \Miczone\Thrift\Common\BaseServiceClient implements \Miczone\Thrift\Mail\MiczoneMailServiceIf {
  public function __construct($input, $output = null) {
    parent::__construct($input, $output);
  }

  public function send(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Mail\SendMailRequest $request) {
    $this->send_send($operationHandle, $request);

    return $this->recv_send();
  }

  public function send_send(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Mail\SendMailRequest $request) {
    $args = new \Miczone\Thrift\Mail\MiczoneMailService_send_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'send', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('send', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_send() {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) {
      $result = thrift_protocol_read_binary($this->input_, '\Miczone\Thrift\Mail\MiczoneMailService_send_result', $this->input_->isStrictRead());
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
      $result = new \Miczone\Thrift\Mail\MiczoneMailService_send_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("send failed: unknown result");
  }

  public function ow_send(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Mail\SendMailRequest $request) {
    $this->send_ow_send($operationHandle, $request);
  }

  public function send_ow_send(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Mail\SendMailRequest $request) {
    $args = new \Miczone\Thrift\Mail\MiczoneMailService_ow_send_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'ow_send', TMessageType::ONEWAY, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('ow_send', TMessageType::ONEWAY, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }
  public function getInfo(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Mail\GetMailInfoRequest $request) {
    $this->send_getInfo($operationHandle, $request);

    return $this->recv_getInfo();
  }

  public function send_getInfo(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Mail\GetMailInfoRequest $request) {
    $args = new \Miczone\Thrift\Mail\MiczoneMailService_getInfo_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'getInfo', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('getInfo', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_getInfo() {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) {
      $result = thrift_protocol_read_binary($this->input_, '\Miczone\Thrift\Mail\MiczoneMailService_getInfo_result', $this->input_->isStrictRead());
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
      $result = new \Miczone\Thrift\Mail\MiczoneMailService_getInfo_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("getInfo failed: unknown result");
  }

}

// HELPER FUNCTIONS AND STRUCTURES

class MiczoneMailService_send_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\Mail\SendMailRequest
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
          'class' => '\Miczone\Thrift\Mail\SendMailRequest',
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
    return 'MiczoneMailService_send_args';
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
            $this->request = new \Miczone\Thrift\Mail\SendMailRequest();
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
    $xfer += $output->writeStructBegin('MiczoneMailService_send_args');
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

class MiczoneMailService_send_result {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Mail\SendMailResponse
   */
  public $success = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Mail\SendMailResponse',
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
    return 'MiczoneMailService_send_result';
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
            $this->success = new \Miczone\Thrift\Mail\SendMailResponse();
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
    $xfer += $output->writeStructBegin('MiczoneMailService_send_result');
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

class MiczoneMailService_ow_send_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\Mail\SendMailRequest
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
          'class' => '\Miczone\Thrift\Mail\SendMailRequest',
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
    return 'MiczoneMailService_ow_send_args';
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
            $this->request = new \Miczone\Thrift\Mail\SendMailRequest();
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
    $xfer += $output->writeStructBegin('MiczoneMailService_ow_send_args');
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

class MiczoneMailService_getInfo_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\Mail\GetMailInfoRequest
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
          'class' => '\Miczone\Thrift\Mail\GetMailInfoRequest',
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
    return 'MiczoneMailService_getInfo_args';
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
            $this->request = new \Miczone\Thrift\Mail\GetMailInfoRequest();
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
    $xfer += $output->writeStructBegin('MiczoneMailService_getInfo_args');
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

class MiczoneMailService_getInfo_result {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Mail\GetMailInfoResponse
   */
  public $success = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Mail\GetMailInfoResponse',
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
    return 'MiczoneMailService_getInfo_result';
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
            $this->success = new \Miczone\Thrift\Mail\GetMailInfoResponse();
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
    $xfer += $output->writeStructBegin('MiczoneMailService_getInfo_result');
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

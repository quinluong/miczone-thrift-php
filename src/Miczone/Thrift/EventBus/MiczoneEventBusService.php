<?php
namespace Miczone\Thrift\EventBus;

use Thrift\Exception\TApplicationException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Type\TMessageType;
use Thrift\Type\TType;

interface MiczoneEventBusServiceIf {
  /**
   * @return int
   */
  public function ping();
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\EventBus\NotifyMessageBooleanRequest $request
   * @return \Miczone\Thrift\EventBus\NotifyMessageResponse
   */
  public function notifyBoolean(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageBooleanRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\EventBus\NotifyMessageByteRequest $request
   * @return \Miczone\Thrift\EventBus\NotifyMessageResponse
   */
  public function notifyByte(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageByteRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\EventBus\NotifyMessageShortRequest $request
   * @return \Miczone\Thrift\EventBus\NotifyMessageResponse
   */
  public function notifyShort(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageShortRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\EventBus\NotifyMessageIntegerRequest $request
   * @return \Miczone\Thrift\EventBus\NotifyMessageResponse
   */
  public function notifyInteger(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageIntegerRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\EventBus\NotifyMessageLongRequest $request
   * @return \Miczone\Thrift\EventBus\NotifyMessageResponse
   */
  public function notifyLong(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageLongRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\EventBus\NotifyMessageDoubleRequest $request
   * @return \Miczone\Thrift\EventBus\NotifyMessageResponse
   */
  public function notifyDouble(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageDoubleRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\EventBus\NotifyMessageStringRequest $request
   * @return \Miczone\Thrift\EventBus\NotifyMessageResponse
   */
  public function notifyString(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageStringRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\EventBus\NotifyMessageBooleanRequest $request
   */
  public function ow_notifyBoolean(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageBooleanRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\EventBus\NotifyMessageByteRequest $request
   */
  public function ow_notifyByte(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageByteRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\EventBus\NotifyMessageShortRequest $request
   */
  public function ow_notifyShort(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageShortRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\EventBus\NotifyMessageIntegerRequest $request
   */
  public function ow_notifyInteger(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageIntegerRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\EventBus\NotifyMessageLongRequest $request
   */
  public function ow_notifyLong(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageLongRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\EventBus\NotifyMessageDoubleRequest $request
   */
  public function ow_notifyDouble(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageDoubleRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\EventBus\NotifyMessageStringRequest $request
   */
  public function ow_notifyString(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageStringRequest $request);
}

class MiczoneEventBusServiceClient implements \Miczone\Thrift\EventBus\MiczoneEventBusServiceIf {
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
    $args = new \Miczone\Thrift\EventBus\MiczoneEventBusService_ping_args();
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
      $result = thrift_protocol_read_binary($this->input_, '\Miczone\Thrift\EventBus\MiczoneEventBusService_ping_result', $this->input_->isStrictRead());
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
      $result = new \Miczone\Thrift\EventBus\MiczoneEventBusService_ping_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("ping failed: unknown result");
  }

  public function notifyBoolean(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageBooleanRequest $request) {
    $this->send_notifyBoolean($operationHandle, $request);

    return $this->recv_notifyBoolean();
  }

  public function send_notifyBoolean(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageBooleanRequest $request) {
    $args = new \Miczone\Thrift\EventBus\MiczoneEventBusService_notifyBoolean_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'notifyBoolean', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('notifyBoolean', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_notifyBoolean() {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) {
      $result = thrift_protocol_read_binary($this->input_, '\Miczone\Thrift\EventBus\MiczoneEventBusService_notifyBoolean_result', $this->input_->isStrictRead());
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
      $result = new \Miczone\Thrift\EventBus\MiczoneEventBusService_notifyBoolean_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("notifyBoolean failed: unknown result");
  }

  public function notifyByte(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageByteRequest $request) {
    $this->send_notifyByte($operationHandle, $request);

    return $this->recv_notifyByte();
  }

  public function send_notifyByte(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageByteRequest $request) {
    $args = new \Miczone\Thrift\EventBus\MiczoneEventBusService_notifyByte_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'notifyByte', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('notifyByte', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_notifyByte() {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) {
      $result = thrift_protocol_read_binary($this->input_, '\Miczone\Thrift\EventBus\MiczoneEventBusService_notifyByte_result', $this->input_->isStrictRead());
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
      $result = new \Miczone\Thrift\EventBus\MiczoneEventBusService_notifyByte_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("notifyByte failed: unknown result");
  }

  public function notifyShort(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageShortRequest $request) {
    $this->send_notifyShort($operationHandle, $request);

    return $this->recv_notifyShort();
  }

  public function send_notifyShort(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageShortRequest $request) {
    $args = new \Miczone\Thrift\EventBus\MiczoneEventBusService_notifyShort_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'notifyShort', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('notifyShort', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_notifyShort() {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) {
      $result = thrift_protocol_read_binary($this->input_, '\Miczone\Thrift\EventBus\MiczoneEventBusService_notifyShort_result', $this->input_->isStrictRead());
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
      $result = new \Miczone\Thrift\EventBus\MiczoneEventBusService_notifyShort_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("notifyShort failed: unknown result");
  }

  public function notifyInteger(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageIntegerRequest $request) {
    $this->send_notifyInteger($operationHandle, $request);

    return $this->recv_notifyInteger();
  }

  public function send_notifyInteger(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageIntegerRequest $request) {
    $args = new \Miczone\Thrift\EventBus\MiczoneEventBusService_notifyInteger_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'notifyInteger', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('notifyInteger', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_notifyInteger() {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) {
      $result = thrift_protocol_read_binary($this->input_, '\Miczone\Thrift\EventBus\MiczoneEventBusService_notifyInteger_result', $this->input_->isStrictRead());
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
      $result = new \Miczone\Thrift\EventBus\MiczoneEventBusService_notifyInteger_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("notifyInteger failed: unknown result");
  }

  public function notifyLong(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageLongRequest $request) {
    $this->send_notifyLong($operationHandle, $request);

    return $this->recv_notifyLong();
  }

  public function send_notifyLong(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageLongRequest $request) {
    $args = new \Miczone\Thrift\EventBus\MiczoneEventBusService_notifyLong_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'notifyLong', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('notifyLong', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_notifyLong() {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) {
      $result = thrift_protocol_read_binary($this->input_, '\Miczone\Thrift\EventBus\MiczoneEventBusService_notifyLong_result', $this->input_->isStrictRead());
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
      $result = new \Miczone\Thrift\EventBus\MiczoneEventBusService_notifyLong_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("notifyLong failed: unknown result");
  }

  public function notifyDouble(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageDoubleRequest $request) {
    $this->send_notifyDouble($operationHandle, $request);

    return $this->recv_notifyDouble();
  }

  public function send_notifyDouble(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageDoubleRequest $request) {
    $args = new \Miczone\Thrift\EventBus\MiczoneEventBusService_notifyDouble_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'notifyDouble', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('notifyDouble', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_notifyDouble() {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) {
      $result = thrift_protocol_read_binary($this->input_, '\Miczone\Thrift\EventBus\MiczoneEventBusService_notifyDouble_result', $this->input_->isStrictRead());
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
      $result = new \Miczone\Thrift\EventBus\MiczoneEventBusService_notifyDouble_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("notifyDouble failed: unknown result");
  }

  public function notifyString(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageStringRequest $request) {
    $this->send_notifyString($operationHandle, $request);

    return $this->recv_notifyString();
  }

  public function send_notifyString(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageStringRequest $request) {
    $args = new \Miczone\Thrift\EventBus\MiczoneEventBusService_notifyString_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'notifyString', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('notifyString', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_notifyString() {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) {
      $result = thrift_protocol_read_binary($this->input_, '\Miczone\Thrift\EventBus\MiczoneEventBusService_notifyString_result', $this->input_->isStrictRead());
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
      $result = new \Miczone\Thrift\EventBus\MiczoneEventBusService_notifyString_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("notifyString failed: unknown result");
  }

  public function ow_notifyBoolean(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageBooleanRequest $request) {
    $this->send_ow_notifyBoolean($operationHandle, $request);
  }

  public function send_ow_notifyBoolean(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageBooleanRequest $request) {
    $args = new \Miczone\Thrift\EventBus\MiczoneEventBusService_ow_notifyBoolean_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'ow_notifyBoolean', TMessageType::ONEWAY, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('ow_notifyBoolean', TMessageType::ONEWAY, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }
  public function ow_notifyByte(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageByteRequest $request) {
    $this->send_ow_notifyByte($operationHandle, $request);
  }

  public function send_ow_notifyByte(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageByteRequest $request) {
    $args = new \Miczone\Thrift\EventBus\MiczoneEventBusService_ow_notifyByte_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'ow_notifyByte', TMessageType::ONEWAY, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('ow_notifyByte', TMessageType::ONEWAY, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }
  public function ow_notifyShort(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageShortRequest $request) {
    $this->send_ow_notifyShort($operationHandle, $request);
  }

  public function send_ow_notifyShort(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageShortRequest $request) {
    $args = new \Miczone\Thrift\EventBus\MiczoneEventBusService_ow_notifyShort_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'ow_notifyShort', TMessageType::ONEWAY, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('ow_notifyShort', TMessageType::ONEWAY, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }
  public function ow_notifyInteger(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageIntegerRequest $request) {
    $this->send_ow_notifyInteger($operationHandle, $request);
  }

  public function send_ow_notifyInteger(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageIntegerRequest $request) {
    $args = new \Miczone\Thrift\EventBus\MiczoneEventBusService_ow_notifyInteger_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'ow_notifyInteger', TMessageType::ONEWAY, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('ow_notifyInteger', TMessageType::ONEWAY, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }
  public function ow_notifyLong(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageLongRequest $request) {
    $this->send_ow_notifyLong($operationHandle, $request);
  }

  public function send_ow_notifyLong(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageLongRequest $request) {
    $args = new \Miczone\Thrift\EventBus\MiczoneEventBusService_ow_notifyLong_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'ow_notifyLong', TMessageType::ONEWAY, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('ow_notifyLong', TMessageType::ONEWAY, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }
  public function ow_notifyDouble(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageDoubleRequest $request) {
    $this->send_ow_notifyDouble($operationHandle, $request);
  }

  public function send_ow_notifyDouble(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageDoubleRequest $request) {
    $args = new \Miczone\Thrift\EventBus\MiczoneEventBusService_ow_notifyDouble_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'ow_notifyDouble', TMessageType::ONEWAY, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('ow_notifyDouble', TMessageType::ONEWAY, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }
  public function ow_notifyString(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageStringRequest $request) {
    $this->send_ow_notifyString($operationHandle, $request);
  }

  public function send_ow_notifyString(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\EventBus\NotifyMessageStringRequest $request) {
    $args = new \Miczone\Thrift\EventBus\MiczoneEventBusService_ow_notifyString_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'ow_notifyString', TMessageType::ONEWAY, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('ow_notifyString', TMessageType::ONEWAY, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }
}

// HELPER FUNCTIONS AND STRUCTURES

class MiczoneEventBusService_ping_args {
  static $_TSPEC;

  public function __construct() {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
      );
    }
  }

  public function getName() {
    return 'MiczoneEventBusService_ping_args';
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
    $xfer += $output->writeStructBegin('MiczoneEventBusService_ping_args');
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class MiczoneEventBusService_ping_result {
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
    return 'MiczoneEventBusService_ping_result';
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
    $xfer += $output->writeStructBegin('MiczoneEventBusService_ping_result');
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

class MiczoneEventBusService_notifyBoolean_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\EventBus\NotifyMessageBooleanRequest
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
          'class' => '\Miczone\Thrift\EventBus\NotifyMessageBooleanRequest',
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
    return 'MiczoneEventBusService_notifyBoolean_args';
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
            $this->request = new \Miczone\Thrift\EventBus\NotifyMessageBooleanRequest();
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
    $xfer += $output->writeStructBegin('MiczoneEventBusService_notifyBoolean_args');
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

class MiczoneEventBusService_notifyBoolean_result {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\EventBus\NotifyMessageResponse
   */
  public $success = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\EventBus\NotifyMessageResponse',
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
    return 'MiczoneEventBusService_notifyBoolean_result';
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
            $this->success = new \Miczone\Thrift\EventBus\NotifyMessageResponse();
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
    $xfer += $output->writeStructBegin('MiczoneEventBusService_notifyBoolean_result');
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

class MiczoneEventBusService_notifyByte_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\EventBus\NotifyMessageByteRequest
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
          'class' => '\Miczone\Thrift\EventBus\NotifyMessageByteRequest',
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
    return 'MiczoneEventBusService_notifyByte_args';
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
            $this->request = new \Miczone\Thrift\EventBus\NotifyMessageByteRequest();
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
    $xfer += $output->writeStructBegin('MiczoneEventBusService_notifyByte_args');
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

class MiczoneEventBusService_notifyByte_result {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\EventBus\NotifyMessageResponse
   */
  public $success = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\EventBus\NotifyMessageResponse',
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
    return 'MiczoneEventBusService_notifyByte_result';
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
            $this->success = new \Miczone\Thrift\EventBus\NotifyMessageResponse();
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
    $xfer += $output->writeStructBegin('MiczoneEventBusService_notifyByte_result');
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

class MiczoneEventBusService_notifyShort_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\EventBus\NotifyMessageShortRequest
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
          'class' => '\Miczone\Thrift\EventBus\NotifyMessageShortRequest',
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
    return 'MiczoneEventBusService_notifyShort_args';
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
            $this->request = new \Miczone\Thrift\EventBus\NotifyMessageShortRequest();
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
    $xfer += $output->writeStructBegin('MiczoneEventBusService_notifyShort_args');
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

class MiczoneEventBusService_notifyShort_result {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\EventBus\NotifyMessageResponse
   */
  public $success = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\EventBus\NotifyMessageResponse',
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
    return 'MiczoneEventBusService_notifyShort_result';
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
            $this->success = new \Miczone\Thrift\EventBus\NotifyMessageResponse();
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
    $xfer += $output->writeStructBegin('MiczoneEventBusService_notifyShort_result');
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

class MiczoneEventBusService_notifyInteger_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\EventBus\NotifyMessageIntegerRequest
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
          'class' => '\Miczone\Thrift\EventBus\NotifyMessageIntegerRequest',
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
    return 'MiczoneEventBusService_notifyInteger_args';
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
            $this->request = new \Miczone\Thrift\EventBus\NotifyMessageIntegerRequest();
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
    $xfer += $output->writeStructBegin('MiczoneEventBusService_notifyInteger_args');
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

class MiczoneEventBusService_notifyInteger_result {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\EventBus\NotifyMessageResponse
   */
  public $success = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\EventBus\NotifyMessageResponse',
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
    return 'MiczoneEventBusService_notifyInteger_result';
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
            $this->success = new \Miczone\Thrift\EventBus\NotifyMessageResponse();
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
    $xfer += $output->writeStructBegin('MiczoneEventBusService_notifyInteger_result');
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

class MiczoneEventBusService_notifyLong_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\EventBus\NotifyMessageLongRequest
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
          'class' => '\Miczone\Thrift\EventBus\NotifyMessageLongRequest',
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
    return 'MiczoneEventBusService_notifyLong_args';
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
            $this->request = new \Miczone\Thrift\EventBus\NotifyMessageLongRequest();
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
    $xfer += $output->writeStructBegin('MiczoneEventBusService_notifyLong_args');
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

class MiczoneEventBusService_notifyLong_result {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\EventBus\NotifyMessageResponse
   */
  public $success = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\EventBus\NotifyMessageResponse',
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
    return 'MiczoneEventBusService_notifyLong_result';
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
            $this->success = new \Miczone\Thrift\EventBus\NotifyMessageResponse();
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
    $xfer += $output->writeStructBegin('MiczoneEventBusService_notifyLong_result');
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

class MiczoneEventBusService_notifyDouble_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\EventBus\NotifyMessageDoubleRequest
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
          'class' => '\Miczone\Thrift\EventBus\NotifyMessageDoubleRequest',
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
    return 'MiczoneEventBusService_notifyDouble_args';
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
            $this->request = new \Miczone\Thrift\EventBus\NotifyMessageDoubleRequest();
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
    $xfer += $output->writeStructBegin('MiczoneEventBusService_notifyDouble_args');
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

class MiczoneEventBusService_notifyDouble_result {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\EventBus\NotifyMessageResponse
   */
  public $success = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\EventBus\NotifyMessageResponse',
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
    return 'MiczoneEventBusService_notifyDouble_result';
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
            $this->success = new \Miczone\Thrift\EventBus\NotifyMessageResponse();
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
    $xfer += $output->writeStructBegin('MiczoneEventBusService_notifyDouble_result');
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

class MiczoneEventBusService_notifyString_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\EventBus\NotifyMessageStringRequest
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
          'class' => '\Miczone\Thrift\EventBus\NotifyMessageStringRequest',
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
    return 'MiczoneEventBusService_notifyString_args';
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
            $this->request = new \Miczone\Thrift\EventBus\NotifyMessageStringRequest();
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
    $xfer += $output->writeStructBegin('MiczoneEventBusService_notifyString_args');
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

class MiczoneEventBusService_notifyString_result {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\EventBus\NotifyMessageResponse
   */
  public $success = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\EventBus\NotifyMessageResponse',
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
    return 'MiczoneEventBusService_notifyString_result';
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
            $this->success = new \Miczone\Thrift\EventBus\NotifyMessageResponse();
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
    $xfer += $output->writeStructBegin('MiczoneEventBusService_notifyString_result');
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

class MiczoneEventBusService_ow_notifyBoolean_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\EventBus\NotifyMessageBooleanRequest
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
          'class' => '\Miczone\Thrift\EventBus\NotifyMessageBooleanRequest',
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
    return 'MiczoneEventBusService_ow_notifyBoolean_args';
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
            $this->request = new \Miczone\Thrift\EventBus\NotifyMessageBooleanRequest();
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
    $xfer += $output->writeStructBegin('MiczoneEventBusService_ow_notifyBoolean_args');
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

class MiczoneEventBusService_ow_notifyByte_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\EventBus\NotifyMessageByteRequest
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
          'class' => '\Miczone\Thrift\EventBus\NotifyMessageByteRequest',
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
    return 'MiczoneEventBusService_ow_notifyByte_args';
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
            $this->request = new \Miczone\Thrift\EventBus\NotifyMessageByteRequest();
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
    $xfer += $output->writeStructBegin('MiczoneEventBusService_ow_notifyByte_args');
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

class MiczoneEventBusService_ow_notifyShort_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\EventBus\NotifyMessageShortRequest
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
          'class' => '\Miczone\Thrift\EventBus\NotifyMessageShortRequest',
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
    return 'MiczoneEventBusService_ow_notifyShort_args';
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
            $this->request = new \Miczone\Thrift\EventBus\NotifyMessageShortRequest();
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
    $xfer += $output->writeStructBegin('MiczoneEventBusService_ow_notifyShort_args');
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

class MiczoneEventBusService_ow_notifyInteger_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\EventBus\NotifyMessageIntegerRequest
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
          'class' => '\Miczone\Thrift\EventBus\NotifyMessageIntegerRequest',
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
    return 'MiczoneEventBusService_ow_notifyInteger_args';
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
            $this->request = new \Miczone\Thrift\EventBus\NotifyMessageIntegerRequest();
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
    $xfer += $output->writeStructBegin('MiczoneEventBusService_ow_notifyInteger_args');
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

class MiczoneEventBusService_ow_notifyLong_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\EventBus\NotifyMessageLongRequest
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
          'class' => '\Miczone\Thrift\EventBus\NotifyMessageLongRequest',
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
    return 'MiczoneEventBusService_ow_notifyLong_args';
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
            $this->request = new \Miczone\Thrift\EventBus\NotifyMessageLongRequest();
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
    $xfer += $output->writeStructBegin('MiczoneEventBusService_ow_notifyLong_args');
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

class MiczoneEventBusService_ow_notifyDouble_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\EventBus\NotifyMessageDoubleRequest
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
          'class' => '\Miczone\Thrift\EventBus\NotifyMessageDoubleRequest',
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
    return 'MiczoneEventBusService_ow_notifyDouble_args';
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
            $this->request = new \Miczone\Thrift\EventBus\NotifyMessageDoubleRequest();
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
    $xfer += $output->writeStructBegin('MiczoneEventBusService_ow_notifyDouble_args');
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

class MiczoneEventBusService_ow_notifyString_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\EventBus\NotifyMessageStringRequest
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
          'class' => '\Miczone\Thrift\EventBus\NotifyMessageStringRequest',
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
    return 'MiczoneEventBusService_ow_notifyString_args';
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
            $this->request = new \Miczone\Thrift\EventBus\NotifyMessageStringRequest();
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
    $xfer += $output->writeStructBegin('MiczoneEventBusService_ow_notifyString_args');
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

<?php
namespace Miczone\Thrift\Notification;

use Thrift\Exception\TApplicationException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Type\TMessageType;
use Thrift\Type\TType;

interface MiczoneNotificationServiceIf {
  /**
   * @return int
   */
  public function ping();
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\Notification\GetNotificationCounterRequest $request
   * @return \Miczone\Thrift\Notification\GetNotificationCounterResponse
   */
  public function getCounter(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\GetNotificationCounterRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\Notification\IncreaseNotificationCounterRequest $request
   * @return \Miczone\Thrift\Notification\IncreaseNotificationCounterResponse
   */
  public function increaseCounter(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\IncreaseNotificationCounterRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\Notification\IncreaseNotificationCounterRequest $request
   */
  public function ow_increaseCounter(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\IncreaseNotificationCounterRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\Notification\ResetNotificationCounterRequest $request
   * @return \Miczone\Thrift\Notification\ResetNotificationCounterResponse
   */
  public function resetCounter(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\ResetNotificationCounterRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\Notification\ResetNotificationCounterRequest $request
   */
  public function ow_resetCounter(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\ResetNotificationCounterRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\Notification\GetNotificationItemListRequest $request
   * @return \Miczone\Thrift\Notification\GetNotificationItemListResponse
   */
  public function getItemList(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\GetNotificationItemListRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\Notification\InsertNotificationItemRequest $request
   * @return \Miczone\Thrift\Notification\InsertNotificationItemResponse
   */
  public function insertItem(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\InsertNotificationItemRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\Notification\InsertNotificationItemRequest $request
   */
  public function ow_insertItem(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\InsertNotificationItemRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\Notification\UpdateNotificationItemRequest $request
   * @return \Miczone\Thrift\Notification\UpdateNotificationItemResponse
   */
  public function updateItem(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\UpdateNotificationItemRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\Notification\UpdateNotificationItemRequest $request
   */
  public function ow_updateItem(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\UpdateNotificationItemRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\Notification\UpdateReadNotificationItemRequest $request
   * @return \Miczone\Thrift\Notification\UpdateReadNotificationItemResponse
   */
  public function updateReadItem(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\UpdateReadNotificationItemRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\Notification\UpdateReadNotificationItemRequest $request
   */
  public function ow_updateReadItem(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\UpdateReadNotificationItemRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\Notification\DeleteNotificationItemRequest $request
   * @return \Miczone\Thrift\Notification\DeleteNotificationItemResponse
   */
  public function deleteItem(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\DeleteNotificationItemRequest $request);
  /**
   * @param \Miczone\Thrift\Common\OperationHandle $operationHandle
   * @param \Miczone\Thrift\Notification\DeleteNotificationItemRequest $request
   */
  public function ow_deleteItem(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\DeleteNotificationItemRequest $request);
}

class MiczoneNotificationServiceClient implements \Miczone\Thrift\Notification\MiczoneNotificationServiceIf {
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
    $args = new \Miczone\Thrift\Notification\MiczoneNotificationService_ping_args();
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
      $result = thrift_protocol_read_binary($this->input_, '\Miczone\Thrift\Notification\MiczoneNotificationService_ping_result', $this->input_->isStrictRead());
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
      $result = new \Miczone\Thrift\Notification\MiczoneNotificationService_ping_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("ping failed: unknown result");
  }

  public function getCounter(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\GetNotificationCounterRequest $request) {
    $this->send_getCounter($operationHandle, $request);

    return $this->recv_getCounter();
  }

  public function send_getCounter(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\GetNotificationCounterRequest $request) {
    $args = new \Miczone\Thrift\Notification\MiczoneNotificationService_getCounter_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'getCounter', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('getCounter', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_getCounter() {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) {
      $result = thrift_protocol_read_binary($this->input_, '\Miczone\Thrift\Notification\MiczoneNotificationService_getCounter_result', $this->input_->isStrictRead());
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
      $result = new \Miczone\Thrift\Notification\MiczoneNotificationService_getCounter_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("getCounter failed: unknown result");
  }

  public function increaseCounter(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\IncreaseNotificationCounterRequest $request) {
    $this->send_increaseCounter($operationHandle, $request);

    return $this->recv_increaseCounter();
  }

  public function send_increaseCounter(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\IncreaseNotificationCounterRequest $request) {
    $args = new \Miczone\Thrift\Notification\MiczoneNotificationService_increaseCounter_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'increaseCounter', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('increaseCounter', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_increaseCounter() {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) {
      $result = thrift_protocol_read_binary($this->input_, '\Miczone\Thrift\Notification\MiczoneNotificationService_increaseCounter_result', $this->input_->isStrictRead());
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
      $result = new \Miczone\Thrift\Notification\MiczoneNotificationService_increaseCounter_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("increaseCounter failed: unknown result");
  }

  public function ow_increaseCounter(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\IncreaseNotificationCounterRequest $request) {
    $this->send_ow_increaseCounter($operationHandle, $request);
  }

  public function send_ow_increaseCounter(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\IncreaseNotificationCounterRequest $request) {
    $args = new \Miczone\Thrift\Notification\MiczoneNotificationService_ow_increaseCounter_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'ow_increaseCounter', TMessageType::ONEWAY, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('ow_increaseCounter', TMessageType::ONEWAY, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }
  public function resetCounter(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\ResetNotificationCounterRequest $request) {
    $this->send_resetCounter($operationHandle, $request);

    return $this->recv_resetCounter();
  }

  public function send_resetCounter(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\ResetNotificationCounterRequest $request) {
    $args = new \Miczone\Thrift\Notification\MiczoneNotificationService_resetCounter_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'resetCounter', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('resetCounter', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_resetCounter() {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) {
      $result = thrift_protocol_read_binary($this->input_, '\Miczone\Thrift\Notification\MiczoneNotificationService_resetCounter_result', $this->input_->isStrictRead());
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
      $result = new \Miczone\Thrift\Notification\MiczoneNotificationService_resetCounter_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("resetCounter failed: unknown result");
  }

  public function ow_resetCounter(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\ResetNotificationCounterRequest $request) {
    $this->send_ow_resetCounter($operationHandle, $request);
  }

  public function send_ow_resetCounter(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\ResetNotificationCounterRequest $request) {
    $args = new \Miczone\Thrift\Notification\MiczoneNotificationService_ow_resetCounter_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'ow_resetCounter', TMessageType::ONEWAY, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('ow_resetCounter', TMessageType::ONEWAY, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }
  public function getItemList(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\GetNotificationItemListRequest $request) {
    $this->send_getItemList($operationHandle, $request);

    return $this->recv_getItemList();
  }

  public function send_getItemList(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\GetNotificationItemListRequest $request) {
    $args = new \Miczone\Thrift\Notification\MiczoneNotificationService_getItemList_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'getItemList', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('getItemList', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_getItemList() {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) {
      $result = thrift_protocol_read_binary($this->input_, '\Miczone\Thrift\Notification\MiczoneNotificationService_getItemList_result', $this->input_->isStrictRead());
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
      $result = new \Miczone\Thrift\Notification\MiczoneNotificationService_getItemList_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("getItemList failed: unknown result");
  }

  public function insertItem(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\InsertNotificationItemRequest $request) {
    $this->send_insertItem($operationHandle, $request);

    return $this->recv_insertItem();
  }

  public function send_insertItem(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\InsertNotificationItemRequest $request) {
    $args = new \Miczone\Thrift\Notification\MiczoneNotificationService_insertItem_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'insertItem', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('insertItem', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_insertItem() {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) {
      $result = thrift_protocol_read_binary($this->input_, '\Miczone\Thrift\Notification\MiczoneNotificationService_insertItem_result', $this->input_->isStrictRead());
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
      $result = new \Miczone\Thrift\Notification\MiczoneNotificationService_insertItem_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("insertItem failed: unknown result");
  }

  public function ow_insertItem(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\InsertNotificationItemRequest $request) {
    $this->send_ow_insertItem($operationHandle, $request);
  }

  public function send_ow_insertItem(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\InsertNotificationItemRequest $request) {
    $args = new \Miczone\Thrift\Notification\MiczoneNotificationService_ow_insertItem_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'ow_insertItem', TMessageType::ONEWAY, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('ow_insertItem', TMessageType::ONEWAY, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }
  public function updateItem(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\UpdateNotificationItemRequest $request) {
    $this->send_updateItem($operationHandle, $request);

    return $this->recv_updateItem();
  }

  public function send_updateItem(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\UpdateNotificationItemRequest $request) {
    $args = new \Miczone\Thrift\Notification\MiczoneNotificationService_updateItem_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'updateItem', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('updateItem', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_updateItem() {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) {
      $result = thrift_protocol_read_binary($this->input_, '\Miczone\Thrift\Notification\MiczoneNotificationService_updateItem_result', $this->input_->isStrictRead());
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
      $result = new \Miczone\Thrift\Notification\MiczoneNotificationService_updateItem_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("updateItem failed: unknown result");
  }

  public function ow_updateItem(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\UpdateNotificationItemRequest $request) {
    $this->send_ow_updateItem($operationHandle, $request);
  }

  public function send_ow_updateItem(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\UpdateNotificationItemRequest $request) {
    $args = new \Miczone\Thrift\Notification\MiczoneNotificationService_ow_updateItem_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'ow_updateItem', TMessageType::ONEWAY, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('ow_updateItem', TMessageType::ONEWAY, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }
  public function updateReadItem(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\UpdateReadNotificationItemRequest $request) {
    $this->send_updateReadItem($operationHandle, $request);

    return $this->recv_updateReadItem();
  }

  public function send_updateReadItem(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\UpdateReadNotificationItemRequest $request) {
    $args = new \Miczone\Thrift\Notification\MiczoneNotificationService_updateReadItem_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'updateReadItem', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('updateReadItem', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_updateReadItem() {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) {
      $result = thrift_protocol_read_binary($this->input_, '\Miczone\Thrift\Notification\MiczoneNotificationService_updateReadItem_result', $this->input_->isStrictRead());
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
      $result = new \Miczone\Thrift\Notification\MiczoneNotificationService_updateReadItem_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("updateReadItem failed: unknown result");
  }

  public function ow_updateReadItem(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\UpdateReadNotificationItemRequest $request) {
    $this->send_ow_updateReadItem($operationHandle, $request);
  }

  public function send_ow_updateReadItem(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\UpdateReadNotificationItemRequest $request) {
    $args = new \Miczone\Thrift\Notification\MiczoneNotificationService_ow_updateReadItem_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'ow_updateReadItem', TMessageType::ONEWAY, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('ow_updateReadItem', TMessageType::ONEWAY, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }
  public function deleteItem(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\DeleteNotificationItemRequest $request) {
    $this->send_deleteItem($operationHandle, $request);

    return $this->recv_deleteItem();
  }

  public function send_deleteItem(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\DeleteNotificationItemRequest $request) {
    $args = new \Miczone\Thrift\Notification\MiczoneNotificationService_deleteItem_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'deleteItem', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('deleteItem', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_deleteItem() {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) {
      $result = thrift_protocol_read_binary($this->input_, '\Miczone\Thrift\Notification\MiczoneNotificationService_deleteItem_result', $this->input_->isStrictRead());
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
      $result = new \Miczone\Thrift\Notification\MiczoneNotificationService_deleteItem_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    throw new \Exception("deleteItem failed: unknown result");
  }

  public function ow_deleteItem(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\DeleteNotificationItemRequest $request) {
    $this->send_ow_deleteItem($operationHandle, $request);
  }

  public function send_ow_deleteItem(\Miczone\Thrift\Common\OperationHandle $operationHandle, \Miczone\Thrift\Notification\DeleteNotificationItemRequest $request) {
    $args = new \Miczone\Thrift\Notification\MiczoneNotificationService_ow_deleteItem_args();
    $args->operationHandle = $operationHandle;
    $args->request = $request;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel) {
      thrift_protocol_write_binary($this->output_, 'ow_deleteItem', TMessageType::ONEWAY, $args, $this->seqid_, $this->output_->isStrictWrite());
    } else {
      $this->output_->writeMessageBegin('ow_deleteItem', TMessageType::ONEWAY, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }
}

// HELPER FUNCTIONS AND STRUCTURES

class MiczoneNotificationService_ping_args {
  static $_TSPEC;

  public function __construct() {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
      );
    }
  }

  public function getName() {
    return 'MiczoneNotificationService_ping_args';
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
    $xfer += $output->writeStructBegin('MiczoneNotificationService_ping_args');
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class MiczoneNotificationService_ping_result {
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
    return 'MiczoneNotificationService_ping_result';
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
    $xfer += $output->writeStructBegin('MiczoneNotificationService_ping_result');
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

class MiczoneNotificationService_getCounter_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\Notification\GetNotificationCounterRequest
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
          'class' => '\Miczone\Thrift\Notification\GetNotificationCounterRequest',
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
    return 'MiczoneNotificationService_getCounter_args';
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
            $this->request = new \Miczone\Thrift\Notification\GetNotificationCounterRequest();
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
    $xfer += $output->writeStructBegin('MiczoneNotificationService_getCounter_args');
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

class MiczoneNotificationService_getCounter_result {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Notification\GetNotificationCounterResponse
   */
  public $success = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Notification\GetNotificationCounterResponse',
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
    return 'MiczoneNotificationService_getCounter_result';
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
            $this->success = new \Miczone\Thrift\Notification\GetNotificationCounterResponse();
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
    $xfer += $output->writeStructBegin('MiczoneNotificationService_getCounter_result');
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

class MiczoneNotificationService_increaseCounter_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\Notification\IncreaseNotificationCounterRequest
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
          'class' => '\Miczone\Thrift\Notification\IncreaseNotificationCounterRequest',
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
    return 'MiczoneNotificationService_increaseCounter_args';
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
            $this->request = new \Miczone\Thrift\Notification\IncreaseNotificationCounterRequest();
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
    $xfer += $output->writeStructBegin('MiczoneNotificationService_increaseCounter_args');
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

class MiczoneNotificationService_increaseCounter_result {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Notification\IncreaseNotificationCounterResponse
   */
  public $success = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Notification\IncreaseNotificationCounterResponse',
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
    return 'MiczoneNotificationService_increaseCounter_result';
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
            $this->success = new \Miczone\Thrift\Notification\IncreaseNotificationCounterResponse();
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
    $xfer += $output->writeStructBegin('MiczoneNotificationService_increaseCounter_result');
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

class MiczoneNotificationService_ow_increaseCounter_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\Notification\IncreaseNotificationCounterRequest
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
          'class' => '\Miczone\Thrift\Notification\IncreaseNotificationCounterRequest',
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
    return 'MiczoneNotificationService_ow_increaseCounter_args';
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
            $this->request = new \Miczone\Thrift\Notification\IncreaseNotificationCounterRequest();
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
    $xfer += $output->writeStructBegin('MiczoneNotificationService_ow_increaseCounter_args');
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

class MiczoneNotificationService_resetCounter_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\Notification\ResetNotificationCounterRequest
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
          'class' => '\Miczone\Thrift\Notification\ResetNotificationCounterRequest',
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
    return 'MiczoneNotificationService_resetCounter_args';
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
            $this->request = new \Miczone\Thrift\Notification\ResetNotificationCounterRequest();
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
    $xfer += $output->writeStructBegin('MiczoneNotificationService_resetCounter_args');
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

class MiczoneNotificationService_resetCounter_result {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Notification\ResetNotificationCounterResponse
   */
  public $success = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Notification\ResetNotificationCounterResponse',
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
    return 'MiczoneNotificationService_resetCounter_result';
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
            $this->success = new \Miczone\Thrift\Notification\ResetNotificationCounterResponse();
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
    $xfer += $output->writeStructBegin('MiczoneNotificationService_resetCounter_result');
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

class MiczoneNotificationService_ow_resetCounter_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\Notification\ResetNotificationCounterRequest
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
          'class' => '\Miczone\Thrift\Notification\ResetNotificationCounterRequest',
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
    return 'MiczoneNotificationService_ow_resetCounter_args';
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
            $this->request = new \Miczone\Thrift\Notification\ResetNotificationCounterRequest();
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
    $xfer += $output->writeStructBegin('MiczoneNotificationService_ow_resetCounter_args');
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

class MiczoneNotificationService_getItemList_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\Notification\GetNotificationItemListRequest
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
          'class' => '\Miczone\Thrift\Notification\GetNotificationItemListRequest',
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
    return 'MiczoneNotificationService_getItemList_args';
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
            $this->request = new \Miczone\Thrift\Notification\GetNotificationItemListRequest();
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
    $xfer += $output->writeStructBegin('MiczoneNotificationService_getItemList_args');
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

class MiczoneNotificationService_getItemList_result {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Notification\GetNotificationItemListResponse
   */
  public $success = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Notification\GetNotificationItemListResponse',
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
    return 'MiczoneNotificationService_getItemList_result';
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
            $this->success = new \Miczone\Thrift\Notification\GetNotificationItemListResponse();
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
    $xfer += $output->writeStructBegin('MiczoneNotificationService_getItemList_result');
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

class MiczoneNotificationService_insertItem_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\Notification\InsertNotificationItemRequest
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
          'class' => '\Miczone\Thrift\Notification\InsertNotificationItemRequest',
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
    return 'MiczoneNotificationService_insertItem_args';
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
            $this->request = new \Miczone\Thrift\Notification\InsertNotificationItemRequest();
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
    $xfer += $output->writeStructBegin('MiczoneNotificationService_insertItem_args');
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

class MiczoneNotificationService_insertItem_result {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Notification\InsertNotificationItemResponse
   */
  public $success = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Notification\InsertNotificationItemResponse',
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
    return 'MiczoneNotificationService_insertItem_result';
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
            $this->success = new \Miczone\Thrift\Notification\InsertNotificationItemResponse();
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
    $xfer += $output->writeStructBegin('MiczoneNotificationService_insertItem_result');
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

class MiczoneNotificationService_ow_insertItem_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\Notification\InsertNotificationItemRequest
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
          'class' => '\Miczone\Thrift\Notification\InsertNotificationItemRequest',
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
    return 'MiczoneNotificationService_ow_insertItem_args';
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
            $this->request = new \Miczone\Thrift\Notification\InsertNotificationItemRequest();
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
    $xfer += $output->writeStructBegin('MiczoneNotificationService_ow_insertItem_args');
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

class MiczoneNotificationService_updateItem_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\Notification\UpdateNotificationItemRequest
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
          'class' => '\Miczone\Thrift\Notification\UpdateNotificationItemRequest',
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
    return 'MiczoneNotificationService_updateItem_args';
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
            $this->request = new \Miczone\Thrift\Notification\UpdateNotificationItemRequest();
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
    $xfer += $output->writeStructBegin('MiczoneNotificationService_updateItem_args');
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

class MiczoneNotificationService_updateItem_result {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Notification\UpdateNotificationItemResponse
   */
  public $success = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Notification\UpdateNotificationItemResponse',
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
    return 'MiczoneNotificationService_updateItem_result';
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
            $this->success = new \Miczone\Thrift\Notification\UpdateNotificationItemResponse();
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
    $xfer += $output->writeStructBegin('MiczoneNotificationService_updateItem_result');
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

class MiczoneNotificationService_ow_updateItem_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\Notification\UpdateNotificationItemRequest
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
          'class' => '\Miczone\Thrift\Notification\UpdateNotificationItemRequest',
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
    return 'MiczoneNotificationService_ow_updateItem_args';
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
            $this->request = new \Miczone\Thrift\Notification\UpdateNotificationItemRequest();
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
    $xfer += $output->writeStructBegin('MiczoneNotificationService_ow_updateItem_args');
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

class MiczoneNotificationService_updateReadItem_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\Notification\UpdateReadNotificationItemRequest
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
          'class' => '\Miczone\Thrift\Notification\UpdateReadNotificationItemRequest',
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
    return 'MiczoneNotificationService_updateReadItem_args';
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
            $this->request = new \Miczone\Thrift\Notification\UpdateReadNotificationItemRequest();
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
    $xfer += $output->writeStructBegin('MiczoneNotificationService_updateReadItem_args');
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

class MiczoneNotificationService_updateReadItem_result {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Notification\UpdateReadNotificationItemResponse
   */
  public $success = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Notification\UpdateReadNotificationItemResponse',
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
    return 'MiczoneNotificationService_updateReadItem_result';
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
            $this->success = new \Miczone\Thrift\Notification\UpdateReadNotificationItemResponse();
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
    $xfer += $output->writeStructBegin('MiczoneNotificationService_updateReadItem_result');
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

class MiczoneNotificationService_ow_updateReadItem_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\Notification\UpdateReadNotificationItemRequest
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
          'class' => '\Miczone\Thrift\Notification\UpdateReadNotificationItemRequest',
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
    return 'MiczoneNotificationService_ow_updateReadItem_args';
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
            $this->request = new \Miczone\Thrift\Notification\UpdateReadNotificationItemRequest();
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
    $xfer += $output->writeStructBegin('MiczoneNotificationService_ow_updateReadItem_args');
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

class MiczoneNotificationService_deleteItem_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\Notification\DeleteNotificationItemRequest
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
          'class' => '\Miczone\Thrift\Notification\DeleteNotificationItemRequest',
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
    return 'MiczoneNotificationService_deleteItem_args';
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
            $this->request = new \Miczone\Thrift\Notification\DeleteNotificationItemRequest();
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
    $xfer += $output->writeStructBegin('MiczoneNotificationService_deleteItem_args');
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

class MiczoneNotificationService_deleteItem_result {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Notification\DeleteNotificationItemResponse
   */
  public $success = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Notification\DeleteNotificationItemResponse',
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
    return 'MiczoneNotificationService_deleteItem_result';
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
            $this->success = new \Miczone\Thrift\Notification\DeleteNotificationItemResponse();
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
    $xfer += $output->writeStructBegin('MiczoneNotificationService_deleteItem_result');
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

class MiczoneNotificationService_ow_deleteItem_args {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\OperationHandle
   */
  public $operationHandle = null;
  /**
   * @var \Miczone\Thrift\Notification\DeleteNotificationItemRequest
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
          'class' => '\Miczone\Thrift\Notification\DeleteNotificationItemRequest',
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
    return 'MiczoneNotificationService_ow_deleteItem_args';
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
            $this->request = new \Miczone\Thrift\Notification\DeleteNotificationItemRequest();
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
    $xfer += $output->writeStructBegin('MiczoneNotificationService_ow_deleteItem_args');
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

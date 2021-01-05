<?php
namespace Miczone\Thrift\EventBus;

use Thrift\Exception\TProtocolException;
use Thrift\Type\TType;

class NotifyMessageBooleanRequest {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\EventBus\MessageInfoBoolean
   */
  public $messageInfo = null;
  /**
   * @var bool
   */
  public $isDebug = false;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'messageInfo',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\EventBus\MessageInfoBoolean',
        ),
        2 => array(
          'var' => 'isDebug',
          'type' => TType::BOOL,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['messageInfo'])) {
        $this->messageInfo = $vals['messageInfo'];
      }
      if (isset($vals['isDebug'])) {
        $this->isDebug = $vals['isDebug'];
      }
    }
  }

  public function getName() {
    return 'NotifyMessageBooleanRequest';
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
            $this->messageInfo = new \Miczone\Thrift\EventBus\MessageInfoBoolean();
            $xfer += $this->messageInfo->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->isDebug);
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
    $xfer += $output->writeStructBegin('NotifyMessageBooleanRequest');
    if ($this->messageInfo !== null) {
      if (!is_object($this->messageInfo)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('messageInfo', TType::STRUCT, 1);
      $xfer += $this->messageInfo->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->isDebug !== null) {
      $xfer += $output->writeFieldBegin('isDebug', TType::BOOL, 2);
      $xfer += $output->writeBool($this->isDebug);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class NotifyMessageByteRequest {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\EventBus\MessageInfoByte
   */
  public $messageInfo = null;
  /**
   * @var bool
   */
  public $isDebug = false;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'messageInfo',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\EventBus\MessageInfoByte',
        ),
        2 => array(
          'var' => 'isDebug',
          'type' => TType::BOOL,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['messageInfo'])) {
        $this->messageInfo = $vals['messageInfo'];
      }
      if (isset($vals['isDebug'])) {
        $this->isDebug = $vals['isDebug'];
      }
    }
  }

  public function getName() {
    return 'NotifyMessageByteRequest';
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
            $this->messageInfo = new \Miczone\Thrift\EventBus\MessageInfoByte();
            $xfer += $this->messageInfo->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->isDebug);
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
    $xfer += $output->writeStructBegin('NotifyMessageByteRequest');
    if ($this->messageInfo !== null) {
      if (!is_object($this->messageInfo)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('messageInfo', TType::STRUCT, 1);
      $xfer += $this->messageInfo->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->isDebug !== null) {
      $xfer += $output->writeFieldBegin('isDebug', TType::BOOL, 2);
      $xfer += $output->writeBool($this->isDebug);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class NotifyMessageShortRequest {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\EventBus\MessageInfoShort
   */
  public $messageInfo = null;
  /**
   * @var bool
   */
  public $isDebug = false;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'messageInfo',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\EventBus\MessageInfoShort',
        ),
        2 => array(
          'var' => 'isDebug',
          'type' => TType::BOOL,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['messageInfo'])) {
        $this->messageInfo = $vals['messageInfo'];
      }
      if (isset($vals['isDebug'])) {
        $this->isDebug = $vals['isDebug'];
      }
    }
  }

  public function getName() {
    return 'NotifyMessageShortRequest';
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
            $this->messageInfo = new \Miczone\Thrift\EventBus\MessageInfoShort();
            $xfer += $this->messageInfo->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->isDebug);
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
    $xfer += $output->writeStructBegin('NotifyMessageShortRequest');
    if ($this->messageInfo !== null) {
      if (!is_object($this->messageInfo)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('messageInfo', TType::STRUCT, 1);
      $xfer += $this->messageInfo->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->isDebug !== null) {
      $xfer += $output->writeFieldBegin('isDebug', TType::BOOL, 2);
      $xfer += $output->writeBool($this->isDebug);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class NotifyMessageIntegerRequest {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\EventBus\MessageInfoInteger
   */
  public $messageInfo = null;
  /**
   * @var bool
   */
  public $isDebug = false;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'messageInfo',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\EventBus\MessageInfoInteger',
        ),
        2 => array(
          'var' => 'isDebug',
          'type' => TType::BOOL,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['messageInfo'])) {
        $this->messageInfo = $vals['messageInfo'];
      }
      if (isset($vals['isDebug'])) {
        $this->isDebug = $vals['isDebug'];
      }
    }
  }

  public function getName() {
    return 'NotifyMessageIntegerRequest';
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
            $this->messageInfo = new \Miczone\Thrift\EventBus\MessageInfoInteger();
            $xfer += $this->messageInfo->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->isDebug);
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
    $xfer += $output->writeStructBegin('NotifyMessageIntegerRequest');
    if ($this->messageInfo !== null) {
      if (!is_object($this->messageInfo)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('messageInfo', TType::STRUCT, 1);
      $xfer += $this->messageInfo->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->isDebug !== null) {
      $xfer += $output->writeFieldBegin('isDebug', TType::BOOL, 2);
      $xfer += $output->writeBool($this->isDebug);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class NotifyMessageLongRequest {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\EventBus\MessageInfoLong
   */
  public $messageInfo = null;
  /**
   * @var bool
   */
  public $isDebug = false;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'messageInfo',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\EventBus\MessageInfoLong',
        ),
        2 => array(
          'var' => 'isDebug',
          'type' => TType::BOOL,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['messageInfo'])) {
        $this->messageInfo = $vals['messageInfo'];
      }
      if (isset($vals['isDebug'])) {
        $this->isDebug = $vals['isDebug'];
      }
    }
  }

  public function getName() {
    return 'NotifyMessageLongRequest';
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
            $this->messageInfo = new \Miczone\Thrift\EventBus\MessageInfoLong();
            $xfer += $this->messageInfo->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->isDebug);
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
    $xfer += $output->writeStructBegin('NotifyMessageLongRequest');
    if ($this->messageInfo !== null) {
      if (!is_object($this->messageInfo)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('messageInfo', TType::STRUCT, 1);
      $xfer += $this->messageInfo->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->isDebug !== null) {
      $xfer += $output->writeFieldBegin('isDebug', TType::BOOL, 2);
      $xfer += $output->writeBool($this->isDebug);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class NotifyMessageDoubleRequest {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\EventBus\MessageInfoDouble
   */
  public $messageInfo = null;
  /**
   * @var bool
   */
  public $isDebug = false;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'messageInfo',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\EventBus\MessageInfoDouble',
        ),
        2 => array(
          'var' => 'isDebug',
          'type' => TType::BOOL,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['messageInfo'])) {
        $this->messageInfo = $vals['messageInfo'];
      }
      if (isset($vals['isDebug'])) {
        $this->isDebug = $vals['isDebug'];
      }
    }
  }

  public function getName() {
    return 'NotifyMessageDoubleRequest';
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
            $this->messageInfo = new \Miczone\Thrift\EventBus\MessageInfoDouble();
            $xfer += $this->messageInfo->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->isDebug);
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
    $xfer += $output->writeStructBegin('NotifyMessageDoubleRequest');
    if ($this->messageInfo !== null) {
      if (!is_object($this->messageInfo)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('messageInfo', TType::STRUCT, 1);
      $xfer += $this->messageInfo->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->isDebug !== null) {
      $xfer += $output->writeFieldBegin('isDebug', TType::BOOL, 2);
      $xfer += $output->writeBool($this->isDebug);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class NotifyMessageStringRequest {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\EventBus\MessageInfoString
   */
  public $messageInfo = null;
  /**
   * @var bool
   */
  public $isDebug = false;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'messageInfo',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\EventBus\MessageInfoString',
        ),
        2 => array(
          'var' => 'isDebug',
          'type' => TType::BOOL,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['messageInfo'])) {
        $this->messageInfo = $vals['messageInfo'];
      }
      if (isset($vals['isDebug'])) {
        $this->isDebug = $vals['isDebug'];
      }
    }
  }

  public function getName() {
    return 'NotifyMessageStringRequest';
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
            $this->messageInfo = new \Miczone\Thrift\EventBus\MessageInfoString();
            $xfer += $this->messageInfo->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->isDebug);
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
    $xfer += $output->writeStructBegin('NotifyMessageStringRequest');
    if ($this->messageInfo !== null) {
      if (!is_object($this->messageInfo)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('messageInfo', TType::STRUCT, 1);
      $xfer += $this->messageInfo->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->isDebug !== null) {
      $xfer += $output->writeFieldBegin('isDebug', TType::BOOL, 2);
      $xfer += $output->writeBool($this->isDebug);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class NotifyMessageResponse {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\Error
   */
  public $error = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'error',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Common\Error',
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['error'])) {
        $this->error = $vals['error'];
      }
    }
  }

  public function getName() {
    return 'NotifyMessageResponse';
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
            $this->error = new \Miczone\Thrift\Common\Error();
            $xfer += $this->error->read($input);
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
    $xfer += $output->writeStructBegin('NotifyMessageResponse');
    if ($this->error !== null) {
      if (!is_object($this->error)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('error', TType::STRUCT, 1);
      $xfer += $this->error->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class MessageInfoBoolean {
  static $_TSPEC;

  /**
   * @var string
   */
  public $clientId = null;
  /**
   * @var string
   */
  public $topic = null;
  /**
   * @var bool
   */
  public $data = null;
  /**
   * @var string
   */
  public $key = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'clientId',
          'type' => TType::STRING,
        ),
        2 => array(
          'var' => 'topic',
          'type' => TType::STRING,
        ),
        3 => array(
          'var' => 'data',
          'type' => TType::BOOL,
        ),
        4 => array(
          'var' => 'key',
          'type' => TType::STRING,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['clientId'])) {
        $this->clientId = $vals['clientId'];
      }
      if (isset($vals['topic'])) {
        $this->topic = $vals['topic'];
      }
      if (isset($vals['data'])) {
        $this->data = $vals['data'];
      }
      if (isset($vals['key'])) {
        $this->key = $vals['key'];
      }
    }
  }

  public function getName() {
    return 'MessageInfoBoolean';
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
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->clientId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->topic);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->data);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->key);
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
    $xfer += $output->writeStructBegin('MessageInfoBoolean');
    if ($this->clientId !== null) {
      $xfer += $output->writeFieldBegin('clientId', TType::STRING, 1);
      $xfer += $output->writeString($this->clientId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->topic !== null) {
      $xfer += $output->writeFieldBegin('topic', TType::STRING, 2);
      $xfer += $output->writeString($this->topic);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->data !== null) {
      $xfer += $output->writeFieldBegin('data', TType::BOOL, 3);
      $xfer += $output->writeBool($this->data);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->key !== null) {
      $xfer += $output->writeFieldBegin('key', TType::STRING, 4);
      $xfer += $output->writeString($this->key);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class MessageInfoByte {
  static $_TSPEC;

  /**
   * @var string
   */
  public $clientId = null;
  /**
   * @var string
   */
  public $topic = null;
  /**
   * @var int
   */
  public $data = null;
  /**
   * @var string
   */
  public $key = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'clientId',
          'type' => TType::STRING,
        ),
        2 => array(
          'var' => 'topic',
          'type' => TType::STRING,
        ),
        3 => array(
          'var' => 'data',
          'type' => TType::BYTE,
        ),
        4 => array(
          'var' => 'key',
          'type' => TType::STRING,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['clientId'])) {
        $this->clientId = $vals['clientId'];
      }
      if (isset($vals['topic'])) {
        $this->topic = $vals['topic'];
      }
      if (isset($vals['data'])) {
        $this->data = $vals['data'];
      }
      if (isset($vals['key'])) {
        $this->key = $vals['key'];
      }
    }
  }

  public function getName() {
    return 'MessageInfoByte';
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
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->clientId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->topic);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::BYTE) {
            $xfer += $input->readByte($this->data);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->key);
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
    $xfer += $output->writeStructBegin('MessageInfoByte');
    if ($this->clientId !== null) {
      $xfer += $output->writeFieldBegin('clientId', TType::STRING, 1);
      $xfer += $output->writeString($this->clientId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->topic !== null) {
      $xfer += $output->writeFieldBegin('topic', TType::STRING, 2);
      $xfer += $output->writeString($this->topic);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->data !== null) {
      $xfer += $output->writeFieldBegin('data', TType::BYTE, 3);
      $xfer += $output->writeByte($this->data);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->key !== null) {
      $xfer += $output->writeFieldBegin('key', TType::STRING, 4);
      $xfer += $output->writeString($this->key);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class MessageInfoShort {
  static $_TSPEC;

  /**
   * @var string
   */
  public $clientId = null;
  /**
   * @var string
   */
  public $topic = null;
  /**
   * @var int
   */
  public $data = null;
  /**
   * @var string
   */
  public $key = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'clientId',
          'type' => TType::STRING,
        ),
        2 => array(
          'var' => 'topic',
          'type' => TType::STRING,
        ),
        3 => array(
          'var' => 'data',
          'type' => TType::I16,
        ),
        4 => array(
          'var' => 'key',
          'type' => TType::STRING,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['clientId'])) {
        $this->clientId = $vals['clientId'];
      }
      if (isset($vals['topic'])) {
        $this->topic = $vals['topic'];
      }
      if (isset($vals['data'])) {
        $this->data = $vals['data'];
      }
      if (isset($vals['key'])) {
        $this->key = $vals['key'];
      }
    }
  }

  public function getName() {
    return 'MessageInfoShort';
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
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->clientId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->topic);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I16) {
            $xfer += $input->readI16($this->data);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->key);
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
    $xfer += $output->writeStructBegin('MessageInfoShort');
    if ($this->clientId !== null) {
      $xfer += $output->writeFieldBegin('clientId', TType::STRING, 1);
      $xfer += $output->writeString($this->clientId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->topic !== null) {
      $xfer += $output->writeFieldBegin('topic', TType::STRING, 2);
      $xfer += $output->writeString($this->topic);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->data !== null) {
      $xfer += $output->writeFieldBegin('data', TType::I16, 3);
      $xfer += $output->writeI16($this->data);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->key !== null) {
      $xfer += $output->writeFieldBegin('key', TType::STRING, 4);
      $xfer += $output->writeString($this->key);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class MessageInfoInteger {
  static $_TSPEC;

  /**
   * @var string
   */
  public $clientId = null;
  /**
   * @var string
   */
  public $topic = null;
  /**
   * @var int
   */
  public $data = null;
  /**
   * @var string
   */
  public $key = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'clientId',
          'type' => TType::STRING,
        ),
        2 => array(
          'var' => 'topic',
          'type' => TType::STRING,
        ),
        3 => array(
          'var' => 'data',
          'type' => TType::I32,
        ),
        4 => array(
          'var' => 'key',
          'type' => TType::STRING,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['clientId'])) {
        $this->clientId = $vals['clientId'];
      }
      if (isset($vals['topic'])) {
        $this->topic = $vals['topic'];
      }
      if (isset($vals['data'])) {
        $this->data = $vals['data'];
      }
      if (isset($vals['key'])) {
        $this->key = $vals['key'];
      }
    }
  }

  public function getName() {
    return 'MessageInfoInteger';
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
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->clientId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->topic);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->data);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->key);
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
    $xfer += $output->writeStructBegin('MessageInfoInteger');
    if ($this->clientId !== null) {
      $xfer += $output->writeFieldBegin('clientId', TType::STRING, 1);
      $xfer += $output->writeString($this->clientId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->topic !== null) {
      $xfer += $output->writeFieldBegin('topic', TType::STRING, 2);
      $xfer += $output->writeString($this->topic);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->data !== null) {
      $xfer += $output->writeFieldBegin('data', TType::I32, 3);
      $xfer += $output->writeI32($this->data);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->key !== null) {
      $xfer += $output->writeFieldBegin('key', TType::STRING, 4);
      $xfer += $output->writeString($this->key);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class MessageInfoLong {
  static $_TSPEC;

  /**
   * @var string
   */
  public $clientId = null;
  /**
   * @var string
   */
  public $topic = null;
  /**
   * @var int
   */
  public $data = null;
  /**
   * @var string
   */
  public $key = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'clientId',
          'type' => TType::STRING,
        ),
        2 => array(
          'var' => 'topic',
          'type' => TType::STRING,
        ),
        3 => array(
          'var' => 'data',
          'type' => TType::I64,
        ),
        4 => array(
          'var' => 'key',
          'type' => TType::STRING,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['clientId'])) {
        $this->clientId = $vals['clientId'];
      }
      if (isset($vals['topic'])) {
        $this->topic = $vals['topic'];
      }
      if (isset($vals['data'])) {
        $this->data = $vals['data'];
      }
      if (isset($vals['key'])) {
        $this->key = $vals['key'];
      }
    }
  }

  public function getName() {
    return 'MessageInfoLong';
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
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->clientId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->topic);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->data);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->key);
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
    $xfer += $output->writeStructBegin('MessageInfoLong');
    if ($this->clientId !== null) {
      $xfer += $output->writeFieldBegin('clientId', TType::STRING, 1);
      $xfer += $output->writeString($this->clientId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->topic !== null) {
      $xfer += $output->writeFieldBegin('topic', TType::STRING, 2);
      $xfer += $output->writeString($this->topic);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->data !== null) {
      $xfer += $output->writeFieldBegin('data', TType::I64, 3);
      $xfer += $output->writeI64($this->data);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->key !== null) {
      $xfer += $output->writeFieldBegin('key', TType::STRING, 4);
      $xfer += $output->writeString($this->key);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class MessageInfoDouble {
  static $_TSPEC;

  /**
   * @var string
   */
  public $clientId = null;
  /**
   * @var string
   */
  public $topic = null;
  /**
   * @var double
   */
  public $data = null;
  /**
   * @var string
   */
  public $key = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'clientId',
          'type' => TType::STRING,
        ),
        2 => array(
          'var' => 'topic',
          'type' => TType::STRING,
        ),
        3 => array(
          'var' => 'data',
          'type' => TType::DOUBLE,
        ),
        4 => array(
          'var' => 'key',
          'type' => TType::STRING,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['clientId'])) {
        $this->clientId = $vals['clientId'];
      }
      if (isset($vals['topic'])) {
        $this->topic = $vals['topic'];
      }
      if (isset($vals['data'])) {
        $this->data = $vals['data'];
      }
      if (isset($vals['key'])) {
        $this->key = $vals['key'];
      }
    }
  }

  public function getName() {
    return 'MessageInfoDouble';
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
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->clientId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->topic);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::DOUBLE) {
            $xfer += $input->readDouble($this->data);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->key);
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
    $xfer += $output->writeStructBegin('MessageInfoDouble');
    if ($this->clientId !== null) {
      $xfer += $output->writeFieldBegin('clientId', TType::STRING, 1);
      $xfer += $output->writeString($this->clientId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->topic !== null) {
      $xfer += $output->writeFieldBegin('topic', TType::STRING, 2);
      $xfer += $output->writeString($this->topic);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->data !== null) {
      $xfer += $output->writeFieldBegin('data', TType::DOUBLE, 3);
      $xfer += $output->writeDouble($this->data);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->key !== null) {
      $xfer += $output->writeFieldBegin('key', TType::STRING, 4);
      $xfer += $output->writeString($this->key);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class MessageInfoString {
  static $_TSPEC;

  /**
   * @var string
   */
  public $clientId = null;
  /**
   * @var string
   */
  public $topic = null;
  /**
   * @var string
   */
  public $data = null;
  /**
   * @var string
   */
  public $key = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'clientId',
          'type' => TType::STRING,
        ),
        2 => array(
          'var' => 'topic',
          'type' => TType::STRING,
        ),
        3 => array(
          'var' => 'data',
          'type' => TType::STRING,
        ),
        4 => array(
          'var' => 'key',
          'type' => TType::STRING,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['clientId'])) {
        $this->clientId = $vals['clientId'];
      }
      if (isset($vals['topic'])) {
        $this->topic = $vals['topic'];
      }
      if (isset($vals['data'])) {
        $this->data = $vals['data'];
      }
      if (isset($vals['key'])) {
        $this->key = $vals['key'];
      }
    }
  }

  public function getName() {
    return 'MessageInfoString';
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
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->clientId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->topic);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->data);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->key);
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
    $xfer += $output->writeStructBegin('MessageInfoString');
    if ($this->clientId !== null) {
      $xfer += $output->writeFieldBegin('clientId', TType::STRING, 1);
      $xfer += $output->writeString($this->clientId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->topic !== null) {
      $xfer += $output->writeFieldBegin('topic', TType::STRING, 2);
      $xfer += $output->writeString($this->topic);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->data !== null) {
      $xfer += $output->writeFieldBegin('data', TType::STRING, 3);
      $xfer += $output->writeString($this->data);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->key !== null) {
      $xfer += $output->writeFieldBegin('key', TType::STRING, 4);
      $xfer += $output->writeString($this->key);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

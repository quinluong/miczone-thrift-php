<?php
namespace Miczone\Thrift\Notification;

use Thrift\Exception\TProtocolException;
use Thrift\Type\TType;

final class NotificationItemTargetUserType {
  const GUEST = 1;
  const REGISTERED = 2;
  const ALL = 3;
  public static $__names = array(
    1 => 'GUEST',
    2 => 'REGISTERED',
    3 => 'ALL',
  );
}

class GetNotificationItemListRequest {
  static $_TSPEC;

  /**
   * @var string
   */
  public $publisher = null;
  /**
   * @var int
   */
  public $userId = null;
  /**
   * @var int
   */
  public $groupId = null;
  /**
   * @var int
   */
  public $fromItemId = null;
  /**
   * @var int
   */
  public $limit = 10;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'publisher',
          'type' => TType::STRING,
        ),
        2 => array(
          'var' => 'userId',
          'type' => TType::I32,
        ),
        3 => array(
          'var' => 'groupId',
          'type' => TType::BYTE,
        ),
        4 => array(
          'var' => 'fromItemId',
          'type' => TType::I32,
        ),
        5 => array(
          'var' => 'limit',
          'type' => TType::BYTE,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['publisher'])) {
        $this->publisher = $vals['publisher'];
      }
      if (isset($vals['userId'])) {
        $this->userId = $vals['userId'];
      }
      if (isset($vals['groupId'])) {
        $this->groupId = $vals['groupId'];
      }
      if (isset($vals['fromItemId'])) {
        $this->fromItemId = $vals['fromItemId'];
      }
      if (isset($vals['limit'])) {
        $this->limit = $vals['limit'];
      }
    }
  }

  public function getName() {
    return 'GetNotificationItemListRequest';
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
            $xfer += $input->readString($this->publisher);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->userId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::BYTE) {
            $xfer += $input->readByte($this->groupId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->fromItemId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::BYTE) {
            $xfer += $input->readByte($this->limit);
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
    $xfer += $output->writeStructBegin('GetNotificationItemListRequest');
    if ($this->publisher !== null) {
      $xfer += $output->writeFieldBegin('publisher', TType::STRING, 1);
      $xfer += $output->writeString($this->publisher);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->userId !== null) {
      $xfer += $output->writeFieldBegin('userId', TType::I32, 2);
      $xfer += $output->writeI32($this->userId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->groupId !== null) {
      $xfer += $output->writeFieldBegin('groupId', TType::BYTE, 3);
      $xfer += $output->writeByte($this->groupId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->fromItemId !== null) {
      $xfer += $output->writeFieldBegin('fromItemId', TType::I32, 4);
      $xfer += $output->writeI32($this->fromItemId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->limit !== null) {
      $xfer += $output->writeFieldBegin('limit', TType::BYTE, 5);
      $xfer += $output->writeByte($this->limit);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class GetNotificationItemListResponseData {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Notification\NotificationItem[]
   */
  public $itemList = null;
  /**
   * @var int
   */
  public $lastItemId = null;
  /**
   * @var bool
   */
  public $hasNext = false;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'itemList',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\Miczone\Thrift\Notification\NotificationItem',
          ),
        ),
        2 => array(
          'var' => 'lastItemId',
          'type' => TType::I32,
        ),
        3 => array(
          'var' => 'hasNext',
          'type' => TType::BOOL,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['itemList'])) {
        $this->itemList = $vals['itemList'];
      }
      if (isset($vals['lastItemId'])) {
        $this->lastItemId = $vals['lastItemId'];
      }
      if (isset($vals['hasNext'])) {
        $this->hasNext = $vals['hasNext'];
      }
    }
  }

  public function getName() {
    return 'GetNotificationItemListResponseData';
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
          if ($ftype == TType::LST) {
            $this->itemList = array();
            $_size0 = 0;
            $_etype3 = 0;
            $xfer += $input->readListBegin($_etype3, $_size0);
            for ($_i4 = 0; $_i4 < $_size0; ++$_i4) {
              $elem5 = null;
              $elem5 = new \Miczone\Thrift\Notification\NotificationItem();
              $xfer += $elem5->read($input);
              $this->itemList[] = $elem5;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->lastItemId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->hasNext);
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
    $xfer += $output->writeStructBegin('GetNotificationItemListResponseData');
    if ($this->itemList !== null) {
      if (!is_array($this->itemList)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('itemList', TType::LST, 1);
      {
        $output->writeListBegin(TType::STRUCT, count($this->itemList));
        {
          foreach ($this->itemList as $iter6) {
            $xfer += $iter6->write($output);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->lastItemId !== null) {
      $xfer += $output->writeFieldBegin('lastItemId', TType::I32, 2);
      $xfer += $output->writeI32($this->lastItemId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->hasNext !== null) {
      $xfer += $output->writeFieldBegin('hasNext', TType::BOOL, 3);
      $xfer += $output->writeBool($this->hasNext);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class GetNotificationItemListResponse {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\Error
   */
  public $error = null;
  /**
   * @var \Miczone\Thrift\Notification\GetNotificationItemListResponseData
   */
  public $data = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'error',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Common\Error',
        ),
        2 => array(
          'var' => 'data',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Notification\GetNotificationItemListResponseData',
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['error'])) {
        $this->error = $vals['error'];
      }
      if (isset($vals['data'])) {
        $this->data = $vals['data'];
      }
    }
  }

  public function getName() {
    return 'GetNotificationItemListResponse';
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
        case 2:
          if ($ftype == TType::STRUCT) {
            $this->data = new \Miczone\Thrift\Notification\GetNotificationItemListResponseData();
            $xfer += $this->data->read($input);
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
    $xfer += $output->writeStructBegin('GetNotificationItemListResponse');
    if ($this->error !== null) {
      if (!is_object($this->error)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('error', TType::STRUCT, 1);
      $xfer += $this->error->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->data !== null) {
      if (!is_object($this->data)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('data', TType::STRUCT, 2);
      $xfer += $this->data->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class InsertNotificationItemRequest {
  static $_TSPEC;

  /**
   * @var string
   */
  public $publisher = null;
  /**
   * @var int
   */
  public $targetUserType = null;
  /**
   * @var int[]
   */
  public $registeredUserIdSet = null;
  /**
   * @var int
   */
  public $id = null;
  /**
   * @var int
   */
  public $groupId = null;
  /**
   * @var int
   */
  public $typeId = null;
  /**
   * @var string
   */
  public $title = null;
  /**
   * @var string
   */
  public $content = null;
  /**
   * @var string
   */
  public $url = null;
  /**
   * @var bool
   */
  public $isTargetBlank = null;
  /**
   * @var string
   */
  public $imageUrl = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'publisher',
          'type' => TType::STRING,
        ),
        2 => array(
          'var' => 'targetUserType',
          'type' => TType::BYTE,
        ),
        3 => array(
          'var' => 'registeredUserIdSet',
          'type' => TType::SET,
          'etype' => TType::I32,
          'elem' => array(
            'type' => TType::I32,
          ),
        ),
        4 => array(
          'var' => 'id',
          'type' => TType::I32,
        ),
        5 => array(
          'var' => 'groupId',
          'type' => TType::BYTE,
        ),
        6 => array(
          'var' => 'typeId',
          'type' => TType::BYTE,
        ),
        7 => array(
          'var' => 'title',
          'type' => TType::STRING,
        ),
        8 => array(
          'var' => 'content',
          'type' => TType::STRING,
        ),
        9 => array(
          'var' => 'url',
          'type' => TType::STRING,
        ),
        10 => array(
          'var' => 'isTargetBlank',
          'type' => TType::BOOL,
        ),
        11 => array(
          'var' => 'imageUrl',
          'type' => TType::STRING,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['publisher'])) {
        $this->publisher = $vals['publisher'];
      }
      if (isset($vals['targetUserType'])) {
        $this->targetUserType = $vals['targetUserType'];
      }
      if (isset($vals['registeredUserIdSet'])) {
        $this->registeredUserIdSet = $vals['registeredUserIdSet'];
      }
      if (isset($vals['id'])) {
        $this->id = $vals['id'];
      }
      if (isset($vals['groupId'])) {
        $this->groupId = $vals['groupId'];
      }
      if (isset($vals['typeId'])) {
        $this->typeId = $vals['typeId'];
      }
      if (isset($vals['title'])) {
        $this->title = $vals['title'];
      }
      if (isset($vals['content'])) {
        $this->content = $vals['content'];
      }
      if (isset($vals['url'])) {
        $this->url = $vals['url'];
      }
      if (isset($vals['isTargetBlank'])) {
        $this->isTargetBlank = $vals['isTargetBlank'];
      }
      if (isset($vals['imageUrl'])) {
        $this->imageUrl = $vals['imageUrl'];
      }
    }
  }

  public function getName() {
    return 'InsertNotificationItemRequest';
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
            $xfer += $input->readString($this->publisher);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::BYTE) {
            $xfer += $input->readByte($this->targetUserType);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::SET) {
            $this->registeredUserIdSet = array();
            $_size7 = 0;
            $_etype10 = 0;
            $xfer += $input->readSetBegin($_etype10, $_size7);
            for ($_i11 = 0; $_i11 < $_size7; ++$_i11) {
              $elem12 = null;
              $xfer += $input->readI32($elem12);
              if (is_scalar($elem12)) {
                $this->registeredUserIdSet[$elem12] = true;
              } else {
                $this->registeredUserIdSet[] = $elem12;
              }
            }
            $xfer += $input->readSetEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->id);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::BYTE) {
            $xfer += $input->readByte($this->groupId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::BYTE) {
            $xfer += $input->readByte($this->typeId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->title);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 8:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->content);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 9:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->url);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 10:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->isTargetBlank);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 11:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->imageUrl);
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
    $xfer += $output->writeStructBegin('InsertNotificationItemRequest');
    if ($this->publisher !== null) {
      $xfer += $output->writeFieldBegin('publisher', TType::STRING, 1);
      $xfer += $output->writeString($this->publisher);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->targetUserType !== null) {
      $xfer += $output->writeFieldBegin('targetUserType', TType::BYTE, 2);
      $xfer += $output->writeByte($this->targetUserType);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->registeredUserIdSet !== null) {
      if (!is_array($this->registeredUserIdSet)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('registeredUserIdSet', TType::SET, 3);
      {
        $output->writeSetBegin(TType::I32, count($this->registeredUserIdSet));
        {
          foreach ($this->registeredUserIdSet as $iter13 => $iter14) {
            if (is_scalar($iter14)) {
              $xfer += $output->writeI32($iter13);
            } else {
              $xfer += $output->writeI32($iter14);
            }
          }
        }
        $output->writeSetEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->id !== null) {
      $xfer += $output->writeFieldBegin('id', TType::I32, 4);
      $xfer += $output->writeI32($this->id);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->groupId !== null) {
      $xfer += $output->writeFieldBegin('groupId', TType::BYTE, 5);
      $xfer += $output->writeByte($this->groupId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->typeId !== null) {
      $xfer += $output->writeFieldBegin('typeId', TType::BYTE, 6);
      $xfer += $output->writeByte($this->typeId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->title !== null) {
      $xfer += $output->writeFieldBegin('title', TType::STRING, 7);
      $xfer += $output->writeString($this->title);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->content !== null) {
      $xfer += $output->writeFieldBegin('content', TType::STRING, 8);
      $xfer += $output->writeString($this->content);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->url !== null) {
      $xfer += $output->writeFieldBegin('url', TType::STRING, 9);
      $xfer += $output->writeString($this->url);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->isTargetBlank !== null) {
      $xfer += $output->writeFieldBegin('isTargetBlank', TType::BOOL, 10);
      $xfer += $output->writeBool($this->isTargetBlank);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->imageUrl !== null) {
      $xfer += $output->writeFieldBegin('imageUrl', TType::STRING, 11);
      $xfer += $output->writeString($this->imageUrl);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class InsertNotificationItemResponse {
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
    return 'InsertNotificationItemResponse';
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
    $xfer += $output->writeStructBegin('InsertNotificationItemResponse');
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

class UpdateNotificationItemRequest {
  static $_TSPEC;

  /**
   * @var string
   */
  public $publisher = null;
  /**
   * @var int
   */
  public $id = null;
  /**
   * @var int
   */
  public $typeId = null;
  /**
   * @var string
   */
  public $title = null;
  /**
   * @var string
   */
  public $content = null;
  /**
   * @var string
   */
  public $url = null;
  /**
   * @var bool
   */
  public $isTargetBlank = null;
  /**
   * @var string
   */
  public $imageUrl = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'publisher',
          'type' => TType::STRING,
        ),
        2 => array(
          'var' => 'id',
          'type' => TType::I32,
        ),
        3 => array(
          'var' => 'typeId',
          'type' => TType::BYTE,
        ),
        4 => array(
          'var' => 'title',
          'type' => TType::STRING,
        ),
        5 => array(
          'var' => 'content',
          'type' => TType::STRING,
        ),
        6 => array(
          'var' => 'url',
          'type' => TType::STRING,
        ),
        7 => array(
          'var' => 'isTargetBlank',
          'type' => TType::BOOL,
        ),
        8 => array(
          'var' => 'imageUrl',
          'type' => TType::STRING,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['publisher'])) {
        $this->publisher = $vals['publisher'];
      }
      if (isset($vals['id'])) {
        $this->id = $vals['id'];
      }
      if (isset($vals['typeId'])) {
        $this->typeId = $vals['typeId'];
      }
      if (isset($vals['title'])) {
        $this->title = $vals['title'];
      }
      if (isset($vals['content'])) {
        $this->content = $vals['content'];
      }
      if (isset($vals['url'])) {
        $this->url = $vals['url'];
      }
      if (isset($vals['isTargetBlank'])) {
        $this->isTargetBlank = $vals['isTargetBlank'];
      }
      if (isset($vals['imageUrl'])) {
        $this->imageUrl = $vals['imageUrl'];
      }
    }
  }

  public function getName() {
    return 'UpdateNotificationItemRequest';
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
            $xfer += $input->readString($this->publisher);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->id);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::BYTE) {
            $xfer += $input->readByte($this->typeId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->title);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->content);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->url);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->isTargetBlank);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 8:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->imageUrl);
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
    $xfer += $output->writeStructBegin('UpdateNotificationItemRequest');
    if ($this->publisher !== null) {
      $xfer += $output->writeFieldBegin('publisher', TType::STRING, 1);
      $xfer += $output->writeString($this->publisher);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->id !== null) {
      $xfer += $output->writeFieldBegin('id', TType::I32, 2);
      $xfer += $output->writeI32($this->id);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->typeId !== null) {
      $xfer += $output->writeFieldBegin('typeId', TType::BYTE, 3);
      $xfer += $output->writeByte($this->typeId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->title !== null) {
      $xfer += $output->writeFieldBegin('title', TType::STRING, 4);
      $xfer += $output->writeString($this->title);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->content !== null) {
      $xfer += $output->writeFieldBegin('content', TType::STRING, 5);
      $xfer += $output->writeString($this->content);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->url !== null) {
      $xfer += $output->writeFieldBegin('url', TType::STRING, 6);
      $xfer += $output->writeString($this->url);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->isTargetBlank !== null) {
      $xfer += $output->writeFieldBegin('isTargetBlank', TType::BOOL, 7);
      $xfer += $output->writeBool($this->isTargetBlank);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->imageUrl !== null) {
      $xfer += $output->writeFieldBegin('imageUrl', TType::STRING, 8);
      $xfer += $output->writeString($this->imageUrl);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class UpdateNotificationItemResponse {
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
    return 'UpdateNotificationItemResponse';
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
    $xfer += $output->writeStructBegin('UpdateNotificationItemResponse');
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

class UpdateReadNotificationItemRequest {
  static $_TSPEC;

  /**
   * @var string
   */
  public $publisher = null;
  /**
   * @var int
   */
  public $userId = null;
  /**
   * @var int
   */
  public $id = null;
  /**
   * @var bool
   */
  public $isRead = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'publisher',
          'type' => TType::STRING,
        ),
        2 => array(
          'var' => 'userId',
          'type' => TType::I32,
        ),
        3 => array(
          'var' => 'id',
          'type' => TType::I32,
        ),
        4 => array(
          'var' => 'isRead',
          'type' => TType::BOOL,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['publisher'])) {
        $this->publisher = $vals['publisher'];
      }
      if (isset($vals['userId'])) {
        $this->userId = $vals['userId'];
      }
      if (isset($vals['id'])) {
        $this->id = $vals['id'];
      }
      if (isset($vals['isRead'])) {
        $this->isRead = $vals['isRead'];
      }
    }
  }

  public function getName() {
    return 'UpdateReadNotificationItemRequest';
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
            $xfer += $input->readString($this->publisher);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->userId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->id);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->isRead);
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
    $xfer += $output->writeStructBegin('UpdateReadNotificationItemRequest');
    if ($this->publisher !== null) {
      $xfer += $output->writeFieldBegin('publisher', TType::STRING, 1);
      $xfer += $output->writeString($this->publisher);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->userId !== null) {
      $xfer += $output->writeFieldBegin('userId', TType::I32, 2);
      $xfer += $output->writeI32($this->userId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->id !== null) {
      $xfer += $output->writeFieldBegin('id', TType::I32, 3);
      $xfer += $output->writeI32($this->id);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->isRead !== null) {
      $xfer += $output->writeFieldBegin('isRead', TType::BOOL, 4);
      $xfer += $output->writeBool($this->isRead);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class UpdateReadNotificationItemResponse {
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
    return 'UpdateReadNotificationItemResponse';
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
    $xfer += $output->writeStructBegin('UpdateReadNotificationItemResponse');
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

class DeleteNotificationItemRequest {
  static $_TSPEC;

  /**
   * @var string
   */
  public $publisher = null;
  /**
   * @var int
   */
  public $id = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'publisher',
          'type' => TType::STRING,
        ),
        2 => array(
          'var' => 'id',
          'type' => TType::I32,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['publisher'])) {
        $this->publisher = $vals['publisher'];
      }
      if (isset($vals['id'])) {
        $this->id = $vals['id'];
      }
    }
  }

  public function getName() {
    return 'DeleteNotificationItemRequest';
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
            $xfer += $input->readString($this->publisher);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->id);
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
    $xfer += $output->writeStructBegin('DeleteNotificationItemRequest');
    if ($this->publisher !== null) {
      $xfer += $output->writeFieldBegin('publisher', TType::STRING, 1);
      $xfer += $output->writeString($this->publisher);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->id !== null) {
      $xfer += $output->writeFieldBegin('id', TType::I32, 2);
      $xfer += $output->writeI32($this->id);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class DeleteNotificationItemResponse {
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
    return 'DeleteNotificationItemResponse';
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
    $xfer += $output->writeStructBegin('DeleteNotificationItemResponse');
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

class NotificationItem {
  static $_TSPEC;

  /**
   * @var string
   */
  public $publisher = null;
  /**
   * @var int
   */
  public $userId = null;
  /**
   * @var int
   */
  public $id = null;
  /**
   * @var int
   */
  public $groupId = null;
  /**
   * @var int
   */
  public $typeId = null;
  /**
   * @var string
   */
  public $title = null;
  /**
   * @var string
   */
  public $content = null;
  /**
   * @var string
   */
  public $url = null;
  /**
   * @var bool
   */
  public $isTargetBlank = null;
  /**
   * @var string
   */
  public $imageUrl = null;
  /**
   * @var bool
   */
  public $isRead = null;
  /**
   * @var int
   */
  public $createdTime = null;
  /**
   * @var int
   */
  public $updatedTime = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'publisher',
          'type' => TType::STRING,
        ),
        2 => array(
          'var' => 'userId',
          'type' => TType::I32,
        ),
        3 => array(
          'var' => 'id',
          'type' => TType::I32,
        ),
        4 => array(
          'var' => 'groupId',
          'type' => TType::BYTE,
        ),
        5 => array(
          'var' => 'typeId',
          'type' => TType::BYTE,
        ),
        6 => array(
          'var' => 'title',
          'type' => TType::STRING,
        ),
        7 => array(
          'var' => 'content',
          'type' => TType::STRING,
        ),
        8 => array(
          'var' => 'url',
          'type' => TType::STRING,
        ),
        9 => array(
          'var' => 'isTargetBlank',
          'type' => TType::BOOL,
        ),
        10 => array(
          'var' => 'imageUrl',
          'type' => TType::STRING,
        ),
        11 => array(
          'var' => 'isRead',
          'type' => TType::BOOL,
        ),
        12 => array(
          'var' => 'createdTime',
          'type' => TType::I64,
        ),
        13 => array(
          'var' => 'updatedTime',
          'type' => TType::I64,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['publisher'])) {
        $this->publisher = $vals['publisher'];
      }
      if (isset($vals['userId'])) {
        $this->userId = $vals['userId'];
      }
      if (isset($vals['id'])) {
        $this->id = $vals['id'];
      }
      if (isset($vals['groupId'])) {
        $this->groupId = $vals['groupId'];
      }
      if (isset($vals['typeId'])) {
        $this->typeId = $vals['typeId'];
      }
      if (isset($vals['title'])) {
        $this->title = $vals['title'];
      }
      if (isset($vals['content'])) {
        $this->content = $vals['content'];
      }
      if (isset($vals['url'])) {
        $this->url = $vals['url'];
      }
      if (isset($vals['isTargetBlank'])) {
        $this->isTargetBlank = $vals['isTargetBlank'];
      }
      if (isset($vals['imageUrl'])) {
        $this->imageUrl = $vals['imageUrl'];
      }
      if (isset($vals['isRead'])) {
        $this->isRead = $vals['isRead'];
      }
      if (isset($vals['createdTime'])) {
        $this->createdTime = $vals['createdTime'];
      }
      if (isset($vals['updatedTime'])) {
        $this->updatedTime = $vals['updatedTime'];
      }
    }
  }

  public function getName() {
    return 'NotificationItem';
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
            $xfer += $input->readString($this->publisher);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->userId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->id);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::BYTE) {
            $xfer += $input->readByte($this->groupId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::BYTE) {
            $xfer += $input->readByte($this->typeId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->title);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->content);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 8:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->url);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 9:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->isTargetBlank);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 10:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->imageUrl);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 11:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->isRead);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 12:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->createdTime);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 13:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->updatedTime);
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
    $xfer += $output->writeStructBegin('NotificationItem');
    if ($this->publisher !== null) {
      $xfer += $output->writeFieldBegin('publisher', TType::STRING, 1);
      $xfer += $output->writeString($this->publisher);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->userId !== null) {
      $xfer += $output->writeFieldBegin('userId', TType::I32, 2);
      $xfer += $output->writeI32($this->userId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->id !== null) {
      $xfer += $output->writeFieldBegin('id', TType::I32, 3);
      $xfer += $output->writeI32($this->id);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->groupId !== null) {
      $xfer += $output->writeFieldBegin('groupId', TType::BYTE, 4);
      $xfer += $output->writeByte($this->groupId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->typeId !== null) {
      $xfer += $output->writeFieldBegin('typeId', TType::BYTE, 5);
      $xfer += $output->writeByte($this->typeId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->title !== null) {
      $xfer += $output->writeFieldBegin('title', TType::STRING, 6);
      $xfer += $output->writeString($this->title);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->content !== null) {
      $xfer += $output->writeFieldBegin('content', TType::STRING, 7);
      $xfer += $output->writeString($this->content);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->url !== null) {
      $xfer += $output->writeFieldBegin('url', TType::STRING, 8);
      $xfer += $output->writeString($this->url);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->isTargetBlank !== null) {
      $xfer += $output->writeFieldBegin('isTargetBlank', TType::BOOL, 9);
      $xfer += $output->writeBool($this->isTargetBlank);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->imageUrl !== null) {
      $xfer += $output->writeFieldBegin('imageUrl', TType::STRING, 10);
      $xfer += $output->writeString($this->imageUrl);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->isRead !== null) {
      $xfer += $output->writeFieldBegin('isRead', TType::BOOL, 11);
      $xfer += $output->writeBool($this->isRead);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->createdTime !== null) {
      $xfer += $output->writeFieldBegin('createdTime', TType::I64, 12);
      $xfer += $output->writeI64($this->createdTime);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->updatedTime !== null) {
      $xfer += $output->writeFieldBegin('updatedTime', TType::I64, 13);
      $xfer += $output->writeI64($this->updatedTime);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class GetNotificationCounterRequest {
  static $_TSPEC;

  /**
   * @var string
   */
  public $publisher = null;
  /**
   * @var int
   */
  public $userId = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'publisher',
          'type' => TType::STRING,
        ),
        2 => array(
          'var' => 'userId',
          'type' => TType::I32,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['publisher'])) {
        $this->publisher = $vals['publisher'];
      }
      if (isset($vals['userId'])) {
        $this->userId = $vals['userId'];
      }
    }
  }

  public function getName() {
    return 'GetNotificationCounterRequest';
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
            $xfer += $input->readString($this->publisher);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->userId);
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
    $xfer += $output->writeStructBegin('GetNotificationCounterRequest');
    if ($this->publisher !== null) {
      $xfer += $output->writeFieldBegin('publisher', TType::STRING, 1);
      $xfer += $output->writeString($this->publisher);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->userId !== null) {
      $xfer += $output->writeFieldBegin('userId', TType::I32, 2);
      $xfer += $output->writeI32($this->userId);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class GetNotificationCounterResponse {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\Error
   */
  public $error = null;
  /**
   * @var int
   */
  public $data = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'error',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Common\Error',
        ),
        2 => array(
          'var' => 'data',
          'type' => TType::I64,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['error'])) {
        $this->error = $vals['error'];
      }
      if (isset($vals['data'])) {
        $this->data = $vals['data'];
      }
    }
  }

  public function getName() {
    return 'GetNotificationCounterResponse';
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
        case 2:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->data);
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
    $xfer += $output->writeStructBegin('GetNotificationCounterResponse');
    if ($this->error !== null) {
      if (!is_object($this->error)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('error', TType::STRUCT, 1);
      $xfer += $this->error->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->data !== null) {
      $xfer += $output->writeFieldBegin('data', TType::I64, 2);
      $xfer += $output->writeI64($this->data);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class IncreaseNotificationCounterRequest {
  static $_TSPEC;

  /**
   * @var string
   */
  public $publisher = null;
  /**
   * @var int
   */
  public $userId = null;
  /**
   * @var int
   */
  public $increment = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'publisher',
          'type' => TType::STRING,
        ),
        2 => array(
          'var' => 'userId',
          'type' => TType::I32,
        ),
        3 => array(
          'var' => 'increment',
          'type' => TType::I64,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['publisher'])) {
        $this->publisher = $vals['publisher'];
      }
      if (isset($vals['userId'])) {
        $this->userId = $vals['userId'];
      }
      if (isset($vals['increment'])) {
        $this->increment = $vals['increment'];
      }
    }
  }

  public function getName() {
    return 'IncreaseNotificationCounterRequest';
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
            $xfer += $input->readString($this->publisher);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->userId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->increment);
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
    $xfer += $output->writeStructBegin('IncreaseNotificationCounterRequest');
    if ($this->publisher !== null) {
      $xfer += $output->writeFieldBegin('publisher', TType::STRING, 1);
      $xfer += $output->writeString($this->publisher);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->userId !== null) {
      $xfer += $output->writeFieldBegin('userId', TType::I32, 2);
      $xfer += $output->writeI32($this->userId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->increment !== null) {
      $xfer += $output->writeFieldBegin('increment', TType::I64, 3);
      $xfer += $output->writeI64($this->increment);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class IncreaseNotificationCounterResponse {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\Error
   */
  public $error = null;
  /**
   * @var int
   */
  public $data = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'error',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Common\Error',
        ),
        2 => array(
          'var' => 'data',
          'type' => TType::I64,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['error'])) {
        $this->error = $vals['error'];
      }
      if (isset($vals['data'])) {
        $this->data = $vals['data'];
      }
    }
  }

  public function getName() {
    return 'IncreaseNotificationCounterResponse';
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
        case 2:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->data);
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
    $xfer += $output->writeStructBegin('IncreaseNotificationCounterResponse');
    if ($this->error !== null) {
      if (!is_object($this->error)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('error', TType::STRUCT, 1);
      $xfer += $this->error->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->data !== null) {
      $xfer += $output->writeFieldBegin('data', TType::I64, 2);
      $xfer += $output->writeI64($this->data);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class ResetNotificationCounterRequest {
  static $_TSPEC;

  /**
   * @var string
   */
  public $publisher = null;
  /**
   * @var int
   */
  public $userId = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'publisher',
          'type' => TType::STRING,
        ),
        2 => array(
          'var' => 'userId',
          'type' => TType::I32,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['publisher'])) {
        $this->publisher = $vals['publisher'];
      }
      if (isset($vals['userId'])) {
        $this->userId = $vals['userId'];
      }
    }
  }

  public function getName() {
    return 'ResetNotificationCounterRequest';
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
            $xfer += $input->readString($this->publisher);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->userId);
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
    $xfer += $output->writeStructBegin('ResetNotificationCounterRequest');
    if ($this->publisher !== null) {
      $xfer += $output->writeFieldBegin('publisher', TType::STRING, 1);
      $xfer += $output->writeString($this->publisher);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->userId !== null) {
      $xfer += $output->writeFieldBegin('userId', TType::I32, 2);
      $xfer += $output->writeI32($this->userId);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class ResetNotificationCounterResponse {
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
    return 'ResetNotificationCounterResponse';
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
    $xfer += $output->writeStructBegin('ResetNotificationCounterResponse');
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

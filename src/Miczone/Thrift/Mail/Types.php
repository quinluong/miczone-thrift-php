<?php
namespace Miczone\Thrift\Mail;

use Thrift\Exception\TProtocolException;
use Thrift\Type\TType;

final class FromWebsite {
  const FADO = 1;
  const FADO_FPTSHOP = 2;
  public static $__names = array(
    1 => 'FADO',
    2 => 'FADO_FPTSHOP',
  );
}

final class ContentType {
  const TEXT = 1;
  const HTML = 2;
  public static $__names = array(
    1 => 'TEXT',
    2 => 'HTML',
  );
}

class EmailNamePair {
  static $_TSPEC;

  /**
   * @var string
   */
  public $email = null;
  /**
   * @var string
   */
  public $name = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'email',
          'type' => TType::STRING,
        ),
        2 => array(
          'var' => 'name',
          'type' => TType::STRING,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['email'])) {
        $this->email = $vals['email'];
      }
      if (isset($vals['name'])) {
        $this->name = $vals['name'];
      }
    }
  }

  public function getName() {
    return 'EmailNamePair';
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
            $xfer += $input->readString($this->email);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->name);
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
    $xfer += $output->writeStructBegin('EmailNamePair');
    if ($this->email !== null) {
      $xfer += $output->writeFieldBegin('email', TType::STRING, 1);
      $xfer += $output->writeString($this->email);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->name !== null) {
      $xfer += $output->writeFieldBegin('name', TType::STRING, 2);
      $xfer += $output->writeString($this->name);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class CallbackUrl {
  static $_TSPEC;

  /**
   * @var string[]
   */
  public $successList = null;
  /**
   * @var string[]
   */
  public $errorList = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'successList',
          'type' => TType::LST,
          'etype' => TType::STRING,
          'elem' => array(
            'type' => TType::STRING,
          ),
        ),
        2 => array(
          'var' => 'errorList',
          'type' => TType::LST,
          'etype' => TType::STRING,
          'elem' => array(
            'type' => TType::STRING,
          ),
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['successList'])) {
        $this->successList = $vals['successList'];
      }
      if (isset($vals['errorList'])) {
        $this->errorList = $vals['errorList'];
      }
    }
  }

  public function getName() {
    return 'CallbackUrl';
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
            $this->successList = array();
            $_size0 = 0;
            $_etype3 = 0;
            $xfer += $input->readListBegin($_etype3, $_size0);
            for ($_i4 = 0; $_i4 < $_size0; ++$_i4) {
              $elem5 = null;
              $xfer += $input->readString($elem5);
              $this->successList[] = $elem5;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::LST) {
            $this->errorList = array();
            $_size6 = 0;
            $_etype9 = 0;
            $xfer += $input->readListBegin($_etype9, $_size6);
            for ($_i10 = 0; $_i10 < $_size6; ++$_i10) {
              $elem11 = null;
              $xfer += $input->readString($elem11);
              $this->errorList[] = $elem11;
            }
            $xfer += $input->readListEnd();
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
    $xfer += $output->writeStructBegin('CallbackUrl');
    if ($this->successList !== null) {
      if (!is_array($this->successList)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('successList', TType::LST, 1);
      {
        $output->writeListBegin(TType::STRING, count($this->successList));
        {
          foreach ($this->successList as $iter12) {
            $xfer += $output->writeString($iter12);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->errorList !== null) {
      if (!is_array($this->errorList)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('errorList', TType::LST, 2);
      {
        $output->writeListBegin(TType::STRING, count($this->errorList));
        {
          foreach ($this->errorList as $iter13) {
            $xfer += $output->writeString($iter13);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class SendMailRequest {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Mail\MailInfo
   */
  public $mailInfo = null;
  /**
   * @var \Miczone\Thrift\Mail\CallbackUrl
   */
  public $callbackUrl = null;
  /**
   * @var bool
   */
  public $isDebug = false;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'mailInfo',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Mail\MailInfo',
        ),
        2 => array(
          'var' => 'callbackUrl',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Mail\CallbackUrl',
        ),
        3 => array(
          'var' => 'isDebug',
          'type' => TType::BOOL,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['mailInfo'])) {
        $this->mailInfo = $vals['mailInfo'];
      }
      if (isset($vals['callbackUrl'])) {
        $this->callbackUrl = $vals['callbackUrl'];
      }
      if (isset($vals['isDebug'])) {
        $this->isDebug = $vals['isDebug'];
      }
    }
  }

  public function getName() {
    return 'SendMailRequest';
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
            $this->mailInfo = new \Miczone\Thrift\Mail\MailInfo();
            $xfer += $this->mailInfo->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRUCT) {
            $this->callbackUrl = new \Miczone\Thrift\Mail\CallbackUrl();
            $xfer += $this->callbackUrl->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
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
    $xfer += $output->writeStructBegin('SendMailRequest');
    if ($this->mailInfo !== null) {
      if (!is_object($this->mailInfo)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('mailInfo', TType::STRUCT, 1);
      $xfer += $this->mailInfo->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->callbackUrl !== null) {
      if (!is_object($this->callbackUrl)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('callbackUrl', TType::STRUCT, 2);
      $xfer += $this->callbackUrl->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->isDebug !== null) {
      $xfer += $output->writeFieldBegin('isDebug', TType::BOOL, 3);
      $xfer += $output->writeBool($this->isDebug);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class SendMailResponse {
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
    return 'SendMailResponse';
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
    $xfer += $output->writeStructBegin('SendMailResponse');
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

class GetMailInfoRequest {
  static $_TSPEC;

  /**
   * @var int
   */
  public $fromWebsite = null;
  /**
   * @var int
   */
  public $partition = null;
  /**
   * @var int
   */
  public $offset = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'fromWebsite',
          'type' => TType::BYTE,
        ),
        2 => array(
          'var' => 'partition',
          'type' => TType::I32,
        ),
        3 => array(
          'var' => 'offset',
          'type' => TType::I64,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['fromWebsite'])) {
        $this->fromWebsite = $vals['fromWebsite'];
      }
      if (isset($vals['partition'])) {
        $this->partition = $vals['partition'];
      }
      if (isset($vals['offset'])) {
        $this->offset = $vals['offset'];
      }
    }
  }

  public function getName() {
    return 'GetMailInfoRequest';
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
          if ($ftype == TType::BYTE) {
            $xfer += $input->readByte($this->fromWebsite);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->partition);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->offset);
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
    $xfer += $output->writeStructBegin('GetMailInfoRequest');
    if ($this->fromWebsite !== null) {
      $xfer += $output->writeFieldBegin('fromWebsite', TType::BYTE, 1);
      $xfer += $output->writeByte($this->fromWebsite);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->partition !== null) {
      $xfer += $output->writeFieldBegin('partition', TType::I32, 2);
      $xfer += $output->writeI32($this->partition);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->offset !== null) {
      $xfer += $output->writeFieldBegin('offset', TType::I64, 3);
      $xfer += $output->writeI64($this->offset);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class GetMailInfoResponse {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\Error
   */
  public $error = null;
  /**
   * @var \Miczone\Thrift\Mail\MailInfo
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
          'class' => '\Miczone\Thrift\Mail\MailInfo',
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
    return 'GetMailInfoResponse';
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
            $this->data = new \Miczone\Thrift\Mail\MailInfo();
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
    $xfer += $output->writeStructBegin('GetMailInfoResponse');
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

class MailInfo {
  static $_TSPEC;

  /**
   * @var int
   */
  public $fromWebsite = null;
  /**
   * @var int
   */
  public $contentType = null;
  /**
   * @var string
   */
  public $fromEmail = null;
  /**
   * @var string
   */
  public $fromName = null;
  /**
   * @var \Miczone\Thrift\Mail\EmailNamePair[]
   */
  public $replyToList = null;
  /**
   * @var \Miczone\Thrift\Mail\EmailNamePair[]
   */
  public $toList = null;
  /**
   * @var \Miczone\Thrift\Mail\EmailNamePair[]
   */
  public $ccList = null;
  /**
   * @var \Miczone\Thrift\Mail\EmailNamePair[]
   */
  public $bccList = null;
  /**
   * @var string
   */
  public $bounceEmail = null;
  /**
   * @var string
   */
  public $subject = null;
  /**
   * @var string
   */
  public $content = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'fromWebsite',
          'type' => TType::BYTE,
        ),
        2 => array(
          'var' => 'contentType',
          'type' => TType::BYTE,
        ),
        3 => array(
          'var' => 'fromEmail',
          'type' => TType::STRING,
        ),
        4 => array(
          'var' => 'fromName',
          'type' => TType::STRING,
        ),
        5 => array(
          'var' => 'replyToList',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\Miczone\Thrift\Mail\EmailNamePair',
          ),
        ),
        6 => array(
          'var' => 'toList',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\Miczone\Thrift\Mail\EmailNamePair',
          ),
        ),
        7 => array(
          'var' => 'ccList',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\Miczone\Thrift\Mail\EmailNamePair',
          ),
        ),
        8 => array(
          'var' => 'bccList',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\Miczone\Thrift\Mail\EmailNamePair',
          ),
        ),
        9 => array(
          'var' => 'bounceEmail',
          'type' => TType::STRING,
        ),
        10 => array(
          'var' => 'subject',
          'type' => TType::STRING,
        ),
        11 => array(
          'var' => 'content',
          'type' => TType::STRING,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['fromWebsite'])) {
        $this->fromWebsite = $vals['fromWebsite'];
      }
      if (isset($vals['contentType'])) {
        $this->contentType = $vals['contentType'];
      }
      if (isset($vals['fromEmail'])) {
        $this->fromEmail = $vals['fromEmail'];
      }
      if (isset($vals['fromName'])) {
        $this->fromName = $vals['fromName'];
      }
      if (isset($vals['replyToList'])) {
        $this->replyToList = $vals['replyToList'];
      }
      if (isset($vals['toList'])) {
        $this->toList = $vals['toList'];
      }
      if (isset($vals['ccList'])) {
        $this->ccList = $vals['ccList'];
      }
      if (isset($vals['bccList'])) {
        $this->bccList = $vals['bccList'];
      }
      if (isset($vals['bounceEmail'])) {
        $this->bounceEmail = $vals['bounceEmail'];
      }
      if (isset($vals['subject'])) {
        $this->subject = $vals['subject'];
      }
      if (isset($vals['content'])) {
        $this->content = $vals['content'];
      }
    }
  }

  public function getName() {
    return 'MailInfo';
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
          if ($ftype == TType::BYTE) {
            $xfer += $input->readByte($this->fromWebsite);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::BYTE) {
            $xfer += $input->readByte($this->contentType);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->fromEmail);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->fromName);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::LST) {
            $this->replyToList = array();
            $_size14 = 0;
            $_etype17 = 0;
            $xfer += $input->readListBegin($_etype17, $_size14);
            for ($_i18 = 0; $_i18 < $_size14; ++$_i18) {
              $elem19 = null;
              $elem19 = new \Miczone\Thrift\Mail\EmailNamePair();
              $xfer += $elem19->read($input);
              $this->replyToList[] = $elem19;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::LST) {
            $this->toList = array();
            $_size20 = 0;
            $_etype23 = 0;
            $xfer += $input->readListBegin($_etype23, $_size20);
            for ($_i24 = 0; $_i24 < $_size20; ++$_i24) {
              $elem25 = null;
              $elem25 = new \Miczone\Thrift\Mail\EmailNamePair();
              $xfer += $elem25->read($input);
              $this->toList[] = $elem25;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::LST) {
            $this->ccList = array();
            $_size26 = 0;
            $_etype29 = 0;
            $xfer += $input->readListBegin($_etype29, $_size26);
            for ($_i30 = 0; $_i30 < $_size26; ++$_i30) {
              $elem31 = null;
              $elem31 = new \Miczone\Thrift\Mail\EmailNamePair();
              $xfer += $elem31->read($input);
              $this->ccList[] = $elem31;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 8:
          if ($ftype == TType::LST) {
            $this->bccList = array();
            $_size32 = 0;
            $_etype35 = 0;
            $xfer += $input->readListBegin($_etype35, $_size32);
            for ($_i36 = 0; $_i36 < $_size32; ++$_i36) {
              $elem37 = null;
              $elem37 = new \Miczone\Thrift\Mail\EmailNamePair();
              $xfer += $elem37->read($input);
              $this->bccList[] = $elem37;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 9:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->bounceEmail);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 10:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->subject);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 11:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->content);
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
    $xfer += $output->writeStructBegin('MailInfo');
    if ($this->fromWebsite !== null) {
      $xfer += $output->writeFieldBegin('fromWebsite', TType::BYTE, 1);
      $xfer += $output->writeByte($this->fromWebsite);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->contentType !== null) {
      $xfer += $output->writeFieldBegin('contentType', TType::BYTE, 2);
      $xfer += $output->writeByte($this->contentType);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->fromEmail !== null) {
      $xfer += $output->writeFieldBegin('fromEmail', TType::STRING, 3);
      $xfer += $output->writeString($this->fromEmail);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->fromName !== null) {
      $xfer += $output->writeFieldBegin('fromName', TType::STRING, 4);
      $xfer += $output->writeString($this->fromName);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->replyToList !== null) {
      if (!is_array($this->replyToList)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('replyToList', TType::LST, 5);
      {
        $output->writeListBegin(TType::STRUCT, count($this->replyToList));
        {
          foreach ($this->replyToList as $iter38) {
            $xfer += $iter38->write($output);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->toList !== null) {
      if (!is_array($this->toList)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('toList', TType::LST, 6);
      {
        $output->writeListBegin(TType::STRUCT, count($this->toList));
        {
          foreach ($this->toList as $iter39) {
            $xfer += $iter39->write($output);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->ccList !== null) {
      if (!is_array($this->ccList)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('ccList', TType::LST, 7);
      {
        $output->writeListBegin(TType::STRUCT, count($this->ccList));
        {
          foreach ($this->ccList as $iter40) {
            $xfer += $iter40->write($output);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->bccList !== null) {
      if (!is_array($this->bccList)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('bccList', TType::LST, 8);
      {
        $output->writeListBegin(TType::STRUCT, count($this->bccList));
        {
          foreach ($this->bccList as $iter41) {
            $xfer += $iter41->write($output);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->bounceEmail !== null) {
      $xfer += $output->writeFieldBegin('bounceEmail', TType::STRING, 9);
      $xfer += $output->writeString($this->bounceEmail);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->subject !== null) {
      $xfer += $output->writeFieldBegin('subject', TType::STRING, 10);
      $xfer += $output->writeString($this->subject);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->content !== null) {
      $xfer += $output->writeFieldBegin('content', TType::STRING, 11);
      $xfer += $output->writeString($this->content);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

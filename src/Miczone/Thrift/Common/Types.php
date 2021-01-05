<?php
namespace Miczone\Thrift\Common;

use Thrift\Exception\TProtocolException;
use Thrift\Type\TType;

final class ScaleMode {
  const FAIL_OVER = 1;
  const BALANCING = 2;
  public static $__names = array(
    1 => 'FAIL_OVER',
    2 => 'BALANCING',
  );
}

final class PoolSelectOption {
  const ANY = 1;
  const FIRST = 2;
  const ALIVE = 3;
  const ALIVE_OR_FIRST = 4;
  const ANY_ALIVE = 5;
  const ANY_ALIVE_OR_FIRST = 6;
  public static $__names = array(
    1 => 'ANY',
    2 => 'FIRST',
    3 => 'ALIVE',
    4 => 'ALIVE_OR_FIRST',
    5 => 'ANY_ALIVE',
    6 => 'ANY_ALIVE_OR_FIRST',
  );
}

final class CacheType {
  const GUAVA = 1;
  const REDIS = 2;
  const MEMCACHED = 3;
  public static $__names = array(
    1 => 'GUAVA',
    2 => 'REDIS',
    3 => 'MEMCACHED',
  );
}

final class ConnectorType {
  const MYSQL = 1;
  const SQLSERVER = 2;
  const REDIS = 3;
  public static $__names = array(
    1 => 'MYSQL',
    2 => 'SQLSERVER',
    3 => 'REDIS',
  );
}

class Error {
  static $_TSPEC;

  /**
   * @var int
   */
  public $code = null;
  /**
   * @var string
   */
  public $message = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'code',
          'type' => TType::I32,
        ),
        2 => array(
          'var' => 'message',
          'type' => TType::STRING,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['code'])) {
        $this->code = $vals['code'];
      }
      if (isset($vals['message'])) {
        $this->message = $vals['message'];
      }
    }
  }

  public function getName() {
    return 'Error';
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
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->code);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->message);
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
    $xfer += $output->writeStructBegin('Error');
    if ($this->code !== null) {
      $xfer += $output->writeFieldBegin('code', TType::I32, 1);
      $xfer += $output->writeI32($this->code);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->message !== null) {
      $xfer += $output->writeFieldBegin('message', TType::STRING, 2);
      $xfer += $output->writeString($this->message);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class ErrorMap {
  static $_TSPEC;

  /**
   * @var array
   */
  public $codeMap = null;
  /**
   * @var array
   */
  public $messageMap = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'codeMap',
          'type' => TType::MAP,
          'ktype' => TType::I32,
          'vtype' => TType::I32,
          'key' => array(
            'type' => TType::I32,
          ),
          'val' => array(
            'type' => TType::I32,
          ),
        ),
        2 => array(
          'var' => 'messageMap',
          'type' => TType::MAP,
          'ktype' => TType::I32,
          'vtype' => TType::STRING,
          'key' => array(
            'type' => TType::I32,
          ),
          'val' => array(
            'type' => TType::STRING,
          ),
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['codeMap'])) {
        $this->codeMap = $vals['codeMap'];
      }
      if (isset($vals['messageMap'])) {
        $this->messageMap = $vals['messageMap'];
      }
    }
  }

  public function getName() {
    return 'ErrorMap';
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
          if ($ftype == TType::MAP) {
            $this->codeMap = array();
            $_size0 = 0;
            $_ktype1 = 0;
            $_vtype2 = 0;
            $xfer += $input->readMapBegin($_ktype1, $_vtype2, $_size0);
            for ($_i4 = 0; $_i4 < $_size0; ++$_i4) {
              $key5 = 0;
              $val6 = 0;
              $xfer += $input->readI32($key5);
              $xfer += $input->readI32($val6);
              $this->codeMap[$key5] = $val6;
            }
            $xfer += $input->readMapEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::MAP) {
            $this->messageMap = array();
            $_size7 = 0;
            $_ktype8 = 0;
            $_vtype9 = 0;
            $xfer += $input->readMapBegin($_ktype8, $_vtype9, $_size7);
            for ($_i11 = 0; $_i11 < $_size7; ++$_i11) {
              $key12 = 0;
              $val13 = '';
              $xfer += $input->readI32($key12);
              $xfer += $input->readString($val13);
              $this->messageMap[$key12] = $val13;
            }
            $xfer += $input->readMapEnd();
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
    $xfer += $output->writeStructBegin('ErrorMap');
    if ($this->codeMap !== null) {
      if (!is_array($this->codeMap)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('codeMap', TType::MAP, 1);
      {
        $output->writeMapBegin(TType::I32, TType::I32, count($this->codeMap));
        {
          foreach ($this->codeMap as $kiter14 => $viter15) {
            $xfer += $output->writeI32($kiter14);
            $xfer += $output->writeI32($viter15);
          }
        }
        $output->writeMapEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->messageMap !== null) {
      if (!is_array($this->messageMap)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('messageMap', TType::MAP, 2);
      {
        $output->writeMapBegin(TType::I32, TType::STRING, count($this->messageMap));
        {
          foreach ($this->messageMap as $kiter16 => $viter17) {
            $xfer += $output->writeI32($kiter16);
            $xfer += $output->writeString($viter17);
          }
        }
        $output->writeMapEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class OperationHandle {
  static $_TSPEC;

  /**
   * @var string
   */
  public $username = null;
  /**
   * @var string
   */
  public $password = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'username',
          'type' => TType::STRING,
        ),
        2 => array(
          'var' => 'password',
          'type' => TType::STRING,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['username'])) {
        $this->username = $vals['username'];
      }
      if (isset($vals['password'])) {
        $this->password = $vals['password'];
      }
    }
  }

  public function getName() {
    return 'OperationHandle';
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
            $xfer += $input->readString($this->username);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->password);
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
    $xfer += $output->writeStructBegin('OperationHandle');
    if ($this->username !== null) {
      $xfer += $output->writeFieldBegin('username', TType::STRING, 1);
      $xfer += $output->writeString($this->username);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->password !== null) {
      $xfer += $output->writeFieldBegin('password', TType::STRING, 2);
      $xfer += $output->writeString($this->password);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

final class ErrorCode {
  const SUCCESS = 0;
  const FAIL = -1;
  const EXCEPTION = -2;
  const INVALID_ACTION = -3;
  const INVALID_PARAMETER = -4;
  const OUT_OF_RANGE = -5;
  const NOT_FOUND = -6;
  const ALREADY_EXISTS = -7;
  const INVALID_CONFIG = -8;
  const MODEL_INTERNAL_SERVER_ERROR = -1000;
  const MODEL_NO_CONNECTION = -1001;
  const CONNECTOR_INTERNAL_SERVER_ERROR = -2000;
  const CONNECTOR_NO_CONNECTION = -2001;
  const CACHE_INTERNAL_SERVER_ERROR = -3000;
  const CACHE_NO_CONNECTION = -3001;
  const THRIFT_INTERNAL_SERVER_ERROR = -4000;
  const THRIFT_NO_CONNECTION = -4001;
  const THRIFT_WRONG_AUTH = -4002;
  const THRIFT_BAD_REQUEST = -4003;
  public static $__names = array(
    0 => 'SUCCESS',
    -1 => 'FAIL',
    -2 => 'EXCEPTION',
    -3 => 'INVALID_ACTION',
    -4 => 'INVALID_PARAMETER',
    -5 => 'OUT_OF_RANGE',
    -6 => 'NOT_FOUND',
    -7 => 'ALREADY_EXISTS',
    -8 => 'INVALID_CONFIG',
    -1000 => 'MODEL_INTERNAL_SERVER_ERROR',
    -1001 => 'MODEL_NO_CONNECTION',
    -2000 => 'CONNECTOR_INTERNAL_SERVER_ERROR',
    -2001 => 'CONNECTOR_NO_CONNECTION',
    -3000 => 'CACHE_INTERNAL_SERVER_ERROR',
    -3001 => 'CACHE_NO_CONNECTION',
    -4000 => 'THRIFT_INTERNAL_SERVER_ERROR',
    -4001 => 'THRIFT_NO_CONNECTION',
    -4002 => 'THRIFT_WRONG_AUTH',
    -4003 => 'THRIFT_BAD_REQUEST',
  );
}

final class AuthenticationErrorCode {
  const SESSION_HAS_EXPIRED = -5000;
  const SESSION_INVALID = -5001;
  const WRONG_AUTH = -5002;
  const NOT_LOGGED_IN = -5003;
  const ALREADY_LOGGED_IN = -5004;
  public static $__names = array(
    -5000 => 'SESSION_HAS_EXPIRED',
    -5001 => 'SESSION_INVALID',
    -5002 => 'WRONG_AUTH',
    -5003 => 'NOT_LOGGED_IN',
    -5004 => 'ALREADY_LOGGED_IN',
  );
}

final class AuthorizationErrorCode {
  const AUTHORIZE_UNSUPPORTED_RESPONSE_TYPE = -6000;
  const AUTHORIZE_INVALID_REQUEST = -6001;
  const AUTHORIZE_UNAUTHORIZED_CLIENT = -6002;
  const AUTHORIZE_INVALID_USER = -6003;
  const AUTHORIZE_INVALID_CLIENT = -6004;
  const AUTHORIZE_INVALID_SCOPE = -6005;
  const AUTHORIZE_SERVER_ERROR = -6006;
  const AUTHORIZE_TEMPORARILY_UNAVAILABLE = -6007;
  const OBTAIN_TOKEN_UNSUPPORTED_GRANT_TYPE = -6100;
  const OBTAIN_TOKEN_INVALID_REQUEST = -6101;
  const OBTAIN_TOKEN_INVALID_GRANT = -6102;
  const OBTAIN_TOKEN_UNAUTHORIZED_CLIENT = -6103;
  const OBTAIN_TOKEN_INVALID_USER = -6104;
  const OBTAIN_TOKEN_INVALID_CLIENT = -6105;
  const OBTAIN_TOKEN_INVALID_SCOPE = -6106;
  const OBTAIN_TOKEN_INVALID_TOKEN = -6107;
  const OBTAIN_TOKEN_SERVER_ERROR = -6108;
  const OBTAIN_TOKEN_TEMPORARILY_UNAVAILABLE = -6109;
  const REVOKE_TOKEN_UNSUPPORTED_TOKEN_TYPE = -6200;
  const REVOKE_TOKEN_INVALID_REQUEST = -6201;
  const REVOKE_TOKEN_SERVER_ERROR = -6202;
  const TOKEN_HAS_EXPIRED = -6500;
  const TOKEN_INVALID = -6501;
  public static $__names = array(
    -6000 => 'AUTHORIZE_UNSUPPORTED_RESPONSE_TYPE',
    -6001 => 'AUTHORIZE_INVALID_REQUEST',
    -6002 => 'AUTHORIZE_UNAUTHORIZED_CLIENT',
    -6003 => 'AUTHORIZE_INVALID_USER',
    -6004 => 'AUTHORIZE_INVALID_CLIENT',
    -6005 => 'AUTHORIZE_INVALID_SCOPE',
    -6006 => 'AUTHORIZE_SERVER_ERROR',
    -6007 => 'AUTHORIZE_TEMPORARILY_UNAVAILABLE',
    -6100 => 'OBTAIN_TOKEN_UNSUPPORTED_GRANT_TYPE',
    -6101 => 'OBTAIN_TOKEN_INVALID_REQUEST',
    -6102 => 'OBTAIN_TOKEN_INVALID_GRANT',
    -6103 => 'OBTAIN_TOKEN_UNAUTHORIZED_CLIENT',
    -6104 => 'OBTAIN_TOKEN_INVALID_USER',
    -6105 => 'OBTAIN_TOKEN_INVALID_CLIENT',
    -6106 => 'OBTAIN_TOKEN_INVALID_SCOPE',
    -6107 => 'OBTAIN_TOKEN_INVALID_TOKEN',
    -6108 => 'OBTAIN_TOKEN_SERVER_ERROR',
    -6109 => 'OBTAIN_TOKEN_TEMPORARILY_UNAVAILABLE',
    -6200 => 'REVOKE_TOKEN_UNSUPPORTED_TOKEN_TYPE',
    -6201 => 'REVOKE_TOKEN_INVALID_REQUEST',
    -6202 => 'REVOKE_TOKEN_SERVER_ERROR',
    -6500 => 'TOKEN_HAS_EXPIRED',
    -6501 => 'TOKEN_INVALID',
  );
}

final class EventBusErrorCode {
  const NOTIFIER_INVALID_CLIENT_ID = -7000;
  const NOTIFIER_INVALID_TOPIC = -7001;
  public static $__names = array(
    -7000 => 'NOTIFIER_INVALID_CLIENT_ID',
    -7001 => 'NOTIFIER_INVALID_TOPIC',
  );
}

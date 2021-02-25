<?php
namespace Miczone\Thrift\Catalog;

use Thrift\Exception\TProtocolException;
use Thrift\Type\TType;

final class ProductConditionCodeEnum {
  const ANY = 0;
  const new  = 1;
  const USED = 2;
  const COLLECTIBLE = 3;
  const REFURBISHED = 4;
  public static $__names = array(
    0 => 'ANY',
    1 => 'NEW',
    2 => 'USED',
    3 => 'COLLECTIBLE',
    4 => 'REFURBISHED',
  );
}

final class SearchProductSortByEnum {
  const FEATURED = 0;
  const NEWEST_ARRIVALS = 1;
  const PRICE_ASC = 2;
  const PRICE_DESC = 3;
  const RATING_STAR_ASC = 4;
  const RATING_STAR_DESC = 5;
  const TOTAL_REVIEW_ASC = 6;
  const TOTAL_REVIEW_DESC = 7;
  public static $__names = array(
    0 => 'FEATURED',
    1 => 'NEWEST_ARRIVALS',
    2 => 'PRICE_ASC',
    3 => 'PRICE_DESC',
    4 => 'RATING_STAR_ASC',
    5 => 'RATING_STAR_DESC',
    6 => 'TOTAL_REVIEW_ASC',
    7 => 'TOTAL_REVIEW_DESC',
  );
}

class GetProductByIdRequest {
  static $_TSPEC;

  /**
   * @var string
   */
  public $id = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'id',
          'type' => TType::STRING,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['id'])) {
        $this->id = $vals['id'];
      }
    }
  }

  public function getName() {
    return 'GetProductByIdRequest';
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
            $xfer += $input->readString($this->id);
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
    $xfer += $output->writeStructBegin('GetProductByIdRequest');
    if ($this->id !== null) {
      $xfer += $output->writeFieldBegin('id', TType::STRING, 1);
      $xfer += $output->writeString($this->id);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class GetProductByIdResponse {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\Error
   */
  public $error = null;
  /**
   * @var \Miczone\Thrift\Catalog\Product
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
          'class' => '\Miczone\Thrift\Catalog\Product',
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
    return 'GetProductByIdResponse';
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
            $this->data = new \Miczone\Thrift\Catalog\Product();
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
    $xfer += $output->writeStructBegin('GetProductByIdResponse');
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

class GetProductBySkuRequest {
  static $_TSPEC;

  /**
   * @var string
   */
  public $sku = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'sku',
          'type' => TType::STRING,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['sku'])) {
        $this->sku = $vals['sku'];
      }
    }
  }

  public function getName() {
    return 'GetProductBySkuRequest';
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
            $xfer += $input->readString($this->sku);
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
    $xfer += $output->writeStructBegin('GetProductBySkuRequest');
    if ($this->sku !== null) {
      $xfer += $output->writeFieldBegin('sku', TType::STRING, 1);
      $xfer += $output->writeString($this->sku);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class GetProductBySkuResponse {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\Error
   */
  public $error = null;
  /**
   * @var \Miczone\Thrift\Catalog\Product
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
          'class' => '\Miczone\Thrift\Catalog\Product',
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
    return 'GetProductBySkuResponse';
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
            $this->data = new \Miczone\Thrift\Catalog\Product();
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
    $xfer += $output->writeStructBegin('GetProductBySkuResponse');
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

class MultiGetProductByIdListRequest {
  static $_TSPEC;

  /**
   * @var string[]
   */
  public $idList = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'idList',
          'type' => TType::LST,
          'etype' => TType::STRING,
          'elem' => array(
            'type' => TType::STRING,
          ),
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['idList'])) {
        $this->idList = $vals['idList'];
      }
    }
  }

  public function getName() {
    return 'MultiGetProductByIdListRequest';
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
            $this->idList = array();
            $_size0 = 0;
            $_etype3 = 0;
            $xfer += $input->readListBegin($_etype3, $_size0);
            for ($_i4 = 0; $_i4 < $_size0; ++$_i4) {
              $elem5 = null;
              $xfer += $input->readString($elem5);
              $this->idList[] = $elem5;
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
    $xfer += $output->writeStructBegin('MultiGetProductByIdListRequest');
    if ($this->idList !== null) {
      if (!is_array($this->idList)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('idList', TType::LST, 1);
      {
        $output->writeListBegin(TType::STRING, count($this->idList));
        {
          foreach ($this->idList as $iter6) {
            $xfer += $output->writeString($iter6);
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

class MultiGetProductByIdListResponse {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\Error
   */
  public $error = null;
  /**
   * @var \Miczone\Thrift\Common\ErrorMap
   */
  public $errorMap = null;
  /**
   * @var array
   */
  public $dataMap = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'error',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Common\Error',
        ),
        2 => array(
          'var' => 'errorMap',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Common\ErrorMap',
        ),
        3 => array(
          'var' => 'dataMap',
          'type' => TType::MAP,
          'ktype' => TType::STRING,
          'vtype' => TType::STRUCT,
          'key' => array(
            'type' => TType::STRING,
          ),
          'val' => array(
            'type' => TType::STRUCT,
            'class' => '\Miczone\Thrift\Catalog\Product',
          ),
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['error'])) {
        $this->error = $vals['error'];
      }
      if (isset($vals['errorMap'])) {
        $this->errorMap = $vals['errorMap'];
      }
      if (isset($vals['dataMap'])) {
        $this->dataMap = $vals['dataMap'];
      }
    }
  }

  public function getName() {
    return 'MultiGetProductByIdListResponse';
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
            $this->errorMap = new \Miczone\Thrift\Common\ErrorMap();
            $xfer += $this->errorMap->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::MAP) {
            $this->dataMap = array();
            $_size7 = 0;
            $_ktype8 = 0;
            $_vtype9 = 0;
            $xfer += $input->readMapBegin($_ktype8, $_vtype9, $_size7);
            for ($_i11 = 0; $_i11 < $_size7; ++$_i11) {
              $key12 = '';
              $val13 = new \Miczone\Thrift\Catalog\Product();
              $xfer += $input->readString($key12);
              $val13 = new \Miczone\Thrift\Catalog\Product();
              $xfer += $val13->read($input);
              $this->dataMap[$key12] = $val13;
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
    $xfer += $output->writeStructBegin('MultiGetProductByIdListResponse');
    if ($this->error !== null) {
      if (!is_object($this->error)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('error', TType::STRUCT, 1);
      $xfer += $this->error->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->errorMap !== null) {
      if (!is_object($this->errorMap)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('errorMap', TType::STRUCT, 2);
      $xfer += $this->errorMap->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->dataMap !== null) {
      if (!is_array($this->dataMap)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('dataMap', TType::MAP, 3);
      {
        $output->writeMapBegin(TType::STRING, TType::STRUCT, count($this->dataMap));
        {
          foreach ($this->dataMap as $kiter14 => $viter15) {
            $xfer += $output->writeString($kiter14);
            $xfer += $viter15->write($output);
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

class MultiGetProductBySkuListRequest {
  static $_TSPEC;

  /**
   * @var string[]
   */
  public $skuList = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'skuList',
          'type' => TType::LST,
          'etype' => TType::STRING,
          'elem' => array(
            'type' => TType::STRING,
          ),
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['skuList'])) {
        $this->skuList = $vals['skuList'];
      }
    }
  }

  public function getName() {
    return 'MultiGetProductBySkuListRequest';
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
            $this->skuList = array();
            $_size16 = 0;
            $_etype19 = 0;
            $xfer += $input->readListBegin($_etype19, $_size16);
            for ($_i20 = 0; $_i20 < $_size16; ++$_i20) {
              $elem21 = null;
              $xfer += $input->readString($elem21);
              $this->skuList[] = $elem21;
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
    $xfer += $output->writeStructBegin('MultiGetProductBySkuListRequest');
    if ($this->skuList !== null) {
      if (!is_array($this->skuList)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('skuList', TType::LST, 1);
      {
        $output->writeListBegin(TType::STRING, count($this->skuList));
        {
          foreach ($this->skuList as $iter22) {
            $xfer += $output->writeString($iter22);
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

class MultiGetProductBySkuListResponse {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\Error
   */
  public $error = null;
  /**
   * @var \Miczone\Thrift\Common\ErrorMap
   */
  public $errorMap = null;
  /**
   * @var array
   */
  public $dataMap = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'error',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Common\Error',
        ),
        2 => array(
          'var' => 'errorMap',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Common\ErrorMap',
        ),
        3 => array(
          'var' => 'dataMap',
          'type' => TType::MAP,
          'ktype' => TType::STRING,
          'vtype' => TType::STRUCT,
          'key' => array(
            'type' => TType::STRING,
          ),
          'val' => array(
            'type' => TType::STRUCT,
            'class' => '\Miczone\Thrift\Catalog\Product',
          ),
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['error'])) {
        $this->error = $vals['error'];
      }
      if (isset($vals['errorMap'])) {
        $this->errorMap = $vals['errorMap'];
      }
      if (isset($vals['dataMap'])) {
        $this->dataMap = $vals['dataMap'];
      }
    }
  }

  public function getName() {
    return 'MultiGetProductBySkuListResponse';
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
            $this->errorMap = new \Miczone\Thrift\Common\ErrorMap();
            $xfer += $this->errorMap->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::MAP) {
            $this->dataMap = array();
            $_size23 = 0;
            $_ktype24 = 0;
            $_vtype25 = 0;
            $xfer += $input->readMapBegin($_ktype24, $_vtype25, $_size23);
            for ($_i27 = 0; $_i27 < $_size23; ++$_i27) {
              $key28 = '';
              $val29 = new \Miczone\Thrift\Catalog\Product();
              $xfer += $input->readString($key28);
              $val29 = new \Miczone\Thrift\Catalog\Product();
              $xfer += $val29->read($input);
              $this->dataMap[$key28] = $val29;
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
    $xfer += $output->writeStructBegin('MultiGetProductBySkuListResponse');
    if ($this->error !== null) {
      if (!is_object($this->error)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('error', TType::STRUCT, 1);
      $xfer += $this->error->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->errorMap !== null) {
      if (!is_object($this->errorMap)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('errorMap', TType::STRUCT, 2);
      $xfer += $this->errorMap->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->dataMap !== null) {
      if (!is_array($this->dataMap)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('dataMap', TType::MAP, 3);
      {
        $output->writeMapBegin(TType::STRING, TType::STRUCT, count($this->dataMap));
        {
          foreach ($this->dataMap as $kiter30 => $viter31) {
            $xfer += $output->writeString($kiter30);
            $xfer += $viter31->write($output);
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

class SearchProductRequest {
  static $_TSPEC;

  /**
   * @var string
   */
  public $sortBy = null;
  /**
   * @var int
   */
  public $productCount = null;
  /**
   * @var int
   */
  public $productPage = null;
  /**
   * @var bool
   */
  public $hasRefinement = null;
  /**
   * @var string
   */
  public $keyword = null;
  /**
   * @var string[]
   */
  public $categoryIdList = null;
  /**
   * @var string[]
   */
  public $websiteKeyList = null;
  /**
   * @var string[]
   */
  public $countryKeyList = null;
  /**
   * @var string[]
   */
  public $merchantKeyList = null;
  /**
   * @var string[]
   */
  public $brandKeyList = null;
  /**
   * @var string[]
   */
  public $conditionKeyList = null;
  /**
   * @var double
   */
  public $minPrice = null;
  /**
   * @var double
   */
  public $maxPrice = null;
  /**
   * @var double
   */
  public $ratingStar = null;
  /**
   * @var bool
   */
  public $hasFastShipping = null;
  /**
   * @var bool
   */
  public $hasDiscount = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'sortBy',
          'type' => TType::STRING,
        ),
        2 => array(
          'var' => 'productCount',
          'type' => TType::BYTE,
        ),
        3 => array(
          'var' => 'productPage',
          'type' => TType::I32,
        ),
        4 => array(
          'var' => 'hasRefinement',
          'type' => TType::BOOL,
        ),
        5 => array(
          'var' => 'keyword',
          'type' => TType::STRING,
        ),
        6 => array(
          'var' => 'categoryIdList',
          'type' => TType::LST,
          'etype' => TType::STRING,
          'elem' => array(
            'type' => TType::STRING,
          ),
        ),
        7 => array(
          'var' => 'websiteKeyList',
          'type' => TType::LST,
          'etype' => TType::STRING,
          'elem' => array(
            'type' => TType::STRING,
          ),
        ),
        8 => array(
          'var' => 'countryKeyList',
          'type' => TType::LST,
          'etype' => TType::STRING,
          'elem' => array(
            'type' => TType::STRING,
          ),
        ),
        9 => array(
          'var' => 'merchantKeyList',
          'type' => TType::LST,
          'etype' => TType::STRING,
          'elem' => array(
            'type' => TType::STRING,
          ),
        ),
        10 => array(
          'var' => 'brandKeyList',
          'type' => TType::LST,
          'etype' => TType::STRING,
          'elem' => array(
            'type' => TType::STRING,
          ),
        ),
        11 => array(
          'var' => 'conditionKeyList',
          'type' => TType::LST,
          'etype' => TType::STRING,
          'elem' => array(
            'type' => TType::STRING,
          ),
        ),
        12 => array(
          'var' => 'minPrice',
          'type' => TType::DOUBLE,
        ),
        13 => array(
          'var' => 'maxPrice',
          'type' => TType::DOUBLE,
        ),
        14 => array(
          'var' => 'ratingStar',
          'type' => TType::DOUBLE,
        ),
        15 => array(
          'var' => 'hasFastShipping',
          'type' => TType::BOOL,
        ),
        16 => array(
          'var' => 'hasDiscount',
          'type' => TType::BOOL,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['sortBy'])) {
        $this->sortBy = $vals['sortBy'];
      }
      if (isset($vals['productCount'])) {
        $this->productCount = $vals['productCount'];
      }
      if (isset($vals['productPage'])) {
        $this->productPage = $vals['productPage'];
      }
      if (isset($vals['hasRefinement'])) {
        $this->hasRefinement = $vals['hasRefinement'];
      }
      if (isset($vals['keyword'])) {
        $this->keyword = $vals['keyword'];
      }
      if (isset($vals['categoryIdList'])) {
        $this->categoryIdList = $vals['categoryIdList'];
      }
      if (isset($vals['websiteKeyList'])) {
        $this->websiteKeyList = $vals['websiteKeyList'];
      }
      if (isset($vals['countryKeyList'])) {
        $this->countryKeyList = $vals['countryKeyList'];
      }
      if (isset($vals['merchantKeyList'])) {
        $this->merchantKeyList = $vals['merchantKeyList'];
      }
      if (isset($vals['brandKeyList'])) {
        $this->brandKeyList = $vals['brandKeyList'];
      }
      if (isset($vals['conditionKeyList'])) {
        $this->conditionKeyList = $vals['conditionKeyList'];
      }
      if (isset($vals['minPrice'])) {
        $this->minPrice = $vals['minPrice'];
      }
      if (isset($vals['maxPrice'])) {
        $this->maxPrice = $vals['maxPrice'];
      }
      if (isset($vals['ratingStar'])) {
        $this->ratingStar = $vals['ratingStar'];
      }
      if (isset($vals['hasFastShipping'])) {
        $this->hasFastShipping = $vals['hasFastShipping'];
      }
      if (isset($vals['hasDiscount'])) {
        $this->hasDiscount = $vals['hasDiscount'];
      }
    }
  }

  public function getName() {
    return 'SearchProductRequest';
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
            $xfer += $input->readString($this->sortBy);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::BYTE) {
            $xfer += $input->readByte($this->productCount);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->productPage);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->hasRefinement);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->keyword);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::LST) {
            $this->categoryIdList = array();
            $_size32 = 0;
            $_etype35 = 0;
            $xfer += $input->readListBegin($_etype35, $_size32);
            for ($_i36 = 0; $_i36 < $_size32; ++$_i36) {
              $elem37 = null;
              $xfer += $input->readString($elem37);
              $this->categoryIdList[] = $elem37;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::LST) {
            $this->websiteKeyList = array();
            $_size38 = 0;
            $_etype41 = 0;
            $xfer += $input->readListBegin($_etype41, $_size38);
            for ($_i42 = 0; $_i42 < $_size38; ++$_i42) {
              $elem43 = null;
              $xfer += $input->readString($elem43);
              $this->websiteKeyList[] = $elem43;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 8:
          if ($ftype == TType::LST) {
            $this->countryKeyList = array();
            $_size44 = 0;
            $_etype47 = 0;
            $xfer += $input->readListBegin($_etype47, $_size44);
            for ($_i48 = 0; $_i48 < $_size44; ++$_i48) {
              $elem49 = null;
              $xfer += $input->readString($elem49);
              $this->countryKeyList[] = $elem49;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 9:
          if ($ftype == TType::LST) {
            $this->merchantKeyList = array();
            $_size50 = 0;
            $_etype53 = 0;
            $xfer += $input->readListBegin($_etype53, $_size50);
            for ($_i54 = 0; $_i54 < $_size50; ++$_i54) {
              $elem55 = null;
              $xfer += $input->readString($elem55);
              $this->merchantKeyList[] = $elem55;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 10:
          if ($ftype == TType::LST) {
            $this->brandKeyList = array();
            $_size56 = 0;
            $_etype59 = 0;
            $xfer += $input->readListBegin($_etype59, $_size56);
            for ($_i60 = 0; $_i60 < $_size56; ++$_i60) {
              $elem61 = null;
              $xfer += $input->readString($elem61);
              $this->brandKeyList[] = $elem61;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 11:
          if ($ftype == TType::LST) {
            $this->conditionKeyList = array();
            $_size62 = 0;
            $_etype65 = 0;
            $xfer += $input->readListBegin($_etype65, $_size62);
            for ($_i66 = 0; $_i66 < $_size62; ++$_i66) {
              $elem67 = null;
              $xfer += $input->readString($elem67);
              $this->conditionKeyList[] = $elem67;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 12:
          if ($ftype == TType::DOUBLE) {
            $xfer += $input->readDouble($this->minPrice);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 13:
          if ($ftype == TType::DOUBLE) {
            $xfer += $input->readDouble($this->maxPrice);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 14:
          if ($ftype == TType::DOUBLE) {
            $xfer += $input->readDouble($this->ratingStar);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 15:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->hasFastShipping);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 16:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->hasDiscount);
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
    $xfer += $output->writeStructBegin('SearchProductRequest');
    if ($this->sortBy !== null) {
      $xfer += $output->writeFieldBegin('sortBy', TType::STRING, 1);
      $xfer += $output->writeString($this->sortBy);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->productCount !== null) {
      $xfer += $output->writeFieldBegin('productCount', TType::BYTE, 2);
      $xfer += $output->writeByte($this->productCount);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->productPage !== null) {
      $xfer += $output->writeFieldBegin('productPage', TType::I32, 3);
      $xfer += $output->writeI32($this->productPage);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->hasRefinement !== null) {
      $xfer += $output->writeFieldBegin('hasRefinement', TType::BOOL, 4);
      $xfer += $output->writeBool($this->hasRefinement);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->keyword !== null) {
      $xfer += $output->writeFieldBegin('keyword', TType::STRING, 5);
      $xfer += $output->writeString($this->keyword);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->categoryIdList !== null) {
      if (!is_array($this->categoryIdList)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('categoryIdList', TType::LST, 6);
      {
        $output->writeListBegin(TType::STRING, count($this->categoryIdList));
        {
          foreach ($this->categoryIdList as $iter68) {
            $xfer += $output->writeString($iter68);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->websiteKeyList !== null) {
      if (!is_array($this->websiteKeyList)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('websiteKeyList', TType::LST, 7);
      {
        $output->writeListBegin(TType::STRING, count($this->websiteKeyList));
        {
          foreach ($this->websiteKeyList as $iter69) {
            $xfer += $output->writeString($iter69);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->countryKeyList !== null) {
      if (!is_array($this->countryKeyList)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('countryKeyList', TType::LST, 8);
      {
        $output->writeListBegin(TType::STRING, count($this->countryKeyList));
        {
          foreach ($this->countryKeyList as $iter70) {
            $xfer += $output->writeString($iter70);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->merchantKeyList !== null) {
      if (!is_array($this->merchantKeyList)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('merchantKeyList', TType::LST, 9);
      {
        $output->writeListBegin(TType::STRING, count($this->merchantKeyList));
        {
          foreach ($this->merchantKeyList as $iter71) {
            $xfer += $output->writeString($iter71);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->brandKeyList !== null) {
      if (!is_array($this->brandKeyList)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('brandKeyList', TType::LST, 10);
      {
        $output->writeListBegin(TType::STRING, count($this->brandKeyList));
        {
          foreach ($this->brandKeyList as $iter72) {
            $xfer += $output->writeString($iter72);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->conditionKeyList !== null) {
      if (!is_array($this->conditionKeyList)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('conditionKeyList', TType::LST, 11);
      {
        $output->writeListBegin(TType::STRING, count($this->conditionKeyList));
        {
          foreach ($this->conditionKeyList as $iter73) {
            $xfer += $output->writeString($iter73);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->minPrice !== null) {
      $xfer += $output->writeFieldBegin('minPrice', TType::DOUBLE, 12);
      $xfer += $output->writeDouble($this->minPrice);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->maxPrice !== null) {
      $xfer += $output->writeFieldBegin('maxPrice', TType::DOUBLE, 13);
      $xfer += $output->writeDouble($this->maxPrice);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->ratingStar !== null) {
      $xfer += $output->writeFieldBegin('ratingStar', TType::DOUBLE, 14);
      $xfer += $output->writeDouble($this->ratingStar);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->hasFastShipping !== null) {
      $xfer += $output->writeFieldBegin('hasFastShipping', TType::BOOL, 15);
      $xfer += $output->writeBool($this->hasFastShipping);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->hasDiscount !== null) {
      $xfer += $output->writeFieldBegin('hasDiscount', TType::BOOL, 16);
      $xfer += $output->writeBool($this->hasDiscount);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class SearchProductResponseDataRefinementCategoryGroupItem {
  static $_TSPEC;

  /**
   * @var string
   */
  public $id = null;
  /**
   * @var string
   */
  public $name = null;
  /**
   * @var string
   */
  public $slug = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'id',
          'type' => TType::STRING,
        ),
        2 => array(
          'var' => 'name',
          'type' => TType::STRING,
        ),
        3 => array(
          'var' => 'slug',
          'type' => TType::STRING,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['id'])) {
        $this->id = $vals['id'];
      }
      if (isset($vals['name'])) {
        $this->name = $vals['name'];
      }
      if (isset($vals['slug'])) {
        $this->slug = $vals['slug'];
      }
    }
  }

  public function getName() {
    return 'SearchProductResponseDataRefinementCategoryGroupItem';
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
            $xfer += $input->readString($this->id);
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
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->slug);
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
    $xfer += $output->writeStructBegin('SearchProductResponseDataRefinementCategoryGroupItem');
    if ($this->id !== null) {
      $xfer += $output->writeFieldBegin('id', TType::STRING, 1);
      $xfer += $output->writeString($this->id);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->name !== null) {
      $xfer += $output->writeFieldBegin('name', TType::STRING, 2);
      $xfer += $output->writeString($this->name);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->slug !== null) {
      $xfer += $output->writeFieldBegin('slug', TType::STRING, 3);
      $xfer += $output->writeString($this->slug);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class SearchProductResponseDataRefinementCategoryGroup {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Catalog\SearchProductResponseDataRefinementCategoryGroupItem
   */
  public $parentItem = null;
  /**
   * @var \Miczone\Thrift\Catalog\SearchProductResponseDataRefinementCategoryGroupItem
   */
  public $currentItem = null;
  /**
   * @var \Miczone\Thrift\Catalog\SearchProductResponseDataRefinementCategoryGroupItem[]
   */
  public $sameLevelItemList = null;
  /**
   * @var \Miczone\Thrift\Catalog\SearchProductResponseDataRefinementCategoryGroupItem[]
   */
  public $childItemList = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'parentItem',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\SearchProductResponseDataRefinementCategoryGroupItem',
        ),
        2 => array(
          'var' => 'currentItem',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\SearchProductResponseDataRefinementCategoryGroupItem',
        ),
        3 => array(
          'var' => 'sameLevelItemList',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\Miczone\Thrift\Catalog\SearchProductResponseDataRefinementCategoryGroupItem',
          ),
        ),
        4 => array(
          'var' => 'childItemList',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\Miczone\Thrift\Catalog\SearchProductResponseDataRefinementCategoryGroupItem',
          ),
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['parentItem'])) {
        $this->parentItem = $vals['parentItem'];
      }
      if (isset($vals['currentItem'])) {
        $this->currentItem = $vals['currentItem'];
      }
      if (isset($vals['sameLevelItemList'])) {
        $this->sameLevelItemList = $vals['sameLevelItemList'];
      }
      if (isset($vals['childItemList'])) {
        $this->childItemList = $vals['childItemList'];
      }
    }
  }

  public function getName() {
    return 'SearchProductResponseDataRefinementCategoryGroup';
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
            $this->parentItem = new \Miczone\Thrift\Catalog\SearchProductResponseDataRefinementCategoryGroupItem();
            $xfer += $this->parentItem->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRUCT) {
            $this->currentItem = new \Miczone\Thrift\Catalog\SearchProductResponseDataRefinementCategoryGroupItem();
            $xfer += $this->currentItem->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::LST) {
            $this->sameLevelItemList = array();
            $_size74 = 0;
            $_etype77 = 0;
            $xfer += $input->readListBegin($_etype77, $_size74);
            for ($_i78 = 0; $_i78 < $_size74; ++$_i78) {
              $elem79 = null;
              $elem79 = new \Miczone\Thrift\Catalog\SearchProductResponseDataRefinementCategoryGroupItem();
              $xfer += $elem79->read($input);
              $this->sameLevelItemList[] = $elem79;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::LST) {
            $this->childItemList = array();
            $_size80 = 0;
            $_etype83 = 0;
            $xfer += $input->readListBegin($_etype83, $_size80);
            for ($_i84 = 0; $_i84 < $_size80; ++$_i84) {
              $elem85 = null;
              $elem85 = new \Miczone\Thrift\Catalog\SearchProductResponseDataRefinementCategoryGroupItem();
              $xfer += $elem85->read($input);
              $this->childItemList[] = $elem85;
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
    $xfer += $output->writeStructBegin('SearchProductResponseDataRefinementCategoryGroup');
    if ($this->parentItem !== null) {
      if (!is_object($this->parentItem)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('parentItem', TType::STRUCT, 1);
      $xfer += $this->parentItem->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->currentItem !== null) {
      if (!is_object($this->currentItem)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('currentItem', TType::STRUCT, 2);
      $xfer += $this->currentItem->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->sameLevelItemList !== null) {
      if (!is_array($this->sameLevelItemList)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('sameLevelItemList', TType::LST, 3);
      {
        $output->writeListBegin(TType::STRUCT, count($this->sameLevelItemList));
        {
          foreach ($this->sameLevelItemList as $iter86) {
            $xfer += $iter86->write($output);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->childItemList !== null) {
      if (!is_array($this->childItemList)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('childItemList', TType::LST, 4);
      {
        $output->writeListBegin(TType::STRUCT, count($this->childItemList));
        {
          foreach ($this->childItemList as $iter87) {
            $xfer += $iter87->write($output);
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

class SearchProductResponseDataRefinementOtherGroupItem {
  static $_TSPEC;

  /**
   * @var string
   */
  public $key = null;
  /**
   * @var string
   */
  public $name = null;
  /**
   * @var int
   */
  public $totalProduct = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'key',
          'type' => TType::STRING,
        ),
        2 => array(
          'var' => 'name',
          'type' => TType::STRING,
        ),
        3 => array(
          'var' => 'totalProduct',
          'type' => TType::I64,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['key'])) {
        $this->key = $vals['key'];
      }
      if (isset($vals['name'])) {
        $this->name = $vals['name'];
      }
      if (isset($vals['totalProduct'])) {
        $this->totalProduct = $vals['totalProduct'];
      }
    }
  }

  public function getName() {
    return 'SearchProductResponseDataRefinementOtherGroupItem';
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
            $xfer += $input->readString($this->key);
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
        case 3:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->totalProduct);
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
    $xfer += $output->writeStructBegin('SearchProductResponseDataRefinementOtherGroupItem');
    if ($this->key !== null) {
      $xfer += $output->writeFieldBegin('key', TType::STRING, 1);
      $xfer += $output->writeString($this->key);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->name !== null) {
      $xfer += $output->writeFieldBegin('name', TType::STRING, 2);
      $xfer += $output->writeString($this->name);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->totalProduct !== null) {
      $xfer += $output->writeFieldBegin('totalProduct', TType::I64, 3);
      $xfer += $output->writeI64($this->totalProduct);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class SearchProductResponseDataRefinementOtherGroup {
  static $_TSPEC;

  /**
   * @var string
   */
  public $key = null;
  /**
   * @var string
   */
  public $name = null;
  /**
   * @var int
   */
  public $totalProduct = null;
  /**
   * @var \Miczone\Thrift\Catalog\SearchProductResponseDataRefinementOtherGroupItem[]
   */
  public $itemList = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'key',
          'type' => TType::STRING,
        ),
        2 => array(
          'var' => 'name',
          'type' => TType::STRING,
        ),
        3 => array(
          'var' => 'totalProduct',
          'type' => TType::I64,
        ),
        4 => array(
          'var' => 'itemList',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\Miczone\Thrift\Catalog\SearchProductResponseDataRefinementOtherGroupItem',
          ),
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['key'])) {
        $this->key = $vals['key'];
      }
      if (isset($vals['name'])) {
        $this->name = $vals['name'];
      }
      if (isset($vals['totalProduct'])) {
        $this->totalProduct = $vals['totalProduct'];
      }
      if (isset($vals['itemList'])) {
        $this->itemList = $vals['itemList'];
      }
    }
  }

  public function getName() {
    return 'SearchProductResponseDataRefinementOtherGroup';
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
            $xfer += $input->readString($this->key);
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
        case 3:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->totalProduct);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::LST) {
            $this->itemList = array();
            $_size88 = 0;
            $_etype91 = 0;
            $xfer += $input->readListBegin($_etype91, $_size88);
            for ($_i92 = 0; $_i92 < $_size88; ++$_i92) {
              $elem93 = null;
              $elem93 = new \Miczone\Thrift\Catalog\SearchProductResponseDataRefinementOtherGroupItem();
              $xfer += $elem93->read($input);
              $this->itemList[] = $elem93;
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
    $xfer += $output->writeStructBegin('SearchProductResponseDataRefinementOtherGroup');
    if ($this->key !== null) {
      $xfer += $output->writeFieldBegin('key', TType::STRING, 1);
      $xfer += $output->writeString($this->key);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->name !== null) {
      $xfer += $output->writeFieldBegin('name', TType::STRING, 2);
      $xfer += $output->writeString($this->name);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->totalProduct !== null) {
      $xfer += $output->writeFieldBegin('totalProduct', TType::I64, 3);
      $xfer += $output->writeI64($this->totalProduct);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->itemList !== null) {
      if (!is_array($this->itemList)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('itemList', TType::LST, 4);
      {
        $output->writeListBegin(TType::STRUCT, count($this->itemList));
        {
          foreach ($this->itemList as $iter94) {
            $xfer += $iter94->write($output);
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

class SearchProductResponseDataRefinement {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Catalog\SearchProductResponseDataRefinementCategoryGroup
   */
  public $categoryGroup = null;
  /**
   * @var \Miczone\Thrift\Catalog\SearchProductResponseDataRefinementOtherGroup[]
   */
  public $otherGroupList = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'categoryGroup',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\SearchProductResponseDataRefinementCategoryGroup',
        ),
        2 => array(
          'var' => 'otherGroupList',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\Miczone\Thrift\Catalog\SearchProductResponseDataRefinementOtherGroup',
          ),
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['categoryGroup'])) {
        $this->categoryGroup = $vals['categoryGroup'];
      }
      if (isset($vals['otherGroupList'])) {
        $this->otherGroupList = $vals['otherGroupList'];
      }
    }
  }

  public function getName() {
    return 'SearchProductResponseDataRefinement';
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
            $this->categoryGroup = new \Miczone\Thrift\Catalog\SearchProductResponseDataRefinementCategoryGroup();
            $xfer += $this->categoryGroup->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::LST) {
            $this->otherGroupList = array();
            $_size95 = 0;
            $_etype98 = 0;
            $xfer += $input->readListBegin($_etype98, $_size95);
            for ($_i99 = 0; $_i99 < $_size95; ++$_i99) {
              $elem100 = null;
              $elem100 = new \Miczone\Thrift\Catalog\SearchProductResponseDataRefinementOtherGroup();
              $xfer += $elem100->read($input);
              $this->otherGroupList[] = $elem100;
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
    $xfer += $output->writeStructBegin('SearchProductResponseDataRefinement');
    if ($this->categoryGroup !== null) {
      if (!is_object($this->categoryGroup)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('categoryGroup', TType::STRUCT, 1);
      $xfer += $this->categoryGroup->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->otherGroupList !== null) {
      if (!is_array($this->otherGroupList)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('otherGroupList', TType::LST, 2);
      {
        $output->writeListBegin(TType::STRUCT, count($this->otherGroupList));
        {
          foreach ($this->otherGroupList as $iter101) {
            $xfer += $iter101->write($output);
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

class SearchProductResponseData {
  static $_TSPEC;

  /**
   * @var int
   */
  public $totalProduct = null;
  /**
   * @var int
   */
  public $productCount = null;
  /**
   * @var int
   */
  public $productPage = null;
  /**
   * @var \Miczone\Thrift\Catalog\Product[]
   */
  public $productList = null;
  /**
   * @var \Miczone\Thrift\Catalog\SearchProductResponseDataRefinement
   */
  public $refinement = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'totalProduct',
          'type' => TType::I64,
        ),
        2 => array(
          'var' => 'productCount',
          'type' => TType::BYTE,
        ),
        3 => array(
          'var' => 'productPage',
          'type' => TType::I32,
        ),
        4 => array(
          'var' => 'productList',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\Miczone\Thrift\Catalog\Product',
          ),
        ),
        5 => array(
          'var' => 'refinement',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\SearchProductResponseDataRefinement',
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['totalProduct'])) {
        $this->totalProduct = $vals['totalProduct'];
      }
      if (isset($vals['productCount'])) {
        $this->productCount = $vals['productCount'];
      }
      if (isset($vals['productPage'])) {
        $this->productPage = $vals['productPage'];
      }
      if (isset($vals['productList'])) {
        $this->productList = $vals['productList'];
      }
      if (isset($vals['refinement'])) {
        $this->refinement = $vals['refinement'];
      }
    }
  }

  public function getName() {
    return 'SearchProductResponseData';
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
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->totalProduct);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::BYTE) {
            $xfer += $input->readByte($this->productCount);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->productPage);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::LST) {
            $this->productList = array();
            $_size102 = 0;
            $_etype105 = 0;
            $xfer += $input->readListBegin($_etype105, $_size102);
            for ($_i106 = 0; $_i106 < $_size102; ++$_i106) {
              $elem107 = null;
              $elem107 = new \Miczone\Thrift\Catalog\Product();
              $xfer += $elem107->read($input);
              $this->productList[] = $elem107;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::STRUCT) {
            $this->refinement = new \Miczone\Thrift\Catalog\SearchProductResponseDataRefinement();
            $xfer += $this->refinement->read($input);
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
    $xfer += $output->writeStructBegin('SearchProductResponseData');
    if ($this->totalProduct !== null) {
      $xfer += $output->writeFieldBegin('totalProduct', TType::I64, 1);
      $xfer += $output->writeI64($this->totalProduct);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->productCount !== null) {
      $xfer += $output->writeFieldBegin('productCount', TType::BYTE, 2);
      $xfer += $output->writeByte($this->productCount);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->productPage !== null) {
      $xfer += $output->writeFieldBegin('productPage', TType::I32, 3);
      $xfer += $output->writeI32($this->productPage);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->productList !== null) {
      if (!is_array($this->productList)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('productList', TType::LST, 4);
      {
        $output->writeListBegin(TType::STRUCT, count($this->productList));
        {
          foreach ($this->productList as $iter108) {
            $xfer += $iter108->write($output);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->refinement !== null) {
      if (!is_object($this->refinement)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('refinement', TType::STRUCT, 5);
      $xfer += $this->refinement->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class SearchProductResponse {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\Error
   */
  public $error = null;
  /**
   * @var \Miczone\Thrift\Catalog\SearchProductResponseData
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
          'class' => '\Miczone\Thrift\Catalog\SearchProductResponseData',
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
    return 'SearchProductResponse';
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
            $this->data = new \Miczone\Thrift\Catalog\SearchProductResponseData();
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
    $xfer += $output->writeStructBegin('SearchProductResponse');
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

class Product {
  static $_TSPEC;

  /**
   * @var int
   */
  public $createdAt = null;
  /**
   * @var int
   */
  public $updatedAt = null;
  /**
   * @var bool
   */
  public $isActive = null;
  /**
   * @var string
   */
  public $id = null;
  /**
   * @var string
   */
  public $sku = null;
  /**
   * @var string
   */
  public $name = null;
  /**
   * @var string
   */
  public $translatedName = null;
  /**
   * @var string
   */
  public $description = null;
  /**
   * @var string
   */
  public $avatar = null;
  /**
   * @var string[]
   */
  public $imageList = null;
  /**
   * @var double
   */
  public $ratingStar = null;
  /**
   * @var int
   */
  public $totalReview = null;
  /**
   * @var double
   */
  public $oldPrice = null;
  /**
   * @var double
   */
  public $price = null;
  /**
   * @var bool
   */
  public $hasFastShipping = null;
  /**
   * @var string
   */
  public $conditionCode = null;
  /**
   * @var \Miczone\Thrift\Catalog\SimpleOriginalCategory
   */
  public $originalCategory = null;
  /**
   * @var \Miczone\Thrift\Catalog\SimpleOriginalMerchant
   */
  public $originalMerchant = null;
  /**
   * @var \Miczone\Thrift\Catalog\SimpleOriginalBrand
   */
  public $originalBrand = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'createdAt',
          'type' => TType::I64,
        ),
        2 => array(
          'var' => 'updatedAt',
          'type' => TType::I64,
        ),
        3 => array(
          'var' => 'isActive',
          'type' => TType::BOOL,
        ),
        4 => array(
          'var' => 'id',
          'type' => TType::STRING,
        ),
        5 => array(
          'var' => 'sku',
          'type' => TType::STRING,
        ),
        6 => array(
          'var' => 'name',
          'type' => TType::STRING,
        ),
        7 => array(
          'var' => 'translatedName',
          'type' => TType::STRING,
        ),
        8 => array(
          'var' => 'description',
          'type' => TType::STRING,
        ),
        9 => array(
          'var' => 'avatar',
          'type' => TType::STRING,
        ),
        10 => array(
          'var' => 'imageList',
          'type' => TType::LST,
          'etype' => TType::STRING,
          'elem' => array(
            'type' => TType::STRING,
          ),
        ),
        11 => array(
          'var' => 'ratingStar',
          'type' => TType::DOUBLE,
        ),
        12 => array(
          'var' => 'totalReview',
          'type' => TType::I64,
        ),
        13 => array(
          'var' => 'oldPrice',
          'type' => TType::DOUBLE,
        ),
        14 => array(
          'var' => 'price',
          'type' => TType::DOUBLE,
        ),
        15 => array(
          'var' => 'hasFastShipping',
          'type' => TType::BOOL,
        ),
        16 => array(
          'var' => 'conditionCode',
          'type' => TType::STRING,
        ),
        17 => array(
          'var' => 'originalCategory',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\SimpleOriginalCategory',
        ),
        18 => array(
          'var' => 'originalMerchant',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\SimpleOriginalMerchant',
        ),
        19 => array(
          'var' => 'originalBrand',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\SimpleOriginalBrand',
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['createdAt'])) {
        $this->createdAt = $vals['createdAt'];
      }
      if (isset($vals['updatedAt'])) {
        $this->updatedAt = $vals['updatedAt'];
      }
      if (isset($vals['isActive'])) {
        $this->isActive = $vals['isActive'];
      }
      if (isset($vals['id'])) {
        $this->id = $vals['id'];
      }
      if (isset($vals['sku'])) {
        $this->sku = $vals['sku'];
      }
      if (isset($vals['name'])) {
        $this->name = $vals['name'];
      }
      if (isset($vals['translatedName'])) {
        $this->translatedName = $vals['translatedName'];
      }
      if (isset($vals['description'])) {
        $this->description = $vals['description'];
      }
      if (isset($vals['avatar'])) {
        $this->avatar = $vals['avatar'];
      }
      if (isset($vals['imageList'])) {
        $this->imageList = $vals['imageList'];
      }
      if (isset($vals['ratingStar'])) {
        $this->ratingStar = $vals['ratingStar'];
      }
      if (isset($vals['totalReview'])) {
        $this->totalReview = $vals['totalReview'];
      }
      if (isset($vals['oldPrice'])) {
        $this->oldPrice = $vals['oldPrice'];
      }
      if (isset($vals['price'])) {
        $this->price = $vals['price'];
      }
      if (isset($vals['hasFastShipping'])) {
        $this->hasFastShipping = $vals['hasFastShipping'];
      }
      if (isset($vals['conditionCode'])) {
        $this->conditionCode = $vals['conditionCode'];
      }
      if (isset($vals['originalCategory'])) {
        $this->originalCategory = $vals['originalCategory'];
      }
      if (isset($vals['originalMerchant'])) {
        $this->originalMerchant = $vals['originalMerchant'];
      }
      if (isset($vals['originalBrand'])) {
        $this->originalBrand = $vals['originalBrand'];
      }
    }
  }

  public function getName() {
    return 'Product';
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
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->createdAt);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->updatedAt);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->isActive);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->id);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->sku);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->name);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->translatedName);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 8:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->description);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 9:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->avatar);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 10:
          if ($ftype == TType::LST) {
            $this->imageList = array();
            $_size109 = 0;
            $_etype112 = 0;
            $xfer += $input->readListBegin($_etype112, $_size109);
            for ($_i113 = 0; $_i113 < $_size109; ++$_i113) {
              $elem114 = null;
              $xfer += $input->readString($elem114);
              $this->imageList[] = $elem114;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 11:
          if ($ftype == TType::DOUBLE) {
            $xfer += $input->readDouble($this->ratingStar);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 12:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->totalReview);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 13:
          if ($ftype == TType::DOUBLE) {
            $xfer += $input->readDouble($this->oldPrice);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 14:
          if ($ftype == TType::DOUBLE) {
            $xfer += $input->readDouble($this->price);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 15:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->hasFastShipping);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 16:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->conditionCode);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 17:
          if ($ftype == TType::STRUCT) {
            $this->originalCategory = new \Miczone\Thrift\Catalog\SimpleOriginalCategory();
            $xfer += $this->originalCategory->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 18:
          if ($ftype == TType::STRUCT) {
            $this->originalMerchant = new \Miczone\Thrift\Catalog\SimpleOriginalMerchant();
            $xfer += $this->originalMerchant->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 19:
          if ($ftype == TType::STRUCT) {
            $this->originalBrand = new \Miczone\Thrift\Catalog\SimpleOriginalBrand();
            $xfer += $this->originalBrand->read($input);
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
    $xfer += $output->writeStructBegin('Product');
    if ($this->createdAt !== null) {
      $xfer += $output->writeFieldBegin('createdAt', TType::I64, 1);
      $xfer += $output->writeI64($this->createdAt);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->updatedAt !== null) {
      $xfer += $output->writeFieldBegin('updatedAt', TType::I64, 2);
      $xfer += $output->writeI64($this->updatedAt);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->isActive !== null) {
      $xfer += $output->writeFieldBegin('isActive', TType::BOOL, 3);
      $xfer += $output->writeBool($this->isActive);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->id !== null) {
      $xfer += $output->writeFieldBegin('id', TType::STRING, 4);
      $xfer += $output->writeString($this->id);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->sku !== null) {
      $xfer += $output->writeFieldBegin('sku', TType::STRING, 5);
      $xfer += $output->writeString($this->sku);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->name !== null) {
      $xfer += $output->writeFieldBegin('name', TType::STRING, 6);
      $xfer += $output->writeString($this->name);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->translatedName !== null) {
      $xfer += $output->writeFieldBegin('translatedName', TType::STRING, 7);
      $xfer += $output->writeString($this->translatedName);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->description !== null) {
      $xfer += $output->writeFieldBegin('description', TType::STRING, 8);
      $xfer += $output->writeString($this->description);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->avatar !== null) {
      $xfer += $output->writeFieldBegin('avatar', TType::STRING, 9);
      $xfer += $output->writeString($this->avatar);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->imageList !== null) {
      if (!is_array($this->imageList)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('imageList', TType::LST, 10);
      {
        $output->writeListBegin(TType::STRING, count($this->imageList));
        {
          foreach ($this->imageList as $iter115) {
            $xfer += $output->writeString($iter115);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->ratingStar !== null) {
      $xfer += $output->writeFieldBegin('ratingStar', TType::DOUBLE, 11);
      $xfer += $output->writeDouble($this->ratingStar);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->totalReview !== null) {
      $xfer += $output->writeFieldBegin('totalReview', TType::I64, 12);
      $xfer += $output->writeI64($this->totalReview);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->oldPrice !== null) {
      $xfer += $output->writeFieldBegin('oldPrice', TType::DOUBLE, 13);
      $xfer += $output->writeDouble($this->oldPrice);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->price !== null) {
      $xfer += $output->writeFieldBegin('price', TType::DOUBLE, 14);
      $xfer += $output->writeDouble($this->price);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->hasFastShipping !== null) {
      $xfer += $output->writeFieldBegin('hasFastShipping', TType::BOOL, 15);
      $xfer += $output->writeBool($this->hasFastShipping);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->conditionCode !== null) {
      $xfer += $output->writeFieldBegin('conditionCode', TType::STRING, 16);
      $xfer += $output->writeString($this->conditionCode);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->originalCategory !== null) {
      if (!is_object($this->originalCategory)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('originalCategory', TType::STRUCT, 17);
      $xfer += $this->originalCategory->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->originalMerchant !== null) {
      if (!is_object($this->originalMerchant)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('originalMerchant', TType::STRUCT, 18);
      $xfer += $this->originalMerchant->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->originalBrand !== null) {
      if (!is_object($this->originalBrand)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('originalBrand', TType::STRUCT, 19);
      $xfer += $this->originalBrand->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class GetCategoryByIdRequest {
  static $_TSPEC;

  /**
   * @var string
   */
  public $id = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'id',
          'type' => TType::STRING,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['id'])) {
        $this->id = $vals['id'];
      }
    }
  }

  public function getName() {
    return 'GetCategoryByIdRequest';
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
            $xfer += $input->readString($this->id);
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
    $xfer += $output->writeStructBegin('GetCategoryByIdRequest');
    if ($this->id !== null) {
      $xfer += $output->writeFieldBegin('id', TType::STRING, 1);
      $xfer += $output->writeString($this->id);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class GetCategoryByIdResponse {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\Error
   */
  public $error = null;
  /**
   * @var \Miczone\Thrift\Catalog\Category
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
          'class' => '\Miczone\Thrift\Catalog\Category',
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
    return 'GetCategoryByIdResponse';
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
            $this->data = new \Miczone\Thrift\Catalog\Category();
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
    $xfer += $output->writeStructBegin('GetCategoryByIdResponse');
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

class GetCategoryBySlugRequest {
  static $_TSPEC;

  /**
   * @var string
   */
  public $slug = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'slug',
          'type' => TType::STRING,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['slug'])) {
        $this->slug = $vals['slug'];
      }
    }
  }

  public function getName() {
    return 'GetCategoryBySlugRequest';
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
            $xfer += $input->readString($this->slug);
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
    $xfer += $output->writeStructBegin('GetCategoryBySlugRequest');
    if ($this->slug !== null) {
      $xfer += $output->writeFieldBegin('slug', TType::STRING, 1);
      $xfer += $output->writeString($this->slug);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class GetCategoryBySlugResponse {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\Error
   */
  public $error = null;
  /**
   * @var \Miczone\Thrift\Catalog\Category
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
          'class' => '\Miczone\Thrift\Catalog\Category',
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
    return 'GetCategoryBySlugResponse';
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
            $this->data = new \Miczone\Thrift\Catalog\Category();
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
    $xfer += $output->writeStructBegin('GetCategoryBySlugResponse');
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

class MultiGetCategoryByIdListRequest {
  static $_TSPEC;

  /**
   * @var string[]
   */
  public $idList = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'idList',
          'type' => TType::LST,
          'etype' => TType::STRING,
          'elem' => array(
            'type' => TType::STRING,
          ),
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['idList'])) {
        $this->idList = $vals['idList'];
      }
    }
  }

  public function getName() {
    return 'MultiGetCategoryByIdListRequest';
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
            $this->idList = array();
            $_size0 = 0;
            $_etype3 = 0;
            $xfer += $input->readListBegin($_etype3, $_size0);
            for ($_i4 = 0; $_i4 < $_size0; ++$_i4) {
              $elem5 = null;
              $xfer += $input->readString($elem5);
              $this->idList[] = $elem5;
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
    $xfer += $output->writeStructBegin('MultiGetCategoryByIdListRequest');
    if ($this->idList !== null) {
      if (!is_array($this->idList)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('idList', TType::LST, 1);
      {
        $output->writeListBegin(TType::STRING, count($this->idList));
        {
          foreach ($this->idList as $iter6) {
            $xfer += $output->writeString($iter6);
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

class MultiGetCategoryByIdListResponse {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\Error
   */
  public $error = null;
  /**
   * @var \Miczone\Thrift\Common\ErrorMap
   */
  public $errorMap = null;
  /**
   * @var array
   */
  public $dataMap = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'error',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Common\Error',
        ),
        2 => array(
          'var' => 'errorMap',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Common\ErrorMap',
        ),
        3 => array(
          'var' => 'dataMap',
          'type' => TType::MAP,
          'ktype' => TType::STRING,
          'vtype' => TType::STRUCT,
          'key' => array(
            'type' => TType::STRING,
          ),
          'val' => array(
            'type' => TType::STRUCT,
            'class' => '\Miczone\Thrift\Catalog\Category',
          ),
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['error'])) {
        $this->error = $vals['error'];
      }
      if (isset($vals['errorMap'])) {
        $this->errorMap = $vals['errorMap'];
      }
      if (isset($vals['dataMap'])) {
        $this->dataMap = $vals['dataMap'];
      }
    }
  }

  public function getName() {
    return 'MultiGetCategoryByIdListResponse';
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
            $this->errorMap = new \Miczone\Thrift\Common\ErrorMap();
            $xfer += $this->errorMap->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::MAP) {
            $this->dataMap = array();
            $_size7 = 0;
            $_ktype8 = 0;
            $_vtype9 = 0;
            $xfer += $input->readMapBegin($_ktype8, $_vtype9, $_size7);
            for ($_i11 = 0; $_i11 < $_size7; ++$_i11) {
              $key12 = '';
              $val13 = new \Miczone\Thrift\Catalog\Category();
              $xfer += $input->readString($key12);
              $val13 = new \Miczone\Thrift\Catalog\Category();
              $xfer += $val13->read($input);
              $this->dataMap[$key12] = $val13;
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
    $xfer += $output->writeStructBegin('MultiGetCategoryByIdListResponse');
    if ($this->error !== null) {
      if (!is_object($this->error)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('error', TType::STRUCT, 1);
      $xfer += $this->error->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->errorMap !== null) {
      if (!is_object($this->errorMap)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('errorMap', TType::STRUCT, 2);
      $xfer += $this->errorMap->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->dataMap !== null) {
      if (!is_array($this->dataMap)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('dataMap', TType::MAP, 3);
      {
        $output->writeMapBegin(TType::STRING, TType::STRUCT, count($this->dataMap));
        {
          foreach ($this->dataMap as $kiter14 => $viter15) {
            $xfer += $output->writeString($kiter14);
            $xfer += $viter15->write($output);
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

class MultiGetCategoryBySlugListRequest {
  static $_TSPEC;

  /**
   * @var string[]
   */
  public $slugList = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'slugList',
          'type' => TType::LST,
          'etype' => TType::STRING,
          'elem' => array(
            'type' => TType::STRING,
          ),
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['slugList'])) {
        $this->slugList = $vals['slugList'];
      }
    }
  }

  public function getName() {
    return 'MultiGetCategoryBySlugListRequest';
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
            $this->slugList = array();
            $_size16 = 0;
            $_etype19 = 0;
            $xfer += $input->readListBegin($_etype19, $_size16);
            for ($_i20 = 0; $_i20 < $_size16; ++$_i20) {
              $elem21 = null;
              $xfer += $input->readString($elem21);
              $this->slugList[] = $elem21;
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
    $xfer += $output->writeStructBegin('MultiGetCategoryBySlugListRequest');
    if ($this->slugList !== null) {
      if (!is_array($this->slugList)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('slugList', TType::LST, 1);
      {
        $output->writeListBegin(TType::STRING, count($this->slugList));
        {
          foreach ($this->slugList as $iter22) {
            $xfer += $output->writeString($iter22);
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

class MultiGetCategoryBySlugListResponse {
  static $_TSPEC;

  /**
   * @var \Miczone\Thrift\Common\Error
   */
  public $error = null;
  /**
   * @var \Miczone\Thrift\Common\ErrorMap
   */
  public $errorMap = null;
  /**
   * @var array
   */
  public $dataMap = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'error',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Common\Error',
        ),
        2 => array(
          'var' => 'errorMap',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Common\ErrorMap',
        ),
        3 => array(
          'var' => 'dataMap',
          'type' => TType::MAP,
          'ktype' => TType::STRING,
          'vtype' => TType::STRUCT,
          'key' => array(
            'type' => TType::STRING,
          ),
          'val' => array(
            'type' => TType::STRUCT,
            'class' => '\Miczone\Thrift\Catalog\Category',
          ),
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['error'])) {
        $this->error = $vals['error'];
      }
      if (isset($vals['errorMap'])) {
        $this->errorMap = $vals['errorMap'];
      }
      if (isset($vals['dataMap'])) {
        $this->dataMap = $vals['dataMap'];
      }
    }
  }

  public function getName() {
    return 'MultiGetCategoryBySlugListResponse';
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
            $this->errorMap = new \Miczone\Thrift\Common\ErrorMap();
            $xfer += $this->errorMap->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::MAP) {
            $this->dataMap = array();
            $_size23 = 0;
            $_ktype24 = 0;
            $_vtype25 = 0;
            $xfer += $input->readMapBegin($_ktype24, $_vtype25, $_size23);
            for ($_i27 = 0; $_i27 < $_size23; ++$_i27) {
              $key28 = '';
              $val29 = new \Miczone\Thrift\Catalog\Category();
              $xfer += $input->readString($key28);
              $val29 = new \Miczone\Thrift\Catalog\Category();
              $xfer += $val29->read($input);
              $this->dataMap[$key28] = $val29;
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
    $xfer += $output->writeStructBegin('MultiGetCategoryBySlugListResponse');
    if ($this->error !== null) {
      if (!is_object($this->error)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('error', TType::STRUCT, 1);
      $xfer += $this->error->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->errorMap !== null) {
      if (!is_object($this->errorMap)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('errorMap', TType::STRUCT, 2);
      $xfer += $this->errorMap->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->dataMap !== null) {
      if (!is_array($this->dataMap)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('dataMap', TType::MAP, 3);
      {
        $output->writeMapBegin(TType::STRING, TType::STRUCT, count($this->dataMap));
        {
          foreach ($this->dataMap as $kiter30 => $viter31) {
            $xfer += $output->writeString($kiter30);
            $xfer += $viter31->write($output);
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

class Category {
  static $_TSPEC;

  /**
   * @var int
   */
  public $createdAt = null;
  /**
   * @var int
   */
  public $updatedAt = null;
  /**
   * @var bool
   */
  public $isActive = null;
  /**
   * @var string
   */
  public $id = null;
  /**
   * @var string
   */
  public $parentId = null;
  /**
   * @var string
   */
  public $name = null;
  /**
   * @var string
   */
  public $slug = null;
  /**
   * @var string
   */
  public $description = null;
  /**
   * @var string
   */
  public $metaTitle = null;
  /**
   * @var string
   */
  public $metaKeyword = null;
  /**
   * @var string
   */
  public $metaDescription = null;
  /**
   * @var \Miczone\Thrift\Catalog\SimpleOriginalCategory[]
   */
  public $originalCategoryList = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'createdAt',
          'type' => TType::I64,
        ),
        2 => array(
          'var' => 'updatedAt',
          'type' => TType::I64,
        ),
        3 => array(
          'var' => 'isActive',
          'type' => TType::BOOL,
        ),
        4 => array(
          'var' => 'id',
          'type' => TType::STRING,
        ),
        5 => array(
          'var' => 'parentId',
          'type' => TType::STRING,
        ),
        6 => array(
          'var' => 'name',
          'type' => TType::STRING,
        ),
        7 => array(
          'var' => 'slug',
          'type' => TType::STRING,
        ),
        8 => array(
          'var' => 'description',
          'type' => TType::STRING,
        ),
        9 => array(
          'var' => 'metaTitle',
          'type' => TType::STRING,
        ),
        10 => array(
          'var' => 'metaKeyword',
          'type' => TType::STRING,
        ),
        11 => array(
          'var' => 'metaDescription',
          'type' => TType::STRING,
        ),
        12 => array(
          'var' => 'originalCategoryList',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\Miczone\Thrift\Catalog\SimpleOriginalCategory',
          ),
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['createdAt'])) {
        $this->createdAt = $vals['createdAt'];
      }
      if (isset($vals['updatedAt'])) {
        $this->updatedAt = $vals['updatedAt'];
      }
      if (isset($vals['isActive'])) {
        $this->isActive = $vals['isActive'];
      }
      if (isset($vals['id'])) {
        $this->id = $vals['id'];
      }
      if (isset($vals['parentId'])) {
        $this->parentId = $vals['parentId'];
      }
      if (isset($vals['name'])) {
        $this->name = $vals['name'];
      }
      if (isset($vals['slug'])) {
        $this->slug = $vals['slug'];
      }
      if (isset($vals['description'])) {
        $this->description = $vals['description'];
      }
      if (isset($vals['metaTitle'])) {
        $this->metaTitle = $vals['metaTitle'];
      }
      if (isset($vals['metaKeyword'])) {
        $this->metaKeyword = $vals['metaKeyword'];
      }
      if (isset($vals['metaDescription'])) {
        $this->metaDescription = $vals['metaDescription'];
      }
      if (isset($vals['originalCategoryList'])) {
        $this->originalCategoryList = $vals['originalCategoryList'];
      }
    }
  }

  public function getName() {
    return 'Category';
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
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->createdAt);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->updatedAt);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->isActive);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->id);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->parentId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->name);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->slug);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 8:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->description);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 9:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->metaTitle);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 10:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->metaKeyword);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 11:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->metaDescription);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 12:
          if ($ftype == TType::LST) {
            $this->originalCategoryList = array();
            $_size32 = 0;
            $_etype35 = 0;
            $xfer += $input->readListBegin($_etype35, $_size32);
            for ($_i36 = 0; $_i36 < $_size32; ++$_i36) {
              $elem37 = null;
              $elem37 = new \Miczone\Thrift\Catalog\SimpleOriginalCategory();
              $xfer += $elem37->read($input);
              $this->originalCategoryList[] = $elem37;
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
    $xfer += $output->writeStructBegin('Category');
    if ($this->createdAt !== null) {
      $xfer += $output->writeFieldBegin('createdAt', TType::I64, 1);
      $xfer += $output->writeI64($this->createdAt);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->updatedAt !== null) {
      $xfer += $output->writeFieldBegin('updatedAt', TType::I64, 2);
      $xfer += $output->writeI64($this->updatedAt);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->isActive !== null) {
      $xfer += $output->writeFieldBegin('isActive', TType::BOOL, 3);
      $xfer += $output->writeBool($this->isActive);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->id !== null) {
      $xfer += $output->writeFieldBegin('id', TType::STRING, 4);
      $xfer += $output->writeString($this->id);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->parentId !== null) {
      $xfer += $output->writeFieldBegin('parentId', TType::STRING, 5);
      $xfer += $output->writeString($this->parentId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->name !== null) {
      $xfer += $output->writeFieldBegin('name', TType::STRING, 6);
      $xfer += $output->writeString($this->name);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->slug !== null) {
      $xfer += $output->writeFieldBegin('slug', TType::STRING, 7);
      $xfer += $output->writeString($this->slug);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->description !== null) {
      $xfer += $output->writeFieldBegin('description', TType::STRING, 8);
      $xfer += $output->writeString($this->description);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->metaTitle !== null) {
      $xfer += $output->writeFieldBegin('metaTitle', TType::STRING, 9);
      $xfer += $output->writeString($this->metaTitle);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->metaKeyword !== null) {
      $xfer += $output->writeFieldBegin('metaKeyword', TType::STRING, 10);
      $xfer += $output->writeString($this->metaKeyword);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->metaDescription !== null) {
      $xfer += $output->writeFieldBegin('metaDescription', TType::STRING, 11);
      $xfer += $output->writeString($this->metaDescription);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->originalCategoryList !== null) {
      if (!is_array($this->originalCategoryList)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('originalCategoryList', TType::LST, 12);
      {
        $output->writeListBegin(TType::STRUCT, count($this->originalCategoryList));
        {
          foreach ($this->originalCategoryList as $iter38) {
            $xfer += $iter38->write($output);
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

class OriginalCategory {
  static $_TSPEC;

  /**
   * @var int
   */
  public $createdAt = null;
  /**
   * @var int
   */
  public $updatedAt = null;
  /**
   * @var bool
   */
  public $isActive = null;
  /**
   * @var string
   */
  public $id = null;
  /**
   * @var string
   */
  public $sourceId = null;
  /**
   * @var string
   */
  public $originalCategoryId = null;
  /**
   * @var string
   */
  public $name = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'createdAt',
          'type' => TType::I64,
        ),
        2 => array(
          'var' => 'updatedAt',
          'type' => TType::I64,
        ),
        3 => array(
          'var' => 'isActive',
          'type' => TType::BOOL,
        ),
        4 => array(
          'var' => 'id',
          'type' => TType::STRING,
        ),
        5 => array(
          'var' => 'sourceId',
          'type' => TType::STRING,
        ),
        6 => array(
          'var' => 'originalCategoryId',
          'type' => TType::STRING,
        ),
        7 => array(
          'var' => 'name',
          'type' => TType::STRING,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['createdAt'])) {
        $this->createdAt = $vals['createdAt'];
      }
      if (isset($vals['updatedAt'])) {
        $this->updatedAt = $vals['updatedAt'];
      }
      if (isset($vals['isActive'])) {
        $this->isActive = $vals['isActive'];
      }
      if (isset($vals['id'])) {
        $this->id = $vals['id'];
      }
      if (isset($vals['sourceId'])) {
        $this->sourceId = $vals['sourceId'];
      }
      if (isset($vals['originalCategoryId'])) {
        $this->originalCategoryId = $vals['originalCategoryId'];
      }
      if (isset($vals['name'])) {
        $this->name = $vals['name'];
      }
    }
  }

  public function getName() {
    return 'OriginalCategory';
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
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->createdAt);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->updatedAt);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->isActive);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->id);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->sourceId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->originalCategoryId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
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
    $xfer += $output->writeStructBegin('OriginalCategory');
    if ($this->createdAt !== null) {
      $xfer += $output->writeFieldBegin('createdAt', TType::I64, 1);
      $xfer += $output->writeI64($this->createdAt);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->updatedAt !== null) {
      $xfer += $output->writeFieldBegin('updatedAt', TType::I64, 2);
      $xfer += $output->writeI64($this->updatedAt);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->isActive !== null) {
      $xfer += $output->writeFieldBegin('isActive', TType::BOOL, 3);
      $xfer += $output->writeBool($this->isActive);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->id !== null) {
      $xfer += $output->writeFieldBegin('id', TType::STRING, 4);
      $xfer += $output->writeString($this->id);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->sourceId !== null) {
      $xfer += $output->writeFieldBegin('sourceId', TType::STRING, 5);
      $xfer += $output->writeString($this->sourceId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->originalCategoryId !== null) {
      $xfer += $output->writeFieldBegin('originalCategoryId', TType::STRING, 6);
      $xfer += $output->writeString($this->originalCategoryId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->name !== null) {
      $xfer += $output->writeFieldBegin('name', TType::STRING, 7);
      $xfer += $output->writeString($this->name);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class SimpleOriginalCategory {
  static $_TSPEC;

  /**
   * @var string
   */
  public $id = null;
  /**
   * @var \Miczone\Thrift\Catalog\SimpleSource
   */
  public $source = null;
  /**
   * @var string
   */
  public $originalCategoryId = null;
  /**
   * @var string
   */
  public $name = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'id',
          'type' => TType::STRING,
        ),
        2 => array(
          'var' => 'source',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\SimpleSource',
        ),
        3 => array(
          'var' => 'originalCategoryId',
          'type' => TType::STRING,
        ),
        4 => array(
          'var' => 'name',
          'type' => TType::STRING,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['id'])) {
        $this->id = $vals['id'];
      }
      if (isset($vals['source'])) {
        $this->source = $vals['source'];
      }
      if (isset($vals['originalCategoryId'])) {
        $this->originalCategoryId = $vals['originalCategoryId'];
      }
      if (isset($vals['name'])) {
        $this->name = $vals['name'];
      }
    }
  }

  public function getName() {
    return 'SimpleOriginalCategory';
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
            $xfer += $input->readString($this->id);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRUCT) {
            $this->source = new \Miczone\Thrift\Catalog\SimpleSource();
            $xfer += $this->source->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->originalCategoryId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
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
    $xfer += $output->writeStructBegin('SimpleOriginalCategory');
    if ($this->id !== null) {
      $xfer += $output->writeFieldBegin('id', TType::STRING, 1);
      $xfer += $output->writeString($this->id);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->source !== null) {
      if (!is_object($this->source)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('source', TType::STRUCT, 2);
      $xfer += $this->source->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->originalCategoryId !== null) {
      $xfer += $output->writeFieldBegin('originalCategoryId', TType::STRING, 3);
      $xfer += $output->writeString($this->originalCategoryId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->name !== null) {
      $xfer += $output->writeFieldBegin('name', TType::STRING, 4);
      $xfer += $output->writeString($this->name);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class OriginalMerchant {
  static $_TSPEC;

  /**
   * @var int
   */
  public $createdAt = null;
  /**
   * @var int
   */
  public $updatedAt = null;
  /**
   * @var bool
   */
  public $isActive = null;
  /**
   * @var string
   */
  public $id = null;
  /**
   * @var string
   */
  public $sourceId = null;
  /**
   * @var string
   */
  public $originalMerchantId = null;
  /**
   * @var string
   */
  public $name = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'createdAt',
          'type' => TType::I64,
        ),
        2 => array(
          'var' => 'updatedAt',
          'type' => TType::I64,
        ),
        3 => array(
          'var' => 'isActive',
          'type' => TType::BOOL,
        ),
        4 => array(
          'var' => 'id',
          'type' => TType::STRING,
        ),
        5 => array(
          'var' => 'sourceId',
          'type' => TType::STRING,
        ),
        6 => array(
          'var' => 'originalMerchantId',
          'type' => TType::STRING,
        ),
        7 => array(
          'var' => 'name',
          'type' => TType::STRING,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['createdAt'])) {
        $this->createdAt = $vals['createdAt'];
      }
      if (isset($vals['updatedAt'])) {
        $this->updatedAt = $vals['updatedAt'];
      }
      if (isset($vals['isActive'])) {
        $this->isActive = $vals['isActive'];
      }
      if (isset($vals['id'])) {
        $this->id = $vals['id'];
      }
      if (isset($vals['sourceId'])) {
        $this->sourceId = $vals['sourceId'];
      }
      if (isset($vals['originalMerchantId'])) {
        $this->originalMerchantId = $vals['originalMerchantId'];
      }
      if (isset($vals['name'])) {
        $this->name = $vals['name'];
      }
    }
  }

  public function getName() {
    return 'OriginalMerchant';
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
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->createdAt);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->updatedAt);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->isActive);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->id);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->sourceId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->originalMerchantId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
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
    $xfer += $output->writeStructBegin('OriginalMerchant');
    if ($this->createdAt !== null) {
      $xfer += $output->writeFieldBegin('createdAt', TType::I64, 1);
      $xfer += $output->writeI64($this->createdAt);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->updatedAt !== null) {
      $xfer += $output->writeFieldBegin('updatedAt', TType::I64, 2);
      $xfer += $output->writeI64($this->updatedAt);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->isActive !== null) {
      $xfer += $output->writeFieldBegin('isActive', TType::BOOL, 3);
      $xfer += $output->writeBool($this->isActive);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->id !== null) {
      $xfer += $output->writeFieldBegin('id', TType::STRING, 4);
      $xfer += $output->writeString($this->id);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->sourceId !== null) {
      $xfer += $output->writeFieldBegin('sourceId', TType::STRING, 5);
      $xfer += $output->writeString($this->sourceId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->originalMerchantId !== null) {
      $xfer += $output->writeFieldBegin('originalMerchantId', TType::STRING, 6);
      $xfer += $output->writeString($this->originalMerchantId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->name !== null) {
      $xfer += $output->writeFieldBegin('name', TType::STRING, 7);
      $xfer += $output->writeString($this->name);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class SimpleOriginalMerchant {
  static $_TSPEC;

  /**
   * @var string
   */
  public $id = null;
  /**
   * @var \Miczone\Thrift\Catalog\SimpleSource
   */
  public $source = null;
  /**
   * @var string
   */
  public $originalMerchantId = null;
  /**
   * @var string
   */
  public $name = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'id',
          'type' => TType::STRING,
        ),
        2 => array(
          'var' => 'source',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\SimpleSource',
        ),
        3 => array(
          'var' => 'originalMerchantId',
          'type' => TType::STRING,
        ),
        4 => array(
          'var' => 'name',
          'type' => TType::STRING,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['id'])) {
        $this->id = $vals['id'];
      }
      if (isset($vals['source'])) {
        $this->source = $vals['source'];
      }
      if (isset($vals['originalMerchantId'])) {
        $this->originalMerchantId = $vals['originalMerchantId'];
      }
      if (isset($vals['name'])) {
        $this->name = $vals['name'];
      }
    }
  }

  public function getName() {
    return 'SimpleOriginalMerchant';
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
            $xfer += $input->readString($this->id);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRUCT) {
            $this->source = new \Miczone\Thrift\Catalog\SimpleSource();
            $xfer += $this->source->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->originalMerchantId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
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
    $xfer += $output->writeStructBegin('SimpleOriginalMerchant');
    if ($this->id !== null) {
      $xfer += $output->writeFieldBegin('id', TType::STRING, 1);
      $xfer += $output->writeString($this->id);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->source !== null) {
      if (!is_object($this->source)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('source', TType::STRUCT, 2);
      $xfer += $this->source->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->originalMerchantId !== null) {
      $xfer += $output->writeFieldBegin('originalMerchantId', TType::STRING, 3);
      $xfer += $output->writeString($this->originalMerchantId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->name !== null) {
      $xfer += $output->writeFieldBegin('name', TType::STRING, 4);
      $xfer += $output->writeString($this->name);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class OriginalBrand {
  static $_TSPEC;

  /**
   * @var int
   */
  public $createdAt = null;
  /**
   * @var int
   */
  public $updatedAt = null;
  /**
   * @var bool
   */
  public $isActive = null;
  /**
   * @var string
   */
  public $id = null;
  /**
   * @var string
   */
  public $sourceId = null;
  /**
   * @var string
   */
  public $originalBrandId = null;
  /**
   * @var string
   */
  public $name = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'createdAt',
          'type' => TType::I64,
        ),
        2 => array(
          'var' => 'updatedAt',
          'type' => TType::I64,
        ),
        3 => array(
          'var' => 'isActive',
          'type' => TType::BOOL,
        ),
        4 => array(
          'var' => 'id',
          'type' => TType::STRING,
        ),
        5 => array(
          'var' => 'sourceId',
          'type' => TType::STRING,
        ),
        6 => array(
          'var' => 'originalBrandId',
          'type' => TType::STRING,
        ),
        7 => array(
          'var' => 'name',
          'type' => TType::STRING,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['createdAt'])) {
        $this->createdAt = $vals['createdAt'];
      }
      if (isset($vals['updatedAt'])) {
        $this->updatedAt = $vals['updatedAt'];
      }
      if (isset($vals['isActive'])) {
        $this->isActive = $vals['isActive'];
      }
      if (isset($vals['id'])) {
        $this->id = $vals['id'];
      }
      if (isset($vals['sourceId'])) {
        $this->sourceId = $vals['sourceId'];
      }
      if (isset($vals['originalBrandId'])) {
        $this->originalBrandId = $vals['originalBrandId'];
      }
      if (isset($vals['name'])) {
        $this->name = $vals['name'];
      }
    }
  }

  public function getName() {
    return 'OriginalBrand';
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
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->createdAt);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->updatedAt);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->isActive);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->id);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->sourceId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->originalBrandId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
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
    $xfer += $output->writeStructBegin('OriginalBrand');
    if ($this->createdAt !== null) {
      $xfer += $output->writeFieldBegin('createdAt', TType::I64, 1);
      $xfer += $output->writeI64($this->createdAt);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->updatedAt !== null) {
      $xfer += $output->writeFieldBegin('updatedAt', TType::I64, 2);
      $xfer += $output->writeI64($this->updatedAt);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->isActive !== null) {
      $xfer += $output->writeFieldBegin('isActive', TType::BOOL, 3);
      $xfer += $output->writeBool($this->isActive);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->id !== null) {
      $xfer += $output->writeFieldBegin('id', TType::STRING, 4);
      $xfer += $output->writeString($this->id);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->sourceId !== null) {
      $xfer += $output->writeFieldBegin('sourceId', TType::STRING, 5);
      $xfer += $output->writeString($this->sourceId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->originalBrandId !== null) {
      $xfer += $output->writeFieldBegin('originalBrandId', TType::STRING, 6);
      $xfer += $output->writeString($this->originalBrandId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->name !== null) {
      $xfer += $output->writeFieldBegin('name', TType::STRING, 7);
      $xfer += $output->writeString($this->name);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class SimpleOriginalBrand {
  static $_TSPEC;

  /**
   * @var string
   */
  public $id = null;
  /**
   * @var \Miczone\Thrift\Catalog\SimpleSource
   */
  public $source = null;
  /**
   * @var string
   */
  public $originalBrandId = null;
  /**
   * @var string
   */
  public $name = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'id',
          'type' => TType::STRING,
        ),
        2 => array(
          'var' => 'source',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\SimpleSource',
        ),
        3 => array(
          'var' => 'originalBrandId',
          'type' => TType::STRING,
        ),
        4 => array(
          'var' => 'name',
          'type' => TType::STRING,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['id'])) {
        $this->id = $vals['id'];
      }
      if (isset($vals['source'])) {
        $this->source = $vals['source'];
      }
      if (isset($vals['originalBrandId'])) {
        $this->originalBrandId = $vals['originalBrandId'];
      }
      if (isset($vals['name'])) {
        $this->name = $vals['name'];
      }
    }
  }

  public function getName() {
    return 'SimpleOriginalBrand';
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
            $xfer += $input->readString($this->id);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRUCT) {
            $this->source = new \Miczone\Thrift\Catalog\SimpleSource();
            $xfer += $this->source->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->originalBrandId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
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
    $xfer += $output->writeStructBegin('SimpleOriginalBrand');
    if ($this->id !== null) {
      $xfer += $output->writeFieldBegin('id', TType::STRING, 1);
      $xfer += $output->writeString($this->id);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->source !== null) {
      if (!is_object($this->source)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('source', TType::STRUCT, 2);
      $xfer += $this->source->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->originalBrandId !== null) {
      $xfer += $output->writeFieldBegin('originalBrandId', TType::STRING, 3);
      $xfer += $output->writeString($this->originalBrandId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->name !== null) {
      $xfer += $output->writeFieldBegin('name', TType::STRING, 4);
      $xfer += $output->writeString($this->name);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class Source {
  static $_TSPEC;

  /**
   * @var int
   */
  public $createdAt = null;
  /**
   * @var int
   */
  public $updatedAt = null;
  /**
   * @var bool
   */
  public $isActive = null;
  /**
   * @var string
   */
  public $id = null;
  /**
   * @var string
   */
  public $websiteCode = null;
  /**
   * @var string
   */
  public $countryCode = null;
  /**
   * @var string
   */
  public $name = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'createdAt',
          'type' => TType::I64,
        ),
        2 => array(
          'var' => 'updatedAt',
          'type' => TType::I64,
        ),
        3 => array(
          'var' => 'isActive',
          'type' => TType::BOOL,
        ),
        4 => array(
          'var' => 'id',
          'type' => TType::STRING,
        ),
        5 => array(
          'var' => 'websiteCode',
          'type' => TType::STRING,
        ),
        6 => array(
          'var' => 'countryCode',
          'type' => TType::STRING,
        ),
        7 => array(
          'var' => 'name',
          'type' => TType::STRING,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['createdAt'])) {
        $this->createdAt = $vals['createdAt'];
      }
      if (isset($vals['updatedAt'])) {
        $this->updatedAt = $vals['updatedAt'];
      }
      if (isset($vals['isActive'])) {
        $this->isActive = $vals['isActive'];
      }
      if (isset($vals['id'])) {
        $this->id = $vals['id'];
      }
      if (isset($vals['websiteCode'])) {
        $this->websiteCode = $vals['websiteCode'];
      }
      if (isset($vals['countryCode'])) {
        $this->countryCode = $vals['countryCode'];
      }
      if (isset($vals['name'])) {
        $this->name = $vals['name'];
      }
    }
  }

  public function getName() {
    return 'Source';
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
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->createdAt);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->updatedAt);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->isActive);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->id);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->websiteCode);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->countryCode);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
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
    $xfer += $output->writeStructBegin('Source');
    if ($this->createdAt !== null) {
      $xfer += $output->writeFieldBegin('createdAt', TType::I64, 1);
      $xfer += $output->writeI64($this->createdAt);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->updatedAt !== null) {
      $xfer += $output->writeFieldBegin('updatedAt', TType::I64, 2);
      $xfer += $output->writeI64($this->updatedAt);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->isActive !== null) {
      $xfer += $output->writeFieldBegin('isActive', TType::BOOL, 3);
      $xfer += $output->writeBool($this->isActive);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->id !== null) {
      $xfer += $output->writeFieldBegin('id', TType::STRING, 4);
      $xfer += $output->writeString($this->id);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->websiteCode !== null) {
      $xfer += $output->writeFieldBegin('websiteCode', TType::STRING, 5);
      $xfer += $output->writeString($this->websiteCode);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->countryCode !== null) {
      $xfer += $output->writeFieldBegin('countryCode', TType::STRING, 6);
      $xfer += $output->writeString($this->countryCode);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->name !== null) {
      $xfer += $output->writeFieldBegin('name', TType::STRING, 7);
      $xfer += $output->writeString($this->name);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class SimpleSource {
  static $_TSPEC;

  /**
   * @var string
   */
  public $id = null;
  /**
   * @var string
   */
  public $websiteCode = null;
  /**
   * @var string
   */
  public $countryCode = null;
  /**
   * @var string
   */
  public $name = null;

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'id',
          'type' => TType::STRING,
        ),
        2 => array(
          'var' => 'websiteCode',
          'type' => TType::STRING,
        ),
        3 => array(
          'var' => 'countryCode',
          'type' => TType::STRING,
        ),
        4 => array(
          'var' => 'name',
          'type' => TType::STRING,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['id'])) {
        $this->id = $vals['id'];
      }
      if (isset($vals['websiteCode'])) {
        $this->websiteCode = $vals['websiteCode'];
      }
      if (isset($vals['countryCode'])) {
        $this->countryCode = $vals['countryCode'];
      }
      if (isset($vals['name'])) {
        $this->name = $vals['name'];
      }
    }
  }

  public function getName() {
    return 'SimpleSource';
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
            $xfer += $input->readString($this->id);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->websiteCode);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->countryCode);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
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
    $xfer += $output->writeStructBegin('SimpleSource');
    if ($this->id !== null) {
      $xfer += $output->writeFieldBegin('id', TType::STRING, 1);
      $xfer += $output->writeString($this->id);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->websiteCode !== null) {
      $xfer += $output->writeFieldBegin('websiteCode', TType::STRING, 2);
      $xfer += $output->writeString($this->websiteCode);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->countryCode !== null) {
      $xfer += $output->writeFieldBegin('countryCode', TType::STRING, 3);
      $xfer += $output->writeString($this->countryCode);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->name !== null) {
      $xfer += $output->writeFieldBegin('name', TType::STRING, 4);
      $xfer += $output->writeString($this->name);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

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
  public $categoryId = null;
  /**
   * @var string
   */
  public $website = null;
  /**
   * @var string
   */
  public $countryCode = null;
  /**
   * @var string
   */
  public $name = null;
  /**
   * @var string
   */
  public $translatedName = null;
  /**
   * @var double
   */
  public $ratingStar = null;
  /**
   * @var string
   */
  public $merchantId = null;
  /**
   * @var string
   */
  public $merchantName = null;
  /**
   * @var string
   */
  public $brandId = null;
  /**
   * @var string
   */
  public $brandName = null;
  /**
   * @var double
   */
  public $minPrice = null;
  /**
   * @var double
   */
  public $maxPrice = null;
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

  public function __construct($vals = null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'categoryId',
          'type' => TType::STRING,
        ),
        2 => array(
          'var' => 'website',
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
        5 => array(
          'var' => 'translatedName',
          'type' => TType::STRING,
        ),
        6 => array(
          'var' => 'ratingStar',
          'type' => TType::DOUBLE,
        ),
        7 => array(
          'var' => 'merchantId',
          'type' => TType::STRING,
        ),
        8 => array(
          'var' => 'merchantName',
          'type' => TType::STRING,
        ),
        9 => array(
          'var' => 'brandId',
          'type' => TType::STRING,
        ),
        10 => array(
          'var' => 'brandName',
          'type' => TType::STRING,
        ),
        11 => array(
          'var' => 'minPrice',
          'type' => TType::DOUBLE,
        ),
        12 => array(
          'var' => 'maxPrice',
          'type' => TType::DOUBLE,
        ),
        13 => array(
          'var' => 'sortBy',
          'type' => TType::STRING,
        ),
        14 => array(
          'var' => 'productCount',
          'type' => TType::BYTE,
        ),
        15 => array(
          'var' => 'productPage',
          'type' => TType::I32,
        ),
      );
    }
    if (is_array($vals)) {
      if (isset($vals['categoryId'])) {
        $this->categoryId = $vals['categoryId'];
      }
      if (isset($vals['website'])) {
        $this->website = $vals['website'];
      }
      if (isset($vals['countryCode'])) {
        $this->countryCode = $vals['countryCode'];
      }
      if (isset($vals['name'])) {
        $this->name = $vals['name'];
      }
      if (isset($vals['translatedName'])) {
        $this->translatedName = $vals['translatedName'];
      }
      if (isset($vals['ratingStar'])) {
        $this->ratingStar = $vals['ratingStar'];
      }
      if (isset($vals['merchantId'])) {
        $this->merchantId = $vals['merchantId'];
      }
      if (isset($vals['merchantName'])) {
        $this->merchantName = $vals['merchantName'];
      }
      if (isset($vals['brandId'])) {
        $this->brandId = $vals['brandId'];
      }
      if (isset($vals['brandName'])) {
        $this->brandName = $vals['brandName'];
      }
      if (isset($vals['minPrice'])) {
        $this->minPrice = $vals['minPrice'];
      }
      if (isset($vals['maxPrice'])) {
        $this->maxPrice = $vals['maxPrice'];
      }
      if (isset($vals['sortBy'])) {
        $this->sortBy = $vals['sortBy'];
      }
      if (isset($vals['productCount'])) {
        $this->productCount = $vals['productCount'];
      }
      if (isset($vals['productPage'])) {
        $this->productPage = $vals['productPage'];
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
            $xfer += $input->readString($this->categoryId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->website);
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
        case 5:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->translatedName);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::DOUBLE) {
            $xfer += $input->readDouble($this->ratingStar);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->merchantId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 8:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->merchantName);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 9:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->brandId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 10:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->brandName);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 11:
          if ($ftype == TType::DOUBLE) {
            $xfer += $input->readDouble($this->minPrice);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 12:
          if ($ftype == TType::DOUBLE) {
            $xfer += $input->readDouble($this->maxPrice);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 13:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->sortBy);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 14:
          if ($ftype == TType::BYTE) {
            $xfer += $input->readByte($this->productCount);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 15:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->productPage);
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
    if ($this->categoryId !== null) {
      $xfer += $output->writeFieldBegin('categoryId', TType::STRING, 1);
      $xfer += $output->writeString($this->categoryId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->website !== null) {
      $xfer += $output->writeFieldBegin('website', TType::STRING, 2);
      $xfer += $output->writeString($this->website);
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
    if ($this->translatedName !== null) {
      $xfer += $output->writeFieldBegin('translatedName', TType::STRING, 5);
      $xfer += $output->writeString($this->translatedName);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->ratingStar !== null) {
      $xfer += $output->writeFieldBegin('ratingStar', TType::DOUBLE, 6);
      $xfer += $output->writeDouble($this->ratingStar);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->merchantId !== null) {
      $xfer += $output->writeFieldBegin('merchantId', TType::STRING, 7);
      $xfer += $output->writeString($this->merchantId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->merchantName !== null) {
      $xfer += $output->writeFieldBegin('merchantName', TType::STRING, 8);
      $xfer += $output->writeString($this->merchantName);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->brandId !== null) {
      $xfer += $output->writeFieldBegin('brandId', TType::STRING, 9);
      $xfer += $output->writeString($this->brandId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->brandName !== null) {
      $xfer += $output->writeFieldBegin('brandName', TType::STRING, 10);
      $xfer += $output->writeString($this->brandName);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->minPrice !== null) {
      $xfer += $output->writeFieldBegin('minPrice', TType::DOUBLE, 11);
      $xfer += $output->writeDouble($this->minPrice);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->maxPrice !== null) {
      $xfer += $output->writeFieldBegin('maxPrice', TType::DOUBLE, 12);
      $xfer += $output->writeDouble($this->maxPrice);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->sortBy !== null) {
      $xfer += $output->writeFieldBegin('sortBy', TType::STRING, 13);
      $xfer += $output->writeString($this->sortBy);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->productCount !== null) {
      $xfer += $output->writeFieldBegin('productCount', TType::BYTE, 14);
      $xfer += $output->writeByte($this->productCount);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->productPage !== null) {
      $xfer += $output->writeFieldBegin('productPage', TType::I32, 15);
      $xfer += $output->writeI32($this->productPage);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();

    return $xfer;
  }

}

class SearchProductResponseDataRefinement {
  static $_TSPEC;

  public function __construct() {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
      );
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
            $_size32 = 0;
            $_etype35 = 0;
            $xfer += $input->readListBegin($_etype35, $_size32);
            for ($_i36 = 0; $_i36 < $_size32; ++$_i36) {
              $elem37 = null;
              $elem37 = new \Miczone\Thrift\Catalog\Product();
              $xfer += $elem37->read($input);
              $this->productList[] = $elem37;
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
          foreach ($this->productList as $iter38) {
            $xfer += $iter38->write($output);
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
  public $price = null;
  /**
   * @var string
   */
  public $conditionCode = null;
  /**
   * @var string
   */
  public $originalCategoryId = null;
  /**
   * @var string
   */
  public $originalMerchantId = null;

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
          'var' => 'price',
          'type' => TType::DOUBLE,
        ),
        14 => array(
          'var' => 'conditionCode',
          'type' => TType::STRING,
        ),
        15 => array(
          'var' => 'originalCategoryId',
          'type' => TType::STRING,
        ),
        16 => array(
          'var' => 'originalMerchantId',
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
      if (isset($vals['price'])) {
        $this->price = $vals['price'];
      }
      if (isset($vals['conditionCode'])) {
        $this->conditionCode = $vals['conditionCode'];
      }
      if (isset($vals['originalCategoryId'])) {
        $this->originalCategoryId = $vals['originalCategoryId'];
      }
      if (isset($vals['originalMerchantId'])) {
        $this->originalMerchantId = $vals['originalMerchantId'];
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
            $_size39 = 0;
            $_etype42 = 0;
            $xfer += $input->readListBegin($_etype42, $_size39);
            for ($_i43 = 0; $_i43 < $_size39; ++$_i43) {
              $elem44 = null;
              $xfer += $input->readString($elem44);
              $this->imageList[] = $elem44;
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
            $xfer += $input->readDouble($this->price);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 14:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->conditionCode);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 15:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->originalCategoryId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 16:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->originalMerchantId);
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
          foreach ($this->imageList as $iter45) {
            $xfer += $output->writeString($iter45);
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
    if ($this->price !== null) {
      $xfer += $output->writeFieldBegin('price', TType::DOUBLE, 13);
      $xfer += $output->writeDouble($this->price);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->conditionCode !== null) {
      $xfer += $output->writeFieldBegin('conditionCode', TType::STRING, 14);
      $xfer += $output->writeString($this->conditionCode);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->originalCategoryId !== null) {
      $xfer += $output->writeFieldBegin('originalCategoryId', TType::STRING, 15);
      $xfer += $output->writeString($this->originalCategoryId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->originalMerchantId !== null) {
      $xfer += $output->writeFieldBegin('originalMerchantId', TType::STRING, 16);
      $xfer += $output->writeString($this->originalMerchantId);
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
   * @var \Miczone\Thrift\Catalog\OriginalCategory[]
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
            'class' => '\Miczone\Thrift\Catalog\OriginalCategory',
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
              $elem37 = new \Miczone\Thrift\Catalog\OriginalCategory();
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

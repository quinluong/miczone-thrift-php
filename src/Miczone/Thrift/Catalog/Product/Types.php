<?php
namespace Miczone\Thrift\Catalog\Product;

/**
 * Autogenerated by Thrift Compiler (0.9.3)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


final class ProductTypeEnum {
  const SIMPLE = 0;
  const CONFIGURABLE = 1;
  static public $__names = array(
    0 => 'SIMPLE',
    1 => 'CONFIGURABLE',
  );
}

final class AttributeValueTypeEnum {
  const VARCHAR = 0;
  const NVARCHAR = 1;
  const INT = 2;
  const BIGINT = 3;
  const DECIMAL = 4;
  const TEXT = 5;
  const LONGTEXT = 6;
  const DATETIME = 7;
  static public $__names = array(
    0 => 'VARCHAR',
    1 => 'NVARCHAR',
    2 => 'INT',
    3 => 'BIGINT',
    4 => 'DECIMAL',
    5 => 'TEXT',
    6 => 'LONGTEXT',
    7 => 'DATETIME',
  );
}

class GetProductByIdRequest {
  static $_TSPEC;

  /**
   * @var string
   */
  public $id = null;

  public function __construct($vals=null) {
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

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
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
   * @var \Miczone\Thrift\Catalog\Product\Product
   */
  public $data = null;

  public function __construct($vals=null) {
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
          'class' => '\Miczone\Thrift\Catalog\Product\Product',
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

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
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
            $this->data = new \Miczone\Thrift\Catalog\Product\Product();
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

class MultiGetProductByIdListRequest {
  static $_TSPEC;

  /**
   * @var string[]
   */
  public $idList = null;

  public function __construct($vals=null) {
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

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::LST) {
            $this->idList = array();
            $_size0 = 0;
            $_etype3 = 0;
            $xfer += $input->readListBegin($_etype3, $_size0);
            for ($_i4 = 0; $_i4 < $_size0; ++$_i4)
            {
              $elem5 = null;
              $xfer += $input->readString($elem5);
              $this->idList []= $elem5;
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
          foreach ($this->idList as $iter6)
          {
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

  public function __construct($vals=null) {
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
            'class' => '\Miczone\Thrift\Catalog\Product\Product',
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

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
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
            for ($_i11 = 0; $_i11 < $_size7; ++$_i11)
            {
              $key12 = '';
              $val13 = new \Miczone\Thrift\Catalog\Product\Product();
              $xfer += $input->readString($key12);
              $val13 = new \Miczone\Thrift\Catalog\Product\Product();
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
          foreach ($this->dataMap as $kiter14 => $viter15)
          {
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
   * @var \Miczone\Thrift\Catalog\Source\SimpleSource
   */
  public $source = null;
  /**
   * @var \Miczone\Thrift\Catalog\Category\SimpleCategory[]
   */
  public $categoryList = null;
  /**
   * @var \Miczone\Thrift\Catalog\OriginalCategory\SimpleOriginalCategory
   */
  public $originalCategory = null;
  /**
   * @var \Miczone\Thrift\Catalog\OriginalBrand\SimpleOriginalBrand
   */
  public $originalBrand = null;
  /**
   * @var \Miczone\Thrift\Catalog\OriginalMerchant\SimpleOriginalMerchant
   */
  public $originalMerchant = null;
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
   * @var \Miczone\Thrift\Catalog\ProductCondition\SimpleProductCondition
   */
  public $condition = null;

  public function __construct($vals=null) {
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
          'var' => 'source',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\Source\SimpleSource',
          ),
        6 => array(
          'var' => 'categoryList',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\Miczone\Thrift\Catalog\Category\SimpleCategory',
            ),
          ),
        7 => array(
          'var' => 'originalCategory',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\OriginalCategory\SimpleOriginalCategory',
          ),
        8 => array(
          'var' => 'originalBrand',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\OriginalBrand\SimpleOriginalBrand',
          ),
        9 => array(
          'var' => 'originalMerchant',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\OriginalMerchant\SimpleOriginalMerchant',
          ),
        10 => array(
          'var' => 'sku',
          'type' => TType::STRING,
          ),
        11 => array(
          'var' => 'name',
          'type' => TType::STRING,
          ),
        12 => array(
          'var' => 'translatedName',
          'type' => TType::STRING,
          ),
        13 => array(
          'var' => 'description',
          'type' => TType::STRING,
          ),
        14 => array(
          'var' => 'avatar',
          'type' => TType::STRING,
          ),
        15 => array(
          'var' => 'imageList',
          'type' => TType::LST,
          'etype' => TType::STRING,
          'elem' => array(
            'type' => TType::STRING,
            ),
          ),
        16 => array(
          'var' => 'ratingStar',
          'type' => TType::DOUBLE,
          ),
        17 => array(
          'var' => 'totalReview',
          'type' => TType::I64,
          ),
        18 => array(
          'var' => 'oldPrice',
          'type' => TType::DOUBLE,
          ),
        19 => array(
          'var' => 'price',
          'type' => TType::DOUBLE,
          ),
        20 => array(
          'var' => 'hasFastShipping',
          'type' => TType::BOOL,
          ),
        21 => array(
          'var' => 'condition',
          'type' => TType::STRUCT,
          'class' => '\Miczone\Thrift\Catalog\ProductCondition\SimpleProductCondition',
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
      if (isset($vals['source'])) {
        $this->source = $vals['source'];
      }
      if (isset($vals['categoryList'])) {
        $this->categoryList = $vals['categoryList'];
      }
      if (isset($vals['originalCategory'])) {
        $this->originalCategory = $vals['originalCategory'];
      }
      if (isset($vals['originalBrand'])) {
        $this->originalBrand = $vals['originalBrand'];
      }
      if (isset($vals['originalMerchant'])) {
        $this->originalMerchant = $vals['originalMerchant'];
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
      if (isset($vals['condition'])) {
        $this->condition = $vals['condition'];
      }
    }
  }

  public function getName() {
    return 'Product';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
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
          if ($ftype == TType::STRUCT) {
            $this->source = new \Miczone\Thrift\Catalog\Source\SimpleSource();
            $xfer += $this->source->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::LST) {
            $this->categoryList = array();
            $_size16 = 0;
            $_etype19 = 0;
            $xfer += $input->readListBegin($_etype19, $_size16);
            for ($_i20 = 0; $_i20 < $_size16; ++$_i20)
            {
              $elem21 = null;
              $elem21 = new \Miczone\Thrift\Catalog\Category\SimpleCategory();
              $xfer += $elem21->read($input);
              $this->categoryList []= $elem21;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::STRUCT) {
            $this->originalCategory = new \Miczone\Thrift\Catalog\OriginalCategory\SimpleOriginalCategory();
            $xfer += $this->originalCategory->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 8:
          if ($ftype == TType::STRUCT) {
            $this->originalBrand = new \Miczone\Thrift\Catalog\OriginalBrand\SimpleOriginalBrand();
            $xfer += $this->originalBrand->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 9:
          if ($ftype == TType::STRUCT) {
            $this->originalMerchant = new \Miczone\Thrift\Catalog\OriginalMerchant\SimpleOriginalMerchant();
            $xfer += $this->originalMerchant->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 10:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->sku);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 11:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->name);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 12:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->translatedName);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 13:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->description);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 14:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->avatar);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 15:
          if ($ftype == TType::LST) {
            $this->imageList = array();
            $_size22 = 0;
            $_etype25 = 0;
            $xfer += $input->readListBegin($_etype25, $_size22);
            for ($_i26 = 0; $_i26 < $_size22; ++$_i26)
            {
              $elem27 = null;
              $xfer += $input->readString($elem27);
              $this->imageList []= $elem27;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 16:
          if ($ftype == TType::DOUBLE) {
            $xfer += $input->readDouble($this->ratingStar);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 17:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->totalReview);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 18:
          if ($ftype == TType::DOUBLE) {
            $xfer += $input->readDouble($this->oldPrice);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 19:
          if ($ftype == TType::DOUBLE) {
            $xfer += $input->readDouble($this->price);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 20:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->hasFastShipping);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 21:
          if ($ftype == TType::STRUCT) {
            $this->condition = new \Miczone\Thrift\Catalog\ProductCondition\SimpleProductCondition();
            $xfer += $this->condition->read($input);
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
    if ($this->source !== null) {
      if (!is_object($this->source)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('source', TType::STRUCT, 5);
      $xfer += $this->source->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->categoryList !== null) {
      if (!is_array($this->categoryList)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('categoryList', TType::LST, 6);
      {
        $output->writeListBegin(TType::STRUCT, count($this->categoryList));
        {
          foreach ($this->categoryList as $iter28)
          {
            $xfer += $iter28->write($output);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->originalCategory !== null) {
      if (!is_object($this->originalCategory)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('originalCategory', TType::STRUCT, 7);
      $xfer += $this->originalCategory->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->originalBrand !== null) {
      if (!is_object($this->originalBrand)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('originalBrand', TType::STRUCT, 8);
      $xfer += $this->originalBrand->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->originalMerchant !== null) {
      if (!is_object($this->originalMerchant)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('originalMerchant', TType::STRUCT, 9);
      $xfer += $this->originalMerchant->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->sku !== null) {
      $xfer += $output->writeFieldBegin('sku', TType::STRING, 10);
      $xfer += $output->writeString($this->sku);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->name !== null) {
      $xfer += $output->writeFieldBegin('name', TType::STRING, 11);
      $xfer += $output->writeString($this->name);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->translatedName !== null) {
      $xfer += $output->writeFieldBegin('translatedName', TType::STRING, 12);
      $xfer += $output->writeString($this->translatedName);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->description !== null) {
      $xfer += $output->writeFieldBegin('description', TType::STRING, 13);
      $xfer += $output->writeString($this->description);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->avatar !== null) {
      $xfer += $output->writeFieldBegin('avatar', TType::STRING, 14);
      $xfer += $output->writeString($this->avatar);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->imageList !== null) {
      if (!is_array($this->imageList)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('imageList', TType::LST, 15);
      {
        $output->writeListBegin(TType::STRING, count($this->imageList));
        {
          foreach ($this->imageList as $iter29)
          {
            $xfer += $output->writeString($iter29);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->ratingStar !== null) {
      $xfer += $output->writeFieldBegin('ratingStar', TType::DOUBLE, 16);
      $xfer += $output->writeDouble($this->ratingStar);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->totalReview !== null) {
      $xfer += $output->writeFieldBegin('totalReview', TType::I64, 17);
      $xfer += $output->writeI64($this->totalReview);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->oldPrice !== null) {
      $xfer += $output->writeFieldBegin('oldPrice', TType::DOUBLE, 18);
      $xfer += $output->writeDouble($this->oldPrice);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->price !== null) {
      $xfer += $output->writeFieldBegin('price', TType::DOUBLE, 19);
      $xfer += $output->writeDouble($this->price);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->hasFastShipping !== null) {
      $xfer += $output->writeFieldBegin('hasFastShipping', TType::BOOL, 20);
      $xfer += $output->writeBool($this->hasFastShipping);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->condition !== null) {
      if (!is_object($this->condition)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('condition', TType::STRUCT, 21);
      $xfer += $this->condition->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}



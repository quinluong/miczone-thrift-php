<?php
namespace Miczone\Thrift\Catalog\Category;

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


class GetCategoryByIdRequest {
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
    return 'GetCategoryByIdRequest';
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
   * @var \Miczone\Thrift\Catalog\Category\Category
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
          'class' => '\Miczone\Thrift\Catalog\Category\Category',
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
            $this->data = new \Miczone\Thrift\Catalog\Category\Category();
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

  public function __construct($vals=null) {
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
   * @var \Miczone\Thrift\Catalog\Category\Category
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
          'class' => '\Miczone\Thrift\Catalog\Category\Category',
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
            $this->data = new \Miczone\Thrift\Catalog\Category\Category();
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
    return 'MultiGetCategoryByIdListRequest';
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
    $xfer += $output->writeStructBegin('MultiGetCategoryByIdListRequest');
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
            'class' => '\Miczone\Thrift\Catalog\Category\Category',
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
              $val13 = new \Miczone\Thrift\Catalog\Category\Category();
              $xfer += $input->readString($key12);
              $val13 = new \Miczone\Thrift\Catalog\Category\Category();
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

class MultiGetCategoryBySlugListRequest {
  static $_TSPEC;

  /**
   * @var string[]
   */
  public $slugList = null;

  public function __construct($vals=null) {
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
            $this->slugList = array();
            $_size16 = 0;
            $_etype19 = 0;
            $xfer += $input->readListBegin($_etype19, $_size16);
            for ($_i20 = 0; $_i20 < $_size16; ++$_i20)
            {
              $elem21 = null;
              $xfer += $input->readString($elem21);
              $this->slugList []= $elem21;
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
          foreach ($this->slugList as $iter22)
          {
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
            'class' => '\Miczone\Thrift\Catalog\Category\Category',
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
            $_size23 = 0;
            $_ktype24 = 0;
            $_vtype25 = 0;
            $xfer += $input->readMapBegin($_ktype24, $_vtype25, $_size23);
            for ($_i27 = 0; $_i27 < $_size23; ++$_i27)
            {
              $key28 = '';
              $val29 = new \Miczone\Thrift\Catalog\Category\Category();
              $xfer += $input->readString($key28);
              $val29 = new \Miczone\Thrift\Catalog\Category\Category();
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
          foreach ($this->dataMap as $kiter30 => $viter31)
          {
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
   * @var int
   */
  public $level = null;
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
   * @var \Miczone\Thrift\Catalog\OriginalCategory\SimpleOriginalCategory[]
   */
  public $originalCategoryList = null;

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
          'var' => 'parentId',
          'type' => TType::STRING,
          ),
        6 => array(
          'var' => 'level',
          'type' => TType::BYTE,
          ),
        7 => array(
          'var' => 'name',
          'type' => TType::STRING,
          ),
        8 => array(
          'var' => 'slug',
          'type' => TType::STRING,
          ),
        9 => array(
          'var' => 'description',
          'type' => TType::STRING,
          ),
        10 => array(
          'var' => 'metaTitle',
          'type' => TType::STRING,
          ),
        11 => array(
          'var' => 'metaKeyword',
          'type' => TType::STRING,
          ),
        12 => array(
          'var' => 'metaDescription',
          'type' => TType::STRING,
          ),
        13 => array(
          'var' => 'originalCategoryList',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\Miczone\Thrift\Catalog\OriginalCategory\SimpleOriginalCategory',
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
      if (isset($vals['level'])) {
        $this->level = $vals['level'];
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
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->parentId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::BYTE) {
            $xfer += $input->readByte($this->level);
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
        case 8:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->slug);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 9:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->description);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 10:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->metaTitle);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 11:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->metaKeyword);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 12:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->metaDescription);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 13:
          if ($ftype == TType::LST) {
            $this->originalCategoryList = array();
            $_size32 = 0;
            $_etype35 = 0;
            $xfer += $input->readListBegin($_etype35, $_size32);
            for ($_i36 = 0; $_i36 < $_size32; ++$_i36)
            {
              $elem37 = null;
              $elem37 = new \Miczone\Thrift\Catalog\OriginalCategory\SimpleOriginalCategory();
              $xfer += $elem37->read($input);
              $this->originalCategoryList []= $elem37;
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
    if ($this->level !== null) {
      $xfer += $output->writeFieldBegin('level', TType::BYTE, 6);
      $xfer += $output->writeByte($this->level);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->name !== null) {
      $xfer += $output->writeFieldBegin('name', TType::STRING, 7);
      $xfer += $output->writeString($this->name);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->slug !== null) {
      $xfer += $output->writeFieldBegin('slug', TType::STRING, 8);
      $xfer += $output->writeString($this->slug);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->description !== null) {
      $xfer += $output->writeFieldBegin('description', TType::STRING, 9);
      $xfer += $output->writeString($this->description);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->metaTitle !== null) {
      $xfer += $output->writeFieldBegin('metaTitle', TType::STRING, 10);
      $xfer += $output->writeString($this->metaTitle);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->metaKeyword !== null) {
      $xfer += $output->writeFieldBegin('metaKeyword', TType::STRING, 11);
      $xfer += $output->writeString($this->metaKeyword);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->metaDescription !== null) {
      $xfer += $output->writeFieldBegin('metaDescription', TType::STRING, 12);
      $xfer += $output->writeString($this->metaDescription);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->originalCategoryList !== null) {
      if (!is_array($this->originalCategoryList)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('originalCategoryList', TType::LST, 13);
      {
        $output->writeListBegin(TType::STRUCT, count($this->originalCategoryList));
        {
          foreach ($this->originalCategoryList as $iter38)
          {
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

class SimpleCategory {
  static $_TSPEC;

  /**
   * @var string
   */
  public $name = null;
  /**
   * @var string
   */
  public $slug = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'name',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'slug',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['name'])) {
        $this->name = $vals['name'];
      }
      if (isset($vals['slug'])) {
        $this->slug = $vals['slug'];
      }
    }
  }

  public function getName() {
    return 'SimpleCategory';
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
            $xfer += $input->readString($this->name);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
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
    $xfer += $output->writeStructBegin('SimpleCategory');
    if ($this->name !== null) {
      $xfer += $output->writeFieldBegin('name', TType::STRING, 1);
      $xfer += $output->writeString($this->name);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->slug !== null) {
      $xfer += $output->writeFieldBegin('slug', TType::STRING, 2);
      $xfer += $output->writeString($this->slug);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}



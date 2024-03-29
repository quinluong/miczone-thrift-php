<?php
namespace Miczone\Thrift\Catalog\Search;

/**
 * Autogenerated by Thrift Compiler (0.14.1)
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

class Product
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'createdAt',
            'isRequired' => true,
            'type' => TType::I64,
        ),
        2 => array(
            'var' => 'updatedAt',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        3 => array(
            'var' => 'isActive',
            'isRequired' => true,
            'type' => TType::BOOL,
        ),
        4 => array(
            'var' => 'id',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        5 => array(
            'var' => 'source',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\Miczone\Thrift\Catalog\Source\SimpleSource',
        ),
        6 => array(
            'var' => 'originalMerchant',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\Miczone\Thrift\Catalog\OriginalMerchant\SimpleOriginalMerchant',
        ),
        7 => array(
            'var' => 'sku',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        8 => array(
            'var' => 'name',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        9 => array(
            'var' => 'avatar',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        10 => array(
            'var' => 'imageList',
            'isRequired' => true,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => array(
                'type' => TType::STRING,
                ),
        ),
        11 => array(
            'var' => 'hasFastShipping',
            'isRequired' => true,
            'type' => TType::BOOL,
        ),
    );

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
    public $avatar = null;
    /**
     * @var string[]
     */
    public $imageList = null;
    /**
     * @var bool
     */
    public $hasFastShipping = null;

    public function __construct($vals = null)
    {
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
            if (isset($vals['originalMerchant'])) {
                $this->originalMerchant = $vals['originalMerchant'];
            }
            if (isset($vals['sku'])) {
                $this->sku = $vals['sku'];
            }
            if (isset($vals['name'])) {
                $this->name = $vals['name'];
            }
            if (isset($vals['avatar'])) {
                $this->avatar = $vals['avatar'];
            }
            if (isset($vals['imageList'])) {
                $this->imageList = $vals['imageList'];
            }
            if (isset($vals['hasFastShipping'])) {
                $this->hasFastShipping = $vals['hasFastShipping'];
            }
        }
    }

    public function getName()
    {
        return 'Product';
    }


    public function read($input)
    {
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
                    if ($ftype == TType::STRUCT) {
                        $this->source = new \Miczone\Thrift\Catalog\Source\SimpleSource();
                        $xfer += $this->source->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::STRUCT) {
                        $this->originalMerchant = new \Miczone\Thrift\Catalog\OriginalMerchant\SimpleOriginalMerchant();
                        $xfer += $this->originalMerchant->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->sku);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 8:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->name);
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
                        $_size56 = 0;
                        $_etype59 = 0;
                        $xfer += $input->readListBegin($_etype59, $_size56);
                        for ($_i60 = 0; $_i60 < $_size56; ++$_i60) {
                            $elem61 = null;
                            $xfer += $input->readString($elem61);
                            $this->imageList []= $elem61;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 11:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->hasFastShipping);
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

    public function write($output)
    {
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
        if ($this->originalMerchant !== null) {
            if (!is_object($this->originalMerchant)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('originalMerchant', TType::STRUCT, 6);
            $xfer += $this->originalMerchant->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->sku !== null) {
            $xfer += $output->writeFieldBegin('sku', TType::STRING, 7);
            $xfer += $output->writeString($this->sku);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->name !== null) {
            $xfer += $output->writeFieldBegin('name', TType::STRING, 8);
            $xfer += $output->writeString($this->name);
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
            $output->writeListBegin(TType::STRING, count($this->imageList));
            foreach ($this->imageList as $iter62) {
                $xfer += $output->writeString($iter62);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->hasFastShipping !== null) {
            $xfer += $output->writeFieldBegin('hasFastShipping', TType::BOOL, 11);
            $xfer += $output->writeBool($this->hasFastShipping);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}

<?php
namespace Miczone\Thrift\Catalog\Product;

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
            'var' => 'categoryList',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\Miczone\Thrift\Catalog\Category\SimpleCategory',
                ),
        ),
        7 => array(
            'var' => 'originalCategory',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\Miczone\Thrift\Catalog\OriginalCategory\SimpleOriginalCategory',
        ),
        8 => array(
            'var' => 'originalBrand',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\Miczone\Thrift\Catalog\OriginalBrand\SimpleOriginalBrand',
        ),
        9 => array(
            'var' => 'originalMerchant',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\Miczone\Thrift\Catalog\OriginalMerchant\SimpleOriginalMerchant',
        ),
        10 => array(
            'var' => 'sku',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        11 => array(
            'var' => 'name',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        12 => array(
            'var' => 'translatedName',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        13 => array(
            'var' => 'description',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        14 => array(
            'var' => 'avatar',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        15 => array(
            'var' => 'imageList',
            'isRequired' => true,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => array(
                'type' => TType::STRING,
                ),
        ),
        16 => array(
            'var' => 'ratingStar',
            'isRequired' => false,
            'type' => TType::DOUBLE,
        ),
        17 => array(
            'var' => 'totalReview',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        18 => array(
            'var' => 'oldPrice',
            'isRequired' => false,
            'type' => TType::DOUBLE,
        ),
        19 => array(
            'var' => 'price',
            'isRequired' => true,
            'type' => TType::DOUBLE,
        ),
        20 => array(
            'var' => 'hasFastShipping',
            'isRequired' => true,
            'type' => TType::BOOL,
        ),
        21 => array(
            'var' => 'condition',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Miczone\Thrift\Catalog\ProductCondition\SimpleProductCondition',
        ),
        22 => array(
            'var' => 'isOutOfStock',
            'isRequired' => true,
            'type' => TType::BOOL,
        ),
        23 => array(
            'var' => 'crawlerUpdatedAt',
            'isRequired' => true,
            'type' => TType::I64,
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
    /**
     * @var bool
     */
    public $isOutOfStock = null;
    /**
     * @var int
     */
    public $crawlerUpdatedAt = null;

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
            if (isset($vals['isOutOfStock'])) {
                $this->isOutOfStock = $vals['isOutOfStock'];
            }
            if (isset($vals['crawlerUpdatedAt'])) {
                $this->crawlerUpdatedAt = $vals['crawlerUpdatedAt'];
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
                    if ($ftype == TType::LST) {
                        $this->categoryList = array();
                        $_size64 = 0;
                        $_etype67 = 0;
                        $xfer += $input->readListBegin($_etype67, $_size64);
                        for ($_i68 = 0; $_i68 < $_size64; ++$_i68) {
                            $elem69 = null;
                            $elem69 = new \Miczone\Thrift\Catalog\Category\SimpleCategory();
                            $xfer += $elem69->read($input);
                            $this->categoryList []= $elem69;
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
                        $_size70 = 0;
                        $_etype73 = 0;
                        $xfer += $input->readListBegin($_etype73, $_size70);
                        for ($_i74 = 0; $_i74 < $_size70; ++$_i74) {
                            $elem75 = null;
                            $xfer += $input->readString($elem75);
                            $this->imageList []= $elem75;
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
                case 22:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->isOutOfStock);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 23:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->crawlerUpdatedAt);
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
        if ($this->categoryList !== null) {
            if (!is_array($this->categoryList)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('categoryList', TType::LST, 6);
            $output->writeListBegin(TType::STRUCT, count($this->categoryList));
            foreach ($this->categoryList as $iter76) {
                $xfer += $iter76->write($output);
            }
            $output->writeListEnd();
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
            $output->writeListBegin(TType::STRING, count($this->imageList));
            foreach ($this->imageList as $iter77) {
                $xfer += $output->writeString($iter77);
            }
            $output->writeListEnd();
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
        if ($this->isOutOfStock !== null) {
            $xfer += $output->writeFieldBegin('isOutOfStock', TType::BOOL, 22);
            $xfer += $output->writeBool($this->isOutOfStock);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->crawlerUpdatedAt !== null) {
            $xfer += $output->writeFieldBegin('crawlerUpdatedAt', TType::I64, 23);
            $xfer += $output->writeI64($this->crawlerUpdatedAt);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}

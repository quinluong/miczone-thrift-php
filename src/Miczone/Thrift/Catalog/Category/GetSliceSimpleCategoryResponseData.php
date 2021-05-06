<?php
namespace Miczone\Thrift\Catalog\Category;

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

class GetSliceSimpleCategoryResponseData
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'itemList',
            'isRequired' => true,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\Miczone\Thrift\Catalog\Category\SimpleCategory',
                ),
        ),
        2 => array(
            'var' => 'lastId',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'hasNext',
            'isRequired' => true,
            'type' => TType::BOOL,
        ),
    );

    /**
     * @var \Miczone\Thrift\Catalog\Category\SimpleCategory[]
     */
    public $itemList = null;
    /**
     * @var string
     */
    public $lastId = null;
    /**
     * @var bool
     */
    public $hasNext = false;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['itemList'])) {
                $this->itemList = $vals['itemList'];
            }
            if (isset($vals['lastId'])) {
                $this->lastId = $vals['lastId'];
            }
            if (isset($vals['hasNext'])) {
                $this->hasNext = $vals['hasNext'];
            }
        }
    }

    public function getName()
    {
        return 'GetSliceSimpleCategoryResponseData';
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
                    if ($ftype == TType::LST) {
                        $this->itemList = array();
                        $_size46 = 0;
                        $_etype49 = 0;
                        $xfer += $input->readListBegin($_etype49, $_size46);
                        for ($_i50 = 0; $_i50 < $_size46; ++$_i50) {
                            $elem51 = null;
                            $elem51 = new \Miczone\Thrift\Catalog\Category\SimpleCategory();
                            $xfer += $elem51->read($input);
                            $this->itemList []= $elem51;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->lastId);
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

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('GetSliceSimpleCategoryResponseData');
        if ($this->itemList !== null) {
            if (!is_array($this->itemList)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('itemList', TType::LST, 1);
            $output->writeListBegin(TType::STRUCT, count($this->itemList));
            foreach ($this->itemList as $iter52) {
                $xfer += $iter52->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->lastId !== null) {
            $xfer += $output->writeFieldBegin('lastId', TType::STRING, 2);
            $xfer += $output->writeString($this->lastId);
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

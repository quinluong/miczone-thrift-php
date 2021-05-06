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

class GetCategoryMappingByIdResponseData
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
                'class' => '\Miczone\Thrift\Catalog\Category\GetCategoryMappingByIdResponseDataItem',
                ),
        ),
    );

    /**
     * @var \Miczone\Thrift\Catalog\Category\GetCategoryMappingByIdResponseDataItem[]
     */
    public $itemList = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['itemList'])) {
                $this->itemList = $vals['itemList'];
            }
        }
    }

    public function getName()
    {
        return 'GetCategoryMappingByIdResponseData';
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
                        $_size39 = 0;
                        $_etype42 = 0;
                        $xfer += $input->readListBegin($_etype42, $_size39);
                        for ($_i43 = 0; $_i43 < $_size39; ++$_i43) {
                            $elem44 = null;
                            $elem44 = new \Miczone\Thrift\Catalog\Category\GetCategoryMappingByIdResponseDataItem();
                            $xfer += $elem44->read($input);
                            $this->itemList []= $elem44;
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

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('GetCategoryMappingByIdResponseData');
        if ($this->itemList !== null) {
            if (!is_array($this->itemList)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('itemList', TType::LST, 1);
            $output->writeListBegin(TType::STRUCT, count($this->itemList));
            foreach ($this->itemList as $iter45) {
                $xfer += $iter45->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}

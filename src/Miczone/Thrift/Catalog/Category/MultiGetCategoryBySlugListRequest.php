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

class MultiGetCategoryBySlugListRequest
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'slugList',
            'isRequired' => true,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => array(
                'type' => TType::STRING,
                ),
        ),
    );

    /**
     * @var string[]
     */
    public $slugList = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['slugList'])) {
                $this->slugList = $vals['slugList'];
            }
        }
    }

    public function getName()
    {
        return 'MultiGetCategoryBySlugListRequest';
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
                        $this->slugList = array();
                        $_size16 = 0;
                        $_etype19 = 0;
                        $xfer += $input->readListBegin($_etype19, $_size16);
                        for ($_i20 = 0; $_i20 < $_size16; ++$_i20) {
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

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('MultiGetCategoryBySlugListRequest');
        if ($this->slugList !== null) {
            if (!is_array($this->slugList)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('slugList', TType::LST, 1);
            $output->writeListBegin(TType::STRING, count($this->slugList));
            foreach ($this->slugList as $iter22) {
                $xfer += $output->writeString($iter22);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}

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

class GetSliceCategoryRequest
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'fromId',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'limit',
            'isRequired' => false,
            'type' => TType::BYTE,
        ),
    );

    /**
     * @var string
     */
    public $fromId = null;
    /**
     * @var int
     */
    public $limit = 10;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['fromId'])) {
                $this->fromId = $vals['fromId'];
            }
            if (isset($vals['limit'])) {
                $this->limit = $vals['limit'];
            }
        }
    }

    public function getName()
    {
        return 'GetSliceCategoryRequest';
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
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->fromId);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::BYTE) {
                        $xfer += $input->readByte($this->limit);
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
        $xfer += $output->writeStructBegin('GetSliceCategoryRequest');
        if ($this->fromId !== null) {
            $xfer += $output->writeFieldBegin('fromId', TType::STRING, 1);
            $xfer += $output->writeString($this->fromId);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->limit !== null) {
            $xfer += $output->writeFieldBegin('limit', TType::BYTE, 2);
            $xfer += $output->writeByte($this->limit);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}

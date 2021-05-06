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

class GetCategoryMappingByIdResponse
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'error',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\Miczone\Thrift\Common\Error',
        ),
        2 => array(
            'var' => 'data',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Miczone\Thrift\Catalog\Category\GetCategoryMappingByIdResponseData',
        ),
    );

    /**
     * @var \Miczone\Thrift\Common\Error
     */
    public $error = null;
    /**
     * @var \Miczone\Thrift\Catalog\Category\GetCategoryMappingByIdResponseData
     */
    public $data = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['error'])) {
                $this->error = $vals['error'];
            }
            if (isset($vals['data'])) {
                $this->data = $vals['data'];
            }
        }
    }

    public function getName()
    {
        return 'GetCategoryMappingByIdResponse';
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
                    if ($ftype == TType::STRUCT) {
                        $this->error = new \Miczone\Thrift\Common\Error();
                        $xfer += $this->error->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRUCT) {
                        $this->data = new \Miczone\Thrift\Catalog\Category\GetCategoryMappingByIdResponseData();
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

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('GetCategoryMappingByIdResponse');
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

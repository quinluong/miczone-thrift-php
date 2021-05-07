<?php
namespace Miczone\Thrift\Catalog;

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

class MiczoneCatalogStorageService_multiGetProductByIdList_args
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'operationHandle',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Miczone\Thrift\Common\OperationHandle',
        ),
        2 => array(
            'var' => 'request',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Miczone\Thrift\Catalog\Product\MultiGetProductByIdListRequest',
        ),
    );

    /**
     * @var \Miczone\Thrift\Common\OperationHandle
     */
    public $operationHandle = null;
    /**
     * @var \Miczone\Thrift\Catalog\Product\MultiGetProductByIdListRequest
     */
    public $request = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['operationHandle'])) {
                $this->operationHandle = $vals['operationHandle'];
            }
            if (isset($vals['request'])) {
                $this->request = $vals['request'];
            }
        }
    }

    public function getName()
    {
        return 'MiczoneCatalogStorageService_multiGetProductByIdList_args';
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
                        $this->operationHandle = new \Miczone\Thrift\Common\OperationHandle();
                        $xfer += $this->operationHandle->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRUCT) {
                        $this->request = new \Miczone\Thrift\Catalog\Product\MultiGetProductByIdListRequest();
                        $xfer += $this->request->read($input);
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
        $xfer += $output->writeStructBegin('MiczoneCatalogStorageService_multiGetProductByIdList_args');
        if ($this->operationHandle !== null) {
            if (!is_object($this->operationHandle)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('operationHandle', TType::STRUCT, 1);
            $xfer += $this->operationHandle->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->request !== null) {
            if (!is_object($this->request)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('request', TType::STRUCT, 2);
            $xfer += $this->request->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
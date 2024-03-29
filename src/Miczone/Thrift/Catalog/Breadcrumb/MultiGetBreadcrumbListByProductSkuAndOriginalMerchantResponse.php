<?php
namespace Miczone\Thrift\Catalog\Breadcrumb;

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

class MultiGetBreadcrumbListByProductSkuAndOriginalMerchantResponse
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
            'var' => 'errorMap',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Miczone\Thrift\Common\ErrorMap',
        ),
        3 => array(
            'var' => 'dataMap',
            'isRequired' => false,
            'type' => TType::MAP,
            'ktype' => TType::STRING,
            'vtype' => TType::STRUCT,
            'key' => array(
                'type' => TType::STRING,
            ),
            'val' => array(
                'type' => TType::STRUCT,
                'class' => '\Miczone\Thrift\Catalog\Breadcrumb\MultiGetBreadcrumbListByProductSkuAndOriginalMerchantResponseItem',
                ),
        ),
    );

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

    public function __construct($vals = null)
    {
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

    public function getName()
    {
        return 'MultiGetBreadcrumbListByProductSkuAndOriginalMerchantResponse';
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
                        $this->errorMap = new \Miczone\Thrift\Common\ErrorMap();
                        $xfer += $this->errorMap->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::MAP) {
                        $this->dataMap = array();
                        $_size16 = 0;
                        $_ktype17 = 0;
                        $_vtype18 = 0;
                        $xfer += $input->readMapBegin($_ktype17, $_vtype18, $_size16);
                        for ($_i20 = 0; $_i20 < $_size16; ++$_i20) {
                            $key21 = '';
                            $val22 = new \Miczone\Thrift\Catalog\Breadcrumb\MultiGetBreadcrumbListByProductSkuAndOriginalMerchantResponseItem();
                            $xfer += $input->readString($key21);
                            $val22 = new \Miczone\Thrift\Catalog\Breadcrumb\MultiGetBreadcrumbListByProductSkuAndOriginalMerchantResponseItem();
                            $xfer += $val22->read($input);
                            $this->dataMap[$key21] = $val22;
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

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('MultiGetBreadcrumbListByProductSkuAndOriginalMerchantResponse');
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
            $output->writeMapBegin(TType::STRING, TType::STRUCT, count($this->dataMap));
            foreach ($this->dataMap as $kiter23 => $viter24) {
                $xfer += $output->writeString($kiter23);
                $xfer += $viter24->write($output);
            }
            $output->writeMapEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}

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

class MultiGetCategoryByIdResponse
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
                'class' => '\Miczone\Thrift\Catalog\Category\Category',
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
        return 'MultiGetCategoryByIdResponse';
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
                        $_size7 = 0;
                        $_ktype8 = 0;
                        $_vtype9 = 0;
                        $xfer += $input->readMapBegin($_ktype8, $_vtype9, $_size7);
                        for ($_i11 = 0; $_i11 < $_size7; ++$_i11) {
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

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('MultiGetCategoryByIdResponse');
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
            foreach ($this->dataMap as $kiter14 => $viter15) {
                $xfer += $output->writeString($kiter14);
                $xfer += $viter15->write($output);
            }
            $output->writeMapEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
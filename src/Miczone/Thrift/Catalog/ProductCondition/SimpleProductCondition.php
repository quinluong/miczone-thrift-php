<?php
namespace Miczone\Thrift\Catalog\ProductCondition;

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

class SimpleProductCondition
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'id',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'code',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'name',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var string
     */
    public $id = null;
    /**
     * @var string
     */
    public $code = null;
    /**
     * @var string
     */
    public $name = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['id'])) {
                $this->id = $vals['id'];
            }
            if (isset($vals['code'])) {
                $this->code = $vals['code'];
            }
            if (isset($vals['name'])) {
                $this->name = $vals['name'];
            }
        }
    }

    public function getName()
    {
        return 'SimpleProductCondition';
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
                        $xfer += $input->readString($this->id);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->code);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->name);
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
        $xfer += $output->writeStructBegin('SimpleProductCondition');
        if ($this->id !== null) {
            $xfer += $output->writeFieldBegin('id', TType::STRING, 1);
            $xfer += $output->writeString($this->id);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->code !== null) {
            $xfer += $output->writeFieldBegin('code', TType::STRING, 2);
            $xfer += $output->writeString($this->code);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->name !== null) {
            $xfer += $output->writeFieldBegin('name', TType::STRING, 3);
            $xfer += $output->writeString($this->name);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}

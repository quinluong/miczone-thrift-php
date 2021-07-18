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

class GetMatrixProductRequest
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'websiteCode',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'countryCode',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'productSku',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'originalMerchantOriginalId',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var string
     */
    public $websiteCode = null;
    /**
     * @var string
     */
    public $countryCode = null;
    /**
     * @var string
     */
    public $productSku = null;
    /**
     * @var string
     */
    public $originalMerchantOriginalId = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['websiteCode'])) {
                $this->websiteCode = $vals['websiteCode'];
            }
            if (isset($vals['countryCode'])) {
                $this->countryCode = $vals['countryCode'];
            }
            if (isset($vals['productSku'])) {
                $this->productSku = $vals['productSku'];
            }
            if (isset($vals['originalMerchantOriginalId'])) {
                $this->originalMerchantOriginalId = $vals['originalMerchantOriginalId'];
            }
        }
    }

    public function getName()
    {
        return 'GetMatrixProductRequest';
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
                        $xfer += $input->readString($this->websiteCode);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->countryCode);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->productSku);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->originalMerchantOriginalId);
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
        $xfer += $output->writeStructBegin('GetMatrixProductRequest');
        if ($this->websiteCode !== null) {
            $xfer += $output->writeFieldBegin('websiteCode', TType::STRING, 1);
            $xfer += $output->writeString($this->websiteCode);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->countryCode !== null) {
            $xfer += $output->writeFieldBegin('countryCode', TType::STRING, 2);
            $xfer += $output->writeString($this->countryCode);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->productSku !== null) {
            $xfer += $output->writeFieldBegin('productSku', TType::STRING, 3);
            $xfer += $output->writeString($this->productSku);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->originalMerchantOriginalId !== null) {
            $xfer += $output->writeFieldBegin('originalMerchantOriginalId', TType::STRING, 4);
            $xfer += $output->writeString($this->originalMerchantOriginalId);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}

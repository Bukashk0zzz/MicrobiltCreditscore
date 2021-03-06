<?php
/**
 * File for class MicrobiltStructOFAC_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructOFAC_Type originally named OFAC_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructOFAC_Type extends MicrobiltStructAggregate
{
    /**
     * The PersonInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructPersonInfo_Type
     */
    public $PersonInfo;
    /**
     * The ResponseCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $ResponseCode;
    /**
     * The ProblemCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $ProblemCode;
    /**
     * The MatchCode
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructCodeDescription_Type
     */
    public $MatchCode;
    /**
     * The SourceSanction
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $SourceSanction;
    /**
     * The IssueId
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $IssueId;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var int
     */
    public $Value;
    /**
     * The FileName
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FileName;
    /**
     * The FileDt
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $FileDt;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $Message;
    /**
     * Constructor method for OFAC_Type
     * @see parent::__construct()
     * @param MicrobiltStructPersonInfo_Type $_personInfo
     * @param MicrobiltStructCodeDescription_Type $_responseCode
     * @param MicrobiltStructCodeDescription_Type $_problemCode
     * @param MicrobiltStructCodeDescription_Type $_matchCode
     * @param string $_sourceSanction
     * @param string $_issueId
     * @param int $_value
     * @param string $_fileName
     * @param string $_fileDt
     * @param MicrobiltStructMessage_Type $_message
     * @return MicrobiltStructOFAC_Type
     */
    public function __construct($_personInfo = NULL,$_responseCode = NULL,$_problemCode = NULL,$_matchCode = NULL,$_sourceSanction = NULL,$_issueId = NULL,$_value = NULL,$_fileName = NULL,$_fileDt = NULL,$_message = NULL)
    {
        MicrobiltWsdlClass::__construct(array('PersonInfo'=>$_personInfo,'ResponseCode'=>$_responseCode,'ProblemCode'=>$_problemCode,'MatchCode'=>$_matchCode,'SourceSanction'=>$_sourceSanction,'IssueId'=>$_issueId,'Value'=>$_value,'FileName'=>$_fileName,'FileDt'=>$_fileDt,'Message'=>$_message),false);
    }
    /**
     * Get PersonInfo value
     * @return MicrobiltStructPersonInfo_Type|null
     */
    public function getPersonInfo()
    {
        return $this->PersonInfo;
    }
    /**
     * Set PersonInfo value
     * @param MicrobiltStructPersonInfo_Type $_personInfo the PersonInfo
     * @return MicrobiltStructPersonInfo_Type
     */
    public function setPersonInfo($_personInfo)
    {
        return ($this->PersonInfo = $_personInfo);
    }
    /**
     * Get ResponseCode value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getResponseCode()
    {
        return $this->ResponseCode;
    }
    /**
     * Set ResponseCode value
     * @param MicrobiltStructCodeDescription_Type $_responseCode the ResponseCode
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setResponseCode($_responseCode)
    {
        return ($this->ResponseCode = $_responseCode);
    }
    /**
     * Get ProblemCode value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getProblemCode()
    {
        return $this->ProblemCode;
    }
    /**
     * Set ProblemCode value
     * @param MicrobiltStructCodeDescription_Type $_problemCode the ProblemCode
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setProblemCode($_problemCode)
    {
        return ($this->ProblemCode = $_problemCode);
    }
    /**
     * Get MatchCode value
     * @return MicrobiltStructCodeDescription_Type|null
     */
    public function getMatchCode()
    {
        return $this->MatchCode;
    }
    /**
     * Set MatchCode value
     * @param MicrobiltStructCodeDescription_Type $_matchCode the MatchCode
     * @return MicrobiltStructCodeDescription_Type
     */
    public function setMatchCode($_matchCode)
    {
        return ($this->MatchCode = $_matchCode);
    }
    /**
     * Get SourceSanction value
     * @return string|null
     */
    public function getSourceSanction()
    {
        return $this->SourceSanction;
    }
    /**
     * Set SourceSanction value
     * @param string $_sourceSanction the SourceSanction
     * @return string
     */
    public function setSourceSanction($_sourceSanction)
    {
        return ($this->SourceSanction = $_sourceSanction);
    }
    /**
     * Get IssueId value
     * @return string|null
     */
    public function getIssueId()
    {
        return $this->IssueId;
    }
    /**
     * Set IssueId value
     * @param string $_issueId the IssueId
     * @return string
     */
    public function setIssueId($_issueId)
    {
        return ($this->IssueId = $_issueId);
    }
    /**
     * Get Value value
     * @return int|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param int $_value the Value
     * @return int
     */
    public function setValue($_value)
    {
        return ($this->Value = $_value);
    }
    /**
     * Get FileName value
     * @return string|null
     */
    public function getFileName()
    {
        return $this->FileName;
    }
    /**
     * Set FileName value
     * @param string $_fileName the FileName
     * @return string
     */
    public function setFileName($_fileName)
    {
        return ($this->FileName = $_fileName);
    }
    /**
     * Get FileDt value
     * @return string|null
     */
    public function getFileDt()
    {
        return $this->FileDt;
    }
    /**
     * Set FileDt value
     * @param string $_fileDt the FileDt
     * @return string
     */
    public function setFileDt($_fileDt)
    {
        return ($this->FileDt = $_fileDt);
    }
    /**
     * Get Message value
     * @return MicrobiltStructMessage_Type|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param MicrobiltStructMessage_Type $_message the Message
     * @return MicrobiltStructMessage_Type
     */
    public function setMessage($_message)
    {
        return ($this->Message = $_message);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::magick_set_state()
     * @uses MicrobiltWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructOFAC_Type
     */
    public static function magick_set_state(array $_array,$_className = __CLASS__)
    {
        return parent::magick_set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}

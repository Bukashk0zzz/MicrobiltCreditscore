<?php
/**
 * File for class MicrobiltStructFraudValidations_Type
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
/**
 * This class stands for MicrobiltStructFraudValidations_Type originally named FraudValidations_Type
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://creditserver.microbilt.com/WebServices/EX/ExStd.svc?xsd=xsd2}
 * @package Microbilt
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-26
 */
class MicrobiltStructFraudValidations_Type extends MicrobiltStructAggregate
{
    /**
     * The NameValidation
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $NameValidation;
    /**
     * The SSNValidation
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $SSNValidation;
    /**
     * The DOBValidation
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $DOBValidation;
    /**
     * The DLValidation
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $DLValidation;
    /**
     * The DeceasedValidation
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $DeceasedValidation;
    /**
     * The AddressValidation
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $AddressValidation;
    /**
     * The PhoneValidation
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $PhoneValidation;
    /**
     * The ComboValidation
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $ComboValidation;
    /**
     * The BusinessValidation
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $BusinessValidation;
    /**
     * The OtherValidation
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var MicrobiltStructMessage_Type
     */
    public $OtherValidation;
    /**
     * Constructor method for FraudValidations_Type
     * @see parent::__construct()
     * @param MicrobiltStructMessage_Type $_nameValidation
     * @param MicrobiltStructMessage_Type $_sSNValidation
     * @param MicrobiltStructMessage_Type $_dOBValidation
     * @param MicrobiltStructMessage_Type $_dLValidation
     * @param MicrobiltStructMessage_Type $_deceasedValidation
     * @param MicrobiltStructMessage_Type $_addressValidation
     * @param MicrobiltStructMessage_Type $_phoneValidation
     * @param MicrobiltStructMessage_Type $_comboValidation
     * @param MicrobiltStructMessage_Type $_businessValidation
     * @param MicrobiltStructMessage_Type $_otherValidation
     * @return MicrobiltStructFraudValidations_Type
     */
    public function __construct($_nameValidation = NULL,$_sSNValidation = NULL,$_dOBValidation = NULL,$_dLValidation = NULL,$_deceasedValidation = NULL,$_addressValidation = NULL,$_phoneValidation = NULL,$_comboValidation = NULL,$_businessValidation = NULL,$_otherValidation = NULL)
    {
        MicrobiltWsdlClass::__construct(array('NameValidation'=>$_nameValidation,'SSNValidation'=>$_sSNValidation,'DOBValidation'=>$_dOBValidation,'DLValidation'=>$_dLValidation,'DeceasedValidation'=>$_deceasedValidation,'AddressValidation'=>$_addressValidation,'PhoneValidation'=>$_phoneValidation,'ComboValidation'=>$_comboValidation,'BusinessValidation'=>$_businessValidation,'OtherValidation'=>$_otherValidation),false);
    }
    /**
     * Get NameValidation value
     * @return MicrobiltStructMessage_Type|null
     */
    public function getNameValidation()
    {
        return $this->NameValidation;
    }
    /**
     * Set NameValidation value
     * @param MicrobiltStructMessage_Type $_nameValidation the NameValidation
     * @return MicrobiltStructMessage_Type
     */
    public function setNameValidation($_nameValidation)
    {
        return ($this->NameValidation = $_nameValidation);
    }
    /**
     * Get SSNValidation value
     * @return MicrobiltStructMessage_Type|null
     */
    public function getSSNValidation()
    {
        return $this->SSNValidation;
    }
    /**
     * Set SSNValidation value
     * @param MicrobiltStructMessage_Type $_sSNValidation the SSNValidation
     * @return MicrobiltStructMessage_Type
     */
    public function setSSNValidation($_sSNValidation)
    {
        return ($this->SSNValidation = $_sSNValidation);
    }
    /**
     * Get DOBValidation value
     * @return MicrobiltStructMessage_Type|null
     */
    public function getDOBValidation()
    {
        return $this->DOBValidation;
    }
    /**
     * Set DOBValidation value
     * @param MicrobiltStructMessage_Type $_dOBValidation the DOBValidation
     * @return MicrobiltStructMessage_Type
     */
    public function setDOBValidation($_dOBValidation)
    {
        return ($this->DOBValidation = $_dOBValidation);
    }
    /**
     * Get DLValidation value
     * @return MicrobiltStructMessage_Type|null
     */
    public function getDLValidation()
    {
        return $this->DLValidation;
    }
    /**
     * Set DLValidation value
     * @param MicrobiltStructMessage_Type $_dLValidation the DLValidation
     * @return MicrobiltStructMessage_Type
     */
    public function setDLValidation($_dLValidation)
    {
        return ($this->DLValidation = $_dLValidation);
    }
    /**
     * Get DeceasedValidation value
     * @return MicrobiltStructMessage_Type|null
     */
    public function getDeceasedValidation()
    {
        return $this->DeceasedValidation;
    }
    /**
     * Set DeceasedValidation value
     * @param MicrobiltStructMessage_Type $_deceasedValidation the DeceasedValidation
     * @return MicrobiltStructMessage_Type
     */
    public function setDeceasedValidation($_deceasedValidation)
    {
        return ($this->DeceasedValidation = $_deceasedValidation);
    }
    /**
     * Get AddressValidation value
     * @return MicrobiltStructMessage_Type|null
     */
    public function getAddressValidation()
    {
        return $this->AddressValidation;
    }
    /**
     * Set AddressValidation value
     * @param MicrobiltStructMessage_Type $_addressValidation the AddressValidation
     * @return MicrobiltStructMessage_Type
     */
    public function setAddressValidation($_addressValidation)
    {
        return ($this->AddressValidation = $_addressValidation);
    }
    /**
     * Get PhoneValidation value
     * @return MicrobiltStructMessage_Type|null
     */
    public function getPhoneValidation()
    {
        return $this->PhoneValidation;
    }
    /**
     * Set PhoneValidation value
     * @param MicrobiltStructMessage_Type $_phoneValidation the PhoneValidation
     * @return MicrobiltStructMessage_Type
     */
    public function setPhoneValidation($_phoneValidation)
    {
        return ($this->PhoneValidation = $_phoneValidation);
    }
    /**
     * Get ComboValidation value
     * @return MicrobiltStructMessage_Type|null
     */
    public function getComboValidation()
    {
        return $this->ComboValidation;
    }
    /**
     * Set ComboValidation value
     * @param MicrobiltStructMessage_Type $_comboValidation the ComboValidation
     * @return MicrobiltStructMessage_Type
     */
    public function setComboValidation($_comboValidation)
    {
        return ($this->ComboValidation = $_comboValidation);
    }
    /**
     * Get BusinessValidation value
     * @return MicrobiltStructMessage_Type|null
     */
    public function getBusinessValidation()
    {
        return $this->BusinessValidation;
    }
    /**
     * Set BusinessValidation value
     * @param MicrobiltStructMessage_Type $_businessValidation the BusinessValidation
     * @return MicrobiltStructMessage_Type
     */
    public function setBusinessValidation($_businessValidation)
    {
        return ($this->BusinessValidation = $_businessValidation);
    }
    /**
     * Get OtherValidation value
     * @return MicrobiltStructMessage_Type|null
     */
    public function getOtherValidation()
    {
        return $this->OtherValidation;
    }
    /**
     * Set OtherValidation value
     * @param MicrobiltStructMessage_Type $_otherValidation the OtherValidation
     * @return MicrobiltStructMessage_Type
     */
    public function setOtherValidation($_otherValidation)
    {
        return ($this->OtherValidation = $_otherValidation);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see MicrobiltWsdlClass::magick_set_state()
     * @uses MicrobiltWsdlClass::magick_set_state()
     * @param array $_array the exported values
     * @return MicrobiltStructFraudValidations_Type
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

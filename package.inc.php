<?php
define('__MLC_HIGHRISE__', dirname(__FILE__));
define('__MLC_HIGHRISE_CORE__', __MLC_HIGHRISE__ . '/_core');


define('__MLC_HIGHRISE_CORE_CTL__', __MLC_HIGHRISE_CORE__ . '/ctl');
define('__MLC_HIGHRISE_CORE_MODEL__', __MLC_HIGHRISE_CORE__ . '/model');
define('__MLC_HIGHRISE_CORE_VIEW__', __MLC_HIGHRISE_CORE__ . '/view');
define('__MLC_HIGHRISE_CG__', __MLC_HIGHRISE__ . '/_codegen');
MLCApplicationBase::$arrClassFiles['MLCHRObjectBase'] = __MLC_HIGHRISE_CORE__ . '/MLCHRObjectBase.class.php';
MLCApplicationBase::$arrClassFiles['MLCHRPeople'] = __MLC_HIGHRISE_CORE__ . '/MLCHRPeople.class.php';
MLCApplicationBase::$arrClassFiles['MLCHRPeopleData'] = __MLC_HIGHRISE_CORE__ . '/MLCHRPeopleData.class.php';
MLCApplicationBase::$arrClassFiles['MLCHRTask'] = __MLC_HIGHRISE_CORE__ . '/MLCHRTask.class.php';
MLCApplicationBase::$arrClassFiles['MLCHREmail'] = __MLC_HIGHRISE_CORE__ . '/MLCHREmail.class.php';
//OAuth
MLCApplicationBase::$arrClassFiles['MLCHROAuthDriver'] = __MLC_HIGHRISE_CORE__ . '/MLCHROAuthDriver.class.php';



require_once(__MLC_HIGHRISE_CORE__ . '/_enum.inc.php');


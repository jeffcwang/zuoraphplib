<?php


/*
 * Created on Jun 18, 2012
 *
 */

require_once 'ZuoraService.php';

class Utility {
	private static $instance;
	private static $zuoraService;
    private static $CONFIG_FILE = "config.ini";
    private static $sessionId;
    
	/**
	 * Singleton
	 */
	private function __construct() {

		$this->zuoraService = new ZuoraService();
        $props = parse_ini_file(self::$CONFIG_FILE);
        
        //TODO: Need to auto-relogin to prevent session timeouts
		//login
		$loginObject = new Login();
		$loginObject->username = $props["username"];
		$loginObject->password = $props["password"];
		$loginResponse = $this->zuoraService->login($loginObject);
        self::$sessionId = $loginResponse->result->Session;
        $this->addHeaders(array());
		
	}
    
    public function addHeaders($headers) {
        $this->zuoraService->__setSoapHeaders(NULL);
        //Set the session in the soap header for subsequent calls
        $header = new SoapHeader('http://api.zuora.com/', 'SessionHeader', array (
            'session' => self::$sessionId
        ));
        $headers[] = $header;
        $this->zuoraService->__setSoapHeaders($headers);
    }
    
	public static function getInstance() {
		if (!isset (self::$instance)) {
			self::$instance = new Utility();
		}
		return self::$instance;
	}
    
    public static function currentDateTime() {
        date_default_timezone_set('GMT');
        return date('Y-m-d\TH:i:s',time()); 
    }

	public function getZuoraService() {
		return $this->zuoraService;
	}
    
    public function query($queryStr) {
        $queryObj = new query();
        $queryObj->queryString = $queryStr;
        
        
        $result = $this->getZuoraService()->query($queryObj);
        
        if ($result->result->size > 0) {
            return $result->result->records;
        } else {
            return $result->result;
        }
    }
    
    public function create($object) {
        $createObj = new create();
        $createObj->zObjects[] = $object;
    }
    
    
    public function getFieldsForQuery($obj) {
        $ignoreFields['fieldsToNull'] = true;
        $reflect = new ReflectionClass($obj);
        $props = $reflect->getProperties(ReflectionProperty::IS_PUBLIC);
        $propsToReturn = array();
        foreach ($props as $prop) {
            if (!$ignoreFields[$prop->name]) {
                $propsToReturn[] = $prop->name;
            }
        }
        
        return  " " . implode("," , $propsToReturn) . " ";
    }
    
    public function getSingleTransactionHeader() {
        $header = new SoapHeader('http://api.zuora.com/', 'CallOptions', array (
            'useSingleTransaction' => true
        ));
        return $header;
    }    
}
?>

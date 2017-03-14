<?php namespace airshipwebservices\soapapi {
	
	class AirshipSearch extends Airship{
		
		public  $wsdl;             // Alphanumeric		

		public function __construct()
		{
			parent::__construct();
			$this->wsdl = 'Search.wsdl';
		}

		/*
		* 	PREPARE INPUT
		*
		*	@description 		prepares input array and checks we havea valid soap connection
		*
		*	@param 	string 		action
		*
		*	@return int 		mixed
		*/

		protected function prepareInput($action)
		{

			if(!$this->checkWSDL($this->server.$this->wsdl))
			    return $this->response = $this->_errorHandler->return_error('server.connection_error');

			return true;

		}

		/*
		* 	VALIDATE RESPONSE
		*
		*	@description 		Validate response of return from SOAP
		*
		*/

		protected function validateResponse($action)
		{
			return $this->_validator->validateResponse($this->response, $action.'_response');
		}

		/*
		* 	UNIT LIST
		*
		*	@description 		A wrapper function for PowerText's Search Contact UDF function
		*
		*	@param 	object   	contact
		*	@param 	array 		groups
		*	@param 	array 		UDFs
		*
		*	@return int 		mixed
		*/
		
		public function searchContactUDF($udfnameid,$udfvalue,$myResultOptions = [])
		{

			if($this->prepareInput('search_contact_udf') !== true)
		    	return $this->response;
			
			//Make The Calldd
    		$this->response = $this->soapCall('searchContactUDF', $this->username, $this->password,$udfnameid,$udfvalue,$myResultOptions);
			return $this->validateResponse('search_contact_udf');
		    				
		}


	}

}
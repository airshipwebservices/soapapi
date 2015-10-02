<?php namespace airshipwebservices\soapapi;
	
class AirshipMilestones extends Airship{

	/*************
	* 
	* LITERALS
	*
	**************/

	/**
	 * WSDL for SOAP contact 
	 *
	 * @var string
	 */ 		
	protected $wsdl = 'Milestones.wsdl';		

	/*************
	* 
	* METHODS
	*
	**************/

	/**
	 * CONSTRUCTOR
	 * Get an instance of the class
	 *
	 * @return null
	 */
	public function __construct(){
		parent::__construct();
	}

	/**
	 * CHECK WSDL
	 * Checks we have a valid soap connection
	 * 
	 * @return mixed
	 */
	protected function checkConnection(){
		if(!$this->checkWSDL($this->server.$this->wsdl))
		 	return array(
		 			'success' => false,
		 			'message' => $this->_errorHandler->return_error('server.connection_error')
		 	);
		
		return array( 'success' => true, 'message' => false );
	}	

	/**
	 * VALIDATE RESPONSE
	 * Validate response of return from SOAP
	 *
	 * @return 
	 */
	protected function validateResponse( $action ){
		return $this->_validator->validateResponse( $this->response, $action.'_response' );
	}

	/**
	 * GET CONTACT MILESTONES
	 * Will get milestones dependant on contact id	
	 *
	 * @param int $contact_id
	 * @return null
	 */		
	public function getContactMilestones( $contact_id ){
		$connection = $this->checkConnection();
		if($connection['success'] !== true)
	    	return $connection['message'];	

    	$this->response = $this->soapCall( 	'getContactMilestones', 
											$this->username, 
											$this->password,
											$contact_id
										);

    	return $this->validateResponse( 'get_milestones' );	
	}

	/**
	 * GET STAR RATING
	 * Will get star rating dependant on contact id	
	 *
	 * @param int $contact_id
	 * @return null
	 */		
	public function getStarRating( $contact_id ){
		$connection = $this->checkConnection();
		if($connection['success'] !== true)
	    	return $connection['message'];	

    	$this->response = $this->soapCall( 	'getStarRating', 
											$this->username, 
											$this->password,
											$contact_id
										);

    	return $this->validateResponse( 'get_star_rating' );	
	}
}
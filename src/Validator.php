<?php namespace airshipwebservices\soapapi {
	

	class Validator extends Airship{ 

		public function __construct()
			{

				$this->_errorHandler = new ErrorHandler();
				$this->_successHandler = new SuccessHandler();

			}

		/**
		 * Validation for create contact response
		 *
		 * @var array
		 */
		protected $create_contact_response = array(
									'rules' => array(
										'numeric'=>true,
										'min'=>1
										), 
									'error' => 'contact.create_error'
								);

		/**
		 * Validation for update contact response
		 *
		 * @var array
		 */
		protected $update_contact_response = array(
									'rules' => array(
										'numeric'=>true,
										'min'=>1
										), 
									'error' => 'contact.create_error'
								);

		/**
		 * Validation for get contact response
		 *
		 * @var array
		 */
		protected $get_contact_response = array(
									'rules' => array(
										'required'=>'contactData'
										), 
									'error' => 'contact.get_error'
								);

		/**
		 * Validation for get contact email response
		 *
		 * @var array
		 */
		protected $get_contact_email_response = array(
									'rules' => array(
										'required'=>'contactData'
										), 
									'error' => 'contact.get_error'
								);

		/**
		 * Validation for get contact response
		 *
		 * @var array
		 */
		protected $lookup_contact_lastname_response = array(
									'rules' => array(
										'isarray'=>true,
										'arraycontent'=>true
										), 
									'error' => 'contact.lookup_lastname_error'
								);

		/**
		 * Validation for get contact by UDF response
		 *
		 * @var array
		 */

		protected $lookup_contact_by_udf = array(
									'rules' => array(
										'numeric'=>true,
										'min'=>1
										), 
									'error' => 'contact.lookup_udf_noresults'
								);


		/**
		 * Validation for unsubscribe contact response
		 *
		 * @var array
		 */

		protected $unsubscribe_contact = array(
									'rules' => array(
										'equalto'=>100
										), 
									'error' => 'contact.unsubscribe_error'
								);

		/**
		 * Validation for unsubscribe contact group response
		 *
		 * @var array
		 */

		protected $unsubscribe_contact_group = array(
									'rules' => array(
										'equalto'=>100
										), 
									'error' => 'contact.unsubscribe_contact_group'
								);


		/**
		 * Validation for get UDF value response
		 *
		 * @var array
		 */

		protected $get_udf_value = array(
									'rules' => array(
										'minlength'=>1
										), 
									'error' => 'contact.udf_empty'
								);

		/**
		 * Validation for set UDF value response
		 *
		 * @var array
		 */

		protected $set_udf_value = array(
									'rules' => array(
										'equalto'=>100
										), 
									'error' => 'contact.set_udf_error'
								);

		/**
		 * Validation for get_interactions_in_monitored_group  response
		 *
		 * @var array
		 */

		protected $get_interactions_in_monitored_group = array(
									'rules' => array(
										'isarray'=>true,
										'arraycontent'=>true
										), 
									'error' => 'contact.get_group_interactions_empty'
								);

		/**
		 * Validation for get_interactions_in_monitored_group  response
		 *
		 * @var array
		 */

		protected $delete_interactions_in_monitored_group = array(
									'rules' => array(
										'equalto'=>100
										), 
									'error' => 'contact.delete_group_interactions_error'
								);

		/**
		 * Possible fields fore create contact
		 *
		 * @var array
		 */
		protected $create_contact_fields = array(
									'title',
									'gender',
									'firstname',
									'lastname',
									'buildingname',
									'buildingnumstreet',
									'locality',
									'city',
									'postcode',
									'county',
									'country',
									'membershipnumber',
									'membershiptype',
									'mobilenumber',
									'landnumber',
									'email',
									'dob',
									'sourceid',
									'allowsms',
									'allowcall',
									'allowemail',
									'allowsnailmail',
								);

		/**
		 * Possible fields fore update contact
		 *
		 * @var array
		 */
		protected $update_contact_fields = array(
									'contactid',
									'title',
									'gender',
									'firstname',
									'lastname',
									'buildingname',
									'buildingnumstreet',
									'locality',
									'city',
									'postcode',
									'county',
									'country',
									'membershipnumber',
									'membershiptype',
									'mobilenumber',
									'landnumber',
									'email',
									'dob',
									'sourceid',
									'allowsms',
									'allowcall',
									'allowemail',
									'allowsnailmail',
								);

		/**
		 * Check possible fields
		 * Return an array only of fields that Airhsip Likes. 
		 *
		 * @var array
		 */


		public function checkPossibleFields(array $array, $rules_type)
		{
			$return = array();
			foreach ($this->$rules_type as $field) {
				if (isset($array[$field])) {
					$return[$field] = $array[$field];
				}
			}

			return $return;

		}

		/**
		 * Validate RESULT
		 * Validate result of SOAP. 
		 *
		 * @var array
		 */


		public function validateResponse($response, $rules_type)
		{

			$this->response = $response();
			$this->rules = $this->$rules_type;

			// check for an existing SOAP error
			if(isset($response->error_number)){ 
				return $response;
			}

			// Validate each rule
			foreach($this->rules['rules'] as $key => $rule){

				switch ($key) {
				    case "numeric":
				        if(!$this->validateNumeric($rule))
				        	return $this->error;
				        break;
				    case "min":
				       if(!$this->validateMin($rule))
				        	return $this->error;
				        break;
				    case "required":
				        if(!$this->validateRequired($rule))
				        	return $this->error;
				        break;
			        case "isarray":
				        if(!$this->validateIsArray($rule))
				        	return $this->error;
				        break;
			        case "arraycontent":
				        if(!$this->validateArrayContent($rule))
				        	return $this->error;
				        break;
			        case "equalto":
				        if(!$this->validateEqualTo($rule))
				        	return $this->error;
				        break;
			        case "minlength":
				        if(!$this->validateMinLength($rule))
				        	return $this->error;
				        break;
				}

			}

			return $this->_successHandler->return_success($response);

		}

		/**
		 * SET ERROR
		 * Set the error to be returned
		 *
		 * @var error
		 */

		protected function setError($rule = false){
			if($rule === false){
				$this->error = $this->_errorHandler->return_error($this->rules['error']);
			}else{
				$this->error = $this->_errorHandler->return_error($rule);
			}
		}

		/**
		 * VALIDATE NUMERIC
		 * validate the response to be numeric
		 *
		 * @return BOOL
		 */


		protected function validateNumeric($rule){

			if(!is_numeric($this->response) && $rule == true){
				$this->setError();
				return false;
			}

			return true;

		}

		/**
		 * VALIDATE MIN VALUE
		 * validate the response to be have a minimum value
		 *
		 * @return BOOL
		 */


		protected function validateMin($rule){

			if(!($this->response > $rule)){
				$this->setError();
				return false;
			}

			return true;

		}

		/**
		 * VALIDATE REQUIRED
		 * validate the response to have a specific variable set
		 *
		 * @return BOOL
		 */

		protected function validateRequired($rule){

			if(!isset($this->response->$rule) ){
				$this->setError();
				return false;
			}

			return true;

		}


		/**
		 * VALIDATE IS ARRAY
		 * validate the response is an array
		 *
		 * @return BOOL
		 */


		protected function validateIsArray($rule){

			if(!is_array($this->response) ){
				$this->setError();
				return false;
			}

			return true;

		}

		/**
		 * VALIDATE IS ARRAY CONTENT
		 * validate the response is a non-empty array
		 *
		 * @return BOOL
		 */


		protected function validateArrayContent($rule){

			if(is_array($this->response) && empty($this->response)){
				$this->setError('default.empty_array');
				return false;
			}

			return true;

		}

		/**
		 * VALIDATE EQUAL TO
		 * validate the response equal to
		 *
		 * @return BOOL
		 */

		protected function validateEqualTo($rule){

			if($this->response != $rule){
				$this->setError();
				return false;
			}

			return true;

		}

		/**
		 * VALIDATE MIN LENGTH 
		 * validate the response stirng has a minimum length
		 *
		 * @return BOOL
		 */

		protected function validateMinLength($rule){

			if(!(strlen($this->response) >= 1 )){
				$this->setError();
				return false;
			}

			return true;

		}
					

	}

}
<?php namespace airshipwebservices\soapapi {
	

	class Validator extends Airship{ 


		public function __construct()
			{

				$this->_errorHandler = new ErrorHandler();
				$this->_successHandler = new SuccessHandler();

			}


		/*
		|--------------------------------------------------------------------------
		| Contact responses
		|--------------------------------------------------------------------------
		|
		| 
	 	|
		*/
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
		 * Validation for get contact status response
		 *
		 * @var array
		 */
		protected $get_contact_status_response = array(
			'rules' => array(
			),
			'error' => 'contact.get_error'
		);

		/**
		 * Validation for add note response
		 *
		 * @var array
		 */
		protected $add_contact_notes_response = array(
			'rules' => array(
				'numeric'=>true,
				'min'=>1
			),
			'error' => 'contact.get_error'
		);

		/**
		 * Validation for get contact notes response
		 *
		 * @var array
		 */
		protected $get_contact_notes_response = array(
			'rules' => array(
				'isarray'=>true

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
		protected $lookup_contact_by_udf_response = array(
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
		protected $unsubscribe_contact_response = array(
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
		protected $unsubscribe_contact_group_response = array(
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
		protected $get_udf_value_response = array(
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
		protected $set_udf_value_response = array(
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
		protected $get_interactions_in_monitored_group_response = array(
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
		protected $delete_interactions_in_monitored_group_response = array(
			'rules' => array(
				'equalto'=>100
				), 
			'error' => 'contact.delete_group_interactions_error'
		);

		/**
		 * Validation for get_social  response
		 *
		 * @var array
		 */
		protected $get_contact_social_response = array(
			'rules' => array(
				
				), 
			'error' => 'contact.get_contact_social'
		);

		/**
		 * Validation for get_photo response
		 *
		 * @var array
		 */
		protected $get_contact_photo_response = array(
			'rules' => array(
				
				), 
			'error' => 'contact.get_contact_photo'
		);

		/**
		 * Validation for set_photo response
		 *
		 * @var array
		 */
		protected $set_contact_photo_response = array(
			'rules' => array(
				'equalto'=>100
			), 
			'error' => 'contact.set_contact_photo'
		);

		/**
		 * Validation for set_contact_social response
		 *
		 * @var array
		 */
		protected $set_contact_social_response = array(
			'rules' => array(
				'equalto'=>100
			), 
			'error' => 'contact.set_contact_social'
		);

		/**
		 * Validation for contact_validation response
		 *
		 * @var array
		 */
		protected $contact_validation_response = array(
			'rules' => array(
				'isobject' => true,
			), 
			'error' => 'contact.contact_validation'
		);

		/*
		|--------------------------------------------------------------------------
		| Bookings responses
		|--------------------------------------------------------------------------
		|
		| 
	 	|
		*/
		/**
		 * Validation for create_booking response
		 *
		 * @var array
		 */
		protected $create_booking_response = array(
			'rules' => array(
				'numeric'=>true,			
			), 
			'error' => 'bookings.create_booking_error'
		);

		/**
		 * Validation for update_booking response
		 *
		 * @var array
		 */
		protected $update_booking_response = array(
			'rules' => array(
				'equalto'=>100
			), 
			'error' => 'bookings.update_booking_error'
		);

		/**
		 * Validation for get_bookings response
		 *
		 * @var array
		 */
		protected $get_bookings_response = array(
			'rules' => array(
				'isarray' => true,
			), 
			'error' => 'bookings.get_bookings_error'
		);

		/**
		 * Validation for getBookingNotes response
		 *
		 * @var array
		 */
		protected $get_booking_notes_response = array(
			'rules' => array(
				'isarray' => true,
			),
			'error' => 'bookings.get_booking_notes_error'
		);

		/**
		 * Validation for getBookingTypes response
		 *
		 * @var array
		 */
		protected $get_booking_types_response = array(
			'rules' => array(
				'isarray' => true,
			),
			'error' => 'bookings.get_booking_types_error'
		);	

		/**
		 * Validation for getBookingSources response
		 *
		 * @var array
		 */
		protected $get_booking_sources_response = array(
			'rules' => array(
				'isarray' => true,
			),
			'error' => 'bookings.get_booking_sources_error'
		);	

		/*
		|--------------------------------------------------------------------------
		| Feedback responses
		|--------------------------------------------------------------------------
		|
		| 
	 	|
		*/
		/**
		 * Validation for search_feedback response
		 *
		 * @var array
		 */
		protected $search_feedback_response = array(
			'rules' => array(
			), 
			'error' => 'feedback.search_feedback_error'
		);

		/**
		 * Validation for create_feedback response
		 *
		 * @var array
		 */
		protected $create_feedback_response = array(
			'rules' => array(
				'numeric'=>true,			
			), 
			'error' => 'feedback.create_feedback_error'
		);

		/*
		|--------------------------------------------------------------------------
		| Milestones responses
		|--------------------------------------------------------------------------
		|
		| 
	 	|
		*/
		/**
		 * Validation for contact milestones response
		 *
		 * @var array
		 */
		protected $get_milestones_response = array(
			'rules' => array(
			), 
			'error' => 'milestones.get_milestones_error'
		);

		/**
		 * Validation for contact star rating response
		 *
		 * @var array
		 */
		protected $get_star_rating_response = array(
			'rules' => array(
			), 
			'error' => 'milestones.get_star_rating_error'
		);

		/*
		|--------------------------------------------------------------------------
		| Broadcast responses
		|--------------------------------------------------------------------------
		|
		| 
	 	|
		*/
		/**
		 * Validation for send new eflyer response
		 *
		 * @var array
		 */
		protected $send_new_eflyer_response = array(
			'rules' => array(
				'numeric'=>true,
				'min'=>1
				), 
			'error' => 'broadcast.send_eflyer_error'
		);

		/**
		 * Validation for send forced eflyer response
		 *
		 * @var array
		 */
		protected $send_forced_eflyer_response = array(
			'rules' => array(
				'numeric'=>true,
				'min'=>1
				), 
			'error' => 'broadcast.send_forced_eflyer_error'
		);

		/**
		 * Validation for send new tflyer response
		 *
		 * @var array
		 */
		
		protected $send_new_tflyer_response = array(
			'rules' => array(
				'numeric'=>true,
				'min'=>1
				), 
			'error' => 'broadcast.send_new_tflyer_error'
		);	

		/**
		 * Validation for send new eflyer broadcast response
		 *
		 * @var array
		 */
		protected $send_new_eflyer_broadcast_response = array(
			'rules' => array(
				'numeric'=>true,
				'min'=>1
				), 
			'error' => 'broadcast.send_new_eflyer_broadcast_error'
		);


		/**
		 * Validation for schedule new tflyer broadcast response
		 *
		 * @var array
		 */
		
		protected $schedule_new_tflyer_response = array(
			'rules' => array(
				'numeric'=>true,
				'min'=>1
				), 
			'error' => 'broadcast.schedule_new_tflyer_error'
		);

		/**
		 * Validation for schedule new tflyer count response
		 *
		 * @var array
		 */
		
		protected $schedule_new_tflyer_count_response = array(
			'rules' => array(
				'numeric'=>true,
				'min'=>0
				), 
			'error' => 'broadcast.schedule_new_tflyer_count'
		);

		/**
		 * Validation for schedule new tflyer count response
		 *
		 * @var array
		 */
		
		protected $cancel_scheduled_sms_response = array(
			'rules' => array(
				'equalto'=>100
				),  
			'error' => 'broadcast.cancel_scheduled_sms'
		);

		/**
		 * Validation for create new call list response
		 *
		 * @var array
		 */
		
		protected $create_new_call_list_broadcast_response = array(
			'rules' => array(
				'isobject'=>true
				),  
			'error' => 'broadcast.create_new_call_list_broadcast_error'
		);


		

		

		

	

		/*
		|--------------------------------------------------------------------------
		| Statistics responses
		|--------------------------------------------------------------------------
		|
		| 
	 	|
		*/
		/**
		 * Validation for unit list response
		 *
		 * @var array
		 */
		protected $unit_list_response = array(
			'rules' => array(
				'isarray'=>true,
				'arraycontent'=>true
				), 
			'error' => 'statistics.unit_list'
		);

		/**
		 * Validation for group list response
		 *
		 * @var array
		 */
		protected $group_list_response = array(
			'rules' => array(
				'isarray'=>true,
				'arraycontent'=>true
				), 
			'error' => 'statistics.group_list'
		);


		/*
		|--------------------------------------------------------------------------
		| Admin responses
		|--------------------------------------------------------------------------
		|
		| 
	 	|
		*/
		/**
		 * Validation for get system auth
		 *
		 * @var array
		 */
		protected $get_system_auth_response = array(
			'rules' => array(
				'required'=>'userid'
				), 
			'error' => 'admin.get_error'
		);

		/**
		 * Validation for get system users
		 *
		 * @var array
		 */

		protected $get_system_users_response = array(
			'rules' => array(
				'isarray'=>true,
				'arraycontent'=>true
				), 
			'error' => 'admin.get_users_error'
		);

		/*
		|--------------------------------------------------------------------------
		| WIFI Interaction responses
		|--------------------------------------------------------------------------
		|
		| 
	 	|
		*/
		/**
		 * Validation for create wifi interaction response
		 *
		 * @var array
		 */
		protected $create_wifi_interaction_response = array(
			'rules' => array(
				'numeric'=>true,
				'min'=>1
				), 
			'error' => 'wifi.create_wifi_interaction'
		);

		/**
		 * Validation for create wifi interaction histroy response
		 *
		 * @var array
		 */
		protected $create_wifi_interaction_history_response = array(
			'rules' => array(
				'numeric'=>true,
				'min'=>1
				), 
			'error' => 'wifi.create_wifi_interaction_history'
		);	


		/**
		 * Validation for get wifi interactions response
		 *
		 * @var array
		 */
		protected $get_wifi_interactions_response = array(
			'rules' => array(
				'isarray' => true
				), 
			'error' => 'wifi.get_wifi_interactions_error'
		);	


		/**
		 * Validation for assign wifi interaction unit response
		 *
		 * @var array
		 */
		protected $assign_wifi_interaction_unit_response = array(
			'rules' => array(
				'equalto'=>100
				),  
			'error' => 'wifi.assign_interaction_unit_error'
		);	


		

		/*
		|--------------------------------------------------------------------------
		| UNIQUE CODE responses
		|--------------------------------------------------------------------------
		|
		| 
	 	|
		*/
		/**
		 * Validation for create wifi interaction response
		 *
		 * @var array
		 */
		protected $redeem_unique_code_response = array(
			'rules' => array(
				'equalto'=>100
				), 
			'error' => 'uniquecode.redeem_unique_code_error'
		);
		/**
		 * Validation for create wifi interaction response
		 *
		 * @var array
		 */
		protected $unique_code_get_data_response = array(
			'rules' => array(
				
			),
			'error' => 'uniquecode.unique_code_get_data_error'
		);	

		/**
		 * Validation for contact get unique codes
		 *
		 * @var array
		 */	

		protected $contact_get_unique_codes_response = array(
			'rules' => array(
				'isarray' => true
			),
			'error' => 'uniquecode.contact_get_unique_codes_error'
		);	

		/**
		 * Validation for add uniquecode to contact
		 *
		 * @var array
		 */	

		protected $add_unique_code_contact_response = array(
			'rules' => array(
				'equalto'=>100
			),
			'error' => 'uniquecode.add_unique_code_contact_error'
		);	
		
		/*
		|--------------------------------------------------------------------------
		| Loyalty responses
		|--------------------------------------------------------------------------
		|
		|
	 	|
		*/
		protected $create_loyalty_scheme_interaction_response = array(

			'rules' => array(
				'isnumeric'
			),
			'error' => 'loyalty.create_loyalty_scheme_interaction'
		);

		protected $add_loyalty_source_response = array(

			'rules' => array(
				'isnumeric'
			),
			'error' => 'loyalty.add_loyalty_source_response'
		);

		protected $get_loyalty_sources_response = array(

			'rules' => array(
				'isarray' => true
			),
			'error' => 'loyalty.get_loyalty_sources'
		);

		protected $create_loyalty_scheme_response = array(

			'rules' => array(
				'isnumeric'
			),
			'error' => 'loyalty.get_loyalty_sources'
		);
		protected $assign_loyalty_scheme_sources_response = array(

			'rules' => array(
				'isnumeric'
			),
			'error' => 'loyalty.assign_loyalty_scheme_sources_response'
		);

		protected $is_membership_number_in_use_response = array(

			'rules' => array(
			),
			'error' => 'loyalty.assign_loyalty_scheme_sources_response'
		);

		protected $get_loyalty_scheme_member_balances_response = [

			'rules' => [
				'isarray' => true
			],
			'error' => 'loyalty.get_loyalty_scheme_member_balances_response'

		];

		protected $get_loyalty_schemes_response = [

			'rules' => [
				'isarray' => true
			],
			'error' => 'loyalty.get_loyalty_schemes_response'
		];

		/*
		|--------------------------------------------------------------------------
		| UnitUnsubscribe responses
		|--------------------------------------------------------------------------
		|
		|
	 	|
		*/

		/**
		 * Validation for create contact response
		 *
		 * @var array
		 */
		protected $get_unit_subscriptions_response = array(
			'rules' => array(
				'isarray'=>true,
				'arraycontent'=>true
			),
			'error' => 'unitunsubscribe.not_units_returned'
		);


		protected $get_unit_lastt_interaction_response = array(
			'rules' => array(
				'isarray'=>true,
				'arraycontent'=>true
			),
			'error' => 'unitunsubscribe.not_units_returned'
		);


		/*
		|--------------------------------------------------------------------------
		| UnitManager responses
		|--------------------------------------------------------------------------
		|
		|
	 	|
		*/

		/**
		 * Validation for create contact response
		 *
		 * @var array
		 */
		protected $get_unit_bespoke_map_response = array(
			'rules' => array(
				'isobject' => true
			),
			'error' => 'unitmanager.get_unit_bespoke_map_error'
		);


		protected $get_unit_response = array(
			'rules' => array(
				'isobject' => true
			),
			'error' => 'unitmanager.get_unit_error'
		);


		
		/*
		|--------------------------------------------------------------------------
		| Employment responses
		|--------------------------------------------------------------------------
		|
		|
	 	|
		*/

		protected $add_sector_response = array(
			'rules' => array(
				'numeric'=>true,
				'min'=>1
			),
			'error' => 'default.default'
		);

		protected $add_company_response = array(
			'rules' => array(
				'numeric'=>true,
				'min'=>1
			),
			'error' => 'default.default'
		);

		protected $add_job_title_response = array(
			'rules' => array(
				'numeric'=>true,
				'min'=>1
			),
			'error' => 'default.default'
		);
		protected $search_sectors_like_name_response = array(
			'rules' => array(
			),
			'error' => 'default.default'
		);
		protected $search_companies_like_name_response = array(
			'rules' => array(
			),
			'error' => 'default.default'
		);

		protected $search_job_title_like_name_response = array(
			'rules' => array(
			),
			'error' => 'default.default'
		);

		protected $create_employment_history_response = array(
			'rules' => array(
				'numeric'=>true,
				'min'=>1
			),
			'error' => 'default.default'
		);
		protected $update_employment_history_response = array(
			'rules' => array(
				'numeric'=>true,
				'min'=>1
			),
			'error' => 'default.default'
		);
		protected $get_contact_employment_history_response = array(
			'rules' => array(
				'isarray'=>true,
			),
			'error' => 'default.default'
		);


		/*
		|--------------------------------------------------------------------------
		| Search responses
		|--------------------------------------------------------------------------
		|
		|
	 	|
		*/

		protected $search_contact_udf_response = array(
			'rules' => array(
				'isarray'=>true,
			),
			'error' => 'search.search_contact_udf_response'
		);


		protected $search_contact_udf_empty_response = array(
			'rules' => array(
				'isarray'=>true,
			),
			'error' => 'search.search_contact_udf_response'
		);


		protected $search_contact_mobile_response = array(

			'rules' => array(
				'isobject' => true,
			),
			'error' => 'search.search_contact_mobile_response'

		);





		/*
		|--------------------------------------------------------------------------
		| Contact field validation
		|--------------------------------------------------------------------------
		|
		| 
	 	|
		*/
		/**
		 * Possible fields fore create contact
		 *
		 * @var array
		 */
		protected $create_contact_fields = array(
			'uid',
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
			'homenumber',
			'email',
			'dob',
			'sourceid',
			'allowsms',
			'allowcall',
			'allowemail',
			'allowsnailmail',
		);

		/**
		 * Possible fields fore create contact
		 *
		 * @var array
		 */
		protected $contact_validation_fields = array(
			'uid',
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
			'homenumber',
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
			'uid',
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
			'homenumber',
			'email',
			'dob',
			'sourceid',
			'allowsms',
			'allowcall',
			'allowemail',
			'allowsnailmail',
		);

		protected $get_contact_fields = array(
			'contactid',
		);

		protected $get_contact_email_fields = array(
			'email',
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

			$this->response = $response;
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
			        case "isobject":
				        if(!$this->validateIsObject($rule))
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

			if(!($this->response >= $rule)){
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
		 * VALIDATE IS OBJECT
		 * validate the response is an object
		 *
		 * @return BOOL
		 */
		protected function validateIsObject($rule){
			
			if(!is_object($this->response) ){
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

		/*
		|--------------------------------------------------------------------------
		| EPOS responses
		|--------------------------------------------------------------------------
		|
		| 
	 	|
		*/
		/**
		 * Validation for create purchase history response
		 *
		 * @var array
		 */
		protected $create_purchase_history_response = array(
			'rules' => array(
				'numeric'=>true,
				'min'=>1
			), 
			'error' => 'epos.create_purchase_history_error'
		);

		/**
		 * Validation for update purchase history response
		 *
		 * @var array
		 */
		protected $update_purchase_history_response = array(
			'rules' => array(
				'numeric'=>true,
				'min'=>1
			), 
			'error' => 'epos.update_purchase_history_error'
		);

		/**
		 * Validation for delete purchase history response
		 *
		 * @var array
		 */
		protected $delete_purchase_history_response = array(
			'rules' => array(
				'numeric'=>true,
				'min'=>1
			), 
			'error' => 'epos.delete_purchase_history_error'
		);

		/**
		 * Validation for get purchase history response
		 *
		 * @var array
		 */
		protected $get_purchase_history_purchase_response = array(
			'rules' => array(
				'isarray'=>true
			), 
			'error' => 'epos.get_purchase_history_purchase_error'
		);

		/**
		 * Validation for get purchase history contact response
		 *
		 * @var array
		 */
		protected $get_purchase_history_contact_response = array(
			'rules' => array(
				'isarray'=>true
			), 
			'error' => 'epos.get_purchase_history_contact_error'
		);

		/**
		 * Validation for get purchase history unit response
		 *
		 * @var array
		 */
		protected $get_purchase_history_unit_response = array(
			'rules' => array(
				'isarray'=>true
			), 
			'error' => 'epos.get_purchase_history_unit_error'
		);

		/**
		 * Validation for get purchase history unit response
		 *
		 * @var array
		 */
		protected $get_purchase_history_reference_response = array(
			'rules' => array(
				'isarray'=>true
			), 
			'error' => 'epos.get_purchase_history_reference_error'
		);


		/**
		 * Validation for get contact consent
		 *
		 * @var array
		 */
		protected $get_contact_consent_response = array(
	        'rules' => array(
	            'isarray' => true,
	        ),
	        'error' => 'contact.get_contact_consent'
    	);

	}
}
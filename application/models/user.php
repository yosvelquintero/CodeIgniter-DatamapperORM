<?php

/**
 * User DataMapper Model
 *
 * Use this basic model as a user for creating new models.
 * It is not recommended that you include this file with your application,
 * especially if you use a User library (as the classes may collide).
 *
 * To use:
 * 1) Copy this file to the lowercase name of your new model.
 * 2) Find-and-replace (case-sensitive) 'User' with 'Your_model'
 * 3) Find-and-replace (case-sensitive) 'user' with 'your_model'
 * 4) Find-and-replace (case-sensitive) 'users' with 'your_models'
 * 5) Edit the file as desired.
 *
 * @license		MIT License
 * @category	Models
 * @author		Phil DeJarnett
 * @link		http://www.overzealous.com
 */
class User extends DataMapper {

	// Uncomment and edit these two if the class has a model name that
	//   doesn't convert properly using the inflector_helper.
	public $model = 'user';
	public $table = 'users';

	// You can override the database connections with this option
	// public $db_params = 'db_config_name';

	// --------------------------------------------------------------------
	// Relationships
	//   Configure your relationships below
	// --------------------------------------------------------------------

	// Insert related models that User can have just one of.
	public $has_one = array('group');

	// Insert related models that User can have more than one of.
	public $has_many = array();

	/* Relationship Examples
	 * For normal relationships, simply add the model name to the array:
	 *   $has_one = array('user'); // User has one User
	 *
	 * For complex relationships, such as having a Creator and Editor for
	 * User, use this form:
	 *   $has_one = array(
	 *   	'creator' => array(
	 *   		'class' => 'user',
	 *   		'other_field' => 'created_template'
	 *   	)
	 *   );
	 *
	 * Don't forget to add 'created_template' to User, with class set to
	 * 'user', and the other_field set to 'creator'!
	 *
	 */

	// --------------------------------------------------------------------
	// Validation
	//   Add validation requirements, such as 'required', for your fields.
	// --------------------------------------------------------------------

	public $validation = array(
		'name' => array(
			// example is required, and cannot be more than 120 characters long.
			'rules' => array('required', 'trim', 'max_length' => 150),
			'label' => 'Name'
		),
		'username' => array(
			// example is required, and cannot be more than 120 characters long.
			'rules' => array('required', 'trim', 'max_length' => 20, 'unique'),
			'label' => 'Username'
		),
		'email' => array(
			// example is required, and cannot be more than 120 characters long.
			'rules' => array('required', 'trim', 'valid_email', 'unique'),
			'label' => 'Email'
		),
		'password' => array(
			'rules' => array('required', 'min_length' => 3, 'max_length' => 40, 'encrypt'),
			'label' => 'Password'
		),
		'confirm_password' => array(
			'rules' => array('required', 'encrypt', 'matches' => 'password', 'min_length' => 3, 'max_length' => 40),
			'label' => 'Confirm password'
		),
		'group' => array(
			'rules' => array('required'),
			'label' => 'Group'
		)
	);

	// --------------------------------------------------------------------
	// Default Ordering
	//   Uncomment this to always sort by 'name', then by
	//   id descending (unless overridden)
	// --------------------------------------------------------------------

	// public $default_order_by = array('name', 'id' => 'desc');

	// --------------------------------------------------------------------

	/**
	 * Constructor: calls parent constructor
	 */
    function __construct($id = NULL)
	{
		parent::__construct($id);
    }

	// --------------------------------------------------------------------
	// Post Model Initialisation
	//   Add your own custom initialisation code to the Model
	// The parameter indicates if the current config was loaded from cache or not
	// --------------------------------------------------------------------
	function post_model_init($from_cache = FALSE)
	{
	}

	// --------------------------------------------------------------------
	// Custom Methods
	//   Add your own custom methods here to enhance the model.
	// --------------------------------------------------------------------

	/* Example Custom Method
	function get_open_templates()
	{
		return $this->where('status <>', 'closed')->get();
	}
	*/

	// --------------------------------------------------------------------
	
	/**
	 * Login
	 *
	 * Authenticates a user for logging in.
	 *
	 * @access	public
	 * @return	bool
	 */
	function login()
	{
		// backup username for invalid logins
		$uname = $this->username;
		
		// Create a temporary user object
		$u = new User();

		// Get this users stored record via their username
		$u->where('username', $uname)->get();

		// Give this user their stored salt
		$this->salt = $u->salt;

		// Validate and get this user by their property values,
		// this will see the 'encrypt' validation run, encrypting the password with the salt
		$this->validate()->get();

		// If the username and encrypted password matched a record in the database,
		// this user object would be fully populated, complete with their ID.

		// If there was no matching record, this user would be completely cleared so their id would be empty.
		if ($this->exists())
		{
			// Login succeeded
			return TRUE;
		}
		else
		{
			// Login failed, so set a custom error message
			$this->error_message('login', $this->localize_label('error_login'));

			// restore username for login field
			$this->username = $uname;

			return FALSE;
		}
	}

	// --------------------------------------------------------------------
	// Custom Validation Rules
	//   Add custom validation rules for this model here.
	// --------------------------------------------------------------------
	
	/**
	 * Encrypt (prep)
	 *
	 * Encrypts this objects password with a random salt.
	 *
	 * @access	private
	 * @param	string
	 * @return	void
	 */
	function _encrypt($field)
	{
		if (!empty($this->{$field}))
		{
			if (empty($this->salt))
			{
				$this->salt = md5(uniqid(rand(), true));
			}

			$this->{$field} = sha1($this->salt . $this->{$field});
		}
	}
}

/* End of file user.php */
/* Location: ./application/models/user.php */

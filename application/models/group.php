<?php

/**
 * Group DataMapper Model
 *
 * Use this basic model as a group for creating new models.
 * It is not recommended that you include this file with your application,
 * especially if you use a Group library (as the classes may collide).
 *
 * To use:
 * 1) Copy this file to the lowercase name of your new model.
 * 2) Find-and-replace (case-sensitive) 'Group' with 'Your_model'
 * 3) Find-and-replace (case-sensitive) 'group' with 'your_model'
 * 4) Find-and-replace (case-sensitive) 'groups' with 'your_models'
 * 5) Edit the file as desired.
 *
 * @license		MIT License
 * @category	Models
 * @author		Phil DeJarnett
 * @link		http://www.overzealous.com
 */
class Group extends DataMapper {

	// Uncomment and edit these two if the class has a model name that
	//   doesn't convert properly using the inflector_helper.
	public $model = 'group';
	public $table = 'groups';

	// You can override the database connections with this option
	// public $db_params = 'db_config_name';

	// --------------------------------------------------------------------
	// Relationships
	//   Configure your relationships below
	// --------------------------------------------------------------------

	// Insert related models that Group can have just one of.
	public $has_one = array();

	// Insert related models that Group can have more than one of.
	public $has_many = array('user');

	/* Relationship Examples
	 * For normal relationships, simply add the model name to the array:
	 *   $has_one = array('user'); // Group has one User
	 *
	 * For complex relationships, such as having a Creator and Editor for
	 * Group, use this form:
	 *   $has_one = array(
	 *   	'creator' => array(
	 *   		'class' => 'user',
	 *   		'other_field' => 'created_template'
	 *   	)
	 *   );
	 *
	 * Don't forget to add 'created_template' to User, with class set to
	 * 'group', and the other_field set to 'creator'!
	 *
	 */

	// --------------------------------------------------------------------
	// Validation
	//   Add validation requirements, such as 'required', for your fields.
	// --------------------------------------------------------------------

	public $validation = array(
		'name' => array(
			'rules' => array('required', 'trim', 'unique', 'min_length' => 3, 'max_length' => 20),
            'label' => 'Nombre'
		)
	);

	// --------------------------------------------------------------------
	// Default Ordering
	//   Uncomment this to always sort by 'name', then by
	//   id descending (unless overridden)
	// --------------------------------------------------------------------

	public $default_order_by = array('id' => 'desc');

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

	/**
     * Get options list
     *
     * @return array
     */
    public function get_options_list()
    {
        $this->select('id, name')->get();

        if ($this->result_count() > 0)
        {
            $ids = array();
            $names = array();

            foreach ($this as $rows)
            {
                $ids[] = $rows->id;
                $names[] = $rows->name;
            }

            return array_combine($ids, $names);
        }
    }

	// --------------------------------------------------------------------
	// Custom Validation Rules
	//   Add custom validation rules for this model here.
	// --------------------------------------------------------------------

	/* Example Rule
	function _convert_written_numbers($field, $parameter)
	{
	 	$nums = array('one' => 1, 'two' => 2, 'three' => 3);
	 	if(in_array($this->{$field}, $nums))
		{
			$this->{$field} = $nums[$this->{$field}];
	 	}
	}
	*/
}

/* End of file group.php */
/* Location: ./application/models/group.php */
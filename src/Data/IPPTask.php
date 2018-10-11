<?php
namespace QuickBooksOnline\API\Data;

/**
 * @xmlNamespace http://schema.intuit.com/finance/v3
 * @xmlType IntuitEntity
 * @xmlName IPPTask
 * @var IPPTask
 * @xmlDefinition 
				Product: QBW
				Description: A specific task to be
				completed, maps to a ToDo record in QuickBooks.
			
 */
class IPPTask
	extends IPPIntuitEntity	{

		/**                                                                       
		* Initializes this object, optionally with pre-defined property values    
		*                                                                         
		* Initializes this object and it's property members, using the dictionary
		* of key/value pairs passed as an optional argument.                      
		*                                                                         
		* @param array $keyValInitializers key/value pairs to be populated into object's properties 
		* @param boolean $verbose specifies whether object should echo warnings   
		*/                                                                        
		public function __construct($keyValInitializers=array(), $verbose=FALSE)
		{
			parent::__construct($keyValInitializers, $verbose);
			
			foreach($keyValInitializers as $initPropName => $initPropVal)
			{
				if (property_exists('IPPTask',$initPropName) || property_exists('QuickBooksOnline\API\Data\IPPTask',$initPropName))
				{
					$this->{$initPropName} = $initPropVal;
				}
				else
				{
					if ($verbose)
						echo "Property does not exist ($initPropName) in class (".get_class($this).")";
				}
			}
		}

	
	/**
	 * @Definition 
								Product: QBW
								Description: The actual content of
								the task reminder
							
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlName Notes
	 * @var string
	 */
	public $Notes;
	/**
	 * @Definition 
								Product: QBO
								Description: In use by the business
							
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlName From
	 * @var string
	 */
	public $From;
	/**
	 * @Definition 
								Product: QBW
								Description: In use by the business
							
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlName Active
	 * @var boolean
	 */
	public $Active;
	/**
	 * @Definition 
								Product: QBW
								Description: True if the task has
								been completed
							
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlName Done
	 * @var boolean
	 */
	public $Done;
	/**
	 * @Definition 
								Product: QBW
								Description: The date to remind the
								user of this task
							
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlName ReminderDate
	 * @var string
	 */
	public $ReminderDate;
	/**
	 * @Definition Internal use only: extension place holder for
								Task  
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlName TaskEx
	 * @var IPPIntuitAnyType
	 */
	public $TaskEx;


} // end class IPPTask

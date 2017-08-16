<!--?php class Ckeditor extends Controller { // extends CI_Controller for CI 2.x users public $data = array(); public function __construct() { parent::Controller(); // parent::__construct(); for CI 2.x users $this-&gt;load-&gt;helper('url'); //You should autoload this one ;)
		$this-&gt;load-&gt;helper('ckeditor');
 
		
		//Ckeditor's configuration
		$this-&gt;data['ckeditor'] = array(
		
			//ID of the textarea that will be replaced
			'id' 	=&gt; 	'content',
			'path'	=&gt;	'js/ckeditor',
		
			//Optionnal values
			'config' =&gt; array(
				'toolbar' 	=&gt; 	"Full", 	//Using the Full toolbar
				'width' 	=&gt; 	"550px",	//Setting a custom width
				'height' 	=&gt; 	'100px',	//Setting a custom height
					
			),
		
			//Replacing styles from the "Styles tool"
			'styles' =&gt; array(
			
				//Creating a new style named "style 1"
				'style 1' =&gt; array (
					'name' 		=&gt; 	'Blue Title',
					'element' 	=&gt; 	'h2',
					'styles' =&gt; array(
						'color' 	=&gt; 	'Blue',
						'font-weight' 	=&gt; 	'bold'
					)
				),
				
				//Creating a new style named "style 2"
				'style 2' =&gt; array (
					'name' 	=&gt; 	'Red Title',
					'element' 	=&gt; 	'h2',
					'styles' =&gt; array(
						'color' 		=&gt; 	'Red',
						'font-weight' 		=&gt; 	'bold',
						'text-decoration'	=&gt; 	'underline'
					)
				)				
			)
		);
		
		$this-&gt;data['ckeditor_2'] = array(
		
			//ID of the textarea that will be replaced
			'id' 	=&gt; 	'content_2',
			'path'	=&gt;	'js/ckeditor',
		
			//Optionnal values
			'config' =&gt; array(
				'width' 	=&gt; 	"550px",	//Setting a custom width
				'height' 	=&gt; 	'100px',	//Setting a custom height
				'toolbar' 	=&gt; 	array(	//Setting a custom toolbar
					array('Bold', 'Italic'),
					array('Underline', 'Strike', 'FontSize'),
					array('Smiley'),
					'/'
				)
			),
		
			//Replacing styles from the "Styles tool"
			'styles' =&gt; array(
			
				//Creating a new style named "style 1"
				'style 3' =&gt; array (
					'name' 		=&gt; 	'Green Title',
					'element' 	=&gt; 	'h3',
					'styles' =&gt; array(
						'color' 	=&gt; 	'Green',
						'font-weight' 	=&gt; 	'bold'
					)
				)
								
			)
		);		
		
		
	}
	
	public function index() {
		
		$this-&gt;load-&gt;view('ckeditor', $this-&gt;data);
		
	}
}
&lt;/pre&gt;
&lt;h2&gt;Creating the view&lt;/h2&gt;
&lt;p&gt;The &lt;em&gt;ckeditor.php&lt;/em&gt; view only has to display two textarea elements with matched ids and call the display_ckeditor() helper's function.&lt;/p&gt;
&lt;pre lang="PHP" colla="+"&gt;
&lt;textarea name="content" id="content" &gt;&lt;/p&gt;
&lt;p&gt;Example data&lt;/p&gt;
&lt;p&gt;&lt;/textarea&gt;
&lt;?php echo display_ckeditor($ckeditor); ?-->
<textarea id="content_2" name="content_2">&lt;/p&gt;
&lt;p&gt;Example data&lt;/p&gt;
&lt;p&gt;</textarea> <!--?php echo display_ckeditor($ckeditor_2); ?-->
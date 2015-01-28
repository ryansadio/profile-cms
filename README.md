# profile-cms
A profile content manager built on the CodeIgniter framework

# How to use the Smarty Library in CodeIgniter
Smarty is relatively easy and has been smoothly integrated into CodeIgniter. All of the functions available on the
Smarty documentation are available and executable from CodeIgniter. The only difference is how you reference smarty

With its integration into CodeIgniter, you no longer need to create a smarty object, it is now autoloaded into the system

Simply add items belonging to your smarty template as so:
````
$this->smarty->assign("template-value-name","value to pass");
````
Then to call your view go:
````
$this->smarty->display("nameoftemplate.tpl");
````
In application/libraries/Smarty.php you can also view the custom "view" function. This has been defined as a convenience
function to act as the parser->parse() function but with the smarty engine. To use it, use it the same as the CodeIgniter
parser:
````
$this->smarty->view("templatefile","dataarray","TRUE/FALSE")
````
whether this can take .php or .tpl files as a template file I do not know. The purpose is so that if sections of your
code still use the $this->data['something'] to store data meant to go to the view, it can still be forwarded to your
view. This also allows you to pass arrays of definitions instead of assigning each one. Though smarty docs may provide
options on how to pass arrays aswell.

Remember, ALL smarty doc'd methods are supposed to work. These other class are
just wrappers to redirect CodeIgniter to Smarty's core files appropriatly which are located in system/libs/smarty

The tutorial to install this add-on and whatever documentation by them is avilable here:
<a href="http://www.coolphptools.com/codeigniter-smarty">http://www.coolphptools.com/codeigniter-smarty</a>

##Directories Reference:
Smarty.php (configuration file) - application/libraries/Smarty.php <br>
Smarty core - system/libs/smarty <br>
Smarty templates - application/views/templates <br>
Smarty compiled templates (do not touch) - application/views/templates_c <br>
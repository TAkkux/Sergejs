
<?php

require 'vendor/autoload.php';

$app = new \atk4\ui\App('Test App');
$app->initLayout('Centered');
$welcome = $app->layout->add(['Header', 'Welcome!', 'size'=>1]);	
$enterinfo = $app->layout->add(new \atk4\ui\Header(['Enter some information', 'size'=>1]));

$a=[];
$segm = new \atk4\data\Model(new \atk4\data\Persistence_Array($a));
$segm->addField('name');
$segm->addField('age');

$mform = $app->layout->add(new \atk4\ui\Form(['segment'=>true]));
$mform->setModel($segm);

$mform->onSubmit(function ($mform) {
	$hisname = $mform->model['name'];
	$hisage = $mform->model['age'];
	if (!$mform->model['name']) {
		return $mform->error('name', 'ENTER YOUR NAME PLEASE!');
	}
	if (!$mform->model['age']) {
		return $mform->error('age', 'ENTER YOUR AGE PLEASE');
	}
	if ($hisage < 21) {
		return $mform->error('age', 'Your age must be higher than 18');
	}	
	return $mform->success('Hello my dear friend, '.$hisname.',thank you for registration!');
});
	
	$db = new
	\atk4\data\Persistance_SQL('mesql:dbname=atkui;host=localhost','Сергей');
	
	class Client extends \atk4\data\Model{
		public $table = 'client';
		
		function init(){
			parent::init();
		
		
		$this->addField('name');
		$this->addField('adress');
	}
	
	
?>

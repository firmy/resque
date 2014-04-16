<?php
class PHP_Job
{
	public function perform()
	{
        fwrite(STDOUT, 'Start job! -> ');
		sleep(1);
		fwrite($this->args['name']);
		echo $this->args['name'];
		fwrite(STDOUT, 'Job ended!' . PHP_EOL);
	}
}

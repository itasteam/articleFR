<?	$ini = new INI();		if ($_REQUEST['submit'] == 'submit') {		$_data = array('apikey' => $_REQUEST['apikey']);		$ini->write(dirname(__FILE__) . '/setting.ini', $_data, false);		print '			<div class="alert alert-success alert-dismissable">				<i class="fa fa-check"></i>				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>				<b>Alert!</b> Success: Settings successfully saved.			</div>			';	}		$ini->read(dirname(__FILE__) . '/setting.ini');		print '		<form method="post">			<div class="form-group">			<label>API Key</label>			<input type="text" name="apikey" value="' . $ini->data['apikey'] . '" class="form-control">			</div>						<div class="box-footer">				<div class="btn-group">					<button type="submit" name="submit" value="submit" class="btn btn-info"><b class="fa fa-gears"></b> Set Setting</button>				</div>														</div>					</form>	';?>
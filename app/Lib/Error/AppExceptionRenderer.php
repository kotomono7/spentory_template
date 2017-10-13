<?php

App::uses('ExceptionRenderer', 'Error');
 
class AppExceptionRenderer extends ExceptionRenderer {
    public function missingController($error) {
    	$this->controller->beforeFilter();
		$this->controller->header('HTTP/1.1 404 Not Found');
		$this->controller->set('title_for_layout', 'Error 404');
		$this->controller->render('/Errors/error404', 'custom');
		$this->controller->response->send();
    }
 
    public function missingAction($error) {
		$this->missingController($error);
    }

    /*-------------------------------------------------------------------------*/
	/* -- Exceptions
	/*-------------------------------------------------------------------------*/
 
	/*public function notFound($error) {
		$this->controller->beforeFilter();
		$this->controller->set('title_for_layout', 'Not Found');
		$this->controller->render('/Errors/error404');
		$this->controller->response->send();
	}
	public function badRequest($error) {
		$this->controller->beforeFilter();
		$this->controller->set('title_for_layout', 'Not Found');
		$this->controller->render('/Errors/error400');
		$this->controller->response->send();
	}
	public function forbidden($error) {
		$this->controller->beforeFilter();
		$this->controller->set('title_for_layout', 'Not Found');
		$this->controller->render('/Errors/error403');
		$this->controller->response->send();
	}
	public function methodNotAllowed($error) {
		$this->controller->beforeFilter();
		$this->controller->set('title_for_layout', 'Not Found');
		$this->controller->render('/Errors/error405');
		$this->controller->response->send();
	}
	public function internalError($error) {
		$this->controller->beforeFilter();
		$this->controller->set('title_for_layout', 'Not Found');
		$this->controller->render('/Errors/error500');
		$this->controller->response->send();
	}
	public function notImplemented($error) {
		$this->controller->beforeFilter();
		$this->controller->set('title_for_layout', 'Not Found');
		$this->controller->render('/Errors/error501');
		$this->controller->response->send();
	}*/
 
	/*-------------------------------------------------------------------------*/
	/* -- Other
	/*-------------------------------------------------------------------------*/
 
	/*public function missingController($error) {
		$this->notFound($error);
	}
	public function missingAction($error) {
		$this->notFound($error);
	}
	public function missingView($error) {
		$this->notFound($error);
	}
	public function missingLayout($error) {
		$this->internalError($error);
	}
	public function missingHelper($error) {
		$this->internalError($error);
	}
	public function missingBehavior($error) {
		$this->internalError($error);
	}
	public function missingComponent($error) {
		$this->internalError($error);
	}
	public function missingTask($error) {
		$this->internalError($error);
	}
	public function missingShell($error) {
		$this->internalError($error);
	}
	public function missingShellMethod($error) {
		$this->internalError($error);
	}
	public function missingDatabase($error) {
		$this->internalError($error);
	}
	public function missingConnection($error) {
		$this->internalError($error);
	}
	public function missingTable($error) {
		$this->internalError($error);
	}
	public function privateAction($error) {
		$this->internalError($error);
	}*/
 
	/*-------------------------------------------------------------------------*/
	/*-------------------------------------------------------------------------*/
}

?>
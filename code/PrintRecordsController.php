<?php

class PrintRecordsController extends Controller{
	
	function __construct($set,$recordclass){
		$this->set = $set;
		$this->recordClass = $recordclass;
		parent::__construct();
	}
	
	function index(){
		Requirements::clear();
		Requirements::javascript(THIRDPARTY_DIR."/jquery/jquery.js");
		Requirements::javascript(PRINTABLERECORDS_DIR.'/javascript/jquery.tablesorter.min.js');
		Requirements::javascript(PRINTABLERECORDS_DIR.'/javascript/printable.js');
		
		$headings = new DataObjectSet();
		foreach(singleton($this->recordClass)->summaryFields() as $field => $label){
			$headings->push(new ArrayData(array('Heading' => $label)));
		}
		
		return array(
			'Headings' => $headings,
			'Records' => $this->set
		);
	}
	
}
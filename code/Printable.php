<?php
class Printable extends DataObjectDecorator{
	
	function PrintableFields(){
		$output = new DataObjectSet();
		foreach($this->owner->summaryFields() as $field => $value){
			if(strpos($field, '.') !== false){
				$value = $this->relationValue($field);
			}else{
				$value = $this->owner->$field;
			}
			$output->push(new ArrayData(array('Label' => $field,'Value' => $value)));
		}
		return $output;
	}
	
	/**
	 * Copy of DataObject relObject for getting related value
	 */
	private function relationValue($fieldPath){
		$parts = explode('.', $fieldPath);
		$fieldName = array_pop($parts);
		$component = $this->owner;
		foreach($parts as $relation) {
			if ($rel = $component->has_one($relation)) {
				$component = $component->$relation();
				if(!$component){
					return false;
				}
			}
		}
		$object = $component->dbObject($fieldName);
		return $object;
	}
	
}
# Printable Records Module

A module to make printing records easier. Provides a controller that you can pass a
dataobject set to, and render a printable list.

## Features

 * View or print
 * Print table css styling.
 * Sort by column - http://tablesorter.com/
 * Handles dot syntax
 * Makes use of DataObject summary fields

## Usage

In an action on your controller:

	:::php
	$record = "Member";
	$cont = new PrintRecordsController(DataObject::get($record), $record);
	$request->shiftAllParams();
	$request->shift();
	return $cont->handleRequest($request);

## TODO

 * Reorder columns http://www.danvk.org/wp/dragtable/
 * Choose columns
 * Resize font
 * Paper preview size
 * Improve variable type detection for sorting. eg dates don't always sort properly
 * Include sub-lists
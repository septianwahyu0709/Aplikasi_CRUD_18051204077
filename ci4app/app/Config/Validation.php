<?php

namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	public $category = [
		'category_name'         => 'required',
		'category_status'       => 'required'
	];

	public $category_errors = [
		'category_name' => [
			'required'  => 'Nama wajib diisi.'
		],
		'category_status' => [
			'required'  => 'Status wajib diisi.'
		]
	];
	public $mahasiswa = [
		'nim'         => 'required',
		'nama'       => 'required',
		'angkatan'       => 'required'
	];

	public $mahasiswa_errors = [
		'nim' => [
			'required'  => 'Nim wajib diisi.'
		],
		'nama' => [
			'required'  => 'Nama wajib diisi.'
		],
		'angkatan' => [
			'required'  => 'Angkatan wajib diisi.'
		]
	];
}

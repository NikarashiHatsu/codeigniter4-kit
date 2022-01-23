<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
    public $register = [
        'name' => 'required|min_length[6]|max_length[255]',
        'username' => 'required|min_length[6]|max_length[255]',
        'password' => 'required|min_length[6]|max_length[255]',
        'password_confirmation' => 'required|min_length[6]|max_length[255]|matches[password]',
    ];

    public $login = [
        'username' => 'required|min_length[6]|max_length[255]',
        'password' => 'required|min_length[6]|max_length[255]',
    ];
}

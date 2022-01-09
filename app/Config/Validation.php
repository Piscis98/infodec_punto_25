<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;
use App\Models\CustomRules\CalificacionCustomRules;

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
        CalificacionCustomRules::class,
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

    public $calificacion = [
        'nombre_estudiante'   => 'required|alpha_space',
        'parcial_uno' => 'required|numeric|number_betwen_1_and_5',
        'parcial_dos' => 'required|numeric|number_betwen_1_and_5',
        'parcial_tres' => 'required|numeric|number_betwen_1_and_5',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
}

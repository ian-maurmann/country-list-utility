<?php

/**
 * Country List Display object
 * ---------------------------
 *
 * @noinspection PhpPropertyNamingConventionInspection      - Long property names are ok.
 * @noinspection PhpMethodNamingConventionInspection        - Long method names are ok.
 * @noinspection PhpVariableNamingConventionInspection      - Short variable names are ok.
 * @noinspection PhpUnnecessaryLocalVariableInspection      - Ignore for readability.
 * @noinspection PhpArrayShapeAttributeCanBeAddedInspection - Ignore shape for now, add later.
 * @noinspection PhpIllegalPsrClassPathInspection           - Ignore, using PSR 4 not 0.
 * @noinspection PhpUnusedLocalVariableInspection           - Readability.
 */


declare(strict_types=1);

namespace IKM\CountryListUtility;

use Exception;
use IKM\CLI\CommandLineFormatter;
use IKM\CLI\CommandLineTableBuilder;
use IKM\CLI\CommandLineWriter;

/**
 * Class CountryListDisplay
 */
class CountryListDisplay
{
    private ArrayUtility            $array_utility;
    private CountryList             $country_list;
    private CommandLineFormatter    $formatter;
    private CommandLineTableBuilder $table_builder;
    private CommandLineWriter       $writer;

    public function __construct()
    {
        // Set object dependencies
        $this->array_utility = new ArrayUtility();
        $this->country_list  = new CountryList();

        // Get CLI tools
        $this->writer        = new CommandLineWriter();
        $this->formatter     = new CommandLineFormatter();
        $this->table_builder = new CommandLineTableBuilder();
    }

    public function showAlpha2()
    {
        $countries = $this->country_list->getAllCountries();

        // Sort
        //array_multisort(array_column($countries, 'alpha-2'), SORT_DESC, SORT_NATURAL|SORT_FLAG_CASE, $countries);

        $this->writer->writeLine('Alpha 2:');

        $table_style = [
            'table_text_align' => 'left', // 'left' | 'right' | 'center'
            'table_border_fg_color' => 'bright-yellow',
            'table_show_head' => true,
            'table_head_text_align' => 'center',
            'table_head_bg_color' => 'dark-blue',
            'table_head_weight' => 'bold',
        ];

        $table_columns = [
            [
                'attribute' => 'alpha-2',
                'label'     => 'Alpha 2',
                'text_align' => 'center',
            ],
            [
                'attribute' => 'common_name',
                'label'     => 'Common Name',
                'text_align' => 'left',
            ],
            [
                'attribute' => 'normalized',
                'label'     => 'Normalized',
                'text_align' => 'left',
            ],
        ];

        $this->table_builder->buildTable($countries, $table_style, $table_columns);
    }
}
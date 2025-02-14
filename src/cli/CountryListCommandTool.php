<?php

/**
 * Country-List command tool
 * --------------------------
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
use IKM\CLI\CommandLineWriter;

/**
 * Class CountryListCommandTool
 */
class CountryListCommandTool
{
    private ArrayUtility         $array_utility;
    private CommandLineFormatter $formatter;
    private string               $version_number;
    private CommandLineWriter    $writer;
    private CountryListDisplay   $country_list_display;

    public function __construct()
    {
        // Set object dependencies
        $this->array_utility = new ArrayUtility();
        $this->country_list_display = new CountryListDisplay();

        // Get CLI tools
        $this->writer    = new CommandLineWriter();
        $this->formatter = new CommandLineFormatter();

        // Set Info
        $this->version_number = '0.1.0 IR';
    }

    /**
     * @noinspection PhpConcatenationWithEmptyStringCanBeInlinedInspection - Ignore.
     */
    public function run()
    {
        global $argv; // PHP predefined var
        $file = $argv[0] ?? '';
        $positional_parameter_1 = $argv[1] ?? '';
        $positional_parameter_2 = $argv[2] ?? '';
        $positional_parameter_3 = $argv[3] ?? '';

        $has_positional_parameters = $positional_parameter_1 !== '';

        // Short Options
        // ==============================================================
        // $short_options  = "";
        // $short_options .= "f:";  // Required value
        // $short_options .= "v::"; // Optional value
        // $short_options .= "abc"; // These options do not accept values
        // ==============================================================

        // Short Options
        $short_options  = '';
        $short_options .= 'v::';
        $short_options .= 'V::';

        // Long Options
        // ==============================================================
        // $long_options  = array(
        //     "required:",     // Required value
        //     "optional::",    // Optional value
        //     "option",        // No value
        //     "opt",           // No value
        // );
        // ==============================================================

        // Long Options
        $long_options = [
            'version::',
            'Version::',
        ];

        // Get Options
        $options = getopt($short_options, $long_options);
        $option_keys = array_keys($options);
        $has_options = (bool) count($options);

        // Foo
        // ───
        $has_list_flag = $positional_parameter_1 === 'foo';
        if($has_list_flag){
            $this->displayFoo();
            return;
        }

        // Show
        // ────
        $has_show_flag = $positional_parameter_1 === 'show';
        if($has_show_flag){

            $has_show_alpha2_flag = $positional_parameter_2 === 'alpha2';

            if($has_show_alpha2_flag){
                $this->displayShowAlpha2();
                return;
            }
            else{
                $this->displayShow();
                return;
            }
        }

        // Version
        // ───────
        $has_version_flag = $this->array_utility->arrayHasValueInsensitive($option_keys,'v') || $this->array_utility->arrayHasValueInsensitive($option_keys,'version') || $positional_parameter_1 === 'version' || $positional_parameter_1 === 'Version';
        if($has_version_flag){
            $this->displayVersion();
            return;
        }

        // Unknown Parameters
        // ──────────────────
        if($has_positional_parameters){
            $this->displayUnknownParameters();
            return;
        }

        // Info
        // ────
        $this->displayInfo();
    }

    public function displayInfo() {
        $this->writer->writeLine('Country List Utility - CLI Tool');
    }

    public function displayVersion()
    {
        $this->writer->writeLine($this->version_number);
    }

    public function displayUnknownParameters()
    {
        // Get formatter
        $formatter = $this->formatter;

        // Output
        $this->writer->writeLine($formatter->fg_bright_red . 'Unknown Parameters' . $formatter->reset);
    }

    public function displayFoo()
    {
        $this->writer->writeLine('bar');
    }

    public function displayShow()
    {
        // Formatting
        $reset = $this->formatter->reset;
        $bold  = $this->formatter->bold;
        $cyan  = $this->formatter->fg_bright_cyan;

        $this->writer->writeLine('Options for ' . $bold . $cyan . 'show' . $reset . ':');
        $this->writer->writeLine(' - show ' . $cyan . 'alpha2' . $reset);
    }

    public function displayShowAlpha2()
    {
        $this->country_list_display->showAlpha2();
    }
}
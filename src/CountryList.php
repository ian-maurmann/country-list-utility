<?php

/**
 * Country List
 * ------------
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

/**
 * Class CountryList
 */
class CountryList
{
    private array $countries;

    public function __construct()
    {
        // Build alphabet
        $this->buildCountryList();
    }


    private function buildCountryList()
    {
        // Properties
        //     alpha-2          - ISO 3166-1 alpha-2 code
        //     alpha-2__note    - Notes about the Alpha 2 code
        //     ccTLD            - Top-Level Domain Name with leading dot
        //     common_name      - Common Name in English
        //     en_official_name - Official Name in English
        //     normalized       - unique normalized human-readable name for lookup


        $countries = [

            // For order, see list on:
            // https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2

            // AD
            // Andorra
            'andorra' => [
                'normalized'       => 'andorra',
                'alpha-2'          => 'AD',
                'ccTLD'            => '.ad',
                'common_name'      => 'Andorra',
                'en_official_name' => 'Principality of Andorra',
            ],

            // AE
            // United Arab Emirates
            'emirates' => [
                'normalized'       => 'emirates',
                'alpha-2'          => 'AE',
                'ccTLD'            => '.ae',
                'common_name'      => 'United Arab Emirates',
                'en_official_name' => 'United Arab Emirates',
            ],

            // AF
            // Afghanistan
            'afghanistan' => [
                'normalized'       => 'afghanistan',
                'alpha-2'          => 'AF',
                'ccTLD'            => '.af',
                'common_name'      => 'Afghanistan',
                'en_official_name' => 'Islamic Emirate of Afghanistan',
            ],

            // AG
            // Antigua and Barbuda
            'antigua-and-barbuda' => [
                'normalized'       => 'antigua-and-barbuda',
                'alpha-2'          => 'AG',
                'ccTLD'            => '.ag',
                'common_name'      => 'Antigua and Barbuda',
                'en_official_name' => 'Antigua and Barbuda',
            ],

            // AI
            // Anguilla
            'anguilla' => [
                'normalized'       => 'anguilla',
                'alpha-2'          => 'AI',
                'alpha-2__note'    => 'AI previously represented French Afars and Issas, now Djibouti',
                'ccTLD'            => '.ai',
                'common_name'      => 'Anguilla',
                'en_official_name' => 'Anguilla',
            ],

            // AL
            // Albania
            'albania' => [
                'normalized'       => 'albania',
                'alpha-2'          => 'AL',
                'ccTLD'            => '.al',
                'common_name'      => 'Albania',
                'en_official_name' => 'Republic of Albania',
            ],

            // AM
            // Armenia
            'armenia' => [
                'normalized'       => 'armenia',
                'alpha-2'          => 'AM',
                'ccTLD'            => '.am',
                'common_name'      => 'Armenia',
                'en_official_name' => 'Republic of Armenia',
            ],

        ];

        $this->countries = $countries;
    }
}
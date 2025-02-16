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

    public function getAllCountries(): array
    {
        return $this->countries;
    }


    private function buildCountryList()
    {
        // Properties
        //     alpha-2          - ISO 3166-1 alpha-2 code
        //     alpha-2__note    - Notes about the Alpha 2 code
        //     ccTLD            - Top-Level Domain Name with leading dot
        //     common_name      - Common Name in English
        //     ma_name          - ISO 3166 Maintenance Agency (ISO 3166/MA) English short name
        //     en_official_name - Official Name in English
        //     normalized       - unique normalized human-readable name for lookup


        $countries = [

            // For order, see list on:
            // https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2

            // AD
            // Andorra
            [
                'normalized'       => 'andorra',
                'alpha-2'          => 'AD',
                'ccTLD'            => '.ad',
                'common_name'      => 'Andorra',
                'ma_name'          => 'Andorra',
                'en_official_name' => 'Principality of Andorra',
            ],

            // AE
            // United Arab Emirates
            [
                'normalized'       => 'emirates',
                'alpha-2'          => 'AE',
                'ccTLD'            => '.ae',
                'common_name'      => 'United Arab Emirates',
                'ma_name'          => 'United Arab Emirates',
                'en_official_name' => 'United Arab Emirates',
            ],

            // AF
            // Afghanistan
            [
                'normalized'       => 'afghanistan',
                'alpha-2'          => 'AF',
                'ccTLD'            => '.af',
                'common_name'      => 'Afghanistan',
                'ma_name'          => 'Afghanistan',
                'en_official_name' => 'Islamic Emirate of Afghanistan',
            ],

            // AG
            // Antigua and Barbuda
            [
                'normalized'       => 'antigua-and-barbuda',
                'alpha-2'          => 'AG',
                'ccTLD'            => '.ag',
                'common_name'      => 'Antigua and Barbuda',
                'ma_name'          => 'Antigua and Barbuda',
                'en_official_name' => 'Antigua and Barbuda',
            ],

            // AI
            // Anguilla
            [
                'normalized'       => 'anguilla',
                'alpha-2'          => 'AI',
                'alpha-2__note'    => 'AI previously represented French Afars and Issas, now Djibouti',
                'ccTLD'            => '.ai',
                'common_name'      => 'Anguilla',
                'ma_name'          => 'Anguilla',
                'en_official_name' => 'Anguilla',
            ],

            // AL
            // Albania
            [
                'normalized'       => 'albania',
                'alpha-2'          => 'AL',
                'ccTLD'            => '.al',
                'common_name'      => 'Albania',
                'ma_name'          => 'Albania',
                'en_official_name' => 'Republic of Albania',
            ],

            // AM
            // Armenia
            [
                'normalized'       => 'armenia',
                'alpha-2'          => 'AM',
                'ccTLD'            => '.am',
                'common_name'      => 'Armenia',
                'ma_name'          => 'Armenia',
                'en_official_name' => 'Republic of Armenia',
            ],

            // AO
            // Angola
            [
                'normalized'       => 'angola',
                'alpha-2'          => 'AO',
                'ccTLD'            => '.ao',
                'common_name'      => 'Angola',
                'ma_name'          => 'Angola',
                'en_official_name' => 'Republic of Angola',
            ],

            // AQ
            // Antarctica
            [
                'normalized'       => 'antarctica',
                'alpha-2'          => 'AQ',
                'alpha-2__note'    => 'Code taken from name in French: Antarctique',
                'ccTLD'            => '.aq',
                'common_name'      => 'Antarctica',
                'ma_name'          => 'Antarctica',
                'en_official_name' => 'Antarctica',
            ],

            // AR
            // Argentina
            [
                'normalized'       => 'argentina',
                'alpha-2'          => 'AR',
                'ccTLD'            => '.ar',
                'common_name'      => 'Argentina',
                'ma_name'          => 'Argentina',
                'en_official_name' => 'Argentine Republic',
            ],

            // AS
            // American Samoa
            [
                'normalized'       => 'american-samoa',
                'alpha-2'          => 'AS',
                'ccTLD'            => '.as',
                'common_name'      => 'American Samoa',
                'ma_name'          => 'American Samoa',
                'en_official_name' => 'American Samoa',
            ],

            // AT
            // Austria
            [
                'normalized'       => 'austria',
                'alpha-2'          => 'AT',
                'ccTLD'            => '.at',
                'common_name'      => 'Austria',
                'ma_name'          => 'Austria',
                'en_official_name' => 'Republic of Austria',
            ],

            // AU
            // Australia
            [
                'normalized'       => 'australia',
                'alpha-2'          => 'AU',
                'ccTLD'            => '.au',
                'common_name'      => 'Australia',
                'ma_name'          => 'Australia',
                'en_official_name' => 'Commonwealth of Australia,',
            ],

            // AW
            // Aruba
            [
                'alpha-2'          => 'AW',
                'normalized'       => 'aruba',
                'ccTLD'            => '.aw',
                'common_name'      => 'Aruba',
                'ma_name'          => 'Aruba',
                'en_official_name' => 'Country of Aruba',
            ],

            // XX
            // Xxxxxxx
            [
                'alpha-2'          => 'XX',
                'normalized'       => 'xxxxxxx',
                'ccTLD'            => '.xx',
                'common_name'      => 'Xxxxxxx',
                'ma_name'          => 'XxxxxxXxxx',
                'en_official_name' => 'XxxxxxxXxxxxxxXxxxxxx',
            ],

        ];

        $this->countries = $countries;
    }
}
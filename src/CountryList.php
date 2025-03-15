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
                'alpha-2__note'    => '(AI previously represented French Afars and Issas, now Djibouti)',
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
                'alpha-2__note'    => '(Code taken from name in French: Antarctique)',
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

            // AX
            // Åland Islands
            [
                'alpha-2'                  => 'AX',
                'normalized'               => 'aland',
                'ccTLD'                    => '.ax',
                'common_name'              => 'Åland',
                'common_name__naturalized' => 'Aland',
                'ma_name'                  => 'Åland Islands',
                'en_official_name'         => 'Region of Åland',
            ],

            // AZ
            // Azerbaijan
            [
                'alpha-2'          => 'AZ',
                'normalized'       => 'azerbaijan',
                'ccTLD'            => '.az',
                'common_name'      => 'Azerbaijan',
                'ma_name'          => 'Azerbaijan',
                'en_official_name' => 'Republic of Azerbaijan',
            ],

            // BA
            // Bosnia and Herzegovina
            [
                'alpha-2'          => 'BA',
                'normalized'       => 'bosnia-and-herzegovina',
                'ccTLD'            => '.ba',
                'common_name'      => 'Bosnia and Herzegovina',
                'ma_name'          => 'Bosnia and Herzegovina',
                'en_official_name' => 'Bosnia and Herzegovina',
            ],

            // BB
            // Barbados
            [
                'alpha-2'          => 'BB',
                'normalized'       => 'barbados',
                'ccTLD'            => '.bb',
                'common_name'      => 'Barbados',
                'ma_name'          => 'Barbados',
                'en_official_name' => 'Barbados',
            ],

            // BD
            // Bangladesh
            [
                'alpha-2'          => 'BD',
                'ccTLD'            => '.bd',
                'normalized'       => 'bangladesh',
                'common_name'      => 'Bangladesh',
                'ma_name'          => 'Bangladesh',
                'en_official_name' => 'People’s Republic of Bangladesh', // <---- Using Right-Single-Quotation-Mark, not single-quote
            ],

            // BE
            // Belgium
            [
                'alpha-2'          => 'BE',
                'normalized'       => 'belgium',
                'ccTLD'            => '.be',
                'common_name'      => 'Belgium',
                'ma_name'          => 'Belgium',
                'en_official_name' => 'Kingdom of Belgium',
            ],

            // BF
            // Burkina Faso
            [
                'alpha-2'          => 'BF',
                'ccTLD'            => '.bf',
                'normalized'       => 'burkina-faso',
                'common_name'      => 'Burkina Faso',
                'ma_name'          => 'Burkina Faso',
                'en_official_name' => 'Burkina Faso',
            ],

            // BG
            // Bulgaria
            [
                'alpha-2'          => 'BG',
                'ccTLD'            => '.bg',
                'normalized'       => 'bulgaria',
                'common_name'      => 'Bulgaria',
                'ma_name'          => 'Bulgaria',
                'en_official_name' => 'Republic of Bulgaria',
            ],

            // BH
            // Bahrain
            [
                'alpha-2'          => 'BH',
                'ccTLD'            => '.bh',
                'normalized'       => 'bahrain',
                'common_name'      => 'Bahrain',
                'ma_name'          => 'Bahrain',
                'en_official_name' => 'Kingdom of Bahrain',
            ],

            // BI
            // Burundi
            [
                'alpha-2'          => 'BI',
                'ccTLD'            => '.bi',
                'normalized'       => 'burundi',
                'common_name'      => 'Burundi',
                'ma_name'          => 'Burundi',
                'en_official_name' => 'Republic of Burundi',
            ],

            // BJ
            // Benin
            [
                'alpha-2'          => 'BJ',
                'ccTLD'            => '.bj',
                'normalized'       => 'benin',
                'common_name'      => 'Benin',
                'ma_name'          => 'Benin',
                'en_official_name' => 'Republic of Benin',
            ],

            // BL
            // Saint Barthélemy
            [
                'alpha-2'          => 'BL',
                'ccTLD'            => '.bl',
                'normalized'       => 'saint-barthelemy',
                'common_name'      => 'St. Barthélemy',
                'ma_name'          => 'Saint Barthélemy',
                'en_official_name' => 'Collectivité territoriale de Saint-Barthélemy',
            ],

            // BM
            // Bermuda
            [
                'alpha-2'          => 'BM',
                'ccTLD'            => '.bm',
                'normalized'       => 'bermuda',
                'common_name'      => 'Bermuda',
                'ma_name'          => 'Bermuda',
                'en_official_name' => 'Bermuda',
            ],

            // BN
            // Brunei Darussalam
            [
                'alpha-2'          => 'BN',
                'ccTLD'            => '.bn',
                'normalized'       => 'brunei',
                'common_name'      => 'Brunei',
                'ma_name'          => 'Brunei Darussalam',
                'en_official_name' => 'Brunei Darussalam',
            ],

            // BO
            // Bolivia, Plurinational State of
            [
                'alpha-2'          => 'BO',
                'ccTLD'            => '.bo',
                'normalized'       => 'bolivia',
                'common_name'      => 'Bolivia',
                'ma_name'          => 'Bolivia, Plurinational State of',
                'en_official_name' => 'Plurinational State of Bolivia',
            ],

            // BQ
            // Bonaire, Sint Eustatius and Saba
            // (Caribbean Netherlands)
            [
                'alpha-2'          => 'BQ',
                'alpha-2__note'    => '(BQ previously represented British Antarctic Territory)',
                'ccTLD'            => '.bq',
                'normalized'       => 'bonaire-sint-eustatius-and-saba',
                'common_name'      => 'Bonaire, St. Eustatius and Saba',
                'ma_name'          => 'Bonaire, Sint Eustatius and Saba',
                'en_official_name' => 'Caribbean Netherlands',
            ],

            // BR
            // Brazil
            [
                'alpha-2'          => 'BR',
                'ccTLD'            => '.br',
                'normalized'       => 'brazil',
                'common_name'      => 'Brazil',
                'ma_name'          => 'Brazil',
                'en_official_name' => 'Federative Republic of Brazil',
            ],

            // BS
            // Bahamas
            [
                'alpha-2'          => 'BS',
                'ccTLD'            => '.bs',
                'normalized'       => 'bahamas',
                'common_name'      => 'Bahamas',
                'ma_name'          => 'Bahamas',
                'en_official_name' => 'Commonwealth of The Bahamas',
            ],

            // BT
            // Bhutan
            [
                'alpha-2'          => 'BT',
                'ccTLD'            => '.bt',
                'normalized'       => 'bhutan',
                'common_name'      => 'Bhutan',
                'ma_name'          => 'Bhutan',
                'en_official_name' => 'Kingdom of Bhutan',
            ],

            // BV
            // Bouvet Island
            [
                'alpha-2'          => 'BV',
                'ccTLD'            => '.bv',
                'normalized'       => 'bouvet-island',
                'common_name'      => 'Bouvet Island',
                'ma_name'          => 'Bouvet Island',
                'en_official_name' => 'Bouvet Island',
            ],

            // BW
            // Botswana
            [
                'alpha-2'          => 'BW',
                'ccTLD'            => '.bw',
                'normalized'       => 'botswana',
                'common_name'      => 'Botswana',
                'ma_name'          => 'Botswana',
                'en_official_name' => 'Republic of Botswana',
            ],

            // BY
            // Belarus
            [
                'alpha-2'          => 'BY',
                'ccTLD'            => '.by',
                'normalized'       => 'belarus',
                'common_name'      => 'Belarus',
                'ma_name'          => 'Belarus',
                'en_official_name' => 'Republic of Belarus',
            ],

            // BZ
            // Belize
            [
                'alpha-2'          => 'BZ',
                'ccTLD'            => '.bz',
                'normalized'       => 'belize',
                'common_name'      => 'Belize',
                'ma_name'          => 'Belize',
                'en_official_name' => 'Belize',
            ],

            // CA
            // Canada
            [
                'alpha-2'          => 'CA',
                'ccTLD'            => '.ca',
                'normalized'       => 'canada',
                'common_name'      => 'Canada',
                'ma_name'          => 'Canada',
                'en_official_name' => 'Canada',
            ],

            // CC
            // Cocos (Keeling) Islands
            [
                'alpha-2'          => 'CC',
                'ccTLD'            => '.cc',
                'normalized'       => 'cocos-keeling-islands',
                'common_name'      => 'Cocos (Keeling) Islands',
                'ma_name'          => 'Cocos (Keeling) Islands',
                'en_official_name' => 'Territory of Cocos (Keeling) Islands',
            ],

            // CD
            // Congo, Democratic Republic of the
            [
                'alpha-2'          => 'CD',
                'alpha-2__note'    => '(Changed from ZR for former name Zaire)',
                'ccTLD'            => '.cd',
                'normalized'       => 'congo-democratic-republic',
                'common_name'      => 'Congo, Democratic Republic of the',
                'ma_name'          => 'Congo, Democratic Republic of the',
                'en_official_name' => 'Democratic Republic of the Congo',
            ],

            // CF
            // Central African Republic
            [
                'alpha-2'          => 'CF',
                'ccTLD'            => '.cf',
                'normalized'       => 'central-african-republic',
                'common_name'      => 'Central African Republic',
                'ma_name'          => 'Central African Republic',
                'en_official_name' => 'Central African Republic',
            ],

            // XX
            // Xxxxxxx
            [
                'alpha-2'          => 'XX',
                'ccTLD'            => '.xx',
                'normalized'       => 'xxxxxxx',
                'common_name'      => 'Xxxxxxx',
                'ma_name'          => 'XxxxxxXxxx',
                'en_official_name' => 'XxxxxxxXxxxxxxXxxxxxx',
            ],

            // TBD, Might need to add
            // ====================================
            // - artsakh          = Republic of Artsakh
            // - brcko / brecko   = Brčko District
            // - federacija       = Federation of Bosnia and Herzegovina (Entity in Bosnia & Herzegovina)
            // - srpska / serpska = Republic of Srpska (Entity in Bosnia & Herzegovina)
            // ====================================

        ];

        $this->countries = $countries;
    }
}
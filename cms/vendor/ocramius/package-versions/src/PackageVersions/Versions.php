<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = '__root__';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'doctrine/annotations' => 'v1.8.0@904dca4eb10715b92569fbcd79e201d5c349b6bc',
  'doctrine/cache' => '1.9.1@89a5c76c39c292f7798f964ab3c836c3f8192a55',
  'doctrine/collections' => '1.6.4@6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7',
  'doctrine/common' => 'v2.11.0@b8ca1dcf6b0dc8a2af7a09baac8d0c48345df4ff',
  'doctrine/dbal' => 'v2.10.0@0c9a646775ef549eb0a213a4f9bd4381d9b4d934',
  'doctrine/doctrine-bundle' => '2.0.0@82826278bb88ae8c20aee3af3191430dcbcca63a',
  'doctrine/doctrine-migrations-bundle' => '2.1.2@856437e8de96a70233e1f0cc2352fc8dd15a899d',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.3.1@ec3a55242203ffa6a4b27c58176da97ff0a7aec1',
  'doctrine/instantiator' => '1.3.0@ae466f726242e637cebdd526a7d991b9433bacf1',
  'doctrine/lexer' => '1.2.0@5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6',
  'doctrine/migrations' => '2.2.0@8e124252d2f6be1124017d746d5994dd4095d66f',
  'doctrine/orm' => 'v2.7.0@4d763ca4c925f647b248b9fa01b5f47aa3685d62',
  'doctrine/persistence' => '1.2.0@43526ae63312942e5316100bb3ed589ba1aba491',
  'doctrine/reflection' => 'v1.0.0@02538d3f95e88eb397a5f86274deb2c6175c2ab6',
  'dompdf/dompdf' => 'v0.8.3@75f13c700009be21a1965dc2c5b68a8708c22ba2',
  'egulias/email-validator' => '2.1.11@92dd169c32f6f55ba570c309d83f5209cefb5e23',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'lcobucci/jwt' => '3.3.1@a11ec5f4b4d75d1fcd04e133dede4c317aac9e18',
  'lexik/jwt-authentication-bundle' => 'v2.6.5@448551fc08c6cff37aad9d8f27f6b9615cd28966',
  'monolog/monolog' => '2.0.1@f9d56fd2f5533322caccdfcddbb56aedd622ef1c',
  'namshi/jose' => '7.2.3@89a24d7eb3040e285dd5925fcad992378b82bcff',
  'nelmio/cors-bundle' => '2.0.1@9683e6d30d000ef998919261329d825de7c53499',
  'ocramius/package-versions' => '1.5.1@1d32342b8c1eb27353c8887c366147b4c2da673c',
  'ocramius/proxy-manager' => '2.2.3@4d154742e31c35137d5374c998e8f86b54db2e2f',
  'phenx/php-font-lib' => '0.5.1@760148820110a1ae0936e5cc35851e25a938bc97',
  'phenx/php-svg-lib' => 'v0.3.3@5fa61b65e612ce1ae15f69b3d223cb14ecc60e32',
  'phpdocumentor/reflection-common' => '2.0.0@63a995caa1ca9e5590304cd845c15ad6d482a62a',
  'phpdocumentor/reflection-docblock' => '4.3.2@b83ff7cfcfee7827e1e78b637a5904fe6a96698e',
  'phpdocumentor/type-resolver' => '1.0.1@2e32a6d48972b2c1976ed5d8967145b6cec4a4a9',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.2@446d54b4cb6bf489fc9d75f55843658e6f25d801',
  'sabberworm/php-css-parser' => '8.3.0@91bcc3e3fdb7386c9a2e0e0aa09ca75cc43f121f',
  'sensio/framework-extra-bundle' => 'v5.5.1@dfc2c4df9f7d465a65c770e9feb578fe071636f7',
  'swiftmailer/swiftmailer' => 'v6.2.3@149cfdf118b169f7840bbe3ef0d4bc795d1780c9',
  'symfony/asset' => 'v5.0.0@6b66969b9f5cd53c1ce69bdc651aa962f211b6b6',
  'symfony/cache' => 'v5.0.0@32bd1f9be1684bba768a6834037706cf0950843c',
  'symfony/cache-contracts' => 'v2.0.0@a91281de82119a7a07481b892f709d88da592cd3',
  'symfony/config' => 'v5.0.0@10cb9692805d2152fe2ecb3af018c188c712bba8',
  'symfony/console' => 'v5.0.0@1ece22ce0c2d54572dafcd114cc08c0031cc0ac3',
  'symfony/dependency-injection' => 'v5.0.0@cdaee34c7de6d25bd7dd9712661eedda728d5e62',
  'symfony/doctrine-bridge' => 'v5.0.0@2955f048c9eff305ef4ef6f132ae831e72aa263c',
  'symfony/dotenv' => 'v5.0.0@f792c081821f9e20d42f07a15146ce7c7f57d66f',
  'symfony/error-handler' => 'v5.0.0@9452dec78d725ebbd8188ff5b46275627e7d63e1',
  'symfony/event-dispatcher' => 'v5.0.0@7b738a51645e10f864cc25c24d232fb03f37b475',
  'symfony/event-dispatcher-contracts' => 'v2.0.0@bb09b1d8f8a35243195189ded0d41bdc798ac2fb',
  'symfony/expression-language' => 'v5.0.0@121ece2d8c52777db0809525526ba9875f5a483a',
  'symfony/filesystem' => 'v5.0.0@0bf75c37a71ff41f718b14b9f5a0a7d6a7dd9b84',
  'symfony/finder' => 'v5.0.0@17874dd8ab9a19422028ad56172fb294287a701b',
  'symfony/flex' => 'v1.4.8@f5bfc79c1f5bed6b2bb4ca9e49a736c2abc03e8f',
  'symfony/form' => 'v5.0.0@e96eea999cf185960b179e96f04b9fa2ac2195d0',
  'symfony/framework-bundle' => 'v5.0.0@8b52da07909e952ddd88f65504763b4397ffbea1',
  'symfony/google-mailer' => 'v5.0.2@2be5c018f9e1107a89c8a00ee6dc62a6a2229022',
  'symfony/http-client' => 'v5.0.0@e68e5680f2bfda0b17097fde6d28b61d87c757ee',
  'symfony/http-client-contracts' => 'v2.0.0@f1aa62591e44a737d4589a0913ac49b84313c19d',
  'symfony/http-foundation' => 'v5.0.0@c5c226b6f164ae4f95c4bffbe940c81050940eda',
  'symfony/http-kernel' => 'v5.0.0@33460924e367bc0e804626dc0e4e2439a93b7ad3',
  'symfony/inflector' => 'v5.0.0@aaeb5e293294070d1b061fa3d7889bac69909320',
  'symfony/intl' => 'v5.0.0@1a700ae25f25f1f7b2201da020184bff5a8912c0',
  'symfony/mailer' => 'v5.0.2@82644dc053ccf80e2d67fd79976a2c0d08bb53c2',
  'symfony/mime' => 'v5.0.0@76f3c09b7382bf979af7bcd8e6f8033f1324285e',
  'symfony/monolog-bridge' => 'v5.0.0@fb32eff4a6183ffda7aa8e6dd9975c8a7f2e29cb',
  'symfony/monolog-bundle' => 'v3.5.0@dd80460fcfe1fa2050a7103ad818e9d0686ce6fd',
  'symfony/notifier' => 'v5.0.0@6345175bd16786036263068253c961afc3c15352',
  'symfony/options-resolver' => 'v5.0.0@1ad3d0ffc00cc1990e5c9c7bb6b81578ec3f5f68',
  'symfony/orm-pack' => 'v1.0.7@c57f5e05232ca40626eb9fa52a32bc8565e9231c',
  'symfony/polyfill-intl-grapheme' => 'v1.12.0@f6d623160da72288a9b704d324e5a0e4b385331a',
  'symfony/polyfill-intl-icu' => 'v1.12.0@66810b9d6eb4af54d543867909d65ab9af654d7e',
  'symfony/polyfill-intl-idn' => 'v1.12.0@6af626ae6fa37d396dc90a399c0ff08e5cfc45b2',
  'symfony/polyfill-intl-normalizer' => 'v1.12.0@c7fcec8e5cd3fc87f91120b0b5d3cb1b7d44f7a9',
  'symfony/polyfill-mbstring' => 'v1.12.0@b42a2f66e8f1b15ccf25652c3424265923eb4f17',
  'symfony/polyfill-php73' => 'v1.12.0@2ceb49eaccb9352bff54d22570276bb75ba4a188',
  'symfony/process' => 'v5.0.0@110f98bed214a007eb440c7bb14088fed96f847f',
  'symfony/property-access' => 'v5.0.0@8203dcdeb544dd0fa36a127fd04eb8bb08ae44f1',
  'symfony/property-info' => 'v5.0.0@f0bf8d7360e47261ceec67d9338a0c6257f59878',
  'symfony/routing' => 'v5.0.0@5d67bc113f3e565f8b3ecbea740f09d32af0a30b',
  'symfony/security-bundle' => 'v5.0.0@a8f386340847b7678f96bb3255c3408c7a57322f',
  'symfony/security-core' => 'v5.0.0@85009c888dcd612e3207f55e0be6d62faa5cdcb4',
  'symfony/security-csrf' => 'v5.0.0@df14c3ebed8ed99750e8d27a6333918f80b5a8ea',
  'symfony/security-guard' => 'v5.0.0@6ae91611df8747c45a03bdbc7fc2d355c8d2908f',
  'symfony/security-http' => 'v5.0.0@18f96c1f4aff294d6872908741731ff0993dbd6f',
  'symfony/serializer' => 'v5.0.2@3cfc478c102f2d3bcf60edd339cd9c3cb446a576',
  'symfony/serializer-pack' => 'v1.0.2@c5f18ba4ff989a42d7d140b7f85406e77cd8c4b2',
  'symfony/service-contracts' => 'v2.0.0@9d99e1556417bf227a62e14856d630672bf10eaf',
  'symfony/stopwatch' => 'v5.0.0@d410282956706e0b08681a5527447a8e6b6f421e',
  'symfony/string' => 'v5.0.0@abab74551c7b6754046690d02b742154ed42e3a5',
  'symfony/swiftmailer-bundle' => 'v3.4.0@553d2474288349faed873da8ab7c1551a00d26ae',
  'symfony/translation' => 'v5.0.0@e86df1b0f1672362ecf96023faf2c42241c41330',
  'symfony/translation-contracts' => 'v2.0.0@8feb81e6bb1a42d6a3b1429c751d291eb6d05297',
  'symfony/twig-bridge' => 'v5.0.0@eaafb2d196adc1b66f7379769f166f26eddd3306',
  'symfony/twig-bundle' => 'v5.0.2@a54f6db9d452aa06a77e9f8562974a61e15bfa42',
  'symfony/twig-pack' => 'v1.0.0@8b278ea4b61fba7c051f172aacae6d87ef4be0e0',
  'symfony/validator' => 'v5.0.0@4c32fbacd1652271be449be4ebc57eb5c4c8793b',
  'symfony/var-dumper' => 'v5.0.0@956b8b6e4c52186695f592286414601abfcec284',
  'symfony/var-exporter' => 'v5.0.0@e2f1eeb12edacf744c4b359a859204578fdf8549',
  'symfony/web-link' => 'v5.0.0@572ab541ec2ca2e0d0f76fd08da006805e4db157',
  'symfony/webpack-encore-bundle' => 'v1.7.2@787c2fdedde57788013339f05719c82ce07b6058',
  'symfony/yaml' => 'v5.0.0@51b684480184fa767b97e28eaca67664e48dd3e9',
  'twig/extra-bundle' => 'v3.0.0@c56821429490e351003a09b7ed0c917feec2355f',
  'twig/twig' => 'v3.0.0@9b58bb8ac7a41d72fbb5a7dc643e07923e5ccc26',
  'webmozart/assert' => '1.6.0@573381c0a64f155a0d9a23f4b0c797194805b925',
  'zendframework/zend-code' => '3.4.0@46feaeecea14161734b56c1ace74f28cb329f194',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'easycorp/easy-log-handler' => 'v1.0.9@224e1dfcf9455aceee89cd0af306ac097167fac1',
  'nikic/php-parser' => 'v4.3.0@9a9981c347c5c49d6dfe5cf826bb882b824080dc',
  'symfony/browser-kit' => 'v5.0.0@a195f83b0ba20e622a5baa726af96826b8f5616b',
  'symfony/css-selector' => 'v5.0.0@19d29e7098b7b2c3313cb03902ca30f100dcb837',
  'symfony/debug-bundle' => 'v5.0.0@c9ea0bdc89b9f81d6a292fc42714e807815de027',
  'symfony/debug-pack' => 'v1.0.7@09a4a1e9bf2465987d4f79db0ad6c11cc632bc79',
  'symfony/dom-crawler' => 'v5.0.0@0a0a73a0836926898b6fcd6817fe697487a73d97',
  'symfony/maker-bundle' => 'v1.14.3@c864e7f9b8d1e1f5f60acc3beda11299f637aded',
  'symfony/phpunit-bridge' => 'v5.0.0@3c288a1f1a46ddffc299fd46ddb643d50debde85',
  'symfony/profiler-pack' => 'v1.0.4@99c4370632c2a59bb0444852f92140074ef02209',
  'symfony/test-pack' => 'v1.0.6@ff87e800a67d06c423389f77b8209bc9dc469def',
  'symfony/web-profiler-bundle' => 'v5.0.0@6cc40446060e174a690e0f6da90731133b29b664',
  'paragonie/random_compat' => '2.*@b4236b7603677f7db002273650aa06c03e7dbc38',
  'symfony/polyfill-ctype' => '*@b4236b7603677f7db002273650aa06c03e7dbc38',
  'symfony/polyfill-iconv' => '*@b4236b7603677f7db002273650aa06c03e7dbc38',
  'symfony/polyfill-php72' => '*@b4236b7603677f7db002273650aa06c03e7dbc38',
  'symfony/polyfill-php71' => '*@b4236b7603677f7db002273650aa06c03e7dbc38',
  'symfony/polyfill-php70' => '*@b4236b7603677f7db002273650aa06c03e7dbc38',
  'symfony/polyfill-php56' => '*@b4236b7603677f7db002273650aa06c03e7dbc38',
  '__root__' => 'dev-master@b4236b7603677f7db002273650aa06c03e7dbc38',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
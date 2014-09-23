bones-match
===========

Code diff display tool for Laravel based on Stephen Morley's development (see Credits section).

# Installation

To install bones-match as a stand-alone module:

```sh
composer require genealabs/bones-match:*
```

or add it to you composer.json file:

```json
    "require": {
        /* ... */,
        "genealabs/bones-match": "*"
    },
    /* ... */
```

And then add the service provider to your app.php config file:
```php
	// 'providers' => array(
		'GeneaLabs\Bones\Match\BonesMatchServiceProvider',
    // );
```

# Usage

## Comparing

### Strings

```php
array Diff::compare(string $string1, string $string2 [, bool $compareByCharacter = false])
```

### Files

```php
array Diff::compareFiles(string $pathToFile1, string $pathToFile2 [, bool $compareByCharacter = false])
```

## Output

### Text

```php
string $output = Diff::toString(array $diffResults [, string $separator = "\n"]);
```

### Inline

```php
string $output = Diff::toHtml(array $diffResults [, string $separator = "<br />"]);
```

### Side-By-Side

```php
string $output = Diff::toTable(array $diffResults [, string $indentation = "" [, string $separator = "<br />"]]);
```

Credits
=======

Created by Stephen Morley - http://stephenmorley.org/ - and released under the terms of the CC0 1.0 Universal legal
code: http://creativecommons.org/publicdomain/zero/1.0/legalcode

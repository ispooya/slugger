# Slugger

A PHP package for converting strings into URL-friendly slugs with extensive character transliteration support.

## Features

- Converts strings to URL-friendly slugs
- Comprehensive special character transliteration
- Customizable separator
- Handles multiple language characters including:
  - Persian (Farsi) characters
  - Latin extended characters
  - Germanic umlauts
  - Eastern European characters
  - Scandinavian characters
  - And many more...

## Installation

You can install the package via Composer:

```bash
composer require ispooya/slugger
```

## Usage

### Basic Usage

```php
use Ispooya\Slugger\Services\Slugger;

$slugger = new Slugger();
$slug = $slugger->make('Hello World'); // Output: "hello-world"
```

### Custom Separator

You can specify a custom separator as the second parameter:

```php
$slugger = new Slugger();
$slug = $slugger->make('Hello World', '_'); // Output: "hello_world"
```

### Examples with Special Characters

```php
$slugger = new Slugger();
$slug = $slugger->make('سلام دنیا'); // Output: "سلام-دنیا"
$slug = $slugger->make('München'); // Output: "muenchen"
$slug = $slugger->make('État du café'); // Output: "etat-du-cafe"
$slug = $slugger->make('Århus København'); // Output: "arhus-kobenhavn"
```

## Supported Transformations

The package supports a wide range of character transformations, including:

- Persian (Farsi) characters
- `ä`, `æ`, `ǽ` → `ae`
- `ö`, `œ` → `oe`
- `ü` → `ue`
- All major accented characters (à, á, â, etc.)
- Special characters from multiple languages
- Common ligatures
- And many more...

## Method Reference

### make()

```php
public function make(string|null $string, string $separator = '-'): string|null
```

#### Parameters:

- `$string`: The input string to convert to a slug
- `$separator`: (Optional) The separator to use between words (defaults to '-')

#### Returns:

- A URL-friendly slug string, or null if the input is null

## License

[MIT License](LICENSE)

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## Credits

Created by [ispooya](https://github.com/ispooya)

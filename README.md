# php-wordpress-xml-parser
Parses WordPress WXR Files and presents them as a nice array.

## Usage

```php
    use HJBDev\PHPWordpressXMLParser\Parser;

    $output = Parser::parse(__DIR__. 'path/to/xml/file');
```

This is essentially a framework-agnostic version of the [Wordpress Importer](https://github.com/WordPress/wordpress-importer/blob/master/src/parsers/class-wxr-parser-xml.php) and as such the license has to be GNU GPLv2.
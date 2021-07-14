<?php

namespace HJBDev\PHPWordpressXMLParser;

use HJBDev\PHPWordpressXMLParser\Parsers\Regex;
use HJBDev\PHPWordpressXMLParser\Parsers\SimpleXML;
use HJBDev\PHPWordpressXMLParser\Parsers\XML;

class Parser {

    public static function parse($file)
    {
            // Attempt to use proper XML parsers first
            if ( extension_loaded( 'simplexml' ) ) {
                $parser = new SimpleXML;
                $result = $parser->parse( $file );
        
                return $result;
            } elseif ( extension_loaded( 'xml' ) ) {
                $parser = new XML;
                $result = $parser->parse( $file );
    
                return $result;
            }
    
            // use regular expressions if nothing else available or this is bad XML
            $parser = new Regex;
            return $parser->parse( $file );
    }

}
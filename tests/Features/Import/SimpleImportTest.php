<?php

namespace srinivas-vullamgunta\XML\Tests\Features\Import;

use srinivas-vullamgunta\XML\Data\XMLElement;
use srinivas-vullamgunta\XML\Tests\TestCase;
use srinivas-vullamgunta\XML\XML;

class SimpleImportTest extends TestCase
{
    public function test_loads_xml()
    {
        $path = __DIR__.'/stubs/notes.xml';
        $xml = XML::import($path);

        $this->assertMatchesJsonSnapshot($xml->toJson());

        $path = __DIR__.'/stubs/notes-2.xml';
        $xml = XML::import($path);

        $this->assertMatchesJsonSnapshot($xml->toJson());

        $path = __DIR__.'/stubs/plants.xml';
        $xml = XML::import($path);

        $this->assertMatchesJsonSnapshot($xml->toJson());
    }

    public function test_optimize()
    {
        $path = __DIR__.'/stubs/notes.xml';
        $xml = XML::import($path)
            ->optimize();

        $this->assertMatchesJsonSnapshot($xml->toJson());

        $path = __DIR__.'/stubs/notes-2.xml';
        $xml = XML::import($path)
            ->optimize();

        $this->assertMatchesJsonSnapshot($xml->toJson());
    }

    public function test_optimize_camel_case()
    {
        $path = __DIR__.'/stubs/notes.xml';
        $xml = XML::import($path)
            ->optimize('camelcase');

        $this->assertMatchesJsonSnapshot($xml->toJson());

        $path = __DIR__.'/stubs/notes-2.xml';
        $xml = XML::import($path)
            ->optimize('camelcase');

        $this->assertMatchesJsonSnapshot($xml->toJson());
    }

    public function test_raw()
    {
        $path = __DIR__.'/stubs/plants.xml';
        $xml = XML::import($path)->raw();

        $this->assertInstanceOf(XMLElement::class, $xml);

        $xml = XML::import($path, true);

        $this->assertInstanceOf(XMLElement::class, $xml);
    }
}

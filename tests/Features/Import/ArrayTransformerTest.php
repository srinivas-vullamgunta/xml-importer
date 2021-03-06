<?php

namespace srinivas-vullamgunta\XML\Tests\Features\Import;

use srinivas-vullamgunta\XML\Tests\TestCase;
use srinivas-vullamgunta\XML\Transformers\ArrayTransformer;
use srinivas-vullamgunta\XML\XML;

class ArrayTransformerTest extends TestCase
{
    public function test_applies_array_transform()
    {
        $path = __DIR__.'/stubs/notes.xml';
        $json = XML::import($path)
            ->transform('note')->with(ArrayTransformer::class)
            ->toJson();

        $this->assertMatchesJsonSnapshot($json);
    }

    public function test_applies_array_correctly()
    {
        $path = __DIR__.'/stubs/notes-2.xml';
        $json = XML::import($path)
            ->transform('note')->with(ArrayTransformer::class)
            ->toJson();

        $this->assertMatchesJsonSnapshot($json);
    }

    public function test_applies_array_transform_using_alias()
    {
        $path = __DIR__.'/stubs/notes.xml';
        $json = XML::import($path)
            ->expect('note')->as('array')
            ->toJson();

        $this->assertMatchesJsonSnapshot($json);
    }

    public function test_applies_array_correctly_using_alias()
    {
        $path = __DIR__.'/stubs/notes-2.xml';
        $json = XML::import($path)
            ->expect('note')->as('array')
            ->toJson();

        $this->assertMatchesJsonSnapshot($json);
    }
}

<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 */

namespace Qafoo\Analyzer;


class ShellTest extends \PHPUnit_Framework_TestCase
{
    public function testProjectDir()
    {
        $projectDir = dirname(dirname(dirname(dirname(dirname(__DIR__)))));
        $shell = new Shell($projectDir);

        $testCommand = 'vendor/bin/phpunit';
        $result = $shell->exec($testCommand, ['--version']);

        $this->assertContains('PHPUnit', $result);
    }
}

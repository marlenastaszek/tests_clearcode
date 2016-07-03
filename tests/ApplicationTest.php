<?php

use Clearcode\Application;
use ImporterStub\ImporterInterface;

class ApplicationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Builds an application instance for all tests.
     * Modify if you need
     *
     * @return ImporterInterface
     */
    protected function bootstrapApplication()
    {
        return new Application([
            'database' => array(
                'host' => 'localhost',
                'database' => 'clearcode',
                'user' => 'clearcode',
                'password' => 'password1234'
            ),
            "delivery_address" => "admin@example.com"
        ]);
    }

    /*********************************
     *  DO NOT CHANGE TEST BELOW
     ********************************/

    /**
     * @test
     */
    public function it_should_read_from_csv()
    {
        $app = $this->bootstrapApplication();

        $this->assertTrue($app->read('csv', $this->prepareFile('users.csv')));
    }

    /**
     * @test
     */
    public function it_should_read_from_xml()
    {
        $app = $this->bootstrapApplication();

        $this->assertTrue($app->read('xml', $this->prepareFile('users.xml')));
    }

    /**
     * @test
     * @expectedException \Exception
     */
    public function it_should_throw_exception_if_file_do_not_exist()
    {
        $app = $this->bootstrapApplication();

        $app->read('xml', $this->prepareFile('this_file_do_not_exist.xml'));
    }
    /**
     * @test
     */
    public function it_should_import_from_xml_and_save_to_database()
    {
        $app = $this->bootstrapApplication();

        $app->read('xml', $this->prepareFile('users.xml'));

        $resultIds = $app->write('database');

        $this->assertSame([1, 2], $resultIds);
    }

    /**
     * @test
     */
    public function it_should_import_from_csv_and_save_to_database()
    {
        $app = $this->bootstrapApplication();

        $app->read('csv', $this->prepareFile('users.csv'));

        $resultIds = $app->write('database');

        $this->assertSame([1, 2], $resultIds);
    }
//
    /**
     * @test
     */
    public function it_should_import_from_xml_and_send_email()
    {
        $app = $this->bootstrapApplication();

        $app->read('xml', $this->prepareFile('users.xml'));

        $this->assertTrue($app->write('email'));
    }
//
    /**
     * @test
     */
    public function it_should_import_from_xml_and_log_message()
    {
        $app = $this->bootstrapApplication();

        /** @var \Psr\Log\LoggerInterface|\PhpSpec\ObjectBehavior $logger */
        $logger = $this->prophesize('Psr\Log\LoggerInterface');

        $logger->debug("imported: user3")->shouldBeCalled();
        $logger->debug("imported: user4")->shouldBeCalled();

        $app->setLogger($logger->reveal());

        $app->read('xml', $this->prepareFile('users.xml'));
        $app->write('email');
    }

    protected function prepareFile($fileName)
    {
        return new \SplFileInfo(__DIR__.'/fixtures/'.$fileName);
    }
}

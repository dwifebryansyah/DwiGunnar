<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KeranjangsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KeranjangsTable Test Case
 */
class KeranjangsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\KeranjangsTable
     */
    public $Keranjangs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Keranjangs',
        'app.Produks'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Keranjangs') ? [] : ['className' => KeranjangsTable::class];
        $this->Keranjangs = TableRegistry::getTableLocator()->get('Keranjangs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Keranjangs);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

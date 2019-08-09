<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BarangsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BarangsTable Test Case
 */
class BarangsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BarangsTable
     */
    public $Barangs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Barangs',
        'app.Categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Barangs') ? [] : ['className' => BarangsTable::class];
        $this->Barangs = TableRegistry::getTableLocator()->get('Barangs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Barangs);

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

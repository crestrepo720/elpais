<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActividadesCategoriasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActividadesCategoriasTable Test Case
 */
class ActividadesCategoriasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ActividadesCategoriasTable
     */
    public $ActividadesCategorias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.actividades_categorias',
        'app.actividades',
        'app.categorias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ActividadesCategorias') ? [] : ['className' => ActividadesCategoriasTable::class];
        $this->ActividadesCategorias = TableRegistry::getTableLocator()->get('ActividadesCategorias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ActividadesCategorias);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

<?php
/**
 * InstallData file.
 * @category  Practical Module
 * @package   Practical_ProdAttr
 */
namespace Practicle\ProdAttr\Setup;

use Magento\Cms\Model\BlockFactory;
use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * {@inheritdoc}
 * Iniciate InstallData
 */
class InstallData implements InstallDataInterface
{
	/**
	 * \Magento\Eav\Setup\EavSetupFactory
	 */
	private $eavSetupFactory;

    /**
     * \Magento\Cms\Model\BlockFactory
     */
    private $blockFactory;

	/**
	 * Init
	 *
	 * @param EavSetupFactory $eavSetupFactory
	 */
	public function __construct(EavSetupFactory $eavSetupFactory, BlockFactory $blockFactory) {
	    $this->eavSetupFactory = $eavSetupFactory;
        $this->blockFactory = $blockFactory;
	}

	/**
     * {@inheritdoc}
     */
	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context) {

        /** @var EavSetup $eavSetup */
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
        
        /** Add attributes to the eav/attribute */
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'condensing',
            [
                'group' => 'General',
                'type' => 'int',
                'backend' => '',
                'frontend' => '',
                'label' => 'Condensing',
                'input' => 'boolean',
                'class' => '',
                'source' => \Magento\Eav\Model\Entity\Attribute\Source\Boolean::class,
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                'visible' => true,
                'required' => false,
                'user_defined' => false,
                'default' => '1',
                'searchable' => false,
                'filterable' => false,
                'comparable' => false,
                'visible_on_front' => false,
                'used_in_product_listing' => true,
                'unique' => false,
                'apply_to' => ''
            ]
        );

        /** Creates custom block `Condensing` */
        $condensingBlockData = [
            'title' => 'Condensing',
            'identifier' => 'condensing',
            'content' => "<h1>Content Comes Here.</h1>",
            'is_active' => 1,
            'stores' => [0],
            'sort_order' => 0
        ];

        $this->blockFactory->create()->setData($condensingBlockData)->save();
	}
}

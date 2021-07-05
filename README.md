# Salecto/NewUserRole

Creates custom CMS block with content along with product attribute `Condensing` 

## Composer install

- `composer config repositories.reponame vcs https://github.com/seofeb/ProdAttr`
- `composer require Practical/Custom-product-attribute`

## Composer uninstall

- `composer remove Practical/Custom-product-attribute`

## Preview will be added

![command](/readme-images/command.png "command")


## Settings

- Module Enable Path `Store >> Configuration >> Practical >> Enable`

## Known issues

- **Issues will be here**
  Compartible with magento 2.4.2

## Developer informations
- vashishtha chauhan

### Install module
1. Run `Download the module folder in project_root_directory/app/code`
2. Run `php bin/magento setup:upgrade`
3. Run `php bin/magento setup:di:compile`
4. Run `php bin/magento s:s:d en_US`
5. Run `php bin/magento c:c`
6. Run `php bin/magento indexer:reindex`

### Uninstall module
1. Run `Download the module folder in project_root_directory/app/code`
2. Run `php bin/magento setup:di:compile`
3. Run `php bin/magento s:s:d en_US`
4. Run `php bin/magento c:c`
5. Run `php bin/magento indexer:reindex`

### Additional developer notes
Reference URL `References will be added.`

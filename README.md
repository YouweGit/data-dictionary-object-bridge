# data-dictionary-object-bridge
A connector between the data dictionary bundle and the object bridge bundle. This will allow both exist without depending on each 



## How to use it:

Install it using composer: 

```bash
composer require "youwe/data-dictionary-object-bridge"
```

Then, enable it in kernel.php:

```php
class AppKernel extends Kernel
{
    public function registerBundlesToCollection(BundleCollection $collection)
    {
        $collection->addBundle(new \Youwe\DataDictionaryObjectBridgeBundle\DataDictionaryObjectBridgeBundle());
    }
}

```


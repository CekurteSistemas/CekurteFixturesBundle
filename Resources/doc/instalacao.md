# Instalação

Assumimos que você já tenha o binário do composer instalado ou o arquivo composer.phar, sendo assim, execute o seguinte comando:

```bash
$ composer require cekurte/fixturesbundle
```

Agora adicione o Bundle no seu Kernel:

```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    if (in_array($this->getEnvironment(), array('dev', 'test'))) {
        // ...
        $bundles[] = new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle();
        $bundles[] = new Hautelook\AliceBundle\HautelookAliceBundle();
        $bundles[] = new Cekurte\FixturesBundle\CekurteFixturesBundle();
        // ...
    }
}
```

[Voltar para o Index](index.md) - [Ver a Configuração](configuracao.md)
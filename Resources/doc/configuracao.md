# Configuração

No seu arquivo de configuração para o ambiente de desenvolvimento `app/config/config_dev.yml` adicione a seguinte entrada:

```yml
# app/config/config_dev.yml

# ...
cekurte_fixtures:
    directory: "%kernel.root_dir%/Resources/fixtures"
    resources:
        - Fixture1
        - Fixture2
        - FixtureN
        # ...
```

Em **directory** você poderá colocar o path que achar conveniente.

Em **resources** você irá especificar que arquivos de fixtures serão carregados. Para cada linha especificada deverá haver um arquivo correspondente dentro do diretório especificado com a extensão **.yml**.

## Notas:

Se você manter a configuração padrão (exibida acima), então, deverá criar o seguinte diretório: `app/Resources/fixtures/`

[Voltar para a Instalação](instalacao.md) - [Ver os Exemplos](exemplos.md)
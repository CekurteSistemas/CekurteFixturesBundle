## Exemplos

Agora vamos ver alguns exemplos práticos de fixtures data.

```yml
# app/Resources/fixtures/Autor.yml

Cekurte\BlogBundle\Entity\Autor:
    autor{1..10}:
        nome: <name()>
        imagem: <imageUrl("640", "480", "abstract")>
        curriculo: <text(200)>
```

Integração com FOSUserBundle:

```yml
# app/Resources/fixtures/Group.yml

Cekurte\Custom\UserBundle\Entity\Group:
    group1:
        __construct:
            - Admin
            - ['ROLE_SUPER_ADMIN', 'ROLE_ADMIN']
    group2:
        __construct:
            - Default
            - ['ROLE_USER']
```

Estados do Brasil:

```yml
# app/Resources/fixtures/Estado.yml

Cekurte\Custom\UserBundle\Entity\Estado:
    estado1:
      id: 1
      sigla: "AC"
      nome: "ACRE"
    estado2:
      id: 2
      sigla: "AL"
      nome: "ALAGOAS"
    estado3:
      id: 3
      sigla: "AP"
      nome: "AMAPÁ"
    estado4:
      id: 4
      sigla: "AM"
      nome: "AMAZONAS"
    estado5:
      id: 5
      sigla: "BA"
      nome: "BAHIA"
    estado6:
      id: 6
      sigla: "CE"
      nome: "CEARÁ"
    estado7:
      id: 7
      sigla: "DF"
      nome: "DISTRITO FEDERAL"
    estado8:
      id: 8
      sigla: "ES"
      nome: "ESPÍRITO SANTO"
    estado9:
      id: 9
      sigla: "RR"
      nome: "RORAIMA"
    estado10:
      id: 10
      sigla: "GO"
      nome: "GOIÁS"
    estado11:
      id: 11
      sigla: "MA"
      nome: "MARANHÃO"
    estado12:
      id: 12
      sigla: "MT"
      nome: "MATO GROSSO"
    estado13:
      id: 13
      sigla: "MS"
      nome: "MATO GROSSO DO SUL"
    estado14:
      id: 14
      sigla: "MG"
      nome: "MINAS GERAIS"
    estado15:
      id: 15
      sigla: "PA"
      nome: "PARÁ"
    estado16:
      id: 16
      sigla: "PB"
      nome: "PARAÍBA"
    estado17:
      id: 17
      sigla: "PR"
      nome: "PARANÁ"
    estado18:
      id: 18
      sigla: "PE"
      nome: "PERNAMBUCO"
    estado19:
      id: 19
      sigla: "PI"
      nome: "PIAUÍ"
    estado20:
      id: 20
      sigla: "RJ"
      nome: "RIO DE JANEIRO"
    estado21:
      id: 21
      sigla: "RN"
      nome: "RIO GRANDE DO NORTE"
    estado22:
      id: 22
      sigla: "RS"
      nome: "RIO GRANDE DO SUL"
    estado23:
      id: 23
      sigla: "RO"
      nome: "RONDÔNIA"
    estado24:
      id: 24
      sigla: "TO"
      nome: "TOCANTINS"
    estado25:
      id: 25
      sigla: "SC"
      nome: "SANTA CATARINA"
    estado26:
      id: 26
      sigla: "SP"
      nome: "SÃO PAULO"
    estado27:
      id: 27
      sigla: "SE"
      nome: "SERGIPE"

```

Você poderá encontrar mais exemplos (além da documentação completa de Fakes Data) no repositório [nelmio/alice](https://github.com/nelmio/alice).

[Voltar para a Configuração](configuracao.md) - [Ver a Execução](execucao.md)
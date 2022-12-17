from random import randint


class Agencia:

    def __init__(self, telefone, cnpj, numero):
        self.telefone = telefone 
        self.cnpj = cnpj
        self.numero = numero
        self.clientes = []
        self.caixa = 0
        self.emprestimos = []

    def verificar_caixa(self):
        if self.caixa < 1000000:
            print('Caixa abaixo do nível recomendado. Caixa atual: {}'.format(self.caixa))
        else:
            print('O valor do caixa está ok. Caixa atual: {}'.format(self.caixa))

    def emprestar_dinheiro(self, valor, cpf, juros):
        if self.caixa > valor:
            self.emprestimos.append((valor, cpf, juros))
        else: 
            print('Não é possível realizar o empréstimo. Não há dinheiro em caixa')

    def adicionar_cliente(self, nome, cpf, patrimonio):
        self.clientes.append((nome, cpf, patrimonio))

########Subclasses########
class AgenciaVirtual(Agencia):

    def __init__(self, site, telefone, cnpj):
        self.site = site
        super().__init__(telefone, cnpj, 1000)
        self.caixa = 1000000
        self.caixa_paypal = 0

    def depositar_paypal(self, valor):
        self.caixa -= valor 
        self.caixa_paypal += valor 

    def sacar_paypal(self, valor):
        self.caixa_paypal -= valor 
        self.caixa_paypal += valor 

    
class AgenciaComum(Agencia):

    def __init__(self, telefone, cnpj):
        super().__init__(telefone, cnpj, numero = randint(1001, 9999))
        self.caixa = 1000000

class AgenciaPremium(Agencia):

    def __init__(self, telefone, cnpj):
        super().__init__(telefone, cnpj, numero = randint(1001, 9999))
        self.caixa = 10000000

    def adicionar_cliente(self, nome, cpf, patrimonio):
        if patrimonio > 1000000:
            super().adicionar_cliente(nome, cpf, patrimonio)
        else:
            print("O cliente não possui o patrimônio mínimo necessário para entrar na Agência")




agencia1 = Agencia(454545, 45454455, 4544)
agencia_virtual = AgenciaVirtual('siteagenciavirtual.com.br', 2222, 444444)
agencia_comum = AgenciaComum(121212, 45454454)
agencia_premium = AgenciaPremium(1511, 10)


agencia_virtual.depositar_paypal(2000)
print(agencia_virtual.caixa)
print(agencia_virtual.caixa_paypal)
print("\n")

agencia_premium.adicionar_cliente('Afonso', 45444545, 10000000)
print(agencia_premium.clientes)
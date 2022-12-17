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
            print('O valor do caixa está ok {}'.format(self.caixa))

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

    


class AgenciaComum(Agencia):

    pass


class AgenciaPremium(Agencia):

    pass




agencia1 = Agencia(454545, 45454455, 4544)
agencia_virtual = AgenciaVirtual('siteagenciavirtual.com.br', 2222, 444444)


agencia_virtual.verificar_caixa()
print(agencia_virtual.site)
print(agencia_virtual.cnpj)
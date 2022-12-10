class ContaCorrente:

    def __init__(self, nome, cpf):
        """Inicialização da classe"""
        self.nome = nome
        self.cpf = cpf 
        self.saldo = 0
    
    def consultar_saldo(self):
        """Consulta o valor do saldo"""
        print("O saldo atual é de: R$ {:,.2f}".format(self.saldo))

    def depositar(self, valor):
        """Deposita um valor na conta"""
        self.saldo += valor

    def sacar(self, valor):
        """Retira um valor da conta"""
        self.saldo -= valor

    
#Programa
print("Criando conta")
conta_Afonso = ContaCorrente("Afonso", "1212447787")
print("Nome: ",conta_Afonso.nome)
print("CPF: ",conta_Afonso.cpf)
conta_Afonso.consultar_saldo()


#Depositando dinheiro na conta
print("\nDepositando")
conta_Afonso.depositar(10000)
conta_Afonso.consultar_saldo()


#Retirando dinheiro
print("\nSacando")
conta_Afonso.sacar(1210)
conta_Afonso.consultar_saldo()
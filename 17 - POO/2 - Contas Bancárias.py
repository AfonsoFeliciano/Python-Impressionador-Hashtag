class ContaCorrente:

    def __init__(self, nome, cpf):
        """Inicialização da classe"""
        self.nome = nome
        self.cpf = cpf 
        self.saldo = 0
        self.limite = None
    
    def consultar_saldo(self):
        """Consulta o valor do saldo"""
        print("O saldo atual é de: R$ {:,.2f}".format(self.saldo))

    def depositar(self, valor):
        """Deposita um valor na conta"""
        self.saldo += valor

    def _definir_limite_conta(self):
        """Define o limite da conta. Método privado"""
        self.limite = -1000
        return self.limite

    def sacar(self, valor):
        """Retira um valor da conta"""
        if self.saldo - valor < self._definir_limite_conta():
            print("O seu saldo é insuficiente para o saque informado")
            self.consultar_saldo()
        else:
            self.saldo -= valor
    
    def consulta_limite_conta(self):
        print("O seu limite de cheque especial é de {}".format(self._definir_limite_conta()))

    
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
conta_Afonso.sacar(10500)
conta_Afonso.consultar_saldo()

#Consultando limite da conta
conta_Afonso.consulta_limite_conta()


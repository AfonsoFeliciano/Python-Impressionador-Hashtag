from datetime import datetime
import pytz


class ContaCorrente:

    @staticmethod
    def _data_hora():
        """Retorna a data e hora atual"""
        fuso_BR = pytz.timezone("Brazil/East")
        horario_BR = datetime.now(fuso_BR)
        return horario_BR.strftime('%d/%m/%Y %H:%M:%S')

    def __init__(self, nome, cpf, agencia, conta):
        """Inicialização da classe"""
        self._nome = nome
        self._cpf = cpf 
        self._saldo = 0
        self._limite = None
        self._agencia = agencia
        self._conta = conta
        self._transacoes = []
    
    def consultar_saldo(self):
        """Consulta o valor do saldo"""
        print("O saldo atual é de: R$ {:,.2f}".format(self._saldo))

    def depositar(self, valor):
        """Deposita um valor na conta"""
        self._saldo += valor
        self._transacoes.append((valor, self._saldo, ContaCorrente._data_hora()))

    def _definir_limite_conta(self):
        """Define o limite da conta. Método privado"""
        self._limite = -1000
        return self._limite

    def sacar(self, valor):
        """Retira um valor da conta"""
        if self._saldo - valor < self._definir_limite_conta():
            print("O seu saldo é insuficiente para o saque informado")
            self.consultar_saldo()
        else:
            self._saldo -= valor
            self._transacoes.append((-valor, self._saldo, ContaCorrente._data_hora()))
    
    def consulta_limite_conta(self):
        """Retorna o limite em cheque especial"""
        print("O seu limite de cheque especial é de {}".format(self._definir_limite_conta()))

    def consultar_historico_transacoes(self):
        """Consulta o histórico de transações"""
        print("Histórico de transações")
        print("Valor, Saldo, Data e Hora")
        for transacao in self._transacoes:
            print(transacao)

    def transferir(self, valor, conta_destino):
        """Realiza transferência entre contas"""
        self._saldo -= valor
        self._transacoes.append((-valor, self._saldo, ContaCorrente._data_hora()))
        conta_destino._saldo += valor
        conta_destino._transacoes.append((valor, conta_destino._saldo, ContaCorrente._data_hora()))
    
#Programa
print("Criando conta")
conta_Afonso = ContaCorrente("Afonso", "1212447787", "01212", "4544")
conta_Mae_Afonso = ContaCorrente("Maria", "4545471", "121244", "12121")
print("Nome: ",conta_Afonso._nome)
print("CPF: ",conta_Afonso._cpf)
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

print("\n")
conta_Afonso.consultar_historico_transacoes()

print("Transferir")
conta_Afonso.transferir(500, conta_Mae_Afonso)

conta_Afonso.consultar_saldo()
conta_Mae_Afonso.consultar_saldo()

conta_Afonso.consultar_historico_transacoes()
conta_Mae_Afonso.consultar_historico_transacoes()
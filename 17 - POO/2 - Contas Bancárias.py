from datetime import datetime
from random import randint
import pytz


class ContaCorrente:
    """
    
    Cria um objeto ContaCorrente para gerenciar as contas dos clientes.

    Atributos:
        nome (str): Nome do cliente
        cpf (str): CPF do cliente
        agencia (str): Agência responsável pela conta do cliente
        num_conta (str): Número da conta do cliente
        saldo (float): Saldo disponível na conta do cliente
        limite (float): Limite de cheque especial do cliente
        transacoes (list): Histórico de transações do cliente
    
    """

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
        self.cartoes = []
    
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

class CartaoCredito:

    @staticmethod
    def _data_hora():
        """Retorna a data e hora atual"""
        fuso_BR = pytz.timezone("Brazil/East")
        horario_BR = datetime.now(fuso_BR)
        return horario_BR

    def __init__(self, titular, conta_corrente):
        self.numero = randint(1000000000000000, 9999999999999999)
        self.titular = titular
        self.validade = '{}/{}'.format(CartaoCredito._data_hora().month, CartaoCredito._data_hora().year + 4)
        self.codigo_seguranca = '{}{}{}'.format(randint(0, 9), randint(0, 9), randint(0, 9))
        self.limite = 1000
        self.conta_corrente = conta_corrente
        conta_corrente.cartoes.append(self)





    
    
#Programa
print("Criando conta")
conta_Afonso = ContaCorrente("Afonso", "1212447787", "01212", "4544")

print("Criando cartão de crédito")
cartao_afonso = CartaoCredito("Afonso", conta_Afonso)
print(cartao_afonso.conta_corrente._conta)
print(cartao_afonso.codigo_seguranca)





"""conta_Mae_Afonso = ContaCorrente("Maria", "4545471", "121244", "12121")
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

help(ContaCorrente)"""
from ContasBancarias import ContaCorrente, CartaoCredito
from Agencia import AgenciaComum, AgenciaPremium, AgenciaVirtual


if __name__ == '__main__':

    #Programa
    print("Criando conta \n")
    conta_Afonso = ContaCorrente("Afonso", "1212447787", "01212", "4544")

    print("Criando cartão de crédito")
    cartao_afonso = CartaoCredito("Afonso", conta_Afonso)

    print("Modificando senha \n")
    cartao_afonso.senha = '1345'
    print(cartao_afonso.senha)

    print("Consultando todos os atributos da classe \n")
    print(conta_Afonso.__dict__)



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
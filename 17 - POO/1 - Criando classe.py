

class TV:

    def __init__(self, cor, ligada, canal, tamanho, volume):
        """Cria uma TV com os parâmetros"""
        self.cor = cor
        self.ligada = ligada
        self.tamanho = tamanho
        self.canal = canal
        self.volume = volume
    
    def mudar_canal(self, novo_canal):
        """Muda o canal da tv"""
        self.canal = novo_canal
        print("Canal alterado para {}".format(novo_canal))
        
#Criando os objetos
tv_sala = TV(cor="Verde", ligada=True, canal="Globo", tamanho=27, volume=15)
tv_quarto = TV(cor="Preta", ligada=False, canal="SBT", tamanho=35, volume=30)


#Mudando propriedade de um objeto
tv_sala.cor = 'branca'

print("Cor tv sala: ",tv_sala.cor)
print("Cor tv quarto: ", tv_quarto.cor)
print("######")

#Mudando propriedade de um objeto utilizando um método
print("Canal da tv sala:", tv_sala.canal)
tv_sala.mudar_canal("Disney Plus")
print("Canal da tv sala após mudar canal:", tv_sala.canal)

    
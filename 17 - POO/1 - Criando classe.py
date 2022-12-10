

class TV:

    def __init__(self):
        self.cor = 'preta'
        self.ligada = False
        self.tamanho = 55
        self.canal = 'SBT'
        self.volume = 10
    
    def mudar_canal(self, novo_canal):
        """Muda o canal da tv"""
        self.canal = novo_canal
        print("Canal alterado para {}".format(novo_canal))
        

tv_sala = TV()
tv_quarto = TV()


tv_sala.cor = 'branca'

print("Cor tv sala: ",tv_sala.cor)
print("Cor tv quarto: ", tv_quarto.cor)
print("######")

print("Canal da tv sala:", tv_sala.canal)
tv_sala.mudar_canal("Disney Plus")
print("Canal da tv sala após mudar canal:", tv_sala.canal)

    
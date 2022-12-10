

class TV:

    def __init__(self):
        self.cor = 'preta'
        self.ligada = False
        self.tamanho = 55
        self.canal = 'SBT'
        self.volume = 10
    
    def ligar_tv():
        

tv_sala = TV()
tv_quarto = TV()


tv_sala.cor = 'branca'

print("Cor tv sala: ",tv_sala.cor)
print("Cor tv quarto: ", tv_quarto.cor)
    
    
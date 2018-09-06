
# Client TCP en python
# STEPHANE THOIRON
# L1 - IED - V2 - CHAPITRE 7 - COURS RESEAU -  
# Sources : https://openclassrooms.com/fr/courses/235344-apprenez-a-programmer-en-python/234698-le-reseau



import socket # Module socket


hote = "127.0.0.1"  # Adresse locale

port = 12800 # Port de scrutation pour la soket 


connexion_avec_serveur = socket.socket(socket.AF_INET, socket.SOCK_STREAM)   # AF_NET : famille d'adresse / SOCK_STREAM : protocole TCP

connexion_avec_serveur.connect((hote, port)) # Connexion au serveur via la méthode BIND

print("Connexion établie avec le serveur sur le port {}".format(port)) # Affiche le numéro du port sur lequel le client est connecté


msg_a_envoyer = b"" # 

while msg_a_envoyer != b"fin": # Boucle 

    msg_a_envoyer = input("> ")

    # Peut planter si vous tapez des caractères spéciaux

    msg_a_envoyer = msg_a_envoyer.encode()

    # On envoie le message

    connexion_avec_serveur.send(msg_a_envoyer)

    msg_recu = connexion_avec_serveur.recv(1024)

    print(msg_recu.decode()) # Là encore, peut planter s'il y a des accents


print("Fermeture de la connexion")

connexion_avec_serveur.close()

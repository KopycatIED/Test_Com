import socket

def Main():
    host = '' # Mettre ' ' lors des tests en externe 
    port = 5000

    s = socket.socket()
    s.bind((host, port))
    
    c
    s.listen(1)
    
    addr = s.accept()
    print ("Connection from: " + str(addr))
    while True:
        data = c.recv(1024)
        if not data:
            break
        print ("from connected user: " + str(data))
        data = str(data).upper()
        print ("sending: " + str(data))
        if data == "BONJOUR":
            c.send("bonsoir")
        else :
            c.send(data)
    c.close()

if __name__ == '__main__': 
    Main()


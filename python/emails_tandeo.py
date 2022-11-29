import requests
import json

def send_mails():
    # table = input("Digita la Tabla: ")

    # INICIO DE LAS CONFIGURACIONES Y DATOS DEL API
    url = f"http://localhost/vento-mailer/public/api/count"

    headers = {
    	"Content-Type": "application/json"
    }

    table = "users"

    data_api = json.dumps({"table": table})
    # FIN DE LAS CONFIGURACIONES Y DATOS DEL API

    # ENVIO DE LA PETICIÓN HTTP
    response = requests.post(url, headers=headers, data=data_api)

    # DATOS CON LA RESPUESTA DEL API 
    data = response.json()

    print("")
    if response.status_code == 200:
        # ENDPOINT
        url = f"http://localhost/vento-mailer/public/api/send"

        count = data['count']
        if count < 500:
            tanda = 5
        else :
            tanda = 500

        begin = 0
        end = begin + tanda

        total_tandeo = int(count / tanda)

        for x in range(total_tandeo):
            # ENVIAR TABLA, INDICES DE LA PETICIÓN
            data_api = json.dumps({'table': table, 'index_init': begin, 'index_end': end})

            # ENVIO DE LA PETICIÓN POST
            response = requests.post(url, headers=headers, data=data_api)

            # RESPUESTA DEL API
            data = response.json()
            print(f"TANDEO #{x} => {data['init']} -- {data['end']}")

            begin = end
            end = end + tanda

        if count%tanda != 0:
            begin = end - tanda
            end = (end - tanda) + count%tanda

            # ENVIAR TABLA, INDICES DE LA PETICIÓN
            data_api = json.dumps({'table': table, 'index_init': begin, 'index_end': end})

            # ENVIO DE LA PETICIÓN POST
            response = requests.post(url, headers=headers, data=data_api)

            # RESPUESTA DEL API
            data = response.json()
            print(f"TANDEO FINAL => {data['init']} -- {data['end']}")
    else:
        print(f"Error: {data['msg']}")

    print("")

if __name__ == '__main__':
    send_mails()
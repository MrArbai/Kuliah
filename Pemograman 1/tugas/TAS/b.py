import pyodbc
from deep_translator import (GoogleTranslator,
                             PonsTranslator,
                             LingueeTranslator,
                             MyMemoryTranslator,
                             YandexTranslator)
# konfigurasi koneksi ke SQL Server
server = '192.168.2.3'
database = 'MYPSG'
username = 'appkoneksi'
password = 'app@1psg'

# membuat koneksi ke SQL Server
cnxn = pyodbc.connect('DRIVER={ODBC Driver 17 for SQL Server};SERVER='+server+';DATABASE='+database+';UID='+username+';PWD='+password)

# membuat cursor
cursor = cnxn.cursor()

# eksekusi query
cursor.execute("SELECT PORef,PORemarks1,poremarkeng FROM MYPSG..tblTrnPOHdr WHERE Translate = 1 AND PORef = 55003")

# mengambil semua data dari tabel
rows = cursor.fetchall()
langs_list = GoogleTranslator.get_supported_languages(as_dict=True)
print(langs_list)


# menampilkan data
for row in rows:
    translated = GoogleTranslator('en', 'id').translate_batch(row.poremarkeng)
    print(translated)

# menutup koneksi
cursor.close()
cnxn.close()

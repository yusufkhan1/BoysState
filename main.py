from json import load, loads
import mysql.connector

config = {
  'user': 'scott',
  'password': 'password',
  'host': '127.0.0.1',
  'database': 'employees',
  'raise_on_warnings': True,
}

cnx = mysql.connector.connect(**config)

cursor = cnx.cursor()

query = ("SELECT first_name, last_name, hire_date FROM employees "
         "WHERE hire_date BETWEEN %s AND %s")

hire_start = datetime.date(1999, 1, 1)
hire_end = datetime.date(1999, 12, 31)

cursor.execute(query, (hire_start, hire_end))

cursor.clos()
cnx.close()

# For rquest to /query expect a json object that references a dict key: sql field, value: typed request
# Return Ordered list of full entires
# Display Stater id, first, last, hometown, Boys' State Year

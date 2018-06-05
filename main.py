import input
from json import load, loads

query_params = input("Enter comma dilentiated list of params:")

print(loads(query_params))

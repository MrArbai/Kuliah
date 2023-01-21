from prettytable import PrettyTable
from tabulate import tabulate

x = PrettyTable()

x.field_names = ["Nama", "Usia", "Kota"]
x.add_row(["John", 30, "New York"])
x.add_row(["Bob", 35, "Chicago"])
x.add_row(["Charlie", 40, "Los Angeles"])

print(x)

data = [["John", 30, "New York"],
        ["Bob", 35, "Chicago"],
        ["Charlie", 40, "Los Angeles"]]
headers = ["Nama", "Usia", "Kota"]

print(tabulate(data, headers, tablefmt="fancy_grid"))

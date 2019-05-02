#!/usr/bin/env python2.7

import xlrd
import MySQLdb
import datetime


# Open the workbook and define the worksheet
book = xlrd.open_workbook("data.xlsx")
sheet = book.sheet_by_name("Sheet1")

# Establish a MySQL connection
database = MySQLdb.connect (host="localhost", user = "root", passwd = "", db = "helpdesk")

# Get the cursor, which is used to traverse the database, line by line
cursor = database.cursor()

# Create the INSERT INTO sql query
query = """INSERT INTO tickets(tkt_id,Name, Email, Mobile, Subject, Message) VALUES (%s,%s, %s, %s, %s, %s)"""

# Create a For loop to iterate through each row in the XLS file, starting at row 2 to skip the headers
for r in range(1, sheet.nrows):
		NAME = sheet.cell(r,0).value
		EMAIL = sheet.cell(r,1).value
		MOBILE = sheet.cell(r,2).value
		SUBJECT = sheet.cell(r,3).value
		MESSAGE	= sheet.cell(r,4).value

		first = str(datetime.datetime.utcnow().replace(microsecond=0))
		final = first.replace('-','').replace(':','').replace(' ','-')
		uid = "TKT-"+final


		# Assign values from each row
		values = (uid,NAME,EMAIL,MOBILE,SUBJECT,MESSAGE)

		# Execute sql Query
		cursor.execute(query, values)

# Close the cursor
cursor.close()

# Commit the transaction
database.commit()

# Close the database connection
database.close()

# Print results
print (" ")
print ("All Done! Bye, for now.")
print ("")
columns = str(sheet.ncols)
rows = str(sheet.nrows)

# import mysql.connector
import pandas as pd
from sqlalchemy import create_engine

# Creating a dataframes from the respective csv files 

books_df = pd.read_excel("books.xlsx")
borrows_df = pd.read_csv("borrows.csv")
libarians_df = pd.read_csv("librarians.csv")
catalog_df = pd.read_excel("catalog.xlsx")
libariansType_df = pd.read_csv("Librarians_type.csv")
members_df = pd.read_csv("Members.csv")
membersType_df = pd.read_csv("Members_type.csv")
returns_df = pd.read_csv("returns.csv")

# Create Engine to connect to local lost using MYSQLconnector and sqlalchemy

engine = create_engine("mysql+mysqlconnector://root:@localhost/library")

# Loading the dataframes to respective tables already created in MYSQL

# books_df.to_sql(name = "books",con=engine, if_exists = 'replace', index = False)
# borrows_df.to_sql(name = "borrows",con = engine, if_exists= 'replace', index=False)
# libarians_df.to_sql(name = "librarians",con = engine, if_exists= 'replace', index=False)
# libariansType_df.to_sql(name = "librarians_type", con = engine, if_exists="replace", index=False)
# members_df.to_sql(name = "members",con = engine, if_exists= 'replace', index=False)
# membersType_df.to_sql(name = "members_type",con = engine, if_exists= 'replace', index=False)
# returns_df.to_sql(name = "returns",con = engine, if_exists= 'replace', index=False)
# print(books_df)
# ,
catalog_df.to_sql(name = "catalog",con = engine, if_exists= 'replace', index=False)
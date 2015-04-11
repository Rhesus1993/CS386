Create Table SoftwareE_User(
	User_ID number(5) Constraint SE_User_PK Primary Key DEFERRABLE INITIALLY IMMEDIATE,
	User_FName varchar2(10) Constraint SE_User_FName_NN Not Null DEFERRABLE INITIALLY IMMEDIATE,
	User_LName varchar2(10) Constraint SE_User_LName_NN Not Null DEFERRABLE INITIALLY IMMEDIATE,
	User_Status varchar2(10) Constraint SE_User_Status_NN Not Null DEFERRABLE INITIALLY IMMEDIATE,
	Position_Code number(4) Constraint SE_UPosition_Code_NN Not Null DEFERRABLE INITIALLY IMMEDIATE
);

Alter Table SoftwareE_User Add Constraint Position_FK Foreign Key(Position_Code) References SoftwareE_Position(Position_Code) DEFERRABLE INITIALLY IMMEDIATE;
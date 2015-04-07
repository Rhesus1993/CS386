Create Table SoftwareE_User(
	User_ID number(5) Constraint User_PK Primary Key DEFERRABLE INITIALLY IMMEDIATE,
	User_FName varchar2(10) Constraint User_FName_NN Not Null DEFERRABLE INITIALLY IMMEDIATE,
	User_LName varchar2(10) Constraint User_LName_NN Not Null DEFERRABLE INITIALLY IMMEDIATE,
	User_Status varchar2(10) Constraint User_Status_NN Not Null DEFERRABLE INITIALLY IMMEDIATE,
	Position_Code number(4) Constraint UPosition_Code_NN Not Null DEFERRABLE INITIALLY IMMEDIATE
);

Create Table SoftwareE_Position(
	Position_Code number(4) Constraint Position_PK Primary Key DEFERRABLE INITIALLY IMMEDIATE,
	Position_Title varchar2(10) Constraint User_FName_NN Not Null DEFERRABLE INITIALLY IMMEDIATE,
	Privilege int Constraint User_FName_NN Not Null DEFERRABLE INITIALLY IMMEDIATE
);

Create Table SoftwareE_Assigned_Review(
	Review_ID number(4) Constraint AReview_ID_PK Primary Key DEFERRABLE INITIALLY IMMEDIATE,
	User_ID number(5) Constraint AUser_ID_PK Primary Key DEFERRABLE INITIALLY IMMEDIATE
);

Create Table SoftwareE_Review(
	Review_ID number(4) auto_increment Constraint Review_ID_PK Primary Key DEFERRABLE INITIALLY IMMEDIATE,
	Review_Flag varchar2(10) Constraint User_FName_NN Not Null DEFERRABLE INITIALLY IMMEDIATE,
	Leadership_Ability int Constraint User_FName_NN Not Null DEFERRABLE INITIALLY IMMEDIATE, 
	Follow_Directions int Constraint User_FName_NN Not Null DEFERRABLE INITIALLY IMMEDIATE,
	Gen_Contributions varchar2(250) Constraint User_FName_NN Not Null DEFERRABLE INITIALLY IMMEDIATE,
	Technical_ability int Constraint User_FName_NN Not Null DEFERRABLE INITIALLY IMMEDIATE,
	Creativity int Constraint User_FName_NN Not Null DEFERRABLE INITIALLY IMMEDIATE,
	Punctionality int Constraint User_FName_NN Not Null DEFERRABLE INITIALLY IMMEDIATE,
	Availability int Constraint User_FName_NN Not Null DEFERRABLE INITIALLY IMMEDIATE,
	Attentiveness int Constraint User_FName_NN Not Null DEFERRABLE INITIALLY IMMEDIATE,
	Comments varchar2(250),
	Work_in_Groups int Constraint User_FName_NN Not Null DEFERRABLE INITIALLY IMMEDIATE,
	About_User_ID number(5),
	From_User_ID number(5)
);

Alter Table SoftwareE_User Add Constraint Position_FK Foreign Key(Position_Code) References SoftwareE_Position(Position_Code) DEFERRABLE INITIALLY IMMEDIATE;
Alter Table SoftwareE_Review Add Constraint About_User_ID_FK Foreign Key(About_User_ID) References SoftwareE_User(User_ID) DEFERRABLE INITIALLY IMMEDIATE;
Alter Table SoftwareE_Review Add Constraint From_User_ID_FK Foreign Key(From_User_ID) References SoftwareE_User(User_ID) DEFERRABLE INITIALLY IMMEDIATE;
Alter Table SoftwareE_Assigned_Review Add Constraint AReview_ID_FK Foreign Key(Review_ID) References SoftwareE_Review(Review_ID) DEFERRABLE INITIALLY IMMEDIATE;
Alter Table SoftwareE_Assigned_Review Add Constraint AUser_ID_FK Foreign Key(User_ID) References SoftwareE_User(User_ID) DEFERRABLE INITIALLY IMMEDIATE;


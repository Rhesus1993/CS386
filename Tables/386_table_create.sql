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

Create Table SoftwareE_Review(
	Review_ID number(4) auto_increment Constraint Review_ID_PK Primary Key DEFERRABLE INITIALLY IMMEDIATE,
	Review_Flag varchar2(10) Constraint Review_Flag_NN Not Null DEFERRABLE INITIALLY IMMEDIATE,
	Leadership_Ability int Constraint Leadership_Ability_NN Not Null DEFERRABLE INITIALLY IMMEDIATE, 
	Follow_Directions int Constraint Follow_Directions_NN Not Null DEFERRABLE INITIALLY IMMEDIATE,
	Gen_Contributions varchar2(250) Constraint Gen_Contributions_NN Not Null DEFERRABLE INITIALLY IMMEDIATE,
	Technical_ability int Constraint Technical_ability_NN Not Null DEFERRABLE INITIALLY IMMEDIATE,
	Creativity int Constraint Creativity_NN Not Null DEFERRABLE INITIALLY IMMEDIATE,
	Punctionality int Constraint Punctionality_NN Not Null DEFERRABLE INITIALLY IMMEDIATE,
	Availability int Constraint Availability_NN Not Null DEFERRABLE INITIALLY IMMEDIATE,
	Attentiveness int Constraint Attentiveness_NN Not Null DEFERRABLE INITIALLY IMMEDIATE,
	Comments varchar2(250),
	Work_in_Groups int Constraint Work_in_Groups_NN Not Null DEFERRABLE INITIALLY IMMEDIATE,
	About_User_ID number(5),
	From_User_ID number(5)
);

Create Table SoftwareE_Assigned_Review(
	Review_ID number(4),
	User_ID number(5)
);

Alter Table SoftwareE_User Add Constraint SPosition_FK Foreign Key(Position_Code) References SoftwareE_Position(Position_Code) DEFERRABLE INITIALLY IMMEDIATE;
Alter Table SoftwareE_Review Add Constraint SE_About_User_ID_FK Foreign Key(About_User_ID) References SoftwareE_User(User_ID) DEFERRABLE INITIALLY IMMEDIATE;
Alter Table SoftwareE_Review Add Constraint SE_From_User_ID_FK Foreign Key(From_User_ID) References SoftwareE_User(User_ID) DEFERRABLE INITIALLY IMMEDIATE;
Alter Table SoftwareE_Assigned_Review Add CONSTRAINT SE_AReview_CK PRIMARY KEY(Review_ID, User_ID) DEFERRABLE INITIALLY IMMEDIATE;
Alter Table SoftwareE_Assigned_Review Add Constraint SE_AReview_ID_FK Foreign Key(Review_ID) References SoftwareE_Review(Review_ID) DEFERRABLE INITIALLY IMMEDIATE;
Alter Table SoftwareE_Assigned_Review Add Constraint SE_AUser_ID_FK Foreign Key(User_ID) References SoftwareE_User(User_ID) DEFERRABLE INITIALLY IMMEDIATE;


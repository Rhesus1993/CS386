Create Table SoftwareE_Assigned_Review(
	Review_ID number(4),
	User_ID number(5)
);

Alter Table SoftwareE_Assigned_Review Add CONSTRAINT SE_AReview_CK PRIMARY KEY(Review_ID, User_ID) DEFERRABLE INITIALLY IMMEDIATE;
Alter Table SoftwareE_Assigned_Review Add Constraint SE_AReview_ID_FK Foreign Key(Review_ID) References SoftwareE_Review(Review_ID) DEFERRABLE INITIALLY IMMEDIATE;
Alter Table SoftwareE_Assigned_Review Add Constraint SE_AUser_ID_FK Foreign Key(User_ID) References SoftwareE_User(User_ID) DEFERRABLE INITIALLY IMMEDIATE;
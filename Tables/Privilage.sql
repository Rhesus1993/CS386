Create Table SoftwareE_Position(
	Position_Code number(4) Constraint SE_Position_Code_PK Primary Key DEFERRABLE INITIALLY IMMEDIATE,
	Position_Title varchar2(10) Constraint SE_Position_Title_NN Not Null DEFERRABLE INITIALLY IMMEDIATE,
	Privilege int Constraint SE_Position_Privilage_NN Not Null DEFERRABLE INITIALLY IMMEDIATE
);
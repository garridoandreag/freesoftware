CREATE DEFINER=`root`@`localhost` FUNCTION `getComplaintCode`(pdepartmend_id INT, ptown_id INT, pcreated_at TIMESTAMP) RETURNS varchar(45) CHARSET utf8mb4 COLLATE utf8mb4_unicode_ci
BEGIN

DECLARE vdepartment VARCHAR(5);
DECLARE vcode VARCHAR(25);

SET vdepartment = (SELECT department.code FROM department WHERE department.id = pdepartmend_id);
SET vcode = CONCAT(vdepartment,
					lpad(ptown_id,2,0),
                    year(pcreated_at),
                    lpad(month(pcreated_at),2,0),
                    lpad(day(pcreated_at),2,0),
                    lpad(hour(pcreated_at),2,0),
                    lpad(minute(pcreated_at),2,0),
                    lpad(second(pcreated_at),2,0));

RETURN vcode;
END
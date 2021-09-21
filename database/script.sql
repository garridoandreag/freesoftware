use freesoftwaredb

alter table region AUTO_INCREMENT=1;

ALTER TABLE `department` 
CHANGE `created_at` `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
CHANGE `updated_at` `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP;




SELECT CONCAT(department.code,
lpad(complaint.town_id,2,0),
year(complaint.created_at),
lpad(month(complaint.created_at),2,0),
lpad(day(complaint.created_at),2,0),
lpad(hour(complaint.created_at),2,0),
lpad(minute(complaint.created_at),2,0),
lpad(second(complaint.created_at),2,0)) Codigo
FROM complaint
INNER JOIN
department
ON complaint.department_id = department.id

SELECT department_id,town_id,created_at FROM complaint WHERE id = 2

UPDATE complaint set complaint.code = (SELECT getComplaintCode(6,4,"2021-09-10 17:03:49")) 
WHERE id = 1;
UPDATE complaint set complaint.code = (SELECT getComplaintCode(8,17,"2021-09-10 17:29:22")) 
WHERE id = 2;

SELECT getComplaintCode(department_id,town_id,created_at) FROM complaint


ALTER VIEW stadistic AS(
select department_id
,department
,vendor_id
,vendor
,COUNT(id) quantity
FROM complaintview
GROUP BY department_id
,department
,vendor_id
,vendor)

SELECT d.name
,count(cw.id)
FROM department d
left JOIN complaintview cw ON cw.department_id = d.id and cw.vendor_id = 8
GROUP BY d.name

SELECT r.name
,count(cw.id)
FROM region r
left JOIN complaintview cw ON cw.region_id = r.id and cw.vendor_id = 1
GROUP BY r.name



ALTER VIEW complaintview AS(
SELECT region.name region
,region.id region_id
,department.name department
,complaint.department_id department_id
,town.name town
,complaint.town_id town_id
,vendor.name vendor
,complaint.vendor_id vendor_id
,complaint.id id
,complaint.code codigo
,complaint.summary summary
,complaint.description description
,complaint.created_at fecha
,category.name category
,complaint.category_id category_id
,complaint.status status
FROM complaint 
INNER JOIN department ON complaint.department_id = department.id
INNER JOIN vendor ON complaint.vendor_id = vendor.id
INNER JOIN town ON complaint.town_id = town.id
INNER JOIN region ON department.region_id = region.id
INNER JOIN category ON complaint.category_id = category.id
)


`freesoftwaredb`.`getComplaintCode`(<{pdepartmend_id INT}>, <{ptown_id INT}>, <{pcreated_at TIMESTAMP}>)

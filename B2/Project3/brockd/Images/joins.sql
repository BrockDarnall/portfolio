SELECT customer.fname, customer.lname, animal.name, animal.species
FROM customer
INNER JOIN animal
ON
customer.IDcustomer = animal.IDcustomer
WHERE animal.species lIKE 'horse';

SELECT customer.fname, customer.lname, animal.name, animal.species
FROM customer
INNER JOIN animal
ON
customer.IDcustomer = animal.IDcustomer
WHERE animal.species lIKE 'horse' AND animal.name LIKE 'c%';

SELECT customer.fname, customer.lname, animal.name, animal.species, animal.yearBorn
FROM customer
INNER JOIN animal
ON
customer.IDcustomer = animal.IDcustomer
WHERE animal.species lIKE 'horse' AND animal.name LIKE 'c%' AND animal.yearBorn > 2000;

SELECT customer.fname, customer.lname, animal.name, animal.species, animal.yearBorn
FROM customer
INNER JOIN animal
ON
customer.IDcustomer = animal.IDcustomer
WHERE animal.species lIKE 'horse' AND animal.name LIKE 'c%' AND animal.yearBorn > 2000;


SELECT customer.fname, customer.lname, animal.name, animal.species, animal.yearBorn, animal.gender
FROM customer
INNER JOIN animal
ON
customer.IDcustomer = animal.IDcustomer
WHERE animal.gender LIKE 'F'
ORDER BY animal.yearBorn DESC;

SELECT customer.fname AS 'Customer First Name', customer.lname AS 'Customer Last Name', animal.name AS 'Pet Name', animal.species, animal.yearBorn, animal.gender
FROM customer
INNER JOIN animal
ON
customer.IDcustomer = animal.IDcustomer
WHERE animal.gender LIKE 'F'
ORDER BY animal.yearBorn DESC;

SELECT customer.fname AS 'Customer First Name', customer.lname AS 'Customer Last Name', customer.state AS 'state', animal.species AS 'species', animal.yearBorn AS 'Year Born' , animal.gender AS 'gender'
FROM customer
INNER JOIN animal
ON
customer.IDcustomer = animal.IDcustomer
WHERE customer.state LIKE 'id'
AND animal.gender lIKE 'f'
AND animal.species like 'cat'
OR animal.species lIKE 'dog' 
ORDER BY animal.species, animal.yearBorn ASC;

--------------------------------------------------------

####################################### 3 - Table join ################################33

SELECT Orders.OrderID, Customers.CustomerName, Shippers.ShipperName
FROM ((Orders
INNER JOIN Customers ON Orders.CustomerID = Customers.CustomerID)
INNER JOIN Shippers ON Orders.ShipperID = Shippers.ShipperID);


SELECT customer.fname, customer.lname, animal.species, animal.name, diagnosis.evaluation
FROM ((customer
INNER JOIN animal ON customer.IDcustomer = animal.IDcustomer)
INNER JOIN diagnosis ON animal.IDanimal = diagnosis.IDanimal);


SELECT customer.fname, customer.lname, animal.species, animal.name, diagnosis.evaluation
FROM ((customer
INNER JOIN animal ON customer.IDcustomer = animal.IDcustomer)
INNER JOIN diagnosis ON animal.IDanimal = diagnosis.IDanimal)
WHERE animal.species lIKE 'dog';

SELECT customer.fname, animal.species, animal.name, animal.gender, diagnosis.evaluation
FROM ((customer
INNER JOIN animal ON customer.IDcustomer = animal.IDcustomer)
INNER JOIN diagnosis ON animal.IDanimal = diagnosis.IDanimal)
WHERE animal.species lIKE 'dog' AND animal.gender LIKE 'f' AND diagnosis.evaluation lIKE '%rabies%';



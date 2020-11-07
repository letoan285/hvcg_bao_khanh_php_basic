-- xampp->msql->bin
-- - open cmd
-- run: mysql -uroot -p; type password if there, enter: username=root, password='';
-- xem database: show databases;
-- chon database: use database_name;
--run: show tables--> to see all tables;
-- Tao CSDL: create database database_name;

-- 1. number , unsign// int, float, decimal, tinyint, bigint
-- 2. string, varchar(255), char, text(ko gioi han), bigtext...
-- 3. boolean, true/false
-- data == string 2020-12-12
--  show tables; to show tables in the database;
--  describe users; to see structure(scheme)

create table users(
    id int not null primary key auto_increment,
    username varchar(100) not null,
    email varchar(100) not null,
    password varchar(255) not null,
    avatar varchar(255)
);

create table products (
    id int not null primary key auto_increment,
    name varchar(255) not null,
    slug varchar(255) not null,
    description text,
    price int not null,
    image varchar(255) not null,
    category_id int not null,
    supplier_id int
);

create table categories (
    id int not null primary key auto_increment,
    name varchar(255) not null,
    slug varchar(255) not null,
    description text,
    image varchar(255) not null,
    parent_id int default(0)
);


-- // insert data to table 
INSERT INTO users(username, email, password) VALUES('admin', 'admin@gmail.com', '123456');

INSERT INTO users(username, email, password) VALUES('Toan', 'toan88@gmail.com', md5('123456')); 


-- select all from a specific table 
select * from users;

-- select specific column from a table 
select username, email from users;

-- // select with conditions
 select * from users where id = 1;
 select * from users where username = 'admin';

 insert into products(name, slug, price, category_id) values('iphone 3', 'iphone-3', 1200, 1);


 insert into products(name, slug, price, image, category_id) values('iphone 6', 'iphone-3', 1200, 'noimage', 1);

 insert into products(name, slug, price, image, category_id) values('macbook', 'mackbook', 1200, 'noimage', 2);

 insert into categories(name, slug, image) values('Mobile', 'mobile', 'Noimage');
 insert into categories(name, slug, image) values('Laptop', 'laptop', 'Noimage');

  select * from products where category_id = 1;


 insert into products(name, slug, price, image, category_id, supplier_id) values('Samsung Galaxy', 'samsung-galaxy', 1200, 'noimage', 1, 2);

 -- // update query luon luon co WHERE
update products set supplier_id = 1 where id < 5; 

-- // delete row(record) always where***
delete from products where id = 2;


 select max(price) from products;
 select max(price) as max_price from products;
  select max(price) as 'Max Price' from products;

  select *, 2*3 as stock_value from products;

  select *, price*stock as 'Total In Stock' from products;
  -- Max, min, cac ham, distinct

   select * from products group by supplier_id order by supplier_id desc; -- default should be asc

   select * from products where category_id = 1;

   select products.id as product_id, products.name as product_name, products.price, categories.id as category_id, categories.name as category_name from products join categories on products.category_id = categories.id where categories.id = 1;

   select p.id as product_id, p.name as product_name, p.price, c.id as category_id, c.name as category_name 
    from products as p join categories as c on p.category_id = c.id
    where c.id = 1;
   
   select p.id as product_id, p.name as product_name, p.price, c.id as category_id, c.name as category_name 
   from products as p left join categories as c on p.category_id = c.id 
   where c.id = 1;

   select p.id as product_id, p.name as product_name, p.price, c.id as category_id, c.name as category_name 
   from products p left join categories c on p.category_id = c.id 
   where c.id = 1;

   --- lay tat ca san pham thuoc ve nuoc my (country_id)
   country_id ==1;
   select products.* from products left join suppliers on products.supplier_id = suppliers.id 
   left join countries on suppliers.country_id = countries.id where countries.id = 1;

    select p.*, s.name as supplier_name, c.name as country_name
    from products as p left join suppliers as s on p.supplier_id = s.id 
   left join countries as c on s.country_id = c.id where c.id = 1;
   -- 20 bang

   
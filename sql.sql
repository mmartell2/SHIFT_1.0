create table shifts(sid int AUTO_INCREMENT, pname varchar(50), start_date date, start_time time, primary key(sid));

create table drop_requests(drid int AUTO_INCREMENT, sid int, explaination text, primary key(drid), foreign key(sid) references shifts(sid));

create table dept(did int AUTO_INCREMENT, dname varchar(30));

create table shift_users(uid int AUTO_INCREMENT, did int, full_name varchar(50), supervisor varchar(50), email varchar(30), username varchar(20), password varchar(20), primary key(uid), foreign key(did) references dept(did));
